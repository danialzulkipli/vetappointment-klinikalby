<!DOCTYPE html>
<html lang="en">
<head>
  <title>Senarai Ubat Haiwan</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <div>
        <div class="d-flex flex-row"> <!--left sidebar-->
            <div class="col-md-3">
                <div class="card card1 p-3">
                    <h2 style="color: #FFFFFF;">Sistem Temu Janji Veterinar</h2>
                    <hr class="hline">
                    <div class="d-flex flex-column align-items-center"> 
                        <a href="/pentadbir/dashboard_pentadbir.html"><button class="btn"><i class="fa fa-dashboard"></i><span>Dashboard</span></button> </a>
                        <a href="/pentadbir/senarai_staf.html"><button class="btn mt-3"><i class="fa fa-users"></i><span>Senarai Staf</span></button> </a>
                        <a href="/pentadbir/senarai_pelanggan.html"><button class="btn mt-3"><i class="fa fa-inbox"></i><span>Senarai Pelanggan</span></button></a>
                        <span class="other mt-4">OTHERS</span> 
                        <a href="/pentadbir/senarai_ubat.html"><button class="btn mt-3"><i class="fa fa-book"></i><span>Senarai Ubat Haiwan</span></button> </a>
                        <a href="logout_admin.html"><button class="btn mt-3"><i class="fa fa-question-circle"></i><span>Log Keluar</span></button> </a>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="card card2 p-3">
                    <div class="hello d-flex justify-content-end align-items-center mt-3"> <span>Hi, Pentadbir</span> </div>
                    <!-- Tab Content -->
									<div class="tab-content pt-0">
										
										<!-- Appointment Tab -->
										<div id="pat_appointments" class="tab-pane fade show active">
											<div class="card card-table mb-0">
												<div class="card-body">
													<div class="table-responsive">
														<table class="table table-hover table-center mb-0">
															<thead>
																<tr>
																	<th>Nama Ubat</th>
																	<th>ID ubat</th>
																	<th>Tarikh Daftar</th>
																	<th>ID temujanji</th>
																	<th>Status</th>
																	<th></th>
																</tr>
															</thead>
															<tbody>
																<tr>
																	<td>
																		<h2 class="table-avatar">
																			Ubat Selsema
																		</h2>
																	</td>
																	<td>01</td>
																	<td>22 Okt 2021</td>
																	<td>TJ01</td>
																	<td><span class="badge badge-pill bg-success-light">Confirm</span></td>
																</tr>
																<tr>
																	<td>
																		<h2 class="table-avatar">
																			Ubat Kutu
																		</h2>
																	</td>
																	<td>02</td>
																	<td>29 Sept 2021</td>
																	<td>TJ01</td>
																	<td><span class="badge badge-pill bg-success-light">Confirm</span></td>																	
																		</div>
																	</td>
																</tr>
															</tbody>
														</table>
													</div>
												</div>
											</div>
										</div>
										<!-- /Appointment Tab -->

                                        <!-- Prescription Tab -->
										<div class="tab-pane fade" id="pat_prescriptions">
											<div class="card card-table mb-0">
												<div class="card-body">
													<div class="table-responsive">
														<table class="table table-hover table-center mb-0">
															<thead>
																<tr>
																	<th>Date </th>
																	<th>Name</th>									
																	<th>Created by </th>
																	<th></th>
																</tr>     
															</thead>
															<tbody>
																<tr>
																	<td>14 Nov 2019</td>
																	<td>Prescription 1</td>
																	<td>
																		<h2 class="table-avatar">
																			<a href="doctor-profile.html" class="avatar avatar-sm mr-2">
																				<img class="avatar-img rounded-circle" src="assets/img/doctors/doctor-thumb-01.jpg" alt="User Image">
																			</a>
																			<a href="doctor-profile.html">Dr. Ruby Perrin <span>Dental</span></a>
																		</h2>
																	</td>
																	<td class="text-right">
																		<div class="table-action">
																			<a href="javascript:void(0);" class="btn btn-sm bg-primary-light">
																				<i class="fas fa-print"></i> Print
																			</a>
																			<a href="javascript:void(0);" class="btn btn-sm bg-info-light">
																				<i class="far fa-eye"></i> View
																			</a>
																		</div>
																	</td>
																</tr>
																<tr>
																	<td>13 Nov 2019</td>
																	<td>Prescription 2</td>
																	<td>
																		<h2 class="table-avatar">
																			<a href="doctor-profile.html" class="avatar avatar-sm mr-2">
																				<img class="avatar-img rounded-circle" src="assets/img/doctors/doctor-thumb-02.jpg" alt="User Image">
																			</a>
																			<a href="doctor-profile.html">Dr. Darren Elder <span>Dental</span></a>
																		</h2>
																	</td>
																	<td class="text-right">
																		<div class="table-action">
																			<a href="javascript:void(0);" class="btn btn-sm bg-primary-light">
																				<i class="fas fa-print"></i> Print
																			</a>
																			<a href="javascript:void(0);" class="btn btn-sm bg-info-light">
																				<i class="far fa-eye"></i> View
																			</a>
																		</div>
																	</td>
																</tr>
																<tr>
																	<td>12 Nov 2019</td>
																	<td>Prescription 3</td>
																	<td>
																		<h2 class="table-avatar">
																			<a href="doctor-profile.html" class="avatar avatar-sm mr-2">
																				<img class="avatar-img rounded-circle" src="assets/img/doctors/doctor-thumb-03.jpg" alt="User Image">
																			</a>
																			<a href="doctor-profile.html">Dr. Deborah Angel <span>Cardiology</span></a>
																		</h2>
																	</td>
																	<td class="text-right">
																		<div class="table-action">
																			<a href="javascript:void(0);" class="btn btn-sm bg-primary-light">
																				<i class="fas fa-print"></i> Print
																			</a>
																			<a href="javascript:void(0);" class="btn btn-sm bg-info-light">
																				<i class="far fa-eye"></i> View
																			</a>
																		</div>
																	</td>
																</tr>
																<tr>
																	<td>11 Nov 2019</td>
																	<td>Prescription 4</td>
																	<td>
																		<h2 class="table-avatar">
																			<a href="doctor-profile.html" class="avatar avatar-sm mr-2">
																				<img class="avatar-img rounded-circle" src="assets/img/doctors/doctor-thumb-04.jpg" alt="User Image">
																			</a>
																			<a href="doctor-profile.html">Dr. Sofia Brient <span>Urology</span></a>
																		</h2>
																	</td>
																	<td class="text-right">
																		<div class="table-action">
																			<a href="javascript:void(0);" class="btn btn-sm bg-primary-light">
																				<i class="fas fa-print"></i> Print
																			</a>
																			<a href="javascript:void(0);" class="btn btn-sm bg-info-light">
																				<i class="far fa-eye"></i> View
																			</a>
																		</div>
																	</td>
																</tr>
																<tr>
																	<td>10 Nov 2019</td>
																	<td>Prescription 5</td>
																	<td>
																		<h2 class="table-avatar">
																			<a href="doctor-profile.html" class="avatar avatar-sm mr-2">
																				<img class="avatar-img rounded-circle" src="assets/img/doctors/doctor-thumb-05.jpg" alt="User Image">
																			</a>
																			<a href="doctor-profile.html">Dr. Marvin Campbell <span>Dental</span></a>
																		</h2>
																	</td>
																	<td class="text-right">
																		<div class="table-action">
																			<a href="javascript:void(0);" class="btn btn-sm bg-primary-light">
																				<i class="fas fa-print"></i> Print
																			</a>
																			<a href="javascript:void(0);" class="btn btn-sm bg-info-light">
																				<i class="far fa-eye"></i> View
																			</a>
																		</div>
																	</td>
																</tr>
																<tr>
																	<td>9 Nov 2019</td>
																	<td>Prescription 6</td>
																	<td>
																		<h2 class="table-avatar">
																			<a href="doctor-profile.html" class="avatar avatar-sm mr-2">
																				<img class="avatar-img rounded-circle" src="assets/img/doctors/doctor-thumb-06.jpg" alt="User Image">
																			</a>
																			<a href="doctor-profile.html">Dr. Katharine Berthold <span>Orthopaedics</span></a>
																		</h2>
																	</td>
																	<td class="text-right">
																		<div class="table-action">
																			<a href="javascript:void(0);" class="btn btn-sm bg-primary-light">
																				<i class="fas fa-print"></i> Print
																			</a>
																			<a href="javascript:void(0);" class="btn btn-sm bg-info-light">
																				<i class="far fa-eye"></i> View
																			</a>
																		</div>
																	</td>
																</tr>
																<tr>
																	<td>8 Nov 2019</td>
																	<td>Prescription 7</td>
																	<td>
																		<h2 class="table-avatar">
																			<a href="doctor-profile.html" class="avatar avatar-sm mr-2">
																				<img class="avatar-img rounded-circle" src="assets/img/doctors/doctor-thumb-07.jpg" alt="User Image">
																			</a>
																			<a href="doctor-profile.html">Dr. Linda Tobin <span>Neurology</span></a>
																		</h2>
																	</td>
																	<td class="text-right">
																		<div class="table-action">
																			<a href="javascript:void(0);" class="btn btn-sm bg-primary-light">
																				<i class="fas fa-print"></i> Print
																			</a>
																			<a href="javascript:void(0);" class="btn btn-sm bg-info-light">
																				<i class="far fa-eye"></i> View
																			</a>
																		</div>
																	</td>
																</tr>
																<tr>
																	<td>7 Nov 2019</td>
																	<td>Prescription 8</td>
																	<td>
																		<h2 class="table-avatar">
																			<a href="doctor-profile.html" class="avatar avatar-sm mr-2">
																				<img class="avatar-img rounded-circle" src="assets/img/doctors/doctor-thumb-08.jpg" alt="User Image">
																			</a>
																			<a href="doctor-profile.html">Dr. Paul Richard <span>Dermatology</span></a>
																		</h2>
																	</td>
																	<td class="text-right">
																		<div class="table-action">
																			<a href="javascript:void(0);" class="btn btn-sm bg-primary-light">
																				<i class="fas fa-print"></i> Print
																			</a>
																			<a href="javascript:void(0);" class="btn btn-sm bg-info-light">
																				<i class="far fa-eye"></i> View
																			</a>
																		</div>
																	</td>
																</tr>
																<tr>
																	<td>6 Nov 2019</td>
																	<td>Prescription 9</td>
																	<td>
																		<h2 class="table-avatar">
																			<a href="doctor-profile.html" class="avatar avatar-sm mr-2">
																				<img class="avatar-img rounded-circle" src="assets/img/doctors/doctor-thumb-09.jpg" alt="User Image">
																			</a>
																			<a href="doctor-profile.html">Dr. John Gibbs <span>Dental</span></a>
																		</h2>
																	</td>
																	<td class="text-right">
																		<div class="table-action">
																			<a href="javascript:void(0);" class="btn btn-sm bg-primary-light">
																				<i class="fas fa-print"></i> Print
																			</a>
																			<a href="javascript:void(0);" class="btn btn-sm bg-info-light">
																				<i class="far fa-eye"></i> View
																			</a>
																		</div>
																	</td>
																</tr>
																<tr>
																	<td>5 Nov 2019</td>
																	<td>Prescription 10</td>
																	<td>
																		<h2 class="table-avatar">
																			<a href="doctor-profile.html" class="avatar avatar-sm mr-2">
																				<img class="avatar-img rounded-circle" src="assets/img/doctors/doctor-thumb-10.jpg" alt="User Image">
																			</a>
																			<a href="doctor-profile.html">Dr. Olga Barlow <span>Dental</span></a>
																		</h2>
																	</td>
																	<td class="text-right">
																		<div class="table-action">
																			<a href="javascript:void(0);" class="btn btn-sm bg-primary-light">
																				<i class="fas fa-print"></i> Print
																			</a>
																			<a href="javascript:void(0);" class="btn btn-sm bg-info-light">
																				<i class="far fa-eye"></i> View
																			</a>
																		</div>
																	</td>
																</tr>
															</tbody>	
														</table>
													</div>
												</div>
											</div>
										</div>
										<!-- /Prescription Tab -->
                </div>
            </div>
        </div>
    </div>

