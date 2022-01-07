<?PHP

@system("clear");

{

mainmenu();

}

function mainmenu(){

    @system("clear");

    // Regular Colors
$Black    = "\033[0;30m" ;     //  # Black
$CRed     = "\033[0;31m" ;     //  # Red
$Blue     = "\033[0;34m" ;        # Blue
$Cyan     = "\033[0;36m" ;        # Cyan
$White    = "\033[0;37m" ;       # White
$Green    = "\033[0;32m" ;       # Green
$Yellow   = "\033[0;33m" ;      # Yellow

$mainaccounts=[];
$ratersaccount=[];

#my accounts
array_push($mainaccounts,"reneaparri");
array_push($mainaccounts,"rene_wolverine");
array_push($mainaccounts,"den8698");
array_push($mainaccounts,"den5332");    

#raters
array_push($ratersaccount,"lykapro001");
array_push($ratersaccount,"lykapro002");
array_push($ratersaccount,"lykapro003");
array_push($ratersaccount,"icarus2022");
array_push($ratersaccount,"xianmig2022");

array_push($ratersaccount,"im100pretty");
array_push($ratersaccount,"im200pretty");
array_push($ratersaccount,"im300pretty");
array_push($ratersaccount,"pretty01lyca");
array_push($ratersaccount,"pretty02lyca");

array_push($ratersaccount,"max1318569");
array_push($ratersaccount,"max1603820");
array_push($ratersaccount,"max1603295");
array_push($ratersaccount,"max7456929");
array_push($ratersaccount,"max1318552");

array_push($ratersaccount,"iamaaparri");
array_push($ratersaccount,"shib_aparri");
array_push($ratersaccount,"imaparri");
array_push($ratersaccount,"zero9691255118");
array_push($ratersaccount,"ninesixnine1690606");

array_push($ratersaccount,"maximum001");
array_push($ratersaccount,"maximum002");
array_push($ratersaccount,"maximum003");
array_push($ratersaccount,"maximum004");
array_push($ratersaccount,"maximum005");

array_push($ratersaccount,"maximum010");
array_push($ratersaccount,"maximum011");
array_push($ratersaccount,"maximum012");
array_push($ratersaccount,"maximum013");
array_push($ratersaccount,"max1mum14");

array_push($ratersaccount,"maximum030");
array_push($ratersaccount,"maximum031");
array_push($ratersaccount,"maximum032");
array_push($ratersaccount,"maximum033");
array_push($ratersaccount,"max1mum34");

//new
array_push($ratersaccount,"bea3161");
array_push($ratersaccount,"bea8589");
array_push($ratersaccount,"bea5058");
array_push($ratersaccount,"bea8570");
array_push($ratersaccount,"bea5349");
array_push($ratersaccount,"bea3171");

array_push($ratersaccount,"rod3183");
array_push($ratersaccount,"rod3158");
array_push($ratersaccount,"rod6791");
array_push($ratersaccount,"rod8970");
array_push($ratersaccount,"rod3164");
array_push($ratersaccount,"rod8559");

    
$ScriptName ="MAXMenu build [1222]\n(c) reneaparri 2022";
$Web="https://github.com/maximum001/max";


echo "$White";
echo "$ScriptName\n";
echo "$Web\n\n";
    
echo "$White\nMAIN MENU";
echo "$White\n-----------------------------";

echo "$White\na)$Green add posts";
echo "$White\nb)$Green add moments";
echo "$White\nc)$Green rate posts";
echo "$White\nd)$Green check gems";
echo "$White\ne)$Green harvest gems";
echo "$White\nf)$Green exit menu";
echo "$White\n-----------------------------\n$Yellow";

  // $inputtask = readline("Your selection : ");
   echo "Your selection > ";
   fscanf(STDIN, "%c",$inputtask);
   
   switch($inputtask) {

       
    case "a" : //add posts
       
        addpostmomentMenu("post",$ratersaccount,$mainaccounts);
        echo "\n\n";
        mainmenu();
               
    case "b" : //add moments
        
        addpostmomentMenu("moment",$ratersaccount,$mainaccounts);
        echo "\n\n";
        mainmenu();

    case "c" : //raters to main
        
        ratepostmenu($ratersaccount,$mainaccounts);
        echo "\n\n";
        mainmenu();

    case "d" :     
        checkgemsmenu($ratersaccount, $mainaccounts);
        echo "\n\n";
        mainmenu();
    case "e" :
        
        harvestgemsmenu($ratersaccount);
        echo "\n\n";
        mainmenu();
    case "f" :
        echo "\nthank you";
        echo "\nscript exits\n$White\n";
        exit;  
    default :

        @system("clear");
        mainmenu();

   } //end of switch..case

} //mainmenu

  # ///////////////////////////////////////////
  # // checkgems
  # //
  # //////////////////////////////////////////

