<?php 
	include 'backend_header.php';
	include 'db_connect.php';

	$id = $_GET['id'];
	$sql = "SELECT * from items where id = :id";
	$stmt = $pdo->prepare($sql);
	$stmt->bindParam(':id',$id);
	$stmt->execute();
		//$row = $stmt->fetchAll();
	$row = $stmt->fetch(PDO::FETCH_ASSOC);
	$code = $row['codeno'];
	$name = $row['name'];
	$photo = $row['photo'];
	$price = $row['price'];
	$discount = $row['discount'];
	$description = $row['description'];
?>

<!-- Begin Page Content -->
	<div class="container-fluid">
	  <!-- Page Heading -->
	  <h1 class="h3 mb-4 text-gray-800">
	  	<i class="fas fa-medal pr-3"></i> 
	  	Category 
	  </h1>

	  <div class="card shadow mb-4">
		<div class="card-header py-3">
			<div class="row">
					<div class="col-10">
						<h4 class="m-0 font-weight-bold text-primary"> 
			            	Edit Existing Items 
			            </h4>
					</div>

					<div class="col-2">
						<a href="item_list" class="btn btn-outline-primary btn-block float-right"> 
		            		<i class="fa fa-backward pr-2"></i>	Go Back 
		            	</a>
					</div>
				</div>

        </div>
        <div class="card-body">
            <form action="item_update" method="POST" enctype="multipart/form-data">
				
				<input type="hidden" name="id" value="<?= $row['id'] ?>">
				<input type="hidden" name="oldphoto" value="<?= $row['photo'] ?>">


            	<div class="form-group ">
					<label for="categoryName" class="col-sm-2 col-form-label"> Photo  </label>
			    	
			    	<div class="col-sm-10">
			      		<ul class="nav nav-tabs" id="myTab" role="tablist">
							<li class="nav-item">
						    	<a class="nav-link active" id="oldprofile-tab" data-toggle="tab" href="#oldprofile" role="tab" aria-controls="oldprofile" aria-selected="true"> Old Profile </a>
						  	</li>
						 	<li class="nav-item">
						    	<a class="nav-link" id="newprofile-tab" data-toggle="tab" href="#newprofile" role="tab" aria-controls="newprofile" aria-selected="false"> New Profile</a>
						  	</li>
						</ul>

						<div class="tab-content" id="myTabContent">
						  	<div class="tab-pane fade show active" id="oldprofile" role="tabpanel" aria-labelledby="oldprofile-tab">
						  		<img src="<?= $row['photo']; ?>" class="img-fluid" style="width: 150px; height: 120px;">
						  	</div>

						  	<div class="tab-pane fade" id="newprofile" role="tabpanel" aria-labelledby="newprofile-tab">
						  		<input type="file" name="image" name="newphoto">
						  	</div>
						</div>
			    	</div>
				</div>

				<div class="form-group ">
					<label for="categoryName" class="col-sm-2 col-form-label"> Name </label>
			    	
			    	<div class="col-sm-10">
			      		<input type="text" class="form-control" id="categoryName" placeholder="Enter Brand Name" name="name" value="<?= $row['name'] ?>">
			    	</div>
				</div>

				<div class="form-group">
					<label for="exampleFormControlFile2" class="col-sm-2 form-control-label">Code No</label>
					<div class="col-sm-10">
					<input type="text" name="code" class="form-control" id="exampleFormControlFile2" value="<?= $code ?>">
					</div>
				</div>	

				<div class="form-group">
					<label for="price" class="col-sm-2 form-control-label">Price</label>
					<div class="col-sm-10">
					<input type="text" name="price" class="form-control" id="price" value="<?= $price ?>">
					</div>
				</div>

				<div class="form-group">
					<label for="discount" class="col-sm-2 form-control-label">Discount</label>
					<div class="col-sm-10">
					<input type="text" name="discount" class="form-control" id="discount" value="<?= $discount ?>">
					</div>
				</div>

				<div class="form-group">
					<label for="description" class="col-sm-2 form-control-label">Description</label>
					<div class="col-sm-10">
					<input type="text" name="description" class="form-control" id="description" value="<?= $description?>">
					</div>
				</div>	

				<div class="form-group">
					<label for="brandid" class="col-sm-2">Brand Id</label>
					<div class="col-sm-10">
					<select class="form-control" name="brandid">
						<?php 
						$sql = "SELECT * from brands ORDER BY id ASC";
						$stmt= $pdo->prepare($sql);
						$stmt->execute();
						$row = $stmt->fetchAll();
						foreach ($row as $categories) :
							$id = $categories['id'];
							$name = $categories['name'];
							?>
							<option value="<?= $id ?>"><?= $name ?></option>
							<?php 
						endforeach;
						?>
					</select>
					</div>
				</div>

				<div class="form-group">
					<label for="subcategoryid" class="col-sm-2">Subcategory Id</label>
					<div class="col-sm-10">
					<select class="form-control" name="subcategoryid">
						<?php 
						$sql = "SELECT * from subcategories ORDER BY id ASC";
						$stmt= $pdo->prepare($sql);
						$stmt->execute();
						$row = $stmt->fetchAll();
						foreach ($row as $categories) :
							$id = $categories['id'];
							$name = $categories['name'];
							?>
							<option value="<?= $id ?>"><?= $name ?></option>
							<?php 
						endforeach;
						?>
					</select>
					</div>
				</div>


				<div class="form-group row">
					<div class="col-sm-2"></div>
				    <div class="col-sm-10">
				      <button type="submit" class="btn btn-primary">
				      	<i class="fa fa-upload"></i> Update
				      </button>
				    </div>
				</div>

			</form>

        </div>
	  </div>

	</div>
<!-- /.container-fluid -->

<?php 
	include 'backend_footer.php'; 
?>