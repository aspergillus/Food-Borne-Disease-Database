<style>
	.sidebar{
		height:100vh;
		background: linear-gradient(rgba(0, 0, 0, .7), rgba(0, 0, 0, .9)), url(images/background.jpeg);
		background-position: center;
		background-repeat:no-repeat;
		background-size:cover;
		box-shadow: 5px 7px 25px #999;
	}

	.bottom-border{
		border-bottom: 1px groove #eee;
	}

	.sidebar_link{
		transition: all .4s;
	}
	
	.sidebar_link:hover{
		background-color:#444;
		border-radius:5px;
		transition: all .3s;
	}

	.current{
		background-color: #f44336;
		border-radius: 7px;
		box-shadow: 2px 5px 10px #111;
		transition: all .3s;
	}

	.current:hover{
		background-color: #f44336;
		border-radius: 7px;
		box-shadow: 2px 5px 20px #111;
		transform: translateY(-1px);
	}

	.search-input{
		background:transparent;
		border: none;
		border-radius: 0;
		border-bottom: 2px solid #999;
		transition: all .4s;
		color:white;
	}

	.search-input:focus{
		background:transparent;
		border: none;
		border-bottom: 2px solid #dc3545;
	}

	.search-button{
			border-radius:50%;
			padding:10px 16px;
	}

	.search-button:hover{
		background-color: #eee;
		transform: translateY(-1px);
	}

	.icon-parent{
		position: relative;
	}

	.icon-bullet::after{
		content: "";
		position: absolute;
		top: 7px;
		left: 15px;
		height: 12px;
		width:12px;
		background-color: #f44336;
		border-radius: 50%;
	}

	@media(max-width: 768px) {
		.sidebar{
			position: static;
			height: auto; 
		}

		.top_navbar{
			position:static;
		}
	}
</style>

<nav class="navbar navbar-expand-md navbar-light">
	<button class="navbar-toggler ml-auto mb-2 bg-light" type="button" data-toggle="collapse" data-target="#myNavbar">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="myNavbar">
		<div class="container-fluid">
			<div class="row">
				<!-- sidebar -->
				<div class="col-xl-2 col-lg-3 col-md-4 sidebar fixed-top">
					<a href="admin_main.php" class="navbar-brand mx-auto text-white d-block py-3 mb-4 text-center bottom-border">
						Food Brone Disease <br> Database</a>
					<div class="bottom-border pb-3">
						<img src="images/my_image.JPG" width="50" class="rounded-circle mx-3">
						<a href="#" class="text-white">Aman <br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
						&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Vishwakarma</a>
					</div>
					<ul class="navbar-nav flex-column mt-4">
						<li class="nav-item"><a href="#" class="nav-link text-white p-3 mb-2 current">
							<i class="fas fa-home text-light fa-lg mr-3"></i>Dashboard</a>
						</li>
						<li class="nav-item"><a href="#" class="nav-link text-white p-3 mb-2 sidebar_link">
							<i class="fas fa-user text-light fa-lg mr-3"></i>Profile</a>
						</li>
						<li class="nav-item"><a href="#" class="nav-link text-white p-3 mb-2 sidebar_link">
							<i class="fas fa-envelope text-light fa-lg mr-3"></i>Inbox</a>
						</li>
						<li class="nav-item"><a href="database_data.php" class="nav-link text-white p-3 mb-2 sidebar_link">
							<i class="fas fa-database text-light fa-lg mr-3"></i>Database</a>
						</li>
						<li class="nav-item"><a href="insert_data.php" class="nav-link text-white p-3 mb-2 sidebar_link">
							<i class="fas fa-plus text-light fa-lg mr-3"></i>Add Data</a>
						</li>
						<li class="nav-item"><a href="#" class="nav-link text-white p-3 mb-2 sidebar_link">
							<i class="fas fa-wrench text-light fa-lg mr-3"></i>Settings</a>
						</li>
					</ul>
				</div>
				<!-- End of the sidebar -->

				<!-- top-nav -->
				<div class="col-xl-10 col-lg-9 col-md-8 top_navbar ml-auto bg-dark fixed-top py-2">
					<div class="row align-items-center">
						<div class="col-md-4">
							<h4 class="text-light text-uppercase mb-0">Dashboard</h4>
						</div>
						<div class="col-md-5">
							<form>
								<div class="input-group">
									<input type="text" class="form-control search-input" placeholder="Search....">
									&nbsp&nbsp
									<button type="button" class="btn btn-white search-button"><i class="fas fa-search text-danger"></i></button>
								</div>
							</form>
						</div>
						<div class="col-md-3">
							<ul class="navbar-nav">
								<li class="nav-item icon-parent"><a href="#" class="nav-link icon-bullet">
									<i class="fas fa-comments text-muted fa-lg"></i></a>
								</li>
								<li class="nav-item icon-parent"><a href="#" class="nav-link icon-bullet">
									<i class="fas fa-bell text-muted fa-lg"></i></a>
								</li>
								<li class="nav-item ml-md-auto"><a href="#" class="nav-link" data-toggle="modal" data-target="#sign_out">
									<i class="fas fa-sign-out-alt text-danger fa-lg"></i></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- End of the top-nav -->
			</div>
		</div>
	</div>
</nav>