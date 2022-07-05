<?php
session_start();

$token = password_hash("password", PASSWORD_DEFAULT);

function sendRequest($data)
{

    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => 'http://localhost/blog-test-edm-backend/crud.php',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => $data,
    ));

    $response = curl_exec($curl);

    curl_close($curl);
    return json_decode($response, true);
}

function getCategories()
{
    global $token;
    $array = [
        'token' => $token,
        'get_categories' => true,
    ];
    return sendRequest($array);
}

function readPost($slug = null)
{
    global $token;
    $array = [
        'token' => $token,
        'read_post' => true,
        'slug' => $slug
    ];
    return sendRequest($array);
}

function writePost($data)
{
    return sendRequest($data);
}

function editPost($data)
{
    return sendRequest($data);
}

function deletePost($data)
{
    return sendRequest($data);
}
