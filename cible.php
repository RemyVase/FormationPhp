<p>Bonjour !</p>

<p>Je sais comment tu t'appelles, héhé. Tu t'appelles <?php echo htmlspecialchars($_POST['prenom']); ?></p>

<p>Ton message était : <?php echo $_POST['message']; ?></p>

<p>Ton choix a été le choix : <?php echo $_POST['choix']; ?></p>

<p>tu as coché la case : <?php echo $_POST['case']; ?></p>

<p>Vous aimez les frites : <?php echo $_POST['frites']; ?></p>

<p>Si tu veux changer de prénom, <a href="formulaire.php">clique ici</a> Pour revenir à l page du formulaire.php.</p>