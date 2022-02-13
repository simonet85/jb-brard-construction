@extends('layouts.master')

@section('content')

<!-- header section ends -->

@include("partials.slider")

<!-- about section starts  -->

<!-- about section starts  -->

@include('partials.about')

<!-- about section ends -->


<!-- Team section starts  -->

<section class="team" id="team">

   <h1 class="heading">Membres de l'équipe</h1>

   <div class="swiper team-slider">

      <div class="swiper-wrapper">
{{-- 
         <div class="swiper-slide slide">
            <div class="image">
               <img src="/storage/cover_images/jp-brad.png" alt="jpbrad">
               <div class="share">
                  <a href="#" class="fab fa-facebook-f"></a>
                  <a href="#" class="fab fa-twitter"></a>
                  <a href="#" class="fab fa-instagram"></a>
                  <a href="#" class="fab fa-linkedin"></a>
               </div>
            </div>
            <div class="content">
               <h3>Jean Pierre BRARD</h3>
               <span>CONSEILLER D'HONNEUR JPBRARD CONSTRUCTION</span>
            </div>
         </div> --}}

         <div class="swiper-slide slide">
            <div class="image">
               <img src="/storage/cover_images/nehan.png" 
               alt="Mathias NEHAN">
               <div class="share">
                  <a href="#" class="fab fa-facebook-f"></a>
                  <a href="#" class="fab fa-twitter"></a>
                  <a href="#" class="fab fa-instagram"></a>
                  <a href="#" class="fab fa-linkedin"></a>
               </div>
            </div>
            <div class="content">
               <h3>Mathias NEHAN</h3>
               <span>PRESIDENT / DIRECTEUR GÉNÉRALE</span>
            </div>
         </div>

         <div class="swiper-slide slide">
            <div class="image">
               <img src="/storage/cover_images/Beatrice-daranco.png" 
               alt="Beatrice d'aronco">
               <div class="share">
                  <a href="#" class="fab fa-facebook-f"></a>
                  <a href="#" class="fab fa-twitter"></a>
                  <a href="#" class="fab fa-instagram"></a>
                  <a href="#" class="fab fa-linkedin"></a>
               </div>
            </div>
            <div class="content">
               <h3>Béatrice D’ARONCO</h3>
               <span>DIRECTRICE GENERALE ADJOINTE</span>
            </div>
         </div>

         <div class="swiper-slide slide">
            <div class="image">
               <img src="/storage/cover_images/Yves-Constant-TETCHI.png" 
               alt="Yves Constant TETCHI">
               <div class="share">
                  <a href="#" class="fab fa-facebook-f"></a>
                  <a href="#" class="fab fa-twitter"></a>
                  <a href="#" class="fab fa-instagram"></a>
                  <a href="#" class="fab fa-linkedin"></a>
               </div>
            </div>
            <div class="content">
               <h3>Yves Constant TETCHI</h3>
               <span>RESPONSABLE DES RESSOURCES HUMAINES</span>
            </div>
         </div>

         <div class="swiper-slide slide">
            <div class="image">
               <img src="/storage/cover_images/Hugues-Evrard-DOHO.png" 
               alt="Hugues Evrard DOHO">
               <div class="share">
                  <a href="#" class="fab fa-facebook-f"></a>
                  <a href="#" class="fab fa-twitter"></a>
                  <a href="#" class="fab fa-instagram"></a>
                  <a href="#" class="fab fa-linkedin"></a>
               </div>
            </div>
            <div class="content">
               <h3>Hugues Evrard DOHO</h3>
               <span>RESPONSABLE LOGISTIQUE ET DES TRAVAUX</span>
            </div>
         </div>

         <div class="swiper-slide slide">
            <div class="image">
               <img src="/storage/cover_images/Esther-TURPIN.png" 
               alt="Esther TURPIN">
               <div class="share">
                  <a href="#" class="fab fa-facebook-f"></a>
                  <a href="#" class="fab fa-twitter"></a>
                  <a href="#" class="fab fa-instagram"></a>
                  <a href="#" class="fab fa-linkedin"></a>
               </div>
            </div>
            <div class="content">
               <h3>Esther TURPIN</h3>
               <span>RESPONSABLE FACTURATION RECOUVREMENT</span>
            </div>
         </div>

         <div class="swiper-slide slide">
            <div class="image">
               <img src="/storage/cover_images/Marie-François-HOUFFOUE.png" 
               alt="Marie François HOUFFOUE">
               <div class="share">
                  <a href="#" class="fab fa-facebook-f"></a>
                  <a href="#" class="fab fa-twitter"></a>
                  <a href="#" class="fab fa-instagram"></a>
                  <a href="#" class="fab fa-linkedin"></a>
               </div>
            </div>
            <div class="content">
               <h3>Marie-françois HOUFFOUE</h3>
               <span>CHARGE MARKETING & COMMUNICATION</span>
            </div>
         </div>
         <div class="swiper-slide slide">
            <div class="image">
               <img src="/storage/cover_images/Aristide-PALE.png" 
               alt="Aristide PALE">
               <div class="share">
                  <a href="#" class="fab fa-facebook-f"></a>
                  <a href="#" class="fab fa-twitter"></a>
                  <a href="#" class="fab fa-instagram"></a>
                  <a href="#" class="fab fa-linkedin"></a>
               </div>
            </div>
            <div class="content">
               <h3>Aristide PALE</h3>
               <span>CHARGE MARKETING & COMMUNICATION</span>
            </div>
         </div>
         <div class="swiper-slide slide">
            <div class="image">
               <img src="/storage/cover_images/Marie-COQUILLAT.png" 
               alt="Esther TURPIN">
               <div class="share">
                  <a href="#" class="fab fa-facebook-f"></a>
                  <a href="#" class="fab fa-twitter"></a>
                  <a href="#" class="fab fa-instagram"></a>
                  <a href="#" class="fab fa-linkedin"></a>
               </div>
            </div>
            <div class="content">
               <h3>Marie COQUILLAT</h3>
               <span>CHARGE MARKETING & COMMUNICATION</span>
            </div>
         </div>
         
      </div>

   </div>

