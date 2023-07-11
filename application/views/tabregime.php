<div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Basic Tables </h3>
             
            </div>
            <div class="row">
              <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Regime</h4>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>Sakafo</th>
                            <th>Quantite</th>
                            <th>Sary</th>
                            
                          </tr>
                        </thead>
                        <tbody>
                        <?php for ($i=0; $i < count($regime); $i++) { ?>
                          <tr>
                            <td><?php echo $regime[$i]['NomSakafo']; ?></td>
                            <td><?php echo $regime[$i]['quantite']; ?> %</td>
                            <td> <img src="<?php echo base_url("assets/img/".$regime[$i]['photo']);?>" alt="xxx" style=" width: 70px; height: 70px; "> </td>
                          </tr>
                          <?php } ?>
                        </tbody>
                        <h3 style="color:gray;">Prix regime:  <?php echo $regime[0]['prix']; ?> Ar</h3>
                        <h3  style="color:gray;">Duree regime: <?php echo $regime[0]['dureeRegime']; ?> j</h3>
                        
                      </table>
                      
                    </div>
                  </div>
                  
                 <button style="background-color:green;"><a href="<?php echo site_url('Code/verification').'?parametre='.$regime[0]['prix']; ?>">Payer</a></button>
                </div>
              </div>
              <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Sport</h4>
                    <div class="table-responsive">
                      <table class="table table-hover">
                        <thead>
                          <tr>
                            <th>Sport</th>
                            <th>Durée</th>
                            
                          </tr>
                        </thead>
                        <tbody>
                          
                        <?php for ($j=0; $j < count($sport); $j++) { ?>
                          <tr>
                            <td><?php echo $sport[$j]['NomSport']; ?></td>
                            <td><?php echo $sport[$j]['duree']; ?> min</td>
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
          <p><a href="<?php echo site_url('regime/tableauPdf'); ?>">Voir pdf</a></p>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2020</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin templates</a> from Bootstrapdash.com</span>
            </div>
          </footer>
          <!-- partial -->
        </div>