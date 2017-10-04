<?php 
 
// Get the PHP helper library from twilio.com/docs/php/install 
require_once '/path/to/vendor/autoload.php'; // Loads the library 
 
use Twilio\Rest\Client; 
 
$account_sid = 'AC66137e3e9c89c3d17f08410aea6bc17e'; 
$auth_token = 'f31b3fca7439255df713dd6129a9b916'; 
$client = new Client($account_sid, $auth_token); 
 
$messages = $client->accounts("AC66137e3e9c89c3d17f08410aea6bc17e") 
  ->messages->create("+19178257631", array( 
        'From' => "+12544010741",  
        'Body' => "Hello from Shivani Gade CS 643 Fall 2017 ",      
  ));