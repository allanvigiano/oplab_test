<?php
header("Access-Control-Allow-Origin: *");

//This litle api was guided by Tom Elliott tutorial at https://tomelliott.com/php/authenticating-twitter-feed-timeline-oauth
session_start();

require_once("twitteroauth/twitteroauth/twitteroauth.php"); //Path to twitteroauth library
 
$twitteruser = "twitterusername";
$notweets = 30;
$consumerkey = "hq6zOz3ikgPh6rPArUkCCH3mH";
$consumersecret = "9dJK790EYG4ombvUm0kfFgS4GwcHLMfYw84XHmqKn6v6Oh2aiS";
$accesstoken = "17100973-f8gVOmtZmFiRJTQaJdQ9B10xn5DvtOHGDSdkEY7vz";
$accesstokensecret = "OEMUWQvZfyS30tluu3U0r9pF5a96a8eSErfLVqwYDL66F";
 
function getConnectionWithAccessToken($cons_key, $cons_secret, $oauth_token, $oauth_token_secret) {
  $connection = new TwitterOAuth($cons_key, $cons_secret, $oauth_token, $oauth_token_secret);
  return $connection;
}
 
$connection = getConnectionWithAccessToken($consumerkey, $consumersecret, $accesstoken, $accesstokensecret);
$query = substr($_SERVER['REQUEST_URI'], 1);
$tweets = $connection->get("https://api.twitter.com/1.1/search/tweets.json?" . $query);
 
echo json_encode($tweets);
?>