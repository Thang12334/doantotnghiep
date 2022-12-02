<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <div class="navbar-brand-box">
                <a href="home.html" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="{{asset('assets')}}/images/logo.svg" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="{{asset('assets')}}/images/logo-dark.png" alt="" height="17">
                    </span>
                </a>

                <a href="{{ route('home') }}" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="{{asset('assets')}}/images/logo-light.svg" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="{{asset('assets')}}/images/logo-light.png" alt="" height="19">
                    </span>
                </a>
            </div>

            <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect" id="vertical-menu-btn">
                <i class="fa fa-fw fa-bars"></i>
            </button>
        </div>

        <div class="d-flex">
            <div class="dropdown d-none d-lg-inline-block ms-1">
                <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
                    <i class="bx bx-fullscreen"></i>
                </button>
            </div>

            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-notifications-dropdown"
                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="bx bx-bell bx-tada"></i>
                    <span class="badge bg-danger rounded-pill">4</span>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                    aria-labelledby="page-header-notifications-dropdown">
                    <div class="p-3">
                        <div class="row align-items-center">
                            <div class="col">
                                <h6 class="m-0"> Thông báo </h6>
                            </div>
                            <div class="col-auto">
                                <a href="#!" class="small"> Xem tất cả</a>
                            </div>
                        </div>
                    </div>
                    <div data-simplebar style="max-height: 230px;">
                        <a href="javascript: void(0);" class="text-reset notification-item">
                            <div class="d-flex">
                                <div class="avatar-xs me-3">
                                    <span class="avatar-title bg-primary rounded-circle font-size-16">
                                        <i class="bx bx-cart"></i>
                                    </span>
                                </div>
                                <div class="flex-grow-1">
                                    <h6 class="mb-1">Có đơn đặt phòng mới</h6>
                                    <div class="font-size-12 text-muted">
                                        <p class="mb-1">Khách hàng vừa đặt phòng trên WEB</p>
                                        <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span>3 phút trước</span></p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="javascript: void(0);" class="text-reset notification-item">
                            <div class="d-flex">
                                <img src="{{asset('assets')}}/images/users/avatar-3.jpg"
                                    class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                <div class="flex-grow-1">
                                    <h6 class="mb-1">Mr. Steven Nguyen</h6>
                                    <div class="font-size-12 text-muted">
                                        <p class="mb-1">Đã yêu cầu 1 combo đồ nướng</p>
                                        <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span>5 phút trước</span></p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="javascript: void(0);" class="text-reset notification-item">
                            <div class="d-flex">
                                <div class="avatar-xs me-3">
                                    <span class="avatar-title bg-success rounded-circle font-size-16">
                                        <i class="bx bx-badge-check"></i>
                                    </span>
                                </div>
                                <div class="flex-grow-1">
                                    <h6 class="mb-1">Có đơn đặt phòng mới </h6>
                                    <div class="font-size-12 text-muted">
                                        <p class="mb-1">Khách hàng vừa đặt phòng trên APP</p>
                                        <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span>10 phút trước</span></p>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="javascript: void(0);" class="text-reset notification-item">
                            <div class="d-flex">
                                <img src="{{asset('assets')}}/images/users/avatar-4.jpg"
                                    class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                <div class="flex-grow-1">
                                    <h6 class="mb-1">Mrs. Quyen Pham</h6>
                                    <div class="font-size-12 text-muted">
                                        <p class="mb-1">Đã yêu cầu 3 combo đồ uống</p>
                                        <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span>1 tiếng trước</span></p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="p-2 border-top d-grid">
                        <a class="btn btn-sm btn-link font-size-14 text-center" href="javascript:void(0)">
                            <i class="mdi mdi-arrow-right-circle me-1"></i> <span>Xem thêm...</span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="rounded-circle header-profile-user" src="{{asset('assets')}}/images/users/avatar-2.jpg"
                        alt="Header Avatar">
                    <span class="d-none d-xl-inline-block ms-1">Admin</span>
                    <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                    <!-- item-->
                    <a class="dropdown-item" href="#"><i class="bx bx-user font-size-16 align-middle me-1"></i> <span>Thông tin</span></a>
                    <a class="dropdown-item text-danger" href="{{ route('logoutz') }}"><i class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i> <span >Đăng xuất</span></a>
                </div>
            </div>

            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">
                    <i class="bx bx-cog bx-spin"></i>
                </button>
            </div>

        </div>
    </div>
</header>
<div class="right-bar">
    <div data-simplebar class="h-100">
        <div class="rightbar-title d-flex align-items-center px-3 py-4">
            <h5 class="m-0 me-2">Đổi bố cục</h5>

            <a href="javascript:void(0);" class="right-bar-toggle ms-auto">
                <i class="mdi mdi-close noti-icon"></i>
            </a>
        </div>
        <hr class="mt-0" />
        <h6 class="text-center mb-0">Chọn bố cục</h6>
        <div class="p-4">

            <div class="form-check form-switch mb-3">
                <input class="form-check-input theme-choice" type="checkbox" id="light-mode-switch" checked>
                <label class="form-check-label" for="light-mode-switch">Chế độ sáng</label>
            </div>

            <div class="form-check form-switch mb-3">
                <input class="form-check-input theme-choice" type="checkbox" id="dark-mode-switch">
                <label class="form-check-label" for="dark-mode-switch">Chế độ tối</label>
            </div>

            <div class="form-check form-switch mb-3">
                <input class="form-check-input theme-choice" type="checkbox" id="rtl-mode-switch">
                <label class="form-check-label" for="rtl-mode-switch">Phải sang trái ( Sáng )</label>
            </div>

            <div class="form-check form-switch mb-5">
                <input class="form-check-input theme-choice" type="checkbox" id="dark-rtl-mode-switch">
                <label class="form-check-label" for="dark-rtl-mode-switch">Phải sang trái ( Tối )</label>
            </div>


        </div>
    </div>
</div>
