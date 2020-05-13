<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function userGetSiswa()
    {
        $client = new Client();
        $request = $client->get('http://localhost/pemabaserver/api/siswa');
        $response = $request->getBody();

        $siswa = json_decode($response, true);
        return view('user.siswa', ['siswa' => $siswa]);
    }

    public function userGetSekolah()
    {
        $client = new Client();
        $request = $client->get('http://localhost/pemabaserver/api/sekolah');
        $response = $request->getBody();

        $sekolah = json_decode($response, true);
        return view('user.sekolahuser', ['sekolah' => $sekolah]);
    }

    public function tambahSekolah()
    {
        return view('user.tambahsekolah');
    }

    public function tambahPendaftaran()
    {
        $client = new Client();
        $request = $client->get('http://localhost/pemabaserver/api/siswa');
        $response = $request->getBody();

        $siswa = json_decode($response, true);
        return view('user.tambahpendaftaran', ['siswa' => $siswa]);
    }

    public function tambahSiswa()
    {
        $client = new Client();
        $request = $client->get('http://localhost/pemabaserver/api/sekolah');
        $response = $request->getBody();

        $sekolah = json_decode($response, true);
        return view('user.tambahsiswa', ['sekolah' => $sekolah]);
    }

    public function simpanSekolah(Request $request)
    {
        $client = new \GuzzleHttp\Client();
        $client->request('POST', 'http://localhost/pemabaserver/api/sekolah', [
            'form_params' => [
                'nama_sekolah' => $request->nama_sekolah,
                'alamat_sekolah' => $request->alamat_sekolah,
                'kota_kabupaten' => $request->kota_kabupaten,
                'provinsi' => $request->provinsi
            ]
        ]);
        return view('user.simpanSekolah', ['data' => $request]);
    }

    public function simpanSiswa(Request $request)
    {
        $client = new \GuzzleHttp\Client();
        $client->request('POST', 'http://localhost/pemabaserver/api/siswa', [
            'form_params' => [
                'id_sekolah' => $request->id_sekolah,
                'nisn' => $request->nisn,
                'nama_siswa' => $request->nama_siswa,
                'alamat_siswa' => $request->alamat_siswa,
                'rata_rata_un' => $request->rata_rata_un
            ]
        ]);
        return redirect('/home/siswa')->with(['success' => 'Data Siswa Berhasil Ditambahkan']);
    }

    public function simpanPendaftaran(Request $request)
    {
        $client = new \GuzzleHttp\Client();
        $client->request('POST', 'http://localhost/pemabaserver/api/pendaftaran', [
            'form_params' => [
                'id_siswa' => $request->id_siswa,
                'perguruan_tinggi' => $request->perguruan_tinggi,
                'jurusansatu' => $request->jurusansatu,
                'jurusandua' => $request->jurusandua
            ]
        ]);
        return view('user.simpanPendaftaran', ['data' => $request])->with(['success' => 'Data Pendaftaran Berhasil Ditambahkan']);
    }

    public function detailSekolah($id)
    {
        $client = new Client();
        $request = $client->get('http://localhost/pemabaserver/api/sekolah?id_sekolah=' . $id);
        $response = $request->getBody();
        $sekolah['sekolah'] = json_decode($response, true);

        return view('user.detailsekolahuser', ['sekolah' => $sekolah]);
    }

    public function detailSiswa($id)
    {
        $client = new Client();
        $request = $client->get('http://localhost/pemabaserver/api/siswa?id_siswa=' . $id);
        $response = $request->getBody();
        $siswa['siswa'] = json_decode($response, true);

        return view('user.detailsiswauser', ['siswa' => $siswa]);
    }

    public function userDeleteSekolah($id)
    {
        $client = new \GuzzleHttp\Client();
        $client->delete('http://localhost/pemabaserver/api/sekolah', [
            'form_params' => [
                'id_sekolah' => $id
            ]
        ]);

        return redirect('/home/sekolahuser')->with(['error' => 'Data Berhasil Dihapus']);
    }

    public function userDeleteSiswa($id)
    {
        $client = new \GuzzleHttp\Client();
        $client->delete('http://localhost/pemabaserver/api/siswa', [
            'form_params' => [
                'id_siswa' => $id
            ]
        ]);

        return redirect('/home/siswa')->with(['error' => 'Data Siswa Berhasil Dihapus']);
    }

    public function userEditSekolah($id)
    {
        $client = new Client();
        $request = $client->get('http://localhost/pemabaserver/api/sekolah?id_sekolah=' . $id);
        $response = $request->getBody();
        $sekolah = json_decode($response, true);

        return view('user.editsekolah', ['sekolah' => $sekolah]);
    }

    public function userEditSiswa($id)
    {
        $client = new Client();
        $request1 = $client->get('http://localhost/pemabaserver/api/sekolah');
        $response1 = $request1->getBody();
        $request2 = $client->get('http://localhost/pemabaserver/api/siswa?id_siswa=' . $id);
        $response2 = $request2->getBody();
        $siswa = json_decode($response2, true);

        $sekolah = json_decode($response1, true);
        return view('user.editsiswa', ['sekolah' => $sekolah, 'siswa' => $siswa]);
    }

    public function userUpdateSekolah(Request $request)
    {
        $client = new Client();
        $client->request('PUT', 'http://localhost/pemabaserver/api/sekolah', [
            'form_params' => [
                'id_sekolah' => $request->id_sekolah,
                'nama_sekolah' => $request->nama_sekolah,
                'alamat_sekolah' => $request->alamat_sekolah,
                'kota_kabupaten' => $request->kota_kabupaten,
                'provinsi' => $request->provinsi
            ]
        ]);
        return redirect('/home/userDetailSekolah/' . $request->id_sekolah)->with(['success' => 'Data Sekolah Berhasil Diedit']);
    }

    public function userUpdateSiswa(Request $request)
    {
        $client = new Client();
        $client->request('PUT', 'http://localhost/pemabaserver/api/siswa', [
            'form_params' => [
                'id_siswa' => $request->id_siswa,
                'id_sekolah' => $request->id_sekolah,
                'nisn' => $request->nisn,
                'nama_siswa' => $request->nama_siswa,
                'alamat_siswa' => $request->alamat_siswa,
                'rata_rata_un' => $request->rata_rata_un
            ]
        ]);
        return redirect('/home/userDetailSiswa/' . $request->id_siswa)->with(['success' => 'Data Siswa Berhasil Diedit']);
    }
}
