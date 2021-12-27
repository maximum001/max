<?PHP

@system("clear");

$White    = "\033[0;37m" ;       # White

$ScriptName ="PHP MAXMenu (c) 2021 maximum001";
$Web="https://github.com/maximum001/max";

echo "$White\n#ActiveLYKA";
echo date("l");
echo "\n\n";

echo "$White";
echo "$ScriptName\n";
echo "$Web\n";

{

mainmenu();

}

function mainmenu(){
//Set font color

// Regular Colors
$Black    = "\033[0;30m" ;     //  # Black
$CRed     = "\033[0;31m" ;     //  # Red
$Blue     = "\033[0;34m" ;        # Blue
$Purple   = "\033[0;35m" ;      # Yellow
$Cyan     = "\033[0;36m" ;        # Cyan
$White    = "\033[0;37m" ;       # White
$Green    = "\033[0;32m" ;       # Green
$Yellow   = "\033[0;33m" ;      # Yellow

$hash_tags =array("lykaglobal","lykaglobalph","lykagems","Travel", "SpreadLove",
"StayBlessed","Goodluck","LYKAGlobal","LYKAEmpoweringLykans","TravelThainow2019",
"WeRiseByLiftingOthers","LykaMall","LykaGems","LykaPH","Vivalasvegas",    
"LykaGlobal","LykaShare","LykaWorld","MaxRate","LykaRetail",
"StayBlessed","Goodluck","LYKAGlobal","LYKAEmpoweringLykans","TravelThainow2019",
"WeRiseByLiftingOthers","LykaMall","LykaGems","LykaPH","Vivalasvegas",    
"LykaGlobal","travelthainow2019","LykaUltraRater","LykaMerchants","travelthainow2019",
"lykaglobal","lykaglobalph","lykagems","Travel", "SpreadLove",
"StayBlessed","Goodluck","LYKAGlobal","LYKAEmpoweringLykans","TravelThainow2019",
"LykaGlobal","LykaMall","LykaUltraRater","LykaMerchants","travelthainow2019",
"lykaglobal","lykaglobalph","lykagems","Travel", "SpreadLove",
"WeRiseByLiftingOthers","LykaMall","LykaGems","LykaPH","Vivalasvegas");

$PhoneID=['328fd81b7c77d67e','b45deff156018bb0','2868c5abc0f6d247'];
array_push($PhoneID,'564d9aef9b9a0bb7');
array_push($PhoneID,'73f2753cefee52ad');
array_push($PhoneID,'b4b16cb484de8fe9');
array_push($PhoneID,'618ad7dfb1accff8');
array_push($PhoneID,'4c036e33dc8deebf');
array_push($PhoneID,'f7df149b96c277f9');
array_push($PhoneID,'9cb5043f81f4c475');

$PhoneModel=array("iPhone 4","iPhone 4S","iPhone 5","iPhone 5c","iPhone 5s",
"iPhone 6","iPhone 6 Plus","iPhone 6s","iPhone 6s Plus",
"iPhone SE (1st generation)","iPhone 7","iPhone 7 Plus","iPhone 8",
"iPhone 8 Plus","iPhone X","iPhone XR","iPhone XS","iPhone XS Max",
"iPhone 11","iPhone 11 Pro","iPhone 11 Pro Max","iPhone SE","iPhone 12 mini","iPhone 12","iPhone 12 Pro",
"Tecno Spark 7","Tecno Spark 7 Pro","Vivo V11i","Vivo V11","Vivo V11 Pro",
"Oppo A94","Oppo A12","Vivo Z10","Samsung Galaxy S20","Vivo Y81","Vivo Nex S","Vivo Nex A","Vivo Y75s","Vivo Y83",
"Vivo X21i","Vivo Z1","Vivo Y53i","Nokia 5","Nokia 6","Vivo Y71","Vivo X21 UD","Vivo X21","Vivo V9",
"Vivo X20 Plus UD","Vivo Y75","Vivo V7","Samsung Galaxy S9","Vivo X20 Plus","Vivo X20","Vivo V7+",
"Vivo Y69","Vivo V5s","LG G+","Vivo Y66","Sony Xperia 10","Nokia 3315","Vivo Y55s","Tecno Spark 6 Air","Tecno Spark 6 Go","Vivo Xplay6",
"HTC U20 5G","Vivo X9","Google Pixel 5","OnePlus 9","OnePlus 10","Infinix Hot S10","Vivo X7","Vivo X6S Plus",
"Vivo X6S","Vivo Y31L","Oppo A2","Oppo A11","Vivo Xplay5 Elite","Vivo Y51L","Vivo X6 Plus",
"Vivo X6","Vivo Y51","Vivo Y27L","Vivo Y15S","Vivo V1Max","Vivo V1","Vivo X5Pro","Vivo X5Max+",
"Vivo X5S L","Vivo X Shot","Vivo X3S","Vivo Y15","Vivo Y22","Vivo X5Max","Nokia 3210");

$set1=[];
array_push($set1,"reneaparri");
array_push($set1,"rene_wolverine");

$set2=[];
array_push($set2,"iamaaparri");
array_push($set2,"shib_aparri");
array_push($set2,"imaparri");

array_push($set2,"maximum001");
array_push($set2,"maximum002");
array_push($set2,"maximum003");
array_push($set2,"maximum004");
array_push($set2,"maximum005");

$set3=[];
array_push($set3,"maximum010");
array_push($set3,"maximum011");
array_push($set3,"maximum012");
array_push($set3,"maximum013");
array_push($set3,"max1mum14");

$set4=[];

array_push($set4,"maximum030");
array_push($set4,"maximum031");
array_push($set4,"maximum032");
array_push($set4,"maximum033");
array_push($set4,"max1mum34");

$set5=[];

array_push($set5,"im100pretty");
array_push($set5,"im200pretty");
array_push($set5,"im300pretty");
array_push($set5,"pretty01lyca");
array_push($set5,"pretty02lyca");

$set6=[];
array_push($set6,"lykapro001");
array_push($set6,"lykapro002");
array_push($set6,"lykapro003");
array_push($set6,"icarus2022");
array_push($set6,"xianmig2022");


$myaccounts=$set1;

$myraters=[];

foreach ($set2 as $acct) {
array_push($myraters,"$acct");
}

foreach ($set3 as $acct) {
    array_push($myraters,"$acct");
    }

    foreach ($set4 as $acct) {
        array_push($myraters,"$acct");
        }
        foreach ($set5 as $acct) {
            array_push($myraters,"$acct");
            }
            foreach ($set6 as $acct) {
                array_push($myraters,"$acct");
                }
    
echo "$White\n--------- Main Menu ---------";
echo "$White\na)$Green rate posts";
echo "$White\nb)$Green add posts";
echo "$White\nc)$Green add moments";
echo "$White\nd)$Green check gems";
echo "$White\ne)$Green harvest gems";
echo "$White\nf)$Green exit menu";
echo "$White\n-----------------------------\n$Yellow";

   $inputtask = readline("Your selection : ");

   switch($inputtask) {
    case "a" : //raters to main
            @system("clear");
            ratepostmenu($myraters,$myaccounts);
            echo "\n\n";
            mainmenu();
       
    case "b" : //add posts
        @system("clear");
        addpostmomentMenu("post",$myraters,$myaccounts);
        echo "\n\n";
        mainmenu();
               
    case "c" : //add moments
        @system("clear");
        addpostmomentMenu("moment",$myraters,$myaccounts);
        echo "\n\n";
        mainmenu();
    case "d" :     
        @system("clear");
        checkgemsmenu($myraters,$myaccounts, $PhoneID, $PhoneModel);
        echo "\n\n";
        mainmenu();
    case "e" :
        @system("clear");
        harvestgemsmenu($myraters, $PhoneID, $PhoneModel);
        echo "\n\n";
        mainmenu();
    case "f" :
        echo "\nthank you";
        echo "\nscript exits\n$White\n";
        exit;  
    default :

        @system("clear");
        echo "$White\n*** Invalid selection ***\n";   
        mainmenu();

   } //end of switch..case

} //mainmenu

  # ///////////////////////////////////////////
  # // checkgems
  # //
  # //////////////////////////////////////////

