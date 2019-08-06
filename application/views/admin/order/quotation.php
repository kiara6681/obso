<?php 
$companyname = $this->common_model->getcompanynamee($id = $enquiry->company_id);
?>
<div class="content-page">
  <!-- Start content -->
  <div class="content">
    <div class="container-fluid">
      <div class="page-title-box">
        <div class="row align-items-center">
          <div class="col-sm-6">
            <h3 class="page-title">Dashboard <small style="font-size: 12px;">&nbsp > &nbsp Price and Sourcing</small>
            </h3>
          </div>
        </div>
      </div>
      <!-- end row -->
      <div class="row">
        <div class="col-xl-6"></div>
        <div class="col-xl-6 col-md-6">
          <div class="card mini-stat bg-primary text-white" style="background: #626ed4 !important;">
            <div class="card-body">
              <div class="mb-4 mb">
                <h3><i fas fa-pound-sign></i>00,000 Total GP</h3>
                <p>Total buy Parts: <i fas fa-pound-sign></i>000.00 <br>
                  Total Buy Shipping and extras: <i fas fa-pound-sign></i>0,000 (Total Buy <i fas fa-pound-sign></i>00,000)<br>
                  Total Sales Parts: <i fas fa-pound-sign></i>00,000<br>
                  Total Sales Extras: <i fas fa-pound-sign></i>00,000 (Sales Total <i fas fa-pound-sign></i>00,000)<br> </p>
                  <h3>@ 0% Average Margin</h3>
                </div>
              </div>
            </div>
          </div>      
        </div>
        <!-- end row -->
        <!--Top Discription -->
        <div class="row">
          <div class="col-xl-12 col-md-12 col-sm-12">
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-xl-3 col-md-3 col-sm-3 border-rgt">
                    <i class="ion ion-md-globe earth earth-position"></i>
                    <div class="col-xl-12 col-md-12 col-sm-12" style="margin: 16px;"> 
                      <div class="row">
                        <div class="col-xl-12">
                          <p>
                            <input type="text" name="company_name" class="form-control addnewcompny" placeholder="Add New Company"  value="<?php 
                                           if (!empty($enquiry->company_name_front)) {
                                               echo $enquiry->company_name_front;
                                           }else{

                                                echo $companyname->company_name;
                                           }

                                            ?>" required>
                          </p>
                        </div>
                      </div>
                    </div>  
                  </div>
                  <div class="col-xl-3 col-md-4 col-sm-6 border-rgt m-t-5">
                    <p>
                      PO: 46356/356/665 <br>
                      Deliver to: 1645 American Road Chicago, IL, 60011, United States
                    </p>
                  </div>
                  <div class="col-xl-2 col-md-4 col-sm-6 border-rgt m-t-5">
                    <p><?php echo $enquiry->full_name; ?><br>
                      Maintenance Manager<br>
                      <?php echo $enquiry->email; ?><br>
                      DD: <?php echo $enquiry->number; ?>
                    </p>
                  </div>
                  <div class="col-xl-2 col-md-4 col-sm-6 border-rgt m-t-5">
                    <p>Amanda, John<br>
                      Maintenance Manager<br>
                      Amnada.john@cocacola.com<br>
                      DD: 330 0874 084
                    </p>
                  </div>
                  <div class="col-xl-2 col-md-4 col-sm-6 p-10 m-t-15">
                    <div class="row">
                      <div class="col-xl-12 col-md-4 col-sm-6">
                        <button type="button" class="btn btn-secondary btn-sm waves-effect waves-light savebtn clr">Account</button>
                      </div>
                      <br>
                      <br>
                      <div class="col-xl-12 col-md-4 col-sm-6">
                        <button type="button" class="btn btn-secondary btn-sm waves-effect waves-light savebtn clr">Enquiry Active/Order</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>   
        <!--end top discription -->
        <!--Tabs start -->
        <div class="cards">
          <div class="card-body">
            <ul class="nav nav-pills nav-justified" role="tablist">
              <li class="nav-item waves-effect waves-light border-rgt">
                <?php if( $_SERVER['REQUEST_URI'] == ""){ ?>
                  <a class="nav-link active" href="">
                  <?php }else{ ?>
                    <a class="nav-link" href="#">
                    <?php } ?>
                    <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                    <span class="d-none d-sm-block">
                    Pricing & Sourcing Info </span> 
                  </a>
                </li>
                <li class="nav-item waves-effect waves-light border-rgt">
                  <?php if( $_SERVER['REQUEST_URI'] == "/obsoadmin/admin/sales/customer_contact"){ ?>
                    <a class="nav-link active" href="#">
                    <?php } ?>
                    <a class="nav-link" href="#">
                      <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                      <span class="d-none d-sm-block">Order History</span> 
                    </a>
                  </li>
                  <li class="nav-item waves-effect waves-light border-rgt">
                    <a class="nav-link" data-toggle="tab" href="#orderhostory" role="tab">
                      <span class="d-block d-sm-none"><i class="far fa-envelope"></i></span>
                      <span class="d-none d-sm-block">Notes & Activity</span>   
                    </a>
                  </li>
                  <li class="nav-item waves-effect waves-light border-rgt">
                    <a class="nav-link" data-toggle="tab" href="#customersummery" role="tab">
                      <span class="d-block d-sm-none"><i class="far fa-envelope"></i></span>
                      <span class="d-none d-sm-block">Customer Summery</span>   
                    </a>
                  </li>
                  <li class="nav-item waves-effect waves-light">
                    <a class="nav-link" data-toggle="tab" href="#chathistory" role="tab">
                      <span class="d-block d-sm-none"><i class="fas fa-cog"></i></span>
                      <span class="d-none d-sm-block"><i class="fa fa-comments"></i> Chat History</span>    
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <!--Tabs end-->
            <!--row start -->
            <div class="col-md-12">
              <div class="row">
                <h3>Product list</h3>&nbsp;&nbsp;&nbsp;<h3>|</h3>&nbsp;&nbsp;&nbsp;
                <h7 class="heading"> Enquiry Ref. no.: #<?= (isset($invoice) && $invoice)?  str_pad($invoice->id, 7, '0', STR_PAD_LEFT) : str_pad($invoice_no, 7, '0', STR_PAD_LEFT); ?></h7>
                &nbsp;&nbsp;&nbsp;<h3>  |</h3>&nbsp;&nbsp;&nbsp;
                <button type="button" class=" btnenq btnside1 btn btn-secondary waves-effect waves-light"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Add new Product</button>
                &nbsp;&nbsp;&nbsp;<h3>  |</h3>&nbsp;&nbsp;&nbsp;
                <button type="button" class=" btnenq btnside1 btn btn-secondary waves-effect waves-light"><i class="fa fa-ship"></i> Search product</button>
              </div>
            </div>
            <hr><br>
           <form id="inovice-form" action="<?= base_url() ?>admin/order/store" method="POST">
          <input type="hidden" name="company_id" value="<?= $companyname->id; ?>">
          <input type="hidden" name="enquiry_id" value="<?= $enquiry->id; ?>">

          <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" /> 
                <input type="hidden" name="orderno" value="<?= (isset($invoice) && $invoice)? $invoice->id : $invoice_no ?>">
            <!-- row end-->
            <?php 
            $i = 1;
