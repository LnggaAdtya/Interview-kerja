<!doctype html>
<html lang="en">
  <head>
  	<title>Interview Kerja</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="assets/css/login.css">
	<link href="assets/img/favicon.png" rel="icon">

	</head>
	<body>
	<section class="ftco-section">
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-5">
					<div class="login-wrap p-4 p-md-5">
		      	<div class="icon d-flex align-items-center justify-content-center">
		      		<span class="fa fa-user-o"></span>
		      	</div>

		  @if ($errors->all())
          <div class="alert alert-danger" role="alert">
            <ul>
          @foreach ($errors->all() as $erorr)
          <li>{{ $erorr }}</li>
          @endforeach
          </ul>
          </div>
          @endif



						<form action="{{route('auth')}}" method="POST" class="login-form">
							@csrf
		      		<div class="form-group">
						<label for="">Email</label>
		      			<input type="text" class="form-control rounded-left" placeholder="Email" name="email">
		      		</div>
	            <div class="form-group">
					<label for="">Password</label>
	              <input type="password" class="form-control rounded-left" placeholder="Password" name="password">
	            </div>
				<div class="w-1 text-md-right">
					<a href="/"><strong>Home</strong></a>
				 </div>
	            <div class="form-group">
	            	<button type="submit" class="btn btn-primary rounded submit p-3 px-5"><strong>Login</strong></button>
	            </div>
	          </form>
	        </div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

