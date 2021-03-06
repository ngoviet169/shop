<!DOCTYPE html>
<html>
<head>
    <base href="{{asset('')}}">
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/favicon.png">
    <title>Dầu Nhớt Xe Ga | Xe Số | Xe Côn Tay | Xe PKL | Oto</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,700,500italic,100italic,100' rel='stylesheet' type='text/css'>
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen"/>
    <link href="css/sequence-looptheme.css" rel="stylesheet" media="all"/>
    <link href="css/style.css" rel="stylesheet">
    <!--[if lt IE 9]><script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script><script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script><![endif]-->
</head>
<body id="home">
<div class="wrapper">
    @include('layouts.menu')
    <div class="clearfix"></div>
    @if($home)
        @include('layouts.slide')
    @endif
    <div class="clearfix"></div>
    <div class="container_fullwidth">
        <div class="container">
            @yield('content')
        </div>
    </div>
    <div class="clearfix"></div>
    @include('layouts.footer')
</div>
<!-- Bootstrap core JavaScript==================================================-->
<script type="text/javascript" src="js/app.js"></script>
<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.sequence-min.js"></script>
<script type="text/javascript" src="js/jquery.carouFredSel-6.2.1-packed.js"></script>
<script defer src="js/jquery.flexslider.js"></script>
<script type="text/javascript" src="js/script.min.js" ></script>
<script>
    console.log($('.products'));
</script>
</body>
</html>