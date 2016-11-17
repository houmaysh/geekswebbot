<?php


require 'vendor/autoload.php';

$client = new Zelenin\Telegram\Bot\Api('290977281:AAEZtfBKhmalujsj2Vg_F9nE2872ZqNsUVY'); // Set your access token
$update = json_decode(file_get_contents('php://input'));


//your app
try {

    if($update->message->text == '/نمایش عکس')
    {
    	$response = $client->sendPhoto(['chat_id' => $update->message->chat->id, 'AgADBAADBKgxG6audg4pwRAWLPbAob1oZBkABC0nj_53FB4fiMgAAgI']);

     	]);
    }
    else if($update->message->text == '/تماس')
    {
    	$response = $client->sendContact(['chat_id' => $update->message->chat->id, '09352000414', 'Hom' , 'Shahriyari']);

    		]);

    }

}
} catch (\Zelenin\Telegram\Bot\NotOkException $e) {

    //echo error message ot log it
    //echo $e->getMessage();

}
