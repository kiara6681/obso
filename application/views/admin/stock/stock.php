<?php
  $order=''; 
  $manufacturerby='';
  if(isset($_GET['table'])){
     $order = $_GET['table'];
   }
  if(isset($_GET['column'])){
     $order .='_'.$_GET['column'];
  }
  if(isset($_GET['sort'])){
     $order .='_'.$_GET['sort'];
  }
  if(isset($_GET['manufacturerby']))
  {
  	$manufacturerby=$_GET['manufacturerby'];
  }	

?>

<style type="text/css">
	.imgcondition{
    padding: 0px;
    position: absolute;
    background: white;
    z-index: 1;
    width: 92px;
    height: 30px;
    /* text-align: center; */
    margin-top: 8px;
    color: #000;
}
</style>
<div class="content-page">
	<!-- Start content -->
	<div class="content">
		<div class="container-fluid">
			<div class="page-title-box">
				<div class="row align-items-center">
					<div class="col-sm-6">
						<h3 class="page-title">Dashboard <small style="font-size: 12px;">&nbsp > &nbspSales Company List</small>
						</h3>
					</div>

				</div>
			</div>
			<!-- end row -->

			<!--forms start -->
			<div class="row">
				<div class="col-lg-8" style="padding: 0px;">
					<h3>Search Parts</h3>
				</div>
			</div>	
                
			<div class="row p-0">
				<div class="col-xl-8 col-md-12 col-sm-6 p-0">
					<div class="card">
						<div class="card-body">
							<div class="row">

								<div class="col-xl-3 col-md-4 col-sm-6">
									<select  name="" class="form-control" style="background: #222831 !important;border-color: #000 !important;position: absolute;    width: 50%;">-->
										<option value="">Euro</option>
										<option value="AE">ABC</option>
										<option value="VI">ABC</option>
										<option value="MC">ABC</option>
										<option value="DI">ABC</option>
									</select>
								</div>
								<div class="col-xl-9 col-md-4 col-sm-6">
									<input type="text" id="myInput" class="form-control ipt-rds" placeholder="Search..">
								</div>
							</div>      
						</div>
					</div>
					
					<button style="margin-bottom: 10px" name="delete_all" id="delete_all" class="btn btn-danger">Delete All Selected</button>

					<div class="row" id="myList" style="padding: 0px;margin: 0px;margin-bottom: 30px;">
					    <?php foreach($data as $row){?>
						<div class="col-xl-6" style="padding-bottom: 25px;" >

							<div class="col-xl-12 product-add" style="border: 0.5px solid #36394c;padding: 0;">
							<div class="card srchdv" style="margin-bottom: 0px;margin: 3px;padding: 0px;">
								<div class="row">
									<div class="col-md-10">
										<input type="checkbox" class="delete_checkbox" value="<?php echo $row['id']; ?>">
										<div class="col-md-12">
											<p>Manufacturer : <strong class="pp"><?php echo $row['manufacturer_name']; ?></strong>
												<br>
												Parts Number : <strong class="pp"><?php echo $row['part_number']; ?></strong>
											</p>
										</div>
									</div>
									<div class="col-md-2" style="padding: 18px;">
										<a href=""><i class="ion ion-ios-paper thumb-md rounded-circle mr-2" data-toggle="tooltip" title="Copy"></i></a>
									</div>
								</div>
							</div>
							<div class="row" style="margin: 3px;">
								<div class="col-md-5 imgcondition">
									<p style="text-align: center;padding: 5px;">USED</p>
								</div>	
								<div class="col-md-5" style="padding: 0px">
								    <?php if(!empty($row['stock_image'])) {?>
									<img src="<?php echo base_url(); ?>uploads/<?php echo $row['stock_image']; ?>" style="width: 100%;height: 166px;">
									<?php }else { ?>
									<img src="<?php echo base_url(); ?>uploads/dummy.png" style="width: 100%;height: 166px;">
									
								<?php }	?>
								</div>

								<div class="col-md-7" style="padding: 0px;">
									<div class="col-md-12" style="margin: 8px;">
										<p>Price : <i class="fas fa-pound-sign"></i><strong class="pp"> <?php echo $row['web_price']; ?> </strong><br>
											John Wigg by Alf Agderson <br>
											Source: OBSO<br>
											Stock:<?php echo $row['total_qty']; ?> Available<br>
											Order Before 2pm GMT<br>
										<?php echo $row['lead_time']; ?></p>
									</div>
								</div>
							</div>
							<div class="card" style="margin-bottom: 0px;margin: 3px;">
								<div class="row">
									<div class="col-md-12">
										<p>Product Type : <?php echo $row['type']; ?><br>
											Supplier : <span style="color: #147fad"><?php echo $row['supplier_name']; ?></span> &nbsp <a href=""><i class="ion ion-ios-paper" style="color: #03a9f4;"></i></a>
										</p>
										<!-- <i class="fa fa-shield" aria-hidden="true"></i> -->
									</div>
								</div>
								<div class="row">
									<div class="col-md-6" >
										<button type="button" class="form-control addnew" style="border-radius: 25px;">Add to Quote</button>
									</div>
									<div class="col-md-6">
										<button type="button" class="form-control addnew" style="border-radius: 25px;">Order</button>
									</div>
								</div>
							</div>
						</div>
						</div>
						<?php } ?>
						
						
					</div>
					
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="card">
						<div class="card-body">
							<div class="col-xl-12 col-md-4 col-sm-6 sup-bg p-0">
								<h6>Search Filter</h6>
							</div>
							<div class="col-xl-12 col-md-4 col-sm-6 sup-bg p-0">
								<div class="form-group">
									 <select id="adv_sort_by" name="" class="form-control adv-common-filter">
										<option value="">Sort By</option>
										<option value="&column=part_number&sort=ASC" <?= ($order=='product_part_number_ASC')?'selected':''?> >Part number A-Z</option>
										<option value="&column=part_number&sort=DESC" <?= ($order=='product_part_number_DESC')?'selected':''?>>Part number Z-A</option>
										<option value="&column=manufacturer_name&sort=ASC" <?= ($order=='product_manufacturer_name_ASC')?'selected':''?>>Manufacturer A-Z</option>
										<option value="&column=manufacturer_name&sort=DESC" <?= ($order=='product_manufacturer_name_DESC')?'selected':''?>>Manufacturer Z-A</option>
										<option value="&column=brand_new_rrp&sort=ASC" <?= ($order=='product_brand_new_rrp_ASC')?'selected':''?>>RRP (Lowest to Highest)</option>
										<option value="&column=brand_new_rrp&sort=DESC" <?= ($order=='product_brand_new_rrp_DESC')?'selected':''?>>RRP (Highest to Lowest)</option>
										<option value="&column=web_price&sort=ASC" <?= ($order=='product_web_price_ASC')?'selected':''?>>Web Price (Lowest to Highest)</option>
										<option value="&column=web_price&sort=DESC" <?= ($order=='product_web_price_DESC')?'selected':''?>>Web Price (Highest to Lowest)</option>
										<option value="&column=total_qty&sort=ASC" <?= ($order=='product_total_qty_ASC')?'selected':''?>>Part Quantity (Lowest to Highest)</option>
										<option value="&column=total_qty&sort=DESC" <?= ($order=='product_total_qty_DESC')?'selected':''?>>Part Quantity (Highest to Lowest)</option>
									</select>
								</div>
						<?php /*		<div class="form-group">
									<select  name="" class="form-control common-filter">
										<option value="">Parts Condition </option>
										<option value="<?php echo base_url('admin/stock/all_stock_list')?>?table=product&column=part_condtion&var=new&sort=ASC">New</option>
										<option value="<?php echo base_url('admin/stock/all_stock_list')?>?table=product&column=part_condtion&var=old&sort=ASC">Old</option>
										<option value="<?php echo base_url('admin/stock/all_stock_list')?>?table=product&column=part_condtion&var=factory_sealed&sort=ASC">Factory Sealed</option>
										<option value="<?php echo base_url('admin/stock/all_stock_list')?>?table=product&column=part_condtion&var=open_box&sort=ASC">Open Box</option>
										<option value="<?php echo base_url('admin/stock/all_stock_list')?>?table=product&column=part_condtion&var=used_box&sort=ASC">Used Box</option>
										<option value="<?php echo base_url('admin/stock/all_stock_list')?>?table=product&column=part_condtion&var=exchange&sort=ASC">Exchange</option>
										<option value="<?php echo base_url('admin/stock/all_stock_list')?>?table=product&column=part_condtion&var=repair&sort=ASC">Repair</option>
									</select>
								</div>
								<div class="form-group">
									<select  name="" class="form-control">
										 <option>Select Supplier</option>
					                        <?php foreach($supplier as $dataa){?> 
					                          
					                         <option value="<?php echo base_url('admin/product/all_product_list')?>?table=product&column=total_qty&sort=ASC"><?php echo $dataa['company_name']; ?></option>

					                       <?php } ?>
									</select>
								</div> */ ?>

										<div class="form-group">
									 
                           <select name="manufacturer_name" class="form-control adv-common-filter" id="manufacturer_name">
                            <option value="">Select Manufacturer</option>
                            <?php foreach ($manufacturer as $manufacturer){ ?>
                            <option value="&manufacturerby=<?php echo str_replace(' ', '_',$manufacturer['manufacturer']); ?>" <?= ($manufacturerby==str_replace(' ', '_',$manufacturer['manufacturer']))?'selected':'' ?>><?php echo $manufacturer['manufacturer']; ?></option>
                            <?php } ?>
                          </select>
                     

								<!-- </div>
								<div class="form-group">
									<?//php $countries = $this->common_model->select('country'); ?>
									<select  name="" class="form-control">
										<option value="">Region/Country Select</option>
										<?//php foreach($countries as $c => $country): ?>
											<option value="<?//= $country['id'] ?>"><?//= $country['name'] ?></option>
										<?//php endforeach; ?>
									</select>-->
								</div> 
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-body">
							<div class="col-xl-12 col-md-4 col-sm-6 sup-bg">
								<div class="button-items">
									<button type="button" class="btn btn-primary btn-lg btn-block waves-effect waves-light btn-radius" data-toggle="modal" data-target=".bs-example-modal-lg">Add New Product</button>
								</div>
							</div>
						</div>
					</div>
				</div>        
			</div> 
		</div>
	</div>
