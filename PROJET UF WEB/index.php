<?php
session_start(); ?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>HUGO COZZOLINO</title>
  <link rel="stylesheet" href="css/main.css" />
</head>

<body>
  <nav>
    <ul>
      <li><a href="#home">Accueil</a></li>
      <li><a href="#about">A propos</a></li>
      <li><a href="#portfolio">portfolio</a></li>
      <li><a href="#contact">contact</a></li>
    </ul>
  </nav>

  <div class="container-all">
    <div class="welcome" id="home">
      <button class="menu-button">
        <svg class="hamburger" x="0px" y="0px" viewBox="0 0 30 17" height="17" width="30">
          <g transform="translate(-15 -15)">
            <rect x="15" y="16" class="st0" width="30" height="2" />
          </g>
          <g transform="translate(-15 -9)">
            <rect x="15" y="16" class="st0" width="30" height="2" />
          </g>
          <g transform="translate(-15 -3)">
            <rect x="15" y="16" class="st0" width="30" height="2" />
          </g>
        </svg>
        <svg class="close-icon" x="0px" y="0px" viewBox="0 0 30 17" height="17" width="30">
          <g transform="translate(-15 -15)">
            <polygon class="st0" points="31.2,23.5 37,29.3 35.8,30.5 30,24.7 24.2,30.5 23,29.3 28.8,23.5 23,17.7 24.2,16.5 30,22.3 
           35.8,16.5 37,17.7 	" />
          </g>
        </svg>
      </button>

      <h1>Bienvenue sur mon<span>Portfolio</span></h1>
    </div>

    <section class="intro">
      <div class="intro-left">
        <img src="img/welcome-01.png" alt="a laptop on a wood table" />
      </div>
      <div class="intro-middle">
        <h2>FAISONS LE...</h2>
        <p>
          "C'est en faisant que l'on apprend"<br />
          Ynov Campus
        </p>
      </div>
      <div class="intro-right">
        <img src="img/welcome-02.png" alt="two computers and a laptop on a table" />
      </div>
    </section>

    <section class="about-me" id="about">
      <img class="about-img" src="img/hugoportrait1.png" alt="A picture of Joe Portfolio" />
      <h1 class="about-title">Hugo COZZOLINO</h1>
      <h2 class="about-subtitle">etudiant, Futur developpeur...</h2>
      <div class="about-text">
        <p>
          Après avoir obtenue un bac scientifique, j'ai eu l'opportunité de
          débuter des études réellements formatives dans le domaine de l'
          informatique chez Ynov, située à Aix en Provence.
        </p>

        <p>
          Aujourd'hui actuellement en Bachelor 1 informatique je poursuis ma
          formation. Mes futurs années de formations auront pour but de faire
          de moi un développeur aguerri près à relever les défis du futurs et
          pousser toujours plus loin l'innovation.
        </p>
      </div>
    </section>

    <section class="portfolio" id="portfolio">
      <h1>Mes travaux</h1>
      <div class="portfolio-items">
        <!-- Portfolio item 1 -->
        <figure class="portfolio-item">
          <img class="portfolio-image" src="img/project_gauche.jpg" alt="portfolio item" />
          <figcaption>
            <h2 class="portfolio-title">En cours de production</h2>
            <p class="portfolio-desc">
              <!-- ajouter une description au projet -->
            </p>
            <a href="#" class="portfolio-link">Bientôt disponible</a>
          </figcaption>
          <!-- //Pour tester le click sur ce projet et avoir un appercu supprimer ce commentaire //
            
            <div class="portfolio-modal">
              <button class="modal-close">
                <svg x="0px" y="0px" viewBox="0 0 30 17" height="17" width="30">
                  <g transform="translate(-15 -15)">
                    <polygon
                      class="st0"
                      points="31.2,23.5 37,29.3 35.8,30.5 30,24.7 24.2,30.5 23,29.3 28.8,23.5 23,17.7 24.2,16.5 30,22.3 
                35.8,16.5 37,17.7 	"
                    />
                  </g>
                </svg>
              </button>
              <div class="portfolio-header header-one">
                <div class="portfolio-title-box">
                  <h2 class="portfolio-title">NOM DU PROJET</h2>
                  <p class="portfolio-subtitle">complément de titre</p>
                </div>
              </div>
              
              <div class="portfolio-content">
                <p>
                  Aenean mattis tristique elementum. Duis massa tellus, tempus
                  non fermentum at, venenatis et augue. Phasellus tristique
                  purus sed sagittis interdum. Duis luctus sapien justo, vel
                  viverra ex convallis et. Maecenas suscipit lacus ut lectus
                  mattis ornare. Vestibulum faucibus purus sit amet erat
                  lobortis, tristique fringilla leo sodales. Interdum et
                  malesuada fames ac ante.
                </p>
                <img
                  class="portfolio-full-width"
                  src="img/project_gauche.jpg"
                  alt=" image"
                />
                <p>
                  Aenean mattis tristique elementum. Duis massa tellus, tempus
                  non fermentum at, venenatis et augue. Phasellus tristique
                  purus sed sagittis interdum. Duis luctus sapien justo, vel
                  viverra ex convallis et. Maecenas suscipit lacus ut lectus
                  mattis ornare. Vestibulum faucibus purus sit amet erat
                  lobortis, tristique fringilla leo sodales. Interdum et
                  malesuada fames ac ante.
                </p>
                <p>
                  Aenean mattis tristique elementum. Duis massa tellus, tempus
                  non fermentum at, venenatis et augue. Phasellus tristique
                  purus sed sagittis interdum. Duis luctus sapien justo, vel
                  viverra ex convallis et. Maecenas suscipit lacus ut lectus
                  mattis ornare. Vestibulum faucibus purus sit amet erat
                  lobortis, tristique fringilla leo sodales. Interdum et
                  malesuada fames ac ante.
                </p>
                <img
                  class="portfolio-pull-left"
                  src="img/project_gauche.jpg"
                  alt=" image"
                />
                <p>
                  Aenean mattis tristique elementum. Duis massa tellus, tempus
                  non fermentum at, venenatis et augue. Phasellus tristique
                  purus sed sagittis interdum. Duis luctus sapien justo, vel
                  viverra ex convallis et. Maecenas suscipit lacus ut lectus
                  mattis ornare. Vestibulum faucibus purus sit amet erat
                  lobortis, tristique fringilla leo sodales. Interdum et
                  malesuada fames ac ante.
                </p>
                <p>
                  Aenean mattis tristique elementum. Duis massa tellus, tempus
                  non fermentum at, venenatis et augue. Phasellus tristique
                  purus sed sagittis interdum. Duis luctus sapien justo, vel
                  viverra ex convallis et. Maecenas suscipit lacus ut lectus
                  mattis ornare. Vestibulum faucibus purus sit amet erat
                  lobortis, tristique fringilla leo sodales. Interdum et
                  malesuada fames ac ante.
                </p>
                <img
                  class="portfolio-pull-right"
                  src="img/project_gauche.jpg"
                  alt=" image"
                />
              </div>
            </div>
            //Pour tester le click sur ce projet et avoir un appercu supprimer ce commentaire// -->
        </figure>

        <!-- Portfolio item 2 -->
        <figure class="portfolio-item">
          <img class="portfolio-image" src="img/project_gauche.jpg" alt="portfolio item" />
          <figcaption>
            <h2 class="portfolio-title">En cours de production</h2>
            <p class="portfolio-desc">
              <!-- ajouter une description au projet  -->
            </p>
            <a href="#" class="portfolio-link">Bientôt disponible</a>
          </figcaption>
          <!-- 
            <div class="portfolio-modal">
              <button class="modal-close">
                <svg x="0px" y="0px" viewBox="0 0 30 17" height="17" width="30">
                  <g transform="translate(-15 -15)">
                    <polygon
                      class="st0"
                      points="31.2,23.5 37,29.3 35.8,30.5 30,24.7 24.2,30.5 23,29.3 28.8,23.5 23,17.7 24.2,16.5 30,22.3 
                    35.8,16.5 37,17.7 	"
                    />
                  </g>
                </svg>
              </button>
              <div class="portfolio-header header-two">
                <div class="portfolio-title-box">
                  <h2 class="portfolio-title">Project Name 2</h2>                     //ce gros commentaire est la trame 
                  <p class="portfolio-subtitle">Subtitle goes here</p>                  a compléter lorsque le projet sera
                </div>                                                                  prêt a être affiché//
              </div>
              // portfolio-header //
              <div class="portfolio-content">
                <p>
                  // TEXTE EXPLICATIF PROJET //
                </p>
                <img class="portfolio-full-width" src="img/ " alt="image" />
                <p>
                  // TEXTE EXPLICATIF PROJET //
                </p>
                <p>
                  // TEXTE EXPLICATIF PROJET //
                </p>
                <img class="portfolio-pull-left" src="img/ " alt="image" />
                <p>
                  // TEXTE EXPLICATIF PROJET //
                </p>
                <p>
                  // TEXTE EXPLICATIF PROJET //
                </p>
                <img class="portfolio-pull-right" src="img/ " alt="image" />
              </div>
            </div>
          -->
        </figure>

        <!-- Portfolio item 3 -->
        <figure class="portfolio-item">
          <img class="portfolio-image" src="img/project_gauche.jpg" alt="portfolio item" />
          <figcaption>
            <h2 class="portfolio-title">En cours de production</h2>
            <p class="portfolio-desc">
              <!-- ajouter une description -->
            </p>
            <a href="#" class="portfolio-link">Bientôt disponible</a>
          </figcaption>

          <!-- 
            <div class="portfolio-modal">
              <button class="modal-close">
                <svg x="0px" y="0px" viewBox="0 0 30 17" height="17" width="30">
                  <g transform="translate(-15 -15)">
                    <polygon
                      class="st0"
                      points="31.2,23.5 37,29.3 35.8,30.5 30,24.7 24.2,30.5 23,29.3 28.8,23.5 23,17.7 24.2,16.5 30,22.3 
                    35.8,16.5 37,17.7 	"
                    />
                  </g>
                </svg>
              </button>
              <div class="portfolio-header header-two">
                <div class="portfolio-title-box">
                  <h2 class="portfolio-title">Project Name 2</h2>                     //ce gros commentaire est la trame 
                  <p class="portfolio-subtitle">Subtitle goes here</p>                  a compléter lorsque le projet sera
                </div>                                                                  prêt a être affiché//
              </div>
              // portfolio-header //
              <div class="portfolio-content">
                <p>
                  // TEXTE EXPLICATIF PROJET //
                </p>
                <img class="portfolio-full-width" src="img/ " alt="image" />
                <p>
                  // TEXTE EXPLICATIF PROJET //
                </p>
                <p>
                  // TEXTE EXPLICATIF PROJET //
                </p>
                <img class="portfolio-pull-left" src="img/ " alt="image" />
                <p>
                  // TEXTE EXPLICATIF PROJET //
                </p>
                <p>
                  // TEXTE EXPLICATIF PROJET //
                </p>
                <img class="portfolio-pull-right" src="img/ " alt="image" />
              </div>
            </div>
          -->
        </figure>
        <!-- sdfghjklmlkjhgfdfghjkljhgfdfghjklkjhgfdsdfghjklkjhgfdfghjklkjhgfdfghjkllkjhgfdfghjkl -->
        <!-- Portfolio item 4 -->
        <figure class="portfolio-item">
          <img class="portfolio-image" src="img/project_gauche.jpg" alt="portfolio item" />
          <figcaption>
            <h2 class="portfolio-title">En cours de production</h2>
            <p class="portfolio-desc">
              <!-- ajouter une description du projet  -->
            </p>
            <a href="#" class="portfolio-link">Bientôt disponible</a>
          </figcaption>

          <!-- 
            <div class="portfolio-modal">
              <button class="modal-close">
                <svg x="0px" y="0px" viewBox="0 0 30 17" height="17" width="30">
                  <g transform="translate(-15 -15)">
                    <polygon
                      class="st0"
                      points="31.2,23.5 37,29.3 35.8,30.5 30,24.7 24.2,30.5 23,29.3 28.8,23.5 23,17.7 24.2,16.5 30,22.3 
                    35.8,16.5 37,17.7 	"
                    />
                  </g>
                </svg>
              </button>
              <div class="portfolio-header header-two">
                <div class="portfolio-title-box">
                  <h2 class="portfolio-title">Project Name 2</h2>                     //ce gros commentaire est la trame 
                  <p class="portfolio-subtitle">Subtitle goes here</p>                  a compléter lorsque le projet sera
                </div>                                                                  prêt a être affiché//
              </div>
              // portfolio-header //
              <div class="portfolio-content">
                <p>
                  // TEXTE EXPLICATIF PROJET //
                </p>
                <img class="portfolio-full-width" src="img/ " alt="image" />
                <p>
                  // TEXTE EXPLICATIF PROJET //
                </p>
                <p>
                  // TEXTE EXPLICATIF PROJET //
                </p>
                <img class="portfolio-pull-left" src="img/ " alt="image" />
                <p>
                  // TEXTE EXPLICATIF PROJET //
                </p>
                <p>
                  // TEXTE EXPLICATIF PROJET //
                </p>
                <img class="portfolio-pull-right" src="img/ " alt="image" />
              </div>
            </div>
          -->
        </figure>

        <!-- Portfolio item 5 -->
        <figure class="portfolio-item featured">
          <img class="portfolio-image" src="img/project_gauche.jpg" alt="portfolio item" />
          <figcaption>
            <h2 class="portfolio-title">En cours de production</h2>
            <p class="portfolio-desc">
              <!-- ajouter une description du projet  -->
            </p>
            <a href="#" class="portfolio-link">Bientôt disponible</a>
          </figcaption>
          <!-- 
            <div class="portfolio-modal">
              <button class="modal-close">
                <svg x="0px" y="0px" viewBox="0 0 30 17" height="17" width="30">
                  <g transform="translate(-15 -15)">
                    <polygon
                      class="st0"
                      points="31.2,23.5 37,29.3 35.8,30.5 30,24.7 24.2,30.5 23,29.3 28.8,23.5 23,17.7 24.2,16.5 30,22.3 
                    35.8,16.5 37,17.7 	"
                    />
                  </g>
                </svg>
              </button>
              <div class="portfolio-header header-two">
                <div class="portfolio-title-box">
                  <h2 class="portfolio-title">Project Name 2</h2>                     //ce gros commentaire est la trame 
                  <p class="portfolio-subtitle">Subtitle goes here</p>                  a compléter lorsque le projet sera
                </div>                                                                  prêt a être affiché//
              </div>
              // portfolio-header //
              <div class="portfolio-content">
                <p>
                  // TEXTE EXPLICATIF PROJET //
                </p>
                <img class="portfolio-full-width" src="img/ " alt="image" />
                <p>
                  // TEXTE EXPLICATIF PROJET //
                </p>
                <p>
                  // TEXTE EXPLICATIF PROJET //
                </p>
                <img class="portfolio-pull-left" src="img/ " alt="image" />
                <p>
                  // TEXTE EXPLICATIF PROJET //
                </p>
                <p>
                  // TEXTE EXPLICATIF PROJET //
                </p>
                <img class="portfolio-pull-right" src="img/ " alt="image" />
              </div>
            </div>
          -->
        </figure>
      </div>
    </section>
                <!--debut de k espace formulaire-->
    <section class="contact" id="contact">
      <h1>Me contacter</h1>


              <?php      // gestion des erreurs
                  if(array_key_exists('errors', $_SESSION)):?>       
                <div class=" alert alert-danger ">  <!-- revoir style car css bootsrap-->
                    <?= implode('<br>', $_SESSION['errors']);?>
              </div>

              <?php unset($_SESSION['errors']); endif;?>

              
              <?php   // gestion des sccés		//regler pbl du array 
                  if(array_key_exists('', $_SESSION)):?> 
                <div class=" alert alert-success ">  <!-- revoir style car css bootsrap-->
                    Votre email à bien été envoyé
              </div>

              <?php unset($_SESSION['success']); endif;?>



      <form action="post_contact.php" method="POST">
        <label class="name" class="name" for="name">Nom:
          <input required type="text" id="name" name="name" value="<?= isset($_SESSION['inputs']['name']) ? $_SESSION['inputs']['name']: '' ; ?>"/> <!--a prtir de value si ca est definie alors on l affiche sinn on n affiche rien ('')-->
        </label>

        <label class="email" class="email" for="email">Email:
          <input required type="email" id="email" name="email" value="<?= isset($_SESSION['inputs']['email']) ? $_SESSION['inputs']['email']: '' ; ?>"/>
        </label>

        <label message="message" class="message" for="message">Message:
          <textarea required  id="message" name="message"><?= isset($_SESSION['inputs']['message']) ? $_SESSION['inputs']['message']: '' ; ?></textarea>
        </label>

        <input required class="button form-button" type="submit" value="ENVOYER" name="submit" />
      </form>
     
    </section>

    <footer>
      <p>Mes réseaux:</p>
      <div class="social-icons">
        <a href="https://twitter.com/"><img class="social-icon" src="img/twitter.svg" alt="twitter" /></a>
        <a href="https://www.instagram.com/?hl=fr">
          <img class="social-icon" src="img/instagram.svg" alt="twitter" /></a>
        <a href="https://github.com/">
          <img class="social-icon" src="img/github.svg" alt="github" /></a>
      </div>
    </footer>
  </div>
  <script src="js/nav.js"></script>
  <script src="js/modal.js"></script>
</body>

</html>

<?php 
unset ($_SESSION['inputs']);   //defaire les inputs pour nettoyer la session pour qu eles info s'effacent à la réactualisation 
unset ($_SESSION['errors']);   //defaire les inputs pour nettoyer la session pour qu eles info s'effacent à la réactualisation 
unset ($_SESSION['success']);  //defaire les inputs pour nettoyer la session pour qu eles info s'effacent à la réactualisation 
?>