<div class="infosForm">
    <form action="" method="post">

        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <label for="civility">Civilité</label>
                <select name="civility" id="civility" class="form-control" required>
                    <option value=""></option>
                    <option value="Mr" <?=isset($_POST['civility']) && ($_POST['civility'] == 'Mr') ? 'selected' : ''?>>
                        Mr</option>
                    <option value="Mme"
                        <?=isset($_POST['civility']) && ($_POST['civility'] == 'Mme') ? 'selected' : ''?>>Mme</option>
                </select>
                <p class="civError text-danger font-italic"><?=$errors['civError'] ?? ''?></p>
            </div>
            <div class="col-md-4"></div>
        </div>

        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <label for="lastname">Nom</label>
                <input type="text" name="lastname" id="lastname" class="form-control" pattern="[A-Za-zéèàùûêâôëç' -]+"
                    value="<?=isset($_POST['lastname']) ? $_POST['lastname'] : ''?>" required>
                <p class="lastnameError text-danger font-italic"><?=$errors['lastnameError'] ?? ''?></p>
            </div>
            <div class="col-md-4"></div>
        </div>

        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <label for="firstname">Prénom</label>
                <input type="text" name="firstname" id="firstname" class="form-control" pattern="[A-Za-zéèàùûêâôëç' -]+"
                    value="<?=isset($_POST['firstname']) ? $_POST['firstname'] : ''?>" required>
                <p class="firstnameError text-danger font-italic"><?=$errors['firstnameError'] ?? ''?></p>
            </div>
            <div class="col-md-4"></div>
        </div>

        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <label for="age">Age</label>
                <input type="text" name="age" id="age" class="form-control" minlength="2" maxlength="3"
                    pattern="[0-9]{2,3}" value="<?=isset($_POST['age']) ? $_POST['age'] : ''?>">
                <p class="ageError text-danger font-italic"><?=$errors['ageError'] ?? ''?></p>
            </div>
            <div class="col-md-4"></div>
        </div>

        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <label for="company">Société</label>
                <input type="text" name="company" id="company" class="form-control" pattern="[A-Za-zéèàùûêâôëç' -&]+"
                    value="<?=isset($_POST['company']) ? $_POST['company'] : ''?>">
                <p class="companyError text-danger font-italic"><?=$errors['companyError'] ?? ''?></p>
            </div>
            <div class="col-md-4"></div>
        </div>

        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <button type="submit" class="btn btn-primary">Envoyer</button>
            </div>
            <div class="col-md-4"></div>
        </div>
    </form>
</div>