@extends('layouts.handler')

@section('content')
<div class="row">
  <!-- Blog Entries Column -->
  <div class="col-md-8">

    <!-- Alert -->
  @if (session('status'))
      <div class="alert alert-success" role="alert">
          {{ session::get('status') }}
      </div>
      <div class="alert alert-success" role="alert">
        OK
      </div>
  @endif
    <script> alert(`Inicio exitoso!!`); //Tienes 100 años!
    </script>
    <h1 class="my-4">My Site
      <small>Video player</small>
    </h1>

    <div class="card mb-4">
    <div class="card-body">

    <!-- Blog Post PRUEBA DE VIDEO-->
    <video
        id="my-video"
        class="video-js"
        controls
        preload="auto"

        poster="MY_VIDEO_POSTER.jpg"
        data-setup="{}"
    >
        <source src="{{ asset('video/LoslocAddams.mp4') }}" type="video/mp4" />

    </video>


        <h2 class="card-title">Los locos adams</h2>
        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!</p>
        <a href="#" class="btn btn-primary">Read More &rarr;</a>
      </div>
      <div class="card-footer text-muted">
        Publicado en Enero 28, 2021 por
        <a href="#">KEVIN ROJAS</a>
      </div>
    </div>
    <!-- Blog Post ttypwjwycjqsosmj -->
    <div class="card mb-4">
      <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap">
      <div class="card-body">
        <h2 class="card-title">Post Title</h2>
        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!</p>
        <a href="#" class="btn btn-primary">Read More &rarr;</a>
      </div>
      <div class="card-footer text-muted">
        Posted on January 1, 2020 by
        <a href="#">enopl</a>
      </div>
    </div>
    <!-- Blog Post -->
    <div class="card mb-4">
      <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap">
      <div class="card-body">
        <h2 class="card-title">Post Title</h2>
        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!</p>
        <a href="#" class="btn btn-primary">Read More &rarr;</a>
      </div>
      <div class="card-footer text-muted">
        Posted on January 1, 2020 by
        <a href="#">Start Bootstrap</a>
      </div>
    </div>
    <!-- Pagination -->
    <ul class="pagination justify-content-center mb-4">
      <li class="page-item">
        <a class="page-link" href="#">&larr; Older</a>
      </li>
      <li class="page-item disabled">
        <a class="page-link" href="#">Newer &rarr;</a>
      </li>
    </ul>
  </div>
  <!-- Sidebar Widgets Column -->

  <div class="col-md-4">
    <!-- Search Widget -->
    <div class="card my-4">
      <h5 class="card-header">Buscar</h5>
      <div class="card-body">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Buscar por...">
          <span class="input-group-append">
            <button class="btn btn-secondary" type="button">Go!</button>
          </span>
        </div>
      </div>
    </div>


    <!-- Categories Widget -->
    <div class="card my-4">
      <h5 class="card-header">Categories</h5>
      <div class="card-body">
        <div class="row">
          <div class="col-lg-6">
            <ul class="list-unstyled mb-0">
              <li>
                <a href="#">Web Design</a>
              </li>
              <li>
                <a href="#">HTML</a>
              </li>
              <li>
                <a href="#">Freebies</a>
              </li>
            </ul>
          </div>
          <div class="col-lg-6">
            <ul class="list-unstyled mb-0">
              <li>
                <a href="#">JavaScript</a>
              </li>
              <li>
                <a href="#">CSS</a>
              </li>
              <li>
                <a href="#">Tutorials</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- Side Widget -->
    <div class="card my-4">
      <h5 class="card-header">Side Widget</h5>
      <div class="card-body">
        You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!
      </div>
    </div>
  </div>
</div>
<!-- /.row -->

@endsection
