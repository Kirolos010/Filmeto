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
$email= $password = $username = "";
if (isset($_POST['submit'])) {  //if the registration form is submitted
    $email = test_input($_POST['email']);
    $password = test_input($_POST['password']);
            //encrypt the password before storing in the database
    $username = test_input($_POST['userName']);

//  connect to the database
    $connect = mysqli_connect("localhost", "root", "", "filmeto");
    if (!$connect) {
        die("Connection failed: " . mysqli_connect_error());
    }
//    check if the user exists in the database
    $sqlSelect = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($connect, $sqlSelect);
    $count = mysqli_num_rows($result);
    $raw = mysqli_fetch_assoc($result);
    if($raw['email'] != $email){
        $sql = "INSERT INTO users (email, password, username) VALUES ('$email', '$password', '$username')";
        if (mysqli_query($connect, $sql)) {
            echo "<script>
            alert('Account created successfully');  
            window.location.href='../home/index.php';
            </script>";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($connect);
        }
    }else{ //if that email already exists in the database
        //redirect to the login page
        echo "<script>
        alert('Sorry this email has already been registered');
        window.location.href='../home/index.php';
        </script>";
//        header("Location: ../home/index.html");

    }
    mysqli_close($connect);
}
?>