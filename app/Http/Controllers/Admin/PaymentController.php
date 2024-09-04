<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

class PaymentController extends Controller
{
    public function payment()
    {
    	return view('admin.payment.search',[
    		'pagetitle' => 'Search',
    		'title' => 'Payment | Admin'
    	]);
    }
    public function payment_search(Request $request)
    {
        $auth = 'Janel_Janast_Astillero2023';
        // API endpoint
        $apiEndpoint = 'https://ssc.slsubc.com/api/attendance/search/student';

        // Authentication data
        $authData = [
            'auth_value' => $auth,
            'idnumber' => $request->idnum,
            'firstname' => $request->firstname,
            'last_name' => $request->lastname,
            'academicyear' => $request->acadyears,
            'semester' => $request->semester
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

        return view('admin.payment.search',[
            'pagetitle' => 'Search',
            'title' => 'Payment | Admin', 
            'data' => $data
        ]);
    }
    public function payment_billings(Request $request)
    {

        $auth = 'Janel_Janast_Astillero2023';
        // API endpoint
        $apiEndpoint = 'https://ssc.slsubc.com/api/attendance/pay';

        // Authentication data
        $authData = [
            'auth_value' => $auth,
            'id' => $request->id,
            'academicyear' => $request->acadyears,
            'semester' => $request->semester
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
        return view('admin.payment.billings',[
            'pagetitle' => 'Search',
            'title' => 'Payment | Admin', 
            'data' => $data
        ]);
    }
}
