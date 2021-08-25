<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="content-language" content="en" />
    <meta name="description" content="Asean Institute for Health Developement, Mahidol University is based on a forward-looking and conceptually challenging perspective on human resource development which aims to support the global strategy of  “Health for All” through the primary health care approach advocated by WHO">
    <meta name="author" content="LCT, ASEAN Institute for Health Developement">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
    <link rel="apple-touch-icon-precomposed" sizes="114×114" href="img/iconlogomahidol.png">
    <link rel="apple-touch-icon-precomposed" sizes="72×72" href="img/iconlogomahidol.png">
    <meta name="Keywords" lang="en" content="AIHD, aihd, Mahidol, Thailand, University, Faculty, Bangkok, Higher Education, Salaya, MPHM, Primary Health Care, Education, Mini MM, management, AUN-HPN, aun,">
    <meta name="keywords" lang="th" content="สถาบันพัฒนาสุขภาพอาเซียน">
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <title>ASEAN University Network – Health Promotion Network (AUN–HPN)</title>
</head>
<style>
    @font-face {
        font-family: thaifont;
        src: url(font/DBHelvethaica.ttf) format("truetype");
    }

    body {
        font-family: 'thaifont';
        margin: 0;
        font-size: 22px;
    }

    .w-100 {
        width: 100% !important;
        /*height: 700px;*/
    }

    .sizewidth {
        width: 80%;
    }

    .boxhover:hover {
        border-bottom: 5px solid #2E86C1;
    }

    .titlehead {
        font-weight: bold;
        letter-spacing: 2px;
    }

    .titlehover {
        font-weight: 700;
        letter-spacing: 2px;
        color: black;
    }

    .titlehover:hover {
        text-decoration: none;
        color: #2E86C1;
    }

    .fonthead {
        font-weight: bold;
        letter-spacing: 2px;
    }

    .linkhead {
        padding-top: 5px;
        font-size: 30px;
        font-weight: 600;
        letter-spacing: 1px;
        color: black;
    }

    .linkhead:hover {
        text-decoration: none;
        color: #2E86C1;
    }

    .buttons {
        width: 100%;
        height: 60px;
        border: 0px solid #fff;
        border-radius: 5px;
        background: #ffb500;
        font-weight: bold;
        font-size: 25px;
        color: white;
        box-shadow: 0 6px 6px #AAB7B8;
        letter-spacing: 1px;
        outline: none;
    }

    .buttons:hover {
        /* set time duration to your needs */
        animation: gradient 100ms;
        border-radius: 5px;
        background: #ff7c00;
        color: white;
        box-shadow: 0 6px 6px #AAB7B8;
        border: 1px solid #fff;
    }

    .buttons:active {
        /* set time duration to your needs */
        animation: gradient 100ms;
        background: #ff7c00;
        color: #fff;
        box-shadow: none;
    }

    .textlink {
        color: black;
    }

    .textlink:hover {
        text-decoration: none;
    }

    .imgpopup {
        width: 100%;
    }

    /*HYPER LINK*/
    a:hover {}

    a,
    a:focus,
    a:hover {
        text-decoration: none;
        color: inherit;
    }

    a:hover,
    .btn {
        outline: none !important;
    }

    /*ROUNDED CORNER*/
    * {
        -webkit-border-radius: 0 !important;
        -moz-border-radius: 0 !important;
        border-radius: 0 !important;
    }

    /*CATEGORIES BADGE*/
    .badge {
        font-weight: 500;
        font-size: 15px;
        color: white;
        background-color: #289dcc;
        letter-spacing: 1px;
    }

    /*FEATURED*/
    .mg-2,
    .mg-4 {
        margin-left: -20px;
    }

    .linkfeat {
        background: rgba(76, 76, 76, 0);
        background: -moz-linear-gradient(top, rgba(76, 76, 76, 0) 0%, rgba(48, 48, 48, 0) 49%, rgba(19, 19, 19, 1) 100%);
        background: -webkit-gradient(left top, left bottom, color-stop(0%, rgba(76, 76, 76, 0)), color-stop(49%, rgba(48, 48, 48, 0)), color-stop(100%, rgba(19, 19, 19, 1)));
        background: -webkit-linear-gradient(top, rgba(76, 76, 76, 0) 0%, rgba(48, 48, 48, 0) 49%, rgba(19, 19, 19, 1) 100%);
        background: -o-linear-gradient(top, rgba(76, 76, 76, 0) 0%, rgba(48, 48, 48, 0) 49%, rgba(19, 19, 19, 1) 100%);
        background: -ms-linear-gradient(top, rgba(76, 76, 76, 0) 0%, rgba(48, 48, 48, 0) 49%, rgba(19, 19, 19, 1) 100%);
        background: linear-gradient(to bottom, rgba(76, 76, 76, 0) 0%, rgba(48, 48, 48, 0) 49%, rgba(19, 19, 19, 1) 100%);
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#4c4c4c', endColorstr='#131313', GradientType=0);
    }


    .social-card-header {
        position: relative;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        -ms-flex-pack: center;
        justify-content: center;
        height: 96px;
    }

    .social-card-header i {
        font-size: 32px;
        color: #FFF;
    }

    .bg-facebook {
        background-color: #3b5998;
    }

    .text-facebook {
        color: #3b5998;
    }

    .bg-google-plus {
        background-color: #dd4b39;
    }

    .text-google-plus {
        color: #dd4b39;
    }

    .bg-twitter {
        background-color: #1da1f2;
    }

    .text-twitter {
        color: #1da1f2;
    }

    .bg-pinterest {
        background-color: #bd081c;
    }

    .text-pinterest {
        color: #bd081c;
    }

    .share:hover {
        text-decoration: none;
        opacity: 0.8;
    }

    ul.timeline {
        list-style-type: none;
        position: relative;
    }

    ul.timeline:before {
        content: ' ';
        background: #d4d9df;
        display: inline-block;
        position: absolute;
        left: 29px;
        width: 2px;
        height: 100%;
        z-index: 400;
    }

    ul.timeline>li {
        margin: 10px 0;
        padding-left: 20px;
    }

    ul.timeline>li:before {
        content: ' ';
        background: white;
        display: inline-block;
        position: absolute;
        border-radius: 50%;
        border: 3px solid #22c0e8;
        left: 20px;
        width: 20px;
        height: 20px;
        z-index: 400;
    }

    .alink {
        color: black;
        font-weight: 600;
    }


    .inforide:hover {
        box-shadow: 0px 2px 8px 0px rgba(0, 0, 0, 0.7);
    }

    .inforide {
        box-shadow: 1px 2px 8px 0px rgba(0, 0, 0, 0.24);
        background-color: white;
        border-radius: 8px;
        letter-spacing: 1px;
        margin-bottom: 10px;
    }

    .infoblog {
        background: linear-gradient(to right, #900C3F 0%, #C70039 70%);
        box-shadow: 1px 2px 8px 0px rgba(0, 0, 0, 0.24);
        border-radius: 8px;
        letter-spacing: 1px;
        margin-bottom: 10px;
        color: white;
        padding: 20px;

    }

    .infoblog:hover {
        box-shadow: 0px 2px 8px 0px rgba(0, 0, 0, 0.7);

    }

    .infoblog2 {
        background: linear-gradient(to right, #C70039 0%, #900C3F 70%);
        box-shadow: 1px 2px 8px 0px rgba(0, 0, 0, 0.24);
        border-radius: 8px;
        letter-spacing: 1px;
        margin-bottom: 10px;
        color: white;
        padding: 20px;
    }

    .infoblog2:hover {
        box-shadow: 0px 2px 8px 0px rgba(0, 0, 0, 0.7);
    }

    .rideone img {
        width: 70%;
    }

    .rideone {
        border-radius: 8px 0px 0px 8px;
        text-align: center;
        margin-left: auto;
        display: block;
        padding: 20px 10px;
        margin-left: 20px;
    }

    .fonttext {
        padding-top: 28px;
        margin-left: -20px;
    }

    .closebtn {
        margin-right: 15px;
        color: white;
        font-weight: bold;
        float: right;
        font-size: 22px;
        line-height: 20px;
        cursor: pointer;
        transition: 0.3s;
    }

    .closebtn:hover {
        color: black;
    }

    .btnz {
        border: 2px solid black;
        color: black;
        padding: 7px 14px;
        font-size: 22px;
        cursor: pointer;
        margin-left: 15px;
        font-weight: 700;
        letter-spacing: 2px;
    }

    a button .btnz .warning {
        border-radius: 5px;
    }

    /* Orange */
    .warning {
        border-color: #ff9800;
        color: orange;
    }

    .warning:hover {
        background: #ff9800;
        color: white;
    }

    .jumbotron {
        padding: 1px;
        color: #FFC300;
        background: linear-gradient(to right, #900C3F 0%, #C70039 70%);
        background-color: #900C3F;
    }

    .fontfont {
        font-size: 30px;
        font-weight: 600;
        letter-spacing: 1.5px;
    }

    @media (max-width: 1180px) {
        .fonttext {
            padding-top: 20px;
            margin-left: -20px;
        }
    }

    @media (max-width: 1010px) {
        .fontfont {
            font-size: 26px;
        }
    }

    @media (max-width: 980px) {
        .fontfont {
            font-size: 28px;
        }

        .fonttext {
            padding-top: 37px;
            margin-left: -20px;
        }
    }

    @media (max-width: 766px) {
        .fonttext {
            padding-top: 55px;
            margin-left: -20px;
        }
    }

    @media (max-width: 616px) {
        .fonttext {
            padding-top: 45px;
            margin-left: -20px;
        }
    }

    @media (max-width: 425px) {
        .fonttext {
            padding-top: 30px;
            margin-left: -20px;
        }
    }

    .card-title {
        color: white;
        text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
        letter-spacing: 1px;
    }

    .textfeat {
        color: white;
        text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
        letter-spacing: 1px;
    }

    @media (max-width: 320px) {
        .fonttext {
            padding-top: 25px;
            margin-left: -20px;
        }

        .card-title {
            font-size: 22px;
            margin-bottom: 0px;
        }

        .card-body h5 {
            font-size: 18px;
        }
    }

    .slick-slide.image-box {
        margin-bottom: 20px;
    }

    .image-box .body {
        padding: 15px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.05);
    }

    .image-box .body h3 {
        margin-top: 0;
    }

    .image-box .body p:last-child {
        margin-bottom: 0;
    }

    .image-box.style-4 {
        border: none;
    }

    .image-box.style-3-b {
        display: block;
        margin-bottom: 40px;
    }

    .image-box.style-3-b .body {
        padding: 10px 0;
    }

    .image-box--shadowed {
        -webkit-box-shadow: 0 4px 8px rgba(0, 0, 0, 0.05);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.05);
        -webkit-transition: all 0.25s ease-in-out;
        -o-transition: all 0.25s ease-in-out;
        transition: all 0.25s ease-in-out;
    }

    .image-box--shadowed:hover {
        -webkit-box-shadow: 0 8px 16px rgba(0, 0, 0, 0.08);
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.08);
    }

    /* Medium devices (tablets, laptops, smartphones 768px and up) */
    @media (min-width: 768px) {
        .image-box.style-3-b .body {
            padding: 0;
        }
    }

    /* Medium devices (desktops, tablets less than 991px) */
    @media (max-width: 991px) {
        .image-box.style-4 {
            margin-bottom: 30px;
        }
    }





    /*Images and Overlays
---------------------------------- */
    .overlay-container {
        position: relative;
        display: block;
        text-align: center;
        overflow: hidden;
    }

    .overlay-bottom,
    .overlay-top {
        position: absolute;
        top: auto;
        padding: 15px;
        bottom: 0px;
        left: 0;
        right: 0px;
        background-color: rgba(30, 30, 30, 0.5);
        overflow: hidden;
        opacity: 0;
        filter: alpha(opacity=0);
        -webkit-transition: all ease-in-out 0.25s;
        -o-transition: all ease-in-out 0.25s;
        transition: all ease-in-out 0.25s;
        height: 0;
        color: #ffffff;
        -webkit-backface-visibility: hidden;
        -webkit-transform: translateZ(0) scale(1, 1);
    }

    .overlay-bottom.links,
    .overlay-to-top.links {
        z-index: 11;
    }

    .overlay-to-top {
        position: absolute;
        top: auto;
        padding: 10px;
        bottom: -30px;
        left: 0;
        right: 0px;
        background-color: rgba(30, 30, 30, 0.5);
        opacity: 0;
        filter: alpha(opacity=0);
        -webkit-transition: all ease-in-out 0.25s;
        -o-transition: all ease-in-out 0.25s;
        transition: all ease-in-out 0.25s;
        color: #ffffff;
    }

    .overlay-top {
        top: 0;
    }

    .overlay-visible .overlay-bottom,
    .overlay-visible .overlay-top {
        opacity: 1;
        filter: alpha(opacity=100);
        height: auto !important;
        padding-bottom: 20px;
    }

    .overlay-visible.overlay-container:hover .overlay-bottom:not(.links),
    .overlay-visible.overlay-container:hover .overlay-top {
        opacity: 0.5;
        filter: alpha(opacity=50);
    }

    .overlay-top a,
    .overlay-bottom a,
    .overlay-to-top a,
    .overlay-top a:hover,
    .overlay-bottom a:hover,
    .overlay-to-top a:hover {
        color: #ffffff;
        text-decoration: none;
    }

    .overlay-container .text {
        padding: 0 20px;
        position: relative;
    }

    .overlay-container .text h3,
    .overlay-container .text h3 .small {
        margin-top: 0;
        color: #ffffff;
    }

    .overlay-container .text a:hover {
        color: #ffffff;
    }

    .overlay-bottom .btn,
    .overlay-top .btn {
        color: #ffffff;
        border-color: #ffffff;
        margin: 0;
    }

    .overlay-bottom .btn:hover,
    .overlay-top .btn:hover {
        color: #777777;
        background-color: #ffffff;
    }

    .overlay-container:hover .overlay-top,
    .overlay-container:hover .overlay-bottom,
    .image-box.style-2:hover .overlay-top,
    .image-box.style-2:hover .overlay-bottom {
        height: 50%;
        opacity: 1;
        filter: alpha(opacity=100);
        -webkit-backface-visibility: hidden;
        -webkit-transform: translateZ(0) scale(1, 1);
    }

    .overlay-container:hover .overlay-to-top,
    .image-box:hover .overlay-to-top {
        opacity: 1;
        filter: alpha(opacity=100);
        bottom: 0;
        -webkit-backface-visibility: hidden;
        -webkit-transform: translateZ(0) scale(1, 1);
    }

    .overlay-link {
        position: absolute;
        z-index: 10;
        top: 0;
        padding: 15px;
        bottom: 0px;
        left: 0;
        right: 0px;
        background-color: rgba(30, 30, 30, 0.5);
        overflow: hidden;
        opacity: 0;
        filter: alpha(opacity=0);
        -webkit-transition: all ease-in-out 0.25s;
        -o-transition: all ease-in-out 0.25s;
        transition: all ease-in-out 0.25s;
        color: #ffffff;
    }

    .overlay-link i {
        -webkit-transition: all 0.2s ease-in-out;
        -o-transition: all 0.2s ease-in-out;
        transition: all 0.2s ease-in-out;
        width: 80px;
        height: 80px;
        border: 1px solid #ffffff;
        -webkit-border-radius: 100%;
        -moz-border-radius: 100%;
        border-radius: 100%;
        color: #ffffff;
        position: absolute;
        top: 50%;
        left: 50%;
        margin: -40px 0 0 -40px;
        font-size: 32px;
        line-height: 80px;
    }

    .overlay-link i:hover {
        background-color: #ffffff;
        color: #777777;
    }

    .overlay-link.small i {
        width: 25px;
        height: 25px;
        margin: -12.5px 0 0 -12.5px;
        font-size: 14px;
        line-height: 25px;
    }

    .overlay-container:hover .overlay-link {
        height: 100%;
        opacity: 1;
        filter: alpha(opacity=100);
        -webkit-backface-visibility: hidden;
        -webkit-transform: translateZ(0) scale(1, 1);
    }

    /* Large devices (Large desktops 1200px and up) */
    @media (min-width: 1200px) {
        .overlay-container .text {
            top: 30%;
        }
    }

    img {
        display: block;
        max-width: 100%;
        height: auto;
    }


    /*Buttons with radius*/
    .radius-50 {
        -webkit-border-radius: 50px;
        -moz-border-radius: 50px;
        border-radius: 50px;
    }

    /*Animated Buttons*/
    .btn-animated {
        position: relative;
        min-width: 0 !important;
        padding-right: 45px !important;
    }

    .btn-animated i {
        -webkit-transition: right 0.2s ease-in-out;
        -o-transition: right 0.2s ease-in-out;
        transition: right 0.2s ease-in-out;
        z-index: 3;
        right: 17px;
        position: absolute;
        line-height: 34px;
        top: 0;
        min-width: 12px;
    }

    .btn-animated:after {
        width: 35px;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.1);
        position: absolute;
        content: "";
        top: 0;
        opacity: 0;
        filter: alpha(opacity=0);
        right: 0px;
        z-index: 2;
        -webkit-transition: all 0.2s ease-in-out;
        -o-transition: all 0.2s ease-in-out;
        transition: all 0.2s ease-in-out;
    }

    .btn-animated.radius-50:after {
        border-radius: 0 50px 50px 0;
    }

    .btn-animated.btn-gray-transparent:after {
        background-color: rgba(0, 0, 0, 0.05);
    }

    .btn-animated:hover:after {
        opacity: 1;
        filter: alpha(opacity=100);
    }

    .btn-animated:hover i {
        right: 11px;
    }

    .btn-animated.btn-sm {
        padding-right: 35px !important;
    }

    .btn-animated.btn-sm:after {
        width: 25px;
    }

    .btn-animated.btn-sm i {
        right: 14px;
        line-height: 28px;
        min-width: 11px;
    }

    .btn-animated.btn-sm:hover i {
        right: 7px;
    }

    .btn-animated.btn-lg {
        padding-right: 60px !important;
    }

    .btn-animated.btn-lg:after {
        width: 45px;
    }

    .btn-animated.btn-lg i {
        right: 25px;
        line-height: 48px;
        min-width: 15px;
    }

    .btn-animated.btn-lg:hover i {
        right: 15px;
    }

    .btn-animated.btn-xl {
        padding-right: 60px !important;
    }

    .btn-animated.btn-xl:after {
        width: 45px;
    }

    .btn-animated.btn-xl i {
        right: 25px;
        line-height: 64px;
        min-width: 15px;
        text-align: center;
    }

    .btn-animated.btn-xl:hover i {
        right: 13px;
    }

    /*Background Transition*/
    .btn-animation {
        -webkit-transition: all 0.1s ease-in-out;
        -o-transition: all 0.1s ease-in-out;
        transition: all 0.1s ease-in-out;
        position: relative;
        z-index: 1;
        overflow: hidden;
    }

    .btn-animation:hover,
    .btn-animation:focus {
        -webkit-transition: all 0.3s ease-in-out;
        -o-transition: all 0.3s ease-in-out;
        transition: all 0.3s ease-in-out;
    }

    .btn-animation:before {
        background-color: transparent;
        content: "";
        position: absolute;
        -webkit-transition: all 0.3s ease-in-out;
        -o-transition: all 0.3s ease-in-out;
        transition: all 0.3s ease-in-out;
    }

    .btn-animation:hover:before,
    .btn-animation:focus:before {
        z-index: -1;
    }

    .btn-default-transparent.btn-animation:hover,
    .btn-default-transparent.btn-animation:focus {
        background-color: transparent;
    }

    .btn-animation.btn-animation--slide-to-right:before {
        top: 0;
        left: 0;
        right: 100%;
        bottom: 0;
    }

    .btn-animation.btn-animation--slide-to-right:hover:before,
    .btn-animation.btn-animation--slide-to-right:focus:before {
        right: 0;
    }

    .btn-animation.btn-animation--slide-to-left:before {
        top: 0;
        left: 100%;
        right: 0;
        bottom: 0;
    }

    .btn-animation.btn-animation--slide-to-left:hover:before,
    .btn-animation.btn-animation--slide-to-left:focus:before {
        left: 0;
    }

    .btn-animation.btn-animation--slide-to-top:before {
        top: 100%;
        left: 0;
        right: 0;
        bottom: 0;
    }

    .btn-animation.btn-animation--slide-to-top:hover:before,
    .btn-animation.btn-animation--slide-to-top:focus:before {
        top: 0;
    }

    .btn-animation.btn-animation--slide-to-bottom:before {
        top: 0;
        left: 0;
        right: 0;
        bottom: 100%;
    }

    .btn-animation.btn-animation--slide-to-bottom:hover:before,
    .btn-animation.btn-animation--slide-to-bottom:focus:before {
        bottom: 0;
    }

    .btn-animation.btn-animation--slide-horizontal:before {
        top: 0;
        left: 50%;
        right: 50%;
        bottom: 0;
    }

    .btn-animation.btn-animation--slide-horizontal:hover:before,
    .btn-animation.btn-animation--slide-horizontal:focus:before {
        left: 0;
        right: 0;
    }

    .btn-animation.btn-animation--slide-vertical:before {
        top: 50%;
        left: 0;
        right: 0;
        bottom: 50%;
    }

    .btn-animation.btn-animation--slide-vertical:hover:before,
    .btn-animation.btn-animation--slide-vertical:focus:before {
        top: 0;
        bottom: 0;
    }

    .container {
        margin: 0%;
        padding: 10%;
        justify-content: center;
        align-items: center;
        border-top: 1px;


    }

    .textmove {

        padding: 0px;
        text-align: center;
        justify-content: center;
        align-content: center;

        background-color: #ffffff;



    }
