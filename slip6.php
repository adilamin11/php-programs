<?php
 class Country {
    protected $nationality;

    public function __construct($nationality) {
        $this->nationality = $nationality;
    }

    public function displayNationality() {
        echo "Nationality: " . $this->nationality . "<br>";
    }
}

class State extends Country {
    private $stateName;

    public function __construct($nationality, $stateName) {
        parent::__construct($nationality);
        $this->stateName = $stateName;
    }

    public function displayStateCountryNationality() {
        echo "State: " . $this->stateName . "<br>";
        $this->displayNationality();
    }
}

$state = new State("INDIAN", "J&K");
$state->displayStateCountryNationality();
?>