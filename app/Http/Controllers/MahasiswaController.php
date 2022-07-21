<?php

namespace App\Http\Controllers;

use App\Models\mahasiswa;
use App\Models\course;
use App\Models\pembayaran;
use App\Models\learn;
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
            $count_course = DB::select("SELECT c.*,count(p.id_course) as jml
            FROM pembayaran p
            inner join course c
            on p.id_course = c.id_course
            WHERE id_mahasiswa = $data->id_mahasiswa
            GROUP BY id_mahasiswa,id_course;");
            foreach ($count_course as $key => $value) {
                // search $value->id_course in course table
                $temp = course::where('id_course', $value->id_course)->first();
                foreach ($course as $key2 => $val) {
                    if ($val['id_course'] == $temp->id_course) {
                        $course[$key2]['status'] = "true";
                    }
                }
            }
            // echo $course;
            return view('Contents.Mahasiswa.dashboard', ['data' => $data, 'course' => $course, 'count_course' => $count_course]);
        } else {
            return redirect('/mahasiswa')->with('errorLog', 'Anda harus login terlebih dahulu');
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
            return redirect('/mahasiswa')->with('errorLog', 'NIM atau PIC salah');
        }
        // return $db;
        // $db = mahasiswa::all();
        // return $db;
    }
    public function authLogout(Request $request)
    {
        $request->session()->forget(['mahasiswa', 'nim', 'pic']);
        $request->session()->flush();
        return redirect('/mahasiswa')->with('logout', 'Anda berhasil logout');
    }
    public function course($id, Request $request)
    {
        $courseSelect = course::find($id);
        $course = course::all();
        $nim = $request->session()->get('nim');
        $pic = $request->session()->get('pic');
        $data = mahasiswa::where('nim', $nim)->where('pic', $pic)->first();
        $count_course = DB::select("SELECT c.*,count(p.id_course) as jml
            FROM pembayaran p
            inner join course c
            on p.id_course = c.id_course
            WHERE id_mahasiswa = $data->id_mahasiswa
            GROUP BY id_mahasiswa,id_course;");
        // return $pic;
        return view('Contents.Mahasiswa.course', ['courseSelect' => $courseSelect, 'course' => $course, 'data' => $data, 'count_course' => $count_course]);
    }
    public function buyCourse($id, Request $request)
    {
        $pembayaran = new pembayaran;
        $nim = $request->nim;
        $pic = $request->pic;
        $data = mahasiswa::where('nim', $nim)->where('pic', $pic)->first();
        date_default_timezone_set("Asia/Jakarta");
        $date = date("Y-m-d h:i:s");

        $pembayaran->tanggal_pembayaran = $date;
        $pembayaran->id_mahasiswa = $data->id_mahasiswa;
        $pembayaran->id_course = $id;
        $pembayaran->save();
        $request->session()->flash('success', 'Task was successful!');
        return redirect('/mahasiswa/dasbor');
    }
    public function learn($id, Request $request)
    {
        $nim = $request->session()->get('nim');
        $pic = $request->session()->get('pic');
        $data = mahasiswa::where('nim', $nim)->where('pic', $pic)->first();
        $count_course = DB::select("SELECT c.*,count(p.id_course) as jml
            FROM pembayaran p
            inner join course c
            on p.id_course = c.id_course
            WHERE id_mahasiswa = $data->id_mahasiswa
            GROUP BY id_mahasiswa,id_course;");

        $learn = learn::where('id_mahasiswa', $data->id_mahasiswa)->where('id_course',$id)->get();
        // dd ($learn);
        $coureSelect = course::find($id);
        // return $learn;
        return view('Contents.Mahasiswa.learn', ['data' => $data, 'count_course' => $count_course, 'courseSelect' => $coureSelect,'learn'=>$learn]);
    }
    public function profile(Request $request)
    {
        $nim = $request->session()->get('nim');
        $pic = $request->session()->get('pic');
        $data = mahasiswa::where('nim', $nim)->where('pic', $pic)->first();
        $count_course = DB::select("SELECT c.*,count(p.id_course) as jml
            FROM pembayaran p
            inner join course c
            on p.id_course = c.id_course
            WHERE id_mahasiswa = $data->id_mahasiswa
            GROUP BY id_mahasiswa,id_course;");
        return view('Contents.Mahasiswa.profile', ['data' => $data, 'count_course' => $count_course]);
    }
    public function updateProfile(Request $request)
    {
        $nim = $request->session()->get('nim');
        $pic = $request->session()->get('pic');
        $data = mahasiswa::where('nim', $nim)->where('pic', $pic)->first();

        $phone = $request->phone;
        $email = $request->email;

        $mahasiswa = mahasiswa::find($data->id_mahasiswa);
        $mahasiswa->phone = $phone;
        $mahasiswa->email = $email;
        $mahasiswa->save();
        $request->session()->flash('profileUpdate', 'Task was successful!');
        return redirect('/mahasiswa/profile');
    }
    public function uploadProject(Request $request,$id)
    {
        $judul = $request->judul;
        $deskripsi = $request->deskripsi;
        $link_youtube = $request->link_youtube;

        $nim = $request->session()->get('nim');
        $pic = $request->session()->get('pic');
        $data = mahasiswa::where('nim', $nim)->where('pic', $pic)->first();

        $learn = new learn;
        $learn->id_mahasiswa = $data->id_mahasiswa;
        $learn->id_course = $id;
        $learn->judul = $judul;
        $learn->deskripsi = $deskripsi;
        $learn->link_youtube = $link_youtube;
        $learn->save();
        $request->session()->flash('upload', 'Task was successful!');
        return redirect('/mahasiswa/learn/'.$id);
    }
}
