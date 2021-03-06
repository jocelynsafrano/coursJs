<?php include 'config/config-genos.php'; ?>
<!doctype html>
<html>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
  </head>

  <body>
  <div class="container">
  <div class="col-md-12">
  <h3> Liste des clients </h3> <br />
  
  <input type="text" id="rech" class="form-control"><br />
    <div id="load-ajax">
      <?php Client::Datagrid(); ?>
    </div>
  </div>  
  </div>
  </body>

  <script src="jquery.js"></script>
  <script src="js/vue.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  <script> // Pour amélioration : Timeout d'une demi seconde entre saisie et envoie de requete Ajax (pour amélioration des performances) - debounce - Lib JS -> Lodash
  $(document).ready(function(){
    $("#rech").on("keyup", function () {
      var rech = $(this).val();
      $.ajax({
        url : "api.php?action=recherche",
        type : "POST",
        data:{rech:rech},
        success : function (res) {
          $("#load-ajax").html(res);
        },
        error : function () {

        }
      })
    });
  });
  </script>
