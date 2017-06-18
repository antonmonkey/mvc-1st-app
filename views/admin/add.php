<?php include ROOT.'/views/layouts/header.php' ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Add video<small>to database</small>
                        </h1>
                    </div>
                </div>
                <!-- /.row -->

                <form method="POST" action="#" style="margin-top: 20px;" enctype="multipart/form-data">
                  <div class="row">
                      <div class="col-lg-6">
                        <div class="input-group">
                          <span class="input-group-addon" id="sizing-addon1">Название видоса</span>
                            <input name="name" type="text" class="form-control" placeholder="Тайтл видоса" aria-describedby="sizing-addon1">
                        </div>
                      </div>
                  </div>
                  <div class="row margin-top">
                      <div class="col-lg-6">
                        <div class="input-group">
                          <span class="input-group-addon" id="sizing-addon1">Катеория</span>
                            <input name="category" type="text" class="form-control" placeholder="через пробел. пример - aerial dop" aria-describedby="sizing-addon1">
                        </div>
                      </div>
                  </div>
                  <div class="row margin-top">
                      <div class="col-lg-6">
                        <div class="input-group">
                          <span class="input-group-addon" id="sizing-addon1">Ссылка на видос</span>
                            <input name="url" type="text" class="form-control" placeholder="https://vimeo.com/145185300" aria-describedby="sizing-addon1">
                        </div>
                      </div>
                  </div>
                  <div class="row margin-top">
                      <div class="col-lg-12">
                        <input type="file" name="imgfile">
                      </div>
                  </div>

                  <div class="col-lg 12 margin-top">
                    <input href="" class="btn btn-lg btn-primary" name='submit' type="submit" value="Отправить"/>
                  </div>
                </form>

<?php include ROOT.'/views/layouts/footer.php' ?>