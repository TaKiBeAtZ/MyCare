<?php
// Establish database connection
$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbname = "mycare";

$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

// Check for database connection errors
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the selected year is sent via POST
if (!isset($_POST['selectedYear'])) {
    die(json_encode(array("error" => "Selected year not provided")));
}

$selectedYear = $_POST['selectedYear'];

// Construct the SQL query based on the selected year
if ($selectedYear == "0") {
    $sql = "SELECT white_cell, red_cell, haemoglobin, sodium, calcium FROM question";
} else {
    $sql = "SELECT white_cell, red_cell, haemoglobin, sodium, calcium FROM question WHERE created_at = ?";
}

// Fetch data from the database based on the constructed SQL query
$stmt = $conn->prepare($sql);

// Check if the prepared statement was successfully created
if (!$stmt) {
    die(json_encode(array("error" => "Prepared statement error: " . $conn->error)));
}

// Bind parameters and execute the query if needed
if ($selectedYear != "0") {
    $stmt->bind_param("s", $selectedYear);
}
$stmt->execute();

$result = $stmt->get_result();

// Initialize variables to store sums
$whiteSum = 0;
$redSum = 0;
$haemoglobinSum = 0;
$sodiumSum = 0;
$calciumSum = 0;

// Calculate the sum of each parameter
while ($row = $result->fetch_assoc()) {
    $whiteSum += $row['white_cell'];
    $redSum += $row['red_cell'];
    $haemoglobinSum += $row['haemoglobin'];
    $sodiumSum += $row['sodium'];
    $calciumSum += $row['calcium'];
}

// Close the statement
$stmt->close();

// Close the connection
$conn->close();

// Return the sums as JSON with associative keys
echo json_encode(array(
    "WCC" => $whiteSum,
    "RCC" => $redSum,
    "HBGL" => $haemoglobinSum,
    "NA" => $sodiumSum,
    "CA" => $calciumSum
));
?>
