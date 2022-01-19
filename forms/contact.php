<?php
//get data from form  
$message_sent = false;
if(isset($_POST['name'],FILTER_VALIDATE_EMAIL)){

  $userName = $_POST['name'];
$userEmail= $_POST['email'];
$messageSubject= $_POST['subject'];
$message = $_POST['message'];

$to = "pratikpatil0783@mail.com";
$body = "";
$body ="From: ".$userName. "\r\n";
$body ="Email: ".$userEmail. "\r\n";
$body ="Message: ".$message. "\r\n";

mail($to,$message_sent,$body);

$message_sent = true;
}else{
  $invalid_class_name = "form-invalid";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pratik Patil Portfolio Website</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="forms/main.js"></script>
  
</head>
<body>
<?php
if($message_sent):
?>
<h3>Thanks</h3>
<?php
else:
?>


              <div class="container">
                <form action="contact.php" method="POST" class="form">
                    <div class="form-group">
                        <label for="name" class="form-label">Your Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Jane Doe" tabindex="1" required>
                    </div>
                    <div class="form-group">
                        <label for="email" class="form-label">Your Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="jane@doe.com" tabindex="2" required>
                    </div>
                    <div class="form-group">
                        <label for="subject" class="form-label">Subject</label>
                        <input type="text" class="form-control" id="subject" name="subject" placeholder="Hello There!" tabindex="3" required>
                    </div>
                    <div class="form-group">
                        <label for="message" class="form-label">Message</label>
                        <textarea class="form-control" rows="5" cols="50" id="message" name="message" placeholder="Enter Message..." tabindex="4"></textarea>
                    </div>
                    <div>
                        <button type="submit" class="btn">Send Message!</button>
                    </div>
                </form>
            </div>
            <?php
            endif;
            ?>
           
</body>


