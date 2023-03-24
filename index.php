<!DOCTYPE html>
<html>
  <head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>liste des villes</title>
</head>
<body>
 


<main>
  <!-- <hr class="featurette-divider">

  <div class="row featurette">
    <div class="col-md-7">
      <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It’ll blow your mind.</span></h2>
      <p class="lead">Some great placeholder content for the first featurette here. Imagine some exciting prose here.</p>
    </div>
    <div class="col-md-5">
      <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
        <title>Placeholder</title>
        <rect width="100%" height="100%" fill="#eee" /><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text>
      </svg>

    </div>
  </div>

  <hr class="featurette-divider">

  <div class="row featurette">
    <div class="col-md-7 order-md-2">
      <h2 class="featurette-heading">Oh yeah, it’s that good. <span class="text-muted">See for yourself.</span></h2>
      <p class="lead">Another featurette? Of course. More placeholder content here to give you an idea of how this layout would work with some actual real-world content in place.</p>
    </div>
    <div class="col-md-5 order-md-1">
      <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
        <title>Placeholder</title>
        <rect width="100%" height="100%" fill="#eee" /><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text>
      </svg>

    </div>
  </div>

  <hr class="featurette-divider">

  <div class="row featurette">
    <div class="col-md-7">
      <h2 class="featurette-heading">Liste des régions principales Pokemon. <span class="text-muted">Checkmate.</span></h2>
      <p class="lead">And yes, this is the last block of representative placeholder content. Again, not really intended to be actually read, simply here to give you a better view of what this would look like with some actual content. Your content.</p>
    </div>
    <div class="col-md-5">
      <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
        <title>Placeholder</title>
        <rect width="100%" height="100%" fill="#eee" /><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text>
      </svg>

    </div>
  </div>

  <hr class="featurette-divider"> -->
  <?php include 'modele.php';

  $getall =Pokemon::getAllPokemon();
