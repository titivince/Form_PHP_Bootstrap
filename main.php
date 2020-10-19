<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>formulaire PHP</title>
</head>
<body>
<div class="container">

<div class="p-3 mb-2  text-dark">
    <h1>Formulaire</h1>
    <form method="POST" action="form.php">
        <div class="card shadow p-3 mb-5 bg-light rounded-lg border-0">
            <div class="card-body ">
                <div class="form-group">

                    <label>Votre Nom :</label>
                    <input class="form-control" type="text" name="nom"placeholder="Thimote" required />
                </div>
                <div class="form-group">
                    <label>Votre Prémon :</label>
                    <input class="form-control" type="text" name="prenom" placeholder="Dupond" required/>
                </div>
                <div class="form-group">
                    <label>Mot de passe :</label>
                    <input class="form-control" type="password" name="password" minlength="8" required />
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
</div>
</body>
</html>