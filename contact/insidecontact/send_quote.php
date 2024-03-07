<!DOCTYPE html>
<html>
<head>
    <title>Form Submission Result</title>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $product = $_POST['product'];
    $quantity = $_POST['quantity'];
    $message = $_POST['message'];

    // Display form data
    echo "<h2>Form Submission Result:</h2>";
    echo "<p><strong>Name:</strong> $name</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Phone:</strong> $phone</p>";
    echo "<p><strong>Product:</strong> $product</p>";
    echo "<p><strong>Quantity:</strong> $quantity</p>";
    echo "<p><strong>Message:</strong> $message</p>";
} else {
    echo "Form submission error.";
}
?>

</body>
</html>
