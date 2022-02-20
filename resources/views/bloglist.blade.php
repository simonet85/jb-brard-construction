@extends('layouts.master')

@section('content')

<!-- header section ends -->

@include("partials.slider")

<!-- about section starts  -->

@include('partials.about')

<!-- about section ends -->

<!-- blog section starts  -->

<section class="services blog__row" id="services">

   <h1 class="heading"> Articles </h1>

   <div class="blog__container">
      @if (count($posts) > 0)
      @foreach ($posts as $post)
      {{-- {{dd( $posts )}} --}}
      <div class="blog__card">
              <h2 class="blog__heading">{{$post->title}}</h2>
              
              <div class="blog__card-body">
               <img style="height:200px;" src="/storage/cover_images/{{$post->cover_image}}" alt="{{$post->title}}">
                 
                  <p>{!! Str::words($post->body,75) !!}</p>

                </div>
                <a class="blog__btn text-decoration-none"  href="/singleblog/{{$post->id}}">Lire plus</a>
                {{-- <small class="blog__author">Rédigé le {{$post->created_at}} par {{$user_name}}</small> --}}
     </div>

         @endforeach
         {{-- {{ $posts->links()}} --}}

         <div class="mt-4">
            {!! $posts->links() !!}
        </div>
      @else
         <p>Aucun poste trouvé.</p>
      @endif

   </div>

</section>

<!-- blog section ends -->

<!-- parallax section starts  -->

<section class=" parallax" id="projects">

   <div class="box-container parallax__box">
      <h1 class="parallax__heading"> Nous bâtissons votre rêve </h1>
      <p class="parallax__text">
         Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ex consectetur, itaque quos aliquid sit alias impedit officiis ullam tempore voluptate minus dolorem exercitationem quia animi facilis maiores obcaecati nesciunt. Aliquam.
      </p>
      <a href="{{url('/contact')}}" class="parallax__btn text-decoration-none">contactez Nous</a>

   </div>

</section>


@endsection