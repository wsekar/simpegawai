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

        $usiaPensiunModel = UsiaPensiunModel::first();
        if ($usiaPensiunModel) {
            $usiaPensiun = $usiaPensiunModel->usia;
        } else {
            $usiaPensiun = null;
        }

        $usiaMendekatiPensiun = $usiaPensiun ? $usiaPensiun - 2 : null;
        $waktuSaatIni = Carbon::now();
        $pegawai = PegawaiModel::all()->filter(function ($pegawai) use ($waktuSaatIni, $usiaMendekatiPensiun, $usiaPensiun) {
            $tanggalLahir = Carbon::parse($pegawai->tanggal_lahir_pegawai);
            $usia = $tanggalLahir->diffInYears($waktuSaatIni);
            return $usiaMendekatiPensiun !== null && $usia >= $usiaMendekatiPensiun && $usia < $usiaPensiun;
        });

        $laki2 = PegawaiModel::where('jenis_kelamin', 'Laki-laki')->count();
        $perempuan = PegawaiModel::where('jenis_kelamin', 'Perempuan')->count();

        return view('dashboard', compact('pegawai', 'waktuSaatIni', 'usiaPensiun', 'laki2', 'perempuan'));
    }

    // public function index()
    // {
    //     // Get the first record of UsiaPensiunModel, ensuring it exists
    //     $usiaPensiunModel = UsiaPensiunModel::first();
    //     $usiaPensiun = $usiaPensiunModel ? $usiaPensiunModel->usia : null;
    //     $usiaMendekatiPensiun = $usiaPensiun ? $usiaPensiun - 2 : null;

    //     $waktuSaatIni = Carbon::now();

    //     // Filter employees who are nearing retirement
    //     $pegawai = PegawaiModel::all()->filter(function ($pegawai) use ($waktuSaatIni, $usiaMendekatiPensiun, $usiaPensiun) {
    //         $tanggalLahir = Carbon::parse($pegawai->tanggal_lahir_pegawai);
    //         $usia = $tanggalLahir->diffInYears($waktuSaatIni);

    //         return $usiaMendekatiPensiun !== null && $usia >= $usiaMendekatiPensiun && $usia < $usiaPensiun;
    //     });

    //     // Count employees by gender
    //     $counts = PegawaiModel::selectRaw('jenis_kelamin, count(*) as count')
    //         ->groupBy('jenis_kelamin')
    //         ->get()
    //         ->pluck('count', 'jenis_kelamin');

    //     return view('dashboard', compact('pegawai', 'waktuSaatIni', 'usiaPensiun', 'counts'));
    // }
}
