<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8"/>
  <title>Pflanzen</title>
</head>
<body>
<ul>
  <?php foreach ($pflanzen as $pflanze) : ?>
    <li><strong><?= $pflanze->nameausgeben(); ?></strong>:
      <?= $pflanze->beschreibungausgeben(); ?>
      <em> <?= $pflanze->preisausgeben(); ?></em>
    </li>
  <?php endforeach; ?>
</ul>
</body>
</html>

