<?php

namespace App\Http\Controllers\Api;


use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends BaseController
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();


    }

    public function signup(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|string|email|unique:users',
            'password' => 'required|string|confirmed'
        ]);

        $user = new User([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);

        $user->save();

        return response()->json([
            'message' => 'Successfully created user!'
        ], 201);
    }

    public function login(Request $request)
    {
        //$request = $request->all();
        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email',
            'password' => 'required|string',
            'remember_me' => 'boolean'
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => "validation", 'validator' => $validator->errors()]);
        }

        $user = User::where("email", $request->input('email'))->first();

        if($user == null){
            return response()->json(['error' => "validation", 'message' => "Not found user by email."]);
        }

        if ( !Hash::check($request->input('password'), $user->password) ) {
            return response()->json(['error' => "validation", 'message' => "Your current password is incorrect."]);
        }

        $credentials = $request->only('email', 'password');

        if(!Auth::attempt($credentials)){
            return response()->json([
                'message' => 'Unauthorized'
            ], 401);
        }

        try {
            $token = Auth::user()->createToken(config('app.name'));
            $token->token->expires_at = $request->remember_me ?
                Carbon::now()->addMonth() :
                Carbon::now()->addDay();

            $token->token->save();
        }catch (\Exception $e){
            return response()->json(['error' => "Exception", 'message' => $e->getMessage()]);
        }




        return response()->json([
            'access_token' => $token->accessToken,
            'token_type' => 'Bearer',
            'expires_at' => Carbon::parse( $token->token->expires_at )->toDateTimeString()
        ]);
    }

    public function logout(Request $request)
    {
        $request->user()->token()->revoke();

        return response()->json([
            'message' => 'Successfully logged out'
        ]);
    }

    public function user(Request $request)
    {

        return response()->json([
            'message' => 'Successfully logged out fffffffffffffff'
        ]);
    }

}
