<?php
    //header
    include_once('templates/header.php');
?>
<!-- ---------------------------------------------------------- -->
    

<main>
    <div id="title-container">
        <h1>Contact us!</h1>
        <p>Please fill out the form below to contact us.</p>
    </div>
    <div id="contact-container">
        <?php
            // check if form is submitted
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                // get form data
                $name = $_POST['name'];
                $surname = $_POST['surname'];
                $email = $_POST['email'];
                $message = $_POST['message'];

                // validate form data
                $errors = array();

                if (empty($name)) {
                    $errors[] = 'Name is required';
                }

                if (empty($surname)) {
                    $errors[] = 'Surname is required';
                }

                if (empty($email)) {
                    $errors[] = 'Email is required';
                } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $errors[] = 'Invalid email format';
                }

                if (empty($message)) {
                    $errors[] = 'Message is required';
                }

                // if form data is valid, send email
                // if (empty($errors)) {
                //     $to = 'your-email@example.com';
                //     $subject = 'Contact Form Submission';
                //     $message_body = "Name: $name\nSurname: $surname\nEmail: $email\nMessage:\n$message";
                //     $headers = "From: $name $surname <$email>\r\nReply-To: $email\r\n";

                //     if (mail($to, $subject, $message_body, $headers)) {
                //         echo '<p class="success-message">Your message has been sent successfully!</p>';
                //     } else {
                //         echo '<p class="error-message">Oops! Something went wrong. Please try again later.</p>';
                //     }
                // } else {
                //     // if form data is invalid, display errors
                //     echo '<ul class="error-messages">';
                //     foreach ($errors as $error) {
                //         echo '<li>' . $error . '</li>';
                //     }
                //     echo '</ul>';
                // }
            }
        ?>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" value="<?php echo isset($_POST['name']) ? $_POST['name'] : ''; ?>">
            </div>
            <div class="form-group">
                <label for="surname">Surname:</label>
                <input type="text" name="surname" id="surname" value="<?php echo isset($_POST['surname']) ? $_POST['surname'] : ''; ?>">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" value="<?php echo isset($_POST['email']) ? $_POST['email'] : ''; ?>">
            </div>
            <div class="form-group">
                <label for="message">Message:</label>
                <textarea name="message" id="message"><?php echo isset($_POST['message']) ? $_POST['message'] : ''; ?></textarea>
            </div>
            <button type="submit">Submit</button>
        </form>
    </div>
</main>


<!-- ---------------------------------------------------------- -->
<?php
    //footer    
    include_once('templates/footer.php');
?>