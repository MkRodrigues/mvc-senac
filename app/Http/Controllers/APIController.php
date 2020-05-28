<?php

namespace App\Http\Controllers;

use JWTAuth;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\JWTAuth as JWTAuthJWTAuth;

class APIController extends Controller
{
    public $loginAfterSignUp = true;

    public function login(Request $request)
    {
        $token = null;
        $campos_json = json_decode($request->getContent(), JSON_OBJECT_AS_ARRAY);
        $credenciais = [
            'email' => $campos_json['email'],
            'password' => $campos_json['password']
        ];

        try {

            if (!$token = JWTAuth::attempt($credenciais)) {
                return response()->json(['success' => false, 'message' => 'Credenciais Inválidas'], 401);
            }
        } catch (JWTException $e) {
            return response()->json(['error' => 'Token não criado'], 500);
        }

        return response()->json(['success' => true, 'token' => $token]);
    }

    public function logout(Request $request)
    {

        $this->validate($request, ['token' => 'required']);

        try {
            JWTAuth::invalidate($request->token);
            return response()->json(['success' => true, 'message' => 'Adeus :('], 200);
        } catch (JWTException $exception) {
            return response()->json(['success' => false, 'message' => 'Erro, não quero ficar sem você'], 500);
        }
    }
}