// THIS IS THE MENU FOR CHECKGEMS  
function checkgemsmenu($ratersaccount, $mainaccounts)
{
    @system("clear");

    $Cyan     = "\033[0;36m" ;        # Cyan
    $White    = "\033[0;37m" ;       # White
    $Green    = "\033[0;32m" ;       # Green
    $Yellow   = "\033[0;33m" ;      # Yellow

$ScriptName ="CHECK LYKA GEMS\n(c) reneaparri 2022";
$Web="https://github.com/maximum001/max";

echo "$White";
echo "$ScriptName\n";
echo "$Web\n\n";
echo "\nCHECK GEMS Menu\n";
echo "-----------------------------";
echo "$White\na)$Green main accounts";
echo "$White\nb)$Green raters accounts";
echo "$White\nc)$Green other account";
echo "$White\nd)$Green back to main";
echo "$White\n-----------------------------\n$Yellow";

   $inputtask = readline("Your selection : ");

   switch($inputtask) {
      case "a" : //main
        
        checkmaxgems($mainaccounts, "main"); 
        echo "\n\n";
        mainmenu();      
      case "b" : //raters
       
        checkmaxgems($ratersaccount, "raters"); 
        echo "\n\n";
        mainmenu();      
    case "c" : //other accounts
       
        checkmaxgems($ratersaccount, "other"); 
        echo "\n\n";
        mainmenu();      
          
    case "d" :
       @system("clear");
       mainmenu();   

    default :
       @system("clear");
       mainmenu();   
   }     
return;

}

  # ///////////////////////////////////////////
  # // checkgems
  # //
  # //////////////////////////////////////////

  //SUB ROUTINE
  function checkmaxgems($accounts, $accounttype)
  {
    @system("clear");
    $Cyan     = "\033[0;36m" ;        # Cyan
   $White    = "\033[0;37m" ;       # White
   $Green    = "\033[0;32m" ;       # Green
   $Yellow   = "\033[0;33m" ;      # Yellow
   
   $ScriptName ="CHECK LYKA GEMS\n(c) reneaparri 2022";
   $Web="https://github.com/maximum001/max";

   echo "$White";
   echo "$ScriptName\n";
   echo "$Web\n\n";
   echo "How many GEMS do you have?\n";
  
      $maxaccounts=[];
         
   if($accounttype == "other")
   {
    $acct=0;
    echo "$Yellow\n";
    echo "Account username to check GEMS\n";
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

   } else
   {
        printf("$Green\nYou have %s $accounttype account\n$Yellow",count($accounts));
        $start = readline("Start with account no.  : ");
        if ($start == '') { $start=0;} else {$start--;}
        $end =   readline("End with account no.    : ");
        if ($end == '') { $end=count($accounts)-1;} else {$end--;}
        print "$Cyan\nstart [$accounts[$start]]";
        print "$Cyan\nend   [$accounts[$end]]\n";

          $x=$start;
        do {
            array_push($maxaccounts,$accounts[$x]);
                $x++;
        } while ($x != $end+1);
       

   }

   echo "$Yellow\n";
   echo "Input $accounttype account password\n$Green\n";
   $mainpassword=readline('Password : ');
   if ($mainpassword == '')
   {
       echo "$Yellow\n**empty password**\n";
       mainmenu();    
   }
   
//   if ($accounttype != "other")
//   {
//   $maxaccounts = $accounts; 
//   }

   @system("clear");
   echo "$White\n";
   echo "$ScriptName\n";
   echo "$Web\n$Yellow\n";
   echo "details have been collected\n";
   echo "let's check your GEMS...\n\n";
   sleep(2);

   checkgems($maxaccounts, $mainpassword);
   return;
}
// AN OOP we can use anywhere

