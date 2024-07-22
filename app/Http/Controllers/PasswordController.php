<?php

namespace App\Http\Controllers;

use App\Models\Password;
use Illuminate\Http\Request;


class PasswordController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'student_id' => 'required|exists:students,id',
            'password' => 'required|min:6',
            'recovery_email' => 'required|email',
        ]);

        $password = Password::create([
            'student_id' => $request->input('student_id'),
            'password' => bcrypt($request->input('password')),
            'recovery_email' => $request->input('recovery_email'),
        ]);

        return response() -> json(['message' => 'Password created successfully', 'password' => $password], 201);
    }

    public function show($student_id)
    {
        $password = Password::where('student_id', $student_id)->first();

        if (!$password) {
            return response()->json(['error' => 'Password not found'], 404);
        }

        return response()->json(['password' => $password->password, 'recovery_email' => $password->recovery_email]);
    }
}
