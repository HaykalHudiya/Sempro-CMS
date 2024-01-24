<x-layout2>
    <x-slot:title>
        Dashboard
    </x-slot>

    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title">
                    <span class="page-title-icon bg-gradient-primary text-white me-2">
                        <i class="mdi mdi-home"></i>
                    </span> Dashboard
                </h3>
                <nav aria-label="breadcrumb">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page">
                            <span></span>Overview <i
                                class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="row">
                <div class="col-md-4 stretch-card grid-margin">
                    <div class="card bg-gradient-danger card-img-holder text-white">
                        <div class="card-body">
                            <img src="{{ asset('Assets/CMS/images/dashboard/circle.svg') }}" class="card-img-absolute"
                                alt="circle-image" />
                            <h4 class="font-weight-normal mb-3">Visitors Online <i
                                    class="mdi mdi-chart-line mdi-24px float-right"></i>
                            </h4>
                            <h2 class="mb-5">{{ $visitors }}</h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 stretch-card grid-margin">
                    <div class="card bg-gradient-info card-img-holder text-white">
                        <div class="card-body">
                            <img src="{{ asset('Assets/CMS/images/dashboard/circle.svg') }}" class="card-img-absolute"
                                alt="circle-image" />
                            <h4 class="font-weight-normal mb-3">Articles <i
                                    class="mdi mdi-bookmark-outline mdi-24px float-right"></i>
                            </h4>
                            <h2 class="mb-5">{{ count($posts) }}</h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 stretch-card grid-margin">
                    <div class="card bg-gradient-success card-img-holder text-white">
                        <div class="card-body">
                            <img src="{{ asset('Assets/CMS/images/dashboard/circle.svg') }}" class="card-img-absolute"
                                alt="circle-image" />
                            <h4 class="font-weight-normal mb-3">Partners <i
                                    class="mdi mdi-diamond mdi-24px float-right"></i>
                            </h4>
                            <h2 class="mb-5">{{ count($contents) }}</h2>
                            {{-- <h6 class="card-text">Increased by 5%</h6> --}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-9 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Traffic Visitors</h4>
                            <div class="d-flex">
                                <div class="d-flex align-items-center me-4 text-muted font-weight-light">
                                    <i class="mdi mdi-chart-areaspline icon-sm me-2"></i>
                                    <span>January - December</span>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-12 pe-1">
                                    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>

                                    <canvas id="myChart" width="4000" height="2000"></canvas>

                                    <script>
                                        var ctx = document.getElementById("myChart").getContext("2d");
                                        var myChart = new Chart(ctx, {
                                            type: "bar",
                                            data: {
                                                labels: <?php echo json_encode($labels); ?>,
                                                datasets: [{
                                                    label: "Jumlah Kunjungan",
                                                    data: <?php echo json_encode($data); ?>,
                                                    backgroundColor: ["#F08A5D", "#393E46", "#FF2E63", "#00ADB5", "#FFD1D1", "#F38181",
                                                        "#A6B1E1", "#A8D8EA", "#0F4C75", "#3FC1C9", "#D7C0AE", "#7D5A50"
                                                    ],
                                                    fill: true,
                                                    borderWidth: 2
                                                }]
                                            },
                                            options: {
                                                scales: {
                                                    xAxes: [{
                                                        ticks: {
                                                            callback: function(value) {
                                                                // Ubah angka bulan menjadi nama bulan
                                                                return ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli",
                                                                    "Agustus", "September", "Oktober", "November", "Desember"
                                                                ][value - 1];
                                                            }
                                                        }
                                                    }],
                                                    yAxes: [{
                                                        ticks: {
                                                            min: 0,
                                                            max: {{ $visitors }}
                                                        }
                                                    }],
                                                }
                                            }
                                        });
                                    </script>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Top Categories</h4>
                            <div class="d-flex">
                                <div class="d-flex align-items-center me-4 text-muted font-weight-light">
                                    <span>{{ count($categories) }} Categories, {{ count($articles) }} Articles</span>
                                </div>
                            </div>
                            <br>
                            <hr>
                            @foreach ($top as $index => $item)
                                @if ($index < 4)
                                    <p class="card-text">{{ $index + 1 }}. {{ $item }}</p>
                                    <hr>
                                @endif
                            @endforeach
                            <div class="row mt-3">
                                <div class="col-6 pe-1">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
</x-layout2>