</body>
</html>


<style>

    /* css styling for dashboard interface */
    * {
    margin: 0;
    padding: 0
    }

    body {
        background-color: #fff
    }

    .card1 {
        height: 100vh;
        width: 100%;
        background-color: #990000;
        border: none
    }

    .card2 {
        height: 100vh;
        width: 100%;
        background-color: #f6f5fa;
        border: none
    }

    .image span {
        color: #fff;
        font-size: 28px
    }

    .hline {
        color: #a2a5d8
    }

    .btn {
        height: 40px;
        width: 100%;
        border: none;
        position: relative;
        border-radius: 5px
    }

    .btn i {
        position: absolute;
        left: 10px;
        color: #fff;
        font-weight: 500;
        font-size: 18px;
        top: 10px
    }

    .btn span {
        position: absolute;
        right: 8px;
        color: #fff;
        font-weight: 400;
        font-size: 16px;
        top: 10px
    }

    .btn:hover {
        background-color: #3ddcd1
    }

    .other {
        color: #FFFFFF
    }

    .hello span {
        font-size: 25px;
        font-weight: bold;
        color: #3c3f61;
        right: 40px
    }

    .shape {
        background-color: #fff
    }

    .cardchild {
        height: 100px;
        width: 200px;
        border: none;
        position: relative;
        border-radius: 10px
    }

    .type {
        font-weight: 500
    }

    .number {
        font-size: 25px;
        color: #4f5366
    }

    .cardchild .logo1 {
        position: absolute;
        top: 15px;
        right: 20px
    }

    .cardchild .percentage {
        position: absolute;
        bottom: 10px;
        right: 15px;
        color: #48ddd8;
        font-weight: 500
    }

    .cardchild .logo2 {
        position: absolute;
        top: 15px;
        right: 20px
    }

    .cardchild .percentage2 {
        position: absolute;
        bottom: 10px;
        right: 15px;
        color: #bb7484;
        font-weight: 500
    }

    .cardchild .logo3 {
        position: absolute;
        top: 15px;
        color: #bb7484;
        right: 20px
    }

    .cardchild .percentage3 {
        position: absolute;
        bottom: 10px;
        right: 15px;
        color: #48ddd8;
        font-weight: 500
    }

    .cardchild .logo4 {
        position: absolute;
        top: 15px;
        right: 20px
    }

    .cardchild .percentage4 {
        position: absolute;
        bottom: 10px;
        right: 15px;
        color: #bb7484;
        font-weight: 500
    }

    .cardchildchild {
        width: 335px;
        position: relative;
        border: none;
        border-radius: 15px;
        cursor: pointer
    }

    .cardchildchild .profile1 {
        position: absolute;
        border-radius: 50%;
        top: -45px;
        display: flex;
        align-items: center;
        justify-content: center;
        right: 120px
    }

    .name {
        font-size: 18px;
        font-weight: 500
    }

    .braceletid {
        font-size: 13px;
        color: #bab9ba;
        font-family: 'Source Sans Pro', sans-serif
    }

    .btn1 {
        height: 35px;
        width: 160px;
        border: none;
        background-color: #f8c01a;
        cursor: pointer;
        color: #fff;
        font-weight: 500;
        font-size: 16px;
        border-radius: 20px
    }

    .btn1:hover {
        background-color: #c72b2b
    }

    .icons {
        font-size: 20px;
        font-weight: 500
    }

    .dummytext {
        font-size: 14px;
        font-weight: normal;
        color: #b0aeb1
    }

    .btn2 {
        height: 35px;
        width: 160px;
        border: none;
        background-color: #c72b2b;
        cursor: pointer;
        color: #fff;
        font-weight: 500;
        font-size: 16px;
        border-radius: 20px
    }

    .btn2:hover {
        background-color: #f8c01a
    }

</style>

<script>
    //insert JS script
</script>

