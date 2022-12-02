<!doctype html>
<html lang="vi">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="#">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>PANEL ADMIN</title>
    <link href="{{ asset('assets') }}/css/bootstrap.min.css"  rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets') }}/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets') }}/css/app.min.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css"
        rel="stylesheet">
    <!-- DataTables -->
    <link href="{{ asset('assets') }}/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('assets') }}/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('assets') }}/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css"
        rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset('assets') }}/libs/select2/css/select2.min.css">
    <link href="{{ asset('assets/libs/admin-resources/rwd-table/rwd-table.min.css') }}" rel="stylesheet" type="text/css" />
    <script src="{{ asset('assets') }}/libs/chart.js/Chart.min.js"></script>
    @stack('style')
</head>

<body data-sidebar="dark" id="main">
    <div id="layout-wrapper">
        @include('layouts.header')
        @include('layouts.sidebar')
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    <div class="card">
                        @if ($errors->any())
                        <div class="alert alert-danger show__errors" style="display: none">
                            <ul style="padding-left: 0px;">
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        @yield('content')
                    </div>
                </div>
            </div>
            @include('layouts.footer')

        </div>
    </div>
    @include('sweetalert::alert')
    <div class="rightbar-overlay"></div>
    <button type="button" class="btn btn-danger btn-floating btn-lg" id="btn-back-to-top" >
        <i class="fas fa-arrow-up"></i>
    </button>
    <script src="{{ asset('assets') }}/libs/jquery/jquery.min.js"></script>
    <script src="{{ asset('assets') }}/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets') }}/libs/metismenu/metisMenu.min.js"></script>
    <script src="{{ asset('assets') }}/libs/simplebar/simplebar.min.js"></script>
    <script src="{{ asset('assets') }}/libs/node-waves/waves.min.js"></script>
    <script src="{{ asset('assets') }}/libs/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="{{ asset('assets') }}/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="{{ asset('assets') }}/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="{{ asset('assets') }}/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
    <script src="{{ asset('assets') }}/libs/jszip/jszip.min.js"></script>
    <script src="{{ asset('assets') }}/libs/pdfmake/build/pdfmake.min.js"></script>
    <script src="{{ asset('assets') }}/libs/pdfmake/build/vfs_fonts.js"></script>
    <script src="{{ asset('assets') }}/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="{{ asset('assets') }}/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="{{ asset('assets') }}/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>
    <script src="{{ asset('assets') }}/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="{{ asset('assets') }}/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>
    <script src="{{ asset('assets') }}/libs/admin-resources/rwd-table/rwd-table.min.js"></script>
    <script src="{{ asset('assets') }}/libs/sweetalert2/sweetalert2.min.js"></script>
    <script src="{{ asset('assets') }}/js/pages/fontawesome.init.js"></script>
    <script src="{{ asset('assets') }}/js/app.js"></script>
    <script src="{{ asset('assets') }}/libs/select2/js/select2.min.js"></script>
    <script src="{{ asset('assets') }}/js/pages/datatables.init.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('assets') }}/libs/tinymce/tinymce.min.js"></script>
    <script src="{{ asset('assets') }}/js/pages/form-editor.init.js"></script>

    {{-- @include('layouts.myscript') --}}
    @include('ckfinder::setup')
    <script>
        CKFinder.config( { connectorPath: '/ckfinder/connector' } );
    </script>



    <script>
        function toSlug(str) {
            str = str.toLowerCase();
            str = str
                .normalize('NFD')
                .replace(/[\u0300-\u036f]/g, '');
            str = str.replace(/[đĐ]/g, 'd');
            str = str.replace(/([^0-9a-z-\s])/g, '');
            str = str.replace(/(\s+)/g, '-');
            str = str.replace(/-+/g, '-');
            str = str.replace(/^-+|-+$/g, '');
            return str;
        }
    </script>
    <script>
        $('#create_form  #name_new').on('keyup', function() {
            text = $(this).val();
            slug = toSlug(text);
            $('#description_new').val(text)
            $('#title_seo_new').val(text)
            $('#keyword_seo_new').val(text)
            $('#description_seo_new').val(text)
            $('#url_new').val(slug);
            $('#url_preview').text(slug);
            $('#title_preview').text(text);
            $('#description_preview').text(text);
        });
        $('#url_new').on('change keyup', function() {
            text = $(this).val();
            slug = toSlug(text);
            $(this).val(slug);
            $('#url_preview').text(slug);
        });
        $('#title_seo_new').on('change keyup', function() {
            text = $(this).val();
            $('#title_preview').text(text);
        });
        $('#description_seo_new').on('change keyup', function() {
            text = $(this).val();
            $('#description_preview').text(text);
        });
    </script>

    <script>
        var has_errors = {{ $errors->count() > 0 ? 'true' : 'false' }};
        if (has_errors) {
            Swal.fire({
                title: 'Có lỗi !',
                icon: 'error',
                html: jQuery('.show__errors').html(),
                showCloseButton: true,
            });
        }
    </script>

    <script>
        $('document').ready(function() {
        $(document).on('keyup', 'input#pass', function() {
            var descriptions = toSlug($(this).val());
            $('span#linkactive').text(descriptions);
        });
        });
    </script>
    <script>
        const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
        })
    </script>


    @stack('script')
</body>

</html>
