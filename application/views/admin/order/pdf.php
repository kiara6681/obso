<!DOCTYPE html>
<html>
<head>
	<title>PDF </title>
<!--Chartist Chart CSS -->
<link rel="stylesheet" href="<?php echo base_url();?>obso/assets/plugins/chartist/css/chartist.min.css">
<!--calendar css-->
<link href="<?php echo base_url();?>obso/assets/plugins/fullcalendar/css/fullcalendar.min.css" rel="stylesheet">

<link href="<?php echo base_url();?>obso/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url();?>obso/assets/css/metismenu.min.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url();?>obso/assets/css/icons.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url();?>obso/assets/css/style.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url();?>obso/assets/css/modify.css" rel="stylesheet" type="text/css">

<link href="<?php echo base_url();?>obso/assets/plugins/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url();?>assets/datepicker/bootstrap-datetimepicker.min.css" rel="stylesheet" type="text/css">
<!-- jQuery  -->
<script src="<?php echo base_url();?>obso/assets/js/jquery.min.js"></script>
</head>
<body style="background: white !important;">
<div>
	<div class="modal-dialog modal-xl">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title mt-0" id="myLargeModalLabel">GENERATE QUOTATION</h5>
			</div>
			<div class="modal-body">
				<div class="modal-body" style="background-color: #fff !important;color: #000;">
				    <div class="row">
				        <div class="col-md-6">
				            <h3>Grienert and Glatt Order</h3>
				        </div>
				        <div class="col-md-6 text-right">

				            <h6>Date : <?= date('d-M-Y',strtotime($inovice->created_on)) ?></h6>
				        </div>
				    </div>
				    <div class="cards" style="background: #ffffff !important">
				        <div class="card-body">
				            <ul class="nav nav-pills nav-justified" role="tablist">
				                <li class="nav-item  border-rgt">
				                    <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
				                    <span class="d-none d-sm-block">Supplier Order Ref: Q08633 </span> 
				                </li>
				                <li class="nav-item  border-rgt">
				                    <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
				                    <span class="d-none d-sm-block">Requested By: John Wigg<br></span> 
				                </li>
				                <li class="nav-item  border-rgt">
				                    <span class="d-block d-sm-none"><i class="far fa-envelope"></i></span>
				                    <span class="d-none d-sm-block">Finance Contact: Deva Bank<br></span>   
				                </li>
				                <li class="nav-item ">
				                    <span class="d-block d-sm-none"><i class="fas fa-cog"></i></span>
				                    <span class="d-none d-sm-block">Payment Terms:<br></span>    
				                </li>
				               
				            </ul>
				        </div>
				    </div>
				    <div class="row">
				        <div class="col-xl-12 col-md-12 col-sm-12">
				            <div class="card" style="background: #ffffff !important">
				                <div class="card-body">
				                    <div class="row">
				                        <div class="col-xl-3 col-md-4 col-sm-6 border-rgt m-t-5">
				                            <h5>Invoice Address:</h5>
				                            <h6>OBSO</h6>
				                            <p>
				                                PO: 46356/356/665 <br>
				                                1645 American Road Chicago, IL, 60011, United States
				                            </p>
				                        </div>
				                        <div class="col-xl-3 col-md-4 col-sm-6 border-rgt m-t-5">
				                            <h5>Deliver To:</h5>
				                            <p>
				                                PO: 46356/356/665 <br>
				                                1645 American Road Chicago, IL, 60011, United States
				                            </p>
				                        </div>
				                        <div class="col-xl-3 col-md-4 col-sm-6 border-rgt m-t-5">
				                            <h5>Brife:</h5>
				                            <p>
				                                8.7.19 OBSO Ref: RFO/8762-1/3 <br>
				                                8.7.19 Invoice Ref: OI/98632 <br>
				                                8.7.19 Date Ordered 
				                            </p>
				                        </div>
				                        <div class="col-xl-3 col-md-4 col-sm-6 m-t-5 text-right">
				                            <h5>OBSO Ltd.</h5>
				                            <p>
				                                Customer Quote <br>
				                                VAT: GB 763 786 7896 <br>
				                                sales@obso.com<br>
				                                789 4564 1132<br><br>
				                                Sales Contact: John Wigg<br>
				                                Purchase Co-ordinator: Leroy Spance
				                            </p>
				                        </div>
				                    </div>
				                </div>
				            </div>
				        </div>
				    </div> 
				    <div class="row">
				        <div class="col-md-12" >
				            <table class="table table-borderless" >
				                <thead>
				                    <tr>
				                        <th scope="col">Quantity</th>
				                        <th scope="col">Manufacturer</th>
				                        <th scope="col">Part Number</th>
				                        <th scope="col">Part Name</th>
				                        <th scope="col">Warranty</th>
				                        <th scope="col">Condition</th>
				                        <th scope="col">Lead Time</th>
				                        <th scope="col">Buying Price</th>
				                        <th scope="col">Selling Price</th>
				                        <th scope="col">Total</th>
				                    </tr>
				                </thead>
				                <tbody>
				                    <?php 
				                    $ci = get_instance();
				                    $order =$ci->common_model->getInvoiceOrderDetail($inovice->id) ?>
				                    <?php foreach ($order as $key => $value): ?>
				                      
				                    <tr>
				                        <td>
				                            <?= $value['quentity'] ?>
				                        </td>
				                        <?php 
				                        $product=$ci->common_model->get_single_product_info($value['prod_id']);   
				                        ?>
				                        <td>
				                            <?= $product->manufacturer_name ?>
				                        </td>
				                        <td>
				                            <?= $product->part_number ?>
				                        </td>
				                        <td>
				                            <!-- <?= $product->part_number ?> -->
				                        </td>
				                        <td>
				                            <?= $inovice->warranty ?>
				                        </td>
				                        <td>
				                            <!-- <?= $inovice->warranty ?> -->
				                        </td>
				                        <td>
				                            <?= $value['delivery_time'] ?>
				                        </td>
				                        <td>
				                            <i fas fa-pound-sign></i><?= $value['unite_price'] ?>
				                        </td>
				                        
				                        <td>
				                            <i fas fa-pound-sign></i><?= $value['selling_price']   ?>
				                        </td>
				                        <td>
				                            <i fas fa-pound-sign></i><?= $value['total_price'] ?>
				                        </td>
				                    </tr>
				                    <?php endforeach ?>
				                    
				                </tbody>
				            </table> 
				        </div>
				    </div>                        
				    <div class="row">
				        <div class="col-md-12" style="border-top: 1px solid #000;">
				            <div class="row">
				                <div class="col-md-8"></div>
				                <div class="col-md-4">
				                    <table class="table">
				                        <tbody>
				                            <tr>
				                                <th><h4>Total</h4></th>
				                                <td><h4><?= $inovice->total ?></h4></td>
				                            </tr>
				                            <tr>
				                                <th>+VAT (%)<input type="" name="" class="" value="<?= $inovice->vat ?>"> </th>
				                                <td><?= $inovice->vat_amount ?></td>
				                            </tr>
				                            <tr>
				                                <th>- Discount (%)<input type="" name="" class="" value="<?= $inovice->discount ?>"> </th>
				                                <td><?= $inovice->discount_amount ?></td>
				                            </tr>
				                            <tr>
				                                <th style="border-top: 1px solid #5d5e66 !important"><h4>NET Total</h4></th>
				                                <td style="border-top: 1px solid #5d5e66 !important"><h4><i fas fa-pound-sign></i><?= $inovice->net_total ?></h4></td>
				                            </tr>
				                        </tbody>
				                    </table>
				                </div>
				            </div>  
				        </div>     
				    </div>    
				</div>
			</div>
		</div><!-- /.modal-content -->
	</div>
