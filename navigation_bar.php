<nav class = "navbar">

    <!-- upperlevel -->
    <a class = "navbar-upperlevel" href = "#"> <?php echo $_SESSION['nama_pelanggan']; ?></a>

    <!-- navigation link -->
    <ul class = "navbar-navitem">
        <li class = "nav-item">
            <a class = "nav-link" href="dashboard_pelanggan.php">Dashboard</a>
        </li>
        <li class = "nav-item">
            <a class = "nav-link" href="temujanji.php">Temu Janji</a>
        </li>
        <li class = "nav-item">
            <a class = "nav-link" href="status_temujanji.php">Status Temu Janji</a>
        </li>
        <li class = "nav-item">
            <a class = "nav-link" href="logout_pelanggan.php">Log Keluar</a>
        </li>
    </ul>
</nav>