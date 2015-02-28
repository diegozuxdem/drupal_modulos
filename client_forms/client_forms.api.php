<?php
/**
 * Created by PhpStorm.
 * User: diegoamaya
 * Date: 2/27/15
 * Time: 11:00 PM
 */

class clientForms {

    public function connect($usr,$tkn,$service) {

        $data = array(
            'usr' => $usr,
            'tkn' => $tkn,
        );

        $data = drupal_http_build_query($data);

        $ch = curl_init( $service );
        curl_setopt( $ch, CURLOPT_POST, 1);
        curl_setopt( $ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt( $ch, CURLOPT_HEADER, 0);
        curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);

        $response = curl_exec( $ch );
        return $response;

    }

    public function login($mail,$passwd,$usr,$tkn,$session_token,$service) {

        $data_login["mail"]=$mail;
        $data_login["passwd"]=$passwd;
        $data_login = drupal_json_encode($data_login);

        $data = array(
            'usr' => $usr,
            'tkn' => $tkn,
            'session_token' => $session_token,
            'data' => $data_login,
        );

        $data = drupal_http_build_query($data);

        $ch = curl_init( $service );
        curl_setopt( $ch, CURLOPT_POST, 1);
        curl_setopt( $ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt( $ch, CURLOPT_HEADER, 0);
        curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);

        $response = curl_exec( $ch );
        return $response;

    }

    function register($mail,$username,$passwd,$name,$lastname,$otro_campo,$usr,$tkn,$session_token,$service) {

        $data_user["mail"]=$mail;
        $data_user["username"]=$username;
        $data_user["passwd"]=$passwd;
        $data_user["name"]=$name;
        $data_user["lastname"]=$lastname;
        $data_user["otro_campo"]=$otro_campo;
        $data_user = drupal_json_encode($data_user);


        $data = array(
            'usr' => $usr,
            'tkn' => $tkn,
            'session_token' => $session_token,
            'data' => $data_user,
        );

        $data = drupal_http_build_query($data);

        $ch = curl_init( $service );
        curl_setopt( $ch, CURLOPT_POST, 1);
        curl_setopt( $ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt( $ch, CURLOPT_HEADER, 0);
        curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);

        $response = curl_exec( $ch );

        return $response;


    }
}