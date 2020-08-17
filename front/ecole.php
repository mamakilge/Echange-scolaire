<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description"
    content="Réseau social pour les enseignants et les établissements, ainsi que plateforme de recherche pour les voyages scolaires">
  <title>Annonce Collège Fenelon</title>
  <link rel="shortcut icon" href="img/logogo.png" type="image/x-icon">
  <!--JS - JQUERY-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <!--FONT AWESOME-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css"
    integrity="sha256-2XFplPlrFClt0bIdPgpz8H7ojnk10H69xRqd9+uTShA=" crossorigin="anonymous" />
  <!--BOOTSTRAP-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
    integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
  </script>

  <script src="js/script.js"></script>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <header class="bg-light">
    <nav class="container navbar navbar-expand-lg navbar-light d-flex">
        <!--logo cliquable pour revenir sur la page d'accueil-->
        <a class="mr-lg-5 navbar-brand" href="index.html">
            <img class="logo" src="img/logo.png" alt="logo site">
        </a>


        <!--à partir d'ici en version mobile c'est un Menu Hamburguer-->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <form class="form-inline">
                <input class="form-control" type="search" id="search" placeholder="Rechercher"
                    aria-label="Search">
                <a href="" class="btn btn-form"><i class="fas fa-search"></i></a>
            </form>
            <ul class="navbar-nav">
                <li class="nav-item d-flex ml-lg-5">
                    <a class="nav-link btn-nav" href="" data-toggle="modal"
                        data-target="#exampleModal">Connexion<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item d-flex">
                    <a class="nav-link btn-nav" href="" data-toggle="modal"
                        data-target="#exampleModal">Inscription<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown ml-lg-5">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="mentionsapropos.html#contacter">Contact</a>
                        <a class="dropdown-item" href="mentionsapropos.html#nous">À Propos</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="mentionsapropos.html">Mentions Légales</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

