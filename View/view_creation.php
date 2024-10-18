<?php require "header.html" ?>

<a href="?controller=home"><img src="Content/Images/arrow.png" width="20px"></a>

<?php 
    echo ('<p color="red">' .e($data[0]) .'</p>');
?>

<form action="?controller=player&action=creation" method="post" id="creationForm">
    <label>Identifiant : </label>
    <input type="text" name="name" required>
    <input type="hidden" id="selectedNumbersField" name="numbers">
    <input type="hidden" id="selectedStarsField" name="stars">
    <br>  
    <?php require "test.html" ?>
    <input type="submit" value="Créer" name="submit">
</form>

<br>
<button type="button"><a href="?controller=player">Refresh</a></button>
<p>Liste des joueurs :</p>
<ul>
    <?php foreach ($data[1] as $value): ?>
        <li> 
            <?= e($value['name'])?> 
            <?php 
                if ($value['numbers'] == NULL or $value['stars'] == NULL) {echo 'None';}
                else {echo (e($value['numbers']) .' ' .$value['stars']);}
            ?>
        </li>
    <?php endforeach ?>
</ul>




<?php require "footer.html" ?>