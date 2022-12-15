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
<?php
    $name="Personen";
    include("ueberschrift.php");
?>

<?php
    $personen=array(
            array(
                'name' => 'Max Mustermann',
                'E-Mail' => 'mustermann@muster.de'
            ),
            array(
                'name' => 'Petra Müller',
                'E-Mail' => 'petra@mueller.de'
            )
    );

    //var_dump($personen);
?>

<div class="container-fluid">
  <div class="row">

    <div class="col-2">
        <?php include("menu.html"); ?>
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
            </tr>
          </thead>
        </thead>
        <tbody>
          <?php
            foreach($personen as $person): ?>
                <tr>
                    <td> <?php echo $person['name'] ?></td>
                    <td> <?php echo $person['E-Mail'] ?></td>
                    <td>
                        <form>
                            <input type="checkbox" id="tabellecheckbox1">
                        </form>
                    </td>
                    <td style="text-align: right"> <?php include("EditUndDelete.html"); ?></td>
                </tr>
          <?php endforeach;?>

          </tbody>
        </table>
      </div>

      <div class="row">
        <form>
          <div class="form-group">
            <label><h4>Bearbeiten/Erstellen</h4></label>
            <form>
              <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" placeholder="Username" class="form-control" id="username">
              </div>
            </form>
            </br>
            <form>
              <div class="form-group">
                <label for="email">E-Mail-Adresse:</label>
                <input type="text" placeholder="E-Mail-Adresse eingeben" class="form-control" id="email">
              </div>
            </form>
            </br>
            <form>
              <div class="form-group">
                <label for="passwort">Passwort:</label>
                <input type="password" placeholder="Passwort" class="form-control" id="passwort">
              </div>
            </form>
            </br>
            <form>
              <div class="form-group">
                <input type="checkbox" id="checkbox">
                <label for="checkbox"> Dem Projekt zugeordnet</label>
              </div>
            </form>
          </div>
          </br>
            <fieldset class="mt-4">
                <?php include("SpeichernUndReset.html"); ?>
            </fieldset>
        </form>
      </div>
      </br>
    </div>

  </div>
</div>
</body>
</html>