<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
    <link rel="stylesheet" href="login.css">
    <title> Projeto Login </title>
</head>

<body>
    
    
    
<div class="container register">
    <div class="row">    
</div>

    <div class="col-md-9 register-right">
    <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
    </ul>
    <div class="tab-content" id="myTabContent">
    <div class="row register-form">
    <div class="col-md-12 profile_card">
        <form class="form-inline">
        <div class="form-group">      
     </div>
    </div>
</div>
 
<div class="container h-100">
    <div class="d-flex justify-content-center h-100">
        <div class="user_card">
            <div class="d-flex justify-content-center">
            </div>
                <form action="/processa/login/login.php"  method="POST">

                    <div class="input-group mb-3">
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                        </div>
                        <input type="text" name="utilizador" class="form-control input_user" placeholder="username">
                    </div>
                    <div class="input-group mb-2">
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                        </div>
                        <input type="password" name="senha" class="form-control input_pass" placeholder="password">
                    </div>
                   
                    <!-- <div class="d-flex justify-content-center mt-3 login_container">
                            <button type="submit" name="button" class="btn login_btn">Login</button>
                    </div> -->

                    <input type="submit" value="Login">
             </form>
            </div>
    
         
        </div>
    </div>
</div>
</body>
</html>


