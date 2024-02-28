<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- import untuk font google poppins --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@300..700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    {{-- import cdn icon flaticon --}}
    <link rel="stylesheet" href="{{ asset('css/cdn/flaticon.css') }}">

    {{-- import style css --}}
    <link rel="stylesheet" href="{{ asset('css/gradient/gradient-color.css') }}">
    <link rel="stylesheet" href="{{ asset('css/arsir/corak.css') }}">

    {{-- import icon untuk tab --}}
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <title>{{ $title }}</title>

    {{-- import vite tailwind --}}
    @vite('resources/css/app.css')
</head>

<body class="overflow-x-hidden">
    <div class="_container w-full flex font-poppins">
        {{-- untuk side bar --}}
        <div class="_sidebar ml-64">
            @include('components.sidebars.sideabar1')
        </div>

        {{-- untuk navbar dan kontent --}}
        <div class="_navbar-and-content w-full font-poppins bg-[#EFF2F7]">
            @include('components.navbars.navbar1')
            @yield('content')
        </div>

        {{-- import library chartjs --}}
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

        {{-- import chart js style --}}
        <script src="{{ asset('js/chart-finance.js') }}"></script>
        <script src="{{ asset('js/chart-keuntungan.js') }}"></script>
        <script src="{{ asset('js/chart-kerugian.js') }}"></script>
    </div>
</body>

</html>
