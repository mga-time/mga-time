<?


$name = $_POST['name'];
$coman = $_POST['голос'];

function parser(url){
    $curl = curl_init();
    curl_setopt($curl, CURLPOPT_URL, $url);
    curl_setopt($curl, CURLPOPT_RETURNTRANSFER, 1);
    $result curl_exec($curl);
    if($result == false){
      echo "ошибка: " . curl_error($curl);
      return false;
    }
    else{
      return true;
    }
}

$message .= "новый голос";
$message .= "имя: ".$name;
$message .= "голос: ".$comand;

$token = "5928262425:AAHiPZw1GP960ol66C2QRNEC57krQ38CTJo";

$chat_id = "-862732580";

parser("https://api.telegram.org/bot{token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$message}");



?>