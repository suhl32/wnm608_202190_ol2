<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    var_dump($_POST);
    
    // Read user data from JSON file
    $users_json = file_get_contents("../data/users.json");
    $users = json_decode($users_json, true);

    // Get user ID from form submission
    $user_id = $_POST["id"];

    // Update user information
    if (isset($users[$user_id])) {
        $users[$user_id]["name"] = $_POST["name"];
        $users[$user_id]["email"] = $_POST["email"];
        // Check if address and phone fields are set before updating
        if (isset($_POST["address"])) {
            $users[$user_id]["address"] = $_POST["address"];
        }
        if (isset($_POST["phone"])) {
            $users[$user_id]["phone"] = $_POST["phone"];
        }

        // Encode updated user data to JSON
        $updated_users_json = json_encode($users, JSON_PRETTY_PRINT);

        // Write updated user data back to JSON file
        file_put_contents("../data/users.json", $updated_users_json);

        // Set success message
        $message = "User information updated successfully.";

        // Redirect to user list page with success message
        header("Location: ../admin/index.php?message=");
        exit;
    } else {
        // Set error message
        $error = "Invalid user ID.";

        // Redirect to user list page with error message if user ID is invalid
        header("Location: ../admin/index.php?error=Invalid user ID.");
        exit;
    }
} else {
    // Redirect to user list page if form is not submitted
    header("Location: ../admin/index.php");
    exit;
}
?>