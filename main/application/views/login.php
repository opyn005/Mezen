<div class="sufee-login d-flex align-content-center flex-wrap">
    <div class="container">
        <div class="login-content">
            <div class="login-logo">
                <a href="#" style="color:#FFF;font-size: 28px">
                    <?= $this->shop_info->get_shop_name(); ?>
                </a>
            </div>
            <div class="login-form">
                <?php if ($error) { ?>
                    <div class="alert alert-danger"><?= $error; ?></div>
                <?php } ?>

                <form action="<?= base_url("auth/login"); ?>" method="post">
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="username" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" name="password">
                    </div>
                    <button type="submit" class="btn btn-success btn-flat m-b-20 m-t-20">Login</button>
                </form>

                <!-- Back button to index.php -->
                <a href="<?= base_url("../index.html"); ?>" class="btn btn-secondary m-t-10">Kembali</a>
            </div>
        </div>
    </div>
</div>

<style>
    .m-t-10 {
        margin-top: 10px;
    }

    .m-t-20 {
        margin-top: 20px;
    }

    body {
            background: url(../img/background.jpg);
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            width: 100%;
            height: 100%;
            background-position: center;
            margin: 0;
            padding: 0;
        }
</style>

<div id="chartContainer" style="height: 250px; width: 100%;"></div>


<link rel="icon" type="image/png" href="img/icon.png">