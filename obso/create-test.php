


<?php include 'sidebar.php'; ?>

<style type="text/css">
	.form-control {
    font-size: 12px;
    color: #dee2e6 !important;
    background: #252735 !important;
    border-color: rgba(255, 255, 255, 0.07);
}
.estbox{
	    
	height: 50px;
    padding: 3px;
    font-size: 12px;
    text-align: center;
    background: #36394c !important;
    margin-left: 13px;
}

.estbox:hover{
      
    cursor: pointer;
    background: #007bff !important;
    
}
.estbox 


/* Hide the browser's default checkbox */
.estbox input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
  height: 0;
  width: 0;
}

/* Create a custom checkbox */
.checkmark {
  position: absolute;
  top: 0;
  left: 0;
  height: 25px;
  width: 25px;
  text-align: center;
}

/* On mouse-over, add a grey background color */


/* When the checkbox is checked, add a blue background */
.estbox input:checked ~ .checkmark {
  background-color: #2196F3;
}

/* Create the checkmark/indicator (hidden when not checked) */
.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the checkmark when checked */
.estbox input:checked ~ .checkmark:after {
  display: block;
}

/* Style the checkmark/indicator */
.estbox .checkmark:after {
  left: 9px;
  top: 5px;
  width: 5px;
  height: 10px;
  border: solid white;
  border-width: 0 3px 3px 0;
  -webkit-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  transform: rotate(45deg);
}



.estbox:hover{
      
    cursor: pointer;
    background: #007bff !important;
    
}


.estbox p{
	    margin-top: 7px;
	}
  .estbox1:hover{
    cursor: pointer;
    background: #007bff !important;
  }
.estbox1{

	height: 38px;
    
    font-size: 10px;
    text-align: center;
    background: #36394c !important;
    margin-left: 12px;
}

</style>

