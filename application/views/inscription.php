<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
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
                    <form action="<?php echo site_url('inscription/inscriptionUser'); ?>" method="POST" id="signup-form" class="signup-form">
                        <h2 class="form-title">Create account</h2>
                        <div class="form-group">
                            <input type="text" class="form-input" name="nom" id="nom" placeholder="Your Name"/>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-input" name="mdp" id="mdp" placeholder="Password"/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="genre" id="genre" placeholder="Genre"/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="taille" id="taille" placeholder="Taille"/>
                        </div>
                        
                        <div class="form-group">
                            <input type="text" class="form-input" name="poids" id="poids" placeholder="Poids"/>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                            <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Sign up"/>
                        </div>
                    </form>
                    <p class="loginhere">
                        Have already an account ? <a href="<?php echo site_url('Welcome/index'); ?>" class="loginhere-link">Login here</a>
                    </p>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="<?php echo base_url("assets/vendors/jquery/jquery-3.2.1.min.js"); ?>"></script>
    <script src="<?php echo base_url("assets/inscription/js/main.js"); ?>"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>