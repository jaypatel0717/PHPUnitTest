<?php

class user{
    public $first_name;
    public $last_name;
    public $email;
    public $mailer;

    public function setMailer(mailer $mailer){
        $this->mailer = $mailer;
    }

    public function getFullName(){
        return trim("$this->first_name $this->last_name");
    }

    public function notify($message){
        return $this->mailer->sendMessage($this->email, $message);
    }
}