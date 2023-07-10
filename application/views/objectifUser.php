<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up</title>

    <!-- Font Icon -->
    <link rel="icon" type="image/png" href="<?php echo base_url("assets/images/logo.png"); ?>"/>
    <link rel="stylesheet" href="<?php echo base_url("assets/fonts/material-icon/css/material-design-iconic-font.min.css"); ?>">

    <!-- Main css -->
    <link rel="stylesheet" href="<?php echo base_url("assets/inscription/css/style.css"); ?>">
</head>
<body>

    <div class="main">

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                    <form action="<?php echo site_url('AccueilUser/bienvenu'); ?>" method="POST" id="signup-form" class="signup-form">
                      <h2 class="form-title">Choix du régime</h2>
                        <div class="form-group">
                            <select class="form-input" name="gender" id="gender">
                                <option>Objectif du régime</option>
                                <option value="1">prise du poids</option>
                                <option value="2">perdre du poids</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-input" name="poids" id="taille" placeholder="poids que vous voulez perdre ou gagner"/>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Commencer le régime"/>
                        </div>
                    </form>
                  <!--   <p class="loginhere">
                        Have already an account ? <a href="<?php echo site_url('Welcome/index'); ?>" class="loginhere-link">Login here</a>
                    </p> -->
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="<?php echo base_url("assets/inscription/vendor/jquery/jquery.min.js"); ?>"></script>
    <script src="<?php echo base_url("assets/inscription/js/main.js"); ?>"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>