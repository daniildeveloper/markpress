@extends("dashboard.cms.layouts.app")

@section("title") Панель управления @endsection

@section('content')
<!-- top tiles -->
<div class="row tile_count">
    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
        <span class="count_top">
            <i class="fa fa-user">
            </i>
            Пользователей всего
        </span>
        <div class="count">
            {{$usersCount}}
        </div>
        <span class="count_bottom">
            @if($usersLastDayProcent > 0)
            <i class="green">
                +{{$usersLastDayProcent}}%
            </i>
            @else
            <i class="red">
                0%
            </i>
            @endif
            за сегодня
        </span>
    </div>
    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
        <span class="count_top">
            <i class="fa fa-line-chart">
            </i>
            Прогнозов всего
        </span>
        <div class="count">
            {{$predictionsCount}}
        </div>
        <span class="count_bottom">
            <i class="green">
                {{$predictionsSuccessfullCount}}
            </i>
            Успешных
        </span>
    </div>

    {{-- predictions by admin --}}
    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
        <span class="count_top">
            <i class="fa fa-bar-chart-o">
            </i>
            Прогнозы от админа
        </span>
        <div class="count green">
            {{$adminsPredictionsCount}}
        </div>
        <span class="count_bottom">
            <i class="green">
                <i class="fa fa-sort-asc">
                </i>
                {{$adminsPredictionsSuccessfull}}
            </i>
            Успешных
        </span>
    </div>

    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
        <span class="count_top">
            <i class="fa fa-bar-chart-o">
            </i>
            Платежи
        </span>
        <div class="count green">
            0 {{-- TODO: payments ready logic--}}
        </div>
        <span class="count_bottom">
            <i class="green">
                <i class="fa fa-sort-asc">
                </i>
                0
            </i>
            за сегодня
        </span>
    </div>
</div>
<!-- /top tiles -->
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="dashboard_graph">
            <div class="row x_title">
                <div class="col-md-6">
                    <h3>
                        Посещения и покупки
                    </h3>
                </div>
                <div class="col-md-6">
                    <div class="pull-right" id="reportrange" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc">
                        <i class="glyphicon glyphicon-calendar fa fa-calendar">
                        </i>
                        <span>
                            December 30, 2014 - January 28, 2015
                        </span>
                        <b class="caret">
                        </b>
                    </div>
                </div>
            </div>
            <div class="col-md-9 col-sm-9 col-xs-12">
                <div class="demo-placeholder" id="chart_plot_01">
                </div>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-12 bg-white">
                <div class="x_title">
                    <h2>
                        Легенда
                    </h2>
                    <div class="clearfix">
                    </div>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-6">
                    <div>
                        <p>
                            Посещения
                        </p>
                        <div class="">
                            <div class="progress progress_sm" style="width: 76%;">
                                <div class="progress-bar bg-green" data-transitiongoal="100" role="progressbar">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <p>
                            Покупки
                        </p>
                        <div class="">
                            <div class="progress progress_sm" style="width: 76%;">
                                <div class="progress-bar bg-green" data-transitiongoal="20" role="progressbar">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix">
            </div>
        </div>
    </div>
