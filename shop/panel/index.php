<?php include ('components/header.php'); ?>
<!--begin::Content wrapper-->
<div class="d-flex flex-column flex-column-fluid">
  <!--begin::Toolbar-->
  <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
    <!--begin::Toolbar container-->
    <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
      <!--begin::Page title-->
      <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
        <!--begin::Title-->
        <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
          چند منظوره</h1>
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
          <li class="breadcrumb-item text-muted">داشبورد ها</li>
          <!--end::آیتم-->
        </ul>
        <!--end::Breadcrumb-->
      </div>
      <!--end::Page title-->
      <!--begin::Actions-->
      <div class="d-flex align-items-center gap-2 gap-lg-3">
        <!--begin::Secondary button-->
        <a href="#" class="btn btn-sm fw-bold bg-body btn-color-gray-700 btn-active-color-primary"
          data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">رولور</a>
        <!--end::Secondary button-->
        <!--begin::اصلی button-->
        <a href="#" class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal"
          data-bs-target="#kt_modal_new_target">افزودن</a>
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
    <div id="kt_app_content_container" class="app-container container-fluid">
      <!--begin::Row-->
      <div class="row g-5 g-xl-10 mb-5 mb-xl-10">
        <!--begin::Col-->
        <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-md-5 mb-xl-10">
          <!--begin::کارت widget 20-->
          <div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end h-md-50 mb-5 mb-xl-10"
            style="background-color: #F1416C;background-image:url('../assets/media/patterns/vector-1.png')">
            <!--begin::Header-->
            <div class="card-header pt-5">
              <!--begin::Title-->
              <div class="card-title d-flex flex-column">
                <!--begin::مقدار-->
                <span class="fs-2hx fw-bold text-white me-2 lh-1 ls-n2">69</span>
                <!--end::مقدار-->
                <!--begin::Subtitle-->
                <span class="text-white opacity-75 pt-1 fw-semibold fs-6">فعال پروژه
                  ها</span>
                <!--end::Subtitle-->
              </div>
              <!--end::Title-->
            </div>
            <!--end::Header-->
            <!--begin::کارت body-->
            <div class="card-body d-flex align-items-end pt-0">
              <!--begin::پردازش-->
              <div class="d-flex align-items-center flex-column mt-3 w-100">
                <div class="d-flex justify-content-between fw-bold fs-6 text-white opacity-75 w-100 mt-auto mb-2">
                  <span>43 در انتظار</span>
                  <span>72%</span>
                </div>
                <div class="h-8px mx-3 w-100 bg-white bg-opacity-50 rounded">
                  <div class="bg-white rounded h-8px" role="progressbar" style="width: 72%;" aria-valuenow="50"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
              <!--end::پردازش-->
            </div>
            <!--end::کارت body-->
          </div>
          <!--end::کارت widget 20-->
          <!--begin::کارت widget 7-->
          <div class="card card-flush h-md-50 mb-5 mb-xl-10">
            <!--begin::Header-->
            <div class="card-header pt-5">
              <!--begin::Title-->
              <div class="card-title d-flex flex-column">
                <!--begin::مقدار-->
                <span class="fs-2hx fw-bold text-dark me-2 lh-1 ls-n2">357</span>
                <!--end::مقدار-->
                <!--begin::Subtitle-->
                <span class="text-gray-400 pt-1 fw-semibold fs-6">حرفه ای</span>
                <!--end::Subtitle-->
              </div>
              <!--end::Title-->
            </div>
            <!--end::Header-->
            <!--begin::کارت body-->
            <div class="card-body d-flex flex-column justify-content-end pe-0">
              <!--begin::Title-->
              <span class="fs-6 fw-bolder text-gray-800 d-block mb-2">قهرمانان
                امروز</span>
              <!--end::Title-->
              <!--begin::کاربران group-->
              <div class="symbol-group symbol-hover flex-nowrap">
                <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="آرش کمری">
                  <span class="symbol-label bg-warning text-inverse-warning fw-bold">A</span>
                </div>
                <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="میکائیل احمدی">
                  <img alt="Pic" src="../assets/media/avatars/300-11.jpg" />
                </div>
                <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="سوسن موسوی">
                  <span class="symbol-label bg-primary text-inverse-primary fw-bold">S</span>
                </div>
                <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="میلاد مرادی">
                  <img alt="Pic" src="../assets/media/avatars/300-2.jpg" />
                </div>
                <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="حسینی">
                  <span class="symbol-label bg-danger text-inverse-danger fw-bold">P</span>
                </div>
                <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="بهروز ازادی">
                  <img alt="Pic" src="../assets/media/avatars/300-12.jpg" />
                </div>
                <a href="#" class="symbol symbol-35px symbol-circle" data-bs-toggle="modal"
                  data-bs-target="#kt_modal_view_users">
                  <span class="symbol-label bg-dark text-gray-300 fs-8 fw-bold">+42</span>
                </a>
              </div>
              <!--end::کاربران group-->
            </div>
            <!--end::کارت body-->
          </div>
          <!--end::کارت widget 7-->
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-md-5 mb-xl-10">
          <!--begin::کارت widget 17-->
          <div class="card card-flush h-md-50 mb-5 mb-xl-10">
            <!--begin::Header-->
            <div class="card-header pt-5">
              <!--begin::Title-->
              <div class="card-title d-flex flex-column">
                <!--begin::Info-->
                <div class="d-flex align-items-center">
                  <!--begin::واحد پول-->
                  <span class="fs-4 fw-semibold text-gray-400 me-1 align-self-start">$</span>
                  <!--end::واحد پول-->
                  <!--begin::مقدار-->
                  <span class="fs-2hx fw-bold text-dark me-2 lh-1 ls-n2">69,700</span>
                  <!--end::مقدار-->
                  <!--begin::Badge-->
                  <span class="badge badge-light-success fs-base">
                    <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1">
                      <span class="path1"></span>
                      <span class="path2"></span>
                    </i>2.2%</span>
                  <!--end::Badge-->
                </div>
                <!--end::Info-->
                <!--begin::Subtitle-->
                <span class="text-gray-400 pt-1 fw-semibold fs-6">درآمد پروژه ها در
                  فروردین</span>
                <!--end::Subtitle-->
              </div>
              <!--end::Title-->
            </div>
            <!--end::Header-->
            <!--begin::کارت body-->
            <div class="card-body pt-2 pb-4 d-flex flex-wrap align-items-center">
              <!--begin::Chart-->
              <div class="d-flex flex-center me-5 pt-2">
                <div id="kt_card_widget_17_chart" style="min-width: 70px; min-height: 70px" data-kt-size="70"
                  data-kt-line="11"></div>
              </div>
              <!--end::Chart-->
              <!--begin::برچسبs-->
              <div class="d-flex flex-column content-justify-center flex-row-fluid">
                <!--begin::Tags-->
                <div class="d-flex fw-semibold align-items-center">
                  <!--begin::Bullet-->
                  <div class="bullet w-8px h-3px rounded-2 bg-success me-3"></div>
                  <!--end::Bullet-->
                  <!--begin::Tags-->
                  <div class="text-gray-500 flex-grow-1 me-4">سیستم لیف</div>
                  <!--end::Tags-->
                  <!--begin::Stats-->
                  <div class="fw-bolder text-gray-700 text-xxl-end">$7,660</div>
                  <!--end::Stats-->
                </div>
                <!--end::Tags-->
                <!--begin::Tags-->
                <div class="d-flex fw-semibold align-items-center my-3">
                  <!--begin::Bullet-->
                  <div class="bullet w-8px h-3px rounded-2 bg-primary me-3"></div>
                  <!--end::Bullet-->
                  <!--begin::Tags-->
                  <div class="text-gray-500 flex-grow-1 me-4">اپلیکیشن</div>
                  <!--end::Tags-->
                  <!--begin::Stats-->
                  <div class="fw-bolder text-gray-700 text-xxl-end">$2,820</div>
                  <!--end::Stats-->
                </div>
                <!--end::Tags-->
                <!--begin::Tags-->
                <div class="d-flex fw-semibold align-items-center">
                  <!--begin::Bullet-->
                  <div class="bullet w-8px h-3px rounded-2 me-3" style="background-color: #E4E6EF"></div>
                  <!--end::Bullet-->
                  <!--begin::Tags-->
                  <div class="text-gray-500 flex-grow-1 me-4">سایر</div>
                  <!--end::Tags-->
                  <!--begin::Stats-->
                  <div class="fw-bolder text-gray-700 text-xxl-end">$45,257</div>
                  <!--end::Stats-->
                </div>
                <!--end::Tags-->
              </div>
              <!--end::برچسبs-->
            </div>
            <!--end::کارت body-->
          </div>
          <!--end::کارت widget 17-->
          <!--begin::لیست widget 26-->
          <div class="card card-flush h-lg-50">
            <!--begin::Header-->
            <div class="card-header pt-5">
              <!--begin::Title-->
              <h3 class="card-title text-gray-800 fw-bold">لینک های خارجی</h3>
              <!--end::Title-->
              <!--begin::Toolbar-->
              <div class="card-toolbar">
                <!--begin::Menu-->
                <button class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end"
                  data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
                  <i class="ki-duotone ki-dots-square fs-1 text-gray-300 me-n1">
                    <span class="path1"></span>
                    <span class="path2"></span>
                    <span class="path3"></span>
                    <span class="path4"></span>
                  </i>
                </button>
                <!--begin::Menu 2-->
                <div
                  class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px"
                  data-kt-menu="true">
                  <!--begin::Menu item-->
                  <div class="menu-item px-3">
                    <div class="menu-content fs-6 text-dark fw-bold px-3 py-4">
                      عملیات سریع</div>
                  </div>
                  <!--end::Menu item-->
                  <!--begin::Menu separator-->
                  <div class="separator mb-3 opacity-75"></div>
                  <!--end::Menu separator-->
                  <!--begin::Menu item-->
                  <div class="menu-item px-3">
                    <a href="#" class="menu-link px-3">تیکت جدید</a>
                  </div>
                  <!--end::Menu item-->
                  <!--begin::Menu item-->
                  <div class="menu-item px-3">
                    <a href="#" class="menu-link px-3">جدید مشتری</a>
                  </div>
                  <!--end::Menu item-->
                  <!--begin::Menu item-->
                  <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="left-start">
                    <!--begin::Menu item-->
                    <a href="#" class="menu-link px-3">
                      <span class="menu-title">گروه جدید</span>
                      <span class="menu-arrow"></span>
                    </a>
                    <!--end::Menu item-->
                    <!--begin::Menu sub-->
                    <div class="menu-sub menu-sub-dropdown w-175px py-4">
                      <!--begin::Menu item-->
                      <div class="menu-item px-3">
                        <a href="#" class="menu-link px-3">گروه مدیر</a>
                      </div>
                      <!--end::Menu item-->
                      <!--begin::Menu item-->
                      <div class="menu-item px-3">
                        <a href="#" class="menu-link px-3">گروه کارکنان</a>
                      </div>
                      <!--end::Menu item-->
                      <!--begin::Menu item-->
                      <div class="menu-item px-3">
                        <a href="#" class="menu-link px-3">گروه عضوها</a>
                      </div>
                      <!--end::Menu item-->
                    </div>
                    <!--end::Menu sub-->
                  </div>
                  <!--end::Menu item-->
                  <!--begin::Menu item-->
                  <div class="menu-item px-3">
                    <a href="#" class="menu-link px-3">مخاطبین جدید</a>
                  </div>
                  <!--end::Menu item-->
                  <!--begin::Menu separator-->
                  <div class="separator mt-3 opacity-75"></div>
                  <!--end::Menu separator-->
                  <!--begin::Menu item-->
                  <div class="menu-item px-3">
                    <div class="menu-content px-3 py-3">
                      <a class="btn btn-primary btn-sm px-4" href="#">گزارش
                        ایجاد کنید</a>
                    </div>
                  </div>
                  <!--end::Menu item-->
                </div>
                <!--end::Menu 2-->
                <!--end::Menu-->
              </div>
              <!--end::Toolbar-->
            </div>
            <!--end::Header-->
            <!--begin::Body-->
            <div class="card-body pt-5">
              <!--begin::آیتم-->
              <div class="d-flex flex-stack">
                <!--begin::بخش-->
                <a href="#" class="text-primary fw-semibold fs-6 me-2">میانگین رتبه
                  بندی مشتری</a>
                <!--end::بخش-->
                <!--begin::Actions-->
                <button type="button"
                  class="btn btn-icon btn-sm h-auto btn-color-gray-400 btn-active-color-primary justify-content-end">
                  <i class="ki-duotone ki-exit-right-corner fs-2">
                    <span class="path1"></span>
                    <span class="path2"></span>
                  </i>
                </button>
                <!--end::Actions-->
              </div>
              <!--end::آیتم-->
              <!--begin::Separator-->
              <div class="separator separator-dashed my-3"></div>
              <!--end::Separator-->
              <!--begin::آیتم-->
              <div class="d-flex flex-stack">
                <!--begin::بخش-->
                <a href="#" class="text-primary fw-semibold fs-6 me-2">اینستاگرام
                  فالوورها</a>
                <!--end::بخش-->
                <!--begin::Actions-->
                <button type="button"
                  class="btn btn-icon btn-sm h-auto btn-color-gray-400 btn-active-color-primary justify-content-end">
                  <i class="ki-duotone ki-exit-right-corner fs-2">
                    <span class="path1"></span>
                    <span class="path2"></span>
                  </i>
                </button>
                <!--end::Actions-->
              </div>
              <!--end::آیتم-->
              <!--begin::Separator-->
              <div class="separator separator-dashed my-3"></div>
              <!--end::Separator-->
              <!--begin::آیتم-->
              <div class="d-flex flex-stack">
                <!--begin::بخش-->
                <a href="#" class="text-primary fw-semibold fs-6 me-2">تبلیغات
                  گوگل</a>
                <!--end::بخش-->
                <!--begin::Actions-->
                <button type="button"
                  class="btn btn-icon btn-sm h-auto btn-color-gray-400 btn-active-color-primary justify-content-end">
                  <i class="ki-duotone ki-exit-right-corner fs-2">
                    <span class="path1"></span>
                    <span class="path2"></span>
                  </i>
                </button>
                <!--end::Actions-->
              </div>
              <!--end::آیتم-->
            </div>
            <!--end::Body-->
          </div>
          <!--end::LIst widget 26-->
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-xxl-6">
          <!--begin::Engage widget 10-->
          <div class="card card-flush h-md-100">
            <!--begin::Body-->
            <div
              class="card-body d-flex flex-column justify-content-between mt-9 bgi-no-repeat bgi-size-cover bgi-position-x-center pb-0"
              style="background-position: 100% 50%; background-image:url('../assets/media/stock/900x600/42.png')">
              <!--begin::Wrapper-->
              <div class="mb-10">
                <!--begin::Title-->
                <div class="fs-2hx fw-bold text-gray-800 text-center mb-13">
                  <span class="me-2">محیط جدید ما را با
                    <br />
                    <span class="position-relative d-inline-block text-danger">
                      <a href="../../demo1/dist/pages/user-profile/overview.html"
                        class="text-danger opacity-75-hover">طرح حرفه ای</a>
                      <!--begin::Separator-->
                      <span
                        class="position-absolute opacity-15 bottom-0 start-0 border-4 border-danger border-bottom w-100"></span>
                      <!--end::Separator-->
                    </span></span>رایگان
                </div>
                <!--end::Title-->
                <!--begin::Actions-->
                <div class="text-center">
                  <a href='#' class="btn btn-sm btn-dark fw-bold" data-bs-toggle="modal"
                    data-bs-target="#kt_modal_upgrade_plan">ارتقا دهید</a>
                </div>
                <!--begin::Actions-->
              </div>
              <!--begin::Wrapper-->
              <!--begin::Illustration-->
              <img class="mx-auto h-150px h-lg-200px theme-light-show"
                src="../assets/media/illustrations/misc/upgrade.svg" alt="" />
              <img class="mx-auto h-150px h-lg-200px theme-dark-show"
                src="../assets/media/illustrations/misc/upgrade-dark.svg" alt="" />
              <!--end::Illustration-->
            </div>
            <!--end::Body-->
          </div>
          <!--end::Engage widget 10-->
        </div>
        <!--end::Col-->
      </div>
      <!--end::Row-->
      <!--begin::Row-->
      <div class="row gx-5 gx-xl-10">
        <!--begin::Col-->
        <div class="col-xxl-6 mb-5 mb-xl-10">
          <!--begin::Chart widget 8-->
          <div class="card card-flush h-xl-100">
            <!--begin::Header-->
            <div class="card-header pt-5">
              <!--begin::Title-->
              <h3 class="card-title align-items-start flex-column">
                <span class="card-label fw-bold text-dark">عملکرد بررسی
                  اجمالی</span>
                <span class="text-gray-400 mt-1 fw-semibold fs-6">کاربران از تمامی
                  کانال ها</span>
              </h3>
              <!--end::Title-->
              <!--begin::Toolbar-->
              <div class="card-toolbar">
                <ul class="nav" id="kt_chart_widget_8_tabs">
                  <li class="nav-item">
                    <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-light fw-bold px-4 me-1"
                      data-bs-toggle="tab" id="kt_chart_widget_8_week_toggle" href="#kt_chart_widget_8_week_tab">ماه</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-light fw-bold px-4 me-1 active"
                      data-bs-toggle="tab" id="kt_chart_widget_8_month_toggle"
                      href="#kt_chart_widget_8_month_tab">هفته</a>
                  </li>
                </ul>
              </div>
              <!--end::Toolbar-->
            </div>
            <!--end::Header-->
            <!--begin::Body-->
            <div class="card-body pt-6">
              <!--begin::Tab content-->
              <div class="tab-content">
                <!--begin::Tab pane-->
                <div class="tab-pane fade" id="kt_chart_widget_8_week_tab" role="tabpanel">
                  <!--begin::امار-->
                  <div class="mb-5">
                    <!--begin::امار-->
                    <div class="d-flex align-items-center mb-2">
                      <span class="fs-1 fw-semibold text-gray-400 me-1 mt-n1">$</span>
                      <span class="fs-3x fw-bold text-gray-800 me-2 lh-1 ls-n2">18,89</span>
                      <span class="badge badge-light-success fs-base">
                        <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1">
                          <span class="path1"></span>
                          <span class="path2"></span>
                        </i>4,8%</span>
                    </div>
                    <!--end::امار-->
                    <!--begin::توضیحات-->
                    <span class="fs-6 fw-semibold text-gray-400">میانگین هزینه
                      در هر تعامل</span>
                    <!--end::توضیحات-->
                  </div>
                  <!--end::امار-->
                  <!--begin::Chart-->
                  <div id="kt_chart_widget_8_week_chart" class="ms-n5 min-h-auto" style="height: 275px"></div>
                  <!--end::Chart-->
                  <!--begin::آیتمs-->
                  <div class="d-flex flex-wrap pt-5">
                    <!--begin::آیتم-->
                    <div class="d-flex flex-column me-7 me-lg-16 pt-sm-3 pt-6">
                      <!--begin::آیتم-->
                      <div class="d-flex align-items-center mb-3 mb-sm-6">
                        <!--begin::Bullet-->
                        <span class="bullet bullet-dot bg-primary me-2 h-10px w-10px"></span>
                        <!--end::Bullet-->
                        <!--begin::Tags-->
                        <span class="fw-bold text-gray-600 fs-6">شبکه
                          اجتماعی کمپین ها</span>
                        <!--end::Tags-->
                      </div>
                      <!--ed::آیتم-->
                      <!--begin::آیتم-->
                      <div class="d-flex align-items-center">
                        <!--begin::Bullet-->
                        <span class="bullet bullet-dot bg-danger me-2 h-10px w-10px"></span>
                        <!--end::Bullet-->
                        <!--begin::Tags-->
                        <span class="fw-bold text-&lt;gray-600 fs-6">تبلیغات
                          گوگل</span>
                        <!--end::Tags-->
                      </div>
                      <!--ed::آیتم-->
                    </div>
                    <!--ed::آیتم-->
                    <!--begin::آیتم-->
                    <div class="d-flex flex-column me-7 me-lg-16 pt-sm-3 pt-6">
                      <!--begin::آیتم-->
                      <div class="d-flex align-items-center mb-3 mb-sm-6">
                        <!--begin::Bullet-->
                        <span class="bullet bullet-dot bg-success me-2 h-10px w-10px"></span>
                        <!--end::Bullet-->
                        <!--begin::Tags-->
                        <span class="fw-bold text-gray-600 fs-6">ایمیل
                          جدید</span>
                        <!--end::Tags-->
                      </div>
                      <!--ed::آیتم-->
                      <!--begin::آیتم-->
                      <div class="d-flex align-items-center">
                        <!--begin::Bullet-->
                        <span class="bullet bullet-dot bg-warning me-2 h-10px w-10px"></span>
                        <!--end::Bullet-->
                        <!--begin::Tags-->
                        <span class="fw-bold text-gray-600 fs-6">دوره
                          ها</span>
                        <!--end::Tags-->
                      </div>
                      <!--ed::آیتم-->
                    </div>
                    <!--ed::آیتم-->
                    <!--begin::آیتم-->
                    <div class="d-flex flex-column pt-sm-3 pt-6">
                      <!--begin::آیتم-->
                      <div class="d-flex align-items-center mb-3 mb-sm-6">
                        <!--begin::Bullet-->
                        <span class="bullet bullet-dot bg-info me-2 h-10px w-10px"></span>
                        <!--end::Bullet-->
                        <!--begin::Tags-->
                        <span class="fw-bold text-gray-600 fs-6">کمپین
                          تلویزیونی</span>
                        <!--end::Tags-->
                      </div>
                      <!--ed::آیتم-->
                      <!--begin::آیتم-->
                      <div class="d-flex align-items-center">
                        <!--begin::Bullet-->
                        <span class="bullet bullet-dot bg-success me-2 h-10px w-10px"></span>
                        <!--end::Bullet-->
                        <!--begin::Tags-->
                        <span class="fw-bold text-gray-600 fs-6">رادیو</span>
                        <!--end::Tags-->
                      </div>
                      <!--ed::آیتم-->
                    </div>
                    <!--ed::آیتم-->
                  </div>
                  <!--ed::آیتمs-->
                </div>
                <!--end::Tab pane-->
                <!--begin::Tab pane-->
                <div class="tab-pane fade active show" id="kt_chart_widget_8_month_tab" role="tabpanel">
                  <!--begin::امار-->
                  <div class="mb-5">
                    <!--begin::امار-->
                    <div class="d-flex align-items-center mb-2">
                      <span class="fs-1 fw-semibold text-gray-400 me-1 mt-n1">$</span>
                      <span class="fs-3x fw-bold text-gray-800 me-2 lh-1 ls-n2">8,55</span>
                      <span class="badge badge-light-success fs-base">
                        <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1">
                          <span class="path1"></span>
                          <span class="path2"></span>
                        </i>2.2%</span>
                    </div>
                    <!--end::امار-->
                    <!--begin::توضیحات-->
                    <span class="fs-6 fw-semibold text-gray-400">میانگین هزینه
                      در هر تعامل</span>
                    <!--end::توضیحات-->
                  </div>
                  <!--end::امار-->
                  <!--begin::Chart-->
                  <div id="kt_chart_widget_8_month_chart" class="ms-n5 min-h-auto" style="height: 275px">
                  </div>
                  <!--end::Chart-->
                  <!--begin::آیتمs-->
                  <div class="d-flex flex-wrap pt-5">
                    <!--begin::آیتم-->
                    <div class="d-flex flex-column me-7 me-lg-16 pt-sm-3 pt-6">
                      <!--begin::آیتم-->
                      <div class="d-flex align-items-center mb-3 mb-sm-6">
                        <!--begin::Bullet-->
                        <span class="bullet bullet-dot bg-primary me-2 h-10px w-10px"></span>
                        <!--end::Bullet-->
                        <!--begin::Tags-->
                        <span class="fw-bold text-gray-600 fs-6">شبکه
                          اجتماعی کمپین ها</span>
                        <!--end::Tags-->
                      </div>
                      <!--ed::آیتم-->
                      <!--begin::آیتم-->
                      <div class="d-flex align-items-center">
                        <!--begin::Bullet-->
                        <span class="bullet bullet-dot bg-danger me-2 h-10px w-10px"></span>
                        <!--end::Bullet-->
                        <!--begin::Tags-->
                        <span class="fw-bold text-gray-600 fs-6">تبلیغات
                          گوگل</span>
                        <!--end::Tags-->
                      </div>
                      <!--ed::آیتم-->
                    </div>
                    <!--ed::آیتم-->
                    <!--begin::آیتم-->
                    <div class="d-flex flex-column me-7 me-lg-16 pt-sm-3 pt-6">
                      <!--begin::آیتم-->
                      <div class="d-flex align-items-center mb-3 mb-sm-6">
                        <!--begin::Bullet-->
                        <span class="bullet bullet-dot bg-success me-2 h-10px w-10px"></span>
                        <!--end::Bullet-->
                        <!--begin::Tags-->
                        <span class="fw-bold text-gray-600 fs-6">ایمیل
                          جدید</span>
                        <!--end::Tags-->
                      </div>
                      <!--ed::آیتم-->
                      <!--begin::آیتم-->
                      <div class="d-flex align-items-center">
                        <!--begin::Bullet-->
                        <span class="bullet bullet-dot bg-warning me-2 h-10px w-10px"></span>
                        <!--end::Bullet-->
                        <!--begin::Tags-->
                        <span class="fw-bold text-gray-600 fs-6">دوره
                          ها</span>
                        <!--end::Tags-->
                      </div>
                      <!--ed::آیتم-->
                    </div>
                    <!--ed::آیتم-->
                    <!--begin::آیتم-->
                    <div class="d-flex flex-column pt-sm-3 pt-6">
                      <!--begin::آیتم-->
                      <div class="d-flex align-items-center mb-3 mb-sm-6">
                        <!--begin::Bullet-->
                        <span class="bullet bullet-dot bg-info me-2 h-10px w-10px"></span>
                        <!--end::Bullet-->
                        <!--begin::Tags-->
                        <span class="fw-bold text-gray-600 fs-6">کمپین
                          تلویزیونی</span>
                        <!--end::Tags-->
                      </div>
                      <!--ed::آیتم-->
                      <!--begin::آیتم-->
                      <div class="d-flex align-items-center">
                        <!--begin::Bullet-->
                        <span class="bullet bullet-dot bg-success me-2 h-10px w-10px"></span>
                        <!--end::Bullet-->
                        <!--begin::Tags-->
                        <span class="fw-bold text-gray-600 fs-6">رادیو</span>
                        <!--end::Tags-->
                      </div>
                      <!--ed::آیتم-->
                    </div>
                    <!--ed::آیتم-->
                  </div>
                  <!--ed::آیتمs-->
                </div>
                <!--end::Tab pane-->
              </div>
              <!--end::Tab content-->
            </div>
            <!--end::Body-->
          </div>
          <!--end::Chart widget 8-->
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-xl-6 mb-5 mb-xl-10">
          <!--begin::جداول widget 16-->
          <div class="card card-flush h-xl-100">
            <!--begin::Header-->
            <div class="card-header pt-5">
              <!--begin::Title-->
              <h3 class="card-title align-items-start flex-column">
                <span class="card-label fw-bold text-gray-800">نویسندگان
                  دستاوردها</span>
                <span class="text-gray-400 mt-1 fw-semibold fs-6">نرخ میانگین
                  69.34</span>
              </h3>
              <!--end::Title-->
              <!--begin::Toolbar-->
              <div class="card-toolbar">
                <!--begin::Menu-->
                <button class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end"
                  data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
                  <i class="ki-duotone ki-dots-square fs-1 text-gray-300 me-n1">
                    <span class="path1"></span>
                    <span class="path2"></span>
                    <span class="path3"></span>
                    <span class="path4"></span>
                  </i>
                </button>
                <!--begin::Menu 2-->
                <div
                  class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px"
                  data-kt-menu="true">
                  <!--begin::Menu item-->
                  <div class="menu-item px-3">
                    <div class="menu-content fs-6 text-dark fw-bold px-3 py-4">
                      عملیات سریع</div>
                  </div>
                  <!--end::Menu item-->
                  <!--begin::Menu separator-->
                  <div class="separator mb-3 opacity-75"></div>
                  <!--end::Menu separator-->
                  <!--begin::Menu item-->
                  <div class="menu-item px-3">
                    <a href="#" class="menu-link px-3">تیکت جدید</a>
                  </div>
                  <!--end::Menu item-->
                  <!--begin::Menu item-->
                  <div class="menu-item px-3">
                    <a href="#" class="menu-link px-3">جدید مشتری</a>
                  </div>
                  <!--end::Menu item-->
                  <!--begin::Menu item-->
                  <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="left-start">
                    <!--begin::Menu item-->
                    <a href="#" class="menu-link px-3">
                      <span class="menu-title">گروه جدید</span>
                      <span class="menu-arrow"></span>
                    </a>
                    <!--end::Menu item-->
                    <!--begin::Menu sub-->
                    <div class="menu-sub menu-sub-dropdown w-175px py-4">
                      <!--begin::Menu item-->
                      <div class="menu-item px-3">
                        <a href="#" class="menu-link px-3">گروه مدیر</a>
                      </div>
                      <!--end::Menu item-->
                      <!--begin::Menu item-->
                      <div class="menu-item px-3">
                        <a href="#" class="menu-link px-3">گروه کارکنان</a>
                      </div>
                      <!--end::Menu item-->
                      <!--begin::Menu item-->
                      <div class="menu-item px-3">
                        <a href="#" class="menu-link px-3">گروه عضوها</a>
                      </div>
                      <!--end::Menu item-->
                    </div>
                    <!--end::Menu sub-->
                  </div>
                  <!--end::Menu item-->
                  <!--begin::Menu item-->
                  <div class="menu-item px-3">
                    <a href="#" class="menu-link px-3">مخاطبین جدید</a>
                  </div>
                  <!--end::Menu item-->
                  <!--begin::Menu separator-->
                  <div class="separator mt-3 opacity-75"></div>
                  <!--end::Menu separator-->
                  <!--begin::Menu item-->
                  <div class="menu-item px-3">
                    <div class="menu-content px-3 py-3">
                      <a class="btn btn-primary btn-sm px-4" href="#">گزارش
                        ایجاد کنید</a>
                    </div>
                  </div>
                  <!--end::Menu item-->
                </div>
                <!--end::Menu 2-->
                <!--end::Menu-->
              </div>
              <!--end::Toolbar-->
            </div>
            <!--end::Header-->
            <!--begin::Body-->
            <div class="card-body pt-6">
              <!--begin::Nav-->
              <ul class="nav nav-pills nav-pills-custom mb-3">
                <!--begin::آیتم-->
                <li class="nav-item mb-3 me-3 me-lg-6">
                  <!--begin::Link-->
                  <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-80px h-85px pt-5 pb-2 active"
                    id="kt_stats_widget_16_tab_link_1" data-bs-toggle="pill" href="#kt_stats_widget_16_tab_1">
                    <!--begin::Icon-->
                    <div class="nav-icon mb-3">
                      <i class="ki-duotone ki-car fs-1">
                        <span class="path1"></span>
                        <span class="path2"></span>
                        <span class="path3"></span>
                        <span class="path4"></span>
                        <span class="path5"></span>
                      </i>
                    </div>
                    <!--end::Icon-->
                    <!--begin::Title-->
                    <span class="nav-text text-gray-800 fw-bold fs-6 lh-1">ساس</span>
                    <!--end::Title-->
                    <!--begin::Bullet-->
                    <span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                    <!--end::Bullet-->
                  </a>
                  <!--end::Link-->
                </li>
                <!--end::آیتم-->
                <!--begin::آیتم-->
                <li class="nav-item mb-3 me-3 me-lg-6">
                  <!--begin::Link-->
                  <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-80px h-85px pt-5 pb-2"
                    id="kt_stats_widget_16_tab_link_2" data-bs-toggle="pill" href="#kt_stats_widget_16_tab_2">
                    <!--begin::Icon-->
                    <div class="nav-icon mb-3">
                      <i class="ki-duotone ki-bitcoin fs-1">
                        <span class="path1"></span>
                        <span class="path2"></span>
                      </i>
                    </div>
                    <!--end::Icon-->
                    <!--begin::Title-->
                    <span class="nav-text text-gray-800 fw-bold fs-6 lh-1">کریپتو</span>
                    <!--end::Title-->
                    <!--begin::Bullet-->
                    <span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                    <!--end::Bullet-->
                  </a>
                  <!--end::Link-->
                </li>
                <!--end::آیتم-->
                <!--begin::آیتم-->
                <li class="nav-item mb-3 me-3 me-lg-6">
                  <!--begin::Link-->
                  <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-80px h-85px pt-5 pb-2"
                    id="kt_stats_widget_16_tab_link_3" data-bs-toggle="pill" href="#kt_stats_widget_16_tab_3">
                    <!--begin::Icon-->
                    <div class="nav-icon mb-3">
                      <i class="ki-duotone ki-like fs-1">
                        <span class="path1"></span>
                        <span class="path2"></span>
                      </i>
                    </div>
                    <!--end::Icon-->
                    <!--begin::Title-->
                    <span class="nav-text text-gray-800 fw-bold fs-6 lh-1">شبکه
                      اجتماعی</span>
                    <!--end::Title-->
                    <!--begin::Bullet-->
                    <span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                    <!--end::Bullet-->
                  </a>
                  <!--end::Link-->
                </li>
                <!--end::آیتم-->
                <!--begin::آیتم-->
                <li class="nav-item mb-3 me-3 me-lg-6">
                  <!--begin::Link-->
                  <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-80px h-85px pt-5 pb-2"
                    id="kt_stats_widget_16_tab_link_4" data-bs-toggle="pill" href="#kt_stats_widget_16_tab_4">
                    <!--begin::Icon-->
                    <div class="nav-icon mb-3">
                      <i class="ki-duotone ki-tablet fs-1">
                        <span class="path1"></span>
                        <span class="path2"></span>
                        <span class="path3"></span>
                      </i>
                    </div>
                    <!--end::Icon-->
                    <!--begin::Title-->
                    <span class="nav-text text-gray-800 fw-bold fs-6 lh-1">موبایل</span>
                    <!--end::Title-->
                    <!--begin::Bullet-->
                    <span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                    <!--end::Bullet-->
                  </a>
                  <!--end::Link-->
                </li>
                <!--end::آیتم-->
                <!--begin::آیتم-->
                <li class="nav-item mb-3 me-3 me-lg-6">
                  <!--begin::Link-->
                  <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-80px h-85px pt-5 pb-2"
                    id="kt_stats_widget_16_tab_link_5" data-bs-toggle="pill" href="#kt_stats_widget_16_tab_5">
                    <!--begin::Icon-->
                    <div class="nav-icon mb-3">
                      <i class="ki-duotone ki-send fs-1">
                        <span class="path1"></span>
                        <span class="path2"></span>
                      </i>
                    </div>
                    <!--end::Icon-->
                    <!--begin::Title-->
                    <span class="nav-text text-gray-800 fw-bold fs-6 lh-1">سایر</span>
                    <!--end::Title-->
                    <!--begin::Bullet-->
                    <span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                    <!--end::Bullet-->
                  </a>
                  <!--end::Link-->
                </li>
                <!--end::آیتم-->
              </ul>
              <!--end::Nav-->
              <!--begin::Tab Content-->
              <div class="tab-content">
                <!--begin::Tap pane-->
                <div class="tab-pane fade show active" id="kt_stats_widget_16_tab_1">
                  <!--begin::Table container-->
                  <div class="table-responsive">
                    <!--begin::Table-->
                    <table class="table table-row-dashed align-middle gs-0 gy-3 my-0">
                      <!--begin::Table head-->
                      <thead>
                        <tr class="fs-7 fw-bold text-gray-400 border-bottom-0">
                          <th class="p-0 pb-3 min-w-150px text-start">
                            نویسنده</th>
                          <th class="p-0 pb-3 min-w-100px text-end pe-13">
                            نرخ</th>
                          <th class="p-0 pb-3 w-125px text-end pe-7">چارت
                          </th>
                          <th class="p-0 pb-3 w-50px text-end">نمایش</th>
                        </tr>
                      </thead>
                      <!--end::Table head-->
                      <!--begin::Table body-->
                      <tbody>
                        <tr>
                          <td>
                            <div class="d-flex align-items-center">
                              <div class="symbol symbol-50px me-3">
                                <img src="../assets/media/avatars/300-3.jpg" class="" alt="" />
                              </div>
                              <div class="d-flex justify-content-start flex-column">
                                <a href="../../demo1/dist/pages/user-profile/overview.html"
                                  class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">گای
                                  هاوکینز</a>
                                <span class="text-gray-400 fw-semibold d-block fs-7">هلند</span>
                              </div>
                            </div>
                          </td>
                          <td class="text-end pe-13">
                            <span class="text-gray-600 fw-bold fs-6">78.34%</span>
                          </td>
                          <td class="text-end pe-0">
                            <div id="kt_table_widget_16_chart_1_1" class="h-50px mt-n8 pe-7"
                              data-kt-chart-color="success"></div>
                          </td>
                          <td class="text-end">
                            <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                              <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                            </a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="d-flex align-items-center">
                              <div class="symbol symbol-50px me-3">
                                <img src="../assets/media/avatars/300-2.jpg" class="" alt="" />
                              </div>
                              <div class="d-flex justify-content-start flex-column">
                                <a href="../../demo1/dist/pages/user-profile/overview.html"
                                  class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">هنری</a>
                                <span class="text-gray-400 fw-semibold d-block fs-7">فرانسه</span>
                              </div>
                            </div>
                          </td>
                          <td class="text-end pe-13">
                            <span class="text-gray-600 fw-bold fs-6">63.83%</span>
                          </td>
                          <td class="text-end pe-0">
                            <div id="kt_table_widget_16_chart_1_2" class="h-50px mt-n8 pe-7"
                              data-kt-chart-color="danger"></div>
                          </td>
                          <td class="text-end">
                            <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                              <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                            </a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="d-flex align-items-center">
                              <div class="symbol symbol-50px me-3">
                                <img src="../assets/media/avatars/300-9.jpg" class="" alt="" />
                              </div>
                              <div class="d-flex justify-content-start flex-column">
                                <a href="../../demo1/dist/pages/user-profile/overview.html"
                                  class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">جواد
                                  یساری</a>
                                <span class="text-gray-400 fw-semibold d-block fs-7">لهستان</span>
                              </div>
                            </div>
                          </td>
                          <td class="text-end pe-13">
                            <span class="text-gray-600 fw-bold fs-6">92.56%</span>
                          </td>
                          <td class="text-end pe-0">
                            <div id="kt_table_widget_16_chart_1_3" class="h-50px mt-n8 pe-7"
                              data-kt-chart-color="success"></div>
                          </td>
                          <td class="text-end">
                            <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                              <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                            </a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="d-flex align-items-center">
                              <div class="symbol symbol-50px me-3">
                                <img src="../assets/media/avatars/300-7.jpg" class="" alt="" />
                              </div>
                              <div class="d-flex justify-content-start flex-column">
                                <a href="../../demo1/dist/pages/user-profile/overview.html"
                                  class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">کامران</a>
                                <span class="text-gray-400 fw-semibold d-block fs-7">مکزیک</span>
                              </div>
                            </div>
                          </td>
                          <td class="text-end pe-13">
                            <span class="text-gray-600 fw-bold fs-6">63.08%</span>
                          </td>
                          <td class="text-end pe-0">
                            <div id="kt_table_widget_16_chart_1_4" class="h-50px mt-n8 pe-7"
                              data-kt-chart-color="success"></div>
                          </td>
                          <td class="text-end">
                            <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                              <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                            </a>
                          </td>
                        </tr>
                      </tbody>
                      <!--end::Table body-->
                    </table>
                    <!--end::Table-->
                  </div>
                  <!--end::Table container-->
                </div>
                <!--end::Tap pane-->
                <!--begin::Tap pane-->
                <div class="tab-pane fade" id="kt_stats_widget_16_tab_2">
                  <!--begin::Table container-->
                  <div class="table-responsive">
                    <!--begin::Table-->
                    <table class="table table-row-dashed align-middle gs-0 gy-3 my-0">
                      <!--begin::Table head-->
                      <thead>
                        <tr class="fs-7 fw-bold text-gray-400 border-bottom-0">
                          <th class="p-0 pb-3 min-w-150px text-start">
                            نویسنده</th>
                          <th class="p-0 pb-3 min-w-100px text-end pe-13">
                            نرخ</th>
                          <th class="p-0 pb-3 w-125px text-end pe-7">چارت
                          </th>
                          <th class="p-0 pb-3 w-50px text-end">نمایش</th>
                        </tr>
                      </thead>
                      <!--end::Table head-->
                      <!--begin::Table body-->
                      <tbody>
                        <tr>
                          <td>
                            <div class="d-flex align-items-center">
                              <div class="symbol symbol-50px me-3">
                                <img src="../assets/media/avatars/300-25.jpg" class="" alt="" />
                              </div>
                              <div class="d-flex justify-content-start flex-column">
                                <a href="../../demo1/dist/pages/user-profile/overview.html"
                                  class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">بروکلین
                                  سیمونز</a>
                                <span class="text-gray-400 fw-semibold d-block fs-7">لهستان</span>
                              </div>
                            </div>
                          </td>
                          <td class="text-end pe-13">
                            <span class="text-gray-600 fw-bold fs-6">85.23%</span>
                          </td>
                          <td class="text-end pe-0">
                            <div id="kt_table_widget_16_chart_2_1" class="h-50px mt-n8 pe-7"
                              data-kt-chart-color="success"></div>
                          </td>
                          <td class="text-end">
                            <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                              <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                            </a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="d-flex align-items-center">
                              <div class="symbol symbol-50px me-3">
                                <img src="../assets/media/avatars/300-24.jpg" class="" alt="" />
                              </div>
                              <div class="d-flex justify-content-start flex-column">
                                <a href="../../demo1/dist/pages/user-profile/overview.html"
                                  class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">استر
                                  هوارد</a>
                                <span class="text-gray-400 fw-semibold d-block fs-7">مکزیک</span>
                              </div>
                            </div>
                          </td>
                          <td class="text-end pe-13">
                            <span class="text-gray-600 fw-bold fs-6">74.83%</span>
                          </td>
                          <td class="text-end pe-0">
                            <div id="kt_table_widget_16_chart_2_2" class="h-50px mt-n8 pe-7"
                              data-kt-chart-color="danger"></div>
                          </td>
                          <td class="text-end">
                            <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                              <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                            </a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="d-flex align-items-center">
                              <div class="symbol symbol-50px me-3">
                                <img src="../assets/media/avatars/300-20.jpg" class="" alt="" />
                              </div>
                              <div class="d-flex justify-content-start flex-column">
                                <a href="../../demo1/dist/pages/user-profile/overview.html"
                                  class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">آنت
                                  بلک</a>
                                <span class="text-gray-400 fw-semibold d-block fs-7">هلند</span>
                              </div>
                            </div>
                          </td>
                          <td class="text-end pe-13">
                            <span class="text-gray-600 fw-bold fs-6">90.06%</span>
                          </td>
                          <td class="text-end pe-0">
                            <div id="kt_table_widget_16_chart_2_3" class="h-50px mt-n8 pe-7"
                              data-kt-chart-color="success"></div>
                          </td>
                          <td class="text-end">
                            <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                              <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                            </a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="d-flex align-items-center">
                              <div class="symbol symbol-50px me-3">
                                <img src="../assets/media/avatars/300-17.jpg" class="" alt="" />
                              </div>
                              <div class="d-flex justify-content-start flex-column">
                                <a href="../../demo1/dist/pages/user-profile/overview.html"
                                  class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">اسفندوین
                                  مک کینی</a>
                                <span class="text-gray-400 fw-semibold d-block fs-7">فرانسه</span>
                              </div>
                            </div>
                          </td>
                          <td class="text-end pe-13">
                            <span class="text-gray-600 fw-bold fs-6">54.08%</span>
                          </td>
                          <td class="text-end pe-0">
                            <div id="kt_table_widget_16_chart_2_4" class="h-50px mt-n8 pe-7"
                              data-kt-chart-color="success"></div>
                          </td>
                          <td class="text-end">
                            <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                              <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                            </a>
                          </td>
                        </tr>
                      </tbody>
                      <!--end::Table body-->
                    </table>
                    <!--end::Table-->
                  </div>
                  <!--end::Table container-->
                </div>
                <!--end::Tap pane-->
                <!--begin::Tap pane-->
                <div class="tab-pane fade" id="kt_stats_widget_16_tab_3">
                  <!--begin::Table container-->
                  <div class="table-responsive">
                    <!--begin::Table-->
                    <table class="table table-row-dashed align-middle gs-0 gy-3 my-0">
                      <!--begin::Table head-->
                      <thead>
                        <tr class="fs-7 fw-bold text-gray-400 border-bottom-0">
                          <th class="p-0 pb-3 min-w-150px text-start">
                            نویسنده</th>
                          <th class="p-0 pb-3 min-w-100px text-end pe-13">
                            نرخ</th>
                          <th class="p-0 pb-3 w-125px text-end pe-7">چارت
                          </th>
                          <th class="p-0 pb-3 w-50px text-end">نمایش</th>
                        </tr>
                      </thead>
                      <!--end::Table head-->
                      <!--begin::Table body-->
                      <tbody>
                        <tr>
                          <td>
                            <div class="d-flex align-items-center">
                              <div class="symbol symbol-50px me-3">
                                <img src="../assets/media/avatars/300-11.jpg" class="" alt="" />
                              </div>
                              <div class="d-flex justify-content-start flex-column">
                                <a href="../../demo1/dist/pages/user-profile/overview.html"
                                  class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">جواد
                                  یساری</a>
                                <span class="text-gray-400 fw-semibold d-block fs-7">آمریکا</span>
                              </div>
                            </div>
                          </td>
                          <td class="text-end pe-13">
                            <span class="text-gray-600 fw-bold fs-6">52.34%</span>
                          </td>
                          <td class="text-end pe-0">
                            <div id="kt_table_widget_16_chart_3_1" class="h-50px mt-n8 pe-7"
                              data-kt-chart-color="success"></div>
                          </td>
                          <td class="text-end">
                            <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                              <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                            </a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="d-flex align-items-center">
                              <div class="symbol symbol-50px me-3">
                                <img src="../assets/media/avatars/300-23.jpg" class="" alt="" />
                              </div>
                              <div class="d-flex justify-content-start flex-column">
                                <a href="../../demo1/dist/pages/user-profile/overview.html"
                                  class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">رونالد
                                  ریچارز</a>
                                <span class="text-gray-400 fw-semibold d-block fs-7">اسپانیا</span>
                              </div>
                            </div>
                          </td>
                          <td class="text-end pe-13">
                            <span class="text-gray-600 fw-bold fs-6">77.65%</span>
                          </td>
                          <td class="text-end pe-0">
                            <div id="kt_table_widget_16_chart_3_2" class="h-50px mt-n8 pe-7"
                              data-kt-chart-color="danger"></div>
                          </td>
                          <td class="text-end">
                            <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                              <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                            </a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="d-flex align-items-center">
                              <div class="symbol symbol-50px me-3">
                                <img src="../assets/media/avatars/300-4.jpg" class="" alt="" />
                              </div>
                              <div class="d-flex justify-content-start flex-column">
                                <a href="../../demo1/dist/pages/user-profile/overview.html"
                                  class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">الکس
                                  سانچز</a>
                                <span class="text-gray-400 fw-semibold d-block fs-7">چین</span>
                              </div>
                            </div>
                          </td>
                          <td class="text-end pe-13">
                            <span class="text-gray-600 fw-bold fs-6">82.47%</span>
                          </td>
                          <td class="text-end pe-0">
                            <div id="kt_table_widget_16_chart_3_3" class="h-50px mt-n8 pe-7"
                              data-kt-chart-color="success"></div>
                          </td>
                          <td class="text-end">
                            <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                              <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                            </a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="d-flex align-items-center">
                              <div class="symbol symbol-50px me-3">
                                <img src="../assets/media/avatars/300-1.jpg" class="" alt="" />
                              </div>
                              <div class="d-flex justify-content-start flex-column">
                                <a href="../../demo1/dist/pages/user-profile/overview.html"
                                  class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">کامران
                                  مرادی</a>
                                <span class="text-gray-400 fw-semibold d-block fs-7">مکزیک</span>
                              </div>
                            </div>
                          </td>
                          <td class="text-end pe-13">
                            <span class="text-gray-600 fw-bold fs-6">67.84%</span>
                          </td>
                          <td class="text-end pe-0">
                            <div id="kt_table_widget_16_chart_3_4" class="h-50px mt-n8 pe-7"
                              data-kt-chart-color="success"></div>
                          </td>
                          <td class="text-end">
                            <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                              <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                            </a>
                          </td>
                        </tr>
                      </tbody>
                      <!--end::Table body-->
                    </table>
                    <!--end::Table-->
                  </div>
                  <!--end::Table container-->
                </div>
                <!--end::Tap pane-->
                <!--begin::Tap pane-->
                <div class="tab-pane fade" id="kt_stats_widget_16_tab_4">
                  <!--begin::Table container-->
                  <div class="table-responsive">
                    <!--begin::Table-->
                    <table class="table table-row-dashed align-middle gs-0 gy-3 my-0">
                      <!--begin::Table head-->
                      <thead>
                        <tr class="fs-7 fw-bold text-gray-400 border-bottom-0">
                          <th class="p-0 pb-3 min-w-150px text-start">
                            نویسنده</th>
                          <th class="p-0 pb-3 min-w-100px text-end pe-13">
                            نرخ</th>
                          <th class="p-0 pb-3 w-125px text-end pe-7">چارت
                          </th>
                          <th class="p-0 pb-3 w-50px text-end">نمایش</th>
                        </tr>
                      </thead>
                      <!--end::Table head-->
                      <!--begin::Table body-->
                      <tbody>
                        <tr>
                          <td>
                            <div class="d-flex align-items-center">
                              <div class="symbol symbol-50px me-3">
                                <img src="../assets/media/avatars/300-12.jpg" class="" alt="" />
                              </div>
                              <div class="d-flex justify-content-start flex-column">
                                <a href="../../demo1/dist/pages/user-profile/overview.html"
                                  class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">عارف
                                  لرستانی</a>
                                <span class="text-gray-400 fw-semibold d-block fs-7">لندن</span>
                              </div>
                            </div>
                          </td>
                          <td class="text-end pe-13">
                            <span class="text-gray-600 fw-bold fs-6">53.44%</span>
                          </td>
                          <td class="text-end pe-0">
                            <div id="kt_table_widget_16_chart_4_1" class="h-50px mt-n8 pe-7"
                              data-kt-chart-color="success"></div>
                          </td>
                          <td class="text-end">
                            <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                              <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                            </a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="d-flex align-items-center">
                              <div class="symbol symbol-50px me-3">
                                <img src="../assets/media/avatars/300-21.jpg" class="" alt="" />
                              </div>
                              <div class="d-flex justify-content-start flex-column">
                                <a href="../../demo1/dist/pages/user-profile/overview.html"
                                  class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">اسفندوین
                                  مک کینیr</a>
                                <span class="text-gray-400 fw-semibold d-block fs-7">فرانسه</span>
                              </div>
                            </div>
                          </td>
                          <td class="text-end pe-13">
                            <span class="text-gray-600 fw-bold fs-6">74.64%</span>
                          </td>
                          <td class="text-end pe-0">
                            <div id="kt_table_widget_16_chart_4_2" class="h-50px mt-n8 pe-7"
                              data-kt-chart-color="danger"></div>
                          </td>
                          <td class="text-end">
                            <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                              <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                            </a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="d-flex align-items-center">
                              <div class="symbol symbol-50px me-3">
                                <img src="../assets/media/avatars/300-30.jpg" class="" alt="" />
                              </div>
                              <div class="d-flex justify-content-start flex-column">
                                <a href="../../demo1/dist/pages/user-profile/overview.html"
                                  class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">جواد
                                  یساری</a>
                                <span class="text-gray-400 fw-semibold d-block fs-7">کره</span>
                              </div>
                            </div>
                          </td>
                          <td class="text-end pe-13">
                            <span class="text-gray-600 fw-bold fs-6">88.56%</span>
                          </td>
                          <td class="text-end pe-0">
                            <div id="kt_table_widget_16_chart_4_3" class="h-50px mt-n8 pe-7"
                              data-kt-chart-color="success"></div>
                          </td>
                          <td class="text-end">
                            <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                              <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                            </a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="d-flex align-items-center">
                              <div class="symbol symbol-50px me-3">
                                <img src="../assets/media/avatars/300-14.jpg" class="" alt="" />
                              </div>
                              <div class="d-flex justify-content-start flex-column">
                                <a href="../../demo1/dist/pages/user-profile/overview.html"
                                  class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">استر
                                  هوارد</a>
                                <span class="text-gray-400 fw-semibold d-block fs-7">ایسلند</span>
                              </div>
                            </div>
                          </td>
                          <td class="text-end pe-13">
                            <span class="text-gray-600 fw-bold fs-6">63.16%</span>
                          </td>
                          <td class="text-end pe-0">
                            <div id="kt_table_widget_16_chart_4_4" class="h-50px mt-n8 pe-7"
                              data-kt-chart-color="success"></div>
                          </td>
                          <td class="text-end">
                            <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                              <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                            </a>
                          </td>
                        </tr>
                      </tbody>
                      <!--end::Table body-->
                    </table>
                    <!--end::Table-->
                  </div>
                  <!--end::Table container-->
                </div>
                <!--end::Tap pane-->
                <!--begin::Tap pane-->
                <div class="tab-pane fade" id="kt_stats_widget_16_tab_5">
                  <!--begin::Table container-->
                  <div class="table-responsive">
                    <!--begin::Table-->
                    <table class="table table-row-dashed align-middle gs-0 gy-3 my-0">
                      <!--begin::Table head-->
                      <thead>
                        <tr class="fs-7 fw-bold text-gray-400 border-bottom-0">
                          <th class="p-0 pb-3 min-w-150px text-start">
                            نویسنده</th>
                          <th class="p-0 pb-3 min-w-100px text-end pe-13">
                            نرخ</th>
                          <th class="p-0 pb-3 w-125px text-end pe-7">چارت
                          </th>
                          <th class="p-0 pb-3 w-50px text-end">نمایش</th>
                        </tr>
                      </thead>
                      <!--end::Table head-->
                      <!--begin::Table body-->
                      <tbody>
                        <tr>
                          <td>
                            <div class="d-flex align-items-center">
                              <div class="symbol symbol-50px me-3">
                                <img src="../assets/media/avatars/300-6.jpg" class="" alt="" />
                              </div>
                              <div class="d-flex justify-content-start flex-column">
                                <a href="../../demo1/dist/pages/user-profile/overview.html"
                                  class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">هنری</a>
                                <span class="text-gray-400 fw-semibold d-block fs-7">هلند</span>
                              </div>
                            </div>
                          </td>
                          <td class="text-end pe-13">
                            <span class="text-gray-600 fw-bold fs-6">68.54%</span>
                          </td>
                          <td class="text-end pe-0">
                            <div id="kt_table_widget_16_chart_5_1" class="h-50px mt-n8 pe-7"
                              data-kt-chart-color="success"></div>
                          </td>
                          <td class="text-end">
                            <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                              <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                            </a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="d-flex align-items-center">
                              <div class="symbol symbol-50px me-3">
                                <img src="../assets/media/avatars/300-10.jpg" class="" alt="" />
                              </div>
                              <div class="d-flex justify-content-start flex-column">
                                <a href="../../demo1/dist/pages/user-profile/overview.html"
                                  class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">استر
                                  هوارد</a>
                                <span class="text-gray-400 fw-semibold d-block fs-7">ایتالیا</span>
                              </div>
                            </div>
                          </td>
                          <td class="text-end pe-13">
                            <span class="text-gray-600 fw-bold fs-6">55.83%</span>
                          </td>
                          <td class="text-end pe-0">
                            <div id="kt_table_widget_16_chart_5_2" class="h-50px mt-n8 pe-7"
                              data-kt-chart-color="danger"></div>
                          </td>
                          <td class="text-end">
                            <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                              <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                            </a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="d-flex align-items-center">
                              <div class="symbol symbol-50px me-3">
                                <img src="../assets/media/avatars/300-9.jpg" class="" alt="" />
                              </div>
                              <div class="d-flex justify-content-start flex-column">
                                <a href="../../demo1/dist/pages/user-profile/overview.html"
                                  class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">جواد
                                  یساری</a>
                                <span class="text-gray-400 fw-semibold d-block fs-7">لهستان</span>
                              </div>
                            </div>
                          </td>
                          <td class="text-end pe-13">
                            <span class="text-gray-600 fw-bold fs-6">93.46%</span>
                          </td>
                          <td class="text-end pe-0">
                            <div id="kt_table_widget_16_chart_5_3" class="h-50px mt-n8 pe-7"
                              data-kt-chart-color="success"></div>
                          </td>
                          <td class="text-end">
                            <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                              <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                            </a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="d-flex align-items-center">
                              <div class="symbol symbol-50px me-3">
                                <img src="../assets/media/avatars/300-3.jpg" class="" alt="" />
                              </div>
                              <div class="d-flex justify-content-start flex-column">
                                <a href="../../demo1/dist/pages/user-profile/overview.html"
                                  class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">رالف
                                  ادواردز</a>
                                <span class="text-gray-400 fw-semibold d-block fs-7">مکزیک</span>
                              </div>
                            </div>
                          </td>
                          <td class="text-end pe-13">
                            <span class="text-gray-600 fw-bold fs-6">64.48%</span>
                          </td>
                          <td class="text-end pe-0">
                            <div id="kt_table_widget_16_chart_5_4" class="h-50px mt-n8 pe-7"
                              data-kt-chart-color="success"></div>
                          </td>
                          <td class="text-end">
                            <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                              <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                            </a>
                          </td>
                        </tr>
                      </tbody>
                      <!--end::Table body-->
                    </table>
                    <!--end::Table-->
                  </div>
                  <!--end::Table container-->
                </div>
                <!--end::Tap pane-->
                <!--end::Table container-->
              </div>
              <!--end::Tab Content-->
            </div>
            <!--end: کارت Body-->
          </div>
          <!--end::جداول widget 16-->
        </div>
        <!--end::Col-->
      </div>
      <!--end::Row-->
      <!--begin::Row-->
      <div class="row g-5 g-xl-10 mb-5 mb-xl-10">
        <!--begin::Col-->
        <div class="col-xxl-6">
          <!--begin::کارت widget 18-->
          <div class="card card-flush h-xl-100">
            <!--begin::Body-->
            <div class="card-body py-9">
              <!--begin::Row-->
              <div class="row gx-9 h-100">
                <!--begin::Col-->
                <div class="col-sm-6 mb-10 mb-sm-0">
                  <!--begin::Image-->
                  <div
                    class="bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-400px min-h-sm-100 h-100"
                    style="background-size: 100% 100%;background-image:url('../assets/media/stock/600x600/img-65.jpg')">
                  </div>
                  <!--end::Image-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-sm-6">
                  <!--begin::Wrapper-->
                  <div class="d-flex flex-column h-100">
                    <!--begin::Header-->
                    <div class="mb-7">
                      <!--begin::Headin-->
                      <div class="d-flex flex-stack mb-6">
                        <!--begin::Title-->
                        <div class="flex-shrink-0 me-5">
                          <span class="text-gray-400 fs-7 fw-bold me-2 d-block lh-1 pb-1">ویژه</span>
                          <span class="text-gray-800 fs-1 fw-bold">9درجه</span>
                        </div>
                        <!--end::Title-->
                        <span class="badge badge-light-primary flex-shrink-0 align-self-center py-3 px-4 fs-7">در
                          حال پردازش</span>
                      </div>
                      <!--end::Heading-->
                      <!--begin::آیتمs-->
                      <div class="d-flex align-items-center flex-wrap d-grid gap-2">
                        <!--begin::آیتم-->
                        <div class="d-flex align-items-center me-5 me-xl-13">
                          <!--begin::Symbol-->
                          <div class="symbol symbol-30px symbol-circle me-3">
                            <img src="../assets/media/avatars/300-3.jpg" class="" alt="" />
                          </div>
                          <!--end::Symbol-->
                          <!--begin::Info-->
                          <div class="m-0">
                            <span class="fw-semibold text-gray-400 d-block fs-8">مدیریت</span>
                            <a href="../../demo1/dist/pages/user-profile/overview.html"
                              class="fw-bold text-gray-800 text-hover-primary fs-7">رابرت
                              فاکس</a>
                          </div>
                          <!--end::Info-->
                        </div>
                        <!--end::آیتم-->
                        <!--begin::آیتم-->
                        <div class="d-flex align-items-center">
                          <!--begin::Symbol-->
                          <div class="symbol symbol-30px symbol-circle me-3">
                            <span class="symbol-label bg-success">
                              <i class="ki-duotone ki-abstract-41 fs-5 text-white">
                                <span class="path1"></span>
                                <span class="path2"></span>
                              </i>
                            </span>
                          </div>
                          <!--end::Symbol-->
                          <!--begin::Info-->
                          <div class="m-0">
                            <span class="fw-semibold text-gray-400 d-block fs-8">بودجه</span>
                            <span class="fw-bold text-gray-800 fs-7">$64.800</span>
                          </div>
                          <!--end::Info-->
                        </div>
                        <!--end::آیتم-->
                      </div>
                      <!--end::آیتمs-->
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="mb-6">
                      <!--begin::Text-->
                      <span class="fw-semibold text-gray-600 fs-6 mb-8 d-block">تصاویر
                        کارتونی مسطح با رنگ‌های واضح و ترکیب نشده و خانم موی
                        زیبای بنفش نامتقارن</span>
                      <!--end::Text-->
                      <!--begin::Stats-->
                      <div class="d-flex">
                        <!--begin::Stat-->
                        <div class="border border-gray-300 border-dashed rounded min-w-100px w-100 py-2 px-4 me-6 mb-3">
                          <!--begin::تاریخ-->
                          <span class="fs-6 text-gray-700 fw-bold">بهمن 6,
                            2021</span>
                          <!--end::تاریخ-->
                          <!--begin::Tags-->
                          <div class="fw-semibold text-gray-400">سررسید
                          </div>
                          <!--end::Tags-->
                        </div>
                        <!--end::Stat-->
                        <!--begin::Stat-->
                        <div class="border border-gray-300 border-dashed rounded min-w-100px w-100 py-2 px-4 mb-3">
                          <!--begin::شماره کارت-->
                          <span class="fs-6 text-gray-700 fw-bold">$
                            <span class="ms-n1" data-kt-countup="true"
                              data-kt-countup-value="284,900.00">0</span></span>
                          <!--end::شماره کارت-->
                          <!--begin::Tags-->
                          <div class="fw-semibold text-gray-400">بودجه
                          </div>
                          <!--end::Tags-->
                        </div>
                        <!--end::Stat-->
                      </div>
                      <!--end::Stats-->
                    </div>
                    <!--end::Body-->
                    <!--begin::Footer-->
                    <div class="d-flex flex-stack mt-auto bd-highlight">
                      <!--begin::کاربران group-->
                      <div class="symbol-group symbol-hover flex-nowrap">
                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="میلاد مرادی">
                          <img alt="Pic" src="../assets/media/avatars/300-2.jpg" />
                        </div>
                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="میکائیل احمدی">
                          <img alt="Pic" src="../assets/media/avatars/300-3.jpg" />
                        </div>
                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="سوسن موسوی">
                          <span class="symbol-label bg-primary text-inverse-primary fw-bold">S</span>
                        </div>
                      </div>
                      <!--end::کاربران group-->
                      <!--begin::Actions-->
                      <a href="../../demo1/dist/apps/projects/project.html"
                        class="d-flex align-items-center text-primary opacity-75-hover fs-6 fw-semibold">مشاهده
                        پروژه
                        <i class="ki-duotone ki-exit-right-corner fs-4 ms-1">
                          <span class="path1"></span>
                          <span class="path2"></span>
                        </i></a>
                      <!--end::Actions-->
                    </div>
                    <!--end::Footer-->
                  </div>
                  <!--end::Wrapper-->
                </div>
                <!--end::Col-->
              </div>
              <!--end::Row-->
            </div>
            <!--end::Body-->
          </div>
          <!--end::کارت widget 18-->
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-xl-6">
          <!--begin::Chart widget 36-->
          <div class="card card-flush overflow-hidden h-lg-100">
            <!--begin::Header-->
            <div class="card-header pt-5">
              <!--begin::Title-->
              <h3 class="card-title align-items-start flex-column">
                <span class="card-label fw-bold text-dark">کارایی</span>
                <span class="text-gray-400 mt-1 fw-semibold fs-6">1,046 ورودی تماس
                  امرز</span>
              </h3>
              <!--end::Title-->
              <!--begin::Toolbar-->
              <div class="card-toolbar">
                <!--begin::تاریخrangepicker(defined in src/js/layout/app.js)-->
                <div data-kt-daterangepicker="true" data-kt-daterangepicker-opens="left"
                  data-kt-daterangepicker-range="today" class="btn btn-sm btn-light d-flex align-items-center px-4">
                  <!--begin::Display range-->
                  <div class="text-gray-600 fw-bold">در حال خواندن...</div>
                  <!--end::Display range-->
                  <i class="ki-duotone ki-calendar-8 fs-1 ms-2 me-0">
                    <span class="path1"></span>
                    <span class="path2"></span>
                    <span class="path3"></span>
                    <span class="path4"></span>
                    <span class="path5"></span>
                    <span class="path6"></span>
                  </i>
                </div>
                <!--end::تاریخrangepicker-->
              </div>
              <!--end::Toolbar-->
            </div>
            <!--end::Header-->
            <!--begin::کارت body-->
            <div class="card-body d-flex align-items-end p-0">
              <!--begin::Chart-->
              <div id="kt_charts_widget_36" class="min-h-auto w-100 ps-4 pe-6" style="height: 300px"></div>
              <!--end::Chart-->
            </div>
            <!--end::کارت body-->
          </div>
          <!--end::Chart widget 36-->
        </div>
        <!--end::Col-->
      </div>
      <!--end::Row-->
      <!--begin::Row-->
      <div class="row g-5 g-xl-10 mb-5 mb-xl-10">
        <!--begin::Col-->
        <div class="col-xl-4">
          <!--begin::Chart Widget 35-->
          <div class="card card-flush h-md-100">
            <!--begin::Header-->
            <div class="card-header pt-5 mb-6">
              <!--begin::Title-->
              <h3 class="card-title align-items-start flex-column">
                <!--begin::امار-->
                <div class="d-flex align-items-center mb-2">
                  <!--begin::واحد پول-->
                  <span class="fs-3 fw-semibold text-gray-400 align-self-start me-1">$</span>
                  <!--end::واحد پول-->
                  <!--begin::Value-->
                  <span class="fs-2hx fw-bold text-gray-800 me-2 lh-1 ls-n2">3,274.94</span>
                  <!--end::Value-->
                  <!--begin::Tags-->
                  <span class="badge badge-light-success fs-base">
                    <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1">
                      <span class="path1"></span>
                      <span class="path2"></span>
                    </i>9.2%</span>
                  <!--end::Tags-->
                </div>
                <!--end::امار-->
                <!--begin::توضیحات-->
                <span class="fs-6 fw-semibold text-gray-400">میانگین درآمد</span>
                <!--end::توضیحات-->
              </h3>
              <!--end::Title-->
              <!--begin::Toolbar-->
              <div class="card-toolbar">
                <!--begin::Menu-->
                <button class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end"
                  data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
                  <i class="ki-duotone ki-dots-square fs-1 text-gray-300 me-n1">
                    <span class="path1"></span>
                    <span class="path2"></span>
                    <span class="path3"></span>
                    <span class="path4"></span>
                  </i>
                </button>
                <!--begin::Menu 2-->
                <div
                  class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px"
                  data-kt-menu="true">
                  <!--begin::Menu item-->
                  <div class="menu-item px-3">
                    <div class="menu-content fs-6 text-dark fw-bold px-3 py-4">
                      عملیات سریع</div>
                  </div>
                  <!--end::Menu item-->
                  <!--begin::Menu separator-->
                  <div class="separator mb-3 opacity-75"></div>
                  <!--end::Menu separator-->
                  <!--begin::Menu item-->
                  <div class="menu-item px-3">
                    <a href="#" class="menu-link px-3">تیکت جدید</a>
                  </div>
                  <!--end::Menu item-->
                  <!--begin::Menu item-->
                  <div class="menu-item px-3">
                    <a href="#" class="menu-link px-3">جدید مشتری</a>
                  </div>
                  <!--end::Menu item-->
                  <!--begin::Menu item-->
                  <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="left-start">
                    <!--begin::Menu item-->
                    <a href="#" class="menu-link px-3">
                      <span class="menu-title">گروه جدید</span>
                      <span class="menu-arrow"></span>
                    </a>
                    <!--end::Menu item-->
                    <!--begin::Menu sub-->
                    <div class="menu-sub menu-sub-dropdown w-175px py-4">
                      <!--begin::Menu item-->
                      <div class="menu-item px-3">
                        <a href="#" class="menu-link px-3">گروه مدیر</a>
                      </div>
                      <!--end::Menu item-->
                      <!--begin::Menu item-->
                      <div class="menu-item px-3">
                        <a href="#" class="menu-link px-3">گروه کارکنان</a>
                      </div>
                      <!--end::Menu item-->
                      <!--begin::Menu item-->
                      <div class="menu-item px-3">
                        <a href="#" class="menu-link px-3">گروه عضوها</a>
                      </div>
                      <!--end::Menu item-->
                    </div>
                    <!--end::Menu sub-->
                  </div>
                  <!--end::Menu item-->
                  <!--begin::Menu item-->
                  <div class="menu-item px-3">
                    <a href="#" class="menu-link px-3">مخاطبین جدید</a>
                  </div>
                  <!--end::Menu item-->
                  <!--begin::Menu separator-->
                  <div class="separator mt-3 opacity-75"></div>
                  <!--end::Menu separator-->
                  <!--begin::Menu item-->
                  <div class="menu-item px-3">
                    <div class="menu-content px-3 py-3">
                      <a class="btn btn-primary btn-sm px-4" href="#">گزارش
                        ایجاد کنید</a>
                    </div>
                  </div>
                  <!--end::Menu item-->
                </div>
                <!--end::Menu 2-->
                <!--end::Menu-->
              </div>
              <!--end::Toolbar-->
            </div>
            <!--end::Header-->
            <!--begin::Body-->
            <div class="card-body py-0 px-0">
              <!--begin::Nav-->
              <ul class="nav d-flex justify-content-between mb-3 mx-9">
                <!--begin::آیتم-->
                <li class="nav-item mb-3">
                  <!--begin::Link-->
                  <a class="nav-link btn btn-flex flex-center btn-active-danger btn-color-gray-600 btn-active-color-white rounded-2 w-45px h-35px active"
                    data-bs-toggle="tab" id="kt_charts_widget_35_tab_1" href="#kt_charts_widget_35_tab_content_1">1d</a>
                  <!--end::Link-->
                </li>
                <!--end::آیتم-->
                <!--begin::آیتم-->
                <li class="nav-item mb-3">
                  <!--begin::Link-->
                  <a class="nav-link btn btn-flex flex-center btn-active-danger btn-color-gray-600 btn-active-color-white rounded-2 w-45px h-35px"
                    data-bs-toggle="tab" id="kt_charts_widget_35_tab_2" href="#kt_charts_widget_35_tab_content_2">5d</a>
                  <!--end::Link-->
                </li>
                <!--end::آیتم-->
                <!--begin::آیتم-->
                <li class="nav-item mb-3">
                  <!--begin::Link-->
                  <a class="nav-link btn btn-flex flex-center btn-active-danger btn-color-gray-600 btn-active-color-white rounded-2 w-45px h-35px"
                    data-bs-toggle="tab" id="kt_charts_widget_35_tab_3" href="#kt_charts_widget_35_tab_content_3">1m</a>
                  <!--end::Link-->
                </li>
                <!--end::آیتم-->
                <!--begin::آیتم-->
                <li class="nav-item mb-3">
                  <!--begin::Link-->
                  <a class="nav-link btn btn-flex flex-center btn-active-danger btn-color-gray-600 btn-active-color-white rounded-2 w-45px h-35px"
                    data-bs-toggle="tab" id="kt_charts_widget_35_tab_4" href="#kt_charts_widget_35_tab_content_4">6m</a>
                  <!--end::Link-->
                </li>
                <!--end::آیتم-->
                <!--begin::آیتم-->
                <li class="nav-item mb-3">
                  <!--begin::Link-->
                  <a class="nav-link btn btn-flex flex-center btn-active-danger btn-color-gray-600 btn-active-color-white rounded-2 w-45px h-35px"
                    data-bs-toggle="tab" id="kt_charts_widget_35_tab_5" href="#kt_charts_widget_35_tab_content_5">1y</a>
                  <!--end::Link-->
                </li>
                <!--end::آیتم-->
              </ul>
              <!--end::Nav-->
              <!--begin::Tab Content-->
              <div class="tab-content mt-n6">
                <!--begin::Tap pane-->
                <div class="tab-pane fade active show" id="kt_charts_widget_35_tab_content_1">
                  <!--begin::Chart-->
                  <div id="kt_charts_widget_35_chart_1" data-kt-chart-color="primary"
                    class="min-h-auto h-200px ps-3 pe-6"></div>
                  <!--end::Chart-->
                  <!--begin::Table container-->
                  <div class="table-responsive mx-9 mt-n6">
                    <!--begin::Table-->
                    <table class="table align-middle gs-0 gy-4">
                      <!--begin::Table head-->
                      <thead>
                        <tr>
                          <th class="min-w-100px"></th>
                          <th class="min-w-100px text-end pe-0"></th>
                          <th class="text-end min-w-50px"></th>
                        </tr>
                      </thead>
                      <!--end::Table head-->
                      <!--begin::Table body-->
                      <tbody>
                        <tr>
                          <td>
                            <a href="#" class="text-gray-600 fw-bold fs-6">2:30
                              PM</a>
                          </td>
                          <td class="pe-0 text-end">
                            <span class="text-gray-800 fw-bold fs-6 me-1">$2,756.26</span>
                          </td>
                          <td class="pe-0 text-end">
                            <span class="fw-bold fs-6 text-danger">-139.34</span>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <a href="#" class="text-gray-600 fw-bold fs-6">3:10
                              PM</a>
                          </td>
                          <td class="pe-0 text-end">
                            <span class="text-gray-800 fw-bold fs-6 me-1">$3,207.03</span>
                          </td>
                          <td class="pe-0 text-end">
                            <span class="fw-bold fs-6 text-success">+576.24</span>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <a href="#" class="text-gray-600 fw-bold fs-6">3:55
                              PM</a>
                          </td>
                          <td class="pe-0 text-end">
                            <span class="text-gray-800 fw-bold fs-6 me-1">$3,274.94</span>
                          </td>
                          <td class="pe-0 text-end">
                            <span class="fw-bold fs-6 text-success">+124.03</span>
                          </td>
                        </tr>
                      </tbody>
                      <!--end::Table body-->
                    </table>
                    <!--end::Table-->
                  </div>
                  <!--end::Table container-->
                </div>
                <!--end::Tap pane-->
                <!--begin::Tap pane-->
                <div class="tab-pane fade" id="kt_charts_widget_35_tab_content_2">
                  <!--begin::Chart-->
                  <div id="kt_charts_widget_35_chart_2" data-kt-chart-color="primary"
                    class="min-h-auto h-200px ps-3 pe-6"></div>
                  <!--end::Chart-->
                  <!--begin::Table container-->
                  <div class="table-responsive mx-9 mt-n6">
                    <!--begin::Table-->
                    <table class="table align-middle gs-0 gy-4">
                      <!--begin::Table head-->
                      <thead>
                        <tr>
                          <th class="min-w-100px"></th>
                          <th class="min-w-100px text-end pe-0"></th>
                          <th class="text-end min-w-50px"></th>
                        </tr>
                      </thead>
                      <!--end::Table head-->
                      <!--begin::Table body-->
                      <tbody>
                        <tr>
                          <td>
                            <a href="#" class="text-gray-600 fw-bold fs-6">4:30
                              PM</a>
                          </td>
                          <td class="pe-0 text-end">
                            <span class="text-gray-800 fw-bold fs-6 me-1">$2,345.45</span>
                          </td>
                          <td class="pe-0 text-end">
                            <span class="fw-bold fs-6 text-success">+134.02</span>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <a href="#" class="text-gray-600 fw-bold fs-6">11:35
                              AM</a>
                          </td>
                          <td class="pe-0 text-end">
                            <span class="text-gray-800 fw-bold fs-6 me-1">$756.26</span>
                          </td>
                          <td class="pe-0 text-end">
                            <span class="fw-bold fs-6 text-primary">-124.03</span>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <a href="#" class="text-gray-600 fw-bold fs-6">3:30
                              PM</a>
                          </td>
                          <td class="pe-0 text-end">
                            <span class="text-gray-800 fw-bold fs-6 me-1">$1,756.26</span>
                          </td>
                          <td class="pe-0 text-end">
                            <span class="fw-bold fs-6 text-danger">+144.04</span>
                          </td>
                        </tr>
                      </tbody>
                      <!--end::Table body-->
                    </table>
                    <!--end::Table-->
                  </div>
                  <!--end::Table container-->
                </div>
                <!--end::Tap pane-->
                <!--begin::Tap pane-->
                <div class="tab-pane fade" id="kt_charts_widget_35_tab_content_3">
                  <!--begin::Chart-->
                  <div id="kt_charts_widget_35_chart_3" data-kt-chart-color="primary"
                    class="min-h-auto h-200px ps-3 pe-6"></div>
                  <!--end::Chart-->
                  <!--begin::Table container-->
                  <div class="table-responsive mx-9 mt-n6">
                    <!--begin::Table-->
                    <table class="table align-middle gs-0 gy-4">
                      <!--begin::Table head-->
                      <thead>
                        <tr>
                          <th class="min-w-100px"></th>
                          <th class="min-w-100px text-end pe-0"></th>
                          <th class="text-end min-w-50px"></th>
                        </tr>
                      </thead>
                      <!--end::Table head-->
                      <!--begin::Table body-->
                      <tbody>
                        <tr>
                          <td>
                            <a href="#" class="text-gray-600 fw-bold fs-6">3:20
                              AM</a>
                          </td>
                          <td class="pe-0 text-end">
                            <span class="text-gray-800 fw-bold fs-6 me-1">$3,756.26</span>
                          </td>
                          <td class="pe-0 text-end">
                            <span class="fw-bold fs-6 text-primary">+185.03</span>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <a href="#" class="text-gray-600 fw-bold fs-6">12:30
                              AM</a>
                          </td>
                          <td class="pe-0 text-end">
                            <span class="text-gray-800 fw-bold fs-6 me-1">$2,756.26</span>
                          </td>
                          <td class="pe-0 text-end">
                            <span class="fw-bold fs-6 text-danger">+124.03</span>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <a href="#" class="text-gray-600 fw-bold fs-6">4:30
                              PM</a>
                          </td>
                          <td class="pe-0 text-end">
                            <span class="text-gray-800 fw-bold fs-6 me-1">$756.26</span>
                          </td>
                          <td class="pe-0 text-end">
                            <span class="fw-bold fs-6 text-success">-154.03</span>
                          </td>
                        </tr>
                      </tbody>
                      <!--end::Table body-->
                    </table>
                    <!--end::Table-->
                  </div>
                  <!--end::Table container-->
                </div>
                <!--end::Tap pane-->
                <!--begin::Tap pane-->
                <div class="tab-pane fade" id="kt_charts_widget_35_tab_content_4">
                  <!--begin::Chart-->
                  <div id="kt_charts_widget_35_chart_4" data-kt-chart-color="primary"
                    class="min-h-auto h-200px ps-3 pe-6"></div>
                  <!--end::Chart-->
                  <!--begin::Table container-->
                  <div class="table-responsive mx-9 mt-n6">
                    <!--begin::Table-->
                    <table class="table align-middle gs-0 gy-4">
                      <!--begin::Table head-->
                      <thead>
                        <tr>
                          <th class="min-w-100px"></th>
                          <th class="min-w-100px text-end pe-0"></th>
                          <th class="text-end min-w-50px"></th>
                        </tr>
                      </thead>
                      <!--end::Table head-->
                      <!--begin::Table body-->
                      <tbody>
                        <tr>
                          <td>
                            <a href="#" class="text-gray-600 fw-bold fs-6">2:30
                              PM</a>
                          </td>
                          <td class="pe-0 text-end">
                            <span class="text-gray-800 fw-bold fs-6 me-1">$2,756.26</span>
                          </td>
                          <td class="pe-0 text-end">
                            <span class="fw-bold fs-6 text-warning">+124.03</span>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <a href="#" class="text-gray-600 fw-bold fs-6">5:30
                              AM</a>
                          </td>
                          <td class="pe-0 text-end">
                            <span class="text-gray-800 fw-bold fs-6 me-1">$1,756.26</span>
                          </td>
                          <td class="pe-0 text-end">
                            <span class="fw-bold fs-6 text-info">+144.65</span>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <a href="#" class="text-gray-600 fw-bold fs-6">4:30
                              PM</a>
                          </td>
                          <td class="pe-0 text-end">
                            <span class="text-gray-800 fw-bold fs-6 me-1">$2,085.25</span>
                          </td>
                          <td class="pe-0 text-end">
                            <span class="fw-bold fs-6 text-primary">+154.06</span>
                          </td>
                        </tr>
                      </tbody>
                      <!--end::Table body-->
                    </table>
                    <!--end::Table-->
                  </div>
                  <!--end::Table container-->
                </div>
                <!--end::Tap pane-->
                <!--begin::Tap pane-->
                <div class="tab-pane fade" id="kt_charts_widget_35_tab_content_5">
                  <!--begin::Chart-->
                  <div id="kt_charts_widget_35_chart_5" data-kt-chart-color="primary"
                    class="min-h-auto h-200px ps-3 pe-6"></div>
                  <!--end::Chart-->
                  <!--begin::Table container-->
                  <div class="table-responsive mx-9 mt-n6">
                    <!--begin::Table-->
                    <table class="table align-middle gs-0 gy-4">
                      <!--begin::Table head-->
                      <thead>
                        <tr>
                          <th class="min-w-100px"></th>
                          <th class="min-w-100px text-end pe-0"></th>
                          <th class="text-end min-w-50px"></th>
                        </tr>
                      </thead>
                      <!--end::Table head-->
                      <!--begin::Table body-->
                      <tbody>
                        <tr>
                          <td>
                            <a href="#" class="text-gray-600 fw-bold fs-6">2:30
                              PM</a>
                          </td>
                          <td class="pe-0 text-end">
                            <span class="text-gray-800 fw-bold fs-6 me-1">$2,045.04</span>
                          </td>
                          <td class="pe-0 text-end">
                            <span class="fw-bold fs-6 text-warning">+114.03</span>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <a href="#" class="text-gray-600 fw-bold fs-6">3:30
                              AM</a>
                          </td>
                          <td class="pe-0 text-end">
                            <span class="text-gray-800 fw-bold fs-6 me-1">$756.26</span>
                          </td>
                          <td class="pe-0 text-end">
                            <span class="fw-bold fs-6 text-primary">-124.03</span>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <a href="#" class="text-gray-600 fw-bold fs-6">10:30
                              PM</a>
                          </td>
                          <td class="pe-0 text-end">
                            <span class="text-gray-800 fw-bold fs-6 me-1">$1.756.26</span>
                          </td>
                          <td class="pe-0 text-end">
                            <span class="fw-bold fs-6 text-info">+165.86</span>
                          </td>
                        </tr>
                      </tbody>
                      <!--end::Table body-->
                    </table>
                    <!--end::Table-->
                  </div>
                  <!--end::Table container-->
                </div>
                <!--end::Tap pane-->
              </div>
              <!--end::Tab Content-->
            </div>
            <!--end::Body-->
          </div>
          <!--end::Chart Widget 35-->
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-xl-8">
          <!--begin::Table widget 14-->
          <div class="card card-flush h-md-100">
            <!--begin::Header-->
            <div class="card-header pt-7">
              <!--begin::Title-->
              <h3 class="card-title align-items-start flex-column">
                <span class="card-label fw-bold text-gray-800">وضعیت پروژه ها</span>
                <span class="text-gray-400 mt-1 fw-semibold fs-6">37 دقیقه قبل اخرین
                  بروزرسانی</span>
              </h3>
              <!--end::Title-->
              <!--begin::Toolbar-->
              <div class="card-toolbar">
                <a href="../../demo1/dist/apps/ecommerce/catalog/add-product.html"
                  class="btn btn-sm btn-light">تاریخچه</a>
              </div>
              <!--end::Toolbar-->
            </div>
            <!--end::Header-->
            <!--begin::Body-->
            <div class="card-body pt-6">
              <!--begin::Table container-->
              <div class="table-responsive">
                <!--begin::Table-->
                <table class="table table-row-dashed align-middle gs-0 gy-3 my-0">
                  <!--begin::Table head-->
                  <thead>
                    <tr class="fs-7 fw-bold text-gray-400 border-bottom-0">
                      <th class="p-0 pb-3 min-w-175px text-start">مورد</th>
                      <th class="p-0 pb-3 min-w-100px text-end">بودجه</th>
                      <th class="p-0 pb-3 min-w-100px text-end">پیشرفت</th>
                      <th class="p-0 pb-3 min-w-175px text-end pe-12">وضعیت
                      </th>
                      <th class="p-0 pb-3 w-125px text-end pe-7">چارت</th>
                      <th class="p-0 pb-3 w-50px text-end">نمایش</th>
                    </tr>
                  </thead>
                  <!--end::Table head-->
                  <!--begin::Table body-->
                  <tbody>
                    <tr>
                      <td>
                        <div class="d-flex align-items-center">
                          <div class="symbol symbol-50px me-3">
                            <img src="../assets/media/stock/600x600/img-49.jpg" class="" alt="" />
                          </div>
                          <div class="d-flex justify-content-start flex-column">
                            <a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">اپلیکیشن</a>
                            <span class="text-gray-400 fw-semibold d-block fs-7">هنری</span>
                          </div>
                        </div>
                      </td>
                      <td class="text-end pe-0">
                        <span class="text-gray-600 fw-bold fs-6">$32,400</span>
                      </td>
                      <td class="text-end pe-0">
                        <!--begin::Tags-->
                        <span class="badge badge-light-success fs-base">
                          <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1">
                            <span class="path1"></span>
                            <span class="path2"></span>
                          </i>9.2%</span>
                        <!--end::Tags-->
                      </td>
                      <td class="text-end pe-12">
                        <span class="badge py-3 px-4 fs-7 badge-light-primary">در
                          حال پردازش</span>
                      </td>
                      <td class="text-end pe-0">
                        <div id="kt_table_widget_14_chart_1" class="h-50px mt-n8 pe-7" data-kt-chart-color="success">
                        </div>
                      </td>
                      <td class="text-end">
                        <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                          <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex align-items-center">
                          <div class="symbol symbol-50px me-3">
                            <img src="../assets/media/stock/600x600/img-40.jpg" class="" alt="" />
                          </div>
                          <div class="d-flex justify-content-start flex-column">
                            <a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">رنگارنگ</a>
                            <span class="text-gray-400 fw-semibold d-block fs-7">استر
                              هوارد</span>
                          </div>
                        </div>
                      </td>
                      <td class="text-end pe-0">
                        <span class="text-gray-600 fw-bold fs-6">$256,910</span>
                      </td>
                      <td class="text-end pe-0">
                        <!--begin::Tags-->
                        <span class="badge badge-light-danger fs-base">
                          <i class="ki-duotone ki-arrow-down fs-5 text-danger ms-n1">
                            <span class="path1"></span>
                            <span class="path2"></span>
                          </i>0.4%</span>
                        <!--end::Tags-->
                      </td>
                      <td class="text-end pe-12">
                        <span class="badge py-3 px-4 fs-7 badge-light-warning">در
                          انتظار</span>
                      </td>
                      <td class="text-end pe-0">
                        <div id="kt_table_widget_14_chart_2" class="h-50px mt-n8 pe-7" data-kt-chart-color="danger">
                        </div>
                      </td>
                      <td class="text-end">
                        <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                          <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex align-items-center">
                          <div class="symbol symbol-50px me-3">
                            <img src="../assets/media/stock/600x600/img-39.jpg" class="" alt="" />
                          </div>
                          <div class="d-flex justify-content-start flex-column">
                            <a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">مدیریت
                              محتوا</a>
                            <span class="text-gray-400 fw-semibold d-block fs-7">ویلسون</span>
                          </div>
                        </div>
                      </td>
                      <td class="text-end pe-0">
                        <span class="text-gray-600 fw-bold fs-6">$8,220</span>
                      </td>
                      <td class="text-end pe-0">
                        <!--begin::Tags-->
                        <span class="badge badge-light-success fs-base">
                          <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1">
                            <span class="path1"></span>
                            <span class="path2"></span>
                          </i>9.2%</span>
                        <!--end::Tags-->
                      </td>
                      <td class="text-end pe-12">
                        <span class="badge py-3 px-4 fs-7 badge-light-primary">در
                          حال پردازش</span>
                      </td>
                      <td class="text-end pe-0">
                        <div id="kt_table_widget_14_chart_3" class="h-50px mt-n8 pe-7" data-kt-chart-color="success">
                        </div>
                      </td>
                      <td class="text-end">
                        <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                          <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex align-items-center">
                          <div class="symbol symbol-50px me-3">
                            <img src="../assets/media/stock/600x600/img-47.jpg" class="" alt="" />
                          </div>
                          <div class="d-flex justify-content-start flex-column">
                            <a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">قدرت
                            </a>
                            <span class="text-gray-400 fw-semibold d-block fs-7">کامران</span>
                          </div>
                        </div>
                      </td>
                      <td class="text-end pe-0">
                        <span class="text-gray-600 fw-bold fs-6">$74,000</span>
                      </td>
                      <td class="text-end pe-0">
                        <!--begin::Tags-->
                        <span class="badge badge-light-success fs-base">
                          <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1">
                            <span class="path1"></span>
                            <span class="path2"></span>
                          </i>9.2%</span>
                        <!--end::Tags-->
                      </td>
                      <td class="text-end pe-12">
                        <span class="badge py-3 px-4 fs-7 badge-light-success">تکمیل
                          شده</span>
                      </td>
                      <td class="text-end pe-0">
                        <div id="kt_table_widget_14_chart_4" class="h-50px mt-n8 pe-7" data-kt-chart-color="success">
                        </div>
                      </td>
                      <td class="text-end">
                        <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                          <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="d-flex align-items-center">
                          <div class="symbol symbol-50px me-3">
                            <img src="../assets/media/stock/600x600/img-48.jpg" class="" alt="" />
                          </div>
                          <div class="d-flex justify-content-start flex-column">
                            <a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">9درجه</a>
                            <span class="text-gray-400 fw-semibold d-block fs-7">سامان</span>
                          </div>
                        </div>
                      </td>
                      <td class="text-end pe-0">
                        <span class="text-gray-600 fw-bold fs-6">$183,300</span>
                      </td>
                      <td class="text-end pe-0">
                        <!--begin::Tags-->
                        <span class="badge badge-light-danger fs-base">
                          <i class="ki-duotone ki-arrow-down fs-5 text-danger ms-n1">
                            <span class="path1"></span>
                            <span class="path2"></span>
                          </i>0.4%</span>
                        <!--end::Tags-->
                      </td>
                      <td class="text-end pe-12">
                        <span class="badge py-3 px-4 fs-7 badge-light-primary">در
                          حال پردازش</span>
                      </td>
                      <td class="text-end pe-0">
                        <div id="kt_table_widget_14_chart_5" class="h-50px mt-n8 pe-7" data-kt-chart-color="danger">
                        </div>
                      </td>
                      <td class="text-end">
                        <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                          <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                        </a>
                      </td>
                    </tr>
                  </tbody>
                  <!--end::Table body-->
                </table>
              </div>
              <!--end::Table-->
            </div>
            <!--end: کارت Body-->
          </div>
          <!--end::Table widget 14-->
        </div>
        <!--end::Col-->
      </div>
      <!--end::Row-->
      <!--begin::Row-->
      <div class="row gx-5 gx-xl-10">
        <!--begin::Col-->
        <div class="col-xl-4">
          <!--begin::Chart widget 31-->
          <div class="card card-flush h-xl-100">
            <!--begin::Header-->
            <div class="card-header pt-7 mb-7">
              <!--begin::Title-->
              <h3 class="card-title align-items-start flex-column">
                <span class="card-label fw-bold text-gray-800">آمار</span>
                <span class="text-gray-400 mt-1 fw-semibold fs-6">8k بازدید کننده
                  اجتماعی</span>
              </h3>
              <!--end::Title-->
              <!--begin::Toolbar-->
              <div class="card-toolbar">
                <a href="../../demo1/dist/apps/ecommerce/catalog/add-product.html"
                  class="btn btn-sm btn-light">گزارش</a>
              </div>
              <!--end::Toolbar-->
            </div>
            <!--end::Header-->
            <!--begin::Body-->
            <div class="card-body d-flex align-items-end pt-0">
              <!--begin::Chart-->
              <div id="kt_charts_widget_31_chart" class="w-100 h-300px"></div>
              <!--end::Chart-->
            </div>
            <!--end::Body-->
          </div>
          <!--end::Chart widget 31-->
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-xl-8">
          <!--begin::Chart widget 24-->
          <div class="card card-flush overflow-hidden h-xl-100">
            <!--begin::Header-->
            <div class="card-header py-5">
              <!--begin::Title-->
              <h3 class="card-title align-items-start flex-column">
                <span class="card-label fw-bold text-dark">منابع</span>
                <span class="text-gray-400 mt-1 fw-semibold fs-6">گزارشات </span>
              </h3>
              <!--end::Title-->
              <!--begin::Toolbar-->
              <div class="card-toolbar">
                <!--begin::Menu-->
                <button class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end"
                  data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
                  <i class="ki-duotone ki-dots-square fs-1">
                    <span class="path1"></span>
                    <span class="path2"></span>
                    <span class="path3"></span>
                    <span class="path4"></span>
                  </i>
                </button>
                <!--begin::Menu 2-->
                <div
                  class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px"
                  data-kt-menu="true">
                  <!--begin::Menu item-->
                  <div class="menu-item px-3">
                    <div class="menu-content fs-6 text-dark fw-bold px-3 py-4">
                      عملیات سریع</div>
                  </div>
                  <!--end::Menu item-->
                  <!--begin::Menu separator-->
                  <div class="separator mb-3 opacity-75"></div>
                  <!--end::Menu separator-->
                  <!--begin::Menu item-->
                  <div class="menu-item px-3">
                    <a href="#" class="menu-link px-3">تیکت جدید</a>
                  </div>
                  <!--end::Menu item-->
                  <!--begin::Menu item-->
                  <div class="menu-item px-3">
                    <a href="#" class="menu-link px-3">جدید مشتری</a>
                  </div>
                  <!--end::Menu item-->
                  <!--begin::Menu item-->
                  <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="left-start">
                    <!--begin::Menu item-->
                    <a href="#" class="menu-link px-3">
                      <span class="menu-title">گروه جدید</span>
                      <span class="menu-arrow"></span>
                    </a>
                    <!--end::Menu item-->
                    <!--begin::Menu sub-->
                    <div class="menu-sub menu-sub-dropdown w-175px py-4">
                      <!--begin::Menu item-->
                      <div class="menu-item px-3">
                        <a href="#" class="menu-link px-3">گروه مدیر</a>
                      </div>
                      <!--end::Menu item-->
                      <!--begin::Menu item-->
                      <div class="menu-item px-3">
                        <a href="#" class="menu-link px-3">گروه کارکنان</a>
                      </div>
                      <!--end::Menu item-->
                      <!--begin::Menu item-->
                      <div class="menu-item px-3">
                        <a href="#" class="menu-link px-3">گروه عضوها</a>
                      </div>
                      <!--end::Menu item-->
                    </div>
                    <!--end::Menu sub-->
                  </div>
                  <!--end::Menu item-->
                  <!--begin::Menu item-->
                  <div class="menu-item px-3">
                    <a href="#" class="menu-link px-3">مخاطبین جدید</a>
                  </div>
                  <!--end::Menu item-->
                  <!--begin::Menu separator-->
                  <div class="separator mt-3 opacity-75"></div>
                  <!--end::Menu separator-->
                  <!--begin::Menu item-->
                  <div class="menu-item px-3">
                    <div class="menu-content px-3 py-3">
                      <a class="btn btn-primary btn-sm px-4" href="#">گزارش
                        ایجاد کنید</a>
                    </div>
                  </div>
                  <!--end::Menu item-->
                </div>
                <!--end::Menu 2-->
                <!--end::Menu-->
              </div>
              <!--end::Toolbar-->
            </div>
            <!--end::Header-->
            <!--begin::کارت body-->
            <div class="card-body pt-0">
              <!--begin::Chart-->
              <div id="kt_charts_widget_24" class="min-h-auto" style="height: 300px">
              </div>
              <!--end::Chart-->
            </div>
            <!--end::کارت body-->
          </div>
          <!--end::Chart widget 24-->
        </div>
        <!--end::Col-->
      </div>
      <!--end::Row-->
    </div>
    <!--end::Content container-->
  </div>
  <!--end::Content-->
</div>
<!--end::Content wrapper-->
<?php include ('components/footer.php') ?>