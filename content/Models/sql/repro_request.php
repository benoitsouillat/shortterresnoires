<?php

function getAllRepros()
{
    return "SELECT * FROM `repros`";
}
function getReproFromID()
{
    return "SELECT * FROM `repros` WHERE id = `:reproId`";
}
function createRepro()
{
    return "INSERT INTO `repros` (
        name, 
        sex, 
        birthdate, 
        `insert`, 
        breeder, 
        adn, 
        mainImg) 
        VALUES (
            :name, 
            :sex, 
            :birthdate, 
            :insert, 
            :breeder, 
            :adn, 
            :mainImg)";
}
function manageRepro()
{
    return "UPDATE `repros` SET 
    name = :name,
    sex = :sex,
    birthdate = :birthdate,
    `insert` = :insert,
    breeder = :breeder,
    adn = :adn,
    mainImg = :mainImg WHERE id = :reproID";
}
