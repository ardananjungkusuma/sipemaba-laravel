<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Http\Request;

class SekolahController extends Controller
{
    public function getSekolah($id)
    {
        $client = new Client();
        $request = $client->get('http://localhost/pemabaserver/api/sekolah');
        $response = $request->getBody()->getContents();

        $sekolah['datasekolah'] = json_decode($response, true);
    }
}
