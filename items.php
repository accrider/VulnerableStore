<?php include_once("inc/template.php"); ?>

<!DOCTYPE html>
<html lang="en">

<?php getHeader() ?>

<body>

<?php getNavigation() ?>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <div class="col-md-3">
                <p class="lead">Shop Name</p>
                <div class="list-group">
                    <a href="#" class="list-group-item">Category 1</a>
                    <a href="#" class="list-group-item">Category 2</a>
                    <a href="#" class="list-group-item">Category 3</a>
                </div>
            </div>

            <div class="col-md-9">

                <div class="row carousel-holder">

                    <div class="col-md-12">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img class="slide-image" src="images/skateboard_large.png" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="images/computer_large.png" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="images/console_large.png" alt="">
                                </div>
                            </div>
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                    </div>

                </div><br />

                <div class="row">
<?php
$result = $mysqli->query("select * from items") or trigger_error($mysqli->error." [$sql]");
while ($row = $result->fetch_array()) {
?>
                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="<?=$row['item_image']?>" alt="">
                            <div class="caption">
                                <h4 class="pull-right"><?='$' . number_format($row['item_price'],2)?></h4>
                                <h4><a href="item.php?id=<?=$row['item_id']?>"><?=$row['item_name']?></a>
                                </h4>
                                <p><?=$row['item_desc']?></p>
                            </div>
                        </div>
                    </div>
<?php
}
?>

                </div>

            </div>

        </div>

    </div>
    <!-- /.container -->

    <div class="container">

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
