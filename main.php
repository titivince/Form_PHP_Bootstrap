<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>formulaire PHP</title>
</head>
<body>
<div class="p-3 mb-2 bg-light text-dark">
    <h1>Formulaire</h1>
    <form method="POST" action="form.php">
        <div class="card" style="background-color: #cce5ff" >
            <div class="card-body">
                <div class="form-group">

                    <label>Votre Nom :</label>
                    <input type="text" name="nom"placeholder="Thimote" required />
                </div>
                <div class="form-group">
                    <label>Votre Prémon :</label>
                    <input type="text" name="prenom" placeholder="Dupond" required/>
                </div>
                <div class="form-group">
                    <label>Mot de passe :</label>
                    <input type="password" name="password" minlength="8" required />
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Quelle est votre genre ?</label>
                    <select class="form-control form-control-sm" name="gender" id="gender">
                        <option name="gender">Autre</option>
                        <option name="gender">Homme</option>
                        <option name="gender">Femme</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Votre mail :</label>
                    <input class="form-control" type="email" name="mail" required />
                </div>

                <input type="submit" class="btn btn-outline-primary " value="envoyer"/>
            </div>
        </div>

    </form>
</div>
</body>
</html>