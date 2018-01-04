<?php require APPROOT . '/views/inc/header.php'; ?>
<?php require APPROOT . '/views/inc/navbar.php'; ?>

<div class="container">
<div class="card mt-5">
  <div class="card-header">
    <h5>Panel</h5>
  </div>
  <div class="card-body pl-5">
    <div class="row">
    <div class="col mx-auto">
    <a href="<?php echo URLROOT; ?>/panel/add"><i class="fa fa-user-plus fa-3x ml-3"></i>
    <p>Add Teacher</p></a>
    </div>
    <div class="col mx-auto">
    <i class="fa fa-user-times fa-3x ml-3"></i>
    <p>Remove Account</p>
    </div>
    <div class="col mx-auto">
    <i class="fa fa-cogs fa-3x ml-3"></i>
    <p>Admin Settings</p>
    </div>
    <div class="col mx-auto">
    <i class="fa fa-database fa-3x ml-3"></i>
    <p>View Database</p>
    </div>
    <div class="col mx-auto">
    <i class="fa fa-bitcoin fa-3x"></i>
    <p>Bitcoin</p>
    </div>
    <div class="col mx-auto">
    <i class="fa fa-file fa-3x"></i>
    <p>Files</p>
    </div>
    </div>
  </div>
</div>
</div>

<?php require APPROOT . '/views/inc/footer.php'; ?>