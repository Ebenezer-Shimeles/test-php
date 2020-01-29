<?php
   require_once getcwd()."/Bot_lib/main.php";
   $x  = new bot("941266680:AAEXLAnOlcQ3IqIlRFL_598_uSRYwLU2yzg");
   $update = json_decode(file_get_contents("php://input"), TRUE);
  $chatId = $update["message"]["chat"]["id"];
    $message = $update["message"]["text"];
   $ST = $message;
   $x->sendMessage("556659349", $ST);
?>


