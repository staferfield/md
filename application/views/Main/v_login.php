<?php
        //   if ($_SERVER["REQUEST_METHOD"] == "POST") {
        //     $username = $password = "";
        //     $username = $_POST['username'];
        //     $password = $_POST['password'];
            
        //     include_once "koneksi.php";

        //       // This SQL statement selects ALL from the table 'Locations'
        //       $sql = "SELECT * FROM user_new WHERE username='". $username . "' and password='". MD5($password) ."'";
        //       if (mysqli_num_rows(mysqli_query($con, $sql))){

        //           session_start(); // memulai session
        //           $_SESSION["username"] = $username;

        //           header("location: index.php");

        //       } else {
                ?>
                <SCRIPT type="text/javascript">
                // alert('Username atau Password salah');
                // window.location.href="login.php";
                </SCRIPT>
                <?php
        //       }
        //   }
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url() . 'assets/bootstrap/css/bootstrap.min.css' ?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url().'dist/css/AdminLTE.min.css';?>">


  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-box-body">
    <h1 class="login-box-msg">Login</h1>

    <!-- Form login -->
    <form action="<?php echo site_url('login/loginAction'); ?>" method="post">
      <div class="form-group has-feedback">
        <input type="email" name="email" class="form-control" placeholder="Email" required="required" />
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="password" class="form-control" placeholder="Password" required="required" />
      </div>
      <div class="row">
        <!-- /.col -->
        <div class="col-xs-12">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Login</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url().'assets/jQuery/jquery-2.2.3.min.js';?>"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url().'assets/bootstrap/js/bootstrap.min.js';?>"></script>

</body>
</html>