// THIS IS THE MENU FOR CHECKGEMS  
function checkgemsmenu($myraters,$myaccounts, $PhoneID, $PhoneModel)
{

    $Cyan     = "\033[0;36m" ;        # Cyan
    $White    = "\033[0;37m" ;       # White
    $Green    = "\033[0;32m" ;       # Green
    $Yellow   = "\033[0;33m" ;      # Yellow

$ScriptName ="CHECK GEMS (c) 2021 maximum001";
$Web="https://github.com/maximum001/max";

echo "$White";
echo "$ScriptName\n";
echo "$Web\n\n";
echo "\nCHECK GEMS Menu\n";
echo "-----------------------------";
echo "$White\n1)$Green main accounts";
echo "$White\n2)$Green raters accounts";
echo "$White\n3)$Green other account";
echo "$White\n4)$Green back to main";
echo "$White\n-----------------------------\n$Yellow";

   $inputtask = readline("Your selection : ");

   switch($inputtask) {
      case "1" : //post to main
        @system("clear");
        checkmaxgems($myaccounts, "main", $PhoneID, $PhoneModel); 
        echo "\n\n";
        mainmenu();      
      case "2" : //post to raters
        @system("clear");
        checkmaxgems($myraters, "raters", $PhoneID, $PhoneModel); 
        echo "\n\n";
        mainmenu();      
    case "3" : //post to raters
        @system("clear");
        checkmaxgems($myraters, "other", $PhoneID, $PhoneModel); 
        echo "\n\n";
        mainmenu();      
          
    case "4" :
       @system("clear");
       echo "\n\n";
       mainmenu();   

    default :
       @system("clear");
       echo "\n\n";
       mainmenu();   
   }     
return;

}

  # ///////////////////////////////////////////
  # // checkgems
  # //
  # //////////////////////////////////////////

  //SUB ROUTINE
  function checkmaxgems($accounts,$accounttype,$PhoneID, $PhoneModel)
  {
   $Cyan     = "\033[0;36m" ;        # Cyan
   $White    = "\033[0;37m" ;       # White
   $Green    = "\033[0;32m" ;       # Green
   $Yellow   = "\033[0;33m" ;      # Yellow
   
   $ScriptName ="checkgems (c) 2021 maximum001";
   $Web="https://github.com/maximum001/max";

   echo "$White";
   echo "$ScriptName\n";
   echo "$Web\n\n";
   echo "How many GEMS do you have?\n";
  
   if($accounttype == "other")
   {
    $maxaccounts=[];
    $acct=0;
    echo "$Yellow\n";
    echo "Input username to check GEMS\n";
    echo "press enter when done\n$Green\n";
    do {
        $inputusername = readline("Username : ");
        if ($inputusername !='') {
        array_push($maxaccounts, "$inputusername",);
        $acct=1;
        }
    } while ($inputusername !='');
    
    if ($acct == 0)
    {
        echo "$Yellow";
        echo "> pls. enter atleast one (1) username\n\n";
            mainmenu(); 
    }

   }

   echo "$Yellow\n";
   echo "Input $accounttype account password\n$Green\n";
   $mainpassword=readline('Password : ');
   if ($mainpassword == '')
   {
       echo "$Yellow\n**empty password**\n";
       mainmenu();    
   }
   
   if ($accounttype != "other")
   {
   $maxaccounts = $accounts; 
   }

   @system("clear");
   echo "$White\n";
   echo "$ScriptName\n";
   echo "$Web\n$Yellow\n";
   echo "details have been collected\n";
   echo "let's check your GEMS...\n\n";
   sleep(2);

   checkgems($maxaccounts,$mainpassword,$PhoneID, $PhoneModel);
   return;
}
// AN OOP we can use anywhere
function checkgems($maxaccounts,$mainpassword,$PhoneID, $PhoneModel)
{
   $Cyan     = "\033[0;36m" ;        # Cyan
   $White    = "\033[0;37m" ;       # White
   $Green    = "\033[0;32m" ;       # Green
   $Yellow   = "\033[0;33m" ;      # Yellow

   $total=0;
   
   printf("$White%'-30s\n","");

   $xcount=0;
   foreach ($maxaccounts as $activeAcct) {
   $xcount++; 
   $devID=uniqid('dfc'); //$PhoneID[rand(0,9)];
   $DevName=$PhoneModel[rand(0,50)];

       #Login to each account
   
       $urll = "https://identity.mylykaapps.com/useraccounts/login";
       $curll = curl_init($urll);
       curl_setopt($curll, CURLOPT_URL, $urll);
       curl_setopt($curll, CURLOPT_POST, true);
       curl_setopt($curll, CURLOPT_RETURNTRANSFER, true);
       $headerss = array("Content-Type: application/json", "user-agent:Lyka/3.6.65 (com.thingsilikeapp; build:865 Android O_MR1 28)");
       curl_setopt($curll, CURLOPT_HTTPHEADER, $headerss);
       $DeviceInfo = <<<DATA
       {
       "countryCode": "US",
       "device": {
       "deviceId": "$devID",
       "deviceImei": "$devID",
       "deviceModel": "$DevName",
       "deviceName": "$DevName",
       "deviceOs": "Android",
       "isEmulator": false,
       "notificationToken": "eEBjxYrDSJyFw7N-DpEGNG:APA91bEZnWo-TDdSgVCzQcJq3gHioJtFThNyxw6PsgOCI1JHDzd55yqG-QZwAZRj4pwICrXo5VODiUYom7Fsf4Ql66-CWHFumNA2ynrKEP21bstPBMgwsN-3G_Ek0ZLcoKtVMg5oN6-gz",
       "osVersion": "11"
     },
     "password": "$mainpassword",
     "username": "$activeAcct"
   }
   DATA;
       curl_setopt($curll, CURLOPT_POSTFIELDS, $DeviceInfo);
       $respp = curl_exec($curll);
       curl_close($curll);
       $jsonn = json_decode($respp);
       $msgn = $jsonn->message;

       if ($msgn=="User logged in")
       {
       $status = $jsonn->status;
       $vuser = $jsonn->data->username;
       $bearer = $jsonn->data->token->accessToken;
       $json = json_decode($respp);  

       $TotalGEMS = getgembalance($bearer);
       
       echo "$White";  
       printf("%2s) %-15s GEMS >$Green %.2f\n",$xcount,$activeAcct,$TotalGEMS);
       $total=$total + $TotalGEMS;
   
     } //end of user logged in
   
   } //end of loop for each account
   
     printf("\n$White%'-30s\n","");
     printf("%-15s GEMS >$Yellow %.2f\n","Total",$total);
     echo "$White\n";
      
   } //end checkgems


#   ///////////////////////////////////////////
#   //harvestmaxgems
#   //
#   //////////////////////////////////////////

