<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php include("partials/head.html"); ?>

    <link rel="stylesheet" href="styles/register.css">

    <title>Register | Eagle</title>
</head>

<body>

    <div class="form-container">
        <form method="POST">
            <a href="index.php">
                <img src="images/eagle-logo.webp" alt="Eagle" />
            </a>
            <input type="text" placeholder="Username..." name="username" />
            <input type="password" placeholder="Password..." name="password" />
            <input type="password" placeholder="Confirm password..." name="confirm_password" />
            <button type="submit">Register</button>
        </form>
    </div>

    <?php include("partials/admin.html"); ?>

</body>

</html>