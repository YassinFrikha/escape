<?php
$currentPage = basename($_SERVER['PHP_SELF']);
?>
<!-- Navigation -->
<style>
    .nav-links a {
        color: white;
        text-decoration: none;
        font-weight: bold;
        position: relative;
        padding-bottom: 4px;
        transition: color 0.3s ease;
    }

    .nav-links a:hover,
    .nav-links a.active {
        color: white;
    }

    .nav-links a::after {
        content: "";
        position: absolute;
        width: 0;
        height: 3px;
        bottom: 0;
        left: 0;
        background-color: #ffffff;
        transition: width 0.3s ease;
        border-radius: 3px;
    }

    .nav-links a:hover::after,
    .nav-links a.active::after {
        width: 100%;
    }

    nav {
        background-color: #388e3c;
        padding: 0 30px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        height: 60px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
        position: fixed;
        width: 100%;
        top:0;
        z-index: 9999999;
    }

    .nav-gap{
        height: 60px; /* Same height as the nav */
    }

    .logo img {
        height: 100px;
        vertical-align: middle;
    }

    .nav-links {
        display: flex;
        gap: 20px;
    }

    .dropdown {
        position: relative;
        display: inline-block;
    }

    .dropbtn {
        color: white;
        text-decoration: none;
        font-weight: 500;
        padding: 0 10px;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #ffffff;
        min-width: 180px;
        box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2);
        z-index: 1;
        border-radius: 6px;
    }

    .dropdown-content a {
        color: #2e5d34;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
        font-weight: 500;
        transition: background 0.3s;
    }

    .dropdown-content a:hover {
        background-color: #f0f8f1;
    }

    .dropdown:hover .dropdown-content {
        display: block;
    }

    @media (max-width: 768px) {
        nav {
            flex-direction: column;
            align-items: flex-start;
        }

        .nav-links {
            flex-direction: column;
            gap: 10px;
            width: 100%;
            margin-top: 20px;
        }
    }
</style>

<div class="nav-gap"></div>
<nav>
    <div class="logo">
        <img src="./pics/logo.png" alt="ESCAPE Logo" />
    </div>
    <div class="nav-links">
        <a href="home.php" class="<?= $currentPage === 'home.php' ? 'active' : '' ?>">HOME</a>
        <a href="about-us.php" class="<?= $currentPage === 'about-us.php' ? 'active' : '' ?>">ABOUT US</a>
        <a href="contact.php" class="<?= $currentPage === 'contact.php' ? 'active' : '' ?>">CONTACT US</a>
        <a href="store.php" class="<?= $currentPage === 'store.php' ? 'active' : '' ?>">STORE</a>

        <div class="dropdown">
            <a href="trips.php" class="dropbtn <?= $currentPage === 'trips.php' || in_array($currentPage, ['beach.php', 'forest.php', 'desert.php']) ? 'active' : '' ?>">TRIPS ▾</a>
            <div class="dropdown-content">
                <a href="beach.php">🏖️ Beach Camp</a>
                <a href="forest.php">🌲 Forest Camp</a>
                <a href="desert.php">🌵 Desert Camp</a>
            </div>
        </div>

        <?php if (isset($_SESSION['user'])): ?>
            <a href="profile.php" class="<?= $currentPage === 'profile.php' ? 'active' : '' ?>">ACCOUNT</a>
            <a href="/escape/logic/logout.php">LOGOUT</a>
        <?php else: ?>
            <a href="login.php" class="<?= $currentPage === 'login.php' ? 'active' : '' ?>">LOG IN</a>
        <?php endif; ?>
    </div>
</nav>