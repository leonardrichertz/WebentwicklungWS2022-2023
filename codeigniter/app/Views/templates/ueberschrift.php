<div class="container-fluid">
  <header class="bg-light mt-3 mb-3 p-5">
    <h1 style="text-align: center">
      Aufgabenplaner: <?php echo $title; ?>
    </h1>
  </header>
    <? if ($title!='Login' || $title!= 'Registrierung'): ?>
    <button type="button" class="btn btn-primary"><a style="color: white" href="login/logout">Logout</a></button>
    <? endif;?>
</div>
