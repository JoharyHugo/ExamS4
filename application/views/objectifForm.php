        <div class="main-panel">
          <div class="content-wrapper">
           <div class="row ">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <center><h4 class="card-title">Choix du regime</h4></center>
                    <form class="formSpecial" action="<?php echo site_url('Objectif/insertNewObjectif') ?>" method="post" style="background-color: white;">
                      <label class="labelSpecial" for="idob" style="color: black;" >Choisir Objectif</label>
                      <select name="id" id="idob" >
                        <?php for ($i=0; $i <count($objectif) ; $i++) { ?>
                        <option value="<?php echo $objectif[$i]['idObjectif']; ?>"><?php echo $objectif[$i]['NomObjectif']; ?></option>
                         <?php } ?>
                      </select>
                      <label class="labelSpecial" for="poid" style="color: black;">Poid a gagne ou a perdre</label>
                      <input class="inputSpecial" type="number" name="poid" id="poid">
                      <input type="submit" value="Valider">
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>