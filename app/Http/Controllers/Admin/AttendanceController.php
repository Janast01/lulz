<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

class AttendanceController extends Controller
{
    public function attendance() {
		$auth = 'Janel_Janast_Astillero2023';

		// API endpoint
		$apiEndpoint = 'https://ssc.slsubc.com/api/attendance/log';

		// Authentication data
		$authData = [
		    'auth_value' => $auth,
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

		// Do something with the response data
		// return $responseBody;

	    return view('admin.attendance.view',[
	        'title' => 'View',
	        'attendances' => $data
	    ]);
    }
}
