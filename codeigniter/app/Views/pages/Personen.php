<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
  <meta charset="UTF-8">
  <title>Personen</title>
  <link href="https://unpkg.com/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <link href="https://unpkg.com/bootstrap-table@1.20.1/dist/bootstrap-table.min.css" rel="stylesheet">
  <script src="https://unpkg.com/bootstrap-table@1.20.1/dist/bootstrap-table.min.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" rel="stylesheet">
</head>
<body>

<div class="container-fluid">
  <div class="row">

    <div class="col-2">
        <?php echo view('templates/menu.php'); ?>
    </div>
    <div class="col-8">
      <div class="row">
        <table class="table table-responsive">
          <thead class="table-light">
            <tr>
              <th>Name</th>
              <th>E-Mail</th>
              <th>In Projekt</th>
                <th></th>
                <th></th>
            </tr>
          </thead>
        </thead>
        <tbody>
        <?php for ($i=0;$i<count($mitglieder);$i++):?>
            <tr>
                <td> <?=$mitglieder[$i]['username'] ?> </td>
                <td> <?=$mitglieder[$i]['email'] ?> </td>
                <td><input type="checkbox"> </td>
                <td>
                    <form action="personen/edit" method="post">
                        <a>
                            <input type="hidden" value="<?=$mitglieder[$i]['id']?>" name="id" id="id">
                            <button class='btn' name="btnBearbeiten"><i class="fa-solid fa-pen-to-square" ></i> </button>
                        </a>
                    </form>
                </td><td>
                    <form action="personen/loeschen" method="post">
                        <a>
                            <input type="hidden" value="<?=$mitglieder[$i]['id']?>" name="id" id="id">
                            <button class='btn' name="btnLoeschen"><i class="fa-solid fa-trash-can ms-3"></i></button>
                        </a>
                    </form>
                </td>
            </tr>
        <?php endfor;?>
        </table>
      </div>
      <div class="row">
        <form method="post" action="<?php echo site_url('personen/index');?>">
          <div class="form-group">
            <label><h4>Person Erstellen</h4></label>
              <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" placeholder="Username" class="form-control" id="username" name="username">
              </div>
            </br>
              <div class="form-group">
                <label for="email">E-Mail-Adresse:</label>
                <input type="text" placeholder="E-Mail-Adresse eingeben" class="form-control" id="email" name="email">
              </div>
            </br>
              <div class="form-group">
                <label for="passwort">Passwort:</label>
                <input type="password" placeholder="Passwort" class="form-control" id="passwort" name="passwort">
              </div>
            </br>
              <div class="form-group">
                <input type="checkbox" id="checkbox">
                <label for="checkbox"> Dem Projekt zugeordnet</label>
              </div>
          </div>
          </br>
            <fieldset class="mt-4">
                <?php  echo view('templates/SpeichernUndReset.html'); ?>
            </fieldset>
        </form>
      </div>
      </br>
    </div>

  </div>
</div>
</body>
</html>