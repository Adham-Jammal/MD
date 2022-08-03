@php
$lang2 =  LaravelLocalization::getCurrentLocale() == 'ar' ? 'en' : 'ar';
@endphp

 <header class="wrapper">
    <nav id="main_nav" class="container">
      <input type="checkbox" id="show-search">
      <input type="checkbox" id="show-menu">
      <label for="show-menu" class="menu-icon"><a href="/"><img src="{{asset('img/logo.png')}}" class="mobile-logo" alt="Logo"></a><img src="{{asset('img/burger.png')}}" class="burger" alt="burger"></a></label>

      <div class="content">
          <div class="logo">
          <a href="/"><img src="{{asset('img/logo.png')}}" alt="Logo"></a>
            </div>
     </div>

        <div class="content">
        <ul class="links">
            <li> <a href="/">{{ __('index.30') }}</a> </li>
            <li> <a href="#about_us"> {{ __('index.31') }}</a></li>
            <li> <a href="#services">{{ __('index.32') }}</a></li>
            <li> <a href="#contact_us"> {{ __('index.33') }}</a></li>
            <li id="lang"> <a href="{{ LaravelLocalization::getLocalizedURL($lang2, null, [], true) }}">{{ __('index.34') }}</a></li>
        </ul>
      </div>
    </nav>
</header>

