<?php
// Abstract class Character
abstract class Character {
    protected $name;
    protected $level;

    public function __construct($name, $level) {
        $this->name = $name;
        $this->level = $level;
    }

    abstract public function attack();

    public function displayCharacter() {
        echo "Name: " . $this->name . "<br>";
        echo "Level: " . $this->level . "<br>";
    }
}

// Warrior class extending Character
class Warrior extends Character {
    public function attack() {
        echo $this->name . " performs a physical attack!<br>";
    }
}

// Mage class extending Character
class Mage extends Character {
    public function attack() {
        echo $this->name . " casts a magic spell!<br>";
    }
}

// Create instances and test
$warrior = new Warrior("Thor", 10);
$warrior->displayCharacter();
$warrior->attack();

echo "<br>";

$mage = new Mage("Gandalf", 15);
$mage->displayCharacter();
$mage->attack();
?>
