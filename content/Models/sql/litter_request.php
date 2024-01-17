<?php

function getAllLitters()
{
    return "SELECT * FROM `litters` ORDER BY birthdate DESC";
}
function getAllActiveLitters()
{
    return "SELECT * FROM `litters` WHERE display = 1 ORDER BY birthdate DESC";
}

function getLitterFromId()
{
    return "SELECT * FROM `litters` WHERE litterId = :litterId";
}
function createLitter()
{
    return "INSERT INTO `litters` (mother, father, birthdate, numberOfPuppies, numberOfMales, numberOfFemales, numberLOF, display
        ) VALUES (
            :mother, :father, :birthdate, :numberOfPuppies, :numberOfMales, :numberOfFemales, :numberLof, :display
        )";
}
function manageLitter()
{
    return "UPDATE `litters` SET 
    mother = :mother,
    father = :father,
    birthdate = :birthdate,
    numberOfPuppies = :numberOfPuppies,
    numberOfMales = :numberOfMales,
    numberOfFemales = :numberOfFemales,
    numberLOF = :numberLof,
    display = :display WHERE litterId = :litterId";
}
function deleteLitterFromId()
{
    return "DELETE FROM `litters` WHERE litterId = :litterID";
}
