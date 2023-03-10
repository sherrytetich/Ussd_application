<?php
    class Menu {
        protected $text;
        protected $sessionId;

        function __construct($text, $sessionId){
            $this ->text =$text;
            $this ->sessionId =$sessionId;
        }
        public function mainMenuRegistered(){
            $response = "CON Reply with \n";
            $response .= "1.Give name\n";
            $response .= "2.Give ID number\n";
            $response .= "3.Number of dependants";
            echo $response; 
        }

        public function mainMenuUnRegistered(){
            $response = "CON Welcome to this app.Reply with \n";
            $response .= "1.Register\n";
            echo $response;
        }
 
        public function registerMenu($textArray){
            $level = count($textArray);
            if ($level == 1){ 
                echo " CON Please enter your full name";
            } else if($level == 2){
                echo " CON Please enter your ID number";
            } else if($level == 3){
                echo " CON Please enter your location";
            } else if($level == 4){
                echo " CON Please enter your  number of dependants";
            } elseif ($level == 5) {
                $name = $textArray[1];
                $identificationNumber = $textArray[2];
                $location = $textArray[3];
                $dependants = $textArray[4];
                echo " END You have been registered successfully. Please wait for our confirmation sms";
            } else {
                echo " END You have  not been registered successfully. Please retry";
            }
        }

        public function sendMoneyMenu(){}

        public function withdraMoneyMenu(){}

        public function checkBalanceMenu(){}

    
    }
    




?>