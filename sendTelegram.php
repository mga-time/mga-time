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
    $token = "1616052093:AAGZ5vsK12RTT92jj2yHaZ4tZIUB_8N-tY"; 
    /*идентификатор группы*/ 
    $chat_id = "-435154116"; 
 
    /*делаем запрос*/ 
    parser("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$message}"); 
 
}


?>