<div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container-fluid">
                        <div class="page-title-box">
                            <div class="row align-items-center">
                                
                                <div class="col-sm-6">
                                     <h3 class="page-title">Dashboard <small style="font-size: 12px;">&nbsp > &nbsp Create Sales Company</small>
                                    </h3>
                                </div>
                               
                            </div>
                        </div>
                        <!-- end row -->
                       
                         <div class="card" style="padding: 0px;">
                            <div class="card-body">
                            	<div class="row">
                            		
                            			<div class="col-md-6" style="border-right: 1px solid black;">
                            				<div class="row">
	                            				<div class="col-md-6">
	                            					<div class="row">
	                            						<div class="col-md-2">
	                            							<i class="ion ion-md-globe" style="font-size: 20px;padding: 5px;background: #2a3142;margin: 2px;"></i>
	                            						</div>	
	                            						<div class="col-md-10">
	                            							<div class="first" style="background-color: #2a3142;text-align: center;height: 85px;">

		                            					
		                            						<h6 style="padding: 24px;">Add Company Name</h6>
		                            					
	                            					</div>
	                            						</div>
	                            					
	                            					</div>
	                            				</div>
	                            				<div class="col-md-6" style="background: #000;">
	                            					<div class="col-md-12" style="margin-top: 10px;">
	                            					<p>
		                            					Recorded by : <select id="ddlCreditCardType" name="ddlCreditCardType" class="form-control" style="  width: 60%;float: right;height: 29px;background: #000000 !important">
		                                                <option value="">John</option>
		                                                <option value="AE">ABC</option>
		                                                <option value="VI">ABC</option>
		                                                <option value="MC">ABC</option>
		                                                <option value="DI">ABC</option>
		                                            </select><br><br></p>
		                                            <div style="margin-top: -25px;">
		                                            <p>	
		                            					Last contact date : 20/march/2019<br>
		                            					Business link : 12 link companies
		                            				</p>
		                            				</div>
		                            				</div>
	                            				</div>
                            				</div>
                            			</div>
                            			<div class="col-md-6">
                            				<div class="row" style="padding: 5px;">
                            					<div class="col-md-4" style="border-right: 1px solid black;"><div class="col-md-12">
                            						<p>Total spend : $00.0<br>
		                            					Gross Profit : $00.0<br>
		                            					Invoiced : $00.0
		                            				</p>
                            					</div></div>
                            					<div class="col-md-3" style="border-right: 1px solid black;">
                            						<p>Enquiries : 01<br>
		                            					Quotes : 00<br>
		                            					Orders : 00
		                            				</p>
                            					</div>
                            					<div class="col-md-5">
                            						<div class="col-md-12" style="padding: 5px;">
                            							<button type="button" class="form-control" style="background: #2a3142 !important;border-radius: 10px;border: 1px solid #5d5d61;">Save Draft</button>
                            							<br>
                            							<button type="button" class="form-control" style="    background: #2a3142 !important;border-radius: 10px;border: 1px solid #5d5d61;">Enquiry Active/Order</button>
                            						</div>
                            					</div>
                            				</div>
                            			</div>
                            		</div>
                            	
                            </div>
                        </div>  
                      		


                   
                        
                           <!--end top discription -->

                           <div class="cards">
                           	<div class="card-body">

                           		<ul class="nav nav-pills nav-justified" role="tablist">
                           			<li class="nav-item waves-effect waves-light">
                           				<a class="nav-link" data-toggle="tab" href="#home-1" role="tab">
                           					<span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                           					<span class="d-none d-sm-block">
                           					Record Information</span> 
                           				</a>
                           			</li>
                           			<li class="nav-item waves-effect waves-light">
                           				<a class="nav-link " data-toggle="tab" href="#profile-1" role="tab">
                           					<span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                           					<span class="d-none d-sm-block">Contact Information</span> 
                           				</a>
                           			</li>
                           			<li class="nav-item waves-effect waves-light">
                           				<a class="nav-link " data-toggle="tab" href="#profile-1" role="tab">
                           					<span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                           					<span class="d-none d-sm-block">Order History</span> 
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


                           <div class="row">
                           	<div class="col-lg-5">
                           		<h4 class="mt-0 header-title">About Information</h4>
                           		<hr><br>
                           		<form class="" action="#">
                           			<div class="form-group">
                           				<textarea class="form-control" required placeholder="write some information on customer" style="height: 100px;border-radius: 7px;">
                           				</textarea>
                           			</div>

                           			<div class="form-group">
                           				<div class="row">
                           					<div class="col-md-6">
                           						<select id="ddlCreditCardType" name="ddlCreditCardType" class="form-control" style="border-radius: 5px;">
                           							<option value="">Industry sector</option>
                           							<option value="AE">ABC</option>
                           							<option value="VI">ABC</option>
                           							<option value="MC">ABC</option>
                           							<option value="DI">ABC</option>
                           						</select>
                           					</div>
                           					<div class="col-md-6">
                           						<input type="password" class="form-control" required data-parsley-equalto="#pass2"
                           						placeholder="Secrtor free Text" style="border-radius: 5px;"/>
                           					</div>
                           				</div>
                           			</div>

                           			<div class="form-group">
                           				<div class="row">
                           					<div class="col-md-6">
                           						<input type="text" id="pass2" class="form-control" required
                           						placeholder="Website Address pf main company site" style="border-radius: 5px;"/>
                           					</div>
                           					<div class="col-md-6">
                           						<select id="ddlCreditCardType" name="ddlCreditCardType" class="form-control" style="border-radius: 5px;">
                           							<option value="">Company Record Source</option>
                           							<option value="AE">ABC</option>
                           							<option value="VI">ABC</option>
                           							<option value="MC">ABC</option>
                           							<option value="DI">ABC</option>
                           						</select>
                           					</div>
                           				</div>
                           			</div>

                           			<div class="form-group">
                           				<div class="row">
                           					<div class="col-md-12">
                           						<input type="text" id="pass2" class="form-control" required
                           						placeholder="Main Switchboard Number" style="border-radius: 5px;"/>
                           					</div>
                           					
                           				</div>
                           			</div>

                           			<br>
                           		

                           			<h4 class="mt-0 header-title">Payment Information</h4>
                           			<hr>
                           			<br>
