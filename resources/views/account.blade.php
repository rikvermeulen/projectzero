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
        <li><a href="{{route('producten')}}"><i class="fas fa-shopping-basket"></i> Mijn Producten</a></li>
        <li class="active"><a href="{{route('account')}}"><i class="far fa-user-circle"></i> Account</a></li>
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
            <li class="active">Account</li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Account</h1>
        </div>
    </div><!--/.row-->

    <div class="main-content">
        <div class="container mt-7">
            <!-- Table -->
            <div class="row">
                <div class="col-xl-8 m-auto order-xl-1">
                    <div class="card bg-secondary shadow">
                        <div class="card-body">
                            <form>
                                <h6 class="heading-small text-muted mb-4">User informatie</h6>
                                <div class="pl-lg-4">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group focused">
                                                <label class="form-control-label" for="input-username">Volledige naam</label>
                                                <input type="text" id="input-username" class="form-control form-control-alternative" placeholder="Username" value="{{auth()->user()->name}}">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label" for="input-email">Wachtwoord</label>
                                                <input type="password" id="input-email" class="form-control form-control-alternative" placeholder="Nieuw wachtwoord">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group focused">
                                                <label class="form-control-label" for="input-first-name">Email</label>
                                                <input type="email" id="input-first-name" class="form-control form-control-alternative" placeholder="First name" value="{{auth()->user()->email}}">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group focused">
                                                <label class="form-control-label" for="input-last-name">Winkel</label>
                                                <input type="text" id="input-last-name" class="form-control form-control-alternative" placeholder="Last name" value="{{auth()->user()->winkel}}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr class="my-4">
                                <!-- Address -->
                                <h6 class="heading-small text-muted mb-4">Contact informatie</h6>
                                <div class="pl-lg-4">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group focused">
                                                <label class="form-control-label" for="input-address">Plaats</label>
                                                <input id="input-address" class="form-control form-control-alternative" placeholder="Home Address" value="{{auth()->user()->plaats}}" type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="form-group focused">
                                                <label class="form-control-label" for="input-city">Adres</label>
                                                <input type="text" id="input-city" class="form-control form-control-alternative" placeholder="City" value="{{auth()->user()->adres}}">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group focused">
                                                <label class="form-control-label" for="input-country">Huisnummer</label>
                                                <input type="number" id="input-country" class="form-control form-control-alternative" placeholder="Country" value="{{auth()->user()->huisnummer}}">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label class="form-control-label" for="input-country">Postcode</label>
                                                <input type="text" id="input-postal-code" class="form-control form-control-alternative" value="{{auth()->user()->postcode}}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr class="my-4">
                                <div class="col-md-12">
                                    <button type="button" class="btn btn-info" style="position: absolute;right:0;width:100%;height:55px;border-radius: 0;font-size:20px;">Opslaan</button>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
