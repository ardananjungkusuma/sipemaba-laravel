<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Http\Request;

class PendaftaranController extends Controller
{
    public function cariPendaftaranView()
    {
        return view('caripendaftaran');
    }

    public function cariPendaftar(Request $request)
    {
        $this->validate($request, [
            'nisn' => 'required|numeric'
        ]);

        $nisn = $request->nisn;
        $client = new Client();
        $request = $client->get('http://localhost/pemabaserver/api/pendaftaran?nisn=' . $nisn);
        $response = $request->getBody();
        $hasilpendaftaran['hasilpendaftaran'] = json_decode($response, true);
        return view('hasilpendaftaran', ['hasilpendaftaran' => $hasilpendaftaran]);
    }
}