function checkgems($maxaccounts,$mainpassword)
{
   $Cyan     = "\033[0;36m" ;        # Cyan
   $White    = "\033[0;37m" ;       # White
   $Green    = "\033[0;32m" ;       # Green
   $Yellow   = "\033[0;33m" ;      # Yellow

   $total=0;
   
   printf("$White%'-40s\n","");

   $xcount=0;
   foreach ($maxaccounts as $activeAcct) {
   $xcount++; 
   
       #Login to each account

        $jsonn=logintoaccount($activeAcct,$mainpassword);       

       if ($jsonn != NULL) {

       $msgn = $jsonn->message;

       if ($msgn=="User logged in")
       {
       $status = $jsonn->status;
       $vuser = $jsonn->data->username;
       $bearer = $jsonn->data->token->accessToken;
       //$json = json_decode($respp);  

       $TotalGEMS = getgembalance($bearer);
       
       echo "$White";  
       printf("%2s) %-19s GEMS >$Green %.2f\n",$xcount,$activeAcct,$TotalGEMS);
       $total=$total + $TotalGEMS;
   
       } else { 
        echo "$White";  
        printf("%2s) %-15s >$Green failed to login\n",$xcount,$activeAcct);
        } 
     
     //end of user logged in
   
    } else { echo "\nLYKA server down\n";}

    } //end of loop for each account
   
     printf("$White%'-40s\n","");
     printf("%23s GEMS >$Yellow %.2f\n","Total",$total);

     print("$White\n\n");
     $blank=readline("press enter to continue"); 
    
     mainmenu();
   } //end checkgems


#   ///////////////////////////////////////////
#   //harvestmaxgems
#   //
#   //////////////////////////////////////////

