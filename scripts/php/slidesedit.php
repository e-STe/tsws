<?php
  function redirect($href) {
    header('Location: ' . $href);
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Edit du diaporama</title>
    <meta charset="utf-8" />
    <?php

      if(isset($_GET['success']) AND $_GET['success'] == 'yes') {
        echo '<p style="color: green;">Diaporama mis à jour.</p>';
      } else if(isset($_GET['success']) AND $_GET['success'] == 'no' AND isset($_GET['error'])) {
        switch ($_GET['error']) {

          case 'required':
            echo '<p style="color: red;">Champs mal remplis !</p>';
            break;

          case 'empty':
            echo '<p style="color: red;">Un fichier ou plus est vide.</p>';
            break;

          case 'weight':
            echo '<p style="color: red">Un fichier au moins est trop volumineux.</p>';
            break;

          case 'wrong_type':
            echo '<p style="color: red">Tous les fichiers ne sont pas des images.</p>';
            break;

          default:
            echo 'Erreur interne, veuillez recommencer.';
            break;
        }
      }


      if(isset($_GET['attempt'])) {

        if(isset($_FILES['first']) AND isset($_FILES['second']) AND isset($_FILES['third']) AND isset($_POST['href1']) AND isset($_POST['href2']) AND isset($_POST['href3'])) {

          if($_FILES['first']['size'] < 20 OR $_FILES['second']['size'] < 20 OR $_FILES['third']['size'] < 20) {
            redirect('slidesedit.php?success=no&error=empty');

          } else if($_FILES['first']['size'] <= 1000000 AND $_FILES['second']['size'] <= 1000000 AND $_FILES['third']['size'] <= 1000000) {
            $infpath1 = pathinfo($_FILES['first']['name']);
            $infpath2 = pathinfo($_FILES['second']['name']);
            $infpath3 = pathinfo($_FILES['third']['name']);
              $extallow = array('jpg', 'svg', 'bmp', 'jpeg', 'png', 'gif', 'JPG');

            if(in_array($infpath1['extension'], $extallow) AND in_array($infpath3['extension'], $extallow) AND in_array($infpath2['extension'], $extallow)) {
              $random = rand(100000, 999999);
              $write = fopen('slides.ini', 'a+');
              ftruncate($write, 0);
              fputs($write,"[slides]\nslide1 = " . ($random-1) . '-' . basename($_FILES['first']['name']."\nslide2 = "));
              fputs($write, $random . '-' . basename($_FILES['second']['name']."\nslide3 = "));
              fputs($write, ($random+1) . '-' . basename($_FILES['third']['name']));
              fputs($write, "\n\n[href]\nhref1 = " . $_POST['href1'] . "\nhref2 = " . $_POST['href2'] . "\nhref3 = " . $_POST['href3']);
              fclose($write);
              move_uploaded_file($_FILES['first']['tmp_name'], '../../images/affiches/' . ($random-1) . '-' . basename($_FILES['first']['name']));
              move_uploaded_file($_FILES['second']['tmp_name'], '../../images/affiches/' . $random . '-' . basename($_FILES['second']['name']));
              move_uploaded_file($_FILES['third']['tmp_name'], '../../images/affiches/' . ($random+1) . '-' . basename($_FILES['third']['name']));
              redirect('slidesedit.php?success=yes');

            } else {redirect('slidesedit.php?success=no&error=wrong_type');}

          } else {redirect('slidesedit.php?success=no&error=weight');}

        } else {redirect('slidesedit.php?success=no&error=required');}
      }
     ?>

  </head>
  <body style="text-align: center; background-color: #cfc929; font-family: sans-serif;">
    <h1>Edit du diaporama de la page d'accueil du site</h1>
    <form method="post" action="slidesedit.php?attempt=1" enctype="multipart/form-data">

      <h2>Première image</h2>
      <input name="first" type="file" />
      <br />
      <input name ="href1" type="text" placeholder="Lien clickable de l'image" maxlength="100"/>

      <h2>Seconde image</h2>
      <input name="second" type="file" />
      <br />
      <input name ="href2" type="text" placeholder="https://www.google.fr" maxlength="100"/>

      <h2>Troisième image</h2>
      <input name="third" type="file" />
      <br />
      <input name ="href3" type="text" placeholder="http://fr.wikipedia.org/wiki/horse" maxlength="100"/>

      <h2 style="margin-top: 100px;">Valider</h2>
      <input type="submit" name="submit" value="Valider" />

    </form>
  </body>
</html>