//  var_dump($getOnePokemon);
//  ?>

  <!-- <p><?= $getOnePokemon['name'];?></p>
  <p><?= $getOnePokemon['id'];?></p>
  <img src="<?= $getOnePokemon['sprites']['other']['dream_world']['front_default'];?>" alt="pokemon_front" widht ="400px" height = "400px"/> -->
 
          
  
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">  

      <div class="carousel-inner rounded-2 d-flex align-items-center">
        <?php 
        $i=0;
        foreach ($getall['results'] as $g) { 
          $getOnePokemon =Pokemon::getOnePokemon($g['name']);
          // var_dump($g);
          // echo"<pre>";
          // print_r($g);
          // echo"</pre><br>";
          if($i==0){
            // echo"<pre>";
            // print_r($getOnePokemon);
            // echo"</pre><br>";
            
            ?>
            <div class="carousel-item active justify-content d-flex" id="active">
               <div class="pokemon d-flex flex-column justify-content-center align-items-center">
                   <img src="<?=$getOnePokemon['sprites']['other']['dream_world']['front_default']?>" class="img-fluid" alt="...">
                   <h4><?= $getOnePokemon['id'];?></h4>
                   <?php $getPo =Pokemon::getPokemon($getOnePokemon['id'])?>
                    <h4><?= ucfirst($getPo['names'][4]['name'])?></h4>
                   
                  </div>
                </div>         
            
              <?php
              $i++;
             
          }else{?>
            <div class="carousel-item d-flex" id="active">
              <div class="pokemon d-flex flex-column justify-content-center align-items-center">
              <img src="<?=$getOnePokemon['sprites']['other']['dream_world']['front_default']?>" class="img-fluid" alt="...">
               <h4><?= $getOnePokemon['id'];?></h4>
               <?php $getPo =Pokemon::getPokemon($getOnePokemon['id'])?>
               <h4><?= ucfirst($getPo['names'][4]['name'])?></h4>
           </div>
          </div>
         
            <?php 
            
           
            }
          }
        
         
      
      ?>
           
        
        <!-- <div class="carousel-item d-flex justify-content-center">
          <div class="pokemon">
            <img src="https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/other/dream-world/200.svg" class="img-fluid" alt="...">
          </div>
        </div> -->
        <!-- <div class="carousel-item d-flex justify-content-end">
          <div class="pokemon">
            <img src="https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/other/dream-world/112.svg" class="img-fluid" alt="...">
          </div>
        </div> -->
        <!-- <div class="carousel-item d-flex justify-content-start">
          <div class="pokemon">
            <img src="https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/other/dream-world/85.svg" class="img-fluid" alt="...">
          </div>
        </div>
        <div class="carousel-item d-flex justify-content-center">
          <div class="pokemon">
            <img src="https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/other/dream-world/66.svg" class="img-fluid" alt="...">
          </div>
        </div>
        <div class="carousel-item d-flex justify-content-end">
          <div class="pokemon">
            <img src="https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/other/dream-world/27.svg" class="img-fluid" alt="...">
          </div>
        </div>
        <div class="carousel-item d-flex justify-content-start">
          <div class="pokemon">
            <img src="https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/other/dream-world/47.svg" class="img-fluid" alt="...">
          </div>
        </div>
        <div class="carousel-item d-flex justify-content-center">
          <div class="pokemon">
            <img src="https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/other/dream-world/167.svg" class="img-fluid" alt="...">
          </div>
        </div>
        <div class="carousel-item d-flex justify-content-end">
          <div class="pokemon">
            <img src="https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/other/dream-world/98.svg" class="img-fluid  " alt="...">
          </div>
        </div>
        <div class="carousel-item d-flex justify-content-start">
          <div class="pokemon">
            <img src="https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/other/dream-world/250.svg" class="img-fluid  " alt="...">
          </div>
        </div>
        <div class="carousel-item d-flex justify-content-center">
          <div class="pokemon">
            <img src="https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/other/dream-world/19.svg" class="img-fluid  " alt="...">
          </div>
        </div>
        <div class="carousel-item d-flex justify-content-end">
          <div class="pokemon">
            <img src="https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/other/dream-world/15.svg" class="img-fluid  " alt="...">
          </div>
        </div>
        <div class="carousel-item d-flex justify-content-start">
          <div class="pokemon">
            <img src="https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/other/dream-world/106.svg" class="img-fluid  " alt="...">
          </div>
        </div>
        <div class="carousel-item d-flex justify-content-center">
          <div class="pokemon">
            <img src="https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/other/dream-world/132.svg" class="img-fluid  " alt="...">
          </div>
        </div>
        <div class="carousel-item d-flex justify-content-end">
          <div class="pokemon">
            <img src="https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/other/dream-world/63.svg" class="img-fluid  " alt="...">
          </div>
        </div>
        <div class="carousel-item d-flex justify-content-start">
          <div class="pokemon">
            <img src="https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/other/dream-world/187.svg" class="img-fluid  " alt="...">
          </div>
        </div>
        <div class="carousel-item d-flex justify-content-center">
          <div class="pokemon">
            <img src="https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/other/dream-world/18.svg" class="img-fluid  " alt="...">
          </div>
        </div>
        <div class="carousel-item d-flex justify-content-end">
          <div class="pokemon bg-secondary">
            <img src="https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/other/dream-world/97.svg" class="img-fluid  " alt="...">
          </div>
        </div>
        <div class="carousel-item d-flex justify-content-start">
          <div class="pokemon">
            <img src="https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/other/dream-world/212.svg" class="img-fluid  " alt="...">
          </div>
        </div>
        <div class="carousel-item d-flex justify-content-center">
          <div class="pokemon">
            <img src="https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/other/dream-world/59.svg" class="img-fluid  " alt="...">
          </div>
        </div>
        <div class="carousel-item d-flex justify-content-end">
          <div class="pokemon">
            <img src="https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/other/dream-world/300.svg" class="img-fluid  " alt="...">
          </div>
        </div>
      </div> -->
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
</main>

<script src="assets\js\carousel.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</body>
