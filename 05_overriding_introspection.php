<?php
// Parent class: Person
class Person {
    protected $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function getRole() {
        return $this->name . " is a person.";
    }
}

// Child class: Employee (inherits from Person)
class Employee extends Person {
    private $job;

    public function __construct($name, $job) {
        parent::__construct($name);
        $this->job = $job;
    }

    // Override getRole method
    public function getRole() {
        return $this->name . " is an employee with job: " . $this->job;
    }
}

// Create objects
$person = new Person("Alice");
$employee = new Employee("Bob", "Developer");

// Introspection using Reflection
$person_reflection = new ReflectionClass($person);
$employee_reflection = new ReflectionClass($employee);

// Get property names from ReflectionClass
$person_properties = array_map(function($property) {
    return $property->getName();
}, $person_reflection->getProperties());
$employee_properties = array_map(function($property) {
    return $property->getName();
}, $employee_reflection->getProperties());

// Get method names
$employee_methods = array_map(function($method) {
    return $method->getName();
}, $employee_reflection->getMethods());
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <h2>Method Overriding and Introspection</h2>
    <p>Person Role: <?php echo htmlspecialchars($person->getRole()); ?></p>
    <p>Employee Role: <?php echo htmlspecialchars($employee->getRole()); ?></p>
    <p>Person Class Properties: <?php echo htmlspecialchars(implode(", ", $person_properties)); ?></p>
    <p>Employee Class Properties: <?php echo htmlspecialchars(implode(", ", $employee_properties)); ?></p>
    <p>Employee Class Methods: <?php echo htmlspecialchars(implode(", ", $employee_methods)); ?></p>
</body>
</html>