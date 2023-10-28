<?php

function printSomething(string $content, int $multiplier): void
{
    for ($i = 0; $i < $multiplier; $i++) {
        echo $content . "<br>";
    }
}

function returnCurrentDateTime(): string
{
    $currentTime = time();
    $currentDate = date("d.m.Y H:i:s", $currentTime);

    return $currentDate;
}