<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\input_aspirasi;
use App\Models\penduduk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\File;
use Illuminate\Support\Facades\DB;

class PengaduanController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Halaman Users',
            'getAspiration' =>  input_aspirasi::all(),

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
    public function ceklogin(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);
 
        if (Auth::guard('admin')->attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended('admin');
        }
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
    public function search(Request $request)
    {
        $query = $request->input('q');
        $pengaduan = input_aspirasi::where('nama','LIKE','%q%')
                                    ->orWhere('nik','LIKE','%q%')
                                    ->orWhere('lokasi','LIKE','%q%')
                                    ->orWhere('keterangan','LIKE','%q%')
                                    ->orWhere('status','LIKE','%q%')
                                    ->get();

        return view('search',compact('pengaduan'));
    }
}