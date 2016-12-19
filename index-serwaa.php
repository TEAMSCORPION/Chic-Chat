<?php
  $page = $_SERVER['http://localhost/chic-chat/deploymessages.php'];
$sec = "25";
     //accepting variables from the text box on our site
  //this feature is also used for manually sending messages to the intended user 

 //saving the bot token into the variable $botToken
$botToken = "302068139:AAEL-hYNN-aERK7dCUmvZjS0ukQBN0EhC3g";
//instantiating the url for telegram
$website = "https://api.telegram.org/bot".$botToken;


$update = file_get_contents($website."/getupdates");
$update = json_decode($update, TRUE);
//getting the last array locaton of the recieved message
$current_update =end($update["result"]);
//getting the chat id of the user
$chatId = $current_update["message"]["chat"]["id"]; 
//recieving input message from the user and saving it in a variable
$newmessage=$current_update["message"]["text"];

$teleuser=$current_update["message"]["from"]["first_name"];  
//file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$messageme); 
  
   //checking the text recieved from the user and giving it an associated message
   switch($newmessage) {
        case "/start":
            $botMessage="Bot Enabled";
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text= ".$botMessage);
            break;
        case "/end":
            $botMessage="Good bye ";
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text= ".$botMessage.$teleuser);
            break;
           case "hi":
           $botMessage="hello there! how can i help you?";
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text= ".$botMessage);
            break;
        case "hello":
            $botMessage="hi  ! What can i do for you?";
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text= ".$botMessage);
            break;
         case "Hello":
            $botMessage="hi  ! What can i do for you?";
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text= ".$botMessage);
            break;
case "bye":
            $botMessage="Ok bye, it was nice chatting you";
            file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botMessage);
            break;
case "how old are you?":
            $botMessage="i'm pretty new . but im already crawling like a champion.";
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botMessage);
        break;
case "/help":
             $botMessage="check the symbol / near your text box";
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botMessage);
            break;
        case "/go":
            $botMessage="hello ";
            file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botMessage.$teleuser);
            break;
           
       
               
        ///////////////////////////////////////////////////////////////////
            case "Who are you?":
            $botMessage="I am a friendly interactive Bot :)";
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botMessage);
            break;

            case "who are you?":
            $botMessage="I am a friendly interactive Bot :)";
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botMessage);
            break;

            case "WHO ARE YOU?":
            $botMessage="I am a friendly interactive Bot :)";
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botMessage);
            break;
////////////////////////////////////////////////////////////////////////////////////
            case "how are you?"  :
            $botMessage="Fantastic !";
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botMessage);
            break;

            case "How are you?"  :
            $botMessage="Very fine!";
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botMessage);
            break;

            case "HOW ARE YOU?"  :
            $botMessage="Great!";
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botMessage);
            break;
//////////////////////////////////////////////////////////////////////////////////////
            case "What is your name?":
            $botMessage="Chic-ChatBot";
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botMessage);
            break;

             case "what is your name?":
            $botMessage="Chic-ChatBot";
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botMessage);
            break;

             case "WHAT IS YOUR NAME?":
            $botMessage="Chic-ChatBot";
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botMessage);
            break;
///////////////////////////////////////////////////////////////////////////////////
            case "Where are you from?":
            $botMessage="Valley View University";
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botMessage);
            break;

              case "where are you from?":
            $botMessage="Valley View University";
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botMessage);
            break;

            case "WHERE ARE YOU FROM?":
            $botMessage="Valley View University";
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botMessage);
            break;

//////////////////////////////////////////////////////////////////////////////
            case "What is the name of your father?" :
            $botMessage="Mr.OgunSark";
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botMessage);
            break;

            case "what is the name of your father?" :
            $botMessage="Mr.OgunSark";
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botMessage);
            break;

            case "WHAT IS THE NAME OF YOUR FATHER?" :
            $botMessage="Mr.OgunSark";
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botMessage);
            break;
//////////////////////////////////////////////////////////////////////////////
            case "What's up?":
            $botMessage="i've been learning all sort of new things. You can test my knowledge any time by asking for a fact...";
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botMessage);
            break;
            
            case "what's up?":
            $botMessage="i've been learning all sort of new things. You can test my knowledge any time by asking for a fact...";
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botMessage);
            break;
            
            case "WHAT'S UP?":
            $botMessage="i've been learning all sort of new things. You can test my knowledge any time by asking for a fact...";
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botMessage);
            break;
  ////////////////////////////////////////////////////////////////////////////////          
            case "How old are you?":
            $botMessage="i am still pretty new.
			But i'm already crawling like a champion";
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botMessage);
            break;
            
            case "how old are you?":
            $botMessage="i am still pretty new.
			But i'm already crawling like a champion";
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botMessage);
            break;

            case "HOW OLD ARE YOU?":
            $botMessage="i am still pretty new.
			But i'm already crawling like a champion";
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botMessage);
            break;
//////////////////////////////////////////////////////////////////////////////////
            case "Can we be friends?":
            $botMessage="YYayy , sure why not? I did love that ";
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botMessage.$teleuser);
            break;
            
            case "can we be friends?":
            $botMessage="YYayy , sure why not? I did love that  ";
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botMessage.$teleuser);
            break;

            case "CAN WE BE FRIENDS?":
            $botMessage="YYayy , sure why not? I did love that ";
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botMessage.$teleuser);
            break;
  ////////////////////////////////////////////////////////////////////////////////////////          
            case "Can we chat?":
            $botMessage="Sure what do you wanna talk about?";
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text= ".$botMessage.$teleuser);
            break;

             case "can we chat?":
            $botMessage="Sure what do you wanna talk about?";
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text= ".$botMessage.$teleuser);
            break;
            
             case "CAN WE CHAT?":
            $botMessage="Sure what do you wanna talk about?";
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botMessage.$teleuser);
            break;
			
				
  ///////////////////////////////////////////////////////////////////////////////////////////   
      case "i am bored?":
            $botMessage="Bored busters,coming right up!! Do you love food??";
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text= ".$botMessage.$teleuser);
            break;
			
			 case "I am bored?":
            $botMessage="Bored busters,coming right up!! Do you love food??";
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text= ".$botMessage.$teleuser);
            break;
			
			
			 case "I AM BORED?":
            $botMessage="Bored busters,coming right up!! Do you love food??";
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text= ".$botMessage.$teleuser);
            break;
              /////////////////////////////////////////////////////////////////////////////////////////// 
            case "Hey":
            $botMessage="Ahoy!! what can i do for you?";
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botMessage);
            break;
            
            case "hey":
            $botMessage="Ahoy!! what can i do for you";
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botMessage);
            break;

            case "HEY":
            $botMessage="Ahoy!! what can i do for you";
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botMessage);
            break;
   /////////////////////////////////////////////////////////////////////////////////         
            case "what is the time?":
            $botMessage="The time is ";
            $time=date("h:i:sa");
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botMessage.$time);
            break;
            
             case "What is the time?":
            $botMessage="The time is ";
            $time=date("h:i:sa");
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botMessage.$time);
            break;

             case "WHAT IS THE TIME?":
            $botMessage="The time is ";
            $time=date("h:i:sa");
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=".$botMessage.$time);
            break;
////////////////////////////////////////////////////////////////////////////////////