<?php 
include 'frontend_header.php';
require 'db_connect.php';

?>

<div class="container">
	<h1 class="mt-5 mb-3 text-center" style="color: #673AB7; font-weight: bold; letter-spacing: 0.1rem;">Your Orderdetails</h1>
	<div class="row">
		<div class="col-12">
			<a href="categories" class="btn btn-secondary float-right px-3" style="background: #673AB7;border-color: #673AB7">
				<i class="fas fa-shopping-cart"></i>
				Continue Shopping
			</a>
		</div>
	</div>
	<div class="row mt-5">
		<div class="table-responsive">
			<table class="table table-striped table-secondary text-center">
				<thead>
					<tr>
						<th>No</th>
						<th>Voucher No</th>
						<th>Order Date</th>
						<th>Total</th>
						
					</tr>
				</thead>
				<tbody>
					<?php 
						$loginsession = $_SESSION['loginuser'];
						//var_dump($loginsession);
						//die();
						$loginsessionid = $loginsession['id'];
							//var_dump($loginsessionid);
							//die();
						$sql = "SELECT * from orders WHERE user_id=:user_id ORDER BY id ASC";
								$stmt = $pdo->prepare($sql);
								$stmt-> bindParam(':user_id',$loginsessionid);
								$stmt->execute();
								$row = $stmt->fetchAll();
						$i=1;
						foreach($row as $order) :			
									$vouncherno =$order['vouncherno'];
									$orderdate = $order['orderdate'];
									$total = $order['total'];
									
					?>
					<tr>
						<td><?= $i ?></td>
						<td>
							<?= $vouncherno ?>
						</td>
						<td>
							<?= $orderdate ?>
						</td>
						
						<td>
							<?= $total ?>
						</td>
					</tr>
					<?php 
						$i++;
						endforeach;
					?>
					
				</tbody>
				<tfoot>
					<tr>
						<th>No</th>
						<th>Voucher No</th>
						<th>Order Date</th>
						<th>Total</th>
						
					</tr>
				</tfoot>
				
			</table>
		</div>
	</div>

	<h4 class="mt-5 mb-3 text-center" style="color: #673AB7; font-weight: bold;">THANK YOU!</h4>

</div>

<?php 
include 'frontend_footer.php';
?>