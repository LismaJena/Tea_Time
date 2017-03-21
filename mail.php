<?php 
if(isset($_POST['submit'])){
    $to = "lismajena@gmail.com";
    $from = $_POST['email']; 
    $first_name = $_POST['firstname'];
    $last_name = $_POST['lastname'];
    $subject = "Order Confirmation";
    $subject2 = "Order Confirmation";
    $message = "Order has been placed";
    $message2 = "Your order has been confirmed";

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); 
    
    }
?>