</div>
</div>
<div class="modal fade bs-example-modal-center" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header" style="padding: 0.5rem 1rem !important;    background: #323a4e;">
				<h5>Add New Product</h5>
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			</div>
			<div class="modal-body">
				<form>
					<div class="row">
						<div class="col-md-4">
							<input type="text" class="form-control" required data-parsley-maxlength="6" placeholder="First Name"/>
						</div>
						<div class="col-md-4">
							<input type="text" class="form-control" required data-parsley-maxlength="6" placeholder="Last Name"/>
						</div>
						<div class="col-md-4">
							<select  name="" class="form-control">
								<option value="">Gender</option>
								<option value="AE">Male</option>
								<option value="VI">Female</option>
								<option value="OT">Other</option>
							</select>
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-md-4">
							<select  name="" class="form-control">
								<option value="">Designation</option>
								<option value="AE">abc</option>
								<option value="VI">abc</option>
								<option value="OT">abc</option>
							</select>
						</div>
						<div class="col-md-4">
							<input type="text" class="form-control" required data-parsley-maxlength="6" placeholder="Phone Number"/>
						</div>
						<div class="col-md-4">
							<input type="text" class="form-control" required data-parsley-maxlength="6" placeholder="Contact E-mail"/>
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-md-8">
							<input type="text" class="form-control" required data-parsley-maxlength="6" placeholder="Address"/> 
						</div>
						<div class="col-md-4">
							<select  name="" class="form-control">
								<option value="">Select Country</option>
								<option value="AE">abc</option>
								<option value="VI">abc</option>
								<option value="OT">abc</option>
							</select>
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-md-6">
							<input type="text" class="form-control" required data-parsley-maxlength="6" placeholder=""/>
						</div>
						<div class="col-md-6">
							<select  name="" class="form-control">
								<option value="">Permission access: Sale</option>
								<option value="AE">abc</option>
								<option value="VI">abc</option>
								<option value="OT">abc</option>
							</select>
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-md-6">
							<p><b>Id Prof.: </b>(please upload passport or driving licence or NID)</p>
							<button type="button" class="form-control">Upload</button> 
						</div>
						<div class="col-md-6">
							<p><b>Employee Image :</b>(please upload recent photo)</p>
							<button type="button" class="form-control">Upload Image</button>
						</div>
					</div>
					<br><br>
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<button type="button" class="form-control">Send</button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $(document).on('change','.adv-common-filter' ,function(){
        var url="<?php echo base_url('admin/stock/all_stock_list')?>?table=product";
        if($('#adv_sort_by').val())
         url+=$('#adv_sort_by').val();
        if($('#manufacturer_name').val())
        url+=$('#manufacturer_name').val();
    	window.location.href = url;
    });	
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myList .srchdv").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>

<script type="text/javascript">
  $(document).ready(function(){
    $('#delete_all').click(function(){
      var checkbox = $('.delete_checkbox:checkbox');
      if (checkbox.length > 0) 
      {
          var checkbox_value ='';
          $(checkbox).each(function(){
            if($(this).val()){  
            if(checkbox_value=='')
            checkbox_value=$(this).val();
            else
            checkbox_value+=','+$(this).val();
            }
          });
          $.ajax({
            url:"<?php echo base_url(); ?>admin/stock/delete_all",
            method:"POST",
            data:{checkbox_value:checkbox_value, '<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>'},
            success:function()
            {
              $(checkbox).each(function(){
                  if($(this).val())
                  $(this).closest('.product-add').remove();
              });      
            }
          })
      }
      else
      {
        alert('Select atleast one records');
      }  
    });
  });


</script>