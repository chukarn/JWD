
<?php 

    define('UPLOAD_DIR', 'tmp_image/');
	/*Get Data From POST Http Request*/
	$datas = file_get_contents('php://input');
	/*Decode Json From LINE Data Body*/
	$deCode = json_decode($datas,true);

	file_put_contents('log.txt', file_get_contents('php://input') . PHP_EOL, FILE_APPEND);

	$replyToken = $deCode['events'][0]['replyToken'];
	$userId = $deCode['events'][0]['source']['userId'];
	$text = $deCode['events'][0]['message']['text'];

	$messages = [];
	$messages['replyToken'] = $replyToken;
	
	$messageType = $deCode['events'][0]['message']['type'];
	if($messageType == 'image'){
        $LINEDatas['messageId'] = $deCode['events'][0]['message']['id'];
        $results = getContent($LINEDatas);
        if($results['result'] == 'S'){
            $file = UPLOAD_DIR . uniqid() . '.png';
            $success = file_put_contents($file, $results['response']);
        }
    }else{
        $messages['messages'][0] = getFormatTextMessage("เอ้ย ถามอะไรก็ตอบได้");
    }
	

	$encodeJson = json_encode($messages);

	$LINEDatas['url'] = "https://api.line.me/v2/bot/message/reply";
  	$LINEDatas['token'] = "FEqm7UvTwzjpushsXoCHu6eeFh/chCqprReCaNygTtWbbv4MM1paXPYJ1jlaTj+d/wDYZHSt+5TQdjML/1QO2WE4nFpBfJxdrbfQqtailDUIl32mODBTUhN8Yxg7ZnLF+gSW1qm1ua4YnBp5ts4J/gdB04t89/1O/w1cDnyilFU=";

  	$results = sentMessage($encodeJson,$LINEDatas);

	/*Return HTTP Request 200*/
	http_response_code(200);

	function getFormatTextMessage($text)
	{
		$datas = [];
		$datas['type'] = 'text';
		$datas['text'] = $text;

		return $datas;
	}

	function sentMessage($encodeJson,$datas)
	{
		$datasReturn = [];
		$curl = curl_init();
		curl_setopt_array($curl, array(
		  CURLOPT_URL => $datas['url'],
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => "",
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 30,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => "POST",
		  CURLOPT_POSTFIELDS => $encodeJson,
		  CURLOPT_HTTPHEADER => array(
		    "authorization: Bearer ".$datas['token'],
		    "cache-control: no-cache",
		    "content-type: application/json; charset=UTF-8",
		  ),
		));

		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		if ($err) {
		    $datasReturn['result'] = 'E';
		    $datasReturn['message'] = $err;
		} else {
		    if($response == "{}"){
			$datasReturn['result'] = 'S';
			$datasReturn['message'] = 'Success';
		    }else{
			$datasReturn['result'] = 'E';
			$datasReturn['message'] = $response;
		    }
		}

		return $datasReturn;
	}
	function getContent($datas)
    {
        $datasReturn = [];
        $curl = curl_init();
        curl_setopt_array($curl, array(
        CURLOPT_URL =>   "https://api.line.me/v2/bot/message/".$datas['messageId']."/content",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_POSTFIELDS => "",
        CURLOPT_HTTPHEADER => array(
            "Authorization: Bearer ".$datas['token'],
            "cache-control: no-cache"
        ),
        ));
        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);
        if($err){
        $datasReturn['result'] = 'E';
        $datasReturn['message'] = $err;
        }else{
        $datasReturn['result'] = 'S';
        $datasReturn['message'] = 'Success';
        $datasReturn['response'] = $response;
        }
        return $datasReturn;
    }
?>