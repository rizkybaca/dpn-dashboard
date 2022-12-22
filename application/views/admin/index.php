<main id="main" class="main">
	<div class="pagetitle">
		<h1><?= $title; ?></h1>
	</div>

	<section class="section dashboard mt-4">
		<div class="row">
			<div class="col-lg-8">
				<div class="row">
					<div class="col-xxl-4 col-md-6">
						<div class="card info-card artikel-card">
							<div class="card-body">
								<div class="d-flex align-items-center p-3 mt-3">
									<div class="card-icon rounded-circle d-flex align-items-center justify-content-center"><img src="/assets/img/icon/Group 344.png" alt="" /></div>

									<div class="ps-3">
										<h6>10</h6>
										<span class="text-muted small pt-2 ps-1">Artikel</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xxl-4 col-md-6">
						<div class="card info-card program-card">
							<div class="card-body">
								<div class="d-flex align-items-center p-3 mt-3">
									<div class="card-icon rounded-circle d-flex align-items-center justify-content-center"><img src="/assets/img/icon/Group 345.png" alt="" /></div>
									<div class="ps-3">
										<h6>10</h6>
										<span class="text-muted small pt-2 ps-1">Program</span>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- jumlah user page -->
					<!-- <div class="col-xxl-4 col-xl-12">
                <div class="card info-card customers-card">
                  <div class="filter">
                    <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                      <li class="dropdown-header text-start">
                        <h6>Filter</h6>
                      </li>
                      <li><a class="dropdown-item" href="#">Today</a></li>
                      <li><a class="dropdown-item" href="#">This Month</a></li>
                      <li><a class="dropdown-item" href="#">This Year</a></li>
                    </ul>
                  </div>
                  <div class="card-body">
                    <h5 class="card-title">Customers <span>| This Year</span></h5>
                    <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center"><i class="bi bi-people"></i></div>
                      <div class="ps-3">
                        <h6>1244</h6>
                        <span class="text-danger small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">decrease</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div> -->
					<!-- Chart page -->
					<!-- <div class="col-12">
                <div class="card">
                  <div class="filter">
                    <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                      <li class="dropdown-header text-start">
                        <h6>Filter</h6>
                      </li>
                      <li><a class="dropdown-item" href="#">Today</a></li>
                      <li><a class="dropdown-item" href="#">This Month</a></li>
                      <li><a class="dropdown-item" href="#">This Year</a></li>
                    </ul>
                  </div>
                  <div class="card-body">
                    <h5 class="card-title">Reports <span>/Today</span></h5>
                    <div id="reportsChart"></div>
                    <script>
                      document.addEventListener("DOMContentLoaded", () => {
                        new ApexCharts(document.querySelector("#reportsChart"), {
                          series: [
                            {
                              name: "Sales",
                              data: [31, 40, 28, 51, 42, 82, 56],
                            },
                            {
                              name: "Revenue",
                              data: [11, 32, 45, 32, 34, 52, 41],
                            },
                            {
                              name: "Customers",
                              data: [15, 11, 32, 18, 9, 24, 11],
                            },
                          ],
                          chart: {
                            height: 350,
                            type: "area",
                            toolbar: {
                              show: false,
                            },
                          },
                          markers: {
                            size: 4,
                          },
                          colors: ["#4154f1", "#2eca6a", "#ff771d"],
                          fill: {
                            type: "gradient",
                            gradient: {
                              shadeIntensity: 1,
                              opacityFrom: 0.3,
                              opacityTo: 0.4,
                              stops: [0, 90, 100],
                            },
                          },
                          dataLabels: {
                            enabled: false,
                          },
                          stroke: {
                            curve: "smooth",
                            width: 2,
                          },
                          xaxis: {
                            type: "datetime",
                            categories: [
                              "2018-09-19T00:00:00.000Z",
                              "2018-09-19T01:30:00.000Z",
                              "2018-09-19T02:30:00.000Z",
                              "2018-09-19T03:30:00.000Z",
                              "2018-09-19T04:30:00.000Z",
                              "2018-09-19T05:30:00.000Z",
                              "2018-09-19T06:30:00.000Z",
                            ],
                          },
                          tooltip: {
                            x: {
                              format: "dd/MM/yy HH:mm",
                            },
                          },
                        }).render();
                      });
                    </script>
                  </div>
                </div>
              </div> -->
				</div>
			</div>
		</div>
	</section>
</main>
