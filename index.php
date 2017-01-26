
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Awesome-PHP</title>

    <!-- Bootstrap core CSS -->
    <link href="http://bootswatch.com/spacelab/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/styles.css">

    <!-- Custom styles for this template -->
    <link href="../assets/justified-nav.css" rel="stylesheet">
  </head>

  <body>
<?php 
require_once 'templates/header.php';

// OOP
require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/core/init.php';
$m = new App\Models\AboutModel;
$c = new App\Controllers\AboutController($m);
$v = new App\Views\AboutView($c,$m);
?>


      <!-- Jumbotron -->

      <div class="jumbotron">
        <h1 class="main-header">

        <?php echo $v->header(); ?>
          
        </h1>
        <p class="lead">This is the input from the View Class which inherits the the Controller Class which inherits from the Parent Class Needs new stylesheet for custom styles - with and without Bootstrap and Foundation.</p>
        <p>
          <?php 
            echo $v->content();
           ?>
        </p>
        <ul class="list-inline list-unstyled">
        <li> <a href="#">Sign Up &nbsp;<img src="assets/images/php.png" width="54" height="32" alt=""></a> </li>
          <li> <a href="#">Sign Up with Twitter &nbsp;<img src="assets/images/twitter.png" width="32" height="32" alt=""></a> </li>
          <li> <a href="#">Sign Up with Facebook &nbsp;<img src="assets/images/facebook.png" width="64" height="32" alt=""></a> </li>
          <li> <a href="#">Sign Up with Github &nbsp;<img src="assets/images/github.png" width="32" height="32" alt=""></a> </li>
          <li> <a href="#">Sign Up with Google &nbsp;<img src="assets/images/google.png" width="32" height="32" alt=""></a> </li>
        </ul>
<!--         <p><a class="btn btn-lg btn-success" href="#" role="button">Awesome-PHP Blog</a></p>
 -->      </div>

      <!-- FIRST ROW -->
      <div class="row">
        <div class="col-lg-4">
          <h2>Community</h2>
          <p>
            <ul class="list-unstyled">
              <li> <a href="http://www.php.net">PHP Documentation</a> </li>
              <li> <a href="#">Link</a> </li>
              <li> <a href="#">Link</a> </li>
            </ul>
          </p>
         <!--  <p><a class="btn btn-primary" href="#" role="button">View details &raquo;</a></p> -->
        </div>
        <div class="col-lg-4">
          <h2>Getting Started</h2>
          <p>
            <ul class="list-unstyled">
              <li> <a href="http://www.phptherightway.com">Php The Right Way</a> </li>
              <li> <a href="http://www.laracasts.com">Laracasts</a> </li>
              <li> <a href="http://www.tutsplus.com">Tuts Plus</a> </li>
              <li> <a href="#">Sitepoint</a> </li>
              <li> <a href="#">Enavato</a> </li>
            </ul>
           </p>
         <!--  <p><a class="btn btn-primary" href="#" role="button">View details &raquo;</a></p> -->
       </div>
        <div class="col-lg-4">
          <h2>Frameworks</h2>
          <p>
            <ul class="list-unstyled">
              <li> <a href="http://www.laravel.com">Laravel</a> </li>
              <li> <a href="#">Symfony</a> </li>
              <li> <a href="#">SlimPHP</a> </li>
              <li> <a href="#">Silex</a> </li>
              <li> <a href="#">CakePHP</a> </li>
              <li> <a href="#">Yii</a> </li>
              <li> <a href="#">Medoo</a> </li>
              <li> <a href="#">Aura</a> </li>
              <li> <a href="#">Phalcon</a> </li>
            </ul>
          </p>
         <!--  <p><a class="btn btn-primary" href="#" role="button">View details &raquo;</a></p> -->
        </div>
      </div>

   <!-- SECOND ROW -->
      <div class="row">
        <div class="col-lg-4">
          <h2>Databases</h2>
          <p>
            <ul class="list-unstyled">
              <li> <a href="#">MySql</a> </li>
              <li> <a href="#">PostgreSQL</a> </li>
              <li> <a href="#">MongoDB</a> </li>
              <li> <a href="#">CouchDB</a> </li>
            </ul>
          </p>
         <!--  <p><a class="btn btn-primary" href="#" role="button">View details &raquo;</a></p> -->
        </div>
        <div class="col-lg-4">
          <h2>ORM Abstractions</h2>
          <p>
            <ul class="list-unstyled">
              <li> <a href="#">PDO</a> </li>
              <li> <a href="#">RedBean</a> </li>
              <li> <a href="#">Eloquent</a> </li>
              <li> <a href="#">Doctrine</a> </li>
            </ul>
           </p>
         <!--  <p><a class="btn btn-primary" href="#" role="button">View details &raquo;</a></p> -->
       </div>
        <div class="col-lg-4">
          <h2>Virtualization</h2>
          <p>
            <ul class="list-unstyled">
              <li> <a href="#">Vagrant</a> </li>
              <li> <a href="#">Otto</a> </li>
              <li> <a href="#">Docker</a> </li>
            </ul>
          </p>
         <!--  <p><a class="btn btn-primary" href="#" role="button">View details &raquo;</a></p> -->
        </div>
      </div>
      
      <!-- THIRD ROW -->
    
