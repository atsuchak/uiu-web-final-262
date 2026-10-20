<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question 2</title>
</head>
<body>
    <form method="POST">
        <label for="">Room Type: </label>
        <select name="input1" id="">
            <option value="">Standard</option>
            <option value="">Deluxe</option>
            <option value="">Suite</option>
        </select> //Select not work. Type the room type in "Room Type" input field<br><br>



        <label for="">Room Type: </label>
        <input type="text" name="input5"> //Type Standard, Deluxe or Suite<br><br>
        
        <label for="">Weekday Nights: </label>
        <input type="text" name="input2"><br><br>

        <label for="">Weekend Nights: </label>
        <input type="text" name="input3"><br><br>

        <label for="">Number of Guests: </label>
        <input type="text" name="input4"><br><br>

        <button name="submit">Calculate</button>
    </form>
</body>
</html>


<?php
    if(isset($_POST["submit"])) {
        // $room = $_POST["input1"];
        $room = $_POST["input5"];
        $weekday = (int)$_POST["input2"];
        $weekend = (int)$_POST["input3"];
        $guest = (int)$_POST["input4"];

        $roomCharge = 0;
        $discount = 0; 
        $extraGuest = 0; 
        $total = 0;
        $vat = 0;
        $finalBill = 0;

        if($room == "Standard") {
            $roomCharge = ($weekday*3000) + ($weekend*3000*1.25);
            
            if($weekday+$weekend >= 7) $discount = $roomCharge*0.1;
            else if($weekday+$weekend >= 3) $discount = $roomCharge*0.05;

            $extraGuest = ($guest-2)*800*($weekday+$weekend);
            $total = $roomCharge + $extraGuest - $discount;

            $vat = $total * 0.15;

            $finalBill = $total + $vat;
            
        }else if($room == "Deluxe") {
            $roomCharge = ($weekday*5000) + ($weekend*5000*1.25);
            
            if($weekday+$weekend >= 7) $discount = $roomCharge*0.1;
            else if($weekday+$weekend >= 3) $discount = $roomCharge*0.05;

            $extraGuest = ($guest-2)*800*($weekday+$weekend);
            $total = $roomCharge + $extraGuest - $discount;

            $vat = $total * 0.15;

            $finalBill = $total + $vat;
        }else {
            $roomCharge = ($weekday*8000) + ($weekend*8000*1.25);
            
            if($weekday+$weekend >= 7) $discount = $roomCharge*0.1;
            else if($weekday+$weekend >= 3) $discount = $roomCharge*0.05;

            $extraGuest = ($guest-2)*800*($weekday+$weekend);
            $total = $roomCharge + $extraGuest - $discount;

            $vat = $total * 0.15;

            $finalBill = $total + $vat;
        }

        echo "Room Charge: $roomCharge TK <br>";
        echo "Discount: $discount TK <br>";
        echo "Extra Guest Charge: $extraGuest TK <br>";
        echo "Service Charge & Vat: $vat TK <br>";
        echo "Final Bill: $finalBill TK <br>";
        
    }
?>