@extends('layouts.app')
@section('content')
    <div class="" style="margin-top:16px !important;">
        <div class="mt-4 py-3 px-2">
            <span class="titledash">Willkommen Enis Demolli!</span>
            <div class="bgform mt-4 p-4 p-md-5">
                <div class="row">
                    <div class="col-6">
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
                    <div class="col-6">
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
                                <span class="titledash">Grafik für Benutzerstatistiken</span>
                            </div>
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="mb-3">
                                        <span class="subtitleform">Benutzer </span>
                                    </div>
                                    <select class="selectpicker" id="benutzer_grafik_calldatum" data-live-search="true"
                                        multiple data-actions-box="true">
                                        @foreach ($umfrage_agents as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach

                                    </select>
                                </div>
                                <div class="col-md-5">
                                    <div class="mb-3">
                                        <span class="subtitleform">Call Datum: </span>
                                    </div>
                                    <div class="input-group mt-2 ">
                                        <input type="text" class="form-controol input-sm mb-4" id="umfrage_grafik_von"
                                            name="" placeholder="von" onfocus="(this.type='date')"
                                            onblur="(this.type='text')" onchange="change()">
                                        <input type="text" class="form-controol input-sm mb-4" placeholder="bis"
                                            onfocus="(this.type='date')" onblur="(this.type='text')" id="umfrage_grafik_bis"
                                            name="">
                                    </div>
                                </div>
                                <div class="col-md-2 ">
                                    <div class="mb-2 ">
                                        <span class="subtitleform">Action</span>
                                    </div>
                                    <button class="anzeigenbtn" type="button"
                                        onclick="umfrageAgentBenutzer()">Anzeigen</button>
                                </div>
                            </div>
                            <div class="mt-1 apexchart" id="myForm">
                                <div class="row">
                                    <div id="line_chart_datalabel"></div>
                                </div>
                            </div>
                        </form>
                        <form action="/action_page.php" class="form-container">
                            <div class="text-center mb-3 mt-3">
                                <span class="titledash">Grafik für Benutzerstatistiken mit Status/Feedback</span>
                            </div>
                            <div class="row">
                                <div class="col-3">
                                    <div class="mb-3">
                                        <span class="subtitleform">Benutzer </span>
                                    </div>
                                    <select class="selectpicker" id="benutzer_second_chart" data-live-search="true" multiple
                                        data-actions-box="true">
                                        @foreach ($umfrage_agents as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-3">
                                    <div class="mb-3">
                                        <span class="subtitleform">Bestatigungsstatus: </span>
                                    </div>
                                    <select class="selectpicker" id="bestatigungstatus" data-live-search="true" multiple
                                        data-actions-box="true">


                                        <option value="null">Null</option>
                                        <option value="Bestätigt">Bestätigt</option>
                                        <option value="intern">Intern</option>
                                        <option value="Krankenkasse">Krankenkasse</option>
                                        <option value="Autoversicherung">Autoversicherung</option>
                                        <option value="Bestätigung pendent">Bestätigung pendent</option>
                                        <option value="Nicht bestätigt">Nicht bestätigt</option>



                                </div>
                                </select>
                            </div>
                            <div class="col-4 ">
                                <div class="mb-3">
                                    <span class="subtitleform">Erstellungsdatum: </span>
                                </div>
                                <div class="input-group mt-2 ">
                                    <input type="text" class="form-controol input-sm mb-4" id="von_second_chart"
                                        placeholder="von" onfocus="(this.type='date')" onblur="(this.type='text')"
                                        name="" onchange="change()">
                                    <input type="text" class="form-controol input-sm mb-4" id="bis_second_chart"
                                        placeholder="bis" onfocus="(this.type='date')" onblur="(this.type='text')"
                                        name="">
                                </div>
                            </div>
                            <div class="col-2 ">
                                <div class="mb-2">
                                    <span class="subtitleform">Action</span>
                                </div>
                                <button class="anzeigenbtn" type="button" onclick="grafikFurStatus()">Anzeigen</button>
                            </div>
                            <div class="mt-1 apexchart d-flex justify-content-center" id="myForm">
                                <canvas id="myChart" style="width:100%;max-width:800px"></canvas>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="form-popup" id="myFormm">
                    <form action="/action_page.php" class="form-container">
                        <div class="text-center mb-3 mt-3">
                            <span class="titledash">Grafik für Benutzerstatistiken</span>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-2">
                                    <span class="subtitleform">Benutzer </span>
                                </div>
                                <select class="selectpicker" data-live-search="true">
                                    @foreach ($callagents as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach

                                </select>
                            </div>

                            <div class="col-md-6 ">
                                <div class="">
                                    <div class="mb-2 ">
                                        <span class="subtitleform">Action</span>
                                    </div>
                                    <button class="anzeigenbtn">Anzeigen</button>
                                </div>
                            </div>
                        </div>
                        <div class="mt-3 apexchart" id="myForm">
                            <div class="row">
                                <div id="line_chart_datalabeel"></div>
                            </div>
                        </div>
                    </form>
                    <form action="/action_page.php" class="form-container">
                        <div class="text-center mb-3 mt-3">
                            <span class="titledash">Grafik für Benutzerstatistiken mit Status/Feedback</span>
                        </div>
                        <div class="row">
                            <div class="col-3">
                                <div class="mb-3">
                                    <span class="subtitleform">Benutzer </span>
                                </div>
                                <select class="selectpicker" data-live-search="true">
                                    @foreach ($callagents as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-3">
                                <div class="mb-3">
                                    <span class="subtitleform">Feedback: </span>
                                </div>
                                <select class="selectpicker" data-live-search="true" multiple data-actions-box="true">
                                    <option value="1">Test</option>
                                    <option value="2">Test1</option>
                                    <option value="3">Test2</option>
                                    <option value="4">Test3</option>
                                </select>
                            </div>
                            <div class="col-4">
                                <div class="mb-3">
                                    <span class="subtitleform">Verteildatum: </span>
                                </div>
                                <div class="input-group mt-2 ">
                                    <input type="text" class="form-controol input-sm mb-4" placeholder="von"
                                        onfocus="(this.type='date')" onblur="(this.type='text')" name=""
                                        onchange="change()">
                                    <input type="text" class="form-controol input-sm mb-4" placeholder="bis"
                                        onfocus="(this.type='date')" onblur="(this.type='text')" name="">
                                </div>
                            </div>
                            <div class="col-2 ">
                                <div class="mb-2">
                                    <span class="subtitleform">Action</span>
                                </div>
                                <button class="anzeigenbtn">Anzeigen</button>
                            </div>
                            <div class="mt-1 apexchart d-flex justify-content-center" id="myForm">
                                <canvas id="myChart1" style="width:100%;max-width:800px"></canvas>
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
        var xValues = ["Lorem", "Lorem", "Lorem"];
        var yValues = [55, 24, 15];
        var barColors = [
            "#a95g47",
            "#05aba9",
            "#1e7145"
        ];

        new Chart("myChart1", {
            type: "pie",
            data: {
                labels: xValues,
                datasets: [{
                    backgroundColor: barColors,
                    data: yValues
                }]
            },
            options: {
                title: {
                    display: true,
                }
            }
        });
    </script>

    <script>
        async function grafikFurStatus() {

            let umfrage_agents = $("#benutzer_second_chart").val()
            let umfrage_grafik_von = $("#von_second_chart").val();
            let umfrage_grafik_bis = $("#bis_second_chart").val();
            let bestatigungstatus = $("#bestatigungstatus").val();

            await $.ajax({
                url: '{{ route('umfrage_second_chart') }}',
                method: "GET",
                data: {
                    umfrage_agents: umfrage_agents,
                    umfrage_grafik_von: umfrage_grafik_von,
                    umfrage_grafik_bis: umfrage_grafik_bis,
                    bestatigungstatus: bestatigungstatus
                },
                success: function(response) {
                    let status = [];
                    let values = [];
                    let result = JSON.parse(response);

                    var barColors = [
                        "#a95g47",
                        "#05aba9",
                        "#1e7145"
                    ];


                    for (let i = 0; i < result.length + 1; i++) {
                        status.push(result[0][i].bestatigungs_status);
                        values.push(result[0][i].asd)

                    }

                    var xValues = status;
                    var yValues = values;

                    new Chart("myChart", {
                        type: "pie",
                        data: {
                            labels: xValues,
                            datasets: [{
                                backgroundColor: barColors,
                                data: yValues
                            }]
                        },
                        options: {
                            title: {
                                display: true,
                            }
                        }
                    });
                }
            })


        }
    </script>

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
                            if (!date.includes([result[i][j].created_at])) {
                                date.push(result[i][j].created_at);
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
                            text: 'Average High & Low Temperature',
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
                                text: 'Temperature'
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
    </script>

    <script>
        //  line chart datalabel2


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
            document.querySelector("#line_chart_datalabeel"),
            options
        );

        chart.render();
    </script>
@endsection