</div> <!-- /.modal-dialog -->




<style type="text/css">
    .cards {
        border: none;
        -webkit-box-shadow: 0px 0px 13px 0px rgba(36, 36, 41, 0.44);
        box-shadow: 0px 0px 13px 0px rgba(36, 36, 41, 0.44);
        background: #ffffff !important;
        padding: 1px;
        margin-bottom: 10px;

    }

.form-horizontal .cards {
    border: none;
    -webkit-box-shadow: 0px 0px 13px 0px rgba(36, 36, 41, 0.44);
    box-shadow: 0px 0px 13px 0px rgba(36, 36, 41, 0.44);
    background: #ffffff;
    padding: 1px;
    margin-bottom: 10px;
}

.form-horizontal .card {
        border: none;
        -webkit-box-shadow: none !important;
        box-shadow: none !important;
        background: #ffffff !important;
        padding: 10px;

    }

    .card {
        border: none;
        -webkit-box-shadow: none !important;
        box-shadow: none !important;
        
        padding: 10px;

    }

 .form-horizontal .table {
    color: #222831;
}
    .nav-justified .nav-item{
        padding: 5px;
    }
   
    .table thead tr th {
        background: #fff;
        color: #222831;
        border-bottom: 1px solid #000;
    }
    tbody tr th:hover {
        color: #222831;
        cursor: pointer;
    }
    .table td, .table th {
        padding: .0rem;
        vertical-align: top;
        border-top: 1px solid #dee2e6;
    }
