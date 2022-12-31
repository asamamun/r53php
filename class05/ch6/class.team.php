<?php
//declare a class in php
class Team{
    //propery
    public $teamname;
    public $star;
    private $players = [];
    //constructor
    public function __construct($name="no name",$s="1"){
        $this->teamname = $name;
        $this->star = $s;
    }
    public function addPlayer($p){
        array_push($this->players,$p);
    }
    public function showteaminfo(){        
        $star = "";
        for ($i=1; $i <= $this->star; $i++) { 
            $star .= '<img width="16px" src="star.jpg" alt="">';
        }
        $html = "<fieldset><h1>Team : ". $this->teamname ." ".$star."</h1>";
        foreach ($this->players as $player) {
           $html .= "<li>$player</li>";
        }
        $html .= "</fieldset><br>";
        return $html;
    }

}