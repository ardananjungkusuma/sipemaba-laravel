<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Http\Request;

class SekolahController extends Controller
{

    public function index()
    {
        return view('index');
    }

    public function getSekolah()
    {
        $client = new Client();
        $request = $client->get('http://localhost/pemabaserver/api/sekolah');
        $response = $request->getBody();

        $sekolah = json_decode($response, true);
        return view('sekolah', ['sekolah' => $sekolah]);
    }

    public function detailSekolah($id)
    {
        $client = new Client();
        $request = $client->get('http://localhost/pemabaserver/api/sekolah?id_sekolah=' . $id);
        $response = $request->getBody();
        $sekolah['sekolah'] = json_decode($response, true);

        return view('detailsekolah', ['sekolah' => $sekolah]);
    }
}
