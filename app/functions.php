<?php

function connectDB(): PDO
{
    return new PDO(DSN, USER, PASSWORD, OPT);
}


function getProducts(): bool|array
{
    $query = connectDB()->prepare('SELECT * FROM products');
    $query->execute();
    return $query->fetchAll();
}