<p class="mt-0 header-title">Estimated Requirement Frequency::</p>


  <div class="button-wrap">
    <input class="hidden radio-label" type="radio" name="accept-offers" id="yes-button" checked="checked"/>
    <label class="button-label" for="yes-button">
      <h1>Less Than One year</h1>
    </label>
    <input class="hidden radio-label" type="radio" name="accept-offers" id="no-button"/>
    <label class="button-label" for="no-button">
      <h1>Daily</h1>
    </label>
    <input class="hidden radio-label" type="radio" name="accept-offers" id="maybe-button"/>
    <label class="button-label" for="maybe-button">
      <h1>Weekly</h1>
    </label>
    <input class="hidden radio-label" type="radio" name="accept-offers" id="van-button"/>
    <label class="button-label" for="van-button">
      <h1>Monthly</h1>
       </label>

       <input class="hidden radio-label" type="radio" name="accept-offers" id="van-button2"/>
    <label class="button-label" for="van-button2">
      <h1>Yearly</h1>
       </label>

    </div>
  

		<div class="form-group">
			<p class="mt-0 header-title">Estimated Spend:</p>
			<div class="row mt-0" style="margin: 0px;">
				<div class="button-wrap">
      <input class="hidden radio-label" type="radio" name="accept-offers" id="yes-button1" checked="checked"/>
      <label class="button-label" for="yes-button1">
        <h1>Less Than 50k</h1>
      </label>
      <input class="hidden radio-label" type="radio" name="accept-offers" id="no-button1"/>
      <label class="button-label" for="no-button1">
        <h1>50k</h1>
      </label>
      <input class="hidden radio-label" type="radio" name="accept-offers" id="maybe-button1"/>
      <label class="button-label" for="maybe-button1">
        <h1>100k</h1>
      </label>
      <input class="hidden radio-label" type="radio" name="accept-offers" id="van-button1"/>
      <label class="button-label" for="van-button1">
        <h1>500k</h1>
         </label>

         <input class="hidden radio-label" type="radio" name="accept-offers" id="van-button3"/>
      <label class="button-label" for="van-button3">
        <h1>1Mk</h1>
         </label>

      </div>
			</div>
			
		</div>

                           		

                           			<div class="form-group">
                           				<div class="row">
                           					
                           						<div class="col-md-6">
                           					<select id="ddlCreditCardType" name="ddlCreditCardType" class="form-control" style="border-radius: 5px;">
                           						<option value="">Payment Terms | Advance</option>
                           						<option value="AE">ABC</option>
                           						<option value="VI">ABC</option>
                           						<option value="MC">ABC</option>
                           						<option value="DI">ABC</option>
                           					</select>
                           					</div>
                           					<div class="col-md-6">
	                           					<select id="ddlCreditCardType" name="ddlCreditCardType" class="form-control" style="border-radius: 5px;">
                           						
                           						<option value="AE">Free to trade</option>
                           						<option value="VI">ABC</option>
                           						<option value="MC">ABC</option>
                           						<option value="DI">ABC</option>
                           					</select>
                           					</div>
                           					<br><br>
                           					

                           					<div class="col-md-12" style="border-radius: 5px;">
                           						
                           						
                           						<input type="text" name=""class="form-control" required placeholder="Payment Reference | " style="border-radius: 5px;">
                           						
                           							
                           					</div>
                           					</div>
                           					
                           				
                           			</div>


                           		 
                           		      
   
  
        <div class="form-group">
               <div class="row">                   
          <div class="col-lg-12 name_text  midea_mt30 btn-checkbox">
            
          <p class="pick_all_txt mt20">Manufacture Used</p>
          
            <div class="row" style="margin: 0px;">
          <div>
            <input type="checkbox" class="reffer-check" name="hearFrom" value="1" />
            <button type="button" class="btn btn-outline-primary theme_btn" data-id="1" >Simems</button>
          </div>
          <div>
            <input type="checkbox" class="reffer-check" name="hearFrom" value="2" />
            <button type="button" class="btn btn-outline-primary theme_btn" data-id="2" >Alley Bradely</button>
          </div>
          
          <div>
            <input type="checkbox" class="reffer-check" name="hearFrom" value="3" />
            <button type="button" class="btn btn-outline-primary theme_btn" data-id="3" >Indramart</button>
          </div>
          <div>
            <input type="checkbox" class="reffer-check" name="hearFrom" value="4" />
            <button type="button" class="btn btn-outline-primary theme_btn" data-id="4" >ABB</button>
          </div>
          <div>
            <input type="checkbox" class="reffer-check" name="hearFrom" value="5" />  
            <button type="button" class="btn btn-outline-primary theme_btn" data-id="5" >Dannfors</button>
          </div>
          </div>

          

          <div class="row" style="margin: 0px;">
          <div>
            <input type="checkbox" class="reffer-check" name="hearFrom" value="1" />
            <button type="button" class="btn btn-outline-primary theme_btn" data-id="1" >Simems</button>
          </div>
          <div>
            <input type="checkbox" class="reffer-check" name="hearFrom" value="2" />
            <button type="button" class="btn btn-outline-primary theme_btn" data-id="2" >Alley Bradely</button>
          </div>
          
          <div>
            <input type="checkbox" class="reffer-check" name="hearFrom" value="3" />
            <button type="button" class="btn btn-outline-primary theme_btn" data-id="3" >Indramart</button>
          </div>
          <div>
            <input type="checkbox" class="reffer-check" name="hearFrom" value="4" />
            <button type="button" class="btn btn-outline-primary theme_btn" data-id="4" >ABB</button>
          </div>
          <div>
            <input type="checkbox" class="reffer-check" name="hearFrom" value="5" />  
            <button type="button" class="btn btn-outline-primary theme_btn" data-id="5" >Dannfors</button>
          </div>
          </div>

          

          <div class="row" style="margin: 0px;">
          <div>
            <input type="checkbox" class="reffer-check" name="hearFrom" value="1" />
            <button type="button" class="btn btn-outline-primary theme_btn" data-id="1" >Simems</button>
          </div>
          <div>
            <input type="checkbox" class="reffer-check" name="hearFrom" value="2" />
            <button type="button" class="btn btn-outline-primary theme_btn" data-id="2" >Alley Bradely</button>
          </div>
          
          <div>
            <input type="checkbox" class="reffer-check" name="hearFrom" value="3" />
            <button type="button" class="btn btn-outline-primary theme_btn" data-id="3" >Indramart</button>
          </div>
          <div>
            <input type="checkbox" class="reffer-check" name="hearFrom" value="4" />
            <button type="button" class="btn btn-outline-primary theme_btn" data-id="4" >ABB</button>
          </div>
          <div>
            <input type="checkbox" class="reffer-check" name="hearFrom" value="5" />  
            <button type="button" class="btn btn-outline-primary theme_btn" data-id="5" >Dannfors</button>
          </div>
          </div>

      </div>
      </div>
      </div>



      <div class="form-group">
        <input type="text" name=""class="form-control" required placeholder="Other Manufectures used :" style="border-radius: 5px;">
      <p class="mt-0 header-title"></p>
      <div class="row mt-0" style="margin: 0px;">
        
          
      <div class="col-md-4 p-0">
      <input class="hidden radio-label" type="radio" name="accept-offers" id="yes-button5" checked="checked"/>
      <label class="button-label" for="yes-button5">
        <h1>PCompetitor Information</h1>
      </label>
      </div>
      <div class="col-md-4 p-0">
      <input class="hidden radio-label" type="radio" name="accept-offers" id="no-button5"/>
      <label class="button-label" for="no-button5">
        <h1>Competitor Information</h1>
      </label>
      </div>
      <div class="col-md-4 p-0">
      <input class="hidden radio-label" type="radio" name="accept-offers" id="maybe-button5"/>
      <label class="button-label" for="maybe-button5">
        <h1>Discount & Pricing Information</h1>
      </label>
      </div>
      </div>
      
    
      
    </div>



                           		</form>
                           	</div> 
                           	<!-- First form End-->

                           	<div class="col-lg-7">
                           		<h4 class="mt-0 header-title">Adderss</h4>
                           		<hr>  <br>  
                           		<form action="#">

                           			<div class="form-group">
                           				<div class="row">
                           					<div class="col-md-6">
                           						<input type="text" class="form-control" required
                           						data-parsley-maxlength="6" placeholder="Location Number/ Name" style="border-radius: 10px;" />
                           					</div>
                           					<div class="col-md-6">
                           						<input type="text" class="form-control" required
                           						data-parsley-maxlength="6" placeholder="Street Address" style="border-radius: 10px;"/>
                           					</div>
                           				</div>
                           				<br>

                           				<div class="row">
                           					<div class="col-md-6">
                           						<input type="text" class="form-control" required
                           						data-parsley-maxlength="6" style="border-radius: 10px;" placeholder="Town / city"/>
                           					</div>
                           					<div class="col-md-6">
                           						<input type="text" class="form-control" required
                           						data-parsley-maxlength="6" style="border-radius: 10px;" placeholder="State"/>
                           					</div>
                           				</div>
                           				<br>


                           				<div class="row">
                           					<div class="col-md-6">
                           						<input type="text" class="form-control" required
                           						data-parsley-maxlength="6" style="border-radius: 10px;" placeholder="Postal / Zip code"/>
                           					</div>
                           					<div class="col-md-6">
                           						<input type="text" class="form-control" required
                           						data-parsley-maxlength="6" style="border-radius: 10px;" placeholder="Country"/>
                           					</div>
                           				</div>
                           				<br>

                           				<p>If this company has more than one address , please click the button below to<br> add new address.</p>
                           				<br>
                           				<button type="button" class="form-control" style="width: 185px;height: 45px;background: #36394c !important;"><i class="fa fa-map-marker"></i>  Add new Address</button>
                           				<br>
                           				
                           					<div class="col-md-12" style="padding: 0px;">
                                      <div class="mapouter"><div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=university%20of%20san%20francisco&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>Google Maps Generator by <a href="https://www.embedgooglemap.net">embedgooglemap.net</a></div><style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style></div>


                           						
                           					</div>
                           				
                           			</form>
                           		</div> 
                           	</div>

                           	<!-- content -->
                           	</form></div></div>


                           	<div class="card" style="margin: 11px;margin-top: 100px;">
                           		<div class="card-body">
                           			<div class="row">
                           				<div class="col-md-3"></div>
                           				<div class="col-md-3">
                           					<button type="button" class="form-control" style="width: 200px;background: #36394c !important;height: 40px;">Save Draft</button>
                           				</div>
                           				<div class="col-md-3">
                           					<button type="button" class="form-control" style="width: 200px;background: #36394c !important;height: 40px;">Save & Continue</button>
                           				</div>
                           				<div class="col-md-3"></div>
                           			</div>
                           		</div>
                           	</div>


                           	</div></div>
                           	</div>


	<style type="text/css">
		.card .card-body .col-md-3 .form-control {
	    height: 45px;
	    border: 2px solid #252735;
	    border-radius: 25px;
	}
	 button:hover{
    	background: #03a9f4;
    }
	</style>

