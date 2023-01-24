<head>
    <meta charset="UTF-8">
    <link href="https://unpkg.com/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="https://unpkg.com/bootstrap-table@1.20.1/dist/bootstrap-table.min.css" rel="stylesheet">
    <script src="https://unpkg.com/bootstrap-table@1.20.1/dist/bootstrap-table.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" rel="stylesheet">
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-2"></div>
        <div class="col-8">
            <form action="aufgaben_submit_edit" method="post">
                <input type="hidden" name="id" id="id" value="<?=isset($aufgabe['id']) ? $aufgabe['id']: ''?>" >
                <div class="form-group">
                    <label for="name" class="form-label">Aufgabe</label>
                    <input type="text" class="form-control" id="name" disabled name="name" value="<?=isset($aufgabe['name']) ? $aufgabe['name']: ''?>">
                </div>
                <div class="form-group">
                    <label for="beschreibung" class="form-label">Beschreibung</label>
                    <input type="text" class="form-control" id="beschreibung" name="beschreibung" disabled value="<?=isset($aufgabe['beschreibung']) ? $aufgabe['beschreibung']: ''?>">
                </div>
                <div class="mt-3"><button type="submit" name="btnBestaetigen"  id="btnBestaetigen" class="btn btn-danger">Löschen</button>
                    <button type="submit" name="btnReset" id="btnReset" class="btn btn-success">Abbrechen</button>
                </div>
            </form>
        </div>
    </div>
</div>

</body>