//////////////////////////////////////////////
function harvestgemsmenu($accounts, $PhoneID, $PhoneModel)
{

    $Cyan     = "\033[0;36m" ;        # Cyan
    $White    = "\033[0;37m" ;       # White
    $Green    = "\033[0;32m" ;       # Green
    $Yellow   = "\033[0;33m" ;      # Yellow

$ScriptName ="HARVEST GEMS (c) 2021 maximum001";
$Web="https://github.com/maximum001/max";

echo "$White";
echo "$ScriptName\n";
echo "$Web\n\n";
echo "\nHARVEST GEMS Menu\n";
echo "-----------------------------";
echo "$White\n1)$Green from raters accounts";
echo "$White\n2)$Green from other accounts";
echo "$White\n3)$Green back to main";
echo "$White\n-----------------------------\n";

   $inputtask = readline("Your selection : ");

   switch($inputtask) {
      case "1" : //post to main
        @system("clear");
        harvestmaxgems($accounts, "raters", $PhoneID, $PhoneModel); 
        echo "\n\n";
        mainmenu();      
      case "2" : //post to raters
        @system("clear");
        harvestmaxgems("", "other", $PhoneID, $PhoneModel); 
        echo "\n\n";
        mainmenu();      
      
      case "3" :
       @system("clear");
       echo "\n\n";
       mainmenu();   

      default :
       @system("clear");
       echo "\n\n";
       mainmenu();   
   }     
return;


}

  function harvestmaxgems($accounts, $acctType, $PhoneID, $PhoneModel)
  {
   $Cyan     = "\033[0;36m" ;        # Cyan
   $White    = "\033[0;37m" ;       # White
   $Green    = "\033[0;32m" ;       # Green
   $Yellow   = "\033[0;33m" ;      # Yellow

       $ScriptName ="harvestmax (c) 2021 maximum001";
       $Web="https://github.com/maximum001/max";

       echo "$White";
       echo "$ScriptName\n";
       echo "$Web\n\n";
       echo "Let's harvest max GEMS\n";

       echo "$White\n";
       echo "Note: GEMS will be sent to$Green [reneaparri]\n";

       if($acctType == "other")
       {
        $maxaccounts=[];
        $acct=0;
        echo "\n$Yellow\n";
        echo "Input username to harvest GEMS from\n";
        echo "press enter when done\n$Green\n";
        do {
            $inputusername = readline("Username : ");
            if ($inputusername !='') {
            array_push($maxaccounts, "$inputusername",);
            $acct=1;
            }
        } while ($inputusername !='');
        
        if ($acct == 0)
        {
            echo "$Yellow";
            echo "> pls. enter atleast one (1) username\n\n";
                mainmenu(); 
        }
    
       }
   
       echo "$Yellow\n";
       echo "Input $acctType account password\n$Green\n";
       $mainpassword=readline('Password : ');
       if ($mainpassword == '')
       {
           echo "$Yellow\n**empty password**\n\n";
           mainmenu();    
       }
       
       if ($acctType != "other")
       {
       $maxaccounts = $accounts; 
       }
   
       //get the account where the harvested gems will be sent

   /*    echo "\nGEMS will be sent to [reneaparri]\n";
       echo "(blank) cancel harvest\n$Green\n";
       $GEMReceiver=readline('Username : ');

       if ($GEMReceiver == '')
       {
           echo "$Yellow\nno recipient entered\n\n";
           mainmenu();
       }
   */

       @system("clear");
       echo "$White\n";
       echo "$ScriptName\n";
       echo "$Web\n$Yellow\n";
       echo "details have been collected\n";
       echo "let's harvest your GEMS...\n$White\n";
       sleep(2);
       
       $harvestedgems=0;

       echo "Recipient >$Yellow [reneaparri]\n$White";
       printf("$White%'-40s\n","");

       $xcount=0;
       foreach ($maxaccounts as $activeAcct) {

       $xcount++; 
       $devID=uniqid('fed'); //$PhoneID[rand(0,9)];
       $DevName=$PhoneModel[rand(0,50)];

           //Login to each account

           $urll = "https://identity.mylykaapps.com/useraccounts/login";
           $curll = curl_init($urll);
           curl_setopt($curll, CURLOPT_URL, $urll);
           curl_setopt($curll, CURLOPT_POST, true);
           curl_setopt($curll, CURLOPT_RETURNTRANSFER, true);
           $headerss = array("Content-Type: application/json", "user-agent:Lyka/3.6.65 (com.thingsilikeapp; build:865 Android O_MR1 28)");
           curl_setopt($curll, CURLOPT_HTTPHEADER, $headerss);
           $DeviceInfo = <<<DATA
           {
           "countryCode": "US",
           "device": {
           "deviceId": "$devID",
           "deviceImei": "$devID",
           "deviceModel": "$DevName",
           "deviceName": "$DevName",
           "deviceOs": "Android",
           "isEmulator": false,
           "notificationToken": "eEBjxYrDSJyFw7N-DpEGNG:APA91bEZnWo-TDdSgVCzQcJq3gHioJtFThNyxw6PsgOCI1JHDzd55yqG-QZwAZRj4pwICrXo5VODiUYom7Fsf4Ql66-CWHFumNA2ynrKEP21bstPBMgwsN-3G_Ek0ZLcoKtVMg5oN6-gz",
           "osVersion": "11"
           },
           "password": "$mainpassword",
           "username": "$activeAcct"
           }
           DATA;
           curl_setopt($curll, CURLOPT_POSTFIELDS, $DeviceInfo);
           $respp = curl_exec($curll);
           curl_close($curll);
           $jsonn = json_decode($respp);
           $msgn = $jsonn->message;

       if ($msgn=="User logged in")
       {    
           $status = $jsonn->status;
           $verifiedAcct = $jsonn->data->username;
           $bearer = $jsonn->data->token->accessToken;
           $json = json_decode($respp);  

           $TotalGEMS=getgembalance($bearer);
           
/*            $urlx = "https://users.mylykaapps.com/api/v3/users/searchsuggestedpeople?searchText=$GEMReceiver&os=android&pageIndex=1&pageSize=16";
           $curlx = curl_init($urlx);
           curl_setopt($curlx, CURLOPT_URL, $urlx);
           curl_setopt($curlx, CURLOPT_RETURNTRANSFER, true);
           $headersx = array("user-agent:Lyka/3.6.65 (com.thingsilikeapp; build:865 Android O_MR1 28)", "authorization: Bearer $bearer",);
           curl_setopt($curlx, CURLOPT_HTTPHEADER, $headersx);
           $respx = curl_exec($curlx);
           curl_close($curlx);

           $jsonx = json_decode($respx, true);
           $uidx = $jsonx["data"]["0"]["id"];
           $usernamex = $jsonx["data"]["0"]["userName"];
       
           var_dump($jsonx);
           exit;
           
           //reneaparri UserID =700018572395
*/
//           if ($GEMReceiver == $usernamex)
//            {

               $recID="700018572395";

               $SendGEMURL = "https://wallets.mylykaapps.com/api/v3/wallets/SendGem";
               $curlGEMS = curl_init($SendGEMURL);
               $headerGEMS = 
               array("authorization:Bearer $bearer", 
               "user-agent:Lyka/3.6.65 (com.thingsilikeapp; build:865 Android 11))", 
               "deviceos: android", "Content-Type: application/json",);
               curl_setopt($curlGEMS, CURLOPT_URL, $SendGEMURL);
               curl_setopt($curlGEMS, CURLOPT_POST, true);
               curl_setopt($curlGEMS, CURLOPT_RETURNTRANSFER, true);
               curl_setopt($curlGEMS, CURLOPT_HTTPHEADER, $headerGEMS);
               $databals = '{
               "amount":"' . $TotalGEMS . '",
               "device":{
                   "deviceId":"$devID",
                   "deviceImei":"$devID",
                   "deviceModel":"$DevName",
                   "deviceName":"$DevName",
                   "deviceOs":"Android",
                   "isEmulator":false,
                   "notificationToken":"eFEXEC5pTAeXLu7JjIlpNX:APA91bF8I2ZGs8wUNDjpw5lSnzrz8fB652HYMxWBdTGtFRSUaBEd0pHZQvWXAd00ESKVUO_VtYieRQxtfEU7f3RUIHEs5zXGZSVqk5PfbzjZTJQcue0vHYRiEobXHk8JUlTa0nmPCdgR",
                   "osVersion":"11"
               },
               "recipientId":' . $recID . '}';

               curl_setopt($curlGEMS, CURLOPT_POSTFIELDS, $databals);
               $respbals = curl_exec($curlGEMS);
               curl_close($curlGEMS);

               $jsonbals = json_decode($respbals);
               //echo $jsonbals->message;

               echo "$White";
               printf("%2s) %-15s GEMS >$Green %.2f >$Cyan sent\n",$xcount,$activeAcct,$TotalGEMS);

               $harvestedgems =$harvestedgems+$TotalGEMS;
//            } else {
//                echo "$Yellow\nerror confirming recipient\n";
//                echo "no GEMS was transferred\n$White\n";
//                    }
               
           usleep(100000);
       
       } else {
           echo "$Yellow\n";
           echo "$msgn\n\n";
           break;
       }  //end of User logged in  
       } //end of loop for each acct

       printf("\n$White%'-40s\n","");
       printf ("%-15s GEMS >$Green %.2f\n","Total harvested",$harvestedgems);
       echo "$White\n\n";

       mainmenu();

  } //end harverstmaxgems

///////////////////////////////////////////////////////


// THIS IS THE MENU FOR RATEPOST  
function ratepostmenu($myraters, $myaccounts)
{

    $Cyan     = "\033[0;36m" ;        # Cyan
    $White    = "\033[0;37m" ;       # White
    $Green    = "\033[0;32m" ;       # Green
    $Yellow   = "\033[0;33m" ;      # Yellow

$ScriptName ="RATE POSTS (c) 2021 maximum001";
$Web="https://github.com/maximum001/max";

echo "$White";
echo "$ScriptName\n";
echo "$Web\n\n";
echo "\nRATE POSTS Menu\n";
echo "-----------------------------";
echo "$White\n1)$Cyan main  <> main accounts";
echo "$White\n2)$Cyan raters <> main accounts";
echo "$White\n3)$Cyan raters <> other account";
echo "$White\n4)$Cyan other <> other account";
echo "$White\n5)$Cyan back to main";
echo "$White\n-----------------------------\n";

   $inputtask = readline("Your selection : ");

   switch($inputtask) {
    case "1" : //main to main
        @system("clear");
        max2max($myaccounts,$myaccounts);
        echo "\n\n";
        mainmenu();

    case "2" : //raters to main
        @system("clear");
        max2max($myraters,$myaccounts);
        echo "\n\n";
        mainmenu();        

    case "3" : //raters to other
        @system("clear");
        max2u($myraters);     
        echo "\n\n";
        mainmenu();        

    case "4" : //other to other
        @system("clear");
        other2other();     
        echo "\n\n";
        mainmenu();        
    
    case "4" : //other
        @system("clear");
        echo "\n\n";
        mainmenu();        
            
    default :
       @system("clear");
       echo "\n\n";
       mainmenu();   
   }     
return;

}

 /*///////////////////////////////////////////
   // max2max
   //
   ////////////////////////////////////////// */


function max2max($raters,$acct2rate)
{
    $Cyan     = "\033[0;36m" ;        # Cyan
    $White    = "\033[0;37m" ;       # White
    $Green    = "\033[0;32m" ;       # Green
    $Yellow   = "\033[0;33m" ;      # Yellow
    
    $ScriptName ="main <> main | raters <> main";
    $Web="https://github.com/maximum001/max";

    echo "$White";
    echo "$ScriptName\n";
    echo "$Web\n\n";
    echo "rating of posts\n";
    
    //should use one password per raters account
    echo "$Yellow\n";
    echo "Input RATERS password\n$Green\n";
    $mainpassword=readline('Password : ');
    if ($mainpassword == '')
    {
        echo "$Yellow\n**empty password**\n\n";
        mainmenu();    }
    
    ratemypost($ScriptName,$Web,$raters,$mainpassword,$acct2rate);
    return;

}   //end of max2max

#   ///////////////////////////////////////////
#   // max2u
#   //
#   //////////////////////////////////////////

