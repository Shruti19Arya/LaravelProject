<!DOCTYPE html>
<html>

<head>
  
@section('title','MENU')
<link rel="icon" href="/images/logo.png">


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Lato&family=Noto+Serif&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Ruthie&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/css/menu.css">
</head>

<body>

  @extends('Layout')
  @section('content')


  <div class="menu">
    <div class="tab">
      <button class="tablinks" onclick="openCity(event, 'Main Course')" id="defaultOpen">Main Course</button>
      <button class="tablinks" onclick="openCity(event, 'Desert')">Desert</button>
      <button class="tablinks" onclick="openCity(event, 'Drinks')">Drinks</button>

    </div>

    <div id="Main Course" class="tabcontent">

      <div class="row">
        <div class="gallery">
          <img src="/images/lasagna.jpg" alt="lasagna">
          <div class="desc">lasagna </div>
        </div>

        <div class="gallery">
          <img src="/images/momos.jpeg" alt="momos">
          <div class="desc">momos</div>
        </div>

        <div class="gallery">
          <img src="/images/spring rolls.jpg" alt="spring rolls">
          <div class="desc">spring rolls</div>
        </div>

        <div class="gallery">
          <img src="/images/scramble.jpg" alt="scrambled eggs">
          <div class="desc">scrambled eggs</div>
        </div>


      </div>

      <div class="row">

        <div class="gallery">
          <img src="/images/manchurian.jpeg" alt="manchurian">
          <div class="desc">manchurian</div>
        </div>

        <div class="gallery">
          <img src="/images/burger.jpeg" alt="burger">
          <div class="desc">burger</div>
        </div>

        <div class="gallery">
          <img src="/images/pasta.jpeg" alt="pasta">
          <div class="desc">pasta</div>
        </div>

        <div class="gallery">
          <img src="/images/pizza.jpeg" alt="pizza">
          <div class="desc">pizza</div>
        </div>


      </div>


    </div>



    <div id="Desert" class="tabcontent">


      <div class="row">
        
        <div class="gallery">
          <img src="/images/brownie.jpeg" alt="brownie">
          <div class="desc">Brownie</div>
        </div>

        <div class="gallery">
          <img src="/images/cheesecake.jpg" alt="cheesecake">
          <div class="desc">cheesecake</div>
        </div>

        <div class="gallery">
          <img src="/images/pancakes.jpeg" alt="pancakes">
          <div class="desc">pancakes</div>
        </div>

        <div class="gallery">
          <img src="/images/ca2.jpg" alt="Chocolate cake">
          <div class="desc">Chocolate cake</div>
        </div>

      </div>


      <div class="row">


        <div class="gallery">
          <img src="/images/cookies.jpeg" alt="cookies">
          <div class="desc">cookies</div>
        </div>

        <div class="gallery">
          <img src="/images/doughnuts.jpeg" alt="doughnuts">
          <div class="desc">doughnuts</div>
        </div>

        <div class="gallery">
          <img src="/images/icecream.jpeg" alt="icecream">
          <div class="desc">icecream</div>
        </div>

        <div class="gallery">
          <img src="/images/cupcake.jpg" alt="cupcake">
          <div class="desc">cupcake</div>
        </div>

      </div>


    </div>


    <div id="Drinks" class="tabcontent">

      <div class="row">

        <div class="gallery">
          <img src="/images/coffee.jpeg" alt="coffee">
          <div class="desc">coffee</div>
        </div>

        <div class="gallery">
          <img src="/images/black coffee.jpeg" alt="black coffee">
          <div class="desc">black coffee</div>
        </div>


        <div class="gallery">
          <img src="/images/shake.jpg" alt="Chocolate milkshake">
          <div class="desc">Chocolate shake</div>
        </div>

        <div class="gallery">
          <img src="/images/smoothie.jpg" alt="smoothie">
          <div class="desc">smoothie</div>
        </div>

      </div>

      <div class="row">

        <div class="gallery">
          <img src="/images/ice tea.jpg" alt="ice tea">
          <div class="desc">ice tea</div>
        </div>

        <div class="gallery">
          <img src="/images/orange.jpg" alt="orange juice">
          <div class="desc">orange juice</div>
        </div>

      </div>



    </div>
  </div>


  


  <script>
    function openCity(evt, cityName) {
      var i, tabcontent, tablinks;
      tabcontent = document.getElementsByClassName("tabcontent");
      for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
      }
      tablinks = document.getElementsByClassName("tablinks");
      for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
      }
      document.getElementById(cityName).style.display = "block";
      evt.currentTarget.className += " active";
    }
    document.getElementById("defaultOpen").click();
  </script>

  @endsection


</body>
</html>
