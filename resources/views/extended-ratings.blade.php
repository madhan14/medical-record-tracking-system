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
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Extended UI</a></li>
                            <li class="breadcrumb-item active">Ratings</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Ratings</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Default Ratings</h4>
                        <p class="text-muted font-14"></p>

                        <ul class="nav nav-tabs nav-bordered mb-3">
                            <li class="nav-item">
                                <a href="#default-ratings-preview" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                    Preview
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#default-ratings-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                    Code
                                </a>
                            </li>
                        </ul> <!-- end nav-->
                        <div class="tab-content">
                            <div class="tab-pane show active" id="default-ratings-preview">
                                <div class="rateit" data-rateit-mode="font">
                                </div>
                            </div> <!-- end preview-->

                            <div class="tab-pane" id="default-ratings-code">
                                <p class="mt-3">Make sure to include following js files at end of <code>body element</code></p>

                                <pre class="mb-0">
                                    <span class="html escape">
                                        &lt;script src=&quot;assets/js/vendor/jquery.rateit.min.js&quot;&gt;&lt;/script&gt;
                                    </span>
                                </pre> <!-- end highlight-->

                                <pre class="mb-0">
                                    <span class="html escape">
                                        &lt;div class=&quot;rateit&quot; data-rateit-mode=&quot;font&quot;&gt;
                                        &lt;/div&gt;
                                    </span>
                                </pre> <!-- end highlight-->
                            </div> <!-- end preview code-->
                        </div> <!-- end tab-content-->
                    </div> <!-- end card-body -->
                </div> <!-- end card-->

                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Icon Font - Change icon</h4>
                        <p class="text-muted font-14"></p>

                        <ul class="nav nav-tabs nav-bordered mb-3">
                            <li class="nav-item">
                                <a href="#change-icon-preview" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                    Preview
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#change-icon-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                    Code
                                </a>
                            </li>
                        </ul> <!-- end nav-->
                        <div class="tab-content">
                            <div class="tab-pane show active" id="change-icon-preview">
                                <div class="rateit"  data-rateit-icon="@" data-rateit-mode="font">
                                </div>
                            </div> <!-- end preview-->

                            <div class="tab-pane" id="change-icon-code">
                                <pre class="mb-0">
                                    <span class="html escape">
                                        &lt;div class=&quot;rateit&quot;  data-rateit-icon=&quot;@&quot; data-rateit-mode=&quot;font&quot;&gt;
                                        &lt;/div&gt;
                                    </span>
                                </pre> <!-- end highlight-->
                            </div> <!-- end preview code-->
                        </div> <!-- end tab-content-->
                    </div> <!-- end card-body -->
                </div> <!-- end card-->

                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Progressive enhancement (using select)</h4>
                        <p class="text-muted font-14"></p>

                        <ul class="nav nav-tabs nav-bordered mb-3">
                            <li class="nav-item">
                                <a href="#using-select-preview" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                    Preview
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#using-select-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                    Code
                                </a>
                            </li>
                        </ul> <!-- end nav-->
                        <div class="tab-content">
                            <div class="tab-pane show active" id="using-select-preview">
                                <select id="backing3b">
                                    <option value="0">Bad</option>
                                    <option value="1" selected="selected">OK</option>
                                    <option value="2">Good</option>
                                    <option value="3">Great</option>
                                    <option value="4">Excellent</option>
                                </select>
                                <div class="rateit rateit-mdi" data-rateit-backingfld="#backing3b" data-rateit-mode="font" data-rateit-icon="󰓒"></div>
                            </div> <!-- end preview-->

                            <div class="tab-pane" id="using-select-code">
                                <pre class="mb-0">
                                    <span class="html escape">
                                        &lt;select id=&quot;backing3b&quot;&gt;
                                            &lt;option value=&quot;0&quot;&gt;Bad&lt;/option&gt;
                                            &lt;option value=&quot;1&quot; selected=&quot;selected&quot;&gt;OK&lt;/option&gt;
                                            &lt;option value=&quot;2&quot;&gt;Good&lt;/option&gt;
                                            &lt;option value=&quot;3&quot;&gt;Great&lt;/option&gt;
                                            &lt;option value=&quot;4&quot;&gt;Excellent&lt;/option&gt;
                                        &lt;/select&gt;
                                        &lt;div class=&quot;rateit rateit-mdi&quot; data-rateit-backingfld=&quot;#backing3b&quot; data-rateit-mode=&quot;font&quot; data-rateit-icon=&quot;󰓒&quot;&gt;&lt;/div&gt;
                                    </span>
                                </pre> <!-- end highlight-->
                            </div> <!-- end preview code-->
                        </div> <!-- end tab-content-->
                    </div> <!-- end card-body -->
                </div> <!-- end card-->

                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Javascript interaction</h4>
                        <p class="text-muted font-14"></p>

                        <ul class="nav nav-tabs nav-bordered mb-3">
                            <li class="nav-item">
                                <a href="#javascript-interaction-preview" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                    Preview
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#javascript-interaction-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                    Code
                                </a>
                            </li>
                        </ul> <!-- end nav-->
                        <div class="tab-content">
                            <div class="tab-pane show active" id="javascript-interaction-preview">
                                <div class="rateit rateit-mdi" id="js-interaction" data-rateit-min="2" data-rateit-mode="font" data-rateit-icon="󰓒">
                                </div>
                                <div>
                                    <span id="jsvalue"></span>
                                    <span id="jshover"></span>
                                </div>
                            </div> <!-- end preview-->

                            <div class="tab-pane" id="javascript-interaction-code">
                                <p class="mt-3">Make sure to include following js files at end of <code>body element</code></p>

                                <pre class="mb-0">
                                    <span class="html escape">
                                        &lt;!-- Plgins only --&gt;
                                        &lt;script src=&quot;assets/js/vendor/jquery.rateit.min.js&quot;&gt;&lt;/script&gt;
                                        &lt;script src=&quot;assets/js/ui/component.rating.js&quot;&gt;&lt;/script&gt;
                                    </span>
                                </pre> <!-- end highlight-->

                                <pre class="mb-0">
                                    <span class="html escape">
                                        &lt;div class=&quot;rateit rateit-mdi&quot; id=&quot;js-interaction&quot; data-rateit-min=&quot;2&quot; data-rateit-mode=&quot;font&quot; data-rateit-icon=&quot;󰓒&quot;&gt;
                                        &lt;/div&gt;
                                        &lt;div&gt;
                                            &lt;span id=&quot;jsvalue&quot;&gt;&lt;/span&gt;
                                            &lt;span id=&quot;jshover&quot;&gt;&lt;/span&gt;
                                        &lt;/div&gt;
                                    </span>
                                </pre> <!-- end highlight-->
                            </div> <!-- end preview code-->
                        </div> <!-- end tab-content-->
                    </div> <!-- end card-body -->
                </div> <!-- end card-->

                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">RTL support</h4>
                        <p class="text-muted font-14">Now we are in RTL mode. No changes needed to make this work</p>

                        <ul class="nav nav-tabs nav-bordered mb-3">
                            <li class="nav-item">
                                <a href="#rtl-preview" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                    Preview
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#rtl-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                    Code
                                </a>
                            </li>
                        </ul> <!-- end nav-->
                        <div class="tab-content">
                            <div class="tab-pane show active" id="rtl-preview">
                                <div style="direction: rtl">
                                    <div class="rateit rateit-mdi" data-rateit-mode="font" data-rateit-icon="󰓒">
                                    </div>
                                </div>
                            </div> <!-- end preview-->

                            <div class="tab-pane" id="rtl-code">
                                <pre class="mb-0">
                                    <span class="html escape">
                                        &lt;div style=&quot;direction: rtl&quot;&gt;
                                            &lt;div class=&quot;rateit rateit-mdi&quot; data-rateit-mode=&quot;font&quot; data-rateit-icon=&quot;󰓒&quot;&gt;
                                            &lt;/div&gt;
                                        &lt;/div&gt;
                                    </span>
                                </pre> <!-- end highlight-->
                            </div> <!-- end preview code-->
                        </div> <!-- end tab-content-->
                    </div> <!-- end card-body -->
                </div> <!-- end card-->

            </div> <!-- end col -->

            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Material Design Icons</h4>
                        <p class="text-muted font-14"></p>

                        <ul class="nav nav-tabs nav-bordered mb-3">
                            <li class="nav-item">
                                <a href="#mdi-ratings-preview" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                    Preview
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#mdi-ratings-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                    Code
                                </a>
                            </li>
                        </ul> <!-- end nav-->
                        <div class="tab-content">
                            <div class="tab-pane show active" id="mdi-ratings-preview">
                                <div class="rateit rateit-mdi" data-rateit-mode="font" data-rateit-icon="󰓒">
                                </div>

                                <br/>

                                <div class="rateit rateit-mdi mt-3" data-rateit-mode="font" data-rateit-icon="󰋕">
                                </div>
                            </div> <!-- end preview-->

                            <div class="tab-pane" id="mdi-ratings-code">
                                <pre class="mb-0">
                                    <span class="html escape">
                                        &lt;!-- Star --&gt;
                                        &lt;div class=&quot;rateit rateit-mdi&quot; data-rateit-mode=&quot;font&quot; data-rateit-icon=&quot;󰓒&quot;&gt;
                                        &lt;/div&gt;

                                        &lt;!-- Heart --&gt;
                                        &lt;div class=&quot;rateit rateit-mdi mt-3&quot; data-rateit-mode=&quot;font&quot; data-rateit-icon=&quot;󰋕&quot;&gt;
                                        &lt;/div&gt;
                                    </span>
                                </pre> <!-- end highlight-->
                            </div> <!-- end preview code-->
                        </div> <!-- end tab-content-->
                    </div> <!-- end card-body -->
                </div> <!-- end card-->

                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Icon Font - Sizing</h4>
                        <p class="text-muted font-14"></p>

                        <ul class="nav nav-tabs nav-bordered mb-3">
                            <li class="nav-item">
                                <a href="#icon-font-preview" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                    Preview
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#icon-font-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                    Code
                                </a>
                            </li>
                        </ul> <!-- end nav-->
                        <div class="tab-content">
                            <div class="tab-pane show active" id="icon-font-preview">
                                <div class="rateit rateit-mdi" data-rateit-mode="font" data-rateit-icon="󰓒" style="font-size: 36px;">
                                </div>
                            </div> <!-- end preview-->

                            <div class="tab-pane" id="icon-font-code">
                                <pre class="mb-0">
                                    <span class="html escape">
                                        &lt;div class=&quot;rateit rateit-mdi&quot; data-rateit-mode=&quot;font&quot; data-rateit-icon=&quot;󰓒&quot; style=&quot;font-size: 36px;&quot;&gt;
                                        &lt;/div&gt;
                                    </span>
                                </pre> <!-- end highlight-->
                            </div> <!-- end preview code-->
                        </div> <!-- end tab-content-->
                    </div> <!-- end card-body -->
                </div> <!-- end card-->

                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Readonly and preset value</h4>
                        <p class="text-muted font-14"></p>

                        <ul class="nav nav-tabs nav-bordered mb-3">
                            <li class="nav-item">
                                <a href="#readonly-preview" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                    Preview
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#readonly-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                    Code
                                </a>
                            </li>
                        </ul> <!-- end nav-->
                        <div class="tab-content">
                            <div class="tab-pane show active" id="readonly-preview">
                                <div class="rateit rateit-mdi" data-rateit-mode="font" data-rateit-icon="󰓒"  data-rateit-value="2.5" data-rateit-ispreset="true" data-rateit-readonly="true">
                                </div>
                            </div> <!-- end preview-->

                            <div class="tab-pane" id="readonly-code">
                                <pre class="mb-0">
                                    <span class="html escape">
                                        &lt;div class=&quot;rateit rateit-mdi&quot; data-rateit-mode=&quot;font&quot; data-rateit-icon=&quot;󰓒&quot;  data-rateit-value=&quot;2.5&quot; data-rateit-ispreset=&quot;true&quot; data-rateit-readonly=&quot;true&quot;&gt;
                                        &lt;/div&gt;
                                    </span>
                                </pre> <!-- end highlight-->
                            </div> <!-- end preview code-->
                        </div> <!-- end tab-content-->
                    </div> <!-- end card-body -->
                </div> <!-- end card-->

                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Setting and Getting values</h4>
                        <p class="text-muted font-14">All properties can also be set on the fly. Here are a few examples:</p>

                        <ul class="nav nav-tabs nav-bordered mb-3">
                            <li class="nav-item">
                                <a href="#getting-values-preview" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                    Preview
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#getting-values-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                    Code
                                </a>
                            </li>
                        </ul> <!-- end nav-->
                        <div class="tab-content">
                            <div class="tab-pane show active" id="getting-values-preview">
                                <div class="rateit rateit-mdi" data-rateit-mode="font" data-rateit-icon="󰓒" id="getting-values">
                                </div>
                                <div class="button-list mt-3">
                                    <button class="btn btn-sm btn-primary" onclick="alert($('#getting-values').rateit('value'))">Get value</button>
                                    <button class="btn btn-sm btn-primary" onclick="$('#getting-values').rateit('value', prompt('Input numerical value'))">Set value</button>
                                    <button class="btn btn-sm btn-primary" onclick="alert($('#getting-values').rateit('max'))">Get max value</button>
                                    <button class="btn btn-sm btn-primary" onclick="$('#getting-values').rateit('max', prompt('Input numerical value'))">Set max value</button>
                                    <button class="btn btn-sm btn-primary" onclick="alert($('#getting-values').rateit('step'))">Get step size</button>
                                    <button class="btn btn-sm btn-primary" onclick="$('#getting-values').rateit('step', prompt('Input numerical value'))">Set step size</button>
                                    <button class="btn btn-sm btn-primary" onclick="alert($('#getting-values').rateit('readonly'))">Get readonly value</button>
                                    <button class="btn btn-sm btn-primary" onclick="$('#getting-values').rateit('readonly',!$('#getting-values').rateit('readonly'))">Toggle readonly</button>
                                    <button class="btn btn-sm btn-primary" onclick="alert($('#getting-values').rateit('ispreset'))">Get ispreset value</button>
                                    <button class="btn btn-sm btn-primary" onclick="$('#getting-values').rateit('ispreset',!$('#getting-values').rateit('ispreset'))">Toggle ispreset</button>
                                    <button class="btn btn-sm btn-primary" onclick="$('#getting-values').rateit('reset')">Reset</button>
                                </div>
                            </div> <!-- end preview-->

                            <div class="tab-pane" id="getting-values-code">
                                <pre class="mb-0">
                                    <span class="html escape">
                                        &lt;div class=&quot;rateit rateit-mdi&quot; data-rateit-mode=&quot;font&quot; data-rateit-icon=&quot;󰓒&quot; id=&quot;getting-values&quot;&gt;
                                        &lt;/div&gt;

                                        &lt;!-- Onclick events --&gt;
                                        &lt;button class=&quot;btn btn-sm btn-primary&quot; onclick=&quot;alert($('#getting-values').rateit('value'))&quot;&gt;Get value&lt;/button&gt;
                                        &lt;button class=&quot;btn btn-sm btn-primary&quot; onclick=&quot;$('#getting-values').rateit('value', prompt('Input numerical value'))&quot;&gt;Set value&lt;/button&gt;
                                        &lt;button class=&quot;btn btn-sm btn-primary&quot; onclick=&quot;alert($('#getting-values').rateit('max'))&quot;&gt;Get max value&lt;/button&gt;
                                        &lt;button class=&quot;btn btn-sm btn-primary&quot; onclick=&quot;$('#getting-values').rateit('max', prompt('Input numerical value'))&quot;&gt;Set max value&lt;/button&gt;
                                        &lt;button class=&quot;btn btn-sm btn-primary&quot; onclick=&quot;alert($('#getting-values').rateit('step'))&quot;&gt;Get step size&lt;/button&gt;
                                        &lt;button class=&quot;btn btn-sm btn-primary&quot; onclick=&quot;$('#getting-values').rateit('step', prompt('Input numerical value'))&quot;&gt;Set step size&lt;/button&gt;
                                        &lt;button class=&quot;btn btn-sm btn-primary&quot; onclick=&quot;alert($('#getting-values').rateit('readonly'))&quot;&gt;Get readonly value&lt;/button&gt;
                                        &lt;button class=&quot;btn btn-sm btn-primary&quot; onclick=&quot;$('#getting-values').rateit('readonly',!$('#getting-values').rateit('readonly'))&quot;&gt;Toggle readonly&lt;/button&gt;
                                        &lt;button class=&quot;btn btn-sm btn-primary&quot; onclick=&quot;alert($('#getting-values').rateit('ispreset'))&quot;&gt;Get ispreset value&lt;/button&gt;
                                        &lt;button class=&quot;btn btn-sm btn-primary&quot; onclick=&quot;$('#getting-values').rateit('ispreset',!$('#getting-values').rateit('ispreset'))&quot;&gt;Toggle ispreset&lt;/button&gt;
                                        &lt;button class=&quot;btn btn-sm btn-primary&quot; onclick=&quot;$('#getting-values').rateit('reset')&quot;&gt;Reset&lt;/button&gt;
                                    </span>
                                </pre> <!-- end highlight-->
                            </div> <!-- end preview code-->
                        </div> <!-- end tab-content-->
                    </div> <!-- end card-body -->
                </div> <!-- end card-->

            </div> <!-- end col -->
        </div>
        <!-- end row -->

    </div> <!-- container -->
@endsection
@section('script')
    <!-- Plgins only -->
    <script src="{{ asset('assets/js/vendor/jquery.rateit.min.js') }}"></script>
    <script src="{{ asset('assets/js/ui/component.rating.js') }}"></script>
@endsection
