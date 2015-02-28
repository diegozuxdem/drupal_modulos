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

        $auth_headers = array(
            'Content-Type' => 'application/x-www-form-urlencoded'
        );

        $options = array(
            'headers' => $auth_headers,
            'method' => 'POST',
            'data' => drupal_http_build_query($data),
            'timeout' => 25,
        );

        $response = drupal_http_request($service, $options);
        $result = $response->data;
        return $result;

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

        $auth_headers = array(
            'Content-Type' => 'application/x-www-form-urlencoded'
        );

        $options = array(
            'headers' => $auth_headers,
            'method' => 'POST',
            'data' => drupal_http_build_query($data),
            'timeout' => 25,
        );

        $response = drupal_http_request($service, $options);
        $result = $response->data;
        return $result;


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

        $auth_headers = array(
            'Content-Type' => 'application/x-www-form-urlencoded'
        );

        $options = array(
            'headers' => $auth_headers,
            'method' => 'POST',
            'data' => drupal_http_build_query($data),
            'timeout' => 25,
        );

        $response = drupal_http_request($service, $options);
        $result = $response->data;
        return $result;


    }

    function setActivity($usr,$tkn,$session_token,$mail,$type,$service) {

        $data_activity["mail"]=$mail;
        $data_activity["type"]=$type;
        $data_activity = drupal_json_encode($data_activity);

        $data = array(
            'usr' => $usr,
            'tkn' => $tkn,
            'session_token' => $session_token,
            'data' => $data_activity,
        );

        $auth_headers = array(
            'Content-Type' => 'application/x-www-form-urlencoded'
        );

        $options = array(
            'headers' => $auth_headers,
            'method' => 'POST',
            'data' => drupal_http_build_query($data),
            'timeout' => 25,
        );

        $response = drupal_http_request($service, $options);
        $result = $response->data;
        return $result;


    }

    function getform($usr,$tkn,$session_token,$service) {

        $data = array(
            'usr' => $usr,
            'tkn' => $tkn,
            'session_token' => $session_token,
        );

        $auth_headers = array(
            'Content-Type' => 'application/x-www-form-urlencoded'
        );

        $options = array(
            'headers' => $auth_headers,
            'method' => 'POST',
            'data' => drupal_http_build_query($data),
            'timeout' => 25,
        );

        $response = drupal_http_request($service, $options);
        $result = $response->data;
        return $result;


    }
}