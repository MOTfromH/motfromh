<?php
require ('./logic/connectionCV.php');

if (isset($_POST['submitCV'])){

    $password = $_POST['passwordCV'];

    $stmt = $con->prepare('SELECT * From pwd;');
    $stmt->execute();
    $rowPwd = $stmt->fetch();

    $pwdHash = $rowPwd['pwdHash'];
    $checkPassword = password_verify($password, $pwdHash);

    if (!$checkPassword) {

        echo "Login fehlgeschlagen, Passwort stimmt nicht überein";

    }

    if($checkPassword){
        // Die Bedingung ist wahr: Passwort ist korrekt
        // Empfehlung: Verhindern Sie Caching des PDFs
//        $filename = "./assets/files/bewerbungAnhang.pdf";

// Header content type
        header("Content-type: application/pdf");
        readfile('./assets/files/bewerbungAnhang.pdf');

//        header("Content-Length: " . filesize($filename));
//
//// Send the file to the browser.
//        readfile($filename);
//        exit;
    }
}





