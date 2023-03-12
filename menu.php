<?php
    include_once 'util.php';
    class Menu {
        protected $text;
        protected $sessionId;

        function __construct($text, $sessionId){
            $this ->text =$text;
            $this ->sessionId =$sessionId;
        }
        public function mainMenuRegistered(){
            $response = "CON Reply with \n";
            $response .= "1.Give personal details\n";
            $response .= "2.Give ID number\n";
            $response .= "3.Check registration status";
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

        public function sendMoneyMenu($textArray){
            $level = count($textArray);
            if ($level == 1){ 
                echo " CON Please enter mobile number of main dependant";
            } else if ($level == 2){ 
                echo " CON Please enter number of adults in the household";
            } else if ($level == 3){ 
                echo " CON Please enter number of children in the household";
            } else if ($level == 4){ 
                echo " CON Please enter your PIN:";
            } else if ($level == 5){ 
                $response ="CON  You have " .$textArray[1]. " adults and " .$textArray[2]. " children in the household \n";
                $response .="1.Confirm\n";
                $response .="2.Cancel\n";
                $response .= util::$GO_BACK ."Back\n";
                $response .= util::$GO_TO_MAIN_MENU ."Main Menu\n";
                echo $response;
            } else if ($level == 6 && $textArray[5]== 1){
                //  confirm
                // save the information in the database
                // check if user is in legitimate need
                echo " END Your details have been received successfully and will be processed";
            } else if ($level == 6 && $textArray[5]== 2){
                //    cancel
                echo "END Thank you for using our services";
            } else if ($level == 6 && util::$GO_BACK ){
                //    cancel
                echo "END You have requested to go back";
            } else if ($level == 6 && util::$GO_TO_MAIN_MENU ){
                //    cancel
                echo "END You have requested to go to the main menu";
            } else {
                echo " END Invalid entry.";
            }

        }

        public function withdraMoneyMenu(){}

        public function checkBalanceMenu(){}

    
    }
    




?>
