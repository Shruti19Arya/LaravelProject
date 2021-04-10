<title>@yield('title')</title>

  <title>Menu</title>



    <div class="header">
    <div class="name">
      <strong>E</strong>lite</div>
    <div class="nav">

      <ul>

      <li class="{{ (request()->is('/')) ? 'active' : '' }}"><a href="/" >Home</a> </li>
        <li class="{{ (request()->is('about')) ? 'active' : '' }}"><a href="/about" >About us</a></li>
        <li class="{{ (request()->is('contact')) ? 'active' : '' }}"><a href="/contact" >Contact us</a></li>
        <li class="{{ (request()->is('gallery')) ? 'active' : '' }}"><a href="/gallery" target="_blank">Gallery</a></li>
        <li class="{{ (request()->is('menu')) ? 'active' : '' }}"><a href="/menu" target="_blank" >MENU</a></li>
        <li class="{{ (request()->is('reservation')) ? 'active' : '' }}"><a href="/reservation" >RESERVATION</a></li>
        <li class="{{ (request()->is('sign')) ? 'active' : '' }}"><a href="/sign" >Sign up</a></li>

      </ul>

    </div>
  </div>

  @yield('content')

  <footer>

    <div class="foot">
      <a href="https://www.facebook.com/login/" target="_blank" class="fa fa-facebook" ></a>
      <a href="https://twitter.com/login?lang=en" target="_blank" class="fa fa-twitter"></a>
      <a href="https://www.instagram.com/?hl=en" target="_blank" class="fa fa-instagram"></a>
    </div>

  </footer>


  