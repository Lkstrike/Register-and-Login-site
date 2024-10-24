<?php
require_once(".\layout\header.php");
require_once("User.php");

$register_message = ""; 


if (isset($_POST["first_name"]) && isset($_POST["last_name"]) && isset($_POST["email"]) && isset($_POST["password"])) {
    $user = new User();
    $user->firstName = $_POST["first_name"];
    $user->lastName = $_POST["last_name"];
    $user->email = $_POST["email"];
    $user->password = $_POST["password"];

   
    if ($user->register()) {
        $register_message = "Registration successful!";
    } else {
        $register_message = "Registration failed. Please try again!";
    }
}
?>

<h1>Registrierung</h1>


<?php if ($register_message !== ""): ?>
    <p><?php echo $register_message; ?></p>
<?php endif; ?>


<form method="post">
    <input type="text" name="first_name" placeholder="First Name" required maxlength="60"/>
    <br/>
    <br/>
    <input type="text" name="last_name" placeholder="Last Name" required maxlength="60"/>
    <br/>
    <br/>
    <input type="email" name="email" placeholder="Your Email" required maxlength="120"/>
    <br/>
    <br/>
    <input type="password" name="password" placeholder="Create Password" required minlength="6" maxlength="60"/>
    <br/>
    <br/>
    <button type="submit">Register</button>
</form>

