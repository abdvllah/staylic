  <?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
  <?php include 'header.php' ?>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular.min.js"></script>


  <script>
  var myApp=angular.module("myModule",[]);
  myApp.factory('Salons', function ($http) {
  	return {
  		get: function () {
  			return $http.get('<?php echo base_url('/Search/get_salons'); ?>');
  		}
  	};
  });
  
  myApp.factory('Areas', function ($http) {
  	return {
  		get: function () {
  			return $http.get('<?php echo base_url('/Search/get_areas'); ?>')
  		}
  	}
  });
  
  myApp.factory('Categories', function ($http) {
  	return {
  		get: function () {
  			return $http.get('<?php echo base_url('/Search/get_categories'); ?>')
  		}
  	}
  });
  
  
  myApp.controller("myController",function($scope,Salons, Areas, Categories){

  	Salons.get().then(function (response) {
  		$scope.salons = response.data;
  	});

  	Areas.get().then(function (response) {
  		$scope.areas = response.data;
  	});

  	Categories.get().then(function (response) {
  		$scope.categories = response.data;
  	});

  	$scope.setSort = function (sort) {
  		$scope.sort = sort;
  	};

  	$scope.search = {
  		'name': sessionStorage.sName,
  	};

  	$scope.address = {
  		'name': sessionStorage.sArea,
  	};

  	$scope.cat = {
  		'name': sessionStorage.sCat,
  	};

    sessionStorage.removeItem('sName');
    sessionStorage.removeItem('sArea');
    sessionStorage.removeItem('sCat');

  });

  </script>
  <div id="search-page" class="wrap" ng-app="myModule" ng-controller="myController">    
  	<div id="results">
  		<div class="sorting">
  			<div class="c-results">{{filteredSalons.length}} Search Results <i>{{address.name}}</i><br>
  				<b>None</b>
  			</div>
  			<div class="sort">
  				<h4>
  					Sort <span class="glyphicon glyphicon-sort"></span>
  				</h4>

  				<div class="options">
  					<ul>
              <li ng-click="setSort('address[0].name')">By Area</li>
              <li ng-click="setSort('name')">Alphabeticl (A to Z)</li>
              <li ng-click="setSort('rating[0].rating')">By Rating (Low to High)</li>
            </ul>
          </div>
        </div> <!-- End sort -->

      </div> <!-- End Sorting -->

      <!-- filter:{kids_friendly: 'false'} -->
      <div class="item" ng-repeat="salon in filteredSalons = (salons | filter:search | filter:address.name | filter:cat.name | orderBy:sort)">
       <!-- <a href="<?=base_url('/salon')?>/{{ salon.url_title }}"> -->

        <a href="<?=base_url('/salon')?>/{{ salon.url_title }}"><div class="img has-background" style="background-image: url('<?=base_url('/img/salonprofileimage/{{salon.profile_image}}')?>');"></div></a>

        <!--<div class="img has-background" style="background-image: url('../img/salonprofileimage/{{salon.profile_image}}');"></div>-->
        <div class="info">
          <!-- <b>{{salon}}</b> -->
          <a href="<?=base_url('/salon')?>/{{ salon.url_title }}"><div class="title">{{ salon.name }}</div></a>
          <div ng-if="salon.count_reviewrs > 0" class="rating" id="{{salon.rating[0].rating}} "> 
         <!-- <div class="salon-rating" id="{{salon.rating[0].rating}}>-->
             <?php
			for($i=1;$i<=5;$i++)	
			{
		 ?>
					<span ng-if="salon.rating[0].rating >= <?=$i?> && salon.rating[0].rating != 'NULL'"> 
					<img src="<?php echo base_url("img/icons/frasha-r.png") ?>" alt="">
					</span>	
					<span ng-if="salon.rating[0].rating != NULL && salon.rating[0].rating < <?=$i?>">    <img src="<?php echo base_url("img/icons/frasha.png") ?>" alt="">

				     </span>			
					<?php
				}
		
        ?>
        <span>({{salon.count_reviewrs}})</span>
      </div>


      <div ng-repeat="add in salon.address" class="address">
       <span class="glyphicon glyphicon-map-marker"></span>{{ add.zone_number}} {{ add.name }}, {{add.street_number}}
     </div>
     <div class="top-service" ng-repeat="cat in filteredCat = (salon.categories | orderBy:'name' )"> <b>{{ cat.name }}</b></div>
     <!--  <div class="price">$</div> -->
     <a href="<?=base_url('/salon')?>/{{ salon.url_title }}">
      <div class="profile">View Profile</div></a>
    </div>
  </div> <!-- End Item -->
  <div ng-show="filteredSalons.length==0">There are no results found</div>
