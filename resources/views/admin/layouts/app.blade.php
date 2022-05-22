<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Lara eCommerce - Admin</title>

    <link href="{{ asset('admin/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('admin/css/plugins/dataTables/datatables.min.css')}}" rel="stylesheet">
    <link href="{{ asset('admin/css/animate.css')}}" rel="stylesheet">
    <link href="{{ asset('admin/css/style.css')}}" rel="stylesheet">
</head>

<body class="md-skin">

<div id="wrapper">

    @include('admin.layouts.sidebar')

    <div id="page-wrapper" class="gray-bg">
        @include('admin.layouts.header')

        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-md-12">
                    @foreach (['danger', 'warning', 'success', 'info', 'primary'] as $msg)
                        @if(Session::has($msg))
                            <div class="alert alert-success alert-dismissable">
                                <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                                {{ \Illuminate\Support\Facades\Session::get($msg) }}
                            </div>
                        @endif
                    @endforeach
                </div>
                <div class="col-md-12">
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>
            @yield('content')

        </div>
        @include('admin.layouts.footer')

    </div>
</div>

<!-- Mainly scripts -->
<script src="{{ asset('admin/js/jquery-3.1.1.min.js')}}"></script>
<script src="{{ asset('admin/js/popper.min.js')}}"></script>
<script src="{{ asset('admin/js/bootstrap.js')}}"></script>
<script src="{{ asset('admin/js/plugins/metisMenu/jquery.metisMenu.js')}}"></script>
<script src="{{ asset('admin/js/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>

<script src="{{ asset('admin/js/plugins/dataTables/datatables.min.js')}}"></script>
<script src="{{ asset('admin/js/plugins/dataTables/dataTables.bootstrap4.min.js')}}"></script>

<!-- Custom and plugin javascript -->
<script src="{{ asset('admin/js/inspinia.js')}}"></script>
<script src="{{ asset('admin/js/plugins/pace/pace.min.js')}}"></script>

<!-- jQuery UI -->
<script src="{{ asset('admin/js/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- BS custom file -->
<script src="{{ asset('admin/js/plugins/bs-custom-file/bs-custom-file-input.min.js') }}"></script>

<script type="text/javascript">

    $(document).ready(function () {
        bsCustomFileInput.init()
    })

    $(document).on('click', '#approveOrder', function (event) {
        event.preventDefault();
        if (confirm("Do you want to Approve this Order?")) {
            let ajaxURL = $(this).data("url");
            $.ajax({
                url: ajaxURL,
                method: "GET",
                success: function (data) {
                    $(".server-response").css("display", "block");

                    if (data.status === 'SUCCESS') {
                        $("#server-response").html("Order has been approved!");
                    }
                    if (data.status === 'ALREADY_APPROVED') {
                        $("#server-response").html("Order is already approved!");
                    }

                },
            });
        }
    });
</script>

</body>
</html>
