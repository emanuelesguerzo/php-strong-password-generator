<?php

function generatePassword() {
    $uppercase = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $lowercase = "abcdefghijklmnopqrstuvwxyz";
    $numbers   = "0123456789";
    $symbols   = "!@$%&*";

    $all_chars = "";

    if (isset($_GET["uppercase"])) {
        $all_chars .= $uppercase;
    }

    if (isset($_GET["lowercase"])) {
        $all_chars .= $lowercase;
    }

    if (isset($_GET["numbers"])) {
        $all_chars .= $numbers;
    }

    if (isset($_GET["symbols"])) {
        $all_chars .= $symbols;
    }

    if ($all_chars === "") {
        return "Seleziona almeno un set di caratteri.";
    }

    $length = $_GET["length"];
    $allowRepeat = $_GET["repeat"] === "yes";
    $password = "";

    if ($allowRepeat) {
     
        for ($i = 0; $i < $length; $i++) {
            $randomIndex = rand(0, strlen($all_chars) - 1);
            $password .= $all_chars[$randomIndex];
        }

    } else {
        
        if ($length > strlen($all_chars)) {
            return "Set di caratteri inadeguati per la lunghezza password desiderata";
        }

        $shuffled = str_shuffle($all_chars);
        $password = substr($shuffled, 0, $length);
    }

    return $password;
}