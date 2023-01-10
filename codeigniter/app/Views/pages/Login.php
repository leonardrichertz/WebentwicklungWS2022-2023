<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link href="https://unpkg.com/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>

<div class="container-fluid">
  <div class="row">
    <div class="col-2">
    </div>
    <div class="col-8">
      <div class="row">
        <form method="post" action="<?php echo site_url('login/index');?>">
          <div class="form-group">
            <label for="email">E-Mail/Benutzername</label>
            <input type="email" placeholder="Email-Adresse oder Benutzernamen eingeben" class="form-control" id="email" name="email">
          </div>
      </div>
      </br>
      <div class="row">
          <div class="form-group">
            <label for="passwort">Passwort</label>
            <input type="password" placeholder="Passwort" class="form-control" id="passwort" name="passwort">
          </div>
      </div>
      </br>
      <div class="row">
          <div class="form-group">
            <input type="checkbox" id="checkbox">
            <label for="checkbox"> AGBs und Datenschutzbedingung akzeptieren</label>
          </div>
          </br>
          <button type="submit" class="btn btn-primary">
            Einloggen
          </button>
          </br>
          Noch nicht registriert? <a href="Register">Registrierung</a> </br>
          </br>
          Da der Login Vorgang technisch noch nicht realisiert wurde: <a href="Todo"> Überspringen </a>
        </form>
      </div>
      </br>
    </div>

  </div>
</div>
</body>
</html>