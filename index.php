<?php

class Production {
    public $title;
    public $language;
    public $vote;


    public function setVote(int $vote) {
        if (is_numeric($vote) && $vote > 0 && $vote <= 10) {
            $this->vote = intval($vote);
        } else {
            var_dump('errore');
        }
    }

    function __construct (string $_title, string $_language, int $_vote) {
        $this->title = $_title;
        $this->language = $_language;
        $this->setVote($_vote);
    }

};

$shrek = new Production('Shrek', 'english', 10);
$akira = new Production('Akira', 'japanese', 9);

var_dump($shrek);

?>
