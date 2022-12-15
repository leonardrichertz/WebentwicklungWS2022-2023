<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Projekte</title>
  <link href="https://unpkg.com/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>
<?php
    $name="Projekte";
    include("ueberschrift.php");
?>

<div class="container-fluid">
  <div class="row">

    <div class="col-2">
        <?php include("menu.html"); ?>
    </div>

    <div class="col-8">
      <div class="row">
        <form>
          <div class="form-group">
            <label for="projektauswahl"><h4>Projekt Auswählen:</h4></label>
            <select class="form-control" id="projektauswahl">
              <option value="String">- bitte auswählen -</option>
              <option value="String">Projekt 1</option>
              <option value="String">Projekt 2</option>
            </select>
          </div>
        </form>
      </div>
      </br>
      <div class="row">
        <form>
          <div class="form-group">
            <fieldset>
              <button type="submit" class="btn btn-primary">
                Auswählen
              </button>
              <button type="submit" class="btn btn-primary">
                Bearbeiten
              </button>
              <button type="submit" class="btn btn-danger">
                Löschen
              </button>
            </fieldset>
          </div>
        </form>
      </div>
      </br>
      <div class="row">
        <form>
          <div class="form-group">
            <label><h4>Projekt bearbeiten/erstellen:</h4></label>
            <form>
              <div class="form-group">
                <label for="projektname">Projektname:</label>
                <input type="text" placeholder="Projekt" class="form-control" id="projektname">
              </div>
            </form>
            </br>
            <form>
              <div class="form-group">
                <label for="projektbeschreibung">Projektbeschreibung:</label>
                <textarea name="projektbeschreibung" placeholder="Beschreibung" class="form-control" id="projektbeschreibung"></textarea>
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