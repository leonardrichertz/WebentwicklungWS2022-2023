<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Projekte</title>
  <link href="https://unpkg.com/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>

<div class="container-fluid">
  <div class="row">

    <div class="col-2">
        <?php echo view('templates/menu.php');?>
    </div>

    <div class="col-8">
      <div class="row">
        <form method="post" action="ead">
          <div class="form-group">
            <label for="projektauswahl"><h4>Projekt Auswählen:</h4></label>
            <select class="form-control" id="projektauswahl" name="projektauswahl">
                <?php for($i=0;$i<count($projekte);$i++):?>
              <option value="<?= $projekte[$i]['id'] ?>" > <?= $projekte[$i]['name']?> </option>
                <?php endfor;?>
            </select>
          </div>
      </div>
      </br>
      <div class="row">
          <div class="form-group">
            <fieldset>
              <button type="submit" class="btn btn-primary" name="btnAuswaehlen">
                Auswählen
              </button>
              <button type="submit" class="btn btn-primary" name="btnBearbeiten">
                Bearbeiten
              </button>
              <button type="submit" class="btn btn-danger" name="btnLoeschen">
                Löschen
              </button>
            </fieldset>
          </div>
        </form>
      </div>
      </br>
      <div class="row">
        <form action="ProjekteSubmit" method="post">
          <div class="form-group">
            <label><h4>Projekt erstellen:</h4></label>
              <div class="form-group">
                <label for="projektname">Projektname:</label>
                <input type="text" placeholder="Projekt" class="form-control" id="projektname"
                       name="projektname" <?php if(isset($_POST['btnBearbeiten'])){ ?> value="<?= $projekt['name']?>" <?php }?> >
              </div>
              <div class="form-group">
                <label for="projektbeschreibung">Projektbeschreibung:</label>
                <textarea name="projektbeschreibung" placeholder="Beschreibung" class="form-control" id="projektbeschreibung"><?php if(isset($_POST['btnBearbeiten'])){?><?= $projekt['beschreibung']?><?php }?></textarea>
              </div>
              <?php if(isset($_POST['btnBearbeiten'])){ ?> <input type="hidden" name="projekt"  value="<?= $projekt['id'] ?>"  ><?php }?>
          </div>
            <fieldset class="mt-4">
                    <button type="submit" class="btn btn-primary">
                        Speichern
                    </button>
                    <button type="reset" class="btn btn-info">
                        Reset
                    </button>
            </fieldset>
        </form>
      </div>
      </br>
    </div>

  </div>
</div>
</body>
</html>