//////////////////////////////////////////////
function harvestgemsmenu($accounts)
{
    @system("clear");

    $Cyan     = "\033[0;36m" ;        # Cyan
    $White    = "\033[0;37m" ;       # White
    $Green    = "\033[0;32m" ;       # Green
    $Yellow   = "\033[0;33m" ;      # Yellow

$ScriptName ="HARVEST LYKA GEMS\n(c) reneaparri 2022";
$Web="https://github.com/maximum001/max";

echo "$White";
echo "$ScriptName\n";
echo "$Web\n\n";
echo "\nHARVEST GEMS Menu\n";
echo "-----------------------------";
echo "$White\na)$Green from raters accounts";
echo "$White\nb)$Green from other accounts";
echo "$White\nc)$Green back to main";
echo "$White\n-----------------------------\n";

   $inputtask = readline("Your selection : ");

   switch($inputtask) {
      case "a" : //raters
        
        harvestmaxgems($accounts, "raters"); 
        echo "\n\n";
        mainmenu();      
      case "b" : //other
                harvestmaxgems("", "other"); 
        echo "\n\n";
        mainmenu();      
      
      case "c" :
       @system("clear");
       mainmenu();   

      default :
       @system("clear");
       mainmenu();   
   }     
return;

}

  function harvestmaxgems($accounts, $accounttype)
  {
    @system("clear");
    $Cyan     = "\033[0;36m" ;        # Cyan
   $White    = "\033[0;37m" ;       # White
   $Green    = "\033[0;32m" ;       # Green
   $Yellow   = "\033[0;33m" ;      # Yellow

       $ScriptName ="HARVEST LYKA GEMS\n(c) reneaparri 2022";
       $Web="https://github.com/maximum001/max";

       echo "$White";
       echo "$ScriptName\n";
       echo "$Web\n\n";
       echo "Let's harvest max GEMS\n";

       echo "$White\n";
       echo "Note: GEMS will be sent to$Green [reneaparri]\n";

              $maxaccounts=[];

       if($accounttype == "other")
       {
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
    
       } else
       {
        printf("$Green\nYou have %s $accounttype account\n$Yellow",count($accounts));
        $start = readline("Start with account no.  : ");
        if ($start == '') { $start=0;} else {$start--;}
        $end =   readline("End with account no.    : ");
        if ($end == '') { $end=count($accounts)-1;} else {$end--;}
        print "$Cyan\nStart [$accounts[$start]]";
        print "$Cyan\nEnd   [$accounts[$end]]\n";

          $x=$start;
        do {
            array_push($maxaccounts,$accounts[$x]);
                $x++;
        } while ($x != $end+1);
       
       }
   
       echo "$Yellow\n";
       echo "Input $accounttype account password\n$Green\n";
       $mainpassword=readline('Password : ');
       if ($mainpassword == '')
       {
           echo "$Yellow\n**empty password**\n\n";
           mainmenu();    
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
       echo "we are good to go,\n";
       echo "let's harvest your GEMS...\n$White\n";
       sleep(2);
       
       $harvestedgems=0;

       echo "Recipient >$Yellow [reneaparri]\n$White";
       printf("$White%'-40s\n","");

       $xcount=0;
       foreach ($maxaccounts as $activeAcct) {

       $xcount++; 

           //Login to each account

           $jsonn =logintoaccount($activeAcct,$mainpassword);
           $msgn = $jsonn->message;

       if ($msgn=="User logged in")
       {    
           $status = $jsonn->status;
           $verifiedAcct = $jsonn->data->username;
           $bearer = $jsonn->data->token->accessToken;

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
               echo "$White";
               printf("%2s) %-19s $Green %.2f >$Cyan sent\n",$xcount,$activeAcct,$TotalGEMS);
               $harvestedgems =$harvestedgems+$TotalGEMS;
               
           usleep(100000);
       
       } else {
           echo "$Yellow";
//           echo "$msgn\n";
           printf("%2s) %-19s >$Green %s\n",$xcount,$activeAcct,$msgn);
           //break;
       }  //end of User logged in  
       } //end of loop for each acct

       printf("\n$White%'-40s\n","");
       printf ("%23s GEMS >$Green %.2f\n","Total harvested",$harvestedgems);
       echo "$White\n\n";

       $blank=readline("press enter to continue"); 
       
       
       mainmenu();

  } //end harverstmaxgems

///////////////////////////////////////////////////////


function logintoaccount($acctname, $password) 
{
    $devID=uniqid('eee');

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
    "deviceModel": "$devID",
    "deviceName": "$devID",
    "deviceOs": "Android",
    "isEmulator": false,
    "notificationToken": "eEBjxYrDSJyFw7N-DpEGNG:APA91bEZnWo-TDdSgVCzQcJq3gHioJtFThNyxw6PsgOCI1JHDzd55yqG-QZwAZRj4pwICrXo5VODiUYom7Fsf4Ql66-CWHFumNA2ynrKEP21bstPBMgwsN-3G_Ek0ZLcoKtVMg5oN6-gz",
    "osVersion": "11"
    },
    "username": "$acctname",
    "password": "$password"
    }
    DATA;
    curl_setopt($curll, CURLOPT_POSTFIELDS, $DeviceInfo);
    $respp = curl_exec($curll);
    curl_close($curll);
    $loginstatus = json_decode($respp);

    return $loginstatus; 
} //end login to account

# 

