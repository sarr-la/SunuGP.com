@extends("layouts.app")
@section("content")
  <!-- Header -->
  <header class="masthead ">
    <div class="container">
      <div class="intro-text">
          <div class="intro-heading text-uppercase"><marquee>Bienvenue dans notre site web!-Ravis de vous rencontrer!-Merci pour votre confiance renouvelée!-Confidentialité-Sûreté-Fierté SunuGP.com...</marquee></div>
      </div>
    </div>
  </header>
  <!-- Services -->
  <section class="page-section" id="services">
      <div class="row text-center">
        <div class="col-md-4">
          <span class="fa-stack fa-4x">
            <i class="fas fa-circle fa-stack-2x text-primary"></i>
            <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>
          </span>
          <h3 class="service-heading">Qui est là...</h3>
          <hr>
          <p class="text-muted">Comme prévu quelle heure, quel jour, quel mois...,
            pour que votre bagage soit à votre destination preferée!
            Où que vous soyez
            , nous sommes à votre disposition.
            C'est votre satisfaction qui nous donne la joie de vivre. </p>
        </div>
        <div class="col-md-4">
          <span class="fa-stack fa-4x">
            <i class="fas fa-circle fa-stack-2x text-primary"></i>
            <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
          </span>
          <h3 class="service-heading">Est ce que vous le savez?</h3>
          <hr>
          <p class="text-muted">Donner un colis à un porteur,
            c'est laisser son empreinte avec ce dernier.
            Il faut bien mettre votre cadeau dans les mains de celui qui en connait bien sa vraie valeur. </p>
        </div>
        <div class="col-md-4">
          <span class="fa-stack fa-4x">
            <i class="fas fa-circle fa-stack-2x text-primary"></i>
            <i class="fas fa-lock fa-stack-1x fa-inverse"></i>
          </span>
          <h3 class="service-heading">100% de succes!</h3>
          <hr>
          <p class="text-muted">Oui un curcuit de bagage, plus proche de vous, c'est bien possible avec <strong >SunuGP.com</strong></p>
        </div>
  </section>
  <section class="bg-light page-section" id="portfolio">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase"><marquee>Les derniers trajets sont disponibles!</marquee></h2>
          <hr>
          <h3 class="section-subheading text-muted">Soyez prêts!</h3>
        </div>
      </div>
      <div class="row">
        @foreach($trajets as $trajet)
        <div class="col-md-4 col-sm-6 portfolio-item">
        <a class="portfolio-link"data-toggle="modal" href="#portfolioModal1" >
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fas fa-plus fa-3x"></i>
              </div>
              </div>
              <img class="img-fluid" src="{{$trajet->image}}" alt=""><hr>

              <div>
                <p><a href="{{route('ajouter_trajet')}}"><strong>Ajouter un trajet</strong></a></p><hr>
                 <p><a href="{{route('ajouter_reservation')}}"><strong>Créer une reservation</strong></a></p>
             </div>

          </a>
            <hr>
          <div class="portfolio-caption">
            <p><span><strong>Date de départ:</strong>{{$trajet->date_de_depart}}</span></p>
            <p><span><strong>Date d'arrivée:</strong>{{$trajet->date_darrivee}}</span></p>
            <hr>
            <p><span><strong>Lieu de départ:</strong>{{$trajet->lieu_de_depart}}</span></p>
            <p><span><strong>Lieu d'arrivée:</strong>{{$trajet->lieu_darrivee }}</span></p>
            <hr>
            <p><span><strong>Type de véhicule:</strong>{{$trajet->type_de_vehicule}}</span></p>
              <p><span><strong>Matricule:</strong>{{$trajet->matricule}}</span></p>
            <p class="text-muted"></p>
          </div>
        </div>

        @endforeach

      </div>
    </div>

  </section>
  <!-- Portfolio Grid -->



  @endsection
