<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>PHP & HTML</title>
  </head>
  <body>
    <h1>Liste des élèves</h1>
    <!-- Instructions : Afficher la liste des éléves qui sont présent dans le tableau $students -->
    <?php
        //students
        $students = ['Hulk', 'Iron Man', 'Wonder Woman', 'Black Widow', 'Malicia'];
     ?>
     <ul>
       <?php  //display the students here ?>
       <?php  foreach( $students as $student): ?>
       <li> <?= $student ?> </li>
       <?php endforeach ?>

     </ul>
     <hr>
     <h1>Date du jour</h1>
     <form>

       <!-- Instructions : Créer la liste de jour (en chiffres), de mois (en chiffres) et d'année en PHP. -->
       <label for="day">Day</label>
       <select  name="day">
        <?php for ($i=0; $i<=7; ++$i){//list of day  ?>
        <option value=""><?= $i ?></option>
        <?php }; ?>
        </select>
       <label for="month">Month</label>
       <select  name="month"><?php //list of month ?>
       <?php for ($i=0; $i<=12; ++$i){//list of day  ?>
        <option value=""><?= $i ?></option>
        <?php }; ?></select>
       <label for="year">Year</label>
       <select  name="year"><?php //list of year ?>
       <?php for ($i=2019; $i<=2050; ++$i){//list of day  ?>
        <option value=""><?= $i ?></option>
        <?php }; ?></select>
     </form>
     <hr>
     <!-- Instruction : Afficher ce bloc que si dans l'URL il y'a une variable sexe et que ça valeur vaut "fille" -->
     <?php Switch ($_GET['sexe']){ 
            case 'fille': ?>
     <p>
        <?php echo 'Je suis une fille';
          break; ?>
     </p>
     <!-- Instruction : Afficher ce bloc que si dans l'URL il y'a une variable sexe et que ça valeur vaut "garçon" -->
     <?php case 'garçon': ?>
     <p>
       <?php echo 'Je suis un garçon';
       break; ?>
     </p>
     <!-- Instruction : Afficher ce bloc dans les autres cas -->
     <?php default: ?> 
     <p>
       <?= 'Je suis indéfini'?>
     </p>
     <?php }; ?>
  </body>
</html>