</div>
<br/>
<div class="row">
    <div class="col-md-4 col-sm-4 col-xs-12">
        <div class="x_panel tile fixed_height_320">
            <div class="x_title">
                <h2>
                    Версии приложений
                </h2>
                <div class="clearfix">
                </div>
            </div>
            <div class="x_content">
                <h4>
                    Версии приложений с девайсами
                </h4>
                <div class="widget_summary">
                    <div class="w_left w_25">
                        <span>
                            0.1.5.2
                        </span>
                    </div>
                    <div class="w_center w_55">
                        <div class="progress">
                            <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="60" class="progress-bar bg-green" role="progressbar" style="width: 66%;">
                                <span class="sr-only">
                                    60% Complete
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="w_right w_20">
                        <span>
                            123k
                        </span>
                    </div>
                    <div class="clearfix">
                    </div>
                </div>
                <div class="widget_summary">
                    <div class="w_left w_25">
                        <span>
                            0.1.5.3
                        </span>
                    </div>
                    <div class="w_center w_55">
                        <div class="progress">
                            <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="60" class="progress-bar bg-green" role="progressbar" style="width: 45%;">
                                <span class="sr-only">
                                    60% Complete
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="w_right w_20">
                        <span>
                            53k
                        </span>
                    </div>
                    <div class="clearfix">
                    </div>
                </div>
                <div class="widget_summary">
                    <div class="w_left w_25">
                        <span>
                            0.1.5.4
                        </span>
                    </div>
                    <div class="w_center w_55">
                        <div class="progress">
                            <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="60" class="progress-bar bg-green" role="progressbar" style="width: 25%;">
                                <span class="sr-only">
                                    60% Complete
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="w_right w_20">
                        <span>
                            23k
                        </span>
                    </div>
                    <div class="clearfix">
                    </div>
                </div>
                <div class="widget_summary">
                    <div class="w_left w_25">
                        <span>
                            0.1.5.5
                        </span>
                    </div>
                    <div class="w_center w_55">
                        <div class="progress">
                            <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="60" class="progress-bar bg-green" role="progressbar" style="width: 5%;">
                                <span class="sr-only">
                                    60% Complete
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="w_right w_20">
                        <span>
                            3k
                        </span>
                    </div>
                    <div class="clearfix">
                    </div>
                </div>
                <div class="widget_summary">
                    <div class="w_left w_25">
                        <span>
                            0.1.5.6
                        </span>
                    </div>
                    <div class="w_center w_55">
                        <div class="progress">
                            <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="60" class="progress-bar bg-green" role="progressbar" style="width: 2%;">
                                <span class="sr-only">
                                    60% Complete
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="w_right w_20">
                        <span>
                            1k
                        </span>
                    </div>
                    <div class="clearfix">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4 col-sm-4 col-xs-12">
        <div class="x_panel tile fixed_height_320 overflow_hidden">
            <div class="x_title">
                <h2>
                    Посещения
                </h2>
                <div class="clearfix">
                </div>
            </div>
            <div class="x_content">
                <table class="" style="width:100%">
                    <tr>
                        <th style="width:37%;">
                            <p>
                                Все
                            </p>
                        </th>
                        <th>
                            {{-- <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
                                <p class="">
                                    Device
                                </p>
                            </div>
                            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                                <p class="">
                                    Progress
                                </p>
                            </div> --}}
                        </th>
                    </tr>
                    <tr>
                        <td>
                            <canvas class="canvasDoughnut" height="140" style="margin: 15px 10px 10px 0" width="140">
                            </canvas>
                        </td>
                        <td>
                            <table class="tile_info">
                                <tr>
                                    <td>
                                        <p>
                                            <i class="fa fa-square blue">
                                            </i>
                                            IOS
                                        </p>
                                    </td>
                                    <td>
                                        30%
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>
                                            <i class="fa fa-square green">
                                            </i>
                                            Android
                                        </p>
                                    </td>
                                    <td>
                                        50%
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>
                                            <i class="fa fa-square purple">
                                            </i>
                                            Веб
                                        </p>
                                    </td>
                                    <td>
                                        20%
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    {{-- quick settings --}}
     <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Быстрая настройка <small></small></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <div class="form-horizontal form-label-left">

                    {{-- MIN for top --}}
                      <div class="form-group">
                        <label class="col-sm-3 control-label">Мин_топа</label>

                        <div class="col-sm-9">
                          <div class="input-group">
                            <input type="text" class="form-control">
                            <span class="input-group-btn">
                                              <button type="button" class="btn btn-primary">Сохранить</button>
                                          </span>
                          </div>
                        </div>
                      </div>
                    {{-- MIN for top end --}}

                    {{-- MIN for top live --}}
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Мин_лайф</label>

                        <div class="col-sm-9">
                          <div class="input-group">
                            <input type="text" class="form-control">
                            <span class="input-group-btn">
                                              <button type="button" class="btn btn-primary">Сохранить</button>
                                          </span>
                          </div>
                        </div>
                      </div>
                    {{-- min for top live end --}}

                    {{-- цена за пакет --}}
                    <div class="form-group">
                        <label class="col-sm-3 control-label">1 прогн.</label>

                        <div class="col-sm-9">
                          <div class="input-group">
                            <input type="text" class="form-control">
                            <span class="input-group-btn">
                                              <button type="button" class="btn btn-primary">Сохранить</button>
                                          </span>
                          </div>
                        </div>
                      </div>
                      {{-- конец цены за пакет --}}



                      <div class="divider-dashed"></div>

                      <a href="#" class="btn btn-success">Отчет за 7 дней</a>
                    </div >
                  </div>
                </div>
              </div>
    {{-- end quick settings --}}

