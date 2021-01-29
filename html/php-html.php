<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>PHP & HTML</title>
  </head>
  <body>
    <h1>Liste des élèves</h1>
    <!-- Instructions : Afficher la liste des élèves qui sont présents dans le tableau $students -->
    <?php
        //students
        $students = ['Hulk', 'Iron Man', 'Wonder Woman', 'Black Widow', 'Malicia'];
     ?>
     <ul>
       <?php
          // TODO Display the students here, each student inside a new <li> element
           for ($i = 0; $i < count($students); $i++){
               echo "<p> $students[$i] </p>";
           }
       ?>
     </ul>
     <hr>
     <h1>Date du jour</h1>
     <form>

       <!-- Instructions : Créer la liste de jour (en chiffres), de mois (en chiffres) et d'année en PHP. -->
         <label for="day">Day</label>
         <select  id="day">
             <?php
             // TODO list of day
             for ($i = 1; $i < 32; $i++) {
                 echo "<option>$i</option>";
             }
             ?>
         </select>

         <label for="month">Month</label>
         <select  id="month">
             <?php
             // TODO list of month
             for ($i = 1; $i < 13; $i++) {
                 echo "<option>$i</option>";
             }
             ?>
         </select>

         <label for="year">Year</label>
         <select  id="year">
             <?php
             // TODO list of year 2018, 2019, 2020 --> Bonus : faites le avec une vraie date en PHP, renseignez vous sur la doc
             for ($i = 2000; $i < 2022; $i++) {
                 echo "<option>$i</option>";
             }
             ?>
         </select>
     </form>
     <hr>
     <!-- TODO Instruction : Afficher ce bloc que si dans l'URL il y'a une variable sexe et que ça valeur vaut "fille" -->
     <?php if (isset($_GET["sexe"]) && $_GET["sexe"] === "fille"): ?>
         <p>
           Je suis une fille
         </p>

     <!-- TODO Instruction : Afficher ce bloc que si dans l'URL il y'a une variable sexe et que ça valeur vaut "garçon" -->
     <?php elseif (isset($_GET["sexe"]) && $_GET["sexe"] === "garçon"): ?>
     <p>
       Je suis un garçon
     </p>
     <!-- TODO Instruction : Afficher ce bloc dans les autres cas -->
     <?php else: ?>
     <p>
       Je suis indéfini
     </p>
     <?php endif; ?>
  </body>
</html>