function max2u($raters)
{
    $Cyan     = "\033[0;36m" ;        # Cyan
    $White    = "\033[0;37m" ;       # White
    $Green    = "\033[0;32m" ;       # Green
    $Yellow   = "\033[0;33m" ;      # Yellow

    $ScriptName ="RATERS to max-rate your account";
    $Web="https://github.com/maximum001/max";

    echo "$White";
    echo "$ScriptName\n";
    echo "$Web\n\n";
    echo "Needed: your usernames to RATE\n";
    
 
        #get acct names to rate
        $acct2rate=[];
        $acct=0;
        
        echo "$Yellow\n";
        echo "Input Usernames [max of 4] to RATE\n";
        echo "press enter when done\n$Green\n";
        do {
            $inputusername = readline("Username : ");
            if ($inputusername !='') {
                array_push($acct2rate, "$inputusername",);
                $acct++;
            } else { break;}
        } while ($acct != 4);
         
         if ($acct == 0)  {
             echo "$Yellow";
             echo "> no username to RATE entered\n\n";
                mainmenu(); 
                }

    //should use one password per raters account
    echo "$Yellow\n";
    echo "Input RATERS password\n$Green\n";
    $mainpassword=readline('Password : ');
    if ($mainpassword == '')
    {
        echo "$Yellow\n**empty password**\n\n";
        mainmenu();    }

    ratemypost($ScriptName,$Web,$raters,$mainpassword,$acct2rate);
    return;
          

} //end of max2u

 #  ///////////////////////////////////////////
 #  // allmax2u
 #  //
 #  //////////////////////////////////////////

function allmax2u($myraters,$myaccounts)
{

    $Cyan     = "\033[0;36m" ;        # Cyan
    $White    = "\033[0;37m" ;       # White
    $Green    = "\033[0;32m" ;       # Green
    $Yellow   = "\033[0;33m" ;      # Yellow
    
    $ScriptName ="allmax2u max(c) 2021 maximum001";
    $Web="https://github.com/maximum001/max";    

echo "$White";
echo "$ScriptName\n";
echo "$Web\n\n";
echo "let max[all] do the rating of your posts\n";

#should use one password per raters account
echo "$Yellow\n";
echo "Input max password\n$Green\n";
$mainpassword=readline('Password : ');
if ($mainpassword == '')
{
    echo "$Yellow\n**empty password**\n\n";
        mainmenu();}
////////
    $raters=$myraters;
///////
    foreach($myaccounts as $acct){
    array_push($raters,"$acct");
    }
//////
//$raters=$myaccounts;

#get acct names to rate
$acct2rate=[];
$acct=0;

echo "$Yellow\n";
echo "Input Usernames [max of 4] to RATE\n";
echo "press enter when done\n$Green\n";
do {
    $inputusername = readline("Username : ");
    if ($inputusername !='') {
        array_push($acct2rate, "$inputusername",);
        $acct++;
    } else { break;}
} while ($acct != 4);
 
 if ($acct == 0)  {
     echo "$Yellow";
     echo "> no username to RATE entered\n\n";
        mainmenu(); 
        }

 ratemypost($ScriptName,$Web,$raters,$mainpassword,$acct2rate);
 return;

} //end of allmax2u


function other2other()
{

    $Cyan     = "\033[0;36m" ;        # Cyan
    $White    = "\033[0;37m" ;       # White
    $Green    = "\033[0;32m" ;       # Green
    $Yellow   = "\033[0;33m" ;      # Yellow
    
    $ScriptName ="other 2 other (c) 2021 maximum001";
    $Web="https://github.com/maximum001/max"; 

echo "$White";
echo "$ScriptName\n";
echo "$Web\n\n";
echo "let's rate each others posts\n";

$raters = [];
$usr=0;
echo "$Yellow\n";
echo "Input RATERS username\n";
echo "press enter when done\n$Green\n";
do {
   $username = readline('Username : ');
  if ($username !='') {
   array_push($raters, "$username",);
   $usr=1;
   }
} while ($username !='');

if ($usr != 1)
{
    echo "$Yellow\n";
    echo "no RATERS username was entered\n";
    echo "pls. enter atleast one (1) username\n\n";
    mainmenu();}

#should use one password for all accounts
echo "$Yellow\n";
echo "Input the password of your accounts\n$Green\n";
$mainpassword=readline('Password : ');
if ($mainpassword == '')
{
    echo "$Yellow";
    echo "\n**empty password**\n\n";
        mainmenu();
}

$acct2rate=[];
$acct=0;

echo "$Yellow\n";
echo "Input Usernames [max of 4] to RATE\n";
echo "press enter when done\n$Green\n";
do {
    $inputusername = readline("Username : ");
    if ($inputusername !='') {
        array_push($acct2rate, "$inputusername",);
        $acct++;
    } else { break;}
} while ($acct != 4);
 
 if ($acct == 0)  {
     echo "$Yellow";
     echo "> no username to RATE entered\n\n";
        mainmenu(); 
        }

ratemypost($ScriptName,$Web,$raters,$mainpassword,$acct2rate);
return;

} //end of other2other


   #///////////////////////////////////////////
   #// ratemypost
   #//
   #//////////////////////////////////////////

