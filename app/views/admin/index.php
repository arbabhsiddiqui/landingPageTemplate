<?php require APPROOT . '/views/admin/inc/header.php'; ?>



<div class="container-fluid bg-muted">
    <div id="login-page" class="row align-items-center">
        <div class="col-sm-4 text-center mx-auto">
            <div class="card bg-gradient text-light box rounded">
                <div class="card-header">
                    <h2 class="card-title">
                        Admin Login
                    </h2>
                </div>
                <div class="card-body text-left">
                    <form  id="userlogin" method="POST">
                        <div class="form-group">
                            <label>Email <sup>*</sup></label>
                            <input type="text" id="email" name="email" class="form-control form-control-lg <?php echo (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['email']; ?>">
                            <span class="invalid-feedback"><?php echo $data['email_err']; ?></span>
                        </div>
                        <div class="form-group">
                            <label>Password:<sup>*</sup></label>
                            <input type="password" id="password" name="password" class="form-control form-control-lg <?php echo (!empty($data['password_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['password']; ?>">
                            <span class="invalid-feedback"><?php echo $data['password_err']; ?></span>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <input type="submit" class="btn btn-lg btn-primary" value="Login">
                            </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- <script >
    document.getElementById("userlogin").addEventListener("submit",login);


    function login(e){
        e.preventDefault();

        var url='';
        console.log(url);

        var email=document.getElementById("email").value;
        var password=document.getElementById("password").value;

        var params="email="+email+"&password="+password;

        var req=new XMLHttpRequest();

        req.open("POST",url,true);
        req.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");


        req.onload= function(){
            console.log(this.responseText);
            console.log(url);
        }


        req.onerror= function(error){
            console.log(error);
        }

        req.send(params);




    }


</script> -->



<?php require APPROOT . '/views/admin/inc/footer.php'; ?>