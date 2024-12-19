<?php

    require_once "utils/const.php";
    require_once "utils/functions.php";
    require_once "models/Pokemon.php";

    $message = message(18);

    $pokemon = Pokemon::fetch_and_create_pokemon(URL);
    $pokemon_data = $pokemon->get_data();
?>

<?php require "sections/header.php"; ?>
<?php require "sections/body.php"; ?>
<?php require "sections/footer.php"; ?>
<?php require "css/main.php"; ?>