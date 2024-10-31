<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PegawaiModel;
use App\Models\UsiaPensiunModel;
use Carbon\Carbon;

class DashboardController extends Controller
{
    // public function index(){
    //     return view('dashboard');
    // }
    // public function index()
    // {

    //     $usiaPensiun = UsiaPensiunModel::first()->usia;
    //     $usiaMendekatiPensiun = $usiaPensiun - 2;
    //     $waktuSaatIni = Carbon::now();

    //     $pegawai = PegawaiModel::all()->filter(function ($pegawai) use ($waktuSaatIni, $usiaMendekatiPensiun, $usiaPensiun) {
    //         $tanggalLahir = Carbon::parse($pegawai->tanggal_lahir_pegawai);
    //         $usia = $tanggalLahir->diffInYears($waktuSaatIni);

    //         return $usia >= $usiaMendekatiPensiun && $usia < $usiaPensiun;
    //     });

    //     $counts = PegawaiModel::selectRaw('jenis_kelamin, count(*) as count')
    //         ->groupBy('jenis_kelamin')
    //         ->get()
    //         ->pluck('count', 'jenis_kelamin');

    //     return view('dashboard', compact('pegawai', 'waktuSaatIni', 'usiaPensiun', 'counts'));
    // }

    public function index()
{
    // Get the first record of UsiaPensiunModel, ensuring it exists
    $usiaPensiunModel = UsiaPensiunModel::first();

    // Check if the model is null
    if ($usiaPensiunModel) {
        $usiaPensiun = $usiaPensiunModel->usia;
    } else {
        // Handle the case when there is no record found
        $usiaPensiun = null; // Or set a default value if applicable
    }

    $usiaMendekatiPensiun = $usiaPensiun ? $usiaPensiun - 2 : null; // Check for null

    $waktuSaatIni = Carbon::now();

    $pegawai = PegawaiModel::all()->filter(function ($pegawai) use ($waktuSaatIni, $usiaMendekatiPensiun, $usiaPensiun) {
        $tanggalLahir = Carbon::parse($pegawai->tanggal_lahir_pegawai);
        $usia = $tanggalLahir->diffInYears($waktuSaatIni);

        return $usiaMendekatiPensiun !== null && $usia >= $usiaMendekatiPensiun && $usia < $usiaPensiun;
    });

    $counts = PegawaiModel::selectRaw('jenis_kelamin, count(*) as count')
        ->groupBy('jenis_kelamin')
        ->get()
        ->pluck('count', 'jenis_kelamin');

    return view('dashboard', compact('pegawai', 'waktuSaatIni', 'usiaPensiun', 'counts'));
}

}
