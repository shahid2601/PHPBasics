<?php
// Parent class: Animal
class Animal {
    public $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function makeSound() {
        return $this->name . " makes a generic animal sound.";
    }
}

// Child class: Dog (inherits from Animal)
class Dog extends Animal {
    public function makeSound() {
        return $this->name . " says: Woof!";
    }
}

// Child class: Cat (inherits from Animal)
class Cat extends Animal {
    public function makeSound() {
        return $this->name . " says: Meow!";
    }
}

// Create animal objects
$dog = new Dog("Buddy");
$cat = new Cat("Whiskers");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <h2>Simple Inheritance Example</h2>
    <p>Dog: <?php echo htmlspecialchars($dog->makeSound()); ?></p>
    <p>Cat: <?php echo htmlspecialchars($cat->makeSound()); ?></p>
</body>
</html>