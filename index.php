<?php
session_start();
include_once "./functions.php";
$errorMessage = "";

if (isset($_GET["length"])) {
    $generated = generatePassword();

    if (strpos($generated, "Seleziona") === 0 || strpos($generated, "Set") === 0) {
        // Errore
        $errorMessage = $generated;
    } else {
        // Valido
        $_SESSION["password"] = $generated;
        header("Location: result.php");
        exit;
    }
}

?>

<!-- HTML -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="./css/styles.css">

    <title>Password Generator</title>
</head>

<body>

    <div class="container">

        <!-- Form -->
        <form method="GET">

            <!-- Input Length -->
            <div class="length-input">
                <label for="length">Lunghezza password</label>
                <input type="number" name="length" id="length" min="6" max="24" value="6" required>
            </div>

            <!-- Character Repetition -->
            <div class="repetition">

                <p>Ripetizione dei caratteri</p>

                <div class="radio-btns">
                    <label for="repeat-yes"><i class="fa-solid fa-check"></i>
                        <input type="radio" name="repeat" id="repeat-yes" value="yes" checked>
                    </label>
                    <label for="repeat-no"><i class="fa-solid fa-xmark"></i>
                        <input type="radio" name="repeat" id="repeat-no" value="no">
                    </label>
                </div>

            </div>

            <!-- Form Footer -->
            <div class="form-footer">

                <!-- Character Selection -->
                <div class="checkboxes">
                    <label for="uppercase">Maiuscole
                        <input type="checkbox" name="uppercase" id="uppercase" checked>
                    </label>

                    <label for="lowercase">Minuscole
                        <input type="checkbox" name="lowercase" id="lowercase" checked>
                    </label>

                    <label for="numbers">Numeri
                        <input type="checkbox" name="numbers" id="numbers">
                    </label>

                    <label for="symbols">Simboli
                        <input type="checkbox" name="symbols" id="symbols">
                    </label>
                </div>

                <!-- Generate Button -->
                <div class="btn">
                    <button type="submit">Genera</button>
                </div>

            </div>
        </form>

        <!-- Error Message -->
        <?php if (!empty($errorMessage)) : ?>
            <div class="error-message"><?= $errorMessage ?></div>
        <?php endif; ?>

    </div>
</body>

</html>