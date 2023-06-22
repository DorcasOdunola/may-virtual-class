<?php
    // Parent Class
    class First {
        private $name = "Dorcas";
        protected $position = "Developer";
        var $school = "SQI";

        public function __construct ($name) {
            echo "$name, It's New Dawn!!";
        }

        public function welcome () {
            return "Hi $this->name, you are welcome to the class.";
            // return "Hi $name, you are welcome to the class";
        }
    }

    //class inheritance
    // Child class
    class Second extends First {

        public function __construct ($name) {
            // echo "heello";
            parent::__construct($name);
        }

        public function showPosition () {
            echo $this->welcome();
            // echo "$this->name, your position is $this->position";
            echo "Your position is $this->position. And you will be studying at this school $this->school.";
        }

        public function __destruct () {
            echo "done";
        }
    } 
    

    // creating a new instance of a class(return an object)
    $useFirst = new First("Elijah");
    // echo $useFirst->position;
    // echo $useFirst->welcome();
    echo "<br/>";
    $useSecond = new Second("Temidayo");
    echo $useSecond->showPosition();


    // I create a new instance of this class or i extend the class to another class (inheritance)



    // public private protected
    // Note: Private property or method can only be used in the class it was created


?>