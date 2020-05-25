<html><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive Admin Dashboard Template">
    <meta name="keywords" content="admin,dashboard">
    <meta name="author" content="stacks">
    <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->
            
    <!-- Title -->
    <title>concept - Responsive Admin Dashboard Template</title>
    
    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{ asset('resources/plugins/switchery/switchery.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('resources/plugins/icomoon/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('resources/plugins/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('resources/plugins/font-awesome/css/all.min.css') }}">
          
    <!-- Theme Styles -->
    <link rel="stylesheet" type="text/css" href="{{ asset('resources/css/style.css') }}">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
   
   @php ($i = 0)
    <body>
        
        <!-- Page Container -->
        <div class="page-container">
            <div class="page-sidebar">
            </div>
            <div class="page-content">
                <div class="secondary-sidebar">
                    <div class="secondary-sidebar-bar">
                        <a href="#" class="logo-box">nodestat</a>
                    </div>
                </div>
                <div class="page-inner no-page-title">
                    <div id="main-wrapper">
                        <div class="row">
                            <div class="col-xl">
                                <div class="card" style="background-color: #fff">
                                    <div class="card-body">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th scope="col">№</th>
                                                    <th scope="col">Site name</th>
                                                    <th scope="col">Category</th>
                                                    <th scope="col">Capacity</th>
                                                    <th scope="col">Channel Count</th>
                                                    <th scope="col">Node Rank: Capacity</th>
                                                    <th scope="col">Node Rank: Channel</th>
                                                    <th scope="col">Node Rank: Age</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                               @foreach ($sites as $site)
                                                   @if ($site->id != 18 && $site->id != 20)
                                                       @php ($i++)
                                                <tr>
                                                    <th scope="row">{{$i}}</th>
                                                        <td>{{$site->name}}</td>
                                                        <td>{{$site->category}}</td>
                                                        
                                                </tr>
                                                    @endif
                                               @endforeach
                                            </tbody>
                                        </table>       
                                    </div>
                                </div>
                            </div>
                        </div>
       
                       
                    </div><!-- Main Wrapper -->

                    
                <div class="page-footer">
                    <p>2019 &copy; stacks</p>
                </div>
                </div><!-- /Page Inner -->
             
               
            </div><!-- /Page Content -->
        </div><!-- /Page Container -->
        
        
        <!-- Javascripts -->
        <script src="../../assets/plugins/jquery/jquery-3.1.0.min.js"></script>
        <script src="../../assets/plugins/bootstrap/popper.min.js"></script>
        <script src="../../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script src="../../assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
        <script src="../../assets/plugins/switchery/switchery.min.js"></script>
        <script src="../../assets/js/concept.min.js"></script>
    </body>
</html>