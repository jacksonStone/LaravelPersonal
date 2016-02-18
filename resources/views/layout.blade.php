<!DOCTYPE html>
<html>
    <head>
      <title>Laravel</title>


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="/css/app.css" media="screen" title="no title" charset="utf-8">

  </head>
  <body>
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#top">J.S.</a>
        </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li><a data-toggle="collapse" data-target=".navbar-collapse" href="#2012">2012 <span class="sr-only">(current)</span></a></li>
            <li><a data-toggle="collapse" data-target=".navbar-collapse" href="#2014">2014</a></li>
            <li><a data-toggle="collapse" data-target=".navbar-collapse" href="#2015">2015</a></li>
            <li><a data-toggle="collapse" data-target=".navbar-collapse" href="#Recently">Present</a></li>
            <li><a data-toggle="collapse" data-target=".navbar-collapse" href="#contact">Contact</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
    <div class="row" ng-attr-id="top" style="margin-bottom: 20px; margin-top: 50px; padding-bottom:60px; border-bottom: solid white 3px">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="row" style="margin-bottom:30px;">
                <div class="col-md-12"><img style="max-width:300px; padding-top: 40px;" src="images/Circle_Picture.png"></div>
            </div>
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-4"><a href="images/resume.pdf" target="_blank"><div class="main-item">RESUME</div></a></div>
                <div class="col-md-4"><a href="images/transcript.pdf" target="_blank"><div class="main-item">TRANSCRIPT</div></a></div>
                <div class="col-md-2"></div>
            </div>
        </div>
        <div class="col-md-3"></div>
    </div>

        @yield('content')

    </body>
    <div class="contact-me">
      <h1 id="contact">Contact</h1>
      <div class="row">
        <div class="col-md-3"><h3 class="email"><a href="https://www.facebook.com/jackson.stone.3720" target="_blank">Facebook</a></h3></div>
        <div class="col-md-3"><h3 class="email"><a href="https://twitter.com/CpuStone" target="_blank">Twitter</a></h3></div>
        <div class="col-md-3"><h3 class="email"><a href="https://www.linkedin.com/in/jastone2" target="_blank">Linkedin</a></h3></div>
        <div class="col-md-3"><h3 class="email"><a href="mailto:jackson@mytorch.com" target="_top">jackson@mytorch.com</a></h3></div>
      </div>
    </div>

</html>
