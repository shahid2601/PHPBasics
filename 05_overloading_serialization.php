<?php
class Person {
    private $name;
    private $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    // Simulate method overloading with __call
    public function __call($method, $arguments) {
        if ($method === "setInfo") {
            if (count($arguments) === 1) {
                $this->name = $arguments[0];
                return "Updated name to: " . htmlspecialchars($this->name);
            } elseif (count($arguments) === 2) {
                $this->name = $arguments[0];
                $this->age = $arguments[1];
                return "Updated name to: " . htmlspecialchars($this->name) . ", age to: " . htmlspecialchars($this->age);
            }
        }
        return "Method $method not found.";
    }

    public function getDetails() {
        return "Name: " . $this->name . ", Age: " . $this->age;
    }
}

// Create a person object
$person = new Person("Alice", 25);

// Test overloading
$name_update = $person->setInfo("Bob");
$full_update = $person->setInfo("Charlie", 30);

// Test serialization
$serialized = serialize($person);
$unserialized = unserialize($serialized);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <h2>Method Overloading and Serialization</h2>
    <p>Original Person: <?php echo htmlspecialchars($person->getDetails()); ?></p>
    <p>Update Name Only: <?php echo htmlspecialchars($name_update); ?></p>
    <p>Update Name and Age: <?php echo htmlspecialchars($full_update); ?></p>
    <p>Serialized: <?php echo htmlspecialchars($serialized); ?></p>
    <p>Unserialized: <?php echo htmlspecialchars($unserialized->getDetails()); ?></p>
</body>
</html>