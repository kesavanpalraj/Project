<?php
include "db_conn.php";

// Check if the necessary data is available in $_POST
if (isset($_POST['book_id'], $_POST['book_title'], $_POST['book_name'], $_POST['image_url'], $_POST['book_pdf_url'])) {
    $book_id = $_POST['book_id'];
    $book_title = $_POST['book_title'];
    $book_name = $_POST['book_name'];
    $image_url = $_POST['image_url'];
    $book_pdf_url = $_POST['book_pdf_url'];
    $quantity = 1; // Default quantity for books

    // Check if the book already exists in the cart
    $check_sql = "SELECT * FROM cart WHERE book_id='$book_id'";
    $check_result = $conn->query($check_sql);

    if ($check_result->num_rows > 0) {
        // Book already in cart
        echo '<script type="text/javascript">';
        echo 'alert("Book already added to cart.");';
        echo 'window.location.href = "fetch_cart.php";';  // Redirect to the cart page
        echo '</script>';
    } else {
        // Insert data into the cart table
        $sql = "INSERT INTO cart (book_id, book_title, book_name, image_url, book_pdf_url, quantity) 
                VALUES ('$book_id', '$book_title', '$book_name', '$image_url', '$book_pdf_url', $quantity)";
        if ($conn->query($sql) === TRUE) {
            // Book added to cart successfully
            echo '<script type="text/javascript">';
            echo 'alert("Book added to cart successfully.");';
            echo 'window.location.href = "fetch_cart.php";';  // Redirect to the cart page
            echo '</script>';
        } else {
            // Error occurred
            echo '<script type="text/javascript">';
            echo 'alert("Error adding book to cart: ' . $conn->error . '");';
            echo 'window.history.back();';  // Redirect back to the previous page
            echo '</script>';
        }
    }
} else {
    // Missing required data
    echo '<script type="text/javascript">';
    echo 'alert("Error: Missing required data. Please try again.");';
    echo 'window.history.back();';  // Redirect back to the previous page
    echo '</script>';
}

$conn->close();
?>
