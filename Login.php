<?php
require_once(".\layout\header.php");
require_once("User.php");

$login_message = ""; // Variable für Erfolg- oder Fehlermeldung

// Prüfe, ob das Login-Formular gesendet wurde
if (isset($_POST["email"]) && isset($_POST["password"])) {
    $user = new User();
    $user->email = $_POST["email"];
    $user->password = $_POST["password"];

    // Versuche, den Benutzer einzuloggen
    if ($user->login()) {
        $login_message = "Login successful!";
    } else {
        $login_message = "Invalid email or password. Please try again!";
    }
}
?>

<h1>Login</h1>

<!-- Ausgabe der Erfolg- oder Fehlermeldung -->
<?php if ($login_message !== ""): ?>
    <p><?php echo $login_message; ?></p>
<?php endif; ?>

<!-- Login-Formular -->
<form method="post">
    <input type="email" name="email" placeholder="Your Email" required maxlength="120"/>
    <br/>
    <br/>
    <input type="password" name="password" placeholder="Your Password" required minlength="6" maxlength="60"/>
    <br/>
    <br/>
    <button type="submit">Login</button>
</form>

<?php require_once(".\layout\\footer.php"); ?>



    <link rel="stylesheet" href="css.css"> 
