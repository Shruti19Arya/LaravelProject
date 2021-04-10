<!DOCTYPE html>
<html>

<head>

@section('title','Sign Up')
<link rel="icon" href="/images/logo.png">


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Lato&family=Noto+Serif&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Ruthie&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/css/sign.css">



  
</head>

<body>

@extends('Layout')


@section('content')



  <div id="contact">
    <h1 class="heading">SIGN UP</h1>

    <div class="container">

      <form action="/sign" method="POST" enctype="multipart/form-data">
      @csrf
      
        <p><input class="border" type="text" placeholder="Name" name="Name" value="{{ old('Name') }}">
        @error('Name')
       <div class="alert" >
       {{$message}}</div>
       @enderror
        </p>
        <p><input class="border" type="email" placeholder="Email" name="Email" value="{{ old('Email') }}">
        @error('Email')
       <div class="alert" >
       {{$message}}</div>
       @enderror
        </p>
        <p><input class="border" type="password" placeholder="Password" name="Password" value="{{ old('Password') }}">
        @error('Password')
       <div class="alert" >
       {{$message}}</div>
       @enderror
        </p>
        

        <input class="border" type="file" name="profile" id="file" >
        @error('profile')
       <div class="alert" >
       {{$message}}</div>
       @enderror

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
