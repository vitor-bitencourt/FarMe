<html>
    <?php 
    include '../functions/functions.php'
    ?>
  
    <link href="../style/home.css" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;700&display=swap" rel="stylesheet">



    <?=template_header()?>

    <body id="bd_home">
        <!--<h2> Tenha total controle de sua <br> fazendo e torne-a cada vez <br> mais rentável </h2>-->
        <img src="../assets/images/home-image.png" id="img_home"/>
        <!--<div id="main">-->
        <div id="func">
            <h1>Funcionalidades</h1>
            <p>Um software completo para sua fazenda</p>
        </div>
            
            <div class="card" id="card_fin">
                <img src="../assets/images/exemplos.svg" class="card-img-top" alt="...">
              
                <div class="card-body">
                  <h5 class="card-title">Financeiro</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-secondary">Saiba mais</a>
                </div>
            </div>

                
            <div class="card" id="card_sup">
                <img src="../assets/images/exemplos.svg" class="card-img-top" alt="...">

              <div class="card-body">
                <h5 class="card-title">Suprimentos</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-secondary">Saiba mais</a>
              </div>
            </div>


            <div class="card" id="card_obg">
                <img src="../assets/images/exemplos.svg" class="card-img-top" alt="..." id="img_sup">

            <div class="card-body">
                <h5 class="card-title">Obrigações Legais</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-secondary">Saiba mais</a>
              </div>
            </div>


            <div class="card" id="card_res">
                <img src="../assets/images/exemplos.svg" class="card-img-top" alt="..." id="img_sup">

            <div class="card-body">

                <h5 class="card-title">Resultados</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-secondary">Saiba mais</a>
              </div>
            </div>


            <div class="card" id="card_prod">
                <img src="../assets/images/exemplos.svg" class="card-img-top" alt="..." id="img_sup">

            <div class="card-body">
                <h5 class="card-title">Produção</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-secondary">Saiba mais</a>
              </div>
            </div>
              
        <!--</div>-->

    </body>
</html>