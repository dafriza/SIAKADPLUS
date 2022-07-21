@extends('Template.Template')
@section('Content')
<div class="page-content">

    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
        <div>
            <h4 class="mb-3 mb-md-0">Welcome to Dashboard</h4>
        </div>
        <div class="d-flex align-items-center flex-wrap text-nowrap">
            <div class="input-group date datepicker dashboard-date mr-2 mb-2 mb-md-0 d-md-none d-xl-flex"
                id="dashboardDate">
                <span class="input-group-addon bg-transparent"><i data-feather="calendar"
                        class=" text-primary"></i></span>
                <input type="text" class="form-control">
            </div>
            <button type="button" class="btn btn-outline-info btn-icon-text mr-2 d-none d-md-block">
                <i class="btn-icon-prepend" data-feather="download"></i>
                Import
            </button>
            <button type="button" class="btn btn-outline-primary btn-icon-text mr-2 mb-2 mb-md-0">
                <i class="btn-icon-prepend" data-feather="printer"></i>
                Print
            </button>
            <button type="button" class="btn btn-primary btn-icon-text mb-2 mb-md-0">
                <i class="btn-icon-prepend" data-feather="download-cloud"></i>
                Download Report
            </button>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-7 col-xl-8 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-baseline mb-2">
                        <h6 class="card-title mb-0">Monthly sales</h6>
                    </div>
                    <p class="text-muted mb-4">Sales are activities related to selling or the number of
                        goods or services sold in a given time period.</p>
                        <div id="apexBar" class="mx-auto"></div>
                    {{-- <div class="monthly-sales-chart-wrapper">
                        <canvas id="monthly-sales-chart"></canvas>
                    </div> --}}
                </div>
            </div>
        </div>
        <div class="col-lg-5 col-xl-4 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-baseline mb-2">
                        <h6 class="card-title mb-0">Pie Chart Course</h6>
                        {{-- <div class="dropdown mb-2">
                            <button class="btn p-0" type="button" id="dropdownMenuButton5"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton5">
                                <a class="dropdown-item d-flex align-items-center"
                                    href="{{ asset('#') }}"><i data-feather="eye"
                                        class="icon-sm mr-2"></i> <span class="">View</span></a>
                                <a class="dropdown-item d-flex align-items-center"
                                    href="{{ asset('#') }}"><i data-feather="edit-2"
                                        class="icon-sm mr-2"></i> <span class="">Edit</span></a>
                                <a class="dropdown-item d-flex align-items-center"
                                    href="{{ asset('#') }}"><i data-feather="trash"
                                        class="icon-sm mr-2"></i> <span class="">Delete</span></a>
                                <a class="dropdown-item d-flex align-items-center"
                                    href="{{ asset('#') }}"><i data-feather="printer"
                                        class="icon-sm mr-2"></i> <span class="">Print</span></a>
                                <a class="dropdown-item d-flex align-items-center"
                                    href="{{ asset('#') }}"><i data-feather="download"
                                        class="icon-sm mr-2"></i> <span class="">Download</span></a>
                            </div>
                        </div> --}}
                    </div>
                    <div id="apexPie" class="mx-auto"></div>
                    <div class="col-md grid-margin stretch-card">
                        <div class="card">
                          <div class="card-body">
                            <div class="d-flex justify-content-between align-items-baseline">
                              <h6 class="card-title mb-0">Percentage Course</h6>
                            </div>
                            <div class="row">
                              <div class="col-6 col-md-12 col-xl-5">
                                <h3 class="mb-2" id="totalData">3,897</h3>
                                <div class="d-flex align-items-baseline">
                                  <p class="text-success">
                                    <span id="percentage">+3.3%</span>
                                    <i data-feather="arrow-up" class="icon-sm mb-1"></i>
                                  </p>
                                </div>
                              </div>
                              <div class="col-6 col-md-12 col-xl-7">
                                <div id="apexPercentage" class="mt-md-3 mt-xl-0"></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    {{-- <div class="row mt-4 mb-3">
                        <div class="col-6 d-flex justify-content-end">
                            <div>
                                <label
                                    class="d-flex align-items-center justify-content-end tx-10 text-uppercase font-weight-medium">Total
                                    storage <span
                                        class="p-1 ml-1 rounded-circle bg-primary-muted"></span></label>
                                <h5 class="font-weight-bold mb-0 text-right">8TB</h5>
                            </div>
                        </div>
                        <div class="col-6">
                            <div>
                                <label
                                    class="d-flex align-items-center tx-10 text-uppercase font-weight-medium"><span
                                        class="p-1 mr-1 rounded-circle bg-primary"></span> Used
                                    storage</label>
                                <h5 class="font-weight-bold mb-0">6TB</h5>
                            </div>
                        </div>
                    </div> --}}
                    <a href="/admin/dataCourse" class="btn btn-primary btn-block">Details</a>
                </div>
            </div>
        </div>
    </div> <!-- row -->



</div>
@endsection
