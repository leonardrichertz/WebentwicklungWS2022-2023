<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Aufgaben</title>
    <link href="https://unpkg.com/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="https://unpkg.com/bootstrap-table@1.20.1/dist/bootstrap-table.min.css" rel="stylesheet">
    <script src="https://unpkg.com/bootstrap-table@1.20.1/dist/bootstrap-table.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" rel="stylesheet">
</head>
<body>

<?php
$aufgaben=array(
    array(
        'bezeichnung' => 'HTML Datei erstellen',
        'beschreibung' => 'HTML Datei erstellen',
        'reiter' => 'ToDo',
        'zustaendig' => 'Max Mustermann'
    ),
    array(
        'bezeichnung' => 'CSS Datei erstellen',
        'beschreibung' => 'CSS Datei erstellen',
        'reiter' => 'ToDo',
        'zustaendig' => 'Max Mustermann'
    ),
    array(
        'bezeichnung' => 'PC eingeschaltet',
        'beschreibung' => 'PC einschalten',
        'reiter' => 'Erledigt',
        'zustaendig' => 'Max Mustermann'
    ),
    array(
        'bezeichnung' => 'Kaffe trinken',
        'beschreibung' => 'Kaffe trinken',
        'reiter' => 'Erledigt',
        'zustaendig' => 'Petra Müller'
    ),
    array(
        'bezeichnung' => 'Für die Uni lernen',
        'beschreibung' => 'Für die Uni lernen',
        'reiter' => 'Verschoben',
        'zustaendig' => 'Max Mustermann'
    ),
);

//var_dump($aufgaben);
?>

<div class="container-fluid">
    <div class="row">

        <div class="col-2">
            <?php echo view("templates/menu.php"); ?>
        </div>

        <div class="col-8">

            <div class="row">
                <table class="table table-responsive">
                    <thead class="table-light">
                    <tr>
                        <th>Aufgabenbezeichnung:</th>
                        <th>Beschreibung der Aufgabe:</th>
                        <th>Reiter:</th>
                        <th>Zuständig:</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php
                    foreach($aufgaben as $aufgabe): ?>
                        <tr>
                            <td> <?php echo $aufgabe['bezeichnung'] ?></td>
                            <td> <?php echo $aufgabe['beschreibung'] ?></td>
                            <td> <?php echo $aufgabe['reiter'] ?></td>
                            <td> <?php echo $aufgabe['zustaendig'] ?></td>
                            <td style="text-align: right"> <?php echo view("templates/EditUndDelete.html"); ?></td>
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
                                <label for="aufgabenbezeichnung">Aufgabenbezeichnung:</label>
                                <input type="text" placeholder="Aufgabe" class="form-control" id="aufgabenbezeichnung">
                            </div>
                        </form>
                        </br>
                        <form>
                            <div class="form-group">
                                <label for="beschreibung">Beschreibung der Aufgabe:</label>
                                <textarea name="beschreibung" placeholder="Beschreibung" class="form-control"
                                          id="beschreibung"></textarea>
                            </div>
                        </form>
                        </br>
                        <form>
                            <div class="form-group">
                                <label for="erstellungsdatum">Erstellungsdatum:</label>
                                <input type="text" placeholder="01.01.19" class="form-control" id="erstellungsdatum">
                            </div>
                        </form>
                        </br><form>
                            <div class="form-group">
                                <label for="faelligbis">fällig bis:</label>
                                <input type="text" placeholder="01.01.19" class="form-control" id="faelligbis">
                            </div>
                        </form>
                        </br>
                        <form>
                            <div class="form-group">
                                <label for="zugehoerigerreiter">Zugehöriger Reiter:</label>
                                <select class="form-control" id="zugehoerigerreiter">
                                    <option value="String">ToDo</option>
                                    <option value="String">Erledigt</option>
                                    <option value="String">Verschoben</option>
                                </select>
                            </div>
                        </form>
                        </br>
                        <form>
                            <div class="form-group">
                                <label for="zustaendig">Zuständig:</label>
                                <select class="form-control" id="zustaendig">
                                    <option value="String">Max Mustermann</option>
                                    <option value="String">Petra Müller</option>
                                </select>
                            </div>
                        </form>
                    </div>
                    </br>
                    <fieldset class="mt-4">
                        <?php echo view("templates/SpeichernUndReset.html"); ?>
                    </fieldset>
                </form>
            </div>
            </br>
        </div>

    </div>
</div>
</body>
</html>