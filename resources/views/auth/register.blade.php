<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>InfyOm | Registration Page</title>

    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

    <!-- Theme style -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.3/css/AdminLTE.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.3/css/skins/_all-skins.min.css">

    <!-- iCheck -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/skins/square/_all.css">

    <link rel="stylesheet" href="{{ asset('AdminLTE-2.0.5/plugins/datepicker/datepicker3.css') }}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="hold-transition register-page">
<div class="register-box">
    <div class="register-logo">
        <a href="{{ url('/home') }}"><b>InfyOm </b></a>
    </div>

    <div class="register-box-body">
        <p class="login-box-msg">Register a new Member</p>

        <form method="post" action="{{ url('/register') }}">

            {!! csrf_field() !!}

        
            <div class="form-group has-feedback{{ $errors->has('first_name') ? ' has-error' : '' }}">
                <input type="text" class="form-control" name="first_name" value="{{ old('first_name') }}" placeholder="Nama Depan">
                <span class="glyphicon glyphicon-user form-control-feedback"></span>

                @if ($errors->has('first_name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('first_name') }}</strong>
                    </span>
                @endif
            </div>

             <div class="form-group has-feedback{{ $errors->has('last_name') ? ' has-error' : '' }}">
                <input type="text" class="form-control" name="last_name" value="{{ old('last_name') }}" placeholder="Nama Belakang">
                <span class="glyphicon glyphicon-user form-control-feedback"></span>

                @if ($errors->has('last_name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('last_name') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group has-feedback{{ $errors->has('email') ? ' has-error' : '' }}">
                <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>

                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>          


             <div class="form-group has-feedback{{ $errors->has('brithday') ? ' has-error' : '' }}">
                <input type="text" class="form-control date" name="brithday" value="" placeholder="Tanggal Lahir">
                <span class="glyphicon glyphicon-calendar form-control-feedback"></span>

                @if ($errors->has('brithday'))
                    <span class="help-block">
                        <strong>{{ $errors->first('brithday') }}</strong>
                    </span>
                @endif
            </div>


             <div class="form-group has-feedback">
              <textarea class="form-control" name="address" placeholder="Alamat"></textarea>
            </div>

               

             <div id="divalt" class="form-group has-feedback" style="display: none;">
              <textarea class="form-control" name="original_address" placeholder="Alamat lain"></textarea>
            </div>

             <div class="form-group has-feedback">
                 <button type="button" class="show-address btn btn-primary">Tambah Alamat Lain</button>
                 <button type="button" class="hide-address btn btn-primary" style="display: none;">Tutup Alamat Lain</button>
                 
            </div>

            <div class="form-group has-feedback">
               <select name="type" class="form-control">
                   <option value="0">Pilih Membership</option>
                   <option value="silver">Silver</option>
                   <option value="gold">Gold</option>
                   <option value="platinum">Platinum</option>
                   <option value="black">Black</option>
                   <option value="vip">VIP</option>
                   <option value="vvip">VVIP</option>
               </select>

                @if ($errors->has('type'))
                    <span class="help-block">
                        <strong>{{ $errors->first('type') }}</strong>
                    </span>
                @endif


            </div>    

           <!--  <div class="form-group has-feedback{{ $errors->has('credit-card-number') ? ' has-error' : '' }}">
                <input type="text" class="form-control" name="credit-card-number" value="{{ old('credit-card-number') }}" placeholder="No Credit Card ">
                <span class="glyphicon glyphicon-credit-card form-control-feedback"></span>

                @if ($errors->has('credit-card-number'))
                    <span class="help-block">
                        <strong>{{ $errors->first('credit-card-number') }}</strong>
                    </span>
                @endif
            </div>

             <div class="form-group has-feedback{{ $errors->has('credit-card-date') ? ' has-error' : '' }}">
                <input type="text" class="form-control expired" name="credit-card-date" value="{{ old('credit-card-date') }}" placeholder="Tanggal Expired ">
                <span class="glyphicon glyphicon-calendar form-control-feedback"></span>

                @if ($errors->has('credit-card-date'))
                    <span class="help-block">
                        <strong>{{ $errors->first('credit-card-date') }}</strong>
                    </span>
                @endif
            </div>


             <div class="form-group has-feedback{{ $errors->has('credit-validation-code') ? ' has-error' : '' }}">
                <input type="text" class="form-control" name="credit-validation-code" value="{{ old('credit-validation-code') }}" placeholder="CVC">
                <span class="glyphicon glyphicon-credit-card form-control-feedback"></span>

                @if ($errors->has('credit-validation-code'))
                    <span class="help-block">
                        <strong>{{ $errors->first('credit-validation-code') }}</strong>
                    </span>
                @endif
            </div> -->

            <div class="form-group has-feedback{{ $errors->has('password') ? ' has-error' : '' }}">
                <input type="password" class="form-control" name="password" placeholder="Password">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>

                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group has-feedback{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm password">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>

                @if ($errors->has('password_confirmation'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                    </span>
                @endif
            </div>

            <div class="row">
                <div class="col-xs-8">
                    <div class="checkbox icheck">
                        <label class="{{ $errors->has('term_co') ? ' has-error' : '' }}">
                            <input type="checkbox" name="term_co" value="yes"> I agree to the <a href="#">terms</a>

                             @if ($errors->has('term_co'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('term_co') }}</strong>
                                </span>
                            @endif
                        </label>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
                </div>
                <!-- /.col -->
            </div>
        </form>

        <a href="{{ url('/login') }}" class="text-center">I already have a membership</a>
    </div>
    <!-- /.form-box -->
</div>
<!-- /.register-box -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!-- AdminLTE App -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.3/js/adminlte.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/icheck.min.js"></script>
 <script src="{{ asset('AdminLTE-2.0.5/plugins/datepicker/bootstrap-datepicker.js') }}"></script>
<script>
    $(function () {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' // optional
        });

        $('.date').datepicker({
          autoclose: true,
           format: 'yyyy-mm-dd'
        });
    });

     $(".show-address").click(function() {
        $(".show-address").hide();
        $("#divalt").show();
        $('.hide-address').show(); 
     });


     $(".hide-address").click(function() {
        $(".show-address").show();
        $("#divalt").hide();
        $('.hide-address').hide();
     });

     $('.expired').datepicker({
          autoclose: true,
           format: 'mm/yy'
        });


</script>
</body>
</html>
