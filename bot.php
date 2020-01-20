<?php
    require_once 'Bot_lib\main.php';
   $x = new bot("924837550:AAFogpg3jYJlCb3z-Y-bhaPYgP-L_PeUiI8");
    //echo $x->getLastResponse();
    //echo $x->sendMessage(556659349, "HELLO MAN!");
    //echo $x->forwardMessage("556659349", "556659349", "31");
    //header("Content-type: application/json");
  echo $x->getUpdates();
  //echo $x->sendMessage("-383337888", "when r we gonna practice geo n who's gonna present??");
 // 356941894 yerosun -383337888 geeo grp
  $x->sendMessage("356941894", "yerosun!!");
    //echo $x->getChatMember("@dddddddddddddddddvnjvnfj", "-1001357201367");
   $y = new bot("1032278958:AAGXNDBlidRywlwp0dCk5yLbhR8PdswdmZY");
    echo $y->getUpdates();
    //echo $y->sendMessage("318631882", "hello");
    //echo $y->getWebHookInfo();
?>
