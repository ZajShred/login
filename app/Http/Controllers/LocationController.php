<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class LocationController extends Controller
{
    public function getUserInfo(Request $request)
    {
        // Get the user's IP address
        $userIp  = '189.203.106.252';

        // Make a request to the ipinfo.io API
        $client = new Client();
        $response = $client->get("https://ipinfo.io/{$userIp}?token=ff1f1db27c4e3e");

        // Parse the JSON response
        $data = json_decode($response->getBody());

        // Extract user information
        $location = isset($data->loc) ? $data->loc : 'Not Available';
        $country = isset($data->country) ? $data->country : 'Not Available';
        $hostname = isset($data->hostname) ? $data->hostname : 'Not Available';
        $city = isset($data->city) ? $data->city : 'Not Available';
        $region = isset($data->region) ? $data->region : 'Not Available';
        $org = isset($data->org) ? $data->org : 'Not Available';
        $postal = isset($data->postal) ? $data->postal : 'Not Available';
        $timezone = isset($data->timezone) ? $data->timezone : 'Not Available';

        // Passing all extracted data to the view
        return view('user-info', compact('location', 'country', 'hostname', 'city', 'region', 'org', 'postal', 'timezone'));
    }
}