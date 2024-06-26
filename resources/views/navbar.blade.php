<!DOCTYPE html>
<html lang="en">
<head>
    {{-- bootstrap --}}
<!-- Styles -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" />
<!-- Or for RTL support -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.rtl.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EduSage | {{$title}}</title>

    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-white bg-white p-3 bg-body rounded sticky-top">
        <div class="collapse navbar-collapse">
            <a href="/home">
                <img style="width: 300px" src="{{ asset('storage/navbar_assets/logo.png') }}">
            </a>
        </div>
        @if ($title == 'Home')
            <div class="d-flex">
                <a  href="/form/{{1}}" style="margin-right: 20px;" type="button" class="btn-blue btn-lg rounded-pill inverted-button">
                    MULAI TES
                </a>
            </div>
        @endif
    </nav>
    @yield('content')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.3.2/html2canvas.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.2/dist/chart.umd.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.full.min.js"></script>
    <script src="{{ asset('script/script.js') }}"></script>
    <script src="{{ asset('script/chart.js') }}"></script>
    <script src="{{ asset('script/filter.js') }}"></script>
    <script src="{{ asset('script/capture.js') }}"></script>
</body>
</html>
