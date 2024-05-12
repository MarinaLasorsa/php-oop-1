<?php

require_once __DIR__ . '/Production.php';

class TVSerie extends Production {

    public $seasons_number;

    public function __construct(string $_title, string $_language, int $_vote, int $_seasons_number) {
        parent::__construct($_title, $_language, $_vote);
        $this->seasons_number = $_seasons_number;
    }

    public function getSeasonsNumberFull() {
        return $this->seasons_number . " seasons";
    }
}