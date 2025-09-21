<div class="admin-pages">

    <?php if($_SESSION["logged_in"] == false): ?>

    <a href="login.php">Login</a>
    <a href="register.php">Register</a>

    <?php else: ?>

    <a href="dashboard.php">Dashboard</a>
    <a href="logout.php">Logout</a>
    
    <?php endif; ?>

</div>