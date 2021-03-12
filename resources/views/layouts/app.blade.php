<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
    <div class="header">
        <a href="#default" class="logo">CompanyLogo</a>
        <div class="header-right">
          <a class="active" href="{{'campings/index-paging'}}">Home</a>
          @auth
          <a href="{{'admin'}}">Admin</a>
          @endauth
          <a  href="{{ route('login') }}">{{ __('Login') }}</a>
          <a href="{{ route('register') }}">{{ __('Register') }}</a>
           <a class="dropdown-item" href="{{ route('logout') }}"
                 onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
         </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
         @csrf
        </form>
        </div>
      </div>
      
      
        <main class="py-4">
            @yield('content')
        </main>
        </div>
       
        
        {{-- FOOTER --}}
        <footer>
            <div class="adress">
                <h5>B2B Vilnius</h5>
                <h6>Laisves pr. 60-1107</h6>
                <h6>LT-05120 Vilnius  - info@domain.com</h6>
            </div>
            
            <div class="media">
                <img src="data:image/png;base64,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" width="50" height="50">
                <img src="data:image/jpeg;base64,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IQq6u9g5xnGSkcGg/wAiQnJsa7Lk2H1rWpLxrpA2CnxvxCSCw+twKupFAZdhVrCtmZYKGjtpF/EEd6pTiPdPzY/mwd9RxGul5sfzYO+rsRcxdutS8ux/ob937KkuI11PNj+bB304jXU82P5sHfV2ojF26yjl2P8AQ3g79lSPEW6nmx/Ng76cRbqebH82Dvq7kRizdZRy7H+hvB37KkOIt1PNj+bB31HES6nmx/Ng76vBEYs3WUcux/ob937Kj+Id1PNj+bB31x4h3U82/Vg76vJEYs3WUcux/ob937KjuId1PNj+bB31x4h3U82/Vg76vNEYs3WUcux/ob937KjOId1fNv1YO+o4hXV82/Vg76vREYs3WV3l2P8AQ37v2VF8Qrq+bfqwd9RxCur5t+rB31eqIxZusrnLsf6G/d+yoriDdXzb9WDvpxAur5t+rB31eqIxZuso5dj/AEN+79lRXEC6vm36sHfTiBdXzb9WDvq9URizdZRy7H+hv3fsqJF4F1bbPowG0yw2D1OWxXBwXvxg+se1rR/JhJLn7HOIGL0W7wrURdEu3So4lszLhQUbtAv7yadlCvPSUzIo2wxNEccYAYxosa0DQF6ERTqpRERCEREQhEREIRERCEREQhEREIRERCEREQhEREIRERCEREQhEREIRERCEREQhEREIRERCF//2Q==" width="50" height="50">
                <img src="data:image/png;base64,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" width="50" height="50">
            </div>
            
            <div class="yebo">
                <h6>Handcrafted by:</h6>
                <h3>LOGO</h3>
            </div>
        </footer>
</body>
</html>