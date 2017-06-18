<?php include ROOT.'/views/layouts/header.php' ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Videos List<small>to database</small>
                        </h1>
                    </div>
                </div>
                <!-- /.row -->
                
                <div class="row">

                <?php foreach ($videos as $videosItem):?>

                    <div class="col-md-4 portfolio-item">
                        <a href="/video/<?php echo $videosItem['id']; ?>">
                            <img class="img-responsive" src='/upload/images/<?php echo $videosItem['id']?>.jpg' alt="">
                        </a>
                        <h3>
                            <a href="/video/<?php echo $videosItem['id']; ?>">Tittle: <?php echo $videosItem['name'];?></a>
                        </h3>
                        <p>Category: <?php echo $videosItem['category'];?></p>
                    </div>
                <!-- /.row -->

                <?php endforeach;?>

                </div>

<?php include ROOT.'/views/layouts/footer.php' ?>