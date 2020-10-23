@extends('layout.index')

@section('content')
<div class="content-wrapper">
   <div class="content-header row">
       <div class="content-header-left col-md-9 col-12 mb-2">
           <div class="row breadcrumbs-top">
               <div class="col-12">
                   <h2 class="content-header-title float-left mb-0">Statistics Cards</h2>
                   <div class="breadcrumb-wrapper col-12">
                       <ol class="breadcrumb">
                           <li class="breadcrumb-item"><a href="index.html">Home</a>
                           </li>
                           <li class="breadcrumb-item"><a href="#">Cards</a>
                           </li>
                           <li class="breadcrumb-item active">Statistics Cards
                           </li>
                       </ol>
                   </div>
               </div>
           </div>
       </div>
       <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
           <div class="form-group breadcrum-right">
               <div class="dropdown">
                   <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle waves-effect waves-light" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-settings"></i></button>
                   <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#">Chat</a><a class="dropdown-item" href="#">Email</a><a class="dropdown-item" href="#">Calendar</a></div>
               </div>
           </div>
       </div>
   </div>
   <div class="content-body">
       <!-- Statistics card section start -->
       <section id="statistics-card">
           <div class="row">
               <div class="col-xl-2 col-md-4 col-sm-6">
                   <div class="card text-center">
                       <div class="card-content">
                           <div class="card-body">
                               <div class="avatar bg-rgba-info p-50 m-0 mb-1">
                                   <div class="avatar-content">
                                       <i class="feather icon-eye text-info font-medium-5"></i>
                                   </div>
                               </div>
                               <h2 class="text-bold-700">36.9k</h2>
                               <p class="mb-0 line-ellipsis">Views</p>
                           </div>
                       </div>
                   </div>
               </div>
               <div class="col-xl-2 col-md-4 col-sm-6">
                   <div class="card text-center">
                       <div class="card-content">
                           <div class="card-body">
                               <div class="avatar bg-rgba-warning p-50 m-0 mb-1">
                                   <div class="avatar-content">
                                       <i class="feather icon-message-square text-warning font-medium-5"></i>
                                   </div>
                               </div>
                               <h2 class="text-bold-700">12k</h2>
                               <p class="mb-0 line-ellipsis">Comments</p>
                           </div>
                       </div>
                   </div>
               </div>
               <div class="col-xl-2 col-md-4 col-sm-6">
                   <div class="card text-center">
                       <div class="card-content">
                           <div class="card-body">
                               <div class="avatar bg-rgba-danger p-50 m-0 mb-1">
                                   <div class="avatar-content">
                                       <i class="feather icon-shopping-bag text-danger font-medium-5"></i>
                                   </div>
                               </div>
                               <h2 class="text-bold-700">97.8k</h2>
                               <p class="mb-0 line-ellipsis">Orders</p>
                           </div>
                       </div>
                   </div>
               </div>
               <div class="col-xl-2 col-md-4 col-sm-6">
                   <div class="card text-center">
                       <div class="card-content">
                           <div class="card-body">
                               <div class="avatar bg-rgba-primary p-50 m-0 mb-1">
                                   <div class="avatar-content">
                                       <i class="feather icon-heart text-primary font-medium-5"></i>
                                   </div>
                               </div>
                               <h2 class="text-bold-700">26.8</h2>
                               <p class="mb-0 line-ellipsis">Bookmarks</p>
                           </div>
                       </div>
                   </div>
               </div>
               <div class="col-xl-2 col-md-4 col-sm-6">
                   <div class="card text-center">
                       <div class="card-content">
                           <div class="card-body">
                               <div class="avatar bg-rgba-success p-50 m-0 mb-1">
                                   <div class="avatar-content">
                                       <i class="feather icon-award text-success font-medium-5"></i>
                                   </div>
                               </div>
                               <h2 class="text-bold-700">689</h2>
                               <p class="mb-0 line-ellipsis">Reviews</p>
                           </div>
                       </div>
                   </div>
               </div>
               <div class="col-xl-2 col-md-4 col-sm-6">
                   <div class="card text-center">
                       <div class="card-content">
                           <div class="card-body">
                               <div class="avatar bg-rgba-danger p-50 m-0 mb-1">
                                   <div class="avatar-content">
                                       <i class="feather icon-truck text-danger font-medium-5"></i>
                                   </div>
                               </div>
                               <h2 class="text-bold-700">2.1k</h2>
                               <p class="mb-0 line-ellipsis">Returns</p>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
           <div class="row">
               <div class="col-lg-3 col-sm-6 col-12">
                   <div class="card">
                       <div class="card-header d-flex align-items-start pb-0">
                           <div>
                               <h2 class="text-bold-700 mb-0">86%</h2>
                               <p>CPU Usage</p>
                           </div>
                           <div class="avatar bg-rgba-primary p-50 m-0">
                               <div class="avatar-content">
                                   <i class="feather icon-cpu text-primary font-medium-5"></i>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
               <div class="col-lg-3 col-sm-6 col-12">
                   <div class="card">
                       <div class="card-header d-flex align-items-start pb-0">
                           <div>
                               <h2 class="text-bold-700 mb-0">1.2gb</h2>
                               <p>Memory Usage</p>
                           </div>
                           <div class="avatar bg-rgba-success p-50 m-0">
                               <div class="avatar-content">
                                   <i class="feather icon-server text-success font-medium-5"></i>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
               <div class="col-lg-3 col-sm-6 col-12">
                   <div class="card">
                       <div class="card-header d-flex align-items-start pb-0">
                           <div>
                               <h2 class="text-bold-700 mb-0">0.1%</h2>
                               <p>Downtime Ratio</p>
                           </div>
                           <div class="avatar bg-rgba-danger p-50 m-0">
                               <div class="avatar-content">
                                   <i class="feather icon-activity text-danger font-medium-5"></i>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
               <div class="col-lg-3 col-sm-6 col-12">
                   <div class="card">
                       <div class="card-header d-flex align-items-start pb-0">
                           <div>
                               <h2 class="text-bold-700 mb-0">13</h2>
                               <p>Issues Found</p>
                           </div>
                           <div class="avatar bg-rgba-warning p-50 m-0">
                               <div class="avatar-content">
                                   <i class="feather icon-alert-octagon text-warning font-medium-5"></i>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
           <div class="row">
               <div class="col-lg-3 col-sm-6 col-12">
                   <div class="card">
                       <div class="card-header d-flex flex-column align-items-start pb-0">
                           <div class="avatar bg-rgba-primary p-50 m-0">
                               <div class="avatar-content">
                                   <i class="feather icon-users text-primary font-medium-5"></i>
                               </div>
                           </div>
                           <h2 class="text-bold-700 mt-1">92.6k</h2>
                           <p class="mb-0">Subscribers Gained</p>
                       </div>
                       <div class="card-content" style="position: relative;">
                           <div id="line-area-chart-1" style="min-height: 100px;"><div id="apexchartsdm2ml582" class="apexcharts-canvas apexchartsdm2ml582 light" style="width: 237px; height: 100px;"><svg id="SvgjsSvg1006" width="237" height="100" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1008" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs1007"><clipPath id="gridRectMaskdm2ml582"><rect id="SvgjsRect1012" width="239.5" height="102.5" x="-1.25" y="-1.25" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><clipPath id="gridRectMarkerMaskdm2ml582"><rect id="SvgjsRect1013" width="239" height="102" x="-1" y="-1" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><linearGradient id="SvgjsLinearGradient1019" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop1020" stop-opacity="0.7" stop-color="rgba(115,103,240,0.7)" offset="0"></stop><stop id="SvgjsStop1021" stop-opacity="0.5" stop-color="rgba(241,240,254,0.5)" offset="0.8"></stop><stop id="SvgjsStop1022" stop-opacity="0.5" stop-color="rgba(241,240,254,0.5)" offset="1"></stop></linearGradient></defs><line id="SvgjsLine1011" x1="0" y1="0" x2="0" y2="100" stroke="#b6b6b6" stroke-dasharray="3" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="100" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><g id="SvgjsG1025" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1026" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="SvgjsG1029" class="apexcharts-grid"><line id="SvgjsLine1031" x1="0" y1="100" x2="237" y2="100" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine1030" x1="0" y1="1" x2="0" y2="100" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG1015" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG1016" class="apexcharts-series" seriesName="Subscribers" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath1023" d="M0 100L0 77.77777777777777C13.825 77.77777777777777 25.675 51.111111111111114 39.5 51.111111111111114C53.325 51.111111111111114 65.175 60 79 60C92.825 60 104.675 24.444444444444443 118.5 24.444444444444443C132.325 24.444444444444443 144.175 55.55555555555556 158 55.55555555555556C171.825 55.55555555555556 183.675 6.666666666666657 197.5 6.666666666666657C211.325 6.666666666666657 223.175 17.777777777777786 237 17.777777777777786C237 17.777777777777786 237 17.777777777777786 237 100M237 17.777777777777786C237 17.777777777777786 237 17.777777777777786 237 17.777777777777786 " fill="url(#SvgjsLinearGradient1019)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskdm2ml582)" pathTo="M 0 100L 0 77.77777777777777C 13.825 77.77777777777777 25.675 51.111111111111114 39.5 51.111111111111114C 53.325 51.111111111111114 65.175 60 79 60C 92.825 60 104.675 24.444444444444443 118.5 24.444444444444443C 132.325 24.444444444444443 144.175 55.55555555555556 158 55.55555555555556C 171.825 55.55555555555556 183.675 6.666666666666657 197.5 6.666666666666657C 211.325 6.666666666666657 223.175 17.777777777777786 237 17.777777777777786C 237 17.777777777777786 237 17.777777777777786 237 100M 237 17.777777777777786z" pathFrom="M -1 140L -1 140L 39.5 140L 79 140L 118.5 140L 158 140L 197.5 140L 237 140"></path><path id="SvgjsPath1024" d="M0 77.77777777777777C13.825 77.77777777777777 25.675 51.111111111111114 39.5 51.111111111111114C53.325 51.111111111111114 65.175 60 79 60C92.825 60 104.675 24.444444444444443 118.5 24.444444444444443C132.325 24.444444444444443 144.175 55.55555555555556 158 55.55555555555556C171.825 55.55555555555556 183.675 6.666666666666657 197.5 6.666666666666657C211.325 6.666666666666657 223.175 17.777777777777786 237 17.777777777777786C237 17.777777777777786 237 17.777777777777786 237 17.777777777777786 " fill="none" fill-opacity="1" stroke="#7367f0" stroke-opacity="1" stroke-linecap="butt" stroke-width="2.5" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskdm2ml582)" pathTo="M 0 77.77777777777777C 13.825 77.77777777777777 25.675 51.111111111111114 39.5 51.111111111111114C 53.325 51.111111111111114 65.175 60 79 60C 92.825 60 104.675 24.444444444444443 118.5 24.444444444444443C 132.325 24.444444444444443 144.175 55.55555555555556 158 55.55555555555556C 171.825 55.55555555555556 183.675 6.666666666666657 197.5 6.666666666666657C 211.325 6.666666666666657 223.175 17.777777777777786 237 17.777777777777786" pathFrom="M -1 140L -1 140L 39.5 140L 79 140L 118.5 140L 158 140L 197.5 140L 237 140"></path><g id="SvgjsG1017" class="apexcharts-series-markers-wrap"><g class="apexcharts-series-markers"><circle id="SvgjsCircle1037" r="0" cx="0" cy="0" class="apexcharts-marker wwwfjb1uo no-pointer-events" stroke="#ffffff" fill="#7367f0" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle></g></g><g id="SvgjsG1018" class="apexcharts-datalabels"></g></g></g><line id="SvgjsLine1032" x1="0" y1="0" x2="237" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1033" x1="0" y1="0" x2="237" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1034" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1035" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1036" class="apexcharts-point-annotations"></g></g><rect id="SvgjsRect1010" width="0" height="0" x="0" y="0" rx="0" ry="0" fill="#fefefe" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect><g id="SvgjsG1027" class="apexcharts-yaxis" rel="0" transform="translate(-21, 0)"><g id="SvgjsG1028" class="apexcharts-yaxis-texts-g"></g></g></svg><div class="apexcharts-legend"></div><div class="apexcharts-tooltip light"><div class="apexcharts-tooltip-series-group"><span class="apexcharts-tooltip-marker" style="background-color: rgb(115, 103, 240);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div></div></div>
                       <div class="resize-triggers"><div class="expand-trigger"><div style="width: 238px; height: 101px;"></div></div><div class="contract-trigger"></div></div></div>
                   </div>
               </div>
               <div class="col-lg-3 col-sm-6 col-12">
                   <div class="card">
                       <div class="card-header d-flex flex-column align-items-start pb-0">
                           <div class="avatar bg-rgba-success p-50 m-0">
                               <div class="avatar-content">
                                   <i class="feather icon-credit-card text-success font-medium-5"></i>
                               </div>
                           </div>
                           <h2 class="text-bold-700 mt-1">97.5k</h2>
                           <p class="mb-0">Revenue Generated</p>
                       </div>
                       <div class="card-content" style="position: relative;">
                           <div id="line-area-chart-2" style="min-height: 100px;"><div id="apexchartszmbj5ubk" class="apexcharts-canvas apexchartszmbj5ubk light" style="width: 237px; height: 100px;"><svg id="SvgjsSvg1038" width="237" height="100" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1040" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs1039"><clipPath id="gridRectMaskzmbj5ubk"><rect id="SvgjsRect1044" width="239.5" height="102.5" x="-1.25" y="-1.25" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><clipPath id="gridRectMarkerMaskzmbj5ubk"><rect id="SvgjsRect1045" width="239" height="102" x="-1" y="-1" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><linearGradient id="SvgjsLinearGradient1051" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop1052" stop-opacity="0.7" stop-color="rgba(40,199,111,0.7)" offset="0"></stop><stop id="SvgjsStop1053" stop-opacity="0.5" stop-color="rgba(234,249,241,0.5)" offset="0.8"></stop><stop id="SvgjsStop1054" stop-opacity="0.5" stop-color="rgba(234,249,241,0.5)" offset="1"></stop></linearGradient></defs><line id="SvgjsLine1043" x1="0" y1="0" x2="0" y2="100" stroke="#b6b6b6" stroke-dasharray="3" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="100" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><g id="SvgjsG1057" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1058" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="SvgjsG1061" class="apexcharts-grid"><line id="SvgjsLine1063" x1="0" y1="100" x2="237" y2="100" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine1062" x1="0" y1="1" x2="0" y2="100" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG1047" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG1048" class="apexcharts-series" seriesName="Revenue" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath1055" d="M0 100L0 60C13.825 60 25.675 90 39.5 90C53.325 90 65.175 40 79 40C92.825 40 104.675 80 118.5 80C132.325 80 144.175 60 158 60C171.825 60 183.675 80 197.5 80C211.325 80 223.175 20 237 20C237 20 237 20 237 100M237 20C237 20 237 20 237 20 " fill="url(#SvgjsLinearGradient1051)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskzmbj5ubk)" pathTo="M 0 100L 0 60C 13.825 60 25.675 90 39.5 90C 53.325 90 65.175 40 79 40C 92.825 40 104.675 80 118.5 80C 132.325 80 144.175 60 158 60C 171.825 60 183.675 80 197.5 80C 211.325 80 223.175 20 237 20C 237 20 237 20 237 100M 237 20z" pathFrom="M -1 200L -1 200L 39.5 200L 79 200L 118.5 200L 158 200L 197.5 200L 237 200"></path><path id="SvgjsPath1056" d="M0 60C13.825 60 25.675 90 39.5 90C53.325 90 65.175 40 79 40C92.825 40 104.675 80 118.5 80C132.325 80 144.175 60 158 60C171.825 60 183.675 80 197.5 80C211.325 80 223.175 20 237 20C237 20 237 20 237 20 " fill="none" fill-opacity="1" stroke="#28c76f" stroke-opacity="1" stroke-linecap="butt" stroke-width="2.5" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskzmbj5ubk)" pathTo="M 0 60C 13.825 60 25.675 90 39.5 90C 53.325 90 65.175 40 79 40C 92.825 40 104.675 80 118.5 80C 132.325 80 144.175 60 158 60C 171.825 60 183.675 80 197.5 80C 211.325 80 223.175 20 237 20" pathFrom="M -1 200L -1 200L 39.5 200L 79 200L 118.5 200L 158 200L 197.5 200L 237 200"></path><g id="SvgjsG1049" class="apexcharts-series-markers-wrap"><g class="apexcharts-series-markers"><circle id="SvgjsCircle1069" r="0" cx="0" cy="0" class="apexcharts-marker wavh6mpoj no-pointer-events" stroke="#ffffff" fill="#28c76f" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle></g></g><g id="SvgjsG1050" class="apexcharts-datalabels"></g></g></g><line id="SvgjsLine1064" x1="0" y1="0" x2="237" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1065" x1="0" y1="0" x2="237" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1066" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1067" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1068" class="apexcharts-point-annotations"></g></g><rect id="SvgjsRect1042" width="0" height="0" x="0" y="0" rx="0" ry="0" fill="#fefefe" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect><g id="SvgjsG1059" class="apexcharts-yaxis" rel="0" transform="translate(-21, 0)"><g id="SvgjsG1060" class="apexcharts-yaxis-texts-g"></g></g></svg><div class="apexcharts-legend"></div><div class="apexcharts-tooltip light"><div class="apexcharts-tooltip-series-group"><span class="apexcharts-tooltip-marker" style="background-color: rgb(40, 199, 111);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div></div></div>
                       <div class="resize-triggers"><div class="expand-trigger"><div style="width: 238px; height: 101px;"></div></div><div class="contract-trigger"></div></div></div>
                   </div>
               </div>
               <div class="col-lg-3 col-sm-6 col-12">
                   <div class="card">
                       <div class="card-header d-flex flex-column align-items-start pb-0">
                           <div class="avatar bg-rgba-danger p-50 m-0">
                               <div class="avatar-content">
                                   <i class="feather icon-shopping-cart text-danger font-medium-5"></i>
                               </div>
                           </div>
                           <h2 class="text-bold-700 mt-1">36%</h2>
                           <p class="mb-0">Quarterly Sales</p>
                       </div>
                       <div class="card-content" style="position: relative;">
                           <div id="line-area-chart-3" style="min-height: 100px;"><div id="apexchartss0rb34x9" class="apexcharts-canvas apexchartss0rb34x9 light" style="width: 237px; height: 100px;"><svg id="SvgjsSvg1070" width="237" height="100" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1072" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs1071"><clipPath id="gridRectMasks0rb34x9"><rect id="SvgjsRect1076" width="239.5" height="102.5" x="-1.25" y="-1.25" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><clipPath id="gridRectMarkerMasks0rb34x9"><rect id="SvgjsRect1077" width="239" height="102" x="-1" y="-1" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><linearGradient id="SvgjsLinearGradient1083" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop1084" stop-opacity="0.7" stop-color="rgba(234,84,85,0.7)" offset="0"></stop><stop id="SvgjsStop1085" stop-opacity="0.5" stop-color="rgba(253,238,238,0.5)" offset="0.8"></stop><stop id="SvgjsStop1086" stop-opacity="0.5" stop-color="rgba(253,238,238,0.5)" offset="1"></stop></linearGradient></defs><line id="SvgjsLine1075" x1="0" y1="0" x2="0" y2="100" stroke="#b6b6b6" stroke-dasharray="3" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="100" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><g id="SvgjsG1089" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1090" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="SvgjsG1093" class="apexcharts-grid"><line id="SvgjsLine1095" x1="0" y1="100" x2="237" y2="100" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine1094" x1="0" y1="1" x2="0" y2="100" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG1079" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG1080" class="apexcharts-series" seriesName="Sales" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath1087" d="M0 100L0 53.33333333333333C16.59 53.33333333333333 30.81 20 47.4 20C63.989999999999995 20 78.21 73.33333333333333 94.8 73.33333333333333C111.39 73.33333333333333 125.61000000000001 40 142.20000000000002 40C158.79000000000002 40 173.01 100 189.6 100C206.19 100 220.41 13.333333333333329 237 13.333333333333329C237 13.333333333333329 237 13.333333333333329 237 100M237 13.333333333333329C237 13.333333333333329 237 13.333333333333329 237 13.333333333333329 " fill="url(#SvgjsLinearGradient1083)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMasks0rb34x9)" pathTo="M 0 100L 0 53.33333333333333C 16.59 53.33333333333333 30.81 20 47.4 20C 63.989999999999995 20 78.21 73.33333333333333 94.8 73.33333333333333C 111.39 73.33333333333333 125.61000000000001 40 142.20000000000002 40C 158.79000000000002 40 173.01 100 189.6 100C 206.19 100 220.41 13.333333333333329 237 13.333333333333329C 237 13.333333333333329 237 13.333333333333329 237 100M 237 13.333333333333329z" pathFrom="M -1 120L -1 120L 47.4 120L 94.8 120L 142.20000000000002 120L 189.6 120L 237 120"></path><path id="SvgjsPath1088" d="M0 53.33333333333333C16.59 53.33333333333333 30.81 20 47.4 20C63.989999999999995 20 78.21 73.33333333333333 94.8 73.33333333333333C111.39 73.33333333333333 125.61000000000001 40 142.20000000000002 40C158.79000000000002 40 173.01 100 189.6 100C206.19 100 220.41 13.333333333333329 237 13.333333333333329C237 13.333333333333329 237 13.333333333333329 237 13.333333333333329 " fill="none" fill-opacity="1" stroke="#ea5455" stroke-opacity="1" stroke-linecap="butt" stroke-width="2.5" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMasks0rb34x9)" pathTo="M 0 53.33333333333333C 16.59 53.33333333333333 30.81 20 47.4 20C 63.989999999999995 20 78.21 73.33333333333333 94.8 73.33333333333333C 111.39 73.33333333333333 125.61000000000001 40 142.20000000000002 40C 158.79000000000002 40 173.01 100 189.6 100C 206.19 100 220.41 13.333333333333329 237 13.333333333333329" pathFrom="M -1 120L -1 120L 47.4 120L 94.8 120L 142.20000000000002 120L 189.6 120L 237 120"></path><g id="SvgjsG1081" class="apexcharts-series-markers-wrap"><g class="apexcharts-series-markers"><circle id="SvgjsCircle1101" r="0" cx="0" cy="0" class="apexcharts-marker w1cm8bct9 no-pointer-events" stroke="#ffffff" fill="#ea5455" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle></g></g><g id="SvgjsG1082" class="apexcharts-datalabels"></g></g></g><line id="SvgjsLine1096" x1="0" y1="0" x2="237" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1097" x1="0" y1="0" x2="237" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1098" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1099" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1100" class="apexcharts-point-annotations"></g></g><rect id="SvgjsRect1074" width="0" height="0" x="0" y="0" rx="0" ry="0" fill="#fefefe" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect><g id="SvgjsG1091" class="apexcharts-yaxis" rel="0" transform="translate(-21, 0)"><g id="SvgjsG1092" class="apexcharts-yaxis-texts-g"></g></g></svg><div class="apexcharts-legend"></div><div class="apexcharts-tooltip light"><div class="apexcharts-tooltip-series-group"><span class="apexcharts-tooltip-marker" style="background-color: rgb(234, 84, 85);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div></div></div>
                       <div class="resize-triggers"><div class="expand-trigger"><div style="width: 238px; height: 101px;"></div></div><div class="contract-trigger"></div></div></div>
                   </div>
               </div>
               <div class="col-lg-3 col-sm-6 col-12">
                   <div class="card">
                       <div class="card-header d-flex flex-column align-items-start pb-0">
                           <div class="avatar bg-rgba-warning p-50 m-0">
                               <div class="avatar-content">
                                   <i class="feather icon-package text-warning font-medium-5"></i>
                               </div>
                           </div>
                           <h2 class="text-bold-700 mt-1">97.5K</h2>
                           <p class="mb-0">Orders Received</p>
                       </div>
                       <div class="card-content" style="position: relative;">
                           <div id="line-area-chart-4" style="min-height: 100px;"><div id="apexchartsecln529u" class="apexcharts-canvas apexchartsecln529u light" style="width: 237px; height: 100px;"><svg id="SvgjsSvg1102" width="237" height="100" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1104" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs1103"><clipPath id="gridRectMaskecln529u"><rect id="SvgjsRect1108" width="239.5" height="102.5" x="-1.25" y="-1.25" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><clipPath id="gridRectMarkerMaskecln529u"><rect id="SvgjsRect1109" width="239" height="102" x="-1" y="-1" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><linearGradient id="SvgjsLinearGradient1115" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop1116" stop-opacity="0.7" stop-color="rgba(255,159,67,0.7)" offset="0"></stop><stop id="SvgjsStop1117" stop-opacity="0.5" stop-color="rgba(255,245,236,0.5)" offset="0.8"></stop><stop id="SvgjsStop1118" stop-opacity="0.5" stop-color="rgba(255,245,236,0.5)" offset="1"></stop></linearGradient></defs><line id="SvgjsLine1107" x1="0" y1="0" x2="0" y2="100" stroke="#b6b6b6" stroke-dasharray="3" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="100" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><g id="SvgjsG1121" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1122" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="SvgjsG1125" class="apexcharts-grid"><line id="SvgjsLine1127" x1="0" y1="100" x2="237" y2="100" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine1126" x1="0" y1="1" x2="0" y2="100" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG1111" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG1112" class="apexcharts-series" seriesName="Orders" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath1119" d="M0 100L0 60C13.825 60 25.675 10 39.5 10C53.325 10 65.175 80 79 80C92.825 80 104.675 10 118.5 10C132.325 10 144.175 90 158 90C171.825 90 183.675 40 197.5 40C211.325 40 223.175 80 237 80C237 80 237 80 237 100M237 80C237 80 237 80 237 80 " fill="url(#SvgjsLinearGradient1115)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskecln529u)" pathTo="M 0 100L 0 60C 13.825 60 25.675 10 39.5 10C 53.325 10 65.175 80 79 80C 92.825 80 104.675 10 118.5 10C 132.325 10 144.175 90 158 90C 171.825 90 183.675 40 197.5 40C 211.325 40 223.175 80 237 80C 237 80 237 80 237 100M 237 80z" pathFrom="M -1 160L -1 160L 39.5 160L 79 160L 118.5 160L 158 160L 197.5 160L 237 160"></path><path id="SvgjsPath1120" d="M0 60C13.825 60 25.675 10 39.5 10C53.325 10 65.175 80 79 80C92.825 80 104.675 10 118.5 10C132.325 10 144.175 90 158 90C171.825 90 183.675 40 197.5 40C211.325 40 223.175 80 237 80C237 80 237 80 237 80 " fill="none" fill-opacity="1" stroke="#ff9f43" stroke-opacity="1" stroke-linecap="butt" stroke-width="2.5" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskecln529u)" pathTo="M 0 60C 13.825 60 25.675 10 39.5 10C 53.325 10 65.175 80 79 80C 92.825 80 104.675 10 118.5 10C 132.325 10 144.175 90 158 90C 171.825 90 183.675 40 197.5 40C 211.325 40 223.175 80 237 80" pathFrom="M -1 160L -1 160L 39.5 160L 79 160L 118.5 160L 158 160L 197.5 160L 237 160"></path><g id="SvgjsG1113" class="apexcharts-series-markers-wrap"><g class="apexcharts-series-markers"><circle id="SvgjsCircle1133" r="0" cx="0" cy="0" class="apexcharts-marker wr8rfyvuv no-pointer-events" stroke="#ffffff" fill="#ff9f43" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle></g></g><g id="SvgjsG1114" class="apexcharts-datalabels"></g></g></g><line id="SvgjsLine1128" x1="0" y1="0" x2="237" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1129" x1="0" y1="0" x2="237" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1130" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1131" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1132" class="apexcharts-point-annotations"></g></g><rect id="SvgjsRect1106" width="0" height="0" x="0" y="0" rx="0" ry="0" fill="#fefefe" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect><g id="SvgjsG1123" class="apexcharts-yaxis" rel="0" transform="translate(-21, 0)"><g id="SvgjsG1124" class="apexcharts-yaxis-texts-g"></g></g></svg><div class="apexcharts-legend"></div><div class="apexcharts-tooltip light"><div class="apexcharts-tooltip-series-group"><span class="apexcharts-tooltip-marker" style="background-color: rgb(255, 159, 67);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div></div></div>
                       <div class="resize-triggers"><div class="expand-trigger"><div style="width: 238px; height: 101px;"></div></div><div class="contract-trigger"></div></div></div>
                   </div>
               </div>
           </div>
           <div class="row">
               <div class="col-lg-4 col-sm-6 col-12">
                   <div class="card">
                       <div class="card-header d-flex align-items-start pb-0">
                           <div>
                               <h2 class="text-bold-700">78.9k</h2>
                               <p class="mb-0">Site Traffic</p>
                           </div>
                           <div class="avatar bg-rgba-primary p-50">
                               <div class="avatar-content">
                                   <i class="feather icon-monitor text-primary font-medium-5"></i>
                               </div>
                           </div>
                       </div>
                       <div class="card-content" style="position: relative;">
                           <div id="line-area-chart-5" style="min-height: 100px;"><div id="apexcharts86tb9gr2k" class="apexcharts-canvas apexcharts86tb9gr2k light" style="width: 325px; height: 100px;"><svg id="SvgjsSvg1134" width="325" height="100" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1136" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs1135"><clipPath id="gridRectMask86tb9gr2k"><rect id="SvgjsRect1140" width="330" height="105" x="-2.5" y="-2.5" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><clipPath id="gridRectMarkerMask86tb9gr2k"><rect id="SvgjsRect1141" width="327" height="102" x="-1" y="-1" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><linearGradient id="SvgjsLinearGradient1147" x1="0" y1="1" x2="1" y2="1"><stop id="SvgjsStop1148" stop-opacity="1" stop-color="rgba(169,162,246,1)" offset="0"></stop><stop id="SvgjsStop1149" stop-opacity="1" stop-color="rgba(115,103,240,1)" offset="1"></stop><stop id="SvgjsStop1150" stop-opacity="1" stop-color="rgba(115,103,240,1)" offset="1"></stop><stop id="SvgjsStop1151" stop-opacity="1" stop-color="rgba(169,162,246,1)" offset="1"></stop></linearGradient><filter id="SvgjsFilter1154" filterUnits="userSpaceOnUse"><feFlood id="SvgjsFeFlood1155" flood-color="#000000" flood-opacity="0.1" result="SvgjsFeFlood1155Out" in="SourceGraphic"></feFlood><feComposite id="SvgjsFeComposite1156" in="SvgjsFeFlood1155Out" in2="SourceAlpha" operator="in" result="SvgjsFeComposite1156Out"></feComposite><feOffset id="SvgjsFeOffset1157" dx="0" dy="5" result="SvgjsFeOffset1157Out" in="SvgjsFeComposite1156Out"></feOffset><feGaussianBlur id="SvgjsFeGaussianBlur1158" stdDeviation="4 " result="SvgjsFeGaussianBlur1158Out" in="SvgjsFeOffset1157Out"></feGaussianBlur><feMerge id="SvgjsFeMerge1159" result="SvgjsFeMerge1159Out" in="SourceGraphic"><feMergeNode id="SvgjsFeMergeNode1160" in="SvgjsFeGaussianBlur1158Out"></feMergeNode><feMergeNode id="SvgjsFeMergeNode1161" in="[object Arguments]"></feMergeNode></feMerge><feBlend id="SvgjsFeBlend1162" in="SourceGraphic" in2="SvgjsFeMerge1159Out" mode="normal" result="SvgjsFeBlend1162Out"></feBlend></filter></defs><line id="SvgjsLine1139" x1="0" y1="0" x2="0" y2="100" stroke="#b6b6b6" stroke-dasharray="3" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="100" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><g id="SvgjsG1163" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1164" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="SvgjsG1167" class="apexcharts-grid"><line id="SvgjsLine1169" x1="0" y1="100" x2="325" y2="100" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine1168" x1="0" y1="1" x2="0" y2="100" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG1143" class="apexcharts-line-series apexcharts-plot-series"><g id="SvgjsG1144" class="apexcharts-series" seriesName="TrafficxRate" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath1152" d="M0 66.66666666666667C22.75 66.66666666666667 42.25 38.888888888888886 65 38.888888888888886C87.75 38.888888888888886 107.25 80.55555555555556 130 80.55555555555556C152.75 80.55555555555556 172.25 25 195 25C217.75 25 237.25 38.888888888888886 260 38.888888888888886C282.75 38.888888888888886 302.25 11.111111111111114 325 11.111111111111114C325 11.111111111111114 325 11.111111111111114 325 11.111111111111114 " fill="none" fill-opacity="1" stroke="url(#SvgjsLinearGradient1147)" stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMask86tb9gr2k)" filter="url(#SvgjsFilter1154)" pathTo="M 0 66.66666666666667C 22.75 66.66666666666667 42.25 38.888888888888886 65 38.888888888888886C 87.75 38.888888888888886 107.25 80.55555555555556 130 80.55555555555556C 152.75 80.55555555555556 172.25 25 195 25C 217.75 25 237.25 38.888888888888886 260 38.888888888888886C 282.75 38.888888888888886 302.25 11.111111111111114 325 11.111111111111114" pathFrom="M -1 150L -1 150L 65 150L 130 150L 195 150L 260 150L 325 150"></path><g id="SvgjsG1145" class="apexcharts-series-markers-wrap"><g class="apexcharts-series-markers"><circle id="SvgjsCircle1175" r="0" cx="0" cy="0" class="apexcharts-marker w23a5q28t no-pointer-events" stroke="#ffffff" fill="#7367f0" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle></g></g><g id="SvgjsG1146" class="apexcharts-datalabels"></g></g></g><line id="SvgjsLine1170" x1="0" y1="0" x2="325" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1171" x1="0" y1="0" x2="325" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1172" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1173" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1174" class="apexcharts-point-annotations"></g></g><rect id="SvgjsRect1138" width="0" height="0" x="0" y="0" rx="0" ry="0" fill="#fefefe" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect><g id="SvgjsG1165" class="apexcharts-yaxis" rel="0" transform="translate(-21, 0)"><g id="SvgjsG1166" class="apexcharts-yaxis-texts-g"></g></g></svg><div class="apexcharts-legend"></div><div class="apexcharts-tooltip light"><div class="apexcharts-tooltip-series-group"><span class="apexcharts-tooltip-marker" style="background-color: rgb(115, 103, 240);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div></div></div>
                       <div class="resize-triggers"><div class="expand-trigger"><div style="width: 326px; height: 101px;"></div></div><div class="contract-trigger"></div></div></div>
                   </div>
               </div>
               <div class="col-lg-4 col-sm-6 col-12">
                   <div class="card">
                       <div class="card-header d-flex align-items-start pb-0">
                           <div>
                               <h2 class="text-bold-700">659.8k</h2>
                               <p class="mb-0">Active Users</p>
                           </div>
                           <div class="avatar bg-rgba-success p-50">
                               <div class="avatar-content">
                                   <i class="feather icon-user-check text-success font-medium-5"></i>
                               </div>
                           </div>
                       </div>
                       <div class="card-content" style="position: relative;">
                           <div id="line-area-chart-6" style="min-height: 100px;"><div id="apexcharts17ia850l" class="apexcharts-canvas apexcharts17ia850l light" style="width: 325px; height: 100px;"><svg id="SvgjsSvg1176" width="325" height="100" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1178" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs1177"><clipPath id="gridRectMask17ia850l"><rect id="SvgjsRect1182" width="330" height="105" x="-2.5" y="-2.5" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><clipPath id="gridRectMarkerMask17ia850l"><rect id="SvgjsRect1183" width="327" height="102" x="-1" y="-1" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><linearGradient id="SvgjsLinearGradient1189" x1="0" y1="1" x2="1" y2="1"><stop id="SvgjsStop1190" stop-opacity="1" stop-color="rgba(85,221,146,1)" offset="0"></stop><stop id="SvgjsStop1191" stop-opacity="1" stop-color="rgba(40,199,111,1)" offset="1"></stop><stop id="SvgjsStop1192" stop-opacity="1" stop-color="rgba(40,199,111,1)" offset="1"></stop><stop id="SvgjsStop1193" stop-opacity="1" stop-color="rgba(85,221,146,1)" offset="1"></stop></linearGradient><filter id="SvgjsFilter1196" filterUnits="userSpaceOnUse"><feFlood id="SvgjsFeFlood1197" flood-color="#000000" flood-opacity="0.1" result="SvgjsFeFlood1197Out" in="SourceGraphic"></feFlood><feComposite id="SvgjsFeComposite1198" in="SvgjsFeFlood1197Out" in2="SourceAlpha" operator="in" result="SvgjsFeComposite1198Out"></feComposite><feOffset id="SvgjsFeOffset1199" dx="0" dy="5" result="SvgjsFeOffset1199Out" in="SvgjsFeComposite1198Out"></feOffset><feGaussianBlur id="SvgjsFeGaussianBlur1200" stdDeviation="4 " result="SvgjsFeGaussianBlur1200Out" in="SvgjsFeOffset1199Out"></feGaussianBlur><feMerge id="SvgjsFeMerge1201" result="SvgjsFeMerge1201Out" in="SourceGraphic"><feMergeNode id="SvgjsFeMergeNode1202" in="SvgjsFeGaussianBlur1200Out"></feMergeNode><feMergeNode id="SvgjsFeMergeNode1203" in="[object Arguments]"></feMergeNode></feMerge><feBlend id="SvgjsFeBlend1204" in="SourceGraphic" in2="SvgjsFeMerge1201Out" mode="normal" result="SvgjsFeBlend1204Out"></feBlend></filter></defs><line id="SvgjsLine1181" x1="0" y1="0" x2="0" y2="100" stroke="#b6b6b6" stroke-dasharray="3" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="100" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><g id="SvgjsG1205" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1206" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="SvgjsG1209" class="apexcharts-grid"><line id="SvgjsLine1211" x1="0" y1="100" x2="325" y2="100" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine1210" x1="0" y1="1" x2="0" y2="100" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG1185" class="apexcharts-line-series apexcharts-plot-series"><g id="SvgjsG1186" class="apexcharts-series" seriesName="ActivexUsers" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath1194" d="M0 91.66666666666669C18.958333333333332 91.66666666666669 35.20833333333333 50.00000000000003 54.166666666666664 50.00000000000003C73.125 50.00000000000003 89.375 66.66666666666669 108.33333333333333 66.66666666666669C127.29166666666666 66.66666666666669 143.54166666666666 8.333333333333343 162.49999999999997 8.333333333333343C181.45833333333331 8.333333333333343 197.70833333333331 50.00000000000003 216.66666666666666 50.00000000000003C235.625 50.00000000000003 251.875 16.666666666666686 270.8333333333333 16.666666666666686C289.79166666666663 16.666666666666686 306.04166666666663 33.33333333333334 324.99999999999994 33.33333333333334C324.99999999999994 33.33333333333334 324.99999999999994 33.33333333333334 324.99999999999994 33.33333333333334 " fill="none" fill-opacity="1" stroke="url(#SvgjsLinearGradient1189)" stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMask17ia850l)" filter="url(#SvgjsFilter1196)" pathTo="M 0 91.66666666666669C 18.958333333333332 91.66666666666669 35.20833333333333 50.00000000000003 54.166666666666664 50.00000000000003C 73.125 50.00000000000003 89.375 66.66666666666669 108.33333333333333 66.66666666666669C 127.29166666666666 66.66666666666669 143.54166666666666 8.333333333333343 162.49999999999997 8.333333333333343C 181.45833333333331 8.333333333333343 197.70833333333331 50.00000000000003 216.66666666666666 50.00000000000003C 235.625 50.00000000000003 251.875 16.666666666666686 270.8333333333333 16.666666666666686C 289.79166666666663 16.666666666666686 306.04166666666663 33.33333333333334 324.99999999999994 33.33333333333334" pathFrom="M -1 216.66666666666669L -1 216.66666666666669L 54.166666666666664 216.66666666666669L 108.33333333333333 216.66666666666669L 162.49999999999997 216.66666666666669L 216.66666666666666 216.66666666666669L 270.8333333333333 216.66666666666669L 324.99999999999994 216.66666666666669"></path><g id="SvgjsG1187" class="apexcharts-series-markers-wrap"><g class="apexcharts-series-markers"><circle id="SvgjsCircle1217" r="0" cx="0" cy="0" class="apexcharts-marker wgs3kcr1w no-pointer-events" stroke="#ffffff" fill="#28c76f" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle></g></g><g id="SvgjsG1188" class="apexcharts-datalabels"></g></g></g><line id="SvgjsLine1212" x1="0" y1="0" x2="325" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1213" x1="0" y1="0" x2="325" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1214" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1215" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1216" class="apexcharts-point-annotations"></g></g><rect id="SvgjsRect1180" width="0" height="0" x="0" y="0" rx="0" ry="0" fill="#fefefe" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect><g id="SvgjsG1207" class="apexcharts-yaxis" rel="0" transform="translate(-21, 0)"><g id="SvgjsG1208" class="apexcharts-yaxis-texts-g"></g></g></svg><div class="apexcharts-legend"></div><div class="apexcharts-tooltip light"><div class="apexcharts-tooltip-series-group"><span class="apexcharts-tooltip-marker" style="background-color: rgb(40, 199, 111);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div></div></div>
                       <div class="resize-triggers"><div class="expand-trigger"><div style="width: 326px; height: 101px;"></div></div><div class="contract-trigger"></div></div></div>
                   </div>
               </div>
               <div class="col-lg-4 col-sm-6 col-12">
                   <div class="card">
                       <div class="card-header d-flex align-items-start pb-0">
                           <div>
                               <h2 class="text-bold-700">28.7k</h2>
                               <p class="mb-0">Newsletter</p>
                           </div>
                           <div class="avatar bg-rgba-warning p-50">
                               <div class="avatar-content">
                                   <i class="feather icon-mail text-warning font-medium-5"></i>
                               </div>
                           </div>
                       </div>
                       <div class="card-content" style="position: relative;">
                           <div id="line-area-chart-7" style="min-height: 100px;"><div id="apexchartsuz2dmj3t" class="apexcharts-canvas apexchartsuz2dmj3t light" style="width: 325px; height: 100px;"><svg id="SvgjsSvg1218" width="325" height="100" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1220" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs1219"><clipPath id="gridRectMaskuz2dmj3t"><rect id="SvgjsRect1224" width="330" height="105" x="-2.5" y="-2.5" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><clipPath id="gridRectMarkerMaskuz2dmj3t"><rect id="SvgjsRect1225" width="327" height="102" x="-1" y="-1" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><linearGradient id="SvgjsLinearGradient1231" x1="0" y1="1" x2="1" y2="1"><stop id="SvgjsStop1232" stop-opacity="1" stop-color="rgba(255,192,133,1)" offset="0"></stop><stop id="SvgjsStop1233" stop-opacity="1" stop-color="rgba(255,159,67,1)" offset="1"></stop><stop id="SvgjsStop1234" stop-opacity="1" stop-color="rgba(255,159,67,1)" offset="1"></stop><stop id="SvgjsStop1235" stop-opacity="1" stop-color="rgba(255,192,133,1)" offset="1"></stop></linearGradient><filter id="SvgjsFilter1238" filterUnits="userSpaceOnUse"><feFlood id="SvgjsFeFlood1239" flood-color="#000000" flood-opacity="0.1" result="SvgjsFeFlood1239Out" in="SourceGraphic"></feFlood><feComposite id="SvgjsFeComposite1240" in="SvgjsFeFlood1239Out" in2="SourceAlpha" operator="in" result="SvgjsFeComposite1240Out"></feComposite><feOffset id="SvgjsFeOffset1241" dx="0" dy="5" result="SvgjsFeOffset1241Out" in="SvgjsFeComposite1240Out"></feOffset><feGaussianBlur id="SvgjsFeGaussianBlur1242" stdDeviation="4 " result="SvgjsFeGaussianBlur1242Out" in="SvgjsFeOffset1241Out"></feGaussianBlur><feMerge id="SvgjsFeMerge1243" result="SvgjsFeMerge1243Out" in="SourceGraphic"><feMergeNode id="SvgjsFeMergeNode1244" in="SvgjsFeGaussianBlur1242Out"></feMergeNode><feMergeNode id="SvgjsFeMergeNode1245" in="[object Arguments]"></feMergeNode></feMerge><feBlend id="SvgjsFeBlend1246" in="SourceGraphic" in2="SvgjsFeMerge1243Out" mode="normal" result="SvgjsFeBlend1246Out"></feBlend></filter></defs><line id="SvgjsLine1223" x1="0" y1="0" x2="0" y2="100" stroke="#b6b6b6" stroke-dasharray="3" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="100" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><g id="SvgjsG1247" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1248" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="SvgjsG1251" class="apexcharts-grid"><line id="SvgjsLine1253" x1="0" y1="100" x2="325" y2="100" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine1252" x1="0" y1="1" x2="0" y2="100" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG1227" class="apexcharts-line-series apexcharts-plot-series"><g id="SvgjsG1228" class="apexcharts-series" seriesName="Newsletter" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath1236" d="M0 90C22.75 90 42.25 40 65 40C87.75 40 107.25 90 130 90C152.75 90 172.25 20 195 20C217.75 20 237.25 70 260 70C282.75 70 302.25 20 325 20C325 20 325 20 325 20 " fill="none" fill-opacity="1" stroke="url(#SvgjsLinearGradient1231)" stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMaskuz2dmj3t)" filter="url(#SvgjsFilter1238)" pathTo="M 0 90C 22.75 90 42.25 40 65 40C 87.75 40 107.25 90 130 90C 152.75 90 172.25 20 195 20C 217.75 20 237.25 70 260 70C 282.75 70 302.25 20 325 20" pathFrom="M -1 820L -1 820L 65 820L 130 820L 195 820L 260 820L 325 820"></path><g id="SvgjsG1229" class="apexcharts-series-markers-wrap"><g class="apexcharts-series-markers"><circle id="SvgjsCircle1259" r="0" cx="0" cy="0" class="apexcharts-marker w8o2ewe6d no-pointer-events" stroke="#ffffff" fill="#ff9f43" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle></g></g><g id="SvgjsG1230" class="apexcharts-datalabels"></g></g></g><line id="SvgjsLine1254" x1="0" y1="0" x2="325" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1255" x1="0" y1="0" x2="325" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1256" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1257" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1258" class="apexcharts-point-annotations"></g></g><rect id="SvgjsRect1222" width="0" height="0" x="0" y="0" rx="0" ry="0" fill="#fefefe" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect><g id="SvgjsG1249" class="apexcharts-yaxis" rel="0" transform="translate(-21, 0)"><g id="SvgjsG1250" class="apexcharts-yaxis-texts-g"></g></g></svg><div class="apexcharts-legend"></div><div class="apexcharts-tooltip light"><div class="apexcharts-tooltip-series-group"><span class="apexcharts-tooltip-marker" style="background-color: rgb(255, 159, 67);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div></div></div>
                       <div class="resize-triggers"><div class="expand-trigger"><div style="width: 326px; height: 101px;"></div></div><div class="contract-trigger"></div></div></div>
                   </div>
               </div>
           </div>
       </section>
       <!-- // Statistics Card section end-->

   </div>
</div>
@endsection