<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>nodestat data</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('resources/css/style.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@100;300;400;500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <link href="https://unpkg.com/bootstrap-table@1.16.0/dist/bootstrap-table.min.css" rel="stylesheet">
    <script defer src="{{ asset('resources/js/header.js') }}"></script>
</head>

@php ($i = 0)

<body style="background: #fff">   
    <div class="container">
        <div class="header-main">
            <div class="logo-main">
                nodestat
            </div>
            <div class="logo-mini-main">
                data
            </div>
            <div class="logo-mini-about-main">
                convenient representation of data about Lightning Network payment channels.<br>Graphs of parameter changes and daily statistics will help you decide <br> which channel to connect to.
            </div>
        </div>
        <table class="table table-hover mt-5" style="text-align:center">
            <thead>
               <hr class="hr-visible0">
                <tr style="font-size: 19px;">
                    <th style="width: 12%; text-align:left" class="head-table">site name</th>
                    <th style="width: 14%" title="А вот и я!" class="head-table">capacity</th>
                    <th style="width: 14%" title="А вот и я!" class="head-table no-wrap-in-table">channel Count</th>
                    <th style="width: 11%" title="А вот и я!" class="head-table">rank: Capacity</th>
                    <th style="width: 11%" title="А вот и я!" class="head-table">rank: Channel</th>
                    <th style="width: 11%" title="А вот и я!" class="head-table">rank: Age</th>
                </tr>
            </thead>
              <tbody>
               @foreach ($sites as $site)
               @php ($i++) 
                <tr>
                    <td style="text-align:left">
                    <a class="name-site-link" href = "/{{$site->id}}">
                       {{$site->name}}
                        </a>
                        </td>
                    <td class="no-wrap-in-table">{{$site->node->data->where('date', date('Y-m-d'))->first()->capacity}}</td>
                    <td>{{$site->node->data->where('date', date('Y-m-d'))->first()->channel_count}}</td>
                    <td>{{$site->node->data->where('date', date('Y-m-d'))->first()->rank_capacity}}</td>
                    <td>{{$site->node->data->where('date', date('Y-m-d'))->first()->rank_channel}}</td>
                    <td>{{$site->node->data->where('date', date('Y-m-d'))->first()->rank_age}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <hr class="hr-for-footer">
        <div class="footer">
        <div class="logo-footer-main">
            <a class="logo-footer-main" href="http://nodestat.std-829.ist.mospolytech.ru/#">
            nodestat
            </a>
        </div>
        <div class="">
            website with statistics of Lightning Network payment channels.
        </div>
        </div>
    </div>


</body>

</html>
