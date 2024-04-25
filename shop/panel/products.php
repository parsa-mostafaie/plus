<?php
$supermenu = 'products';
$current_page = 'products';
?>
<?php include ('components/header.php'); ?>
<?php
$sql = "SELECT * FROM products ORDER BY ID DESC LIMIT 200 OFFSET 0";
$stmt = db()->query($sql);
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);

$statuses = [
  'pending' => [
    'class' => 'warning',
    'label' => 'منتشر شده'
  ],
  'draft' => [
    'class' => 'info',
    'label' => 'پیش نویس'
  ],
  'finish' => [
    'class' => 'danger',
    'label' => 'عدم موجودی'
  ],
];

?>
<!--begin::Content wrapper-->
<div class="d-flex flex-column flex-column-fluid">
  <!--begin::Toolbar-->
  <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
    <!--begin::Toolbar container-->
    <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
      <!--begin::Page title-->
      <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
        <!--begin::Title-->
        <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">محصولات</h1>
        <!--end::Title-->
        <!--begin::Breadcrumb-->
        <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
          <!--begin::آیتم-->
          <li class="breadcrumb-item text-muted">
            <a href="../../demo1/dist/index.html" class="text-muted text-hover-primary">خانه</a>
          </li>
          <!--end::آیتم-->
          <!--begin::آیتم-->
          <li class="breadcrumb-item">
            <span class="bullet bg-gray-400 w-5px h-2px"></span>
          </li>
          <!--end::آیتم-->
          <!--begin::آیتم-->
          <li class="breadcrumb-item text-muted">تجارت</li>
          <!--end::آیتم-->
          <!--begin::آیتم-->
          <li class="breadcrumb-item">
            <span class="bullet bg-gray-400 w-5px h-2px"></span>
          </li>
          <!--end::آیتم-->
          <!--begin::آیتم-->
          <li class="breadcrumb-item text-muted">کاتالوگ</li>
          <!--end::آیتم-->
        </ul>
        <!--end::Breadcrumb-->
      </div>
      <!--end::Page title-->
      <!--begin::Actions-->
      <div class="d-flex align-items-center gap-2 gap-lg-3">
        <!--begin::فیلتر menu-->
        <div class="m-0">
          <!--begin::Menu toggle-->
          <a href="#" class="btn btn-sm btn-flex bg-body btn-color-gray-700 btn-active-color-primary fw-bold"
            data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
            <i class="ki-duotone ki-filter fs-6 text-muted me-1">
              <span class="path1"></span>
              <span class="path2"></span>
            </i>فیلتر</a>
          <!--end::Menu toggle-->
          <!--begin::Menu 1-->
          <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true"
            id="kt_menu_641ac40bebce6">
            <!--begin::Header-->
            <div class="px-7 py-5">
              <div class="fs-5 text-dark fw-bold">فیلتر تنظیمات</div>
            </div>
            <!--end::Header-->
            <!--begin::Menu separator-->
            <div class="separator border-gray-200"></div>
            <!--end::Menu separator-->
            <!--begin::Form-->
            <div class="px-7 py-5">
              <!--begin::Input group-->
              <div class="mb-10">
                <!--begin::Tags-->
                <label class="form-label fw-semibold">وضعیت:</label>
                <!--end::Tags-->
                <!--begin::Input-->
                <div>
                  <select class="form-select form-select-solid select2-hidden-accessible" data-kt-select2="true"
                    data-placeholder="انتخاب گزینه" data-dropdown-parent="#kt_menu_641ac40bebce6"
                    data-allow-clear="true" data-select2-id="select2-data-7-5moq" tabindex="-1" aria-hidden="true"
                    data-kt-initialized="1">
                    <option data-select2-id="select2-data-9-w4kv"></option>
                    <option value="1">تایید شده</option>
                    <option value="2">در انتظار</option>
                    <option value="2">در حال پردازش</option>
                    <option value="2">رد شد</option>
                  </select><span class="select2 select2-container select2-container--bootstrap5" dir="rtl"
                    data-select2-id="select2-data-8-o7bb" style="width: 100%;"><span class="selection"><span
                        class="select2-selection select2-selection--single form-select form-select-solid"
                        role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false"
                        aria-labelledby="select2-7nlm-container" aria-controls="select2-7nlm-container"><span
                          class="select2-selection__rendered" id="select2-7nlm-container" role="textbox"
                          aria-readonly="true" title="انتخاب گزینه"><span class="select2-selection__placeholder">انتخاب
                            گزینه</span></span><span class="select2-selection__arrow" role="presentation"><b
                            role="presentation"></b></span></span></span><span class="dropdown-wrapper"
                      aria-hidden="true"></span></span>
                </div>
                <!--end::Input-->
              </div>
              <!--end::Input group-->
              <!--begin::Input group-->
              <div class="mb-10">
                <!--begin::Tags-->
                <label class="form-label fw-semibold">نوع عضویت:</label>
                <!--end::Tags-->
                <!--begin::تنظیمات-->
                <div class="d-flex">
                  <!--begin::تنظیمات-->
                  <label class="form-check form-check-sm form-check-custom form-check-solid me-5">
                    <input class="form-check-input" type="checkbox" value="1">
                    <span class="form-check-label">نویسنده</span>
                  </label>
                  <!--end::تنظیمات-->
                  <!--begin::تنظیمات-->
                  <label class="form-check form-check-sm form-check-custom form-check-solid">
                    <input class="form-check-input" type="checkbox" value="2" checked="checked">
                    <span class="form-check-label">مشتری</span>
                  </label>
                  <!--end::تنظیمات-->
                </div>
                <!--end::تنظیمات-->
              </div>
              <!--end::Input group-->
              <!--begin::Input group-->
              <div class="mb-10">
                <!--begin::Tags-->
                <label class="form-label fw-semibold">اعلان ها:</label>
                <!--end::Tags-->
                <!--begin::Switch-->
                <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                  <input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked">
                  <label class="form-check-label">فعال</label>
                </div>
                <!--end::Switch-->
              </div>
              <!--end::Input group-->
              <!--begin::Actions-->
              <div class="d-flex justify-content-end">
                <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2"
                  data-kt-menu-dismiss="true">ریست</button>
                <button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">تایید</button>
              </div>
              <!--end::Actions-->
            </div>
            <!--end::Form-->
          </div>
          <!--end::Menu 1-->
        </div>
        <!--end::فیلتر menu-->
        <!--begin::Secondary button-->
        <!--end::Secondary button-->
        <!--begin::اصلی button-->
        <a href="#" class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal"
          data-bs-target="#kt_modal_create_app">ساختن</a>
        <!--end::اصلی button-->
      </div>
      <!--end::Actions-->
    </div>
    <!--end::Toolbar container-->
  </div>
  <!--end::Toolbar-->
  <!--begin::Content-->
  <div id="kt_app_content" class="app-content flex-column-fluid">
    <!--begin::Content container-->
    <div id="kt_app_content_container" class="app-container container-xxl">
      <!--begin::محصولات-->
      <div class="card card-flush">
        <!--begin::کارت header-->
        <div class="card-header align-items-center py-5 gap-2 gap-md-5">
          <!--begin::کارت title-->
          <div class="card-title">
            <!--begin::جستجو-->
            <div class="d-flex align-items-center position-relative my-1">
              <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-4">
                <span class="path1"></span>
                <span class="path2"></span>
              </i>
              <input type="text" data-kt-ecommerce-product-filter="search"
                class="form-control form-control-solid w-250px ps-12" placeholder="جستجو محصولات">
            </div>
            <!--end::جستجو-->
          </div>
          <!--end::کارت title-->
          <!--begin::کارت toolbar-->
          <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
            <div class="w-100 mw-150px">
              <!--begin::انتخاب2-->
              <select class="form-select form-select-solid select2-hidden-accessible" data-control="select2"
                data-hide-search="true" data-placeholder="وضعیت" data-kt-ecommerce-product-filter="status"
                data-select2-id="select2-data-10-2pt2" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
                <option data-select2-id="select2-data-12-akec"></option>
                <option value="all">همه</option>
                <option value="published">منتشر شده</option>
                <option value="scheduled">در انتظار</option>
                <option value="inactive">غیرفعال</option>
              </select><span class="select2 select2-container select2-container--bootstrap5" dir="rtl"
                data-select2-id="select2-data-11-kepq" style="width: 100%;"><span class="selection"><span
                    class="select2-selection select2-selection--single form-select form-select-solid" role="combobox"
                    aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false"
                    aria-labelledby="select2-2afz-container" aria-controls="select2-2afz-container"><span
                      class="select2-selection__rendered" id="select2-2afz-container" role="textbox"
                      aria-readonly="true" title="وضعیت"><span
                        class="select2-selection__placeholder">وضعیت</span></span><span class="select2-selection__arrow"
                      role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper"
                  aria-hidden="true"></span></span>
              <!--end::انتخاب2-->
            </div>
            <!--begin::Add product-->
            <a href="../../demo1/dist/apps/ecommerce/catalog/add-product.html" class="btn btn-primary">افزودن محصول</a>
            <!--end::Add product-->
          </div>
          <!--end::کارت toolbar-->
        </div>
        <!--end::کارت header-->
        <!--begin::کارت body-->
        <div class="card-body pt-0">
          <!--begin::Table-->
          <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_ecommerce_محصولات_table">
            <thead>
              <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                <th class="w-10px pe-2">
                  <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                    <input class="form-check-input" type="checkbox" data-kt-check="true"
                      data-kt-check-target="#kt_ecommerce_محصولات_table .form-check-input" value="1">
                  </div>
                </th>
                <th class="min-w-200px">محصولات</th>
                <th class="text-end min-w-100px">SKU</th>
                <th class="text-end min-w-70px">تعداد</th>
                <th class="text-end min-w-100px">قیمت</th>
                <th class="text-end min-w-100px">رتبه بندی</th>
                <th class="text-end min-w-100px">وضعیت</th>
                <th class="text-end min-w-70px">عملیات</th>
              </tr>
            </thead>
            <tbody class="fw-semibold text-gray-600">
              <?php foreach ($products as $product): ?>

                <tr>
                  <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                      <input class="form-check-input" type="checkbox" value="1">
                    </div>
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                      <!--begin::Thumbnail-->
                      <a href="<?php echo c_url('/product.php?id=' . $product['ID']); ?>"
                        class="symbol symbol-50px">
                        <span class="symbol-label"
                          style="background-image:url(<?php echo urlOfUpload($product['thumbnail']); ?>);"></span>
                      </a>
                      <!--end::Thumbnail-->
                      <div class="ms-5">
                        <!--begin::Title-->
                        <a href="<?php echo c_url('/product.php?id=' . $product['ID']); ?>"
                          class="text-gray-800 text-hover-primary fs-5 fw-bold"
                          data-kt-ecommerce-product-filter="product_name">
                          <?php echo $product['title']; ?>
                        </a>
                        <!--end::Title-->
                      </div>
                    </div>
                  </td>
                  <td class="text-end pe-0">
                    <span class="fw-bold"><?php echo $product['ID']; ?></span>
                  </td>
                  <td class="text-end pe-0" data-order="40">
                    <span class="fw-bold ms-3"><?php echo $product['stock']; ?></span>
                  </td>
                  <td class="text-end pe-0">
                    <?php
                    $sale_price = $product['price'];
                    $price_class = '';
                    if ($product['discount_percent']) {
                      $price_class = 'text-success';
                      echo '<del class="text-danger">' . number_format($product['price'] / 10) . '</del>';
                      $sale_price = (100 - $product['discount_percent']) / 100 * $product['price'];
                    }

                    echo '<ins class="' . $price_class . '">' . number_format($sale_price / 10) . '</ins>';
                    ?>
                  </td>
                  <td class="text-end pe-0" data-order="rating-5">
                    <div class="rating justify-content-end">
                      <div class="rating-label checked">
                        <i class="ki-duotone ki-ستاره fs-6"></i>
                      </div>
                      <div class="rating-label checked">
                        <i class="ki-duotone ki-ستاره fs-6"></i>
                      </div>
                      <div class="rating-label checked">
                        <i class="ki-duotone ki-ستاره fs-6"></i>
                      </div>
                      <div class="rating-label checked">
                        <i class="ki-duotone ki-ستاره fs-6"></i>
                      </div>
                      <div class="rating-label checked">
                        <i class="ki-duotone ki-ستاره fs-6"></i>
                      </div>
                    </div>
                  </td>
                  <td class="text-end pe-0" data-order="در انتظار">
                    <!--begin::Badges-->
                    <div class="badge badge-light-<?php echo $product['stock'] > 0 ? 'success' : 'danger'; ?>">
                      <?php echo $product['stock'] > 0 ? 'موجود' : 'ناموجود'; ?>
                    </div>
                    <!--end::Badges-->
                  </td>
                  <td class="text-end">
                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                      data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">عملیات
                      <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                    <!--begin::Menu-->
                    <div
                      class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                      data-kt-menu="true">
                      <!--begin::Menu item-->
                      <div class="menu-item px-3" id='prod<?= $product["ID"] ?>'>
                        <a href="edit-product.php?product_id=<?= $product['ID'] ?>" class="menu-link px-3">ویرایش</a>
                      </div>
                      <!--end::Menu item-->
                      <!--begin::Menu item-->
                      <div class="menu-item px-3">
                        <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">حذف</a>
                      </div>
                      <!--end::Menu item-->
                    </div>
                    <!--end::Menu-->
                  </td>
                </tr>
              <?php endforeach; ?>

            </tbody>
          </table>
          <!--end::Table-->
        </div>
        <!--end::کارت body-->
      </div>
      <!--end::محصولات-->
    </div>
    <!--end::Content container-->
  </div>
  <!--end::Content-->
</div>
<!--end::Content wrapper-->
<?php include ('components/footer.php'); ?>