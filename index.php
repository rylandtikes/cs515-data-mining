<?php
include 'password.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['password']) && $_POST['password'] == $password) {
        echo file_get_contents('index.html');
    } else {
        echo '<p>Incorrect password!</p>';
    }
} else {
    echo '<form action="" method="post">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password">
            <button type="submit">Login</button>
          </form>';
}
?>
