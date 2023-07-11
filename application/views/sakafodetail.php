<style>
    #regime{
        background-color:#00e950;
        color: white;
        width: 178px;
        height: 49px;
        float: right;
        margin-top: -62px;
    }
</style>
<div class="page-container">
    <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        
                    <div class="row">
                           
                            <div class="col-lg-12">
                                <!-- TOP CAMPAIGN-->
                                <div class="top-campaign">
                                    <h3 class="title-3 m-b-30">CRUD Regime</h3>
                                    <button  id="regime">+ Create New Regime</button>

                                    <div class="table-responsive">
                                        <table class="table table-top-campaign">
                                            <tbody>
                                            <?php for ($u=0; $u <count($regimes) ; $u++) { ?> 
                                                 
                                                <tr>
                                                    <td>Regime  <?php echo $regimes[$u]['idRegime']; ?></td>
                                                    <td><a href="#" style="color: blue;">Modifier</a></td>
                                                    <td><a href=" <?php echo site_url('regimeAdmin/deleteRegime/'.$regimes[$u]['idRegime']); ?>" style="color: red;" >Delete</a></td>
                                                </tr>
                                                <?php }?>        
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!--  END TOP CAMPAIGN-->
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <h3 class="title-5 m-b-35">CRUD Sakafo</h3>
                                 <button  class="item" data-toggle="modal" data-target="#editSakafo" data-placement="top" title="Create Sakafo"  id="regime">+ Create New Sakofo</button>
                                
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2">
                                        <thead>
                                            <tr>
                                               
                                                <th>Sakafo</th>
                                                <th>Sary</th>
                                                <th> Modification et delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php for ($i=0; $i <count($sakafos) ; $i++) { ?> 
                                            <tr class="tr-shadow">
                                              
                                                <td><?php echo $sakafos[$i]['NomSakafo']; ?></td>
                                                <td>
                                                    <span class="block-email"><img src="<?php echo base_url("assets/img/".$sakafos[$i]['photo']);?>" alt="xxx" style=" width: 70px; height: 70px; "></span>
                                                </td>
                                               
                                                <td>
                                                    <div class="table-data-feature" style="width: 116px;">
                                                    <a href="<?php echo site_url('sakafoAdmin/getIdSakafo').'?id='.$sakafos[$i]['idSakafo'] ; ?>">
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                            <i class="zmdi zmdi-edit"></i>
                                                        </button>
                                                        </a>
                                                        <a href="  <?php echo site_url('sakafoAdmin/deleteSakafo/'.$sakafos[$i]['idSakafo']); ?>">
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                            <i class="zmdi zmdi-delete"></i>
                                                        </button>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                       <?php }?>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE -->
                            </div>
                        </div>
                       
                        <div class="row">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <h3 class="title-5 m-b-35">CRUD Sport</h3>
                              <button  class="item" data-toggle="modal" data-target="#editSport" data-placement="top" title="Create Sport" id="regime">+ Create New Sport</button>       
                                       
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2">
                                        <thead>
                                            <tr>
                                               
                                                <th>Sport</th>
                                                <th> Modification et delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php for ($j=0; $j <count($sports) ; $j++) { ?>
                                                
                                            
                                            <tr class="tr-shadow">
                                              
                                                <td><?php echo $sports[$j]['NomSport']; ?></td>
                                                <td>
                                                    <div class="table-data-feature" style="width: 116px;">
                                                    <a href="<?php echo site_url('sportAdmin/getIdSport').'?id='.$sports[$j]['idSport'] ; ?>">
                                                       <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                            <i class="zmdi zmdi-edit"></i>
                                                        </button>
                                                        </a> 
                                                        <a href="  <?php echo site_url('sportAdmin/deleteSport/'.$sports[$j]['idSport']); ?>">
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                            <i class="zmdi zmdi-delete"></i>
                                                        </button>
                                                        </a>
                                                       
                                                    </div>
                                                </td>
                                            </tr>
                                       <?php }?>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE -->
                            </div>
                        </div>



                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</div>
<!-- Modal pour Create Sakafo -->
<div class="modal fade" id="editSakafo" tabindex="-1" role="dialog" aria-labelledby="editSakafoLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editSakafoLabel">Create Sakafo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="<?php echo site_url('sakafoAdmin/ajoutSakafo'); ?>" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="sakafoName">Sakafo Name</label>
        <input type="text" class="form-control" id="nom" name="nom" placeholder="Enter sakafo name">
    </div>
    <div class="form-group">
        <label for="sakafoDescription">Sary</label>
        <input type="file" class="form-control" id="file" name="file" rows="3" placeholder="Enter sakafo description" autocomplete="off">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

      </div>
    </div>
  </div>
</div>

<!-- Modal pour Create Sport -->
<div class="modal fade" id="editSport" tabindex="-1" role="dialog" aria-labelledby="editSportLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editSportLabel">Create Sport</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo  site_url('sportAdmin/ajoutSport'); ?>" method="post">
          <div class="form-group">
            <label for="sportName">Sport Name</label>
            <input type="text" class="form-control" id="nom" name="nom" placeholder="Enter sport name">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>