</header>

  <main>

    <!-- Navigation Accueil/Annonce établissement-->
    <section class="bg-title">
      <nav class="container " aria-label="breadcrumb">
        <ol class="breadcrumb bg-transparent">
          <li class="breadcrumb-item"><a class="revenir-accueil" href="index.html">Accueil</a></li>
          <li class="breadcrumb-item active" aria-current="page">Annonce - Établissement</li>
        </ol>
      </nav>
      <div class="container">
        <h1 class="text-center mb-4">Collège Fenelon</h1>
      </div>
    </section>
     <!--Photo profil /  Profil du établissement-->
    <div class="container">
      <div class="row mb-5 mt-5">
        <div class="col-12 col-lg-6 text-center">
          <img src="img/Fenelon.jpg" alt="une classe" class="mb-4 mx-3 mx-sm-0 imgEcole">
        </div>
        <div class="col-12 col-lg-6 text-center mt-3 mt-md-4">
          <p>La mobilité internationale et la maîtrise d'une ou de plusieurs langues étrangères représentent un atout
            majeur sur le marché du travail et un réel enrichissement personnel et culturel pour les élèves.
            Séjourner dans un pays partenaire est un moyen privilégié pour apprendre la langue et acquérir des
            compétences interculturelles.</p>
          <button type="button" class="btn btn-lg btn-form" data-toggle="modal" data-target="#exampleModal"
            data-whatever="@mdo">Ajouter contact</button>
          <button type="button" class="btn btn-lg btn-form mt-3 mt-md-0" data-toggle="modal" data-target="#exampleModal"
            data-whatever="@mdo">Envoyer un message</button>
        </div>
      </div>
    </div>

    <!-- Géolocalisation / Calendrier d'accueil / Capacités d'accueil /
            Numéro de téléphone / Boutton en "recherche d'échange" -->
    <section class="container-fluid bg-light">
      <div class="container">
        <div class="text-center">
          <div class="row text-left mt-4 mb-4">
            <div class="col-md-6 col-sm-12 pl-2">
              <p><i class="iconvsp fas fa-map-marker-alt colorIcon"></i> Paris, France.</p>
              <i class="iconvsp far fa-calendar-alt colorIcon"></i><label for="start"> Choisissez une date :</label>
              <input type="date" id="start" name="trip-start" value="2018-02-02" min="2018-01-01" max="2100-12-31">
              <p><i class="iconvsp fas fa-users colorIcon"></i>Capacité d'accueil : 20 élèves</p>
              <p><i class="iconvsp fas fa-phone colorIcon"></i> 07 85 25 69 52</p>
              <div class="custom-control custom-switch">
                <input type="checkbox" class="custom-control-input" id="customSwitch1">
                <label class="custom-control-label" for="customSwitch1">Recherche
                  d'échange</label>
              </div>
            </div>
            <!-- La vie sur place -->
            <div class="col-md-6 col-sm-12">
              <h3 class="mt-3 mt-md-0 text-center">La vie sur place</h3>
              <p> Le Collège Fenelon est un établissement où il fait bon vivre, étudier et travailler : un cadre
                lumineux,
                coloré, dynamique, à l’image de la pédagogie qui y est mise en œuvre. Un espace vaste et aéré, qui
                contribue au caractère paisible du climat scolaire et permet d’étudier dans des bonnes conditions.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Historique du profil desktop-->
    <section class="d-none d-md-block container">
      <h2 class="text-center mt-4 pb-4">Historique du profil</h2>
      <div class="row">
        <div class="col-6 mb-4">
          <div class="card p-3">
            <img src="img/classe1.jpg" class="card-img-top" alt="photo d'une classe">
            <div class="card-body">
              <h4 class="card-title hote-voy">Hôte</h4>
              <p class="card-text">Nous avons reçu pour la première fois en Mai 2020 une classe de 2nde de 15 élèves du
                collège Agustiniano de Madrid pour
                une période de deux semaines.</p>
            </div>
          </div>
        </div>
        <div class="col-6 mb-4">
          <div class="card p-3">
            <img src="img/classe2.jpg" class="card-img-top" alt="photo d'une classe">
            <div class="card-body">
              <h4 class="card-title hote-voy">Hôte</h4>
              <p class="card-text">En octobre 2019, les élèves de 3ème du collège Brandenburg de Berlin ont eu le
                plaisir de passer une
                semaine dans la classe de nos 5èmes, une très bonne expérience.</p>
            </div>
          </div>
        </div>
        <div class="col-6 mb-4">
          <div class="card p-3">
            <img src="img/classe3.jpg" class="card-img-top" alt="photo d'une classe">
            <div class="card-body">
              <h4 class="card-title hote-voy">Voyage</h4>
              <p class="card-text">Nos élèves de 4ème ont pu profiter d'un séjour linguistique exceptionnel pendant 2
                semaines en immersion dans une école élémentaire près de Quito, en Équateur. </p>
            </div>
          </div>
        </div>
        <div class="col-6 mb-4">
          <div class="card p-3">
            <img src="img/classe4.jpg" class="card-img-top" alt="photo d'une classe">
            <div class="card-body">
              <h4 class="card-title hote-voy">Voyage</h4>
              <p class="card-text">Pour une deuxième année consécutive une classe de 4ème a pu de nouveau profiter d'une
                immersion dans un collège en banlieue de Valence pendant 2 semaines.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="d-flex justify-content-center">
        <button class="btn btn-form mb-2" type="button" data-toggle="modal" data-target="#exampleModal"
          data-whatever="@mdo" aria-expanded="false" aria-controls="avis">
          Voir plus
        </button>
      </div>
    </section>

    <!-- Historique du profil mobile -->
    <div class="d-lg-none container">
      <h3 class="text-center mt-4 pb-4">Historique du profil</h3>
      <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/classe1.jpg" class="d-block w-100" alt="tableau">
            <div class="carousel-caption d-md-block bcg-profile">
              <p><span class="hote-voy">Hôte :</span> Nous avons reçu pour la première fois en Mai 2020 une classe de
                2nde de 15 élèves du
                collège Agustiniano de Madrid.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/classe2.jpg" class="d-block w-100" alt="tableau">
            <div class="carousel-caption d-md-block bcg-profile ">
              <p><span class="hote-voy">Hôte :</span> En octobre 2019, les élèves de 3ème du collège Brandenburg de
                Berlin ont passé une
                semaine dans la classe de nos 5èmes.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/classe3.jpg" class="d-block w-100" alt="tableau">
            <div class="carousel-caption d-md-block bcg-profile">
              <p><span class="hote-voy">Voyage :</span> Nos élèves de 4ème ont pu profiter d'un séjour linguistique de 2
                semaines en immersion dans une école élémentaire près de Quito.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/classe4.jpg" class="d-block w-100" alt="tableau">
            <div class="carousel-caption d-md-block bcg-profile">
              <p><span class="hote-voy">Voyage :</span> Pour une 2ème année consécutive une classe de 4ème a pu de
                nouveau profiter d'une
                immersion dans un collège en banlieue de Valence.</p>

            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      <hr class="mt-5 mb-5">
    </div>

    <!-- AVIS / Tapez votre commentaire desktop -->
    <div class="container-fluid bg-light pb-2">
      <div class="container mt-5">
        <h2 class="text-center mt-3 mt-md-0">Avis</h2>
        <div class="row d-flex justify-content-around">
          <p class="text-left border col-md-5 col-sm-12"><span>Rémi Gasnier </span><img src="img/5-etoiles.png"
              class="stars" alt="étoiles"><br> Je suis venu avec une classe de 2nde dans ce collège en mars 2016 et j'en
            garde un
            excellent souvenir. Du cadre à la pédagogie, tout est extraordinaire.</p>
          <p class="text-left border col-md-5 col-sm-12"><span>Patrice POISSONNET</span><img src="img/5-etoiles.png"
              class="stars" alt="étoiles"><br>Nous avons passé seulemnt 5 petits jours avec mes élèves de 6ème, nous
            avons été très bien accueillis, expérience très enrichissante.
          </p>
        </div>
        <div class="collapse" id="avis">
          <div>
            <div class="row d-flex justify-content-around">
              <p class="text-left border col-md-5 col-sm-12"><span>Brigitte Assier</span><img src="img/5-etoiles.png"
                  class="stars" alt="étoiles"><br> Quel beau lycée! Et le service pédagogique est au
                top. J'organise déjà une deuxième immersion avec des élèves de 3ème cette fois-ci.</p>
              <p class="text-left border col-md-5 col-sm-12"><span>Maheva Dessart</span><img src="img/5-etoiles.png"
                  class="stars" alt="étoiles"><br> Avec mes élèves de 5ème, nous avons intégré une classe en
                spécialité langues. Mes élèves ont pu être initiés à l'espagnol et on est tous revenus avec le plein d'énergie.</p>
            </div>
          </div>
        </div>
        <div class="d-flex justify-content-center">
          <button class="btn btn-form" type="button" data-toggle="collapse" data-target="#avis" aria-expanded="false"
            aria-controls="avis">
            Voir plus
          </button>
        </div>
        <form>
          <div class="mt-2 form-group text-center container">
            <label for="exampleFormControlTextarea1">Entrez votre commentaire ici</label>
            <textarea class="form-control commentaire" id="exampleFormControlTextarea1" rows="5"></textarea>
            <button data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo" class="btn btn-form mt-3"
              type="button" aria-expanded="false">
              Poster
            </button>
          </div>
        </form>
      </div>
    </div>
  </main>

  <!--MODAL INSCRIPTION-->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title" id="exampleModalLabel">Inscription</h1>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div>
            <!-- Enseignant / Etablissement -->
            <div class="form-check">
              <form>
                <fieldset class="form-group">
                  <form class="row">
                    <legend class="col-form-label col-sm-4 pt-0">Vous êtes :</legend>
                    <div class="col-sm-8">
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1"
                          checked>
                        <label class="form-check-label" for="gridRadios1">
                          Enseignant
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                        <label class="form-check-label" for="gridRadios2">
                          Établissement
                        </label>
                      </div>
                    </div>
                  </form>
                </fieldset>
              </form>
            </div>
            <!--NOM-->
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Nom:</label>
              <input type="text" class="form-control" id="nom">
            </div>
            <!--PRENOM-->
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Prénom:</label>
              <input type="text" class="form-control" id="prenom">
            </div>
            <!--Adresse mail-->
            <div class="form-group">
              <label for="message-text" class="col-form-label">Adresse mail:</label>
              <input type="email" class="form-control" id="mail">
            </div>
            <!--Mot de passe-->
            <div class="form-group">
              <label for="message-text" class="col-form-label">Mot de passe:</label>
              <input type="password" class="form-control" id="mdp">
            </div>
            <!--Répéter le Mot de passe-->
            <div class="form-group">
              <label for="message-text" class="col-form-label">Répéter le Mot de passe:</label>
              <input type="password" class="form-control" id="repeat-mdp">
            </div>
            <!-- Pays -->
            <div class="form-group row mt-5">
              <label for="inputEmail3" class="col-sm-2 col-form-label">Pays</label>
              <div class="col-sm-10">
                <select class="form-control">
                  <option>France</option>
                  <option>England</option>
                  <option>España</option>
                  <option>Ecuador</option>
                  <option>Ireland</option>
                  <option>Mayotte</option>
                </select>
              </div>
            </div>
            <!-- Langue Enseignée -->
            <div class="form-group row mt-5">
              <label for="inputEmail3" class="col-sm-2 col-form-label">Langue enseignée</label>
              <div class="col-sm-10">
                <select class="form-control">
                  <option>Français</option>
                  <option>English</option>
                  <option>Español</option>
                </select>
              </div>
            </div>
            <!-- J'ai lu et J'accepte les termes et conditions-->
            <div class="mt-5 text-center">
              <input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck3" required>
              <label class="form-check-label" for="invalidCheck3">
                J'ai lu et j'accepte <a href="/mentionapropos.html#droits">les termes et conditions</a>
              </label>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Pas maintenant</button>
          <a href="#" type="button" class="btn vert">S'inscrire</a>
        </div>
      </div>
    </div>
  </div>

  <!--FOOTER-->
  <footer class="page-footer font-small mdb-color pt-2">
    <div class="container text-center">
      <div class="row text-center text-md-left d-flex justify-content-center">

        <!-- Grid column -->
        <div class="col-12 col-md-4 bas mx-auto" id="info">
          <h6 class="text-uppercase font-weight-bold pt-2">Mentions Légales</h6>
          <div class="cache">
            <p><a href="mentionsapropos.html#cgu" class="couleur">CGU</a></p>
            <p><a href="mentionsapropos.html#politiqueconfidentialite" class="couleur">Politique de confidentialité</a>
            </p>
            <p><a href="mentionsapropos.html#droits" class="couleur">Droits d'auteur et droits de reproduction</a></p>
            <p><a href="mentionsapropos.html#accessibilite" class="couleur">Accessibilité du site</a></p>
          </div>
        </div>
        <hr class="w-100 clearfix d-block d-md-none">
        <!-- Grid column -->
        <div class="col-12 col-md-4 bas">
          <h6 class="text-uppercase font-weight-bold pt-2">À Propos</h6>
          <div class="cache">
            <p><a href="mentionsapropos.html#nous" class="couleur">Qui sommes-nous ?</a></p>
            <p><a href="mentionsapropos.html#rejoignez" class="couleur">Nous rejoindre</a></p>
            <p><a href="mentionsapropos.html#contacter" class="couleur">Contactez-nous</a></p>
          </div>
        </div>
        <hr class="w-100 clearfix d-block d-md-none">
        <!-- Grid column -->
        <div class="col-12 col-md-4 mx-auto  bas">
          <h6 class="text-uppercase font-weight-bold pt-2">Contact</h6>
          <div class="cache">
            <p><i class="fas fa-home mr-3"></i> 18 Rue Geoffroy l'Asnier, 75004 Paris</p>
            <p><i class="fas fa-envelope mr-3"></i> admin@echange-scolaire.com</p>
            <p><i class="fas fa-phone mr-3"></i> 01 42 58 75 88</p>
          </div>
        </div>
      </div>

      <hr class="w-100 clearfix d-block d-md-none">

      <!-- FIN DE PAGE -->
      <div class="row d-flex align-items-center bg-transparent">
        <div class="col-5 col-lg-8 pt-2">
          <!--Copyright-->
          <p class="text-center text-md-left">© 2020 Copyright:
            <a href="https://www.echange-scolaire.com/" class="copyright couleur">
              <strong>echange-scolaire.com</strong>
            </a>
          </p>
        </div>

        <!-- Grid column -->
        <div class="col-7 col-lg-4 ml-lg-0 pt-2">
          <!-- Social buttons -->
          <div class="text-center text-md-right">
            <ul class="list-unstyled list-inline">
              <li class="list-inline-item">
                <a target="_blank" href="https://www.facebook.com/" class="btn-floating btn-sm rgba-white-slight mx-1">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a target="_blank" href="https://twitter.com/" class="btn-floating btn-sm rgba-white-slight mx-1">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a target="_blank" href="https://plus.google.com/" class="btn-floating btn-sm rgba-white-slight mx-1">
                  <i class="fab fa-google-plus-g"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a target="_blank" href="https://www.linkedin.com/" class="btn-floating btn-sm rgba-white-slight mx-1">
                  <i class="fab fa-linkedin-in"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </footer>
</body>

</html>