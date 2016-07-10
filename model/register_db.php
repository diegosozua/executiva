<?php

//$name_id = filter_input(INPUT_POST, 'name_id', FILTER_VALIDATE_INT);
$name = filter_input(INPUT_POST, 'name');
$phone = filter_input(INPUT_POST, 'phone');
$state = filter_input(INPUT_POST, 'state');
$city = filter_input(INPUT_POST, 'city');

if ($name == null || $phone == null || $state == null || $city == null) {
    $error = "Todos os campos devem ser preenchidos!";
    include('../errors/error.php');
} else {
    require_once ('../model/database.php');

    $query = 'INSERT INTO contato (nome, celular, estado, cidade) VALUES (:name, :phone, :state, :city)';
    $statement = $db->prepare($query);
    //$statement->bindValue(':name_id', $name_id);
    $statement->bindValue(':name', $name);
    $statement->bindValue(':phone', $phone);
    $statement->bindValue(':state', $state);
    $statement->bindValue(':city', $city);
    $statement->execute();
    $statement->closeCursor();
    include('../view/success.php');
}

