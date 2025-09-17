<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="robots" content="noindex">
    <link rel="stylesheet" href="styles/thank-you.css">
    
    <title>Thank You - Survey | Eagle</title>
</head>

<body>

    <nav>
        <a href="#" target="_blank">
            <img src="images/eagle-logo.webp" alt="Eagle" width="150" />
        </a>
    </nav>
    
    <div class="container">
        <h1>Thank You!</h1>

        <p>
            Your responses have been forwarded to our customer service colleagues.
        </p>
    </div>

    <footer>
        <p>
            Copyright © <a href="#" target="_blank">Eagle</a> <span class="year-now"></span>.
        </p>
    </footer>

</body>

<script>
    const date = new Date();
    document.querySelector(".year-now").textContent = date.getFullYear();
</script>

</html>