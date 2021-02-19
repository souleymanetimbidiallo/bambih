<!-- navbar starts -->
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark shadow-sm">
        <div class="container-fluid">
          <a class="navbar-brand" href="{{ url('/') }}"> 
            <h3 class="mb-0">
                <i class="fas fa-fire-alt"></i> 
                {{ config('app.name', 'Laravel') }}
            </h3>
        </a>
          
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav ml-auto">

              <li class="nav-item">
                <a class="nav-link" href="/">Home </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="#">How it's works</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Help</a>
              </li>
                 <!-- Authentication Links -->
                @guest
                 @if (Route::has('login'))
                     <li class="nav-item">
                         <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                     </li>
                 @endif
                 
                 @if (Route::has('register'))
                     <li class="nav-item">
                         <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                     </li>
                 @endif
             @else
             <li class="nav-item dropdown">
                 <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                     {{ Auth::user()->name }}
                 </a>

                 <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                     <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                         {{ __('Logout') }}
                     </a>

                     <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                         @csrf
                     </form>
                 </div>
             </li>
             @endguest

             <li class="nav-item dropdown">
              <a id="navbarLang" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                  en
              </a>

              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarLang">
                  <a class="dropdown-item" href="#">
                      fr
                  </a>
                  <a class="dropdown-item" href="#">
                    es
                </a>
              </div>
            </li>
            </ul>
        
          </div>
          </div>
        </nav>
    <!-- nav bar ends -->