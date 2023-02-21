<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\input_aspirasi;
use App\Models\penduduk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PengaduanController extends Controller
{
    public function index(Request $request)
    {

        $search = $request->search;
        $pengaduan = input_aspirasi::where('id_pelaporan','LIKE','%'.$search.'%')->with         ('category')->get();
        $data = [
            'title' => 'Halaman Users',
            'getAspiration' =>  input_aspirasi::all(),
            'pengaduan' => $pengaduan,

        ];
        return view('index',compact('data'));
    }
    public function aspirasi()
    {
        $aspirasi = input_aspirasi::with('category')->get();

        $data = [
            'title' => 'Halaman Form Aspirasi',
            'getAspiration' =>  $aspirasi,
            'getTotalCategory' => category::all()

        ];
        return view('aspirasi',compact('data'));
    }
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended('/admin');
        }
        return back()->with('Loginerror','Gagal Login');
    }
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();
        return redirect('/');
    }
    public function storeaspirasi(Request $request)
    {
        $this->validate($request,[
            ''
        ]); 

        $data = penduduk::all()->where('id',$request->nik)->count();

        // $TmpName = '';
        // if($request->file('images')){
        //     $extension = $request->file('images')->getClientOriginalExtension();
        //     $TmpName = $request->name.'-'.now()->timestamp.'.'.$extension;
        //     $request->file('images')->storeAs('images',$TmpName);
        // }
        // $request['bukti'] = $TmpName;
        // $input_aspirasi = input_aspirasi::create($request->all());
        // dd($input_aspirasi);
        $path = $request->file('image')->store('public/images');
        return "File uploaded successfully to $path.";

        // return redirect('/aspirasi');
    }
}