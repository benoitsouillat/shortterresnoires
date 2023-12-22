<?php

function getAllRepros()
{
    return "SELECT * FROM repros";
}
function getReproFromID()
{
    return "SELECT * FROM repros WHERE reproID = `:reproId`";
}
