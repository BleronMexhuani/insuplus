@extends('layouts.app')

@section('content')
    <div class="" style="margin-top:16px !important;">
        <div class="px-2">
            <div class="mt-4 py-3 ">
                {{-- <span class="titledash">Willkommen {{ Auth::user()->name }}!</span> --}}
                <div class="bgform mt-4 p-4 p-md-5">
                    <div class="row">
                        <div class="col-4 ">
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
                                    <span class="subtitledash">Leads pro Tag </span>
                                    <span
                                        style="font-weight: 700; color: #8B35F9; font-size: 32px;font-family: 'Poppins', sans-serif; ">{{ $today }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 ">
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
                                        style="font-weight: 700; color: #F97035; font-size: 32px; font-family: 'Poppins', sans-serif;">{{ $week }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 ">
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
                                        style="font-weight: 700; color: #F9CE35; font-size: 32px; font-family: 'Poppins', sans-serif;">{{ $month }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row g-0">
                        <div class="col-12">
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
                                                            <span class="titledate">zu</span>
    
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
                                                        class="btn btnleads">Filtern</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=" mt-5 py-5">
                                    <div class="row">
                                        <div class="col-12 col-lg-auto">
                                            {{-- <figure class="highcharts-figure"> --}}
                                            <div id="container" style="max-width: 500px"></div>
                                            {{-- </figure> --}}
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
        </div>
    </div>

    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/variable-pie.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios@1.1.2/dist/axios.min.js"></script>
    <script async>
        var chart;
        Highcharts.setOptions({
            colors: ['#29E7CD', '#F97035', '#F9CE35', '#21618C', '#17202A', '#7B7D7D', '#C0392B', '#196F3D',
                '#8E44AD', '#F1C40F '
            ]
        });
        chart = new Highcharts.chart('container', {
            chart: {
                type: 'variablepie'
            },
            xAxis: {
                slicedOffset: 119
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: false
                    },
                    showInLegend: true
                }
            },
            tooltip: {
                enabled: false
            },
            series: [{
                minPointSize: 10,
                innerSize: '10%',
                zMin: 0,
                data: []

            }],

        });

        async function chartlista() {
            document.getElementById('elements').innerHTML = '';
            let from = document.getElementById('from').value
            let to = document.getElementById('to').value
            let i = 0;
            let colors = ['#29E7CD', '#F97035', '#F9CE35', '#21618C', '#17202A', '#7B7D7D', '#C0392B', '#196F3D',
                '#8E44AD', '#F1C40F '
            ]
            const series_data = [];
            const response = await axios.get('/chartquality_agent?from=' + from + '&to=' + to);
            const data = response.data;



            for (let i = 0; i < data.length; i++) {
                series_data.push({
                    name: data[i][0] ? data[i][0] : 'Null',
                    y: parseInt(data[i][1]),
                    z: 119
                });
                $('#elements').append(`<div class="mb-4">
                        <svg width="12" height="13" viewBox="0 0 12 13" fill=""
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M6 12.5C9.31371 12.5 12 9.81371 12 6.5C12 3.18629 9.31371 0.5 6 0.5C2.68629 0.5 0 3.18629 0 6.5C0 9.81371 2.68629 12.5 6 12.5Z"
                        fill="${colors[i]}" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M6 9.5C7.65685 9.5 9 8.15685 9 6.5C9 4.84315 7.65685 3.5 6 3.5C4.34315 3.5 3 4.84315 3 6.5C3 8.15685 4.34315 9.5 6 9.5Z"
                        fill="white" />
                        </svg>
                        <span class="ms-2">${data[i][0]} : ${data[i][1]} </span>
                        </div>`);
            }

            chart.series[0].update({
                data: series_data
            })
            chart.redraw();

        }
        $(window).on('load', function() {
            chartlista();
        })
    </script>
@endsection
