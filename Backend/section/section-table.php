<?php
// Include the database configuration file
include 'config.php';

// Fetch the data from the database
$sql = "SELECT * FROM content_form_table";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Form Submissions</title>
    <link rel="stylesheet" href="./style/section-table.css">
</head>

<body>
    <h1>Content View Table</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Description</th>
                <th>Image 1</th>
                <th>Image 2</th>
                <th>Image 3</th>
            </tr>
        </thead>
        <tbody>
            <?php
        // Check if there are any results
        if ($result->num_rows > 0) {
            // Output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . htmlspecialchars($row['title']) . "</td>";
                echo "<td>" . htmlspecialchars($row['description']) . "</td>";
                echo "<td><img src='" . htmlspecialchars($row['image1']) . "' alt='Image 1'></td>";
                echo "<td><img src='" . htmlspecialchars($row['image2']) . "' alt='Image 2'></td>";
                echo "<td><img src='" . htmlspecialchars($row['image3']) . "' alt='Image 3'></td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='7'>No data found</td></tr>";
        }
        ?>
        </tbody>
    </table>

</body>

</html>

<?php
// Close the database connection
$conn->close();
?>