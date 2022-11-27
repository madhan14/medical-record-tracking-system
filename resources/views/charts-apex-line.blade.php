@extends('layouts.app')
@section('content')
    <!-- Start Content-->
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Hyper</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Apex</a></li>
                            <li class="breadcrumb-item active">Line Charts</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Line Charts</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title mb-4">Simple line chart</h4>
                        <div dir="ltr">
                            <div id="line-chart" class="apex-charts" data-colors="#ffbc00"></div>
                        </div>
                    </div>
                    <!-- end card body-->
                </div>
                <!-- end card -->
            </div>
            <!-- end col-->

            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title mb-4">Line with Data Labels</h4>
                        <div dir="ltr">
                            <div id="line-chart-datalabel" class="apex-charts" data-colors="#6c757d,#727cf5"></div>
                        </div>
                    </div>
                    <!-- end card body-->
                </div>
                <!-- end card -->
            </div>
            <!-- end col-->
        </div>
        <!-- end row-->

        <div class="row">
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title mb-4">Zoomable Timeseries</h4>
                        <div dir="ltr">
                            <div id="line-chart-zoomable" class="apex-charts" data-colors="#fa5c7c"></div>
                        </div>
                    </div>
                    <!-- end card body-->
                </div>
                <!-- end card -->
            </div>
            <!-- end col-->

            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title mb-4">Line Chart with Annotations</h4>
                        <div dir="ltr">
                            <div id="line-chart-annotations" class="apex-charts" data-colors="#39afd1"></div>
                        </div>
                    </div>
                    <!-- end card body-->
                </div>
                <!-- end card -->
            </div>
            <!-- end col-->
        </div>
        <!-- end row-->

        <div class="row">
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title mb-4">Syncing charts</h4>
                        <div id="line-chart-syncing2" data-colors="#727cf5"></div>
                        <div dir="ltr">
                            <div id="line-chart-syncing" class="apex-charts" data-colors="#6c757d"></div>
                        </div>
                    </div>
                    <!-- end card body-->
                </div>
                <!-- end card -->
            </div>
            <!-- end col-->

            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title mb-4">Gradient Line Chart</h4>
                        <div dir="ltr">
                            <div id="line-chart-gradient" class="apex-charts"></div>
                        </div>
                    </div>
                    <!-- end card body-->
                </div>
                <!-- end card -->
            </div>
            <!-- end col-->
        </div>
        <!-- end row-->

        <div class="row">
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title mb-4">Missing / Null values</h4>
                        <div dir="ltr">
                            <div id="line-chart-missing" class="apex-charts" data-colors="#ffbc00,#0acf97,#39afd1"></div>
                        </div>
                    </div>
                    <!-- end card body-->
                </div>
                <!-- end card -->
            </div>
            <!-- end col-->

            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title mb-4">Dashed Line Chart</h4>
                        <div dir="ltr">
                            <div id="line-chart-dashed" class="apex-charts" data-colors="#6c757d,#0acf97,#39afd1"></div>
                        </div>
                    </div>
                    <!-- end card body-->
                </div>
                <!-- end card -->
            </div>
            <!-- end col-->
        </div>
        <!-- end row-->

        <div class="row">
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Stepline chart</h4>
                        <div dir="ltr">
                            <div id="line-chart-stepline" class="apex-charts" data-colors="#0acf97"></div>
                        </div>
                    </div>
                    <!-- end card body-->
                </div>
                <!-- end card -->
            </div>
            <!-- end col-->
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Realtime chart</h4>
                        <div dir="ltr">
                            <div id="line-chart-realtime" class="apex-charts" data-colors="#39afd1"></div>
                        </div>
                    </div>
                    <!-- end card body-->
                </div>
                <!-- end card -->
            </div>
            <!-- end col-->
        </div>
        <!-- end row-->

    </div> <!-- container -->
@endsection
@section('script')
    <!-- third party:js -->
    <script src="{{ asset('assets/js/vendor/apexcharts.min.js') }}"></script>
    <!-- third party end -->

    <!-- demo:js -->
    <script src="https://apexcharts.com/samples/assets/stock-prices.js"></script>
    <script src="https://apexcharts.com/samples/assets/irregular-data-series.js"></script>
    <script src="{{ asset('assets/js/pages/demo.apex-line.js') }}"></script>
    <!-- demo end -->
@endsection
