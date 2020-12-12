<div class="login-box bg-orange">


    <div class="login-logo">

         <a href="<?php echo base_url()?>index.php/Application"> <img src="<?php echo base_url()?>/dist/img/logosis2.png" class="img-circle elevation-0" alt="User Image">SISAccesos </a>

    


    </div>
    <!-- /.login-logo -->
    <div class="login-box-body ">
        <p class="login-box-msg">Iniciar sesión</p>

        <?php echo form_open('app/ajax_attempt_login', ['class' => 'std-form']);?>
        <div class="form-group has-feedback">
            <input name="login_string" id="login_string" class="form-control" placeholder="Ingresa Usuario" type="text">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
            <input name="login_pass" id="login_pass" class="form-control" placeholder="Contraseña" type="password">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <div class="row">



            <?php $input_btn_guardar = array(
                'name' => 'btn_guardar',
                'id' => 'btn_guardar',
                'value' => 'Guardar',
                'type' => 'submit',
                'class' => 'btn btn-block btn-primary btn-flat bg-orange');?>



            <!-- /.col -->
            <div class="col-12">
                  <?php echo form_submit('btn_guardar','Iniciar sesion', $input_btn_guardar);?>

            </div>
            <!-- /.col -->
        </div>

        <input type="hidden" id="max_allowed_attempts" value="<?php echo config_item('max_allowed_attempts');?>" />
        <input type="hidden" id="mins_on_hold" value="<?php echo ( config_item('seconds_on_hold') / 60 );?>" />

        </form>
        <!-- <a href="#">Olvide contraseña</a><br> -->
        <!-- <a href="register.html" class="text-center">Registrarse</a> -->

    </div>
    <!-- /.login-box-body -->
</div>

<script>
    $(document).ready(function () {
        $(document).on('submit', 'form', function (e) {
            $.ajax({
                type: 'post',
                cache: false,
                url: '<?php echo base_url() ?>index.php/app/ajax_attempt_login',
                data: {
                    'login_string': $('[name="login_string"]').val(),
                    'login_pass': $('[name="login_pass"]').val(),
                    'loginToken': $('[name="token"]').val()
                },
                dataType: 'json',
                success: function (response) {
                    $('[name="loginToken"]').val(response.token);
                    console.log(response);
                    if (response.status == 1) {
                        window.location.href = '<?php echo base_url() ?>index.php/Welcome/';

                    } else if (response.status == 0 && response.on_hold) {
                        $('form').hide();
                        $('#on-hold-message').show();
                        alert('Intentos de inicio de sesión excesivos.');
                    } else {
                        alert('Login fallido', 'Login fallido ' + response.count + ' de ' + $('#max_allowed_attempts').val(), 'error');
                    }
                }
            });
            return false;
        });
    });
</script>