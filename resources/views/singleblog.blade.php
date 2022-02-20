@extends('layouts.master')

@section('content')

<div class="contact-info">

   <div id="close-contact-info" class="fas fa-times"></div>

   <div class="share">
      <a href="#" class="fab fa-facebook-f"></a>
      <a href="#" class="fab fa-twitter"></a>
      <a href="#" class="fab fa-instagram"></a>
      <a href="#" class="fab fa-linkedin"></a>
   </div>

   <div class="info">
      <i class="fas fa-phone"></i>
      <h3>phone number</h3>
      <p>+123-456-7890</p>
      <p>+111-222-3333</p>
   </div>


   <div class="info">
      <i class="fas fa-envelope"></i>
      <h3>email address</h3>
      <p>shaikhanas@gmail.com</p>
      <p>anasbhai@gmail.com</p>
   </div>

   <div class="info">
      <i class="fas fa-map-marker-alt"></i>
      <h3>office address</h3>
      <p>mumbai, india - 400104</p>
   </div>



</div>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

   <div class="swiper home-slider">

      <div class="swiper-wrapper">

         <section class="swiper-slide slide" style="background: url({{url('images/home-slide-1.jpg')}}) no-repeat;">
            <div class="content">
               <h3>nous fournissons le meilleur service</h3>
               <p>Nous avons une équipe de personnes qualifiées avec différentes spécialités d'experts .</p>
               <a href="{{url('/contact')}}" class="btn">Contactez nous</a>
            </div>
         </section>

         <section class="swiper-slide slide" style="background:  url({{url('images/home-slide-2.jpg')}}) no-repeat;">
            <div class="content">
               <h3>donner vie à un rêve</h3>
               <p>La variété des tâches qui contribuent à créer un cadre de vie sûr et confortable.</p>
               <a href="{{url('/contact')}}" class="btn">Contactez nous</a>
            </div>
         </section>

         <section class="swiper-slide slide" style="background: url({{url('images/home-slide-3.jpg')}}) no-repeat;">
            <div class="content">
               <h3>du concept à la création</h3>
               <p>L'expertise de tous nos constructeurs qualifiés et de nos employés assidus pour offrir l'excellence en termes de services fournis.</p>
               <a href="{{url('/contact')}}" class="btn">Contactez nous</a>
            </div>
         </section>

      </div>

      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>

   </div>

</section>

<!-- home section ends -->

<!-- blog section starts  -->

<section class="services blog__row" id="services">

   <div class="blog__container">

      <div class="blog__card">
              <h2 class="blog__heading">{{$post->title}}</h2>
              
              <img src="/storage/cover_images/{{$post->cover_image}}"  alt="{{$post->title}}" class="single__img">
              <div class="blog__card-body">
                  <p>{!!$post->body!!}
                  </p>
                </div>
                <a href="{{url('/blog')}}" class="blog__btn text-decoration-none">Retour</a>
     </div>

   </div>

</section>

<!-- blog section ends -->

<!-- parallax section starts  -->

@include("partials.parallax")
<!-- parallax section ends -->

<section class="logo-container">
   <div class="swiper logo-slider">
      <div class="swiper-wrapper">
         <div class="swiper-slide slide"><img src="images/client-logo-1.png" alt=""></div>
         <div class="swiper-slide slide"><img src="images/client-logo-2.png" alt=""></div>
         <div class="swiper-slide slide"><img src="images/client-logo-3.png" alt=""></div>
         <div class="swiper-slide slide"><img src="images/client-logo-4.png" alt=""></div>
         <div class="swiper-slide slide"><img src="images/client-logo-5.png" alt=""></div>
         <div class="swiper-slide slide"><img src="images/client-logo-6.png" alt=""></div>
      </div>
   </div>
</section>

<!-- client logo section ends -->

@endsection