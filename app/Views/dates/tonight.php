<h1>💖 Tonight's Plan 💖</h1>

<?php if ($date): ?>
    <h2><?= $date['title'] ?></h2>
    <p><?= $date['description'] ?></p>
<?php else: ?>
    <p>No plan yet 😢</p>
<?php endif; ?>
