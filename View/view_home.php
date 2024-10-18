<?php require "header.html" ?>

<?php
/* -- Affichage test --
    foreach($data as $val) {
        echo e($val['name']);
        echo '<br>';
        echo e($val['numbers']);
        echo e($val['stars']);
        echo '<br>';
    }
*/
?>

<button type="button"><a href="?controller=player&action=creation_form">Créer un compte</a></button>
<button type="button"><a href="?controller=lottery&action=lottery_grid">Lancer un tirage</a></button>
<br>

<?php require "footer.html" ?>