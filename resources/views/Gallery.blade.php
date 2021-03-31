<!DOCTYPE html>
<html>

<head>
  
  @section('title','Gallery')


  <link href="https://fonts.googleapis.com/css2?family=Lato&family=Noto+Serif&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Ruthie&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/css/gallery.css">
</head>

<body>


@extends('Layout')
@section('content')

  <div class="row">

    <div class="column">
      <img  src="/images/p2.jpg" style="width:100%">
      <img  src="/images/ca2.jpg" style="width:100%">
      <img  src="/images/d3.jpeg" style="width:100%">
      <img  src="/images/m.jpg" style="width:100%">
    </div>

    <div class="column">
      <img src="/images/b.jpg" style="width:100%">
      <img src="/images/inn.jpg" style="width:100%">
      <img src="/images/t2.jpg" style="width:100%">
      <img src="/images/ca1.jpg" style="width:100%">
      <img src="/images/t1.jpg" style="width:100%">
    </div>

    <div class="column">
      <img src="/images/c2.jpg" style="width:100%">
      <img src="/images/piz.jpg" style="width:100%">
      <img src="/images/k.jpg" style="width:100%">
      <img src="/images/g1.jpg" style="width:100%">
    </div>

  </div>

@endsection

  


  
</body>
</html>
