<?php

require '../src/DBconnect.php';
class Card
{
    public $title;

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    function __construct($title)
    {
        $this->title = $title;

    }


}
?>


