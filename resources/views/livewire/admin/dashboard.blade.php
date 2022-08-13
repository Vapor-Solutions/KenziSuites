<div>
    <x-slot name="header">
        <h2 class="font-semibold">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="container-fluid general-widget mb-5">
        <div class="row">
            <div class="col-sm-6 col-xl-3 col-lg-6">
                <div class="card o-hidden border-0">
                    <div class="bg-primary b-r-4 card-body">
                        <div class="media static-top-widget">
                            <div class="align-self-center text-center"><i data-feather="dollar-sign"></i></div>
                            <div class="media-body"><span class="m-0">Total Earnings</span>
                                <h4 class="mb-0 ">KES <span class="font-bold counter">{{ number_format(97000) }}</span> </h4><i class="icon-bg" data-feather="dollar-sign"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3 col-lg-6">
                <div class="card o-hidden border-0">
                    <div class="bg-secondary b-r-4 card-body">
                        <div class="media static-top-widget">
                            <div class="align-self-center text-center"><i data-feather="shopping-bag"></i></div>
                            <div class="media-body"><span class="m-0">Available Rooms</span>
                                <h4 class="mb-0 counter">{{ number_format(5) }}</h4><i class="icon-bg" data-feather="shopping-bag"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3 col-lg-6">
                <div class="card o-hidden border-0">
                    <div class="bg-primary b-r-4 card-body">
                        <div class="media static-top-widget">
                            <div class="align-self-center text-center"><i data-feather="database"></i></div>
                            <div class="media-body"><span class="m-0">Total Bookings</span>
                                <h4 class="mb-0 counter">{{ number_format(6659) }}</h4><i class="icon-bg" data-feather="database"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3 col-lg-6">
                <div class="card o-hidden border-0">
                    <div class="bg-secondary b-r-4 card-body">
                        <div class="media static-top-widget">
                            <div class="align-self-center text-center"><i data-feather="shopping-bag"></i></div>
                            <div class="media-body"><span class="m-0">Unpaid Invoices</span>
                                <h4 class="mb-0 ">KES <span class="counter">{{ number_format(24000) }}</span></h4><i class="icon-bg" data-feather="shopping-bag"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="col-12 des-xl-100 dashboard-sec">
        <div class="card income-card">
            <div class="card-header">
                <div class="header-top d-sm-flex align-items-center">
                    <h5>Bookings Overview Chart</h5>
                    <div class="center-content">
                        {{-- <p class="d-sm-flex align-items-center"><span
                                class="font-primary m-r-10 f-w-700">$859.25k</span><i
                                class="toprightarrow-primary fa fa-arrow-up m-r-10"></i>86% More than last year</p> --}}
                    </div>

                </div>
            </div>
            <div class="card-body p-0">
                <div id="chart-timeline-dashbord"></div>
            </div>
        </div>
    </div>
</div>

@php
$days = Carbon\CarbonPeriod::create('2022-01-01', 'now');
@endphp

@push('scripts')
    <script>
        var options = {
            series: [{
                data: [
                    @foreach ($days as $day)
                        [{{ $day->getPreciseTimestamp(3) }}, 27],
                    @endforeach
                ]
            }],
            chart: {
                id: 'area-datetime',
                type: 'area',
                height: 425,
                zoom: {
                    autoScaleYaxis: true
                },
                toolbar: {
                    show: true
                },
            },
            annotations: {
                yaxis: [{
                    y: 50,
                    borderColor: '#18264b',
                    label: {
                        show: false,
                        text: 'Average',
                        style: {
                            color: "#fff",
                            background: '#18264b'
                        }
                    }
                }],
                xaxis: [{
                    x: new Date('01 Jan 2022').getTime(),
                    borderColor: '#18264b',
                    yAxisIndex: 50,
                    label: {
                        show: false,
                        text: 'Best',
                        style: {
                            color: "#fff",
                            background: '#18264b'
                        }
                    },
                }]
            },
            dataLabels: {
                enabled: false
            },
            markers: {
                size: 0,
                style: 'hollow',
            },
            xaxis: {
                type: 'datetime',
                min: new Date('01 Jan 2022').getTime(),
                tickAmount: 6,
                axisTicks: {
                    show: false,
                },
                axisBorder: {
                    show: false
                },
            },
            tooltip: {
                x: {
                    format: 'dd MMM yyyy'
                },
            },
            fill: {
                type: 'gradient',
                gradient: {
                    shadeIntensity: 1,
                    opacityFrom: 0.7,
                    opacityTo: 0.9,
                    stops: [0, 100]
                }
            },
            responsive: [{
                    breakpoint: 1366,
                    options: {
                        chart: {
                            height: 350
                        }
                    }
                },
                {
                    breakpoint: 1238,
                    options: {
                        chart: {
                            height: 300
                        },
                        grid: {
                            padding: {
                                bottom: 5,
                            },
                        }
                    }
                },
                {
                    breakpoint: 992,
                    options: {
                        chart: {
                            height: 300
                        }
                    }
                },
                {
                    breakpoint: 551,
                    options: {
                        grid: {
                            padding: {
                                bottom: 10,
                            },
                        }
                    }
                },
                {
                    breakpoint: 535,
                    options: {
                        chart: {
                            height: 250
                        }

                    }
                }
            ],

            colors: ['#18264b'],
        };
        var charttimeline = new ApexCharts(document.querySelector("#chart-timeline-dashbord"), options);
        charttimeline.render();
    </script>
@endpush
