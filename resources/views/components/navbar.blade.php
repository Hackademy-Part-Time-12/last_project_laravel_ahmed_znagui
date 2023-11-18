<nav>
    <ul>
      <li><a href="#">Home</a></li>
      <li><a href="#">Menu</a></li>
      <li><a href="#">Pricing</a></li>
    </ul>

    @auth
    <ul class="ul-2 d-flex flex-column">
      <li><a href="#">Profile</a></li>
      <li><a href="#" id="btn">Logout</a>
      <form action="{{ route('logout')}}"  method="POST" id="form-logout"  >
        @csrf
      </form>
      </li>
    </ul>
    @endauth
    

    @guest
    <ul>
      <li><a href="{{route('login')}}">Login</a></li>
      <li><a href="{{route('register')}}">Signin</a></li>
    </ul>
    @endguest
  </nav>