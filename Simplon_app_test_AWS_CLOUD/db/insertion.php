<?php 
    if (isset($_POST['enregistrer'])) {
        require_once('db/db.php');
        
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $contact = $_POST['contact'];
        $email = $_POST['email'];

        if (isset($nom) && isset($prenom) && isset($contact) && isset($email)) {
            if (!empty($nom) && !empty($prenom) && !empty($contact) && !empty($email)) {
                $nom = htmlspecialchars($_POST['nom']);
                $prenom = htmlspecialchars($_POST['prenom']);
                $contact = htmlspecialchars($_POST['contact']);
                $email = htmlspecialchars($_POST['email']);


                $sql = ("INSERT INTO `participant`( `Nom`, `Prenoms`, `contact`, `email`) VALUES('" . $nom . "','" . $prenom . "','" . $contact . "','" . $email . "')");
                $res = $connex->query($sql);

                $res->bindParam(':Nom', $nom);
                $res->bindParam(':Prenom', $prenom);
                $res->bindParam(':contact', $contact);
                $res->bindParam(':email', $email);
            }else{
            }
        }
    }
?>