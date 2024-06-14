<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">


    <title><?php echo $title; ?></title>

    <!-- Bootstrap core CSS -->
    <?php echo Asset::css('bootstrap.css'); ?>

  </head>

  <body>

    <div class="blog-masthead">
      <div class="container">
        <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <a class="navbar-brand" href="/">NadetDev</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="/">Home</a></li>
        <li><a href="/post/add">Add</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
      </div>
    </div>

    <div class="container">

      <div class="blog-header">
        <h1 class="blog-title">FuelPHP Blog Demo</h1>
        <p class="lead blog-description">Efficient & simple PHP Framework</p>
      </div>

      <div class="row">

        <div class="col-sm-8 blog-main">

          <?php echo $content; ?>

        </div>

        <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
          <div class="sidebar-module sidebar-module-inset">
            <h4>About</h4>
            <p>NadetDev is a passionate web developer with around ten years of experience on technologies such as Java, Javascript, Tyepscript, PHP, .Net C#, Flutter.</p>
          </div>


        </div><!-- /.blog-sidebar -->

      </div><!-- /.row -->

    </div><!-- /.container -->

    <footer class="blog-footer">
       <p class="text-center">Blog built with FuelPHP</p>
    </footer>
  </body>
</html>