<div class="row">
        <div class="col-lg-4">
          <h2>Design Patterns</h2>
          <p>
            <ul class="list-unstyled">
              <li> <a href="#">Link</a> </li>
              <li> <a href="#">Link</a> </li>
              <li> <a href="#">Link</a> </li>
            </ul>
          </p>
         <!--  <p><a class="btn btn-primary" href="#" role="button">View details &raquo;</a></p> -->
        </div>
        <div class="col-lg-4">
          <h2>Files/Streams</h2>
          <p>
            <ul class="list-unstyled">
              <li> <a href="#">Link</a> </li>
              <li> <a href="#">Link</a> </li>
              <li> <a href="#">Link</a> </li>
            </ul>
           </p>
         <!--  <p><a class="btn btn-primary" href="#" role="button">View details &raquo;</a></p> -->
       </div>
        <div class="col-lg-4">
          <h2>Dependency Injection</h2>
          <p>
            <ul class="list-unstyled">
              <li> <a href="#">Link</a> </li>
              <li> <a href="#">Link</a> </li>
              <li> <a href="#">Link</a> </li>
            </ul>
          </p>
         <!--  <p><a class="btn btn-primary" href="#" role="button">View details &raquo;</a></p> -->
        </div>
      </div>

      <!-- FOURTH ROW -->
<div class="row">
        <div class="col-lg-4">
          <h2>Security</h2>
          <p>
            <ul class="list-unstyled">
              <li> <a href="#">Link</a> </li>
              <li> <a href="#">Link</a> </li>
              <li> <a href="#">Link</a> </li>
            </ul>
          </p>
         <!--  <p><a class="btn btn-primary" href="#" role="button">View details &raquo;</a></p> -->
        </div>
        <div class="col-lg-4">
          <h2>Deployment</h2>
          <p>
            <ul class="list-unstyled">
              <li> <a href="#">Link</a> </li>
              <li> <a href="#">Link</a> </li>
              <li> <a href="#">Link</a> </li>
            </ul>
           </p>
         <!--  <p><a class="btn btn-primary" href="#" role="button">View details &raquo;</a></p> -->
       </div>
        <div class="col-lg-4">
          <h2>Resources</h2>
          <p>
            <ul class="list-unstyled">
              <li> <a href="#">Link</a> </li>
              <li> <a href="#">Link</a> </li>
              <li> <a href="#">Link</a> </li>
            </ul>
          </p>
         <!--  <p><a class="btn btn-primary" href="#" role="button">View details &raquo;</a></p> -->
        </div>
      </div>

      

<?php 
// Footer
require_once 'templates/footer.php';
 ?>
 </div> <!-- end container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js" integrity="sha384-Plbmg8JY28KFelvJVai01l8WyZzrYWG825m+cZ0eDDS1f7d/js6ikvy1+X+guPIB" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>