<!-- Gruppe 22: Leonard Richertz, Jessica Schiffer-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ToDo Liste</title>
    <link href="https://unpkg.com/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>

<?php
    $name="Todos (Aktuelles Projekt)";
    include("ueberschrift.php");
?>

<?php
    $todos=array(
            array('ToDo:', 'HTML Datei erstellen (Max Mustermann)','CSS Datei erstellen (Max Mustermann)'),
            array('Erledigt:', 'PC eingeschaltet (Petra Müller)', 'Kaffee trinken (Petra Müller)'),
            array('Verschoben:', 'Für die Uni lernen (Max Mustermann)'
            )
    );

    //var_dump($todos);
?>

    <div class="container-fluid">
        <div class="row">

            <div class="col-2">
                <?php include("menu.html"); ?>
            </div>

            <div class="col">
                <div class="row">
                    <?php
                        foreach ($todos as $todo): ?>
                            <div class="col">
                                <div class="card">
                                    <div class="card-header"><?php echo $todo[0] ?></div>
                                    <ul class="list-group list-group-flush">
                                        <?php
                                        for ($i=1; $i < count($todo); $i++): ?>
                                        <li class="list-group-item"><?php echo $todo[$i] ?></li>
                                        <?php endfor; ?>
                                    </ul>
                                </div>
                            </div>
                    <?php endforeach;?>
                </div>
            </div>

        </div>
    </div>

</body>
</html>