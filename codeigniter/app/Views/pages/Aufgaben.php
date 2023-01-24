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


<div class="container-fluid">
    <div class="row">

        <div class="col-2">
            <?php echo view("templates/menu.php"); ?>
        </div>


        <div class="col-8">
            <table class="table mb-5 ">
                <thead>
                <tr class="bg-light">
                    <th scope="col" class="col-3">Aufgabenbezeichnung</th>
                    <th scope="col" class="col-3">Beschreibung der Aufgabe</th>
                    <th scope="col" class="col-2">Reiter</th>
                    <th scope="col" class="col-2">Zuständig</th>
                    <th scope="col" class="col-1"></th>
                    <th scope="col" class="col-1"></th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($aufgaben as $item): ?>

                    <tr>
                        <td><?=$item['name'] ?> </td>
                        <td><?= $item['beschreibung']?></td>
                        <td><?= $item['reiter'] ?></td>
                        <td><?= $item['zuständig'] ?></td>
                        <td><form action="Aufgaben" method="post">
                                    <input type="hidden" value="<?=$item['id']?>" name="id" id="id">
                                    <button class='btn' name="btnBearbeiten"><i class="fa-solid fa-pen-to-square" ></i> </button>
                            </form>
                        </td><td>
                            <form action="Aufgaben" method="post">
                                    <input type="hidden" value="<?=$item['id']?>" name="id" id="id">
                                    <button class='btn' name="btnLoeschen"><i class="fa-solid fa-trash-can ms-3"></i></button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach?>
                </tbody>
            </table>
            <div class="h3 mt-5">
                Bearbeiten/Erstellen:
            </div>
            <form action="aufgaben_submit_edit" method="post">
                <input type="hidden" name="id" id="id" value="<?= (isset($aufgabe['id']))? $aufgabe['id'] : ''  ?>">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Aufgabenbezeichnung</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Aufgabe" value="<?= (isset($aufgabe['name']))? $aufgabe['name'] : ''  ?>">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Beschreibung der Aufgabe</label>
                    <textarea placeholder="Beschreibung" class="form-control" id="beschreibung" name="beschreibung" rows="3"><?= (isset($aufgabe['beschreibung']))? $aufgabe['beschreibung'] : ''  ?></textarea>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Erstellungsdatum</label>
                    <input type="date" class="form-control" id="erstellungsdatum" name="erstellungsdatum" placeholder="01.01.2023" value="<?= (isset($aufgabe['erstellungsdatum']))? $aufgabe['erstellungsdatum'] : ''  ?>" >
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">f&auml;llig bis:</label>
                    <input type="date" class="form-control" id="fälligkeitsdatum" name="fälligkeitsdatum" placeholder="31.12.2023" value="<?= (isset($aufgabe['fälligkeitsdatum']))? $aufgabe['fälligkeitsdatum'] : ''  ?>">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Zugeh&ouml;riger Reiter:</label>
                    <select class="form-select" name="reiter" id="reiter" aria-label="Default select example">
                        <option value="<?= (isset($aufgabe['reiter']))? $aufgabe['reiterid'] : '0'  ?>" disabled selected><?= (isset($aufgabe['reiter']))? $aufgabe['reiter'] : '-bitte wählen-'  ?></option>
                        <?php foreach ($reiter as $item):?>
                            <option value="<?= $item['id']?>"><?= $item['name']?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Zust&auml;ndig:</label>
                    <select class="form-select" name="mitgliederids[]" id="mitgliederids[]" multiple size="5">
                        <?php foreach ($mitglieder as $item):?>
                            <option

                                <?php  if (isset($aufgabenmitglieder))foreach ($aufgabenmitglieder as $item2):?>

                                    <?=($item['id']==$item2['mitgliederid'])? 'class="bg-primary"' : '';?>


                                <?php endforeach  ?>
                                    value="<?= $item['id']?>"><?= $item['username']?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div><button type="submit" name="btnSpeichern" id="btnSpeichern" class="btn btn-primary">Speichern</button>
                    <button type="submit" name="btnReset" id="btnReset" class="btn btn-success">Reset</button>
                </div>

        </div>
        </form>
    </div>
</body>
</html>