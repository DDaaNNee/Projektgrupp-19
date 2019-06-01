<?php
include 'resources/support/dbconnect.php';


/*If-sats här för att det inte ska visa att det inte är ifyllt på hemsidan*/
if(!empty($_POST['login_email'])) {
    $loginEmail = mysqli_real_escape_string($conn, $_POST['login_email']);
    $loginPassword = mysqli_real_escape_string($conn, $_POST['login_password']);

    $findHashPassword="SELECT Losenord FROM Anvandare WHERE Email='$loginEmail'";
    $hashQuerySQL= mysqli_query($conn, $findHashPassword) or die(mysqli_error($conn));
    $findPasswordRow= mysqli_fetch_row($hashQuerySQL);
    $findPasswordRow= $findPasswordRow[0];

    if(password_verify($loginPassword, $findPasswordRow)){
    $query = "SELECT Email FROM Anvandare WHERE Email='$loginEmail'";
    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
    $count = mysqli_num_rows($result);

    if ($count == 1) {
        $_SESSION['user'] = $loginEmail;
        $_SESSION['inloggad'] = true;
        echo "<script>location.href='index.php'</script>";
    }
    else{
        echo "<script> alert('Användarnamnet eller lösenordet är felaktigt')</script>";
    }
}
else{
  echo "<script> alert('Användarnamnet eller lösenordet är felaktigt')</script>";
}
mysqli_close($conn);
}
?>
