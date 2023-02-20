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
        $aspirasi = input_aspirasi::with('category')->get();

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
}
