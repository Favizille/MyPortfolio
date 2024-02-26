<!DOCTYPE html>
<html lang="en">
<head>
	<title>Add Project</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="{{ asset("UPassets/images/png")}}" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset("UPassets/vendor/bootstrap/css/bootstrap.min.css")}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset("UPassets/fonts/font-awesome-4.7.0/css/font-awesome.min.css")}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset("UPassets/vendor/animate/animate.css")}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset("UPassets/vendor/css-hamburgers/hamburgers.min.css")}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset("UPassets/vendor/select2/select2.min.css")}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset("UPassets/css/util.css")}}">
	<link rel="stylesheet" type="text/css" href="{{ asset("UPassets/css/main.css")}}">
<!--===============================================================================================-->
<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>

	<div class="contact1">
		<div class="container-contact1">
			<div class="contact1-pic js-tilt" data-tilt>
				<img src="{{ asset("UPassets/images/pf.jpg")}}" alt="IMG">
			</div>

			<form action="{{route('project.create')}}" method="POST"  class="contact1-form validate-form" enctype="multipart/form-data">
                @csrf
				<span class="contact1-form-title">
					Add Project
				</span>

                @if(session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
                @endif

                @if(count($errors) > 0)
                    @foreach( $errors->all() as $message )
                        <div class="alert alert-danger display-hide">
                        <span>{{ $message }}</span>
                        </div>
                    @endforeach
                @endif

				<div class="wrap-input1 validate-input" data-validate = "Name is required">
					<input class="input1" type="text" name="name" placeholder="Name Of Project">
					<span class="shadow-input1"></span>
				</div>

				<div class="wrap-input1 validate-input" data-validate = "Subject is required">
					<input class="input1" type="text" name="client" placeholder="Client">
					<span class="shadow-input1"></span>
				</div>

				<div class="wrap-input1 validate-input" data-validate = "Subject is required">
					<input class="input1" type="date" name="date" placeholder="Project Date">
					<span class="shadow-input1"></span>
				</div>

				<div class="wrap-input1 validate-input" data-validate = "Subject is required">
					<input class="input1" type="text" name="github" placeholder="Github URL">
					<span class="shadow-input1"></span>
				</div>

				<div class="wrap-input1 validate-input" data-validate = "Subject is required">
					<input class="input1" type="text" name="url" placeholder="URL">
					<span class="shadow-input1"></span>
				</div>

                <div class="wrap-input1 validate-input">
                    <select name="category" class="form-select input1 p-3 rounded" aria-label="Default select example">
                        <option selected hidden>Category</option>
                        <option value="javascript">Javascript</option>
                        <option value="react">React</option>
                        <option value="php">PHP</option>
                        <option value="laravel">Laravel</option>
                        <option value="wordpress">Wordpress</option>
                        <option value="api">API</option>
                        <option value="api">others</option>
                    </select>
                    <span class="shadow-input1"></span>
                </div>

                <div class="wrap-input1 validate-input" data-validate = "Subject is required">
					<input class="input1" type="file" name="image1">
					<span class="shadow-input1"></span>
				</div>

                <div class="wrap-input1 validate-input" data-validate = "Subject is required">
					<input class="input1" type="file" name="image2">
					<span class="shadow-input1"></span>
				</div>

                <div class="wrap-input1 validate-input" data-validate = "Subject is required">
					<input class="input1" type="file" name="image3">
					<span class="shadow-input1"></span>
				</div>

				<div class="wrap-input1 validate-input" data-validate = "Message is required">
					<textarea class="input1" name="description" placeholder="Description of the project"></textarea>
					<span class="shadow-input1"></span>
				</div>

				<div class="container-contact1-form-btn">
					<button type="submit" class="contact1-form-btn">
						<span>
							Add Project
							<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
						</span>
					</button>
				</div>
			</form>
		</div>
	</div>




<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
