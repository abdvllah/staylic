<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<?php include 'header.php' ?>

<section id="discover">

 <div class="page-title">
        <h2>Discover All Salons</h2>
    </div>
<?php
	foreach ($salons as $salon){?>
		
	<a href="<?=base_url('/Welcome/salon_page/'.$salon['url_title'])?>"><div class="thumbnail">
	<img src="./img/salonprofileimage/<?=$salon['profile_image']?>">
	<h2><?=$salon['name']?></h2>
	<div>
	<?php
		 if (!empty($salon['address'])) {
            foreach ($salon['address'] as $value) {
				echo '<span class="glyphicon glyphicon-map-marker"></span>';
                echo $value->name;
            }
        }
		?>          
	</div>
	<?php
		 if (!empty($salon['categories'])) {
            foreach ($salon['categories'] as $value) {
				echo '<div class="top-service">';
					echo '<b>'.$value['name'].'</b>';
				echo '</div>';
            }
        }
		
		?> 
</div></a>	
	<?php } ?>

</section> <!-- End Salons List Div -->

<!-- jQuery -->
<script src="js/jquery.js"></script>
<script type="text/javascript">
$(document).ready(function () {
});
</script>

 
<?php include 'footer.php' ?>