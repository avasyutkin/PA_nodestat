<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Nodestat</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

@php ($i = 0)

<body style="background: #212529">
    <div class="container">
        <div class="header" style="height: 70px; font-size: 40px; font-weight: 600; color: #fff">
            <div class="logo">
                NodeStat
            </div>
        </div>
        <table class="table table-dark mt-5">
            <thead>
                <tr style="font-size: 16px;">
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
                    <th>{{$site->name}}</th>
                    <th>{{$site->category}}</th>
                    <th>{{$site->node->data->where('date', date('Y-m-d'))->first()->capacity}}</th>
                    <th>{{$site->node->data->where('date', date('Y-m-d'))->first()->channel_count}}</th>
                    <th>{{$site->node->data->where('date', date('Y-m-d'))->first()->rank_capacity}}</th>
                    <th>{{$site->node->data->where('date', date('Y-m-d'))->first()->rank_channel}}</th>
                    <th>{{$site->node->data->where('date', date('Y-m-d'))->first()->rank_age}}</th>
                    
                </tr>
                @endif
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
