<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use GuzzleHttp\Client;

class RajaOngkir extends Model
{
    private $client, $secretKey;

    public function __construct()
    {
        $this->client = new Client();
        $this->secretKey = env('API_KEY_RAJA_ONGKIR');
    }

    private function getRequest($uri, $data, $header = [])
    {
        try { 
            // Add secretKey
            $header['key'] = $this->secretKey;

            // Request to server
            $res = $this->client->request(
                'GET',
                env('API_URL_RAJA_ONGKIR') . $uri,
                [
                    'headers' => $header,
                    'query' => $data,
                    'http_errors' => false
                ]
            );

            // Get body from result
            $results = json_decode($res->getBody(), true);
        } catch (\Exception $e) {
            $results = $e;
        }
        return $results;
    }

    public function postRequest($uri, $data, $header=[])
    {
        try {
            $header['key'] = $this->secretKey;

            // Request to server
            $res = $this->client->request(
                'POST',
                env('API_URL_RAJA_ONGKIR') . $uri,
                [
                    'headers' => $header,
                    'json' => $data,
                    'http_errors' => false
                ]
            );

            // Get body from result
            $results = json_decode($res->getBody(), true);

        } catch (\Exception $e) {
            $results = $e;
        }
        return $results;
    }

    public function waybill($params)
    {
        try {
            $results = $this->postRequest('/api/waybill', $params);
        } catch (\Exception $e) {
            $results = $e;
        }

        return $results;
    }
    public function getProvince()
    {
        $param = '';
        try {
            $results = $this->getRequest('/api/province', $param);
        } catch (\Exception $e) {
            $results = $e;
        }

        return $results;
    }

    public function getCity($param)
    {
        try {
            $results = $this->getRequest('/api/city', $param);
        } catch (\Exception $e) {
            $results = $e;
        }

        return $results;
    }

    public function getSubdistrict($param)
    {
        try {
            $results = $this->getRequest('/api/subdistrict', $param);
        } catch (\Exception $e) {
            $results = $e;
        }

        return $results;
    }

    public function cost($param)
    {
        try {
            $results = $this->postRequest('/api/cost', $param);
        } catch (\Exception $e) {
            $results = $e;
        }

        return $results;
    }
}
