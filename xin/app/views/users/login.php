<?php if(isset($_SESSION['user_id'])): ?>
<?php $this->view('mis/index'); ?>
<?php else : ?>
<?php require APPROOT . '/views/inc/header.php'; ?>
<div class="container">
  <h1 class="text-center mt-5">Management Information System</h1>
  <hr>
  <div class="row">
    <div class="col-md-6 mx-auto">
  <form class="mt-5" action="<?php echo URLROOT; ?>/users/login" method="post">
    <div class="card text-center">
      <div class="card-header">
        <h2>Login</h2>
      </div>
      <div class="card-body">
        <p><i class="fa fa-id-card-o" aria-hidden="true"></i> Username </p>
        <input class=" form-control input-group-sm <?php echo (!empty($data['username_err'])) ? 'is-invalid' : '';?>" type="text" name="username" placeholder="Username" value="">
        <div class="invalid-feedback"><?php echo $data['username_err'];?></div>
          <p><i class="fa fa-id-card-o" aria-hidden="true"></i> Password </p>
          <input class="form-control input-group-sm mb-3 <?php echo (!empty($data['password_err'])) ? 'is-invalid' : '';?>" type="password" name="password" placeholder="Password" value="">
        <div class="invalid-feedback"><?php echo $data['password_err'];?></div>
          <button type="submit" class="btn btn-primary btn-sm mb-3"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</button>
      </div>
    </div>
  </form>
</div>
  </div>
  <hr class="mt-5">
</div>
<?php require APPROOT . '/views/inc/footer.php'; ?>
<?php endif; ?>
