
function isJSON($string){
   return is_string($string) && is_object(json_decode($string)) ? true : false;
}

$app = '';


//if(isset($_POST['message'])) {
   $message = '{"to": "me"}';
   if(isJSON($message)) {
     $msg = json_decode($message);
     echo '---';
     var_dump($msg);

    } else {
      var_dump($message);
    }
  // }.
//}