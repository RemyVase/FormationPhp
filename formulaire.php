<p>
    Cette page ne contient que du HTML.<br>
    Veuillez taper votre prénom : :
</p>

<form action="cible.php" method = "post">
    <p>
        <input type=text" name="prenom" /><br>




        <textarea name="message" rows="8" cols="45">
            Votre message ici.
        </textarea><br>



        <select name="choix">
            <option value="choix1" selected="selected">Choix 1</option>
            <option value="choix2">Choix 2</option>
            <option value="choix3">Choix 3</option>
            <option value="choix4">Choix 4</option>
            <option value="choix5">Choix 5</option>
        </select><br>



        <input type="checkbox" name="case" id="case"/> <label for="case">Ma case à cocher</label><br>

        <input type="submit" value="Valider" /><br>

        Aimez-vous les frites ?
        <input type="radio" name="frites" value="oui" id="oui" checked="checked" /> <label for="oui">Oui</label>
        <input type="radio" name="frites" value="non" id="non" /><label for="non">Non</label>
    </p>
</form>