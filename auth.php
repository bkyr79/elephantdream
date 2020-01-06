<?php
require "twitteroauth/autoload.php";
use Abraham\TwitterOAuth\TwitterOAuth;
 
$consumerKey = "JqZ6gqNGix2B9IBJcgDP5d97V";
$consumerSecret = "iDxhnVdVWSXh9r9zJ2uwHAebg22cjkPdP2WuWBqZPt3SxpYnGk";
$accessToken = "303747416-XwCDsSP1Qkc9DAqpnO3wzc8pT2gTXy0El1gEcVpE";
$accessTokenSecret = "XPm8JSlhcojdQzCzdxhhP2w3iofcYnCJz292PoJmXO6rP";
 
$twitter = new TwitterOAuth($consumerKey, $consumerSecret, $accessToken, $accessTokenSecret);
 
$result = $twitter->post(
        "statuses/update",
        array("status" => "Tweetテスト")
);
 
if($twitter->getLastHttpCode() == 200) {
    print "tweeted\n";
} else {  &nbsp; 
 &nbsp;  print "tweet failed\n";
}