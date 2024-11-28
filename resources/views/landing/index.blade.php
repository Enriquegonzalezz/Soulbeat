@extends('layouts.base')

@section('title') Soulbeat @php $css = "landing" @endphp @endsection

@section('content')
  <div class="wrapper cambio">
    <header class="header">
      <nav class="logo">
       <svg id="logopapa" width="200px" viewBox="0 0 389.66666666666663 120.5206393829252" class="looka-1j8o68f" fill = "black"><defs id="SvgjsDefs1111" fill = 'black' ></defs><g id="SvgjsG1112" featurekey="xG21Y3-0" transform="matrix(1.1457562995092563,0,0,1.1457562995092563,10.108153303647448,18.700712420824527)" fill="black" ><path xmlns="http://www.w3.org/2000/svg" d="M44.931,1.134c-15.861,0-54.806,5.91-25.929,56.296c12.353,21.55,21.042,31.437,26.01,31.437  c4.969,0,13.659-9.887,26.012-31.437C99.901,7.043,60.792,1.134,44.931,1.134z M59.65,49.304c0,3.564-4.095,4.844-6.729,4.844  c-3.713,0-6.726-2.167-6.726-4.844c0-2.673,3.013-4.84,6.726-4.84c1.607,0,3.083,0.406,4.241,1.08c0,0,0-9.399,0-15.722  L39.36,31.718v19.75c0,3.561-4.095,4.84-6.729,4.84c-3.714,0-6.726-2.167-6.726-4.84c0-2.678,3.011-4.844,6.726-4.844  c1.607,0,3.082,0.405,4.241,1.082c0,0,0-20.322,0-21.22c0-0.898,0.759-1.094,1.24-1.145c0.485-0.053,20.292-2.163,20.292-2.163  c0.93-0.061,1.247,0.36,1.247,1.454V49.304z" fill = 'black'></path></g><g id="SvgjsG1113" featurekey="n48U4P-0" transform="matrix(3.186742265241492,0,0,3.186742265241492,121.47036213234468,29.855326248307062)" fill="black" ><path d="M6.3 5.380000000000001 c1.7467 0 3.1366 0.40002 4.17 1.2 s1.55 1.9333 1.55 3.4 l-3.04 0 c-0.04 -0.72 -0.28334 -1.26 -0.73 -1.62 s-1.1367 -0.54 -2.07 -0.54 c-0.65334 0 -1.18 0.14334 -1.58 0.43 s-0.6 0.68332 -0.6 1.19 c0 0.41334 0.12334 0.71334 0.37 0.9 s0.59666 0.35332 1.05 0.49998 s1.2467 0.36 2.38 0.64 c1.1867 0.29334 2.1 0.61334 2.74 0.96 s1.1267 0.79 1.46 1.33 s0.5 1.2033 0.5 1.99 c0 0.90666 -0.24 1.7133 -0.72 2.42 s-1.18 1.2433 -2.1 1.61 s-1.96 0.55 -3.12 0.55 c-1.7733 0 -3.23 -0.44334 -4.37 -1.33 s-1.71 -2.1034 -1.71 -3.65 l0 -0.1 l3.04 0 c0 0.84 0.28666 1.49 0.86 1.95 s1.3333 0.69 2.28 0.69 c0.84 0 1.5167 -0.15 2.03 -0.45 s0.77 -0.74334 0.77 -1.33 c0 -0.38666 -0.14 -0.71332 -0.42 -0.97998 s-0.65334 -0.48332 -1.12 -0.64998 s-1.2533 -0.37666 -2.36 -0.63 c-1.28 -0.32 -2.2134 -0.66 -2.8 -1.02 s-1.0333 -0.79666 -1.34 -1.31 s-0.46 -1.13 -0.46 -1.85 c0 -0.89334 0.25666 -1.6733 0.77 -2.34 s1.1833 -1.16 2.01 -1.48 s1.68 -0.48 2.56 -0.48 z M19.08 9.38 c1.6533 0 2.96 0.50334 3.92 1.51 s1.44 2.3234 1.44 3.95 c0 1.64 -0.49 2.9566 -1.47 3.95 s-2.2766 1.49 -3.89 1.49 c-1.64 0 -2.94 -0.50334 -3.9 -1.51 s-1.44 -2.3166 -1.44 -3.93 c0 -1.6667 0.49 -2.9934 1.47 -3.98 s2.27 -1.48 3.87 -1.48 z M16.580000000000002 14.84 c0 1.0533 0.21334 1.8666 0.64 2.44 s1.0467 0.86 1.86 0.86 c0.84 0 1.47 -0.29334 1.89 -0.88 s0.63 -1.3933 0.63 -2.42 c0 -1.0667 -0.21666 -1.8867 -0.65 -2.46 s-1.0633 -0.86 -1.89 -0.86 c-0.8 0 -1.4133 0.28666 -1.84 0.86 s-0.64 1.3933 -0.64 2.46 z M29.120000000000005 9.66 l0 5.86 c0 0.8 0.12666 1.42 0.38 1.86 s0.73334 0.66 1.44 0.66 c0.78666 0 1.35 -0.23334 1.69 -0.7 s0.51 -1.2133 0.51 -2.24 l0 -5.44 l2.84 0 l0 10.34 l-2.7 0 l0 -1.44 l-0.06 0 c-0.70666 1.1467 -1.7667 1.72 -3.18 1.72 c-1.3467 0 -2.31 -0.34334 -2.89 -1.03 s-0.87 -1.7433 -0.87 -3.17 l0 -6.42 l2.84 0 z M41.06 5.720000000000001 l0 14.28 l-2.84 0 l0 -14.28 l2.84 0 z M46.14 5.720000000000001 l0.000019531 5.2 l0.04 0 c0.30666 -0.46666 0.74332 -0.84 1.31 -1.12 s1.2167 -0.42 1.95 -0.42 c1.2667 0 2.2966 0.50666 3.09 1.52 s1.19 2.32 1.19 3.92 c0 1.6133 -0.39334 2.9266 -1.18 3.94 s-1.8267 1.52 -3.12 1.52 c-1.68 0 -2.8066 -0.53334 -3.38 -1.6 l-0.04 0 l0 1.32 l-2.7 0 l0 -14.28 l2.84 0 z M46.04 14.84 c0 1 0.21998 1.8 0.65998 2.4 s1.0267 0.9 1.76 0.9 c0.72 0 1.3033 -0.29334 1.75 -0.88 s0.67 -1.3933 0.67 -2.42 c0 -1.0133 -0.21666 -1.82 -0.65 -2.42 s-1.03 -0.9 -1.79 -0.9 c-0.74666 0 -1.3333 0.30666 -1.76 0.92 s-0.64 1.4133 -0.64 2.4 z M60.3 9.38 c0.97334 0 1.84 0.22664 2.6 0.67998 s1.3567 1.11 1.79 1.97 s0.65 1.85 0.65 2.97 c0 0.10666 -0.0066602 0.28 -0.02 0.52 l-7.46 0 c0.02666 0.82666 0.24332 1.47 0.64998 1.93 s1.03 0.69 1.87 0.69 c0.52 0 0.99666 -0.13 1.43 -0.39 s0.71 -0.57666 0.83 -0.95 l2.5 0 c-0.73334 2.32 -2.3466 3.48 -4.84 3.48 c-0.94666 -0.01334 -1.8233 -0.22 -2.63 -0.62 s-1.45 -1.0233 -1.93 -1.87 s-0.72 -1.83 -0.72 -2.95 c0 -1.0533 0.24334 -2.0134 0.73 -2.88 s1.1333 -1.5133 1.94 -1.94 s1.6767 -0.64 2.61 -0.64 z M62.48 13.719999999999999 c-0.13334 -0.77334 -0.38 -1.3333 -0.74 -1.68 s-0.87334 -0.52 -1.54 -0.52 c-0.69334 0 -1.24 0.19666 -1.64 0.59 s-0.63334 0.93 -0.7 1.61 l4.62 0 z M71.76 9.38 c3.0134 0.01334 4.52 0.9933 4.52 2.94 l0 5.48 c0 1.0133 0.12 1.7467 0.36 2.2 l-2.88 0 c-0.10666 -0.32 -0.17332 -0.65334 -0.19998 -1 c-0.84 0.85334 -2 1.28 -3.48 1.28 c-1.08 0 -1.9367 -0.27334 -2.57 -0.82 s-0.95 -1.3067 -0.95 -2.28 c0 -0.94666 0.3 -1.68 0.9 -2.2 c0.61334 -0.54666 1.7267 -0.89332 3.34 -1.04 c1.1467 -0.12 1.8733 -0.27 2.18 -0.45 s0.46 -0.45666 0.46 -0.83 c0 -0.46666 -0.14 -0.81332 -0.42 -1.04 s-0.74666 -0.34 -1.4 -0.34 c-0.6 0 -1.0533 0.12334 -1.36 0.37 s-0.48666 0.64332 -0.54 1.19 l-2.84 0 c0.06666 -1.1333 0.53332 -1.9933 1.4 -2.58 s2.0266 -0.88 3.48 -0.88 z M69.4 17.06 c0 0.88 0.58 1.32 1.74 1.32 c1.52 -0.01334 2.2866 -0.79334 2.3 -2.34 l0 -1.1 c-0.22666 0.22666 -0.8 0.39332 -1.72 0.49998 c-0.8 0.09334 -1.3867 0.25668 -1.76 0.49002 s-0.56 0.61 -0.56 1.13 z M82.08000000000001 6.5600000000000005 l0.000019531 3.1 l2.08 0 l0 1.9 l-2.08 0 l0 5.12 c0 0.48 0.08 0.8 0.24 0.96 s0.48 0.24 0.96 0.24 c0.34666 0 0.64 -0.02666 0.88 -0.08 l0 2.22 c-0.4 0.06666 -0.96 0.1 -1.68 0.1 c-1.0933 0 -1.9067 -0.18666 -2.44 -0.56 s-0.8 -1.02 -0.8 -1.94 l0 -6.06 l-1.72 0 l0 -1.9 l1.72 0 l0 -3.1 l2.84 0 z" fill = 'black'></path></g></svg>
         </nav>
      <nav>
        
      </nav>
      <nav class="">
        <ul class="botones">
          <li class="elemento sign" onclick="window.location.href='/login'">Sign Up</li>
          <li class="elemento log" onclick="window.location.href='/login'">Log In</li>
          <li class="bi bi-list menuhamburguesa"></li>
        </ul>
      </nav>
    </header>
    <div class="primerparte">
    <section class="primerpanel">
    <div class="cambio titlemain">¡Conoce la mejor <br>comunidad de <br>beatsmakers!</div>
    <svg id="logoani"  width="100px" viewBox="0 0 389.66666666666663 120.5206393829252" class="looka-1j8o68f" fill="black"><defs id="SvgjsDefs1111" fill = "black" ></defs><g id="SvgjsG1112" featurekey="xG21Y3-0" transform="matrix(1.1457562995092563,0,0,1.1457562995092563,10.108153303647448,18.700712420824527)" fill="black" ><path class="loguito" xmlns="http://www.w3.org/2000/svg" d="M44.931,1.134c-15.861,0-54.806,5.91-25.929,56.296c12.353,21.55,21.042,31.437,26.01,31.437  c4.969,0,13.659-9.887,26.012-31.437C99.901,7.043,60.792,1.134,44.931,1.134z M59.65,49.304c0,3.564-4.095,4.844-6.729,4.844  c-3.713,0-6.726-2.167-6.726-4.844c0-2.673,3.013-4.84,6.726-4.84c1.607,0,3.083,0.406,4.241,1.08c0,0,0-9.399,0-15.722  L39.36,31.718v19.75c0,3.561-4.095,4.84-6.729,4.84c-3.714,0-6.726-2.167-6.726-4.84c0-2.678,3.011-4.844,6.726-4.844  c1.607,0,3.082,0.405,4.241,1.082c0,0,0-20.322,0-21.22c0-0.898,0.759-1.094,1.24-1.145c0.485-0.053,20.292-2.163,20.292-2.163  c0.93-0.061,1.247,0.36,1.247,1.454V49.304z" fill="black">
    </section>
      <div class="pichu">
        <p class="parrafomain">Mas de 10.000 beats y un mundo de beatsmakers para explorar.</p>
        <div class="centro">
        <button class="magic cambioespecial" id="cen" onclick="window.location.href='/login'" >Unirse ahora</button>
      </div>
      </div>
  </div>

  <div class="titlesecond"><h2 class="exp">
    Explora toda diversidad de beats
  </h2></div>
  
  <div class="grilla cambio">
    
    <figure class="item item2" >
      <div class="centracion" ><img class="foto" src="/resources/assets/images/foto-tipo-landing.jpeg" alt=""></div>
      <span class="price">7.99$</span>
      <span class="autor">coteland</span>
      <div class="tclick">
        <span class="butonrepro bi bi-skip-start-fill"></span>
        <span class="butonrepro bi bi-play-fill" data-audio-src="/resources/assets/audios/🍀instrumental reggae - uso libre - beat 2020🍀.mp3"></span>
        <span class="butonrepro bi bi-skip-end-fill"></span>
      </div>
    </figure>
    <figure class="item item3" ><div ><img class="foto" src="/resources/assets/images/foto-milo-landing.jpeg" alt=""></div>
      <span class="price">3.99$</span>
      <span class="autor">Milo J</span>
      <div class="tclick">
        <span class="butonrepro bi bi-skip-start-fill"></span>
        <span class="butonrepro bi bi-play-fill" data-audio-src="/resources/assets/audios/MILO J - M.A.I (KARAOKE - INSTRUMENTAL).mp3"></span></span>
        <span class="butonrepro bi bi-skip-end-fill"></span>
      </div></figure>
    <figure class="item item4" ><div ><img class="foto" src="/resources/assets/images/foto-thor-landing.jpeg" alt=""></div>
      <span class="price">2.99$</span>
      <span class="autor">Yatafiu</span>
      <div class="tclick">
        <span class="butonrepro bi bi-skip-start-fill"></span>
        <span class="butonrepro bi bi-play-fill" data-audio-src="/resources/assets/audios/[Free] Tech House x Techno Type Beat - GROOVE _ Club Banger Instrumental 2022 _ Electronic Rap Beat.mp3"></span></span>
        <span class="butonrepro bi bi-skip-end-fill"></span>
      </div></figure>
    <figure class="item item5" ><div ><img class="foto" src="/resources/assets/images/foto-tupac-landing.jpeg" alt=""></div>
      <span class="price">3.99$</span>
      <span class="autor">Tupac</span>
      <div class="tclick">
        <span class="butonrepro bi bi-skip-start-fill"></span>
        <span class="butonrepro bi bi-play-fill" data-audio-src="/resources/assets/audios/Shook Ones, Pt  II (Instrumental).mp3"></span></span>
        <span class="butonrepro bi bi-skip-end-fill"></span>
      </div></figure>
    
    <figure class="item item7">
      <div ><img class="foto" src="/resources/assets/images/foto-loriz-landing.jpeg" alt=""></div>
      <span class="price">5.99$</span>
      <span class="autor">Carpenter</span>
      <div class="tclick">
        <span class="butonrepro bi bi-skip-start-fill"></span>
        <span class="butonrepro bi bi-play-fill" data-audio-src="/resources/assets/audios/Drake - Hold On Were Going Home (Instrumental).mp3"></span></span>
        <span class="butonrepro bi bi-skip-end-fill"></span>
      </div>
    </figure>

  </div>

  <div class="titleterciario">
    <h2>Oyentes, productores, negocios y muchos más.</h2>
  </div>
  <div class="terceraparte">
   <div class="cartas"  id = "carta">
    <img src="/resources/assets/images/persona4.jpg" alt="">
    <h3  class="car">Ashley Stronghold</h3>
    <p >Oyente</p>
   </div>
   <div class="cartas" id = "carta2">
    <img src="/resources/assets/images/persona 2.jpeg" alt="">
    <h3 class="car" >Jeremy Oswen</h3>
    <p  >Productor</p>
   </div>
   <div class="cartas" id = "carta3">
    <img src="/resources/assets/images/persona3.jpeg" alt="">
    <h3 class="car">Neolan Records</h3>
    <p>Empresa</p>
   </div>
  </div>

  <footer class="apartadoglass">
    <div class="circulo"></div>
    <div class="blu">
      <nav class="footerle">
       <svg id=
       "logofooter" width="200px" viewBox="0 0 389.66666666666663 120.5206393829252" class="looka-1j8o68f" fill = "black"><defs id="SvgjsDefs1111" fill = 'black' ></defs><g id="SvgjsG1112" featurekey="xG21Y3-0" transform="matrix(1.1457562995092563,0,0,1.1457562995092563,10.108153303647448,18.700712420824527)" fill="black" ><path xmlns="http://www.w3.org/2000/svg" d="M44.931,1.134c-15.861,0-54.806,5.91-25.929,56.296c12.353,21.55,21.042,31.437,26.01,31.437  c4.969,0,13.659-9.887,26.012-31.437C99.901,7.043,60.792,1.134,44.931,1.134z M59.65,49.304c0,3.564-4.095,4.844-6.729,4.844  c-3.713,0-6.726-2.167-6.726-4.844c0-2.673,3.013-4.84,6.726-4.84c1.607,0,3.083,0.406,4.241,1.08c0,0,0-9.399,0-15.722  L39.36,31.718v19.75c0,3.561-4.095,4.84-6.729,4.84c-3.714,0-6.726-2.167-6.726-4.84c0-2.678,3.011-4.844,6.726-4.844  c1.607,0,3.082,0.405,4.241,1.082c0,0,0-20.322,0-21.22c0-0.898,0.759-1.094,1.24-1.145c0.485-0.053,20.292-2.163,20.292-2.163  c0.93-0.061,1.247,0.36,1.247,1.454V49.304z" fill = 'black'></path></g><g id="SvgjsG1113" featurekey="n48U4P-0" transform="matrix(3.186742265241492,0,0,3.186742265241492,121.47036213234468,29.855326248307062)" fill="black" ><path d="M6.3 5.380000000000001 c1.7467 0 3.1366 0.40002 4.17 1.2 s1.55 1.9333 1.55 3.4 l-3.04 0 c-0.04 -0.72 -0.28334 -1.26 -0.73 -1.62 s-1.1367 -0.54 -2.07 -0.54 c-0.65334 0 -1.18 0.14334 -1.58 0.43 s-0.6 0.68332 -0.6 1.19 c0 0.41334 0.12334 0.71334 0.37 0.9 s0.59666 0.35332 1.05 0.49998 s1.2467 0.36 2.38 0.64 c1.1867 0.29334 2.1 0.61334 2.74 0.96 s1.1267 0.79 1.46 1.33 s0.5 1.2033 0.5 1.99 c0 0.90666 -0.24 1.7133 -0.72 2.42 s-1.18 1.2433 -2.1 1.61 s-1.96 0.55 -3.12 0.55 c-1.7733 0 -3.23 -0.44334 -4.37 -1.33 s-1.71 -2.1034 -1.71 -3.65 l0 -0.1 l3.04 0 c0 0.84 0.28666 1.49 0.86 1.95 s1.3333 0.69 2.28 0.69 c0.84 0 1.5167 -0.15 2.03 -0.45 s0.77 -0.74334 0.77 -1.33 c0 -0.38666 -0.14 -0.71332 -0.42 -0.97998 s-0.65334 -0.48332 -1.12 -0.64998 s-1.2533 -0.37666 -2.36 -0.63 c-1.28 -0.32 -2.2134 -0.66 -2.8 -1.02 s-1.0333 -0.79666 -1.34 -1.31 s-0.46 -1.13 -0.46 -1.85 c0 -0.89334 0.25666 -1.6733 0.77 -2.34 s1.1833 -1.16 2.01 -1.48 s1.68 -0.48 2.56 -0.48 z M19.08 9.38 c1.6533 0 2.96 0.50334 3.92 1.51 s1.44 2.3234 1.44 3.95 c0 1.64 -0.49 2.9566 -1.47 3.95 s-2.2766 1.49 -3.89 1.49 c-1.64 0 -2.94 -0.50334 -3.9 -1.51 s-1.44 -2.3166 -1.44 -3.93 c0 -1.6667 0.49 -2.9934 1.47 -3.98 s2.27 -1.48 3.87 -1.48 z M16.580000000000002 14.84 c0 1.0533 0.21334 1.8666 0.64 2.44 s1.0467 0.86 1.86 0.86 c0.84 0 1.47 -0.29334 1.89 -0.88 s0.63 -1.3933 0.63 -2.42 c0 -1.0667 -0.21666 -1.8867 -0.65 -2.46 s-1.0633 -0.86 -1.89 -0.86 c-0.8 0 -1.4133 0.28666 -1.84 0.86 s-0.64 1.3933 -0.64 2.46 z M29.120000000000005 9.66 l0 5.86 c0 0.8 0.12666 1.42 0.38 1.86 s0.73334 0.66 1.44 0.66 c0.78666 0 1.35 -0.23334 1.69 -0.7 s0.51 -1.2133 0.51 -2.24 l0 -5.44 l2.84 0 l0 10.34 l-2.7 0 l0 -1.44 l-0.06 0 c-0.70666 1.1467 -1.7667 1.72 -3.18 1.72 c-1.3467 0 -2.31 -0.34334 -2.89 -1.03 s-0.87 -1.7433 -0.87 -3.17 l0 -6.42 l2.84 0 z M41.06 5.720000000000001 l0 14.28 l-2.84 0 l0 -14.28 l2.84 0 z M46.14 5.720000000000001 l0.000019531 5.2 l0.04 0 c0.30666 -0.46666 0.74332 -0.84 1.31 -1.12 s1.2167 -0.42 1.95 -0.42 c1.2667 0 2.2966 0.50666 3.09 1.52 s1.19 2.32 1.19 3.92 c0 1.6133 -0.39334 2.9266 -1.18 3.94 s-1.8267 1.52 -3.12 1.52 c-1.68 0 -2.8066 -0.53334 -3.38 -1.6 l-0.04 0 l0 1.32 l-2.7 0 l0 -14.28 l2.84 0 z M46.04 14.84 c0 1 0.21998 1.8 0.65998 2.4 s1.0267 0.9 1.76 0.9 c0.72 0 1.3033 -0.29334 1.75 -0.88 s0.67 -1.3933 0.67 -2.42 c0 -1.0133 -0.21666 -1.82 -0.65 -2.42 s-1.03 -0.9 -1.79 -0.9 c-0.74666 0 -1.3333 0.30666 -1.76 0.92 s-0.64 1.4133 -0.64 2.4 z M60.3 9.38 c0.97334 0 1.84 0.22664 2.6 0.67998 s1.3567 1.11 1.79 1.97 s0.65 1.85 0.65 2.97 c0 0.10666 -0.0066602 0.28 -0.02 0.52 l-7.46 0 c0.02666 0.82666 0.24332 1.47 0.64998 1.93 s1.03 0.69 1.87 0.69 c0.52 0 0.99666 -0.13 1.43 -0.39 s0.71 -0.57666 0.83 -0.95 l2.5 0 c-0.73334 2.32 -2.3466 3.48 -4.84 3.48 c-0.94666 -0.01334 -1.8233 -0.22 -2.63 -0.62 s-1.45 -1.0233 -1.93 -1.87 s-0.72 -1.83 -0.72 -2.95 c0 -1.0533 0.24334 -2.0134 0.73 -2.88 s1.1333 -1.5133 1.94 -1.94 s1.6767 -0.64 2.61 -0.64 z M62.48 13.719999999999999 c-0.13334 -0.77334 -0.38 -1.3333 -0.74 -1.68 s-0.87334 -0.52 -1.54 -0.52 c-0.69334 0 -1.24 0.19666 -1.64 0.59 s-0.63334 0.93 -0.7 1.61 l4.62 0 z M71.76 9.38 c3.0134 0.01334 4.52 0.9933 4.52 2.94 l0 5.48 c0 1.0133 0.12 1.7467 0.36 2.2 l-2.88 0 c-0.10666 -0.32 -0.17332 -0.65334 -0.19998 -1 c-0.84 0.85334 -2 1.28 -3.48 1.28 c-1.08 0 -1.9367 -0.27334 -2.57 -0.82 s-0.95 -1.3067 -0.95 -2.28 c0 -0.94666 0.3 -1.68 0.9 -2.2 c0.61334 -0.54666 1.7267 -0.89332 3.34 -1.04 c1.1467 -0.12 1.8733 -0.27 2.18 -0.45 s0.46 -0.45666 0.46 -0.83 c0 -0.46666 -0.14 -0.81332 -0.42 -1.04 s-0.74666 -0.34 -1.4 -0.34 c-0.6 0 -1.0533 0.12334 -1.36 0.37 s-0.48666 0.64332 -0.54 1.19 l-2.84 0 c0.06666 -1.1333 0.53332 -1.9933 1.4 -2.58 s2.0266 -0.88 3.48 -0.88 z M69.4 17.06 c0 0.88 0.58 1.32 1.74 1.32 c1.52 -0.01334 2.2866 -0.79334 2.3 -2.34 l0 -1.1 c-0.22666 0.22666 -0.8 0.39332 -1.72 0.49998 c-0.8 0.09334 -1.3867 0.25668 -1.76 0.49002 s-0.56 0.61 -0.56 1.13 z M82.08000000000001 6.5600000000000005 l0.000019531 3.1 l2.08 0 l0 1.9 l-2.08 0 l0 5.12 c0 0.48 0.08 0.8 0.24 0.96 s0.48 0.24 0.96 0.24 c0.34666 0 0.64 -0.02666 0.88 -0.08 l0 2.22 c-0.4 0.06666 -0.96 0.1 -1.68 0.1 c-1.0933 0 -1.9067 -0.18666 -2.44 -0.56 s-0.8 -1.02 -0.8 -1.94 l0 -6.06 l-1.72 0 l0 -1.9 l1.72 0 l0 -3.1 l2.84 0 z" fill = 'black'></path></g></svg>
      </nav>

      <nav class="footerle">
        <div class="list">
          <p class="element">About us</p>
          <p class="element">Contact</p>
          <p class="element">Cookie preferences</p>
        </div>
      </nav>
    </div>
  </footer>
  </div>  


  <script src="/resources/js/landing.js"></script>
@endsection