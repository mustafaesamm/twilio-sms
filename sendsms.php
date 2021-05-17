<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.css"/>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8" >
</head>
    <div class="container">
    <div class="alert alert-primary text-right" style="margin-top:50px">ارسل رسالة الى مصطفى</div>
<form  class="container post1 text-right" enctype="multipart/form-data"  method="post">
  <div class="form-group ">
    <label for="exampleInputemail">الرسالة</label>
    <textarea style="height:200px" type="text" class="form-control text-right" name="message" id="exampleInputemail"  required ></textarea>
  </div>
    <button type="submit" class="btn btn-primary">ارسال الرسالة</button>
  </form>
        </div>

<?php
    use Twilio\Rest\Client;
     if($_SERVER['REQUEST_METHOD']=='POST'){
       $message=filter_var($_POST['message'], FILTER_SANITIZE_STRING);
// Require the bundled autoload file - the path may need to change
// based on where you downloaded and unzipped the SDK
require 'twilio-php-main/src/Twilio/autoload.php';

// Use the REST API Client to make requests to the Twilio REST API


// Your Account SID and Auth Token from twilio.com/console
$sid = 'AC0104218953e7fb624b9f0c3d29302d00';
$token = '937a35745d22230075221122159da6fb';
$client = new Client($sid, $token);

// Use the client to do fun stuff like send text messages!
$client->messages->create(
    // the number you'd like to send the message to
    '+9647827930979',
    [
        // A Twilio phone number you purchased at twilio.com/console
        'from' => '+17206136103',
        // the body of the text message you'd like to send
        'body' => "$message"
    ]
);
          }
    
    
    
    