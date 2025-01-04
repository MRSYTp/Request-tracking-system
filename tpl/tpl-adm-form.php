
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>form admin</title>

    <!-- Bootstrap -->
    <link href="<?= TRACK_URL ?>vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= TRACK_URL ?>vendors/bootstrap-rtl/dist/css/bootstrap-rtl.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <!-- Custom Theme Style -->
    <link href="<?= TRACK_URL ?>assets/css/custom.css" rel="stylesheet">
    <link href="<?= TRACK_URL ?>assets/css/helper.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form action="<?= site_url('adm-form.php'); ?>" method="post">
              <h1>فرم ورود به پنل</h1>
              <div>
                <input name="name" type="text" class="form-control" placeholder="نام کاربری" required="" />
              </div>
              <div>
                <input name="password" type="password" class="form-control" placeholder="رمز ورود" required="" />
              </div>
              <div>
                <button class="btn btn-default submit">ورود</button>
              </div>

              <div class="clearfix"></div>

            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
 