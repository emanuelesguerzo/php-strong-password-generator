<!-- PHP -->
<?php

    include_once "./functions.php";

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