<?php include 'footer.php'; ?>


 <script type="text/javascript">
  function registerForm()
  {   
    var first_name= $("#first_name").val(); 
    var last_name= $("#last_name").val();
    var password= $("#password").val();
    var confirm_pass = $("#repeat-password").val();
      // var radio_female = $("#radio_female").val();
      // var radio_male = $("#radio_male").val();
      var gender = $("input[name='gender']:checked").val();
      var bday= $("#bday").val();
      var mobile= $("#mobile").val();
      var email= $("#email").val();

      var isChecked = $('#radio_female').prop('checked');
      var isChecked = $('#radio_male').prop('checked');
      var sources = [];
      $("input[name = 'hearFrom']:checked").each(function(){
        sources.push($(this).val());
        // alert($(this).val());
      });
    if(first_name=="")
    {
     $("#errorfirst_name").show();

     setTimeout(function(){ $("#errorfirst_name").hide(); }, 3000);

   }else if(last_name=="")
   {
     $("#Errorlast_name").show();

     setTimeout(function(){ $("#Errorlast_name").hide(); }, 3000);

   }else if(password=="")
   {
     $("#errorpassword").show();
     setTimeout(function(){ $("#errorpassword").hide(); }, 3000);

   }else if(confirm_pass == "")
   {
    	$("#repeatpassword_error").show();
     setTimeout(function(){ $("#repeatpassword_error").hide(); }, 3000);
   
   }else if(password != confirm_pass ){
       	$("#ErrorSamePassword").show();
     setTimeout(function(){ $("#ErrorSamePassword").hide(); }, 3000);
   	
   }else if(gender == undefined || gender == ""){
       	$("#ErrorGender").show();
     setTimeout(function(){ $("#ErrorGender").hide(); }, 3000);
   	
   }else   if(bday=="")
   {
     $("#errorbday").show();

     setTimeout(function(){ $("#errorbday").hide(); }, 3000);

   }else if(mobile == ""){
   $("#mobileError").show();

     setTimeout(function(){ $("#mobileError").hide(); }, 3000);
   }else if(email=="")
   {
     $("#erroremail").show();

     setTimeout(function(){ $("#erroremail").hide(); }, 3000);

   }

   else
   {
   $.ajax({

      url:"#",
      type:'POST',
      data: {email :email},
        //cache:false,
        success:function(result)
        {
          var res = JSON.parse(result);
          if(res.status == 1){
            $.ajax({

	      url:"#",
	      type:'POST',
	      data: {first_name:first_name,last_name:last_name,password:password,gender:gender,bday:bday,mobile:mobile,email:email,hearabout:sources},
	        //cache:false,
	        success:function(result)
	        {
	          var res = JSON.parse(result);
	          if(res.status == 1){
	            alert("Your Account Has Been Created An Activation Link Sent To Your Email");
	             window.location='#';
	          }else{
	            alert(res.msg);
	          }
	        }
	      });
          }else{
            $("#erroremailexists").show();

     setTimeout(function(){ $("#erroremailexists").hide(); }, 3000);
          }
        }
      });
  
  }
  }



