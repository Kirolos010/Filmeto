<!DOCTYPE html>
<html>

<head>
    <title>Update In Filmeto</title>
    <link rel="icon" type="image/x-icon" href="2.png">
    <link rel="stylesheet" type="text/css" href="index.css">
    <link href="index.css" rel="stylesheet">
</head>

<body>
    <div class="main">
        <input type="checkbox" id="chk" aria-hidden="true">

        <div class="signup">
            <form method="post" action="../backend/update.php">
                <label for="chk" aria-hidden="true">Update</label>
                <input type="password" name="password_old" placeholder="Current password" required="">
                <input type="password" name="password_new" placeholder="New Password" required="" >
                <button type="submit" value="submit" name="submit">Update</button>
            </form>
        </div>


    </div>

</body>

</html>