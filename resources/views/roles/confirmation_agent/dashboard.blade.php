@extends('layouts.app')

@section('content')
    <div class="" style="margin-top:16px !important;">
        <div class="mt-4 py-3">
            <div class="bgform mt-4 p-4 p-md-5">
                <div class="row">
                    <div class="col-xl-4 mt-3 mt-xl-0  col-12 ">
                        <div class="dashborder">
                            <div>
                                <svg width="52" height="53" viewBox="0 0 52 53" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect y="0.5" width="52" height="52" rx="16" fill="#8B35F9"
                                    fill-opacity="0.1" />
                                <path
                                    d="M21.668 15.1667V13.1667C21.668 12.6201 21.2146 12.1667 20.668 12.1667C20.1213 12.1667 19.668 12.6201 19.668 13.1667V15.2467C20.0013 15.2067 20.308 15.1667 20.668 15.1667H21.668Z"
                                    fill="#8B35F9" />
                                <path
                                    d="M32.332 15.2467V13.1667C32.332 12.6201 31.8787 12.1667 31.332 12.1667C30.7854 12.1667 30.332 12.6201 30.332 13.1667V15.1667H31.332C31.692 15.1667 31.9987 15.2067 32.332 15.2467Z"
                                    fill="#8B35F9" />
                                <path
                                    d="M32.3333 15.2467V17.1667C32.3333 17.7134 31.88 18.1667 31.3333 18.1667C30.7867 18.1667 30.3333 17.7134 30.3333 17.1667V15.1667H21.6667V17.1667C21.6667 17.7134 21.2133 18.1667 20.6667 18.1667C20.12 18.1667 19.6667 17.7134 19.6667 17.1667V15.2467C15.7333 15.6067 14 18.1401 14 21.8334V33.1667C14 37.1667 16 39.8334 20.6667 39.8334H31.3333C36 39.8334 38 37.1667 38 33.1667V21.8334C38 18.1401 36.2667 15.6067 32.3333 15.2467ZM26 32.8334H20.6667C20.12 32.8334 19.6667 32.3801 19.6667 31.8334C19.6667 31.2867 20.12 30.8334 20.6667 30.8334H26C26.5467 30.8334 27 31.2867 27 31.8334C27 32.3801 26.5467 32.8334 26 32.8334ZM31.3333 26.1667H20.6667C20.12 26.1667 19.6667 25.7134 19.6667 25.1667C19.6667 24.6201 20.12 24.1667 20.6667 24.1667H31.3333C31.88 24.1667 32.3333 24.6201 32.3333 25.1667C32.3333 25.7134 31.88 26.1667 31.3333 26.1667Z"
                                    fill="#8B35F9" />
                            </svg>
                            </div>
                            <div class="d-flex flex-column">
                                <span class="subtitledash">Leads pro Tag</span>
                                <span
                                    style="font-weight: 700; color: #8B35F9; font-size: 32px;font-family: 'Poppins', sans-serif; ">{{$today}}</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 mt-3 mt-xl-0 col-12">
                        <div class="dashborder">
                            <div>
                                <svg width="52" height="53" viewBox="0 0 52 53" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect y="0.5" width="52" height="52" rx="16" fill="#F97035"
                                    fill-opacity="0.1" />
                                <path
                                    d="M21.668 15.1667V13.1667C21.668 12.6201 21.2146 12.1667 20.668 12.1667C20.1213 12.1667 19.668 12.6201 19.668 13.1667V15.2467C20.0013 15.2067 20.308 15.1667 20.668 15.1667H21.668Z"
                                    fill="#F97035" />
                                <path
                                    d="M32.332 15.2467V13.1667C32.332 12.6201 31.8787 12.1667 31.332 12.1667C30.7854 12.1667 30.332 12.6201 30.332 13.1667V15.1667H31.332C31.692 15.1667 31.9987 15.2067 32.332 15.2467Z"
                                    fill="#F97035" />
                                <path
                                    d="M32.3333 15.2467V17.1667C32.3333 17.7134 31.88 18.1667 31.3333 18.1667C30.7867 18.1667 30.3333 17.7134 30.3333 17.1667V15.1667H21.6667V17.1667C21.6667 17.7134 21.2133 18.1667 20.6667 18.1667C20.12 18.1667 19.6667 17.7134 19.6667 17.1667V15.2467C15.7333 15.6067 14 18.1401 14 21.8334V33.1667C14 37.1667 16 39.8334 20.6667 39.8334H31.3333C36 39.8334 38 37.1667 38 33.1667V21.8334C38 18.1401 36.2667 15.6067 32.3333 15.2467ZM26 32.8334H20.6667C20.12 32.8334 19.6667 32.3801 19.6667 31.8334C19.6667 31.2867 20.12 30.8334 20.6667 30.8334H26C26.5467 30.8334 27 31.2867 27 31.8334C27 32.3801 26.5467 32.8334 26 32.8334ZM31.3333 26.1667H20.6667C20.12 26.1667 19.6667 25.7134 19.6667 25.1667C19.6667 24.6201 20.12 24.1667 20.6667 24.1667H31.3333C31.88 24.1667 32.3333 24.6201 32.3333 25.1667C32.3333 25.7134 31.88 26.1667 31.3333 26.1667Z"
                                    fill="#F97035" />
                            </svg>

                            </div>
                            <div class="d-flex flex-column">
                                <span class="subtitledash">Leads pro Woche</span>
                                <span
                                    style="font-weight: 700; color: #F97035; font-size: 32px; font-family: 'Poppins', sans-serif;">{{$week}}</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 mt-3 mt-xl-0 col-12">
                        <div class="dashborder">
                            <div>
                                <svg width="52" height="53" viewBox="0 0 52 53" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect y="0.5" width="52" height="52" rx="16" fill="#F9CE35"
                                        fill-opacity="0.1" />
                                    <path
                                        d="M21.668 15.1667V13.1667C21.668 12.6201 21.2146 12.1667 20.668 12.1667C20.1213 12.1667 19.668 12.6201 19.668 13.1667V15.2467C20.0013 15.2067 20.308 15.1667 20.668 15.1667H21.668Z"
                                        fill="#F9CE35" />
                                    <path
                                        d="M32.332 15.2467V13.1667C32.332 12.6201 31.8787 12.1667 31.332 12.1667C30.7854 12.1667 30.332 12.6201 30.332 13.1667V15.1667H31.332C31.692 15.1667 31.9987 15.2067 32.332 15.2467Z"
                                        fill="#F9CE35" />
                                    <path
                                        d="M32.3333 15.2467V17.1667C32.3333 17.7134 31.88 18.1667 31.3333 18.1667C30.7867 18.1667 30.3333 17.7134 30.3333 17.1667V15.1667H21.6667V17.1667C21.6667 17.7134 21.2133 18.1667 20.6667 18.1667C20.12 18.1667 19.6667 17.7134 19.6667 17.1667V15.2467C15.7333 15.6067 14 18.1401 14 21.8334V33.1667C14 37.1667 16 39.8334 20.6667 39.8334H31.3333C36 39.8334 38 37.1667 38 33.1667V21.8334C38 18.1401 36.2667 15.6067 32.3333 15.2467ZM26 32.8334H20.6667C20.12 32.8334 19.6667 32.3801 19.6667 31.8334C19.6667 31.2867 20.12 30.8334 20.6667 30.8334H26C26.5467 30.8334 27 31.2867 27 31.8334C27 32.3801 26.5467 32.8334 26 32.8334ZM31.3333 26.1667H20.6667C20.12 26.1667 19.6667 25.7134 19.6667 25.1667C19.6667 24.6201 20.12 24.1667 20.6667 24.1667H31.3333C31.88 24.1667 32.3333 24.6201 32.3333 25.1667C32.3333 25.7134 31.88 26.1667 31.3333 26.1667Z"
                                        fill="#F9CE35" />
                                </svg>

                            </div>
                            <div class="d-flex flex-column">
                                <span class="subtitledash">Leads pro Monat</span>
                                <span
                                    style="font-weight: 700; color: #F9CE35; font-size: 32px; font-family: 'Poppins', sans-serif;">{{$month}}</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-12" >
                        <div class="mt-5 apexchart" style="padding: 20px">
                            <div class="row">
                                <div class="col-12 col-lg-12 col-xl-4 col-xxl-5 my-lg-auto">
                                    <div class="">
                                        <span class=""
                                            style="font-family: 'Raleway'; font-weight: 700; font-size: 18px;color: #1F1F1F;">Leads</span>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="row gx-3 gy-3 gy-md-0">
                                        <div class="col-12 col-sm my-md-auto">
                                            <div class="">
                                                <div class="row g-0">
                                                    <div class="col-2">
                                                        <span class="titledate">von</span>

                                                    </div>
                                                    <div class="col">
                                                        <input id="from" type="date"
                                                            class="dateinput w-100 px-0 mx-0 " placeholder="Start Date"
                                                            required>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-12 col-sm my-md-auto">
                                            <div class="">
                                                <div class="row g-0">

                                                    <div class="col-2">
                                                        <span class="titledate">bis</span>

                                                    </div>
                                                    <div class="col">
                                                        <input id="to" type="date"
                                                            class="dateinput w-100 px-0 mx-0 col" placeholder="End Date"
                                                            required min="{{ Carbon\Carbon::today()->format('Y-m-d') }}">
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-auto my-lg-auto">
                                            <div class="">
                                                <button onclick="chartlista()" type="submit"
                                                    class="btn btnleads">Filter</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-5 py-5">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="mt-3  apexchart" id="line_chart_datalabeel">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-auto">
                                        <div class="textboard mt-5 pt-4 ">
                                            <div class="mb-4" id="elements">
                                            </div>

                                        </div>
                                    </div>
                                    <div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/axios@1.1.2/dist/axios.min.js"></script>
        <script>
            async function linechart() {


                let from = document.getElementById('from').value
                let to = document.getElementById('to').value
               
                

                await $.ajax({
                url: '{{ route('chartcomfiramtion') }}',
                method: "GET",
                data: {
                    from: from,
                    to: to,
                   
                },

                success: function(response) {

                    var result = JSON.parse(response);
                    var result_length = result.length;

                    var series_data = [];
                    var date = [];
                    var dataLead = [];

                    for (let i = 0; i < result_length; i++) {
                        dataLead.push(parseInt(result[i].count));
                        if (!date.includes([result[i].date])) {
                            date.push(result[i].date);
                        }
                    }
                    console.log(date);
                    console.log(dataLead);
                    const data = {
                        name: 'completed',
                        data: dataLead
                    }
                    series_data.push(
                        data
                    )

                    var options = {
                        chart: {
                            height: 380,
                            type: 'line',
                            width: '100%',
                            zoom: {
                                enabled: false
                            },
                            toolbar: {
                                show: false
                            }
                        },
                        dataLabels: {
                            enabled: false,
                        },
                        stroke: {
                            width: [3, 3],
                            curve: 'straight'
                        },
                        series: [],
                        title: {
                            text: '',
                            align: 'left',
                            style: {
                                fontWeight: '500',
                            },
                        },
                        grid: {
                            row: {
                                colors: ['transparent',
                                    'transparent'
                                ], // takes an array which will be repeated on columns
                                opacity: 0.2
                            },
                            borderColor: '#f1f1f1'
                        },
                        markers: {
                            style: 'inverted',
                            size: 0
                        },
                        xaxis: {
                            categories: date,
                            title: {
                                text: 'Date'
                            }
                        },
                        yaxis: {
                            title: {
                                text: 'completed'
                            },

                        },
                        legend: {
                            position: 'top',
                            horizontalAlign: 'right',
                            floating: true,
                            offsetY: -25,
                            offsetX: -5
                        },
                        responsive: [{
                            breakpoint: 600,
                            options: {
                                chart: {
                                    toolbar: {
                                        show: false
                                    }
                                },
                                legend: {
                                    show: false
                                },
                            }
                        }]
                    }


                    var chart = new ApexCharts(
                        document.querySelector("#line_chart_datalabeel"),
                        options
                    );

                    chart.render();
                    chart.updateSeries(series_data);
                }
            })
        }
            $(window).on('load', function() {
                linechart();
            })
        </script>
    @endsection



