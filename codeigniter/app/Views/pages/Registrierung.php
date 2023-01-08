<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registrierung</title>
    <link href="https://unpkg.com/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>

<div class="container-fluid">
    <div class="row">

        <div class="col-2">
        </div>
        <div class="col-8">
            <div class="row">
                <form method="post" action="login/register">
                    <div class="form-group">
                        <label for="email">E-Mail</label>
                        <input type="email" placeholder="Email-Adresse eingeben" class="form-control" id="email" name="email">
                    </div>
            </div>
            <div class="row">
                    <div class="form-group">
                        <label for="username">Benutzernamen</label>
                        <input type="text" placeholder="Benutzernamen eingeben" class="form-control" id="username" name="username">
                    </div>
            </div>
            <div class="row">
                    <div class="form-group">
                        <label for="passwort">Passwort</label>
                        <input type="password" placeholder="Passwort" class="form-control" id="passwort" name="passwort">
                    </div>
            </div>
            <div class="row">
                    <div class="form-group">
                        <label for="passwort-bestätigt">Passwort erneut eingeben</label>
                        <input type="password" placeholder="Passwort" class="form-control" id="passwort-bestätigt" name="passwort-bestätigt">
                    </div>
            </div>
            <div class="row">
                    <div class="form-group">
                        <input type="checkbox" id="checkbox">
                        <label for="checkbox"> AGBs und Datenschutzbedingung akzeptieren </label>
                    </div>
                    <button type="submit" class="btn btn-primary">
                        Registrieren
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>