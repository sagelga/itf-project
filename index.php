<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "blog";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM content order by datetime DESC";
$result = $conn->query($sql);

?>


<?php $root = realpath($_SERVER["DOCUMENT_ROOT"]); include("$root/Templates/NavigationBar.html");?>

<center>
  <div class="col-xs-10 col-xs-offset-1">
    <div class="row">

      <?php
      if ($result->num_rows > 0) {

        while($row = $result->fetch_assoc()) {
          echo '<div class="col-xs-4">';
          echo '<img src="'.$row["content"].'" alt="Raised Image" class="img-rounded img-responsive img-raised">';
          echo '<p><h5>'.$row["name"].'</h5></p>';
          echo '</div>';
        }
      }

      $conn->close();

      ?>
      <!-- Preview IMG -->
      <div class="col-xs-4">
        <img src="https://c7.staticflickr.com/9/8411/28311885582_c573e36e69_k.jpg" alt="Raised Image" class="img-rounded img-responsive img-raised">
        <p><h5> Mai Ajirapa</h5></p>
      </div>
      <div class="col-xs-4">
        <img src="https://c8.staticflickr.com/9/8374/29302413735_a321381ce4_k.jpg" alt="Raised Image" class="img-rounded img-responsive img-raised">
        <p><h5> Quant Kittiquant</h5></p>
      </div>
      <div class="col-xs-4">
        <img src="https://c1.staticflickr.com/9/8255/29862705832_76b937ed87_k.jpg" alt="Raised Image" class="img-rounded img-responsive img-raised">
        <p><h5> Phaerw Sataporn</h5></p>
      </div>

    </div>
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <div class="well text-center">
          <h1>Create your photo diary with us!<br><small>It's free! No credit card required.</small></h1>
        </div>
      </div>
    </div>
  </div>

  <div class="row">

    <div class="section" id="carousel">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2">

            <!-- Carousel Card -->
            <div class="card card-raised card-carousel">
              <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <div class="carousel slide" data-ride="carousel">

                  <!-- Indicators -->
                  <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                  </ol>

                  <!-- Wrapper for slides -->
                  <div class="carousel-inner">
                    <div class="item active">
                      <img src="https://c1.staticflickr.com/2/1625/24866750080_d494791524_k.jpg" alt="Awesome Image" width="100%" height="200">
                      <div class="carousel-caption">
                        <h4>By SingleEarkPhotography</h4>
                      </div>
                    </div>
                    <div class="item">
                      <img src="https://c4.staticflickr.com/2/1661/24062072803_3c711176d1_k.jpg" alt="Awesome Image" width="100%" height="200">
                      <div class="carousel-caption">
                        <h4>By SingleEarkPhotography</h4>
                      </div>
                    </div>
                    <div class="item">
                      <img src="https://c4.staticflickr.com/2/1586/25158021459_84ddef0637_k.jpg" alt="Awesome Image" width="100%" height="200">
                      <div class="carousel-caption">
                        <h4>By SingleEarkPhotography</h4>
                      </div>
                    </div>
                  </div>

                  <!-- Controls -->
                  <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                    <i class="material-icons">keyboard_arrow_left</i>
                  </a>
                  <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                    <i class="material-icons">keyboard_arrow_right</i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</center>
<!-- End Carousel Card -->
<?php $root = realpath($_SERVER["DOCUMENT_ROOT"]); include("$root/Templates/FooterBar.html");?>
