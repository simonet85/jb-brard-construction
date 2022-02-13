<section class="about" id="about">

   @if (Request::is('index') || Request::is('/'))
         <h1 class="heading"> Accueil </h1>
         @include('partials.video')
      @elseif (Request::is('about'))
         <h1 class="heading"> à propos  </h1>
         <div class="row">
 
            <div class="video">
               <img  class="rounded mx-auto d-block" src="/storage/cover_images/jp-brad.png" />
               <h3  class="heading mt-4">
                  Jean-Pierre BRARD<br> <span>Conseiller d’Honneur</span> 
               </h3>
               {{-- <h1 class="heading mt-4"> Jean-Pierre BRARD  </h1>
               <p style="font-size: 1.5rem;">Conseiller d’Honneur</p> --}}
            </div>
             
             <div class="content">
                <h3>Nous construisons tout ce qu'il y a de mieux dont vous aviez besoin !</h3>
                
                <p>Fort, d’une expérience et d’une maîtrise technique d’experts issus des grands groupes du bâtiment et des Travaux Publics français (BOUYGUES Constructions, VINCI Constructions), JP BRARD Constructions met sa passion au service de vos projets de construction, dans les domaines les plus exigeants que sont le Génie Civil et les Travaux Spéciaux ou Travaux sous-contraintes.
               </p>
               
                {{-- <a href="{{url('/about')}}" class="btn">en savoir plus</a> --}}
             </div>
        
          </div>
        
          <div class="box-container">
        
             <div class="box">
                <h3>10+</h3>
                <p>années d'expérience</p>
             </div>
        
             <div class="box">
                <h3>1500+</h3>
                <p>projets terminés</p>
             </div>
        
             <div class="box">
                <h3>790+</h3>
                <p>clients satisfaits</p>
             </div>
        
             <div class="box">
                <h3>450+</h3>
                <p>travailleurs actifs</p>
             </div>
        
          </div>
        
      @elseif (Request::is('services'))
         <h1 class="heading"> Services  </h1>
         
         @include('partials.video')
      @elseif (Request::is('blog'))
         <h1 class="heading"> Blog  </h1>
         
         @include('partials.video')
      @else 
         <h1 class="heading"> Contact  </h1>   
         @include('partials.video')
   @endif

 

 </section>