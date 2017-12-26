<h2 align = "center"> Registraion Page</h2>

<div class="container">

			<div class="row">
			 <div class="box" align="center">
			   <div class="col-lg-12" align="center">
				<form name = "formSubmit" action="upload.php" method="post" enctype="multipart/form-data" >

						<div class="form-group">
							<input type="text" name="name" class="form-control" placeholder="Name">
						</div>
            <br>
						<div class="form-group">
							<input type="text" name="username" class="form-control" placeholder="Username">
						</div>
            <br>
						<div class="form-group">
							<input type="email" name="email" class="form-control" placeholder="Email">
						</div>
            <br>
            <div class="form-group">
							<input type="password" name="password" class="form-control" placeholder="Password">
						</div>
            <br>
						<div class="form-group">
                            <select class="form-control" id ="dept" name ="dept">
                              <option value="" selected disabled>Select Department</option>
                              <option value="Web Development">Web Development</option>
                              <option value="Database">Databse</option>
                              <option value="Embedded Engineering">Embedded Engineering</option>
							                <option value="Project Feasibility">Project Feasibility</option>
                              <option value="Mobile Apps">Mobile Apps</option>
                             </select>
						</div>
            <br>



						<div class="form-group">
						<label for="gender">Gender : &nbsp; &nbsp;
                        <input type="radio" name="gender" value="male"/>Male
                        <input type="radio" name="gender" value="female"/>Female <br/>
						</label>
						</div>
            <br>
					</div>



				<div class="col-md-6">
					 <div class="img_output">
								<img id="output" style="width:304px;height:228px;" />
					 </div>
					 <div class="form-group">
							&nbsp; &nbsp;
                                <div class="fileUpload btn"> <span>Browse Picture</span>
                                    <input type="file" class="upload form-group" type="file" name="image" accept="image/*" onchange="loadFile(event)"/>
								</div>
                     </div>
                            <script>
                                var loadFile = function (event) {
                                    var output = document.getElementById('output');
                                    output.src = URL.createObjectURL(event.target.files[0]);
                                };
                            </script>
<br>
							 <button type="submit" value="submit" class="btn btn-info">Submit</button>

					    </form>
					</div>
				</div>
			</div>
    </div>
    </div>
