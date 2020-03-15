<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Login</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="<?php echo base_url().'Style/plugins/fontawesome-free/css/all.min.css';?>">
        <!-- icheck bootstrap -->
        <link rel="stylesheet" href="<?php echo base_url().'Style/plugins/icheck-bootstrap/icheck-bootstrap.min.css';?>">
        <!-- Theme style -->
        <link rel="stylesheet" href="<?php echo base_url().'Style/dist/css/adminlte.min.css';?>">
    </head>


    <body class="hold-transition login-page">
        <div class="login-box">
          <div class="login-logo">
              <a href="http://www.ofppt.ma"><b>OFPPT</b><span  style="font-size: 20px;">ISTA SJ</span></a>
          </div>
          <!-- /.login-logo -->
          <div class="card">
            <div class="card-body login-card-body">
              <p class="login-box-msg">Sign in to start your session</p>

              <form id="login" action="javascript:LoginUsers();">
                <div class="input-group mb-3">
                    <input id="email" type="text" class="form-control" placeholder="Email">
                  <div class="input-group-append">
                    <div class="input-group-text">
                      <span class="fas fa-envelope"></span>
                    </div>
                  </div>
                </div>
                <div class="input-group mb-3">
                    <input id="passeword" type="password" class="form-control" placeholder="Password">
                  <div class="input-group-append">
                    <div class="input-group-text">
                      <span class="fas fa-lock"></span>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-8">
                    <div class="icheck-primary">
                      <input type="checkbox" id="remember">
                      <label for="remember">
                        Remember Me
                      </label>
                    </div>
                  </div>
                  <!-- /.col -->
                  <div class="col-4">
                    <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                  </div>
                  <!-- /.col -->
                </div>
                  <div><p id="Message">  </p></div>
              </form>
            </div>
            <!-- /.login-card-body -->
          </div>
        </div>
        <!-- /.login-box -->
    </body>
    <!-- jQuery -->
    <script src="<?php echo base_url().'Style/plugins/jquery/jquery.min.js';?>"></script>
    <!-- Bootstrap 4 -->
    <script src="<?php echo base_url().'Style/plugins/bootstrap/js/bootstrap.bundle.min.js';?>"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url().'Style/dist/js/adminlte.js';?>"></script>
    <!-- jQuery Knob Chart -->
    <script src="<?php echo base_url().'Style/plugins/jquery-knob/jquery.knob.min.js';?>"></script>
    <!-- jQuery -->
    <script src="<?php echo base_url().'Style/plugins/jquery/jquery.min.js';?>"></script>


    <script>
        //function Test user/pass
        function LoginUsers(){
            $.ajax({
                type  : 'post',
                url   : '<?php echo site_url('Welcome/LoginCI');?>',
                async : true,
                dataType : 'text',
                data: {'<?php echo $this->security->get_csrf_token_name(); ?>':'<?php echo $this->security->get_csrf_hash(); ?>',
                    username : $("#email").val(),
                    passeword: $("#passeword").val()
                },
                success : function(data){
                    if(!data){
                        $('#Message').html('<span style="color: red;">&#10006; Username/Passeword incorrect.</span>');
                    }else{
                        window.location = "<?php echo site_url('Welcome/LoginTrue');?>";
                    }
                },
                error : function(){
                    alert('error! ');
                }
            });
        }
    </script>
    
    
</html>
