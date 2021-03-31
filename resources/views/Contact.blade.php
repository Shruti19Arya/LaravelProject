<!DOCTYPE html>
<html>

<head>

  @section('title','Contact Us')


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Lato&family=Noto+Serif&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Ruthie&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/css/contact.css">

</head>

<body>

@extends('Layout')
@section('content')


  <!-- Contact -->

  <div id="contact">
    <h1 class="heading">Contact us</h1>

    <div class="container">
      <p class="heading"> Reserve a table, ask for today's special or just send <br> us a message.</p>

      <form action="/contact" >
      @csrf
        <p><input class="border" type="text" placeholder="Name" name="Name">
    </p>
        <p><input class="border" type="email" placeholder="Email" name="Email">
        </p>
        <p><input class="border" type="text" placeholder="Phone Number " name="Phone">
       </p>
        <p><input class="border" type="number" placeholder="How many people" name="People"></p>
        <p><input class="border" type="datetime-local" placeholder="Date" name="Date" value="2020-10-24T20:00"></p>
        <p><textarea class="msg border" placeholder="Message \ Special requirements" name="Msg" rows="40" cols="20"></textarea></p>
        <p><button class="button" type="submit">SUBMIT </button></p>
      </form>

    </div>
  </div>

  <div class="img">

    <section id="intro" class="content ">
      <h1>Hours & Location</h1>
      <br>
      <p>123 South Enclave,<br> Punjab, PB 19601
        <br><br>
      </p>
      <p><strong>Lunch -</strong> Wednesday to Friday ( 12pm - 3pm )</p>
      <p><strong>Brunch -</strong>
        Saturday 12pm - 4pm &amp;
        <br> Sunday 11am - 4pm</p>
      <p><strong>Dinner -</strong>  Monday - Wednesday 5pm - 9.30pm
        <br>Thursday,Friday 4pm - 10pm<br>
        Saturday 4pm - 10pm<br>Sunday 4pm - 10.30pm</p>
      <p><br></p>

      <p><strong>E-mail </p>
      <h4>www.informus@gmail.com</h4>

    </section>
  </div>
  </div>

  @endsection


  

</body>

</html>
