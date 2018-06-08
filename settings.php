<?php include'header.php';?>
<!-- banner -->
<div class="inside-banner">
  <div class="container"> 
    <span class="pull-right"><a href="#">Home</a> / Profile</span>
    <h2>Profile</h2>
  </div>
</div>
<!-- banner -->

<div class="container">
	<div class="row">
	  	<?php include'menu-profile.php';?>
		<div class="panel-body col-lg-9 col-md-9 col-sm-8">
		   	<div class="user-information">
		   		<h3>My Account -> Setting</h3>
				<form class="form-horizontal">
					<!-- Text input-->
							<div class="form-group">
								  <label class="col-md-4 control-label" for="textinput">Change Email ID</label>  
								  <div class="col-md-4">
								  <input id="textinput" name="textinput" type="text" placeholder="your new email " class="form-control input-md">
								  <span class="help-block">your new email ID</span>  
								  </div>
							</div>

					<!-- Password input-->
							<div class="form-group">
								  <label class="col-md-4 control-label" for="passwordinput">New password</label>
								  <div class="col-md-4">
								    <input id="passwordinput" name="passwordinput" type="password" placeholder="new password" class="form-control input-md">
								    
								  </div>
							</div>

						<!-- Password input-->
							<div class="form-group">
								  <label class="col-md-4 control-label" for="passwordinput">Repeat password</label>
								  <div class="col-md-4">
								    <input id="passwordinput" name="passwordinput" type="password" placeholder="repeat password" class="form-control input-md">
								    
								  </div>
							</div>

						<!-- Select Basic -->
							<div class="form-group">
								  <label class="col-md-4 control-label" for="selectbasic">Set security question</label>
								  <div class="col-md-4">
								    <select id="selectbasic" name="selectbasic" class="form-control">
								      <option value="1">Question 1</option>
								      <option value="2">Question 2</option>
								      <option value="3">Question 3</option>
								    </select>
								  </div>
							</div>

						<!-- Select Multiple -->
							<div class="form-group">
								  <label class="col-md-4 control-label" for="selectmultiple">Languages</label>
								  <div class="col-md-4">
								    <select id="selectmultiple" name="selectmultiple" class="form-control" multiple="multiple">
								      <option value="1">Persian</option>
								      <option value="2">English</option>
								      <option value="3">Arabic</option>
								    </select>
								  </div>
							</div>	

						<!-- Button -->
							<div class="form-group">
									<div class="submit">
									    <button id="singlebutton" name="singlebutton" class="btn btn-danger">Remove</button>
									    <button id="singlebutton" name="singlebutton" class="btn btn-success">Submit</button>
									</div>
							</div>							
				</form>
		   	</div>
        </div>
	</div>
</div>


<?php include'footer.php';?>