<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/libs/init.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/libs/@form/processors/signup-form.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
    <?= $tu ? "Edit User" : "New User" ?>
  </title>
  <link rel="stylesheet" href="/assets/styles/style.css">

  <script src="/assets/scripts/resubmit.js"></script>
  <script src="/assets/scripts/password.js"></script>

</head>

<body class='bg-dark' style='font-size:1rem'>

  <form class="mx-auto w-75 bg-light bordrer border-black rounded p-3 my-3 p-md-5" action="" method="post"
    enctype="multipart/form-data">
    <?php
    process_form();
    ?>
    <h1>
      <?= $tu ? "Edit User <b>(@$uename)</b>" : "New User" ?>
    </h1>
    <div class="mb-3">
      <label for="uname" class="form-label">Username *</label>
      <input type="text" class="form-control" id="uname" value="<?= $uname ?>" name='uname'>
    </div>
    <div class="mb-3">
      <label for="pword" class="form-label">Password *</label>
      <input type="password" class="form-control" id="pword" value="<?= $pword ?>" name='pword'>
      <p id='passstate' class='text-primary my-3'></p>
    </div>
    <div class="mb-3">
      <label for="fname" class="form-label">First Name *</label>
      <input type="text" class="form-control" id="fname" value="<?= $fname ?>" name='fname'>
    </div>
    <div class="mb-3">
      <label for="lname" class="form-label">Last Name *</label>
      <input type="text" class="form-control" id="lname" name="lname" value="<?= $lname ?>">
    </div>
    <?php if ($tu): ?>
      <div class="mb-3">
        <label for="email" class="form-label">Email (UNIQUE)</label>
        <input type="email" class="form-control" id="email" value="<?= $mail ?>" name='email'>
      </div>
      <div class='mb-3'>
        <label class="form-label" for="file">Profile Photo:</label>
        <input type="file" class="form-control" name='profimg' id="file" accept="image/png, image/jpeg" />
      </div>
      <div class="mb-3">
        <textarea class="form-control" id="description" name="description" placeholder="Description" rows='8'
          style='resize: none; height: auto;'><?= $desc ?></textarea>
      </div>
    <?php endif ?>

    <button type="submit" class="btn btn-primary" name="signup">
      <?= $tu ? 'Submit Edition' : 'Signup' ?>
    </button>
    <br><br>
    <?php if (!$tu): ?>
      Have Account? <a href="login.php">Login</a>
    <?php endif ?>
  </form>
  <script>
    let pwd = document.getElementById('pword');

    pwd.addEventListener('input', () => {
      pwd.nextElementSibling.textContent = password_check(pwd);
    });
  </script>
</body>

</html>