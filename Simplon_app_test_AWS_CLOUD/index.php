
<?php include("Pages/header.php") ?>
<?php require_once('db/insertion.php'); ?>

<h2 class="text-center mt-3 perso_colorBleutMenu perso_policeTitre perso_textShadow">Enregistrez-vous</h2>

<div class="form" id="form1">
    <form method="post" action="" class="form row no-gutters" id="form">
        <div class="form-group col-lg-6" id="form-group">
            <label for="nom" class="label">Nom*</label>
            <input type="text" name="nom" class="form-control" id="nom" required>
        </div>
        <div class="form-group col-lg-6" id="form-group">
            <label for="Prénoms" class="label">Prénoms*</label>
            <input type="text" name="prenom" class="form-control" id="prenom" required>
        </div>
        <div class="form-group col-lg-6" id="form-group">
            <label for="Prénoms" class="label">Contact*</label>
            <input type="text" name="contact" class="form-control" id="number" required>
        </div>
        <div class="form-group col-lg-6" id="form-group">
            <label for="Prénoms" class="label">Email*</label>
            <input type="email" name="email" class="form-control" id="email" required>
        </div>
        <div class="form-group col-lg-12" id="form-group">
            <button type="submit" class="btn btn-primary mx-5" value="enregrister" name="enregistrer" id="enregistrer">Enregrister</button>
            <a class="perso_policeTitre mx-5" href="liste.php" id="liste">Voir la liste</a>
        </div>
    </form>
</div>
<?php require_once('db/close_db.php'); ?>
<?php include("Pages/footer.php") ?>