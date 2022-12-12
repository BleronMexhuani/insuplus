@extends('layouts.app')
@section('content')
    <div class="col ms-0 ms-md-2 px-0 px-md-5" style="margin-top:16px !important;">
        <div class="mt-4 py-3 px-2">
            <span class="titledash">Willkommen Enis Demolli!</span>
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
                                <span class="subtitledash">Leads This Today</span>
                                <span
                                    style="font-weight: 700; color: #8B35F9; font-size: 32px;font-family: 'Poppins', sans-serif; ">50</span>
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
                                <span class="subtitledash">Leads This Week</span>
                                <span
                                    style="font-weight: 700; color: #F97035; font-size: 32px; font-family: 'Poppins', sans-serif;">33</span>
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
                                <span class="subtitledash">Leads this Month</span>
                                <span
                                    style="font-weight: 700; color: #F9CE35; font-size: 32px; font-family: 'Poppins', sans-serif;">12’00</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="mt-4">
                            <button class="w-100 open-button" onclick="openForm()">Umfrage Agent </button>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mt-4">
                            <button class="w-100 open-button" onclick="openFormm()">Umfrage Agent </button>
                        </div>
                    </div>

                    <div class="form-popup" id="myForm">
                        <form action="/action_page.php" class="form-container">
                            <div class="text-center mb-3 mt-3">
                            <span class="titledash">Grafik für Benutzerstatistiken</span>
                            </div>
                            <div class="row">
                                <div class="col-md 4">
                                    <div class="mb-2">
                                        <span class="subtitleform">Benutzer </span>
                                    </div>
                                     <select class="selectpicker" data-live-search="true" multiple data-actions-box="true">
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                    <option value="4">Four</option>
                                    <option value="5">Five</option>
                                    <option value="6">Six</option>
                                    <option value="7">Seven</option>
                                    <option value="8">Eight</option>
                                </select></div>
                                <div class="col-md 4">
                                    <div class="mb-2">
                                        <span class="subtitleform">Call Datum: </span>
                                    </div>
                                    <div class="input-group mt-2 ">
                                        <input type="text" class="form-controol input-sm mb-4" placeholder="von"
                                        onfocus="(this.type='date')" onblur="(this.type='text')"  name=""
                                        onchange="change()">
                                    <input type="text" class="form-controol input-sm mb-4" placeholder="bis"
                                        onfocus="(this.type='date')" onblur="(this.type='text')" 
                                        name="">
                                    </div>
                                </div>
                                <div class="col-md 4">
                                   <div class=" mb-2">
                                    <span class="subtitleform">Action</span>
                                   </div>
                                    <button>Anzeigen</button>
                                </div>
                            </div>
                            <div class="mt-1 apexchart" id="myForm">
                                <div class="row">
                                    <div id="line_chart_datalabel"></div>
                                </div>
                            </div>
                    </div>
                    </form>
                </div>






                <div class="form-popup" id="myFormm">
                    <form action="/action_page.php" class="form-container">
                        <div class="mt-1 apexchart" id="myForm">
                            <div class="row">
                                <div class="col-4">
                                    <div class="mt-4">
                                        <span class="ms-4"
                                            style="font-family: 'Raleway'; font-weight: 700; font-size: 18px;color: #1F1F1F;">Leadasdfasdfasdfasdfs</span>
                                    </div>
                                </div>
                                <div class="col-8 d-flex justify-content-end">
                                    <div class="mt-4  ">
                                        <span class="titledate">from</span>
                                        <input type="date" class="dateinput px-0 mx-0 "
                                            value="{{ Carbon\Carbon::now()->format('Y-m-d') }}" placeholder="Start Date"
                                            required min="{{ Carbon\Carbon::now()->format('Y-m-d') }}">


                                    </div>
                                    <div class="mt-4 ms-5">
                                        <span class="titledate">to</span>
                                        <input type="date" class="dateinput px-0 mx-0 col"
                                            value="{{ Carbon\Carbon::now()->format('Y-m-d') }}" placeholder="End Date"
                                            required min="{{ Carbon\Carbon::now()->format('Y-m-d') }}">
                                    </div>
                                    <div class="mt-3 ms-4">
                                        <button type="submit" class="btn btnleads">Filter</button>
                                    </div>
                                </div>

                            </div>
                            <div class="ms-5 mt-5 py-5">
                                <div class="row">


                                    <div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        function openForm() {
            document.getElementById("myForm").style.display = "block";
            document.getElementById("myFormm").style.display = "none";

        }

        function openFormm() {
            document.getElementById("myFormm").style.display = "block";
            document.getElementById("myForm").style.display = "none";

        }

        function closeForm() {
            document.getElementById("myForm").style.display = "none";
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>


    <script>
        //  line chart datalabel


        var options = {
            chart: {
                height: 380,
                type: 'line',
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
            series: [{
                    name: "High - 2018",
                    data: [26, 24, 32, 36, 33, 31, 33]
                },
                {
                    name: "Low - 2018",
                    data: [14, 11, 16, 12, 17, 13, 12]
                }, {
                    name: "Low - 2018",
                    data: [17, 15, 6, 21, 12, 25, 33]
                }
            ],
            title: {
                text: 'Average High & Low Temperature',
                align: 'left',
                style: {
                    fontWeight: '500',
                },
            },
            grid: {
                row: {
                    colors: ['transparent', 'transparent'], // takes an array which will be repeated on columns
                    opacity: 0.2
                },
                borderColor: '#f1f1f1'
            },
            markers: {
                style: 'inverted',
                size: 0
            },
            xaxis: {
                categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul'],
                title: {
                    text: 'Month'
                }
            },
            yaxis: {
                title: {
                    text: 'Temperature'
                },
                min: 5,
                max: 40
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
            document.querySelector("#line_chart_datalabel"),
            options
        );

        chart.render();
    </script>
@endsection
