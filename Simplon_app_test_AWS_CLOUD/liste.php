<?php include("Pages/header.php") ?>
<h2 class="text-center mt-3 perso_colorBleutMenu perso_policeTitre perso_textShadow">Liste des participants</h2>

<?php require_once('db/db.php');

  $sql = ("SELECT * FROM `participant` ORDER BY ID ASC");
    $res = $connex->query($sql);
    if (!$res) {
      echo "La réccupération a échoué !";
    }else{
      $tab = $res->rowCount();
    }
?>
<h5> Nous avons <?= $tab;?> participants</h5>
<table class="table table-hover">
  <thead class="table-danger">
    <tr>
      <th scope="col">NOM</th>
      <th scope="col">PRENOMS</th>
      <th scope="col">CONCAT</th>
      <th scope="col">EMAIL</th>
    </tr>
  </thead>
  <tbody>
  <?php 
  $lists = $res->fetchAll();
  foreach ($lists as $list):?> 
    <tr>
      <td><?= $list['Nom']; ?></td>
      <td><?= $list['Prenoms']; ?></td>
      <td><?= $list['contact']; ?></td>
      <td><?= $list['email']; ?></td>
    </tr>
    <?php endforeach ?>
  </tbody>
</table>

<a type=" button" class="btn btn-primary mx-lg-5 m-md-5" href="index.php">Retour</a>
<?php require_once('db/close_db.php'); ?>
<?php include("Pages/footer.php") ?>