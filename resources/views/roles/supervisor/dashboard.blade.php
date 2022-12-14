@extends('layouts.app')
@section('content')
    <div class="" style="margin-top:16px !important;">
        <div class="row">
            <div class="col-4">
                <label class="ms-2"
                    style="    font-family: 'Raleway';
            font-weight: 600;
            font-size: 18px;
            color: #1F1F1F;"
                    for="">Filter</label>
                <select name="" id="filter_leads" class="selectpicker w-25 mt-2 ms-2">

                    <option value="today">Heute</option>
                    <option value="this_week">Woche</option>
                    <option value="this_month">Monat</option>
                    <option value="total">Gesamt</option>
                </select>
            </div>
        </div>
        <div class="px-2">
            <div class="mt-4 py-3">
                {{-- <span class="titledash">Willkommen Enis Demolli!</span> --}}
                <div class="row">
                    <div class="col-sm-6">
                        <div class="dashborder">
                            <div>
                                <svg width="52" height="53" viewBox="0 0 52 53" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect y="0.5" width="52" height="52" rx="16" fill="#00727A"
                                        fill-opacity="0.1" />
                                    <path
                                        d="M21.668 15.1667V13.1667C21.668 12.6201 21.2146 12.1667 20.668 12.1667C20.1213 12.1667 19.668 12.6201 19.668 13.1667V15.2467C20.0013 15.2067 20.308 15.1667 20.668 15.1667H21.668Z"
                                        fill="#00727A" />
                                    <path
                                        d="M32.332 15.2467V13.1667C32.332 12.6201 31.8787 12.1667 31.332 12.1667C30.7854 12.1667 30.332 12.6201 30.332 13.1667V15.1667H31.332C31.692 15.1667 31.9987 15.2067 32.332 15.2467Z"
                                        fill="#00727A" />
                                    <path
                                        d="M32.3333 15.2467V17.1667C32.3333 17.7134 31.88 18.1667 31.3333 18.1667C30.7867 18.1667 30.3333 17.7134 30.3333 17.1667V15.1667H21.6667V17.1667C21.6667 17.7134 21.2133 18.1667 20.6667 18.1667C20.12 18.1667 19.6667 17.7134 19.6667 17.1667V15.2467C15.7333 15.6067 14 18.1401 14 21.8334V33.1667C14 37.1667 16 39.8334 20.6667 39.8334H31.3333C36 39.8334 38 37.1667 38 33.1667V21.8334C38 18.1401 36.2667 15.6067 32.3333 15.2467ZM26 32.8334H20.6667C20.12 32.8334 19.6667 32.3801 19.6667 31.8334C19.6667 31.2867 20.12 30.8334 20.6667 30.8334H26C26.5467 30.8334 27 31.2867 27 31.8334C27 32.3801 26.5467 32.8334 26 32.8334ZM31.3333 26.1667H20.6667C20.12 26.1667 19.6667 25.7134 19.6667 25.1667C19.6667 24.6201 20.12 24.1667 20.6667 24.1667H31.3333C31.88 24.1667 32.3333 24.6201 32.3333 25.1667C32.3333 25.7134 31.88 26.1667 31.3333 26.1667Z"
                                        fill="#00727A" />
                                </svg>
                            </div>
                            <div class="d-flex flex-column">
                                <span class="subtitledash">Total Terminiert</span>
                                <span
                                    style="font-weight: 700; color: #00727A; font-size: 32px;font-family: 'Poppins', sans-serif; "
                                    id="total_terminert">{{ $total_terminert }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="dashborder mt-3 mt-sm-0">
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
                                <span class="subtitledash">Total Leads</span>
                                <span
                                    style="font-weight: 700; color: #F97035; font-size: 32px;font-family: 'Poppins', sans-serif; "
                                    id="total_leads">{{ $total_leads }}</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bgform mt-4 p-4 p-md-5">

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mt-4">
                                <button class="w-100 open-button dashborder" onclick="openForm()"><span><svg width="52"
                                            height="53" viewBox="0 0 52 53" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <rect y="0.5" width="52" height="52" rx="16" fill="#00727A"
                                                fill-opacity="0.1" />
                                            <path
                                                d="M14.8008 19.6428C14.8008 17.5388 16.5916 15.8333 18.8008 15.8333H33.2008C35.4099 15.8333 37.2008 17.5388 37.2008 19.6428V20.4047H14.8055V21.9285H34.0008C30.908 21.9285 28.4008 24.3163 28.4008 27.2618C28.4008 28.7541 29.0443 30.1033 30.0816 31.0713C28.7757 31.0713 27.743 31.699 27.0992 32.3887C26.464 33.0692 26.0008 34.0202 26.0008 35.0637V35.5513C26.0008 36.1181 26.0902 36.6582 26.2577 37.1666H18.8008C16.5916 37.1666 14.8008 35.461 14.8008 33.3571V19.6428ZM34.0008 31.0713C31.7917 31.0713 30.0008 29.3657 30.0008 27.2618C30.0008 25.1579 31.7917 23.4523 34.0008 23.4523C35.3094 23.4523 36.4713 24.0508 37.2011 24.9761H34.0008V26.4999H37.9208C37.9733 26.7462 38.0008 27.0009 38.0008 27.2618C38.0008 27.5227 37.9733 27.7775 37.9208 28.0237H34.0008V29.5475H37.2011C36.4713 30.4728 35.3094 31.0713 34.0008 31.0713ZM30.0808 32.5952C29.3368 32.5952 28.7128 32.9536 28.295 33.4011C27.8803 33.8453 27.6008 34.4467 27.6008 35.0637V35.5513C27.6008 38.0419 30.2139 40.2142 34.0008 40.2142C35.9859 40.2142 37.6486 39.6172 38.7813 38.6904H34.0008V37.1666H40.0185C40.2544 36.6861 40.3861 36.1721 40.3997 35.6428H34.0008V34.119H40.1877C40.0673 33.8547 39.9019 33.6105 39.7065 33.4011C39.2888 32.9536 38.6648 32.5952 37.9208 32.5952H30.0808Z"
                                                fill="#00727A" />
                                        </svg>
                                    </span> Umfrage Agent </button>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mt-4">
                                <button class="w-100 open-button dashborder" onclick="openFormm()"><span>
                                        <svg width="53" height="53" viewBox="0 0 53 53" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <rect x="0.5" y="0.5" width="52" height="52" rx="16"
                                                fill="#F97035" fill-opacity="0.1" />
                                            <path
                                                d="M26.4994 13.2585C31.8862 13.2585 36.2713 17.5474 36.4262 22.8967L36.4304 23.1896V28.9874C36.4304 30.6012 35.1706 31.9208 33.5808 32.0164L33.3959 32.0219H30.0899C29.6709 32.0219 29.3248 31.7106 29.2699 31.3067L29.2623 31.1943V24.5689C29.2623 24.1499 29.5737 23.8036 29.9777 23.7488L30.0899 23.7413H34.4994C34.5935 23.7413 34.686 23.748 34.7765 23.7611L34.7753 23.1896C34.7753 18.6189 31.07 14.9137 26.4994 14.9137C22.0184 14.9137 18.3692 18.4751 18.2278 22.9218L18.2235 23.1896V23.7413H22.9089C23.3279 23.7413 23.674 24.0527 23.7289 24.4566L23.7365 24.5689V31.1943C23.7365 31.6133 23.4251 31.9596 23.0211 32.0144L22.9089 32.0219H19.6028C19.1063 32.0219 18.6376 31.9026 18.2238 31.6912L18.2235 33.3965C18.2235 34.7106 19.2444 35.7861 20.5363 35.8735L20.7063 35.8792L23.2347 35.88C23.4974 34.314 24.8592 33.1206 26.4998 33.1206C28.3284 33.1206 29.8107 34.6029 29.8107 36.4314C29.8107 38.2599 28.3284 39.7423 26.4998 39.7423C25.0583 39.7423 23.8319 38.8209 23.3774 37.535L20.7063 37.5344C18.4947 37.5344 16.6883 35.7993 16.5741 33.6163L16.5684 33.3965V23.1896C16.5684 17.7048 21.0146 13.2585 26.4994 13.2585ZM26.4998 34.7758C25.5855 34.7758 24.8442 35.5171 24.8442 36.4314C24.8442 37.3458 25.5855 38.0871 26.4998 38.0871C27.4143 38.0871 28.1556 37.3458 28.1556 36.4314C28.1556 35.5171 27.4143 34.7758 26.4998 34.7758Z"
                                                fill="#F24822" />
                                        </svg>

                                    </span> Call Agent</button>
                            </div>
                        </div>

                         <div class="form-popup" id="myForm">
                        <form class="form-container">
                            <div class="text-center mb-3 mt-3">
                                <span class="titledash">Grafik f??r Benutzerstatistiken</span>
                            </div>
                            <div class="row">
                                <div class="col-lg-5">
                                    <div class="mb-2">
                                        <span class="subtitleform">Benutzer </span>
                                    </div>
                                    <select class="selectpicker" id="benutzer_grafik_calldatum" data-live-search="true"
                                        multiple data-actions-box="true">
                                        @foreach ($umfrage_agents as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach

                                    </select>
                                </div>
                                <div class="col-lg-5">
                                    <div class="mt-4 mt-lg-0">
                                    <div class="mb-2">
                                        <span class="subtitleform">Call Datum: </span>
                                    </div>
                                    <div class="input-group mt-2 ">
                                        <input type="text" class="form-controol input-sm mb-4" id="umfrage_grafik_von"
                                            name="" placeholder="von" onfocus="(this.type='date')"
                                            onblur="(this.type='text')">
                                        <input type="text" class="form-controol input-sm mb-4" placeholder="bis"
                                            onfocus="(this.type='date')" onblur="(this.type='text')" id="umfrage_grafik_bis"
                                            name="">
                                    </div>
                                </div>
                                </div>
                                <div class="col-lg-2 ">
                                    <div class="grafikbutton mt-2 mt-lg-0">
                                        <div class="mb-1">
                                            <span class="subtitleform">Aktionen</span>
                                        </div>
                                        <button class="anzeigenbtn mb-3 mb-lg-2" type="button"
                                            onclick="umfrageAgentBenutzer()">Anzeigen</button>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-1 apexchart" id="myForm">
                                <div class="row">
                                    <div id="line_chart_datalabel"></div>
                                </div>
                            </div>
                        </form>
                       
                    </div>
                    </div>

                     <div class="form-popup" id="myFormm">
                    <form action="/action_page.php" class="form-container">
                        <div class="text-center mb-3 mt-3">
                            <span class="titledash">Grafik f??r Benutzerstatistiken</span>
                        </div>
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="mb-2">
                                    <span class="subtitleform">Benutzer </span>
                                </div>
                                <select class="selectpicker" id="callagent_benutzer" data-live-search="true">
                                    @foreach ($callagents as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach

                                </select>
                            </div>
                            <div class="col-lg-5">
                                <div class="mt-4 mt-lg-0">
                                <div class="mb-2">
                                    <span class="subtitleform">Call Datum: </span>
                                </div>
                                <div class="input-group mt-2 ">
                                    <input type="text" class="form-controol input-sm mb-4" id="umfrage_grafik_von"
                                        name="" placeholder="von" onfocus="(this.type='date')"
                                        onblur="(this.type='text')">
                                    <input type="text" class="form-controol input-sm mb-4" placeholder="bis"
                                        onfocus="(this.type='date')" onblur="(this.type='text')" id="umfrage_grafik_bis"
                                        name="">
                                </div>
                            </div>
                            </div>
                            <div class="col-lg-2 ">
                                <div class="grafikbutton mt-2 mt-lg-0">
                                    <div class="mb-1">
                                        <span class="subtitleform">Aktionen</span>
                                    </div>
                                    <button class="anzeigenbtn" type="button"
                                        onclick="firstCallAgentChart()">Anzeigen</button>
                                </div>
                            </div>
                        </div>
                        <div class="mt-3 apexchart" id="myForm">
                            <div class="row">
                                <div id="line_chart_datalabeel"></div>
                            </div>
                        </div>
                    </form>
                </div> 
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

        // function closeForm() {
        //     document.getElementById("myForm").style.display = "none";
        // }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/variable-pie.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>

   


    <script>

        //  line chart datalabel
        async function umfrageAgentBenutzer() {

            let umfrage_agents = $("#benutzer_grafik_calldatum").val()
            let umfrage_grafik_von = $("#umfrage_grafik_von").val();
            let umfrage_grafik_bis = $("#umfrage_grafik_bis").val();

            await $.ajax({
                url: '{{ route('umfrage_first_chart') }}',
                method: "GET",
                data: {
                    umfrage_agents: umfrage_agents,
                    umfrage_grafik_von: umfrage_grafik_von,
                    umfrage_grafik_bis: umfrage_grafik_bis
                },
                success: function(response) {


                    var result = JSON.parse(response);
                    var result_length = result.length;

                    var series_data = [];
                    var date = [];
                    var dataLead = [];
                    for (let i = 0; i < result_length; i++) {
                        dataLead = [];
                        for (let j = 0; j <= result[i].length - 1; j++) {
                            dataLead.push(parseInt(result[i][j].asd));
                            if (!date.includes([result[i][j].date])) {
                                date.push(result[i][j].date);
                            }
                        }

                        const data = {
                            name: result[i][0].name,
                            data: dataLead
                        }
                        series_data.push(
                            data
                        )
                    }

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

                        }],
                        title: {
                            // text: 'Average High & Low Temperature',
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
                                text: 'Month'
                            }
                        },
                        yaxis: {
                            title: {
                                text: 'Terminiert'
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
                        document.querySelector("#line_chart_datalabel"),
                        options
                    );
                    chart.render();
                    chart.updateSeries(series_data);
                }

            })


        }
    </script> --}}

    {{-- <script>
        //  line chart datalabel2
        async function firstCallAgentChart() {
            let callagent_benutzer = $("#callagent_benutzer").val();

            await $.ajax({
                url: '{{ route('call_agent_first_chart') }}',
                method: "GET",
                data: {
                    callagent_benutzer: callagent_benutzer
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
                        name: 'Terminiert',
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
                            // text: 'Average High & Low Temperature',
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
                                text: 'Terminiert'
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
    </script> --}}
    {{-- <script>
        $("#filter_leads").on("change", async function() {
            let filter = $(this).val();
            await $.ajax({
                url: '{{route('dashboardFilterLeads')}}',
                method: "GET",
                data: {
                    filter: filter
                },
                success: function(response) {

                    document.getElementById('total_terminert').innerText = response.termins
                    document.getElementById('total_leads').innerText = response.leads
                 
                }
            })
        })
    </script> --}}
@endsection
