<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review and Rating System</title>
    <link rel="stylesheet" href="styles.css">
	<style>
	body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

.container {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
}

#reviews-container {
    border-top: 1px solid #ddd;
    margin-top: 20px;
    padding-top: 20px;
}

.review {
    border: 1px solid #ddd;
    padding: 10px;
    margin-bottom: 10px;
    background-color: #f9f9f9;
}

#review-form {
    margin-top: 20px;
    padding-top: 20px;
    border-top: 1px solid #ddd;
}

#review-form h2 {
    margin-bottom: 10px;
}

label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
}

input[type="number"],
textarea {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ddd;
    border-radius: 4px;
}

button {
    background-color: #007bff;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

button:hover {
    background-color: #0056b3;
}

/* Base styles */
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

.container {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
}

#reviews-container {
    border-top: 1px solid #ddd;
    margin-top: 20px;
    padding-top: 20px;
}

.review {
    border: 1px solid #ddd;
    padding: 10px;
    margin-bottom: 10px;
    background-color: #f9f9f9;
}

#review-form {
    margin-top: 20px;
    padding-top: 20px;
    border-top: 1px solid #ddd;
}

#review-form h2 {
    margin-bottom: 10px;
}

label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
}

input[type="number"],
textarea {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ddd;
    border-radius: 4px;
}

button {
    background-color: #007bff;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

button:hover {
    background-color: #0056b3;
}

/* Media queries for mobile responsiveness */
@media screen and (max-width: 480px) {
    .container {
        padding: 10px;
    }

    input[type="number"],
    textarea {
        padding: 5px;
    }

    button {
        padding: 5px 10px;
    }
}



</style>
<script>
	document.getElementById('review-form').addEventListener('submit', function (event) {
  event.preventDefault();

  // Get user input
  const rating = parseInt(document.getElementById('rating').value);
  const comment = document.getElementById('comment').value;

  // Validate input
  if (isNaN(rating) || rating < 1 || rating > 5 || comment.trim() === '') {
    alert('Please enter a valid rating (1-5) and comment.');
    return;
  }

  // Create a new review element
  const reviewElement = document.createElement('div');
  reviewElement.classList.add('review');
  reviewElement.innerHTML = `<p><strong>Rating: ${rating}</strong></p><p>${comment}</p>`;

  // Add the review to the container
  document.getElementById('reviews-container').appendChild(reviewElement);

  // Clear the form
  document.getElementById('rating').value = '';
  document.getElementById('comment').value = '';
});

	</script>
</head>
<body>
    <div class="container">
        <div id="reviews-container">
            <!-- Existing reviews will be displayed here -->
        </div>
<h1> Krishibzar review</h1>
        <form id="review-form">
            <h2>Leave a Review</h2>
            <label for="rating">Rating:</label>
            <input type="number" id="rating" name="rating" min="1" max="5" required>
            <label for="comment">Comment:</label>
            <textarea id="comment" name="comment" required></textarea>
            <button type="submit">Submit</button>
        </form>
    </div>

    <script src="scripts.js"></script>
</body>
</html>
