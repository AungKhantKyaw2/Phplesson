
<?php

function setpassword($plaintext){
    $passcode=$plaintext;
    echo $passcode;
}

setpassword("password1234");



function setpasscode($plaintext){
    $passcode=password_hash($plaintext,PASSWORD_DEFAULT);//dyn code
    
    echo "Before Encrypted ={$plaintext},After Encrypt={$passcode}";
    echo strlen($passcode);//60
}
setpasscode("password1234");//Before Encrypted =password1234,After Encrypt=$2y$10$grktIWRGrXBW.5QLUO6/AOKtXJM66HsLyrtnJyd0k59yAkp87ODtm 60


function passwordbcr($plaintext){
    $passcode=password_hash($plaintext,PASSWORD_BCRYPT);//dyn code
    
    echo "Before Encrypted ={$plaintext},After Encrypt={$passcode}";
    echo strlen($passcode);//60
}

passwordbcr("password1234");//Before Encrypted =password1234,After Encrypt=$2y$10$grktIWRGrXBW.5QLUO6/AOKtXJM66HsLyrtnJyd0k59yAkp87ODtm 60  


function passworddecry(){
    $plaintextone="password123";
    $encodeone= password_hash($plaintextone,PASSWORD_DEFAULT);

    $plaintexttwo="password1234";
    $encodetwo=password_hash($plaintexttwo,PASSWORD_BCRYPT);

    //echo "Encrypt Code one ={$encodeone}";
    //echo "Encrypt Code two ={$encodetwo}";
    
    $verify =password_verify($plaintextone,$encodetwo); //false
    if($verify){
        echo "OKi";
    }
     else{
        echo "Failed";
     }
   
}

passworddecry();

?>