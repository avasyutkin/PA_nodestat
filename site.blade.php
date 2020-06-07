<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>{{$site->name}} — data</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('resources/css/style.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@100;300;400;500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

</head>
<body>
    <div class="container">
       <div class="container container-for-data-pers-page">
        <div class="header-pers-page">
             <a class="logo-footer-main" href="http://nodestat.std-829.ist.mospolytech.ru/">
                nodestat
            </a>
        </div>
            <div class="name-pers-page">
               <a href="//{{$site->link}}" class="name-pers-page" target="_blank">
                {{$site->name}}
                </a>
            </div>
            <div class="description-pers-page">
                {{$site->description}}
            </div>
            <div class="capacity-pers-page" title="today the turnover of node is {{$site->node->data->where('date', date('Y-m-d', strtotime('-1 days')))->first()->capacity}} BTC">
                capacity: {{$site->node->data->where('date', date('Y-m-d', strtotime("-1 days")))->first()->capacity}} BTC
            </div>
            <div class="channelcount-pers-page" title="today the number of channels associated with node is {{$site->node->data->where('date', date('Y-m-d', strtotime('-1 days')))->first()->channel_count}}">
                channel count: {{$site->node->data->where('date', date('Y-m-d', strtotime("-1 days")))->first()->channel_count}}
            </div>
            <div class="rankcapacity-pers-page" title="today node takes {{$site->node->data->where('date', date('Y-m-d', strtotime('-1 days')))->first()->rank_capacity}} place in the rating of 1ml.com by the current capacity value (from the maximum)">
                rank capacity: {{$site->node->data->where('date', date('Y-m-d', strtotime("-1 days")))->first()->rank_capacity}}
            </div>
            <div class="rankchannel-pers-page" title="today node takes {{$site->node->data->where('date', date('Y-m-d', strtotime('-1 days')))->first()->rank_channel}} place in the 1ml rating by current channel count value (from maximum)">
                rank channel: {{$site->node->data->where('date', date('Y-m-d', strtotime("-1 days")))->first()->rank_channel}}
            </div>
            <div class="rankage-pers-page" title="today a node takes {{$site->node->data->where('date', date('Y-m-d', strtotime('-1 days')))->first()->rank_age}} place in the node age list by 1ml (since its inception)">
                rank age: {{$site->node->data->where('date', date('Y-m-d', strtotime("-1 days")))->first()->rank_age}}
            </div>
            </div>
            <div>
            </div>
    </div>
    
    
<div class="container">
    <canvas id="myChart"> 
    </canvas>
</div>
    
<script>
    let myChart = document.getElementById('myChart').getContext('2d');
    
    let massPopChart = new Chart(myChart, {
        type: 'line', 
        data: {
            labels: ['{{$site->node->data->where("date", date("Y-m-d", strtotime("-3 days")))->first()->date}}',
                    '{{$site->node->data->where("date", date("Y-m-d", strtotime("-3 days")))->first()->date}}',
                    '{{$site->node->data->where("date", date("Y-m-d", strtotime("-3 days")))->first()->date}}',
                    '{{$site->node->data->where("date", date("Y-m-d", strtotime("-3 days")))->first()->date}}',
                    '{{$site->node->data->where("date", date("Y-m-d", strtotime("-3 days")))->first()->date}}',
                    '{{$site->node->data->where("date", date("Y-m-d", strtotime("-2 days")))->first()->date}}',
                    '{{$site->node->data->where("date", date("Y-m-d", strtotime("-1 days")))->first()->date}}'],
            datasets: [{
                label: 'capacity — week',
                data: [{{$site->node->data->where('date', date('Y-m-d', strtotime("-3 days")))->first()->capacity}},
                      {{$site->node->data->where('date', date('Y-m-d', strtotime("-3 days")))->first()->capacity}},
                      {{$site->node->data->where('date', date('Y-m-d', strtotime("-3 days")))->first()->capacity}},
                      {{$site->node->data->where('date', date('Y-m-d', strtotime("-3 days")))->first()->capacity}},
                      {{$site->node->data->where('date', date('Y-m-d', strtotime("-3 days")))->first()->capacity}},
                      {{$site->node->data->where('date', date('Y-m-d', strtotime("-2 days")))->first()->capacity}},
                      {{$site->node->data->where('date', date('Y-m-d', strtotime("-1 days")))->first()->capacity}}  ],
                backgroundColor: "#fff",
                borderColor: "#000",
                hoverBorderWidth: 2,
            }],
        },
        options: {}
    });
    
</script>
</body>

</html>