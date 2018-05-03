<?php
$config 	= include "config/config.php";
$products 	= include "config/products.php";
include 	"include/header.php";
?>

 <div class="shop-area mt-90">
 	<div class="container">

 		<div class="clearfix"></div>
 		<div class="tab-content mt-25">
 			<div id="grid" class="tab-pane active" role="tabpanel">
 				<div class="row">


 					<?php 
					foreach($products as $product){
						?>
	 					<div class="col-xs-12 col-width">
	 						<div class="single-product mb-30">
	 							<div class="single-product-item clearfix">
	 								<div class="single-product-img clearfix">
	 									<a href="#">
	 										<img class="primary-image" src="img/product/1.jpg" alt="">
	 									</a>
	 									<div class="wish-icon-hover text-center clearfix">
	 										<div class="hover-text">
	 											<p><?php echo $product['small_description'] ?></p>
	 											<ul>
	 												<li><a href="#" data-toggle="tooltip" title="Shopping Cart"><i class="fa fa-shopping-cart"></i></a></li>
	 												<li><a class="modal-view" href="#" data-toggle="modal" data-target="#productModal"><i class="fa fa-eye"></i></a></li>
	 												<li><a href="#" data-toggle="tooltip" title="Compage"><i class="fa fa-refresh"></i></a></li>
	 												<li><a href="#" data-toggle="tooltip" title="Like it!"><i class="fa fa-heart"></i></a></li>
	 											</ul>
	 										</div>    
	 									</div>
	 								</div>
	 								<div class="single-product-info clearfix">
	 									<div class="pro-rating">  
	 										<?php for($i=0 ; $i<$product['rating'] ; $i++) echo '<i class="fa fa-star"></i>'; ?>
	 									</div> 
	 									<div class="pro-price">
	 										<span class="new-price">PKR <?php echo $product['discounted']?:$product['price'] ?></span>
	 										<?php echo $product['discounted']? '<span class="old-price">PKR '.$product['price'].'</span>' : '' ?>
	 									</div> 
	 									<h3><a href="#"><?php echo $product['title'] ?></a></h3>  
	 								</div>
	 							</div>
	 							<div class="new-sale">
	 								<?php echo $product['new']? '<span class="black hidden-sm">new</span>' : '' ?>
	 								<?php echo $product['hot']? '<span class="red hidden-sm">hot</span>' : '' ?>
	 							</div>    
	 						</div>
	 					</div>
	 				<?php
						}
					 ?>

 				</div>
 			</div>

 		</div> 

 	</div>
 </div>

<?php
include 	"include/footer.php";