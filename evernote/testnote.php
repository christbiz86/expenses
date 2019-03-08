<?php

use EDAM\NoteStore\NoteFilter;
use Evernote\Client;
$client = new Client(array(
    'token' => $accessToken,
    'sandbox' => true
));
$filter = new \EDAM\NoteStore\NoteFilter();
$filter->words = "Evernote";
$notes = $client->getNoteStore()->findNotes($filter, 0, 10);

phpinfo();

//require 'lib/autoload.php';
//$client = new Evernote\Client(array(
//  'consumerKey' => 'celebes',
//  'consumerSecret' => 'b60ab07c069b7a34'
//));
//$requestToken = $client->getRequestToken('YOUR CALLBACK URL');
//$authorizeUrl = $client->getAuthorizeUrl($requestToken['oauth_token']);     
//
////sandbox dev. token :
//$developerToken = "S=s1:U=89e7e:E=149651d4dd7:C=1420d6c21da:P=1cd:A=en-devtoken:V=2:H=6ce121826bc7e18dc9378ab9bf5bc3b7";
////evernote dev. token :
////$developerToken = "S=s359:U=3714560:E=14984576738:C=1422ca63b3c:P=1cd:A=en-devtoken:V=2:H=aee69c40f5b6b3e14801d5bcfa52f053";
//
//$accessToken = $client->getAccessToken(
//  $requestToken['oauth_token'],
//  $requestToken['oauth_token_secret'],
//  $_GET['oauth_verifier']
//);
//
//// Make API calls
$token = $accessToken['oauth_token'];
$client = new Evernote\Client(array('token' => $token));
$noteStore = $client->getNoteStore();
$notebooks = $noteStore->listNotebooks();
var_dump($notebooks);
foreach ($notebooks as $notebook) {
  print "Notebook: " . $notebook->name . "\n";
}

?>
