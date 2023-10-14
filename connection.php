<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = ""; // Leave blank if you haven't set a password in XAMPP
$database = "server";

// Create a connection
$conn = new mysqli($servername, $username, $password, $database);

// Check the connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }

// Data to insert (you can modify these values as needed)


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $title = $_POST['title'];
    $data = $_POST['data'];

    // SQL query to insert data into the table
    $sql = "INSERT INTO `data` (title, data) VALUES ('$title', '$data')";

    if ($conn->query($sql) === TRUE) {
        echo "Data inserted successfully!";
    }
    // } else {
    //     echo "Error: " . $sql . "<br>" . $conn->error;
    // }

} elseif ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Handle GET requests if needed
    // For example, retrieve data from the database and return it
    die("OK!");
} else {
    // Handle other request methods if needed

    die("No post no get ?");
}

// Close the database connection
$conn->close();
?>
