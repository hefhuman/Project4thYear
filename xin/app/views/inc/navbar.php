<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-3">
      <a class="navbar-brand" href="<?php echo URLROOT ?>">Management Information System</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Welcome <?php echo $_SESSION['user_name']; ?> <i class="fa fa-user-circle-o" aria-hidden="true"></i></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="<?php echo URLROOT;?>/users/logout">Logout</a>
            </li>
        </ul>
      </div>
    </nav>
