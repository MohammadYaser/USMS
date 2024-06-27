<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Laravel App - @yield('title')</title>
    <link rel="icon" type="image/x-icon" href="favicon.ico"/>
    <link href="{{ asset('assets/css/loader.css') }}" rel="stylesheet" type="text/css" />
    <script src="{{asset('assets/js/loader.js')}}"></script>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&display=swap" rel="stylesheet">
    <link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/plugins.css')}}" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <link href="{{asset('plugins/apex/apexcharts.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/dashboard/dash_1.css')}}" rel="stylesheet" type="text/css" />
    <style class="dark-theme">
        #chart-2 path {
            stroke: #0e1726;
        }
    </style>
    
    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->

</head>
<body class="alt-menu sidebar-noneoverflow">
    <!-- BEGIN LOADER -->
    <div id="load_screen"> <div class="loader"> <div class="loader-content">
        <div class="spinner-grow align-self-center"></div>
    </div></div></div>
    <!--  END LOADER -->

    @include('layout.navbar')

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">

        <div class="overlay"></div>
        <div class="search-overlay"></div>
            @yield('content')

    </div>
    <!-- END MAIN CONTAINER -->

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="{{asset('assets/js/libs/jquery-3.1.1.min.js')}}"></script>
    <script src="{{asset('bootstrap/js/popper.min.js')}}"></script>
    <script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('assets/js/app.js')}}"></script>
    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
    <script src="assets/js/custom.js"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <script src="plugins/apex/apexcharts.min.js"></script>
    <script src="assets/js/dashboard/dash_1.js"></script>
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->

    <script>

        // var linkElement = document.querySelectorAll('link');
        // var scriptElement = document.querySelectorAll('script');
        // var switchElement = document.querySelector('.theme-shifter');
        // var loaderElement = document.querySelector('#load_screen');

        // switchElement.addEventListener('change', function() {
        //     console.log(loaderElement);
        //     loaderElement.style.display = "block";
        //     console.log(loaderElement.style.display = "block");


        //         if(this.checked) {
        //             // alert('is checked');

        //             for (var i = 0; i < linkElement.length; i++) {
        //                 // console.log(linkElement[i]);
        //                 getHref = linkElement[i].getAttribute('href');
        //                 console.log(getHref);

        //                 // let str = 'Hello';

        //                 str = getHref.substring(5);
        //                 console.log(str);

        //                 /*
        //                     Output: ello
        //                 */

        //                 linkElement[i].setAttribute('href', str);

        //                 setTimeout( function() {
        //                     loaderElement.style.display = "none";
        //                 }, 3000);
                        
        //             }

        //             for (var i = 0; i < scriptElement.length; i++) {
        //                 // console.log(scriptElement[i]);
        //                 getSrc = scriptElement[i].getAttribute('src');
        //                 console.log(getSrc);

        //                 // let str = 'Hello';

        //                 str = getSrc.substring(5);
        //                 console.log(str);

        //                 /*
        //                     Output: ello
        //                 */

        //                 scriptElement[i].setAttribute('src', str);

        //                 setTimeout( function() {
        //                     loaderElement.style.display = "none";
        //                 }, 3000);
                        
        //             }

        //         } else {
        //             // alert('is not checked');

        //             for (var i = 0; i < linkElement.length; i++) {
        //                 // console.log(linkElement[i]);
        //                 getHref = linkElement[i].getAttribute('href');
        //                 console.log(getHref);
        //                 linkElement[i].setAttribute('href', 'dark/' + getHref);
        //                 // loaderElement.style.display = "none";
        //                 setTimeout( function() {
        //                     loaderElement.style.display = "none";
        //                 }, 3000);
        //             }

        //             for (var i = 0; i < scriptElement.length; i++) {
        //                 // console.log(scriptElement[i]);
        //                 getSrc = scriptElement[i].getAttribute('src');
        //                 // console.log(scriptElement[i]);
        //                 console.log(getSrc);
        //                 scriptElement[i].setAttribute('src', 'dark/' + getSrc);
        //                 // loaderElement.style.display = "none";
        //                 setTimeout( function() {
        //                     loaderElement.style.display = "none";
        //                 }, 3000);
        //             }
                    
        //         }

            

        // })

    </script>

</body>
</html>