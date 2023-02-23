<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\input_aspirasi;
use App\Models\penduduk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index()
    {
        // $today = input_aspirasi::today();
        // $countDay = input_aspirasi::whereDate('created_at', $today)->count();

        // return $countDay;

        // $currentMonth = input_aspirasi::now()->month;

        // $countMonth = input_aspirasi::whereMonth('created_at', $currentMonth)->count();

        // return $countMonth;
        $aspirasi = DB::table('input_aspirasi')
            ->join('category', 'input_aspirasi.id_kategori', '=', 'category.id_kategori')
            ->get();

        $data = [
            'title' => 'Dashboard Admin',
            'getDataPenduduk' => penduduk::all(),
            'getTotalCategory' => category::all(),
            'getDataAspiration' => $aspirasi
            // 'getAspirationPerDay' => $countDay,
            // 'getAspirationPerMonth' => $countMonth
        ];
        return view('admin.index', compact('data'));
    }

    public function action(Request $request)
    {
        input_aspirasi::where('id_pelaporan',$request->id_pelaporan)
        ->update(['status' => $request->status]);

    }

    public function delete(Request $request)
    {
        input_aspirasi::where('id_pelaporan', $request->id_pelaporan)->delete();

        return redirect('/admin');
    }

}
