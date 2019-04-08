<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css">
    <script src="/assets/jquery/jquery.js"></script>
    
    <link rel="stylesheet" type="text/css" href="css/stylesheet.css">

    <script>
    $(document).ready(function(){
             $('[data-toggle="tooltip"]').tooltip({placement: "auto top"});

            var error_uname = true;
            var error_pass = true;

            $('input[name="uname"]').focusout(function() {
                 validateuname();
            });

    function validateuname() {
        var em = $('input[name="uname"]').val();
        if ($.trim(em) == "") {
            error_uname = false;
            $('#e_error').html('*Username is required')
                .css({ 'color': 'red' });
        } else {
            error_uname = true;
            $('#e_error').html("");
        }
        return error_uname;
    }

    $('input[name="pass"]').focusout(function() {
        validatePassword();
    });

    function validatePassword() {
        var p = $('input[name="pass"]').val();
        if ($.trim(p) == "") {
            error_pass = false;
            $('#p_error').html('*Password is required')
                .css({ 'color': 'red' });
        } else {
            error_pass = true;
            $('#p_error').html("");
        }
        return error_pass;
    }

    $('input[type="submit"]').click(function() {
        var error_e = validateuname();
        var error_p = validatePassword();


        if (error_e == true && error_p == true) {
            return true;
        } else {
            return false;
        }
    });
        });
    </script>
</head>
    <body>

        <div class="loginbox">
            <img src="/assets/images/avatar.png" class="avatar">
            <h1>Login</h1>

            @if ($message = Session::get('success'))
            <div class="alert alert-danger alert-block">
             <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{{ $message }}</strong>
            </div>
            @endif

            <form method="POST">
                @csrf
                <p>Username</p>
                <input type="text" name="uname" data-toggle="tooltip" title="Enter your username" placeholder="Username">
                <span id="e_error"></span>
                
                <p>Password</p>
                <input type="password" name="pass" data-toggle="tooltip" title="Enter your password" placeholder="Password">
                <span id="p_error"></span>
                
                <input type="submit" value="Login" data-toggle="tooltip" title="Click to login">
                
            </form>

        </div>

    </body>
    <script src="/assets/bootstrap/js/bootstrap.min.js"></script>
</html>