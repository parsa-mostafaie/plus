<div id="kt_app_sidebar" class="app-sidebar flex-column" data-kt-drawer="true" data-kt-drawer-name="app-sidebar"
  data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="225px"
  data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">
  <!--begin::Logo-->
  <div class="app-sidebar-logo px-6" id="kt_app_sidebar_logo">
    <!--begin::Logo image-->
    <a href="../../demo1/dist/index.html">
      <img alt="Logo" src="../assets/media/logos/default-dark.svg" class="h-25px app-sidebar-logo-default" />
      <img alt="Logo" src="../assets/media/logos/default-small.svg" class="h-20px app-sidebar-logo-minimize" />
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
    <div id="kt_app_sidebar_menu_wrapper" class="app-sidebar-wrapper hover-scroll-overlay-y my-5" data-kt-scroll="true"
      data-kt-scroll-activate="true" data-kt-scroll-height="auto"
      data-kt-scroll-dependencies="#kt_app_sidebar_logo, #kt_app_sidebar_footer"
      data-kt-scroll-wrappers="#kt_app_sidebar_menu" data-kt-scroll-offset="5px" data-kt-scroll-save-state="true">
      <!--begin::Menu-->
      <div class="menu menu-column menu-rounded menu-sub-indention px-3" id="#kt_app_sidebar_menu" data-kt-menu="true"
        data-kt-menu-expو="false">
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
            <div class="menu-inner flex-column collapse" id="kt_app_sidebar_menu_dashboards_collapse">
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
                <a class="menu-link" href="../../demo1/dist/dashboards/call-center.html">
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
                <a class="menu-link" href="../../demo1/dist/dashboards/website-analytics.html">
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
                <a class="menu-link" href="../../demo1/dist/dashboards/finance-performance.html">
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
                <a class="menu-link" href="../../demo1/dist/dashboards/store-analytics.html">
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
                  data-bs-toggle="collapse" href="#kt_app_sidebar_menu_dashboards_collapse" data-kt-toggle-text="بستن">
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
              <a class="menu-link" href="../../demo1/dist/pages/user-profile/overview.html">
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
              <a class="menu-link" href="../../demo1/dist/pages/user-profile/projects.html">
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
              <a class="menu-link" href="../../demo1/dist/pages/user-profile/campaigns.html">
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
              <a class="menu-link" href="../../demo1/dist/pages/user-profile/documents.html">
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
              <a class="menu-link" href="../../demo1/dist/pages/user-profile/followers.html">
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
              <a class="menu-link" href="../../demo1/dist/pages/user-profile/activity.html">
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
                  <a class="menu-link" href="../../demo1/dist/authentication/layouts/corporate/ورود.html">
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
                  <a class="menu-link" href="../../demo1/dist/authentication/layouts/corporate/signup.html">
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
                  <a class="menu-link" href="../../demo1/dist/authentication/layouts/corporate/دو عاملی.html">
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
                  <a class="menu-link" href="../../demo1/dist/authentication/layouts/corporate/reset-password.html">
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
                  <a class="menu-link" href="../../demo1/dist/authentication/layouts/corporate/new-password.html">
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
                  <a class="menu-link" href="../../demo1/dist/authentication/layouts/overlay/ورود.html">
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
                  <a class="menu-link" href="../../demo1/dist/authentication/layouts/overlay/signup.html">
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
                  <a class="menu-link" href="../../demo1/dist/authentication/layouts/overlay/دو عاملی.html">
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
                  <a class="menu-link" href="../../demo1/dist/authentication/layouts/overlay/reset-password.html">
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
                  <a class="menu-link" href="../../demo1/dist/authentication/layouts/overlay/new-password.html">
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
                  <a class="menu-link" href="../../demo1/dist/authentication/layouts/creative/ورود.html">
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
                  <a class="menu-link" href="../../demo1/dist/authentication/layouts/creative/signup.html">
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
                  <a class="menu-link" href="../../demo1/dist/authentication/layouts/creative/دو عاملی.html">
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
                  <a class="menu-link" href="../../demo1/dist/authentication/layouts/creative/reset-password.html">
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
                  <a class="menu-link" href="../../demo1/dist/authentication/layouts/creative/new-password.html">
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
                  <a class="menu-link" href="../../demo1/dist/authentication/layouts/fancy/ورود.html">
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
                  <a class="menu-link" href="../../demo1/dist/authentication/layouts/fancy/signup.html">
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
                  <a class="menu-link" href="../../demo1/dist/authentication/layouts/fancy/دو عاملی.html">
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
                  <a class="menu-link" href="../../demo1/dist/authentication/layouts/fancy/reset-password.html">
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
                  <a class="menu-link" href="../../demo1/dist/authentication/layouts/fancy/new-password.html">
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
                  <a class="menu-link" href="../../demo1/dist/authentication/email/welcome-message.html">
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
                  <a class="menu-link" href="../../demo1/dist/authentication/email/reset-password.html">
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
                  <a class="menu-link" href="../../demo1/dist/authentication/email/subscription-confirmed.html">
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
                  <a class="menu-link" href="../../demo1/dist/authentication/email/card-declined.html">
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
                  <a class="menu-link" href="../../demo1/dist/authentication/email/promo-1.html">
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
                  <a class="menu-link" href="../../demo1/dist/authentication/email/promo-2.html">
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
                  <a class="menu-link" href="../../demo1/dist/authentication/email/promo-3.html">
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
              <a class="menu-link" href="../../demo1/dist/authentication/extended/multi-steps-signup.html">
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
              <a class="menu-link" href="../../demo1/dist/authentication/general/welcome.html">
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
              <a class="menu-link" href="../../demo1/dist/authentication/general/verify-email.html">
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
              <a class="menu-link" href="../../demo1/dist/authentication/general/coming-soon.html">
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
              <a class="menu-link" href="../../demo1/dist/authentication/general/password-confirmation.html">
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
              <a class="menu-link" href="../../demo1/dist/authentication/general/account-deactivated.html">
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
              <a class="menu-link" href="../../demo1/dist/authentication/general/error-404.html">
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
              <a class="menu-link" href="../../demo1/dist/authentication/general/error-500.html">
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
        <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="left-start"
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
          <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown px-2 py-4 w-200px mh-75 overflow-auto">
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
                      <a class="menu-link" href="../../demo1/dist/utilities/modals/general/invite-friends.html">
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
                      <a class="menu-link" href="../../demo1/dist/utilities/modals/general/view-users.html">
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
                      <a class="menu-link" href="../../demo1/dist/utilities/modals/general/select-users.html">
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
                      <a class="menu-link" href="../../demo1/dist/utilities/modals/general/upgrade-plan.html">
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
                      <a class="menu-link" href="../../demo1/dist/utilities/modals/general/share-earn.html">
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
                      <a class="menu-link" href="../../demo1/dist/utilities/modals/forms/new-target.html">
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
                      <a class="menu-link" href="../../demo1/dist/utilities/modals/forms/new-card.html">
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
                      <a class="menu-link" href="../../demo1/dist/utilities/modals/forms/new-address.html">
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
                      <a class="menu-link" href="../../demo1/dist/utilities/modals/forms/create-api-key.html">
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
                      <a class="menu-link" href="../../demo1/dist/utilities/modals/forms/bidding.html">
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
                      <a class="menu-link" href="../../demo1/dist/utilities/modals/wizards/create-app.html">
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
                      <a class="menu-link" href="../../demo1/dist/utilities/modals/wizards/create-campaign.html">
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
                      <a class="menu-link" href="../../demo1/dist/utilities/modals/wizards/create-account.html">
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
                      <a class="menu-link" href="../../demo1/dist/utilities/modals/wizards/create-project.html">
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
                      <a class="menu-link" href="../../demo1/dist/utilities/modals/wizards/top-up-wallet.html">
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
                      <a class="menu-link" href="../../demo1/dist/utilities/modals/wizards/offer-a-deal.html">
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
                      <a class="menu-link" href="../../demo1/dist/utilities/modals/search/users.html">
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
                      <a class="menu-link" href="../../demo1/dist/utilities/modals/search/select-location.html">
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
                  <a class="menu-link" href="../../demo1/dist/utilities/search/horizontal.html">
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
                  <a class="menu-link" href="../../demo1/dist/utilities/search/vertical.html">
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
                  <a class="menu-link" href="../../demo1/dist/utilities/search/users.html">
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
                  <a class="menu-link" href="../../demo1/dist/utilities/search/select-location.html">
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
                  <a class="menu-link" href="../../demo1/dist/utilities/wizards/horizontal.html">
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
                  <a class="menu-link" href="../../demo1/dist/utilities/wizards/vertical.html">
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
                  <a class="menu-link" href="../../demo1/dist/utilities/wizards/دو عاملی-authentication.html">
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
                  <a class="menu-link" href="../../demo1/dist/utilities/wizards/create-app.html">
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
                  <a class="menu-link" href="../../demo1/dist/utilities/wizards/create-campaign.html">
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
                  <a class="menu-link" href="../../demo1/dist/utilities/wizards/create-account.html">
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
                  <a class="menu-link" href="../../demo1/dist/utilities/wizards/create-project.html">
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
                  <a class="menu-link" href="../../demo1/dist/utilities/modals/wizards/top-up-wallet.html">
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
                  <a class="menu-link" href="../../demo1/dist/utilities/wizards/offer-a-deal.html">
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
                  <a class="menu-link" href="../../demo1/dist/apps/ecommerce/catalog/products.html">
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
                  <a class="menu-link" href="../../demo1/dist/apps/ecommerce/catalog/categories.html">
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
                  <a class="menu-link" href="../../demo1/dist/apps/ecommerce/catalog/add-product.html">
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
                  <a class="menu-link" href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html">
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
                  <a class="menu-link" href="../../demo1/dist/apps/ecommerce/catalog/add-category.html">
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
                  <a class="menu-link" href="../../demo1/dist/apps/ecommerce/catalog/edit-category.html">
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
                  <a class="menu-link" href="../../demo1/dist/apps/ecommerce/sales/listing.html">
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
                  <a class="menu-link" href="../../demo1/dist/apps/ecommerce/sales/details.html">
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
                  <a class="menu-link" href="../../demo1/dist/apps/ecommerce/sales/add-order.html">
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
                  <a class="menu-link" href="../../demo1/dist/apps/ecommerce/sales/edit-order.html">
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
                  <a class="menu-link" href="../../demo1/dist/apps/ecommerce/customers/listing.html">
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
                  <a class="menu-link" href="../../demo1/dist/apps/ecommerce/customers/details.html">
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
                  <a class="menu-link" href="../../demo1/dist/apps/ecommerce/reports/view.html">
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
                  <a class="menu-link" href="../../demo1/dist/apps/ecommerce/reports/sales.html">
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
                  <a class="menu-link" href="../../demo1/dist/apps/ecommerce/reports/returns.html">
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
                  <a class="menu-link" href="../../demo1/dist/apps/ecommerce/reports/customer-orders.html">
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
                  <a class="menu-link" href="../../demo1/dist/apps/ecommerce/reports/shipping.html">
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
              <a class="menu-link" href="../../demo1/dist/apps/contacts/getting-started.html">
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
              <a class="menu-link" href="../../demo1/dist/apps/contacts/edit-contact.html">
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
              <a class="menu-link" href="../../demo1/dist/apps/contacts/view-contact.html">
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
              <a class="menu-link" href="../../demo1/dist/apps/support-center/overview.html">
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
                  <a class="menu-link" href="../../demo1/dist/apps/support-center/tickets/list.html">
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
                  <a class="menu-link" href="../../demo1/dist/apps/support-center/tickets/view.html">
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
                  <a class="menu-link" href="../../demo1/dist/apps/support-center/tutorials/list.html">
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
                  <a class="menu-link" href="../../demo1/dist/apps/support-center/tutorials/post.html">
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
              <a class="menu-link" href="../../demo1/dist/apps/support-center/licenses.html">
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
              <a class="menu-link" href="../../demo1/dist/apps/support-center/contact.html">
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
                  <a class="menu-link" href="../../demo1/dist/apps/user-management/users/list.html">
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
                  <a class="menu-link" href="../../demo1/dist/apps/user-management/users/view.html">
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
                  <a class="menu-link" href="../../demo1/dist/apps/user-management/roles/list.html">
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
                  <a class="menu-link" href="../../demo1/dist/apps/user-management/roles/view.html">
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
              <a class="menu-link" href="../../demo1/dist/apps/user-management/permissions.html">
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
              <a class="menu-link" href="../../demo1/dist/apps/customers/getting-started.html">
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
              <a class="menu-link" href="../../demo1/dist/apps/subscriptions/getting-started.html">
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
                  <a class="menu-link" href="../../demo1/dist/apps/invoices/view/invoice-1.html">
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
                  <a class="menu-link" href="../../demo1/dist/apps/invoices/view/invoice-2.html">
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
                  <a class="menu-link" href="../../demo1/dist/apps/invoices/view/invoice-3.html">
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
              <a class="menu-link" href="../../demo1/dist/apps/file-manager/settings.html">
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
          <a class="menu-link" href="Https://preview.keenthemes.com/metronic8/demo1/layout-builder.html">
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
          <a class="menu-link" href="https://preview.keenthemes.com/html/metronic/docs/base/utilities" target="_blank">
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
          <a class="menu-link" href="https://preview.keenthemes.com/html/metronic/docs" target="_blank">
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
          <a class="menu-link" href="https://preview.keenthemes.com/html/metronic/docs/getting-started/changelog"
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