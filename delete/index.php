<!DOCTYPE html>
<html>

<head>
    <title>Sign Up In Filmeto</title>
    <link rel="icon" type="image/x-icon" href="2.png">
    <link rel="stylesheet" type="text/css" href="index.css">
    <link href="index.css" rel="stylesheet">
</head>

<body>
    <div class="main">
        <input type="checkbox" id="chk" aria-hidden="true">

        <div class="signup">
            <form method="post" action="../backend/delet.php">
                <label for="chk" aria-hidden="true">Delete</label>
                <input type="email" name="email" placeholder="Email" required="">
                <input type="password" name="password" placeholder="Password" required="">
                <button type="submit" value="submit" name="submit">Submit</button>
            </form>
        </div>


    </div>

</body>

</html>