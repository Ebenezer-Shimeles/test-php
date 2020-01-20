<?php
    class bot{
      private $command_link;
      private $token;
      private $last_response;
      public function __construct($token){
        $this->token = $token;
        $this->command_link = "http://api.telegram.org/bot".$token."/";
        trim($this->command_link);
        $this->last_response = file_get_contents($this->command_link."getMe");
        //echo $this->last_response;
      }
      public function getLastResponse(){
        return $this->last_response;
      }
      private function command($cmd){
        $this->last_response = file_get_contents($this->command_link."$cmd");
      }
      public function sendMessage($chat_id, $txt){
        $this->command("sendMessage?chat_id=".$chat_id."&text=$txt");
      }
      public function getUpdates(){
        $this->command("getUpdates");
        return $this->last_response;
      }
      public function forwardMessage($to, $from,$msg_id){
        $this->command("forwardMessage?chat_id=$to&from_chat_id=$from&message_id=$msg_id");
      }
      public function getChatMember($chat_id,$user_id){
        $this->command("getChatMember?chat_id=$chat_id&user_id=$user_id");
        return $this->last_response;
      }
      public function getWebHookInfo(){
        $this->command("getWebHookInfo");
        return $this->last_response;
      }
    }
?>
