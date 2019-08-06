<?php include_once('sidebar.php') ?>

<style type="text/css">
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
.form-control {
    font-size: 14px;
    color: #dee2e6 !important;
    background: #36394c;
    border-color: rgba(255, 255, 255, 0.07);
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
    margin-left: 148px;
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
.dropdown-menu.show {
    display: block;
    position: absolute;
    will-change: transform;
    top: -23px !important;
    padding: 10px !important;
    left: 52px !important;
    transform: translate3d(0px, 0px, 0px);
}



.table thead tr th {
    background: #2c2e3e;
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
    background: #252735;
}

</style>

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
                	<div class="col-md-7"></div>
                     <div class="col-xl-5 col-md-5">
                            <div class="card mini-stat bg-primary text-white">
                                <div class="card-body">
                                    <div class="mb-4 mb">
                                         <h3>$50,010 Total GP</h3>
                                        <p>Total buy Parts: $23,654.87 <br>
                                        Total Buy Shipping and extras: $1,2652 (Total Buy $24,944.99)<br>
                                        Total Sales Parts: $114,300<br>
                                        Total Sales Extras: $7265 (Sales Total $123,565)<br> </p>
                                        <h3>@ 50% Average Margin</h3>
                                    </div>
                                </div>
                            </div>
                        </div>      
                </div>
            <!-- end row -->


            <!--Top Discription -->

              <div class="card" style="padding: 0px;">
                            <div class="card-body">
                                <div class="row">
                                    
                                        <div class="col-md-5">
                                            <div class="row">
                                                <div class="col-md-5" style="border-right: 1px solid black;">
                                                    <div class="row">
                                                        <div class="col-md-2">
                                                            <i class="ion ion-md-globe" style="font-size: 20px;padding: 5px;background: #2a3142;margin: 2px;"></i>
                                                        </div>  
                                                        <div class="col-md-10" style="margin-top: 40px;">
                                                            <div class="first">

                                                        
                                                           <img src="assets/images/cocacola.png" style="width: 100%;">
                                                        
                                                    </div>
                                                        </div>
                                                    
                                                    </div>
                                                </div>
                                                <div class="col-md-7" style="border-right: 1px solid black;">
                                                    <div class="col-md-12" style="margin-top: 10px;">
                                                    <p>
                                                        PO: 46356/356/665 <br><br></p>
                                                    <div style="margin-top: -25px;">
                                                    <p> 
                                                        Deliver to: 1645 American Road<br>
                                                        Chicago, IL, 60011, United States 
                                                    </p>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="row" style="padding: 5px;">
                                                <div class="col-md-4" style="border-right: 1px solid black;">
                                                    <p>Amanda, John<br>
                                                        Maintenance Manager<br>
                                                        Amnada.john@cocacola.com<br>
                                                        DD: 330 0874 084
                                                    </p>
                                                </div>
                                                <div class="col-md-4" style="border-right: 1px solid black;">
                                                    <p>Amanda, John<br>
                                                        Maintenance Manager<br>
                                                        Amnada.john@cocacola.com<br>
                                                        DD: 330 0874 084
                                                    </p>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="col-md-12" style="padding: 5px;">
                                                        <button type="button" class="btnside btn-secondary waves-effect waves-light btnenq">Save Draft</button>

                                          <br>

                                          <button type="button" class="btnside btn-secondary waves-effect waves-light btnenq" data-toggle="modal" data-target=".bs-example-modal-center">Enquiry Active/Order</button>

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
                                    <li class="nav-item waves-effect waves-light">
                                        <a class="nav-link" data-toggle="tab" href="#home-1" role="tab">
                                            <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                            <span class="d-none d-sm-block">
                                            Pricing & Sourcing Info</span> 
                                        </a>
                                    </li>
                                    <li class="nav-item waves-effect waves-light">
                                        <a class="nav-link " data-toggle="tab" href="#profile-1" role="tab">
                                            <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                            <span class="d-none d-sm-block">Order & History</span> 
                                        </a>
                                    </li>
                                    <li class="nav-item waves-effect waves-light">
                                        <a class="nav-link " data-toggle="tab" href="#profile-1" role="tab">
                                            <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                            <span class="d-none d-sm-block">Notes & Activity</span> 
                                        </a>
                                    </li>
                                    <li class="nav-item waves-effect waves-light">
                                        <a class="nav-link" data-toggle="tab" href="#messages-1" role="tab" style="background: #626ed4;">
                                            <span class="d-block d-sm-none"><i class="far fa-envelope"></i></span>
                                            <span class="d-none d-sm-block">Customers Summery</span>   
                                        </a>
                                    </li>
                                    <li class="nav-item waves-effect waves-light">
                                        <a class="nav-link active" data-toggle="tab" href="#settings-1" role="tab" style="background: #8BC34A;">
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
           	<h7 class="heading"> Enquiry Ref. no.: #9847589</h7>
           	&nbsp;&nbsp;&nbsp;<h3>  |</h3>&nbsp;&nbsp;&nbsp;

                 <button type="button" class=" btnenq btnside1 btn btn-secondary waves-effect waves-light"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Add new Product</button>
                 &nbsp;&nbsp;&nbsp;<h3>  |</h3>&nbsp;&nbsp;&nbsp;
                  <button type="button" class=" btnenq btnside1 btn btn-secondary waves-effect waves-light"><i class="fa fa-ship"></i> Search product</button>

           
           </div>
           </div>
         
       
  
           <hr><br>
           <!-- row end-->
            
                <div class="card" style="margin-bottom: 0px;">
                <div class="card-body">
                	<div class="row" style="margin: -8px;padding: 0px;">
                			
                			<div class="col-md-3" style="margin-top: 10px;border-right: 1px solid #252735;">
                                <div class="oon">
                            <h6>01</h6>
                            </div>
                                
                            <p style="margin-left: 30px;">
                                Manufacture: <select id="ddlCreditCardType" name="ddlCreditCardType" class="form-control" style="width: 60%;float: right;height: 29px;">
                                <option value="">Simens</option>
                                <option value="AE">ABC</option>
                                <option value="VI">ABC</option>
                                <option value="MC">ABC</option>
                                <option value="DI">ABC</option>
                            </select><br><br></p>
                            <div style="margin-top: -25px;margin-left: 30px;">
                            <p> 
                                Modal No.:<input type="" name="" class="form-control" style="width: 60%;float: right;height: 29px;" value="12345678"> 
                            </p>
                            </div>
                              
                                        
                			</div>
                			<div class="col-md-3" style="margin-top: 10px;border-right: 1px solid #252735;">
                				<div class="form-group">
                					Product Name :<input type="text" class="form-control" placeholder="SIMODRIVE611 POWER MODULE" / style="height: 29px;margin-top: 17px;">
                				</div>
                			</div>
                            <div class="col-md-3" style="margin-top: 10px;">
                              
                            <p> 
                                Product Quantity:<input type="" name="" class="form-control" style="width: 50%;float: right;height: 29px;" value="12345678"> 
                            </p>
                         
                                
                           
                            <div>
                            <p> 
                                Total Supplier:<input type="" name="" class="form-control" style="width: 50%;float: right;height: 29px;" value="12345678"> 
                            </p>
                            </div>
                              
                                        
                            </div>
                			
                             <div class="col-md-1" style="margin-top: 0px;border-right: 1px solid #252735;background: #262f44;padding: 10px;font-size: 12px;">
                             
                                   <p>CC :885h343</p>
                               <p><h7>COR :<img src="assets/images/flags/french_flag.jpg" style="border-radius: 46%;width: 25px;float: right;margin-top: 0px;"></h7></p>

                               

                              </div>

                                 <div class="col-md-2" style="margin-top: 0px;background: #262f44;padding: 10px;">
                                    <p>Product Condition : <div class="test" id="menu1" data-toggle="dropdown"></div>
                                    <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                                      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Edit</a></li>
                                      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Copy</a></li>
                                      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Hide</a></li>
                                      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Delete</a></li>
                                         
                                    </ul></p> 
                                 <select id="ddlCreditCardType" name="ddlCreditCardType" class="form-control" style="background: #262f44;">
                                    <option value="">Used</option>
                                    <option value="AE">ABC</option>
                                    <option value="VI">ABC</option>
                                    <option value="MC">ABC</option>
                                    <option value="DI">ABC</option>
                               </select>

                                 </div>   
                              
                               
                           
                			
                			
                				
                			
                                
                			</div> 
                		</div>
                    </div>
                

                  <div class="card" style="padding: 0px;background: #2c2e3e;margin-bottom: 0px;">
                <div class="card-body">
                    <div class="row" style="margin: 0px;padding: 0px;">
                 	<div class="col-md-2 p-0">
                 		<img src="assets/images/1.jpg" style="width: 100%;">
                 	</div>
                 	<div class="col-md-2" style="border-right: 1px solid #273044;">
                 		<p>Discription
                 			<hr>
                 		discription about product
                 	discription about product
                 	discription about product<br>
                   L 34cm/W 20cm/H 38cm W(kg)5.8</p>
                 	</div>

                 	<div class="col-md-8">
                    
                 		<div class="table-responsive">
                            <table class=" table table-bordered mb-0" style="font-size: 10px;">
                                <thead>
                                    <tr>
                                        <th>Supplier</th>
                                        <th>Product Code</th>
                                        <th>Quantity</th>
                                        <th>Price</th>
                                        <th>Delivery</th>
                                        <th>Delivery Free</th>
                                        <th>Selling Price</th>
                                        <th>Total Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th  scope="row">Grienert and Glatt</th>
                                        <td>456457</td>
                                        <td>12</td>
                                        <td>$4554</td>
                                        <td>in 3 days</td>
                                        <td>$45545</td>
                                        <td>$7866</td>
                                        <td>$87</td>
                                    </tr>
                                </tbody>
                            </table>

                            <div class="testt" id="menu1" data-toggle="dropdown"></div>
                                    <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                                      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Edit</a></li>
                                      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Copy</a></li>
                                      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Hide</a></li>
                                      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Delete</a></li>
                                         
                                    </ul>
                                  
                        </div>



                       <button type="button" class="btnside btn-secondary waves-effect waves-light btnenq" data-toggle="modal" data-target=".bs-example-modal-center" style="width: 28%;">Add new Suppliers</button>
                   



               
                 	</div>
                 	
                 </div>

             </div>
         </div>



          <div class="card" style="margin-bottom: 0px;margin-top: 20px;">
                <div class="card-body">
                    <div class="row" style="margin: -8px;padding: 0px;">
                            
                            <div class="col-md-3" style="margin-top: 10px;border-right: 1px solid #252735;">
                                <div class="oon">
                            <h6>01</h6>
                            </div>
                                
                            <p style="margin-left: 30px;">
                                Manufacture: <select id="ddlCreditCardType" name="ddlCreditCardType" class="form-control" style="width: 60%;float: right;height: 29px;">
                                <option value="">Simens</option>
                                <option value="AE">ABC</option>
                                <option value="VI">ABC</option>
                                <option value="MC">ABC</option>
                                <option value="DI">ABC</option>
                            </select><br><br></p>
                            <div style="margin-top: -25px;margin-left: 30px;">
                            <p> 
                                Modal No.:<input type="" name="" class="form-control" style="width: 60%;float: right;height: 29px;" value="12345678"> 
                            </p>
                            </div>
                              
                                        
                            </div>
                            <div class="col-md-3" style="margin-top: 10px;border-right: 1px solid #252735;">
                                <div class="form-group">
                                    Product Name :<input type="text" class="form-control" placeholder="SIMODRIVE611 POWER MODULE" / style="height: 29px;margin-top: 17px;">
                                </div>
                            </div>
                            <div class="col-md-3" style="margin-top: 10px;">
                              
                            <p> 
                                Product Quantity:<input type="" name="" class="form-control" style="width: 50%;float: right;height: 29px;" value="12345678"> 
                            </p>
                         
                                
                           
                            <div>
                            <p> 
                                Total Supplier:<input type="" name="" class="form-control" style="width: 50%;float: right;height: 29px;" value="12345678"> 
                            </p>
                            </div>
                              
                                        
                            </div>
                            
                             <div class="col-md-1" style="margin-top: 0px;border-right: 1px solid #252735;background: #262f44;padding: 10px;font-size: 12px;">
                             
                                   <p>CC :885h343</p>
                               <p><h7>COR :<img src="assets/images/flags/french_flag.jpg" style="border-radius: 46%;width: 25px;float: right;margin-top: 0px;"></h7></p>

                               

                              </div>

                                 <div class="col-md-2" style="margin-top: 0px;background: #262f44;padding: 10px;">
                                    <p>Product Condition : <div class="test" id="menu1" data-toggle="dropdown"></div>
                                    <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                                      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Edit</a></li>
                                      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Copy</a></li>
                                      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Hide</a></li>
                                      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Delete</a></li>
                                         
                                    </ul></p> 
                                 <select id="ddlCreditCardType" name="ddlCreditCardType" class="form-control" style="background: #262f44;">
                                    <option value="">Used</option>
                                    <option value="AE">ABC</option>
                                    <option value="VI">ABC</option>
                                    <option value="MC">ABC</option>
                                    <option value="DI">ABC</option>
                               </select>

                                 </div>   
                              
                               
                           
                            
                            
                                
                            
                                
                            </div> 
                        </div>
                    </div>
                

                  <div class="card" style="padding: 0px;background: #2c2e3e;margin-bottom: 10px;">
                <div class="card-body">
                    <div class="row" style="margin: 0px;padding: 0px;">
                    <div class="col-md-2 p-0">
                        <img src="assets/images/1.jpg" style="width: 100%;">
                    </div>
                    <div class="col-md-2" style="border-right: 1px solid #273044;">
                        <p>Discription
                            <hr>
                        discription about product
                    discription about product
                    discription about product<br>
                   L 34cm/W 20cm/H 38cm W(kg)5.8</p>
                    </div>

                    <div class="col-md-8">
                    
                        <div class="table-responsive">
                            <table class=" table table-bordered mb-0" style="font-size: 10px;">
                                <thead>
                                    <tr>
                                        <th>Supplier</th>
                                        <th>Product Code</th>
                                        <th>Quantity</th>
                                        <th>Price</th>
                                        <th>Delivery</th>
                                        <th>Delivery Free</th>
                                        <th>Selling Price</th>
                                        <th>Total Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th  scope="row">Grienert and Glatt</th>
                                        <td>456457</td>
                                        <td>12</td>
                                        <td>$4554</td>
                                        <td>in 3 days</td>
                                        <td>$45545</td>
                                        <td>$7866</td>
                                        <td>$87</td>
                                    </tr>
                                </tbody>
                            </table>

                            <div class="testt" id="menu1" data-toggle="dropdown"></div>
                                    <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                                      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Edit</a></li>
                                      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Copy</a></li>
                                      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Hide</a></li>
                                      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Delete</a></li>
                                         
                                    </ul>
                                  
                        </div>



                        
                     <div class="col-md-12">
                            <div class="row"> 
                                <button type="button" class="form-control btn-secondary addnew" style="width: 125px;
    margin-right: 20px;">cancel</button>
                                <button type="button" class="form-control btn-secondary addnew" style="width: 125px;">save</button></div>
                            </div> 
                    </div>
                    
                 </div>

             </div>
         </div>

          <hr>


          <br>
                 <div class="row">
                    <div class="col-md-4">

                         <p>
                                Warranty: <select id="ddlCreditCardType" name="ddlCreditCardType" class="form-control" style="width: 80%;float: right;height: 29px;background: #252735;">
                                <option value="">Simens</option>
                                <option value="AE">ABC</option>
                                <option value="VI">ABC</option>
                                <option value="MC">ABC</option>
                                <option value="DI">ABC</option>
                            </select><br><br></p>
                            <div style="margin-top: -25px;">
                            <p> 
                                Note:<textarea type="text" name="" class="form-control" style="width: 80%;float: right;height: 200px;background: #252735;" value="12345678"> </textarea>
                            </p>
                            </div>

                       
                    </div>

                    <div class="col-md-4">
                    </div>    
                    <div class="col-md-4">
                      
                          
                               
                            <table class="table mb-0 teb">
                                <thead>
                                    <tr>
                                        <th style="background: none;border: #252735;"><h4>Total</h4></th>
                                        <th style="background: none;border: #252735;"><h4>$565656.56</h4></th>
                                        
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>+VAT (%)<input type="" name="" class="form-control vat" value="12345678"> </th>
                                        <td>456457</td>
                                       
                                        
                                    </tr>
                                     <tr>
                                        <th>- Discount (%)<input type="" name="" class="form-control vat" value="12345678"> </th>
                                        <td>456457</td>
                                       
                                        
                                    </tr>
                                     <tr>
                                        <th style="border-top: 1px solid #5d5e66 !important"><h4>NET Total</h4></th>
                                        <td style="border-top: 1px solid #5d5e66 !important"><h4>$565656.56</h4></td>
                                       
                                        
                                    </tr>
                                </tbody>
                            </table>

                            
                                  
                       
                           
                   
                       
                    </div> 
                 </div>



                 <div class="card" style="margin-top: 100px;">
                              
                                    <div class="row">
                                        <div class="col-md-3"></div>
                                        <div class="col-md-3">
                                            <button type="button" class="form-control btn-secondary addnew" style="width: 200px;">Save Draft</button>
                                        </div>
                                        <div class="col-md-3">
                                            <button type="button" class="form-control btn-secondary addnew" style="width: 200px;">Generate Quotation</button>
                                        </div>
                                        <div class="col-md-3"></div>
                                    </div>
                                </div>
                         
 
    
     </div>
    
                 
 


            </div>
        </div>
    </div>


    <style type="text/css">
  .modal .modal-content {
    background: #36394c;
    border-color: #36394c;
}
.form-control {
    font-size: 14px;
    color: #dee2e6 !important;
    background: #36394c;
    border-color: rgba(255, 255, 255, 0.07);
}
a {
    color: #fff !important;
    text-decoration: none;
}
</style>
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


  <style type="text/css">
  
   button:hover{
      background: #03a9f4;
    }
    .form-control {
    font-size: 12px;
    color: #dee2e6 !important;
    background: #36394c !important;
    border-color: rgba(255, 255, 255, 0.07);
}
.form-control {
    font-size: 12px;
    color: #dee2e6 !important;
    background: #36394c !important;
    border-color: #00000052;
}
.table > tbody > tr > td, .table > tfoot > tr > td, .table > thead > tr > td {
    padding: 10px 10px;
}
  </style>

<?php include_once('footer.php') ?>