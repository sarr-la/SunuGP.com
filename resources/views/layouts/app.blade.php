<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SunuGp.com</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <link href="{{asset('css/app.css')}}" rel="stylesheet" />

  <!-- Custom fonts for this template -->

  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="{{asset('css/all.css')}}" rel="stylesheet" />
  {{--<link href="css/agency.min.css" rel="stylesheet">--}}
</head>
<body id="page-top">
  <br><br><br><br><br>
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">SunuGP.com</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">       
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ml-auto">
        <li class="nav-item">
            <a id="Information" class="nav-link js-scroll-trigger" href="{{route('information')}}">Information</a>
          </li>
          @guest
          <li class="nav-item">
              <a class="nav-link" href="{{ route('login') }}">Se connecter</a>
          </li>
          @if (Route::has('register'))
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('register') }}">Créer un compte</a>
              </li>
          @endif
      @else

                <a class="dropdown-item" href="">{{Auth::user()->name}}</a>
            @if(Auth::user()->roles =='admin')
                <a class="dropdown-item" href="{{route('Trajets')}}">Trajets</a>
                    <a class="dropdown-item" href="{{route('Reservations')}}">Reservations</a>
                @endif

          <li class="nav-item dropdown">
              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                  {{ Auth::user()->name }} <span class="caret"></span>
              </a>

              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="{{ route('logout') }}"
                      onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                      Deconnexion
                  </a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                  </form>
              </div>
          </li>
      @endguest
        </ul>
      </div>
    </div>
  </nav>
<div class="container">


@yield("content")

<!--Section: Contact v.2-->
<section class="mb-4">

    <!--Section heading-->
    <h2 class="h1-responsive font-weight-bold text-center my-4">Contactez nous!</h2>
    <hr>
    <!--Section description-->
    <p class="text-center w-responsive mx-auto mb-5"><marquee>Avez vous des questions? N'hésitez pas de nous contacter!</marquee></p>

    <div class="row">

    <form action="{{route('store_Contact')}}" method="post">
@csrf
<div>
<input type="text" name="prenom" class="form-control" placeholder="Votre prénom">
</div>
<div>
<input type="text" name="nom" class="form-control" placeholder="Votre nom">
</div>
<div>
<input type="text" name="email" class="form-control" placeholder="Votre email">
</div>
        <div>
            <input type="text" name="numero_de_telephone" class="form-control" placeholder="Votre numéro de de téléphone">
        </div>
<div>
<input type="text" name="votre_sujet" class="form-control" placeholder="Objet">
</div>
<div>
<textarea id="votre_message" name="votre_message" cols="30" rows="10" class="form-control" placeholder="Message"></textarea>
</div><br>
<div>
<button class="btn btn-primary">Envoyer</button>
</div>
</form><div class="container"><br><br><br><br>


 </section>


    <script src="{{ asset('node_modules/tinymce/tinymce.js') }}"></script>
    <script>
        tinymce.init({
            selector:'textarea.description',
            width: 900,
            height: 300
        });
    </script>

<!-- contact -->
<div>
<h4 class="text-uppercase font-weight-bold  text-center py-3 ">Contact</h4><hr>
        <p>
          <i class="fas fa-home mr-3 text-center "></i> Dakar, Sénégal</p>
        <p>
          <i class="fas fa-envelope mr-3"></i>sarrabdoulayeyakhine7@gmail.com</p>
        <p>
          <i class="fas fa-phone mr-3"></i> +221773096782</p>
        <p>
          <i class="fas fa-print mr-3"></i> +221767844404</p>

      </div><hr>
  <!-- Copyright -->
    <footer>
  <div class="footer-copyright text-center py-3"><strong>© 2020 </strong>Tous droits réservés par les jeunes développeurs de <strong>GalimaTech:</strong>
    <a  href="{{route('home')}}"> <strong>SunuGP.com </strong></a>
  </div>
  <!-- Copyright -->
</footer>

<!-- Footer -->
  <script src="{{asset('js/app.js')}}"></script>
</body>

</html>
