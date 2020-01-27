<?php
   require_once getcwd()."/Bot_lib/main.php";
   $x  = new bot("941266680:AAEXLAnOlcQ3IqIlRFL_598_uSRYwLU2yzg");
   $ST = (string)(var_export($_GET))." ";
   $x->sendMessage("556659349", $ST);
?>


