<?php

namespace App\Http\Controllers;

use DOMDocument;

class FetchDataFromWebsite extends Controller
{

    public function fetchWebsiteData(){

        $curl = curl_init();
        $url = "https://shurjopay.com.bd";
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

        $response = curl_exec($curl);
        curl_close($curl);

        $html =new DOMDocument();
        $html->load($response);

        $data = $html->getElementsByTagName('div');
        foreach( $data as $p ) {
            echo $p->textContent;
            echo $p->getAttribute('class');
        }

    }


}
