<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>IP Info</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IP Information</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">IP Network Information Tool</h1>
        <?php
        // To get the IP address from Client
        $ip = $_SERVER['REMOTE_ADDR'];
        
        // Make the API call from ip-api.com (Endpoints are limited to 45 HTTP requests per minute from an IP address.)
        $api_url = "http://ip-api.com/json/{$ip}?fields=query,status,message,continent,continentCode,country,countryCode,region,regionName,city,district,zip,lat,lon,timezone,offset,currency,isp,org,as,asname,reverse,mobile,proxy,hosting";
        $json_response = file_get_contents($api_url);
        $data = json_decode($json_response);
        
        // Check if the API request was successful
        if ($data->status === "success") {
            echo '<table class="table table-dark table-striped">';
            foreach ($data as $key => $value) {
                echo "<tr><td>{$key}</td><td>{$value}</td></tr>";
            }
            echo '</table>';
        } else {
            echo '<p class="text-danger">Unable to retrieve IP information from ip-api server.</p>';
        }
        ?>

<?PHP
// Function to store visitors data (IP address and Time) in a JSON file, 

// Get the user's IP address
function getUserIP() {
    $ipnew = $_SERVER['REMOTE_ADDR'];
    return $ipnew;
}

// Function to get the current time
function getCurrentTime() {
    date_default_timezone_set('UTC'); // Set your desired timezone
    $time = date('Y-m-d H:i:s');
    return $time;
}

// Get user IP and current time
$userIP = getUserIP();
$currentTime = getCurrentTime();

// Create an array with the data
$data = array(
    'ip' => $userIP,
    'time' => $currentTime
);

// Convert the array to JSON
$jsonData = json_encode($data);

// Specify the path to the JSON file
$jsonFilePath = 'data.json';

// Open the file for writing
$file = fopen($jsonFilePath, 'a');

// Write the JSON data to the file
fwrite($file, $jsonData . PHP_EOL);

// Close the file
fclose($file);
?>

    </div>
    <p class="text-center footer-text">This data is processed by <a rel="nofollow" href="https://ip-api.com">ip-api.com</a> and script is developed by <a href="https://github.com/manibadhel/">@manibadhel</a></p>
</body>
</html>
