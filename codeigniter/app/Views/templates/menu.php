<ul class="list-group">
    <li class="list-group-item">
        <a href="Logout">Logout</a>
    </li>
    <li class="list-group-item">
        <a href="Projekte">Projekte </a>
    </li>
    <?php if (isset($_SESSION['projekt'])){ ?>
    <li class="list-group-item">
        <?php
            $aktuelles_projekt = $_SESSION['projekt'];
            $name = $_SESSION['projektname']?>
        <a href="Todo"><?= $name?></a>
    </li>
    <li class="list-group-item" style="margin-left: 40px">
        <a href="Reiter">Reiter</a>
    </li>
    <li class="list-group-item" style="margin-left: 40px">
        <a href="Aufgaben">Aufgaben</a>
    </li>
    <li class="list-group-item" style="margin-left: 40px">
        <a href="Personen">Mitglieder</a>
    </li>
    <?php }?>
</ul>