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
        <li class="active"><a href="{{route('home')}}"><i class="fa fa-home"></i> Dashboard</a></li>
        <li><a href="{{route('producten')}}"><i class="fas fa-shopping-basket"></i> Mijn Producten</a></li>
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
            <li class="active">Dashboard</li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Product toevoegen</h1>
        </div>
    </div><!--/.row-->


    <!------ Include the above in your HEAD tag ---------->

    <div class="container">
        <div class="stepwizard">
            <div class="stepwizard-row setup-panel">
                <div class="stepwizard-step">
                    <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
                    <p>Stap 1</p>
                </div>
                <div class="stepwizard-step">
                    <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
                    <p>Stap 2</p>
                </div>
                <div class="stepwizard-step">
                    <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
                    <p>Stap 3</p>
                </div>
            </div>
        </div>
        <form role="form">
            <div class="row setup-content" id="step-1">
                <div class="col-xs-12">
                    <div class="col-md-12">
                        <h3> Stap 1</h3>
                        <div class="form-group">
                            <label class="control-label">Product naam</label>
                            <input  maxlength="100" type="text" required="required" class="form-control" placeholder="Product naam"  />
                        </div>
                        <div class="form-group">
                            <label class="control-label">Product beschrijving</label>
                            <textarea rows="4" cols="50" required="required" class="form-control" placeholder="Product Beschrijving..."></textarea>
                        </div>
                        <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
                    </div>
                </div>
            </div>
            <div class="row setup-content" id="step-2">
                <div class="col-xs-12">
                    <div class="col-md-12">
                        <h3> Stap 2</h3>
                        <div class="form-group">
                            <label class="control-label">Product image</label>
                            <input type='file' required="required" class="form-control" id="imgInp" />
                            <img id="blah" src="#" alt="your image" style="width:600px; display:none; position:absolute;margin-top:20px;"/>
                        </div>
                        <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
                    </div>
                </div>
            </div>
            <div class="row setup-content" id="step-3">
                <div class="col-xs-12">
                    <div class="col-md-12">
                        <h3> Stap 3</h3>
                        <button class="btn btn-success btn-lg pull-right" type="submit">Finish!</button>
                    </div>
                </div>
            </div>
        </form>
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
<script src="{{ URL::asset('js/app.js') }}"></script>
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

    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('#blah').attr('src', e.target.result);
                document.getElementById('blah').style.display = "block";
            };

            reader.readAsDataURL(input.files[0]); // convert to base64 string
        }
    }

    $("#imgInp").change(function() {
        readURL(this);
    });

</script>

</body>
</html>
