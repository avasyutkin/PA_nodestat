<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>{{$site->name}} — data</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('resources/css/style.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@100;300;400;500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
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
            <div class="capacity-pers-page">
                capacity: {{$site->node->data->where('date', date('Y-m-d'))->first()->capacity}}
            </div>
            <div class="channelcount-pers-page">
                channel count: {{$site->node->data->where('date', date('Y-m-d'))->first()->channel_count}}
            </div>
            <div class="rankcapacity-pers-page">
                rank capacity: {{$site->node->data->where('date', date('Y-m-d'))->first()->rank_capacity}}
            </div>
            <div class="rankchannel-pers-page">
                rank channel: {{$site->node->data->where('date', date('Y-m-d'))->first()->rank_channel}}
            </div>
            <div class="rankage-pers-page">
                rank age: {{$site->node->data->where('date', date('Y-m-d'))->first()->rank_age}}
            </div>
            </div>
            <div>
            </div>
    </div>

</body>

</html>