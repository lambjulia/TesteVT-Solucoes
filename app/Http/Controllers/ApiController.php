<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
// use Goutte\Client;
use GuzzleHttp\Client;

class ApiController extends Controller
{

    public function pesquisas() {

        return view('pesquisas');
    }


    public function blog(Request $request) {

        $client = new Client();
        $response = $client->request('GET', 'https://www.vtsolucoes.com.br/blog/');

        $xml_content = $response->getBody()->getContents();   

        $response = json_decode(json_encode((array)$xml_content), true);

        dd($response);

        return response()->json($xml_content);

        }
   

    public function google(Request $request) {

        $client = new Client();
        $response = $client->request('GET', 'https://www.google.com/search', [
             'query' => [
              'q' => $request->input('pesquisa')
    ]
        ]);
        $xml_content = $response->getBody()->getContents();   

        $response = json_decode(json_encode((array)$xml_content), true);

        dd($xml_content);

        return response()->json($xml_content);

        }
        

    public function pesquisaVT(Request $request) {

        $client = new Client();
        $response = $client->request('GET', 'https://www.google.com/search', [
                 'query' => [
                  'q' => 'VT Soluções'
        ]
        ]);
        $xml_content = $response->getBody()->getContents();   
    
        $response = json_decode(json_encode((array)$xml_content), true);
    
        dd($xml_content);
    
        return response()->json($xml_content);
    
        }

    }