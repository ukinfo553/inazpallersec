<?php
// api_handler.php

/**
 * Function to fetch brochure data from the API based on the course ID.
 *
 * @param int $id - The ID of the course to fetch data for.
 * @return array|null - The course data as an associative array or null on failure.
 */
function get_brochure_data($id) {
    // Build the API URL with the dynamic ID
    $url = "https://infosectrain.com/api/brochure_byid.php?id=" . $id;

    // Initialize cURL session
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);  // Return the response as a string
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);  // Follow redirects
    $response = curl_exec($ch);  // Execute the request
    curl_close($ch);  // Close the cURL session

    // Check if the cURL request was successful
    if ($response === false) {
        return null;  // Return null if there was an error
    }

    // Decode the JSON response to an associative array
    $data = json_decode($response, true);

    // Return the data array
    return $data;
}
?>
