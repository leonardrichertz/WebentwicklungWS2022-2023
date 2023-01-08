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
<div class="container">
    <div class="card bg-light mt-4">
        <div class="card-body">
            <form action="<? base_url('Personen/updatePerson')?>" method="post">
                <div class="form-group">
                    <label><h4>Bearbeiten</h4></label>
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
                    <? if ($todo==0):?>
                        <button type="submit" class="btn btn-success mb-2 mr-2" name="btnSpeichern" id="btnSpeichern">Speichern</button>
                    <? endif;?>

                    <? if ($todo==1):?>
                        <button type="submit" class="btn btn-success mb-2 mr-2" name="btnSpeichern" id="btnSpeichern">Speichern</button>
                    <? endif;?>

                    <? if ($todo==2):?>
                        <button type="submit" class="btn btn-danger mb-2 mr-2" name="btnLoeschen" id="btnLoeschen">Löschen</button>
                    <? endif;?>
                    <button class="btn btn-primary mb-2" type="submit" name="btnAbbrechen" id="btnAbbrechen">Abbrechen</button>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