</script>





<script type="text/javascript">
  function check_img1()
  {

    var z = document.getElementById("right2");
    if (z.style.display === "none") {

    } else {
      z.style.display = "none";
    }

    var x = document.getElementById("right1");
    if (x.style.display === "none") {
      x.style.display = "block";
      $( "#radio_female" ).prop( "checked", true );
    } else {
      x.style.display = "none";
    } 
  }
</script>


<script type="text/javascript">
  function check_img2()
  {  

    var x = document.getElementById("right1");
    if (x.style.display === "none") {

    } else {
      x.style.display = "none";
    }   

    var z = document.getElementById("right2");
    if (z.style.display === "none") {
      z.style.display = "block";
      $( "#radio_male" ).prop( "checked", true );
    } else {
      z.style.display = "none";
    } 
  }
</script>

<style>
   


.mt35 {
	margin-top: 35px;
}

.mt40 {
	margin-top: 40px;
}

.mtop15 {
	margin-top: 15px;
}

.mt50 {
	margin-top: 50px;
}

.mt80 {
	margin-top: 80px;
}

.mb20 {
	margin-bottom: 20px;
}

.mb25 {
	margin-bottom: 25px;
}

.mb40 {
	margin-bottom: 40px;
}

.mb70 {
	margin-bottom: 70px;
}

