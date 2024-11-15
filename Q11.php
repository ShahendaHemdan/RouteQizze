<?php

if (isset($_POST['color'])) {
    $color = $_POST['color'];
    setcookie('background_color', $color, time() + (30 * 24 * 60 * 60)); 
} else {
    $color = isset($_COOKIE['background_color']) ? $_COOKIE['background_color'] : '#ffffff';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            background-color: <?= $color; ?>; 
        }
    </style>
</head>
<body>
    <form method="POST">
        <label for="color">Choose a color:</label>
        <select name="color" id="color">
            <option value="#ffffff">White</option>
            <option value="#ffcccb">Baby Rose</option>

        </select>
        <input type="submit" value="submit">
    </form>
</body>
</html>