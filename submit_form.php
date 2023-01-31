<!-- Include the HTML form -->


<?php include 'index.html'; ?>

<?
$html = file_get_contents('form.html');
preg_match('/<form.*?>(.*?)<\/form>/s', $html, $matches);
echo $matches[1];
?>


<!-- Process the form data -->

<?php
    if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['number']) && isset($_POST['message'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $number = $_POST['number'];
        $message = $_POST['message'];
        $to = "youremail@example.com";
        $subject = "New contact form submission";
        $headers = "From: $email" . "\r\n" .
                   "Reply-To: $email" . "\r\n" .
                   "X-Mailer: PHP/" . phpversion();
        $body = "You have received a new message from the user $name.\n".
                "Email: $email \n".
                "Phone number: $number \n".
                "Here is the message:\n $message\n";
        if (mail($to, $subject, $body, $headers)) {
            echo 'Your message has been sent successfully !';
        } else {
            echo 'An error occurred, please try again later.';
        }
    }

         <!-- Process the form data -->

            $server = "localhost";
            $username = "root";
            $password = "";
            $dbname = "nedan_db";
            
            // Create connection
            $conn = mysqli_connect($server, $username, $password, $dbname);
            
            // Check connection
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }
            echo "Connected successfully";
?>
