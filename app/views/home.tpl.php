<h1>L' Attaque des Titans</h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Image</th>
      <th scope="col">Nom</th>
      <th scope="col">Description</th>
    </tr>
  </thead>
  <tbody>

    <?php foreach ($viewVars['charactersList'] as $currentCharacterModel) : ?>

    <tr>
      <td><a href="#"> <img class="character-pic"src="<?= $viewVars['baseURL'] ?>/assets/img/<?= $currentCharacterModel->getPicture() ?>" alt="<?= $currentCharacterModel->getName() ?>"></a></td>
      <td class="font-weight-bold"><?= $currentCharacterModel->getName() ?></td>
      <td><?= $currentCharacterModel->getDescription() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<?php $viewVars['charactersList'];?>

