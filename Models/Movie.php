<?php

require_once __DIR__ . '/Production.php';

class Movie extends Production {

    public $profit;
    public $duration;

    public function __construct(string $_title, string $_language, int $_vote, int $_profit, int $_duration) {
        parent::__construct($_title, $_language, $_vote);
        $this->profit = $_profit;
        $this->duration = $_duration;
    }

    public function getDurationFull() {
        return $this->duration . " min";
    }

    public function getProfitFull() {
        return $this->profit . " million dollars";
    }
}