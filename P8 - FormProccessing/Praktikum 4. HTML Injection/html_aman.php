<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Aman dengan PHP</title>
    
    <?php
    $input = $email = "";
    $emailErr = "";

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        if (!empty($_POST['input'])) {
            $input = $_POST['input'];
            $input = htmlspecialchars($input, ENT_QUOTES, "UTF-8");
        }

        if (!empty($_POST['email'])) {
            $email = $_POST['email'];
            $email = htmlspecialchars($email, ENT_QUOTES, "UTF-8");

            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo "<h3>Input yang Anda Kirim:</h3>";
                echo "<p>Input: $input</p>";
                echo "<p>Email: $email</p>";
            } else {
                $emailErr = "Email yang Anda masukkan tidak valid.";
            }
        }
    }
    ?>

</head>
<body>
    <h2>Input Aman dengan PHP</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
        <label for="input">Nama:</label>
        <input type="text" name="input" id="input" required><br><br>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>
        <span class="error" style="color: red;"><?php echo $emailErr; ?></span><br><br>

        <input type="submit" value="Kirim">
    </form>
</body>
</html>
