@php
$lang2 =  LaravelLocalization::getCurrentLocale() == 'ar' ? 'en' : 'ar';
@endphp

 <header class="wrapper">
    <nav id="main_nav" class="container-fluid">
      <input type="checkbox" id="show-search">
      <input type="checkbox" id="show-menu">
      <label for="show-menu" class="menu-icon"><a href="/"><img src="{{asset('img/logo.png')}}" class="mobile-logo" alt="Logo"></a> <div class="menu-icons">  <span></span>
        <span></span>
        <span></span></div> </label>

      <div class="content">
          <div class="logo">
          <a href="/"><img src="{{asset('img/logo.png')}}" alt="Logo"></a>
            </div>
     </div>

        <div class="content">
        <ul class="links">
            <li> <a href="#about">About</a> </li>
            <li> <a href="#works">Works</a></li>
            <li> <a href="#advantages">Advantages</a></li>
            <li> <a href="#partners">Our Partners</a></li>
            <li> <a href="#">Contact</a></li>
        </ul>
      </div>
    </nav>
</header>

