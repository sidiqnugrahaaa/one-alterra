<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function signIn()
    {
        return view('sign_in');
    }

    public function authentication(Request $request)
    {
        // Validate the user
        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        // Check the user
        $user = User::where('email', $request->email)->first();
        if ($user) {
            // Check the password
            if (Hash::check($request->password, $user->password)) {
                // Create Auth() Session
                if (Auth::attempt($credentials)) {
                    $request->session()->regenerate();
                    $request->session()->put('user', $user->name);
                    $request->session()->put('email', $user->email);
                    return redirect()->intended('profile');
                }
            }
        }
        return redirect()->route('login')->with('error', 'Terdapat kesalahan pada Email atau Password.');
    }

    public function signUp()
    {
        return view('sign_up');
    }

    public function registration(Request $request)
    {
        // Validate the user
        $request->validate([
            'fullname' => 'required',
            'username' => 'required|unique:users,username',
            'email' => 'required|email|unique:users,email',
            'password' => [
                'required',
                'min:8',
            ],
            'phone_number' => 'required',
        ]);

        // Create the user
        $user = new User();
        $user->name = $request->fullname;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->phone_number = $request->phone_number;
        $user->password = Hash::make($request->password);
        $user->created_at = Carbon::now()->timezone('Asia/Jakarta');
        $user->updated_at = Carbon::now()->timezone('Asia/Jakarta');
        $user->save();

        // Redirect to sign in page if success
        return redirect()->route('login')->with('success', 'Daftar akun berhasil, silahkan Login.');
    }

    public function signOut()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
