<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

</body>
</html>

<form action="/app/Logic/action.php" method="post">
    <?php
    echo '<p>' . $error . '</p>';
    if (isset($error) && $error === 'Card_number is not valid') {
        echo '<p style="color: red">Card number<input type="number" minlength="16" size="16" name="card_number"></p>';
    } else {
        echo '<p>Card number<input type="number" minlength="16" size="16" name="card_number"></p>';
    }

    if (isset($error) && $error === 'Card_holder is not valid') {
        echo '<p style="color: red">Owner<input  type="text" name="card_holder"></p>';
    } else {
        echo '<p>Owner<input type="text" name="card_holder"></p>';
    }

    if (isset($error) && $error === 'Card_expiration is not valid') {
        echo '<p style="color: red">Expiration<input type="text" value="" name="card_expiration" /></p>';
    } else {
        echo '<p>Expiration<input type="text" value="" name="card_expiration" /></p>';
    }

    if (isset($error) && $error === 'Cvv is not valid') {
        echo '<p style="color: red">CVV<input type="number" maxlength="3" name="cvv"></p>';
    } else {
        echo '<p>CVV<input type="number" maxlength="3" name="cvv"></p>';
    }
    if (isset($error) && $error === 'Order_number is not valid') {
        echo '<p style="color: red" >Order number<input type="number" maxlength="16" name="order_number"></p>';
    } else {
        echo '<p>Order number<input type="number" maxlength="16" name="order_number"></p>';
    }
    if (isset($error) && $error === 'Sum is not valid') {
        echo '<p style="color: red">Sum<input type="text" name="sum"></p>';
    } else {
        echo '<p>Sum<input type="text" name="sum"></p>';
    }
    ?>
    <button type="submit">Send</button>

</form>

