<DOCTYPE html>
<html>

<?php
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Africa</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Africa Geography Quiz</h1>
        <p>Test your knowledge about African countries, capitals, and cities!</p>
    </header>

    <section id="country-info">
        <h2>Country Information</h2>
        <p>Select a country from the list below to learn more:</p>
        <ul id="country-list">
            <!-- Country list will be dynamically populated by JS -->
        </ul>

        <div id="country-details">
            <!-- Country details will be displayed here -->
        </div>
    </section>

    <section id="quiz">
        <h2>Geography Quiz</h2>
        <form id="quiz-form">
            <label for="capital-answer">What is the capital of <span id="quiz-country-name"></span>?</label>
            <input type="text" id="capital-answer" placeholder="Enter capital">
            <button type="submit">Submit Answer</button>
        </form>
        <p id="quiz-feedback"></p>
    </section>

    <footer>
        <p>&copy; 2024 Africa Geography Game</p>
    </footer>

    <script src="script.js"></script>
</body>
</html>
</html>

