<!DOCTYPE html>
<html lang="en-US" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--
    Document Title
    =============================================
    -->
    <title>CHARITAG</title>
    <!--
    Favicons
    =============================================
    -->
    <link rel="apple-touch-icon" sizes="57x57" href="{{asset('images/favicons/apple-icon-57x57.png')}}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{asset('images/favicons/apple-icon-60x60.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('images/favicons/apple-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('images/favicons/apple-icon-76x76.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('images/favicons/apple-icon-114x114.png')}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{asset('images/favicons/apple-icon-120x120.png')}}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{asset('images/favicons/apple-icon-144x144.png')}}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{asset('images/favicons/apple-icon-152x152.png')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('images/favicons/apple-icon-180x180.png')}}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{asset('images/favicons/android-icon-192x192.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('images/favicons/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{asset('images/favicons/favicon-96x96.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('images/favicons/favicon-16x16.png')}}">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{asset('images/favicons/ms-icon-144x144.png')}}">
    <meta name="theme-color" content="#ffffff">
    <!--
    Stylesheets
    =============================================

    -->
    <!-- Default stylesheets-->
    <link href="{{asset('libraries/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Template specific stylesheets-->
    <link href="{{asset('libraries/owl.carousel/dist/assets/owl.carousel.css')}}" rel="stylesheet">
    <!-- Main stylesheet and color file-->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link id="color-scheme" href="{{asset('css/colors/default.css')}}" rel="stylesheet">
</head>
<body data-spy="scroll" data-target=".onpage-navigation" data-offset="60">

<div style="width: 100%;height: 75px;background: #ffffffa3;position: absolute;z-index: 9;text-align: center;"><img
        src="https://static.wixstatic.com/media/ededa9_94e766b8b93b41f1a843bd83c548ca59~mv2.png/v1/fill/w_194,h_45,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/ededa9_94e766b8b93b41f1a843bd83c548ca59~mv2.png"
        style="z-index: 9999999999;display: block;/* position: absolute; */margin: auto;margin-top: 15px;"></div>
<main><img id="image-background" src="{{asset('images/7.jpg')}}">
    <section class="main">
        <div class="content">
            <div class="container">
                <div class="content2">
                    <h1>Charitag</h1>
                </div>
                <div class="counter" id="countdown">
                    <h2>Launching in <span class="days timenumbers">00 </span>&nbsp;days <span
                            class="hours timenumbers">00 </span>h <span class="minutes timenumbers">00 </span>m <span
                            class="seconds timenumbers yellow-text">00 </span>s</h2>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3">
                            <p>Our dedication to philanthropy drives our core operations of connecting customers with
                                merchants and enabling them to support charitable initiatives.</p>
                        </div>
                    </div>
                </div>
                <div class="subscribe">
                    <div class="row">
                        <div
                            class="col-xs-10 col-xs-offset-1 col-sm-4 col-sm-offset-4 col-md-4 col-md-offset-4 col-lg-4 col-lg-offset-4 input-group subscribe-box">

                            <div id="subscription-response"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<!--
JavaScripts
=============================================
-->
<script src="{{asset('libraries/jquery/dist/jquery.js')}}"></script>
<script src="{{asset('libraries/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<script src="{{asset('libraries/owl.carousel/dist/owl.carousel.js')}}"></script>
<script src="{{asset('libraries/ajaxchimp/jquery.ajaxchimp.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
</body>
</html>