// THIS IS THE MENU FOR RATEPOST  
function ratepostmenu($ratersaccount, $mainaccounts)
{
    @system("clear");

    $Cyan     = "\033[0;36m" ;        # Cyan
    $White    = "\033[0;37m" ;       # White
    $Green    = "\033[0;32m" ;       # Green
    $Yellow   = "\033[0;33m" ;      # Yellow

$ScriptName ="RATE POSTS\n(c) reneaparri 2022";
$Web="https://github.com/maximum001/max";

echo "$White";
echo "$ScriptName\n";
echo "$Web\n\n";
echo "\nRATE POSTS Menu\n";
echo "-----------------------------";

echo "$White\na)$Cyan raters <> main accounts";
echo "$White\nb)$Cyan raters <> other account";
echo "$White\nc)$Cyan main <> main accounts";
echo "$White\nd)$Cyan main <> other accounts";
echo "$White\ne)$Cyan other <> other account";
echo "$White\nf)$Cyan back to main";
echo "$White\n-----------------------------\n";

   $inputtask = readline("Your selection : ");

   switch($inputtask) {


    case "a" : //raters to main
        max2max($ratersaccount,$mainaccounts);
        echo "\n\n";
        mainmenu();        

    case "b" : //raters to other
        max2u($ratersaccount,"Raters");     
        echo "\n\n";
        mainmenu();    
        
    case "c" : //main to main
        max2max($mainaccounts,$mainaccounts);
        echo "\n\n";
        mainmenu();     
    
    case "d" : //main to main
        max2u($mainaccounts,"Main");
        echo "\n\n";
        mainmenu();     

    case "e" : //other to other
        other2other();     
        echo "\n\n";
        mainmenu();        
    
    case "f" : //other
        @system("clear");
        mainmenu();        
            
    default :
       @system("clear");
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
    
    @system("clear");

    $Cyan     = "\033[0;36m" ;        # Cyan
    $White    = "\033[0;37m" ;       # White
    $Green    = "\033[0;32m" ;       # Green
    $Yellow   = "\033[0;33m" ;      # Yellow
    
    $ScriptName ="main <> main | raters <> main";
    $Web="https://github.com/maximum001/max";

    echo "$White";
    echo "$ScriptName\n";
    echo "$Web\n\n";
    echo "max-rate posts\n";
    
    //should use one password per raters account
    printf("$White\nYou have %s raters account\n$Green",count($raters));
    $start = readline("Start with account no.  : ");
    if ($start == '') { $start=0;} else {$start--;}
    $end =   readline("End with account no.    : ");
    if ($end == '') { $end=count($raters)-1;} else {$end--;}
    print "$Green\nStart [$raters[$start]]";
    print "$Green\nEnd   [$raters[$end]]\n";

    $newraters=[];
      $x=$start;
    do {
        array_push($newraters,$raters[$x]);
            $x++;
    } while ($x != $end+1);

    echo "$Yellow\n";
    echo "Input RATERS password\n$Green\n";
    $mainpassword=readline('Password : ');
    if ($mainpassword == '')
    {
        echo "$Yellow\n**empty password**\n\n";
        mainmenu();    }
    
    ratemypost($ScriptName,$Web,$newraters,$mainpassword,$acct2rate);
    return;

}   //end of max2max

#   ///////////////////////////////////////////
#   // max2u
#   //
#   //////////////////////////////////////////

function max2u($raters,$raterstype)
{
    
    @system("clear");

    $Cyan     = "\033[0;36m" ;        # Cyan
    $White    = "\033[0;37m" ;       # White
    $Green    = "\033[0;32m" ;       # Green
    $Yellow   = "\033[0;33m" ;      # Yellow

    $ScriptName ="$raterstype account to max-rate other account\n(c) reneaparri 2022";
    $Web="https://github.com/maximum001/max";

    echo "$White";
    echo "$ScriptName\n";
    echo "$Web\n\n";
    echo "Needed: usernames to RATE\n";
    
         #get acct names to rate
        $acct2rate=[];
        $acct=0;
        
        echo "$Yellow\n";
        echo "Account to RATE [max of 4]\n";
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
    printf("$Green\nYou have %s $raterstype account\n$Yellow",count($raters));
    $start = readline("Start with account no.  : ");
    if ($start == '') { $start=0;} else {$start--;}
    $end =   readline("End with account no.    : ");
    if ($end == '') { $end=count($raters)-1;} else {$end--;}
    print "$Cyan\nStart [$raters[$start]]";
    print "$Cyan\nEnd   [$raters[$end]]\n";

    $newraters=[];
      $x=$start;
    do {
        array_push($newraters,$raters[$x]);
            $x++;
    } while ($x != $end+1);

    echo "$Green\n";
    echo "$raterstype account password\n$Green";
    $mainpassword=readline('Password : ');
    if ($mainpassword == '')
    {
        echo "$Yellow\n**empty password**\n\n";
        mainmenu();    }

    ratemypost($ScriptName,$Web,$newraters,$mainpassword,$acct2rate);
    return;
          

} //end of max2u


function other2other()
{
    @system("clear");

    $Cyan     = "\033[0;36m" ;        # Cyan
    $White    = "\033[0;37m" ;       # White
    $Green    = "\033[0;32m" ;       # Green
    $Yellow   = "\033[0;33m" ;      # Yellow
    
    $ScriptName ="Other 2 Other Account \n(c) reneaparri 2022";
    $Web="https://github.com/maximum001/max"; 

echo "$White";
echo "$ScriptName\n";
echo "$Web\n\n";
echo "let's rate each others posts\n";

$acct2rate=[];
$acct=0;

echo "$Green\n";
echo "Account to RATE [max of 4]\n";
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
     echo "> no account to RATE entered\n\n";
        mainmenu(); 
        }

$raters = [];
$usr=0;
echo "$Cyan\n";
echo "Raters/Dummy account username\n";
echo "enter blank when done\n$Green\n";
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
    echo "no RATERS acount entered\n";
    echo "pls. enter atleast one (1) account\n\n";
    mainmenu();}

