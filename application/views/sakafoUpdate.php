<link href="//db.onlinewebfonts.com/c/a4e256ed67403c6ad5d43937ed48a77b?family=Core+Sans+N+W01+35+Light" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="<?php echo base_url("assets/updatesakafo/css/form.css"); ?>" type="text/css">
<div class="body-content">
  <div class="module">
    <h1>Update Sakafo</h1>
    <form class="form" action="<?php echo site_url('sakafoAdmin/updateSakafo'); ?>" method="post" enctype="multipart/form-data" autocomplete="off">
      <div class="alert alert-error"></div>
      <input type="hidden" value="<?php echo $idSakafo; ?>" name="idSakafo" id="idSakafo">
      <input type="text" placeholder="Nom Sakafo" name="nom" required />
      <div class="avatar"><label>Select your photo: </label><input type="file" name="file" accept="image/*" required /></div>
      <input type="submit" value="Register" name="register" class="btn btn-block btn-primary" />
    </form>
  </div>
</div>