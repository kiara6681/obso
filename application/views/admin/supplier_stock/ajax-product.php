<?php foreach ($product as $customer_records){
    ?>
    <div class="card p-0 pageB">    
    <div class="card-body srchdv">
    <div class="row p-9">
    <div class="col-xl-6 col-md-4 col-sm-6 border-rgt p-top12">
    
    <div class="col-md-12 m-l-10">
    <p> 
    Part Number: <strong><?php echo $customer_records->part_number ?></strong><br>
    Manufacturer: <strong><?php echo $customer_records->manufacturer_name ?></strong><br>
    Lifecycle Status: <strong><?php echo $customer_records->licycle_status ?></strong><br>
    Lead Time:  <strong><?php echo $customer_records->lead_time ?></strong><br>
    Country of Origin: <strong><?php echo $customer_records->country ?></strong><br>
    Description: <strong> <?php echo $customer_records->description ?></strong><br>
    
    </p>
    </div>
    </div>
    
    <div class="col-xl-6 col-md-4 col-sm-6 p-0">
    <div class="row">
    <div class="col-xl-10 col-md-4 col-sm-6 p-l-30 p-top12">
    <div class="row">
    
    <div class="col-xl-12">
    <p>
    Website Stock Qty Brand New: <strong><?php echo $customer_records->qty_brand_new ?></strong><br>
    Website Stock Qty New Surplus: <strong><?php echo $customer_records->qty_new_surplus ?></strong><br>
    
    Website Stock Qty Pre-owned:<strong><?php echo $customer_records->qty_pre_owned ?></strong><br>
    Total Qty:  <strong><?php echo $customer_records->total_qty ?></strong><br>
    
    BRAND NEW RRP.: <strong><?php echo $customer_records->brand_new_rrp ?></strong><br>
    Web Price: <strong><i class="fas fa-pound-sign"></i> <?php echo $customer_records->web_price ?></strong><br>
    
    
    </p>
    </div>
    </div>
    </div>
    
    <div class="col-xl-2">
    <div class="test" id="menu1" data-toggle="dropdown"></div>
    <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
    <li role="presentation"><a href="#" data-toggle="modal" data-target=".bs-example-modal-lgedit" onclick="get_product_edit(<?php echo $customer_records->id; ?>)">Edit</a></li>
    <li role="presentation"><a href="<?php echo base_url('admin/product/delete/'.$customer_records->id) ?>" onclick="return confirm('Are you sure you want to remove the contact list?')" role="menuitem" tabindex="-1">Delete</a></li>
    </ul>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    
    <?php } ?> 