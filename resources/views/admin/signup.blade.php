<!DOCTYPE html>
<html>
  <head>
    <title>Admin Login</title>
    <!-- Bootstrap -->
    <link href="{{asset('admin/')}}/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="{{asset('admin/')}}/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
    <link href="{{asset('admin/')}}/assets/styles.css" rel="stylesheet" media="screen">
     <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <script src="{{asset('admin/')}}/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
  </head>
  <body id="login">
    <div class="container">

      <form class="form-signin">
        <h2 class="form-signin-heading">Please sign up</h2>
        <input type="text" class="input-block-level" placeholder="Email address">
        <input type="password" class="input-block-level" placeholder="Password">
        <input type="password" class="input-block-level" placeholder="Password">
        <button class="btn btn-large btn-primary" type="submit">Sign in</button>
      </form>

    </div> <!-- /container -->
    <script src="{{asset('admin/')}}/vendors/jquery-1.9.1.min.js"></script>
    <script src="{{asset('admin/')}}/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>