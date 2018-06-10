<header class="navbar navbar-static-top bs-docs-nav" id="top" role="banner">
  <div class="container">
    <div class="navbar-header">
      <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#bs-navbar" aria-controls="bs-navbar" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a href="admin_home.php" class="navbar-brand">CLAD</a> </div>
    <nav id="bs-navbar" class="collapse navbar-collapse"><?php echo ENVIRONMENT;?>
      <ul class="nav navbar-nav">
        <li> <a href="members.php"><i class="fa fa-users" title="Members"></i></a> </li>
        <li> <a href="add_product.php"><i class="fa fa-plus" title="Add Products"></i></a> </li>
        <li> <a href="allproduct.php"><i class="fa fa-globe" title="All Products"></i></a> </li>
        <li> <a href="search.php"><i class="fa fa-search" title="Search Products"></i></a> </li>
        <li> <a href="reports.php"><i class="fa fa-flag" title="Reports"></i></a> </li>
        

      </ul>
      <ul class="nav navbar-nav navbar-right">
     
</li>
        <li><a title="Sign Out" href="logout.php"><i class="fa fa-user"></i>&nbsp;
<?php echo strtolower($_SESSION['login_user']);?>&nbsp;<i class="fa fa-sign-out" ></i></a> </li>
      </ul>
    </nav>
  </div>
</header>
