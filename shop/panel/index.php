<?php
require '../includes/c-init.php';
if (!canlogin()) {
  redirect(c_url('/login.php'));
}
$user = getCurrentUserInfo();
?>
<!DOCTYPE html>
<!--
نویسنده: ساتراس وب
محصولات نام: مترونیک
محصولات Version: 8.1.8
خرید: https://1.envato.market/EA4JP
وب سایت: http://www.keenthemes.com
تماس با ما: support@keenthemes.com
دنبال کردن: www.twitter.com/keenthemes
دریبل: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
لاینسس شده: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html direction="rtl" dir="rtl" style="direction: rtl">
<!--begin::Head-->

<head>
  <base href="" />
  <title>قالب مدیریتی مترونیک با 50 دمو جذاب</title>
  <meta charset="utf-8" />
  <meta name="description"
    content="The most advanced Bootstrap 5 Admin Theme with 40 unique prebuilt layouts on Themeforest trusted by 100,000 beginners و professionals. Multi-demo, حالت تیره, RTL support و complete React, Angular, Vue, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel versions. Grab your copy now و get life-time updates for free." />
  <meta name="keywords"
    content="metronic, bootstrap, bootstrap 5, angular, VueJs, React, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel starter kits, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta property="og:locale" content="en_US" />
  <meta property="og:type" content="article" />
  <meta property="og:title"
    content="مترونیک - پنل ادمین بوت استراپ Template, HTML, VueJS, React, Angular. Laravel, Asp.Net Core, روبی روی ریل, Spring Boot, Blazor, Django, Express.js, Node.js, Flask Admin داشبورد Theme & Template" />
  <meta property="og:url" content="https://keenthemes.com/metronic" />
  <meta property="og:site_name" content="ساتراس وب | مترونیک" />
  <link rel="canonical" href="Https://preview.keenthemes.com/metronic8" />
  <link rel="shortcut icon" href="../assets/media/logos/favicon.ico" />
  <!--begin::Fonts(mوatory for all pages)-->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
  <!--end::Fonts-->
  <!--begin::Vendor Stylesheets(used for this page only)-->
  <link href="../assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
  <link href="../assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
  <!--end::Vendor Stylesheets-->
  <!--begin::Global Stylesheets Bundle(mوatory for all pages)-->
  <link href="../assets/plugins/global/plugins.bundle.rtl.css" rel="stylesheet" type="text/css" />
  <link href="../assets/css/style.bundle.rtl.css" rel="stylesheet" type="text/css" />
  <!--end::Global Stylesheets Bundle-->
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_app_body" data-kt-app-layout="dark-sidebar" data-kt-app-header-fixed="true"
  data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="true"
  data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true"
  data-kt-app-toolbar-enabled="true" class="app-default">
  <!--begin::Theme mode setup on page load-->
  <script>var defaultThemeMode = "light"; var themeMode; if (document.documentElement) { if (document.documentElement.hasAttribute("data-bs-theme-mode")) { themeMode = document.documentElement.getAttribute("data-bs-theme-mode"); } else { if (localStorage.getآیتم("data-bs-theme") !== null) { themeMode = localStorage.getآیتم("data-bs-theme"); } else { themeMode = defaultThemeMode; } } if (themeMode === "system") { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } document.documentElement.setAttribute("data-bs-theme", themeMode); }</script>
    <!--end::Theme mode setup on page load-->
    <!--begin::اپلیکیشن-->
    <div class="d-flex flex-column flex-root app-root" id="kt_app_root">
        <!--begin::Page-->
        <div class="app-page flex-column flex-column-fluid" id="kt_app_page">
            <!--begin::Header-->
            <?php include ('../components/header.php'); ?>
            <!--end::Header-->
            <!--begin::Wrapper-->
            <div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
                <!--begin::Sidebar-->
                <div id="kt_app_sidebar" class="app-sidebar flex-column" data-kt-drawer="true"
                    data-kt-drawer-name="app-sidebar" data-kt-drawer-activate="{default: true, lg: false}"
                    data-kt-drawer-overlay="true" data-kt-drawer-width="225px" data-kt-drawer-direction="start"
                    data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">
                    <!--begin::Logo-->
                    <div class="app-sidebar-logo px-6" id="kt_app_sidebar_logo">
                        <!--begin::Logo image-->
                        <a href="../../demo1/dist/index.html">
                            <img alt="Logo" src="../assets/media/logos/default-dark.svg"
                                class="h-25px app-sidebar-logo-default" />
                            <img alt="Logo" src="../assets/media/logos/default-small.svg"
                                class="h-20px app-sidebar-logo-minimize" />
                        </a>
                        <!--end::Logo image-->
                        <!--begin::Sidebar toggle-->
                        <!--begin::به حداقل رساندن sidebar setup:
            if (isset($_COموفقIE["sidebar_minimize_state"]) && $_COموفقIE["sidebar_minimize_state"] === "on") {
                1. "src/js/layout/sidebar.js" adds "sidebar_minimize_state" cookie value to save the sidebar minimize state.
                2. Set data-kt-app-sidebar-minimize="on" attribute for body tag.
                3. Set data-kt-toggle-state="active" attribute to the toggle element with "kt_app_sidebar_toggle" id.
                4. Add "active" class to to sidebar toggle element with "kt_app_sidebar_toggle" id.
            }
        -->
                        <div id="kt_app_sidebar_toggle"
                            class="app-sidebar-toggle btn btn-icon btn-shadow btn-sm btn-color-muted btn-active-color-primary body-bg h-30px w-30px position-absolute top-50 start-100 translate-middle rotate"
                            data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body"
                            data-kt-toggle-name="app-sidebar-minimize">
                            <i class="ki-duotone ki-double-left fs-2 rotate-180">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                        </div>
                        <!--end::Sidebar toggle-->
                    </div>
                    <!--end::Logo-->
                    <!--begin::sidebar menu-->
                    <div class="app-sidebar-menu overflow-hidden flex-column-fluid">
                        <!--begin::Menu wrapper-->
                        <div id="kt_app_sidebar_menu_wrapper" class="app-sidebar-wrapper hover-scroll-overlay-y my-5"
                            data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto"
                            data-kt-scroll-dependencies="#kt_app_sidebar_logo, #kt_app_sidebar_footer"
                            data-kt-scroll-wrappers="#kt_app_sidebar_menu" data-kt-scroll-offset="5px"
                            data-kt-scroll-save-state="true">
                            <!--begin::Menu-->
                            <div class="menu menu-column menu-rounded menu-sub-indention px-3" id="#kt_app_sidebar_menu"
                                data-kt-menu="true" data-kt-menu-expو="false">
                                <!--begin:Menu item-->
                                <div data-kt-menu-trigger="click" class="menu-item here show menu-accordion">
                                    <!--begin:Menu link-->
                                    <span class="menu-link">
                                        <span class="menu-icon">
                                            <i class="ki-duotone ki-element-11 fs-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                                <span class="path4"></span>
                                            </i>
                                        </span>
                                        <span class="menu-title">داشبورد ها</span>
                                        <span class="menu-arrow"></span>
                                    </span>
                                    <!--end:Menu link-->
                                    <!--begin:Menu sub-->
                                    <div class="menu-sub menu-sub-accordion">
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link active" href="../../demo1/dist/index.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">پیش فرض</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo1/dist/dashboards/ecommerce.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">فروشگاه</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo1/dist/dashboards/projects.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">پروژه ها</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo1/dist/dashboards/online-courses.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">آنلاین دوره ها</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo1/dist/dashboards/marketing.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">بازاریابی</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <div class="menu-inner flex-column collapse"
                                            id="kt_app_sidebar_menu_dashboards_collapse">
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link" href="../../demo1/dist/dashboards/bidding.html">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">مناقصه</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link" href="../../demo1/dist/dashboards/pos.html">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">سیستم پوز</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link"
                                                    href="../../demo1/dist/dashboards/call-center.html">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">مرکز تماس</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link" href="../../demo1/dist/dashboards/logistics.html">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">حمل و نقل</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link"
                                                    href="../../demo1/dist/dashboards/website-analytics.html">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">وب سایت آنالیتیکس</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link"
                                                    href="../../demo1/dist/dashboards/finance-performance.html">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">دارایی، مالیه، سرمایه گذاری کارایی</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link"
                                                    href="../../demo1/dist/dashboards/store-analytics.html">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">فروشگاه آنالیتیکس</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link" href="../../demo1/dist/dashboards/social.html">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">شبکه اجتماعی</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link" href="../../demo1/dist/dashboards/delivery.html">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">تحویل</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link" href="../../demo1/dist/dashboards/crypto.html">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">کریپتو</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link" href="../../demo1/dist/dashboards/school.html">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">مدرسه</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link" href="../../demo1/dist/dashboards/podcast.html">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">پادکست</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                            <!--begin:Menu item-->
                                            <div class="menu-item">
                                                <!--begin:Menu link-->
                                                <a class="menu-link" href="../../demo1/dist/landing.html">
                                                    <span class="menu-bullet">
                                                        <span class="bullet bullet-dot"></span>
                                                    </span>
                                                    <span class="menu-title">صفحه فرود</span>
                                                </a>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                        </div>
                                        <div class="menu-item">
                                            <div class="menu-content">
                                                <a class="btn btn-flex btn-color-primary d-flex flex-stack fs-base p-0 ms-2 mb-2 toggle collapsible collapsed"
                                                    data-bs-toggle="collapse"
                                                    href="#kt_app_sidebar_menu_dashboards_collapse"
                                                    data-kt-toggle-text="بستن">
                                                    <span data-kt-toggle-text-target="true">مشاهده بیشتر</span>
                                                    <i class="ki-duotone ki-minus-square toggle-on fs-2 me-0">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>
                                                    <i class="ki-duotone ki-plus-square toggle-off fs-2 me-0">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                        <span class="path3"></span>
                                                    </i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end:Menu sub-->
                                </div>
                                <!--end:Menu item-->
                                <!--begin:Menu item-->
                                <div class="menu-item pt-5">
                                    <!--begin:Menu content-->
                                    <div class="menu-content">
                                        <span class="menu-heading fw-bold text-uppercase fs-7">صفحات</span>
                                    </div>
                                    <!--end:Menu content-->
                                </div>
                                <!--end:Menu item-->
                                <!--begin:Menu item-->
                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                    <!--begin:Menu link-->
                                    <span class="menu-link">
                                        <span class="menu-icon">
                                            <i class="ki-duotone ki-address-book fs-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                            </i>
                                        </span>
                                        <span class="menu-title">کاربر پروفایل</span>
                                        <span class="menu-arrow"></span>
                                    </span>
                                    <!--end:Menu link-->
                                    <!--begin:Menu sub-->
                                    <div class="menu-sub menu-sub-accordion">
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link"
                                                href="../../demo1/dist/pages/user-profile/overview.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">بررسی اجمالی</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link"
                                                href="../../demo1/dist/pages/user-profile/projects.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">پروژه ها</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link"
                                                href="../../demo1/dist/pages/user-profile/campaigns.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">کمپین ها</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link"
                                                href="../../demo1/dist/pages/user-profile/documents.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">اسناد</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link"
                                                href="../../demo1/dist/pages/user-profile/followers.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">فالوورها</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link"
                                                href="../../demo1/dist/pages/user-profile/activity.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">فعالیت</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                    </div>
                                    <!--end:Menu sub-->
                                </div>
                                <!--end:Menu item-->
                                <!--begin:Menu item-->
                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                    <!--begin:Menu link-->
                                    <span class="menu-link">
                                        <span class="menu-icon">
                                            <i class="ki-duotone ki-element-plus fs-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                                <span class="path4"></span>
                                                <span class="path5"></span>
                                            </i>
                                        </span>
                                        <span class="menu-title">اکانت</span>
                                        <span class="menu-arrow"></span>
                                    </span>
                                    <!--end:Menu link-->
                                    <!--begin:Menu sub-->
                                    <div class="menu-sub menu-sub-accordion">
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo1/dist/account/overview.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">بررسی اجمالی</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo1/dist/account/settings.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">تنظیمات</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo1/dist/account/security.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">امنیت</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo1/dist/account/activity.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">فعالیت</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo1/dist/account/billing.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">صورتحساب</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo1/dist/account/statements.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">بیانه ها</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo1/dist/account/referrals.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">مراجعات</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo1/dist/account/api-keys.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">کلید ای پی ای</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo1/dist/account/logs.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">گزارش</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                    </div>
                                    <!--end:Menu sub-->
                                </div>
                                <!--end:Menu item-->
                                <!--begin:Menu item-->
                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                    <!--begin:Menu link-->
                                    <span class="menu-link">
                                        <span class="menu-icon">
                                            <i class="ki-duotone ki-user fs-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </span>
                                        <span class="menu-title">احراز هویت</span>
                                        <span class="menu-arrow"></span>
                                    </span>
                                    <!--end:Menu link-->
                                    <!--begin:Menu sub-->
                                    <div class="menu-sub menu-sub-accordion">
                                        <!--begin:Menu item-->
                                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                            <!--begin:Menu link-->
                                            <span class="menu-link">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">شرکت قالب بندی</span>
                                                <span class="menu-arrow"></span>
                                            </span>
                                            <!--end:Menu link-->
                                            <!--begin:Menu sub-->
                                            <div class="menu-sub menu-sub-accordion menu-active-bg">
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link"
                                                        href="../../demo1/dist/authentication/layouts/corporate/ورود.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">ورود</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link"
                                                        href="../../demo1/dist/authentication/layouts/corporate/signup.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">ثبت نام</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link"
                                                        href="../../demo1/dist/authentication/layouts/corporate/دو عاملی.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">دو عاملی</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link"
                                                        href="../../demo1/dist/authentication/layouts/corporate/reset-password.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">ریست کلمه عبور</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link"
                                                        href="../../demo1/dist/authentication/layouts/corporate/new-password.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">کلمه عبور جدید</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                            </div>
                                            <!--end:Menu sub-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                            <!--begin:Menu link-->
                                            <span class="menu-link">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">قالب بندی</span>
                                                <span class="menu-arrow"></span>
                                            </span>
                                            <!--end:Menu link-->
                                            <!--begin:Menu sub-->
                                            <div class="menu-sub menu-sub-accordion menu-active-bg">
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link"
                                                        href="../../demo1/dist/authentication/layouts/overlay/ورود.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">ورود</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link"
                                                        href="../../demo1/dist/authentication/layouts/overlay/signup.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">ثبت نام</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link"
                                                        href="../../demo1/dist/authentication/layouts/overlay/دو عاملی.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">دو عاملی</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link"
                                                        href="../../demo1/dist/authentication/layouts/overlay/reset-password.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">ریست کلمه عبور</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link"
                                                        href="../../demo1/dist/authentication/layouts/overlay/new-password.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">کلمه عبور جدید</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                            </div>
                                            <!--end:Menu sub-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                            <!--begin:Menu link-->
                                            <span class="menu-link">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">قالب بندی خلاقانه</span>
                                                <span class="menu-arrow"></span>
                                            </span>
                                            <!--end:Menu link-->
                                            <!--begin:Menu sub-->
                                            <div class="menu-sub menu-sub-accordion menu-active-bg">
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link"
                                                        href="../../demo1/dist/authentication/layouts/creative/ورود.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">ورود</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link"
                                                        href="../../demo1/dist/authentication/layouts/creative/signup.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">ثبت نام</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link"
                                                        href="../../demo1/dist/authentication/layouts/creative/دو عاملی.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">دو عاملی</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link"
                                                        href="../../demo1/dist/authentication/layouts/creative/reset-password.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">ریست کلمه عبور</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link"
                                                        href="../../demo1/dist/authentication/layouts/creative/new-password.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">کلمه عبور جدید</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                            </div>
                                            <!--end:Menu sub-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                            <!--begin:Menu link-->
                                            <span class="menu-link">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">قالب بندی فانتزی</span>
                                                <span class="menu-arrow"></span>
                                            </span>
                                            <!--end:Menu link-->
                                            <!--begin:Menu sub-->
                                            <div class="menu-sub menu-sub-accordion menu-active-bg">
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link"
                                                        href="../../demo1/dist/authentication/layouts/fancy/ورود.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">ورود</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link"
                                                        href="../../demo1/dist/authentication/layouts/fancy/signup.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">ثبت نام</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link"
                                                        href="../../demo1/dist/authentication/layouts/fancy/دو عاملی.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">دو عاملی</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link"
                                                        href="../../demo1/dist/authentication/layouts/fancy/reset-password.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">ریست کلمه عبور</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link"
                                                        href="../../demo1/dist/authentication/layouts/fancy/new-password.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">کلمه عبور جدید</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                            </div>
                                            <!--end:Menu sub-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                            <!--begin:Menu link-->
                                            <span class="menu-link">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">قالب های ایمیل</span>
                                                <span class="menu-arrow"></span>
                                            </span>
                                            <!--end:Menu link-->
                                            <!--begin:Menu sub-->
                                            <div class="menu-sub menu-sub-accordion menu-active-bg">
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link"
                                                        href="../../demo1/dist/authentication/email/welcome-message.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">پیام خوش امد گویی</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link"
                                                        href="../../demo1/dist/authentication/email/reset-password.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">ریست کلمه عبور</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link"
                                                        href="../../demo1/dist/authentication/email/subscription-confirmed.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">اشتراک تایید شده</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link"
                                                        href="../../demo1/dist/authentication/email/card-declined.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">کارت اعتباری رد شده</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link"
                                                        href="../../demo1/dist/authentication/email/promo-1.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">حرفه ای 1</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link"
                                                        href="../../demo1/dist/authentication/email/promo-2.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">حرفه ای 2</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link"
                                                        href="../../demo1/dist/authentication/email/promo-3.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">حرفه ای 3</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                            </div>
                                            <!--end:Menu sub-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link"
                                                href="../../demo1/dist/authentication/extended/multi-steps-signup.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">ثبت نام چند مرحله ای</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link"
                                                href="../../demo1/dist/authentication/general/welcome.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">پیام خوش امد گویی</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link"
                                                href="../../demo1/dist/authentication/general/verify-email.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">تایید ایمیل</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link"
                                                href="../../demo1/dist/authentication/general/coming-soon.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">بزودی</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link"
                                                href="../../demo1/dist/authentication/general/password-confirmation.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">تایید کلمه عبور</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link"
                                                href="../../demo1/dist/authentication/general/account-deactivated.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">اکانت غیرفعال</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link"
                                                href="../../demo1/dist/authentication/general/error-404.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">خطایی 404</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link"
                                                href="../../demo1/dist/authentication/general/error-500.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">خطایی 500</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                    </div>
                                    <!--end:Menu sub-->
                                </div>
                                <!--end:Menu item-->
                                <!--begin:Menu item-->
                                <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                                    data-kt-menu-placement="left-start"
                                    class="menu-item menu-lg-down-accordion menu-sub-lg-down-indention">
                                    <!--begin:Menu link-->
                                    <span class="menu-link">
                                        <span class="menu-icon">
                                            <i class="ki-duotone ki-file fs-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </span>
                                        <span class="menu-title">شرکت</span>
                                        <span class="menu-arrow"></span>
                                    </span>
                                    <!--end:Menu link-->
                                    <!--begin:Menu sub-->
                                    <div
                                        class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown px-2 py-4 w-200px mh-75 overflow-auto">
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo1/dist/pages/about.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">درباره ی ما</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo1/dist/pages/team.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">تیم ما</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo1/dist/pages/contact.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">تماس با ما</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo1/dist/pages/licenses.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">مجوزها</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo1/dist/pages/sitemap.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">نقشه سایت</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                    </div>
                                    <!--end:Menu sub-->
                                </div>
                                <!--end:Menu item-->
                                <!--begin:Menu item-->
                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                    <!--begin:Menu link-->
                                    <span class="menu-link">
                                        <span class="menu-icon">
                                            <i class="ki-duotone ki-abstract-39 fs-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </span>
                                        <span class="menu-title">شبکه اجتماعی</span>
                                        <span class="menu-arrow"></span>
                                    </span>
                                    <!--end:Menu link-->
                                    <!--begin:Menu sub-->
                                    <div class="menu-sub menu-sub-accordion">
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo1/dist/pages/social/feeds.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">تغذیه</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo1/dist/pages/social/activity.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">فعالیت</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo1/dist/pages/social/followers.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">فالوورها</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo1/dist/pages/social/settings.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">تنظیمات</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                    </div>
                                    <!--end:Menu sub-->
                                </div>
                                <!--end:Menu item-->
                                <!--begin:Menu item-->
                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                    <!--begin:Menu link-->
                                    <span class="menu-link">
                                        <span class="menu-icon">
                                            <i class="ki-duotone ki-bank fs-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </span>
                                        <span class="menu-title">مقالات</span>
                                        <span class="menu-arrow"></span>
                                    </span>
                                    <!--end:Menu link-->
                                    <!--begin:Menu sub-->
                                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo1/dist/pages/blog/home.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">مقالات خانه</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo1/dist/pages/blog/post.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">صفحه تکی مقالات</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                    </div>
                                    <!--end:Menu sub-->
                                </div>
                                <!--end:Menu item-->
                                <!--begin:Menu item-->
                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                    <!--begin:Menu link-->
                                    <span class="menu-link">
                                        <span class="menu-icon">
                                            <i class="ki-duotone ki-chart-pie-3 fs-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                            </i>
                                        </span>
                                        <span class="menu-title">سوالات متداول</span>
                                        <span class="menu-arrow"></span>
                                    </span>
                                    <!--end:Menu link-->
                                    <!--begin:Menu sub-->
                                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo1/dist/pages/faq/classic.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">سوالات متداول کلاسیک</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo1/dist/pages/faq/extended.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">سوالات متداول تمدید شده</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                    </div>
                                    <!--end:Menu sub-->
                                </div>
                                <!--end:Menu item-->
                                <!--begin:Menu item-->
                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                    <!--begin:Menu link-->
                                    <span class="menu-link">
                                        <span class="menu-icon">
                                            <i class="ki-duotone ki-bucket fs-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                                <span class="path4"></span>
                                            </i>
                                        </span>
                                        <span class="menu-title">قیمت گذاری</span>
                                        <span class="menu-arrow"></span>
                                    </span>
                                    <!--end:Menu link-->
                                    <!--begin:Menu sub-->
                                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo1/dist/pages/pricing/column.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">قیمت گذاری ستونی</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo1/dist/pages/pricing/table.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">جدول قیمت گذاری</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                    </div>
                                    <!--end:Menu sub-->
                                </div>
                                <!--end:Menu item-->
                                <!--begin:Menu item-->
                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                    <!--begin:Menu link-->
                                    <span class="menu-link">
                                        <span class="menu-icon">
                                            <i class="ki-duotone ki-call fs-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                                <span class="path4"></span>
                                                <span class="path5"></span>
                                                <span class="path6"></span>
                                                <span class="path7"></span>
                                                <span class="path8"></span>
                                            </i>
                                        </span>
                                        <span class="menu-title">مشاغل</span>
                                        <span class="menu-arrow"></span>
                                    </span>
                                    <!--end:Menu link-->
                                    <!--begin:Menu sub-->
                                    <div class="menu-sub menu-sub-accordion">
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo1/dist/pages/careers/list.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">لیست مشاغل</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo1/dist/pages/careers/apply.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">مشاغل تایید</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                    </div>
                                    <!--end:Menu sub-->
                                </div>
                                <!--end:Menu item-->
                                <!--begin:Menu item-->
                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                    <!--begin:Menu link-->
                                    <span class="menu-link">
                                        <span class="menu-icon">
                                            <i class="ki-duotone ki-color-swatch fs-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                                <span class="path4"></span>
                                                <span class="path5"></span>
                                                <span class="path6"></span>
                                                <span class="path7"></span>
                                                <span class="path8"></span>
                                                <span class="path9"></span>
                                                <span class="path10"></span>
                                                <span class="path11"></span>
                                                <span class="path12"></span>
                                                <span class="path13"></span>
                                                <span class="path14"></span>
                                                <span class="path15"></span>
                                                <span class="path16"></span>
                                                <span class="path17"></span>
                                                <span class="path18"></span>
                                                <span class="path19"></span>
                                                <span class="path20"></span>
                                                <span class="path21"></span>
                                            </i>
                                        </span>
                                        <span class="menu-title">ابزارها</span>
                                        <span class="menu-arrow"></span>
                                    </span>
                                    <!--end:Menu link-->
                                    <!--begin:Menu sub-->
                                    <div class="menu-sub menu-sub-accordion">
                                        <!--begin:Menu item-->
                                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                            <!--begin:Menu link-->
                                            <span class="menu-link">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">مودال ها</span>
                                                <span class="menu-arrow"></span>
                                            </span>
                                            <!--end:Menu link-->
                                            <!--begin:Menu sub-->
                                            <div class="menu-sub menu-sub-accordion">
                                                <!--begin:Menu item-->
                                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                                    <!--begin:Menu link-->
                                                    <span class="menu-link">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">عمومی</span>
                                                        <span class="menu-arrow"></span>
                                                    </span>
                                                    <!--end:Menu link-->
                                                    <!--begin:Menu sub-->
                                                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                                                        <!--begin:Menu item-->
                                                        <div class="menu-item">
                                                            <!--begin:Menu link-->
                                                            <a class="menu-link"
                                                                href="../../demo1/dist/utilities/modals/general/invite-friends.html">
                                                                <span class="menu-bullet">
                                                                    <span class="bullet bullet-dot"></span>
                                                                </span>
                                                                <span class="menu-title">دعوت از دوستان</span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                                                        <div class="menu-item">
                                                            <!--begin:Menu link-->
                                                            <a class="menu-link"
                                                                href="../../demo1/dist/utilities/modals/general/view-users.html">
                                                                <span class="menu-bullet">
                                                                    <span class="bullet bullet-dot"></span>
                                                                </span>
                                                                <span class="menu-title">نمایش کاربران</span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                                                        <div class="menu-item">
                                                            <!--begin:Menu link-->
                                                            <a class="menu-link"
                                                                href="../../demo1/dist/utilities/modals/general/select-users.html">
                                                                <span class="menu-bullet">
                                                                    <span class="bullet bullet-dot"></span>
                                                                </span>
                                                                <span class="menu-title">انتخاب کاربران</span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                                                        <div class="menu-item">
                                                            <!--begin:Menu link-->
                                                            <a class="menu-link"
                                                                href="../../demo1/dist/utilities/modals/general/upgrade-plan.html">
                                                                <span class="menu-bullet">
                                                                    <span class="bullet bullet-dot"></span>
                                                                </span>
                                                                <span class="menu-title">ارتقا طرح</span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                                                        <div class="menu-item">
                                                            <!--begin:Menu link-->
                                                            <a class="menu-link"
                                                                href="../../demo1/dist/utilities/modals/general/share-earn.html">
                                                                <span class="menu-bullet">
                                                                    <span class="bullet bullet-dot"></span>
                                                                </span>
                                                                <span class="menu-title">به اشتراک بگذارید و کسب
                                                                    کنید</span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                    </div>
                                                    <!--end:Menu sub-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                                    <!--begin:Menu link-->
                                                    <span class="menu-link">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">فرم ها</span>
                                                        <span class="menu-arrow"></span>
                                                    </span>
                                                    <!--end:Menu link-->
                                                    <!--begin:Menu sub-->
                                                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                                                        <!--begin:Menu item-->
                                                        <div class="menu-item">
                                                            <!--begin:Menu link-->
                                                            <a class="menu-link"
                                                                href="../../demo1/dist/utilities/modals/forms/new-target.html">
                                                                <span class="menu-bullet">
                                                                    <span class="bullet bullet-dot"></span>
                                                                </span>
                                                                <span class="menu-title">هدف جدید</span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                                                        <div class="menu-item">
                                                            <!--begin:Menu link-->
                                                            <a class="menu-link"
                                                                href="../../demo1/dist/utilities/modals/forms/new-card.html">
                                                                <span class="menu-bullet">
                                                                    <span class="bullet bullet-dot"></span>
                                                                </span>
                                                                <span class="menu-title">کارت جدید</span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                                                        <div class="menu-item">
                                                            <!--begin:Menu link-->
                                                            <a class="menu-link"
                                                                href="../../demo1/dist/utilities/modals/forms/new-address.html">
                                                                <span class="menu-bullet">
                                                                    <span class="bullet bullet-dot"></span>
                                                                </span>
                                                                <span class="menu-title">آدرس های جدید</span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                                                        <div class="menu-item">
                                                            <!--begin:Menu link-->
                                                            <a class="menu-link"
                                                                href="../../demo1/dist/utilities/modals/forms/create-api-key.html">
                                                                <span class="menu-bullet">
                                                                    <span class="bullet bullet-dot"></span>
                                                                </span>
                                                                <span class="menu-title">ساختن ای پی آی</span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                                                        <div class="menu-item">
                                                            <!--begin:Menu link-->
                                                            <a class="menu-link"
                                                                href="../../demo1/dist/utilities/modals/forms/bidding.html">
                                                                <span class="menu-bullet">
                                                                    <span class="bullet bullet-dot"></span>
                                                                </span>
                                                                <span class="menu-title">مناقصه</span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                    </div>
                                                    <!--end:Menu sub-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                                    <!--begin:Menu link-->
                                                    <span class="menu-link">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">ویزارد</span>
                                                        <span class="menu-arrow"></span>
                                                    </span>
                                                    <!--end:Menu link-->
                                                    <!--begin:Menu sub-->
                                                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                                                        <!--begin:Menu item-->
                                                        <div class="menu-item">
                                                            <!--begin:Menu link-->
                                                            <a class="menu-link"
                                                                href="../../demo1/dist/utilities/modals/wizards/create-app.html">
                                                                <span class="menu-bullet">
                                                                    <span class="bullet bullet-dot"></span>
                                                                </span>
                                                                <span class="menu-title">ساختن اپ</span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                                                        <div class="menu-item">
                                                            <!--begin:Menu link-->
                                                            <a class="menu-link"
                                                                href="../../demo1/dist/utilities/modals/wizards/create-campaign.html">
                                                                <span class="menu-bullet">
                                                                    <span class="bullet bullet-dot"></span>
                                                                </span>
                                                                <span class="menu-title">ساختن کمپین</span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                                                        <div class="menu-item">
                                                            <!--begin:Menu link-->
                                                            <a class="menu-link"
                                                                href="../../demo1/dist/utilities/modals/wizards/create-account.html">
                                                                <span class="menu-bullet">
                                                                    <span class="bullet bullet-dot"></span>
                                                                </span>
                                                                <span class="menu-title">ساختن بیزینس </span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                                                        <div class="menu-item">
                                                            <!--begin:Menu link-->
                                                            <a class="menu-link"
                                                                href="../../demo1/dist/utilities/modals/wizards/create-project.html">
                                                                <span class="menu-bullet">
                                                                    <span class="bullet bullet-dot"></span>
                                                                </span>
                                                                <span class="menu-title">ساختن پروژه</span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                                                        <div class="menu-item">
                                                            <!--begin:Menu link-->
                                                            <a class="menu-link"
                                                                href="../../demo1/dist/utilities/modals/wizards/top-up-wallet.html">
                                                                <span class="menu-bullet">
                                                                    <span class="bullet bullet-dot"></span>
                                                                </span>
                                                                <span class="menu-title">کیف پول</span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                                                        <div class="menu-item">
                                                            <!--begin:Menu link-->
                                                            <a class="menu-link"
                                                                href="../../demo1/dist/utilities/modals/wizards/offer-a-deal.html">
                                                                <span class="menu-bullet">
                                                                    <span class="bullet bullet-dot"></span>
                                                                </span>
                                                                <span class="menu-title">پیشنهاد معامله</span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                                                        <div class="menu-item">
                                                            <!--begin:Menu link-->
                                                            <a class="menu-link"
                                                                href="../../demo1/dist/utilities/modals/wizards/دو عاملی-authentication.html">
                                                                <span class="menu-bullet">
                                                                    <span class="bullet bullet-dot"></span>
                                                                </span>
                                                                <span class="menu-title">احراز هویت دومرحله ای</span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                    </div>
                                                    <!--end:Menu sub-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                                    <!--begin:Menu link-->
                                                    <span class="menu-link">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">جستجو</span>
                                                        <span class="menu-arrow"></span>
                                                    </span>
                                                    <!--end:Menu link-->
                                                    <!--begin:Menu sub-->
                                                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                                                        <!--begin:Menu item-->
                                                        <div class="menu-item">
                                                            <!--begin:Menu link-->
                                                            <a class="menu-link"
                                                                href="../../demo1/dist/utilities/modals/search/users.html">
                                                                <span class="menu-bullet">
                                                                    <span class="bullet bullet-dot"></span>
                                                                </span>
                                                                <span class="menu-title">کاربران</span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                                                        <div class="menu-item">
                                                            <!--begin:Menu link-->
                                                            <a class="menu-link"
                                                                href="../../demo1/dist/utilities/modals/search/select-location.html">
                                                                <span class="menu-bullet">
                                                                    <span class="bullet bullet-dot"></span>
                                                                </span>
                                                                <span class="menu-title">مکان را انتخاب کنید</span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                    </div>
                                                    <!--end:Menu sub-->
                                                </div>
                                                <!--end:Menu item-->
                                            </div>
                                            <!--end:Menu sub-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                            <!--begin:Menu link-->
                                            <span class="menu-link">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">جستجو</span>
                                                <span class="menu-arrow"></span>
                                            </span>
                                            <!--end:Menu link-->
                                            <!--begin:Menu sub-->
                                            <div class="menu-sub menu-sub-accordion">
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link"
                                                        href="../../demo1/dist/utilities/search/horizontal.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">افقی</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link"
                                                        href="../../demo1/dist/utilities/search/vertical.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">عمودی</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link"
                                                        href="../../demo1/dist/utilities/search/users.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">کاربران</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link"
                                                        href="../../demo1/dist/utilities/search/select-location.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">مکان</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                            </div>
                                            <!--end:Menu sub-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                            <!--begin:Menu link-->
                                            <span class="menu-link">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">ویزارد</span>
                                                <span class="menu-arrow"></span>
                                            </span>
                                            <!--end:Menu link-->
                                            <!--begin:Menu sub-->
                                            <div class="menu-sub menu-sub-accordion">
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link"
                                                        href="../../demo1/dist/utilities/wizards/horizontal.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">افقی</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link"
                                                        href="../../demo1/dist/utilities/wizards/vertical.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">عمودی</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link"
                                                        href="../../demo1/dist/utilities/wizards/دو عاملی-authentication.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">احراز هویت دومرحله ای</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link"
                                                        href="../../demo1/dist/utilities/wizards/create-app.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">ساختن اپ</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link"
                                                        href="../../demo1/dist/utilities/wizards/create-campaign.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">ساختن کمپین</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link"
                                                        href="../../demo1/dist/utilities/wizards/create-account.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">ساختن اکانت</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link"
                                                        href="../../demo1/dist/utilities/wizards/create-project.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">ساختن پروژه</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link"
                                                        href="../../demo1/dist/utilities/modals/wizards/top-up-wallet.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">کیف پول</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link"
                                                        href="../../demo1/dist/utilities/wizards/offer-a-deal.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">پیشنهاد معامله</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                            </div>
                                            <!--end:Menu sub-->
                                        </div>
                                        <!--end:Menu item-->
                                    </div>
                                    <!--end:Menu sub-->
                                </div>
                                <!--end:Menu item-->
                                <!--begin:Menu item-->
                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                    <!--begin:Menu link-->
                                    <span class="menu-link">
                                        <span class="menu-icon">
                                            <i class="ki-duotone ki-element-7 fs-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </span>
                                        <span class="menu-title">ابزارک</span>
                                        <span class="menu-arrow"></span>
                                    </span>
                                    <!--end:Menu link-->
                                    <!--begin:Menu sub-->
                                    <div class="menu-sub menu-sub-accordion">
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo1/dist/widgets/lists.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">لیست ها</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo1/dist/widgets/statistics.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">امار</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo1/dist/widgets/charts.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">نمودار ها</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo1/dist/widgets/mixed.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">مخلوط</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo1/dist/widgets/tables.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">جداول</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo1/dist/widgets/feeds.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">تغذیه</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                    </div>
                                    <!--end:Menu sub-->
                                </div>
                                <!--end:Menu item-->
                                <!--begin:Menu item-->
                                <div class="menu-item pt-5">
                                    <!--begin:Menu content-->
                                    <div class="menu-content">
                                        <span class="menu-heading fw-bold text-uppercase fs-7">اپلیکیشن</span>
                                    </div>
                                    <!--end:Menu content-->
                                </div>
                                <!--end:Menu item-->
                                <!--begin:Menu item-->
                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                    <!--begin:Menu link-->
                                    <span class="menu-link">
                                        <span class="menu-icon">
                                            <i class="ki-duotone ki-abstract-41 fs-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </span>
                                        <span class="menu-title">پروژه ها</span>
                                        <span class="menu-arrow"></span>
                                    </span>
                                    <!--end:Menu link-->
                                    <!--begin:Menu sub-->
                                    <div class="menu-sub menu-sub-accordion">
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo1/dist/apps/projects/list.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">پروژه ها من</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo1/dist/apps/projects/project.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">مشاهده پروژه</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo1/dist/apps/projects/targets.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">اهداف</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo1/dist/apps/projects/budget.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">بودجه</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo1/dist/apps/projects/users.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">کاربران</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo1/dist/apps/projects/files.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">فایل ها</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo1/dist/apps/projects/activity.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">فعالیت</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo1/dist/apps/projects/settings.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">تنظیمات</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                    </div>
                                    <!--end:Menu sub-->
                                </div>
                                <!--end:Menu item-->
                                <!--begin:Menu item-->
                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                    <!--begin:Menu link-->
                                    <span class="menu-link">
                                        <span class="menu-icon">
                                            <i class="ki-duotone ki-basket fs-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                                <span class="path4"></span>
                                            </i>
                                        </span>
                                        <span class="menu-title">فروشگاه</span>
                                        <span class="menu-arrow"></span>
                                    </span>
                                    <!--end:Menu link-->
                                    <!--begin:Menu sub-->
                                    <div class="menu-sub menu-sub-accordion">
                                        <!--begin:Menu item-->
                                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                            <!--begin:Menu link-->
                                            <span class="menu-link">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">کاتالوگ</span>
                                                <span class="menu-arrow"></span>
                                            </span>
                                            <!--end:Menu link-->
                                            <!--begin:Menu sub-->
                                            <div class="menu-sub menu-sub-accordion">
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link"
                                                        href="../../demo1/dist/apps/ecommerce/catalog/products.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">محصولات</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link"
                                                        href="../../demo1/dist/apps/ecommerce/catalog/categories.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">دسته بندی ها</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link"
                                                        href="../../demo1/dist/apps/ecommerce/catalog/add-product.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">افزودن محصول</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link"
                                                        href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title"> محصولات</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link"
                                                        href="../../demo1/dist/apps/ecommerce/catalog/add-category.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">افزودن دسته بندی</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link"
                                                        href="../../demo1/dist/apps/ecommerce/catalog/edit-category.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title"> دسته بندی</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                            </div>
                                            <!--end:Menu sub-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                            <!--begin:Menu link-->
                                            <span class="menu-link">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">فروش</span>
                                                <span class="menu-arrow"></span>
                                            </span>
                                            <!--end:Menu link-->
                                            <!--begin:Menu sub-->
                                            <div class="menu-sub menu-sub-accordion">
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link"
                                                        href="../../demo1/dist/apps/ecommerce/sales/listing.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">لیست سفارشات</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link"
                                                        href="../../demo1/dist/apps/ecommerce/sales/details.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">جزییات سفارش</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link"
                                                        href="../../demo1/dist/apps/ecommerce/sales/add-order.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">افزودن سفارش</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link"
                                                        href="../../demo1/dist/apps/ecommerce/sales/edit-order.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title"> سفارش</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                            </div>
                                            <!--end:Menu sub-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                            <!--begin:Menu link-->
                                            <span class="menu-link">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">مشتریان</span>
                                                <span class="menu-arrow"></span>
                                            </span>
                                            <!--end:Menu link-->
                                            <!--begin:Menu sub-->
                                            <div class="menu-sub menu-sub-accordion">
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link"
                                                        href="../../demo1/dist/apps/ecommerce/customers/listing.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">لیست مشتریان</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link"
                                                        href="../../demo1/dist/apps/ecommerce/customers/details.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">جزییات مشتریان</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                            </div>
                                            <!--end:Menu sub-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                            <!--begin:Menu link-->
                                            <span class="menu-link">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">گزارشات</span>
                                                <span class="menu-arrow"></span>
                                            </span>
                                            <!--end:Menu link-->
                                            <!--begin:Menu sub-->
                                            <div class="menu-sub menu-sub-accordion">
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link"
                                                        href="../../demo1/dist/apps/ecommerce/reports/view.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">محصولات مشاهده شده</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link"
                                                        href="../../demo1/dist/apps/ecommerce/reports/sales.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">فروش</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link"
                                                        href="../../demo1/dist/apps/ecommerce/reports/returns.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">برگشتی ها</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link"
                                                        href="../../demo1/dist/apps/ecommerce/reports/customer-orders.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">مشتری سفارشات</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link"
                                                        href="../../demo1/dist/apps/ecommerce/reports/shipping.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">حمل دریایی</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                            </div>
                                            <!--end:Menu sub-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo1/dist/apps/ecommerce/settings.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">تنظیمات</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                    </div>
                                    <!--end:Menu sub-->
                                </div>
                                <!--end:Menu item-->
                                <!--begin:Menu item-->
                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                    <!--begin:Menu link-->
                                    <span class="menu-link">
                                        <span class="menu-icon">
                                            <i class="ki-duotone ki-abstract-25 fs-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </span>
                                        <span class="menu-title">مخاطبین</span>
                                        <span class="menu-arrow"></span>
                                    </span>
                                    <!--end:Menu link-->
                                    <!--begin:Menu sub-->
                                    <div class="menu-sub menu-sub-accordion">
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link"
                                                href="../../demo1/dist/apps/contacts/getting-started.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">شروع شدن</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo1/dist/apps/contacts/add-contact.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">افزودن مخاطب</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link"
                                                href="../../demo1/dist/apps/contacts/edit-contact.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title"> تماس با ما</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link"
                                                href="../../demo1/dist/apps/contacts/view-contact.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">نمایش تماس با ما</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                    </div>
                                    <!--end:Menu sub-->
                                </div>
                                <!--end:Menu item-->
                                <!--begin:Menu item-->
                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                    <!--begin:Menu link-->
                                    <span class="menu-link">
                                        <span class="menu-icon">
                                            <i class="ki-duotone ki-chart fs-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </span>
                                        <span class="menu-title">مرکز پشتیبانی </span>
                                        <span class="menu-arrow"></span>
                                    </span>
                                    <!--end:Menu link-->
                                    <!--begin:Menu sub-->
                                    <div class="menu-sub menu-sub-accordion">
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link"
                                                href="../../demo1/dist/apps/support-center/overview.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">بررسی اجمالی</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion mb-1">
                                            <!--begin:Menu link-->
                                            <span class="menu-link">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">تیکت ها</span>
                                                <span class="menu-arrow"></span>
                                            </span>
                                            <!--end:Menu link-->
                                            <!--begin:Menu sub-->
                                            <div class="menu-sub menu-sub-accordion">
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link"
                                                        href="../../demo1/dist/apps/support-center/tickets/list.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">تیکت ها لیست</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link"
                                                        href="../../demo1/dist/apps/support-center/tickets/view.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">نمایش تیکت</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                            </div>
                                            <!--end:Menu sub-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion mb-1">
                                            <!--begin:Menu link-->
                                            <span class="menu-link">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">آموزشها</span>
                                                <span class="menu-arrow"></span>
                                            </span>
                                            <!--end:Menu link-->
                                            <!--begin:Menu sub-->
                                            <div class="menu-sub menu-sub-accordion">
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link"
                                                        href="../../demo1/dist/apps/support-center/tutorials/list.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">آموزشها لیست</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link"
                                                        href="../../demo1/dist/apps/support-center/tutorials/post.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">پست آموزشی</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                            </div>
                                            <!--end:Menu sub-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo1/dist/apps/support-center/faq.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">سوالات متداول</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link"
                                                href="../../demo1/dist/apps/support-center/licenses.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">مجوزها</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link"
                                                href="../../demo1/dist/apps/support-center/contact.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">تماس با ما</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                    </div>
                                    <!--end:Menu sub-->
                                </div>
                                <!--end:Menu item-->
                                <!--begin:Menu item-->
                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                    <!--begin:Menu link-->
                                    <span class="menu-link">
                                        <span class="menu-icon">
                                            <i class="ki-duotone ki-abstract-28 fs-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </span>
                                        <span class="menu-title">کاربر مدیریت</span>
                                        <span class="menu-arrow"></span>
                                    </span>
                                    <!--end:Menu link-->
                                    <!--begin:Menu sub-->
                                    <div class="menu-sub menu-sub-accordion">
                                        <!--begin:Menu item-->
                                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion mb-1">
                                            <!--begin:Menu link-->
                                            <span class="menu-link">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">کاربران</span>
                                                <span class="menu-arrow"></span>
                                            </span>
                                            <!--end:Menu link-->
                                            <!--begin:Menu sub-->
                                            <div class="menu-sub menu-sub-accordion">
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link"
                                                        href="../../demo1/dist/apps/user-management/users/list.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">کاربران لیست</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link"
                                                        href="../../demo1/dist/apps/user-management/users/view.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">نمایش کاربر</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                            </div>
                                            <!--end:Menu sub-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                            <!--begin:Menu link-->
                                            <span class="menu-link">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">سطح دسترسی</span>
                                                <span class="menu-arrow"></span>
                                            </span>
                                            <!--end:Menu link-->
                                            <!--begin:Menu sub-->
                                            <div class="menu-sub menu-sub-accordion">
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link"
                                                        href="../../demo1/dist/apps/user-management/roles/list.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">سطح دسترسی لیست</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link"
                                                        href="../../demo1/dist/apps/user-management/roles/view.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">نمایش سطح دسترسی</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                            </div>
                                            <!--end:Menu sub-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link"
                                                href="../../demo1/dist/apps/user-management/permissions.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">مجوزها</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                    </div>
                                    <!--end:Menu sub-->
                                </div>
                                <!--end:Menu item-->
                                <!--begin:Menu item-->
                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                    <!--begin:Menu link-->
                                    <span class="menu-link">
                                        <span class="menu-icon">
                                            <i class="ki-duotone ki-abstract-38 fs-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </span>
                                        <span class="menu-title">مشتریان</span>
                                        <span class="menu-arrow"></span>
                                    </span>
                                    <!--end:Menu link-->
                                    <!--begin:Menu sub-->
                                    <div class="menu-sub menu-sub-accordion">
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link"
                                                href="../../demo1/dist/apps/customers/getting-started.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">شروع شدن</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo1/dist/apps/customers/list.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">لیست مشتریان</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo1/dist/apps/customers/view.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">جزییات مشتریان</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                    </div>
                                    <!--end:Menu sub-->
                                </div>
                                <!--end:Menu item-->
                                <!--begin:Menu item-->
                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                    <!--begin:Menu link-->
                                    <span class="menu-link">
                                        <span class="menu-icon">
                                            <i class="ki-duotone ki-map fs-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                            </i>
                                        </span>
                                        <span class="menu-title">اشتراک</span>
                                        <span class="menu-arrow"></span>
                                    </span>
                                    <!--end:Menu link-->
                                    <!--begin:Menu sub-->
                                    <div class="menu-sub menu-sub-accordion">
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link"
                                                href="../../demo1/dist/apps/subscriptions/getting-started.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">شروع شدن</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo1/dist/apps/subscriptions/list.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">لیست اشتراک</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo1/dist/apps/subscriptions/add.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">افزودن اشتراک</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo1/dist/apps/subscriptions/view.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">نمایش اشتراک ها</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                    </div>
                                    <!--end:Menu sub-->
                                </div>
                                <!--end:Menu item-->
                                <!--begin:Menu item-->
                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                    <!--begin:Menu link-->
                                    <span class="menu-link">
                                        <span class="menu-icon">
                                            <i class="ki-duotone ki-credit-سبد fs-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </span>
                                        <span class="menu-title">مدیریت فاکتور</span>
                                        <span class="menu-arrow"></span>
                                    </span>
                                    <!--end:Menu link-->
                                    <!--begin:Menu sub-->
                                    <div class="menu-sub menu-sub-accordion">
                                        <!--begin:Menu item-->
                                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                            <!--begin:Menu link-->
                                            <span class="menu-link">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">نمایش فاکتور ها</span>
                                                <span class="menu-arrow"></span>
                                            </span>
                                            <!--end:Menu link-->
                                            <!--begin:Menu sub-->
                                            <div class="menu-sub menu-sub-accordion menu-active-bg">
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link"
                                                        href="../../demo1/dist/apps/invoices/view/invoice-1.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">فاکتور1</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link"
                                                        href="../../demo1/dist/apps/invoices/view/invoice-2.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">فاکتور2</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                                <!--begin:Menu item-->
                                                <div class="menu-item">
                                                    <!--begin:Menu link-->
                                                    <a class="menu-link"
                                                        href="../../demo1/dist/apps/invoices/view/invoice-3.html">
                                                        <span class="menu-bullet">
                                                            <span class="bullet bullet-dot"></span>
                                                        </span>
                                                        <span class="menu-title">فاکتور 3</span>
                                                    </a>
                                                    <!--end:Menu link-->
                                                </div>
                                                <!--end:Menu item-->
                                            </div>
                                            <!--end:Menu sub-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo1/dist/apps/invoices/create.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">ساختن فاکتور</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                    </div>
                                    <!--end:Menu sub-->
                                </div>
                                <!--end:Menu item-->
                                <!--begin:Menu item-->
                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                    <!--begin:Menu link-->
                                    <span class="menu-link">
                                        <span class="menu-icon">
                                            <i class="ki-duotone ki-switch fs-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </span>
                                        <span class="menu-title">مدیر پرونده</span>
                                        <span class="menu-arrow"></span>
                                    </span>
                                    <!--end:Menu link-->
                                    <!--begin:Menu sub-->
                                    <div class="menu-sub menu-sub-accordion">
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo1/dist/apps/file-manager/folders.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">پوشه ها</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo1/dist/apps/file-manager/files.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">فایل ها</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo1/dist/apps/file-manager/blank.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">دایرکتوری خالی</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link"
                                                href="../../demo1/dist/apps/file-manager/settings.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">تنظیمات</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                    </div>
                                    <!--end:Menu sub-->
                                </div>
                                <!--end:Menu item-->
                                <!--begin:Menu item-->
                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                    <!--begin:Menu link-->
                                    <span class="menu-link">
                                        <span class="menu-icon">
                                            <i class="ki-duotone ki-sms fs-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </span>
                                        <span class="menu-title">صندوق پیام</span>
                                        <span class="menu-arrow"></span>
                                    </span>
                                    <!--end:Menu link-->
                                    <!--begin:Menu sub-->
                                    <div class="menu-sub menu-sub-accordion">
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo1/dist/apps/inbox/listing.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">پیام ها</span>
                                                <span class="menu-badge">
                                                    <span class="badge badge-success">3</span>
                                                </span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo1/dist/apps/inbox/compose.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">ارسال</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo1/dist/apps/inbox/reply.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">نمایش & پاسخ</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                    </div>
                                    <!--end:Menu sub-->
                                </div>
                                <!--end:Menu item-->
                                <!--begin:Menu item-->
                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                    <!--begin:Menu link-->
                                    <span class="menu-link">
                                        <span class="menu-icon">
                                            <i class="ki-duotone ki-message-text-2 fs-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                            </i>
                                        </span>
                                        <span class="menu-title">چت</span>
                                        <span class="menu-arrow"></span>
                                    </span>
                                    <!--end:Menu link-->
                                    <!--begin:Menu sub-->
                                    <div class="menu-sub menu-sub-accordion">
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo1/dist/apps/chat/private.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">خصوصی چت</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo1/dist/apps/chat/group.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">گروه چت</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo1/dist/apps/chat/drawer.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">کشو چت</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                    </div>
                                    <!--end:Menu sub-->
                                </div>
                                <!--end:Menu item-->
                                <!--begin:Menu item-->
                                <div class="menu-item">
                                    <!--begin:Menu link-->
                                    <a class="menu-link" href="../../demo1/dist/apps/calendar.html">
                                        <span class="menu-icon">
                                            <i class="ki-duotone ki-calendar-8 fs-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                                <span class="path4"></span>
                                                <span class="path5"></span>
                                                <span class="path6"></span>
                                            </i>
                                        </span>
                                        <span class="menu-title">تقویم</span>
                                    </a>
                                    <!--end:Menu link-->
                                </div>
                                <!--end:Menu item-->
                                <!--begin:Menu item-->
                                <div class="menu-item pt-5">
                                    <!--begin:Menu content-->
                                    <div class="menu-content">
                                        <span class="menu-heading fw-bold text-uppercase fs-7">قالب بندی ها</span>
                                    </div>
                                    <!--end:Menu content-->
                                </div>
                                <!--end:Menu item-->
                                <!--begin:Menu item-->
                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                    <!--begin:Menu link-->
                                    <span class="menu-link">
                                        <span class="menu-icon">
                                            <i class="ki-duotone ki-element-7 fs-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </span>
                                        <span class="menu-title">قالب بندی تنظیمات</span>
                                        <span class="menu-arrow"></span>
                                    </span>
                                    <!--end:Menu link-->
                                    <!--begin:Menu sub-->
                                    <div class="menu-sub menu-sub-accordion">
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo1/dist/layouts/light-sidebar.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">ساید بار روشن</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo1/dist/layouts/dark-sidebar.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">سایدبار تیره</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo1/dist/layouts/light-header.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">هدر روشن</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo1/dist/layouts/dark-header.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">هدر تیره</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                    </div>
                                    <!--end:Menu sub-->
                                </div>
                                <!--end:Menu item-->
                                <!--begin:Menu item-->
                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                    <!--begin:Menu link-->
                                    <span class="menu-link">
                                        <span class="menu-icon">
                                            <i class="ki-duotone ki-text-align-center fs-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                                <span class="path4"></span>
                                            </i>
                                        </span>
                                        <span class="menu-title">نوار ابزار</span>
                                        <span class="menu-arrow"></span>
                                    </span>
                                    <!--end:Menu link-->
                                    <!--begin:Menu sub-->
                                    <div class="menu-sub menu-sub-accordion">
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo1/dist/toolbars/classic.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">کلاسیک</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo1/dist/toolbars/saas.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">ساس</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo1/dist/toolbars/accounting.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">حسابداری</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo1/dist/toolbars/extended.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">تمدید شده</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item">
                                            <!--begin:Menu link-->
                                            <a class="menu-link" href="../../demo1/dist/toolbars/reports.html">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">گزارشات</span>
                                            </a>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                    </div>
                                    <!--end:Menu sub-->
                                </div>
                                <!--end:Menu item-->
                                <!--begin:Menu item-->
                                <div class="menu-item">
                                    <!--begin:Menu link-->
                                    <a class="menu-link"
                                        href="Https://preview.keenthemes.com/metronic8/demo1/layout-builder.html">
                                        <span class="menu-icon">
                                            <i class="ki-duotone ki-abstract-13 fs-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </span>
                                        <span class="menu-title">قالب بندی سازنده</span>
                                    </a>
                                    <!--end:Menu link-->
                                </div>
                                <!--end:Menu item-->
                                <!--begin:Menu item-->
                                <div class="menu-item pt-5">
                                    <!--begin:Menu content-->
                                    <div class="menu-content">
                                        <span class="menu-heading fw-bold text-uppercase fs-7">کمک</span>
                                    </div>
                                    <!--end:Menu content-->
                                </div>
                                <!--end:Menu item-->
                                <!--begin:Menu item-->
                                <div class="menu-item">
                                    <!--begin:Menu link-->
                                    <a class="menu-link"
                                        href="https://preview.keenthemes.com/html/metronic/docs/base/utilities"
                                        target="_blank">
                                        <span class="menu-icon">
                                            <i class="ki-duotone ki-rocket fs-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </span>
                                        <span class="menu-title">کامپوننت ها</span>
                                    </a>
                                    <!--end:Menu link-->
                                </div>
                                <!--end:Menu item-->
                                <!--begin:Menu item-->
                                <div class="menu-item">
                                    <!--begin:Menu link-->
                                    <a class="menu-link" href="https://preview.keenthemes.com/html/metronic/docs"
                                        target="_blank">
                                        <span class="menu-icon">
                                            <i class="ki-duotone ki-abstract-26 fs-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </span>
                                        <span class="menu-title">اسناد</span>
                                    </a>
                                    <!--end:Menu link-->
                                </div>
                                <!--end:Menu item-->
                                <!--begin:Menu item-->
                                <div class="menu-item">
                                    <!--begin:Menu link-->
                                    <a class="menu-link"
                                        href="https://preview.keenthemes.com/html/metronic/docs/getting-started/changelog"
                                        target="_blank">
                                        <span class="menu-icon">
                                            <i class="ki-duotone ki-code fs-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                                <span class="path4"></span>
                                            </i>
                                        </span>
                                        <span class="menu-title">تغییرات v8.1.8</span>
                                    </a>
                                    <!--end:Menu link-->
                                </div>
                                <!--end:Menu item-->
                            </div>
                            <!--end::Menu-->
                        </div>
                        <!--end::Menu wrapper-->
                    </div>
                    <!--end::sidebar menu-->
                    <!--begin::Footer-->
                    <div class="app-sidebar-footer flex-column-auto pt-2 pb-6 px-6" id="kt_app_sidebar_footer">
                        <a href="https://preview.keenthemes.com/html/metronic/docs"
                            class="btn btn-flex flex-center btn-custom btn-primary overflow-hidden text-nowrap px-0 h-40px w-100"
                            data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss-="click"
                            title="200+ کامپوننت ها و افزونه های شخص ثالث">
                            <span class="btn-label">اسناد و کامپوننت ها</span>
                            <i class="ki-duotone ki-document btn-icon fs-2 m-0">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                        </a>
                    </div>
                    <!--end::Footer-->
                </div>
                <!--end::Sidebar-->
                <!--begin::Main-->
                <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
                    <!--begin::Content wrapper-->
                    <div class="d-flex flex-column flex-column-fluid">
                        <!--begin::Toolbar-->
                        <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
                            <!--begin::Toolbar container-->
                            <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
                                <!--begin::Page title-->
                                <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                                    <!--begin::Title-->
                                    <h1
                                        class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
                                        چند منظوره</h1>
                                    <!--end::Title-->
                                    <!--begin::Breadcrumb-->
                                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                                        <!--begin::آیتم-->
                                        <li class="breadcrumb-item text-muted">
                                            <a href="../../demo1/dist/index.html"
                                                class="text-muted text-hover-primary">خانه</a>
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
                                    <a href="#"
                                        class="btn btn-sm fw-bold bg-body btn-color-gray-700 btn-active-color-primary"
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
                                                    <div
                                                        class="d-flex justify-content-between fw-bold fs-6 text-white opacity-75 w-100 mt-auto mb-2">
                                                        <span>43 در انتظار</span>
                                                        <span>72%</span>
                                                    </div>
                                                    <div class="h-8px mx-3 w-100 bg-white bg-opacity-50 rounded">
                                                        <div class="bg-white rounded h-8px" role="progressbar"
                                                            style="width: 72%;" aria-valuenow="50" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
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
                                                    <div class="symbol symbol-35px symbol-circle"
                                                        data-bs-toggle="tooltip" title="آرش کمری">
                                                        <span
                                                            class="symbol-label bg-warning text-inverse-warning fw-bold">A</span>
                                                    </div>
                                                    <div class="symbol symbol-35px symbol-circle"
                                                        data-bs-toggle="tooltip" title="میکائیل احمدی">
                                                        <img alt="Pic" src="../assets/media/avatars/300-11.jpg" />
                                                    </div>
                                                    <div class="symbol symbol-35px symbol-circle"
                                                        data-bs-toggle="tooltip" title="سوسن موسوی">
                                                        <span
                                                            class="symbol-label bg-primary text-inverse-primary fw-bold">S</span>
                                                    </div>
                                                    <div class="symbol symbol-35px symbol-circle"
                                                        data-bs-toggle="tooltip" title="میلاد مرادی">
                                                        <img alt="Pic" src="../assets/media/avatars/300-2.jpg" />
                                                    </div>
                                                    <div class="symbol symbol-35px symbol-circle"
                                                        data-bs-toggle="tooltip" title="حسینی">
                                                        <span
                                                            class="symbol-label bg-danger text-inverse-danger fw-bold">P</span>
                                                    </div>
                                                    <div class="symbol symbol-35px symbol-circle"
                                                        data-bs-toggle="tooltip" title="بهروز ازادی">
                                                        <img alt="Pic" src="../assets/media/avatars/300-12.jpg" />
                                                    </div>
                                                    <a href="#" class="symbol symbol-35px symbol-circle"
                                                        data-bs-toggle="modal" data-bs-target="#kt_modal_view_users">
                                                        <span
                                                            class="symbol-label bg-dark text-gray-300 fs-8 fw-bold">+42</span>
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
                                                        <span
                                                            class="fs-4 fw-semibold text-gray-400 me-1 align-self-start">$</span>
                                                        <!--end::واحد پول-->
                                                        <!--begin::مقدار-->
                                                        <span
                                                            class="fs-2hx fw-bold text-dark me-2 lh-1 ls-n2">69,700</span>
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
                                                    <div id="kt_card_widget_17_chart"
                                                        style="min-width: 70px; min-height: 70px" data-kt-size="70"
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
                                                        <div class="bullet w-8px h-3px rounded-2 me-3"
                                                            style="background-color: #E4E6EF"></div>
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
                                                    <button
                                                        class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end"
                                                        data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
                                                        data-kt-menu-overflow="true">
                                                        <i class="ki-duotone ki-dots-square fs-1 text-gray-300 me-n1">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                            <span class="path3"></span>
                                                            <span class="path4"></span>
                                                        </i>
                                                    </button>
                                                    <!--begin::Menu 2-->
                                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px"
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
                                                        <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                                            data-kt-menu-placement="left-start">
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
                                            <div class="card-body d-flex flex-column justify-content-between mt-9 bgi-no-repeat bgi-size-cover bgi-position-x-center pb-0"
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
                                                        <a href='#' class="btn btn-sm btn-dark fw-bold"
                                                            data-bs-toggle="modal"
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
                                                                data-bs-toggle="tab" id="kt_chart_widget_8_week_toggle"
                                                                href="#kt_chart_widget_8_week_tab">ماه</a>
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
                                                    <div class="tab-pane fade" id="kt_chart_widget_8_week_tab"
                                                        role="tabpanel">
                                                        <!--begin::امار-->
                                                        <div class="mb-5">
                                                            <!--begin::امار-->
                                                            <div class="d-flex align-items-center mb-2">
                                                                <span
                                                                    class="fs-1 fw-semibold text-gray-400 me-1 mt-n1">$</span>
                                                                <span
                                                                    class="fs-3x fw-bold text-gray-800 me-2 lh-1 ls-n2">18,89</span>
                                                                <span class="badge badge-light-success fs-base">
                                                                    <i
                                                                        class="ki-duotone ki-arrow-up fs-5 text-success ms-n1">
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
                                                        <div id="kt_chart_widget_8_week_chart" class="ms-n5 min-h-auto"
                                                            style="height: 275px"></div>
                                                        <!--end::Chart-->
                                                        <!--begin::آیتمs-->
                                                        <div class="d-flex flex-wrap pt-5">
                                                            <!--begin::آیتم-->
                                                            <div class="d-flex flex-column me-7 me-lg-16 pt-sm-3 pt-6">
                                                                <!--begin::آیتم-->
                                                                <div class="d-flex align-items-center mb-3 mb-sm-6">
                                                                    <!--begin::Bullet-->
                                                                    <span
                                                                        class="bullet bullet-dot bg-primary me-2 h-10px w-10px"></span>
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
                                                                    <span
                                                                        class="bullet bullet-dot bg-danger me-2 h-10px w-10px"></span>
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
                                                                    <span
                                                                        class="bullet bullet-dot bg-success me-2 h-10px w-10px"></span>
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
                                                                    <span
                                                                        class="bullet bullet-dot bg-warning me-2 h-10px w-10px"></span>
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
                                                                    <span
                                                                        class="bullet bullet-dot bg-info me-2 h-10px w-10px"></span>
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
                                                                    <span
                                                                        class="bullet bullet-dot bg-success me-2 h-10px w-10px"></span>
                                                                    <!--end::Bullet-->
                                                                    <!--begin::Tags-->
                                                                    <span
                                                                        class="fw-bold text-gray-600 fs-6">رادیو</span>
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
                                                    <div class="tab-pane fade active show"
                                                        id="kt_chart_widget_8_month_tab" role="tabpanel">
                                                        <!--begin::امار-->
                                                        <div class="mb-5">
                                                            <!--begin::امار-->
                                                            <div class="d-flex align-items-center mb-2">
                                                                <span
                                                                    class="fs-1 fw-semibold text-gray-400 me-1 mt-n1">$</span>
                                                                <span
                                                                    class="fs-3x fw-bold text-gray-800 me-2 lh-1 ls-n2">8,55</span>
                                                                <span class="badge badge-light-success fs-base">
                                                                    <i
                                                                        class="ki-duotone ki-arrow-up fs-5 text-success ms-n1">
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
                                                        <div id="kt_chart_widget_8_month_chart" class="ms-n5 min-h-auto"
                                                            style="height: 275px"></div>
                                                        <!--end::Chart-->
                                                        <!--begin::آیتمs-->
                                                        <div class="d-flex flex-wrap pt-5">
                                                            <!--begin::آیتم-->
                                                            <div class="d-flex flex-column me-7 me-lg-16 pt-sm-3 pt-6">
                                                                <!--begin::آیتم-->
                                                                <div class="d-flex align-items-center mb-3 mb-sm-6">
                                                                    <!--begin::Bullet-->
                                                                    <span
                                                                        class="bullet bullet-dot bg-primary me-2 h-10px w-10px"></span>
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
                                                                    <span
                                                                        class="bullet bullet-dot bg-danger me-2 h-10px w-10px"></span>
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
                                                                    <span
                                                                        class="bullet bullet-dot bg-success me-2 h-10px w-10px"></span>
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
                                                                    <span
                                                                        class="bullet bullet-dot bg-warning me-2 h-10px w-10px"></span>
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
                                                                    <span
                                                                        class="bullet bullet-dot bg-info me-2 h-10px w-10px"></span>
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
                                                                    <span
                                                                        class="bullet bullet-dot bg-success me-2 h-10px w-10px"></span>
                                                                    <!--end::Bullet-->
                                                                    <!--begin::Tags-->
                                                                    <span
                                                                        class="fw-bold text-gray-600 fs-6">رادیو</span>
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
                                                    <button
                                                        class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end"
                                                        data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
                                                        data-kt-menu-overflow="true">
                                                        <i class="ki-duotone ki-dots-square fs-1 text-gray-300 me-n1">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                            <span class="path3"></span>
                                                            <span class="path4"></span>
                                                        </i>
                                                    </button>
                                                    <!--begin::Menu 2-->
                                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px"
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
                                                        <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                                            data-kt-menu-placement="left-start">
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
                                                            id="kt_stats_widget_16_tab_link_1" data-bs-toggle="pill"
                                                            href="#kt_stats_widget_16_tab_1">
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
                                                            <span
                                                                class="nav-text text-gray-800 fw-bold fs-6 lh-1">ساس</span>
                                                            <!--end::Title-->
                                                            <!--begin::Bullet-->
                                                            <span
                                                                class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                                                            <!--end::Bullet-->
                                                        </a>
                                                        <!--end::Link-->
                                                    </li>
                                                    <!--end::آیتم-->
                                                    <!--begin::آیتم-->
                                                    <li class="nav-item mb-3 me-3 me-lg-6">
                                                        <!--begin::Link-->
                                                        <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-80px h-85px pt-5 pb-2"
                                                            id="kt_stats_widget_16_tab_link_2" data-bs-toggle="pill"
                                                            href="#kt_stats_widget_16_tab_2">
                                                            <!--begin::Icon-->
                                                            <div class="nav-icon mb-3">
                                                                <i class="ki-duotone ki-bitcoin fs-1">
                                                                    <span class="path1"></span>
                                                                    <span class="path2"></span>
                                                                </i>
                                                            </div>
                                                            <!--end::Icon-->
                                                            <!--begin::Title-->
                                                            <span
                                                                class="nav-text text-gray-800 fw-bold fs-6 lh-1">کریپتو</span>
                                                            <!--end::Title-->
                                                            <!--begin::Bullet-->
                                                            <span
                                                                class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                                                            <!--end::Bullet-->
                                                        </a>
                                                        <!--end::Link-->
                                                    </li>
                                                    <!--end::آیتم-->
                                                    <!--begin::آیتم-->
                                                    <li class="nav-item mb-3 me-3 me-lg-6">
                                                        <!--begin::Link-->
                                                        <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-80px h-85px pt-5 pb-2"
                                                            id="kt_stats_widget_16_tab_link_3" data-bs-toggle="pill"
                                                            href="#kt_stats_widget_16_tab_3">
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
                                                            <span
                                                                class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                                                            <!--end::Bullet-->
                                                        </a>
                                                        <!--end::Link-->
                                                    </li>
                                                    <!--end::آیتم-->
                                                    <!--begin::آیتم-->
                                                    <li class="nav-item mb-3 me-3 me-lg-6">
                                                        <!--begin::Link-->
                                                        <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-80px h-85px pt-5 pb-2"
                                                            id="kt_stats_widget_16_tab_link_4" data-bs-toggle="pill"
                                                            href="#kt_stats_widget_16_tab_4">
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
                                                            <span
                                                                class="nav-text text-gray-800 fw-bold fs-6 lh-1">موبایل</span>
                                                            <!--end::Title-->
                                                            <!--begin::Bullet-->
                                                            <span
                                                                class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                                                            <!--end::Bullet-->
                                                        </a>
                                                        <!--end::Link-->
                                                    </li>
                                                    <!--end::آیتم-->
                                                    <!--begin::آیتم-->
                                                    <li class="nav-item mb-3 me-3 me-lg-6">
                                                        <!--begin::Link-->
                                                        <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-80px h-85px pt-5 pb-2"
                                                            id="kt_stats_widget_16_tab_link_5" data-bs-toggle="pill"
                                                            href="#kt_stats_widget_16_tab_5">
                                                            <!--begin::Icon-->
                                                            <div class="nav-icon mb-3">
                                                                <i class="ki-duotone ki-send fs-1">
                                                                    <span class="path1"></span>
                                                                    <span class="path2"></span>
                                                                </i>
                                                            </div>
                                                            <!--end::Icon-->
                                                            <!--begin::Title-->
                                                            <span
                                                                class="nav-text text-gray-800 fw-bold fs-6 lh-1">سایر</span>
                                                            <!--end::Title-->
                                                            <!--begin::Bullet-->
                                                            <span
                                                                class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
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
                                                    <div class="tab-pane fade show active"
                                                        id="kt_stats_widget_16_tab_1">
                                                        <!--begin::Table container-->
                                                        <div class="table-responsive">
                                                            <!--begin::Table-->
                                                            <table
                                                                class="table table-row-dashed align-middle gs-0 gy-3 my-0">
                                                                <!--begin::Table head-->
                                                                <thead>
                                                                    <tr
                                                                        class="fs-7 fw-bold text-gray-400 border-bottom-0">
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
                                                                                    <img src="../assets/media/avatars/300-3.jpg"
                                                                                        class="" alt="" />
                                                                                </div>
                                                                                <div
                                                                                    class="d-flex justify-content-start flex-column">
                                                                                    <a href="../../demo1/dist/pages/user-profile/overview.html"
                                                                                        class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">گای
                                                                                        هاوکینز</a>
                                                                                    <span
                                                                                        class="text-gray-400 fw-semibold d-block fs-7">هلند</span>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td class="text-end pe-13">
                                                                            <span
                                                                                class="text-gray-600 fw-bold fs-6">78.34%</span>
                                                                        </td>
                                                                        <td class="text-end pe-0">
                                                                            <div id="kt_table_widget_16_chart_1_1"
                                                                                class="h-50px mt-n8 pe-7"
                                                                                data-kt-chart-color="success"></div>
                                                                        </td>
                                                                        <td class="text-end">
                                                                            <a href="#"
                                                                                class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                                                <i
                                                                                    class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                                                            </a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="d-flex align-items-center">
                                                                                <div class="symbol symbol-50px me-3">
                                                                                    <img src="../assets/media/avatars/300-2.jpg"
                                                                                        class="" alt="" />
                                                                                </div>
                                                                                <div
                                                                                    class="d-flex justify-content-start flex-column">
                                                                                    <a href="../../demo1/dist/pages/user-profile/overview.html"
                                                                                        class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">هنری</a>
                                                                                    <span
                                                                                        class="text-gray-400 fw-semibold d-block fs-7">فرانسه</span>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td class="text-end pe-13">
                                                                            <span
                                                                                class="text-gray-600 fw-bold fs-6">63.83%</span>
                                                                        </td>
                                                                        <td class="text-end pe-0">
                                                                            <div id="kt_table_widget_16_chart_1_2"
                                                                                class="h-50px mt-n8 pe-7"
                                                                                data-kt-chart-color="danger"></div>
                                                                        </td>
                                                                        <td class="text-end">
                                                                            <a href="#"
                                                                                class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                                                <i
                                                                                    class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                                                            </a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="d-flex align-items-center">
                                                                                <div class="symbol symbol-50px me-3">
                                                                                    <img src="../assets/media/avatars/300-9.jpg"
                                                                                        class="" alt="" />
                                                                                </div>
                                                                                <div
                                                                                    class="d-flex justify-content-start flex-column">
                                                                                    <a href="../../demo1/dist/pages/user-profile/overview.html"
                                                                                        class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">جواد
                                                                                        یساری</a>
                                                                                    <span
                                                                                        class="text-gray-400 fw-semibold d-block fs-7">لهستان</span>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td class="text-end pe-13">
                                                                            <span
                                                                                class="text-gray-600 fw-bold fs-6">92.56%</span>
                                                                        </td>
                                                                        <td class="text-end pe-0">
                                                                            <div id="kt_table_widget_16_chart_1_3"
                                                                                class="h-50px mt-n8 pe-7"
                                                                                data-kt-chart-color="success"></div>
                                                                        </td>
                                                                        <td class="text-end">
                                                                            <a href="#"
                                                                                class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                                                <i
                                                                                    class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                                                            </a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="d-flex align-items-center">
                                                                                <div class="symbol symbol-50px me-3">
                                                                                    <img src="../assets/media/avatars/300-7.jpg"
                                                                                        class="" alt="" />
                                                                                </div>
                                                                                <div
                                                                                    class="d-flex justify-content-start flex-column">
                                                                                    <a href="../../demo1/dist/pages/user-profile/overview.html"
                                                                                        class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">کامران</a>
                                                                                    <span
                                                                                        class="text-gray-400 fw-semibold d-block fs-7">مکزیک</span>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td class="text-end pe-13">
                                                                            <span
                                                                                class="text-gray-600 fw-bold fs-6">63.08%</span>
                                                                        </td>
                                                                        <td class="text-end pe-0">
                                                                            <div id="kt_table_widget_16_chart_1_4"
                                                                                class="h-50px mt-n8 pe-7"
                                                                                data-kt-chart-color="success"></div>
                                                                        </td>
                                                                        <td class="text-end">
                                                                            <a href="#"
                                                                                class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                                                <i
                                                                                    class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
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
                                                            <table
                                                                class="table table-row-dashed align-middle gs-0 gy-3 my-0">
                                                                <!--begin::Table head-->
                                                                <thead>
                                                                    <tr
                                                                        class="fs-7 fw-bold text-gray-400 border-bottom-0">
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
                                                                                    <img src="../assets/media/avatars/300-25.jpg"
                                                                                        class="" alt="" />
                                                                                </div>
                                                                                <div
                                                                                    class="d-flex justify-content-start flex-column">
                                                                                    <a href="../../demo1/dist/pages/user-profile/overview.html"
                                                                                        class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">بروکلین
                                                                                        سیمونز</a>
                                                                                    <span
                                                                                        class="text-gray-400 fw-semibold d-block fs-7">لهستان</span>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td class="text-end pe-13">
                                                                            <span
                                                                                class="text-gray-600 fw-bold fs-6">85.23%</span>
                                                                        </td>
                                                                        <td class="text-end pe-0">
                                                                            <div id="kt_table_widget_16_chart_2_1"
                                                                                class="h-50px mt-n8 pe-7"
                                                                                data-kt-chart-color="success"></div>
                                                                        </td>
                                                                        <td class="text-end">
                                                                            <a href="#"
                                                                                class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                                                <i
                                                                                    class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                                                            </a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="d-flex align-items-center">
                                                                                <div class="symbol symbol-50px me-3">
                                                                                    <img src="../assets/media/avatars/300-24.jpg"
                                                                                        class="" alt="" />
                                                                                </div>
                                                                                <div
                                                                                    class="d-flex justify-content-start flex-column">
                                                                                    <a href="../../demo1/dist/pages/user-profile/overview.html"
                                                                                        class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">استر
                                                                                        هوارد</a>
                                                                                    <span
                                                                                        class="text-gray-400 fw-semibold d-block fs-7">مکزیک</span>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td class="text-end pe-13">
                                                                            <span
                                                                                class="text-gray-600 fw-bold fs-6">74.83%</span>
                                                                        </td>
                                                                        <td class="text-end pe-0">
                                                                            <div id="kt_table_widget_16_chart_2_2"
                                                                                class="h-50px mt-n8 pe-7"
                                                                                data-kt-chart-color="danger"></div>
                                                                        </td>
                                                                        <td class="text-end">
                                                                            <a href="#"
                                                                                class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                                                <i
                                                                                    class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                                                            </a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="d-flex align-items-center">
                                                                                <div class="symbol symbol-50px me-3">
                                                                                    <img src="../assets/media/avatars/300-20.jpg"
                                                                                        class="" alt="" />
                                                                                </div>
                                                                                <div
                                                                                    class="d-flex justify-content-start flex-column">
                                                                                    <a href="../../demo1/dist/pages/user-profile/overview.html"
                                                                                        class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">آنت
                                                                                        بلک</a>
                                                                                    <span
                                                                                        class="text-gray-400 fw-semibold d-block fs-7">هلند</span>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td class="text-end pe-13">
                                                                            <span
                                                                                class="text-gray-600 fw-bold fs-6">90.06%</span>
                                                                        </td>
                                                                        <td class="text-end pe-0">
                                                                            <div id="kt_table_widget_16_chart_2_3"
                                                                                class="h-50px mt-n8 pe-7"
                                                                                data-kt-chart-color="success"></div>
                                                                        </td>
                                                                        <td class="text-end">
                                                                            <a href="#"
                                                                                class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                                                <i
                                                                                    class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                                                            </a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="d-flex align-items-center">
                                                                                <div class="symbol symbol-50px me-3">
                                                                                    <img src="../assets/media/avatars/300-17.jpg"
                                                                                        class="" alt="" />
                                                                                </div>
                                                                                <div
                                                                                    class="d-flex justify-content-start flex-column">
                                                                                    <a href="../../demo1/dist/pages/user-profile/overview.html"
                                                                                        class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">اسفندوین
                                                                                        مک کینی</a>
                                                                                    <span
                                                                                        class="text-gray-400 fw-semibold d-block fs-7">فرانسه</span>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td class="text-end pe-13">
                                                                            <span
                                                                                class="text-gray-600 fw-bold fs-6">54.08%</span>
                                                                        </td>
                                                                        <td class="text-end pe-0">
                                                                            <div id="kt_table_widget_16_chart_2_4"
                                                                                class="h-50px mt-n8 pe-7"
                                                                                data-kt-chart-color="success"></div>
                                                                        </td>
                                                                        <td class="text-end">
                                                                            <a href="#"
                                                                                class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                                                <i
                                                                                    class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
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
                                                            <table
                                                                class="table table-row-dashed align-middle gs-0 gy-3 my-0">
                                                                <!--begin::Table head-->
                                                                <thead>
                                                                    <tr
                                                                        class="fs-7 fw-bold text-gray-400 border-bottom-0">
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
                                                                                    <img src="../assets/media/avatars/300-11.jpg"
                                                                                        class="" alt="" />
                                                                                </div>
                                                                                <div
                                                                                    class="d-flex justify-content-start flex-column">
                                                                                    <a href="../../demo1/dist/pages/user-profile/overview.html"
                                                                                        class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">جواد
                                                                                        یساری</a>
                                                                                    <span
                                                                                        class="text-gray-400 fw-semibold d-block fs-7">آمریکا</span>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td class="text-end pe-13">
                                                                            <span
                                                                                class="text-gray-600 fw-bold fs-6">52.34%</span>
                                                                        </td>
                                                                        <td class="text-end pe-0">
                                                                            <div id="kt_table_widget_16_chart_3_1"
                                                                                class="h-50px mt-n8 pe-7"
                                                                                data-kt-chart-color="success"></div>
                                                                        </td>
                                                                        <td class="text-end">
                                                                            <a href="#"
                                                                                class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                                                <i
                                                                                    class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                                                            </a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="d-flex align-items-center">
                                                                                <div class="symbol symbol-50px me-3">
                                                                                    <img src="../assets/media/avatars/300-23.jpg"
                                                                                        class="" alt="" />
                                                                                </div>
                                                                                <div
                                                                                    class="d-flex justify-content-start flex-column">
                                                                                    <a href="../../demo1/dist/pages/user-profile/overview.html"
                                                                                        class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">رونالد
                                                                                        ریچارز</a>
                                                                                    <span
                                                                                        class="text-gray-400 fw-semibold d-block fs-7">اسپانیا</span>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td class="text-end pe-13">
                                                                            <span
                                                                                class="text-gray-600 fw-bold fs-6">77.65%</span>
                                                                        </td>
                                                                        <td class="text-end pe-0">
                                                                            <div id="kt_table_widget_16_chart_3_2"
                                                                                class="h-50px mt-n8 pe-7"
                                                                                data-kt-chart-color="danger"></div>
                                                                        </td>
                                                                        <td class="text-end">
                                                                            <a href="#"
                                                                                class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                                                <i
                                                                                    class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                                                            </a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="d-flex align-items-center">
                                                                                <div class="symbol symbol-50px me-3">
                                                                                    <img src="../assets/media/avatars/300-4.jpg"
                                                                                        class="" alt="" />
                                                                                </div>
                                                                                <div
                                                                                    class="d-flex justify-content-start flex-column">
                                                                                    <a href="../../demo1/dist/pages/user-profile/overview.html"
                                                                                        class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">الکس
                                                                                        سانچز</a>
                                                                                    <span
                                                                                        class="text-gray-400 fw-semibold d-block fs-7">چین</span>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td class="text-end pe-13">
                                                                            <span
                                                                                class="text-gray-600 fw-bold fs-6">82.47%</span>
                                                                        </td>
                                                                        <td class="text-end pe-0">
                                                                            <div id="kt_table_widget_16_chart_3_3"
                                                                                class="h-50px mt-n8 pe-7"
                                                                                data-kt-chart-color="success"></div>
                                                                        </td>
                                                                        <td class="text-end">
                                                                            <a href="#"
                                                                                class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                                                <i
                                                                                    class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                                                            </a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="d-flex align-items-center">
                                                                                <div class="symbol symbol-50px me-3">
                                                                                    <img src="../assets/media/avatars/300-1.jpg"
                                                                                        class="" alt="" />
                                                                                </div>
                                                                                <div
                                                                                    class="d-flex justify-content-start flex-column">
                                                                                    <a href="../../demo1/dist/pages/user-profile/overview.html"
                                                                                        class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">کامران
                                                                                        مرادی</a>
                                                                                    <span
                                                                                        class="text-gray-400 fw-semibold d-block fs-7">مکزیک</span>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td class="text-end pe-13">
                                                                            <span
                                                                                class="text-gray-600 fw-bold fs-6">67.84%</span>
                                                                        </td>
                                                                        <td class="text-end pe-0">
                                                                            <div id="kt_table_widget_16_chart_3_4"
                                                                                class="h-50px mt-n8 pe-7"
                                                                                data-kt-chart-color="success"></div>
                                                                        </td>
                                                                        <td class="text-end">
                                                                            <a href="#"
                                                                                class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                                                <i
                                                                                    class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
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
                                                            <table
                                                                class="table table-row-dashed align-middle gs-0 gy-3 my-0">
                                                                <!--begin::Table head-->
                                                                <thead>
                                                                    <tr
                                                                        class="fs-7 fw-bold text-gray-400 border-bottom-0">
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
                                                                                    <img src="../assets/media/avatars/300-12.jpg"
                                                                                        class="" alt="" />
                                                                                </div>
                                                                                <div
                                                                                    class="d-flex justify-content-start flex-column">
                                                                                    <a href="../../demo1/dist/pages/user-profile/overview.html"
                                                                                        class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">عارف
                                                                                        لرستانی</a>
                                                                                    <span
                                                                                        class="text-gray-400 fw-semibold d-block fs-7">لندن</span>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td class="text-end pe-13">
                                                                            <span
                                                                                class="text-gray-600 fw-bold fs-6">53.44%</span>
                                                                        </td>
                                                                        <td class="text-end pe-0">
                                                                            <div id="kt_table_widget_16_chart_4_1"
                                                                                class="h-50px mt-n8 pe-7"
                                                                                data-kt-chart-color="success"></div>
                                                                        </td>
                                                                        <td class="text-end">
                                                                            <a href="#"
                                                                                class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                                                <i
                                                                                    class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                                                            </a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="d-flex align-items-center">
                                                                                <div class="symbol symbol-50px me-3">
                                                                                    <img src="../assets/media/avatars/300-21.jpg"
                                                                                        class="" alt="" />
                                                                                </div>
                                                                                <div
                                                                                    class="d-flex justify-content-start flex-column">
                                                                                    <a href="../../demo1/dist/pages/user-profile/overview.html"
                                                                                        class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">اسفندوین
                                                                                        مک کینیr</a>
                                                                                    <span
                                                                                        class="text-gray-400 fw-semibold d-block fs-7">فرانسه</span>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td class="text-end pe-13">
                                                                            <span
                                                                                class="text-gray-600 fw-bold fs-6">74.64%</span>
                                                                        </td>
                                                                        <td class="text-end pe-0">
                                                                            <div id="kt_table_widget_16_chart_4_2"
                                                                                class="h-50px mt-n8 pe-7"
                                                                                data-kt-chart-color="danger"></div>
                                                                        </td>
                                                                        <td class="text-end">
                                                                            <a href="#"
                                                                                class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                                                <i
                                                                                    class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                                                            </a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="d-flex align-items-center">
                                                                                <div class="symbol symbol-50px me-3">
                                                                                    <img src="../assets/media/avatars/300-30.jpg"
                                                                                        class="" alt="" />
                                                                                </div>
                                                                                <div
                                                                                    class="d-flex justify-content-start flex-column">
                                                                                    <a href="../../demo1/dist/pages/user-profile/overview.html"
                                                                                        class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">جواد
                                                                                        یساری</a>
                                                                                    <span
                                                                                        class="text-gray-400 fw-semibold d-block fs-7">کره</span>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td class="text-end pe-13">
                                                                            <span
                                                                                class="text-gray-600 fw-bold fs-6">88.56%</span>
                                                                        </td>
                                                                        <td class="text-end pe-0">
                                                                            <div id="kt_table_widget_16_chart_4_3"
                                                                                class="h-50px mt-n8 pe-7"
                                                                                data-kt-chart-color="success"></div>
                                                                        </td>
                                                                        <td class="text-end">
                                                                            <a href="#"
                                                                                class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                                                <i
                                                                                    class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                                                            </a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="d-flex align-items-center">
                                                                                <div class="symbol symbol-50px me-3">
                                                                                    <img src="../assets/media/avatars/300-14.jpg"
                                                                                        class="" alt="" />
                                                                                </div>
                                                                                <div
                                                                                    class="d-flex justify-content-start flex-column">
                                                                                    <a href="../../demo1/dist/pages/user-profile/overview.html"
                                                                                        class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">استر
                                                                                        هوارد</a>
                                                                                    <span
                                                                                        class="text-gray-400 fw-semibold d-block fs-7">ایسلند</span>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td class="text-end pe-13">
                                                                            <span
                                                                                class="text-gray-600 fw-bold fs-6">63.16%</span>
                                                                        </td>
                                                                        <td class="text-end pe-0">
                                                                            <div id="kt_table_widget_16_chart_4_4"
                                                                                class="h-50px mt-n8 pe-7"
                                                                                data-kt-chart-color="success"></div>
                                                                        </td>
                                                                        <td class="text-end">
                                                                            <a href="#"
                                                                                class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                                                <i
                                                                                    class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
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
                                                            <table
                                                                class="table table-row-dashed align-middle gs-0 gy-3 my-0">
                                                                <!--begin::Table head-->
                                                                <thead>
                                                                    <tr
                                                                        class="fs-7 fw-bold text-gray-400 border-bottom-0">
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
                                                                                    <img src="../assets/media/avatars/300-6.jpg"
                                                                                        class="" alt="" />
                                                                                </div>
                                                                                <div
                                                                                    class="d-flex justify-content-start flex-column">
                                                                                    <a href="../../demo1/dist/pages/user-profile/overview.html"
                                                                                        class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">هنری</a>
                                                                                    <span
                                                                                        class="text-gray-400 fw-semibold d-block fs-7">هلند</span>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td class="text-end pe-13">
                                                                            <span
                                                                                class="text-gray-600 fw-bold fs-6">68.54%</span>
                                                                        </td>
                                                                        <td class="text-end pe-0">
                                                                            <div id="kt_table_widget_16_chart_5_1"
                                                                                class="h-50px mt-n8 pe-7"
                                                                                data-kt-chart-color="success"></div>
                                                                        </td>
                                                                        <td class="text-end">
                                                                            <a href="#"
                                                                                class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                                                <i
                                                                                    class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                                                            </a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="d-flex align-items-center">
                                                                                <div class="symbol symbol-50px me-3">
                                                                                    <img src="../assets/media/avatars/300-10.jpg"
                                                                                        class="" alt="" />
                                                                                </div>
                                                                                <div
                                                                                    class="d-flex justify-content-start flex-column">
                                                                                    <a href="../../demo1/dist/pages/user-profile/overview.html"
                                                                                        class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">استر
                                                                                        هوارد</a>
                                                                                    <span
                                                                                        class="text-gray-400 fw-semibold d-block fs-7">ایتالیا</span>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td class="text-end pe-13">
                                                                            <span
                                                                                class="text-gray-600 fw-bold fs-6">55.83%</span>
                                                                        </td>
                                                                        <td class="text-end pe-0">
                                                                            <div id="kt_table_widget_16_chart_5_2"
                                                                                class="h-50px mt-n8 pe-7"
                                                                                data-kt-chart-color="danger"></div>
                                                                        </td>
                                                                        <td class="text-end">
                                                                            <a href="#"
                                                                                class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                                                <i
                                                                                    class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                                                            </a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="d-flex align-items-center">
                                                                                <div class="symbol symbol-50px me-3">
                                                                                    <img src="../assets/media/avatars/300-9.jpg"
                                                                                        class="" alt="" />
                                                                                </div>
                                                                                <div
                                                                                    class="d-flex justify-content-start flex-column">
                                                                                    <a href="../../demo1/dist/pages/user-profile/overview.html"
                                                                                        class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">جواد
                                                                                        یساری</a>
                                                                                    <span
                                                                                        class="text-gray-400 fw-semibold d-block fs-7">لهستان</span>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td class="text-end pe-13">
                                                                            <span
                                                                                class="text-gray-600 fw-bold fs-6">93.46%</span>
                                                                        </td>
                                                                        <td class="text-end pe-0">
                                                                            <div id="kt_table_widget_16_chart_5_3"
                                                                                class="h-50px mt-n8 pe-7"
                                                                                data-kt-chart-color="success"></div>
                                                                        </td>
                                                                        <td class="text-end">
                                                                            <a href="#"
                                                                                class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                                                <i
                                                                                    class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                                                            </a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="d-flex align-items-center">
                                                                                <div class="symbol symbol-50px me-3">
                                                                                    <img src="../assets/media/avatars/300-3.jpg"
                                                                                        class="" alt="" />
                                                                                </div>
                                                                                <div
                                                                                    class="d-flex justify-content-start flex-column">
                                                                                    <a href="../../demo1/dist/pages/user-profile/overview.html"
                                                                                        class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">رالف
                                                                                        ادواردز</a>
                                                                                    <span
                                                                                        class="text-gray-400 fw-semibold d-block fs-7">مکزیک</span>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td class="text-end pe-13">
                                                                            <span
                                                                                class="text-gray-600 fw-bold fs-6">64.48%</span>
                                                                        </td>
                                                                        <td class="text-end pe-0">
                                                                            <div id="kt_table_widget_16_chart_5_4"
                                                                                class="h-50px mt-n8 pe-7"
                                                                                data-kt-chart-color="success"></div>
                                                                        </td>
                                                                        <td class="text-end">
                                                                            <a href="#"
                                                                                class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                                                <i
                                                                                    class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
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
                                                        <div class="bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-400px min-h-sm-100 h-100"
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
                                                                        <span
                                                                            class="text-gray-400 fs-7 fw-bold me-2 d-block lh-1 pb-1">ویژه</span>
                                                                        <span
                                                                            class="text-gray-800 fs-1 fw-bold">9درجه</span>
                                                                    </div>
                                                                    <!--end::Title-->
                                                                    <span
                                                                        class="badge badge-light-primary flex-shrink-0 align-self-center py-3 px-4 fs-7">در
                                                                        حال پردازش</span>
                                                                </div>
                                                                <!--end::Heading-->
                                                                <!--begin::آیتمs-->
                                                                <div
                                                                    class="d-flex align-items-center flex-wrap d-grid gap-2">
                                                                    <!--begin::آیتم-->
                                                                    <div
                                                                        class="d-flex align-items-center me-5 me-xl-13">
                                                                        <!--begin::Symbol-->
                                                                        <div
                                                                            class="symbol symbol-30px symbol-circle me-3">
                                                                            <img src="../assets/media/avatars/300-3.jpg"
                                                                                class="" alt="" />
                                                                        </div>
                                                                        <!--end::Symbol-->
                                                                        <!--begin::Info-->
                                                                        <div class="m-0">
                                                                            <span
                                                                                class="fw-semibold text-gray-400 d-block fs-8">مدیریت</span>
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
                                                                        <div
                                                                            class="symbol symbol-30px symbol-circle me-3">
                                                                            <span class="symbol-label bg-success">
                                                                                <i
                                                                                    class="ki-duotone ki-abstract-41 fs-5 text-white">
                                                                                    <span class="path1"></span>
                                                                                    <span class="path2"></span>
                                                                                </i>
                                                                            </span>
                                                                        </div>
                                                                        <!--end::Symbol-->
                                                                        <!--begin::Info-->
                                                                        <div class="m-0">
                                                                            <span
                                                                                class="fw-semibold text-gray-400 d-block fs-8">بودجه</span>
                                                                            <span
                                                                                class="fw-bold text-gray-800 fs-7">$64.800</span>
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
                                                                <span
                                                                    class="fw-semibold text-gray-600 fs-6 mb-8 d-block">تصاویر
                                                                    کارتونی مسطح با رنگ‌های واضح و ترکیب نشده و خانم موی
                                                                    زیبای بنفش نامتقارن</span>
                                                                <!--end::Text-->
                                                                <!--begin::Stats-->
                                                                <div class="d-flex">
                                                                    <!--begin::Stat-->
                                                                    <div
                                                                        class="border border-gray-300 border-dashed rounded min-w-100px w-100 py-2 px-4 me-6 mb-3">
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
                                                                    <div
                                                                        class="border border-gray-300 border-dashed rounded min-w-100px w-100 py-2 px-4 mb-3">
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
                                                                    <div class="symbol symbol-35px symbol-circle"
                                                                        data-bs-toggle="tooltip" title="میلاد مرادی">
                                                                        <img alt="Pic"
                                                                            src="../assets/media/avatars/300-2.jpg" />
                                                                    </div>
                                                                    <div class="symbol symbol-35px symbol-circle"
                                                                        data-bs-toggle="tooltip" title="میکائیل احمدی">
                                                                        <img alt="Pic"
                                                                            src="../assets/media/avatars/300-3.jpg" />
                                                                    </div>
                                                                    <div class="symbol symbol-35px symbol-circle"
                                                                        data-bs-toggle="tooltip" title="سوسن موسوی">
                                                                        <span
                                                                            class="symbol-label bg-primary text-inverse-primary fw-bold">S</span>
                                                                    </div>
                                                                </div>
                                                                <!--end::کاربران group-->
                                                                <!--begin::Actions-->
                                                                <a href="../../demo1/dist/apps/projects/project.html"
                                                                    class="d-flex align-items-center text-primary opacity-75-hover fs-6 fw-semibold">مشاهده
                                                                    پروژه
                                                                    <i
                                                                        class="ki-duotone ki-exit-right-corner fs-4 ms-1">
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
                                                    <div data-kt-daterangepicker="true"
                                                        data-kt-daterangepicker-opens="left"
                                                        data-kt-daterangepicker-range="today"
                                                        class="btn btn-sm btn-light d-flex align-items-center px-4">
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
                                                <div id="kt_charts_widget_36" class="min-h-auto w-100 ps-4 pe-6"
                                                    style="height: 300px"></div>
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
                                                        <span
                                                            class="fs-3 fw-semibold text-gray-400 align-self-start me-1">$</span>
                                                        <!--end::واحد پول-->
                                                        <!--begin::Value-->
                                                        <span
                                                            class="fs-2hx fw-bold text-gray-800 me-2 lh-1 ls-n2">3,274.94</span>
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
                                                    <button
                                                        class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end"
                                                        data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
                                                        data-kt-menu-overflow="true">
                                                        <i class="ki-duotone ki-dots-square fs-1 text-gray-300 me-n1">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                            <span class="path3"></span>
                                                            <span class="path4"></span>
                                                        </i>
                                                    </button>
                                                    <!--begin::Menu 2-->
                                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px"
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
                                                        <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                                            data-kt-menu-placement="left-start">
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
                                                            data-bs-toggle="tab" id="kt_charts_widget_35_tab_1"
                                                            href="#kt_charts_widget_35_tab_content_1">1d</a>
                                                        <!--end::Link-->
                                                    </li>
                                                    <!--end::آیتم-->
                                                    <!--begin::آیتم-->
                                                    <li class="nav-item mb-3">
                                                        <!--begin::Link-->
                                                        <a class="nav-link btn btn-flex flex-center btn-active-danger btn-color-gray-600 btn-active-color-white rounded-2 w-45px h-35px"
                                                            data-bs-toggle="tab" id="kt_charts_widget_35_tab_2"
                                                            href="#kt_charts_widget_35_tab_content_2">5d</a>
                                                        <!--end::Link-->
                                                    </li>
                                                    <!--end::آیتم-->
                                                    <!--begin::آیتم-->
                                                    <li class="nav-item mb-3">
                                                        <!--begin::Link-->
                                                        <a class="nav-link btn btn-flex flex-center btn-active-danger btn-color-gray-600 btn-active-color-white rounded-2 w-45px h-35px"
                                                            data-bs-toggle="tab" id="kt_charts_widget_35_tab_3"
                                                            href="#kt_charts_widget_35_tab_content_3">1m</a>
                                                        <!--end::Link-->
                                                    </li>
                                                    <!--end::آیتم-->
                                                    <!--begin::آیتم-->
                                                    <li class="nav-item mb-3">
                                                        <!--begin::Link-->
                                                        <a class="nav-link btn btn-flex flex-center btn-active-danger btn-color-gray-600 btn-active-color-white rounded-2 w-45px h-35px"
                                                            data-bs-toggle="tab" id="kt_charts_widget_35_tab_4"
                                                            href="#kt_charts_widget_35_tab_content_4">6m</a>
                                                        <!--end::Link-->
                                                    </li>
                                                    <!--end::آیتم-->
                                                    <!--begin::آیتم-->
                                                    <li class="nav-item mb-3">
                                                        <!--begin::Link-->
                                                        <a class="nav-link btn btn-flex flex-center btn-active-danger btn-color-gray-600 btn-active-color-white rounded-2 w-45px h-35px"
                                                            data-bs-toggle="tab" id="kt_charts_widget_35_tab_5"
                                                            href="#kt_charts_widget_35_tab_content_5">1y</a>
                                                        <!--end::Link-->
                                                    </li>
                                                    <!--end::آیتم-->
                                                </ul>
                                                <!--end::Nav-->
                                                <!--begin::Tab Content-->
                                                <div class="tab-content mt-n6">
                                                    <!--begin::Tap pane-->
                                                    <div class="tab-pane fade active show"
                                                        id="kt_charts_widget_35_tab_content_1">
                                                        <!--begin::Chart-->
                                                        <div id="kt_charts_widget_35_chart_1"
                                                            data-kt-chart-color="primary"
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
                                                                            <a href="#"
                                                                                class="text-gray-600 fw-bold fs-6">2:30
                                                                                PM</a>
                                                                        </td>
                                                                        <td class="pe-0 text-end">
                                                                            <span
                                                                                class="text-gray-800 fw-bold fs-6 me-1">$2,756.26</span>
                                                                        </td>
                                                                        <td class="pe-0 text-end">
                                                                            <span
                                                                                class="fw-bold fs-6 text-danger">-139.34</span>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <a href="#"
                                                                                class="text-gray-600 fw-bold fs-6">3:10
                                                                                PM</a>
                                                                        </td>
                                                                        <td class="pe-0 text-end">
                                                                            <span
                                                                                class="text-gray-800 fw-bold fs-6 me-1">$3,207.03</span>
                                                                        </td>
                                                                        <td class="pe-0 text-end">
                                                                            <span
                                                                                class="fw-bold fs-6 text-success">+576.24</span>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <a href="#"
                                                                                class="text-gray-600 fw-bold fs-6">3:55
                                                                                PM</a>
                                                                        </td>
                                                                        <td class="pe-0 text-end">
                                                                            <span
                                                                                class="text-gray-800 fw-bold fs-6 me-1">$3,274.94</span>
                                                                        </td>
                                                                        <td class="pe-0 text-end">
                                                                            <span
                                                                                class="fw-bold fs-6 text-success">+124.03</span>
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
                                                        <div id="kt_charts_widget_35_chart_2"
                                                            data-kt-chart-color="primary"
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
                                                                            <a href="#"
                                                                                class="text-gray-600 fw-bold fs-6">4:30
                                                                                PM</a>
                                                                        </td>
                                                                        <td class="pe-0 text-end">
                                                                            <span
                                                                                class="text-gray-800 fw-bold fs-6 me-1">$2,345.45</span>
                                                                        </td>
                                                                        <td class="pe-0 text-end">
                                                                            <span
                                                                                class="fw-bold fs-6 text-success">+134.02</span>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <a href="#"
                                                                                class="text-gray-600 fw-bold fs-6">11:35
                                                                                AM</a>
                                                                        </td>
                                                                        <td class="pe-0 text-end">
                                                                            <span
                                                                                class="text-gray-800 fw-bold fs-6 me-1">$756.26</span>
                                                                        </td>
                                                                        <td class="pe-0 text-end">
                                                                            <span
                                                                                class="fw-bold fs-6 text-primary">-124.03</span>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <a href="#"
                                                                                class="text-gray-600 fw-bold fs-6">3:30
                                                                                PM</a>
                                                                        </td>
                                                                        <td class="pe-0 text-end">
                                                                            <span
                                                                                class="text-gray-800 fw-bold fs-6 me-1">$1,756.26</span>
                                                                        </td>
                                                                        <td class="pe-0 text-end">
                                                                            <span
                                                                                class="fw-bold fs-6 text-danger">+144.04</span>
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
                                                        <div id="kt_charts_widget_35_chart_3"
                                                            data-kt-chart-color="primary"
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
                                                                            <a href="#"
                                                                                class="text-gray-600 fw-bold fs-6">3:20
                                                                                AM</a>
                                                                        </td>
                                                                        <td class="pe-0 text-end">
                                                                            <span
                                                                                class="text-gray-800 fw-bold fs-6 me-1">$3,756.26</span>
                                                                        </td>
                                                                        <td class="pe-0 text-end">
                                                                            <span
                                                                                class="fw-bold fs-6 text-primary">+185.03</span>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <a href="#"
                                                                                class="text-gray-600 fw-bold fs-6">12:30
                                                                                AM</a>
                                                                        </td>
                                                                        <td class="pe-0 text-end">
                                                                            <span
                                                                                class="text-gray-800 fw-bold fs-6 me-1">$2,756.26</span>
                                                                        </td>
                                                                        <td class="pe-0 text-end">
                                                                            <span
                                                                                class="fw-bold fs-6 text-danger">+124.03</span>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <a href="#"
                                                                                class="text-gray-600 fw-bold fs-6">4:30
                                                                                PM</a>
                                                                        </td>
                                                                        <td class="pe-0 text-end">
                                                                            <span
                                                                                class="text-gray-800 fw-bold fs-6 me-1">$756.26</span>
                                                                        </td>
                                                                        <td class="pe-0 text-end">
                                                                            <span
                                                                                class="fw-bold fs-6 text-success">-154.03</span>
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
                                                        <div id="kt_charts_widget_35_chart_4"
                                                            data-kt-chart-color="primary"
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
                                                                            <a href="#"
                                                                                class="text-gray-600 fw-bold fs-6">2:30
                                                                                PM</a>
                                                                        </td>
                                                                        <td class="pe-0 text-end">
                                                                            <span
                                                                                class="text-gray-800 fw-bold fs-6 me-1">$2,756.26</span>
                                                                        </td>
                                                                        <td class="pe-0 text-end">
                                                                            <span
                                                                                class="fw-bold fs-6 text-warning">+124.03</span>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <a href="#"
                                                                                class="text-gray-600 fw-bold fs-6">5:30
                                                                                AM</a>
                                                                        </td>
                                                                        <td class="pe-0 text-end">
                                                                            <span
                                                                                class="text-gray-800 fw-bold fs-6 me-1">$1,756.26</span>
                                                                        </td>
                                                                        <td class="pe-0 text-end">
                                                                            <span
                                                                                class="fw-bold fs-6 text-info">+144.65</span>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <a href="#"
                                                                                class="text-gray-600 fw-bold fs-6">4:30
                                                                                PM</a>
                                                                        </td>
                                                                        <td class="pe-0 text-end">
                                                                            <span
                                                                                class="text-gray-800 fw-bold fs-6 me-1">$2,085.25</span>
                                                                        </td>
                                                                        <td class="pe-0 text-end">
                                                                            <span
                                                                                class="fw-bold fs-6 text-primary">+154.06</span>
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
                                                        <div id="kt_charts_widget_35_chart_5"
                                                            data-kt-chart-color="primary"
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
                                                                            <a href="#"
                                                                                class="text-gray-600 fw-bold fs-6">2:30
                                                                                PM</a>
                                                                        </td>
                                                                        <td class="pe-0 text-end">
                                                                            <span
                                                                                class="text-gray-800 fw-bold fs-6 me-1">$2,045.04</span>
                                                                        </td>
                                                                        <td class="pe-0 text-end">
                                                                            <span
                                                                                class="fw-bold fs-6 text-warning">+114.03</span>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <a href="#"
                                                                                class="text-gray-600 fw-bold fs-6">3:30
                                                                                AM</a>
                                                                        </td>
                                                                        <td class="pe-0 text-end">
                                                                            <span
                                                                                class="text-gray-800 fw-bold fs-6 me-1">$756.26</span>
                                                                        </td>
                                                                        <td class="pe-0 text-end">
                                                                            <span
                                                                                class="fw-bold fs-6 text-primary">-124.03</span>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <a href="#"
                                                                                class="text-gray-600 fw-bold fs-6">10:30
                                                                                PM</a>
                                                                        </td>
                                                                        <td class="pe-0 text-end">
                                                                            <span
                                                                                class="text-gray-800 fw-bold fs-6 me-1">$1.756.26</span>
                                                                        </td>
                                                                        <td class="pe-0 text-end">
                                                                            <span
                                                                                class="fw-bold fs-6 text-info">+165.86</span>
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
                                                                            <img src="../assets/media/stock/600x600/img-49.jpg"
                                                                                class="" alt="" />
                                                                        </div>
                                                                        <div
                                                                            class="d-flex justify-content-start flex-column">
                                                                            <a href="#"
                                                                                class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">اپلیکیشن</a>
                                                                            <span
                                                                                class="text-gray-400 fw-semibold d-block fs-7">هنری</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="text-end pe-0">
                                                                    <span
                                                                        class="text-gray-600 fw-bold fs-6">$32,400</span>
                                                                </td>
                                                                <td class="text-end pe-0">
                                                                    <!--begin::Tags-->
                                                                    <span class="badge badge-light-success fs-base">
                                                                        <i
                                                                            class="ki-duotone ki-arrow-up fs-5 text-success ms-n1">
                                                                            <span class="path1"></span>
                                                                            <span class="path2"></span>
                                                                        </i>9.2%</span>
                                                                    <!--end::Tags-->
                                                                </td>
                                                                <td class="text-end pe-12">
                                                                    <span
                                                                        class="badge py-3 px-4 fs-7 badge-light-primary">در
                                                                        حال پردازش</span>
                                                                </td>
                                                                <td class="text-end pe-0">
                                                                    <div id="kt_table_widget_14_chart_1"
                                                                        class="h-50px mt-n8 pe-7"
                                                                        data-kt-chart-color="success"></div>
                                                                </td>
                                                                <td class="text-end">
                                                                    <a href="#"
                                                                        class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                                        <i
                                                                            class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="symbol symbol-50px me-3">
                                                                            <img src="../assets/media/stock/600x600/img-40.jpg"
                                                                                class="" alt="" />
                                                                        </div>
                                                                        <div
                                                                            class="d-flex justify-content-start flex-column">
                                                                            <a href="#"
                                                                                class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">رنگارنگ</a>
                                                                            <span
                                                                                class="text-gray-400 fw-semibold d-block fs-7">استر
                                                                                هوارد</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="text-end pe-0">
                                                                    <span
                                                                        class="text-gray-600 fw-bold fs-6">$256,910</span>
                                                                </td>
                                                                <td class="text-end pe-0">
                                                                    <!--begin::Tags-->
                                                                    <span class="badge badge-light-danger fs-base">
                                                                        <i
                                                                            class="ki-duotone ki-arrow-down fs-5 text-danger ms-n1">
                                                                            <span class="path1"></span>
                                                                            <span class="path2"></span>
                                                                        </i>0.4%</span>
                                                                    <!--end::Tags-->
                                                                </td>
                                                                <td class="text-end pe-12">
                                                                    <span
                                                                        class="badge py-3 px-4 fs-7 badge-light-warning">در
                                                                        انتظار</span>
                                                                </td>
                                                                <td class="text-end pe-0">
                                                                    <div id="kt_table_widget_14_chart_2"
                                                                        class="h-50px mt-n8 pe-7"
                                                                        data-kt-chart-color="danger"></div>
                                                                </td>
                                                                <td class="text-end">
                                                                    <a href="#"
                                                                        class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                                        <i
                                                                            class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="symbol symbol-50px me-3">
                                                                            <img src="../assets/media/stock/600x600/img-39.jpg"
                                                                                class="" alt="" />
                                                                        </div>
                                                                        <div
                                                                            class="d-flex justify-content-start flex-column">
                                                                            <a href="#"
                                                                                class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">مدیریت
                                                                                محتوا</a>
                                                                            <span
                                                                                class="text-gray-400 fw-semibold d-block fs-7">ویلسون</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="text-end pe-0">
                                                                    <span
                                                                        class="text-gray-600 fw-bold fs-6">$8,220</span>
                                                                </td>
                                                                <td class="text-end pe-0">
                                                                    <!--begin::Tags-->
                                                                    <span class="badge badge-light-success fs-base">
                                                                        <i
                                                                            class="ki-duotone ki-arrow-up fs-5 text-success ms-n1">
                                                                            <span class="path1"></span>
                                                                            <span class="path2"></span>
                                                                        </i>9.2%</span>
                                                                    <!--end::Tags-->
                                                                </td>
                                                                <td class="text-end pe-12">
                                                                    <span
                                                                        class="badge py-3 px-4 fs-7 badge-light-primary">در
                                                                        حال پردازش</span>
                                                                </td>
                                                                <td class="text-end pe-0">
                                                                    <div id="kt_table_widget_14_chart_3"
                                                                        class="h-50px mt-n8 pe-7"
                                                                        data-kt-chart-color="success"></div>
                                                                </td>
                                                                <td class="text-end">
                                                                    <a href="#"
                                                                        class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                                        <i
                                                                            class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="symbol symbol-50px me-3">
                                                                            <img src="../assets/media/stock/600x600/img-47.jpg"
                                                                                class="" alt="" />
                                                                        </div>
                                                                        <div
                                                                            class="d-flex justify-content-start flex-column">
                                                                            <a href="#"
                                                                                class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">قدرت
                                                                            </a>
                                                                            <span
                                                                                class="text-gray-400 fw-semibold d-block fs-7">کامران</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="text-end pe-0">
                                                                    <span
                                                                        class="text-gray-600 fw-bold fs-6">$74,000</span>
                                                                </td>
                                                                <td class="text-end pe-0">
                                                                    <!--begin::Tags-->
                                                                    <span class="badge badge-light-success fs-base">
                                                                        <i
                                                                            class="ki-duotone ki-arrow-up fs-5 text-success ms-n1">
                                                                            <span class="path1"></span>
                                                                            <span class="path2"></span>
                                                                        </i>9.2%</span>
                                                                    <!--end::Tags-->
                                                                </td>
                                                                <td class="text-end pe-12">
                                                                    <span
                                                                        class="badge py-3 px-4 fs-7 badge-light-success">تکمیل
                                                                        شده</span>
                                                                </td>
                                                                <td class="text-end pe-0">
                                                                    <div id="kt_table_widget_14_chart_4"
                                                                        class="h-50px mt-n8 pe-7"
                                                                        data-kt-chart-color="success"></div>
                                                                </td>
                                                                <td class="text-end">
                                                                    <a href="#"
                                                                        class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                                        <i
                                                                            class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="symbol symbol-50px me-3">
                                                                            <img src="../assets/media/stock/600x600/img-48.jpg"
                                                                                class="" alt="" />
                                                                        </div>
                                                                        <div
                                                                            class="d-flex justify-content-start flex-column">
                                                                            <a href="#"
                                                                                class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">9درجه</a>
                                                                            <span
                                                                                class="text-gray-400 fw-semibold d-block fs-7">سامان</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="text-end pe-0">
                                                                    <span
                                                                        class="text-gray-600 fw-bold fs-6">$183,300</span>
                                                                </td>
                                                                <td class="text-end pe-0">
                                                                    <!--begin::Tags-->
                                                                    <span class="badge badge-light-danger fs-base">
                                                                        <i
                                                                            class="ki-duotone ki-arrow-down fs-5 text-danger ms-n1">
                                                                            <span class="path1"></span>
                                                                            <span class="path2"></span>
                                                                        </i>0.4%</span>
                                                                    <!--end::Tags-->
                                                                </td>
                                                                <td class="text-end pe-12">
                                                                    <span
                                                                        class="badge py-3 px-4 fs-7 badge-light-primary">در
                                                                        حال پردازش</span>
                                                                </td>
                                                                <td class="text-end pe-0">
                                                                    <div id="kt_table_widget_14_chart_5"
                                                                        class="h-50px mt-n8 pe-7"
                                                                        data-kt-chart-color="danger"></div>
                                                                </td>
                                                                <td class="text-end">
                                                                    <a href="#"
                                                                        class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                                        <i
                                                                            class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
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
                                                    <button
                                                        class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end"
                                                        data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
                                                        data-kt-menu-overflow="true">
                                                        <i class="ki-duotone ki-dots-square fs-1">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                            <span class="path3"></span>
                                                            <span class="path4"></span>
                                                        </i>
                                                    </button>
                                                    <!--begin::Menu 2-->
                                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px"
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
                                                        <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                                            data-kt-menu-placement="left-start">
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
                    <!--begin::Footer-->
                    <div id="kt_app_footer" class="app-footer">
                        <!--begin::Footer container-->
                        <div
                            class="app-container container-fluid d-flex flex-column flex-md-row flex-center flex-md-stack py-3">
                            <!--begin::Copyright-->
                            <div class="text-dark order-2 order-md-1">
                                <span class="text-muted fw-semibold me-1">2023&copy;</span>
                                <a href="https://keenthemes.com" target="_blank"
                                    class="text-gray-800 text-hover-primary">ساتراس وب</a>
                            </div>
                            <!--end::Copyright-->
                            <!--begin::Menu-->
                            <ul class="menu menu-gray-600 menu-hover-primary fw-semibold order-1">
                                <li class="menu-item">
                                    <a href="https://keenthemes.com" target="_blank" class="menu-link px-2">درباره ی
                                        ما</a>
                                </li>
                                <li class="menu-item">
                                    <a href="https://rtl-theme.com" target="_blank" class="menu-link px-2">پشتیبانی</a>
                                </li>
                                <li class="menu-item">
                                    <a href="https://www.rtl-theme.com/metronic-admin-html-template/" target="_blank"
                                        class="menu-link px-2">خرید</a>
                                </li>
                            </ul>
                            <!--end::Menu-->
                        </div>
                        <!--end::Footer container-->
                    </div>
                    <!--end::Footer-->
                </div>
                <!--end:::Main-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Page-->
    </div>
    <!--end::اپلیکیشن-->
    <!--begin::کشوs-->
    <!--begin::فعالیتها drawer-->
    <div id="kt_activities" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="activities"
        data-kt-drawer-activate="true" data-kt-drawer-overlay="true"
        data-kt-drawer-width="{default:'300px', 'lg': '900px'}" data-kt-drawer-direction="end"
        data-kt-drawer-toggle="#kt_activities_toggle" data-kt-drawer-close="#kt_activities_close">
        <div class="card shadow-none border-0 rounded-0">
            <!--begin::Header-->
            <div class="card-header" id="kt_activities_header">
                <h3 class="card-title fw-bold text-dark">گزارش ها</h3>
                <div class="card-toolbar">
                    <button type="button" class="btn btn-sm btn-icon btn-active-light-primary me-n5"
                        id="kt_activities_close">
                        <i class="ki-duotone ki-cross fs-1">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </button>
                </div>
            </div>
            <!--end::Header-->
            <!--begin::Body-->
            <div class="card-body position-relative" id="kt_activities_body">
                <!--begin::Content-->
                <div id="kt_activities_scroll" class="position-relative scroll-y me-n5 pe-5" data-kt-scroll="true"
                    data-kt-scroll-height="auto" data-kt-scroll-wrappers="#kt_activities_body"
                    data-kt-scroll-dependencies="#kt_activities_header, #kt_activities_footer"
                    data-kt-scroll-offset="5px">
                    <!--begin::timeline items-->
                    <div class="timeline">
                        <!--begin::timeline item-->
                        <div class="timeline-item">
                            <!--begin::timeline line-->
                            <div class="timeline-line w-40px"></div>
                            <!--end::timeline line-->
                            <!--begin::timeline icon-->
                            <div class="timeline-icon symbol symbol-circle symbol-40px me-4">
                                <div class="symbol-label bg-light">
                                    <i class="ki-duotone ki-message-text-2 fs-2 text-gray-500">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                    </i>
                                </div>
                            </div>
                            <!--end::timeline icon-->
                            <!--begin::timeline content-->
                            <div class="timeline-content mb-10 mt-n1">
                                <!--begin::timeline heading-->
                                <div class="pe-3 mb-5">
                                    <!--begin::Title-->
                                    <div class="fs-5 fw-semibold mb-2">در پروژه اپلیکیشن موبایل کار جدید برای شما وجود
                                        دارد:</div>
                                    <!--end::Title-->
                                    <!--begin::توضیحات-->
                                    <div class="d-flex align-items-center mt-1 fs-6">
                                        <!--begin::Info-->
                                        <div class="text-muted me-2 fs-7">اضافه شده در ساعت 4:12</div>
                                        <!--end::Info-->
                                        <!--begin::user-->
                                        <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip"
                                            data-bs-boundary="window" data-bs-placement="top" title="Nina Nilson">
                                            <img src="../assets/media/avatars/300-14.jpg" alt="img" />
                                        </div>
                                        <!--end::user-->
                                    </div>
                                    <!--end::توضیحات-->
                                </div>
                                <!--end::timeline heading-->
                                <!--begin::timeline details-->
                                <div class="overflow-auto pb-5">
                                    <!--begin::Record-->
                                    <div
                                        class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-750px px-7 py-3 mb-5">
                                        <!--begin::Title-->
                                        <a href="../../demo1/dist/apps/projects/project.html"
                                            class="fs-5 text-dark text-hover-primary fw-semibold w-375px min-w-200px">ملاقات
                                            با مشتری</a>
                                        <!--end::Title-->
                                        <!--begin::Tags-->
                                        <div class="min-w-175px pe-2">
                                            <span class="badge badge-light text-muted">طراح نرم افزار</span>
                                        </div>
                                        <!--end::Tags-->
                                        <!--begin::users-->
                                        <div class="symbol-group symbol-hover flex-nowrap flex-grow-1 min-w-100px pe-2">
                                            <!--begin::user-->
                                            <div class="symbol symbol-circle symbol-25px">
                                                <img src="../assets/media/avatars/300-2.jpg" alt="img" />
                                            </div>
                                            <!--end::user-->
                                            <!--begin::user-->
                                            <div class="symbol symbol-circle symbol-25px">
                                                <img src="../assets/media/avatars/300-14.jpg" alt="img" />
                                            </div>
                                            <!--end::user-->
                                            <!--begin::user-->
                                            <div class="symbol symbol-circle symbol-25px">
                                                <div
                                                    class="symbol-label fs-8 fw-semibold bg-primary text-inverse-primary">
                                                    A</div>
                                            </div>
                                            <!--end::user-->
                                        </div>
                                        <!--end::users-->
                                        <!--begin::پردازش-->
                                        <div class="min-w-125px pe-2">
                                            <span class="badge badge-light-primary">درحال پردازش</span>
                                        </div>
                                        <!--end::پردازش-->
                                        <!--begin::Actions-->
                                        <a href="../../demo1/dist/apps/projects/project.html"
                                            class="btn btn-sm btn-light btn-active-light-primary">نمایش</a>
                                        <!--end::Actions-->
                                    </div>
                                    <!--end::Record-->
                                    <!--begin::Record-->
                                    <div
                                        class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-750px px-7 py-3 mb-0">
                                        <!--begin::Title-->
                                        <a href="../../demo1/dist/apps/projects/project.html"
                                            class="fs-5 text-dark text-hover-primary fw-semibold w-375px min-w-200px">آماده
                                            سازی تحویل پروژه</a>
                                        <!--end::Title-->
                                        <!--begin::Tags-->
                                        <div class="min-w-175px">
                                            <span class="badge badge-light text-muted">توسعه دهنده سیستم</span>
                                        </div>
                                        <!--end::Tags-->
                                        <!--begin::users-->
                                        <div class="symbol-group symbol-hover flex-nowrap flex-grow-1 min-w-100px">
                                            <!--begin::user-->
                                            <div class="symbol symbol-circle symbol-25px">
                                                <img src="../assets/media/avatars/300-20.jpg" alt="img" />
                                            </div>
                                            <!--end::user-->
                                            <!--begin::user-->
                                            <div class="symbol symbol-circle symbol-25px">
                                                <div
                                                    class="symbol-label fs-8 fw-semibold bg-success text-inverse-primary">
                                                    B</div>
                                            </div>
                                            <!--end::user-->
                                        </div>
                                        <!--end::users-->
                                        <!--begin::پردازش-->
                                        <div class="min-w-125px">
                                            <span class="badge badge-light-success">کامل شد</span>
                                        </div>
                                        <!--end::پردازش-->
                                        <!--begin::Actions-->
                                        <a href="../../demo1/dist/apps/projects/project.html"
                                            class="btn btn-sm btn-light btn-active-light-primary">نمایش</a>
                                        <!--end::Actions-->
                                    </div>
                                    <!--end::Record-->
                                </div>
                                <!--end::timeline details-->
                            </div>
                            <!--end::timeline content-->
                        </div>
                        <!--end::timeline item-->
                        <!--begin::timeline item-->
                        <div class="timeline-item">
                            <!--begin::timeline line-->
                            <div class="timeline-line w-40px"></div>
                            <!--end::timeline line-->
                            <!--begin::timeline icon-->
                            <div class="timeline-icon symbol symbol-circle symbol-40px">
                                <div class="symbol-label bg-light">
                                    <i class="ki-duotone ki-flag fs-2 text-gray-500">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </div>
                            </div>
                            <!--end::timeline icon-->
                            <!--begin::timeline content-->
                            <div class="timeline-content mb-10 mt-n2">
                                <!--begin::timeline heading-->
                                <div class="overflow-auto pe-3">
                                    <!--begin::Title-->
                                    <div class="fs-5 fw-semibold mb-2">دعوت نامه برای ساخت طراحی های جذاب که کارگاه
                                        انسانی رابیانمی کنند</div>
                                    <!--end::Title-->
                                    <!--begin::توضیحات-->
                                    <div class="d-flex align-items-center mt-1 fs-6">
                                        <!--begin::Info-->
                                        <div class="text-muted me-2 fs-7">ارسال شده در ساعت 4:23</div>
                                        <!--end::Info-->
                                        <!--begin::user-->
                                        <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip"
                                            data-bs-boundary="window" data-bs-placement="top" title="Alan Nilson">
                                            <img src="../assets/media/avatars/300-1.jpg" alt="img" />
                                        </div>
                                        <!--end::user-->
                                    </div>
                                    <!--end::توضیحات-->
                                </div>
                                <!--end::timeline heading-->
                            </div>
                            <!--end::timeline content-->
                        </div>
                        <!--end::timeline item-->
                        <!--begin::timeline item-->
                        <div class="timeline-item">
                            <!--begin::timeline line-->
                            <div class="timeline-line w-40px"></div>
                            <!--end::timeline line-->
                            <!--begin::timeline icon-->
                            <div class="timeline-icon symbol symbol-circle symbol-40px">
                                <div class="symbol-label bg-light">
                                    <i class="ki-duotone ki-disconnect fs-2 text-gray-500">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        <span class="path4"></span>
                                        <span class="path5"></span>
                                    </i>
                                </div>
                            </div>
                            <!--end::timeline icon-->
                            <!--begin::timeline content-->
                            <div class="timeline-content mb-10 mt-n1">
                                <!--begin::timeline heading-->
                                <div class="mb-5 pe-3">
                                    <!--begin::Title-->
                                    <a href="#" class="fs-5 fw-semibold text-gray-800 text-hover-primary mb-2">3 پروژه
                                        ورودی جدید پرونده ها:</a>
                                    <!--end::Title-->
                                    <!--begin::توضیحات-->
                                    <div class="d-flex align-items-center mt-1 fs-6">
                                        <!--begin::Info-->
                                        <div class="text-muted me-2 fs-7">ارسال شده در ساعت 10:30</div>
                                        <!--end::Info-->
                                        <!--begin::user-->
                                        <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip"
                                            data-bs-boundary="window" data-bs-placement="top" title="دی Hummer">
                                            <img src="../assets/media/avatars/300-23.jpg" alt="img" />
                                        </div>
                                        <!--end::user-->
                                    </div>
                                    <!--end::توضیحات-->
                                </div>
                                <!--end::timeline heading-->
                                <!--begin::timeline details-->
                                <div class="overflow-auto pb-5">
                                    <div
                                        class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-5">
                                        <!--begin::آیتم-->
                                        <div class="d-flex flex-aligns-center pe-10 pe-lg-20">
                                            <!--begin::Icon-->
                                            <img alt="" class="w-30px me-3" src="../assets/media/svg/files/pdf.svg" />
                                            <!--end::Icon-->
                                            <!--begin::Info-->
                                            <div class="ms-1 fw-semibold">
                                                <!--begin::Desc-->
                                                <a href="../../demo1/dist/apps/projects/project.html"
                                                    class="fs-6 text-hover-primary fw-bold">دارایی، مالیه، سرمایه گذاری
                                                </a>
                                                <!--end::Desc-->
                                                <!--begin::شماره کارت-->
                                                <div class="text-gray-400">1.9mb</div>
                                                <!--end::شماره کارت-->
                                            </div>
                                            <!--begin::Info-->
                                        </div>
                                        <!--end::آیتم-->
                                        <!--begin::آیتم-->
                                        <div class="d-flex flex-aligns-center pe-10 pe-lg-20">
                                            <!--begin::Icon-->
                                            <img alt="../../demo1/dist/apps/projects/project.html" class="w-30px me-3"
                                                src="../assets/media/svg/files/doc.svg" />
                                            <!--end::Icon-->
                                            <!--begin::Info-->
                                            <div class="ms-1 fw-semibold">
                                                <!--begin::Desc-->
                                                <a href="#" class="fs-6 text-hover-primary fw-bold">مشتری نتایج تست</a>
                                                <!--end::Desc-->
                                                <!--begin::شماره کارت-->
                                                <div class="text-gray-400">18kb</div>
                                                <!--end::شماره کارت-->
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::آیتم-->
                                        <!--begin::آیتم-->
                                        <div class="d-flex flex-aligns-center">
                                            <!--begin::Icon-->
                                            <img alt="../../demo1/dist/apps/projects/project.html" class="w-30px me-3"
                                                src="../assets/media/svg/files/css.svg" />
                                            <!--end::Icon-->
                                            <!--begin::Info-->
                                            <div class="ms-1 fw-semibold">
                                                <!--begin::Desc-->
                                                <a href="#" class="fs-6 text-hover-primary fw-bold"> گزارشات دارایی،
                                                    مالیه، سرمایه گذاری</a>
                                                <!--end::Desc-->
                                                <!--begin::شماره کارت-->
                                                <div class="text-gray-400">20mb</div>
                                                <!--end::شماره کارت-->
                                            </div>
                                            <!--end::Icon-->
                                        </div>
                                        <!--end::آیتم-->
                                    </div>
                                </div>
                                <!--end::timeline details-->
                            </div>
                            <!--end::timeline content-->
                        </div>
                        <!--end::timeline item-->
                        <!--begin::timeline item-->
                        <div class="timeline-item">
                            <!--begin::timeline line-->
                            <div class="timeline-line w-40px"></div>
                            <!--end::timeline line-->
                            <!--begin::timeline icon-->
                            <div class="timeline-icon symbol symbol-circle symbol-40px">
                                <div class="symbol-label bg-light">
                                    <i class="ki-duotone ki-abstract-26 fs-2 text-gray-500">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </div>
                            </div>
                            <!--end::timeline icon-->
                            <!--begin::timeline content-->
                            <div class="timeline-content mb-10 mt-n1">
                                <!--begin::timeline heading-->
                                <div class="pe-3 mb-5">
                                    <!--begin::Title-->
                                    <div class="fs-5 fw-semibold mb-2">وظیفه
                                        <a href="#" class="text-primary fw-bold me-1">#45890</a>ادغام با
                                        <a href="#" class="text-primary fw-bold me-1">#45890</a>داشبورد پروژه ها:
                                    </div>
                                    <!--end::Title-->
                                    <!--begin::توضیحات-->
                                    <div class="d-flex align-items-center mt-1 fs-6">
                                        <!--begin::Info-->
                                        <div class="text-muted me-2 fs-7">آغاز شده در 4:23 بعد از ظهر توسط</div>
                                        <!--end::Info-->
                                        <!--begin::user-->
                                        <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip"
                                            data-bs-boundary="window" data-bs-placement="top" title="Nina Nilson">
                                            <img src="../assets/media/avatars/300-14.jpg" alt="img" />
                                        </div>
                                        <!--end::user-->
                                    </div>
                                    <!--end::توضیحات-->
                                </div>
                                <!--end::timeline heading-->
                            </div>
                            <!--end::timeline content-->
                        </div>
                        <!--end::timeline item-->
                        <!--begin::timeline item-->
                        <div class="timeline-item">
                            <!--begin::timeline line-->
                            <div class="timeline-line w-40px"></div>
                            <!--end::timeline line-->
                            <!--begin::timeline icon-->
                            <div class="timeline-icon symbol symbol-circle symbol-40px">
                                <div class="symbol-label bg-light">
                                    <i class="ki-duotone ki-pencil fs-2 text-gray-500">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </div>
                            </div>
                            <!--end::timeline icon-->
                            <!--begin::timeline content-->
                            <div class="timeline-content mb-10 mt-n1">
                                <!--begin::timeline heading-->
                                <div class="pe-3 mb-5">
                                    <!--begin::Title-->
                                    <div class="fs-5 fw-semibold mb-2">3 مفهوم جدید طراحی برنامه اضافه شده است:</div>
                                    <!--end::Title-->
                                    <!--begin::توضیحات-->
                                    <div class="d-flex align-items-center mt-1 fs-6">
                                        <!--begin::Info-->
                                        <div class="text-muted me-2 fs-7">ایجاد شده در 4:23 بعد از ظهر توسط</div>
                                        <!--end::Info-->
                                        <!--begin::user-->
                                        <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip"
                                            data-bs-boundary="window" data-bs-placement="top" title="اسفندcus Dotson">
                                            <img src="../assets/media/avatars/300-2.jpg" alt="img" />
                                        </div>
                                        <!--end::user-->
                                    </div>
                                    <!--end::توضیحات-->
                                </div>
                                <!--end::timeline heading-->
                                <!--begin::timeline details-->
                                <div class="overflow-auto pb-5">
                                    <div
                                        class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-7">
                                        <!--begin::آیتم-->
                                        <div class="overlay me-10">
                                            <!--begin::Image-->
                                            <div class="overlay-wrapper">
                                                <img alt="img" class="rounded w-150px"
                                                    src="../assets/media/stock/600x400/img-29.jpg" />
                                            </div>
                                            <!--end::Image-->
                                            <!--begin::Link-->
                                            <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                                                <a href="#" class="btn btn-sm btn-primary btn-shadow">کاوش کنید</a>
                                            </div>
                                            <!--end::Link-->
                                        </div>
                                        <!--end::آیتم-->
                                        <!--begin::آیتم-->
                                        <div class="overlay me-10">
                                            <!--begin::Image-->
                                            <div class="overlay-wrapper">
                                                <img alt="img" class="rounded w-150px"
                                                    src="../assets/media/stock/600x400/img-31.jpg" />
                                            </div>
                                            <!--end::Image-->
                                            <!--begin::Link-->
                                            <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                                                <a href="#" class="btn btn-sm btn-primary btn-shadow">کاوش کنید</a>
                                            </div>
                                            <!--end::Link-->
                                        </div>
                                        <!--end::آیتم-->
                                        <!--begin::آیتم-->
                                        <div class="overlay">
                                            <!--begin::Image-->
                                            <div class="overlay-wrapper">
                                                <img alt="img" class="rounded w-150px"
                                                    src="../assets/media/stock/600x400/img-40.jpg" />
                                            </div>
                                            <!--end::Image-->
                                            <!--begin::Link-->
                                            <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                                                <a href="#" class="btn btn-sm btn-primary btn-shadow">کاوش کنید</a>
                                            </div>
                                            <!--end::Link-->
                                        </div>
                                        <!--end::آیتم-->
                                    </div>
                                </div>
                                <!--end::timeline details-->
                            </div>
                            <!--end::timeline content-->
                        </div>
                        <!--end::timeline item-->
                        <!--begin::timeline item-->
                        <div class="timeline-item">
                            <!--begin::timeline line-->
                            <div class="timeline-line w-40px"></div>
                            <!--end::timeline line-->
                            <!--begin::timeline icon-->
                            <div class="timeline-icon symbol symbol-circle symbol-40px">
                                <div class="symbol-label bg-light">
                                    <i class="ki-duotone ki-sms fs-2 text-gray-500">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </div>
                            </div>
                            <!--end::timeline icon-->
                            <!--begin::timeline content-->
                            <div class="timeline-content mb-10 mt-n1">
                                <!--begin::timeline heading-->
                                <div class="pe-3 mb-5">
                                    <!--begin::Title-->
                                    <div class="fs-5 fw-semibold mb-2">کیس جدید
                                        <a href="#" class="text-primary fw-bold me-1">#67890</a>در پروژه طراحی دیتابیس
                                        چند سکویی به شما اختصاص داده شده است
                                    </div>
                                    <!--end::Title-->
                                    <!--begin::توضیحات-->
                                    <div class="overflow-auto pb-5">
                                        <!--begin::Wrapper-->
                                        <div class="d-flex align-items-center mt-1 fs-6">
                                            <!--begin::Info-->
                                            <div class="text-muted me-2 fs-7">اضافه شده در ساعت 4:12</div>
                                            <!--end::Info-->
                                            <!--begin::user-->
                                            <a href="#" class="text-primary fw-bold me-1">رضا علی ابادی</a>
                                            <!--end::user-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::توضیحات-->
                                </div>
                                <!--end::timeline heading-->
                            </div>
                            <!--end::timeline content-->
                        </div>
                        <!--end::timeline item-->
                        <!--begin::timeline item-->
                        <div class="timeline-item">
                            <!--begin::timeline line-->
                            <div class="timeline-line w-40px"></div>
                            <!--end::timeline line-->
                            <!--begin::timeline icon-->
                            <div class="timeline-icon symbol symbol-circle symbol-40px">
                                <div class="symbol-label bg-light">
                                    <i class="ki-duotone ki-pencil fs-2 text-gray-500">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </div>
                            </div>
                            <!--end::timeline icon-->
                            <!--begin::timeline content-->
                            <div class="timeline-content mb-10 mt-n1">
                                <!--begin::timeline heading-->
                                <div class="pe-3 mb-5">
                                    <!--begin::Title-->
                                    <div class="fs-5 fw-semibold mb-2">رسید به دست شما سفارش جدید</div>
                                    <!--end::Title-->
                                    <!--begin::توضیحات-->
                                    <div class="d-flex align-items-center mt-1 fs-6">
                                        <!--begin::Info-->
                                        <div class="text-muted me-2 fs-7">در 5:05 صبح توسط</div>
                                        <!--end::Info-->
                                        <!--begin::user-->
                                        <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip"
                                            data-bs-boundary="window" data-bs-placement="top" title="Robert Rich">
                                            <img src="../assets/media/avatars/300-4.jpg" alt="img" />
                                        </div>
                                        <!--end::user-->
                                    </div>
                                    <!--end::توضیحات-->
                                </div>
                                <!--end::timeline heading-->
                                <!--begin::timeline details-->
                                <div class="overflow-auto pb-5">
                                    <!--begin::Notice-->
                                    <div
                                        class="notice d-flex bg-light-primary rounded border-primary border border-dashed min-w-lg-600px flex-shrink-0 p-6">
                                        <!--begin::Icon-->
                                        <i class="ki-duotone ki-devices-2 fs-2tx text-primary me-4">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                        </i>
                                        <!--end::Icon-->
                                        <!--begin::Wrapper-->
                                        <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                                            <!--begin::Content-->
                                            <div class="mb-3 mb-md-0 fw-semibold">
                                                <h4 class="text-gray-900 fw-bold">پردازش دیتابی کامل شد</h4>
                                                <div class="fs-6 text-gray-700 pe-7">وارد ادمین داشبورد شوید تا مطمئن
                                                    شوید که یکپارچگی داده ها موفق است</div>
                                            </div>
                                            <!--end::Content-->
                                            <!--begin::Actions-->
                                            <a href="#"
                                                class="btn btn-primary px-6 align-self-center text-nowrap">پردازش</a>
                                            <!--end::Actions-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::Notice-->
                                </div>
                                <!--end::timeline details-->
                            </div>
                            <!--end::timeline content-->
                        </div>
                        <!--end::timeline item-->
                        <!--begin::timeline item-->
                        <div class="timeline-item">
                            <!--begin::timeline line-->
                            <div class="timeline-line w-40px"></div>
                            <!--end::timeline line-->
                            <!--begin::timeline icon-->
                            <div class="timeline-icon symbol symbol-circle symbol-40px">
                                <div class="symbol-label bg-light">
                                    <i class="ki-duotone ki-basket fs-2 text-gray-500">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        <span class="path4"></span>
                                    </i>
                                </div>
                            </div>
                            <!--end::timeline icon-->
                            <!--begin::timeline content-->
                            <div class="timeline-content mt-n1">
                                <!--begin::timeline heading-->
                                <div class="pe-3 mb-5">
                                    <!--begin::Title-->
                                    <div class="fs-5 fw-semibold mb-2">سفارش جدید
                                        <a href="#" class="text-primary fw-bold me-1">#67890</a>برای برنامه ریزی کارگاه
                                        و برآورد بودجه قرار داده شده است
                                    </div>
                                    <!--end::Title-->
                                    <!--begin::توضیحات-->
                                    <div class="d-flex align-items-center mt-1 fs-6">
                                        <!--begin::Info-->
                                        <div class="text-muted me-2 fs-7">در ساعت 4:23 بعد از ظهر توسط</div>
                                        <!--end::Info-->
                                        <!--begin::user-->
                                        <a href="#" class="text-primary fw-bold me-1">محسن علی ابادی</a>
                                        <!--end::user-->
                                    </div>
                                    <!--end::توضیحات-->
                                </div>
                                <!--end::timeline heading-->
                            </div>
                            <!--end::timeline content-->
                        </div>
                        <!--end::timeline item-->
                    </div>
                    <!--end::timeline items-->
                </div>
                <!--end::Content-->
            </div>
            <!--end::Body-->
            <!--begin::Footer-->
            <div class="card-footer py-5 text-center" id="kt_activities_footer">
                <a href="../../demo1/dist/pages/user-profile/activity.html" class="btn btn-bg-body text-primary">نمایش
                    تمام فعالیت ها
                    <i class="ki-duotone ki-arrow-right fs-3 text-primary">
                        <span class="path1"></span>
                        <span class="path2"></span>
                    </i></a>
            </div>
            <!--end::Footer-->
        </div>
    </div>
    <!--end::فعالیتها drawer-->
    <!--begin::چت drawer-->
    <div id="kt_drawer_chat" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="chat"
        data-kt-drawer-activate="true" data-kt-drawer-overlay="true"
        data-kt-drawer-width="{default:'300px', 'md': '500px'}" data-kt-drawer-direction="end"
        data-kt-drawer-toggle="#kt_drawer_chat_toggle" data-kt-drawer-close="#kt_drawer_chat_close">
        <!--begin::Messenger-->
        <div class="card w-100 border-0 rounded-0" id="kt_drawer_chat_messenger">
            <!--begin::کارت header-->
            <div class="card-header pe-5" id="kt_drawer_chat_messenger_header">
                <!--begin::Title-->
                <div class="card-title">
                    <!--begin::user-->
                    <div class="d-flex justify-content-center flex-column me-3">
                        <a href="#" class="fs-4 fw-bold text-gray-900 text-hover-primary me-1 mb-2 lh-1">رضا علی
                            ابادی</a>
                        <!--begin::Info-->
                        <div class="mb-0 lh-1">
                            <span class="badge badge-success badge-circle w-10px h-10px me-1"></span>
                            <span class="fs-7 fw-semibold text-muted">فعال</span>
                        </div>
                        <!--end::Info-->
                    </div>
                    <!--end::user-->
                </div>
                <!--end::Title-->
                <!--begin::کارت toolbar-->
                <div class="card-toolbar">
                    <!--begin::Menu-->
                    <div class="me-0">
                        <button class="btn btn-sm btn-icon btn-active-color-primary" data-kt-menu-trigger="click"
                            data-kt-menu-placement="bottom-end">
                            <i class="ki-duotone ki-dots-square fs-2">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                                <span class="path4"></span>
                            </i>
                        </button>
                        <!--begin::Menu 3-->
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3"
                            data-kt-menu="true">
                            <!--begin::Heading-->
                            <div class="menu-item px-3">
                                <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">مخاطبین</div>
                            </div>
                            <!--end::Heading-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3" data-bs-toggle="modal"
                                    data-bs-target="#kt_modal_users_search">افزودن مخاطب</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link flex-stack px-3" data-bs-toggle="modal"
                                    data-bs-target="#kt_modal_invite_friends">دعوت مخاطبین
                                    <span class="ms-2" data-bs-toggle="tooltip"
                                        title="برای ارسال دعوت نامه یک ایمیل تماس مشخص کنید">
                                        <i class="ki-duotone ki-information fs-7">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                        </i>
                                    </span></a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                data-kt-menu-placement="left-start">
                                <a href="#" class="menu-link px-3">
                                    <span class="menu-title">گروه ها</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <!--begin::Menu sub-->
                                <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3" data-bs-toggle="tooltip" title="بزودی">ساختن
                                            گروه</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3" data-bs-toggle="tooltip" title="بزودی">دعوت
                                            کاربران</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3" data-bs-toggle="tooltip"
                                            title="بزودی">تنظیمات</a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu sub-->
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3 my-1">
                                <a href="#" class="menu-link px-3" data-bs-toggle="tooltip" title="بزودی">تنظیمات</a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu 3-->
                    </div>
                    <!--end::Menu-->
                    <!--begin::Close-->
                    <div class="btn btn-sm btn-icon btn-active-color-primary" id="kt_drawer_chat_close">
                        <i class="ki-duotone ki-cross-square fs-2">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </div>
                    <!--end::Close-->
                </div>
                <!--end::کارت toolbar-->
            </div>
            <!--end::کارت header-->
            <!--begin::کارت body-->
            <div class="card-body" id="kt_drawer_chat_messenger_body">
                <!--begin::پیام ها-->
                <div class="scroll-y me-n5 pe-5" data-kt-element="messages" data-kt-scroll="true"
                    data-kt-scroll-activate="true" data-kt-scroll-height="auto"
                    data-kt-scroll-dependencies="#kt_drawer_chat_messenger_header, #kt_drawer_chat_messenger_footer"
                    data-kt-scroll-wrappers="#kt_drawer_chat_messenger_body" data-kt-scroll-offset="0px">
                    <!--begin::پیام(in)-->
                    <div class="d-flex justify-content-start mb-10">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-column align-items-start">
                            <!--begin::user-->
                            <div class="d-flex align-items-center mb-2">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic" src="../assets/media/avatars/300-25.jpg" />
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-3">
                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">رضا علی
                                        ابادی</a>
                                    <span class="text-muted fs-7 mb-1">دو دقیقه پیش</span>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::user-->
                            <!--begin::Text-->
                            <div class="p-5 rounded bg-light-info text-dark fw-semibold mw-lg-400px text-start"
                                data-kt-element="message-text">چقدر احتمال دارد که شرکت ما را به دوستان و خانواده خود
                                پیشنهاد دهید؟?</div>
                            <!--end::Text-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::پیام(in)-->
                    <!--begin::پیام(out)-->
                    <div class="d-flex justify-content-end mb-10">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-column align-items-end">
                            <!--begin::user-->
                            <div class="d-flex align-items-center mb-2">
                                <!--begin::Details-->
                                <div class="me-3">
                                    <span class="text-muted fs-7 mb-1">5دقیقه پیش</span>
                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">شما</a>
                                </div>
                                <!--end::Details-->
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic" src="../assets/media/avatars/300-1.jpg" />
                                </div>
                                <!--end::Avatar-->
                            </div>
                            <!--end::user-->
                            <!--begin::Text-->
                            <div class="p-5 rounded bg-light-primary text-dark fw-semibold mw-lg-400px text-end"
                                data-kt-element="message-text">سلام ، ما فقط در حال نوشتن هستیم تا به شما اطلاع دهیم که
                                در مخزن گیت هاب مشترک شده اید.</div>
                            <!--end::Text-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::پیام(out)-->
                    <!--begin::پیام(in)-->
                    <div class="d-flex justify-content-start mb-10">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-column align-items-start">
                            <!--begin::user-->
                            <div class="d-flex align-items-center mb-2">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic" src="../assets/media/avatars/300-25.jpg" />
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-3">
                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">رضا علی
                                        ابادی</a>
                                    <span class="text-muted fs-7 mb-1">یکساعت پیش</span>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::user-->
                            <!--begin::Text-->
                            <div class="p-5 rounded bg-light-info text-dark fw-semibold mw-lg-400px text-start"
                                data-kt-element="message-text">بله فهمیدم</div>
                            <!--end::Text-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::پیام(in)-->
                    <!--begin::پیام(out)-->
                    <div class="d-flex justify-content-end mb-10">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-column align-items-end">
                            <!--begin::user-->
                            <div class="d-flex align-items-center mb-2">
                                <!--begin::Details-->
                                <div class="me-3">
                                    <span class="text-muted fs-7 mb-1">2 ساعت</span>
                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">شما</a>
                                </div>
                                <!--end::Details-->
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic" src="../assets/media/avatars/300-1.jpg" />
                                </div>
                                <!--end::Avatar-->
                            </div>
                            <!--end::user-->
                            <!--begin::Text-->
                            <div class="p-5 rounded bg-light-primary text-dark fw-semibold mw-lg-400px text-end"
                                data-kt-element="message-text">شما برای همه موارد اعلان دریافت خواهید کرد ، درخواستها را
                                بکشید!</div>
                            <!--end::Text-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::پیام(out)-->
                    <!--begin::پیام(in)-->
                    <div class="d-flex justify-content-start mb-10">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-column align-items-start">
                            <!--begin::user-->
                            <div class="d-flex align-items-center mb-2">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic" src="../assets/media/avatars/300-25.jpg" />
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-3">
                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">رضا علی
                                        ابادی</a>
                                    <span class="text-muted fs-7 mb-1">3 ساعت</span>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::user-->
                            <!--begin::Text-->
                            <div class="p-5 rounded bg-light-info text-dark fw-semibold mw-lg-400px text-start"
                                data-kt-element="message-text">شما می توانید با فشردن اینجا بلافاصله این مخزن را باز
                                کنید:
                                <a href="https://keenthemes.com">satrasweb.ir</a>
                            </div>
                            <!--end::Text-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::پیام(in)-->
                    <!--begin::پیام(out)-->
                    <div class="d-flex justify-content-end mb-10">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-column align-items-end">
                            <!--begin::user-->
                            <div class="d-flex align-items-center mb-2">
                                <!--begin::Details-->
                                <div class="me-3">
                                    <span class="text-muted fs-7 mb-1">4 ساعت</span>
                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">شما</a>
                                </div>
                                <!--end::Details-->
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic" src="../assets/media/avatars/300-1.jpg" />
                                </div>
                                <!--end::Avatar-->
                            </div>
                            <!--end::user-->
                            <!--begin::Text-->
                            <div class="p-5 rounded bg-light-primary text-dark fw-semibold mw-lg-400px text-end"
                                data-kt-element="message-text">بیشتر دوره های بازرگانی خریداری شده در طول این فروش!
                            </div>
                            <!--end::Text-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::پیام(out)-->
                    <!--begin::پیام(in)-->
                    <div class="d-flex justify-content-start mb-10">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-column align-items-start">
                            <!--begin::user-->
                            <div class="d-flex align-items-center mb-2">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic" src="../assets/media/avatars/300-25.jpg" />
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-3">
                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">رضا علی
                                        ابادی</a>
                                    <span class="text-muted fs-7 mb-1">5 ساعت</span>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::user-->
                            <!--begin::Text-->
                            <div class="p-5 rounded bg-light-info text-dark fw-semibold mw-lg-400px text-start"
                                data-kt-element="message-text">کمپانی BBQ برای جشن گرفتن دستاوردها و اهداف سه ماهه آخر.
                                غذا و نوشیدنی ارائه می شود</div>
                            <!--end::Text-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::پیام(in)-->
                    <!--begin::پیام(template for out)-->
                    <div class="d-flex justify-content-end mb-10 d-none" data-kt-element="template-out">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-column align-items-end">
                            <!--begin::user-->
                            <div class="d-flex align-items-center mb-2">
                                <!--begin::Details-->
                                <div class="me-3">
                                    <span class="text-muted fs-7 mb-1">فقط</span>
                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">شما</a>
                                </div>
                                <!--end::Details-->
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic" src="../assets/media/avatars/300-1.jpg" />
                                </div>
                                <!--end::Avatar-->
                            </div>
                            <!--end::user-->
                            <!--begin::Text-->
                            <div class="p-5 rounded bg-light-primary text-dark fw-semibold mw-lg-400px text-end"
                                data-kt-element="message-text"></div>
                            <!--end::Text-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::پیام(template for out)-->
                    <!--begin::پیام(template for in)-->
                    <div class="d-flex justify-content-start mb-10 d-none" data-kt-element="template-in">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-column align-items-start">
                            <!--begin::user-->
                            <div class="d-flex align-items-center mb-2">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-35px symbol-circle">
                                    <img alt="Pic" src="../assets/media/avatars/300-25.jpg" />
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-3">
                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">رضا علی
                                        ابادی</a>
                                    <span class="text-muted fs-7 mb-1">فقط</span>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::user-->
                            <!--begin::Text-->
                            <div class="p-5 rounded bg-light-info text-dark fw-semibold mw-lg-400px text-start"
                                data-kt-element="message-text">Right before vacation season we have the next Bigمعامله
                                for you.</div>
                            <!--end::Text-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::پیام(template for in)-->
                </div>
                <!--end::پیام ها-->
            </div>
            <!--end::کارت body-->
            <!--begin::کارت footer-->
            <div class="card-footer pt-4" id="kt_drawer_chat_messenger_footer">
                <!--begin::Input-->
                <textarea class="form-control form-control-flush mb-3" rows="1" data-kt-element="input"
                    placeholder="نوشتن پیام"></textarea>
                <!--end::Input-->
                <!--begin:Toolbar-->
                <div class="d-flex flex-stack">
                    <!--begin::Actions-->
                    <div class="d-flex align-items-center me-2">
                        <button class="btn btn-sm btn-icon btn-active-light-primary me-1" type="button"
                            data-bs-toggle="tooltip" title="بزودی">
                            <i class="ki-duotone ki-paper-clip fs-3"></i>
                        </button>
                        <button class="btn btn-sm btn-icon btn-active-light-primary me-1" type="button"
                            data-bs-toggle="tooltip" title="بزودی">
                            <i class="ki-duotone ki-cloud-add fs-3">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                        </button>
                    </div>
                    <!--end::Actions-->
                    <!--begin::ارسال-->
                    <button class="btn btn-primary" type="button" data-kt-element="send">ارسال</button>
                    <!--end::ارسال-->
                </div>
                <!--end::Toolbar-->
            </div>
            <!--end::کارت footer-->
        </div>
        <!--end::Messenger-->
    </div>
    <!--end::چت drawer-->
    <!--begin::چت drawer-->
    <div id="kt_خرید_سبد" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="سبد" data-kt-drawer-activate="true"
        data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'300px', 'md': '500px'}"
        data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_drawer_خرید_سبد_toggle"
        data-kt-drawer-close="#kt_drawer_خرید_سبد_close">
        <!--begin::Messenger-->
        <div class="card card-flush w-100 rounded-0">
            <!--begin::کارت header-->
            <div class="card-header">
                <!--begin::Title-->
                <h3 class="card-title text-gray-900 fw-bold">سبد خرید</h3>
                <!--end::Title-->
                <!--begin::کارت toolbar-->
                <div class="card-toolbar">
                    <!--begin::Close-->
                    <div class="btn btn-sm btn-icon btn-active-light-primary" id="kt_drawer_خرید_سبد_close">
                        <i class="ki-duotone ki-cross fs-2">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </div>
                    <!--end::Close-->
                </div>
                <!--end::کارت toolbar-->
            </div>
            <!--end::کارت header-->
            <!--begin::کارت body-->
            <div class="card-body hover-scroll-overlay-y h-400px pt-5">
                <!--begin::آیتم-->
                <div class="d-flex flex-stack">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column me-3">
                        <!--begin::بخش-->
                        <div class="mb-3">
                            <a href="../../demo1/dist/apps/ecommerce/sales/details.html"
                                class="text-gray-800 text-hover-primary fs-4 fw-bold">ایبلندر</a>
                            <span class="text-gray-400 fw-semibold d-block">بهترین گجت آشپزخانه در سال 2022</span>
                        </div>
                        <!--end::بخش-->
                        <!--begin::بخش-->
                        <div class="d-flex align-items-center">
                            <span class="fw-bold text-gray-800 fs-5">$ 350</span>
                            <span class="text-muted mx-2">برای</span>
                            <span class="fw-bold text-gray-800 fs-5 me-3">5</span>
                            <a href="#"
                                class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
                                <i class="ki-duotone ki-minus fs-4"></i>
                            </a>
                            <a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
                                <i class="ki-duotone ki-plus fs-4"></i>
                            </a>
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Wrapper-->
                    <!--begin::Pic-->
                    <div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
                        <img src="../assets/media/stock/600x400/img-1.jpg" alt="" />
                    </div>
                    <!--end::Pic-->
                </div>
                <!--end::آیتم-->
                <!--begin::Separator-->
                <div class="separator separator-dashed my-6"></div>
                <!--end::Separator-->
                <!--begin::آیتم-->
                <div class="d-flex flex-stack">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column me-3">
                        <!--begin::بخش-->
                        <div class="mb-3">
                            <a href="../../demo1/dist/apps/ecommerce/sales/details.html"
                                class="text-gray-800 text-hover-primary fs-4 fw-bold">پاک کننده هوشمند</a>
                            <span class="text-gray-400 fw-semibold d-block">ابزار هوشمند برای پخت و پز</span>
                        </div>
                        <!--end::بخش-->
                        <!--begin::بخش-->
                        <div class="d-flex align-items-center">
                            <span class="fw-bold text-gray-800 fs-5">$ 650</span>
                            <span class="text-muted mx-2">برای</span>
                            <span class="fw-bold text-gray-800 fs-5 me-3">4</span>
                            <a href="#"
                                class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
                                <i class="ki-duotone ki-minus fs-4"></i>
                            </a>
                            <a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
                                <i class="ki-duotone ki-plus fs-4"></i>
                            </a>
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Wrapper-->
                    <!--begin::Pic-->
                    <div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
                        <img src="../assets/media/stock/600x400/img-3.jpg" alt="" />
                    </div>
                    <!--end::Pic-->
                </div>
                <!--end::آیتم-->
                <!--begin::Separator-->
                <div class="separator separator-dashed my-6"></div>
                <!--end::Separator-->
                <!--begin::آیتم-->
                <div class="d-flex flex-stack">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column me-3">
                        <!--begin::بخش-->
                        <div class="mb-3">
                            <a href="../../demo1/dist/apps/ecommerce/sales/details.html"
                                class="text-gray-800 text-hover-primary fs-4 fw-bold">دوربین</a>
                            <span class="text-gray-400 fw-semibold d-block">دوربین حرفه ای حرفه ای برای لبه</span>
                        </div>
                        <!--end::بخش-->
                        <!--begin::بخش-->
                        <div class="d-flex align-items-center">
                            <span class="fw-bold text-gray-800 fs-5">$ 150</span>
                            <span class="text-muted mx-2">برای</span>
                            <span class="fw-bold text-gray-800 fs-5 me-3">3</span>
                            <a href="#"
                                class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
                                <i class="ki-duotone ki-minus fs-4"></i>
                            </a>
                            <a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
                                <i class="ki-duotone ki-plus fs-4"></i>
                            </a>
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Wrapper-->
                    <!--begin::Pic-->
                    <div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
                        <img src="../assets/media/stock/600x400/img-8.jpg" alt="" />
                    </div>
                    <!--end::Pic-->
                </div>
                <!--end::آیتم-->
                <!--begin::Separator-->
                <div class="separator separator-dashed my-6"></div>
                <!--end::Separator-->
                <!--begin::آیتم-->
                <div class="d-flex flex-stack">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column me-3">
                        <!--begin::بخش-->
                        <div class="mb-3">
                            <a href="../../demo1/dist/apps/ecommerce/sales/details.html"
                                class="text-gray-800 text-hover-primary fs-4 fw-bold">$D پرینتer</a>
                            <span class="text-gray-400 fw-semibold d-block">Manfactoring unique objekts</span>
                        </div>
                        <!--end::بخش-->
                        <!--begin::بخش-->
                        <div class="d-flex align-items-center">
                            <span class="fw-bold text-gray-800 fs-5">$ 1450</span>
                            <span class="text-muted mx-2">برای</span>
                            <span class="fw-bold text-gray-800 fs-5 me-3">7</span>
                            <a href="#"
                                class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
                                <i class="ki-duotone ki-minus fs-4"></i>
                            </a>
                            <a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
                                <i class="ki-duotone ki-plus fs-4"></i>
                            </a>
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Wrapper-->
                    <!--begin::Pic-->
                    <div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
                        <img src="../assets/media/stock/600x400/img-26.jpg" alt="" />
                    </div>
                    <!--end::Pic-->
                </div>
                <!--end::آیتم-->
                <!--begin::Separator-->
                <div class="separator separator-dashed my-6"></div>
                <!--end::Separator-->
                <!--begin::آیتم-->
                <div class="d-flex flex-stack">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column me-3">
                        <!--begin::بخش-->
                        <div class="mb-3">
                            <a href="../../demo1/dist/apps/ecommerce/sales/details.html"
                                class="text-gray-800 text-hover-primary fs-4 fw-bold">MotionWire</a>
                            <span class="text-gray-400 fw-semibold d-block">Perfect animation tool</span>
                        </div>
                        <!--end::بخش-->
                        <!--begin::بخش-->
                        <div class="d-flex align-items-center">
                            <span class="fw-bold text-gray-800 fs-5">$ 650</span>
                            <span class="text-muted mx-2">برای</span>
                            <span class="fw-bold text-gray-800 fs-5 me-3">7</span>
                            <a href="#"
                                class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
                                <i class="ki-duotone ki-minus fs-4"></i>
                            </a>
                            <a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
                                <i class="ki-duotone ki-plus fs-4"></i>
                            </a>
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Wrapper-->
                    <!--begin::Pic-->
                    <div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
                        <img src="../assets/media/stock/600x400/img-21.jpg" alt="" />
                    </div>
                    <!--end::Pic-->
                </div>
                <!--end::آیتم-->
                <!--begin::Separator-->
                <div class="separator separator-dashed my-6"></div>
                <!--end::Separator-->
                <!--begin::آیتم-->
                <div class="d-flex flex-stack">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column me-3">
                        <!--begin::بخش-->
                        <div class="mb-3">
                            <a href="../../demo1/dist/apps/ecommerce/sales/details.html"
                                class="text-gray-800 text-hover-primary fs-4 fw-bold">Samsung</a>
                            <span class="text-gray-400 fw-semibold d-block">پروفایل info,timeline etc</span>
                        </div>
                        <!--end::بخش-->
                        <!--begin::بخش-->
                        <div class="d-flex align-items-center">
                            <span class="fw-bold text-gray-800 fs-5">$ 720</span>
                            <span class="text-muted mx-2">برای</span>
                            <span class="fw-bold text-gray-800 fs-5 me-3">6</span>
                            <a href="#"
                                class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
                                <i class="ki-duotone ki-minus fs-4"></i>
                            </a>
                            <a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
                                <i class="ki-duotone ki-plus fs-4"></i>
                            </a>
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Wrapper-->
                    <!--begin::Pic-->
                    <div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
                        <img src="../assets/media/stock/600x400/img-34.jpg" alt="" />
                    </div>
                    <!--end::Pic-->
                </div>
                <!--end::آیتم-->
                <!--begin::Separator-->
                <div class="separator separator-dashed my-6"></div>
                <!--end::Separator-->
                <!--begin::آیتم-->
                <div class="d-flex flex-stack">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column me-3">
                        <!--begin::بخش-->
                        <div class="mb-3">
                            <a href="../../demo1/dist/apps/ecommerce/sales/details.html"
                                class="text-gray-800 text-hover-primary fs-4 fw-bold">$D پرینتer</a>
                            <span class="text-gray-400 fw-semibold d-block">Manfactoring unique objekts</span>
                        </div>
                        <!--end::بخش-->
                        <!--begin::بخش-->
                        <div class="d-flex align-items-center">
                            <span class="fw-bold text-gray-800 fs-5">$ 430</span>
                            <span class="text-muted mx-2">برای</span>
                            <span class="fw-bold text-gray-800 fs-5 me-3">8</span>
                            <a href="#"
                                class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
                                <i class="ki-duotone ki-minus fs-4"></i>
                            </a>
                            <a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
                                <i class="ki-duotone ki-plus fs-4"></i>
                            </a>
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Wrapper-->
                    <!--begin::Pic-->
                    <div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
                        <img src="../assets/media/stock/600x400/img-27.jpg" alt="" />
                    </div>
                    <!--end::Pic-->
                </div>
                <!--end::آیتم-->
            </div>
            <!--end::کارت body-->
            <!--begin::کارت footer-->
            <div class="card-footer">
                <!--begin::آیتم-->
                <div class="d-flex flex-stack">
                    <span class="fw-bold text-gray-600">کل</span>
                    <span class="text-gray-800 fw-bolder fs-5">$ 1840.00</span>
                </div>
                <!--end::آیتم-->
                <!--begin::آیتم-->
                <div class="d-flex flex-stack">
                    <span class="fw-bold text-gray-600">زیر مجموع</span>
                    <span class="text-primary fw-bolder fs-5">$ 246.35</span>
                </div>
                <!--end::آیتم-->
                <!--end::Actions-->
                <div class="d-flex justify-content-end mt-9">
                    <a href="#" class="btn btn-primary d-flex justify-content-end">ثبت سفارش</a>
                </div>
                <!--end::Actions-->
            </div>
            <!--end::کارت footer-->
        </div>
        <!--end::Messenger-->
    </div>
    <!--end::چت drawer-->
    <!--end::کشوs-->
    <!--begin::Scrolltop-->
    <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
        <i class="ki-duotone ki-arrow-up">
            <span class="path1"></span>
            <span class="path2"></span>
        </i>
    </div>
    <!--end::Scrolltop-->
    <!--begin::Modals-->
    <!--begin::Modal - ارتقا دهید plan-->
    <div class="modal fade" id="kt_modal_upgrade_plan" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-xl">
            <!--begin::Modal content-->
            <div class="modal-content rounded">
                <!--begin::Modal header-->
                <div class="modal-header justify-content-end border-0 pb-0">
                    <!--begin::Close-->
                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                        <i class="ki-duotone ki-cross fs-1">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </div>
                    <!--end::Close-->
                </div>
                <!--end::Modal header-->
                <!--begin::Modal body-->
                <div class="modal-body pt-0 pb-15 px-5 px-xl-20">
                    <!--begin::Heading-->
                    <div class="mb-13 text-center">
                        <h1 class="mb-3">یک برنامه را ارتقا کنید</h1>
                        <div class="text-muted fw-semibold fs-5">اگر به اطلاعات لازم دارید ، لطفاً بررسی کنید
                            <a href="#" class="link-primary fw-bold">دستورالعمل قیمت گذاری</a>.
                        </div>
                    </div>
                    <!--end::Heading-->
                    <!--begin::برنامه ریزی ها-->
                    <div class="d-flex flex-column">
                        <!--begin::Nav group-->
                        <div class="nav-group nav-group-outline mx-auto" data-kt-buttons="true">
                            <button class="btn btn-color-gray-400 btn-active btn-active-secondary px-6 py-3 me-2 active"
                                data-kt-plan="month">ماهانه</button>
                            <button class="btn btn-color-gray-400 btn-active btn-active-secondary px-6 py-3"
                                data-kt-plan="annual">سالانه</button>
                        </div>
                        <!--end::Nav group-->
                        <!--begin::Row-->
                        <div class="row mt-10">
                            <!--begin::Col-->
                            <div class="col-lg-6 mb-10 mb-lg-0">
                                <!--begin::Tabs-->
                                <div class="nav flex-column">
                                    <!--begin::Tab link-->
                                    <label
                                        class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 active mb-6"
                                        data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_startup">
                                        <!--end::توضیحات-->
                                        <div class="d-flex align-items-center me-2">
                                            <!--begin::رادیو-->
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-success flex-shrink-0 me-6">
                                                <input class="form-check-input" type="radio" name="plan"
                                                    checked="checked" value="startup" />
                                            </div>
                                            <!--end::رادیو-->
                                            <!--begin::Info-->
                                            <div class="flex-grow-1">
                                                <div class="d-flex align-items-center fs-2 fw-bold flex-wrap">استارت آپ
                                                </div>
                                                <div class="fw-semibold opacity-75">برای استارت آپ ها</div>
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::توضیحات-->
                                        <!--begin::قیمت-->
                                        <div class="ms-5">
                                            <span class="mb-2">$</span>
                                            <span class="fs-3x fw-bold" data-kt-plan-price-month="39"
                                                data-kt-plan-price-annual="399">39</span>
                                            <span class="fs-7 opacity-50">/
                                                <span data-kt-element="period">دوشنبه</span></span>
                                        </div>
                                        <!--end::قیمت-->
                                    </label>
                                    <!--end::Tab link-->
                                    <!--begin::Tab link-->
                                    <label
                                        class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 mb-6"
                                        data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_advanced">
                                        <!--end::توضیحات-->
                                        <div class="d-flex align-items-center me-2">
                                            <!--begin::رادیو-->
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-success flex-shrink-0 me-6">
                                                <input class="form-check-input" type="radio" name="plan"
                                                    value="advanced" />
                                            </div>
                                            <!--end::رادیو-->
                                            <!--begin::Info-->
                                            <div class="flex-grow-1">
                                                <div class="d-flex align-items-center fs-2 fw-bold flex-wrap">پیشرفته
                                                </div>
                                                <div class="fw-semibold opacity-75">برتر برای 100+ تیم اندازه</div>
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::توضیحات-->
                                        <!--begin::قیمت-->
                                        <div class="ms-5">
                                            <span class="mb-2">$</span>
                                            <span class="fs-3x fw-bold" data-kt-plan-price-month="339"
                                                data-kt-plan-price-annual="3399">339</span>
                                            <span class="fs-7 opacity-50">/
                                                <span data-kt-element="period">دوشنبه</span></span>
                                        </div>
                                        <!--end::قیمت-->
                                    </label>
                                    <!--end::Tab link-->
                                    <!--begin::Tab link-->
                                    <label
                                        class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 mb-6"
                                        data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_enterprise">
                                        <!--end::توضیحات-->
                                        <div class="d-flex align-items-center me-2">
                                            <!--begin::رادیو-->
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-success flex-shrink-0 me-6">
                                                <input class="form-check-input" type="radio" name="plan"
                                                    value="enterprise" />
                                            </div>
                                            <!--end::رادیو-->
                                            <!--begin::Info-->
                                            <div class="flex-grow-1">
                                                <div class="d-flex align-items-center fs-2 fw-bold flex-wrap">شرکت،
                                                    پروژه
                                                    <span
                                                        class="badge badge-light-success ms-2 py-2 px-3 fs-7">محبوب</span>
                                                </div>
                                                <div class="fw-semibold opacity-75">مقدار برتر برای 1000+ تیم</div>
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::توضیحات-->
                                        <!--begin::قیمت-->
                                        <div class="ms-5">
                                            <span class="mb-2">$</span>
                                            <span class="fs-3x fw-bold" data-kt-plan-price-month="999"
                                                data-kt-plan-price-annual="9999">999</span>
                                            <span class="fs-7 opacity-50">/
                                                <span data-kt-element="period">دوشنبه</span></span>
                                        </div>
                                        <!--end::قیمت-->
                                    </label>
                                    <!--end::Tab link-->
                                    <!--begin::Tab link-->
                                    <label
                                        class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 mb-6"
                                        data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_custom">
                                        <!--end::توضیحات-->
                                        <div class="d-flex align-items-center me-2">
                                            <!--begin::رادیو-->
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-success flex-shrink-0 me-6">
                                                <input class="form-check-input" type="radio" name="plan"
                                                    value="custom" />
                                            </div>
                                            <!--end::رادیو-->
                                            <!--begin::Info-->
                                            <div class="flex-grow-1">
                                                <div class="d-flex align-items-center fs-2 fw-bold flex-wrap">سفارشی
                                                </div>
                                                <div class="fw-semibold opacity-75">دوباره مجوز سفارشی را دوباره تهیه
                                                    کنید</div>
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::توضیحات-->
                                        <!--begin::قیمت-->
                                        <div class="ms-5">
                                            <a href="#" class="btn btn-sm btn-success">تماس با ما</a>
                                        </div>
                                        <!--end::قیمت-->
                                    </label>
                                    <!--end::Tab link-->
                                </div>
                                <!--end::Tabs-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-lg-6">
                                <!--begin::Tab content-->
                                <div class="tab-content rounded h-100 bg-light p-10">
                                    <!--begin::Tab Pane-->
                                    <div class="tab-pane fade show active" id="kt_upgrade_plan_startup">
                                        <!--begin::Heading-->
                                        <div class="pb-5">
                                            <h2 class="fw-bold text-dark">برنامه ی استارت اپ شما چیست؟?</h2>
                                            <div class="text-muted fw-semibold">بهینه برای اندازه 10+ تیم استارت آپ
                                            </div>
                                        </div>
                                        <!--end::Heading-->
                                        <!--begin::Body-->
                                        <div class="pt-1">
                                            <!--begin::آیتم-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">فعال ترین
                                                    کاربران</span>
                                                <i class="ki-duotone ki-check-circle fs-1 text-success">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </div>
                                            <!--end::آیتم-->
                                            <!--begin::آیتم-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">حداکثر 30 ادغام
                                                    پروژه</span>
                                                <i class="ki-duotone ki-check-circle fs-1 text-success">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </div>
                                            <!--end::آیتم-->
                                            <!--begin::آیتم-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">ماژول تجزیه و
                                                    تحلیل</span>
                                                <i class="ki-duotone ki-check-circle fs-1 text-success">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </div>
                                            <!--end::آیتم-->
                                            <!--begin::آیتم-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-muted flex-grow-1">ماژول دارایی ،
                                                    مالیه ، سرمایه گذاری</span>
                                                <i class="ki-duotone ki-cross-circle fs-1">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </div>
                                            <!--end::آیتم-->
                                            <!--begin::آیتم-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-muted flex-grow-1">ماژول
                                                    حسابداری</span>
                                                <i class="ki-duotone ki-cross-circle fs-1">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </div>
                                            <!--end::آیتم-->
                                            <!--begin::آیتم-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-muted flex-grow-1">بستر شبکه</span>
                                                <i class="ki-duotone ki-cross-circle fs-1">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </div>
                                            <!--end::آیتم-->
                                            <!--begin::آیتم-->
                                            <div class="d-flex align-items-center">
                                                <span class="fw-semibold fs-5 text-muted flex-grow-1">فضای نامحدود
                                                    ابر</span>
                                                <i class="ki-duotone ki-cross-circle fs-1">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </div>
                                            <!--end::آیتم-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Tab Pane-->
                                    <!--begin::Tab Pane-->
                                    <div class="tab-pane fade" id="kt_upgrade_plan_advanced">
                                        <!--begin::Heading-->
                                        <div class="pb-5">
                                            <h2 class="fw-bold text-dark">برنامه ی استارت اپ شما چیست؟?</h2>
                                            <div class="text-muted fw-semibold">بهینه برای اندازه 100+ تیم کمپانی</div>
                                        </div>
                                        <!--end::Heading-->
                                        <!--begin::Body-->
                                        <div class="pt-1">
                                            <!--begin::آیتم-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">فعال ترین
                                                    کاربران</span>
                                                <i class="ki-duotone ki-check-circle fs-1 text-success">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </div>
                                            <!--end::آیتم-->
                                            <!--begin::آیتم-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">حداکثر 30 ادغام
                                                    پروژه</span>
                                                <i class="ki-duotone ki-check-circle fs-1 text-success">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </div>
                                            <!--end::آیتم-->
                                            <!--begin::آیتم-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">ماژول تجزیه و
                                                    تحلیل</span>
                                                <i class="ki-duotone ki-check-circle fs-1 text-success">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </div>
                                            <!--end::آیتم-->
                                            <!--begin::آیتم-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">ماژول دارایی ،
                                                    مالیه ، سرمایه گذاری</span>
                                                <i class="ki-duotone ki-check-circle fs-1 text-success">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </div>
                                            <!--end::آیتم-->
                                            <!--begin::آیتم-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">ماژول
                                                    حسابداری</span>
                                                <i class="ki-duotone ki-check-circle fs-1 text-success">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </div>
                                            <!--end::آیتم-->
                                            <!--begin::آیتم-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-muted flex-grow-1">بستر شبکه</span>
                                                <i class="ki-duotone ki-cross-circle fs-1">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </div>
                                            <!--end::آیتم-->
                                            <!--begin::آیتم-->
                                            <div class="d-flex align-items-center">
                                                <span class="fw-semibold fs-5 text-muted flex-grow-1">فضای نامحدود
                                                    ابر</span>
                                                <i class="ki-duotone ki-cross-circle fs-1">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </div>
                                            <!--end::آیتم-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Tab Pane-->
                                    <!--begin::Tab Pane-->
                                    <div class="tab-pane fade" id="kt_upgrade_plan_enterprise">
                                        <!--begin::Heading-->
                                        <div class="pb-5">
                                            <h2 class="fw-bold text-dark">برنامه ی استارت اپ شما چیست؟?</h2>
                                            <div class="text-muted fw-semibold">بهینه برای 1000+ تیم سازمانی</div>
                                        </div>
                                        <!--end::Heading-->
                                        <!--begin::Body-->
                                        <div class="pt-1">
                                            <!--begin::آیتم-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">فعال ترین
                                                    کاربران</span>
                                                <i class="ki-duotone ki-check-circle fs-1 text-success">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </div>
                                            <!--end::آیتم-->
                                            <!--begin::آیتم-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">حداکثر 30 ادغام
                                                    پروژه</span>
                                                <i class="ki-duotone ki-check-circle fs-1 text-success">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </div>
                                            <!--end::آیتم-->
                                            <!--begin::آیتم-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">ماژول تجزیه و
                                                    تحلیل</span>
                                                <i class="ki-duotone ki-check-circle fs-1 text-success">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </div>
                                            <!--end::آیتم-->
                                            <!--begin::آیتم-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">ماژول دارایی ،
                                                    مالیه ، سرمایه گذاری</span>
                                                <i class="ki-duotone ki-check-circle fs-1 text-success">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </div>
                                            <!--end::آیتم-->
                                            <!--begin::آیتم-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">ماژول
                                                    حسابداری</span>
                                                <i class="ki-duotone ki-check-circle fs-1 text-success">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </div>
                                            <!--end::آیتم-->
                                            <!--begin::آیتم-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">بستر
                                                    شبکه</span>
                                                <i class="ki-duotone ki-check-circle fs-1 text-success">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </div>
                                            <!--end::آیتم-->
                                            <!--begin::آیتم-->
                                            <div class="d-flex align-items-center">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">فضای نامحدود
                                                    ابر</span>
                                                <i class="ki-duotone ki-check-circle fs-1 text-success">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </div>
                                            <!--end::آیتم-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Tab Pane-->
                                    <!--begin::Tab Pane-->
                                    <div class="tab-pane fade" id="kt_upgrade_plan_custom">
                                        <!--begin::Heading-->
                                        <div class="pb-5">
                                            <h2 class="fw-bold text-dark">برنامه ی استارت اپ شما چیست؟?</h2>
                                            <div class="text-muted fw-semibold">Optimal for corporations</div>
                                        </div>
                                        <!--end::Heading-->
                                        <!--begin::Body-->
                                        <div class="pt-1">
                                            <!--begin::آیتم-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">نامحدود
                                                    کاربران</span>
                                                <i class="ki-duotone ki-check-circle fs-1 text-success">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </div>
                                            <!--end::آیتم-->
                                            <!--begin::آیتم-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">نامحدود پروژه
                                                    Integrations</span>
                                                <i class="ki-duotone ki-check-circle fs-1 text-success">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </div>
                                            <!--end::آیتم-->
                                            <!--begin::آیتم-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">ماژول تجزیه و
                                                    تحلیل</span>
                                                <i class="ki-duotone ki-check-circle fs-1 text-success">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </div>
                                            <!--end::آیتم-->
                                            <!--begin::آیتم-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">ماژول دارایی ،
                                                    مالیه ، سرمایه گذاری</span>
                                                <i class="ki-duotone ki-check-circle fs-1 text-success">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </div>
                                            <!--end::آیتم-->
                                            <!--begin::آیتم-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">ماژول
                                                    حسابداری</span>
                                                <i class="ki-duotone ki-check-circle fs-1 text-success">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </div>
                                            <!--end::آیتم-->
                                            <!--begin::آیتم-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">بستر
                                                    شبکه</span>
                                                <i class="ki-duotone ki-check-circle fs-1 text-success">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </div>
                                            <!--end::آیتم-->
                                            <!--begin::آیتم-->
                                            <div class="d-flex align-items-center">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">فضای نامحدود
                                                    ابر</span>
                                                <i class="ki-duotone ki-check-circle fs-1 text-success">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </div>
                                            <!--end::آیتم-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Tab Pane-->
                                </div>
                                <!--end::Tab content-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->
                    </div>
                    <!--end::برنامه ریزی ها-->
                    <!--begin::Actions-->
                    <div class="d-flex flex-center flex-row-fluid pt-12">
                        <button type="reset" class="btn btn-light me-3" data-bs-dismiss="modal">انصراف</button>
                        <button type="submit" class="btn btn-primary" id="kt_modal_upgrade_plan_btn">
                            <!--begin::Indicator label-->
                            <span class="indicator-label">ارتقا طرح</span>
                            <!--end::Indicator label-->
                            <!--begin::Indicator progress-->
                            <span class="indicator-progress">لطفا صبر کنید...
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                            <!--end::Indicator progress-->
                        </button>
                    </div>
                    <!--end::Actions-->
                </div>
                <!--end::Modal body-->
            </div>
            <!--end::Modal content-->
        </div>
        <!--end::Modal dialog-->
    </div>
    <!--end::Modal - ارتقا دهید plan-->
    <!--begin::Modal - ساختن اپ-->
    <div class="modal fade" id="kt_modal_create_app" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered mw-900px">
            <!--begin::Modal content-->
            <div class="modal-content">
                <!--begin::Modal header-->
                <div class="modal-header">
                    <!--begin::Modal title-->
                    <h2>ساختن اپ</h2>
                    <!--end::Modal title-->
                    <!--begin::Close-->
                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                        <i class="ki-duotone ki-cross fs-1">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </div>
                    <!--end::Close-->
                </div>
                <!--end::Modal header-->
                <!--begin::Modal body-->
                <div class="modal-body py-lg-10 px-lg-10">
                    <!--begin::Stepper-->
                    <div class="stepper stepper-pills stepper-column d-flex flex-column flex-xl-row flex-row-fluid"
                        id="kt_modal_create_app_stepper">
                        <!--begin::کناری-->
                        <div
                            class="d-flex justify-content-center justify-content-xl-start flex-row-auto w-100 w-xl-300px">
                            <!--begin::Nav-->
                            <div class="stepper-nav ps-lg-10">
                                <!--begin::Step 1-->
                                <div class="stepper-item current" data-kt-stepper-element="nav">
                                    <!--begin::Wrapper-->
                                    <div class="stepper-wrapper">
                                        <!--begin::Icon-->
                                        <div class="stepper-icon w-40px h-40px">
                                            <i class="ki-duotone ki-check stepper-check fs-2"></i>
                                            <span class="stepper-number">1</span>
                                        </div>
                                        <!--end::Icon-->
                                        <!--begin::Tags-->
                                        <div class="stepper-label">
                                            <h3 class="stepper-title">جزییات</h3>
                                            <div class="stepper-desc">نام اپلیکیشن شما</div>
                                        </div>
                                        <!--end::Tags-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Line-->
                                    <div class="stepper-line h-40px"></div>
                                    <!--end::Line-->
                                </div>
                                <!--end::Step 1-->
                                <!--begin::Step 2-->
                                <div class="stepper-item" data-kt-stepper-element="nav">
                                    <!--begin::Wrapper-->
                                    <div class="stepper-wrapper">
                                        <!--begin::Icon-->
                                        <div class="stepper-icon w-40px h-40px">
                                            <i class="ki-duotone ki-check stepper-check fs-2"></i>
                                            <span class="stepper-number">2</span>
                                        </div>
                                        <!--begin::Icon-->
                                        <!--begin::Tags-->
                                        <div class="stepper-label">
                                            <h3 class="stepper-title">فریمورک ها</h3>
                                            <div class="stepper-desc">انتخاب فریمورک اپلیکیشن</div>
                                        </div>
                                        <!--begin::Tags-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Line-->
                                    <div class="stepper-line h-40px"></div>
                                    <!--end::Line-->
                                </div>
                                <!--end::Step 2-->
                                <!--begin::Step 3-->
                                <div class="stepper-item" data-kt-stepper-element="nav">
                                    <!--begin::Wrapper-->
                                    <div class="stepper-wrapper">
                                        <!--begin::Icon-->
                                        <div class="stepper-icon w-40px h-40px">
                                            <i class="ki-duotone ki-check stepper-check fs-2"></i>
                                            <span class="stepper-number">3</span>
                                        </div>
                                        <!--end::Icon-->
                                        <!--begin::Tags-->
                                        <div class="stepper-label">
                                            <h3 class="stepper-title">دیتابیس</h3>
                                            <div class="stepper-desc">انتخاب نوع دیتابیس</div>
                                        </div>
                                        <!--end::Tags-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Line-->
                                    <div class="stepper-line h-40px"></div>
                                    <!--end::Line-->
                                </div>
                                <!--end::Step 3-->
                                <!--begin::Step 4-->
                                <div class="stepper-item" data-kt-stepper-element="nav">
                                    <!--begin::Wrapper-->
                                    <div class="stepper-wrapper">
                                        <!--begin::Icon-->
                                        <div class="stepper-icon w-40px h-40px">
                                            <i class="ki-duotone ki-check stepper-check fs-2"></i>
                                            <span class="stepper-number">4</span>
                                        </div>
                                        <!--end::Icon-->
                                        <!--begin::Tags-->
                                        <div class="stepper-label">
                                            <h3 class="stepper-title">صورتحساب</h3>
                                            <div class="stepper-desc">جزییات پرداخت</div>
                                        </div>
                                        <!--end::Tags-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Line-->
                                    <div class="stepper-line h-40px"></div>
                                    <!--end::Line-->
                                </div>
                                <!--end::Step 4-->
                                <!--begin::Step 5-->
                                <div class="stepper-item mark-completed" data-kt-stepper-element="nav">
                                    <!--begin::Wrapper-->
                                    <div class="stepper-wrapper">
                                        <!--begin::Icon-->
                                        <div class="stepper-icon w-40px h-40px">
                                            <i class="ki-duotone ki-check stepper-check fs-2"></i>
                                            <span class="stepper-number">5</span>
                                        </div>
                                        <!--end::Icon-->
                                        <!--begin::Tags-->
                                        <div class="stepper-label">
                                            <h3 class="stepper-title">کامل شد</h3>
                                            <div class="stepper-desc">ثبت بازخورد</div>
                                        </div>
                                        <!--end::Tags-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Step 5-->
                            </div>
                            <!--end::Nav-->
                        </div>
                        <!--begin::کناری-->
                        <!--begin::Content-->
                        <div class="flex-row-fluid py-lg-5 px-lg-15">
                            <!--begin::Form-->
                            <form class="form" novalidate="novalidate" id="kt_modal_create_app_form">
                                <!--begin::Step 1-->
                                <div class="current" data-kt-stepper-element="content">
                                    <div class="w-100">
                                        <!--begin::Input group-->
                                        <div class="fv-row mb-10">
                                            <!--begin::Tags-->
                                            <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                                <span class="required">اپلیکیشن نام</span>
                                                <span class="ms-1" data-bs-toggle="tooltip"
                                                    title="نام برنامه منحصر به فرد خود را مشخص کنید">
                                                    <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                        <span class="path3"></span>
                                                    </i>
                                                </span>
                                            </label>
                                            <!--end::Tags-->
                                            <!--begin::Input-->
                                            <input type="text" class="form-control form-control-lg form-control-solid"
                                                name="name" placeholder="" value="" />
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="fv-row">
                                            <!--begin::Tags-->
                                            <label class="d-flex align-items-center fs-5 fw-semibold mb-4">
                                                <span class="required">دسته بندی</span>
                                                <span class="ms-1" data-bs-toggle="tooltip"
                                                    title="دسته برنامه خود را انتخاب کنید">
                                                    <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                        <span class="path3"></span>
                                                    </i>
                                                </span>
                                            </label>
                                            <!--end::Tags-->
                                            <!--begin:تنظیمات-->
                                            <div class="fv-row">
                                                <!--begin:Option-->
                                                <label class="d-flex flex-stack mb-5 cursor-pointer">
                                                    <!--begin:برچسب-->
                                                    <span class="d-flex align-items-center me-2">
                                                        <!--begin:Icon-->
                                                        <span class="symbol symbol-50px me-6">
                                                            <span class="symbol-label bg-light-primary">
                                                                <i class="ki-duotone ki-compass fs-1 text-primary">
                                                                    <span class="path1"></span>
                                                                    <span class="path2"></span>
                                                                </i>
                                                            </span>
                                                        </span>
                                                        <!--end:Icon-->
                                                        <!--begin:Info-->
                                                        <span class="d-flex flex-column">
                                                            <span class="fw-bold fs-6">دوره های آنلاین سریع</span>
                                                            <span class="fs-7 text-muted">ایجاد یک ساختار متن واضح فقط
                                                                یک سئو است</span>
                                                        </span>
                                                        <!--end:Info-->
                                                    </span>
                                                    <!--end:برچسب-->
                                                    <!--begin:Input-->
                                                    <span class="form-check form-check-custom form-check-solid">
                                                        <input class="form-check-input" type="radio" name="category"
                                                            value="1" />
                                                    </span>
                                                    <!--end:Input-->
                                                </label>
                                                <!--end::Option-->
                                                <!--begin:Option-->
                                                <label class="d-flex flex-stack mb-5 cursor-pointer">
                                                    <!--begin:برچسب-->
                                                    <span class="d-flex align-items-center me-2">
                                                        <!--begin:Icon-->
                                                        <span class="symbol symbol-50px me-6">
                                                            <span class="symbol-label bg-light-danger">
                                                                <i class="ki-duotone ki-element-11 fs-1 text-danger">
                                                                    <span class="path1"></span>
                                                                    <span class="path2"></span>
                                                                    <span class="path3"></span>
                                                                    <span class="path4"></span>
                                                                </i>
                                                            </span>
                                                        </span>
                                                        <!--end:Icon-->
                                                        <!--begin:Info-->
                                                        <span class="d-flex flex-column">
                                                            <span class="fw-bold fs-6">بحث های چهره به چهره</span>
                                                            <span class="fs-7 text-muted">ایجاد یک ساختار متن روشن فقط
                                                                یک جنبه است</span>
                                                        </span>
                                                        <!--end:Info-->
                                                    </span>
                                                    <!--end:برچسب-->
                                                    <!--begin:Input-->
                                                    <span class="form-check form-check-custom form-check-solid">
                                                        <input class="form-check-input" type="radio" name="category"
                                                            value="2" />
                                                    </span>
                                                    <!--end:Input-->
                                                </label>
                                                <!--end::Option-->
                                                <!--begin:Option-->
                                                <label class="d-flex flex-stack cursor-pointer">
                                                    <!--begin:برچسب-->
                                                    <span class="d-flex align-items-center me-2">
                                                        <!--begin:Icon-->
                                                        <span class="symbol symbol-50px me-6">
                                                            <span class="symbol-label bg-light-success">
                                                                <i class="ki-duotone ki-timer fs-1 text-success">
                                                                    <span class="path1"></span>
                                                                    <span class="path2"></span>
                                                                    <span class="path3"></span>
                                                                </i>
                                                            </span>
                                                        </span>
                                                        <!--end:Icon-->
                                                        <!--begin:Info-->
                                                        <span class="d-flex flex-column">
                                                            <span class="fw-bold fs-6">آموزش مقدماتی کامل</span>
                                                            <span class="fs-7 text-muted">ایجاد یک متن متن روشن برای
                                                                نوشتن متن</span>
                                                        </span>
                                                        <!--end:Info-->
                                                    </span>
                                                    <!--end:برچسب-->
                                                    <!--begin:Input-->
                                                    <span class="form-check form-check-custom form-check-solid">
                                                        <input class="form-check-input" type="radio" name="category"
                                                            value="3" />
                                                    </span>
                                                    <!--end:Input-->
                                                </label>
                                                <!--end::Option-->
                                            </div>
                                            <!--end:تنظیمات-->
                                        </div>
                                        <!--end::Input group-->
                                    </div>
                                </div>
                                <!--end::Step 1-->
                                <!--begin::Step 2-->
                                <div data-kt-stepper-element="content">
                                    <div class="w-100">
                                        <!--begin::Input group-->
                                        <div class="fv-row">
                                            <!--begin::Tags-->
                                            <label class="d-flex align-items-center fs-5 fw-semibold mb-4">
                                                <span class="required">انتخاب فریمورک</span>
                                                <span class="ms-1" data-bs-toggle="tooltip"
                                                    title="Specify your apps framework">
                                                    <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                        <span class="path3"></span>
                                                    </i>
                                                </span>
                                            </label>
                                            <!--end::Tags-->
                                            <!--begin:Option-->
                                            <label class="d-flex flex-stack cursor-pointer mb-5">
                                                <!--begin:برچسب-->
                                                <span class="d-flex align-items-center me-2">
                                                    <!--begin:Icon-->
                                                    <span class="symbol symbol-50px me-6">
                                                        <span class="symbol-label bg-light-warning">
                                                            <i class="ki-duotone ki-html fs-2x text-warning">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>
                                                        </span>
                                                    </span>
                                                    <!--end:Icon-->
                                                    <!--begin:Info-->
                                                    <span class="d-flex flex-column">
                                                        <span class="fw-bold fs-6">HTML5</span>
                                                        <span class="fs-7 text-muted">پروژه وب پایه</span>
                                                    </span>
                                                    <!--end:Info-->
                                                </span>
                                                <!--end:برچسب-->
                                                <!--begin:Input-->
                                                <span class="form-check form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="radio" checked="checked"
                                                        name="framework" value="1" />
                                                </span>
                                                <!--end:Input-->
                                            </label>
                                            <!--end::Option-->
                                            <!--begin:Option-->
                                            <label class="d-flex flex-stack cursor-pointer mb-5">
                                                <!--begin:برچسب-->
                                                <span class="d-flex align-items-center me-2">
                                                    <!--begin:Icon-->
                                                    <span class="symbol symbol-50px me-6">
                                                        <span class="symbol-label bg-light-success">
                                                            <i class="ki-duotone ki-react fs-2x text-success">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>
                                                        </span>
                                                    </span>
                                                    <!--end:Icon-->
                                                    <!--begin:Info-->
                                                    <span class="d-flex flex-column">
                                                        <span class="fw-bold fs-6">ReactJS</span>
                                                        <span class="fs-7 text-muted">چارچوب برنامه قوی و انعطاف
                                                            پذیر</span>
                                                    </span>
                                                    <!--end:Info-->
                                                </span>
                                                <!--end:برچسب-->
                                                <!--begin:Input-->
                                                <span class="form-check form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="radio" name="framework"
                                                        value="2" />
                                                </span>
                                                <!--end:Input-->
                                            </label>
                                            <!--end::Option-->
                                            <!--begin:Option-->
                                            <label class="d-flex flex-stack cursor-pointer mb-5">
                                                <!--begin:برچسب-->
                                                <span class="d-flex align-items-center me-2">
                                                    <!--begin:Icon-->
                                                    <span class="symbol symbol-50px me-6">
                                                        <span class="symbol-label bg-light-danger">
                                                            <i class="ki-duotone ki-angular fs-2x text-danger">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                                <span class="path3"></span>
                                                            </i>
                                                        </span>
                                                    </span>
                                                    <!--end:Icon-->
                                                    <!--begin:Info-->
                                                    <span class="d-flex flex-column">
                                                        <span class="fw-bold fs-6">Angular</span>
                                                        <span class="fs-7 text-muted">مدیریت قوی دیتاها</span>
                                                    </span>
                                                    <!--end:Info-->
                                                </span>
                                                <!--end:برچسب-->
                                                <!--begin:Input-->
                                                <span class="form-check form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="radio" name="framework"
                                                        value="3" />
                                                </span>
                                                <!--end:Input-->
                                            </label>
                                            <!--end::Option-->
                                            <!--begin:Option-->
                                            <label class="d-flex flex-stack cursor-pointer">
                                                <!--begin:برچسب-->
                                                <span class="d-flex align-items-center me-2">
                                                    <!--begin:Icon-->
                                                    <span class="symbol symbol-50px me-6">
                                                        <span class="symbol-label bg-light-primary">
                                                            <i class="ki-duotone ki-vue fs-2x text-primary">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>
                                                        </span>
                                                    </span>
                                                    <!--end:Icon-->
                                                    <!--begin:Info-->
                                                    <span class="d-flex flex-column">
                                                        <span class="fw-bold fs-6">Vue</span>
                                                        <span class="fs-7 text-muted">چارچوب سبک و پاسخگو</span>
                                                    </span>
                                                    <!--end:Info-->
                                                </span>
                                                <!--end:برچسب-->
                                                <!--begin:Input-->
                                                <span class="form-check form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="radio" name="framework"
                                                        value="4" />
                                                </span>
                                                <!--end:Input-->
                                            </label>
                                            <!--end::Option-->
                                        </div>
                                        <!--end::Input group-->
                                    </div>
                                </div>
                                <!--end::Step 2-->
                                <!--begin::Step 3-->
                                <div data-kt-stepper-element="content">
                                    <div class="w-100">
                                        <!--begin::Input group-->
                                        <div class="fv-row mb-10">
                                            <!--begin::Tags-->
                                            <label class="required fs-5 fw-semibold mb-2">نام دیتابیس</label>
                                            <!--end::Tags-->
                                            <!--begin::Input-->
                                            <input type="text" class="form-control form-control-lg form-control-solid"
                                                name="dbname" placeholder="" value="master_db" />
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="fv-row">
                                            <!--begin::Tags-->
                                            <label class="d-flex align-items-center fs-5 fw-semibold mb-4">
                                                <span class="required">انتخاب موتور دیتابیس</span>
                                                <span class="ms-1" data-bs-toggle="tooltip"
                                                    title="انتخاب your app database engine">
                                                    <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                        <span class="path3"></span>
                                                    </i>
                                                </span>
                                            </label>
                                            <!--end::Tags-->
                                            <!--begin:Option-->
                                            <label class="d-flex flex-stack cursor-pointer mb-5">
                                                <!--begin::Tags-->
                                                <span class="d-flex align-items-center me-2">
                                                    <!--begin::Icon-->
                                                    <span class="symbol symbol-50px me-6">
                                                        <span class="symbol-label bg-light-success">
                                                            <i class="ki-duotone ki-note text-success fs-2x">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>
                                                        </span>
                                                    </span>
                                                    <!--end::Icon-->
                                                    <!--begin::Info-->
                                                    <span class="d-flex flex-column">
                                                        <span class="fw-bold fs-6">MYSQL</span>
                                                        <span class="fs-7 text-muted">دیتابیس پایه</span>
                                                    </span>
                                                    <!--end::Info-->
                                                </span>
                                                <!--end::Tags-->
                                                <!--begin::Input-->
                                                <span class="form-check form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="radio" name="dbengine"
                                                        checked="checked" value="1" />
                                                </span>
                                                <!--end::Input-->
                                            </label>
                                            <!--end::Option-->
                                            <!--begin:Option-->
                                            <label class="d-flex flex-stack cursor-pointer mb-5">
                                                <!--begin::Tags-->
                                                <span class="d-flex align-items-center me-2">
                                                    <!--begin::Icon-->
                                                    <span class="symbol symbol-50px me-6">
                                                        <span class="symbol-label bg-light-danger">
                                                            <i class="ki-duotone ki-google text-danger fs-2x">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>
                                                        </span>
                                                    </span>
                                                    <!--end::Icon-->
                                                    <!--begin::Info-->
                                                    <span class="d-flex flex-column">
                                                        <span class="fw-bold fs-6">فایربیس</span>
                                                        <span class="fs-7 text-muted">گوگل بیس</span>
                                                    </span>
                                                    <!--end::Info-->
                                                </span>
                                                <!--end::Tags-->
                                                <!--begin::Input-->
                                                <span class="form-check form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="radio" name="dbengine"
                                                        value="2" />
                                                </span>
                                                <!--end::Input-->
                                            </label>
                                            <!--end::Option-->
                                            <!--begin:Option-->
                                            <label class="d-flex flex-stack cursor-pointer">
                                                <!--begin::Tags-->
                                                <span class="d-flex align-items-center me-2">
                                                    <!--begin::Icon-->
                                                    <span class="symbol symbol-50px me-6">
                                                        <span class="symbol-label bg-light-warning">
                                                            <i class="ki-duotone ki-microsoft text-warning fs-2x">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                                <span class="path3"></span>
                                                                <span class="path4"></span>
                                                            </i>
                                                        </span>
                                                    </span>
                                                    <!--end::Icon-->
                                                    <!--begin::Info-->
                                                    <span class="d-flex flex-column">
                                                        <span class="fw-bold fs-6">DynamoDB</span>
                                                        <span class="fs-7 text-muted">Microsoft Fast NoSQL
                                                            دیتابیس</span>
                                                    </span>
                                                    <!--end::Info-->
                                                </span>
                                                <!--end::Tags-->
                                                <!--begin::Input-->
                                                <span class="form-check form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="radio" name="dbengine"
                                                        value="3" />
                                                </span>
                                                <!--end::Input-->
                                            </label>
                                            <!--end::Option-->
                                        </div>
                                        <!--end::Input group-->
                                    </div>
                                </div>
                                <!--end::Step 3-->
                                <!--begin::Step 4-->
                                <div data-kt-stepper-element="content">
                                    <div class="w-100">
                                        <!--begin::Input group-->
                                        <div class="d-flex flex-column mb-7 fv-row">
                                            <!--begin::Tags-->
                                            <label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
                                                <span class="required">نام بر روی کارت</span>
                                                <span class="ms-1" data-bs-toggle="tooltip"
                                                    title="نام دارنده کارت را مشخص کنید">
                                                    <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                        <span class="path3"></span>
                                                    </i>
                                                </span>
                                            </label>
                                            <!--end::Tags-->
                                            <input type="text" class="form-control form-control-solid" placeholder=""
                                                name="card_name" value="مکس اندره" />
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="d-flex flex-column mb-7 fv-row">
                                            <!--begin::Tags-->
                                            <label class="required fs-6 fw-semibold form-label mb-2">شماره کارت</label>
                                            <!--end::Tags-->
                                            <!--begin::Input wrapper-->
                                            <div class="position-relative">
                                                <!--begin::Input-->
                                                <input type="text" class="form-control form-control-solid"
                                                    placeholder="شماره کارت را وارد کنید" name="card_number"
                                                    value="4111 1111 1111 1111" />
                                                <!--end::Input-->
                                                <!--begin::کارت logos-->
                                                <div class="position-absolute translate-middle-y top-50 end-0 me-5">
                                                    <img src="../assets/media/svg/card-logos/visa.svg" alt=""
                                                        class="h-25px" />
                                                    <img src="../assets/media/svg/card-logos/mastercard.svg" alt=""
                                                        class="h-25px" />
                                                    <img src="../assets/media/svg/card-logos/american-express.svg"
                                                        alt="" class="h-25px" />
                                                </div>
                                                <!--end::کارت logos-->
                                            </div>
                                            <!--end::Input wrapper-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="row mb-10">
                                            <!--begin::Col-->
                                            <div class="col-md-8 fv-row">
                                                <!--begin::Tags-->
                                                <label class="required fs-6 fw-semibold form-label mb-2">تاریخ
                                                    انقضا</label>
                                                <!--end::Tags-->
                                                <!--begin::Row-->
                                                <div class="row fv-row">
                                                    <!--begin::Col-->
                                                    <div class="col-6">
                                                        <select name="card_expiry_month"
                                                            class="form-select form-select-solid" data-control="select2"
                                                            data-hide-search="true" data-placeholder="ماه">
                                                            <option></option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                            <option value="6">6</option>
                                                            <option value="7">7</option>
                                                            <option value="8">8</option>
                                                            <option value="9">9</option>
                                                            <option value="10">10</option>
                                                            <option value="11">11</option>
                                                            <option value="12">12</option>
                                                        </select>
                                                    </div>
                                                    <!--end::Col-->
                                                    <!--begin::Col-->
                                                    <div class="col-6">
                                                        <select name="card_expiry_year"
                                                            class="form-select form-select-solid" data-control="select2"
                                                            data-hide-search="true" data-placeholder="سال">
                                                            <option></option>
                                                            <option value="2023">2023</option>
                                                            <option value="2024">2024</option>
                                                            <option value="2025">2025</option>
                                                            <option value="2026">2026</option>
                                                            <option value="2027">2027</option>
                                                            <option value="2028">2028</option>
                                                            <option value="2029">2029</option>
                                                            <option value="2030">2030</option>
                                                            <option value="2031">2031</option>
                                                            <option value="2032">2032</option>
                                                            <option value="2033">2033</option>
                                                        </select>
                                                    </div>
                                                    <!--end::Col-->
                                                </div>
                                                <!--end::Row-->
                                            </div>
                                            <!--end::Col-->
                                            <!--begin::Col-->
                                            <div class="col-md-4 fv-row">
                                                <!--begin::Tags-->
                                                <label
                                                    class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
                                                    <span class="required">CVV</span>
                                                    <span class="ms-1" data-bs-toggle="tooltip"
                                                        title="Enter a card CVV code">
                                                        <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                            <span class="path3"></span>
                                                        </i>
                                                    </span>
                                                </label>
                                                <!--end::Tags-->
                                                <!--begin::Input wrapper-->
                                                <div class="position-relative">
                                                    <!--begin::Input-->
                                                    <input type="text" class="form-control form-control-solid"
                                                        minlength="3" maxlength="4" placeholder="CVV" name="card_cvv" />
                                                    <!--end::Input-->
                                                    <!--begin::CVV icon-->
                                                    <div class="position-absolute translate-middle-y top-50 end-0 me-3">
                                                        <i class="ki-duotone ki-credit-سبد fs-2hx">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </div>
                                                    <!--end::CVV icon-->
                                                </div>
                                                <!--end::Input wrapper-->
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="d-flex flex-stack">
                                            <!--begin::Tags-->
                                            <div class="me-5">
                                                <label class="fs-6 fw-semibold form-label">کارت را برای صورتحساب بیشتر
                                                    ذخیره کنید؟?</label>
                                                <div class="fs-7 fw-semibold text-muted">اگر به اطلاعات بیشتری نیاز
                                                    دارید ، لطفا برنامه ریزی بودجه را بررسی کنید</div>
                                            </div>
                                            <!--end::Tags-->
                                            <!--begin::Switch-->
                                            <label class="form-check form-switch form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" value="1"
                                                    checked="checked" />
                                                <span class="form-check-label fw-semibold text-muted">ذخیره کارت</span>
                                            </label>
                                            <!--end::Switch-->
                                        </div>
                                        <!--end::Input group-->
                                    </div>
                                </div>
                                <!--end::Step 4-->
                                <!--begin::Step 5-->
                                <div data-kt-stepper-element="content">
                                    <div class="w-100 text-center">
                                        <!--begin::Heading-->
                                        <h1 class="fw-bold text-dark mb-3">ریلیز !</h1>
                                        <!--end::Heading-->
                                        <!--begin::توضیحات-->
                                        <div class="text-muted fw-semibold fs-3">برنامه خود را برای شروع پروژه خود ثبت
                                            کنید.</div>
                                        <!--end::توضیحات-->
                                        <!--begin::Illustration-->
                                        <div class="text-center px-4 py-15">
                                            <img src="../assets/media/illustrations/sketchy-1/9.png" alt=""
                                                class="mw-100 mh-300px" />
                                        </div>
                                        <!--end::Illustration-->
                                    </div>
                                </div>
                                <!--end::Step 5-->
                                <!--begin::Actions-->
                                <div class="d-flex flex-stack pt-10">
                                    <!--begin::Wrapper-->
                                    <div class="me-2">
                                        <button type="button" class="btn btn-lg btn-light-primary me-3"
                                            data-kt-stepper-action="previous">
                                            <i class="ki-duotone ki-arrow-left fs-3 me-1">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>برگشت</button>
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Wrapper-->
                                    <div>
                                        <button type="button" class="btn btn-lg btn-primary"
                                            data-kt-stepper-action="submit">
                                            <span class="indicator-label">ثبت
                                                <i class="ki-duotone ki-arrow-right fs-3 ms-2 me-0">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i></span>
                                            <span class="indicator-progress">لطفا صبر کنید...
                                                <span
                                                    class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                        </button>
                                        <button type="button" class="btn btn-lg btn-primary"
                                            data-kt-stepper-action="next">ادامه
                                            <i class="ki-duotone ki-arrow-right fs-3 ms-1 me-0">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i></button>
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Actions-->
                            </form>
                            <!--end::Form-->
                        </div>
                        <!--end::Content-->
                    </div>
                    <!--end::Stepper-->
                </div>
                <!--end::Modal body-->
            </div>
            <!--end::Modal content-->
        </div>
        <!--end::Modal dialog-->
    </div>
    <!--end::Modal - ساختن اپ-->
    <!--begin::Modal - هدف جدید-->
    <div class="modal fade" id="kt_modal_new_target" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered mw-650px">
            <!--begin::Modal content-->
            <div class="modal-content rounded">
                <!--begin::Modal header-->
                <div class="modal-header pb-0 border-0 justify-content-end">
                    <!--begin::Close-->
                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                        <i class="ki-duotone ki-cross fs-1">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </div>
                    <!--end::Close-->
                </div>
                <!--begin::Modal header-->
                <!--begin::Modal body-->
                <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                    <!--begin:Form-->
                    <form id="kt_modal_new_target_form" class="form" action="#">
                        <!--begin::Heading-->
                        <div class="mb-13 text-center">
                            <!--begin::Title-->
                            <h1 class="mb-3">تنظیم اولین هدف</h1>
                            <!--end::Title-->
                            <!--begin::توضیحات-->
                            <div class="text-muted fw-semibold fs-5">اگر به اطلاعات لازم دارید ، لطفاً بررسی کنید
                                <a href="#" class="fw-bold link-primary">دستورالعمل های پروژه</a>.
                            </div>
                            <!--end::توضیحات-->
                        </div>
                        <!--end::Heading-->
                        <!--begin::Input group-->
                        <div class="d-flex flex-column mb-8 fv-row">
                            <!--begin::Tags-->
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                <span class="required">عنوان هدف</span>
                                <span class="ms-1" data-bs-toggle="tooltip"
                                    title="یک نام هدف برای استفاده و مرجع امکانات مشخص کنید">
                                    <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                    </i>
                                </span>
                            </label>
                            <!--end::Tags-->
                            <input type="text" class="form-control form-control-solid" placeholder="عنوان"
                                name="target_title" />
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="row g-9 mb-8">
                            <!--begin::Col-->
                            <div class="col-md-6 fv-row">
                                <label class="required fs-6 fw-semibold mb-2">اختصاص دادن</label>
                                <select class="form-select form-select-solid" data-control="select2"
                                    data-hide-search="true" data-placeholder="انتخاب عضو" name="target_assign">
                                    <option value="">انتخاب user...</option>
                                    <option value="1">کارینا کالرک</option>
                                    <option value="2">رابرت دو</option>
                                    <option value="3">قلی رضایی</option>
                                    <option value="4">امید وحیدی</option>
                                    <option value="5">محسن برومند</option>
                                </select>
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-md-6 fv-row">
                                <label class="required fs-6 fw-semibold mb-2">سررسید</label>
                                <!--begin::Input-->
                                <div class="position-relative d-flex align-items-center">
                                    <!--begin::Icon-->
                                    <i class="ki-duotone ki-calendar-8 fs-2 position-absolute mx-4">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        <span class="path4"></span>
                                        <span class="path5"></span>
                                        <span class="path6"></span>
                                    </i>
                                    <!--end::Icon-->
                                    <!--begin::تاریخpicker-->
                                    <input class="form-control form-control-solid ps-12" placeholder="انتخاب یک تاریخ"
                                        name="due_date" />
                                    <!--end::تاریخpicker-->
                                </div>
                                <!--end::Input-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="d-flex flex-column mb-8">
                            <label class="fs-6 fw-semibold mb-2">جزییات</label>
                            <textarea class="form-control form-control-solid" rows="3" name="target_details"
                                placeholder="نوع جزییات"></textarea>
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="d-flex flex-column mb-8 fv-row">
                            <!--begin::Tags-->
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                <span class="required">برچسب ها</span>
                                <span class="ms-1" data-bs-toggle="tooltip" title="Specify a target priorty">
                                    <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                    </i>
                                </span>
                            </label>
                            <!--end::Tags-->
                            <input class="form-control form-control-solid" value="مهم" name="tags" />
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="d-flex flex-stack mb-8">
                            <!--begin::Tags-->
                            <div class="me-5">
                                <label class="fs-6 fw-semibold">افزودن کاربران</label>
                                <div class="fs-7 fw-semibold text-muted">اگر به اطلاعات بیشتری نیاز دارید ، لطفا برنامه
                                    ریزی بودجه را بررسی کنید</div>
                            </div>
                            <!--end::Tags-->
                            <!--begin::Switch-->
                            <label class="form-check form-switch form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1" checked="checked" />
                                <span class="form-check-label fw-semibold text-muted">همه بدهکار هستیم</span>
                            </label>
                            <!--end::Switch-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="mb-15 fv-row">
                            <!--begin::Wrapper-->
                            <div class="d-flex flex-stack">
                                <!--begin::Tags-->
                                <div class="fw-semibold me-5">
                                    <label class="fs-6">اعلان ها</label>
                                    <div class="fs-7 text-muted">همه اعلان ها توسط تلفن یا ایمیل</div>
                                </div>
                                <!--end::Tags-->
                                <!--begin::Checkboxes-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Checkbox-->
                                    <label class="form-check form-check-custom form-check-solid me-10">
                                        <input class="form-check-input h-20px w-20px" type="checkbox"
                                            name="communication[]" value="email" checked="checked" />
                                        <span class="form-check-label fw-semibold">ایمیل</span>
                                    </label>
                                    <!--end::Checkbox-->
                                    <!--begin::Checkbox-->
                                    <label class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input h-20px w-20px" type="checkbox"
                                            name="communication[]" value="phone" />
                                        <span class="form-check-label fw-semibold">تلفن</span>
                                    </label>
                                    <!--end::Checkbox-->
                                </div>
                                <!--end::Checkboxes-->
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Actions-->
                        <div class="text-center">
                            <button type="reset" id="kt_modal_new_target_cancel"
                                class="btn btn-light me-3">انصراف</button>
                            <button type="submit" id="kt_modal_new_target_submit" class="btn btn-primary">
                                <span class="indicator-label">ثبت</span>
                                <span class="indicator-progress">لطفا صبر کنید...
                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                            </button>
                        </div>
                        <!--end::Actions-->
                    </form>
                    <!--end:Form-->
                </div>
                <!--end::Modal body-->
            </div>
            <!--end::Modal content-->
        </div>
        <!--end::Modal dialog-->
    </div>
    <!--end::Modal - هدف جدید-->
    <!--begin::Modal - نمایش users-->
    <div class="modal fade" id="kt_modal_view_users" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog mw-650px">
            <!--begin::Modal content-->
            <div class="modal-content">
                <!--begin::Modal header-->
                <div class="modal-header pb-0 border-0 justify-content-end">
                    <!--begin::Close-->
                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                        <i class="ki-duotone ki-cross fs-1">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </div>
                    <!--end::Close-->
                </div>
                <!--begin::Modal header-->
                <!--begin::Modal body-->
                <div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
                    <!--begin::Heading-->
                    <div class="text-center mb-13">
                        <!--begin::Title-->
                        <h1 class="mb-3">مرور کاربران</h1>
                        <!--end::Title-->
                        <!--begin::توضیحات-->
                        <div class="text-muted fw-semibold fs-5">اگر به اطلاعات بیشتری نیاز دارید ، لطفاً این مورد را
                            بررسی کنید
                            <a href="#" class="link-primary fw-bold">لیست کاربران</a>.
                        </div>
                        <!--end::توضیحات-->
                    </div>
                    <!--end::Heading-->
                    <!--begin::users-->
                    <div class="mb-15">
                        <!--begin::لیست-->
                        <div class="mh-375px scroll-y me-n7 pe-7">
                            <!--begin::user-->
                            <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <img alt="Pic" src="../assets/media/avatars/300-6.jpg" />
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Details-->
                                    <div class="ms-6">
                                        <!--begin::نام-->
                                        <a href="#"
                                            class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">مرادی
                                            نیا
                                            <span class="badge badge-light fs-8 fw-semibold ms-2">کارگردان
                                                هنری</span></a>
                                        <!--end::نام-->
                                        <!--begin::ایمیل-->
                                        <div class="fw-semibold text-muted">smith@kpmg.com</div>
                                        <!--end::ایمیل-->
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->
                                <!--begin::Stats-->
                                <div class="d-flex">
                                    <!--begin::فروش-->
                                    <div class="text-end">
                                        <div class="fs-5 fw-bold text-dark">$23,000</div>
                                        <div class="fs-7 text-muted">فروش</div>
                                    </div>
                                    <!--end::فروش-->
                                </div>
                                <!--end::Stats-->
                            </div>
                            <!--end::user-->
                            <!--begin::user-->
                            <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <span class="symbol-label bg-light-danger text-danger fw-semibold">M</span>
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Details-->
                                    <div class="ms-6">
                                        <!--begin::نام-->
                                        <a href="#"
                                            class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">میلاد
                                            مرادی
                                            <span class="badge badge-light fs-8 fw-semibold ms-2">بازاریابی
                                                تحلیلی</span></a>
                                        <!--end::نام-->
                                        <!--begin::ایمیل-->
                                        <div class="fw-semibold text-muted">melody@altbox.com</div>
                                        <!--end::ایمیل-->
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->
                                <!--begin::Stats-->
                                <div class="d-flex">
                                    <!--begin::فروش-->
                                    <div class="text-end">
                                        <div class="fs-5 fw-bold text-dark">$50,500</div>
                                        <div class="fs-7 text-muted">فروش</div>
                                    </div>
                                    <!--end::فروش-->
                                </div>
                                <!--end::Stats-->
                            </div>
                            <!--end::user-->
                            <!--begin::user-->
                            <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <img alt="Pic" src="../assets/media/avatars/300-1.jpg" />
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Details-->
                                    <div class="ms-6">
                                        <!--begin::نام-->
                                        <a href="#"
                                            class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">جلالی
                                            <span class="badge badge-light fs-8 fw-semibold ms-2">مهندس نرم
                                                افزار</span></a>
                                        <!--end::نام-->
                                        <!--begin::ایمیل-->
                                        <div class="fw-semibold text-muted">max@kt.com</div>
                                        <!--end::ایمیل-->
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->
                                <!--begin::Stats-->
                                <div class="d-flex">
                                    <!--begin::فروش-->
                                    <div class="text-end">
                                        <div class="fs-5 fw-bold text-dark">$75,900</div>
                                        <div class="fs-7 text-muted">فروش</div>
                                    </div>
                                    <!--end::فروش-->
                                </div>
                                <!--end::Stats-->
                            </div>
                            <!--end::user-->
                            <!--begin::user-->
                            <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <img alt="Pic" src="../assets/media/avatars/300-5.jpg" />
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Details-->
                                    <div class="ms-6">
                                        <!--begin::نام-->
                                        <a href="#"
                                            class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">محسن
                                            برومند
                                            <span class="badge badge-light fs-8 fw-semibold ms-2">توسعه دهنده
                                                وب</span></a>
                                        <!--end::نام-->
                                        <!--begin::ایمیل-->
                                        <div class="fw-semibold text-muted">sean@dellito.com</div>
                                        <!--end::ایمیل-->
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->
                                <!--begin::Stats-->
                                <div class="d-flex">
                                    <!--begin::فروش-->
                                    <div class="text-end">
                                        <div class="fs-5 fw-bold text-dark">$10,500</div>
                                        <div class="fs-7 text-muted">فروش</div>
                                    </div>
                                    <!--end::فروش-->
                                </div>
                                <!--end::Stats-->
                            </div>
                            <!--end::user-->
                            <!--begin::user-->
                            <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <img alt="Pic" src="../assets/media/avatars/300-25.jpg" />
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Details-->
                                    <div class="ms-6">
                                        <!--begin::نام-->
                                        <a href="#"
                                            class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">رضا
                                            علی ابادی
                                            <span class="badge badge-light fs-8 fw-semibold ms-2">طراح یو ای و
                                                یوایکس</span></a>
                                        <!--end::نام-->
                                        <!--begin::ایمیل-->
                                        <div class="fw-semibold text-muted">brian@exchange.com</div>
                                        <!--end::ایمیل-->
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->
                                <!--begin::Stats-->
                                <div class="d-flex">
                                    <!--begin::فروش-->
                                    <div class="text-end">
                                        <div class="fs-5 fw-bold text-dark">$20,000</div>
                                        <div class="fs-7 text-muted">فروش</div>
                                    </div>
                                    <!--end::فروش-->
                                </div>
                                <!--end::Stats-->
                            </div>
                            <!--end::user-->
                            <!--begin::user-->
                            <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <span class="symbol-label bg-light-warning text-warning fw-semibold">C</span>
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Details-->
                                    <div class="ms-6">
                                        <!--begin::نام-->
                                        <a href="#"
                                            class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">میکائیل
                                            کرمانی
                                            <span class="badge badge-light fs-8 fw-semibold ms-2">سرپرست
                                                بازاریابی</span></a>
                                        <!--end::نام-->
                                        <!--begin::ایمیل-->
                                        <div class="fw-semibold text-muted">mik@pex.com</div>
                                        <!--end::ایمیل-->
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->
                                <!--begin::Stats-->
                                <div class="d-flex">
                                    <!--begin::فروش-->
                                    <div class="text-end">
                                        <div class="fs-5 fw-bold text-dark">$9,300</div>
                                        <div class="fs-7 text-muted">فروش</div>
                                    </div>
                                    <!--end::فروش-->
                                </div>
                                <!--end::Stats-->
                            </div>
                            <!--end::user-->
                            <!--begin::user-->
                            <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <img alt="Pic" src="../assets/media/avatars/300-9.jpg" />
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Details-->
                                    <div class="ms-6">
                                        <!--begin::نام-->
                                        <a href="#"
                                            class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">محمد
                                            رصایی
                                            <span class="badge badge-light fs-8 fw-semibold ms-2">معمار نرم
                                                افزار</span></a>
                                        <!--end::نام-->
                                        <!--begin::ایمیل-->
                                        <div class="fw-semibold text-muted">f.mit@kpmg.com</div>
                                        <!--end::ایمیل-->
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->
                                <!--begin::Stats-->
                                <div class="d-flex">
                                    <!--begin::فروش-->
                                    <div class="text-end">
                                        <div class="fs-5 fw-bold text-dark">$15,000</div>
                                        <div class="fs-7 text-muted">فروش</div>
                                    </div>
                                    <!--end::فروش-->
                                </div>
                                <!--end::Stats-->
                            </div>
                            <!--end::user-->
                            <!--begin::user-->
                            <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <span class="symbol-label bg-light-danger text-danger fw-semibold">O</span>
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Details-->
                                    <div class="ms-6">
                                        <!--begin::نام-->
                                        <a href="#"
                                            class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">امید
                                            وحیدی
                                            <span class="badge badge-light fs-8 fw-semibold ms-2">مدیر سیستم</span></a>
                                        <!--end::نام-->
                                        <!--begin::ایمیل-->
                                        <div class="fw-semibold text-muted">olivia@corpmail.com</div>
                                        <!--end::ایمیل-->
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->
                                <!--begin::Stats-->
                                <div class="d-flex">
                                    <!--begin::فروش-->
                                    <div class="text-end">
                                        <div class="fs-5 fw-bold text-dark">$23,000</div>
                                        <div class="fs-7 text-muted">فروش</div>
                                    </div>
                                    <!--end::فروش-->
                                </div>
                                <!--end::Stats-->
                            </div>
                            <!--end::user-->
                            <!--begin::user-->
                            <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <span class="symbol-label bg-light-primary text-primary fw-semibold">N</span>
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Details-->
                                    <div class="ms-6">
                                        <!--begin::نام-->
                                        <a href="#"
                                            class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">محسن
                                            برومند
                                            <span class="badge badge-light fs-8 fw-semibold ms-2">مدیریت
                                                اکانت</span></a>
                                        <!--end::نام-->
                                        <!--begin::ایمیل-->
                                        <div class="fw-semibold text-muted">owen.neil@gmail.com</div>
                                        <!--end::ایمیل-->
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->
                                <!--begin::Stats-->
                                <div class="d-flex">
                                    <!--begin::فروش-->
                                    <div class="text-end">
                                        <div class="fs-5 fw-bold text-dark">$45,800</div>
                                        <div class="fs-7 text-muted">فروش</div>
                                    </div>
                                    <!--end::فروش-->
                                </div>
                                <!--end::Stats-->
                            </div>
                            <!--end::user-->
                            <!--begin::user-->
                            <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <img alt="Pic" src="../assets/media/avatars/300-23.jpg" />
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Details-->
                                    <div class="ms-6">
                                        <!--begin::نام-->
                                        <a href="#"
                                            class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">علی
                                            کاربر
                                            <span class="badge badge-light fs-8 fw-semibold ms-2">طراح سایت</span></a>
                                        <!--end::نام-->
                                        <!--begin::ایمیل-->
                                        <div class="fw-semibold text-muted">dam@consilting.com</div>
                                        <!--end::ایمیل-->
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->
                                <!--begin::Stats-->
                                <div class="d-flex">
                                    <!--begin::فروش-->
                                    <div class="text-end">
                                        <div class="fs-5 fw-bold text-dark">$90,500</div>
                                        <div class="fs-7 text-muted">فروش</div>
                                    </div>
                                    <!--end::فروش-->
                                </div>
                                <!--end::Stats-->
                            </div>
                            <!--end::user-->
                            <!--begin::user-->
                            <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <span class="symbol-label bg-light-danger text-danger fw-semibold">E</span>
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Details-->
                                    <div class="ms-6">
                                        <!--begin::نام-->
                                        <a href="#"
                                            class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">الهام
                                            بارانی
                                            <span class="badge badge-light fs-8 fw-semibold ms-2">شرکت دارایی، مالیه،
                                                سرمایه گذاری</span></a>
                                        <!--end::نام-->
                                        <!--begin::ایمیل-->
                                        <div class="fw-semibold text-muted">emma@intenso.com</div>
                                        <!--end::ایمیل-->
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->
                                <!--begin::Stats-->
                                <div class="d-flex">
                                    <!--begin::فروش-->
                                    <div class="text-end">
                                        <div class="fs-5 fw-bold text-dark">$5,000</div>
                                        <div class="fs-7 text-muted">فروش</div>
                                    </div>
                                    <!--end::فروش-->
                                </div>
                                <!--end::Stats-->
                            </div>
                            <!--end::user-->
                            <!--begin::user-->
                            <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <img alt="Pic" src="../assets/media/avatars/300-12.jpg" />
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Details-->
                                    <div class="ms-6">
                                        <!--begin::نام-->
                                        <a href="#"
                                            class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">آنا
                                            کوهی
                                            <span class="badge badge-light fs-8 fw-semibold ms-2">ارتباط
                                                مشتری</span></a>
                                        <!--end::نام-->
                                        <!--begin::ایمیل-->
                                        <div class="fw-semibold text-muted">ana.cf@limtel.com</div>
                                        <!--end::ایمیل-->
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->
                                <!--begin::Stats-->
                                <div class="d-flex">
                                    <!--begin::فروش-->
                                    <div class="text-end">
                                        <div class="fs-5 fw-bold text-dark">$70,000</div>
                                        <div class="fs-7 text-muted">فروش</div>
                                    </div>
                                    <!--end::فروش-->
                                </div>
                                <!--end::Stats-->
                            </div>
                            <!--end::user-->
                            <!--begin::user-->
                            <div class="d-flex flex-stack py-5">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <span class="symbol-label bg-light-info text-info fw-semibold">A</span>
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Details-->
                                    <div class="ms-6">
                                        <!--begin::نام-->
                                        <a href="#"
                                            class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">رابرت
                                            دو
                                            <span class="badge badge-light fs-8 fw-semibold ms-2">بازاریابی
                                                Executive</span></a>
                                        <!--end::نام-->
                                        <!--begin::ایمیل-->
                                        <div class="fw-semibold text-muted">robert@benko.com</div>
                                        <!--end::ایمیل-->
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->
                                <!--begin::Stats-->
                                <div class="d-flex">
                                    <!--begin::فروش-->
                                    <div class="text-end">
                                        <div class="fs-5 fw-bold text-dark">$45,500</div>
                                        <div class="fs-7 text-muted">فروش</div>
                                    </div>
                                    <!--end::فروش-->
                                </div>
                                <!--end::Stats-->
                            </div>
                            <!--end::user-->
                        </div>
                        <!--end::لیست-->
                    </div>
                    <!--end::users-->
                    <!--begin::Notice-->
                    <div class="d-flex justify-content-between">
                        <!--begin::Tags-->
                        <div class="fw-semibold">
                            <label class="fs-6">افزودن کاربران</label>
                            <div class="fs-7 text-muted">اگر به اطلاعات بیشتری نیاز دارید ، لطفا برنامه ریزی بودجه را
                                بررسی کنید</div>
                        </div>
                        <!--end::Tags-->
                        <!--begin::Switch-->
                        <label class="form-check form-switch form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="" checked="checked" />
                            <span class="form-check-label fw-semibold text-muted">همه بدهکار هستیم</span>
                        </label>
                        <!--end::Switch-->
                    </div>
                    <!--end::Notice-->
                </div>
                <!--end::Modal body-->
            </div>
            <!--end::Modal content-->
        </div>
        <!--end::Modal dialog-->
    </div>
    <!--end::Modal - نمایش users-->
    <!--begin::Modal - Users جستجو-->
    <div class="modal fade" id="kt_modal_users_search" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered mw-650px">
            <!--begin::Modal content-->
            <div class="modal-content">
                <!--begin::Modal header-->
                <div class="modal-header pb-0 border-0 justify-content-end">
                    <!--begin::Close-->
                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                        <i class="ki-duotone ki-cross fs-1">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </div>
                    <!--end::Close-->
                </div>
                <!--begin::Modal header-->
                <!--begin::Modal body-->
                <div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
                    <!--begin::Content-->
                    <div class="text-center mb-13">
                        <h1 class="mb-3">جستجو کاربران</h1>
                        <div class="text-muted fw-semibold fs-5">همکاران را به پروژه خود دعوت کنید</div>
                    </div>
                    <!--end::Content-->
                    <!--begin::جستجو-->
                    <div id="kt_modal_users_search_hوler" data-kt-search-keypress="true" data-kt-search-min-length="2"
                        data-kt-search-enter="enter" data-kt-search-layout="inline">
                        <!--begin::Form-->
                        <form data-kt-search-element="form" class="w-100 position-relative mb-5" autocomplete="off">
                            <!--begin::Hidden input(Added to disable form autocomplete)-->
                            <input type="hidden" />
                            <!--end::Hidden input-->
                            <!--begin::Icon-->
                            <i
                                class="ki-duotone ki-magnifier fs-2 fs-lg-1 text-gray-500 position-absolute top-50 ms-5 translate-middle-y">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                            <!--end::Icon-->
                            <!--begin::Input-->
                            <input type="text" class="form-control form-control-lg form-control-solid px-15"
                                name="search" value="" placeholder="با نام کاربری ، نام کامل یا ایمیل جستجو کنید ..."
                                data-kt-search-element="input" />
                            <!--end::Input-->
                            <!--begin::Spinner-->
                            <span class="position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-5"
                                data-kt-search-element="spinner">
                                <span class="spinner-border h-15px w-15px align-middle text-muted"></span>
                            </span>
                            <!--end::Spinner-->
                            <!--begin::ریست-->
                            <span
                                class="btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 me-5 d-none"
                                data-kt-search-element="clear">
                                <i class="ki-duotone ki-cross fs-2 fs-lg-1 me-0">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                            </span>
                            <!--end::ریست-->
                        </form>
                        <!--end::Form-->
                        <!--begin::Wrapper-->
                        <div class="py-5">
                            <!--begin::پیشنهادات-->
                            <div data-kt-search-element="suggestions">
                                <!--begin::Heading-->
                                <h3 class="fw-semibold mb-5">اخیراً جستجو شده:</h3>
                                <!--end::Heading-->
                                <!--begin::users-->
                                <div class="mh-375px scroll-y me-n7 pe-7">
                                    <!--begin::user-->
                                    <a href="#"
                                        class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle me-5">
                                            <img alt="Pic" src="../assets/media/avatars/300-6.jpg" />
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Info-->
                                        <div class="fw-semibold">
                                            <span class="fs-6 text-gray-800 me-2">مرادی نیا</span>
                                            <span class="badge badge-light">کارگردان هنری</span>
                                        </div>
                                        <!--end::Info-->
                                    </a>
                                    <!--end::user-->
                                    <!--begin::user-->
                                    <a href="#"
                                        class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle me-5">
                                            <span class="symbol-label bg-light-danger text-danger fw-semibold">M</span>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Info-->
                                        <div class="fw-semibold">
                                            <span class="fs-6 text-gray-800 me-2">میلاد مرادی</span>
                                            <span class="badge badge-light">بازاریابی تحلیلی</span>
                                        </div>
                                        <!--end::Info-->
                                    </a>
                                    <!--end::user-->
                                    <!--begin::user-->
                                    <a href="#"
                                        class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle me-5">
                                            <img alt="Pic" src="../assets/media/avatars/300-1.jpg" />
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Info-->
                                        <div class="fw-semibold">
                                            <span class="fs-6 text-gray-800 me-2">جلالی</span>
                                            <span class="badge badge-light">مهندس نرم افزار</span>
                                        </div>
                                        <!--end::Info-->
                                    </a>
                                    <!--end::user-->
                                    <!--begin::user-->
                                    <a href="#"
                                        class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle me-5">
                                            <img alt="Pic" src="../assets/media/avatars/300-5.jpg" />
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Info-->
                                        <div class="fw-semibold">
                                            <span class="fs-6 text-gray-800 me-2">محسن برومند</span>
                                            <span class="badge badge-light">توسعه دهنده وب</span>
                                        </div>
                                        <!--end::Info-->
                                    </a>
                                    <!--end::user-->
                                    <!--begin::user-->
                                    <a href="#"
                                        class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle me-5">
                                            <img alt="Pic" src="../assets/media/avatars/300-25.jpg" />
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Info-->
                                        <div class="fw-semibold">
                                            <span class="fs-6 text-gray-800 me-2">رضا علی ابادی</span>
                                            <span class="badge badge-light">طراح یو ای و یوایکس</span>
                                        </div>
                                        <!--end::Info-->
                                    </a>
                                    <!--end::user-->
                                </div>
                                <!--end::users-->
                            </div>
                            <!--end::پیشنهادات-->
                            <!--begin::Results(add d-none to below element to hide the کاربران list by default)-->
                            <div data-kt-search-element="results" class="d-none">
                                <!--begin::users-->
                                <div class="mh-375px scroll-y me-n7 pe-7">
                                    <!--begin::user-->
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="0">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users"
                                                    data-kt-check="true" data-kt-check-target="[data-user-id='0']"
                                                    value="0" />
                                            </label>
                                            <!--end::Checkbox-->
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic" src="../assets/media/avatars/300-6.jpg" />
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">مرادی
                                                    نیا</a>
                                                <div class="fw-semibold text-muted">smith@kpmg.com</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->
                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                                <option value="1">مهمان</option>
                                                <option value="2" selected="selected">مدیر</option>
                                                <option value="3">متفرقه</option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::user-->
                                    <!--begin::Separator-->
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <!--end::Separator-->
                                    <!--begin::user-->
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="1">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users"
                                                    data-kt-check="true" data-kt-check-target="[data-user-id='1']"
                                                    value="1" />
                                            </label>
                                            <!--end::Checkbox-->
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <span
                                                    class="symbol-label bg-light-danger text-danger fw-semibold">M</span>
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">میلاد
                                                    مرادی</a>
                                                <div class="fw-semibold text-muted">melody@altbox.com</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->
                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                                <option value="1" selected="selected">مهمان</option>
                                                <option value="2">مدیر</option>
                                                <option value="3">متفرقه</option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::user-->
                                    <!--begin::Separator-->
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <!--end::Separator-->
                                    <!--begin::user-->
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="2">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users"
                                                    data-kt-check="true" data-kt-check-target="[data-user-id='2']"
                                                    value="2" />
                                            </label>
                                            <!--end::Checkbox-->
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic" src="../assets/media/avatars/300-1.jpg" />
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">جلالی</a>
                                                <div class="fw-semibold text-muted">max@kt.com</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->
                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                                <option value="1">مهمان</option>
                                                <option value="2">مدیر</option>
                                                <option value="3" selected="selected">متفرقه </option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::user-->
                                    <!--begin::Separator-->
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <!--end::Separator-->
                                    <!--begin::user-->
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="3">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users"
                                                    data-kt-check="true" data-kt-check-target="[data-user-id='3']"
                                                    value="3" />
                                            </label>
                                            <!--end::Checkbox-->
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic" src="../assets/media/avatars/300-5.jpg" />
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">محسن
                                                    برومند</a>
                                                <div class="fw-semibold text-muted">sean@dellito.com</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->
                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                                <option value="1">مهمان</option>
                                                <option value="2" selected="selected">مدیر</option>
                                                <option value="3">متفرقه</option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::user-->
                                    <!--begin::Separator-->
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <!--end::Separator-->
                                    <!--begin::user-->
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="4">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users"
                                                    data-kt-check="true" data-kt-check-target="[data-user-id='4']"
                                                    value="4" />
                                            </label>
                                            <!--end::Checkbox-->
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic" src="../assets/media/avatars/300-25.jpg" />
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">رضا علی
                                                    ابادی</a>
                                                <div class="fw-semibold text-muted">brian@exchange.com</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->
                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                                <option value="1">مهمان</option>
                                                <option value="2">مدیر</option>
                                                <option value="3" selected="selected">متفرقه </option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::user-->
                                    <!--begin::Separator-->
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <!--end::Separator-->
                                    <!--begin::user-->
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="5">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users"
                                                    data-kt-check="true" data-kt-check-target="[data-user-id='5']"
                                                    value="5" />
                                            </label>
                                            <!--end::Checkbox-->
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <span
                                                    class="symbol-label bg-light-warning text-warning fw-semibold">C</span>
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">میکائیل
                                                    کرمانی</a>
                                                <div class="fw-semibold text-muted">mik@pex.com</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->
                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                                <option value="1">مهمان</option>
                                                <option value="2" selected="selected">مدیر</option>
                                                <option value="3">متفرقه</option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::user-->
                                    <!--begin::Separator-->
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <!--end::Separator-->
                                    <!--begin::user-->
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="6">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users"
                                                    data-kt-check="true" data-kt-check-target="[data-user-id='6']"
                                                    value="6" />
                                            </label>
                                            <!--end::Checkbox-->
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic" src="../assets/media/avatars/300-9.jpg" />
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">محمد
                                                    رصایی</a>
                                                <div class="fw-semibold text-muted">f.mit@kpmg.com</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->
                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                                <option value="1">مهمان</option>
                                                <option value="2">مدیر</option>
                                                <option value="3" selected="selected">متفرقه </option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::user-->
                                    <!--begin::Separator-->
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <!--end::Separator-->
                                    <!--begin::user-->
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="7">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users"
                                                    data-kt-check="true" data-kt-check-target="[data-user-id='7']"
                                                    value="7" />
                                            </label>
                                            <!--end::Checkbox-->
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <span
                                                    class="symbol-label bg-light-danger text-danger fw-semibold">O</span>
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">امید
                                                    وحیدی</a>
                                                <div class="fw-semibold text-muted">olivia@corpmail.com</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->
                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                                <option value="1">مهمان</option>
                                                <option value="2" selected="selected">مدیر</option>
                                                <option value="3">متفرقه</option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::user-->
                                    <!--begin::Separator-->
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <!--end::Separator-->
                                    <!--begin::user-->
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="8">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users"
                                                    data-kt-check="true" data-kt-check-target="[data-user-id='8']"
                                                    value="8" />
                                            </label>
                                            <!--end::Checkbox-->
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <span
                                                    class="symbol-label bg-light-primary text-primary fw-semibold">N</span>
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">محسن
                                                    برومند</a>
                                                <div class="fw-semibold text-muted">owen.neil@gmail.com</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->
                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                                <option value="1" selected="selected">مهمان</option>
                                                <option value="2">مدیر</option>
                                                <option value="3">متفرقه</option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::user-->
                                    <!--begin::Separator-->
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <!--end::Separator-->
                                    <!--begin::user-->
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="9">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users"
                                                    data-kt-check="true" data-kt-check-target="[data-user-id='9']"
                                                    value="9" />
                                            </label>
                                            <!--end::Checkbox-->
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic" src="../assets/media/avatars/300-23.jpg" />
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">علی
                                                    کاربر</a>
                                                <div class="fw-semibold text-muted">dam@consilting.com</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->
                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                                <option value="1">مهمان</option>
                                                <option value="2">مدیر</option>
                                                <option value="3" selected="selected">متفرقه </option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::user-->
                                    <!--begin::Separator-->
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <!--end::Separator-->
                                    <!--begin::user-->
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="10">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users"
                                                    data-kt-check="true" data-kt-check-target="[data-user-id='10']"
                                                    value="10" />
                                            </label>
                                            <!--end::Checkbox-->
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <span
                                                    class="symbol-label bg-light-danger text-danger fw-semibold">E</span>
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">الهام
                                                    بارانی</a>
                                                <div class="fw-semibold text-muted">emma@intenso.com</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->
                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                                <option value="1">مهمان</option>
                                                <option value="2" selected="selected">مدیر</option>
                                                <option value="3">متفرقه</option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::user-->
                                    <!--begin::Separator-->
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <!--end::Separator-->
                                    <!--begin::user-->
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="11">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users"
                                                    data-kt-check="true" data-kt-check-target="[data-user-id='11']"
                                                    value="11" />
                                            </label>
                                            <!--end::Checkbox-->
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic" src="../assets/media/avatars/300-12.jpg" />
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">آنا
                                                    کوهی</a>
                                                <div class="fw-semibold text-muted">ana.cf@limtel.com</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->
                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                                <option value="1" selected="selected">مهمان</option>
                                                <option value="2">مدیر</option>
                                                <option value="3">متفرقه</option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::user-->
                                    <!--begin::Separator-->
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <!--end::Separator-->
                                    <!--begin::user-->
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="12">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users"
                                                    data-kt-check="true" data-kt-check-target="[data-user-id='12']"
                                                    value="12" />
                                            </label>
                                            <!--end::Checkbox-->
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <span class="symbol-label bg-light-info text-info fw-semibold">A</span>
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">رابرت
                                                    دو</a>
                                                <div class="fw-semibold text-muted">robert@benko.com</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->
                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                                <option value="1">مهمان</option>
                                                <option value="2">مدیر</option>
                                                <option value="3" selected="selected">متفرقه </option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::user-->
                                    <!--begin::Separator-->
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <!--end::Separator-->
                                    <!--begin::user-->
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="13">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users"
                                                    data-kt-check="true" data-kt-check-target="[data-user-id='13']"
                                                    value="13" />
                                            </label>
                                            <!--end::Checkbox-->
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic" src="../assets/media/avatars/300-13.jpg" />
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">جواد
                                                    مولای</a>
                                                <div class="fw-semibold text-muted">miller@mapple.com</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->
                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                                <option value="1">مهمان</option>
                                                <option value="2">مدیر</option>
                                                <option value="3" selected="selected">متفرقه </option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::user-->
                                    <!--begin::Separator-->
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <!--end::Separator-->
                                    <!--begin::user-->
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="14">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users"
                                                    data-kt-check="true" data-kt-check-target="[data-user-id='14']"
                                                    value="14" />
                                            </label>
                                            <!--end::Checkbox-->
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <span
                                                    class="symbol-label bg-light-success text-success fw-semibold">L</span>
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">لقمان
                                                    کامرانی</a>
                                                <div class="fw-semibold text-muted">lucy.m@fentech.com</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->
                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                                <option value="1">مهمان</option>
                                                <option value="2" selected="selected">مدیر</option>
                                                <option value="3">متفرقه</option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::user-->
                                    <!--begin::Separator-->
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <!--end::Separator-->
                                    <!--begin::user-->
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="15">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users"
                                                    data-kt-check="true" data-kt-check-target="[data-user-id='15']"
                                                    value="15" />
                                            </label>
                                            <!--end::Checkbox-->
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic" src="../assets/media/avatars/300-21.jpg" />
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">احسان
                                                    ورزقانی</a>
                                                <div class="fw-semibold text-muted">ethan@loop.com.au</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->
                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                                <option value="1" selected="selected">مهمان</option>
                                                <option value="2">مدیر</option>
                                                <option value="3">متفرقه</option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::user-->
                                    <!--begin::Separator-->
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <!--end::Separator-->
                                    <!--begin::user-->
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="16">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users"
                                                    data-kt-check="true" data-kt-check-target="[data-user-id='16']"
                                                    value="16" />
                                            </label>
                                            <!--end::Checkbox-->
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic" src="../assets/media/avatars/300-25.jpg" />
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">رضا علی
                                                    ابادی</a>
                                                <div class="fw-semibold text-muted">brian@exchange.com</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->
                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                                <option value="1">مهمان</option>
                                                <option value="2">مدیر</option>
                                                <option value="3" selected="selected">متفرقه </option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::user-->
                                </div>
                                <!--end::users-->
                                <!--begin::Actions-->
                                <div class="d-flex flex-center mt-15">
                                    <button type="reset" id="kt_modal_users_search_reset" data-bs-dismiss="modal"
                                        class="btn btn-active-light me-3">انصراف</button>
                                    <button type="submit" id="kt_modal_users_search_submit"
                                        class="btn btn-primary">کاربران انتخاب شده را اضافه کنید</button>
                                </div>
                                <!--end::Actions-->
                            </div>
                            <!--end::Results-->
                            <!--begin::Empty-->
                            <div data-kt-search-element="empty" class="text-center d-none">
                                <!--begin::Message-->
                                <div class="fw-semibold py-10">
                                    <div class="text-gray-600 fs-3 mb-2">هیچ کاربری پیدا نشد</div>
                                    <div class="text-muted fs-6">Try to search by username, full name or email...</div>
                                </div>
                                <!--end::Message-->
                                <!--begin::Illustration-->
                                <div class="text-center px-5">
                                    <img src="../assets/media/illustrations/sketchy-1/1.png" alt=""
                                        class="w-100 h-200px h-sm-325px" />
                                </div>
                                <!--end::Illustration-->
                            </div>
                            <!--end::Empty-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::جستجو-->
                </div>
                <!--end::Modal body-->
            </div>
            <!--end::Modal content-->
        </div>
        <!--end::Modal dialog-->
    </div>
    <!--end::Modal - Users جستجو-->
    <!--begin::Modal - دعوت دوستs-->
    <div class="modal fade" id="kt_modal_invite_friends" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog mw-650px">
            <!--begin::Modal content-->
            <div class="modal-content">
                <!--begin::Modal header-->
                <div class="modal-header pb-0 border-0 justify-content-end">
                    <!--begin::Close-->
                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                        <i class="ki-duotone ki-cross fs-1">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </div>
                    <!--end::Close-->
                </div>
                <!--begin::Modal header-->
                <!--begin::Modal body-->
                <div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
                    <!--begin::Heading-->
                    <div class="text-center mb-13">
                        <!--begin::Title-->
                        <h1 class="mb-3">دعوت از دوستان</h1>
                        <!--end::Title-->
                        <!--begin::توضیحات-->
                        <div class="text-muted fw-semibold fs-5">اگر به اطلاعات بیشتری نیاز دارید ، لطفاً این مورد را
                            بررسی کنید
                            <a href="#" class="link-primary fw-bold">صفحه سوالات متداول</a>.
                        </div>
                        <!--end::توضیحات-->
                    </div>
                    <!--end::Heading-->
                    <!--begin::Google Contacts دعوت-->
                    <div class="btn btn-light-primary fw-bold w-100 mb-8">
                        <img alt="Logo" src="../assets/media/svg/brand-logos/google-icon.svg" class="h-20px me-3" />دعوت
                        از مخاطبین جمیل
                    </div>
                    <!--end::Google Contacts دعوت-->
                    <!--begin::Separator-->
                    <div class="separator d-flex flex-center mb-8">
                        <span class="text-uppercase bg-body fs-7 fw-semibold text-muted px-3">یا</span>
                    </div>
                    <!--end::Separator-->
                    <!--begin::Textarea-->
                    <textarea class="form-control form-control-solid mb-8" rows="3"
                        placeholder="ایمیل ها را اینجا تایپ کنید یا"></textarea>
                    <!--end::Textarea-->
                    <!--begin::users-->
                    <div class="mb-10">
                        <!--begin::Heading-->
                        <div class="fs-6 fw-semibold mb-2">دعوت از کاربران</div>
                        <!--end::Heading-->
                        <!--begin::لیست-->
                        <div class="mh-300px scroll-y me-n7 pe-7">
                            <!--begin::user-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <img alt="Pic" src="../assets/media/avatars/300-6.jpg" />
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">مرادی
                                            نیا</a>
                                        <div class="fw-semibold text-muted">smith@kpmg.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->
                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                        data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1">مهمان</option>
                                        <option value="2" selected="selected">مدیر</option>
                                        <option value="3">متفرقه</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::user-->
                            <!--begin::user-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <span class="symbol-label bg-light-danger text-danger fw-semibold">M</span>
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">میلاد
                                            مرادی</a>
                                        <div class="fw-semibold text-muted">melody@altbox.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->
                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                        data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1" selected="selected">مهمان</option>
                                        <option value="2">مدیر</option>
                                        <option value="3">متفرقه</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::user-->
                            <!--begin::user-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <img alt="Pic" src="../assets/media/avatars/300-1.jpg" />
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">جلالی</a>
                                        <div class="fw-semibold text-muted">max@kt.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->
                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                        data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1">مهمان</option>
                                        <option value="2">مدیر</option>
                                        <option value="3" selected="selected">متفرقه </option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::user-->
                            <!--begin::user-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <img alt="Pic" src="../assets/media/avatars/300-5.jpg" />
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">محسن
                                            برومند</a>
                                        <div class="fw-semibold text-muted">sean@dellito.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->
                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                        data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1">مهمان</option>
                                        <option value="2" selected="selected">مدیر</option>
                                        <option value="3">متفرقه</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::user-->
                            <!--begin::user-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <img alt="Pic" src="../assets/media/avatars/300-25.jpg" />
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">رضا علی
                                            ابادی</a>
                                        <div class="fw-semibold text-muted">brian@exchange.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->
                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                        data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1">مهمان</option>
                                        <option value="2">مدیر</option>
                                        <option value="3" selected="selected">متفرقه </option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::user-->
                            <!--begin::user-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <span class="symbol-label bg-light-warning text-warning fw-semibold">C</span>
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">میکائیل
                                            کرمانی</a>
                                        <div class="fw-semibold text-muted">mik@pex.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->
                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                        data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1">مهمان</option>
                                        <option value="2" selected="selected">مدیر</option>
                                        <option value="3">متفرقه</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::user-->
                            <!--begin::user-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <img alt="Pic" src="../assets/media/avatars/300-9.jpg" />
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">محمد
                                            رصایی</a>
                                        <div class="fw-semibold text-muted">f.mit@kpmg.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->
                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                        data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1">مهمان</option>
                                        <option value="2">مدیر</option>
                                        <option value="3" selected="selected">متفرقه </option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::user-->
                            <!--begin::user-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <span class="symbol-label bg-light-danger text-danger fw-semibold">O</span>
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">امید
                                            وحیدی</a>
                                        <div class="fw-semibold text-muted">olivia@corpmail.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->
                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                        data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1">مهمان</option>
                                        <option value="2" selected="selected">مدیر</option>
                                        <option value="3">متفرقه</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::user-->
                            <!--begin::user-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <span class="symbol-label bg-light-primary text-primary fw-semibold">N</span>
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">محسن
                                            برومند</a>
                                        <div class="fw-semibold text-muted">owen.neil@gmail.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->
                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                        data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1" selected="selected">مهمان</option>
                                        <option value="2">مدیر</option>
                                        <option value="3">متفرقه</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::user-->
                            <!--begin::user-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <img alt="Pic" src="../assets/media/avatars/300-23.jpg" />
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">علی
                                            کاربر</a>
                                        <div class="fw-semibold text-muted">dam@consilting.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->
                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                        data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1">مهمان</option>
                                        <option value="2">مدیر</option>
                                        <option value="3" selected="selected">متفرقه </option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::user-->
                            <!--begin::user-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <span class="symbol-label bg-light-danger text-danger fw-semibold">E</span>
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">الهام
                                            بارانی</a>
                                        <div class="fw-semibold text-muted">emma@intenso.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->
                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                        data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1">مهمان</option>
                                        <option value="2" selected="selected">مدیر</option>
                                        <option value="3">متفرقه</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::user-->
                            <!--begin::user-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <img alt="Pic" src="../assets/media/avatars/300-12.jpg" />
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">آنا
                                            کوهی</a>
                                        <div class="fw-semibold text-muted">ana.cf@limtel.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->
                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                        data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1" selected="selected">مهمان</option>
                                        <option value="2">مدیر</option>
                                        <option value="3">متفرقه</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::user-->
                            <!--begin::user-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <span class="symbol-label bg-light-info text-info fw-semibold">A</span>
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">رابرت
                                            دو</a>
                                        <div class="fw-semibold text-muted">robert@benko.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->
                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                        data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1">مهمان</option>
                                        <option value="2">مدیر</option>
                                        <option value="3" selected="selected">متفرقه </option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::user-->
                            <!--begin::user-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <img alt="Pic" src="../assets/media/avatars/300-13.jpg" />
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">جواد
                                            مولای</a>
                                        <div class="fw-semibold text-muted">miller@mapple.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->
                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                        data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1">مهمان</option>
                                        <option value="2">مدیر</option>
                                        <option value="3" selected="selected">متفرقه </option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::user-->
                            <!--begin::user-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <span class="symbol-label bg-light-success text-success fw-semibold">L</span>
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">لقمان
                                            کامرانی</a>
                                        <div class="fw-semibold text-muted">lucy.m@fentech.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->
                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                        data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1">مهمان</option>
                                        <option value="2" selected="selected">مدیر</option>
                                        <option value="3">متفرقه</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::user-->
                            <!--begin::user-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <img alt="Pic" src="../assets/media/avatars/300-21.jpg" />
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">احسان
                                            ورزقانی</a>
                                        <div class="fw-semibold text-muted">ethan@loop.com.au</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->
                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                        data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1" selected="selected">مهمان</option>
                                        <option value="2">مدیر</option>
                                        <option value="3">متفرقه</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::user-->
                            <!--begin::user-->
                            <div class="d-flex flex-stack py-4">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <img alt="Pic" src="../assets/media/avatars/300-9.jpg" />
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">محمد
                                            رصایی</a>
                                        <div class="fw-semibold text-muted">f.mit@kpmg.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->
                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                        data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1">مهمان</option>
                                        <option value="2">مدیر</option>
                                        <option value="3" selected="selected">متفرقه </option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::user-->
                        </div>
                        <!--end::لیست-->
                    </div>
                    <!--end::users-->
                    <!--begin::Notice-->
                    <div class="d-flex flex-stack">
                        <!--begin::Tags-->
                        <div class="me-5 fw-semibold">
                            <label class="fs-6">افزودن کاربران</label>
                            <div class="fs-7 text-muted">اگر به اطلاعات بیشتری نیاز دارید ، لطفا برنامه ریزی بودجه را
                                بررسی کنید</div>
                        </div>
                        <!--end::Tags-->
                        <!--begin::Switch-->
                        <label class="form-check form-switch form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="1" checked="checked" />
                            <span class="form-check-label fw-semibold text-muted">همه بدهکار هستیم</span>
                        </label>
                        <!--end::Switch-->
                    </div>
                    <!--end::Notice-->
                </div>
                <!--end::Modal body-->
            </div>
            <!--end::Modal content-->
        </div>
        <!--end::Modal dialog-->
    </div>
    <!--end::Modal - دعوت دوست-->
    <!--end::Modals-->
    <!--begin::Javascript-->
    <script>var hostUrl = "../assets/";</script>
    <!--begin::Global Javascript Bundle(mوatory for all pages)-->
    <script src="../assets/plugins/global/plugins.bundle.js"></script>
    <script src="../assets/js/scripts.bundle.js"></script>
    <!--end::Global Javascript Bundle-->
    <!--begin::Vendors Javascript(used for this page only)-->
    <script src="../assets/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/index.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/radar.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/map.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/worldLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/continentsLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/usaLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZonesLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZoneAreasLow.js"></script>
    <script src="../assets/plugins/custom/datatables/datatables.bundle.js"></script>
    <!--end::Vendors Javascript-->
    <!--begin::سفارشی Javascript(used for this page only)-->
    <script src="../assets/js/widgets.bundle.js"></script>
    <script src="../assets/js/custom/widgets.js"></script>
    <script src="../assets/js/custom/apps/chat/chat.js"></script>
    <script src="../assets/js/custom/utilities/modals/upgrade-plan.js"></script>
    <script src="../assets/js/custom/utilities/modals/create-app.js"></script>
    <script src="../assets/js/custom/utilities/modals/new-target.js"></script>
    <script src="../assets/js/custom/utilities/modals/users-search.js"></script>
    <!--end::سفارشی Javascript-->
    <!--end::Javascript-->
</body>
<!--end::Body-->

</html>