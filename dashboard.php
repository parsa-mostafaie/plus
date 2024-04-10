<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="/assets/styles/style.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js">
  </script>
  <style>
    #chartContainer {
      background: #fff;
      border: 1px solid #aaa;
      border-radius: 1rem;
      overflow: hidden;
      max-height: 150px;
      max-width: min(300px, 100%);
    }

    .canvasjs-chart-credit {
      display: none !important;
    }
  </style>

</head>

<body class='vh-100 p-3'>
  <?php
  require_once $_SERVER['DOCUMENT_ROOT'] . '/libs/init.php';
  $uc = get_users(cols: 'count(*)')->fetchColumn();
  $dataPoints = exec_q("SELECT lu_browser as label, (COUNT(*) * 100 / $uc) as y from users GROUP BY lu_browser", [], true)->fetchAll(PDO::FETCH_ASSOC);
  if (getCurrentUserInfo() == null) {
    redirect('/');
  }
  ?>
  <?php if (isAdmin()) { ?>
    <script>
      window.onload = function () {


        var chart = new CanvasJS.Chart("chartContainer", {
          animationEnabled: true,
          title: {
            text: "Last Used Browsers"
          },
          data: [{
            type: "pie",
            yValueFormatString: "#,##0.00\"%\"",
            indexLabel: "{label} ({y})",
            dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
          }]
        });
        chart.render();

      }
    </script>
  <?php } ?>
  <div class="container-fluid h-100">
    <div class="row flex-nowrap h-100 gap-1">
      <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark h-100 rounded-3">
        <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white h-100">
          <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
            <span class="fs-3 d-none d-sm-inline">Dashboard</span>
          </a>
          <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
            <li class="nav-item">
              <a href="/" class="nav-link align-middle px-0">
                <i class="fs-6 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Home</span>
              </a>
            </li>
            <li class='ms-1'>
              <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                <i class="fs-6 bi-speedometer2"></i> <span class="d-none d-sm-inline">Analytics</span> </a>
              <ul class="collapse nav flex-column show" id="submenu1" data-bs-parent="#menu">
                <li>
                  <a href="#self" data-bs-toggle="tab" class="nav-link"> <i class="bi bi-file-earmark-person"></i>
                    <span class="d-none d-sm-inline">Self</span>
                  </a>
                </li>
                <?php if (isAdmin()): ?>
                  <li class='active'>
                    <a href="#site" class="nav-link active" data-bs-toggle='tab'><i class="bi bi-file-earmark-lock"></i>
                      <span class="d-none d-sm-inline">Site</span>
                    </a>
                  </li>
                <?php endif ?>
              </ul>
            </li>
            <?php if (isAdmin()): ?>
              <li>
                <a href="/admin/users.php/" class="nav-link px-0 align-middle">
                  <i class="fs-6 bi-people"></i> <span class="ms-1 d-none d-sm-inline">Users</span>
                </a>
              </li>
            <?php endif ?>
          </ul>
          <hr>
          <div class="dropdown pb-4">
            <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
              id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">

              <?= get_prof_img(getCurrentUserInfo_prop('username'), 'width="30" height="30"') ?>
              <span class="d-none d-sm-inline ms-2 text-wrap">
                <?php echo isAdmin() ? '<i class="bi bi-person-check"></i> ' : '<i class="bi bi-person"></i> '; ?>
                <?= getCurrentUserInfo_prop('firstname') . ' ' . getCurrentUserInfo_prop('lastname') ?>
              </span>
            </a>
            <ul class="dropdown-menu dropdown-menu-white text-small shadow">
              <li><a class="dropdown-item" href="#">New project...</a></li>
              <li><a class="dropdown-item" href="#">Settings</a></li>
              <li><a class="dropdown-item" href="/profile/?q=<?= getCurrentUserInfo_prop('id') ?>">Profile</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="/signout.php">Sign out</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col py-3 bg-secondary text-light rounded-4 overflow-y-auto">
        <div class="tab-content">
          <div id="self" class="tab-pane fade">
            <h3 class='fw-bold'>Self Analytics</h3>
            <div class='p-2'>
              <div class='gap-1 row'>
                <div
                  class='border-start border-primary d-inline-block bg-white p-3 rounded px-4 text-dark border-5 col-12 col-md-3'>
                  <h5 class='fw-bold' style='margin-left: -0.5rem'>Followers</h5>
                  <span>
                    <?= count(followers(getCurrentUserInfo_prop('id'))) ?>
                  </span>
                </div>
                <div
                  class='border-start border-danger d-inline-block bg-white p-3 rounded px-4 text-dark border-5 col-12 col-md-3'>
                  <h5 class='fw-bold' style='margin-left: -0.5rem'>Followings</h5>
                  <span>
                    <?= count(followings(getCurrentUserInfo_prop('id'))) ?>
                  </span>
                </div>
              </div>

            </div>
          </div>
          <?php if (isAdmin()): ?>
            <div id="site" class="tab-pane fade in active show">
              <h3 class='fw-bold'>Site Analytics</h3>
              <div class='p-2'>
                <div class='gap-1 row'>
                  <div
                    class='border-start border-warning d-inline-block bg-white p-3 rounded px-4 text-dark border-5 col-12 col-md-3'>
                    <h5 class='fw-bold' style='margin-left: -0.5rem'>Users</h5>
                    <span>
                      <?= get_users(cols: 'count(*)')->fetchColumn() ?>
                    </span>
                  </div>
                  <div
                    class='border-start border-primary d-inline-block bg-white p-3 rounded px-4 text-dark border-5 col-12 col-md-3'>
                    <h5 class='fw-bold' style='margin-left: -0.5rem'>Admins</h5>
                    <span>
                      <?= get_users(cols: 'count(*)', condition: 'admin=1')->fetchColumn() ?>
                    </span>
                  </div>

                </div>
                <div id="chartContainer" style="height: 370px; width: 100%;" class='mt-3'></div>

              </div>
            </div>
          <?php endif ?>
        </div>

      </div>
    </div>
  </div>

  <script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>
</body>

</html>