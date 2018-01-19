<div class="container-fluid page login-page">
    <div class="overlay login-wrapper">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <h3>Admin Login</h3>
                <form action="<?php echo base_url('login') ?>" method="post">
                    <div class="form-group">
                        <input type="text" class="form-control" name="username" placeholder="Username">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="password" placeholder="Password">
                    </div>
                    <button class="btn btn-lg btn-rai btn-block">Login</button>
                </form>
            </div>
        </div>
    </div>
</div>