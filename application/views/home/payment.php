<style type="text/css">
	.panel {
	  margin-bottom: 20px;
	  background-color: #fff;
	  border: 1px solid transparent;
	  border-radius: 4px;
	  -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
	  box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
	}
	.panel-body {
	  padding: 15px;
	}
	.panel-heading {
	  padding: 10px 15px;
	  border-bottom: 1px solid transparent;
	  border-top-left-radius: 3px;
	  border-top-right-radius: 3px;
	}
	.panel-heading > .dropdown .dropdown-toggle {
	  color: inherit;
	}
	.panel-title {
	  margin-top: 0;
	  margin-bottom: 0;
	  font-size: 16px;
	  color: inherit;
	}
	.panel-title > a,
	.panel-title > small,
	.panel-title > .small,
	.panel-title > small > a,
	.panel-title > .small > a {
	  color: inherit;
	}
	.panel-footer {
	  padding: 10px 15px;
	  background-color: #f5f5f5;
	  border-top: 1px solid #ddd;
	  border-bottom-right-radius: 3px;
	  border-bottom-left-radius: 3px;
	}
	.panel > .list-group,
	.panel > .panel-collapse > .list-group {
	  margin-bottom: 0;
	}
	.panel > .list-group .list-group-item,
	.panel > .panel-collapse > .list-group .list-group-item {
	  border-width: 1px 0;
	  border-radius: 0;
	}
	.panel > .list-group:first-child .list-group-item:first-child,
	.panel > .panel-collapse > .list-group:first-child .list-group-item:first-child {
	  border-top: 0;
	  border-top-left-radius: 3px;
	  border-top-right-radius: 3px;
	}
	.panel > .list-group:last-child .list-group-item:last-child,
	.panel > .panel-collapse > .list-group:last-child .list-group-item:last-child {
	  border-bottom: 0;
	  border-bottom-right-radius: 3px;
	  border-bottom-left-radius: 3px;
	}
	.panel > .panel-heading + .panel-collapse > .list-group .list-group-item:first-child {
	  border-top-left-radius: 0;
	  border-top-right-radius: 0;
	}
	.panel-heading + .list-group .list-group-item:first-child {
	  border-top-width: 0;
	}
	.list-group + .panel-footer {
	  border-top-width: 0;
	}
	.panel > .table,
	.panel > .table-responsive > .table,
	.panel > .panel-collapse > .table {
	  margin-bottom: 0;
	}
	.panel > .table caption,
	.panel > .table-responsive > .table caption,
	.panel > .panel-collapse > .table caption {
	  padding-right: 15px;
	  padding-left: 15px;
	}
	.panel > .table:first-child,
	.panel > .table-responsive:first-child > .table:first-child {
	  border-top-left-radius: 3px;
	  border-top-right-radius: 3px;
	}
	.panel > .table:first-child > thead:first-child > tr:first-child,
	.panel > .table-responsive:first-child > .table:first-child > thead:first-child > tr:first-child,
	.panel > .table:first-child > tbody:first-child > tr:first-child,
	.panel > .table-responsive:first-child > .table:first-child > tbody:first-child > tr:first-child {
	  border-top-left-radius: 3px;
	  border-top-right-radius: 3px;
	}
	.panel > .table:first-child > thead:first-child > tr:first-child td:first-child,
	.panel > .table-responsive:first-child > .table:first-child > thead:first-child > tr:first-child td:first-child,
	.panel > .table:first-child > tbody:first-child > tr:first-child td:first-child,
	.panel > .table-responsive:first-child > .table:first-child > tbody:first-child > tr:first-child td:first-child,
	.panel > .table:first-child > thead:first-child > tr:first-child th:first-child,
	.panel > .table-responsive:first-child > .table:first-child > thead:first-child > tr:first-child th:first-child,
	.panel > .table:first-child > tbody:first-child > tr:first-child th:first-child,
	.panel > .table-responsive:first-child > .table:first-child > tbody:first-child > tr:first-child th:first-child {
	  border-top-left-radius: 3px;
	}
	.panel > .table:first-child > thead:first-child > tr:first-child td:last-child,
	.panel > .table-responsive:first-child > .table:first-child > thead:first-child > tr:first-child td:last-child,
	.panel > .table:first-child > tbody:first-child > tr:first-child td:last-child,
	.panel > .table-responsive:first-child > .table:first-child > tbody:first-child > tr:first-child td:last-child,
	.panel > .table:first-child > thead:first-child > tr:first-child th:last-child,
	.panel > .table-responsive:first-child > .table:first-child > thead:first-child > tr:first-child th:last-child,
	.panel > .table:first-child > tbody:first-child > tr:first-child th:last-child,
	.panel > .table-responsive:first-child > .table:first-child > tbody:first-child > tr:first-child th:last-child {
	  border-top-right-radius: 3px;
	}
	.panel > .table:last-child,
	.panel > .table-responsive:last-child > .table:last-child {
	  border-bottom-right-radius: 3px;
	  border-bottom-left-radius: 3px;
	}
	.panel > .table:last-child > tbody:last-child > tr:last-child,
	.panel > .table-responsive:last-child > .table:last-child > tbody:last-child > tr:last-child,
	.panel > .table:last-child > tfoot:last-child > tr:last-child,
	.panel > .table-responsive:last-child > .table:last-child > tfoot:last-child > tr:last-child {
	  border-bottom-right-radius: 3px;
	  border-bottom-left-radius: 3px;
	}
	.panel > .table:last-child > tbody:last-child > tr:last-child td:first-child,
	.panel > .table-responsive:last-child > .table:last-child > tbody:last-child > tr:last-child td:first-child,
	.panel > .table:last-child > tfoot:last-child > tr:last-child td:first-child,
	.panel > .table-responsive:last-child > .table:last-child > tfoot:last-child > tr:last-child td:first-child,
	.panel > .table:last-child > tbody:last-child > tr:last-child th:first-child,
	.panel > .table-responsive:last-child > .table:last-child > tbody:last-child > tr:last-child th:first-child,
	.panel > .table:last-child > tfoot:last-child > tr:last-child th:first-child,
	.panel > .table-responsive:last-child > .table:last-child > tfoot:last-child > tr:last-child th:first-child {
	  border-bottom-left-radius: 3px;
	}
	.panel > .table:last-child > tbody:last-child > tr:last-child td:last-child,
	.panel > .table-responsive:last-child > .table:last-child > tbody:last-child > tr:last-child td:last-child,
	.panel > .table:last-child > tfoot:last-child > tr:last-child td:last-child,
	.panel > .table-responsive:last-child > .table:last-child > tfoot:last-child > tr:last-child td:last-child,
	.panel > .table:last-child > tbody:last-child > tr:last-child th:last-child,
	.panel > .table-responsive:last-child > .table:last-child > tbody:last-child > tr:last-child th:last-child,
	.panel > .table:last-child > tfoot:last-child > tr:last-child th:last-child,
	.panel > .table-responsive:last-child > .table:last-child > tfoot:last-child > tr:last-child th:last-child {
	  border-bottom-right-radius: 3px;
	}
	.panel > .panel-body + .table,
	.panel > .panel-body + .table-responsive,
	.panel > .table + .panel-body,
	.panel > .table-responsive + .panel-body {
	  border-top: 1px solid #ddd;
	}
	.panel > .table > tbody:first-child > tr:first-child th,
	.panel > .table > tbody:first-child > tr:first-child td {
	  border-top: 0;
	}
	.panel > .table-bordered,
	.panel > .table-responsive > .table-bordered {
	  border: 0;
	}
	.panel > .table-bordered > thead > tr > th:first-child,
	.panel > .table-responsive > .table-bordered > thead > tr > th:first-child,
	.panel > .table-bordered > tbody > tr > th:first-child,
	.panel > .table-responsive > .table-bordered > tbody > tr > th:first-child,
	.panel > .table-bordered > tfoot > tr > th:first-child,
	.panel > .table-responsive > .table-bordered > tfoot > tr > th:first-child,
	.panel > .table-bordered > thead > tr > td:first-child,
	.panel > .table-responsive > .table-bordered > thead > tr > td:first-child,
	.panel > .table-bordered > tbody > tr > td:first-child,
	.panel > .table-responsive > .table-bordered > tbody > tr > td:first-child,
	.panel > .table-bordered > tfoot > tr > td:first-child,
	.panel > .table-responsive > .table-bordered > tfoot > tr > td:first-child {
	  border-left: 0;
	}
	.panel > .table-bordered > thead > tr > th:last-child,
	.panel > .table-responsive > .table-bordered > thead > tr > th:last-child,
	.panel > .table-bordered > tbody > tr > th:last-child,
	.panel > .table-responsive > .table-bordered > tbody > tr > th:last-child,
	.panel > .table-bordered > tfoot > tr > th:last-child,
	.panel > .table-responsive > .table-bordered > tfoot > tr > th:last-child,
	.panel > .table-bordered > thead > tr > td:last-child,
	.panel > .table-responsive > .table-bordered > thead > tr > td:last-child,
	.panel > .table-bordered > tbody > tr > td:last-child,
	.panel > .table-responsive > .table-bordered > tbody > tr > td:last-child,
	.panel > .table-bordered > tfoot > tr > td:last-child,
	.panel > .table-responsive > .table-bordered > tfoot > tr > td:last-child {
	  border-right: 0;
	}
	.panel > .table-bordered > thead > tr:first-child > td,
	.panel > .table-responsive > .table-bordered > thead > tr:first-child > td,
	.panel > .table-bordered > tbody > tr:first-child > td,
	.panel > .table-responsive > .table-bordered > tbody > tr:first-child > td,
	.panel > .table-bordered > thead > tr:first-child > th,
	.panel > .table-responsive > .table-bordered > thead > tr:first-child > th,
	.panel > .table-bordered > tbody > tr:first-child > th,
	.panel > .table-responsive > .table-bordered > tbody > tr:first-child > th {
	  border-bottom: 0;
	}
	.panel > .table-bordered > tbody > tr:last-child > td,
	.panel > .table-responsive > .table-bordered > tbody > tr:last-child > td,
	.panel > .table-bordered > tfoot > tr:last-child > td,
	.panel > .table-responsive > .table-bordered > tfoot > tr:last-child > td,
	.panel > .table-bordered > tbody > tr:last-child > th,
	.panel > .table-responsive > .table-bordered > tbody > tr:last-child > th,
	.panel > .table-bordered > tfoot > tr:last-child > th,
	.panel > .table-responsive > .table-bordered > tfoot > tr:last-child > th {
	  border-bottom: 0;
	}
	.panel > .table-responsive {
	  margin-bottom: 0;
	  border: 0;
	}
	.panel-group {
	  margin-bottom: 20px;
	}
	.panel-group .panel {
	  margin-bottom: 0;
	  border-radius: 4px;
	}
	.panel-group .panel + .panel {
	  margin-top: 5px;
	}
	.panel-group .panel-heading {
	  border-bottom: 0;
	}
	.panel-group .panel-heading + .panel-collapse > .panel-body,
	.panel-group .panel-heading + .panel-collapse > .list-group {
	  border-top: 1px solid #ddd;
	}
	.panel-group .panel-footer {
	  border-top: 0;
	}
	.panel-group .panel-footer + .panel-collapse .panel-body {
	  border-bottom: 1px solid #ddd;
	}
	.panel-default {
	  border-color: #ddd;
	}
	.panel-default .panel-heading.accordion-toggle.collapsed {
	  color: #333333;
	  background-color: #f5f5f5;
	  border-color: #ddd;
	}	
	.panel-default .panel-heading.accordion-toggle.collapsed .panel-title {
	  color: #000;
	  text-transform: uppercase;
	}	
	.panel-default .panel-heading.accordion-toggle{
	  color: #333333;
	  background-color: #3c3c3c;
	  border-color: #ddd;
	}	
	.panel-default .panel-heading.accordion-toggle .panel-title{
	  	color: #fff;
	  	text-transform: uppercase;
	}	
	.active {
	  color: #333333;
	  background-color: #3c3c3c!important;
	  border-color: #ddd;
	}
	.panel-default > .panel-heading + .panel-collapse > .panel-body {
	  border-top-color: #ddd;
	}
	.panel-default > .panel-heading .badge {
	  color: #f5f5f5;
	  background-color: #333333;
	}
	.panel-default > .panel-footer + .panel-collapse > .panel-body {
	  border-bottom-color: #ddd;
	}
	.panel-primary {
	  border-color: #337ab7;
	}
	.panel-primary > .panel-heading {
	  color: #fff;
	  background-color: #337ab7;
	  border-color: #337ab7;
	}
	.panel-primary > .panel-heading + .panel-collapse > .panel-body {
	  border-top-color: #337ab7;
	}
	.panel-primary > .panel-heading .badge {
	  color: #337ab7;
	  background-color: #fff;
	}
	.panel-primary > .panel-footer + .panel-collapse > .panel-body {
	  border-bottom-color: #337ab7;
	}
	.panel-success {
	  border-color: #d6e9c6;
	}
	.panel-success > .panel-heading {
	  color: #3c763d;
	  background-color: #dff0d8;
	  border-color: #d6e9c6;
	}
	.panel-success > .panel-heading + .panel-collapse > .panel-body {
	  border-top-color: #d6e9c6;
	}
	.panel-success > .panel-heading .badge {
	  color: #dff0d8;
	  background-color: #3c763d;
	}
	.panel-success > .panel-footer + .panel-collapse > .panel-body {
	  border-bottom-color: #d6e9c6;
	}
	.panel-info {
	  border-color: #bce8f1;
	}
	.panel-info > .panel-heading {
	  color: #31708f;
	  background-color: #d9edf7;
	  border-color: #bce8f1;
	}
	.panel-info > .panel-heading + .panel-collapse > .panel-body {
	  border-top-color: #bce8f1;
	}
	.panel-info > .panel-heading .badge {
	  color: #d9edf7;
	  background-color: #31708f;
	}
	.panel-info > .panel-footer + .panel-collapse > .panel-body {
	  border-bottom-color: #bce8f1;
	}
	.panel-warning {
	  border-color: #faebcc;
	}
	.panel-warning > .panel-heading {
	  color: #8a6d3b;
	  background-color: #fcf8e3;
	  border-color: #faebcc;
	}
	.panel-warning > .panel-heading + .panel-collapse > .panel-body {
	  border-top-color: #faebcc;
	}
	.panel-warning > .panel-heading .badge {
	  color: #fcf8e3;
	  background-color: #8a6d3b;
	}
	.panel-warning > .panel-footer + .panel-collapse > .panel-body {
	  border-bottom-color: #faebcc;
	}
	.panel-danger {
	  border-color: #ebccd1;
	}
	.panel-danger > .panel-heading {
	  color: #a94442;
	  background-color: #f2dede;
	  border-color: #ebccd1;
	}
	.panel-danger > .panel-heading + .panel-collapse > .panel-body {
	  border-top-color: #ebccd1;
	}
	.panel-danger > .panel-heading .badge {
	  color: #f2dede;
	  background-color: #a94442;
	}
	.panel-danger > .panel-footer + .panel-collapse > .panel-body {
	  border-bottom-color: #ebccd1;
	}
	.active a{
		color: #fff!important;
	}
    .panel-heading {
	  position: relative;
	}

	.panel-heading[data-toggle="collapse"]:after {
	  content: "\005E"; /* "play" icon */
	  position: absolute;
	  color: #fff;
	  font-size: 24px;
	  line-height: 22px;
	  right: 20px;
	  top: calc(60% - 10px);

	  /* rotate "play" icon from > (right arrow) to down arrow */
	  -webkit-transform: rotate(-0deg);
	  -moz-transform:    rotate(-0deg);
	  -ms-transform:     rotate(-0deg);
	  -o-transform:      rotate(-0deg);
	  transform:         rotate(-0deg);
	}
	.panel-heading[data-toggle="collapse"].collapsed:after {
	  /* rotate "play" icon from > (right arrow) to ^ (up arrow) */
	  -webkit-transform: rotate(180deg);
	  -moz-transform:    rotate(180deg);
	  -ms-transform:     rotate(180deg);
	  -o-transform:      rotate(180deg);
	  transform:         rotate(180deg);
		color: #000;
		top: calc(40% - 10px);
	}
	.item_services p {
        text-align: left;
    }
    #about_us_home_banner_sections{
        padding-left: 10px;
        padding-top: 100px;
        height: 300px;
    }
    .my-image{
        background-image: url(<?php echo base_url(); ?>uploads/about_us.jpg);
        background-size: contain;
        background-repeat: no-repeat;
        background-position: right;
    }
    @media only screen and (max-width: 1200px)
    {
        #about_us_home_banner_sections{
            padding-left: 20px;
            height: 270px;
            padding-top: 80px;
        }
        .my-image{
            background-size: 70% !important;
            background-position: bottom right !important;
        }
    }
    @media only screen and (max-width: 900px)
    {
        #about_us_home_banner_sections{
            padding-left: 20px;
            height: 270px;
            padding-top: 20px;
        }
        .my-image{
            background-size: 70% !important;
            background-position: bottom right !important;
        }
    }
    @media only screen and (max-width: 768px)
    {
        #about_us_home_banner_sections{
            padding-left: 20px;
            height: 250px;
            padding-top: 20px;
        }
        .my-image{
            background-size: 70% !important;
            background-position: bottom right !important;
        }
    }
    @media only screen and (max-width: 600px)
    {
        #about_us_home_banner_sections{
            padding-left: 20px;
            height: 250px;
            padding-top: 20px;
        }
        .my-image{
            background-position: bottom !important;
            background-size: 100% !important;
        }
    }
    @media only screen and (max-width: 400px)
    {
        #about_us_home_banner_sections{
            padding-left: 20px;
            height: 230px;
            padding-top: 20px;
        }
        .my-image{
            background-position: bottom !important;
            background-size: 100% !important;
        }
    }
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<div class="container-fluid" style="background: #ffe300;margin-bottom: 20px;">
    <div class="row align-items-center my-image">
        <div class="container">
            <div class="row ">
                <div class="col-md-6" id="about_us_home_banner_sections">
                    <h1>Payment</h1>
                    <p>Our Wealth of experience can help you</p>
                </div>            
                <div class="col-md-6">
                    <!-- <img src="<?php echo base_url(); ?>uploads/about_us.jpg" class="img-resposive" style="width: 100%;"> -->
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
	<div class="row">
		<div class="col-md-12">
	      	<div class="panel-group" id="accordion">
		        <div class="panel panel-default">
		          	<div class="panel-heading accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" data-target="#collapseOne">
		            	<h4 class="panel-title">Payment</h4>
					</div>
		          	<div id="collapseOne" class="panel-collapse collapse show">
			            <div class="panel-body">
			              	<p><?php echo $data->description; ?></p>
			            </div>
		          	</div>
		        </div>
		        <div class="panel panel-default">
		          <div class="panel-heading accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" data-target="#collapseTwo">
		            <h4 class="panel-title">Shipping</h4>

		          </div>
		          <div id="collapseTwo" class="panel-collapse collapse">
		            <div class="panel-body">
					<p><?php echo $data->description; ?></p>
		            </div>
		          </div>
		        </div>		       
		         <div class="panel panel-default">
		          <div class="panel-heading accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" data-target="#collapseThree">
		            <h4 class="panel-title">Warranty</h4>
					</div>
		          <div id="collapseThree" class="panel-collapse collapse">
		            <div class="panel-body">
					<p><?php echo $data->description; ?></p>
		            </div>
		          </div>
		        </div>		         
		        <div class="panel panel-default">
		          <div class="panel-heading accordion-toggle" data-toggle="collapse" data-parent="#accordion" data-target="#collapseFour">
		            <h4 class="panel-title">Returns</h4>
					</div>
		          <div id="collapseFour" class="panel-collapse collapse">
		            <div class="panel-body">
					<p><?php echo $data->description; ?></p>
		            </div>
		          </div>
		        </div>
	      	</div>
<!-- 			<div class="inner_body policy_page">
	<?php echo $data->description; ?>
</div> -->
		</div>
	</div>
</div>
<script>
	$(document).ready(function(){
		$('.accordion-toggle').on('click', function(){
			$('.accordion-toggle').addClass('collapsed');
			$('.collapse').removeClass('show');
		});
	});
</script>
<!-- policy content end-->