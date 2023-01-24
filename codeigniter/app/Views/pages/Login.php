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
        <form method="post" action="Login">
          <div class="form-group">
            <label for="email">E-Mail/Benutzername</label>
            <input placeholder="Email-Adresse oder Benutzernamen eingeben"
                   class="form-control <?= (isset($error['email']))?'is-invalid':'' ?>" id="email" name="email">
              <div class="invalid-feedback">
                  <?= (isset($error['email']))?$error['email']:''?>
              </div>
          </div>
      </div>
      </br>
      <div class="row">
          <div class="form-group">
            <label for="passwort">Passwort</label>
            <input type="password" placeholder="Passwort" class="form-control <?= (isset($error['passwort']))?'is-invalid':''?>" id="passwort" name="passwort">
              <div class="invalid-feedback">
                  <?= (isset($error['passwort']))?$error['passwort']:''?>
              </div>
          </div>
      </div>
      </br>
      <div class="row">
          <div class="form-group">
            <input type="checkbox" id="checkbox" name="checkbox" checked class="form-check-input <?= (isset($error['checkbox']))?'is-invalid':''?>">
            <label for="checkbox"> AGBs und Datenschutzbedingung akzeptieren</label>
              <div class="invalid-feedback">
                  <?= (isset($error['checkbox']))?$error['checkbox']:''?>
              </div>
          </div>
          </br>
          <button type="submit" class="btn btn-primary">
            Einloggen
          </button>
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