</style>
  
<style type="text/css">
  .table-responsive {
    display: block;
    width: 110%;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
}
tbody tr td{
      width: 30px !important;
}
button:hover{
background: #03a9f4;
}

.table > tbody > tr > td, .table > tfoot > tr > td, .table > thead > tr > td {
padding: 10px 10px;
}

.btn-secondary:hover {
color: #fff !important;
background-color: #626ed4 !important;
border-color: #626ed4;
}
.mb{
text-align: center;
}
.number{
background-color: red;
}
.addnew{
width: 200px;height: 40px; border-radius: 20px;
}
.newrow{
background-color: #303240
}
.heading{
margin-top: 20px;
} 

.addnew {
width: 192px;
height: 31px;
border-radius: 20px;
margin-top: 14px;
} 

.oon{
background: #262f44;
width: 40px;
padding: 10px;
margin-left: -17px;
margin-top: -12px;
height: 98px;
position: absolute;
}
.test:after {
content: '\2807';
font-size: 18px;
position: absolute;
margin-left: 214px;
cursor: pointer;
margin-top: -45px;
}

.testt:after {
content: '\2807';
font-size: 18px;
position: absolute;
margin-left: 662px;
cursor: pointer;
margin-top: -36px;

} 

.testtt:after {
    content: '\2807';
    background: #fff;
    font-size: 22px;
    position: absolute;
    margin-left: 1px;
    cursor: pointer;
    margin-top: 1px;
    padding: 2px;
}

.abc .dropdown-menu.show {
    display: block;
    position: absolute;
    will-change: transform;
    top: 26px !important;
    padding: 10px !important;
    left: -28px !important;
    transform: translate3d(0px, 0px, 0px);
}

.dropdown-menu.show {
display: block;
position: absolute;
will-change: transform;
top: -23px !important;
padding: 10px !important;
left: 57px !important;
transform: translate3d(0px, 0px, 0px);
}



.table thead tr th {
background: #fff;
border: none;
}
.teb thead tr th {
background: #252735;
border: none;
}
.table td, .table th {
padding: .75rem;
vertical-align: top;
border-top: 1px solid #252735 !important;

}
.vat {
width: 15%;
float: left;
margin-left: 88px;
/* height: 29px; */
margin-top: -24px;
position: absolute;
background: #fff;
}
.form-control {
font-size: 14px;
color: #222831 !important;
background: #fff !important;
border-color: rgb(57, 62, 70);
border-radius: 0px !important;
}

.addnewcompny {
border-radius: 0px !important;
font-size: 22px !important;
text-align: center;
background: #393e46 !important;
border-color: rgb(34, 40, 49) !important;
}


.modal .modal-content {
background: #36394c;
border-color: #36394c;
}

a {
color: #222831 !important;
text-decoration: none;
}

.imgsize{
  width: 200px;height: 168px;
}
.imgsize1{
 width: 200px;height: 168px;background-color: #fff; 
}

.marright{
  margin-top: 10px;border-right: 1px solid #252735;
}
</style>

    </body>
</html>