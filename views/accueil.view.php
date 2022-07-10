<?php 
ob_start(); 
?>

La bibliothèque virtuelle créée par un étudiant en licence 1 de <a href="https://esatic.ci/">l'ESATIC</a> ...<br>
Vous pouvez cliquer sur "<a href="https://esatic.ci/">ESATIC</a>" pour être rediriger vers le site officiel de l'établissement. <br>
Le 15 janvier 2022 à 3h18. <br>
Je l'ai conçue en environ 30 minutes grâce à ce que j'ai appris. <br>
<br><br>
C'est un site réalisé en front-end et back-end, <br>
C'est à dire que des informations (ici les livres de la bibliothèque) sont stockées en base de donnée pour enfin être retoutnées lorsqu'on en a besoin. <br><br><br>
Le site est très basique mais j'ai eu besoin d'écrire exactement <em>463 lignes de codes</em> et d'utiliser une <em>achitecture MVC</em> pour le mettre sur pied. <br>


<?php
$content = ob_get_clean();
$titre = "Bibliothèque MGA";
require "template.php";
?>