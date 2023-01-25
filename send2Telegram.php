<?

/* ОТПРАВКА ПИСЬМА ЗАКАЗА В TELEGRAM */ 
/*функция для создания запроса на сервер Telegram */ 
function parser($url){ 
    $curl = curl_init(); 
    curl_setopt($curl, CURLOPT_URL, $url); 
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); 
    $result = curl_exec($curl); 
    if($result == false){      
      echo "Ошибка отправки запроса: " . curl_error($curl); 
      return false; 
    } 
    else{ 
      return true; 
    } 
} 
 
function orderSendTelegram($message) { 
 
    /*токен который выдаётся при регистрации бота */ 
    $token = "1616052093:5928262425:AAHiPZw1GP960ol66C2QRNEC57krQ38CTJo"; 
    /*идентификатор группы*/ 
    $chat_id = "-862732580"; 
 
    /*делаем запрос*/ 
    parser("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$message}"); 
 
}


?>
