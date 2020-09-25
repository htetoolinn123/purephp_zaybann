<?php 
	include 'backend_header.php';
	include 'db_connect.php';
?>
<!-- Begin Page Content -->
	<div class="container-fluid">
	  <!-- Page Heading -->
		<h1 class="h3 mb-4 text-gray-800">
	  		<i class="fas fa-tag pr-3"></i> 
	  		Order 
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
	            	<table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
						<thead>
							<tr>
								<th> No </th>
								<th > User Name </th>
								<th > Vouncher No </th>
								<th> Order date</th>
								<th> Total </th>
								<th>Status</th>
								<th> Notes </th>
							</tr>
						</thead>

						<tbody>
							<?php
								$sql="SELECT  orders.*,users.name as uname from orders INNER JOIN users ON orders.user_id = users.id";
					        	$stmt=$pdo->prepare($sql);
					        	$stmt->execute();
					        	$rows= $stmt->fetchAll();

								$i=1;
								foreach ($rows as $order):
								$id= $order['id'];
								$user_id=$order['uname'];
								$vouncherno=$order['vouncherno'];
								$status =$order['status'];
								$total=$order['total'];
								$note=$order['note'];
								$order_date=$order['orderdate'];

							?>
							<tr>
								<td><?= $i ?></td>
								<td><?= $user_id ?></td>
								<td><a href="orderdetails.php?id=<?= $vouncherno ?>&total=<?= $total ?>&name=<?= $user_id ?>&date=<?= $order_date ?>"><?= $vouncherno ?></a></td>
								<td><?= $order_date ?></td>
								<td><?= $total ?></td>
								<td><?= $status ?></td>
								<td><?= $note ?></td>
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

