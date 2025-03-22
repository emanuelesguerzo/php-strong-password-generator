<!-- PHP -->
<?php

    function generatePassword() {
        $lowercase = "abcdefghijklmnopqrstuvwxyz";
        $uppercase = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $numbers   = "0123456789";
        $symbols   = "!@$%&*";

        $all_chars = $lowercase . $uppercase . $numbers . $symbols;

        $password = "";

        for($i = 0; $i < $_GET["length"]; $i++) {
            $randomIndex = rand(0, strlen($all_chars) - 1 );
            $password .= $all_chars[$randomIndex];
        }

        return $password;

    }

?>

<!-- HTML -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>
</head>

<body>

    <div class="container">

        <!-- Form -->
        <form method="GET">

            <label for="length">Lunghezza Password</label>
            <input type="number" name="length" id="length" min="6" max="24">

            <button type="submit">Genera</button>

        </form>

        <!-- Result Field -->
        <div class="result">

            <?php
                if (isset($_GET["length"])) {
                    echo generatePassword();
                }
            ?>

        </div>

    </div>

</body>
</html>