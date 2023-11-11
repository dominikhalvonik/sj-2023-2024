<?php

namespace ukf;

class DietaTriedy extends Trieda
{
    public function __construct()
    {
        parent::__construct();
    }

    public function nasobokNahodnehoCisla(int $multiplier)
    {
        $randomN = $this->vypocetNahodnehoCisla(5, 10);
        $result = $randomN * $multiplier;
        return $result;
    }
}