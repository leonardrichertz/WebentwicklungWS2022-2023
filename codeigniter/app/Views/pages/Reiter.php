<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Reiter</title>
    <link href="https://unpkg.com/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="https://unpkg.com/bootstrap-table@1.20.1/dist/bootstrap-table.min.css" rel="stylesheet">
    <script src="https://unpkg.com/bootstrap-table@1.20.1/dist/bootstrap-table.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" rel="stylesheet">
</head>
<body>

<div class="container-fluid">
    <div class="row">

        <div class="col-2">
            <?php echo view('templates/menu.php');?>
        </div>

        <div class="col-8">

            <div class="row">
                <table class="table table-responsive">
                    <thead class="table-light">
                    <tr>
                        <th>Name</th>
                        <th>Beschreibung</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>ToDo</td>
                        <td>Dinge die erledigt werden müssen</td>
                        <td style="text-align: right">
                            <?php echo view('templates/EditUndDelete.php');?>
                        </td>
                    </tr>
                    <tr>
                        <td>Erledigt</td>
                        <td>Dinge die erledigt sind</td>
                        <td style="text-align: right">
                            <?php  echo view('templates/EditUndDelete.php'); ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Verschoben</td>
                        <td>Dinge die später erledigt werden</td>
                        <td style="text-align: right">
                            <?php  echo view('templates/EditUndDelete.php'); ?>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>

            </br>
            </br>
            <div class="row">
                <form>
                    <div class="form-group">
                        <label><h4>Bearbeiten/Erstellen</h4></label>
                        <form>
                            <div class="form-group">
                                <label for="reiterbezeichnung">Bezeichnung des Reiters:</label>
                                <input type="text" placeholder="Reiter" class="form-control" id="reiterbezeichnung">
                            </div>
                        </form>
                        </br>
                        <form>
                            <div class="form-group">
                                <label for="beschreibung">Beschreibung:</label>
                                <textarea name="beschreibung" placeholder="Beschreibung" class="form-control"
                                          id="beschreibung"></textarea>
                            </div>
                        </form>
                    </div>
                    </br>
                    <fieldset class="mt-4">
                        <?php echo view('templates/SpeichernUndReset.html');?>
                    </fieldset>
                </form>
            </div>
            </br>
        </div>

    </div>
</div>
</body>
</html>