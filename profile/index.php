<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/libs/init.php';

$uname = get_val('user') != '' ? get_val('user') : (get_val('id') != '' ? get_val('id') : get_val('q'));
$q = get_users(cols: '*', condition: 'username = ?', p: [$uname]);
$cols = $q->fetchAll(PDO::FETCH_ASSOC);

$quer_id = get_users(cols: '*', condition: 'id = ?', p: [$uname]);

$colss = $quer_id->fetchAll(PDO::FETCH_ASSOC);

$cols = ($cols[0] ?? ($colss[0] ?? getCurrentUserInfo()));

if (!$cols) {
  _404_();
} else {
  $fname = $cols['firstname'];
  $lname = $cols['lastname'];
  $mail = $cols['mail'];
  $desc = $cols['description'];
  $id = $cols['id'];
  $isAdmin = $cols['admin'];
  $uname = $cols['username'];
  $prof = $cols['profile'];
  ?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
      <?= $fname ?>
      <?= $lname ?> - Profile
    </title>
    <link rel="stylesheet" href="/assets/styles/style.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"></script>

    <link rel="stylesheet" href="/assets/styles/pages/profile_index.css">

    <?php if ($id == getCurrentUserInfo_prop('id')): ?>
      <script>
        <?php if (hasprofimg($id) || has_pbg_img($id)): ?>
          function rem_profile(pbg) {
            if (!pbg) {
              swal({
                title: "Are you sure?",
                text: "Are you sure that you want to Remove your profile photo?",
                icon: "warning",
                buttons: {
                  cancel: true,
                  confirm: true
                }
              }
              ).then(sure => {
                sure && (location.href = '/profile/remprof.php');
              });
            } else {
              swal({
                title: "Are you sure?",
                text: "Are you sure that you want to Remove your cover photo?",
                icon: "warning",
                buttons: {
                  cancel: true,
                  confirm: true
                }
              }
              ).then(sure => {
                sure && (location.href = '/profile/rempbg.php');
              });
            }
          }
        <?php endif ?>
      </script>
    <?php endif ?>
  </head>

  <body>
    <div class="container">

      <div class="row align-items-center">
        <div class="col-xl-12 col-lg-12 col-md-12 col-12">
          <!-- Bg -->
          <!-- <div class="pt-20 rounded-top" style="background: #ffaabb;
        background-size: cover;">
          </div> -->
          <?php if (getCurrentUserInfo_prop('id') == $id): ?>
            <div data-bs-toggle="modal" data-bs-target="#modal">
            <?php endif; ?>
            <?= get_pbg_img($uname) ?>
            <?php if (getCurrentUserInfo_prop('id') == $id): ?>
            </div>
          <?php endif ?>
          <div class="card rounded-bottom smooth-shadow-sm" style='border-radius:0;'>
            <div class="d-flex align-items-center justify-content-between
          pt-4 pb-6 px-4">
              <div class="d-flex align-items-center">
                <div class="avatar-xxl <?= isOnline($id) ? 'avatar-indicators' : '' ?> avatar-online me-2
              position-relative d-flex justify-content-end
              align-items-end mt-n10 rounded-circle" style='background-color: white;'>
                  <?php if (getCurrentUserInfo_prop('id') == $id): ?>
                    <div data-bs-toggle="modal" data-bs-target="#modal">
                    <?php endif; ?>
                    <?= get_prof_img($uname) ?>
                    <?php if (getCurrentUserInfo_prop('id') == $id): ?>
                    </div>
                  <?php endif ?>
                </div>
              </div>


              <div>
                <?php if (getCurrentUserInfo_prop('username') == $uname): ?>
                  <div class='d-flex gap-1 d-none d-md-block'>
                    <a href="/signup.php?id=<?= $id ?>" class="text-secondary fs-5"><i class='bi bi-pencil-square'></i></a>
                  </div>
                <?php endif; ?>

              </div>
            </div>
            <div class='mx-4 mb-4'>
              <div class="lh-1">
                <h2 class="mb-0">
                  <span class='text-break text-wrap '>
                    <?= $fname ?>
                    <?= $lname ?>
                    <?php if ($isAdmin == 1): ?>
                      <i class='bi bi-patch-check-fill' style='
                          background: -webkit-linear-gradient(#ff5, #dd6);
                          background-clip: text;
                          -webkit-text-fill-color: transparent;' title='admin'></i>
                    <?php endif ?>
                  </span>

                  <a href="#!" class="text-decoration-none">

                  </a>
                </h2>
                <p class="mb-0 d-none d-sm-block">
                  <a href="/profile/?q=<?= $id ?>" class='text-success text-decoration-none'>
                    <?= "@" . $uname ?>
                  </a>
                  <?= $mail ? "(<a href='mailto:$mail'>Email</a>)" : '' ?>
                </p>
              </div>

              <div class="d-flex col-250 gap-auto-0" style='gap: 2em; font-size:16px'>
                <a class='link text-decoration-none' href='#'>
                  <b>
                    <?= number_format_short(count(followers($id))) ?>
                  </b> Followers</a>
                <a class='link text-decoration-none' href='#'><b>
                    <?= number_format_short(count(followings($id))) ?>
                  </b> Followings</a>

              </div>
              <div class="dropdown">
                <?php if ($id != getCurrentUserInfo_prop('id')): ?>
                  <span>
                    <?php if (!follows(getCurrentUserInfo_prop('id'), $id)): ?>
                      <a href="./follow.php?fd=<?= $id ?>" class="btn btn-primary rounded-pill">Follow</a>
                    <?php endif ?>
                    <?php if (follows(getCurrentUserInfo_prop('id'), $id)): ?>
                      <a href="./unfollow.php?fd=<?= $id ?>" class="btn btn-outline-primary rounded-pill"><i
                          class='bi bi-check2'></i> Followed</a>
                    <?php endif ?>
                  </span>
                <?php endif ?>
                <a class="dropdown-toggle text-decoration-none rounded-pill after-none btn btn-outline-secondary"
                  type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                  More
                </a>
                <ul class="dropdown-menu py-1" style="font-size: 1.05rem;" aria-labelledby="dropdownMenuButton1">
                  <?php if (getCurrentUserInfo_prop('username') == $uname): ?>
                    <li>
                      <a href="/signout.php" class="dropdown-item text-decoration-none text-danger"><i
                          class="bi bi-box-arrow-left"></i>
                        Signout</a>
                    </li>
                    <li><a href="/dashboard.php" class="dropdown-item"><i class='bi bi-person'></i> Dashboard</a></li>
                  <?php endif; ?>
                  <?php if (getCurrentUserInfo_prop('id') != $id): ?>
                    <li>
                      <?php if (!follows(getCurrentUserInfo_prop('id'), $id)): ?>
                        <a href="./follow.php?fd=<?= $id ?>" class="dropdown-item">Follow</a>
                      <?php endif ?>
                      <?php if (follows(getCurrentUserInfo_prop('id'), $id)): ?>
                        <a href="./unfollow.php?fd=<?= $id ?>" class="dropdown-item text-danger">Unfollow</a>
                      <?php endif ?>
                    </li>
                  <?php endif; ?>
                </ul>

              </div>
            </div>

          </div>
        </div>
      </div>
      <?php if ($desc !== ''): ?>
        <div class='text-gray rounded p-3 border-start border-3 mt-3 border-primary bg-primary'
          style='--bs-bg-opacity: 0.2'>
          <?= '<p class="m-0" style="white-space:pre; font-size: 15px">' . $desc . '</p>' ?>
        </div>
      <?php endif ?>
    </div>
    <?php if ($id == getCurrentUserInfo_prop('id')): ?>
      <!-- Modal -->
      <div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="modalLabel">Profile/Cover Photo</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              Actions you can do:
            </div>
            <div class="modal-footer gap-1">
              <a type="button" class="btn btn-secondary m-0 flex-grow-1" data-bs-dismiss="modal">Close</a>
              <?php if (hasprofimg($id)): ?>
                <a type="button" class="btn btn-danger m-0 flex-grow-1" onclick='rem_profile()'>Remove Profile
                  Photo</a>
              <?php endif; ?>
              <?php if (has_pbg_img($id)): ?>
                <a type="button" class="btn btn-warning m-0 flex-grow-1" onclick='rem_profile(true)'>Remove Cover
                  Photo</a>
              <?php endif ?>
            </div>
          </div>
        </div>
      </div>
    <?php endif ?>
  </body>

  </html>
<?php } ?>