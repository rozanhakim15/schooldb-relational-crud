<?php // navbar.php — include right after the <body> tag ?>
<nav class="navbar navbar-dark bg-dark">
 <div class="container">
 <a class="navbar-brand" href="index.php">Student Management</a>
 <div class="d-flex align-items-center gap-2">
<?php if (is_admin()): ?>
    <li class="nav-item">
        <a class="nav-link" href="users.php">Manage Users</a>
    </li>
<?php endif; ?>
 <span class="text-white small">
 <?= htmlspecialchars($_SESSION['username']) ?>
 <span class="badge bg-secondary"><?= $_SESSION['role'] ?></span>
 </span>
 <a href="logout.php" class="btn btn-danger btn-sm">Logout</a>
 </div>
 </div>
</nav>