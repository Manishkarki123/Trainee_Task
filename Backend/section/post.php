<?php
// Include the database configuration file
include 'config.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form values
    $title = htmlspecialchars($_POST['title']);
    $description = htmlspecialchars($_POST['description']);

    // Create an uploads directory if it doesn't exist
    $upload_dir = "uploads/";
    if (!is_dir($upload_dir)) {
        mkdir($upload_dir, 0777, true);
    }

    // Handle image 1 upload
    $image1 = $_FILES['image1'];
    $image1_target = $upload_dir . basename($image1['name']);
    move_uploaded_file($image1['tmp_name'], $image1_target);

    // Handle image 2 upload
    $image2 = $_FILES['image2'];
    $image2_target = $upload_dir . basename($image2['name']);
    move_uploaded_file($image2['tmp_name'], $image2_target);

    // Handle image 3 upload
    $image3 = $_FILES['image3'];
    $image3_target = $upload_dir . basename($image3['name']);
    move_uploaded_file($image3['tmp_name'], $image3_target);

    // Prepare the SQL statement to insert form data into the database
    $stmt = $conn->prepare("INSERT INTO content_form_table (title, description, image1, image2, image3) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $title, $description, $image1_target, $image2_target, $image3_target);

    // Execute the statement
    if ($stmt->execute()) {
        echo "Form submitted successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
}
?>