// 
//        print_r($company_name);die;
           

            foreach ($quote as $data) {

              $part=$this->common_model->getProductInfoByPart($data['part']);
             
               ?>
            <div class="card" style="margin-bottom: 0px;">
                <div class="card-body">
                  <div class="row" style="margin: -8px;padding: 0px;">
                      
                      <div class="col-md-3" style="margin-top: 10px;border-right: 1px solid #252735;">
                                <div class="oon">
                            <h6><?php print_r($i); ?></h6>
                            </div>
                                
                            <p style="margin-left: 30px;">
                                Manufacture: <?= $part->manufacturer_name; ?><br><br></p>
                            <div style="margin-top: -25px;margin-left: 30px;">
                            <p> 
                                Part Number:&nbsp#<?= $part->part_number; ?>
                                
                            </p>
                            </div>
                              
                                        
                      </div>
                      <div class="col-md-3" style="margin-top: 10px;border-right: 1px solid #252735;">
                        <div class="form-group">
                          Product Type :<input type="text" class="form-control" value="<?= $part->type; ?>" placeholder="" / style="height: 29px;margin-top: 17px;">
                        </div>
                      </div>
                      <div class="col-md-3" style="margin-top: 10px;">

                        <?php if (isset($invoice)): ?>
                        <?php
                        $order=$this->common_model->getOrder($invoice->id,$data['id']);
                        $pro_quentity=0;
                        $supplcount=0;
                        foreach ($order as $key => $value) {
                         $pro_quentity+=$value['quentity'];
                         $supplcount++;   
                          }  
                        ?>  
                        <?php endif ?>
                        <p> 
                          Product Quantity:<input type="text" name="prod_quantity[]" class="form-control product-quantity" style="width: 50%;float: right;height: 29px;" value="<?= isset($pro_quentity)? $pro_quentity : 0; ?>" readonly>
                              
                        </p>
                     
                            
                       
                        <div>
                        <p> 
                            Total Supplier:<input type="text" name="total_supplier[]" class="form-control total-supplier" style="width: 50%;float: right;height: 29px;" value="<?= isset($supplcount)? $supplcount : 0; ?>" readonly> 
                        </p>
                        </div>
                        
                                  
                      </div>
                      
                       <div class="col-md-1" style="margin-top: 0px;border-right: 1px solid #252735;background: #222831;padding: 10px;font-size: 12px;">
                       
                             <p>CC :885h343</p>
                         <p><h7>COR :<img src="<?php echo base_url(); ?>uploads/french_flag.jpg" style="border-radius: 46%;width: 25px;float: right;margin-top: 0px;"></h7></p>

                         

                        </div>

                        <div class="col-md-2" style="margin-top: 0px;background: #222831;padding: 10px;">
                          <p>Product Condition : <div class="test" id="menu1" data-toggle="dropdown"></div>
                            <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                              <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Edit</a></li>
                              <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Copy</a></li>
                              <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Hide</a></li>
                              <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Delete</a></li>
                                 
                            </ul>
                          </p> 
                          <select name="product_condition" class="form-control" style="background: #262f44;">
                                <option value="Brand New">Brand New</option>
                                <option value="New Spare">New Spare</option>
                                <option value="Preowned">Preowned</option>
                              </select>

                         </div>   
                      </div> 
                    </div>
                  </div>
                 
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-xl-2">
                           <?php 
                    if (!empty($part->product_image)) { ?>
                         <img src="<?php echo base_url(); ?>uploads/<?=  $part->product_image; ?>" style="width: 100%;height: 174px;">
                <?php    }else{ ?>
                       <img src="<?php echo base_url(); ?>uploads/no_image.png" style="background-color: white;width: 100%;height: 174px;"> 
                 <?php   } ?>

                        </div>
                        <div class="col-xl-2" style="border-right: 1px solid #273044;">
                          <p>Discription
                            <hr>
                            <?= $part->description; ?></p>
                          </div>
                          <div class="col-xl-7 p-0">
                            <div class="table-responsive whole-box">
                              <table class="table table-bordered">
                                <thead>
                                  <tr>
                                    <th>Supplier</th>
                                    <th>Product Code</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                    <th>Delivery</th>
                                    <th>Selling Price</th>
                                    <th>Delivery Free</th>
                                    <th>Total Price</th>
                                    
                                  </tr>
                                </thead>
                                <tbody>
                                <?php if (isset($invoice)): ?>
                                <?php 

                                   $partt=$this->common_model->getProductInfoByPartSupplier($data['part']);
                                  
                                ?>
                                <?php foreach ( $order as $key => $ord): ?>
                                    
                                    
                                  <tr>
                                    <td  scope="row">
                                      <span><?= $this->common_model->getSupplierName($ord['supp_id']); ?></span>
                                      <div class="form-group">
                                      <select name="item[supplier][]" class="form-control select-supplier" style="display: none">
                                        <option>---select---</option>
                                       
                                        <?php  foreach ($partt as $value)
                                         { ?>
                                        <option value="<?php echo $value['id']; ?>" <?= ($ord['supp_id']==$value['id'])?'selected':'' ?>><?php echo $value['supplier_name']; ?></option>

                                        <?php } 
                                      ?>  
                                      </select>


                                      </div>
                                    </td>
                                    <td>
                                      <span><?= $ord['prod_code'] ?></span>
                                      <input type="text" class="form-control product-code" name="item[stock_number][]" value="<?= $ord['prod_code'] ?>" style="display: none" readonly  >
                                    </td>
                                    <td>
                                      <span><?= $ord['quentity'] ?></span>
                                      <input type="number" class="form-control total_qty calculat_tatal" name="item[total_qty][]" value="<?= $ord['quentity'] ?>" style="display: none">
                                    </td>
                                    <td>
                                      <span><?= $ord['unite_price'] ?></span>
                                      <input type="number" class="form-control price" name="item[web_price][]" value="<?= $ord['unite_price'] ?>" style="display: none" readonly>
                                    </td>
                                    <td>
                                      <span><?= $ord['delivery_time'] ?></span>
                                      <div class="form-group">
                                        <select name="item[lead_time][]" class="form-control delivery" style="display: none">
                                          <option value="">Select Lead Time</option>
                                          <option value="Same Day" <?= ($ord['delivery_time']=='Same Day')?'selected':'' ?>>Same Day</option>
                                          <option value="Next Day" <?= ($ord['delivery_time']=='Next Day')?'selected':'' ?>>Next Day</option>
                                          <option value="2 Days" <?= ($ord['delivery_time']=='2 Days')?'selected':'' ?>>2 Days</option>
                                          <option value="Express Available please Enquire" <?= ($ord['delivery_time']=='SExpress Available please Enquire')?'selected':'' ?>>Express Available please Enquire</option>
                                          </select>
                                      </div>
                                    </td>
                                    <td>
                                      <span><?= $ord['selling_price'] ?></span>
                                      <input type="number" class="form-control calculat_tatal selling-price" name="item[sellingprice][]" value="<?= $ord['selling_price'] ?>" style="display: none" ></td>
                                    <td>
                                      <span><?= $ord['delivery_fee'] ?></span>
                                      <input type="number" class="form-control calculat_tatal delivery-fee" name="item[deliveryfee][]" value="<?= $ord['delivery_fee'] ?>" style="display: none">
                                    </td>
                                    <td>
                                      <span><?= $ord['total_price'] ?></span>
                                      <input type="number" class="form-control total-price" name="item[total][]" value="<?= $ord['total_price'] ?>" style="display: none"readonly>
                                      <input type="hidden" class="itemid" name="item[id][]" value="<?= $ord['id'] ?>">
                                      <input type="hidden" name="item[enquiry][]" value="<?php echo $data['id']; ?>" class="enquiry">
                                      <input type="hidden" name="item[prodid][]" class="product" value="<?= $part->id ?>">
                                      <input type="hidden" name="item[status][]" class="status" value="save">

                                    </td>
                                    <td class="abc action">
                                       <div class="testtt" id="menu1" data-toggle="dropdown"></div>
                                        <ul class="dropdown-menu" role="menu" aria-labelledby="menu1" >
                                          <li role="presentation"><a role="menuitem" tabindex="-1" href="#" class="action-btn-edit">Edit</a></li>
                                          <li role="presentation"><a role="menuitem" tabindex="-1" href="#" class="action-btn-delete">Delete</a></li>
                                             
                                        </ul>
                                    </td>
                                    
                                  </tr>
                                <?php endforeach ?> 
                                <?php else: ?>
                                  <tr class="last">
                                    <td  scope="row">
                                      <span></span>
                                      <div class="form-group">
                                      <select name="item[supplier][]" class="form-control select-supplier">
                                        <option>---select---</option>
                                        <?php 

                                   $partt=$this->common_model->getProductInfoByPartSupplier($data['part']);
                                  
                                        ?>
                                        <?php  foreach ($partt as $value)
                                         { ?>
                                        <option value="<?php echo $value['id']; ?>"><?php echo $value['supplier_name']; ?></option>

                                        <?php } 
                                      ?>  
                                      </select>


                                      </div>
                                    </td>
                                    <td>
                                      <span></span>
                                      <input type="text" class="form-control product-code" name="item[stock_number][]" value="" readonly>
                                    </td>
                                    <td>
                                      <span></span>
                                      <input type="number" class="form-control total_qty calculat_tatal" name="item[total_qty][]" value="">
                                    </td>
                                    <td>
                                      <span></span>
                                      <input type="number" class="form-control price" name="item[web_price][]" value="" readonly>
                                    </td>
                                    <td>
                                      <span></span>
                                      <div class="form-group">
                                        <select name="item[lead_time][]" class="form-control delivery">
                                          <option value="">Select Lead Time</option>
                                          <option value="Same Day">Same Day</option>
                                          <option value="Next Day">Next Day</option>
                                          <option value="2 Days">2 Days</option>
                                          <option value="Express Available please Enquire">Express Available please Enquire</option>
                                          </select>
                                      </div>
                                    </td>
                                    <td>
                                      <span></span>
                                      <input type="number" class="form-control calculat_tatal selling-price" name="item[sellingprice][]" value="Selling Price" ></td>
                                    <td>
                                      <span></span>
                                      <input type="number" class="form-control calculat_tatal delivery-fee" name="item[deliveryfee][]" value="Delivery Free">
                                    </td>
                                    <td>
                                      <span></span>
                                      <input type="number" class="form-control total-price" name="item[total][]" value="Total Price" readonly>
                                      <input type="hidden" class="itemid" name="item[id][]">
                                      <input type="hidden" name="item[enquiry][]" value="<?php echo $data['id']; ?>" class="enquiry">
                                      <input type="hidden" name="item[prodid][]" class="product" value="<?= $part->id ?>">
                                      <input type="hidden" name="item[status][]" class="status" value="edit">

                                    </td>
                                    <td class="abc action" style="display: none">
                                       <div class="testtt" id="menu1" data-toggle="dropdown"></div>
                                        <ul class="dropdown-menu" role="menu" aria-labelledby="menu1" >
                                          <li role="presentation"><a role="menuitem" tabindex="-1" href="#" class="action-btn-edit">Edit</a></li>
                                          <li role="presentation"><a role="menuitem" tabindex="-1" href="#" class="action-btn-delete">Delete</a></li>
                                             
                                        </ul>
                                    </td>
                                    
                                  </tr>
     
                                <?php endif ?>   
                                    
                                
                                </tbody>
                            </table>
                            
                            <button type="button" class="btn btn-secondary btn-sm waves-effect waves-light savebtn clr action-btn-cancel"style="width: 10%; margin-left: 10px; <?= (isset($invoice))?'display:none':''; ?>">Cancel</button>
                            <button type="button" class="btn btn-secondary btn-sm waves-effect waves-light savebtn clr action-btn-save"style="width: 10%;margin-left: 10px;  <?= (isset($invoice))?'display:none':''; ?>">Save</button>
                            <button type="button" class="btn btn-secondary btn-sm waves-effect waves-light savebtn clr action-btn-add" style="width: 28%;  <?= (isset($invoice))?'':'display: none'; ?>">Add new Suppliers</button>
                            <input type="hidden" class="itemcode" value="<?php echo $data['part']; ?>">
                            <input type="hidden"  value="<?php echo $data['id']; ?>" class="eenquiry">
                            <input type="hidden" class="pproduct" value="<?= $part->id ?>">
                          </div>

                         
                          


                    </div>

                        

                      </div>
                    </div>
                    </div><br>
                    <?php $i++; }   ?>

                    <hr>
                  </a>
                </li>
                </a>
              </li>
            </ul>
          </div>

                
                  <div class="col-xl-12" style="padding: 20px;">
                    <div class="row">
                      <div class="col-md-4">
                        <p>
                          Warranty: <select id="ddlCreditCardType" name="warranty" class="form-control" style="width: 80%;float: right;height: 29px;background: #252735;">
                            <option value="6 Months" <?= (isset($invoice)&& $invoice->warranty=="6 Months")?'selected':''; ?>>6 Months</option>
                            <option value="12 Months" <?= (isset($invoice)&& $invoice->warranty=="12 Months")?'selected':''; ?>>12 Months</option>
                            <option value="24 Months" <?= (isset($invoice)&& $invoice->warranty=="24 Months")?'selected':''; ?>>24 Months</option>
                           
                          </select><br><br></p>
                          <div style="margin-top: -25px;">
                            <p> 
                              Note:<textarea type="text" name="note" class="form-control" style="width: 80%;float: right;height: 200px;background: #252735;" ><?= isset($invoice)?$invoice->note:'' ?> </textarea>
                            </p>
                          </div>
                        </div>
                        <div class="col-md-4">
                        </div>    
                        <div class="col-md-4">
                          <table class="table mb-0 teb">
                            <thead>
                              <tr>
                                <th style="background: none;border: #252735;"><h4>Total<input type="hidden" name="total-amount" value="<?= isset($invoice)?$invoice->total:'0.00' ?>"></h4></th>
                                <th style="background: none;border: #252735;"><h4><i fas fa-pound-sign></i><span class="total-amount"><?= isset($invoice)?$invoice->total:'0.00' ?></span></h4></th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <th>+VAT (%)<input type=""  class="form-control vat cal-persentage" value="<?= isset($invoice)?$invoice->vat:'0' ?>" name="vat" style="width: 20%;">
                                <input type="hidden" name="vat-amount" value="<?= isset($invoice)?$invoice->vat_amount:'0.00' ?>"> </th>
                                <td class="cal-vat"><?= isset($invoice)?$invoice->vat_amount:'0.00' ?></td>
                              </tr>
                              <tr>
                                <th>- Discount (%)<input type=""  class="form-control vat discount cal-persentage" value="<?= isset($invoice)?$invoice->discount:'0' ?>" name="discount" style="width: 20%;"> 
                                <input type="hidden" name="discount-amount" value="<?= isset($invoice)?$invoice->discount_amount:'0.00' ?>">  
                                </th>
                                <td class="cal-discount"><?= isset($invoice)?$invoice->discount_amount:'0.00' ?></td>
                              </tr>
                              <tr>
                                <th style="border-top: 1px solid #5d5e66 !important"><h4>NET Total</h4></th>
                                <td style="border-top: 1px solid #5d5e66 !important"><h4><i fas fa-pound-sign></i><input type="hidden" name="netTotal" value="<?= isset($invoice)?$invoice->net_total:'0.00' ?>"><span class="sum-total-amount"><?= isset($invoice)?$invoice->net_total:'0.00' ?></span></h4></td>
                              </tr>
                            </tbody>
                          </table>
                        </div> 
                      </div>
                      <div class="card" style="margin-top: 135px;padding:10px !important">
                        <div class="card-body">
                          <div class="row">
                           
                            <div class="col-xl-3 col-md-6 col-sm-6">
                            </div>
                            <div class="col-xl-3 col-md-6 col-sm-6">
                              <button type="submit" name="submit" class="btn btn-secondary btn-sm waves-effect waves-light savebtn clr">Save & Draft</button>
                            </div>
                            <div class="col-xl-3 col-md-6 col-sm-6">
                              <button type="button"  class="btn btn-secondary btn-sm waves-effect waves-light savebtn clr genrate_queotation" data-toggle="modal" data-target="#quotation_pdf">Generate Quotation</button>
                            </div>
                            <div class="col-xl-3 col-md-6 col-sm-6">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </form>
              <div class="modal fade bs-example-modal-center" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                    <div class="modal-header" style="padding: 0.5rem 1rem !important;    background: #323a4e;">
                      <h5>Add New Enquiry</h5>
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
                            <select id="ddlCreditCardType" name="ddlCreditCardType" class="form-control">
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
                            <select id="ddlCreditCardType" name="ddlCreditCardType" class="form-control">
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
                            <select id="ddlCreditCardType" name="ddlCreditCardType" class="form-control">
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
                            <select id="ddlCreditCardType" name="ddlCreditCardType" class="form-control">
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

