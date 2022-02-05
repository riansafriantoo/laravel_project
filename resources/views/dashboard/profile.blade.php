@extends('layout.master')

@section('content')
		<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<div class="panel panel-profile">
						<div class="clearfix">
							<!-- LEFT COLUMN -->
							<div class="profile-left">
								<!-- PROFILE HEADER -->
								<div class="profile-header">
									<div class="overlay"></div>
									<div class="profile-main">
                                        <img src="{{$user->getAvatar()}}" class="img-circle" width="96" height="96" alt="Avatar">
										<!-- <img src="{{asset('images/'.$user->avatar)}}" class="img-circle" width="96" height="96" alt="Avatar"> -->
										<h3 class="name">{{$user->name}}</h3>
										<span class="online-status status-available">Available</span>
									</div>
									<div class="profile-stat">
										<div class="row">
											<div class="col-md-4 stat-item">
												45 <span>Projects</span>
											</div>
											<div class="col-md-4 stat-item">
												15 <span>Awards</span>
											</div>
											<div class="col-md-4 stat-item">
												2174 <span>Points</span>
											</div>
										</div>
									</div>
								</div>
								<!-- END PROFILE HEADER -->
								<!-- PROFILE DETAIL -->
                                <form action="/userList/{{$user->id}}/uploadAvatar" method="POST" enctype="multipart/form-data">
								<div class="profile-detail">
                                    {{csrf_field()}}
									<div class="profile-info">
										<h4 class="heading">Basic Info</h4>
										<ul class="list-unstyled list-justify">
											<li>Birthdate <span>24 Aug, 2016</span></li>
                                            <li>Email <span>{{$user->email}}</span></li>
											<li>Roles <span>{{$user->role}}</span></li>
                                            <li>Upload Avatar <span><input type="file" name="avatar" class="float-right"></span></li>
										</ul>
									</div>
                                    <div class="text-center">
                                        <input type="submit" class="btn btn-primary">Edit Profile</button>
                                    </div>
									<!-- <div class="text-center"><a href="#" class="btn btn-primary"></a></div> -->
								</div>
                                </form>
								<!-- END PROFILE DETAIL -->
							</div>
							<!-- END LEFT COLUMN -->
						</div>
					</div>
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>


@stop