<?php

namespace App\Http\Controllers;

use illuminate\Support\Str;
use App\Http\Controllers\Controller;



class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function loginProcess()
    {
        $guard = null;
        $userid = request('userid');
        if (Str::contains($userid, '@')) {
            $field = 'email';
        } else {
            $userid = str_replace(" ", "", $userid);
            $strlen = Str::length($userid);
            if ($strlen == 17) {
                $field = 'nip';
            } else if ($strlen == 10) {
                $field = 'nim';
                $guard = 'mahasiswa';
            } else {
                $field = 'username';
            }
        }

        $credential = [
            $field => request('userid'),
            'password' => request('password')
        ];

        $req_remember = request('remember');
        $remember = (isset($req_remember)) ? true : false;

        if ($guard) {
            if (auth()->guard('mahasiswa')->attempt($credential, $remember)) {
                $user = auth()->guard('mahasiswa')->user();
                if ($user->is_alumni) return redirect('alumni/dashboard')->with('success', 'Login berhasil');
                return redirect('mahasiswa/dashboard')->with('success', 'Login berhasil');
            } else {
                return view('auth.login', ['message' => 'Login gagal, silahkan cek email dan password anda']);
            }
        } else {
            if (auth()->attempt($credential, $remember)) {
                $user = auth()->user();
                return $this->manageRedirect($user);
            } else {
                return view('auth.login', ['message' => 'Login gagal, silahkan cek email dan password anda']);
            }
        }
    }

    public function logout()
    {
        auth()->logout();

        return redirect('login');
    }

    public function manageRedirect($user)
    {
        $list_role =  $user->role;
        $firstRole = $list_role->first();
        $url = $firstRole->module->url;
        return redirect($url);
    }
}
