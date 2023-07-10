<div class="main-panel">
          <div class="content-wrapper">
           <div class="row ">
          
              <div class="col-lg-6 grid-margin stretch-car">
                <div class="card">
                  <div class="card-body">

                    <center><h4 class="card-title"> Entrer le Code</h4></center>
                    <form class="formSpecial" action="<?php echo site_url('Code/insertionCode') ?>" method="post" style="background-color: white;">
                      <label class="labelSpecial" for="poid" style="color: black;">Code</label>
                      <input class="inputSpecial" type="number" name="code" id="poid" style="margin-top: -64px;">
                      <input type="submit" value="Valider">
                    </form>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Code</h4>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>code</th>
                            <th>prix</th>
                            
                            
                          </tr>
                        </thead>
                        <tbody>
                        <?php for ($i=0; $i <count($code) ; $i++) { ?>
                          <tr>
                            <td><?php  echo $code[$i]['code']; ?></td>
                            <td> <?php  echo $code[$i]['prix']; ?></td>
                           
                          </tr>
                          <?php } ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>


            
              
          </div>
</div>