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
        <form>
          <div class="form-group">
            <label for="Email1">E-Mail</label>
            <input type="email" placeholder="Email-Adresse eingeben" class="form-control" id="email1">
          </div>
        </form>
      </div>
      </br>
      <div class="row">
        <form>
          <div class="form-group">
            <label for="Passwort">Passwort</label>
            <input type="password" placeholder="Passwort" class="form-control" id="passwort">
          </div>
        </form>
      </div>
      </br>
      <div class="row">
        <form>
          <div class="form-group">
            <input type="checkbox" id="checkbox">
            <label for="checkbox"> AGBs und Datenschutzbedingung akzeptieren</label>
          </div>
          </br>
          <button type="submit" class="btn btn-primary">
            Einloggen
          </button>
          </br>
          Noch nicht registriert? <a href="registrierung">Registrierung</a> </br>
          </br>
          Da der Login Vorgang technisch noch nicht realisiert wurde: <a href="todo"> Überspringen </a>
        </form>
      </div>
      </br>
    </div>

  </div>
</div>
</body>
</html>