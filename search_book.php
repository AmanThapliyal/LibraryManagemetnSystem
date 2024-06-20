<?php
// $servername = "localhost";
// $username = "username";
// $password = "";
// $dbname = "librarymamagementsystem";

// Create connection
$conn = mysqli_connect("localhost", "root", "", "mydatabaase");

// $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Check if the bookId parameter is set in the URL
if (isset($_GET['bookId'])) {
    $bookId = $_GET['bookId'];

    // Use prepared statement to prevent SQL injection
    $stmt = $conn->prepare("SELECT Book_id, Title, Author FROM book WHERE Book_id = ?");
    $stmt->bind_param("s", $bookId);
    $stmt->execute();

    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Output data of each row
        while ($row = $result->fetch_assoc()) {
            echo "ID: " . $row["Book_id"] . " - Title: " . $row["Title"] . " - Author: " . $row["Author"] . "<br>";
        }
    } else {
        echo "0 results for Book ID: " . $bookId;
    }

    $stmt->close();
} else {
    echo "Please provide a Book ID.";
}

$conn->close();
?>