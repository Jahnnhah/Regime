<?php foreach ($regimes as $regime): ?>
    <h3><?php echo $regime['nom']; ?></h3>
    <p>Prix : <?php echo $regime['prix']; ?> €</p>
<?php endforeach; ?>
