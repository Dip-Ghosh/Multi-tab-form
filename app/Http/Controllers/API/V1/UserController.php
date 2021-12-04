<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequestValidation;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use phpseclib3\File\ASN1\Maps\Name;

class UserController extends Controller
{



    /**
     * @param UserRequestValidation $request
     * @param Name
     * @param password
     * @param ipAddress
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\JsonResponse|\Illuminate\Http\Response
     */
    public function tokenGenerate(UserRequestValidation $request)
    {
        try {

            $header = json_encode(['typ' => 'JWT', 'alg' => 'HS256']);
            $payload = json_encode([
                'name' => $request->name,
                'password' => $request->password,
                'ip_address' => $request->ip(),
            ]);

            $base64UrlHeader = str_replace(['+', '/', '='], ['-', '_', ''], base64_encode($header));
            $base64UrlPayload = str_replace(['+', '/', '='], ['-', '_', ''], base64_encode($payload));
            $signature = hash_hmac('sha256', $base64UrlHeader . "." . $base64UrlPayload, 'abC123!', true);
            $base64UrlSignature = str_replace(['+', '/', '='], ['-', '_', ''], base64_encode($signature));

            $accessToken = $base64UrlHeader . "." . $base64UrlPayload . "." . $base64UrlSignature;
            return response([
                'headers' => [
                    'Accept' => 'application/json',
                    'api_token' => $accessToken,
                ]
            ], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function getUser(Request $request){

        if($request->header('api_token')) {
            $user = DB::table('users')->get();
            return response()->json(['user' => $user], 200);
        }
    }
}
