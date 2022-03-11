<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin:0;
            padding:0;
        }
        .your-class{
            width:100%;
            box-sizing:border-box;
            overflow-y:hidden;
        }
        .box{
            width:100%;
            height:20vh;
            background:red;
            text-align:center;
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css">
</head>
<body>

<div class="your-class">
    <div class="box">your content</div>
    <div class="box">your content</div>
    <div class="box">your content</div>
</div>

<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

<script type="text/javascript">
  $('.your-class').slick({
    dots: false,
    prevArrow: false,
    nextArrow: false,
  infinite: true,
  speed: 300,
  slidesToShow: 1,
  autoplay: true,
  autoplaySpeed: 600,
  adaptiveHeight: true
});
  </script>
</body>
</html>


