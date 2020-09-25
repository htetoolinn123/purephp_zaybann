<?php 
	include 'backend_header.php';
	include 'db_connect.php';

	$vouncherno = $_REQUEST['id'];
	$total = $_REQUEST['total'];
	$name = $_REQUEST['name'];
	$date = $_REQUEST['date'];
	
	
?>
	<div class="container">
		<div class="row mt-5">
			<div >
				<table class="table table-dark table-responsive">
					<tbody>
						<tr>
							<td>INVOICE</td>
							<td><?= $vouncherno ?></td>
						</tr>
						<tr>
							<td>Order Date</td>
							<td><?= $date ?></td>
						</tr>
						<tr>
							<td>Customer Name</td>
							<td><?= $name ?></td>
						</tr>
					</tbody>
				</table>
			</div>
		
		</div>

		<div class="row">
			<div class="table-responsive">
	            	<table class="table table-bordered table-hover table-primary text-center"  width="100%" cellspacing="0">
						<thead>
							<tr>
								<th> No </th>
								<th> Item Name </th>
								
								<th> Quantity </th>
								<th> Unit Price </th>
								<th> Price </th>
								
							</tr>
						</thead>

						<tbody>
							<?php 
								include 'db_connect.php';

								$vouncherno = $_REQUEST['id'];


								
								$sql = "SELECT orderdetails.*,items.name as iname,items.price as iprice,items.discount as idiscount from orderdetails INNER JOIN items ON orderdetails.item_id = items.id WHERE orderdetails.vouncherno = :vouncherno";
								$stmt = $pdo->prepare($sql);
								$stmt -> bindParam(':vouncherno',$vouncherno);				
								$stmt->execute();
								$row = $stmt->fetchAll();
								$i=1;
								foreach ($row as $order) :				
									$itemname = $order['iname'];
									$qty = $order['qty'];
									$iprice = $order ['iprice'];
									$idiscount = $order['idiscount'];
									if($idiscount>0)
									{
										$unit=$idiscount;	
									}
									else
									{
										$unit-$iprice;
									}
								
								
							?>
							
							<tr>
								<td><?=$i ?></td>
								<td><?= $itemname?></td>
								<td ><?= $qty?></td>
								<td><?= $unit ?>&nbsp;MMK</td>								
								<td><?= $qty * $unit ?>&nbsp;MMK</td>
								
							</tr>
								

								<?php 
								$i++;
								endforeach;
							?>

							
							
						</tbody>

						<tfoot>
							<tr >

								<td colspan=4><h4 style="font-weight: bold; color: red;">Total</h4></td>
								<td class="text-danger"><?= $total ?>&nbsp;MMK</td>

							</tr>

						</tfoot>



						

	            	</table>
	            </div>
		</div>
		
	</div>



<?php 
	include 'backend_footer.php'; 
?>