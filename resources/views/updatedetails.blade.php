<!DOCTYPE html>
<html lang="en">
<head>
	<title>Update Portfolio</title>
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
</head>
<body>

	<div class="contact1">
		<div class="container-contact1">
			<div class="contact1-pic js-tilt" data-tilt>
				<img src="{{ asset("UPassets/images/pf.jpg")}}" alt="IMG">
			</div>

			<form action={{ route('project.update', $project->id)}}  class="contact1-form validate-form" method="POST">
                @csrf
                @method("PUT")
				<span class="contact1-form-title">
					Update Porfolio
				</span>

                @if(session()->has('message'))
                <div class="alert alert-success text-center">
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
					<input class="input1" type="text" name="name" placeholder="Name Of Project" value="{{old('name', $project->name)}}">
					<span class="shadow-input1"></span>
				</div>

				<div class="wrap-input1 validate-input" data-validate = "Subject is required">
					<input class="input1" type="text" name="client" placeholder="Client" value={{ old('client', $project->client)}}>
					<span class="shadow-input1"></span>
				</div>

				<div class="wrap-input1 validate-input" data-validate = "Subject is required">
					<input class="input1" type="date" name="date" placeholder="Project Date" value={{ old('date', $project->date)}}>
					<span class="shadow-input1"></span>
				</div>

				<div class="wrap-input1 validate-input" data-validate = "Subject is required">
					<input class="input1" type="text" name="github" placeholder="Github URL" value={{ old('github', $project->github)}}>
					<span class="shadow-input1"></span>
				</div>

				<div class="wrap-input1 validate-input" data-validate = "Subject is required">
					<input class="input1" type="text" name="url" placeholder="URL" value="{{old('url', $project->url)}}">
					<span class="shadow-input1"></span>
				</div>

                <div class="wrap-input1 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                    <select class="form-select input1 p-3 rounded" aria-label="Default select example" name="category">
                        <option selected hidden value="{{old('category', $project->category)}}">{{$project->category}}</option>
                        <option value="javascript">Javascript</option>
                        <option value="react">React</option>
                        <option value="php">PHP</option>
                        <option value="laravel">Laravel</option>
                        <option value="wordpress">Wordpress</option>
                        <option value="api">API</option>
                    </select>
					<span class="shadow-input1"></span>
				</div>

				<div class="wrap-input1 validate-input" data-validate = "Message is required">
					<textarea class="input1" name="description" placeholder="Description of the project" value={{ old('description', $project->description)}}>{{$project->description}}</textarea>
					<span class="shadow-input1"></span>
				</div>

				<div class="container-contact1-form-btn">
					<button class="contact1-form-btn">
						<span>
							Update
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
