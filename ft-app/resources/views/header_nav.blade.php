<header>
      <div class="logo">
      <a href="{{ route('home') }}">
       <img class="logo-img" src="{{asset('build/assets/images/book/frontcover.png')}}"/>
        </a>  
    </div>
      <!-- add this to your header -->
       <div id="google_translate_element"></div> 
      <div class="menu-bar">
       <p class="menu-items"><a href="{{ route('library.index') }}">{{ __('Libri') }}</a></p>
       <p class="menu-items">Negozio</p>
       @guest
       <p class="menu-items"><a href="{{ route('register') }}">{{ __('Register') }}</a></p>
       <p class="menu-items"><a href="{{ route('login') }}">{{ __('Login') }}</a></p>
       @endguest
       @auth
        <p class="menu-items"><a href="{{ route('profile.edit') }}">{{ __('Profile') }}</a></p>
        <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
        </form>
       @endauth
      </div>
     </header>