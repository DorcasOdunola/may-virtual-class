<?php
    // OUTPUT COMMANDS
    // echo, print, print_r
    // echo "hi";
    // print("hi");
    // echo "<br/>";
    // echo "<b>WELCOME TO THIS CLASS</b>";
    // print_r("hi");

    // $name = "Dorcas";
    // $profile = "is a big girl";
    // echo $name . " " . $profile;

    // // $stdArray = array(); $stdArray = [];
    // $stdArray = array("Dorcas", "Elijah", "Temidola");
    // print_r($stdArray[0]);

    $students = ["Dorcas", "Elijah", "Temidola"];
    // print_r($students);
    // echo (count($students));

    // for ($i = 0; $i < count($students); $i++) { 
    //     echo "My id is ". $i . " and my name is " . $students[$i]; 
    //     echo "<br/>";
    // }


    // Associative Array (an array that looks like an object)
    // $studentList = array ("name" => "Dorcas", "department" => "Software Engineering", "school" => "SQI");
    // foreach ($studentList as $key => $value) {
    //     echo "The " . $key. " is " . $value;
    //     echo "<br/>";
    //     # code...
    // }

    // print_r($studentList['department']);
    // print_r($studentList);
    // echo "<br/>";
    // to create an object
    $obj = new StdClass;
    $obj->name = "Dorcas";
    $obj->department = "Software Engineering";
    $obj->school = "SQI";
    // print_r($obj->department);

    // how to push into an array
    $AllStudents = array();
    // array_push($AllStudents, $obj);
    // print_r($AllStudents);


        // Multidimesional array
    $studentFirst = array ("name" => "Dorcas", "department" => "Software Engineering", "school" => "SQI");
    $studentSecond = array ("name" => "Dorcas", "department" => "Software Engineering", "school" => "SQI");
    $studentThird = array ("name" => "Dorcas", "department" => "Software Engineering", "school" => "SQI");
    array_push($AllStudents, $studentFirst, $studentSecond, $studentThird);
    foreach ($AllStudents as $student) {
        foreach ($student as $key => $value) {
            echo "The " . $key. " is " . $value;
            echo "<br/>";
        }
        # code...
    }






?>