function ratemypost($ScriptName,$Web,$raters,$mainpassword,$acct2rate)
{

// Regular Colors
$Cyan     = "\033[0;36m" ;        # Cyan
$White    = "\033[0;37m" ;       # White
$Green    = "\033[0;32m" ;       # Green
$Yellow   = "\033[0;33m" ;      # Yellow

$PhoneID=['df0439087259ad38','a5ead687bdb3729c','87a87fe99d0039a5'];
array_push($PhoneID,'7d7e6f904741daea');
array_push($PhoneID,'9f78dab798ab0324');
array_push($PhoneID,'83d23b76250d2a97');
ARRAY_push($PhoneID,'7ae21b1182e2a323');
array_push($PhoneID,'29b3e709883d7321');
array_push($PhoneID,'c51e10db899a4cc4');
array_push($PhoneID,'47db99101c533bc5');

$PhoneModel=array("iPhone 4","iPhone 4S","iPhone 5","iPhone 5c","iPhone 5s",
"iPhone 6","iPhone 6 Plus","iPhone 6s","iPhone 6s Plus",
"iPhone SE (1st generation)","iPhone 7","iPhone 7 Plus","iPhone 8",
"iPhone 8 Plus","iPhone X","iPhone XR","iPhone XS","iPhone XS Max",
"iPhone 11","iPhone 11 Pro","iPhone 11 Pro Max","iPhone SE","iPhone 12 mini","iPhone 12","iPhone 12 Pro",
"Tecno Spark 7","Tecno Spark 7 Pro","Vivo V11i","Vivo V11","Vivo V11 Pro",
"Oppo A94","Oppo A12","Vivo Z10","Samsung Galaxy S20","Vivo Y81","Vivo Nex S","Vivo Nex A","Vivo Y75s","Vivo Y83",
"Vivo X21i","Vivo Z1","Vivo Y53i","Nokia 5","Nokia 6","Vivo Y71","Vivo X21 UD","Vivo X21","Vivo V9",
"Vivo X20 Plus UD","Vivo Y75","Vivo V7","Samsung Galaxy S9","Vivo X20 Plus","Vivo X20","Vivo V7+",
"Vivo Y69","Vivo V5s","LG G+","Vivo Y66","Sony Xperia 10","Nokia 3315","Vivo Y55s","Tecno Spark 6 Air","Tecno Spark 6 Go","Vivo Xplay6",
"HTC U20 5G","Vivo X9","Google Pixel 5","OnePlus 9","OnePlus 10","Infinix Hot S10","Vivo X7","Vivo X6S Plus",
"Vivo X6S","Vivo Y31L","Oppo A2","Oppo A11","Vivo Xplay5 Elite","Vivo Y51L","Vivo X6 Plus",
"Vivo X6","Vivo Y51","Vivo Y27L","Vivo Y15S","Vivo V1Max","Vivo V1","Vivo X5Pro","Vivo X5Max+",
"Vivo X5S L","Vivo X Shot","Vivo X3S","Vivo Y15","Vivo Y22","Vivo X5Max","Nokia 3210");


@system("clear");
echo "$White\n";
echo "$ScriptName\n";
echo "$Web\n$Yellow\n";
echo "we gathered all the things needed\n";
echo "rating posts will start...\n\n";
sleep(2);

#/////////////////// start rating ////////////////////

$noofraters=count($raters);
$rated=0;

foreach ($raters as $currentRater) :  #//raters

    #login to raters
    $devID= uniqid('bae');//$PhoneID[rand(0,9)];
    $DevName=$PhoneModel[rand(0,50)];
    $rated++;
    
//    echo "\n$White";
//    printf("%-15s | %s/%s\n","Rater No.",$rated,$noofraters);
//    printf("%-15s | %s\n","Username",$currentRater);

    $urll = "https://identity.mylykaapps.com/useraccounts/login";
    $curll = curl_init($urll);
    curl_setopt($curll, CURLOPT_URL, $urll);
    curl_setopt($curll, CURLOPT_POST, true);
    curl_setopt($curll, CURLOPT_RETURNTRANSFER, true);
    $headerss = array("Content-Type: application/json", "user-agent:Lyka/3.6.65 (com.thingsilikeapp; build:865 Android O_MR1 30)");
    curl_setopt($curll, CURLOPT_HTTPHEADER, $headerss);
    $DeviceInfo = <<<DATA
    {
    "countryCode": "US",
    "device": {
    "deviceId"          : "$devID", 
    "deviceImei"        : "$devID",
    "deviceModel"       : "$DevName",
    "deviceName"        : "$DevName",
    "deviceOs"          : "Android",
    "isEmulator"        : false,
    "notificationToken" : "eEBjxYrDSJyFw7N-DpEGNG:APA91bEZnWo-TDdSgVCzQcJq3gHioJtFThNyxw6PsgOCI1JHDzd55yqG-QZwAZRj4pwICrXo5VODiUYom7Fsf4Ql66-CWHFumNA2ynrKEP21bstPBMgwsN-3G_Ek0ZLcoKtVMg5oN6-gz",
    "osVersion"         : "11"
    },
    "password"          : "$mainpassword",
    "username"          : "$currentRater"
    }
    DATA;
    
    curl_setopt($curll, CURLOPT_POSTFIELDS, $DeviceInfo);
    $respp = curl_exec($curll);
    curl_close($curll);
    sleep(1);
    $jsonn = json_decode($respp);
    $msgn = $jsonn->message;

    if ($msgn == "User logged in") {

    $status = $jsonn->status;
    $vuser = $jsonn->data->username;
    $bearer = $jsonn->data->token->accessToken;
    $json = json_decode($respp);  
    
    #display raters gems
    //echo "$White";
    //printf("%-15s | %.2f\n","GEMS",getgembalance($bearer));
    //getgembalance($bearer);
    echo "$Cyan\n";
    echo "$msgn\n";
    
    # loop to each account to rate
    $toratecount=count($acct2rate);
    $donerating=0;
    foreach ($acct2rate as $BeingRated) : 
    
        $donerating++;
        if ($currentRater != $BeingRated) : #avoid rating own post
              
        $urlm = "https://users.mylykaapps.com/api/v3/users/searchsuggestedpeople?searchText=$BeingRated&os=android&pageIndex=1&pageSize=16";
        $curlm = curl_init($urlm);
        curl_setopt($curlm, CURLOPT_URL, $urlm);
        curl_setopt($curlm, CURLOPT_RETURNTRANSFER, true);
        $headersm = array("user-agent:Lyka/3.6.65 (com.thingsilikeapp; build:865 Android O_MR1 28)", "authorization: Bearer $bearer",);
        curl_setopt($curlm, CURLOPT_HTTPHEADER, $headersm);
        $respm = curl_exec($curlm);
        curl_close($curlm);
    
        $jsonm = json_decode($respm, true);
        $verifiedaccountID = $jsonm["data"]["0"]["id"];
        $verifiedaccount = $jsonm["data"]["0"]["userName"];
    
        if ($BeingRated == $verifiedaccount) :
            echo "$White\n";
            printf("%-5s (%2s/%2s) | %-15s\n","Rater",$rated,$noofraters,$currentRater);
            printf("%-5s (%2s/%2s) | %-15s\n","Rated",$donerating,$toratecount,$BeingRated);
  
            usleep(300000);  
            $urld = "https://profiles.mylykaapps.com/api/v3/profiles/GetProfilePosts?os=android&pageIndex=1&pageSize=50&id=$verifiedaccountID&category=ALL";
            $curld = curl_init($urld);
            curl_setopt($curld, CURLOPT_URL, $urld);
            curl_setopt($curld, CURLOPT_RETURNTRANSFER, true);
            $headersd = array("authorization: Bearer $bearer", "user-agent:Lyka/3.6.65 (com.thingsilikeapp; build:865 Android 11)",);
            curl_setopt($curld, CURLOPT_HTTPHEADER, $headersd);
            $respd = curl_exec($curld);
            curl_close($curld);
    #       $jsond = json_decode($respd, true);
      
            $arr = json_decode($respd, true);
       
          //  var_dump($arr["data"]);
          //  exit;
                   $x=0;
                   do {
                       $pid[$x] = $arr["data"]["$x"]["id"];
                       $x++;
                   } while ($x !=10);
    
    #actual rating of posts
    #loop 10 times
                    $PostNum=0;
                    $xcount=1;
                    do {
                        $devID=uniqid('eab');//$PhoneID[rand(0,9)];
                        $DevName=$PhoneModel[rand(0,50)];
                    
                        echo "$White"; 
                       // echo "..rating$Green #$xcount ";
                        printf("%-8s $Green %2s ","..rating","$xcount");

                        $url = "https://posts.mylykaapps.com/api/v3/posts/ratepost";
                        $headers = array("authorization:Bearer $bearer", "user-agent:Lyka/3.6.65 (com.thingsilikeapp; build:865 Android O_MR1 28))", "deviceos: android", "Content-Type: application/json",);
                        $curl = curl_init($url);
                        curl_setopt($curl, CURLOPT_URL, $url);
                        curl_setopt($curl, CURLOPT_POST, true);
                        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
                        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
                        $data = <<<DATA
                    {
                        "device": {
                        "deviceId"         : "$devID",
                        "deviceImei"       : "$devID",
                        "deviceModel"      : "$DevName",
                        "deviceName"       : "$DevName",
                        "deviceOs"         : "Android",
                        "isEmulator"       : false,
                        "notificationToken": "eEBjxYrDSJyFw7N-DpEGNB:APA91bEZnWo-TRdSgVCzQcJq3gHioJtFThNyxw6PsgOCI1JHDzd55yqG-QZwAZRj4pwICrXo5VDiUYom7Fsf4Ql66-CWHFumNA2ynrKEP21bstPBMgwsN-3G_Ek0ZLcoKtVMg5oN6-pg",
                        "osVersion"        : "11"
                        },
                        "postId": $pid[$PostNum],
                        "rate": 5,
                        "userid": $verifiedaccountID
                    }
                    DATA;
                        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
                        $resp = curl_exec($curl);
                        curl_close($curl);
                        $json = json_decode($resp);
                        echo "$Cyan";
                        $postmessage=$json->message;
                        
                        if ($postmessage != '')
                        {    
                        
                        if (strstr($postmessage,'Congratulations')) {
                            echo " > rated 10 posts \n";
                        } elseif ($postmessage=="You already have rated this post.")
                        {
                         echo " > already rated\n";    
                        } elseif (strstr($postmessage,'Too many')) {
                            echo " > slow or no internet\n";
                            sleep(2);
                        } elseif (strstr($postmessage,'Forbidden')) {
                            echo " > forbidden\n";
                            sleep(2);
                        } elseif (strstr($postmessage,"Post rating")) {
                           echo " > earnings saved\n";    
                        } else {
                           echo " > $postmessage\n";     
                        }
                        } else { echo " > undefined error\n";  }
                            
                        $PostNum++;
                        $xcount++;

                        usleep(500000);
    
                    } while ($PostNum !=10);

                    echo "$White\n[$BeingRated] >>> ratings done\n";
                    echo "-------------\n";   
   #                 //// end of do...while /////////
                else :
                    echo "\n$Yellow >> error connecting to [$BeingRated]\n"  ; 
                     
                endif;
                  
                else:
                    echo "\n$Yellow >> skip rating [$BeingRated]\n";
    
            endif; //raters!=rated
                sleep(2);
           endforeach;
  #  ///////////// end of loop to each account to rate /////////////
  
    } else {
        echo "$Yellow";
        echo "$msgn\n";
        echo "$White";
        break;
    }  #// endif
    
    sleep(2);
    
    endforeach;
    
     echo "\n$White\n";
     echo "Summary - displaying earned GEMS\n";
     checkgems($raters,$mainpassword,$PhoneID, $PhoneModel);


    echo "$White\n\n";
 //   echo "$ScriptName\n";
 //   echo "$Web\n\n\n";
    
    return;
 #   ///////////////// end of foreach loop to raters account //////////////////

   } // end of ratemypost


#    ///////////////////////////////////////////
#    // getgembalance
#    //
#    //////////////////////////////////////////

function addpostmomentMenu($posttype,$myraters,$myaccounts)
{
    $Cyan     = "\033[0;36m" ;        # Cyan
    $White    = "\033[0;37m" ;       # White
    $Green    = "\033[0;32m" ;       # Green
    $Yellow   = "\033[0;33m" ;      # Yellow

$ScriptName ="add a $posttype (c) 2021 maximum001";
$Web="https://github.com/maximum001/max";

echo "$White";
echo "$ScriptName\n";
echo "$Web\n\n";
echo "\nAdd $posttype menu ----\n";
echo "$White\n1)$Green main accounts";
echo "$White\n2)$Green raters accounts";
echo "$White\n3)$Green other account";
echo "$White\n4)$Green back to main";
echo "$White\n-----------------------------\n";

   $inputtask = readline("Your selection : ");

   switch($inputtask) {
      case "1" : //post to main
        @system("clear");
        $myraters=[];
        postit($myraters,$myaccounts,"$posttype"); 
        echo "\n\n";
        exit;
      
      case "2" : //post to raters
        @system("clear");
        $myaccounts=[];        
        postit($myraters,$myaccounts,"$posttype");
        echo "\n\n";
        exit;
      
      case "3" : //post to other 
       @system("clear");
       post2others("$posttype");
       echo "\n\n";
       exit;

      case "4" :
       @system("clear");
       echo "\n\n";
       mainmenu();   

      default :
       @system("clear");
       echo "\n\n";
       mainmenu();   
   }     
return;
}

