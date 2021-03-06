
</form>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>L'aventure de Macron</title>
  <link rel="stylesheet" href="main.css">
  <link rel="icon" href="image/favicon2.png" />


  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">
  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

          <script type="text/javascript"></script>
    <script src="js/util.js"></script>
    <script src="class/Page.js"></script>
    <script src="class/Choix.js"></script>
    <script src="class/Personnage.js"></script>

</head>
<body>
  <div class="center-align">
    <div id="background"class="container">
      <div class="card-panel teal lighten-2"> <i class="material-icons tiny">favorite</i> Points de vie : 100 HP <i class="material-icons tiny">thumbs_up_down</i> Popularité : 100 %</div>


      <p class="flow-text">Case de texte : "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>

        <p class="z-depth-3">
          <ul class="collection">
            <li class="collection-item">Premier choix</li>
            <li class="collection-item">Second choix</li>
            <li class="collection-item">Troisième choix</li>
          </ul>
        </p>
        <div class="row">
          <div class="col s4"><a class="waves-effect waves-light btn">Choix 1</a></div>
          <div class="col s4"><a class="waves-effect waves-light btn">Choix 2</a></div>
          <div class="col s4"><a class="waves-effect waves-light btn">Choix 3</a></div>
        </div>
      </div>
    </div>
          <script>

              document.getElementById("affichage").innerHTML = "ma bite";

          var currentPage = new Page(0, "test");

          for(var i = 0; i<3; i++)
          currentPage.choix.push(new Choix(i+1, "test"));


      </script>
  </body>
  </html>
