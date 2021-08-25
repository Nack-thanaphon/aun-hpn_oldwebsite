<!DOCTYPE html>
<html lang="en">

<head>
    <title>AIHD</title>
    <?php include 'template/metatag.html' ?>
    <?php include 'template/font-design.html'?>
</head>
<style>
body, html {
  height: 100%;
  margin: 0;
}

.bgimg {
  background-color:black;
  height: 100%;
  /*background-position: center;
  background-size: cover;*/
  position: relative;
  color: white;

}

.topleft {
  position: absolute;
  top: 0;
  left: 16px;
}

.bottomleft {
  position: absolute;
  bottom: 0;
  left: 16px;
}

.middle {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
}

hr {
  margin: auto;
  width: 40%;
}
</style>
<body>

<div class="bgimg">
<div class="topleft" style="padding-top:20px;">
    <a href="index.php">
    <p style="color:red;">Back</p></a>
  </div>
  <div class="middle">
    <h1>COMING SOON</h1>
    <hr>
    <p id="demo" style="font-size:30px"></p>
  </div>
  <!--  <div class="bottomleft">
    <p>Some text</p>
  </div>
</div>-->


</html>