.mb100 {
	margin-bottom: 100px;
}

.mr10 {
	margin-right: 10px;
}

.pr100 {
	padding-right: 100px;
}

.theme_btn {
	border-color:#36394c;
	color: #ffff; 
}


}

.theme_btn:hover,.theme_btn:active,.theme_btn:focus {
	background: #626ed4 !important;
	border-color:#626ed4 !important;
	color: #fff;
	
}

















/*faq page*/

/*faq page*/

} 

.footer_about_text ul {
padding-left: 30px;
}


.before_line h1
{
text-align: center;
}

.before_line .lineh1
{
margin-top: 0px !important;
}
.developed_text {
text-align: left;
margin: 0px 0px;
}
.copy_text {
text-align: left;
}
.before_line1 .one span {
padding: 0 0px;

}

.mob_mt30
{
margin-top: 30px;
}

/*Login section Start*/
.login_btns {
width: 100%;
}
.main_checkbox_row .form-check-label {
font-size: 12px;
padding-left: 15px;
}

.blog_img_txt {
width: 507px;
}

.close_cnt {
margin-left: 125px;
}

/*faq page*/
/*faq page*/


} 

@media only screen and (max-width: 500px) {
.swiper-wrapper{
height: 100%
}
.main_forgot_content .modal-title {
margin-left: 14px;
}
.main_inner_search_cont input[type=text]
{
width: 100%;
}  
.main_inner_search_cont .search-container button
{
width: 100%;
margin-right: 0px;
}

/*faq page*/

.goal_mt130
{
margin-top: 30px;
}
.icn_txt p
{
font-size: 9px;
}
.goal_icn
{
margin-bottom: 15px;
}

/*faq page*/

}  





