<?php 
	include 'backend_header.php';
	include 'db_connect.php';
?>
<!-- Begin Page Content -->
	<div class="container-fluid">
	  <!-- Page Heading -->
		<h1 class="h3 mb-4 text-gray-800">
	  		<i class="fas fa-medal pr-3"></i> 
	  		Customer
	  	</h1>

		<div class="card shadow mb-4">
			<div class="card-header py-3">
	            <div class="row">
					<div class="col-10">
						<h4 class="m-0 font-weight-bold text-primary"> 
			            	List 
			            </h4>
					</div>

				</div>
	        </div>
	        <div class="card-body">
				
				

	            <div class="table-responsive">
	            	<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
						<thead>
							<tr>
								<th> No </th>
								<th > Name </th>
								<th> Email </th>
								<th> Phone</th>
							</tr>
						</thead>

						<tbody>

							<?php 
								$sql="SELECT * from users ORDER BY name ASC";
					        	$stmt=$pdo->prepare($sql);
					        	$stmt->execute();
					        	$rows= $stmt->fetchAll();

					        	$i=1;
        						foreach ($rows as $user):

        						$id = $user['id'];
        						$name = $user['name'];
        						$email = $user['email'];
        						$phone = $user['phone'];

							?>

							<tr>
								<td> <?= $i; ?> </td>
								<td> <?= $name ?> </td>
								
								<td> <?= $email ?></td>
								<td> <?= $phone ?></td>
							</tr>

							<?php 
								$i++;
								endforeach; 
							?>

						</tbody>

						

	            	</table>
	            </div>
	        </div>
		</div>

	</div>
<!-- /.container-fluid -->

<?php 
	include 'backend_footer.php'; 
?>

