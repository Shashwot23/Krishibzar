<!DOCTYPE html>
<html>
<head>
    <title>Review and Rating System</title>
    <!-- Add your CSS for styling here -->
    <link rel="stylesheet" type="text/css" href="styles.css">
    
    <style>
.review-form {
    margin-top: 20px;
}

#reviews {
    margin-top: 20px;
}

.review {
    border: 1px solid #ccc;
    padding: 10px;
    margin-bottom: 10px;
}
</style>
<script>
    // JavaScript code to handle form submission and review display
document.addEventListener("DOMContentLoaded", function() {
    const reviewForm = document.getElementById("reviewForm");
    const reviewsContainer = document.getElementById("reviews");

    reviewForm.addEventListener("submit", function(event) {
        event.preventDefault();
        const formData = new FormData(reviewForm);

        // Send the review data to the backend
        fetch("submit_review.php", {
            method: "POST",
            body: formData
        })
        .then(response => response.text())
        .then(data => {
            console.log(data);
            // Refresh the reviews
            loadReviews();
        })
        .catch(error => {
            console.error("Error:", error);
        });
    });

    function loadReviews() {
        // Fetch and display the reviews from the server
        fetch("get_reviews.php")
        .then(response => response.json())
        .then(data => {
            // Clear existing reviews
            reviewsContainer.innerHTML = "";

            // Display new reviews
            data.forEach(review => {
                const reviewElement = document.createElement("div");
                reviewElement.classList.add("review");
                reviewElement.innerHTML = `
                    <h3>${review.username}</h3>
                    <p>Rating: ${review.rating}</p>
                    <p>${review.review}</p>
                `;
                reviewsContainer.appendChild(reviewElement);
            });
        })
        .catch(error => {
            console.error("Error:", error);
        });
    }

    // Initial load of reviews
    loadReviews();
});

    </script>
</head>
<body>
    <h1>Product Reviews</h1>
    <div class="review-form">
        <form id="reviewForm">
            <label for="username">Your Name:</label>
            <input type="text" id="username" name="username" required>
            <label for="rating">Rating:</label>
            <input type="number" id="rating" name="rating" min="1" max="5" required>
            <label for="review">Your Review:</label>
            <textarea id="review" name="review" required></textarea>
            <button type="submit">Submit Review</button>
        </form>
    </div>
    <!-- Display existing reviews here -->
    <div id="reviews">
        <!-- Reviews will be dynamically added here -->
    </div>

    <!-- Add your JavaScript for interactivity here -->
    <script src="script.js"></script>
</body>
</html>



<?php
// Create a connection to the database

include("../Includes/db.php");
// Process the review submission
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"];
    $rating = $_POST["rating"];
    $review = $_POST["review"];

    // Insert the review into the database
    $sql = "INSERT INTO reviews (username, rating, review) VALUES ('$username', $rating, '$review')";

    if ($conn->query($sql) === TRUE) {
        echo "Review submitted successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection

?>
