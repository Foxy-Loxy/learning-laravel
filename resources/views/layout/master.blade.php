<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Blog Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


    <!-- Custom styles for this template -->
    <link href="/css/blog/blog.css" rel="stylesheet">
  </head>

  <body>

    @include('layout.nav')

    <div class="container">

      <div class="row">

        <div class="col-sm-8 blog-main">


          <!-- content here -->
          @yield('content')

        <!--
          <nav class="blog-pagination">
            <a class="btn btn-outline-primary" href="/posts/older">Older</a>
            <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
          </nav>
        -->

        </div><!-- /.blog-main -->

        @include('layout.sidebar')

      </div><!-- /.row -->

    </div><!-- /.container -->

    @include('layout.footer')

  </body>
</html>