</section>

<!-- Team section ends -->


<!-- projects section starts  -->

<section class="projects" id="projects">

   <h1 class="heading"> nos réalisations </h1>

   <div class="box-container">

      <a href="images/project-1.jpg" class="box text-decoration-none">
         <div class="image">
            <img src="images/project-1.jpg" alt="">
         </div>
         <div class="content">
            <div class="info">
               <h3>dream home</h3>
               <p>construction, design</p>
            </div>
            <i class="fas fa-plus"></i>
         </div>
      </a>

      <a href="images/project-2.jpg" class="box text-decoration-none">
         <div class="image">
            <img src="images/project-2.jpg" alt="">
         </div>
         <div class="content">
            <div class="info">
               <h3>maison de rêve</h3>
               <p>construction, design</p>
            </div>
            <i class="fas fa-plus"></i>
         </div>
      </a>

      <a href="images/project-3.jpg" class="box text-decoration-none">
         <div class="image">
            <img src="images/project-3.jpg" alt="">
         </div>
         <div class="content">
            <div class="info">
               <h3>Duplex</h3>
               <p>construction, design</p>
            </div>
            <i class="fas fa-plus"></i>
         </div>
      </a>

      <a href="images/project-4.jpg" class="box text-decoration-none">
         <div class="image">
            <img src="images/project-4.jpg" alt="">
         </div>
         <div class="content">
            <div class="info">
               <h3>Villas</h3>
               <p>construction, design</p>
            </div>
            <i class="fas fa-plus"></i>
         </div>
      </a>

      <a href="images/project-5.jpg" class="box text-decoration-none">
         <div class="image">
            <img src="images/project-5.jpg" alt="">
         </div>
         <div class="content">
            <div class="info">
               <h3>maison de rêve</h3>
               <p>construction, design</p>
            </div>
            <i class="fas fa-plus"></i>
         </div>
      </a>

      <a href="images/project-6.jpg" class="box text-decoration-none">
         <div class="image">
            <img src="images/project-6.jpg" alt="">
         </div>
         <div class="content">
            <div class="info">
               <h3>maison de rêve</h3>
               <p>construction, design</p>
            </div>
            <i class="fas fa-plus"></i>
         </div>
      </a>

   </div>

</section>

<!-- projects section ends -->

<!-- blog section starts  -->

<section class="services blog__row" id="services">

   <h1 class="heading"> notre blog </h1>

   <div class="blog__container">
      @if (count($posts) > 0)
      @foreach ($posts as $post)
      <div class="blog__card">
              <h2 class="blog__heading">{{$post->title}}</h2>
              
              <div class="blog__card-body">
               <img style="height:200px;" src="/storage/cover_images/{{$post->cover_image}}" alt="{{$post->title}}">
                 
                  <p>{!! Str::words($post->body,75) !!}</p>

                </div>
                <a class="blog__btn text-decoration-none"  href="/singleblog/{{$post->id}}">Lire plus</a>
                <small class="blog__author">Rédigé le {{$post->created_at}} par {{$post->user->name}}</small>
     </div>

         @endforeach
         {{-- {{ $posts->links()}} --}}

         <div class="blog__pagination">
            {!! $posts->links() !!}
        </div>
      @else
         <p>Aucun poste trouvé.</p>
      @endif

   </div>

</section>

<!-- blog section ends -->



@endsection