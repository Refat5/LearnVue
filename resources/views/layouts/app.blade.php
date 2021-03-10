<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />

    <link rel="icon" href="/assets/images/logo.png">

    <title>Biz Inventory</title>

    @include('layouts.app_css')

</head>



<body class="page-body skin-white" >

    <div id="app">
        <div class="page-container" id="page-container">
            {{-- <div class="page-container sidebar-collapsed"> --}}
            {{-- @include('Layouts.app_sidebar') --}}
                <app-sidebar></app-sidebar>
            <div class="main-content">

                @include('layouts.app_navbar')

                {{-- <crud-component></crud-component> --}}
                <router-view></router-view>

                @include('layouts.app_footer')

            </div>

        </div>

    </div>

    @include('layouts.app_js')

</body>

</html>