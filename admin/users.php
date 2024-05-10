<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/libs/init.php';

//? Only Admin can access /admin
authAdmin();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User List</title>
  <link rel="stylesheet" href="/assets/styles/style.css">

  <script src='/libs/pluslib/frontend/sparams.js'></script>
  <script src='/libs/pluslib/frontend/grk.js'></script>
</head>

<body>
  <?php

  //? SEARCH IN 'firstname lastname' AND username
  [$where, $p] = searchText_Condition(get_val('search'), "CONCAT(firstname, ' ', lastname)", 'username');

  $current_page = get_val('page');

  $users_pagination = PaginationQuery(
    5,
    $current_page,
    PDO::FETCH_ASSOC,
    tbl: 'users',
    cols: 'id, username, firstname, lastname, date, admin',
    order: 'date DESC',
    condition: $where,
    p: $p
  );

  $current_page = $users_pagination['current'];
  $pages = $users_pagination['page_count'];

  ?>
  <div class="container">
    <h1 class="text-center">Users
      <a href='/signup.php' class='btn btn-success'>Register User</a>
    </h1>
    <form action="" method='get' class='d-flex gap-1 mb-3'>
      <input type="search" name="search" id="search" class='form-control flex-grow-1'
        value="<?= get_val('search') ?>" />
      <input type="submit" value="Search" class='btn btn-success'>
    </form>
    <div class='table-responsive mb-3'>
      <b>
        Total Search Result:
        <?= $users_pagination['count'] ?>
      </b>
      <table class='table table-striped table-dark table-hover table-bordered m-0 text-nowrap text-center'
        style='user-select:none;'>
        <thead>
          <tr>
            <th>#</th>
            <th>UserName</th>
            <th>FirstName</th>
            <th>LastName</th>
            <th>Register Date</th>
            <th>Register Date (Persian)</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php $i = $users_pagination['offset']; ?>
          <?php foreach ($users_pagination['res'] as $user): ?>
              <tr>
                <?php foreach ($user as $key => $value): ?>
                    <?php if ($key !== 'admin'): ?>
                        <?php $ia = $key == "username" && $user["admin"] == 1 ?>
                        <td class='<?= $ia ? "text-primary fw-bold" : "" ?>' title='<?= $key == "id" ? "(#$value)" : "" ?>'>
                          <?php if ($key == 'username'): ?>
                              <a href='/profile/?user=<?= $value ?>' target='blank'>
                            <?php endif ?>
                            <?= ($key == "username" ? '@' : '') . ($key !== 'id' ? $value : ++$i); ?>
                            <?php if ($key == 'username'): ?>
                              </a>
                          <?php endif ?>
                        </td>
                        <?php if ($key == "date"): ?>
                            <td style='direction: rtl'>
                              <?= jdate('d F Y', strtotime($value)); ?>
                            </td>
                        <?php endif ?>
                    <?php endif ?>
                <?php endforeach ?>
                <td>
                  <div class='d-flex gap-1 h-100'>
                    <a href='/signup.php?id=<?= $user["id"] ?>' class='btn btn-primary'>Edit</a>
                    <a data-href='./delete_user.php?uid=<?= $user["id"]; ?>' class='btn btn-danger'>Delete</a>
                    <?php if ($user['admin'] == 0) { ?>
                        <a data-href="./grow.php?uid=<?= $user['id'] ?>" class='btn btn-success'>Grow</a>
                    <?php } ?>
                    <?php if ($user['admin'] == 1 && $user['id'] != getCurrentUserInfo_prop('id')) { ?>
                        <a data-href="./shrink.php?uid=<?= $user['id'] ?>" class='btn btn-warning'>Shrink</a>
                    <?php } ?>
                  </div>
                </td>
              </tr>
          <?php endforeach ?>
        </tbody>
      </table>
    </div>

    <nav>
      <ul class="pagination">
        <?php if ($current_page > 1): ?>
            <li class="page-item">
              <a class="page-link" href="#" page="<?= $current_page - 1 ?>" tabindex="-1">Previous</a>
            </li>
        <?php endif ?>

        <?php for ($i = 1; $i <= $pages; $i++): ?>
            <?php if ($i == $current_page) { ?>
                <li class='page-item active'>
                  <span class='page-link'>
                    <?= $i ?>
                  </span>
                </li>
            <?php } else { ?>
                <li class='page-item'>
                  <a class='page-link' href="#" page='<?= $i ?>'>
                    <?= $i ?>
                  </a>
                </li>
            <?php } ?>
        <?php endfor ?>

        <?php if ($current_page < $pages): ?>
            <li class="page-item">
              <a class="page-link" href="#" page="<?= $current_page + 1 ?>">Next</a>
            </li>
        <?php endif ?>
      </ul>
    </nav>
  </div>

  <script defer>
    anchors('a[page]', {
      attribute: {
        page: (pv, url) => setUrlParams(url, 'page', pv)
      }
    })
    data_href_init();
  </script>
</body>

</html>