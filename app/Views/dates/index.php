<h1>💖 Choose Our Date 💖</h1>

<?php foreach ($dates as $d): ?>
    <h2><?= $d['title'] ?></h2>
    <p><?= $d['description'] ?></p>

    <form method="POST" action="/dates/<?= $d['id'] ?>/choose">
        <button>Choose ❤️</button>
    </form>
<?php endforeach; ?>
