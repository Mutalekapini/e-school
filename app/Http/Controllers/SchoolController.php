<?php

namespace App\Http\Controllers;

use App\Models\School;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SchoolController extends Controller
{
    /**
     * Handle a register request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'code' => 'required|string|max:255|unique:schools',
            'email' => 'required|string|max:255|unique:schools',
            'district' => 'required|string|max:255',
            'province' => 'required|string|max:255',
            'phone_number' => 'required|string|max:255',
            'verification_letter_url' => 'required|string|max:255',
        ]);

        $school = new School;
        $school->name = $request->name;
        $school->code = $request->code;
        $school->email = $request->email;
        $school->district = $request->district;
        $school->province = $request->province;
        $school->phone_number = $request->phone_number;
        $school->telephone_number = $request->telephone_number;
        $school->verification_letter_url = $request->verification_letter_url;

        $school->save();

        return response()->json(['message' => 'Successfully registered!'], 201);
    }

    /**
     * Handle a login request to the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|string',
            'code' => 'required|string',
            'password' => 'required|string',
        ]);

        $school = School::where('email', $request->email)
                        ->where('code', $request->code)
                        ->first();

        if (!$school || !Hash::check($request->password, $school->password)) {
            return response()->json(['message' => 'Unauthorized'], 401);
        }

        // Here you may want to handle session or token creation manually

        return response()->json(['message' => 'Successfully logged in!']);
    }
}
