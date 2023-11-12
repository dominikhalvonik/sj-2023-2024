<?php

namespace ukf;

class Trieda
{
    private $mojAtt = "Ahoj";
    public $mojPublAtt = "Dnes je ale pekne";

    public function __construct()
    {
        $this->mojAtt = "Nie je Ahoj";
    }

    public function printHelloMessage()
    {
        for ($i = 0; $i < 10; $i++) {
            echo $this->mojAtt . "<br>";
        }
    }

    protected function vypocetNahodnehoCisla(int $min, int $max): int
    {
        return mt_rand($min, $max);
    }

    public function printRandomNumber(array $exclude, int $number): void
    {
        $numbers = [];

        for ($i = 0; $i < $number; $i++) {
            $tmpRandNumber = $this->vypocetNahodnehoCisla(1, 50000);
            $numbers[] = $tmpRandNumber;
        }

        $response = [];

        foreach ($exclude as $item) {
            foreach ($numbers as $n) {
                if($n != $item && !in_array($n, $response)) {
                    $response[] = $n;
                }
            }
        }

        foreach ($response as $value) {
            print $value . "<br>";
        }
    }
}