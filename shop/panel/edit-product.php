<?php
$supermenu = 'products';
$current_page = 'new-product';
?>
<?php include ('components/header.php'); ?>
<?php

if (isset($_POST['save'])) {
  $title = $_POST['product_name'];
  $content = $_POST['content'];
  $product_price = $_POST['product_price'];
  $product_discount = $_POST['product_discount'];
  $product_id = $_POST['id'];
  $date = date('Y-m-d H:i:s');
  if ($product_id) {
    //update
    $sql = "UPDATE products SET title = '$title', content = '$content', price = $product_price, discount_percent = $product_discount WHERE ID = $product_id";
  } else {
    //insert
    $sql = "INSERT INTO products ( title, content ,thumbnail, price, discount_percent, discount_date, stock, created_at )
                            VALUES ('$title', '$content', '', $product_price, $product_discount, NULL, 5, '$date')
        ";
  }

  db()->exec($sql);

}

$product_id = isset($_GET['product_id']) ? $_GET['product_id'] : 0;
$title = '';
$content = '';
$price = 0;
$discount = 0;
$stock = 0;
$discount_date = '';

if (isset($_GET['product_id'])) {
  $product = get_product($_GET['product_id']);
  if ($product) {
    $title = $product['title'];
    $content = $product['content'];
    $price = $product['price'];
    $discount = $product['discount_percent'];
    $stock = $product['stock'];
    $discount_date = $product['discount_date'];
  }
}
?>
<!--begin::Content wrapper-->
<div class="d-flex flex-column flex-column-fluid" data-select2-id="select2-data-133-drwv">

  <!--begin::Content-->
  <div id="kt_app_content" class="app-content flex-column-fluid" data-select2-id="select2-data-kt_app_content">
    <!--begin::Content container-->
    <div id="kt_app_content_container" class="app-container container-xxl"
      data-select2-id="select2-data-kt_app_content_container">
      <!--begin::Form-->
      <form id="kt_ecommerce_add_product_form" method="post" action=""
        class="form d-flex flex-column flex-lg-row fv-plugins-bootstrap5 fv-plugins-framework"
        data-kt-redirect="../../demo1/dist/apps/ecommerce/catalog/products.html"
        data-select2-id="select2-data-kt_ecommerce_add_product_form">

        <!--begin::Main column-->
        <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
          <br>
          <br>
          <!--begin::Tab content-->
          <div class="tab-content">
            <!--begin::Tab pane-->
            <div class="tab-pane fade show active" id="kt_ecommerce_add_product_general" role="tab-panel">
              <div class="d-flex flex-column gap-7 gap-lg-10">
                <!--begin::عمومی options-->
                <div class="card card-flush py-4">
                  <!--begin::کارت header-->
                  <div class="card-header">
                    <div class="card-title">
                      <h2>عمومی</h2>
                    </div>
                  </div>
                  <!--end::کارت header-->
                  <!--begin::کارت body-->
                  <div class="card-body pt-0">
                    <!--begin::Input group-->
                    <div class="mb-10 fv-row fv-plugins-icon-container">
                      <!--begin::Tags-->
                      <label class="required form-label">محصولات نام</label>
                      <!--end::Tags-->
                      <!--begin::Input-->
                      <input type="text" name="product_name" class="form-control mb-2" placeholder="نام محصول"
                        value="<?php echo $title; ?>">
                      <!--end::Input-->
                      <!--begin::توضیحات-->
                      <div class="text-muted fs-7">نام محصول مورد نیاز است و توصیه می شود منحصر به
                        فرد باشد.</div>
                      <!--end::توضیحات-->
                      <div class="fv-plugins-message-container invalid-feedback"></div>
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div>
                      <!--begin::Tags-->
                      <label class="form-label">توضیحات</label>
                      <!--end::Tags-->
                      <!--begin::or-->
                      <textarea name="content" name="product_content" id="" cols="30" rows="10"
                        class="form-control"><?php echo $content; ?></textarea>
                      <!--end::or-->
                      <!--begin::توضیحات-->
                      <div class="text-muted fs-7">برای دید بهتر، توضیحاتی را برای محصول تنظیم
                        کنید.</div>
                      <!--end::توضیحات-->
                    </div>
                    <!--end::Input group-->
                  </div>
                  <!--end::کارت header-->
                </div>
                <!--end::عمومی options-->

                <!--begin::قیمت گذاری-->
                <div class="card card-flush py-4">
                  <!--begin::کارت header-->
                  <div class="card-header">
                    <div class="card-title">
                      <h2>قیمت گذاری</h2>
                    </div>
                  </div>
                  <!--end::کارت header-->
                  <!--begin::کارت body-->
                  <div class="card-body pt-0">
                    <!--begin::Input group-->
                    <div class="mb-10 fv-row fv-plugins-icon-container">
                      <!--begin::Tags-->
                      <label class="required form-label">قیمت پایه</label>
                      <!--end::Tags-->
                      <!--begin::Input-->
                      <input type="text" name="product_price" class="form-control mb-2" placeholder="قیمت محصول"
                        value="<?php echo $price; ?>">
                      <!--end::Input-->
                      <!--begin::توضیحات-->
                      <div class="text-muted fs-7">قیمت محصول را وارد کنید</div>
                      <!--end::توضیحات-->
                      <div class="fv-plugins-message-container invalid-feedback"></div>
                    </div>
                    <!--end::Input group-->

                    <!--begin::Input group-->
                    <div class="mb-10 fv-row fv-plugins-icon-container">
                      <!--begin::Tags-->
                      <label class="required form-label">درصد تخفیف</label>
                      <!--end::Tags-->
                      <!--begin::Input-->
                      <input type="text" name="product_discount" class="form-control mb-2" placeholder="قیمت محصول"
                        value="<?php echo $discount; ?>">
                      <!--end::Input-->
                      <!--begin::توضیحات-->
                      <div class="text-muted fs-7">درصد تخفیف محصول را وارد کنید</div>
                      <!--end::توضیحات-->
                      <div class="fv-plugins-message-container invalid-feedback"></div>
                    </div>
                    <!--end::Input group-->



                  </div>
                  <!--end::کارت header-->
                </div>
                <!--end::قیمت گذاری-->
              </div>
            </div>
            <!--end::Tab pane-->

          </div>
          <!--end::Tab content-->
          <div class="d-flex justify-content-end">
            <!--begin::Button-->
            <a href="../../demo1/dist/apps/ecommerce/catalog/products.html" id="kt_ecommerce_add_product_cancel"
              class="btn btn-light me-5">انصراف</a>
            <!--end::Button-->
            <input type="hidden" name="id" value="<?php echo $product_id; ?>">
            <!--begin::Button-->
            <button type="submit" id="kt_ecommerce_add_product_submit" name="save" class="btn btn-primary">
              <span class="indicator-label">ذخیره تغییرات</span>
              <span class="indicator-progress">لطفا صبر کنید...
                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
            </button>
            <!--end::Button-->
          </div>
        </div>
        <!--end::Main column-->
      </form>
      <!--end::Form-->
    </div>
    <!--end::Content container-->
  </div>
  <!--end::Content-->
</div>
<!--end::Content wrapper-->
<?php include ('components/footer.php'); ?>