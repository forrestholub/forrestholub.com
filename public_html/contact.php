<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Contact Info</title>
  <link rel="stylesheet" type="text/css" href="navigate.css">
<style>
  body {
    font-family: Arial, Helvetica, sans-serif;
  }

  input[type=text],
  select,
  textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
  }

  input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }

  input[type=submit]:hover {
    background-color: #45a049;
  }

  .container {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
  }
</style>
</head>

<body>
<script src="navigate.js"></script>


<div class="topnav" id="myTopnav">
  <a href="index.html" >Home</a>
  <a href="gallery.html">Gallery</a>

  <div class="dropdown">
    <button class="dropbtn">Projects</button>
    <div class="dropdown-content">
      <a href="projects/ESP.php">Soil Moisture Control</a>
          <a href="projects/api.php">API Fun</a>
    </div>
  </div>
  <a href="about.html"> About</a>
   <a href="resume.html">Resume </a>
  <a href="contact.php"class="active">Contact</a>
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="navigate()">&#9875;</a>
</div>

<?php

if (($_SERVER["REQUEST_METHOD"] == "POST")){
    $to = "forrestholub@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['fname'];
    $last_name = $_POST['lname'];
    $country = $_POST['country'];
    $subject = $_POST['subject'];
    $subject2 = "Copy of your message to Forrest";
    $message = $first_name . " " . $last_name . " from " . $country . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "<br>";
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


?>

  <h3>Contact Form</h3>
  <div class="container">
    <form method = "post" action='<?php echo ($_SERVER["PHP_SELF"]);?>'>
      <label for="fname">First Name</label>
      <input type="text" id="fname" name="fname" placeholder="Your name..">

      <label for="lname">Last Name</label>
      <input type="text" id="lname" name="lname" placeholder="Your last name..">

      <label for="country">Country</label>
      <select id="country" name="country">
        <option value="Australia">Australia</option>
        <option value="Canada">Canada</option>
        <option value="USA">USA</option>
        <option value = "United Kingdom">United Kingdom</option>
        <option value = "Mexico">Mexico</option>
        <option value = "Japan">Japan</option>
        <option value = "China">China</option>
      </select>

      <label for="email">Email</label>
      <input type="text" id="email" name="email" placeholder="A copy of your message will be sent here. ">

      <label for="subject">Subject</label>
      <input type="text" id="subject" name="subject" placeholder="Subject">

      <label for="Message">Message</label>
      <textarea id="message" name="message" placeholder="Write something.." style="height:200px"></textarea>
      <input type="submit" value="Submit">
    </form>
  </div>

  <br>
  <br>

</body>

</html>