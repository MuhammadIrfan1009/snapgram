<!DOCTYPE html>
<html lang="en">
<head>
  <title>Snapgram</title>
  <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
  <!-- Add this to the <head> section of your layout file -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-k6RqeWeci5ZR/Lv4MR0sA0FfDOMGmho4LeQVR0dl4urD1o4W5twM/a5uxBDA9lgm" crossorigin="anonymous">

</head>
<body>
  <ul>
    <li><a href="{{ route('home')}}">Home</a></li>
    <li><a href="{{ route('albums.index')}}">Albums</a></li>
    <li><a href="{{ route('photos.create')}}">Upload</a></li>
    <li><a href="{{ route('profile')}}">Profile</a></li>
  </ul>
    @yield('content')
</body>
</html>