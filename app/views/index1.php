<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Produits</title>
</head>
<body>
    <h1>Liste des Produits</h1>
    <ul>
        <?php foreach ($produits as $produit): ?>
            <li>
                <strong><?= htmlspecialchars($produit['nom']) ?></strong><br>
                Catégorie : <?= htmlspecialchars($produit['categorie']) ?><br>
                <?php if ($produit['en_solde']): ?>
                    Prix Promo : <?= htmlspecialchars($produit['prix_promo']) ?> €<br>
                    <s>Prix Original : <?= htmlspecialchars($produit['prix_original']) ?> €</s>
                <?php else: ?>
                    Prix : <?= htmlspecialchars($produit['prix_min'] ?? $produit['prix_original']) ?> - <?= htmlspecialchars($produit['prix_max'] ?? '') ?> €
                <?php endif; ?>
                <?php if ($produit['etoiles']): ?>
                    <br>Étoiles : <?= htmlspecialchars($produit['etoiles']) ?> ★
                <?php endif; ?>
            </li>
            <hr>
        <?php endforeach; ?>
    </ul>
</body>
</html>
