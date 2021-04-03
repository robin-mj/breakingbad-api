<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CharactersController extends Controller
{
    public function characters() {


        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => "https://www.breakingbadapi.com/api/characters?limit=57",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_POSTFIELDS => "",
        ]);

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            $response = json_decode($response);
            return view('pages.characters', [
                'response' => $response,
            ]);
        }
    }

    public function character($name) {
        //$slug = Str::slug($name, '+'); //Remplace les espaces par des +
        //echo $slug;
        //dd($slug);

        if ($name == 'Tomás+Cantillo') {
            $name = 'Tom&#225;s+Cantillo';
        }

        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => "https://www.breakingbadapi.com/api/characters?name=".$name,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_POSTFIELDS => "",
        ]);

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            $response = json_decode($response);
            //dd($response);
            return view('pages.character', [
                'name' => $response[0]->name,
                'occupations' => $response[0]->occupation,
                'img' => $response[0]->img,
                'nickname' => $response[0]->nickname,
                'birthday' => $response[0]->birthday,
                'appearances' => $response[0]->appearance,
                'portrayed' => $response[0]->portrayed
            ]);
        }
    }

    public function random() {

        $random = rand(1, 57);

        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => "https://www.breakingbadapi.com/api/characters/".$random,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_POSTFIELDS => "",
        ]);

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            $response = json_decode($response);
            //dd($response);
            return view('pages.character', [
                'name' => $response[0]->name,
                'occupations' => $response[0]->occupation,
                'img' => $response[0]->img,
                'nickname' => $response[0]->nickname,
                'birthday' => $response[0]->birthday,
                'appearances' => $response[0]->appearance,
                'portrayed' => $response[0]->portrayed
            ]);
        }
    }
}
