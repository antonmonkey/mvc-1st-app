<?php include ROOT.'/views/layouts/header.php' ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Videos List<small>in our database</small>
                        </h1>
                    </div>
                </div>
                <!-- /.row -->
                
                <div class="row">
                    <div class="col-lg-12">
                        <div class="alert alert-info alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <i class="fa fa-info-circle"></i>  <strong>НРАВИТСЯ моя админка? </strong>Вот от куда HTML код - <a href="http://startbootstrap.com/template-overviews/sb-admin-2" class="alert-link">SB Admin 2</a>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-md-4 portfolio-item">
                        <a href="/video/<?php echo $videos['id']; ?>">
                            <img class="img-responsive" src='/upload/images/<?php echo $videos['id']; ?>.jpg' alt="">
                        </a>
                        <h3>
                            <a href="/video/<?php echo $videosItem['id']; ?>">Tittle: <?php echo $videos['name'];?></a>
                        </h3>
                        <p>Category: <?php echo $videos['category'];?></p>
                    </div>
                <!-- /.row -->
                </div>
                
<?php include ROOT.'/views/layouts/footer.php' ?>