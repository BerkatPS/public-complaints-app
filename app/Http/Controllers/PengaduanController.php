<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\input_aspirasi;
use App\Models\penduduk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class PengaduanController extends Controller
{
    public function index(Request $request)
    {

        $search = $request->search;
        $pengaduan = input_aspirasi::where('id_pelaporan','LIKE','%'.$search.'%')->with('category')->get();
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
        // $this->validate($request,[
        //     'id',
        //     'nik',
        //     'kategori',
        //     'bukti',
        //     'lokasi',
        //     'keterangan'
        // ]); 

        // $data = penduduk::all()->where('id',$request->nik)->count();
        $newName = '';
        
        
        if($request->file('bukti')){
            $extension = $request->file('bukti')->getClientOriginalExtension();
            $newName = $request->nik.'-'.now()->timestamp.'.'.$extension;
            $request->file('bukti')->storeAs('bukti', $newName);
        }
        $request['bukti'] = $newName;
        $input_aspirasi = input_aspirasi::create($request->all());

        return redirect('/aspirasi');

       
    }
    public function destroy()
    {

    }
}