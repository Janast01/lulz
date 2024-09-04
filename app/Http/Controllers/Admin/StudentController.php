<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use GuzzleHttp\Client;


class StudentController extends Controller
{
    public function index(Request $request)
    {
        $auth = 'Janel_Janast_Astillero2023';
        // API endpoint
        $apiEndpoint = 'https://ssc.slsubc.com/api/stud/edit/info';

        // Authentication data
        $authData = [
            'auth_value' => $auth,
            'id'=> $request->id
        ];

        // Create a new Guzzle client
        $client = new Client();

        // Make a POST request with authentication data
        $response = $client->post($apiEndpoint, [
            'json' => $authData,
        ]);

        // Get the response body as a string
        $responseBody = $response->getBody()->getContents();

        $responseBody = stripslashes($responseBody);

        // Decode the JSON response
        $data = json_decode($responseBody, true);
        // return $data;

        return view('admin.student.edit',[
            'pagetitle' => 'Edit',
            'title' => 'Student | Edit',
            'stud_info'=> $data
        ]);
    }
}
