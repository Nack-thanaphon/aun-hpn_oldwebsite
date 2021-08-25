<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="content-language" content="en" />
    <meta name="description"
        content="Asean Institute for Health Developement, Mahidol University is based on a forward-looking and conceptually challenging perspective on human resource development which aims to support the global strategy of  “Health for All” through the primary health care approach advocated by WHO">
    <meta name="author" content="LCT, ASEAN Institute for Health Developement">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
    <link rel="apple-touch-icon-precomposed" sizes="114×114" href="img/iconlogomahidol.png">
    <link rel="apple-touch-icon-precomposed" sizes="72×72" href="img/iconlogomahidol.png">
    <meta name="Keywords" lang="en"
        content="AIHD, aihd, Mahidol, Thailand, University, Faculty, Bangkok, Higher Education, Salaya, MPHM, Primary Health Care, Education, Mini MM, management">
    <meta name="keywords" lang="th" content="สถาบันพัฒนาสุขภาพอาเซ๊ยน,วิทยาการเสพติด">
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <title>AUN-HPN</title>
</head>
<style>
@font-face {
    font-family: thaifont;
    src: url(font/DBHelvethaica.ttf) format("truetype");
}

body {
    font-family: 'thaifont';
    margin: 0;
    z-index: 20px;
}

.w-100 {
    width: 100% !important;
    /*height: 700px;*/
}

.sizewidth {
    width: 90%;
}

.boxhover:hover {
    border-bottom: 5px solid #2E86C1;
}

.fontpara2 {
    margin-top: -10px;
    font-size: 25px;
    color: white;
    font-weight: 500;
    letter-spacing: 2px;
}

.fontpara {
    font-size: 25px;
    font-weight: 500;
}

.fontstaffhd {
    font-size: 30px;
    letter-spacing: 1px;
}

.fontstaff {
    font-size: 25px;
    letter-spacing: 1px;
    margin-top: -10px;
}

/*title header*/
.jumbotron {
    padding: 10px;
    background-image: url('img/bannerhead3.jpg');
    width: 100%;
    height: 100px;
}

.headerText {
    font-weight: 700;
    color: white;
    letter-spacing: 1px;
    font-size: 2.5rem
}

.showimage {
    width: 80%;
    Height: auto;
    margin-left: 40px;
}



.bordertop {
    border-bottom: 2px dashed lightgrey;
}

.liclassmis {
    letter-spacing: 1px;
}

.box {
    padding: 10px 0px;
}

.box-part {
    background: #FFF;
    border-radius: 0;
    padding: 30px 10px;
    margin: 10px 0px;
    border: 0.px solid lightgrey;
}

.text {
    margin: 10px 0px;
    font-size: 22px;
    padding-left: 30px;
}

.fa {
    color: #4183D7;
}

.aclass {
    color: blue;
    font-weight: 600;
}

.aclass:hover {
    text-decoration: none;
    color: orange;
    letter-spacing: 1px;
    font-weight: 800;
}

.navnavtab {
    color: blue;
}
.navnavtab:hover {
    color: orange !important;
}
.stepcurpro{
    margin-bottom:10px;
    padding-bottom:10px;
    border-bottom:0.5px dotted lightgrey;
}
.alinkstaff{
    color: black;
    letter-spacing:0.5px;
    font-size:22px;
}
.alinkstaff:Hover{
    text-decoration:none;
    color: orange;
}
th{
    font-size:24px;
}
td{
    font-size:22px;
}
</style>

<body style="background-color:#f2f4f4;">
    <?php include 'template/menu.html' ?>
    <div class=" container-fluid" style="padding:0px;">
        <div class="jumbotron" style="border-radius: 0px;margin-bottom: 0px;">
            <div c class="container-fluid" style="width:75%;border-left: 0px solid lightgrey">
            <h1 class="headerText ">Member</h1>
                <h2 class="fontpara2"><em>ASEAN University Network – Health Promotion Network (AUN–HPN)</em></h2>
            </div>
        </div>
    </div>
    <div class="container-fluid" style="width:75%;background-color:#fff;padding:40px 50px;">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item"> 
                <a class="nav-link  navnavtab active" data-toggle="tab" href="#fullmemhun">AUN–HPN University Full Members</a>
            </li>
            <li class="nav-item">
                <a class="nav-link navnavtab" data-toggle="tab" href="#associatememhun">AUN–HPN University Associate Members</a>
            </li>
            
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
            <div id="fullmemhun" class="container tab-pane active" style="z-index: 10;">
                <?php include 'fullmemhun.php' ?> 
            </div>
            <div id="associatememhun" class="container tab-pane fade"><br>
                <?php include 'associatememhun.php' ?> 
            </div>
            
        </div>
    </div>



    <?php include 'template/topup.html' ?>
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
    </script>
</body>

</html>