</div> <!-- End Results -->
<div class="filter">
  <span class="glyphicon glyphicon-filter"></span>
  <span class="glyphicon glyphicon-sort"></span>
  <br>
</div>

<div id="filter" class="form">
  <h4 style="margin-top: 0;">Filters</h4>
  <div>
   <input type="text" id="query" value="" ng-model="search.name" placeholder="Salon Name">
 </div>
 <div class="select">
   <select ng-model="address.name" id="area" name="locations" >
    <option value="">Location (ALL)</option>
    <option value="{{n.name}}" ng-repeat="n in areas">{{ n.name}}</option>
  </select>
  <span class="glyphicon glyphicon-chevron-down"></span>  
</div>
<div class="select">
 <select id="catagory" name="catagories" ng-model="cat.name">
  <option value="">Catagory (ALL)</option>
  <option value="{{c.name}}" ng-repeat="c in categories">{{ c.name }}</option>
</select>
<span class="glyphicon glyphicon-chevron-down"></span>  
</div>
<div id="filters">  
  	  <!-- <ul class="filter">
  		<b>Rating</b>
  		<li>1 ♥</li>
  		<li>2 ♥♥</li>
  		<li>3 ♥♥♥</li>
  		<li>4 ♥♥♥♥</li>
  		<li>5 ♥♥♥♥♥</li>
  	</ul> -->

  	<ul class="filter-item">
  		<b>Features</b>
  		<li><input type="checkbox" id="par" ng-model="search.has_parking" ng-true-value="'1'" ng-false-value="">Has Parking</li>
  		<li><input type="checkbox" ng-model="search.by_appointment" ng-true-value="'1'" ng-false-value="">Book By Appointment</li>
      <li><input type="checkbox"ng-model="search.kids_friendly" ng-true-value="'1'" ng-false-value="">Kids Friendly</li>
      <li><input type="checkbox"ng-model="search.refreshments_avilable" ng-true-value="'1'" ng-false-value="">Refreshments Avilable</li>
      <li><input type="checkbox"ng-model="search.wifi_avilable" ng-true-value="'1'" ng-false-value="">Wifi Available</li>
      <li><input type="checkbox"ng-model="search.home_service" ng-true-value="'1'" ng-false-value="">Home Service</li>
  	</ul>

  	 <!-- 
  	   <ul class="filter">
  		<b>Place</b>
  		<li>Street</li>
  		<li>Neighborhood</li>
  		<li>Hotel</li>
  	  </ul>
  	   <ul class="filter">
  		<b>Price Range (QR)</b>
  		<li>Below 50</li>
  		<li>50 - 100</li>
  		<li>100 - 200</li>
  		<li>200 - 300</li>
  		<li>300 - 400</li>
  		<li>400 - 500</li>
  		<li>Above 500</li>
  	</ul> -->

  </div> <!-- End Filters -->
</div> <!-- End Search -->

</div> <!-- End Wrap -->

<!-- jQuery -->
<script src="<?=base_url('js/jquery.js')?>"></script>

<script type="text/javascript">
$(document).ready (function() {
		// alert ('Jquery is running!');
		// Filters keyword +/- Functionality
		$(".filter-item b").attr('data-content','- ');
		$(".filter-item b").attr('stat','open');
		// Show and Hide Filter Options List
		$(".filter-item b").click(function() {
			if( $(this).attr('stat') == 'open' ) {
				$(this).attr('data-content','+ ');
				$(this).attr('stat','close');
				$(this).parent().children('li').slideToggle();
			}
			else {
				$(this).attr('data-content','- ');
				$(this).attr('stat','open');
				$(this).parent().children('li').slideToggle();
			}
		});
    $('.filter-item li input[type="checkbox"]').click(function () {
      $(this).parent('.filter-item li').toggleClass('active');
    });
	   // Sorting Functionality
	   $(".sort ").click(function() {
	   	$(this).children(".options").fadeToggle();
	   });
	   $(".options li").click(function() {
	   	$(".options li").removeClass('active');
	   	$(this).addClass('active');
	   	$(".sorting .c-results b").html($(this).html());
	   });

     $(".filter").click(function () {
      $('#filter').fadeToggle();
      $('.sorting').slideToggle();
    });
   });
  </script>
  <?php include 'footer.php' ?>