function postit($myraters, $myaccounts, $posttype)
{
   @system("clear");

   //Set font color
   
   // Regular Colors
   $Black    = "\033[0;30m" ;     //  # Black
   $CRed     = "\033[0;31m" ;     //  # Red
   $Green    = "\033[0;32m" ;       # Green
   $Yellow   = "\033[0;33m" ;      # Yellow
   $Blue     = "\033[0;34m" ;        # Blue
   $Yellow   = "\033[0;35m" ;      # Yellow
   $Cyan     = "\033[0;36m" ;        # Cyan
   $White    = "\033[0;37m" ;       # White
   
   $ScriptName ="add $posttype (c) reneaparri";
   $Web="https://github.com/maximum001/max";
   
   $acct=0;
   
   echo "$White";
   echo "$ScriptName\n";
   echo "$Web\n\n";
   echo "add $posttype to raters+main account\n";
   
   $acct2post = []; 

   foreach($myaccounts as $acct)
    {
      array_push($acct2post,$acct);
    }

   foreach($myraters as $acct)
   {
    array_push($acct2post,$acct);      
   }

   echo "$Green\n";
   echo "*Pls. use same password*\n";
   echo "\n";
   
   echo "$White";
   $mainpassword=readline("Password : ");
   if ($mainpassword == '')
   {
       echo "$Yellow";
       echo "\n > no password was entered\n\n";
       mainmenu();  
   }
   
   echo "$White";
   echo "\nNumber of $posttype to add (default 10)?\n";
   $postcount=readline("Count : ");
   
   if ($postcount =='') {
       $postcount=10;
   }
   
   @system("clear");
   echo "$White\n";
   echo "$ScriptName\n";
   echo "$Web\n$Yellow\n";
   echo "time to add $posttype to your account\n";
   echo "pls. wait ...\n";
   sleep(2);
   
   loop2accounts($acct2post,$mainpassword,$posttype,$postcount);

} //end of postit
//////////////////////////////////////////////////////////////////////////////////

function post2others($posttype)
{
   @system("clear");

   //Set font color
   
   // Regular Colors
   $Black    = "\033[0;30m" ;     //  # Black
   $CRed     = "\033[0;31m" ;     //  # Red
   $Green    = "\033[0;32m" ;       # Green
   $Yellow   = "\033[0;33m" ;      # Yellow
   $Blue     = "\033[0;34m" ;        # Blue
   $Yellow   = "\033[0;35m" ;      # Yellow
   $Cyan     = "\033[0;36m" ;        # Cyan
   $White    = "\033[0;37m" ;       # White
   
   $ScriptName ="add $posttype (c) reneaparri";
   $Web="https://github.com/maximum001/max";
   
   $acct=0;
   
   echo "$White";
   echo "$ScriptName\n";
   echo "$Web\n\n";
   echo "add $posttype to other account\n";
   
   $acct2post = []; 

        $acct=0;

        echo "$Yellow\n";
        echo "Input username to add $posttype\n";
        echo "press enter when done\n$Green\n";
        do {
            $inputusername = readline("Username : ");
        if ($inputusername !='') {
            array_push($acct2post, "$inputusername",);
            $acct=1;
            }
        } while ($inputusername !='');
        
        if ($acct == 0)  {
            echo "$Yellow";
            echo " > pls. enter atleast one (1) username\n\n";
                mainmenu(); 
                }
        
        echo "$Green\n";
        echo "*Pls. use same password*\n";
        echo "\n";
        
        echo "$White";
        $mainpassword=readline("Password : ");
        if ($mainpassword == '')
        {
            echo "$Yellow";
            echo "\n > no password was entered\n\n";
            mainmenu();  
        }
   
        echo "$White";
        echo "\nNumber of $posttype to add (default 10)?\n";
        $postcount=readline("Count : ");
        
        if ($postcount =='') {
            $postcount=10;
        }
        
        @system("clear");
        echo "$White\n";
        echo "$ScriptName\n";
        echo "$Web\n$Yellow\n";
        echo "time to add $posttype to your account\n";
        echo "add $posttype is initializing ...\n";
        sleep(2);
 
        loop2accounts($acct2post,$mainpassword,$posttype,$postcount);
   
   echo "$White\n";
   mainmenu();  

} //end of post2other


function loop2accounts($acct2post,$mainpassword,$posttype,$postcount)
{

    $Black    = "\033[0;30m" ;     //  # Black
    $CRed     = "\033[0;31m" ;     //  # Red
    $Green    = "\033[0;32m" ;       # Green
    $Yellow   = "\033[0;33m" ;      # Yellow
    $Blue     = "\033[0;34m" ;        # Blue
    $Yellow   = "\033[0;35m" ;      # Yellow
    $Cyan     = "\033[0;36m" ;        # Cyan
    $White    = "\033[0;37m" ;       # White
    
    $PhoneID=['df0439087259ad38','a5ead687bdb3729c','87a87fe99d0039a5'];
    array_push($PhoneID,'7d7e6f904741daea');
    array_push($PhoneID,'9f78dab798ab0324');
    array_push($PhoneID,'83d23b76250d2a97');
    array_push($PhoneID,'7ae21b1182e2a323');
    array_push($PhoneID,'29b3e709883d7321');
    array_push($PhoneID,'c51e10db899a4cc4');
    array_push($PhoneID,'47db99101c533bc5');

    $PhoneModel=array("iPhone 4","iPhone 4S","iPhone 5","iPhone 5c","iPhone 5s",
    "iPhone 6","iPhone 6 Plus","iPhone 6s","iPhone 6s Plus",
    "iPhone SE (1st generation)","iPhone 7","iPhone 7 Plus","iPhone 8",
    "iPhone 8 Plus","iPhone X","iPhone XR","iPhone XS","iPhone XS Max",
    "iPhone 11","iPhone 11 Pro","iPhone 11 Pro Max","iPhone SE","iPhone 12 mini","iPhone 12","iPhone 12 Pro",
    "Tecno Spark 7","Tecno Spark 7 Pro","Vivo V11i","Vivo V11","Vivo V11 Pro",
    "Oppo A94","Oppo A12","Vivo Z10","Samsung Galaxy S20","Vivo Y81","Vivo Nex S","Vivo Nex A","Vivo Y75s","Vivo Y83",
    "Vivo X21i","Vivo Z1","Vivo Y53i","Nokia 5","Nokia 6","Vivo Y71","Vivo X21 UD","Vivo X21","Vivo V9",
    "Vivo X20 Plus UD","Vivo Y75","Vivo V7","Samsung Galaxy S9","Vivo X20 Plus","Vivo X20","Vivo V7+",
    "Vivo Y69","Vivo V5s","LG G+","Vivo Y66","Sony Xperia 10","Nokia 3315","Vivo Y55s","Tecno Spark 6 Air","Tecno Spark 6 Go","Vivo Xplay6",
    "HTC U20 5G","Vivo X9","Google Pixel 5","OnePlus 9","OnePlus 10","Infinix Hot S10","Vivo X7","Vivo X6S Plus",
    "Vivo X6S","Vivo Y31L","Oppo A2","Oppo A11","Vivo Xplay5 Elite","Vivo Y51L","Vivo X6 Plus",
    "Vivo X6","Vivo Y51","Vivo Y27L","Vivo Y15S","Vivo V1Max","Vivo V1","Vivo X5Pro","Vivo X5Max+",
    "Vivo X5S L","Vivo X Shot","Vivo X3S","Vivo Y15","Vivo Y22","Vivo X5Max","Nokia 3210");

    $hash_tags =array("lykaglobal","lykaglobalph","lykagems","Travel", "SpreadLove",
    "StayBlessed","Goodluck","LYKAGlobal","LYKAEmpoweringLykans","TravelThainow2019",
    "WeRiseByLiftingOthers","LykaMall","LykaGems","LykaPH","Vivalasvegas",    
    "LykaGlobal","LykaShare","LykaWorld","MaxRate","LykaRetail",
    "StayBlessed","Goodluck","LYKAGlobal","LYKAEmpoweringLykans","TravelThainow2019",
    "WeRiseByLiftingOthers","LykaMall","LykaGems","LykaPH","Vivalasvegas",    
    "LykaGlobal","travelthainow2019","LykaUltraRater","LykaMerchants","travelthainow2019",
    "lykaglobal","lykaglobalph","lykagems","Travel", "SpreadLove",
    "StayBlessed","Goodluck","LYKAGlobal","LYKAEmpoweringLykans","TravelThainow2019",
    "LykaGlobal","LykaMall","LykaUltraRater","LykaMerchants","travelthainow2019",
    "lykaglobal","lykaglobalph","lykagems","Travel", "SpreadLove",
    "WeRiseByLiftingOthers","LykaMall","LykaGems","LykaPH","Vivalasvegas");
 
    $noofaccounts=count($acct2post);
    $posted=0;

    foreach ($acct2post as $currentUser) {
   
        $posted++;
        $deviceid=uniqid('cef'); //$PhoneID[rand(0,9)];
        $devicenamemodel=$PhoneModel[rand(0,80)];
    
    echo "$White\n";
    echo "Account Details ($posted of $noofaccounts)\n\n";
    printf("%-15s | %s\n","Username",$currentUser);
    echo "$Cyan";
    
    //Login to account
    $urll = "https://identity.mylykaapps.com/useraccounts/login";
    $curll = curl_init($urll);
    curl_setopt($curll, CURLOPT_URL, $urll);
    curl_setopt($curll, CURLOPT_POST, true);
    curl_setopt($curll, CURLOPT_RETURNTRANSFER, true);
    $headerss = array("Content-Type: application/json", "user-agent:Lyka/3.6.65 (com.thingsilikeapp; build:865 Android R 30)");
    curl_setopt($curll, CURLOPT_HTTPHEADER, $headerss);
    $DeviceInfo = <<<DATA
    {
    "countryCode": "US",
    "device": {
    "deviceId": "$deviceid",
    "deviceImei": "$deviceid",
    "deviceModel": "$devicenamemodel",
    "deviceName": "$devicenamemodel",
    "deviceOs": "Android",
    "isEmulator": false,
    "notificationToken": "eEBjxYrDSJyFw7N-DpEGNG:APA91bEZnWo-TDdSgVCzQcJq3gHioJtFThNyxw6PsgOCI1JHDzd55yqG-QZwAZRj4pwICrXo5VODiUYom7Fsf4Ql66-CWHFumNA2ynrKEP21bstPBMgwsN-3G_Ek0ZLcoKtVMg5oN6-gz",
    "osVersion": "11"
    },
    "password": "$mainpassword",
    "username": "$currentUser"
    }
    DATA;
    
    curl_setopt($curll, CURLOPT_POSTFIELDS, $DeviceInfo);
    $respp = curl_exec($curll);
    curl_close($curll);
    $jsonn = json_decode($respp);
    $msgn = $jsonn->message;
    
    if ($msgn == "User logged in") {
    
    $status = $jsonn->status;
    $vuser = $jsonn->data->username;
    $bearer = $jsonn->data->token->accessToken;
    
          echo "$White";
          printf("%-15s | %.2f\n","GEMS",getgembalance($bearer));
          //getgembalance($bearer);
          echo "$Cyan";
          echo "$msgn\n\n";
    
     $postloop=1;
     do {  
        
       echo "$White";
       echo "..$posttype #$postloop > "; 
       
       $deviceid = uniqid('daf');//$PhoneID[rand(0,9)];
    
       echo "$Cyan";
       
         $title_content=$hash_tags[rand(0,57)];
         $xhash=$hash_tags[rand(0,57)];
    
       postmoments($vuser, $bearer, $deviceid, $title_content, $xhash, $posttype);
       
       echo "\n";
       $postloop++;
    
    } while ($postloop !=$postcount+1);
    
    echo "$Yellow";
    echo "\n$posttype has been added to [$currentUser]\n\n";
    
    } else {
        echo "$Yellow";
        echo "$msgn\n";
        echo "$White";
        break;
    } //end of status==1   
    
    echo "\n$Green";
//    echo "Summary of add $posttype\n";
//    printf("%-15s | %s\n","Username",$currentUser);
    //echo "Username    | $currentUser\n";
//    printf("%-15s | %.2f\n","GEMS",getgembalance($bearer));
//    getgembalance($bearer);
    echo "--------------------------------\n";
    sleep(1);
    
    } //end of loop for x username
    echo "\n$White\n";
    echo "Summary - add a $posttype\n";
    $PhoneID=uniqid('afd');
    checkgems($acct2post,$mainpassword,$PhoneID, $PhoneModel);
    mainmenu();

} // loop2accts


