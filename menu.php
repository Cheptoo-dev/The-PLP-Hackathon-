<?php
$servername = "localhost";
$username = "root";
$password = "cheptoo";
$dbname = "dish_flavoured";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT name, description, price FROM menu_items";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<div class='menu-item'>";
        echo "<h3>" . $row["name"]. "</h3>";
        echo "<p>" . $row["description"]. "</p>";
        echo "<p>$" . $row["price"]. "</p>";
        echo "</div>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
