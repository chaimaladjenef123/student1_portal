<?php //$dept = 'chemistry'; include 'backend/get_announcements.php';

$dept = 'chemistry';
include 'backend/db.php';

// Récupération des annonces pour le département "math"
$stmt = $pdo->prepare("SELECT * FROM announcements WHERE display = :dept ORDER BY datetime DESC");
$stmt->execute(['dept' => $dept]);
$announcements = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Annonces chimie</title>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
<div class="container">
    <h1>📢 Annonces - Département chimie</h1>

    <?php if (count($announcements) === 0): ?>
        <p>Aucune annonce pour le moment.</p>
    <?php else: ?>
        <div class="announcements">
            <?php foreach ($announcements as $a): ?>
                <div class="announcement-block">
                    <label><strong><?= htmlspecialchars($a['title']) ?></strong></label><br>
                    <label><?= nl2br(htmlspecialchars($a['content'])) ?></label><br>
                    <label><small>🕒 <?= $a['datetime'] ?></small></label>
                    <hr>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>

    <p><a href="index.php">⬅ Retour à l'accueil</a></p>
</div>
</body>
</html>

