
$(document).ready(function() 
{
	getSubcategoryId();
	cartnoti();
	showTable();
	console.log("sessionuser"+sessionuser);
	function getSubcategoryId()
	{
		var subcategoryid=$('#subcategoryid').val();

		getItem(subcategoryid);

		$('.listgroup_'+subcategoryid).toggleClass('active');
	}

	$('.list-group #subcategoryList').click(function(){
		var id = $(this).data('id');

		getItem(id);

		$('.list-group-item.active').removeClass('active');
		$('.listgroup_'+id).toggleClass('active');

	});

		

	function getItem(subcategoryid)
	{
		if (subcategoryid) 
		{
			$.ajax({ 
				type: "GET",                                     
      			url: 'getItem?id='+subcategoryid,
      			success: function(response)
      			{                    
		            // $("#responsecontainer").html(response); 
		            // console.log(response);
			        var html ='';

					var itemObjArray = JSON.parse(response); 

					console.log(itemObjArray);

					if(itemObjArray.length > 0)
					{
			            $.each(itemObjArray,function (i,v) 
						{
							html += `<div class="col-lg-4 col-md-4 col-sm-6 portfolio-item">
										<div class="card h-100">
										<a href="#">
						                	<img class="card-img-top" src="${v.photo}" alt="" style="height: 200px;object-fit:cover;">
						                </a>
									
										<div class="card-body">
					                		<h6 class="card-title">
					                    		<a href="#" class="secondary"> ${v.codeno} </a>
					                  		</h6>`;

					        if(v.discount)
					        {
					        	html += `<p class="font-weight-lighter d-inline"> <del>  ${v.price} Ks </del>  </p>
					                	<h4 class="text-danger d-inline">  ${v.discount} Ks </h4>`;

					        }
					         
					        else
					        {
					        	html += `<h4 class="text-danger"> ${v.price} Ks </h4>`;
					        }
					                  
					        html += `</div>

									<div class="card-footer bg-transparent">`;

									if(sessionuser)
									{


			                  			html+=`<a href="javascript:void(0)" class="btn btn-secondary btn-block addtocart" data-id="${v.id}" data-name="${v.name}" data-photo="${v.photo}" data-codeno="${v.codeno}" data-price="${v.price}" data-discount="${v.discount}" style="background-color: #673AB7; border-color: #673AB7"> 
			                    			<i class="fas fa-shopping-cart pr-3"></i> Add To Cart 
			                  			</a>`;
			               			
			               			}
			               			else
			               			{
			               				html+=`<a href="login" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="If you want to order, you must need to be our member" style="background-color: #673AB7; border-color:#673AB7;">
                      <i class="fas fa-shopping-cart pr-3"></i> Add To Cart </a> `;
						
			               			}

			               			html+=`</div> </div> </div>`; 
						});
			        }

			        else
			        {
			        	html += `<h3> There is no item in our database. </h3>`;
			        }

					console.log(html);

					$('#itemDiv').html(html);

		        } 
      		});  
		}



	}
	$('.addtocart').on('click',function () {
		// body...
		var id=$(this).data('id');
		var name=$(this).data('name');
		var codeno=$(this).data('codeno');
		var photo=$(this).data('photo');
		var price=$(this).data('price');
		var discount=$(this).data('discount');
		console.log(id);
		// console.log(name);
		// console.log(codeno);
		// console.log(photo);
		// console.log(price);
		// console.log(discount);
		storeData(id,codeno,name,photo,price,discount);

	});

	$('#itemDiv').on('click','.addtocart',function () {
		// body...
		var id=$(this).data('id');
		var name=$(this).data('name');
		var codeno=$(this).data('codeno');
		var photo=$(this).data('photo');
		var price=$(this).data('price');
		var discount=$(this).data('discount');
		console.log(id);
		// console.log(name);
		// console.log(codeno);
		// console.log(photo);
		// console.log(price);
		// console.log(discount);
		storeData(id,codeno,name,photo,price,discount);
	});


	function storeData(id,codeno,name,photo,price,discount){
		var qty=1;
		var mylist={id:id,codeno:codeno,name:name,photo:photo,price:price,discount:discount,qty:qty};
		console.log(mylist);
		var cart=localStorage.getItem('cart');
		if(!cart){
			var cart='{"mycart":[]}';
		}
		cart=JSON.parse(cart);
		var mycart=cart.mycart;
		length=mycart.length;
		// increase id when id will same
		for(var i=0;i<length;i++){
			if(id==mycart[i].id){
				var exit=1;
				mycart[i].qty+=1;
			}	
				}
				if(!exit){
					cart.mycart.push(mylist);
				}
				cart=JSON.stringify(cart);
				localStorage.setItem('cart',cart);
				cartnoti();
	}

	
	function cartnoti(){
		var noti;
		var cart=localStorage.getItem('cart');
		if(cart){
			var cartobj=JSON.parse(cart);
			noti=cartobj.mycart.length;

		}
		$('.cartnoti').html(noti);
	}

	function showTable()
	{
		var localstorageitem=localStorage.getItem('cart');

		if(localstorageitem){

			var localstorageitem=JSON.parse(localstorageitem);
			var mycart=localstorageitem.mycart;
			var mytable='';
			var total=0;
			$.each(mycart,function(i,v){
				if(v){
					var id=v.id;
					var codeno=v.codeno;
					var name=v.name;
					var price=v.price;
					var discount=v.discount;
					var photo=v.photo;
					var qty=v.qty;
					if(discount>0){
						var unit=discount;
					}
					else{
						var unit=price;
					}
					var subtotal=unit*qty;
					mytable+=`	<tr>
									<td>
										<button class=" btn-outline-danger remove" data-key="${i}">
										<i class="fas fa-trash-alt"></i>
										</button>
									</td>
									<td>
										<img src="${photo}" class="img-fluid" style="width: 50px;height: 50px;">
									</td>
									<td>
										<p>${name}</p>
										<p>${codeno}</p>
									</td>
									<td>
										<button type="button" class="btn btn-outline-secondary plus" data-id="${id}" data-qty="${qty}">
											<i class="fas fa-plus"></i>
										</button>
									</td>
									<td>	
										<p>${qty}</p>
									</td>
									<td>	
										<button type="button" class="btn btn-outline-secondary minus" data-key="${i}" data-qty="${qty}">
											<i class="fas fa-minus"></i>
										</button>
									</td>
									<td>`;

					if(discount>0){
									mytable+=`<p class="font-weight-lighter"><del>${price}Ks</del>
									</p> <h4 class="text-danger">${discount}Ks</h4>`;
								}
								else{
									mytable+=`<h4 class="text-danger">${price}Ks</h4>`;
								}


								mytable+=`</td>
								<td><p>${subtotal}</p></td></tr>`;

								}
								total+=subtotal++;
								});
								mytfoot=mytfoot = `	<tr>
							<tr>
								<td colspan="8">
									<h3 class="text-right">Total : ${total}</h3>
								</td>
							</tr>							
						</tr>
						<tr>
							<td colspan="5">
								<textarea class="form-control" id="notes"></textarea>
							</td>
							<td colspan="3">
								<button class="btn btn-secondary btn-block checkoutbtn" data-total="${total}"
								style="background: #673AB7;border-color: #673AB7">Check Out
								</button>
							</td>
						</tr>`;

			$('.shoppingcart-div').show();
			$('.noneshoppingcart_div').hide();

			$('#shoppingcart_table').html(mytable);
			$('#shoppingcart_tfoot').html(mytfoot);
		}

		else
		{
			$('.shoppingcart-div').hide();
			$('.noneshoppingcart_div').show();
		}
	}

	$('#shoppingcart_tfoot').on('click','.checkoutbtn',function(){
		var note=$('#notes').val();
		var total=$(this).data('total');
		var cart=localStorage.getItem('cart');
		var cartobj=JSON.parse(cart);
		var cartarr=cartobj.mycart;
		$.post('storeorder.php',{
			cart:cartarr,
			note:note,
			total:total
		},function(response){
			// storage clear
			localStorage.clear();
			location.href="order_success.php";


		});
		// console.log(total);
		// console.log(note);
	})


	$("#shoppingcart_table").on('click', '.plus', 
				function() {
					
					var id = $(this).data('id');
					//console.log(id);
					var qty = $(this).data('qty');
					// console.log(qty);
					// var q = ++qty;
				
				
				
				var shopString = localStorage.getItem('cart');
				//console.log(typeof(shopString));
				  if (shopString) {
				 	var shopArray = JSON.parse(shopString);
					//console.log(shopArray.mycart);
				 	//console.log(shop[id]);
				 	$.each(shopArray.mycart, function(i,v){
				 		if(id==v.id)
				 			v.qty++;

				 	})
				 	var shopData = JSON.stringify(shopArray);
				 	//console.log(shopData);
				 	localStorage.setItem('cart',shopData);
				 	
				 	showTable();
					
				 }

			});

$("#shoppingcart_table").on('click', '.minus', 
				function() {
					
					var key = $(this).data('key');

					var getCart = JSON.parse(localStorage.getItem('cart'));

					var getProduct = getCart.mycart[key];

					if(getProduct.qty <= 1){
						alert('Min quentity is 1');
					}else{

						//reduce -1 qty from current product
						getProduct.qty--;

						//update local storage
						localStorage.setItem('cart',JSON.stringify(getCart));

						showTable();
					}

			});



$("#shoppingcart_table").on('click', '.remove', function () {

		var ans = confirm('Are you sure delete?');
		if(ans){
		var key = $(this).data('key');

		var getCart = JSON.parse(localStorage.getItem('cart'));

		//remove item (key,1) key=indexnunber 1=remove count
		getCart.mycart.splice(key,1);

		//update local storage
		localStorage.setItem('cart',JSON.stringify(getCart));

		showTable();

		cartnoti();
	}
	})


	// Show My Order
	function showOrder()
	{
		$('.myorder').click(function()
		{
			
		})
	}
});