<!DOCTYPE html>
<html>

<head>
@section('title','Home')
<link rel="icon" href="/images/logo.png">


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Ruthie&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="reservation.css">
  <link rel="stylesheet" href="/css/home.css">

</head>

<body>
       
@extends('Layout')
<div class="main">

  @section('content')
    <div class="title">
      <h1 class="name1">Elite</h1>
    </div>
</div>

  <div class="second">
    <div class="pic"></div>
    <div class="pic_content">

      <h3 class="heading">Welcome to Elite</h3><br>


      <p class="paragraph"> Every dish at Elite has it's own story from
        the traditional recipes to the modern ones that tells a lot
        about our cooking team and the chef
        who always put all of their effort to make it special.
        <br><br>
        Our menu is never the same and done - We always try to look around
        for the new twists, using new ingredients, new recipes, and
        fresh things on old standards.


      </p>
    </div>

  </div>




  <div class="slideshow-container">

    <div class="mySlides fade">
      <img src="/images/int2.jpeg" style="width:100%">
    </div>

    <div class="mySlides fade">
      <img src="/images/p1.jpg" style="width:100%">
    </div>

    <div class="mySlides fade">
      <img src="/images/t1.jpg" style="width:100%">
    </div>

  </div>

  <div class="third">
    <span class="dot"></span>
    <span class="dot"></span>
    <span class="dot"></span>
  </div>


  <script>
    var slideIndex = 0;
    showSlides();

    function showSlides() {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("dot");
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      slideIndex++;
      if (slideIndex > slides.length) {
        slideIndex = 1
      }
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex - 1].style.display = "block";
      dots[slideIndex - 1].className += " active";
      setTimeout(showSlides, 3000); 
    }

  </script>
  @endsection
</body>

</html>
