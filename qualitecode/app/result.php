<?php
    // strtoupper convertit en majuscules
    $nom = isset($_POST['nom']) ? strtoupper($_POST['nom']) : '';
?>
<!DOCTYPE html>
<html>
<head><meta charset="UTF-8"><title>Résultat</title></head>
<body>
    <h1>Nom en majuscules :</h1>
    <p id="affichage-nom"><?php echo htmlspecialchars($nom); ?></p>
    <a href="form.php">Retour</a>
</body>
</html>