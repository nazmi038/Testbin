<?php
if (isset($_POST['email']) && $_POST['email'] != ''){

    if ( filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
        $NAME = $_POST['name'];
        $EMAIL = $_POST['email'];
        $MATRIC = $_POST ['matric'];
        $ADDRESS = $_POST ['address'];
        $TELEPHONE = $_POST ['telno'];
        $HOMETELE = $_POST ['hometelno'];
        $PASSWORD =  $_POST ['password'];
    
        $to = "nazmi95.nn@gmail.com";
        $body = "";
    
        $body .= "From:".NAME. "\r\n";
        $body .= "Email:".EMAIL. "\r\n";
        
        mail($to,$EMAIL,$MATRIC,$ADDRESS,$TELEPHONE,$HOMETELE,$PASSWORD,$body);
        $message_sent = true;
    }
    else{
        $message_sent = false;
    }
}

?>

<html >
<head>
<meta charset="utf-8">
<meta name="viewport"  content="width=device-width">
<title>JS Bin </title>
</head>

<body>
    <?php
    if($message_sent):
        ?>

        <h3> Thank you for reading</h3>
        <?php

        ?>
<script src="link.js"></script>
<form id="form1" name="form1" method="post" action="Input validate.php">
<label>Name (Legal/Official) </label> : <input type="text" name="name" id="name" size="30" > <br />
<label>Matric number </label>: <input type="text" name="matric" id="matric" size="30" > <br />


<label>Home  Address </label> :<input type="text" name="address" id="address" size="30" > <br />
<label>Email</label>: <input type="text" name="email" id="email" size="30" > <br />
<label>Telephone Number</label> : <input type="text" name="telno" id="telno" size="30" > <br />
<label>Home Telephoe Number</label> : <input type="text" name="hometelno" id="hometelno" size="30" > <br />
<label>Password</label> : <input type="password" name="password" id="password" size="30" > <br />
<button onClick="submit">Submit</button>
<?php 
endif;
?>

</body>

</html>