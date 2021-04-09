<title>@yield('title')</title>

  <title>Menu</title>



    <div class="header">
    <div class="name">
      <strong>E</strong>lite</div>
    <div class="nav">

      <ul>
        <li><a href="/" >Home</a> </li>
        <li><a href="/about" >About us</a></li>
        <li><a href="/contact" >Contact us</a></li>
        <li><a href="/gallery" target="_blank">Gallery</a></li>
        <li><a href="/menu" target="_blank" >MENU</a></li>
        <li><a href="/reservation" >RESERVATION</a></li>
        <li><a href="/sign" >Sign up</a></li>

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


  