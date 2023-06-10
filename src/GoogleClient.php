<?php

namespace RedDot\GoogleOauthLoginPhp;

class GoogleClient
{

    private $client_id;
    private $redirect_uri;
    private $scope;
    private $response_type = 'code';

    public $apiUrl = 'https://accounts.google.com/o/oauth2/v2/auth';

    public function __construct($client_id, $redirect_uri, $scope) {
        $this->client_id = $client_id;
        $this->redirect_uri = $redirect_uri;
        $this->scope = $scope;
    }

      // Build the authorization URL with the parameter values

    public function buildAuthUrl(){
        $authUrl = $this->apiUrl
        . '?client_id=' . urlencode($this->client_id)
        . '&redirect_uri=' . urlencode($this->redirect_uri)
        . '&scope=' . urlencode($this->scope)
        . '&response_type=' . urlencode($this->response_type);
        return $authUrl;
    }

   // Initialize cURL session
    public function initCurlSession($authUrl){
        $ch = curl_init();

        // Set cURL options
        curl_setopt($ch, CURLOPT_URL, $authUrl);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        return $ch;
    }
    
        // Execute the cURL request
    public function executeRequestForCode($ch){
        
        $response = curl_exec($ch);

        // Check for errors
        if (curl_errno($ch)) {
            $error = curl_error($ch);
            // Handle the error as needed
            echo "cURL Error: " . $error;
        }
    
        // Close the cURL resource
        curl_close($ch);
    
        // Handle the response
        // if ($response) {
        // ;
        // } else {
    
        // }
    }

    
}