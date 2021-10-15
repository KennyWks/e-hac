<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    public function index(){
        return view('home.index', [
            'title' => 'Beranda',
            'active' => 'Beranda'
        ]);
    }

    public function login() {
        return view('user.signIn.signIn', [
            'title' => 'Masuk Akun',
            'active' => 'login'
        ]);
    }

    public function signIn(Request $request){
        $rules = [
            'email' => 'required|email:dns',
            'password' => 'required'
        ];

        $input = [
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ];

        $messages = [
            'required' => 'Kolom :attribute wajib diisi.',
            'email' => 'Domain :attribute tidak valid.',
        ];

        $validator = Validator::make($input, $rules, $messages);

        if(Auth::attempt($input)){
            $request->session()->regenerate();
            if (auth()->user()->active == 0) {
                Auth::logout();
                $request->session()->invalidate();
                $request->session()->regenerateToken();
                return redirect('/login')->with('loginError', 'Akun anda sedang tidak aktif!');
            } else {
                if(auth()->user()->role_id == 2) {
                    return redirect()->intended('/admin');
                } else {
                    return redirect()->intended('/user');
                }
            }
        }

        return redirect('/login')->withErrors($validator)->withInput()->with('loginError', 'Login Gagal!');
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
     }

     public function registerPeople(){
        $kecamatan = ['Alak', 'Kelapa Lima', 'Kota Lama', 'Kota Raja', 'Oebobo'];
        $kelurahan = ['Liliba', 'Oebobo', 'Sikumana', 'Kolhua', 'Oebufu', 'Oesapa', 'Fatululi', 'Kelapa Lima', 'Lasiana', 'Maulafa', 'Penkase Oeleta', 'Kayu Putih', 'Airnona', 'Namosain', 'Nefonaek', 'Nunhila', 'Oeba', 'Oepura', 'Oetete', 'Alak', 'Bakunase', 'Batu Plat', 'Bello', 'Fatubesi', 'Fatufeto', 'Fontein', 'Manutapen', 'Naikolan', 'Naikoten I', 'Penfui', 'Airmata', 'Bakunase II', 'Bonipoi', 'Fatukoa', 'Kuanino', 'Lai-Lai Bisi Kopan', 'Mantasi', 'Manulai II', 'Merdeka', 'Naikoten II', 'Naimata', 'Naioni', 'Nunbaun Delha', 'Nunbaun Sabu', 'Nunleu', 'Oesapa Barat', 'Oesapa Selatan', 'Pasir Panjang', 'Solor', 'Tode Kisar', 'Tuak Daun Merah (TDM)'];
        sort($kelurahan);
        return view('home.register-people', [
            'title' => 'Registrasi Penduduk',
            'active' => 'Register People',
            'kecamatan' => $kecamatan,
            'kelurahan' => $kelurahan,
        ]);
     }

}
