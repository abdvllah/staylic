<?php include 'header.php' ?>

<section id="book">

	<h3>Booking Details</h3>

	<div id="item-card">
		<div class="item">
			Doing <span class="service">Hair Highlight <i>(30 Mins)</i></span> in <span class="salon">First Lady Salon</span>
		</div>
		<div class="price">Total: 1000 QR</div>
	</div>

	<!-- <div id="meta">
		<div class="salon">
			<div class="img has-background" style="background-image: url('../img/salons/1.jpg');"></div>
			<div class="info">
				<div class="title">First Lady Salon</div>
				<div class="address">
					<span class="glyphicon glyphicon-map-marker"></span>43 Matar, 195
				</div>
			</div>
		</div>

		<div class="service">
			<div class="name">Hair Highlight </div>
			<div class="price">1000 QR | 0 Mins</div>
		</div>

	</div> --> <!-- End Meta -->


	<div id="booking">

		<div class="step">
			<h3>Step 1: Select Time</h3>
			<div class="time">
				<ul>
					<li>9:00</li>
					<li>9:30</li>
					<li>10:00</li>
					<li>10:30</li>
					<li>11:00</li>
					<li>11:30</li>
					<li>12:00</li>
					<li>12:30</li>
					<li>13:00</li>
					<li>13:30</li>
					<li>14:00</li>
					<li>14:30</li>
					<li>15:00</li>
					<li>15:30</li>
					<li>16:00</li>
					<li>16:30</li>
					<li>17:00</li>
					<li>17:30</li>
					<li>18:00</li>
					<li>18:30</li>
					<li>19:00</li>
					<li>19:30</li>
					<li>20:00</li>
					<li>20:30</li>
				</ul>
			</div>
		</div>

		<div class="step">
			<h3>Step 2: Select Date</h3>
			<div class="date">
				<input type="text" id="datepicker">
			</div>

			<div class="notes">
				Do you have specifec instructions or notes?<br>
				<input type="text" name="notes" id="notes">
			</div>
		</div>

		<button class="btn">Confirm</button>
	</div> <!-- End Booking -->



</section> <!-- End Book Div -->


<script src="<?= base_url('js/jquery.js'); ?> "></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
  
  <script>
  $(document).ready(function() {
    $("#datepicker").datepicker();
  });
  </script>

<script type="text/javascript">
$(document).ready(function () {

});
</script>



<?php include 'footer.php' ?>