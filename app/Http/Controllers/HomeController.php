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

    public function userGetSekolah()
    {
        $client = new Client();
        $request = $client->get('http://localhost/pemabaserver/api/sekolah');
        $response = $request->getBody();

        $sekolah = json_decode($response, true);
        return view('sekolahuser', ['sekolah' => $sekolah]);
    }

    public function tambahSekolah()
    {
        return view('tambahsekolah');
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
        return view('simpanSekolah', ['data' => $request]);
    }

    public function detailSekolah($id)
    {
        $client = new Client();
        $request = $client->get('http://localhost/pemabaserver/api/sekolah?id_sekolah=' . $id);
        $response = $request->getBody();
        $sekolah['sekolah'] = json_decode($response, true);

        return view('detailsekolahuser', ['sekolah' => $sekolah]);
    }

    public function userDeleteSekolah($id)
    {
        $client = new \GuzzleHttp\Client();
        $client->delete('http://localhost/pemabaserver/api/sekolah', [
            'form_params' => [
                'id_sekolah' => $id
            ]
        ]);

        return redirect('/home');
    }
}
