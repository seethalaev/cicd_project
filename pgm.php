<?php
// Check if the form data is sent via POST method
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['fname'];
    $maths = $_POST['maths'];
    $english = $_POST['english'];

    // Calculate total marks
    $total = $maths + $english;

    // Save the data to a text file
    $file = fopen("student_data.txt", "a");
    fwrite($file, "Name: $name, Maths: $maths, English: $english, Total: $total\n");
    fclose($file);

    // Display confirmation message
    echo "Data has been saved successfully!";
} else {
    echo "No data submitted.";
}
?>
