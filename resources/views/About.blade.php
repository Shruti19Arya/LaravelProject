<!DOCTYPE html>
<html>

<head>

@section('title','About Us')
<link rel="icon" href="/images/logo.png">



  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Lato&family=Noto+Serif&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Ruthie&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/about.css">
</head>

<body>

  @extends('Layout')

  @section('content')


  <div class="container1">
    <div class="pic1"></div>
    <div class="content1">

      <h3 class="heading1">Our Restaurant</h3><br>


      <p class="para1"> Elite is known for it's fine quality cuisine, high standards
        and hospitality. You will discover exclusive wines and gourmet flavours
        in an elegant place.
        <br>
        It is a place for family, the one you are born into and the one
        you create around food, love and friendship.
        <br><br>

      </p>
    </div>
  </div>


  <div class="container2">
    <div class="pic2"></div>
    <div class="content2">

      <h3 class="heading2">Our Food</h3><br>


      <p class="para2"> Every dish at Elite has it's own story from
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
 
  @endsection


</body>
</html>
