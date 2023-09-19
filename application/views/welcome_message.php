
<div class="container-scroller">

	<div class="container-fluid page-body-wrapper">
		<div class="main-panel">
			<div class="content-wrapper">
				<!-- <div class="page-header">
					<h3 class="page-title">Dashboard</h3>
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page"> Dashboard </li>
						</ol>
					</nav>
				</div> -->
				<div class="row">
					<div class="grey-bg container-fluid">
						<section id="minimal-statistics">
							<!-- <div class="row">
								<div class="col-12 mt-3 mb-1">
									<h4 class="text-uppercase">Minimal Statistics Cards</h4>
									<p>Statistics on minimal cards.</p>
								</div>
							</div> -->
							<div class="row">
								<div class="col-xl-3 col-sm-6 col-12">
									<div class="card">
										<div class="card-content">
											<div class="card-body">
												<div class="media d-flex">
													<div class="align-self-center">
														<i class="icon-pencil primary font-large-2 float-left"></i>
													</div>
													<div class="media-body text-right">
														<h3><?=$data['no_of_student'];?></h3>
														<span>Total Student Registered</span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-3 col-sm-6 col-12">
									<div class="card">
										<div class="card-content">
											<div class="card-body">
												<div class="media d-flex">
													<div class="align-self-center">
														<i class="icon-user warning font-large-2 float-left"></i>
													</div>
													<div class="media-body text-right">
														<h3><?=$data['male']?></h3>
														<span>Male Students</span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-3 col-sm-6 col-12">
									<div class="card">
										<div class="card-content">
											<div class="card-body">
												<div class="media d-flex">
													<div class="align-self-center">
														<i class="icon-user-female success font-large-2 float-left"></i>
													</div>
													<div class="media-body text-right">
														<h3><?=$data['female']?></h3>
														<span>Female Student</span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-3 col-sm-6 col-12">
									<div class="card">
										<div class="card-content">
											<div class="card-body">
												<div class="media d-flex">
													<div class="align-self-center">
														<i class="icon-check danger font-large-2 float-left"></i>
													</div>
													<div class="media-body text-right">
														<h3><?=$data['no_screened_student']?></h3>
														<span>No Of Screened</span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-xl-3 col-sm-6 col-12">
									<div class="card">
										<div class="card-content">
											<div class="card-body">
												<div class="media d-flex">
													<div class="media-body text-left">
														<h3 class="danger"><?=$data['no_student_referral']?></h3>
														<span>No Of Reffered</span>
													</div>
													<div class="align-self-center">
														<i class="icon-rocket danger font-large-2 float-right"></i>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-3 col-sm-6 col-12">
									<div class="card">
										<div class="card-content">
											<div class="card-body">
												<div class="media d-flex">
													<div class="media-body text-left">
														<h3 class="success"><?=$data['no_student_morbility']?></h3>
														<span> Morbidity</span>
													</div>
													<div class="align-self-center">
														<i class="icon-heart success font-large-2 float-right"></i>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="col-xl-3 col-sm-6 col-12">
									<div class="card">
										<div class="card-content">
											<div class="card-body">
												<div class="media d-flex">
													<div class="media-body text-left">
														<h3 class="warning"><?=$data['no_awareness_session']?></h3>
														<span>Awareness Session</span>
													</div>
													<div class="align-self-center">
														<i class="icon-info warning font-large-2 float-right"></i>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- <div class="col-xl-3 col-sm-6 col-12">
									<div class="card">
										<div class="card-content">
											<div class="card-body">
												<div class="media d-flex">
													<div class="media-body text-left">
														<h3 class="primary">423</h3>
														<span>Support Tickets</span>
													</div>
													<div class="align-self-center">
														<i class="icon-support primary font-large-2 float-right"></i>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div> -->
							</div>

						
						</section>

						
					</div>

				</div>
				<div class="row">
					<div class="col-lg-6 grid-margin stretch-card">
						<div class="card">
							<div class="card-body">
								<h4 class="card-title">Line chart</h4>
								<canvas id="lineChart" style="height: 250px;"></canvas>
							</div>
						</div>
					</div>
					<div class="col-lg-6 grid-margin stretch-card">
						<div class="card">
							<div class="card-body">
								<h4 class="card-title">Bar chart</h4>
								<canvas id="barChart" style="height: 230px;"></canvas>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6 grid-margin stretch-card">
						<div class="card">
							<div class="card-body">
								<h4 class="card-title">Area chart</h4>
								<canvas id="areaChart" style="height: 250px;"></canvas>
							</div>
						</div>
					</div>
					<div class="col-lg-6 grid-margin stretch-card">
						<div class="card">
							<div class="card-body">
								<h4 class="card-title">Doughnut chart</h4>
								<canvas id="doughnutChart" style="height: 250px;"></canvas>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6 grid-margin stretch-card">
						<div class="card">
							<div class="card-body">
								<h4 class="card-title">Pie chart</h4>
								<canvas id="pieChart" style="height: 250px;"></canvas>
							</div>
						</div>
					</div>
					<div class="col-lg-6 grid-margin stretch-card">
						<div class="card">
							<div class="card-body">
								<h4 class="card-title">Scatter chart</h4>
								<canvas id="scatterChart" style="height: 250px;"></canvas>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- content-wrapper ends -->
			<!-- partial:../../partials/_footer.html -->
			<footer class="footer">
				<div class="container">
					<div class="d-sm-flex justify-content-center justify-content-sm-between">
						<!-- <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2021 <a href="https://www.bootstrapdash.com/" target="_blank">BootstrapDash</a>. All rights reserved.</span> -->
						<!-- <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Child Help Foundation<i class="mdi mdi-heart text-danger"></i></span> -->
					</div>
				</div>
			</footer>
			<!-- partial -->
		</div>
		<!-- main-panel ends -->
	</div>
	<!-- page-body-wrapper ends -->
</div>