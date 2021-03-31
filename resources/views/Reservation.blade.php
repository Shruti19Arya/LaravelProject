<!DOCTYPE html>
<html>

<head>

@section('title','Reservation')
<link rel="icon" href="/images/logo.png">


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Lato&family=Noto+Serif&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Ruthie&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/css/reservation.css">



  
</head>

<body>

@extends('Layout')


@section('content')



  <div id="contact">
    <h1 class="heading">RESERVATION</h1>

    <div class="container">

      <form action="/reservation" >
       </p>
        <p><input class="border" type="email" placeholder="Email" name="Email">
       </p>
        <p><input class="border" type="text" placeholder="Phone Number " name="Phone">
       </p>
        <p><input class="border" type="number" placeholder="How many people" name="People">
       </p>
        <p><input class="border" type="datetime-local" placeholder="Datetime" name="Datetime">
         </p>
        <p><select class="select" name="Table">
            <option>Select Table</option>
            <option value="Open Table">Open Table</option>
            <option value="Standard Table">Standard Table</option>
            <option value="Private Dining">Private Dining</option>
            
          
      </p>
        <p><textarea class="msg border" placeholder="Message \ Special requirements" name="Msg" rows="40" cols="20"></textarea></p>
        <p class="content">
          <strong>
            Important dining information - </strong>
          We have a 15 minute grace period. Please
          call us if you are running late than 15
          minutes after your reservation time.</p>


        <p class="condition"><input type="checkbox" name="checkbox" class="checkbox">I
          understand the Terms and Conditions
          
         </p>



        <br>
        <p><button class="button" type="submit">SUBMIT </button></p>
      </form>

    </div>
  </div>

  <div>

  </div>

  @endsection

 

</body>

</html>
