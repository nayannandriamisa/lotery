<?php require "header.html" ?>

<button type=button><a href="?controller=home"><</a></button>

<form action="?controller=player&action=creation">
    <label>Identifiant : </label>
    <input type="text" name="name">
    <br>
    <input type="submit" value="Créer" name="submit">
</form>

<?php require "footer.html" ?>