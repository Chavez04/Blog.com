<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
  <head>
    <title><?php echo $titulo ?> </title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="<?php  echo base_url()?>assets/css/bootstrap.min.css" type="text/css" rel="stylesheet">
      <link href="<?php  echo base_url()?>assets/css/Styles.css" type="text/css" rel="stylesheet">

  </head>
  <body>
<div class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="<?php base_url()?>/Home/index" class="navbar-brand">Blog</a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="<?php base_url()?>/Home/index">Home</a></li>

                <li><a href="<?php base_url()?>/Profile_controller"><?php
                if ($this->session->userdata('logueado'))
                {
                  echo "Profile";
                }else{
                  echo "";
                }
                 ?></a></li>

                 <li><a href="<?php base_url()?>/Home/vista_newpost"><?php
                 if ($this->session->userdata('logueado'))
                 {
                   echo "New post";
                 }else{
                   echo "";
                 }
                  ?></a></li>
             </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <span class="glyphicon glyphicon-user"></span> 
                        <strong><?php
                        if ($this->session->userdata('logueado'))
                        {
                            echo $this->session->userdata('username');

                          }else{
                            echo "Guest";
                          }
                          ?></strong>
                        <span class="glyphicon glyphicon-chevron-down"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <div class="navbar-login">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <p class="text-center">
                                          <span class="glyphicon glyphicon-user icon-size"></span>
                                      </p>
                                  </div>
                                  <div class="col-lg-8">
                                  <p class="text-left"><strong><?php
                                  if ($this->session->userdata('logueado'))
                                  {
                                      echo $this->session->userdata('username');

                                    }else{
                                      echo "Guest";
                                    }
                                    ?></strong>
                                    </p>

                                      <p class="text-left small"><?php
                                        if ($this->session->userdata('logueado'))
                                        {
                                            echo $this->session->userdata('email');

                                          }else{
                                            $url = base_url().'Login';
                                           echo "<a href='$url' class='btn btn-success btn-block'>Sign In</a>";
                                          }
                                          ?>

                                      </p>

<?php if ($this->session->userdata('logueado'))
{ ?>
    <p class="text-left">
      <a href="#" class="btn btn-primary btn-block btn-sm">Update profile</a>
      </p>
        </div>
          </div>
            </div>
              </li>
                <li class="divider"></li>
                  <li>
                    <div class="navbar-login navbar-login-session">
                      <div class="row">
                        <div class="col-lg-12">
                          <p>
    <a href="<?php echo base_url()?>Login/logout" class="btn btn-danger btn-block">Log Out</a>
    <?php }?>
          </p>
            </div>
              </div>
                </div>
                  <?php echo form_close() ?>
                    </li>
                  </ul>
              </li>
          </ul>
      </div>
  </div>
</div>
