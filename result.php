<?php
session_start();
$generatedPassword = $_SESSION["password"] ?? "Nessuna password trovata";
$length = $_SESSION["length"] ?? "X";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="./css/styles.css">

    <title>Your Password</title>
</head>

<body>

    <!-- Home Button -->
    <a href="./index.php" class="home-btn"><i class="fa-solid fa-arrow-left"></i> Home</a>

    <div class="result-container">

        <!-- Result Card -->
        <div class="card">

            <div class="result-title">
                <p>La tua password sicura di <?= $length ?> caratteri è: </p>
            </div>

            <!-- End Result -->
            <div class="result">
                <p class="pass"><?= $generatedPassword ?></p>
                <button class="copy-btn" onclick="copyToClipboard()"><i class="fa-solid fa-copy"></i></button>
            </div>

        </div>

    </div>

    <!-- Copy Script -->
    <script src="./js/copyToClipboard.js"></script>

    <?php
    unset($_SESSION["password"]);
    unset($_SESSION["length"]);
    ?>

</body>
</html>