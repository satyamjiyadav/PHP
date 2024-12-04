<?php

// Access modifiers decides where we can access the methods and properties

// Access Zones 
// Access  inside the current class only
// Access everywher
// Access in inheritance class

// Types
// Private 
// Public 
// Protected

class Teachers{
    // by default public hota hai
    private function questionPapers() {
        return "importanat";
    }

    public function exam(){
        if($this->questionPapers() == "important"){
            echo "do something";
        }else{
            echo "do else";
        }
    }

    protected function studentMarks() {
        echo "all students marks";
    }

}

class Management extends Teachers{
    function reviewExam(){
        $this->studentMarks();
    }
}

$t1 = new Teachers();
$m1 = new Management();

$m1->reviewExam();
// $t1->exam();
?>