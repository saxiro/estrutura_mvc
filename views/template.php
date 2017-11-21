<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Meu Site</title>
  </head>
  <body>
    <div class="container">
      <h1>Este é o Topo!</h1>
      <a href="<?=BASE_URL?>">Home</a> // <a href="<?=BASE_URL?>galeria">Galeria</a>
      <hr/>
    </div>


      <?php $this->loadViewInTemplate($viewName, $viewData); ?>

      <hr/>
      <div class="container">
        <h1>Este e o Footer</h1>
      </div>

  </body>
</html>
