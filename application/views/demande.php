<body class="animsition">
<div class="page-wrapper">
        <!-- HEADER MOBILE-->
        
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
          
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                
                            </div>
                        </div>    
                        <div class="row">
                            <div class="col-lg-9">
                                <h2 class="title-1 m-b-25">Les Demandes  de Code </h2>
                                <div class="table-responsive table--no-card m-b-40">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>Nom</th>
                                                <th>Code</th>
                                                <th>Prix</th>
                                                <th>Valider</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php for ($i=0; $i <count($demandes) ; $i++) { ?>
                                               
                                              
                                            <tr>
                                                <td><?php echo $demandes[$i]['nom']; ?></td>
                                                <td><?php echo $demandes[$i]['code']; ?></td>
                                                <td><?php echo $demandes[$i]['prix']; ?></td>
                                                <td><a href="<?php echo site_url('Code/updatecode?idCodeUser='. urlencode($demandes[$i]['idCodeUser']) . '&idcode='. urlencode($demandes[$i]['idCode']) . '&iduser=' . urlencode($demandes[$i]['idUser']) .'&prix=' . urlencode($demandes[$i]['prix'] ) );?>">Valider</a></td>
                                            </tr>
                                            <?php   } ?>
                                        </tbody>
                                    </table>
                                </div>
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
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>