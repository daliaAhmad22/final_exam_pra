
@extends('front.layoutWel')
@section('content2')
<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- Site meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>تفاصيل المنتج</title>
    <!-- CSS -->
    <link href="{{asset('dist/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">
</head>
<body>

		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<div class="col-md-7">
						<!-- Billing Details -->
						<div class="billing-details">
							<div class="section-title">
								<h3 class="title">Your Info</h3>
							</div>
							<div class="form-group">
								<input class="input" type="text" name="name" placeholder="Name">
							</div>
							<div class="form-group">
								<input class="input" type="email" name="email" placeholder="Email">
							</div>
                            <div class="form-group">
								<input class="input" type="text" name="message" placeholder="Message">
							</div>
						</div>

						<a href="/sendInfo" class="primary-btn order-submit">Send</a>
					</div>
				</div>
			</div>
		</div>


</body>
</html>

@endsection

