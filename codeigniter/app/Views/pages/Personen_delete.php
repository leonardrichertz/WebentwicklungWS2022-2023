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
<div class="row">
    <div class="col-2"></div>
    <div class="col-8">
        <form action="submit_edit" method="post">
            <input type="hidden" name="id" id="id" value="<?=isset($mitglied['id']) ? $mitglied['id']: ''?>" >
            <div class="form-group">
                <label for="username" class="form-label">Username:</label>
                <input type="text" class="form-control" id="username" name="username" value="<?=isset($mitglied['username']) ? $mitglied['username']: ''?>">
            </div>
            <div class="form-group">
                <label for="email" class="form-label">E-Mail-Adresse:</label>
                <input type="text" class="form-control" id="email" name="email" value="<?=isset($mitglied['email']) ? $mitglied['email']: ''?>">
            </div>
            <div class="form-group">

            </div>
            <div class="mt-3"><button type="submit" name="btnLoeschen" class="btn btn-danger">Löschen</button>
                <a href="<? redirect()->to('Personen')?>">
                    <button type="button" name="btnReset" class="btn btn-primary">Abbrechen</button>
                </a>
            </div>
        </form>
    </div>
</div>
</body>