<!-- pdf genrater -->
<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="quotation_pdf">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0" id="myLargeModalLabel">GENERATE QUOTATION</h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
            </div>
        </div><!-- /.modal-content -->
    </div>
</div> <!-- /.modal-dialog -->



<style type="text/css">
    .cards {
        border: none;
        -webkit-box-shadow: 0px 0px 13px 0px rgba(36, 36, 41, 0.44);
        box-shadow: 0px 0px 13px 0px rgba(36, 36, 41, 0.44);
        background: #393e46;
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
    color: #212529;
}
    .nav-justified .nav-item{
        padding: 5px;
    }
   
    .table thead tr th {
        background: #222831;
        color: #fff;
        border-bottom: 1px solid #000;
    }
    tbody tr th:hover {
        color: #fff;
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
    background: #222831;
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
background: #222831;
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
background: #222831;
}
.form-control {
font-size: 14px;
color: #ffffff !important;
background: #222831 !important;
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
color: #fff !important;
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

<script type="text/javascript">
  jQuery(document).ready(function($) {
    $('body').on('click', 'button[type="submit"]', function(event) {
      //Reset amount before submit
      $('body').find('#inovice-form').removeAttr('id');
      var total=$('body').find('.total-price');
      var totalsum=0;
      total.each(function(index, el) {
      if($(this).val()){

      var card=$(this).closest('.card').prev('.card');
      var prod_quantity=card.find('.product-quantity');
      var wholebox=$(this).closest('.whole-box');
      var pro_q=wholebox.find('.total_qty');
      var TprodQuentity=0;
      pro_q.each(function(index) {
      var rrow=$(this).closest('tr');
      var check=rrow.find('.status[value="save"]');
      console.log(check);
      if(check.length>0){  
      if($(this).val())  
      TprodQuentity=parseInt(TprodQuentity)+parseInt($(this).val());
      }  
      });
      prod_quantity.val(TprodQuentity);

      var supllier =wholebox.find('.status[value="save"]').length
      card.find('.total-supplier').val(supllier); 
      var row=$(this).closest('tr');
      if(row.find('.status').val()=='save'){  
      totalsum=parseFloat(totalsum) + parseFloat($(this).val());
      }  
      }
      });
      $('body').find('.total-amount').text(parseFloat(totalsum).toFixed(2));
      $('body').find('input[name="total-amount"]').val(parseFloat(totalsum).toFixed(2));
      
      //Total Vat Persentage 
      var vattotal=0;
      var vat=$('body').find('.vat').val();
      if(vat){
      vattotal=parseFloat(totalsum)/100*parseFloat(vat);
      $('body').find('.cal-vat').text(parseFloat(vattotal).toFixed(2));
      $('body').find('input[name="vat-amount"]').val(parseFloat(vattotal).toFixed(2));
      }

      // total discount persentage
      var discountAmount=0;
      var discount=$('body').find('.discount').val();
      if(discount){
      discountAmount=parseFloat(totalsum)/100*parseFloat(discount);
      $('body').find('.cal-discount').text(parseFloat(discountAmount).toFixed(2));
      $('body').find('input[name="discount-amount"]').val(parseFloat(discountAmount).toFixed(2));
      }

      //Net Price Calculation
      totalsum=parseFloat(totalsum)-parseFloat(discountAmount)+parseFloat(vattotal);
      $('body').find('.sum-total-amount').text(parseFloat(totalsum).toFixed(2));
      $('body').find('input[name="netTotal"]').val(parseFloat(totalsum).toFixed(2));
      
    });
    $('body').on('click', '.genrate_queotation', function(event) {
      event.preventDefault();
     //Reset amount before submit 
      var total=$('body').find('.total-price');
      var totalsum=0;
      total.each(function(index, el) {
      if($(this).val()){

      var card=$(this).closest('.card').prev('.card');
      var prod_quantity=card.find('.product-quantity');
      var wholebox=$(this).closest('.whole-box');
      var pro_q=wholebox.find('.total_qty');
      var TprodQuentity=0;
      pro_q.each(function(index) {
      var rrow=$(this).closest('tr');
      var check=rrow.find('.status[value="save"]');
      if(check.length>0){  
      if($(this).val())  
      TprodQuentity=parseInt(TprodQuentity)+parseInt($(this).val());
      }  
    });
      prod_quantity.val(TprodQuentity);

      var supllier =wholebox.find('.status[value="save"]').length
      card.find('.total-supplier').val(supllier); 
      var row=$(this).closest('tr');
      if(row.find('.status').val()=='save'){  
      totalsum=parseFloat(totalsum) + parseFloat($(this).val());
      }  
      }
      });
      $('body').find('.total-amount').text(parseFloat(totalsum).toFixed(2));
      $('body').find('input[name="total-amount"]').val(parseFloat(totalsum).toFixed(2));
      
      //Total Vat Persentage 
      var vattotal=0;
      var vat=$('body').find('.vat').val();
      if(vat){
      vattotal=parseFloat(totalsum)/100*parseFloat(vat);
      $('body').find('.cal-vat').text(parseFloat(vattotal).toFixed(2));
      $('body').find('input[name="vat-amount"]').val(parseFloat(vattotal).toFixed(2));
      }

      // total discount persentage
      var discountAmount=0;
      var discount=$('body').find('.discount').val();
      if(discount){
      discountAmount=parseFloat(totalsum)/100*parseFloat(discount);
      $('body').find('.cal-discount').text(parseFloat(discountAmount).toFixed(2));
      $('body').find('input[name="discount-amount"]').val(parseFloat(discountAmount).toFixed(2));
      }

      //Net Price Calculation
      totalsum=parseFloat(totalsum)-parseFloat(discountAmount)+parseFloat(vattotal);
      $('body').find('.sum-total-amount').text(parseFloat(totalsum).toFixed(2));
      $('body').find('input[name="netTotal"]').val(parseFloat(totalsum).toFixed(2));
       
     $('#inovice-form').submit(); 
    });
    $('#inovice-form').submit(function(event) {
      var form=new FormData(this);
      $('body').find('.html-model').html('');
      $.ajaxSetup({
          headers: {
            '<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>'
          }
        });
      $.ajax({
        url: '<?= base_url() ?>admin/Order/ajaxStore',
        type: 'POST',
        dataType: 'html',
        data: form,
        processData: false, 
        contentType: false,
      })
      .done(function(response) {
      $('#quotation_pdf').find('.modal-body').html(response); 
      });
    });
    $('body').on('click', '.action-btn-add', function(event) {
      event.preventDefault();
      $(this).hide();
      var wholebox=$(this).closest('.whole-box');
      var itemcode=wholebox.find('.itemcode').val();
      var prodid=wholebox.find('.pproduct').val();
      var enquiry=wholebox.find('.eenquiry').val();
      $.ajax({
        url: '<?= base_url() ?>admin/Order/addSupplier',
        type: 'POST',
        dataType: 'html',
        data: { 'itemcode': itemcode, 'enquiry':enquiry ,'prodid':prodid,'<?php echo $this->security->get_csrf_token_name(); ?>':'<?php echo $this->security->get_csrf_hash(); ?>'},
      })
      .done(function(response) {
      wholebox.find('tbody').append(response);
      wholebox.find('.action-btn-cancel').show();
      wholebox.find('.action-btn-save').show();

      });
    });
    $('body').on('change', '.select-supplier', function(event) {
      event.preventDefault();
      $this=$(this);
      var row=$this.closest('tr');
      var productcode=row.find('.product-code')
      var total_qty=row.find('.total_qty')
      var delivery=row.find('.delivery')
      var price=row.find('.price')
      $.ajax({
        url: '<?= base_url() ?>admin/Order/getSupplier',
        type: 'POST',
        dataType: 'json',
        data: { 'supplier': $(this).val(),'<?php echo $this->security->get_csrf_token_name(); ?>':'<?php echo $this->security->get_csrf_hash(); ?>'},
      })
      .done(function(response) {  
      $.each(response,function(index, el) {
      productcode.val(el.part_number);  
      total_qty.val(el.total_qty);  
      delivery.val(el.lead_time); 
      price.val(el.web_price); 
      });  
      });
    });
    $('body').on('keyup', '.calculat_tatal', function(event) {
      event.preventDefault();
      $this=$(this);
      var card=$(this).closest('.card').prev('.card');
      var prod_quantity=card.find('.product-quantity');
      var wholebox=$(this).closest('.whole-box');
      var pro_q=wholebox.find('.total_qty');
      var TprodQuentity=0;
      pro_q.each(function(index) {
      if($(this).val())  
      TprodQuentity=parseInt(TprodQuentity)+parseInt($(this).val());  
      });
      prod_quantity.val(TprodQuentity);
      var row=$this.closest('tr');
      var total_qty=row.find('.total_qty').val();
      var price=row.find('.price').val();
      var deliveryfee=row.find('.delivery-fee').val();
      var sellingprice=row.find('.selling-price').val();
      var totalprice=row.find('.total-price');
      var total=0;
      //var total=total_qty*price;
      if(sellingprice)
      total= parseFloat(total_qty) * parseFloat(sellingprice);
      console.log(total);
      if(deliveryfee)
      total=parseFloat(total) + parseFloat(deliveryfee);
      totalprice.val(parseFloat(total).toFixed(2));
      var totalitem=$('body').find('.total-price');
      var totalsum=0;
      totalitem.each(function(index) {
      if($(this).val())  
      totalsum=parseFloat(totalsum)+parseFloat($(this).val());  
      });
      $('body').find('.total-amount').text(parseFloat(totalsum).toFixed(2));
      $('body').find('input[name="total-amount"]').val(parseFloat(totalsum).toFixed(2));
      var vattotal=0;
      var vat=$('body').find('.vat').val();
      if(vat){
      vattotal=parseFloat(totalsum)/100*parseFloat(vat);
      $('body').find('.cal-vat').text(parseFloat(vattotal).toFixed(2));
      $('body').find('input[name="vat-amount"]').val(parseFloat(vattotal).toFixed(2));
      }
      var discountAmount=0;
      var discount=$('body').find('.discount').val();
      if(discount){
      discountAmount=parseFloat(totalsum)/100*parseFloat(discount);
      $('body').find('.cal-discount').text(parseFloat(discountAmount).toFixed(2));
      $('body').find('input[name="discount-amount"]').val(parseFloat(discountAmount).toFixed(2));
      }
      totalsum=parseFloat(totalsum)-parseFloat(discountAmount)+parseFloat(vattotal);
      $('body').find('.sum-total-amount').text(parseFloat(totalsum).toFixed(2));
      $('body').find('input[name="netTotal"]').val(parseFloat(totalsum).toFixed(2));
      
    });
    $('body').on('click', '.action-btn-edit', function(event) {
      event.preventDefault();
      var row=$(this).closest('tr');
      var productcode=row.find('.product-code');
      productcode.show();
      productcode.closest('td').find('span').hide();
      var supplier=row.find('.select-supplier');
      supplier.show();
      supplier.closest('td').find('span').hide();
      var total_qty=row.find('.total_qty');
      total_qty.closest('td').find('span').hide();
      total_qty.show();
      var delivery=row.find('.delivery');
      delivery.closest('td').find('span').hide();
      delivery.show();
      var price=row.find('.price');
      price.closest('td').find('span').hide();
      price.show();
      var deliveryfee=row.find('.delivery-fee');
      deliveryfee.closest('td').find('span').hide();
      deliveryfee.show();
      var sellingprice=row.find('.selling-price');
      sellingprice.closest('td').find('span').hide();
      sellingprice.show();
      var totalprice=row.find('.total-price');
      totalprice.closest('td').find('span').hide();
      totalprice.show();
      var status=row.find('.status');
      status.val('edit');
      $(this).text('Update');
      $(this).removeClass('action-btn-edit');
      $(this).addClass('action-btn-update');
    });
    $('body').on('click', '.action-btn-delete', function(event) {
      event.preventDefault();
      /* Act on the event deleteItem*/
      var row=$(this).closest('tr');
      var card=$(this).closest('.card').prev('.card');
      var wholebox=$(this).closest('.whole-box');
      var itemid=row.find('.itemid').val();
      row.remove();

      //calculate total supplier                             
      var total_supplier=card.find('.total-supplier');
      var totalrow=wholebox.find('.status[value="save"]').length;
      total_supplier.val(totalrow);
      
      //calculate total quentity
      var prod_quantity=card.find('.product-quantity');
      var pro_q=wholebox.find('.total_qty');
      var TprodQuentity=0;
      pro_q.each(function(index) {
      if($(this).val())  
      TprodQuentity=parseInt(TprodQuentity)+parseInt($(this).val());  
      });
      prod_quantity.val(TprodQuentity);
       
      //calculate total amount 
      var total=$('body').find('.total-price');
      var totalsum=0;
      total.each(function(index, el) {
      if($(this).val())  
      totalsum=parseFloat(totalsum) + parseFloat($(this).val());  
      });
      $('body').find('.total-amount').text(parseFloat(totalsum).toFixed(2));
      $('body').find('input[name="total-amount"]').val(parseFloat(totalsum).toFixed(2));
      
      //Total Vat Persentage 
      var vattotal=0;
      var vat=$('body').find('.vat').val();
      if(vat){
      vattotal=parseFloat(totalsum)/100*parseFloat(vat);
      $('body').find('.cal-vat').text(parseFloat(vattotal).toFixed(2));
      $('body').find('input[name="vat-amount"]').val(parseFloat(vattotal).toFixed(2));
      }

      // total discount persentage
      var discountAmount=0;
      var discount=$('body').find('.discount').val();
      if(discount){
      discountAmount=parseFloat(totalsum)/100*parseFloat(discount);
      $('body').find('.cal-discount').text(parseFloat(discountAmount).toFixed(2));
      $('body').find('input[name="discount-amount"]').val(parseFloat(discountAmount).toFixed(2));
      }

      //Net Price Calculation
      totalsum=parseFloat(totalsum)-parseFloat(discountAmount)+parseFloat(vattotal);
      $('body').find('.sum-total-amount').text(parseFloat(totalsum).toFixed(2));
      $('body').find('input[name="netTotal"]').val(parseFloat(totalsum).toFixed(2));
      

      var data={
          'itemid':itemid,
          '<?php echo $this->security->get_csrf_token_name(); ?>':'<?php echo $this->security->get_csrf_hash(); ?>',
      };
      $.ajax({
        url: '<?= base_url() ?>admin/order/deleteItem',
        type: 'POST',
        dataType: 'json',
        data: data,
      })
      .done(function(response) {
        console.log(response.message);
        if(response.itemid)
        itemMain.val(response.itemid);  
      });
    });
    $('body').on('click', '.action-btn-update', function(event) {
      event.preventDefault();
      var card=$(this).closest('.card').prev('.card');
      var total_supplier=card.find('.total-supplier');
      var wholebox=$(this).closest('.whole-box');
      var totalrow=wholebox.find('.status[value="save"]').length;
      total_supplier.val(totalrow);
      var row=$(this).closest('tr');
      var productcode=row.find('.product-code');
      row.find('span').show();
      productcode.closest('td').find('span').text(productcode.val());
      productcode.hide();
      var supplier=row.find('.select-supplier');
      supplier.closest('td').find('span').text(supplier.find('option:selected').text());
      supplier.hide();
      var total_qty=row.find('.total_qty');
      total_qty.closest('td').find('span').text(total_qty.val());
      total_qty.hide();
      var delivery=row.find('.delivery');
      delivery.closest('td').find('span').text(delivery.val());
      delivery.hide();
      var price=row.find('.price');
      price.closest('td').find('span').text(price.val());
      price.hide();
      var deliveryfee=row.find('.delivery-fee');
      deliveryfee.closest('td').find('span').text(deliveryfee.val());
      deliveryfee.hide();
      var sellingprice=row.find('.selling-price');
      sellingprice.closest('td').find('span').text(sellingprice.val());
      sellingprice.hide();
      var totalprice=row.find('.total-price');
      totalprice.closest('td').find('span').text(totalprice.val());
      totalprice.hide();
      var status=row.find('.status');
      status.val('save');
      var itemid=row.find('.itemid').val();
      $(this).text('Edit');
      $(this).addClass('action-btn-edit');
      $(this).removeClass('action-btn-update');
      var itemMain=row.find('.itemid');
      var enquiry=wholebox.find('.enquiry');
      var product=wholebox.find('.product');                             
      var orderid=$('body').find('input[name="orderno"]').val();
      var data={
          'itemid':itemid,
          'order_id':orderid,
          'enquery_id':enquiry.val(),
          'suplierid':supplier.val(),
          'prod_id':product.val(),
          'prod_code':productcode.val(),
          'quentity':total_qty.val(),
          'price_unite':price.val(),
          'delivery_time':delivery.val(),
          'sellingprice':sellingprice.val(),
          'delivery_cost':deliveryfee.val(),
          'total_price':totalprice.val(),
          '<?php echo $this->security->get_csrf_token_name(); ?>':'<?php echo $this->security->get_csrf_hash(); ?>',
      };
      console.log(data);
      $.ajax({
        url: '<?= base_url() ?>admin/order/itemStore',
        type: 'POST',
        dataType: 'json',
        data: data,
      })
      .done(function(response) {
        console.log(response.message);
        if(response.itemid)
        itemMain.val(response.itemid);  
      });
    });
    $('body').on('click', '.action-btn-save', function(event) {
      event.preventDefault();
      $this=$(this);
      var card=$(this).closest('.card').prev('.card');
      var total_supplier=card.find('.total-supplier');
      var wholebox=$this.closest('.whole-box');
      var totalrow=wholebox.find('.status[value="save"]').length;
      total_supplier.val(totalrow+1);
      var row=wholebox.find('.last');
      row.removeClass('last');
      var productcode=row.find('.product-code');
      productcode.closest('td').find('span').text(productcode.val());
      productcode.hide();
      var supplier=row.find('.select-supplier');
      supplier.closest('td').find('span').text(supplier.find('option:selected').text());
      supplier.hide();
      var total_qty=row.find('.total_qty');
      total_qty.closest('td').find('span').text(total_qty.val());
      total_qty.hide();
      var delivery=row.find('.delivery');
      delivery.closest('td').find('span').text(delivery.val());
      delivery.hide();
      var price=row.find('.price');
      price.closest('td').find('span').text(price.val());
      price.hide();
      var deliveryfee=row.find('.delivery-fee');
      deliveryfee.closest('td').find('span').text(deliveryfee.val());
      deliveryfee.hide();
      var sellingprice=row.find('.selling-price');
      sellingprice.closest('td').find('span').text(sellingprice.val());
      sellingprice.hide();
      var totalprice=row.find('.total-price');
      totalprice.closest('td').find('span').text(totalprice.val());
      totalprice.hide();
      var status=row.find('.status');
      status.val('save');
      row.find('.action').show();
      $(this).hide();
      wholebox.find('.action-btn-cancel').hide();
      wholebox.find('.action-btn-add').show();
      var itemMain=row.find('.itemid');
      var enquiry=wholebox.find('.enquiry');
      var product=wholebox.find('.product');                             
      var orderid=$('body').find('input[name="orderno"]').val();
      var data={
          'order_id':orderid,
          'enquery_id':enquiry.val(),
          'suplierid':supplier.val(),
          'prod_id':product.val(),
          'prod_code':productcode.val(),
          'quentity':total_qty.val(),
          'price_unite':price.val(),
          'delivery_time':delivery.val(),
          'sellingprice':sellingprice.val(),
          'delivery_cost':deliveryfee.val(),
          'total_price':totalprice.val(),
          '<?php echo $this->security->get_csrf_token_name(); ?>':'<?php echo $this->security->get_csrf_hash(); ?>'
      };
      $.ajax({
        url: '<?= base_url() ?>admin/order/itemStore',
        type: 'POST',
        dataType: 'json',
        data: data,
      })
      .done(function(response) {
        console.log(response.message);
        if(response.itemid)
        itemMain.val(response.itemid);  
      });
    });
    $('body').on('keyup', '.cal-persentage', function(event) {
      event.preventDefault();
      var totalitem=$('body').find('.total-price');
      var totalsum=0;
      totalitem.each(function(index) {
      if($(this).val())  
      totalsum=parseFloat(totalsum)+parseFloat($(this).val());  
      });
      $('body').find('.total-amount').text(parseFloat(totalsum).toFixed(2));
      
      $('body').find('input[name="total-amount"]').val(parseFloat(totalsum).toFixed(2));
      var vat=$('body').find('.vat').val();
      var totalvat=0;
      if(vat){
      totalvat=parseFloat(totalsum)/100*parseFloat(vat);
      $('body').find('.cal-vat').text(parseFloat(totalvat).toFixed(2));
     $('body').find('input[name="vat-amount"]').val(parseFloat(totalvat).toFixed(2));
      }
      var discount=$('body').find('.discount').val();
      var totaldiscount=0;
      if(discount){
      totaldiscount=parseFloat(totalsum)/100*parseFloat(discount);
      $('body').find('.cal-discount').text(parseFloat(totaldiscount).toFixed(2));
      $('body').find('input[name="discount-amount"]').val(parseFloat(totaldiscount).toFixed(2));
      }
      totalsum=parseFloat(totalsum)-parseFloat(totaldiscount)+parseFloat(totalvat);
      $('body').find('.sum-total-amount').text(parseFloat(totalsum).toFixed(2));
      $('body').find('input[name="netTotal"]').val(parseFloat(totalsum).toFixed(2));
    });
  });
</script>