#should use one password for all accounts
echo "$Yellow\n";
echo "Raters/Dummy account password\n$Green\n";
$mainpassword=readline('Password : ');
if ($mainpassword == '')
{
    echo "$Yellow";
    echo "\n**empty password**\n\n";
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
$rated++;

    #login to raters
    $jsonn = logintoaccount($currentRater,$mainpassword);

    if ($jsonn != NULL) :

    $msgn = $jsonn->message;

    if ($msgn == "User logged in") {

    $status = $jsonn->status;
    $vuser = $jsonn->data->username;
    $bearer = $jsonn->data->token->accessToken;
//    $json = json_decode($respp);  
    
    echo "$Cyan\n";
    echo "Login status | $msgn\n";
    
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
  
            usleep(200000);  
            $urld = "https://profiles.mylykaapps.com/api/v3/profiles/GetProfilePosts?os=android&pageIndex=1&pageSize=50&id=$verifiedaccountID&category=ALL";
            $curld = curl_init($urld);
            curl_setopt($curld, CURLOPT_URL, $urld);
            curl_setopt($curld, CURLOPT_RETURNTRANSFER, true);
            $headersd = array("authorization: Bearer $bearer", "user-agent:Lyka/3.6.65 (com.thingsilikeapp; build:865 Android 11)",);
            curl_setopt($curld, CURLOPT_HTTPHEADER, $headersd);
            $respd = curl_exec($curld);
            curl_close($curld);

            $arr = json_decode($respd, true);
       
                   $x=0;
                   do {
                       $pid[$x] = $arr["data"]["$x"]["id"];
                       $x++;
                   } while ($x !=10);
    
    #actual rating of posts
    #loop 10 times
                    $PostNum=0;
                    $xcount=1;
                    $timetosleep=1;
                    do {
                        $devID=uniqid('eab');
                        $devnamemodel=uniqid('eea');
                    
                        echo "$White"; 
                        printf("%-5s$Green #%2s > ",".mr.","$xcount");

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
                        "deviceModel"      : "$devnamemodel",
                        "deviceName"       : "$devnamemodel",
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
        
                        if ($json != NULL)
                        {    
                        echo "$Cyan";
                        $postmessage=$json->message;
                        
                            $timetosleep=1;
                        if (strstr($postmessage,'Congratulations')) {
                            echo "rated over 10 posts \n";
                           // var_dump($json);
                        } elseif ($postmessage=="You already have rated this post.")
                        {
                         echo "post already rated\n";
                         //var_dump($json);   
                        } elseif (strstr($postmessage,'Too many')) {
                            echo "failed, retrying\n";
                            $PostNum--;
                            $xcount--;
                            $timetosleep=10;
                           // var_dump($json);

                        } elseif (strstr($postmessage,'Forbidden')) {
                            echo "forbidden, retrying\n";
                            $PostNum--;
                            $xcount--;
                            $timetosleep=10;
                        } elseif (strstr($postmessage,"Post rating")) {
                           echo "earnings saved\n";
                           //var_dump($json);    
                        } else {
                           echo "$postmessage\n";
                                
                        }
                        } else { 
                            echo "LYKA server error\n";  
                            $timetosleep=10;
                        }
                            
                        $PostNum++;
                        $xcount++;

                        if ($timetosleep != 10)
                        { usleep(200000);}
                        else { sleep($timetosleep); }
    
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
  
    } else {         //user logged in
        echo "$Yellow\n";
        echo "$msgn";
        echo "\n$White";
       // break;
    }  #// endif
    
    else : //jsonn !=null
        echo "$Yellow\n\n";
        echo "LYKA server error";
        echo "\n$White";

    endif;    


    sleep(2);
    
    endforeach;
    
     echo "$White\n";
     echo "Summary of Rate Posts\n";
     checkgems($raters, $mainpassword);


    echo "$White\n";
    
    return;
 #   ///////////////// end of foreach loop to raters account //////////////////

   } // end of ratemypost


function addpostmomentMenu($posttype, $ratersaccount, $mainaccounts)
{
    @system("clear");

    $Cyan     = "\033[0;36m" ;        # Cyan
    $White    = "\033[0;37m" ;       # White
    $Green    = "\033[0;32m" ;       # Green
    $Yellow   = "\033[0;33m" ;      # Yellow

$ScriptName ="ADD POST/MOMENTS ROUTINE\n(c) reneaparri 2022";
$Web="https://github.com/maximum001/max";

echo "$White";
echo "$ScriptName\n";
echo "$Web\n\n";
echo "\nADD $posttype Menu\n";
echo "-----------------------------";
echo "$White\na)$Green add to main accounts";
echo "$White\nb)$Green add to raters accounts";
echo "$White\nc)$Green add to other account";
echo "$White\nd)$Green back to main";
echo "$White\n-----------------------------\n";

   $inputtask = readline("Your selection : ");

   switch($inputtask) {
      case "a" : //post to main
       
        addpost2account($mainaccounts,"$posttype","main"); 
        echo "\n\n";
        exit;
      
      case "b" : //post to raters
     
        addpost2account($ratersaccount,"$posttype","raters");
        echo "\n\n";
        exit;
      
      case "c" : //post to other 
    
       addpost2account($ratersaccount,"$posttype","other");
       echo "\n\n";
       exit;

      case "d" :
       @system("clear");
       mainmenu();   

      default :
       @system("clear");
       mainmenu();   
   }     
return;
}

function addpost2account($newaccounts, $posttype, $accounttype)
{
   @system("clear");

   //Set font color
   
   // Regular Colors
   $Black    = "\033[0;30m" ;     //  # Black
   $CRed     = "\033[0;31m" ;     //  # Red
   $Green    = "\033[0;32m" ;       # Green
   $Yellow   = "\033[0;33m" ;      # Yellow
   $Blue     = "\033[0;34m" ;        # Blue
   $Cyan     = "\033[0;36m" ;        # Cyan
   $White    = "\033[0;37m" ;       # White
   
   $ScriptName ="ADD POST/MOMENT ROUTINE\n(c) reneaparri 2022";
   $Web="https://github.com/maximum001/max";
   
   $acct=0;
   
   echo "$White";
   echo "$ScriptName\n";
   echo "$Web\n\n";
   echo "add $posttype(s) to $accounttype account\n";
   
   $acct2post = []; 

   if ($accounttype == 'other')
   {
   $acct=0;

   echo "$Yellow\n";
   echo "Input username to add $posttype(s)\n";
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

   } else {

    printf("$Green\nYou have %s $accounttype accounts\n$Yellow",count($newaccounts));
    $start = readline("Start with account no.  : ");
    if ($start == '') { $start=0;} else {$start--;}
    $end =   readline("End with account no.    : ");
    if ($end == '') { $end=count($newaccounts)-1;} else {$end--;}
    print "$Cyan\nStart [$newaccounts[$start]]";
    print "$Cyan\nEnd   [$newaccounts[$end]]\n";

      $x=$start;
    do {
        array_push($acct2post,$newaccounts[$x]);
            $x++;
    } while ($x != $end+1);
        }

   echo "$Green\n";
   echo "Enter account password*\n";
   echo "\n";
   
   echo "$White";
   $mainpassword=readline("Password : ");
   if ($mainpassword == '')
   {
       echo "$Yellow";
       echo "\n> no password was entered\n\n";
       mainmenu();  
   }
   
   echo "$White";
   echo "\nNumber of $posttype to add [default=10]\n";
   $postcount=readline("Count : ");
   
   if ($postcount =='') {
       $postcount=10;
   }
   
   @system("clear");
   echo "$White\n";
   echo "$ScriptName\n";
   echo "$Web\n$Yellow\n";
   echo "let's now add $posttype to $accounttype account\n";
   echo "pls. wait ...\n";
   usleep(50000);
   
   loop2accounts($acct2post,$mainpassword,$posttype,$postcount);

} //end of postit
//////////////////////////////////////////////////////////////////////////////////


function loop2accounts($acct2post,$mainpassword,$posttype,$postcount)
{

    $Black    = "\033[0;30m" ;     //  # Black
    $CRed     = "\033[0;31m" ;     //  # Red
    $Green    = "\033[0;32m" ;       # Green
    $Yellow   = "\033[0;33m" ;      # Yellow
    $Blue     = "\033[0;34m" ;        # Blue
    $Cyan     = "\033[0;36m" ;        # Cyan
    $White    = "\033[0;37m" ;       # White
    
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
    
    echo "$White\n";
    printf("%-5s (%2s/%-2s) | %-15s\n","User",$posted, $noofaccounts,$currentUser);

    echo "$Cyan";
    
    //Login to account
    $jsonn = logintoaccount($currentUser,$mainpassword);
    
if ($jsonn != NULL) :
    
    $msgn = $jsonn->message;
    
    if ($msgn == "User logged in") {
    
    $status = $jsonn->status;
    $vuser = $jsonn->data->username;
    $bearer = $jsonn->data->token->accessToken;
    
          echo "$White";
          printf("%-13s | %.2f\n","Lyka Gems",getgembalance($bearer));
          printf("%-13s |$Cyan %s\n\n","Status",$msgn);
    
     $postloop=1;
     $postretry=1;
     do {  
        
       echo "$White";
       printf(".%-6s #%-2s > ",$posttype,$postloop);

//       $deviceid = uniqid('daf');
         
       echo "$Cyan";
       
         $poststatus = postmoments($vuser, $bearer, $posttype);
       
         if ($poststatus !='')
         {
         if (strstr($poststatus,"Too many")) {
             echo "retrying ($postretry)";
             sleep(5);
             $postloop--;
             $postretry++; 
          } else {
           echo "$poststatus";
         }
        }  else { echo "error"; }
         
         echo "\n";
        
         $postloop++;
    
    } while ($postloop !=$postcount+1);
    
    echo "$Yellow";
    echo "\nadd $posttype to [$currentUser] done";
    
    } else {
        echo "$Yellow";
        echo "$msgn $White\n";
        break;
    } //end of "User logged in"

    
else :
    echo "LYKA server error";    
endif;

    echo "\n$Green";
    echo "--------------------------------\n";
    usleep(100000);
    
    } //end of loop for x username
    echo "$White\n";
    echo "Summary - add $posttype(s)\n";
    checkgems($acct2post,$mainpassword);
    mainmenu();

} // loop2accts


function postmoments($currentUser, $bearer, $posttype) {

    $device_id=uniqid('eaf');
    
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

                usleep(100000);

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
                    title:"#'.date("l").'",
                    hashtags:"#LYKA GEMS",
                    content: "'.date("m.d.y").'"'),
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

                return $postresponse->message;

        //   if( $response_message == "Moment retrieved."){ echo "+1 moments"; }


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
    $uAgent = 'Lyka/3.6.65 (com.thingsilikeapp; build:865 Android R 11)';
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
        usleep(300000);
        $getResp = curl_exec($getCurl);
        curl_close($getCurl);
        $getjson = json_decode($getResp);
 
        return $getjson;
 }
 
 function postX($urlx, $payloader, $cooks = ""){
    $postURL = $urlx;
    $uAgent = 'Lyka/3.6.65 (com.thingsilikeapp; build:865 Android R 11)';
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
        usleep(300000);
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
