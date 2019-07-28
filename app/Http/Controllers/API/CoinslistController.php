<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

class CoinslistController extends Controller
{
     /**
     * get coin api
     *
     * @return \Illuminate\Http\Response
     */
    public function getcoins(){
        $client = new Client();
        $request = $client->get('https://pro-api.coinmarketcap.com/v1/cryptocurrency/listings/latest', [
            'headers' => [
                'X-CMC_PRO_API_KEY' => '7b80a280-7fd9-4d9b-8df8-eadf038f6dc0',
                'Accept'     => 'application/json',
            ],
            'query' => [
                'start' => 1,
                'limit' => 10,
                'convert'     => 'USD',
            ]
        ]);
        $response = $request->getBody();
        return response()->json([
            'success'=>"true",
            'response' => $request->getBody(),
        ]);

    }
}
// $client->request('GET', '/get', ['query' => ['foo' => 'bar']]);
//
