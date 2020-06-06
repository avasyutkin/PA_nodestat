<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Nodestat</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('resources/css/style.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@100;300;400;500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">


</head>

@php ($i = 0)

<body style="background: #fff">
   
   
   
   
   
   <div class="container block-for-nodestat-main">
              
   </div>
   
   
   
   
   
   
   
    <div class="container">
        <div class="header">
            <div class="logo">
                NodeStat
            </div>
        </div>
        <table class="table table-hover mt-5" style="text-align:center">
            <thead>
               <hr class="hr-visible0">
                <tr style="font-size: 19px;">
                    <th style="width: 1%" class="head-table">№</th>
                    <th style="width: 12%; text-align:left" class="head-table">Site name</th>
                    <th style="width: 14%" class="head-table">Capacity</th>
                    <th style="width: 14%" class="head-table no-wrap-in-table">Channel Count</th>
                    <th style="width: 11%" class="head-table">Rank: Capacity</th>
                    <th style="width: 11%" class="head-table">Rank: Channel</th>
                    <th style="width: 11%" class="head-table">Rank: Age</th>
                </tr>
            </thead>
              <tbody>
               @foreach ($sites as $site)
               @php ($i++) 
                <tr>
                    <td scope="row">{{$i}}</td>
                    <td style="text-align:left">
                    <a href = "/{{$site->id}}">
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
    </div>
</body>

</html>
