
<nav class="navbar navbar-expand-lg " style="
height: 64px;
flex-shrink: 0; background: #0094AC;">
  <div class="container">
    <a class="navbar-brand" style ="display: flex;
    width: 126.2px;
    height: 44px;
    justify-content: center;
    align-items: center;
    gap: 15px;
    flex-shrink: 0;border-radius: 5px;
background: rgba(242, 242, 242, 0.95); color: #000;
font-size: 12px;
font-style: normal;
font-weight: 400;
line-height: normal;" href="#"> <svg xmlns="http://www.w3.org/2000/svg" width="19" height="16" viewBox="0 0 19 16" fill="none">
  <path d="M9.59998 0.125L0.599976 6.875H2.84998V15.875H7.34998V11.375H11.85V15.875H16.35V6.8075L18.6 6.875L9.59998 0.125Z" fill="black"/>
</svg>Dashboard</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    {{-- menu for guest --}}
    @guest
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link {{ Request::is('register') ? 'active' : '' }}" href="/register">Register</a>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto" >
          <li class="nav-item">
            <a href="/login" class="nav-link"><i class="bi bi-box-arrow-right"></i> Login</a>
          </li>
        </ul>
      </div>
    @endguest

    {{-- for login only --}}
    @auth
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="">
        <li class="nav-item">
        </li>
        @foreach ($menu as $item)
            
          <li class="nav-item" >
            <a class="nav-link" href="" style="color: #FFF;
            font-style: normal;
            font-weight: 400;
            line-height: normal; margin-left : 50px;"> {{  Str::ucfirst( $item->menu_name ) }} </a>
          </li>
        @endforeach
        
      </ul>
      <ul class="navbar-nav ms-auto" >
        <li class="nav-item">
          <a href="/logout" class="nav-link"><i class="bi bi-box-arrow-right"></i> logout</a>
        </li>
      </ul>
    </div>
        
    @endauth
  </div>
</nav>