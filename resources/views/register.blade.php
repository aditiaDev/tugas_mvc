<!DOCTYPE html>
<html>
<head>
	<title>SanberBook</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<section class="top-bar">
		<div class="container">
			<div class="row">
				<div class="col-md-3"></div>
				<div class="col-md-6">
					<div class="card">
						<form method="POST" action="/welcome">
							@csrf
							<div class="card-header">
								Register
							</div>
							<div class="card-body">
								
									<h1>Buat Account Baru!</h1>
									<h4>Sign Up Form</h4>
									<div class="form-group">
										<label>First name:</label>
										<input type="text" class="form-control" name="first_name">
									</div>
									<div class="form-group">
										<label>Last name:</label>
										<input type="text" class="form-control" name="last_name">
									</div>
									<div class="form-group">
										<label>Last name:</label>
										<div class="form-check">
											<input class="form-check-input" type="radio" name="gender"  value="Male" >
											<label class="form-check-label">
												Male
											</label>
										</div>
										<div class="form-check">
											<input class="form-check-input" type="radio" name="gender"  value="Female" >
											<label class="form-check-label">
												Female
											</label>
										</div>
										<div class="form-check">
											<input class="form-check-input" type="radio" name="gender"  value="Other" >
											<label class="form-check-label">
												Other
											</label>
										</div>
									</div>
									<div class="form-group">
										<label>Nationality:</label>
										<select name="nationality" class="form-control">
											<option value="Indonesia">Indonesian </option>
											<option value="Singapura">Singapura </option>
											<option value="Malaysia">Malaysia </option>
										</select>
									</div>
									<div class="form-group">
										<label>Language Spoken:</label>
										<div class="form-check">
											<input class="form-check-input" type="checkbox" name="language" value="Indonesia">
											<label class="form-check-label" >
												Bahasa Indonesia
											</label>
										</div>
										<div class="form-check">
											<input class="form-check-input" type="checkbox" name="language" value="English">
											<label class="form-check-label" >
												English
											</label>
										</div>
										<div class="form-check">
											<input class="form-check-input" type="checkbox" name="language" value="Other">
											<label class="form-check-label" >
												Other
											</label>
										</div>
									</div>
									<div class="form-group">
										<label>Bio</label>
										<textarea name="bio" rows="8" class="form-control"></textarea>
									</div>
									
								
							</div>
							<div class="card-footer">
								<input type="submit" class="btn btn-info " name="sign_up" value="Sign Up">
							</div>
						</form>
					</div>
					
				</div>
			</div>
		</div>
	</section>
	
	
</body>
</html>