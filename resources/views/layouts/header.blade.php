@php
$lang2 =  LaravelLocalization::getCurrentLocale() == 'ar' ? 'en' : 'ar';
@endphp

 <header class="wrapper">
    <nav id="main_nav" class="container">
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
            <li> <a href="#about">{{ __('index.30') }} </a> </li>
            <li> <a href="#advantages">{{ __('index.32') }} </a></li>
            <li> <a href="#works">{{ __('index.31') }} </a></li>
            <li> <a href="#partners">{{ __('index.33') }} </a></li>
            <li> <a href="#contact">{{ __('index.34') }} </a></li>
            <li> <a href="{{ asset('PDFs/Profile.pdf') }}">{{ __('index.50') }} </a></li>
            <li> <a href="{{ LaravelLocalization::getLocalizedURL($lang2, null, [], true) }}" id="lang">{{ __('index.39') }}</a></li>
        </ul>
      </div>
    </nav>
</header>

