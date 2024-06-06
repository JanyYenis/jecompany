<?php

namespace Mixproyect\Whatsapp\Controllers;

use App\Http\Controllers\Controller as ControllersController;
use App\Models\Config;
use Netflie\WhatsAppCloudApi\WhatsAppCloudApi;
use Netflie\WhatsAppCloudApi\Response;

class Controller extends ControllersController
{
    // use Response;

    public $baseUrl;
    public $version;
    public $waba_id;
    public $app_id;
    public $phone_number_id	;
    public $token;
    public $numeroG;
    public $whatsapp_cloud_api;

    public function __construct()
    {
        // dd('jany');
        // setlocale(LC_TIME, 'es_ES.utf8');
        // $config = Config::where('estado', Config::ACTIVO)->where('id', 1)->first();
        // $this->version = $config->version;
        // $this->waba_id = $config->waba_id;
        // $this->app_id = $config->app_id;
        // $this->phone_number_id = $config->phone_number_id;
        // $this->token = $config->token;
        // $this->numeroG = $config?->numero ?? '573161542681';

        // $this->whatsapp_cloud_api = new WhatsAppCloudApi([
        //     'from_phone_number_id' => $this->phone_number_id,
        //     'access_token' => $this->token,
        //     'graph_version' => $this->version,
        // ]);
    }

    public function ejecutar($url, $metodo, $token)
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => $metodo,
        CURLOPT_HTTPHEADER => array(
            "Authorization: Bearer {$token}"
        ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);

        return $response;
    }
}
