<?php
class Cake{
    public $moyda;
    public $egg;
    public $oil;
    public $bakingpowder;
    public $suger;
    public $color;
    public $flavour;
    public $title;
    private function bake(){

    }
    function make(){
$this->bake();
return "cake $this->flavour";
    }
}

$vanillacake = new Cake();
$vanillacake->moyda = "2 kg";
$vanillacake->flavour = "Vanilla";
$vanillacake->title = "HBD";
$vanillacake->make();


$cokolatecake = new Cake();
$cokolatecake->flavour = "Chokolate";
$cokolatecake->title = "Happy Eid Day 2023";

