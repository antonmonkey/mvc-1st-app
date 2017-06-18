<?php include ROOT.'/views/layouts/header.php' ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Videos list<small>in database</small>
                        </h1>
                    </div>
                </div>
                <!-- /.row -->

                <div class="table-responsive">

                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>№</th>
                                <th>Id</th>
                                <th>Title</th>
                                <th>Category</th>
                                <th>Image name</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; foreach ($videos as $videosItem):?>
                                <tr>
                                    <th><?php echo $i; ?></th>
                                    <th><?php echo $videosItem['id']; ?></th>
                                    <th><a href="/admin/video/<?php echo $videosItem['id']; ?>"><?php echo $videosItem['name']; ?></a></th>
                                    <th><?php echo $videosItem['category']; ?></th>
                                    <th><?php echo $videosItem['url']; $i++;?></th>
                                    <th><a href="/admin/video/update/<?php echo $videosItem['id'];?>">EDIT</a></th>
                                    <th><a href="/admin/video/delete/<?php echo $videosItem['id'];?>">DELETE</a></th>
                                </tr>
                            <?php endforeach;?>
                        </tbody>
                    </table>

                </div>

<?php include ROOT.'/views/layouts/footer.php' ?>