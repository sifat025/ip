<?php
// Step 1: Get the user's IP address
//$ip_address = $_SERVER['REMOTE_ADDR'];

// Step 2: Use the ipstack API to get location data
//$access_key = '';  // Replace with your ipstack API key
//$url = "http://api.ipstack.com/{$ip_address}?access_key={$access_key}";

// Step 3: Fetch the location data
//$response = file_get_contents($url);
//$location_data = json_decode($response, true);

// Step 4: Extract relevant information
//$country = $location_data['country_name'];
//$region = $location_data['region_name'];
//$city = $location_data['city'];

// Display or use the location data for recommendations
//echo $ip_address;//my code
//echo "Country: $country, Region: $region, City: $city";


function getUserIP() {
    // Check if the user is behind a proxy or using a load balancer
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        // IP from shared internet
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        // IP passed from proxy or load balancer
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        // Fallback to remote address
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}

echo "User's IP address is: " . getUserIP();

?>
