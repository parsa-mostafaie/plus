<?php include ('components/header.php'); ?>
<?php
$sql = "SELECT * FROM products ORDER BY ID DESC LIMIT 200 OFFSET 0";
$stmt = $db->query($sql);

$stmt = select_q('products', '*', order: 'id DESC', lim: '200 OFFSET 0');
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);

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
                      <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                        <span class="symbol-label"
                          style="background-image:url(<?php echo urlOfUpload ($product['thumbnail']); ?>);"></span>
                      </a>
                      <!--end::Thumbnail-->
                      <div class="ms-5">
                        <!--begin::Title-->
                        <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
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
                    <div class="badge badge-light-primary">در انتظار</div>
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
                      <div class="menu-item px-3">
                        <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html" class="menu-link px-3"></a>
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
              <tr>
                <td>
                  <div class="form-check form-check-sm form-check-custom form-check-solid">
                    <input class="form-check-input" type="checkbox" value="1">
                  </div>
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <!--begin::Thumbnail-->
                    <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                      <span class="symbol-label"
                        style="background-image:url(assets/media//stock/ecommerce/2.gif);"></span>
                    </a>
                    <!--end::Thumbnail-->
                    <div class="ms-5">
                      <!--begin::Title-->
                      <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                        class="text-gray-800 text-hover-primary fs-5 fw-bold"
                        data-kt-ecommerce-product-filter="product_name">محصولات 2</a>
                      <!--end::Title-->
                    </div>
                  </div>
                </td>
                <td class="text-end pe-0">
                  <span class="fw-bold">02382004</span>
                </td>
                <td class="text-end pe-0" data-order="14">
                  <span class="fw-bold ms-3">14</span>
                </td>
                <td class="text-end pe-0">78</td>
                <td class="text-end pe-0" data-order="rating-3">
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
                    <div class="rating-label">
                      <i class="ki-duotone ki-ستاره fs-6"></i>
                    </div>
                    <div class="rating-label">
                      <i class="ki-duotone ki-ستاره fs-6"></i>
                    </div>
                  </div>
                </td>
                <td class="text-end pe-0" data-order="در انتظار">
                  <!--begin::Badges-->
                  <div class="badge badge-light-primary">در انتظار</div>
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
                    <div class="menu-item px-3">
                      <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html" class="menu-link px-3"></a>
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
              <tr>
                <td>
                  <div class="form-check form-check-sm form-check-custom form-check-solid">
                    <input class="form-check-input" type="checkbox" value="1">
                  </div>
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <!--begin::Thumbnail-->
                    <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                      <span class="symbol-label"
                        style="background-image:url(assets/media//stock/ecommerce/3.gif);"></span>
                    </a>
                    <!--end::Thumbnail-->
                    <div class="ms-5">
                      <!--begin::Title-->
                      <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                        class="text-gray-800 text-hover-primary fs-5 fw-bold"
                        data-kt-ecommerce-product-filter="product_name">محصولات 3</a>
                      <!--end::Title-->
                    </div>
                  </div>
                </td>
                <td class="text-end pe-0">
                  <span class="fw-bold">03841003</span>
                </td>
                <td class="text-end pe-0" data-order="43">
                  <span class="fw-bold ms-3">43</span>
                </td>
                <td class="text-end pe-0">152</td>
                <td class="text-end pe-0" data-order="rating-4">
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
                    <div class="rating-label">
                      <i class="ki-duotone ki-ستاره fs-6"></i>
                    </div>
                  </div>
                </td>
                <td class="text-end pe-0" data-order="منتشر شده">
                  <!--begin::Badges-->
                  <div class="badge badge-light-success">منتشر شده</div>
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
                    <div class="menu-item px-3">
                      <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html" class="menu-link px-3"></a>
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
              <tr>
                <td>
                  <div class="form-check form-check-sm form-check-custom form-check-solid">
                    <input class="form-check-input" type="checkbox" value="1">
                  </div>
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <!--begin::Thumbnail-->
                    <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                      <span class="symbol-label"
                        style="background-image:url(assets/media//stock/ecommerce/4.gif);"></span>
                    </a>
                    <!--end::Thumbnail-->
                    <div class="ms-5">
                      <!--begin::Title-->
                      <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                        class="text-gray-800 text-hover-primary fs-5 fw-bold"
                        data-kt-ecommerce-product-filter="product_name">محصولات 4</a>
                      <!--end::Title-->
                    </div>
                  </div>
                </td>
                <td class="text-end pe-0">
                  <span class="fw-bold">03379003</span>
                </td>
                <td class="text-end pe-0" data-order="32">
                  <span class="fw-bold ms-3">32</span>
                </td>
                <td class="text-end pe-0">223</td>
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
                <td class="text-end pe-0" data-order="غیرفعال">
                  <!--begin::Badges-->
                  <div class="badge badge-light-danger">غیرفعال</div>
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
                    <div class="menu-item px-3">
                      <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html" class="menu-link px-3"></a>
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
              <tr>
                <td>
                  <div class="form-check form-check-sm form-check-custom form-check-solid">
                    <input class="form-check-input" type="checkbox" value="1">
                  </div>
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <!--begin::Thumbnail-->
                    <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                      <span class="symbol-label"
                        style="background-image:url(assets/media//stock/ecommerce/5.gif);"></span>
                    </a>
                    <!--end::Thumbnail-->
                    <div class="ms-5">
                      <!--begin::Title-->
                      <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                        class="text-gray-800 text-hover-primary fs-5 fw-bold"
                        data-kt-ecommerce-product-filter="product_name">محصولات 5</a>
                      <!--end::Title-->
                    </div>
                  </div>
                </td>
                <td class="text-end pe-0">
                  <span class="fw-bold">04779007</span>
                </td>
                <td class="text-end pe-0" data-order="0">
                  <span class="badge badge-light-danger">فروخته شده</span>
                  <span class="fw-bold text-danger ms-3">0</span>
                </td>
                <td class="text-end pe-0">190</td>
                <td class="text-end pe-0" data-order="rating-4">
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
                    <div class="rating-label">
                      <i class="ki-duotone ki-ستاره fs-6"></i>
                    </div>
                  </div>
                </td>
                <td class="text-end pe-0" data-order="غیرفعال">
                  <!--begin::Badges-->
                  <div class="badge badge-light-danger">غیرفعال</div>
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
                    <div class="menu-item px-3">
                      <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html" class="menu-link px-3"></a>
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
              <tr>
                <td>
                  <div class="form-check form-check-sm form-check-custom form-check-solid">
                    <input class="form-check-input" type="checkbox" value="1">
                  </div>
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <!--begin::Thumbnail-->
                    <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                      <span class="symbol-label"
                        style="background-image:url(assets/media//stock/ecommerce/6.gif);"></span>
                    </a>
                    <!--end::Thumbnail-->
                    <div class="ms-5">
                      <!--begin::Title-->
                      <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                        class="text-gray-800 text-hover-primary fs-5 fw-bold"
                        data-kt-ecommerce-product-filter="product_name">محصولات 6</a>
                      <!--end::Title-->
                    </div>
                  </div>
                </td>
                <td class="text-end pe-0">
                  <span class="fw-bold">03459008</span>
                </td>
                <td class="text-end pe-0" data-order="26">
                  <span class="fw-bold ms-3">26</span>
                </td>
                <td class="text-end pe-0">269</td>
                <td class="text-end pe-0" data-order="rating-4">
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
                    <div class="rating-label">
                      <i class="ki-duotone ki-ستاره fs-6"></i>
                    </div>
                  </div>
                </td>
                <td class="text-end pe-0" data-order="در انتظار">
                  <!--begin::Badges-->
                  <div class="badge badge-light-primary">در انتظار</div>
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
                    <div class="menu-item px-3">
                      <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html" class="menu-link px-3"></a>
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
              <tr>
                <td>
                  <div class="form-check form-check-sm form-check-custom form-check-solid">
                    <input class="form-check-input" type="checkbox" value="1">
                  </div>
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <!--begin::Thumbnail-->
                    <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                      <span class="symbol-label"
                        style="background-image:url(assets/media//stock/ecommerce/7.gif);"></span>
                    </a>
                    <!--end::Thumbnail-->
                    <div class="ms-5">
                      <!--begin::Title-->
                      <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                        class="text-gray-800 text-hover-primary fs-5 fw-bold"
                        data-kt-ecommerce-product-filter="product_name">محصولات 7</a>
                      <!--end::Title-->
                    </div>
                  </div>
                </td>
                <td class="text-end pe-0">
                  <span class="fw-bold">01700009</span>
                </td>
                <td class="text-end pe-0" data-order="3">
                  <span class="badge badge-light-warning">موجودی کم</span>
                  <span class="fw-bold text-warning ms-3">3</span>
                </td>
                <td class="text-end pe-0">49</td>
                <td class="text-end pe-0" data-order="rating-3">
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
                    <div class="rating-label">
                      <i class="ki-duotone ki-ستاره fs-6"></i>
                    </div>
                    <div class="rating-label">
                      <i class="ki-duotone ki-ستاره fs-6"></i>
                    </div>
                  </div>
                </td>
                <td class="text-end pe-0" data-order="در انتظار">
                  <!--begin::Badges-->
                  <div class="badge badge-light-primary">در انتظار</div>
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
                    <div class="menu-item px-3">
                      <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html" class="menu-link px-3"></a>
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
              <tr>
                <td>
                  <div class="form-check form-check-sm form-check-custom form-check-solid">
                    <input class="form-check-input" type="checkbox" value="1">
                  </div>
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <!--begin::Thumbnail-->
                    <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                      <span class="symbol-label"
                        style="background-image:url(assets/media//stock/ecommerce/8.gif);"></span>
                    </a>
                    <!--end::Thumbnail-->
                    <div class="ms-5">
                      <!--begin::Title-->
                      <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                        class="text-gray-800 text-hover-primary fs-5 fw-bold"
                        data-kt-ecommerce-product-filter="product_name">محصولات 8</a>
                      <!--end::Title-->
                    </div>
                  </div>
                </td>
                <td class="text-end pe-0">
                  <span class="fw-bold">01497005</span>
                </td>
                <td class="text-end pe-0" data-order="11">
                  <span class="fw-bold ms-3">11</span>
                </td>
                <td class="text-end pe-0">207</td>
                <td class="text-end pe-0" data-order="rating-3">
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
                    <div class="rating-label">
                      <i class="ki-duotone ki-ستاره fs-6"></i>
                    </div>
                    <div class="rating-label">
                      <i class="ki-duotone ki-ستاره fs-6"></i>
                    </div>
                  </div>
                </td>
                <td class="text-end pe-0" data-order="غیرفعال">
                  <!--begin::Badges-->
                  <div class="badge badge-light-danger">غیرفعال</div>
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
                    <div class="menu-item px-3">
                      <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html" class="menu-link px-3"></a>
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
              <tr>
                <td>
                  <div class="form-check form-check-sm form-check-custom form-check-solid">
                    <input class="form-check-input" type="checkbox" value="1">
                  </div>
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <!--begin::Thumbnail-->
                    <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                      <span class="symbol-label"
                        style="background-image:url(assets/media//stock/ecommerce/9.gif);"></span>
                    </a>
                    <!--end::Thumbnail-->
                    <div class="ms-5">
                      <!--begin::Title-->
                      <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                        class="text-gray-800 text-hover-primary fs-5 fw-bold"
                        data-kt-ecommerce-product-filter="product_name">محصولات 9</a>
                      <!--end::Title-->
                    </div>
                  </div>
                </td>
                <td class="text-end pe-0">
                  <span class="fw-bold">03445001</span>
                </td>
                <td class="text-end pe-0" data-order="23">
                  <span class="fw-bold ms-3">23</span>
                </td>
                <td class="text-end pe-0">234</td>
                <td class="text-end pe-0" data-order="rating-3">
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
                    <div class="rating-label">
                      <i class="ki-duotone ki-ستاره fs-6"></i>
                    </div>
                    <div class="rating-label">
                      <i class="ki-duotone ki-ستاره fs-6"></i>
                    </div>
                  </div>
                </td>
                <td class="text-end pe-0" data-order="در انتظار">
                  <!--begin::Badges-->
                  <div class="badge badge-light-primary">در انتظار</div>
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
                    <div class="menu-item px-3">
                      <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html" class="menu-link px-3"></a>
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
              <tr>
                <td>
                  <div class="form-check form-check-sm form-check-custom form-check-solid">
                    <input class="form-check-input" type="checkbox" value="1">
                  </div>
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <!--begin::Thumbnail-->
                    <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                      <span class="symbol-label"
                        style="background-image:url(assets/media//stock/ecommerce/10.gif);"></span>
                    </a>
                    <!--end::Thumbnail-->
                    <div class="ms-5">
                      <!--begin::Title-->
                      <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                        class="text-gray-800 text-hover-primary fs-5 fw-bold"
                        data-kt-ecommerce-product-filter="product_name">محصولات 10</a>
                      <!--end::Title-->
                    </div>
                  </div>
                </td>
                <td class="text-end pe-0">
                  <span class="fw-bold">04504009</span>
                </td>
                <td class="text-end pe-0" data-order="24">
                  <span class="fw-bold ms-3">24</span>
                </td>
                <td class="text-end pe-0">299</td>
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
                <td class="text-end pe-0" data-order="غیرفعال">
                  <!--begin::Badges-->
                  <div class="badge badge-light-danger">غیرفعال</div>
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
                    <div class="menu-item px-3">
                      <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html" class="menu-link px-3"></a>
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
              <tr>
                <td>
                  <div class="form-check form-check-sm form-check-custom form-check-solid">
                    <input class="form-check-input" type="checkbox" value="1">
                  </div>
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <!--begin::Thumbnail-->
                    <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                      <span class="symbol-label"
                        style="background-image:url(assets/media//stock/ecommerce/11.gif);"></span>
                    </a>
                    <!--end::Thumbnail-->
                    <div class="ms-5">
                      <!--begin::Title-->
                      <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                        class="text-gray-800 text-hover-primary fs-5 fw-bold"
                        data-kt-ecommerce-product-filter="product_name">محصولات 11</a>
                      <!--end::Title-->
                    </div>
                  </div>
                </td>
                <td class="text-end pe-0">
                  <span class="fw-bold">04512003</span>
                </td>
                <td class="text-end pe-0" data-order="37">
                  <span class="fw-bold ms-3">37</span>
                </td>
                <td class="text-end pe-0">298</td>
                <td class="text-end pe-0" data-order="rating-3">
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
                    <div class="rating-label">
                      <i class="ki-duotone ki-ستاره fs-6"></i>
                    </div>
                    <div class="rating-label">
                      <i class="ki-duotone ki-ستاره fs-6"></i>
                    </div>
                  </div>
                </td>
                <td class="text-end pe-0" data-order="منتشر شده">
                  <!--begin::Badges-->
                  <div class="badge badge-light-success">منتشر شده</div>
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
                    <div class="menu-item px-3">
                      <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html" class="menu-link px-3"></a>
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
              <tr>
                <td>
                  <div class="form-check form-check-sm form-check-custom form-check-solid">
                    <input class="form-check-input" type="checkbox" value="1">
                  </div>
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <!--begin::Thumbnail-->
                    <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                      <span class="symbol-label"
                        style="background-image:url(assets/media//stock/ecommerce/12.gif);"></span>
                    </a>
                    <!--end::Thumbnail-->
                    <div class="ms-5">
                      <!--begin::Title-->
                      <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                        class="text-gray-800 text-hover-primary fs-5 fw-bold"
                        data-kt-ecommerce-product-filter="product_name">محصولات 12</a>
                      <!--end::Title-->
                    </div>
                  </div>
                </td>
                <td class="text-end pe-0">
                  <span class="fw-bold">04280004</span>
                </td>
                <td class="text-end pe-0" data-order="16">
                  <span class="fw-bold ms-3">16</span>
                </td>
                <td class="text-end pe-0">54</td>
                <td class="text-end pe-0" data-order="rating-4">
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
                    <div class="rating-label">
                      <i class="ki-duotone ki-ستاره fs-6"></i>
                    </div>
                  </div>
                </td>
                <td class="text-end pe-0" data-order="در انتظار">
                  <!--begin::Badges-->
                  <div class="badge badge-light-primary">در انتظار</div>
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
                    <div class="menu-item px-3">
                      <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html" class="menu-link px-3"></a>
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
              <tr>
                <td>
                  <div class="form-check form-check-sm form-check-custom form-check-solid">
                    <input class="form-check-input" type="checkbox" value="1">
                  </div>
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <!--begin::Thumbnail-->
                    <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                      <span class="symbol-label"
                        style="background-image:url(assets/media//stock/ecommerce/13.gif);"></span>
                    </a>
                    <!--end::Thumbnail-->
                    <div class="ms-5">
                      <!--begin::Title-->
                      <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                        class="text-gray-800 text-hover-primary fs-5 fw-bold"
                        data-kt-ecommerce-product-filter="product_name">محصولات 13</a>
                      <!--end::Title-->
                    </div>
                  </div>
                </td>
                <td class="text-end pe-0">
                  <span class="fw-bold">03493001</span>
                </td>
                <td class="text-end pe-0" data-order="24">
                  <span class="fw-bold ms-3">24</span>
                </td>
                <td class="text-end pe-0">116</td>
                <td class="text-end pe-0" data-order="rating-3">
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
                    <div class="rating-label">
                      <i class="ki-duotone ki-ستاره fs-6"></i>
                    </div>
                    <div class="rating-label">
                      <i class="ki-duotone ki-ستاره fs-6"></i>
                    </div>
                  </div>
                </td>
                <td class="text-end pe-0" data-order="منتشر شده">
                  <!--begin::Badges-->
                  <div class="badge badge-light-success">منتشر شده</div>
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
                    <div class="menu-item px-3">
                      <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html" class="menu-link px-3"></a>
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
              <tr>
                <td>
                  <div class="form-check form-check-sm form-check-custom form-check-solid">
                    <input class="form-check-input" type="checkbox" value="1">
                  </div>
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <!--begin::Thumbnail-->
                    <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                      <span class="symbol-label"
                        style="background-image:url(assets/media//stock/ecommerce/14.gif);"></span>
                    </a>
                    <!--end::Thumbnail-->
                    <div class="ms-5">
                      <!--begin::Title-->
                      <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                        class="text-gray-800 text-hover-primary fs-5 fw-bold"
                        data-kt-ecommerce-product-filter="product_name">محصولات 14</a>
                      <!--end::Title-->
                    </div>
                  </div>
                </td>
                <td class="text-end pe-0">
                  <span class="fw-bold">04187002</span>
                </td>
                <td class="text-end pe-0" data-order="12">
                  <span class="fw-bold ms-3">12</span>
                </td>
                <td class="text-end pe-0">253</td>
                <td class="text-end pe-0" data-order="rating-4">
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
                    <div class="rating-label">
                      <i class="ki-duotone ki-ستاره fs-6"></i>
                    </div>
                  </div>
                </td>
                <td class="text-end pe-0" data-order="منتشر شده">
                  <!--begin::Badges-->
                  <div class="badge badge-light-success">منتشر شده</div>
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
                    <div class="menu-item px-3">
                      <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html" class="menu-link px-3"></a>
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
              <tr>
                <td>
                  <div class="form-check form-check-sm form-check-custom form-check-solid">
                    <input class="form-check-input" type="checkbox" value="1">
                  </div>
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <!--begin::Thumbnail-->
                    <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                      <span class="symbol-label"
                        style="background-image:url(assets/media//stock/ecommerce/15.gif);"></span>
                    </a>
                    <!--end::Thumbnail-->
                    <div class="ms-5">
                      <!--begin::Title-->
                      <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                        class="text-gray-800 text-hover-primary fs-5 fw-bold"
                        data-kt-ecommerce-product-filter="product_name">محصولات 15</a>
                      <!--end::Title-->
                    </div>
                  </div>
                </td>
                <td class="text-end pe-0">
                  <span class="fw-bold">03875002</span>
                </td>
                <td class="text-end pe-0" data-order="2">
                  <span class="badge badge-light-warning">موجودی کم</span>
                  <span class="fw-bold text-warning ms-3">2</span>
                </td>
                <td class="text-end pe-0">144</td>
                <td class="text-end pe-0" data-order="rating-3">
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
                    <div class="rating-label">
                      <i class="ki-duotone ki-ستاره fs-6"></i>
                    </div>
                    <div class="rating-label">
                      <i class="ki-duotone ki-ستاره fs-6"></i>
                    </div>
                  </div>
                </td>
                <td class="text-end pe-0" data-order="غیرفعال">
                  <!--begin::Badges-->
                  <div class="badge badge-light-danger">غیرفعال</div>
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
                    <div class="menu-item px-3">
                      <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html" class="menu-link px-3"></a>
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
              <tr>
                <td>
                  <div class="form-check form-check-sm form-check-custom form-check-solid">
                    <input class="form-check-input" type="checkbox" value="1">
                  </div>
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <!--begin::Thumbnail-->
                    <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                      <span class="symbol-label"
                        style="background-image:url(assets/media//stock/ecommerce/16.gif);"></span>
                    </a>
                    <!--end::Thumbnail-->
                    <div class="ms-5">
                      <!--begin::Title-->
                      <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                        class="text-gray-800 text-hover-primary fs-5 fw-bold"
                        data-kt-ecommerce-product-filter="product_name">محصولات 16</a>
                      <!--end::Title-->
                    </div>
                  </div>
                </td>
                <td class="text-end pe-0">
                  <span class="fw-bold">04982004</span>
                </td>
                <td class="text-end pe-0" data-order="7">
                  <span class="badge badge-light-warning">موجودی کم</span>
                  <span class="fw-bold text-warning ms-3">7</span>
                </td>
                <td class="text-end pe-0">267</td>
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
                <td class="text-end pe-0" data-order="غیرفعال">
                  <!--begin::Badges-->
                  <div class="badge badge-light-danger">غیرفعال</div>
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
                    <div class="menu-item px-3">
                      <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html" class="menu-link px-3"></a>
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
              <tr>
                <td>
                  <div class="form-check form-check-sm form-check-custom form-check-solid">
                    <input class="form-check-input" type="checkbox" value="1">
                  </div>
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <!--begin::Thumbnail-->
                    <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                      <span class="symbol-label"
                        style="background-image:url(assets/media//stock/ecommerce/17.gif);"></span>
                    </a>
                    <!--end::Thumbnail-->
                    <div class="ms-5">
                      <!--begin::Title-->
                      <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                        class="text-gray-800 text-hover-primary fs-5 fw-bold"
                        data-kt-ecommerce-product-filter="product_name">محصولات 17</a>
                      <!--end::Title-->
                    </div>
                  </div>
                </td>
                <td class="text-end pe-0">
                  <span class="fw-bold">02938003</span>
                </td>
                <td class="text-end pe-0" data-order="9">
                  <span class="badge badge-light-warning">موجودی کم</span>
                  <span class="fw-bold text-warning ms-3">9</span>
                </td>
                <td class="text-end pe-0">24</td>
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
                <td class="text-end pe-0" data-order="منتشر شده">
                  <!--begin::Badges-->
                  <div class="badge badge-light-success">منتشر شده</div>
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
                    <div class="menu-item px-3">
                      <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html" class="menu-link px-3"></a>
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
              <tr>
                <td>
                  <div class="form-check form-check-sm form-check-custom form-check-solid">
                    <input class="form-check-input" type="checkbox" value="1">
                  </div>
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <!--begin::Thumbnail-->
                    <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                      <span class="symbol-label"
                        style="background-image:url(assets/media//stock/ecommerce/18.gif);"></span>
                    </a>
                    <!--end::Thumbnail-->
                    <div class="ms-5">
                      <!--begin::Title-->
                      <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                        class="text-gray-800 text-hover-primary fs-5 fw-bold"
                        data-kt-ecommerce-product-filter="product_name">محصولات 18</a>
                      <!--end::Title-->
                    </div>
                  </div>
                </td>
                <td class="text-end pe-0">
                  <span class="fw-bold">01330005</span>
                </td>
                <td class="text-end pe-0" data-order="21">
                  <span class="fw-bold ms-3">21</span>
                </td>
                <td class="text-end pe-0">154</td>
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
                <td class="text-end pe-0" data-order="منتشر شده">
                  <!--begin::Badges-->
                  <div class="badge badge-light-success">منتشر شده</div>
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
                    <div class="menu-item px-3">
                      <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html" class="menu-link px-3"></a>
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
              <tr>
                <td>
                  <div class="form-check form-check-sm form-check-custom form-check-solid">
                    <input class="form-check-input" type="checkbox" value="1">
                  </div>
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <!--begin::Thumbnail-->
                    <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                      <span class="symbol-label"
                        style="background-image:url(assets/media//stock/ecommerce/19.gif);"></span>
                    </a>
                    <!--end::Thumbnail-->
                    <div class="ms-5">
                      <!--begin::Title-->
                      <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                        class="text-gray-800 text-hover-primary fs-5 fw-bold"
                        data-kt-ecommerce-product-filter="product_name">محصولات 19</a>
                      <!--end::Title-->
                    </div>
                  </div>
                </td>
                <td class="text-end pe-0">
                  <span class="fw-bold">04875002</span>
                </td>
                <td class="text-end pe-0" data-order="11">
                  <span class="fw-bold ms-3">11</span>
                </td>
                <td class="text-end pe-0">72</td>
                <td class="text-end pe-0" data-order="rating-3">
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
                    <div class="rating-label">
                      <i class="ki-duotone ki-ستاره fs-6"></i>
                    </div>
                    <div class="rating-label">
                      <i class="ki-duotone ki-ستاره fs-6"></i>
                    </div>
                  </div>
                </td>
                <td class="text-end pe-0" data-order="در انتظار">
                  <!--begin::Badges-->
                  <div class="badge badge-light-primary">در انتظار</div>
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
                    <div class="menu-item px-3">
                      <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html" class="menu-link px-3"></a>
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
              <tr>
                <td>
                  <div class="form-check form-check-sm form-check-custom form-check-solid">
                    <input class="form-check-input" type="checkbox" value="1">
                  </div>
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <!--begin::Thumbnail-->
                    <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                      <span class="symbol-label"
                        style="background-image:url(assets/media//stock/ecommerce/20.gif);"></span>
                    </a>
                    <!--end::Thumbnail-->
                    <div class="ms-5">
                      <!--begin::Title-->
                      <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                        class="text-gray-800 text-hover-primary fs-5 fw-bold"
                        data-kt-ecommerce-product-filter="product_name">محصولات 20</a>
                      <!--end::Title-->
                    </div>
                  </div>
                </td>
                <td class="text-end pe-0">
                  <span class="fw-bold">04164004</span>
                </td>
                <td class="text-end pe-0" data-order="15">
                  <span class="fw-bold ms-3">15</span>
                </td>
                <td class="text-end pe-0">140</td>
                <td class="text-end pe-0" data-order="rating-4">
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
                    <div class="rating-label">
                      <i class="ki-duotone ki-ستاره fs-6"></i>
                    </div>
                  </div>
                </td>
                <td class="text-end pe-0" data-order="منتشر شده">
                  <!--begin::Badges-->
                  <div class="badge badge-light-success">منتشر شده</div>
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
                    <div class="menu-item px-3">
                      <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html" class="menu-link px-3"></a>
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
              <tr>
                <td>
                  <div class="form-check form-check-sm form-check-custom form-check-solid">
                    <input class="form-check-input" type="checkbox" value="1">
                  </div>
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <!--begin::Thumbnail-->
                    <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                      <span class="symbol-label"
                        style="background-image:url(assets/media//stock/ecommerce/21.gif);"></span>
                    </a>
                    <!--end::Thumbnail-->
                    <div class="ms-5">
                      <!--begin::Title-->
                      <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                        class="text-gray-800 text-hover-primary fs-5 fw-bold"
                        data-kt-ecommerce-product-filter="product_name">محصولات 21</a>
                      <!--end::Title-->
                    </div>
                  </div>
                </td>
                <td class="text-end pe-0">
                  <span class="fw-bold">04808001</span>
                </td>
                <td class="text-end pe-0" data-order="18">
                  <span class="fw-bold ms-3">18</span>
                </td>
                <td class="text-end pe-0">281</td>
                <td class="text-end pe-0" data-order="rating-4">
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
                    <div class="rating-label">
                      <i class="ki-duotone ki-ستاره fs-6"></i>
                    </div>
                  </div>
                </td>
                <td class="text-end pe-0" data-order="منتشر شده">
                  <!--begin::Badges-->
                  <div class="badge badge-light-success">منتشر شده</div>
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
                    <div class="menu-item px-3">
                      <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html" class="menu-link px-3"></a>
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
              <tr>
                <td>
                  <div class="form-check form-check-sm form-check-custom form-check-solid">
                    <input class="form-check-input" type="checkbox" value="1">
                  </div>
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <!--begin::Thumbnail-->
                    <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                      <span class="symbol-label"
                        style="background-image:url(assets/media//stock/ecommerce/22.gif);"></span>
                    </a>
                    <!--end::Thumbnail-->
                    <div class="ms-5">
                      <!--begin::Title-->
                      <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                        class="text-gray-800 text-hover-primary fs-5 fw-bold"
                        data-kt-ecommerce-product-filter="product_name">محصولات 22</a>
                      <!--end::Title-->
                    </div>
                  </div>
                </td>
                <td class="text-end pe-0">
                  <span class="fw-bold">03228001</span>
                </td>
                <td class="text-end pe-0" data-order="30">
                  <span class="fw-bold ms-3">30</span>
                </td>
                <td class="text-end pe-0">125</td>
                <td class="text-end pe-0" data-order="rating-3">
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
                    <div class="rating-label">
                      <i class="ki-duotone ki-ستاره fs-6"></i>
                    </div>
                    <div class="rating-label">
                      <i class="ki-duotone ki-ستاره fs-6"></i>
                    </div>
                  </div>
                </td>
                <td class="text-end pe-0" data-order="منتشر شده">
                  <!--begin::Badges-->
                  <div class="badge badge-light-success">منتشر شده</div>
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
                    <div class="menu-item px-3">
                      <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html" class="menu-link px-3"></a>
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
              <tr>
                <td>
                  <div class="form-check form-check-sm form-check-custom form-check-solid">
                    <input class="form-check-input" type="checkbox" value="1">
                  </div>
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <!--begin::Thumbnail-->
                    <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                      <span class="symbol-label"
                        style="background-image:url(assets/media//stock/ecommerce/23.gif);"></span>
                    </a>
                    <!--end::Thumbnail-->
                    <div class="ms-5">
                      <!--begin::Title-->
                      <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                        class="text-gray-800 text-hover-primary fs-5 fw-bold"
                        data-kt-ecommerce-product-filter="product_name">محصولات 23</a>
                      <!--end::Title-->
                    </div>
                  </div>
                </td>
                <td class="text-end pe-0">
                  <span class="fw-bold">01508004</span>
                </td>
                <td class="text-end pe-0" data-order="30">
                  <span class="fw-bold ms-3">30</span>
                </td>
                <td class="text-end pe-0">71</td>
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
                <td class="text-end pe-0" data-order="منتشر شده">
                  <!--begin::Badges-->
                  <div class="badge badge-light-success">منتشر شده</div>
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
                    <div class="menu-item px-3">
                      <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html" class="menu-link px-3"></a>
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
              <tr>
                <td>
                  <div class="form-check form-check-sm form-check-custom form-check-solid">
                    <input class="form-check-input" type="checkbox" value="1">
                  </div>
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <!--begin::Thumbnail-->
                    <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                      <span class="symbol-label"
                        style="background-image:url(assets/media//stock/ecommerce/24.gif);"></span>
                    </a>
                    <!--end::Thumbnail-->
                    <div class="ms-5">
                      <!--begin::Title-->
                      <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                        class="text-gray-800 text-hover-primary fs-5 fw-bold"
                        data-kt-ecommerce-product-filter="product_name">محصولات 24</a>
                      <!--end::Title-->
                    </div>
                  </div>
                </td>
                <td class="text-end pe-0">
                  <span class="fw-bold">03326003</span>
                </td>
                <td class="text-end pe-0" data-order="25">
                  <span class="fw-bold ms-3">25</span>
                </td>
                <td class="text-end pe-0">35</td>
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
                  <div class="badge badge-light-primary">در انتظار</div>
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
                    <div class="menu-item px-3">
                      <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html" class="menu-link px-3"></a>
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
              <tr>
                <td>
                  <div class="form-check form-check-sm form-check-custom form-check-solid">
                    <input class="form-check-input" type="checkbox" value="1">
                  </div>
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <!--begin::Thumbnail-->
                    <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                      <span class="symbol-label"
                        style="background-image:url(assets/media//stock/ecommerce/25.gif);"></span>
                    </a>
                    <!--end::Thumbnail-->
                    <div class="ms-5">
                      <!--begin::Title-->
                      <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                        class="text-gray-800 text-hover-primary fs-5 fw-bold"
                        data-kt-ecommerce-product-filter="product_name">محصولات 25</a>
                      <!--end::Title-->
                    </div>
                  </div>
                </td>
                <td class="text-end pe-0">
                  <span class="fw-bold">04637006</span>
                </td>
                <td class="text-end pe-0" data-order="16">
                  <span class="fw-bold ms-3">16</span>
                </td>
                <td class="text-end pe-0">194</td>
                <td class="text-end pe-0" data-order="rating-3">
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
                    <div class="rating-label">
                      <i class="ki-duotone ki-ستاره fs-6"></i>
                    </div>
                    <div class="rating-label">
                      <i class="ki-duotone ki-ستاره fs-6"></i>
                    </div>
                  </div>
                </td>
                <td class="text-end pe-0" data-order="غیرفعال">
                  <!--begin::Badges-->
                  <div class="badge badge-light-danger">غیرفعال</div>
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
                    <div class="menu-item px-3">
                      <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html" class="menu-link px-3"></a>
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
              <tr>
                <td>
                  <div class="form-check form-check-sm form-check-custom form-check-solid">
                    <input class="form-check-input" type="checkbox" value="1">
                  </div>
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <!--begin::Thumbnail-->
                    <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                      <span class="symbol-label"
                        style="background-image:url(assets/media//stock/ecommerce/26.gif);"></span>
                    </a>
                    <!--end::Thumbnail-->
                    <div class="ms-5">
                      <!--begin::Title-->
                      <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                        class="text-gray-800 text-hover-primary fs-5 fw-bold"
                        data-kt-ecommerce-product-filter="product_name">محصولات 26</a>
                      <!--end::Title-->
                    </div>
                  </div>
                </td>
                <td class="text-end pe-0">
                  <span class="fw-bold">01376009</span>
                </td>
                <td class="text-end pe-0" data-order="26">
                  <span class="fw-bold ms-3">26</span>
                </td>
                <td class="text-end pe-0">113</td>
                <td class="text-end pe-0" data-order="rating-3">
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
                    <div class="rating-label">
                      <i class="ki-duotone ki-ستاره fs-6"></i>
                    </div>
                    <div class="rating-label">
                      <i class="ki-duotone ki-ستاره fs-6"></i>
                    </div>
                  </div>
                </td>
                <td class="text-end pe-0" data-order="غیرفعال">
                  <!--begin::Badges-->
                  <div class="badge badge-light-danger">غیرفعال</div>
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
                    <div class="menu-item px-3">
                      <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html" class="menu-link px-3"></a>
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
              <tr>
                <td>
                  <div class="form-check form-check-sm form-check-custom form-check-solid">
                    <input class="form-check-input" type="checkbox" value="1">
                  </div>
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <!--begin::Thumbnail-->
                    <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                      <span class="symbol-label"
                        style="background-image:url(assets/media//stock/ecommerce/27.gif);"></span>
                    </a>
                    <!--end::Thumbnail-->
                    <div class="ms-5">
                      <!--begin::Title-->
                      <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                        class="text-gray-800 text-hover-primary fs-5 fw-bold"
                        data-kt-ecommerce-product-filter="product_name">محصولات 27</a>
                      <!--end::Title-->
                    </div>
                  </div>
                </td>
                <td class="text-end pe-0">
                  <span class="fw-bold">04491005</span>
                </td>
                <td class="text-end pe-0" data-order="14">
                  <span class="fw-bold ms-3">14</span>
                </td>
                <td class="text-end pe-0">284</td>
                <td class="text-end pe-0" data-order="rating-3">
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
                    <div class="rating-label">
                      <i class="ki-duotone ki-ستاره fs-6"></i>
                    </div>
                    <div class="rating-label">
                      <i class="ki-duotone ki-ستاره fs-6"></i>
                    </div>
                  </div>
                </td>
                <td class="text-end pe-0" data-order="منتشر شده">
                  <!--begin::Badges-->
                  <div class="badge badge-light-success">منتشر شده</div>
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
                    <div class="menu-item px-3">
                      <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html" class="menu-link px-3"></a>
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
              <tr>
                <td>
                  <div class="form-check form-check-sm form-check-custom form-check-solid">
                    <input class="form-check-input" type="checkbox" value="1">
                  </div>
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <!--begin::Thumbnail-->
                    <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                      <span class="symbol-label"
                        style="background-image:url(assets/media//stock/ecommerce/28.gif);"></span>
                    </a>
                    <!--end::Thumbnail-->
                    <div class="ms-5">
                      <!--begin::Title-->
                      <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                        class="text-gray-800 text-hover-primary fs-5 fw-bold"
                        data-kt-ecommerce-product-filter="product_name">محصولات 28</a>
                      <!--end::Title-->
                    </div>
                  </div>
                </td>
                <td class="text-end pe-0">
                  <span class="fw-bold">04366005</span>
                </td>
                <td class="text-end pe-0" data-order="47">
                  <span class="fw-bold ms-3">47</span>
                </td>
                <td class="text-end pe-0">68</td>
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
                <td class="text-end pe-0" data-order="غیرفعال">
                  <!--begin::Badges-->
                  <div class="badge badge-light-danger">غیرفعال</div>
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
                    <div class="menu-item px-3">
                      <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html" class="menu-link px-3"></a>
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
              <tr>
                <td>
                  <div class="form-check form-check-sm form-check-custom form-check-solid">
                    <input class="form-check-input" type="checkbox" value="1">
                  </div>
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <!--begin::Thumbnail-->
                    <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                      <span class="symbol-label"
                        style="background-image:url(assets/media//stock/ecommerce/29.gif);"></span>
                    </a>
                    <!--end::Thumbnail-->
                    <div class="ms-5">
                      <!--begin::Title-->
                      <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                        class="text-gray-800 text-hover-primary fs-5 fw-bold"
                        data-kt-ecommerce-product-filter="product_name">محصولات 29</a>
                      <!--end::Title-->
                    </div>
                  </div>
                </td>
                <td class="text-end pe-0">
                  <span class="fw-bold">02400008</span>
                </td>
                <td class="text-end pe-0" data-order="22">
                  <span class="fw-bold ms-3">22</span>
                </td>
                <td class="text-end pe-0">17</td>
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
                <td class="text-end pe-0" data-order="منتشر شده">
                  <!--begin::Badges-->
                  <div class="badge badge-light-success">منتشر شده</div>
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
                    <div class="menu-item px-3">
                      <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html" class="menu-link px-3"></a>
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
              <tr>
                <td>
                  <div class="form-check form-check-sm form-check-custom form-check-solid">
                    <input class="form-check-input" type="checkbox" value="1">
                  </div>
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <!--begin::Thumbnail-->
                    <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                      <span class="symbol-label"
                        style="background-image:url(assets/media//stock/ecommerce/30.gif);"></span>
                    </a>
                    <!--end::Thumbnail-->
                    <div class="ms-5">
                      <!--begin::Title-->
                      <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                        class="text-gray-800 text-hover-primary fs-5 fw-bold"
                        data-kt-ecommerce-product-filter="product_name">محصولات 30</a>
                      <!--end::Title-->
                    </div>
                  </div>
                </td>
                <td class="text-end pe-0">
                  <span class="fw-bold">01104008</span>
                </td>
                <td class="text-end pe-0" data-order="37">
                  <span class="fw-bold ms-3">37</span>
                </td>
                <td class="text-end pe-0">284</td>
                <td class="text-end pe-0" data-order="rating-3">
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
                    <div class="rating-label">
                      <i class="ki-duotone ki-ستاره fs-6"></i>
                    </div>
                    <div class="rating-label">
                      <i class="ki-duotone ki-ستاره fs-6"></i>
                    </div>
                  </div>
                </td>
                <td class="text-end pe-0" data-order="غیرفعال">
                  <!--begin::Badges-->
                  <div class="badge badge-light-danger">غیرفعال</div>
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
                    <div class="menu-item px-3">
                      <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html" class="menu-link px-3"></a>
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
              <tr>
                <td>
                  <div class="form-check form-check-sm form-check-custom form-check-solid">
                    <input class="form-check-input" type="checkbox" value="1">
                  </div>
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <!--begin::Thumbnail-->
                    <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                      <span class="symbol-label"
                        style="background-image:url(assets/media//stock/ecommerce/31.gif);"></span>
                    </a>
                    <!--end::Thumbnail-->
                    <div class="ms-5">
                      <!--begin::Title-->
                      <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                        class="text-gray-800 text-hover-primary fs-5 fw-bold"
                        data-kt-ecommerce-product-filter="product_name">محصولات 31</a>
                      <!--end::Title-->
                    </div>
                  </div>
                </td>
                <td class="text-end pe-0">
                  <span class="fw-bold">01632004</span>
                </td>
                <td class="text-end pe-0" data-order="31">
                  <span class="fw-bold ms-3">31</span>
                </td>
                <td class="text-end pe-0">106</td>
                <td class="text-end pe-0" data-order="rating-3">
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
                    <div class="rating-label">
                      <i class="ki-duotone ki-ستاره fs-6"></i>
                    </div>
                    <div class="rating-label">
                      <i class="ki-duotone ki-ستاره fs-6"></i>
                    </div>
                  </div>
                </td>
                <td class="text-end pe-0" data-order="غیرفعال">
                  <!--begin::Badges-->
                  <div class="badge badge-light-danger">غیرفعال</div>
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
                    <div class="menu-item px-3">
                      <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html" class="menu-link px-3"></a>
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
              <tr>
                <td>
                  <div class="form-check form-check-sm form-check-custom form-check-solid">
                    <input class="form-check-input" type="checkbox" value="1">
                  </div>
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <!--begin::Thumbnail-->
                    <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                      <span class="symbol-label"
                        style="background-image:url(assets/media//stock/ecommerce/32.gif);"></span>
                    </a>
                    <!--end::Thumbnail-->
                    <div class="ms-5">
                      <!--begin::Title-->
                      <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                        class="text-gray-800 text-hover-primary fs-5 fw-bold"
                        data-kt-ecommerce-product-filter="product_name">محصولات 32</a>
                      <!--end::Title-->
                    </div>
                  </div>
                </td>
                <td class="text-end pe-0">
                  <span class="fw-bold">02678002</span>
                </td>
                <td class="text-end pe-0" data-order="0">
                  <span class="badge badge-light-danger">فروخته شده</span>
                  <span class="fw-bold text-danger ms-3">0</span>
                </td>
                <td class="text-end pe-0">144</td>
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
                <td class="text-end pe-0" data-order="منتشر شده">
                  <!--begin::Badges-->
                  <div class="badge badge-light-success">منتشر شده</div>
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
                    <div class="menu-item px-3">
                      <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html" class="menu-link px-3"></a>
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
              <tr>
                <td>
                  <div class="form-check form-check-sm form-check-custom form-check-solid">
                    <input class="form-check-input" type="checkbox" value="1">
                  </div>
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <!--begin::Thumbnail-->
                    <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                      <span class="symbol-label"
                        style="background-image:url(assets/media//stock/ecommerce/33.gif);"></span>
                    </a>
                    <!--end::Thumbnail-->
                    <div class="ms-5">
                      <!--begin::Title-->
                      <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                        class="text-gray-800 text-hover-primary fs-5 fw-bold"
                        data-kt-ecommerce-product-filter="product_name">محصولات 33</a>
                      <!--end::Title-->
                    </div>
                  </div>
                </td>
                <td class="text-end pe-0">
                  <span class="fw-bold">03277002</span>
                </td>
                <td class="text-end pe-0" data-order="44">
                  <span class="fw-bold ms-3">44</span>
                </td>
                <td class="text-end pe-0">59</td>
                <td class="text-end pe-0" data-order="rating-4">
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
                    <div class="rating-label">
                      <i class="ki-duotone ki-ستاره fs-6"></i>
                    </div>
                  </div>
                </td>
                <td class="text-end pe-0" data-order="در انتظار">
                  <!--begin::Badges-->
                  <div class="badge badge-light-primary">در انتظار</div>
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
                    <div class="menu-item px-3">
                      <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html" class="menu-link px-3"></a>
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
              <tr>
                <td>
                  <div class="form-check form-check-sm form-check-custom form-check-solid">
                    <input class="form-check-input" type="checkbox" value="1">
                  </div>
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <!--begin::Thumbnail-->
                    <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                      <span class="symbol-label"
                        style="background-image:url(assets/media//stock/ecommerce/34.gif);"></span>
                    </a>
                    <!--end::Thumbnail-->
                    <div class="ms-5">
                      <!--begin::Title-->
                      <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                        class="text-gray-800 text-hover-primary fs-5 fw-bold"
                        data-kt-ecommerce-product-filter="product_name">محصولات 34</a>
                      <!--end::Title-->
                    </div>
                  </div>
                </td>
                <td class="text-end pe-0">
                  <span class="fw-bold">02119008</span>
                </td>
                <td class="text-end pe-0" data-order="23">
                  <span class="fw-bold ms-3">23</span>
                </td>
                <td class="text-end pe-0">131</td>
                <td class="text-end pe-0" data-order="rating-3">
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
                    <div class="rating-label">
                      <i class="ki-duotone ki-ستاره fs-6"></i>
                    </div>
                    <div class="rating-label">
                      <i class="ki-duotone ki-ستاره fs-6"></i>
                    </div>
                  </div>
                </td>
                <td class="text-end pe-0" data-order="منتشر شده">
                  <!--begin::Badges-->
                  <div class="badge badge-light-success">منتشر شده</div>
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
                    <div class="menu-item px-3">
                      <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html" class="menu-link px-3"></a>
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
              <tr>
                <td>
                  <div class="form-check form-check-sm form-check-custom form-check-solid">
                    <input class="form-check-input" type="checkbox" value="1">
                  </div>
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <!--begin::Thumbnail-->
                    <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                      <span class="symbol-label"
                        style="background-image:url(assets/media//stock/ecommerce/35.gif);"></span>
                    </a>
                    <!--end::Thumbnail-->
                    <div class="ms-5">
                      <!--begin::Title-->
                      <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                        class="text-gray-800 text-hover-primary fs-5 fw-bold"
                        data-kt-ecommerce-product-filter="product_name">محصولات 35</a>
                      <!--end::Title-->
                    </div>
                  </div>
                </td>
                <td class="text-end pe-0">
                  <span class="fw-bold">03506003</span>
                </td>
                <td class="text-end pe-0" data-order="42">
                  <span class="fw-bold ms-3">42</span>
                </td>
                <td class="text-end pe-0">117</td>
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
                  <div class="badge badge-light-primary">در انتظار</div>
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
                    <div class="menu-item px-3">
                      <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html" class="menu-link px-3"></a>
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
              <tr>
                <td>
                  <div class="form-check form-check-sm form-check-custom form-check-solid">
                    <input class="form-check-input" type="checkbox" value="1">
                  </div>
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <!--begin::Thumbnail-->
                    <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                      <span class="symbol-label"
                        style="background-image:url(assets/media//stock/ecommerce/36.gif);"></span>
                    </a>
                    <!--end::Thumbnail-->
                    <div class="ms-5">
                      <!--begin::Title-->
                      <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                        class="text-gray-800 text-hover-primary fs-5 fw-bold"
                        data-kt-ecommerce-product-filter="product_name">محصولات 36</a>
                      <!--end::Title-->
                    </div>
                  </div>
                </td>
                <td class="text-end pe-0">
                  <span class="fw-bold">01503003</span>
                </td>
                <td class="text-end pe-0" data-order="23">
                  <span class="fw-bold ms-3">23</span>
                </td>
                <td class="text-end pe-0">101</td>
                <td class="text-end pe-0" data-order="rating-4">
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
                    <div class="rating-label">
                      <i class="ki-duotone ki-ستاره fs-6"></i>
                    </div>
                  </div>
                </td>
                <td class="text-end pe-0" data-order="در انتظار">
                  <!--begin::Badges-->
                  <div class="badge badge-light-primary">در انتظار</div>
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
                    <div class="menu-item px-3">
                      <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html" class="menu-link px-3"></a>
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
              <tr>
                <td>
                  <div class="form-check form-check-sm form-check-custom form-check-solid">
                    <input class="form-check-input" type="checkbox" value="1">
                  </div>
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <!--begin::Thumbnail-->
                    <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                      <span class="symbol-label"
                        style="background-image:url(assets/media//stock/ecommerce/37.gif);"></span>
                    </a>
                    <!--end::Thumbnail-->
                    <div class="ms-5">
                      <!--begin::Title-->
                      <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                        class="text-gray-800 text-hover-primary fs-5 fw-bold"
                        data-kt-ecommerce-product-filter="product_name">محصولات 37</a>
                      <!--end::Title-->
                    </div>
                  </div>
                </td>
                <td class="text-end pe-0">
                  <span class="fw-bold">03860008</span>
                </td>
                <td class="text-end pe-0" data-order="25">
                  <span class="fw-bold ms-3">25</span>
                </td>
                <td class="text-end pe-0">76</td>
                <td class="text-end pe-0" data-order="rating-4">
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
                    <div class="rating-label">
                      <i class="ki-duotone ki-ستاره fs-6"></i>
                    </div>
                  </div>
                </td>
                <td class="text-end pe-0" data-order="منتشر شده">
                  <!--begin::Badges-->
                  <div class="badge badge-light-success">منتشر شده</div>
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
                    <div class="menu-item px-3">
                      <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html" class="menu-link px-3"></a>
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
              <tr>
                <td>
                  <div class="form-check form-check-sm form-check-custom form-check-solid">
                    <input class="form-check-input" type="checkbox" value="1">
                  </div>
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <!--begin::Thumbnail-->
                    <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                      <span class="symbol-label"
                        style="background-image:url(assets/media//stock/ecommerce/38.gif);"></span>
                    </a>
                    <!--end::Thumbnail-->
                    <div class="ms-5">
                      <!--begin::Title-->
                      <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                        class="text-gray-800 text-hover-primary fs-5 fw-bold"
                        data-kt-ecommerce-product-filter="product_name">محصولات 38</a>
                      <!--end::Title-->
                    </div>
                  </div>
                </td>
                <td class="text-end pe-0">
                  <span class="fw-bold">02989002</span>
                </td>
                <td class="text-end pe-0" data-order="27">
                  <span class="fw-bold ms-3">27</span>
                </td>
                <td class="text-end pe-0">211</td>
                <td class="text-end pe-0" data-order="rating-4">
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
                    <div class="rating-label">
                      <i class="ki-duotone ki-ستاره fs-6"></i>
                    </div>
                  </div>
                </td>
                <td class="text-end pe-0" data-order="منتشر شده">
                  <!--begin::Badges-->
                  <div class="badge badge-light-success">منتشر شده</div>
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
                    <div class="menu-item px-3">
                      <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html" class="menu-link px-3"></a>
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
              <tr>
                <td>
                  <div class="form-check form-check-sm form-check-custom form-check-solid">
                    <input class="form-check-input" type="checkbox" value="1">
                  </div>
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <!--begin::Thumbnail-->
                    <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                      <span class="symbol-label"
                        style="background-image:url(assets/media//stock/ecommerce/39.gif);"></span>
                    </a>
                    <!--end::Thumbnail-->
                    <div class="ms-5">
                      <!--begin::Title-->
                      <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                        class="text-gray-800 text-hover-primary fs-5 fw-bold"
                        data-kt-ecommerce-product-filter="product_name">محصولات 39</a>
                      <!--end::Title-->
                    </div>
                  </div>
                </td>
                <td class="text-end pe-0">
                  <span class="fw-bold">02774006</span>
                </td>
                <td class="text-end pe-0" data-order="33">
                  <span class="fw-bold ms-3">33</span>
                </td>
                <td class="text-end pe-0">74</td>
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
                  <div class="badge badge-light-primary">در انتظار</div>
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
                    <div class="menu-item px-3">
                      <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html" class="menu-link px-3"></a>
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
              <tr>
                <td>
                  <div class="form-check form-check-sm form-check-custom form-check-solid">
                    <input class="form-check-input" type="checkbox" value="1">
                  </div>
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <!--begin::Thumbnail-->
                    <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                      <span class="symbol-label"
                        style="background-image:url(assets/media//stock/ecommerce/40.gif);"></span>
                    </a>
                    <!--end::Thumbnail-->
                    <div class="ms-5">
                      <!--begin::Title-->
                      <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                        class="text-gray-800 text-hover-primary fs-5 fw-bold"
                        data-kt-ecommerce-product-filter="product_name">محصولات 40</a>
                      <!--end::Title-->
                    </div>
                  </div>
                </td>
                <td class="text-end pe-0">
                  <span class="fw-bold">02594009</span>
                </td>
                <td class="text-end pe-0" data-order="2">
                  <span class="badge badge-light-warning">موجودی کم</span>
                  <span class="fw-bold text-warning ms-3">2</span>
                </td>
                <td class="text-end pe-0">56</td>
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
                  <div class="badge badge-light-primary">در انتظار</div>
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
                    <div class="menu-item px-3">
                      <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html" class="menu-link px-3"></a>
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
              <tr>
                <td>
                  <div class="form-check form-check-sm form-check-custom form-check-solid">
                    <input class="form-check-input" type="checkbox" value="1">
                  </div>
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <!--begin::Thumbnail-->
                    <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                      <span class="symbol-label"
                        style="background-image:url(assets/media//stock/ecommerce/41.gif);"></span>
                    </a>
                    <!--end::Thumbnail-->
                    <div class="ms-5">
                      <!--begin::Title-->
                      <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                        class="text-gray-800 text-hover-primary fs-5 fw-bold"
                        data-kt-ecommerce-product-filter="product_name">محصولات 41</a>
                      <!--end::Title-->
                    </div>
                  </div>
                </td>
                <td class="text-end pe-0">
                  <span class="fw-bold">04607008</span>
                </td>
                <td class="text-end pe-0" data-order="40">
                  <span class="fw-bold ms-3">40</span>
                </td>
                <td class="text-end pe-0">97</td>
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
                <td class="text-end pe-0" data-order="منتشر شده">
                  <!--begin::Badges-->
                  <div class="badge badge-light-success">منتشر شده</div>
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
                    <div class="menu-item px-3">
                      <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html" class="menu-link px-3"></a>
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
              <tr>
                <td>
                  <div class="form-check form-check-sm form-check-custom form-check-solid">
                    <input class="form-check-input" type="checkbox" value="1">
                  </div>
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <!--begin::Thumbnail-->
                    <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                      <span class="symbol-label"
                        style="background-image:url(assets/media//stock/ecommerce/42.gif);"></span>
                    </a>
                    <!--end::Thumbnail-->
                    <div class="ms-5">
                      <!--begin::Title-->
                      <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                        class="text-gray-800 text-hover-primary fs-5 fw-bold"
                        data-kt-ecommerce-product-filter="product_name">محصولات 42</a>
                      <!--end::Title-->
                    </div>
                  </div>
                </td>
                <td class="text-end pe-0">
                  <span class="fw-bold">04467003</span>
                </td>
                <td class="text-end pe-0" data-order="34">
                  <span class="fw-bold ms-3">34</span>
                </td>
                <td class="text-end pe-0">199</td>
                <td class="text-end pe-0" data-order="rating-4">
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
                    <div class="rating-label">
                      <i class="ki-duotone ki-ستاره fs-6"></i>
                    </div>
                  </div>
                </td>
                <td class="text-end pe-0" data-order="منتشر شده">
                  <!--begin::Badges-->
                  <div class="badge badge-light-success">منتشر شده</div>
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
                    <div class="menu-item px-3">
                      <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html" class="menu-link px-3"></a>
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
              <tr>
                <td>
                  <div class="form-check form-check-sm form-check-custom form-check-solid">
                    <input class="form-check-input" type="checkbox" value="1">
                  </div>
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <!--begin::Thumbnail-->
                    <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                      <span class="symbol-label"
                        style="background-image:url(assets/media//stock/ecommerce/43.gif);"></span>
                    </a>
                    <!--end::Thumbnail-->
                    <div class="ms-5">
                      <!--begin::Title-->
                      <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                        class="text-gray-800 text-hover-primary fs-5 fw-bold"
                        data-kt-ecommerce-product-filter="product_name">محصولات 43</a>
                      <!--end::Title-->
                    </div>
                  </div>
                </td>
                <td class="text-end pe-0">
                  <span class="fw-bold">02196004</span>
                </td>
                <td class="text-end pe-0" data-order="8">
                  <span class="badge badge-light-warning">موجودی کم</span>
                  <span class="fw-bold text-warning ms-3">8</span>
                </td>
                <td class="text-end pe-0">160</td>
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
                <td class="text-end pe-0" data-order="منتشر شده">
                  <!--begin::Badges-->
                  <div class="badge badge-light-success">منتشر شده</div>
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
                    <div class="menu-item px-3">
                      <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html" class="menu-link px-3"></a>
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
              <tr>
                <td>
                  <div class="form-check form-check-sm form-check-custom form-check-solid">
                    <input class="form-check-input" type="checkbox" value="1">
                  </div>
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <!--begin::Thumbnail-->
                    <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                      <span class="symbol-label"
                        style="background-image:url(assets/media//stock/ecommerce/44.gif);"></span>
                    </a>
                    <!--end::Thumbnail-->
                    <div class="ms-5">
                      <!--begin::Title-->
                      <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                        class="text-gray-800 text-hover-primary fs-5 fw-bold"
                        data-kt-ecommerce-product-filter="product_name">محصولات 44</a>
                      <!--end::Title-->
                    </div>
                  </div>
                </td>
                <td class="text-end pe-0">
                  <span class="fw-bold">01723005</span>
                </td>
                <td class="text-end pe-0" data-order="32">
                  <span class="fw-bold ms-3">32</span>
                </td>
                <td class="text-end pe-0">175</td>
                <td class="text-end pe-0" data-order="rating-4">
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
                    <div class="rating-label">
                      <i class="ki-duotone ki-ستاره fs-6"></i>
                    </div>
                  </div>
                </td>
                <td class="text-end pe-0" data-order="غیرفعال">
                  <!--begin::Badges-->
                  <div class="badge badge-light-danger">غیرفعال</div>
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
                    <div class="menu-item px-3">
                      <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html" class="menu-link px-3"></a>
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
              <tr>
                <td>
                  <div class="form-check form-check-sm form-check-custom form-check-solid">
                    <input class="form-check-input" type="checkbox" value="1">
                  </div>
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <!--begin::Thumbnail-->
                    <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                      <span class="symbol-label"
                        style="background-image:url(assets/media//stock/ecommerce/45.gif);"></span>
                    </a>
                    <!--end::Thumbnail-->
                    <div class="ms-5">
                      <!--begin::Title-->
                      <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                        class="text-gray-800 text-hover-primary fs-5 fw-bold"
                        data-kt-ecommerce-product-filter="product_name">محصولات 45</a>
                      <!--end::Title-->
                    </div>
                  </div>
                </td>
                <td class="text-end pe-0">
                  <span class="fw-bold">04431005</span>
                </td>
                <td class="text-end pe-0" data-order="7">
                  <span class="badge badge-light-warning">موجودی کم</span>
                  <span class="fw-bold text-warning ms-3">7</span>
                </td>
                <td class="text-end pe-0">184</td>
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
                  <div class="badge badge-light-primary">در انتظار</div>
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
                    <div class="menu-item px-3">
                      <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html" class="menu-link px-3"></a>
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
              <tr>
                <td>
                  <div class="form-check form-check-sm form-check-custom form-check-solid">
                    <input class="form-check-input" type="checkbox" value="1">
                  </div>
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <!--begin::Thumbnail-->
                    <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                      <span class="symbol-label"
                        style="background-image:url(assets/media//stock/ecommerce/46.gif);"></span>
                    </a>
                    <!--end::Thumbnail-->
                    <div class="ms-5">
                      <!--begin::Title-->
                      <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                        class="text-gray-800 text-hover-primary fs-5 fw-bold"
                        data-kt-ecommerce-product-filter="product_name">محصولات 46</a>
                      <!--end::Title-->
                    </div>
                  </div>
                </td>
                <td class="text-end pe-0">
                  <span class="fw-bold">03845008</span>
                </td>
                <td class="text-end pe-0" data-order="6">
                  <span class="badge badge-light-warning">موجودی کم</span>
                  <span class="fw-bold text-warning ms-3">6</span>
                </td>
                <td class="text-end pe-0">121</td>
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
                <td class="text-end pe-0" data-order="غیرفعال">
                  <!--begin::Badges-->
                  <div class="badge badge-light-danger">غیرفعال</div>
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
                    <div class="menu-item px-3">
                      <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html" class="menu-link px-3"></a>
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
              <tr>
                <td>
                  <div class="form-check form-check-sm form-check-custom form-check-solid">
                    <input class="form-check-input" type="checkbox" value="1">
                  </div>
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <!--begin::Thumbnail-->
                    <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                      <span class="symbol-label"
                        style="background-image:url(assets/media//stock/ecommerce/47.gif);"></span>
                    </a>
                    <!--end::Thumbnail-->
                    <div class="ms-5">
                      <!--begin::Title-->
                      <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                        class="text-gray-800 text-hover-primary fs-5 fw-bold"
                        data-kt-ecommerce-product-filter="product_name">محصولات 47</a>
                      <!--end::Title-->
                    </div>
                  </div>
                </td>
                <td class="text-end pe-0">
                  <span class="fw-bold">02490007</span>
                </td>
                <td class="text-end pe-0" data-order="30">
                  <span class="fw-bold ms-3">30</span>
                </td>
                <td class="text-end pe-0">262</td>
                <td class="text-end pe-0" data-order="rating-3">
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
                    <div class="rating-label">
                      <i class="ki-duotone ki-ستاره fs-6"></i>
                    </div>
                    <div class="rating-label">
                      <i class="ki-duotone ki-ستاره fs-6"></i>
                    </div>
                  </div>
                </td>
                <td class="text-end pe-0" data-order="منتشر شده">
                  <!--begin::Badges-->
                  <div class="badge badge-light-success">منتشر شده</div>
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
                    <div class="menu-item px-3">
                      <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html" class="menu-link px-3"></a>
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
              <tr>
                <td>
                  <div class="form-check form-check-sm form-check-custom form-check-solid">
                    <input class="form-check-input" type="checkbox" value="1">
                  </div>
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <!--begin::Thumbnail-->
                    <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                      <span class="symbol-label"
                        style="background-image:url(assets/media//stock/ecommerce/48.gif);"></span>
                    </a>
                    <!--end::Thumbnail-->
                    <div class="ms-5">
                      <!--begin::Title-->
                      <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                        class="text-gray-800 text-hover-primary fs-5 fw-bold"
                        data-kt-ecommerce-product-filter="product_name">محصولات 48</a>
                      <!--end::Title-->
                    </div>
                  </div>
                </td>
                <td class="text-end pe-0">
                  <span class="fw-bold">01421004</span>
                </td>
                <td class="text-end pe-0" data-order="12">
                  <span class="fw-bold ms-3">12</span>
                </td>
                <td class="text-end pe-0">145</td>
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
                <td class="text-end pe-0" data-order="منتشر شده">
                  <!--begin::Badges-->
                  <div class="badge badge-light-success">منتشر شده</div>
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
                    <div class="menu-item px-3">
                      <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html" class="menu-link px-3"></a>
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
              <tr>
                <td>
                  <div class="form-check form-check-sm form-check-custom form-check-solid">
                    <input class="form-check-input" type="checkbox" value="1">
                  </div>
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <!--begin::Thumbnail-->
                    <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                      <span class="symbol-label"
                        style="background-image:url(assets/media//stock/ecommerce/49.gif);"></span>
                    </a>
                    <!--end::Thumbnail-->
                    <div class="ms-5">
                      <!--begin::Title-->
                      <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                        class="text-gray-800 text-hover-primary fs-5 fw-bold"
                        data-kt-ecommerce-product-filter="product_name">محصولات 49</a>
                      <!--end::Title-->
                    </div>
                  </div>
                </td>
                <td class="text-end pe-0">
                  <span class="fw-bold">04449007</span>
                </td>
                <td class="text-end pe-0" data-order="45">
                  <span class="fw-bold ms-3">45</span>
                </td>
                <td class="text-end pe-0">94</td>
                <td class="text-end pe-0" data-order="rating-3">
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
                    <div class="rating-label">
                      <i class="ki-duotone ki-ستاره fs-6"></i>
                    </div>
                    <div class="rating-label">
                      <i class="ki-duotone ki-ستاره fs-6"></i>
                    </div>
                  </div>
                </td>
                <td class="text-end pe-0" data-order="منتشر شده">
                  <!--begin::Badges-->
                  <div class="badge badge-light-success">منتشر شده</div>
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
                    <div class="menu-item px-3">
                      <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html" class="menu-link px-3"></a>
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
              <tr>
                <td>
                  <div class="form-check form-check-sm form-check-custom form-check-solid">
                    <input class="form-check-input" type="checkbox" value="1">
                  </div>
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <!--begin::Thumbnail-->
                    <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                      <span class="symbol-label"
                        style="background-image:url(assets/media//stock/ecommerce/50.gif);"></span>
                    </a>
                    <!--end::Thumbnail-->
                    <div class="ms-5">
                      <!--begin::Title-->
                      <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html"
                        class="text-gray-800 text-hover-primary fs-5 fw-bold"
                        data-kt-ecommerce-product-filter="product_name">محصولات 50</a>
                      <!--end::Title-->
                    </div>
                  </div>
                </td>
                <td class="text-end pe-0">
                  <span class="fw-bold">03551005</span>
                </td>
                <td class="text-end pe-0" data-order="12">
                  <span class="fw-bold ms-3">12</span>
                </td>
                <td class="text-end pe-0">228</td>
                <td class="text-end pe-0" data-order="rating-4">
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
                    <div class="rating-label">
                      <i class="ki-duotone ki-ستاره fs-6"></i>
                    </div>
                  </div>
                </td>
                <td class="text-end pe-0" data-order="منتشر شده">
                  <!--begin::Badges-->
                  <div class="badge badge-light-success">منتشر شده</div>
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
                    <div class="menu-item px-3">
                      <a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html" class="menu-link px-3"></a>
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