</style>

<body style="background-color:#f2f4f4;">
    <!-- <div id="popbar" style="padding:10px 10px;background-color: #fff;border-bottom:1px solid lightgrey">
        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
        <h4 style="margin-top:10px; text-align: center; color:#114797;letter-spacing:1px;">
            Would you like to go to Quotionare ?
            <a style="" class="btnz warning" href="https://mahidol.ac.th/" target="_blank">GO</a>
        </h4>
    </div>-->
    <div class="modal fade" id="myModal">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body" style="padding:0px;">
                    <img class="imgpopup" src="img/popup/image_popup.jpg" alt="" class="img-responsive" />
                </div>
            </div>
        </div>
    </div>
    <?php include 'template/menu.html' ?>


    <div class=" container-fluid" style="padding:1px;width:100%;height:10%;">
        <div class="jumbotron" style="border-radius: 0px;margin-bottom: 0px;">
            <div class="container-fluid" style="border-left: 0px solid orange;padding-top:10px;">
                <h4 class="headerText text-center" style="letter-spacing:2px;">ASEAN University Network – Health
                    Promotion Network (AUN–HPN)</h4>
            </div>
        </div>


        <!-- TEXT MOVE -->
        <section class="textmove">
            <a href="https://www.google.co.th/">
                <marquee width="100%" direction="left" height="40px">
                    <a href="https://hurs.mahidol.ac.th/?fbclid=IwAR0SB7hPkua6wT-2YmtWJNO-2WYTskUREq6ZHWgKVQOPoxiylHGn0vxDwUQ#/" target="_blank" rel="noopener noreferrer">
                        <h1> Open Healthy University Rating Systems (HURS) from August 16, 2021 to November 15, 2021</h1>
                    </a>
                </marquee>
        </section>
        <!-- TEXTMOVE -->
        </a>
    </div>

    <div class="container-fluid" style="padding:0px;width:75%;background-color:white;">
        <div id="demo" class="carousel slide" data-ride="carousel">

            <!-- Indicators -->
            <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
            </ul>

            <!-- The slideshow -->
            <div class="carousel-inner" style="padding:5px">
                <div class="carousel-item active">
                    <a href="https://mahidol.ac.th/th/2021/mahidol-hud/" target="_blank">
                        <img src="img/banner/healthyday21.png" alt="Conference" class="img-fluid">
                    </a>
                </div>
                <div class="carousel-item">
                    <a href="https://mahidol.ac.th/th/2020/aun-hpn-iac/">
                        <img src="img/banner/6thmeeting.png" alt="Meeting" class="img-fluid">
                    </a>

                </div>

            </div>

        </div>
    </div>
    <!--<div class="container-fluid" style="padding:0px;width:75%;background-color:white;">
        activity
        <div class="row" style="padding: 10px 30px;padding-top:30px;">
            <div class="col-sm-12 col-md-12 col-lg-6  py-0 pl-3 pr-1 featcard">
                <div id="featured" class="carousel slide carousel-fade" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="card bg-dark text-white">
                                <img class="card-img img-fluid" src="img/banner/hud-01.jpg" alt="">
                                <div class="card-img-overlay d-flex linkfeat">
                                    <a href="https://mahidol.ac.th/th/2021/mahidol-hud/" class="align-self-end"
                                        target="_blank">
                                        <span class="badge">Conference</span>
                                        <h4 class="card-title">Mahidol University organized Healthy University Day 2021:
                                            Reject
                                            funding from the Foundation for a Smoke-Free World(In Thai)</h4>
                                        <p class="textfeat" style="display: none;">The 2nd AUN Health Promotion
                                            Conference will be organized on 20–21 August 2019 at Novotel Quezon, Manila,
                                            Philippines. The Conference will have the theme Moving towards healthy
                                            universities in Asia, with the general objective to promote health in all
                                            AUN members in order to develop health promoting universities.</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="card bg-dark text-white">
                                <img class="card-img img-fluid" src="img/banner/AUN-HPN_201105_1.jpg" alt="">
                                <div class="card-img-overlay d-flex linkfeat">
                                    <a href="https://mahidol.ac.th/th/2020/aun-hpn-iac/" class="align-self-end" target="_blank">
                                        <span class="badge">Meeting</span>
                                        <h4 class="card-title">The 5th International Advisory Committee (IAC) meeting
                                        </h4>
                                        <p class="textfeat" style="display: none;">The 5th International Advisory
                                            Committee (IAC) meeting and the 4th Planning and Implementation meeting are
                                            scheduled for the day before the conference on 19 August 2019 at University
                                            of Philippines, Manila, Philippines</p>
                                    </a>
                                </div>
                            </div>
                        </div>



                    </div>
                </div>
            </div>
            <div class="col-6 py-0 px-1 d-none d-lg-block">
                <div class="row">
                    <div class="col-6 pb-2 mg-3	">
                        <div class="card bg-dark text-white">
                            <img class="card-img img-fluid" src="img/banner/AUN-HPN_201105_1.jpg" alt="">
                            <div class="card-img-overlay d-flex">
                                <a href="activity/activity2017.php" class="align-self-end" target="_blank">
                                    <span class="badge">Meeting</span>
                                    <h6 class="card-title">AUN-HPN organized The 6th International Advisory Committee
                                        (IAC)
                                        meeting (In Thai)</h6>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 pb-2 mg-4	">
                        <div class="card bg-dark text-white">
                            <img class="card-img img-fluid"
                                src="img/banner/The 2nd ASEAN University Network Health Promotion Conference4.JPG"
                                alt="">
                            <div class="card-img-overlay d-flex">
                                <a href="activity/activityIAC5.php" class="align-self-end" target="_blank">
                                    <span class="badge">Conference4</span>
                                    <h6 class="card-title">The 2nd ASEAN University Network Health Promotion Conference4
                                    </h6>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 pb-2 mg-1	">
                        <div class="card bg-dark text-white">
                            <img class="card-img img-fluid" src="img/banner/5th.jpg" alt="">
                            <div class="card-img-overlay d-flex">
                                <a href="activity/activityIAC5.php" class="align-self-end" target="_blank">
                                    <span class="badge">Meeting</span>
                                    <h6 class="card-title">The 5th International Advisory Committee meeting</h6>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 pb-2 mg-2	">
                        <div class="card bg-dark text-white">
                            <img class="card-img img-fluid" src="img/banner/2018.jpg" alt="">
                            <div class="card-img-overlay d-flex">
                                <a href="activity/activity2018.php" class="align-self-end" target="_blank">
                                    <span class="badge">Workshop</span>
                                    <h6 class="card-title">Capacity Building Workshop on “Leadership in Health
                                        Promotion</h6>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>-->
    <!--/activity-->
    <!--menu-->
    <div class="container-fluid" style="padding:0px;width:75%;background-color:white;">
        <div class="row" style="padding: 15px;">
            <div class="col-sm-12">
                <div class="row">
                    <!-- Icon Cards-->
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12 ">
                        <a href="hurs.php" class="alink" target="_blank">
                            <div class="infoblog">
                                <h4 class="" style="text-align:center;font-weight: 600;letter-spacing:2px;">HURS
                                    <p>(Healthy University Rating Systems)</p>
                                </h4>
                            </div>
                        </a>
                    </div>

                    <!-- Icon Cards-->
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12 ">
                        <a href="aunhpnbook.php" class="alink" target="_blank">
                            <div class="infoblog2">

                                <h4 class="" style="text-align:center;font-weight: 600;">AUN Healthy University
                                    Framework</h4>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!--menu
    <div class="container-fluid" style="padding:0px;width:75%;background-color:white;padding-bottom:15px;">
        <div class="row" style="padding: 10px 30px;padding-top:10px;">
            <div class="col-sm-12">
                <div class="row">


                    
                    <div class="col-lg-3 col-md-6 col-sm-12 col-12 ">
                        <a href="aunhpn_intro.php" class="alink" target="_blank">
                            <div class="inforide">
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 col-sm-4 col-4 rideone"
                                        style="border-right:1px solid lightgrey;">
                                        <img src="img/button/about.svg">
                                    </div>
                                    <div class="col-lg-9 col-md-8 col-sm-8 col-8 fonttext">
                                        <h3 class="fontfont" style="text-align:center;">About Us</h3>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    
                    <div class="col-lg-3 col-md-6 col-sm-12 col-12 ">
                        <a href="aunhpngoal.php" class="alink" target="_blank">
                            <div class="inforide">
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 col-sm-4 col-4 rideone"
                                        style="border-right:1px solid lightgrey;">
                                        <img src="img/button/trophy.svg">
                                    </div>
                                    <div class="col-lg-9 col-md-8 col-sm-8 col-8 fonttext">
                                        <h3 class="fontfont" style="text-align:center;">Goal</h3>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    
                    <div class="col-lg-3 col-md-6 col-sm-12 col-12 ">
                        <a href="aunhpn_team.php" class="alink" target="_blank">
                            <div class="inforide">
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 col-sm-4 col-4 rideone"
                                        style="border-right:1px solid lightgrey;">
                                        <img src="img/button/social-distancing.svg">
                                    </div>
                                    <div class="col-lg-9 col-md-8 col-sm-8 col-8 fonttext">
                                        <h3 class="fontfont" style="text-align:center;">Team</h3>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 col-12 ">
                        <a href="aunhpnactivity.php" class="alink" target="_blank">
                            <div class="inforide">
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 col-sm-4 col-4 rideone"
                                        style="border-right:1px solid lightgrey;">
                                        <img src="img/button/man.svg">
                                    </div>
                                    <div class="col-lg-9 col-md-8 col-sm-8 col-8 fonttext">
                                        <h3 class="fontfont" style="text-align:center;">Activities</h3>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>


                </div>
            </div>
        </div>
    </div>-->
    <!--info-->
    <div class="container-fluid" style="padding:0px;width:75%;background-color:white;">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
        <div class="col-sm-12">
            <div class="row">
                <div class="col-sm-8">
                    <div class="col-sm-12">
                        <div class="row">
                            <div class="col-12">
                                <h2 class="display-5 font-weight-bold ">Latest News</h2>
                            </div>
                        </div>
                        <div class="row" style="padding:10px;">
                            <div class="col-sm-12 col-md-6 col-xl-4 ">
                                <div class="image-box image-box--shadowed style-2 mb-4" style="border:1px solid lightgrey;">
                                    <div class="overlay-container">
                                        <img src=".//img/act/090764.jpg" alt="">
                                        <a href="activity/activity090764.php" target="_blank" class="overlay-link"></a>
                                    </div>
                                    <div class="body">
                                        <h4 class="font-weight-bold my-2" style="padding-bottom:19px;">ม.มหิดลนำเสนอ “Healthy University Rating Systems (HURS)” ในการประชุม The 12th AUN Rectors" Meeting 2021
                                        </h4>
                                        <p class="small">July 9, 2020</p>
                                        <div class="row d-flex align-items-center">
                                            <div class="col-12 text-right">
                                                <a href="activity/activity090764.php" target="_blank" class="btn radius-50 btn-gray-transparent btn-animated">Read
                                                    More <i class="fa fa-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-xl-4 ">
                                <div class="image-box image-box--shadowed style-2 mb-4" style="border:1px solid lightgrey;">
                                    <div class="overlay-container">
                                        <img src="img/banner/hud-01.jpg" class="img-fluid" alt="">
                                        <a href="https://mahidol.ac.th/th/2021/mahidol-hud/" target="_blank" class="overlay-link"></a>
                                    </div>
                                    <div class="body">
                                        <h4 class="font-weight-bold my-2">Healthy University Day 2021: Reject
                                            funding from the Foundation for a Smoke-Free World</h4>
                                        <p class="small">March 18, 2021</p>
                                        <div class="row d-flex align-items-center">

                                            <div class="col-12 text-right">
                                                <a href="https://mahidol.ac.th/th/2021/mahidol-hud/" target="_blank" class="btn radius-50 btn-gray-transparent btn-animated">Read
                                                    More <i class="fa fa-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-xl-4 ">
                                <div class="image-box image-box--shadowed style-2 mb-4" style="border:1px solid lightgrey;">
                                    <div class="overlay-container">
                                        <img src="img/banner/AUN-HPN_201105_1.jpg" alt="">
                                        <a href="https://mahidol.ac.th/th/2020/aun-hpn-iac/" target="_blank" class="overlay-link"></a>
                                    </div>
                                    <div class="body">
                                        <h4 class="font-weight-bold my-2" style="padding-bottom:25px;">AUN-HPN organized
                                            The 6 <sup>th</sup> International Advisory Committee (IAC)
                                            meeting</h4>
                                        <p class="small">November 5, 2019</p>
                                        <div class="row d-flex align-items-center">

                                            <div class="col-12 text-right">
                                                <a href="https://mahidol.ac.th/th/2020/aun-hpn-iac/" target="_blank" class="btn radius-50 btn-gray-transparent btn-animated">Read
                                                    More <i class="fa fa-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>



                        </div>

                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="col-sm-12">
                        <div class="row">
                            <!-- Icon Cards-->
                            <div class="col-sm-12">
                                <a href="aunhpn_intro.php" class="alink" target="_blank">
                                    <div class="inforide">
                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 col-sm-4 col-4 rideone" style="border-right:1px solid lightgrey;">
                                                <img src="img/button/about.svg">
                                            </div>
                                            <div class="col-lg-9 col-md-8 col-sm-8 col-8 fonttext">
                                                <h3 class="fontfont" style="text-align:center;">About Us</h3>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- Icon Cards-->
                            <div class="col-sm-12">
                                <a href="aunhpngoal.php" class="alink" target="_blank">
                                    <div class="inforide">
                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 col-sm-4 col-4 rideone" style="border-right:1px solid lightgrey;">
                                                <img src="img/button/trophy.svg">
                                            </div>
                                            <div class="col-lg-9 col-md-8 col-sm-8 col-8 fonttext">
                                                <h3 class="fontfont" style="text-align:center;">Goal</h3>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-sm-12">
                                <a href="aunhpnmember.php" class="alink" target="_blank">
                                    <div class="inforide">
                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 col-sm-4 col-4 rideone" style="border-right:1px solid lightgrey;">
                                                <img src="img/button/man.svg">
                                            </div>
                                            <div class="col-lg-9 col-md-8 col-sm-8 col-8 fonttext">
                                                <h3 class="fontfont" style="text-align:center;">Member</h3>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- Icon Cards
                        <div class="col-sm-12">
                            <a href="aunhpn_team.php" class="alink" target="_blank">
                                <div class="inforide">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 col-sm-4 col-4 rideone"
                                            style="border-right:1px solid lightgrey;">
                                            <img src="img/button/social-distancing.svg">
                                        </div>
                                        <div class="col-lg-9 col-md-8 col-sm-8 col-8 fonttext">
                                            <h3 class="fontfont" style="text-align:center;">Team</h3>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>-->
                            <!-- Icon Cards-->
                            <div class="col-sm-12">
                                <a href="aunhpnactivity.php" class="alink" target="_blank">
                                    <div class="inforide">
                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 col-sm-4 col-4 rideone" style="border-right:1px solid lightgrey;">
                                                <img src="img/button/act2.svg">
                                            </div>
                                            <div class="col-lg-9 col-md-8 col-sm-8 col-8 fonttext">
                                                <h3 class="fontfont" style="text-align:center;">Activities</h3>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
    <!--<div class="container-fluid" style="padding:0px;width:75%;background-color:white;margin-top:-10px;">
        <div class="row" style="padding: 10px 30px;padding-top:10px;">
            <div class="col-sm-8" style="background-color:white;padding:0px 20px;">
                <h1> <b> Latest News</b></h1>
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-xs-12">
                        <div class="card mb-4 text-white bg-dark">
                            <img class="card-img-top" src="img/banner/hud-01.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">Mahidol University organized Healthy University Day 2021: Reject
                                    funding from the Foundation for a Smoke-Free World(In Thai)</h4>
                                <h5>18 March 2021 </h5>
                                <a href="https://mahidol.ac.th/th/2021/mahidol-hud/"
                                    class="btn btn-outline-light btn-sm" target="_blank">Read
                                    More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-xs-12 row-eq-height">
                        <div class="card mb-4 text-white bg-dark">
                            <img class="card-img-top" src="img/banner/AUN-HPN_201105_1.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">AUN-HPN organized The 6th International Advisory Committee (IAC)
                                    meeting (In Thai)
                                </h4>
                                <h5>5 November 2020 </h5> <br>
                                <a href="https://mahidol.ac.th/th/2020/aun-hpn-iac/"
                                    class="btn btn-outline-light btn-sm" target="_blank">Read
                                    More</a>

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-12 col-xs-12 row-eq-height">
                        <div class="card mb-4 text-white bg-dark">
                            <img class="card-img-top"
                                src="img/banner/The 2nd ASEAN University Network Health Promotion Conference4.JPG"
                                alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">The 2nd AUN Health Promotion Conference 2019
                                </h4>
                                <h5>20–21 August 2019 </h5><br>
                                <a href="activity/activity2019.php" class="btn btn-outline-light btn-sm"
                                    target="_blank">Read
                                    More</a>
                            </div>
                        </div>
                    </div>
                   <div class="col-lg-3 col-md-6 col-xs-12 row-eq-height">
                        <div class="card mb-4 text-white bg-dark">
                            <img class="card-img-top" src="img/banner/IAC5.JPG" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">The 5th International Advisory Committee (IAC) meeting</h4>
                                <h5>27 June 2019 </h5><br>
                                <a href="activity/activityIAC5.php" class="btn btn-outline-light btn-sm"
                                    target="_blank">Read
                                    More</a>
                            </div>
                        </div>
                    </div> 


                </div>
            </div>
            <div class="col-sm-4" style="padding:0px;padding-top:20px;">
                <div class="col-sm-12">
                    <div class="row">
                       
                        <div class="col-sm-12">
                            <a href="aunhpn_intro.php" class="alink" target="_blank">
                                <div class="inforide">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 col-sm-4 col-4 rideone"
                                            style="border-right:1px solid lightgrey;">
                                            <img src="img/button/about.svg">
                                        </div>
                                        <div class="col-lg-9 col-md-8 col-sm-8 col-8 fonttext">
                                            <h3 class="fontfont" style="text-align:center;">About Us</h3>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- Icon Cards
                        <div class="col-sm-12">
                            <a href="aunhpngoal.php" class="alink" target="_blank">
                                <div class="inforide">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 col-sm-4 col-4 rideone"
                                            style="border-right:1px solid lightgrey;">
                                            <img src="img/button/trophy.svg">
                                        </div>
                                        <div class="col-lg-9 col-md-8 col-sm-8 col-8 fonttext">
                                            <h3 class="fontfont" style="text-align:center;">Goal</h3>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-12">
                            <a href="aunhpnmember.php" class="alink" target="_blank">
                                <div class="inforide">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 col-sm-4 col-4 rideone"
                                            style="border-right:1px solid lightgrey;">
                                            <img src="img/button/man.svg">
                                        </div>
                                        <div class="col-lg-9 col-md-8 col-sm-8 col-8 fonttext">
                                            <h3 class="fontfont" style="text-align:center;">Member</h3>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- Icon Cards
                        <div class="col-sm-12">
                            <a href="aunhpn_team.php" class="alink" target="_blank">
                                <div class="inforide">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 col-sm-4 col-4 rideone"
                                            style="border-right:1px solid lightgrey;">
                                            <img src="img/button/social-distancing.svg">
                                        </div>
                                        <div class="col-lg-9 col-md-8 col-sm-8 col-8 fonttext">
                                            <h3 class="fontfont" style="text-align:center;">Team</h3>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-12">
                            <a href="aunhpnactivity.php" class="alink" target="_blank">
                                <div class="inforide">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 col-sm-4 col-4 rideone"
                                            style="border-right:1px solid lightgrey;">
                                            <img src="img/button/act2.svg">
                                        </div>
                                        <div class="col-lg-9 col-md-8 col-sm-8 col-8 fonttext">
                                            <h3 class="fontfont" style="text-align:center;">Activities</h3>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>


                    </div>
                </div>
            </div>
        </div>-->

    </div>


    <?php include 'template/footer.html' ?>

    <script src="js/jquery.js "></script>
    <script src="js/jquery-3.4.1.slim.js "></script>
    <script src="js/bootstrap.min.js "></script>

    <script>
        $('.dropdown-menu a.dropdown-toggle').on('click', function(e) {
            if (!$(this).next().hasClass('show')) {
                $(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
            }
            var $subMenu = $(this).next(".dropdown-menu");
            $subMenu.toggleClass('show');


            $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
                $('.dropdown-submenu .show').removeClass("show");
            });


            return false;
        });
        $(document).ready(function() {
            $('#myModal').modal('show');
        });
        //FEATURED HOVER
        $(document).ready(function() {
            $(".linkfeat").hover(
                function() {
                    $(".textfeat").show(500);
                },
                function() {
                    $(".textfeat").hide(500);
                }
            );
        });
        $(document).ready(function() {
            $('#myCarousel').carousel({
                interval: 4000
            });

            var clickEvent = false;
            $('#myCarousel').on('click', '.nav a', function() {
                clickEvent = true;
                $('.nav li').removeClass('active');
                $(this).parent().addClass('active');
            }).on('slid.bs.carousel', function(e) {
                if (!clickEvent) {
                    var count = $('.nav').children().length - 1;
                    var current = $('.nav li.active');
                    current.removeClass('active').next().addClass('active');
                    var id = parseInt(current.data('slide-to'));
                    if (count == id) {
                        $('.nav li').first().addClass('active');
                    }
                }
                clickEvent = false;
            });
        });
    </script>
</body>

</html>