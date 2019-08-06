<div class="modal-body" style="background-color: #fff !important;color: #000;">
    <div class="row">
        <div class="col-md-6">
            <h3>Grienert and Glatt Order</h3>
        </div>
        <div class="col-md-6 text-right">

            <h6>Date : 02-Apr-2019 <?= date('d-M-Y',strtotime($inovice->created_on)) ?></h6>
        </div>
    </div>
    <div class="cards">
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
                <li>
                    <select id="only_order" name="ddlCreditCardType" class="form-control  adv-common-filter">
                        <option value="">Only Show</option>
                        <option value="" >Sales Employees</option>
                        <option value="" >Sales Employees</option>
                    </select>
                </li>
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-12 col-md-12 col-sm-12">
            <div class="card">
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
                    <?php $order =$this->common_model->getInvoiceOrderDetail($inovice->id) ?>
                    <?php foreach ($order as $key => $value): ?>
                      
                    <tr>
                        <td>
                            <?= $value['quentity'] ?>
                        </td>
                        <?php 
                        $product=$this->common_model->get_single_product_info($value['prod_id']);   
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
                                <td style="border-top: 1px solid #5d5e66 !important"><h4><?= $inovice->net_total ?></h4></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>  
        </div>     
    </div>          
    <div class="row">
        <div class="col-md-12">
            <div class="row" style="margin-top: 50px;background: #1c1f23;padding: 15px;">
                <div class="col-md-3"></div>
                <div class="col-md-2">
                    <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" />
                    <button type="button" data-dismiss="modal" class="btn btn-secondary btn-sm  savebtn clr" >Cancel</button>
                </div>
                <div class="col-md-2">
                    <button type="submit" name="submit" class="btn btn-secondary btn-sm  savebtn clr download-pdf" >Download Pdf</button>
                </div>
                <div class="col-md-2"> <button type="submit" name="submit" class="btn btn-secondary btn-sm  savebtn clr send-mail" >Send Quote</button></div>
                <div class="col-md-3"></div>
            </div>
        </div>
    </div>
</div>
<form  action="<?= base_url('admin/order/pdf') ?>" method="POST" id="pdf-form">
<input type="hidden" name="invoice_id" value="<?= $inovice->id ?>">
<input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" />     
</form>
<form  action="<?= base_url('admin/order/sendMail') ?>" method="POST" id="send-form">
<input type="hidden" name="invoice_id" value="<?= $inovice->id ?>">
<input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" />     
</form>
<script type="text/javascript">
    jQuery(document).ready(function($) {
    $('body').on('click', '.download-pdf', function(event) {
        event.preventDefault();
       $('body').find('#pdf-form').submit();
    });
    $('body').on('click', '.send-mail', function(event) {
        event.preventDefault();
       $('body').find('#send-form').submit();
    });    
    });

</script>            