/*End Home Page*/



}
























.btn-checkbox > div{
	display: inline-block;
	position: relative;
	vertical-align: middle;
	margin-right: px;
}

.btn-checkbox > div input{
	position: absolute;
	z-index: 2;
	opacity: 0;
	width: 19%;
	height: 27%;
  cursor: pointer;
}

.btn-checkbox > div input:checked + .btn-outline-primary{
	background: rgb(98, 110, 212);
	color: #fff;
}





body {
  min-height: 100%;
  overflow: hidden;
}

.container {
  height: 100%;
  min-height: 100%;
  margin: 0 auto;
}

.button-wrap {
  position: relative;
  
  top: 50%;
  
}
@media (max-width: 40em) {
  .button-wrap {
    margin-top: -1.5em;
  }
}

.button-label {
  display: inline-block;
  padding: 0.3em 1em;
  margin: 0.1em;
  cursor: pointer;
  color: #ffff;
  background: #36394c;
  
  transition: 0.3s;
  -webkit-user-select: none;
     -moz-user-select: none;
      -ms-user-select: none;
          user-select: none;
}
.button-label h1 {
  font-size: 12px;
}
.button-label:hover {
  background: #626ed4;
  color: #ffff;
 
}
.button-label:active {
  -webkit-transform: translateY(2px);
          transform: translateY(2px);
 
}
@media (max-width: 40em) {
  .button-label {
    padding: 0em 1em 3px;
    margin: 0.25em;
  }
}

#yes-button:checked + .button-label {
  background: #626ed4;
  color: #efefef;
}
#yes-button:checked + .button-label:hover {
  background: #626ed4;
  color: #e2e2e2;
}

#van-button:checked + .button-label {
  background: #626ed4;
  color: #efefef;
}
#van-button:checked + .button-label:hover {
  background: #626ed4;
  color: #e2e2e2;
}

#van-button2:checked + .button-label {
  background: #626ed4;
  color: #efefef;
}
#van-button2:checked + .button-label:hover {
  background: #626ed4;
  color: #e2e2e2;
}

#no-button:checked + .button-label {
  background: #626ed4;
  color: #efefef;
}
#no-button:checked + .button-label:hover {
  background: #626ed4;
  color: #e2e2e2;
}

#maybe-button:checked + .button-label {
  background:  #626ed4;
  color: #efefef;
}
#maybe-button:checked + .button-label:hover {
  background:  #626ed4;
  color: #e2e2e2;
}

#yes-button5:checked + .button-label {
  background: #626ed4;
  color: #efefef;
}
#yes-button5:checked + .button-label:hover {
  background: #626ed4;
  color: #e2e2e2;
}

#no-button5:checked + .button-label {
  background: #626ed4;
  color: #efefef;
}
#no-button5:checked + .button-label:hover {
  background: #626ed4;
  color: #e2e2e2;
}

#maybe-button5:checked + .button-label {
  background:  #626ed4;
  color: #efefef;
}
#maybe-button5:checked + .button-label:hover {
  background:  #626ed4;
  color: #e2e2e2;
}



#yes-button1:checked + .button-label {
  background: #626ed4;
  color: #efefef;
}
#yes-button1:checked + .button-label:hover {
  background: #626ed4;
  color: #e2e2e2;
}

#van-button1:checked + .button-label {
  background: #626ed4;
  color: #efefef;
}
#van-button1:checked + .button-label:hover {
  background: #626ed4;
  color: #e2e2e2;
}

#van-button3:checked + .button-label {
  background: #626ed4;
  color: #efefef;
}
#van-button3:checked + .button-label:hover {
  background: #626ed4;
  color: #e2e2e2;
}

#no-button1:checked + .button-label {
  background: #626ed4;
  color: #efefef;
}
#no-button1:checked + .button-label:hover {
  background: #626ed4;
  color: #e2e2e2;
}

#maybe-button1:checked + .button-label {
  background:  #626ed4;
  color: #efefef;
}
#maybe-button1:checked + .button-label:hover {
  background:  #626ed4;
  color: #e2e2e2;
}

.hidden {
  display: none;
}

</style>
