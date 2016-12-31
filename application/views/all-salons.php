<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<?php include 'header.php' ?>

<section id="discover">

 <div class="page-title">
        <h2>Discover All Salons</h2>
    </div>

    <div class="flex-all-salons">
    	
<?php
	foreach ($salons as $salon){?>
		
	<a class="thumbnail" href="<?=base_url('/salon/'.$salon['url_title'])?>">
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
	<?php /*
		 if (!empty($salon['categories'])) {
            foreach ($salon['categories'] as $value) {
				echo '<div class="top-service">';
					echo '<b>'.$value['name'].'</b>';
				echo '</div>';
            }
        }
		*/
		?> 
</a>	
	<?php } ?>

	    </div> <!-- End flex -->


</section> <!-- End Salons List Div -->

<!-- jQuery -->
<script src="js/jquery.js"></script>
<script type="text/javascript">
$(document).ready(function () {
});
</script>

 
<?php include 'footer.php' ?>