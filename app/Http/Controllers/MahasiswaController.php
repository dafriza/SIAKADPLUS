<?php

namespace App\Http\Controllers;

use App\Models\mahasiswa;
use App\Models\course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->session()->has('mahasiswa')) {
            $nim = $request->session()->get('nim');
            $pic = $request->session()->get('pic');
            $data = mahasiswa::where('nim', $nim)->where('pic', $pic)->first();
            $course = course::all();
            $count_course = DB::select("SELECT count(id_course) as jml FROM pembayaran WHERE id_mahasiswa = 2 GROUP BY id_mahasiswa");
            return view('Contents.Mahasiswa.dashboard', ['data' => $data, 'course' => $course, 'count_course' => $count_course]);
        } else {
            return redirect('/')->with('errorLog', 'Anda harus login terlebih dahulu');
        }
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function authLoginMhs(Request $request)
    {
        $nim = $request->nim;
        $pic = $request->pic;
        $db = mahasiswa::where('nim', $nim)->where('PIC', $pic)->get();
        if (count($db) > 0) {
            $request->session()->put('mahasiswa', 'logged');
            $request->session()->put('nim', $nim);
            $request->session()->put('pic', $pic);
            return redirect('/mahasiswa/dasbor');
        } else {
            return redirect('/')->with('errorLog', 'NIM atau PIC salah');
        }
        // return $db;
        // $db = mahasiswa::all();
        // return $db;
    }
    public function authLogout(Request $request)
    {
        $request->session()->forget(['mahasiswa', 'nim', 'pic']);
        $request->session()->flush();
        return redirect('/')->with('logout', 'Anda berhasil logout');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function show(mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function edit(mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(mahasiswa $mahasiswa)
    {
        //
    }
}
