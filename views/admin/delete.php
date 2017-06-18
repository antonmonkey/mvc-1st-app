<?php include ROOT.'/views/layouts/header.php' ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Delete video<small>from database</small>
                        </h1>
                    </div>
                </div>
                <!-- /.row -->

              	<h4>Delete video<?php echo $id; ?></h4>
              	<p>Are you shure? </p>

              	<form method="post">
              		<input class="btn btn-danger" type="submit" name="submit" value="DELETE">
              	</form>

<?php include ROOT.'/views/layouts/footer.php' ?>