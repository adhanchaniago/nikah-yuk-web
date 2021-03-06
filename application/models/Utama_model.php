<?php
use GuzzleHttp\Client;
defined('BASEPATH') or exit('No direct script allowed');

class Utama_model extends CI_Model {

    private $_client;

    public function __construct()
    {
        $this->_client = new Client([
            'base_uri' => base_url('api/')
        ]);
    }

    public function getDatas($uri, $where = NULL)
    {
        if ($where === NULL) {
            $response = $this->_client->request('GET', $uri, [
                'headers' => [
                    'token' => 'Da0sxRC4'
                ],
                'http_errors' => FALSE
            ]);
            return json_decode($response->getBody()->getContents(), true);
        } else {
            $response = $this->_client->request('GET', $uri, [
                'headers' => [
                    'token' => 'Da0sxRC4'
                ],
                'query' => $where,
                'http_errors' => FALSE
            ]);
            return json_decode($response->getBody()->getContents(), true);
        }
    }

    public function insertData($uri, $data)
    {
        $response = $this->_client->request('POST', $uri, [
            'headers' => [
                'token' => 'Da0sxRC4'
            ],
            'form_params' => $data
        ]);
        return json_decode($response->getBody()->getContents(), true);
    }

    public function uploadData($uri, $data)
    {
        try {
            $response = $this->_client->request('POST', $uri, [
                'multipart' => $data,
                'headers' => [
                    'token' => 'Da0sxRC4'
                ]
            ]);
            return json_decode($response->getBody()->getContents(), true);
        } catch (\GuzzleHttp\Exception\ClientException $e) {
            $response = $e->getResponse();
            return json_decode($response->getBody()->getContents(), true);
        }
    }

    public function deleteData($uri, $data)
    {
        try {
            $data += [
                'token' => 'Da0sxRC4'
            ];
            $response = $this->_client->request('DELETE', $uri, [
                'form_params' => $data
            ]);
            return json_decode($response->getBody()->getContents(), true);
        } catch (GuzzleHttp\Exception\BadResponseException $e) {
            $response = $e->getResponse();
            return json_decode($response->getBody()->getContents(), true);
        }
    }

    public function updateData($uri, $data)
    {
        $response = $this->_client->request('PUT', $uri, [
            'headers' => [
                'token' => 'Da0sxRC4'
            ],
            'form_params' => $data,
            'http_errors' => FALSE
        ]);
        return json_decode($response->getBody()->getContents(), true);
    }
}