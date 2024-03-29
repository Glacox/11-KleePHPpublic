<!DOCTYPE html>
<html lang="fr">
<?php require_once("../config.php");?>
<?php require_once("../action/searchOptions.php");?>
  
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../style/search.css">
  <title>Recherche d'un magasin</title>
</head>

<body>


  <!-- Contenu de la sidebar -->
  <div class="top-bar" id="topBar">


    <img class="icon-shop" src="../img/SHOP.png" alt="icon-shop">

    <ul class="page-list" id="pageList">
      <li>Magasin</li>
      <li>Recherche d'un magasin</li>
    </ul>

    <!-- A changer quand Le login fonctionneras -->
    <div class="user-info">
      <div class="user-icon">👤</div>
      <span id="userName">Utilisateur</span>
    </div>

  </div>

  <nav class="sidebar">
    <ul>
      <!-- A ajuster par rapport a la page sur la quel on est -->
      <li><a href="./index.php"><img class="nav-icon retour" src="../img/Retour.png" alt="icon-retour"></a></li>
    </ul>
  </nav>

  <!-- Side Bar -->



  <div>
    <div class="search-container">
      <form class="search-form" method="post" id="searchForm" action="../action/search.php">
        <label for="store-category">Store catégorie</label>
        <select id="store-category" name="store-category">
          <option value="all">Toutes</option>
          <!-- Autres options -->
          <?php foreach($categories as $category): ?>
                <option value="<?php echo $category; ?>"><?php echo $category; ?></option>
          <?php endforeach; ?>  
        </select>

        <label for="store-typology">Typologie</label>
        <select id="store-typology" name="store-typology">
          <option value="all">Toutes</option>
          <!-- Autres options -->
          <?php foreach($topologies as $topology): ?>
                <option value="<?php echo $topology; ?>"><?php echo $topology; ?></option>
          <?php endforeach; ?>
        </select>

        <label for="keywords">Mot(s) clé(s)</label>
        <input type="text" id="keywords" name="keywords">

        <button type="submit" id="submitButton">Rechercher</button>
      </form>
    </div>
  </div>

  <div class="box"></div>
            <script>
            appendData($data);
          
          //La fonction qui va automatiquement creer des options dans les forms en fonctions des elements de la BDD
          function appendData(data) {
              var mainContainer = document.getElementById("store-category");
              for (var i = 0; i < data.length; i++) {
                if (!optionExists(mainContainer, data[i].category)) {
                  var option = document.createElement("option");
                  option.innerHTML ="<option value='" + data[i].category + "'>" + data[i].category +"</option>"
                  mainContainer.appendChild(option);
                }
              }
              var mainContainer = document.getElementById("store-typology");
                for (var i = 0; i < data.length; i++) {
                  if (!optionExists(mainContainer, data[i].typology)) {
                    var option = document.createElement("option");
                    option.innerHTML ="<option value='" + data[i].typology + "'>" + data[i].typology +"</option>"
                    mainContainer.appendChild(option);
                  }
                } 
              //La fonction qui cree les cartes de magasins automatiquement depuis la BDD
              var mainContainer = document.getElementById("myData");
              for (var i = 0; i < data.length; i++) {
                var div = document.createElement("div");
                div.innerHTML ="<h3 class= 'card_smallText'>" + data[i].typology + " / " + data[i].category + "</h3>" +
                "<h2 class= 'card_text'>" + data[i].name + " : " + data[i].adress + "</h2>" +
                "<img src='" + data[i].shop_image_link +"' class= 'card_image' />" + 
                "<a href='" + data[i].shop_link + "' class= 'card_button a'> Inviter </a>"
                mainContainer.appendChild(div);
              }
            }

        // Fonction pour vérifier si une option avec la même valeur existe déjà
        function optionExists(select, value) {
            var options = select.options;
            for (var i = 0; i < options.length; i++) {
                if (options[i].value === value) {
                    return true;
                }
            }
            return false;
        }


      </script>
    </div>
  </div>

  <div id="myData" class="flex-container"></div>

</body>
</html>
