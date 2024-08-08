<!DOCTYPE html>
<html lang="en">

<head>
    <title>Filmeto</title>
    <link rel="icon" type="image/x-icon" href="2.png">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <div class="card">
            <div class="top">
                <h3>Place your payment method</h3>
                <hr>
            </div>

            <form method="post" action="../backend/storeCreditCard.php">
            <div class="card-details"> <input type="text" name="cardNum" placeholder="0000 0000 0000 0000" data-slots="0"
                    data-accept="\d" maxlength="19"> <span>Card Number</span> <i class="fa fa-credit-card"></i> </div>
            <div class="exp-cvv">
                <div class="card-details"> <input type="text" name="expDate" placeholder="mm/yyyy" data-slots="my" maxlength="7"> <span>Expiry
                        date</span> <i class="fa fa-calendar"></i> </div>
                <div class="card-details"> <input type="text" name="cvv" placeholder="000" data-slots="0" maxlength="3" data-accept="\d"
                > <span>CVV</span> <i class="fa fa-info-circle"></i> </div>
            </div>
            <div class="card-details mt-25"> <input type="text" name="cardHolder" placeholder="Enter cardholder's full name"> <span>Card
                    Holder Name</span> </div>
            <div class="tick"> <span><i class="fa fa-check d-none"></i></span>
            </div>
                <div class="button"><a href="../Thanks/index.html"> <button type="submit" name="checkOut" value="submit">Check out</button></a> </div>
            </form>
        </div>
    </div>