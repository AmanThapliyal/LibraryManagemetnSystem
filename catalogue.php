
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydatabaase";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM book";
$result = $conn->query($sql);

echo "<h2>Library Book Catalog</h2>";

if ($result->num_rows > 0) {
    echo "<table border='1'>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Author</th>
            <th>Price</th>
            <th>Available</th>
        </tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["Book_id"] . "</td>
                <td>" . $row["Title"] . "</td>
                <td>" . $row["Author"] . "</td>
                <td>" . $row["Price"] . "</td>
                <td>" . ($row["Available"] ? 'Yes' : 'No') . "</td>
              </tr>";
    }

    echo "</table>";
    
} else {
    echo "<p>No books available in the catalog.</p>";
}

$conn->close();
?>