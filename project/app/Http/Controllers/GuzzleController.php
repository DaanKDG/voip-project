<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;


class GuzzleController extends Controller
{
    public function index()
    {
        
    }
    public function getSeason() {
        $client = new Client();
        $uri = '';
        $header = ['headers' => ['X-Auth-Token' => '6e6a87e2f21340fb837874fbe8cf6c1b']];
        $res = $client->get($uri, $header);
        return json_decode($res->getBody()->getContents(), true);
    }
}
