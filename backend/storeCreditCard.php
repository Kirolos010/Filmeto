<?php
session_start();

function test_input($data) {
    //remove extra whitespace from the beginning and end of the string
    $data = trim($data);

    //remove slashes from the string
    $data = stripslashes($data);

    //convert special characters to HTML entities
    $data = htmlspecialchars($data);

    return $data;
}


$card_number = $holder_name = $expiry_date = $cvv = "";



//check if the user has already entered credit card details
//if (!isset($_SESSION['card_number'])) {     //if the card number is not set in the session
                                            //let him enter card details
                                            //if the user has entered credit card details
                                            //complete the transaction and redirect him to the home page
    if (isset($_POST['checkOut'])) {

        $card_number = test_input($_POST['cardNum']);
        $expiry_date = test_input($_POST['expDate']);
        $cvv = test_input($_POST['cvv']);   //encrypt the password before storing in the database
        $holder_name = test_input($_POST['cardHolder']);


        //  connect to the database
        $connect = mysqli_connect("localhost", "root", "", "filmeto");
        if (!$connect) {
            die("Connection failed: " . mysqli_connect_error());
        }


        //insert the new user into the credit card table
        $sql = "INSERT INTO credit_card (card_number, expiry_date, cvv, holder_name) VALUES ('$card_number', '$expiry_date', '$cvv', '$holder_name')";


        if (mysqli_query($connect, $sql)) {
            echo "<script>
            alert('Successfull payment');  
            window.location.href='../Thanks/index.php';
            </script>";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($connect);
        }

        mysqli_close($connect);
    //}

}else{
    //complete the transaction and redirect him to the home page
    echo "<script>
    alert('Successfull payment');
    window.location.href='../Thanks/index.php';
    </script>";
}