</div>
<div class="row">
    <div class="col-md-4 col-sm-4 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>
                    Последние новости
                    <small>
                        Демо
                    </small>
                </h2>
                <div class="clearfix">
                </div>
            </div>
            <div class="x_content">
                <div class="dashboard-widget-content">
                    <ul class="list-unstyled timeline widget">
                        <li>
                            <div class="block">
                                <div class="block_content">
                                    <h2 class="title">
                                        <a>
                                            Who Needs Sundance When You’ve Got Crowdfunding?
                                        </a>
                                    </h2>
                                    <div class="byline">
                                        <span>
                                            13 hours ago
                                        </span>
                                        by
                                        <a>
                                            Jane Smith
                                        </a>
                                    </div>
                                    <p class="excerpt">
                                        Film festivals used to be do-or-die moments for movie makers. They were where you met the producers that could fund your project, and if the buyers liked your flick, they’d pay to Fast-forward and…
                                        <a>
                                            Read More
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="block">
                                <div class="block_content">
                                    <h2 class="title">
                                        <a>
                                            Who Needs Sundance When You’ve Got Crowdfunding?
                                        </a>
                                    </h2>
                                    <div class="byline">
                                        <span>
                                            13 hours ago
                                        </span>
                                        by
                                        <a>
                                            Jane Smith
                                        </a>
                                    </div>
                                    <p class="excerpt">
                                        Film festivals used to be do-or-die moments for movie makers. They were where you met the producers that could fund your project, and if the buyers liked your flick, they’d pay to Fast-forward and…
                                        <a>
                                            Read More
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="block">
                                <div class="block_content">
                                    <h2 class="title">
                                        <a>
                                            Who Needs Sundance When You’ve Got Crowdfunding?
                                        </a>
                                    </h2>
                                    <div class="byline">
                                        <span>
                                            13 hours ago
                                        </span>
                                        by
                                        <a>
                                            Jane Smith
                                        </a>
                                    </div>
                                    <p class="excerpt">
                                        Film festivals used to be do-or-die moments for movie makers. They were where you met the producers that could fund your project, and if the buyers liked your flick, they’d pay to Fast-forward and…
                                        <a>
                                            Read More
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="block">
                                <div class="block_content">
                                    <h2 class="title">
                                        <a>
                                            Who Needs Sundance When You’ve Got Crowdfunding?
                                        </a>
                                    </h2>
                                    <div class="byline">
                                        <span>
                                            13 hours ago
                                        </span>
                                        by
                                        <a>
                                            Jane Smith
                                        </a>
                                    </div>
                                    <p class="excerpt">
                                        Film festivals used to be do-or-die moments for movie makers. They were where you met the producers that could fund your project, and if the buyers liked your flick, they’d pay to Fast-forward and…
                                        <a>
                                            Read More
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-8 col-sm-8 col-xs-12">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>
                            Посетители по локациям
                            <small>
                                гео-локации
                            </small>
                        </h2>
                        <div class="clearfix">
                        </div>
                    </div>
                    <div class="x_content">
                        <div class="dashboard-widget-content">
                            <div class="col-md-4 hidden-small">
                                <h2 class="line_30">
                                    125.7k Посещений из 13 стран
                                </h2>
                                <table class="countries_list">
                                    <tbody>
                                        <tr>
                                            <td>
                                                United States
                                            </td>
                                            <td class="fs15 fw700 text-right">
                                                33%
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                France
                                            </td>
                                            <td class="fs15 fw700 text-right">
                                                27%
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Germany
                                            </td>
                                            <td class="fs15 fw700 text-right">
                                                16%
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Spain
                                            </td>
                                            <td class="fs15 fw700 text-right">
                                                11%
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Britain
                                            </td>
                                            <td class="fs15 fw700 text-right">
                                                10%
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-md-8 col-sm-12 col-xs-12" id="world-map-gdp" style="height:230px;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Start to do list -->
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>
                            To Do List
                            <small>
                                Таски из сообщений
                            </small>
                        </h2>
                        <div class="clearfix">
                        </div>
                    </div>
                    <div class="x_content">
                        <div class="">
                            <ul class="to_do">
                                <li>
                                    <p>
                                        <input class="flat" type="checkbox">
                                            Schedule meeting with new client
                                        </input>
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        <input class="flat" type="checkbox">
                                            Create email address for new intern
                                        </input>
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        <input class="flat" type="checkbox">
                                            Have IT fix the network printer
                                        </input>
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        <input class="flat" type="checkbox">
                                            Copy backups to offsite location
                                        </input>
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        <input class="flat" type="checkbox">
                                            Food truck fixie locavors mcsweeney
                                        </input>
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        <input class="flat" type="checkbox">
                                            Food truck fixie locavors mcsweeney
                                        </input>
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        <input class="flat" type="checkbox">
                                            Create email address for new intern
                                        </input>
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        <input class="flat" type="checkbox">
                                            Have IT fix the network printer
                                        </input>
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        <input class="flat" type="checkbox">
                                            Copy backups to offsite location
                                        </input>
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End to do list -->
        </div>
    </div>
</div>
@endsection

@section("scripts")
    <script>
        function init_chart_doughnut(){
                
        if( typeof (Chart) === 'undefined'){ return; }
        
        console.log('init_chart_doughnut');
     
        if ($('.canvasDoughnut').length){
            
        var chart_doughnut_settings = {
                type: 'doughnut',
                tooltipFillColor: "rgba(51, 51, 51, 0.55)",
                data: {
                    labels: [
                        "Web",
                        "Android",
                        "IOS"
                    ],
                    datasets: [{
                        data: [ 20, 50, 30],
                        backgroundColor: [
                            "#9B59B6",
                            "#26B99A",
                            "#3498DB"
                        ],
                        hoverBackgroundColor: [
                            "#B370CF",
                        ]
                    }]
                },
                options: { 
                    legend: false, 
                    responsive: false 
                }
            }
        
            $('.canvasDoughnut').each(function(){
                
                var chart_element = $(this);
                var chart_doughnut = new Chart( chart_element, chart_doughnut_settings);
                
            });         
        
        }  
       
    }
    </script>
@endsection