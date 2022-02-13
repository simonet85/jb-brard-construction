@extends('layouts.master')

@section('content')

<!-- header section ends -->

@include("partials.slider")

<!-- about section starts  -->

@include('partials.about')

<!-- about section ends -->

<!-- services section starts  -->


<!-- contact section starts  -->

<section class="contact" id="contact">

   <h1 class="heading"> Contactez nous </h1>

   <div class="row">

      <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15076.89592087332!2d72.8319697277345!3d19.14167056419224!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b63aceef0c69%3A0x2aa80cf2287dfa3b!2sJogeshwari%20West%2C%20Mumbai%2C%20Maharashtra%20400047!5e0!3m2!1sen!2sin!4v1641716772852!5m2!1sen!2sin" allowfullscreen="" loading="lazy"></iframe>

      <form method="POST" action="{{route("contact")}}">
         @csrf
         <h3>contactez-nous</h3>
         
         @if ($errors->any())
         <div class="alert alert-danger">
             <ul>
                 @foreach ($errors->all() as $error)
                     <li>{{ $error }}</li>
                 @endforeach
             </ul>
         </div>
         @endif

         <input 
            type="text" 
         
            value="{{ old('name') }}"
            placeholder="Nom" 
            class="box" 
            name="name"  
         >

         <input 
            type="email" 
            
            value="{{ old('email') }}"
            placeholder="email" 
            class="box" name="email" 
         >

         <input 
            type="number" 
            value="{{ old('phone') }}"
            placeholder="Téléphone" 
            class="box" 
            name="phone" 
         >
         <textarea 
            placeholder="message" 
            value="{{ old('message') }}"
            class="box" 
            id="" cols="30" 
            rows="10" 
            name="message" 
         ></textarea>

         <button type="submit" class="btn">Envoyer un message</button>
      </form>

   </div>

</section>

<!-- contact section ends -->



@endsection