function postmoments($currentUser, $bearer, $device_id, $contents, $xhash, $posttype) {

   $currUsrID = getUserId($device_id, $bearer);

   $uploadLegacy = "https://media.mylykaapps.com/api/v1/media/social/multi-upload-url";
   
   $uploadPay = <<<DATA
       {"category":"$posttype",
        "clientId":"$currUsrID",
        "files":[{
            "fileName":"https://github.com/maximum001/images/blob/main/p1.jpeg", 
            "mediaType":"image"}]        }
   DATA; 
   
   $uploadLegPost = postX($uploadLegacy,$uploadPay,$bearer);
 
   if($uploadLegPost->data){
       $mediaID = $uploadLegPost->data[0]->mediaId;

       $amznToken = "https://media.mylykaapps.com/api/v1/access/aws/media-token/$currUsrID";
       $firstGet = getX($amznToken,$device_id,$bearer);

       if($firstGet->data){
           $amzIDid = $firstGet->data->identityId;
           $amzIDtoken = $firstGet->data->token; 

           $postURL = "https://cognito-identity.ap-southeast-1.amazonaws.com/";
           $postHeader =  array(
           "Content-Type: application/x-amz-json-1.1",
           "Accept-encoding: indentity",
           "X-Amz-Target: AWSCognitoIdentityService.GetCredentialsForIdentity",
           "user-agent: aws-sdk-android/2.22.4 Linux/3.18.140-gb765813d2c04 Dalvik/2.1.0/0 en_US") ;
           $amndata = <<<DATA
                   {"Logins": {
                       "cognito-identity.amazonaws.com": "$amzIDtoken"},
                           "IdentityId": "$amzIDid"}
                   DATA; 
           $postCurl = curl_init($postURL);
           curl_setopt($postCurl, CURLOPT_URL, $postURL);
           curl_setopt($postCurl, CURLOPT_POST, true);
           curl_setopt($postCurl, CURLOPT_RETURNTRANSFER, true);
           curl_setopt($postCurl, CURLOPT_HTTPHEADER, $postHeader);
           curl_setopt($postCurl, CURLOPT_POSTFIELDS, $amndata);
           $postResp = curl_exec($postCurl);
           curl_close($postCurl);
           $postjson = json_decode($postResp);

           if($postjson->Credentials){
               $sessToken = $postjson->Credentials->SessionToken;
               $aws_access_key_id = $postjson->Credentials->AccessKeyId;
               $aws_secret_access_key = $postjson->Credentials->SecretKey;

               //AWS Process
               $bucket_name = 'lyka-legacy-images-input';
               $aws_region = 'ap-southeast-1';
               $host_name = $bucket_name . '.s3.amazonaws.com';
               $content = "0";
               $content_title = $mediaID;
               $aws_service_name = 's3';
               $timestamp = gmdate('Ymd\THis\Z');
               $date = gmdate('Ymd');
               $request_headers = array();
               $request_headers['x-amz-date'] = $timestamp;
               $request_headers['Host'] = $host_name;
               $request_headers['x-amz-security-token'] = $sessToken;
               $request_headers['x-amz-content-sha256'] = hash('sha256', $content);
               ksort($request_headers);

               $canonical_headers = [];
               foreach($request_headers as $key => $value) {
                   $canonical_headers[] = strtolower($key) . ":" . $value;
               }
               $canonical_headers = implode("\n", $canonical_headers);

               // Signed headers
               $signed_headers = [];
               foreach($request_headers as $key => $value) {
                   $signed_headers[] = strtolower($key);
               }
               $signed_headers = implode(";", $signed_headers);

               // Cannonical request 
               $canonical_request = [];
               $canonical_request[] = "PUT";
               $canonical_request[] = "/" . $content_title;
               $canonical_request[] = "";
               $canonical_request[] = $canonical_headers;
               $canonical_request[] = "";
               $canonical_request[] = $signed_headers;
               $canonical_request[] = hash('sha256', $content);
               $canonical_request = implode("\n", $canonical_request);
               $hashed_canonical_request = hash('sha256', $canonical_request);

               // AWS Scope
               $scope = [];
               $scope[] = $date;
               $scope[] = $aws_region;
               $scope[] = $aws_service_name;
               $scope[] = "aws4_request";

               // String to sign
               $string_to_sign = [];
               $string_to_sign[] = "AWS4-HMAC-SHA256"; 
               $string_to_sign[] = $timestamp; 
               $string_to_sign[] = implode('/', $scope);
               $string_to_sign[] = $hashed_canonical_request;
               $string_to_sign = implode("\n", $string_to_sign);

               // Signing key
               $kSecret = 'AWS4' . $aws_secret_access_key;
               $kDate = hash_hmac('sha256', $date, $kSecret, true);
               $kRegion = hash_hmac('sha256', $aws_region, $kDate, true);
               $kService = hash_hmac('sha256', $aws_service_name, $kRegion, true);
               $kSigning = hash_hmac('sha256', 'aws4_request', $kService, true);

               // Signature
               $signature = hash_hmac('sha256', $string_to_sign, $kSigning);

               // Authorization
               $authorization = [
                   'Credential=' . $aws_access_key_id . '/' . implode('/', $scope),
                   'SignedHeaders=' . $signed_headers,
                   'Signature=' . $signature
               ];
               $authorization = 'AWS4-HMAC-SHA256' . ' ' . implode( ',', $authorization);

               // Curl headers
               $curl_headers = [ 'Authorization: ' . $authorization ];
               foreach($request_headers as $key => $value) {
                   $curl_headers[] = $key . ": " . $value; }

               $url = 'https://' . $host_name . '/' . $content_title;
               $ch = curl_init($url);
               curl_setopt($ch, CURLOPT_HEADER, false);
               curl_setopt($ch, CURLOPT_HTTPHEADER, $curl_headers);
               curl_setopt($ch, CURLOPT_RETURNTRANSFER, false);
               curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
               curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
               curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
               curl_setopt($ch, CURLOPT_POSTFIELDS, $content);
               curl_exec($ch);
               $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
               // echo $http_code;
               if ($http_code != 200) { echo "failed\n"; }
               
               $delURL = "https://lyka-legacy-images-input.s3.ap-southeast-1.amazonaws.com/".$mediaID;
               $delHeader = array(
                   "x-clientid: $device_id",
                   "x-amz-date: $timestamp",
                   "x-amz-content-sha256: STREAMING-AWS4-HMAC-SHA256-PAYLOAD",
                   "Authorization: $authorization"
               );
               $deleteCurlx = curl_init($delURL);
               curl_setopt($deleteCurlx, CURLOPT_URL, $delURL);
               curl_setopt($deleteCurlx, CURLOPT_RETURNTRANSFER, true);
               curl_setopt($deleteCurlx, CURLOPT_CUSTOMREQUEST, "PUT");
               curl_setopt($deleteCurlx, CURLOPT_HTTPHEADER, $delHeader);
               $deleteResp = curl_exec($deleteCurlx);
               curl_close($deleteCurlx);

                
                if ($posttype == "post") :
                  $uploadurl="https://posting.mylykaapps.com/api/v3/posts/AddImagePost";
                
                else :
                     $uploadurl = "https://momenting.mylykaapps.com/api/v3/moments/AddImageMoment";
                endif;

                sleep(1);

                if ($posttype == "post") :
                
                   $postresponse = postX($uploadurl, 
                   payload($device_id,
                   '"files":[{
                    "imageURL":"https://www.w3schools.com/Css/img_lights.jpg",
                    "height":1024,
                    "key":"'.$mediaID.'", 
                    "RemoteStorage":"lyka-legacy-images-input" ,
                    "type":"image","width":768}],
                    "isHighlight":false,
                    "isSharedLink":false,
                    "mediaTags":"[[]]",
                    title:"#Happy'.date("l").'",
                    hashtags:"'.$xhash.'",
                    content: "'.$contents.'"'),
                    $bearer);
                else : 
                   $postresponse = postX($uploadurl, 
                   payload($device_id,
                   '"files":[{
                       "imageURL":"https://www.w3schools.com/Css/img_lights.jpg",
                       "height":2081,
                       "key":"'.$mediaID.'", 
                       "RemoteStorage":"lyka-legacy-images-input" ,
                       "type":"image",
                       "width":1079}]'),
                        $bearer);
                endif;

                $response_message = $postresponse->message;

                if (strstr($response_message, 'Post saved')) { echo "+1 post";}
                if( $response_message == "Moment retrieved."){ echo "+1 moments"; }


            } //end post-json
       }
    }     

}  //end of postmoments
/////////////////////////////////////////////////////////////////////////////

   ///////////////////////////////////////////
   // getuserID
   //
   //////////////////////////////////////////

   function getUserId($rDevID, $mcCookie){
    $getUID = getX("https://profiles.mylykaapps.com/api/v3/profiles/GetUserProfileForEditing?os=android", $rDevID, $mcCookie);
 
    return $getUID->data->id;
 
 }
 
 function getX($urlx, $gdevID, $cooks = ""){
    $getURL = $urlx;
    $uAgent = 'Lyka/3.6.65 (com.thingsilikeapp; build:865 Android O_MR1 28)';
    $getHeader = array(
        "Content-Type: application/json; charset=UTF-8",
        "user-agent: $uAgent",
        "authorization: Bearer $cooks",
        "x-clientid: $gdevID",
        );
        $getCurl = curl_init($getURL);
        curl_setopt($getCurl, CURLOPT_URL, $getURL);
        curl_setopt($getCurl, CURLOPT_HTTPGET, true);
        curl_setopt($getCurl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($getCurl, CURLOPT_HTTPHEADER, $getHeader);
        usleep(500000);
        $getResp = curl_exec($getCurl);
        curl_close($getCurl);
        $getjson = json_decode($getResp);
 
        return $getjson;
 }
 
 function postX($urlx, $payloader, $cooks = ""){
    $postURL = $urlx;
    $uAgent = 'Lyka/3.6.65 (com.thingsilikeapp; build:865 Android O_MR1 28)';
    $postHeader = !$cooks 
        ? array(
        "Content-Type: application/json; charset=UTF-8",
        "user-agent: $uAgent") 
        : array(
        "Content-Type: application/json; charset=UTF-8",
        "user-agent: $uAgent","authorization: Bearer $cooks") ;
        $postCurl = curl_init($postURL);
        curl_setopt($postCurl, CURLOPT_URL, $postURL);
        curl_setopt($postCurl, CURLOPT_POST, true);
        curl_setopt($postCurl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($postCurl, CURLOPT_HTTPHEADER, $postHeader);
        curl_setopt($postCurl, CURLOPT_POSTFIELDS, $payloader);
        curl_setopt($postCurl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($postCurl, CURLOPT_SSL_VERIFYPEER, false);
        usleep(500000);
        $postResp = curl_exec($postCurl);
        curl_close($postCurl);
        $postjson = json_decode($postResp);
 
        return $postjson;
 }
 
 function payload($devIDx, $xtraPay, $rTokenx = ""){

    $PhoneModel=array("iPhone 4","iPhone 4S","iPhone 5","iPhone 5c","iPhone 5s",
    "iPhone 6","iPhone 6 Plus","iPhone 6s","iPhone 6s Plus",
    "iPhone SE (1st generation)","iPhone 7","iPhone 7 Plus","iPhone 8",
    "iPhone 8 Plus","iPhone X","iPhone XR","iPhone XS","iPhone XS Max",
    "iPhone 11","iPhone 11 Pro","iPhone 11 Pro Max","iPhone SE","iPhone 12 mini","iPhone 12","iPhone 12 Pro",
    "Tecno Spark 7","Tecno Spark 7 Pro","Vivo V11i","Vivo V11","Vivo V11 Pro",
    "Oppo A94","Oppo A12","Vivo Z10","Samsung Galaxy S20","Vivo Y81","Vivo Nex S","Vivo Nex A","Vivo Y75s","Vivo Y83",
    "Vivo X21i","Vivo Z1","Vivo Y53i","Nokia 5","Nokia 6","Vivo Y71","Vivo X21 UD","Vivo X21","Vivo V9",
    "Vivo X20 Plus UD","Vivo Y75","Vivo V7","Samsung Galaxy S9","Vivo X20 Plus","Vivo X20","Vivo V7+",
    "Vivo Y69","Vivo V5s","LG G+","Vivo Y66","Sony Xperia 10","Nokia 3315","Vivo Y55s","Tecno Spark 6 Air","Tecno Spark 6 Go","Vivo Xplay6",
    "HTC U20 5G","Vivo X9","Google Pixel 5","OnePlus 9","OnePlus 10","Infinix Hot S10","Vivo X7","Vivo X6S Plus",
    "Vivo X6S","Vivo Y31L","Oppo A2","Oppo A11","Vivo Xplay5 Elite","Vivo Y51L","Vivo X6 Plus",
    "Vivo X6","Vivo Y51","Vivo Y27L","Vivo Y15S","Vivo V1Max","Vivo V1","Vivo X5Pro","Vivo X5Max+",
    "Vivo X5S L","Vivo X Shot","Vivo X3S","Vivo Y15","Vivo Y22","Vivo X5Max","Nokia 3210"); 

    $DevName=$PhoneModel[rand(0,50)];

     $valdata = <<<DATA
             {"device": {
                 "deviceId": "$devIDx",
                 "deviceImei": "$devIDx",
                 "deviceModel": "$DevName",
                 "deviceName": "$DevName",
                 "deviceOs": "Android",
                 "isEmulator": false,
                 "osVersion": "11",
                 "notificationToken": "$rTokenx"
             },
             "countryCode": "US",
             $xtraPay
             }
             DATA; 
  
     return $valdata;
  }
 

function getgembalance($bearer)
{
    $urlbal = "https://wallets.mylykaapps.com/api/v3/wallets/getgems?os=android";
    $curlbal = curl_init($urlbal);
    curl_setopt($curlbal, CURLOPT_URL, $urlbal);
    curl_setopt($curlbal, CURLOPT_RETURNTRANSFER, true);   
    $headersbal = array("authorization: Bearer $bearer",);
    curl_setopt($curlbal, CURLOPT_HTTPHEADER, $headersbal);
    $respbal = curl_exec($curlbal);
    curl_close($curlbal);
  
    $jsonbal = json_decode($respbal);
    $gemsavailable = $jsonbal->data->totalGem;

    return $gemsavailable; 

} //end of getgembalance

   ?>
