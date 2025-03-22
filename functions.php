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