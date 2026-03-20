<?php

class Person {
    public $name;
    public $birthYear;

    // Constructor
    function __construct($name, $birthYear) {
        $this->name = $name;
        $this->birthYear = $birthYear;
    }

    // Function to calculate age
    function calculateAge() {
        $currentYear = date("Y"); // Built-in function
        $age = $currentYear - $this->birthYear;

        // If-else condition
        if ($age > 0) {
            return $age;
        } else {
            return "Invalid birth year";
        }
    }

    // Display function
    function displayDetails() {
        echo "Name: " . $this->name . "<br>";
        echo "Age: " . $this->calculateAge() . "<br>";
    }
}

// Create object
$person1 = new Person("Prasanth", 2004);

// Display output
$person1->displayDetails();

?>