<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
    <link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/fontawesome/css/all.css') }}" rel="stylesheet">
    <link href="css/datepicker3.css" rel="stylesheet">
    <link href="{{ URL::asset('css/styles.css') }}" rel="stylesheet">

    <!--Custom Font-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span></button>
            <a class="navbar-brand" href="#"><span>Holo</span>Grams</a>

        </div>
    </div><!-- /.container-fluid -->
</nav>
<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
    <div class="profile-sidebar" style="height:150px;">
        <div class="profile-userpic" style="position: relative;top:32px;">
            <img src="{{ URL::asset('image/profile.png') }}" class="img-responsive" alt="">
        </div>
        <div class="profile-usertitle" style="position: relative;top:35px;">
            <div class="profile-usertitle-name">{{auth()->user()->name}}</div>
            <div class="profile-usertitle-status"><em>{{auth()->user()->winkel}}</em></div>
        </div>
        <div class="clear"></div>
    </div>


    <ul class="nav menu">
        <li><a href="{{route('home')}}"><i class="fa fa-home"></i> Dashboard</a></li>
        <li class="active"><a href="{{route('producten')}}"><i class="fas fa-shopping-basket"></i> Mijn Producten</a></li>
        <li><a href="{{route('account')}}"><i class="far fa-user-circle"></i> Account</a></li>
        <li><a href="elements.html"><i class="fas fa-cog"></i> Instellingen</a></li>
        <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="fas fa-sign-out-alt"></i> Uitloggen</a></li>

    </ul>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
</div><!--/.sidebar-->

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#">
                    <em class="fa fa-home"></em>
                </a></li>
            <li class="active">Mijn producten</li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Mijn producten</h1>
        </div>
    </div><!--/.row-->

    <div class="panel panel-container">
        <div class="row">
            <div class="col-md-3">
                <div class="panel panel-teal panel-widget border-right">
                    <div class="row no-padding"><em class="fa fa-xl fa-shopping-cart color-blue"></em>
                        <div class="large">{{$producten}}</div>
                        <div class="text-muted">Aantal producten</div>
                    </div>
                </div>
            </div>
            <a href="" style="text-decoration: none;">
            <div class="col-md-3">
                <div class="panel panel-teal panel-widget border-right">
                    <div class="row no-padding">
                        <div class="text-muted" style="font-size: 20px;height:100px;"><h4 class="text-muted" style="position:relative; top:45px;">Product Toevoegen <i class="far fa-arrow-alt-circle-right"></i></h4></div>
                    </div>
                </div>
            </div>
            </a>
        </div><!--/.row-->
    </div>

    <div class="row">
        <form id="football-search" class="form-horizontal" style="position:relative;left:15px;">
            <div class="form-group">
                <div class="col-md-9">
                    <input class="form-control" type="text" id="club-name" placeholder="Product zoeken"/>
                </div>
                <div class="col-md-1">
                    <button type="submit" class="btn btn-info btn-zoeken" style="position:relative;left:-20px;height:45px;width:100px;">Zoeken</button>
                </div>
            </div>
        </form>
    </div>

    <div class="row">
        <h4 style="position: relative;text-align: center"><b>Alle producten:</b></h4><br />
        <div id="players"></div>
    </div>


    </div><!--/.row-->
<input type="text" id="test" value="{{auth()->user()->winkel}}" style="display:none;"/>


<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/chart.min.js"></script>
<script src="js/chart-data.js"></script>
<script src="js/easypiechart.js"></script>
<script src="js/easypiechart-data.js"></script>
<script src="js/bootstrap-datepicker.js"></script>
<script src="js/custom.js"></script>


<script src="{{ URL::asset('js/product.js') }}"></script>
<script>
    window.onload = function () {
        var chart1 = document.getElementById("line-chart").getContext("2d");
        window.myLine = new Chart(chart1).Line(lineChartData, {
            responsive: true,
            scaleLineColor: "rgba(0,0,0,.2)",
            scaleGridLineColor: "rgba(0,0,0,.05)",
            scaleFontColor: "#c5c7cc"
        });
    };



</script>

</body>
</html>
