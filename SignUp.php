<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Register - Elbon Concepts</title>

		<link rel="stylesheet" href="/lib/bootstrap/dist/css/bootstrap.css" />
		<link
			rel="stylesheet"
			href="https://fonts.googleapis.com/icon?family=Material+Icons+Soda"
		/>

		<link
			rel="stylesheet"
			href="https://code.getmdl.io/1.3.0/material.indigo-blue.min.css"
			crossorigin="anonymous"
		/>
		<meta
			name="x-stylesheet-fallback-test"
			content=""
			class="sr-only"
		/><script>
			!(function (a, b, c, d) {
				var e,
					f = document,
					g = f.getElementsByTagName("SCRIPT"),
					h = g[g.length - 1].previousElementSibling,
					i =
						f.defaultView && f.defaultView.getComputedStyle
							? f.defaultView.getComputedStyle(h)
							: h.currentStyle;
				if (i && i[a] !== b)
					for (e = 0; e < c.length; e++)
						f.write('<link href="' + c[e] + '" ' + d + "/>");
			})(
				"position",
				"absolute",
				["\/lib\/material-design-library\/material.indigo-blue.min.css"],
				"rel=\u0022stylesheet\u0022 crossorigin=\u0022anonymous\u0022 ",
			);
		</script>

		<link rel="stylesheet" href="/css/site.css" />

		<link href="wwwroot/css/bootstrap/Content/bootstrap.css" rel="stylesheet" />

		<script src="wwwroot/js/jquery-3.3.1.js"></script>
		<script src="wwwroot/css/bootstrap/Scripts/bootstrap.js"></script>
	</head>
	<body>
		<header>
			<nav class="navbar navbar-inverse">
				<div class="container">
					<div class="navbar-header">
						<button
							type="button"
							class="navbar-toggle"
							data-toggle="collapse"
							data-target="#myNavbar"
						>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="/index.html">Elbon Concepts</a>
					</div>
					<div class="collapse navbar-collapse" id="myNavbar">
						<ul class="nav navbar-nav">
							<li><a href="/About.html">About</a></li>
							<li><a href="/Contact.html">Contact</a></li>
							<li><a href="/OmegaPro.html">OmegaPro</a></li>
						</ul>
						<ul class="nav navbar-nav navbar-right">
							<li class="active"
								><a href="SignUp.html"
									><span class="glyphicon glyphicon-user"></span> Sign Up</a
								></li
							>
							<li class=""
								><a href="Login.html"
									><span class="glyphicon glyphicon-log-in"></span> Login</a
								></li
							>
						</ul>
					</div>
				</div>
			</nav>
		</header>
		<div class="container">
			<main role="main" class="pb-3">
				<h1>Register</h1>

				<div class="row">
					<div class="col-md-4">
						<form method="GET" action="#">
							<h4>Create a new account.</h4>
							<hr />
							<div
								class="text-danger validation-summary-valid"
								data-valmsg-summary="true"
								><ul
									><li style="display: none"></li> </ul
							></div>
							<div class="form-group">
								<label for="Input_Email">Email</label>
								<input
									class="form-control"
									type="email"
									data-val="true"
									data-val-email="The Email field is not a valid e-mail address."
									data-val-required="The Email field is required."
									id="Input_Email"
									name="Input.Email"
									value=""
								/>
								<span
									class="text-danger field-validation-valid"
									data-valmsg-for="Input.Email"
									data-valmsg-replace="true"
								></span>
							</div>
							<div class="form-group">
								<label for="Input_Password">Password</label>
								<input
									class="form-control"
									type="password"
									data-val="true"
									data-val-length="The Password must be at least 6 and at max 100 characters long."
									data-val-length-max="100"
									data-val-length-min="6"
									data-val-required="The Password field is required."
									id="Input_Password"
									maxlength="100"
									name="Input.Password"
								/>
								<span
									class="text-danger field-validation-valid"
									data-valmsg-for="Input.Password"
									data-valmsg-replace="true"
								></span>
							</div>
							<div class="form-group">
								<label for="Input_ConfirmPassword">Confirm password</label>
								<input
									class="form-control"
									type="password"
									data-val="true"
									data-val-equalto="The password and confirmation password do not match."
									data-val-equalto-other="*.Password"
									id="Input_ConfirmPassword"
									name="Input.ConfirmPassword"
								/>
								<span
									class="text-danger field-validation-valid"
									data-valmsg-for="Input.ConfirmPassword"
									data-valmsg-replace="true"
								></span>
							</div>
							<button type="submit" class="btn btn-primary">Register</button>
							<input
								name="__RequestVerificationToken"
								type="hidden"
								value="CfDJ8PY-z2FGuplFkQ3mHkr1jmuBOD3JGeKTD5XsvrxgsVaxdDekBjme0vKyjdJ8i4ga136zR9DZSNBGeLolOZQ0KmBJZ0SSOIeiG4suvzFB5V5tKw4QRC2R6D3BE8tjZ7XRpPg2MMEfce33zkyKxOSIlE8"
						/></form>
					</div>
				</div>
			</main>
		</div>

		<footer class="border-top footer text-muted">
			<div class="container">
				&copy; 2022 - Elbon Concepts - <a href="/Home/Privacy">Privacy</a>
			</div>
		</footer>

		<script src="/lib/jquery/dist/jquery.js"></script>
		<script src="/lib/bootstrap/dist/js/bootstrap.bundle.js"></script>

		<script src="/js/site.js?v=4q1jwFhaPaZgr8WAUSrux6hAuh0XDg9kPS3xIVq36I0"></script>

		<script src="/Identity/lib/jquery-validation/dist/jquery.validate.js"></script>
		<script src="/Identity/lib/jquery-validation-unobtrusive/jquery.validate.unobtrusive.js"></script>
	</body>
</html>
