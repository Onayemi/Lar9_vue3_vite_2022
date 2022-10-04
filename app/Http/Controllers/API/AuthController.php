<?php

namespace App\Http\Controllers\API;

use PDF;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;


class AuthController extends Controller
{
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'c_password' => 'required|same:password',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors()
            ], 400); // 400 means bad request and 401 means unauthorized
        }
        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $user = User::create($input);

        $data = [
            'title' => 'Welcome to Remlextech.com',
            'date' => date('m/d/Y'),
            'name' => $user->name,
            'email' => $user->email
        ];
        // $pdf = PDF::loadView('pdfQrcode.myPDF', $data);
        $pdf = PDF::loadView('pdfQrcode.myPDF', $data);

        return $pdf->download(public_path('pdf').'-'.rand().'_'.time().'-'. Str::random('10').'.'.'pdf', $pdf->output());
        if($user){
            User::sendCustomerEmail($data, $pdf); //
        }
        dd('PDF Generate Successfully!');
        $success['token'] = $user->createToken('MyApp')->plainTextToken;
        $success['name'] = $user->name;
        return response()->json([
            'success' => true,
            'data' => $success,
            'message' => "User Register Successfully"
        ], 200);
    }

    public function login(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $user = $request->user();
            $success['token'] = $user->createToken('MyApp')->plainTextToken;
            $success['name'] = $user->name;

            return response()->json([
                'success' => true,
                'data' => $success,
                'message' => "User Register Successfully"
            ], 200);
        }
        return response()->json([
            'success' => false,
            'message' => "Invalid login details"
        ], 400);
    }
}
