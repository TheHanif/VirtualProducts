<?php
$config 	= include "config/config.php";
$products 	= include "config/products.php";
include 	"include/header.php";

?>
<pre>
	<?php print_r($products['pro1']); ?>
</pre>
<?php
include "include/footer.php";