<?php

function getAllPuppies()
{
    return "SELECT * FROM `puppies`";
}
function getAllPuppiesOrderLitter()
{
    return "SELECT * FROM `puppies` ORDER BY `litter` DESC";
}
function getAllPuppiesFromLitter()
{
    return "SELECT * FROM `puppies` WHERE litter = :litterID ORDER BY `litter` DESC";
}
function getAllPuppiesOrderLitterMales()
{
    return "SELECT * FROM `puppies` WHERE litter = :litterID ORDER BY `litter` DESC,`available` ASC, `sex` DESC";
}
function getAllPuppiesOrderLitterFemales()
{
    return "SELECT * FROM `puppies` WHERE litter = :litterID ORDER BY `litter` DESC, `sex` ASC";
}
function getAllPuppiesOrderLitterDispos()
{
    return "SELECT * FROM `puppies` WHERE litter = :litterID AND available = 'Disponible' ORDER BY `litter` DESC, `sex` ASC";
}
function getAllPuppiesOrderLitterOptions()
{
    return "SELECT * FROM `puppies` WHERE litter = :litterID AND available = 'Option' ORDER BY `litter` DESC, `sex` ASC";
}
function getAllPuppiesOrderLitterReserv()
{
    return "SELECT * FROM `puppies` WHERE litter = :litterID AND available = 'Réservé' ORDER BY `litter` DESC, `sex` ASC";
}
function getPuppyFromId()
{
    return "SELECT * FROM `puppies` WHERE puppyID = :puppyID";
}


// CRUD

function savePuppyDiapo()
{
    return "INSERT INTO `diapos` (path, puppyID) VALUES (:path, :puppyID)";
}
function deletePuppyMales()
{
    return "DELETE FROM `puppies` WHERE litter = :litterID AND sex = 'Male'";
}

function deletePuppyFemales()
{
    return "DELETE FROM `puppies` WHERE litter = :litterID AND sex = 'Female'";
}
function createPuppy()
{
    return "INSERT INTO `puppies` 
    (name, litter, sex, color, necklace, available, mainImg, price, display) 
    VALUES (:name, :litter, :sex, :color, :necklace, :available, :mainImg, :price, :display)";
}
function managePuppy()
{
    return "UPDATE `puppies` 
    SET name = :name, 
    litter = :litter, 
    sex = :sex, 
    color = :color, 
    necklace = :necklace, 
    available = :available, 
    mainImg = :mainImg, 
    price = :price, 
    display = :display WHERE puppyID = :puppyID";
}
