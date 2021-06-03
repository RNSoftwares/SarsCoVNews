<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\Access;

class AuthController extends Controller
{
    public function unauthorized() {
        return response()->json([
            'error' => 'Não Autorizado'
        ], 401);
    }

    public function register(Request $request) {
        $array = ['error' => ''];

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'cpf' => 'required|digits:11|unique:users,cpf',
            'sex' => 'required',
            'age' => 'required',
            'weight' => 'required',
            'height' => 'required',
            'city_id' => 'required',
            'state' => 'required',
            'country' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'zip_code' => 'required|digits:8',
            'email' => 'required|email|unique:accesses,email',
            'password' => 'required',
            'password_confirm' => 'required|same:password'
        ]);

        if (!$validator->fails()) {
            $name = $request->input('name');
            $cpf = $request->input('cpf');
            $sex = $request->input('sex');
            $age = $request->input('age');
            $weight = $request->input('weight');
            $height = $request->input('height');
            $city_id = $request->input('city_id');
            $phone = $request->input('phone');
            $address = $request->input('address');
            $zip_code = $request->input('zip_code');
            $email = $request->input('email');
            $password = $request->input('password');

            $hash = password_hash($password, PASSWORD_DEFAULT);

            $newUser = new User();
            $newUser->name = $name;
            $newUser->cpf = $cpf;
            $newUser->sex = $sex;
            $newUser->age = $age;
            $newUser->weight = $weight;
            $newUser->height = $height;
            $newUser->city_id = $city_id;
            $newUser->phone = $phone;
            $newUser->address = $address;
            $newUser->zip_code = $zip_code;
            $newUser->save();
            
                if ($newUser->id) {
                    $newAccess = new Access();
                    $newAccess->email = $email;
                    $newAccess->password = $hash;
                    $newAccess->user_id = $newUser->id;
                    $newAccess->save();
                }

            $token = auth()->attempt([
                'email' => $email,
                'password' => $password
            ]);

            if (!$token) {
                $array['error'] = 'Ocorreu um erro interno durante seu registro - ';

                return $array;
            }

            $array['token'] = $token;

            $user = auth()->user();
            $array['user'] = $user;

        } else {
            $array['error'] = $validator->errors()->first();

            return $array;
        }
        
        return $array;
    }

    public function login(Request $request) {
        $array = ['error' => ''];

        $validator = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required'
        ]);

        if (!$validator->fails()) {
            $email = $request->input('email');
            $password = $request->input('password');

            $token = auth()->attempt([
                'email' => $email,
                'password' => $password
            ]);

            if (!$token) {
                $array['error'] = 'E-Mail e\ou senha incorretos';

                return $array;
            }

            $array['token'] = $token;

            $user = auth()->user();
            $array['user'] = $user;

            return $array;
        } else {
            $array['error'] = $validator->errors()->first();

            return $array;
        }

        return $array;
    }

    public function validateToken() {
        $array = ['error' => ''];

        $user = auth()->user();
        $array['user'] = $user;

        return $array;
    }

    public function logout() {
        $array = ['error' => ''];

        auth()->logout();

        return $array;
    }
}
