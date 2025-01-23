<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $activity = $_POST['activity'];
    $dinner = $_POST['dinner'];
    $dessert = $_POST['dessert'];
    $otherRequest = $_POST['other'];

    // Create a string with the form data
    $data = "Activity: $activity\n";
    $data .= "Dinner: $dinner\n";
    $data .= "Dessert: $dessert\n";
    if ($otherRequest) {
        $data .= "Special Request: $otherRequest\n";
    }

    // Define the file path (ensure the directory is writable)
    $file = "valentine_choices.txt";

    // Write the data to the file
    file_put_contents($file, $data, FILE_APPEND);

    echo "Data saved to file successfully!";
}
?>