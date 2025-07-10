<?php
class Book {
    private $title;
    private $author;

    // Constructor
    public function __construct($title, $author) {
        $this->title = $title;
        $this->author = $author;
        echo "Book created: " . htmlspecialchars($this->title) . " by " . htmlspecialchars($this->author) . "<br>";
    }

    // Destructor
    public function __destruct() {
        echo "Book destroyed: " . htmlspecialchars($this->title) . "<br>";
    }

    // Get book details
    public function getDetails() {
        return "Title: " . $this->title . ", Author: " . $this->author;
    }
}

// Create book objects
$book1 = new Book("1984", "George Orwell");
$book2 = new Book("To Kill a Mockingbird", "Harper Lee");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <h2>Constructor and Destructor Example</h2>
    <p>Book 1: <?php echo htmlspecialchars($book1->getDetails()); ?></p>
    <p>Book 2: <?php echo htmlspecialchars($book2->getDetails()); ?></p>
    <?php
    // Unset book1 to trigger destructor
    unset($book1);
    ?>
</body>
</html>