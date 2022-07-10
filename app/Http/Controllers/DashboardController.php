<?php
namespace App\Http\Controllers;

// use App\Models\Dashboard;
use Illuminate\Database\Console\DbCommand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Models\mahasiswa;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = DB::table('mahasigit addswa')
            ->join('course', 'mahasiswa.id_course', '=', 'course.id_course')
            ->get();
            if ($request->session()->has('admin')) {
                return view('Contents.dataTable', ['data' => $data]);
            }else{
                Session::flash('error', 'Anda harus login terlebih dahulu');
                return redirect('/');
            }
        // $data = mahasiswa::first();
        // return $data->absensi->;
    }
    /**
     * Display a listing of the data Pie Chart.
     *
     * @return \Illuminate\Http\Response
     */
    public function dataChartPie()
    {
        $data = DB::table('mahasiswa')
            ->selectRaw('course.title, count(mahasiswa.id_course) as JUMLAH')
            ->join('course', 'mahasiswa.id_course', '=', 'course.id_course')
            ->groupBy('course.title')
            ->orderBy('JUMLAH', 'desc')
            ->get();
        $json = json_encode($data);
        return print_r($json, true);
        // return view('Contents.dataTable',['data'=>$data]);
    }
    /**
     * Display a listing of the data Bar Chart.
     *
     * @return \Illuminate\Http\Response
     */
    public function dataChartBar()
    {
        // $data = DB::table('pembayaran')
        // ->selectRaw('tanggal_pembayaran, count(tanggal_pembayaran) as JUMLAH')
        // ->groupByRaw('MONTH(tanggal_pembayaran)')
        // ->orderByRaw('month(tanggal_pembayaran) asc')
        // ->get();
        $data = DB::select("SELECT tanggal_pembayaran, count(tanggal_pembayaran) as JUMLAH FROM pembayaran group by extract(month from tanggal_pembayaran) ORDER by month(tanggal_pembayaran) asc;");
        $json = json_encode($data);
        return print_r($json, true);
        // return view('Contents.dataTable',['data'=>$data]);
    }
    /**
     * Display a listing of the data Course.
     *
     * @return \Illuminate\Http\Response
     */
    public function dataCourse(Request $request)
    {
        $data = DB::select('SELECT mahasiswa.nama,mahasiswa.nim,mahasiswa.studi,course.title,pembayaran.tanggal_pembayaran FROM `pembayaran` INNER JOIN mahasiswa on(mahasiswa.id_mahasiswa = pembayaran.id_mahasiswa) INNER JOIN course on(pembayaran.id_course = course.id_course)');
        if ($request->session()->has('admin')) {
            return view('Contents.dataCourse', ['data' => $data]);
        }else{
            Session::flash('error', 'Anda harus login terlebih dahulu');
            return redirect('/');
        }
    }
    /**
     * Display a listing of the data Course.
     *
     * @return \Illuminate\Http\Response
     */
    public function dataAdmin(Request $request)
    {
        $data = DB::table('admin')->get();
        if ($request->session()->has('admin')) {
            return view('Contents.dataAdmin', ['data' => $data]);
        }else{
            Session::flash('error', 'Anda harus login terlebih dahulu');
            return redirect('/');
        }
    }
    /**
     * Display a listing of the data Course.
     *
     * @return \Illuminate\Http\Response
     */
    public function getCourse()
    {
        $data = DB::table('course')->get();
        $json = json_encode($data);
        return print_r($json, true);
    }
    /**
     * Display a listing of the data Domisili.
     *
     * @return \Illuminate\Http\Response
     */
    public function getDomisili()
    {
        $data = DB::table('domisili')
            ->join('provinsi', 'domisili.id_provinsi', '=', 'provinsi.id_provinsi')
            ->join('ibukota', 'domisili.id_ibukota', '=', 'ibukota.id_ibukota')
            ->get();
        $json = json_encode($data);
        return print_r($json, true);
    }

    //Form Function//

    /**
     * Display Edit Form Page.
     *
     * @return \Illuminate\Http\Response
     */
    public function editForm(Request $request,$id)
    {
        $data = DB::table('mahasiswa')
            ->join('course', 'mahasiswa.id_course', '=', 'course.id_course')
            ->where('mahasiswa.id_mahasiswa', '=', $id)
            ->get();
            if ($request->session()->has('admin')) {
                return view('Forms.editForm', ['d' => $data]);
            }else{
                Session::flash('error', 'Anda harus login terlebih dahulu');
                return redirect('/');
            }
    }
    /**
     * Display Update Form Page.
     *
     * @return \Illuminate\Http\Response
     */
    public function updateForm(Request $request)
    {
        // query update
        DB::table('mahasiswa')
            ->join('course', 'mahasiswa.id_course', '=', 'course.id_course')
            ->where('id_mahasiswa', '=', $request->id_mahasiswa)
            ->update([
                'nama' => $request->nama,
                'nim' => $request->nim,
                'studi' => $request->studi,
                'phone' => $request->phone,
                'email_kampus' => $request->email_kampus,
                'mahasiswa.id_course' => $request->title,
            ]);
        return redirect('/dataTable');
    }
    /**
     * Delete Form Page.
     *
     * @return \Illuminate\Http\Response
     */
    public function delForm($id)
    {
        // query delete
        DB::table('mahasiswa')
            ->join('course', 'mahasiswa.id_course', '=', 'course.id_course')
            ->where('id_mahasiswa', '=', $id)
            ->delete();
        return redirect('/dataTable');
    }
    /**
     * Create Form Page.
     *
     * @return \Illuminate\Http\Response
     */
    public function createForm(Request $request)
    {
        if ($request->session()->has('admin')) {
            return view('Forms.createForm');
        }else{
            Session::flash('error', 'Anda harus login terlebih dahulu');
            return redirect('/');
        }
    }
    /**
     * Create Form Page.
     *
     * @return \Illuminate\Http\Response
     */
    public function insertForm(Request $request)
    {
        DB::table('mahasiswa')->insert([
            'nama' => $request->nama,
            'nim' => $request->nim,
            'studi' => $request->studi,
            'phone' => $request->phone,
            'email' => $request->email,
            'web' => $request->web,
            'email_kampus' => $request->email_kampus,
            'id_course' => $request->title,
            'id_domisili' => $request->domisili,
        ]);
        // return "hehe";
        return redirect('/dataTable');
    }
    public function authLogin(Request $request)
    {
        $nama_admin = $request->nama_admin;
        $password = $request->password;
        $data = DB::table('admin')->where('nama_admin', '=', $nama_admin)->where('password', '=', $password)->get();
        // return $data;


        if($data->count() > 0){
            // session
            // session()->put('nama_admin', $nama_admin);
            $request->session()->put('admin', $nama_admin);
            return redirect('/default');
        }else{
            Session::flash('error', 'Username atau Password Salah!');
            return redirect('/');
        }
    }
    public function authLogout()
    {
        session()->forget('admin');
        return redirect('/');
    }
}
