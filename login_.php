<?php
include 'dbconnect.php';


//If-sats här för att det inte ska visa att det inte är ifyllt på hemsidan
if(!empty($_POST('username')){
    $loginEmail = mysqli_real_escape_string($_POST['username']);
    $loginPassword = mysqli_real_escape_string($_POST['userPassword'])

    $findHashPassword="SELECT Losenord FROM Anvandare WHERE Email='$loginEmail'";
    $hashQuerySQL= mysqli_query($conn, $findHashPassword) or die(mysqli_error($conn));
    $findPasswordRow= mysqli_fetch_row($resultPass);
    $findPasswordRow= $findPasswordRow[0];

    if(password_verify($loginPassword, $findPasswordRow){
        $_SESSION['username']=$NameUser;
        echo"<script>location.href='index.php'</script>";
    }
    else{
        echo "Användarnamnet eller lösenordet är felaktigt"
    }

}

mysqli_close($conn);
/*header('Location: index.php'); */

?>
