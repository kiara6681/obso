<div class="content-page">
  <!-- Start content -->
  <div class="content">
    <div class="container-fluid">
      <div class="page-title-box">
        <div class="row align-items-center">
          <div class="col-sm-6">
            <h3 class="page-title"><b>Sale Database</b> &nbsp>&nbsp Customer Records
            </h3>
          </div>
        </div>
      </div>
      <!-- end row -->
      <form action="<?php echo base_url('admin/sales/edit_customer_records'); ?>" method="POST" enctype="multipart/multipart/form-data">
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
                      <p><input type="text" name="company_name" class="form-control addnewcompny" placeholder="Add New Company" required=""> value="<?php echo $customer_record->company_name; ?>"></p>
                      </div>
                    </div>
                  </div>  
                </div>
                <div class="col-xl-3 col-md-4 col-sm-6 border-rgt">
                  <div class="col-xl-12 col-md-4 col-sm-6 m-t-5">
                    <input type="hidden" name="session_id" value="<?php echo $customer_record->session_id; ?>">
                    <strong>   Trader Name : <select name="trader_name" class="form-control trad record" style="background: #393e46 !important;border-color: rgb(34, 40, 49);">
                      <option value="<?php echo $customer_record->trader_name; ?>"><?php echo $customer_record->trader_name; ?></option>
                    </select>
                  </strong><br>
                  <strong>  Contact Date : <?php  echo date('d/m/Y', strtotime($customer_record->creation_date)); ?></strong><br>
                  <strong>   Linked Companies : 0 link companies</strong>
                </div>  
              </div>
              <div class="col-xl-2 col-md-4 col-sm-6 border-rgt">
                <div class="col-xl-12 col-md-4 col-sm-6 m-t-5">
                  <strong> Total spend:<i class="fas fa-pound-sign"></i> 00.0</strong><br>
                  <strong>Gross Profit:<i class="fas fa-pound-sign"></i> 00.0</strong><br>
                  <strong>Invoiced:<i class="fas fa-pound-sign"></i> 00.0</strong>
                </div>
              </div>
              <div class="col-xl-2 col-md-4 col-sm-6 border-rgt">
                <div class="col-xl-12 col-md-4 col-sm-6 m-t-5">
                  <strong>Enquiries: 00</strong><br>
                  <strong>Quotes: 00</strong><br>
                  <strong>Orders: 00</strong>
                </div>
              </div>
              <div class="col-xl-2 col-md-4 col-sm-6 p-10">
                <div class="row">
                  <div class="col-xl-12 col-md-4 col-sm-6">
                    <button type="button" class="btn btn-secondary btn-sm waves-effect waves-light savebtn clr">Account</button>
                  </div>
                  <br>
                  <br>
                  <div class="col-xl-12 col-md-4 col-sm-6">
                    <button type="button" class="btn btn-secondary btn-sm waves-effect waves-light savebtn clr">Enquiry Active/Order Dormant</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>   

     <div class="cards">
      <div class="card-body">
        <ul class="nav nav-pills nav-justified" role="tablist">
          <li class="nav-item waves-effect waves-light border-rgt">
            <a class="nav-link active" href="<?php echo base_url(); ?>admin/sales/customer_records/<?php  echo $customer_record->session_id; ?>">
           

              <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
              <span class="d-none d-sm-block active">
              Record Information </span> 
            </a>
          </li>
          <li class="nav-item waves-effect waves-light border-rgt">
            <a class="nav-link" href="<?php echo base_url(); ?>admin/sales/edit_customer_contacts/<?php  echo $customer_record->session_id; ?>">
              <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
              <span class="d-none d-sm-block">Contact Information</span> 
            </a>
          </li>
          <li class="nav-item waves-effect waves-light border-rgt">
            <a class="nav-link" data-toggle="tab" href="#orderhostory" role="tab">
              <span class="d-block d-sm-none"><i class="far fa-envelope"></i></span>
              <span class="d-none d-sm-block">Order History</span>   
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

    <div class="row">
      <div class="col-lg-5">
        <h4 class="mt-0 header-title">About Information</h4>
        <hr><br>
       
          <div class="form-group">
            <textarea class="form-control" name="about"  placeholder="write some information on customer" style="height: 100px;" ><?php  echo $customer_record->about; ?></textarea>
          </div>
          <div class="form-group">
            <div class="row">
              <div class="col-md-6">
                <input type="hidden" value="<?php echo $customer_record->session_id; ?>" name="sessionid">
                <select name="industry_sector" class="form-control" required>
                  <option value="">Industry Sector</option>
                  <?php $i = "1"; foreach ($industry as $industry){ ?>
                  <option value="<?php echo $industry['industry']; ?>" <?php if($customer_record->industry_sector == $industry['industry']) { ?> selected="selected" <?php } ?>><?php echo $industry['industry']; ?></option>
                  <?php $i++; } ?>                 
                </select>
              </div>
              <div class="col-md-6">
                <input type="text" name="sector_free_tax" class="form-control" placeholder="Secrtor free Text" value="<?php echo $customer_record->sector_free_tax; ?>" />
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="row">
              <div class="col-sm-6">
                <input class="form-control" name="url" type="url" placeholder="https://example.com" value="<?php echo $customer_record->url; ?>" >
              </div>
              
              <div class="col-md-6">
                <select name="company_record" class="form-control" >
                  <option value="">Company Record Source</option>
                  <option value="email" <?php if($customer_record->company_record == "email"){ ?> selected="selected" <?php }?>>E-mail</option>
                  <option value="self_generated" <?php if($customer_record->company_record == "self_generated"){ ?> selected="selected" <?php }?>>Self Generated / Outbound Call</option>
                  <option value="google_search" <?php if($customer_record->company_record == "google_search"){ ?> selected="selected" <?php }?>>Google Search</option>
                  <option value="bing_search" <?php if($customer_record->company_record == "bing_search"){ ?> selected="selected" <?php }?>>Bing Search</option>
                  <option value="other_search_engine" <?php if($customer_record->company_record == "other_search_engine"){ ?> selected="selected" <?php }?>>Other Search Engine</option>
                  <option value="google_ads" <?php if($customer_record->company_record == "google_ads"){ ?> selected="selected" <?php }?>>Google Ads</option>
                  <option value="bing_ads" <?php if($customer_record->company_record == "bing_ads"){ ?> selected="selected" <?php }?>>Bing Ads</option>
                  <option value="incoming_call" <?php if($customer_record->company_record == "incoming_call"){ ?> selected="selected" <?php }?>>Incoming Call</option>
                  <option value="chat_facility" <?php if($customer_record->company_record == "chat_facility"){ ?> selected="selected" <?php }?>>Chat Facility</option>
                  <option value="lead_forensics" <?php if($customer_record->company_record == "lead_forensics"){ ?> selected="selected" <?php }?>>Lead Forensics</option>
                  <option value="e_linkdin" <?php if($customer_record->company_record == "e_linkdin"){ ?> selected="selected" <?php }?>>E-LinkedIn</option>
                  <option value="facebook_lead" <?php if($customer_record->company_record == "facebook_lead"){ ?> selected="selected" <?php }?>>Facebook Lead</option>
                  <option value="twitter_lead" <?php if($customer_record->company_record == "twitter_lead"){ ?> selected="selected" <?php }?>>Twitter Lead</option>
                  <option value="instagram_lead" <?php if($customer_record->company_record == "instagram_lead"){ ?> selected="selected" <?php }?>>Instagram Lead</option>
                  <option value="obso_ecommerce_refer" <?php if($customer_record->company_record == "obso_ecommerce_refer"){ ?> selected="selected" <?php }?>>Obso ecommerce Refer</option>
                </select>
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="row">
              <div class="col-md-12">
                <input type="text" name="main_switchboard_number" class="form-control" value="<?php echo $customer_record->main_switchboard_number; ?>" placeholder="Main Switchboard Number" />
              </div>
            </div>
          </div>

          <br>
          <h4 class="mt-0 header-title">Payment Information</h4>
          <hr>
          <br>
          <p class="mt-0 header-title marbtmm">Estimated Requirement Frequency:</p>
          <div class="row">
            <div class="col-xl-12 col-sm-6 col-md-12">
              <div class="card" style="background: #222831 !important;">
                <div class="card-body">

                   <div class="btn-group btn-group-toggle" data-toggle="buttons">

                    <?php if($customer_record->estimated_frequency == "lessthenoneyear"){ ?>
                      <label class="btn btn-primary active">
                          <input type="radio" name="estimated_frequency" value="lessthenoneyear" > Less then 1 year
                      </label>
                    <?php }else{ ?>
                      <label class="btn btn-primary">
                          <input type="radio" name="estimated_frequency" value="lessthenoneyear" > Less then 1 year
                      </label>
                    <?php } ?>

                    <?php if($customer_record->estimated_frequency == "daily"){ ?>
                      <label class="btn btn-primary active">
                          <input type="radio" name="estimated_frequency" value="daily"> Daily
                      </label>
                    <?php }else{ ?>
                      <label class="btn btn-primary ">
                          <input type="radio" name="estimated_frequency" value="daily"> Daily
                      </label>
                    <?php } ?>

                    <?php if($customer_record->estimated_frequency == "weekly"){ ?>
                      <label class="btn btn-primary active">
                          <input type="radio" name="estimated_frequency" value="weekly"> Weekly
                      </label>
                    <?php }else{ ?>
                      <label class="btn btn-primary">
                          <input type="radio" name="estimated_frequency" value="weekly"> Weekly
                      </label>
                    <?php } ?>

                    <?php if($customer_record->estimated_frequency == "monthly"){ ?>
                      <label class="btn btn-primary active">
                          <input type="radio" name="estimated_frequency" value="monthly"> Monthly
                      </label>
                    <?php }else{ ?>
                      <label class="btn btn-primary">
                          <input type="radio" name="estimated_frequency" value="monthly"> Monthly
                      </label>
                    <?php } ?>

                    <?php if($customer_record->estimated_frequency == "yearly"){ ?>
                       <label class="btn btn-primary active">
                          <input type="radio" name="estimated_frequency" value="yearly"> Yearly
                      </label>
                    <?php }else{ ?>
                       <label class="btn btn-primary">
                          <input type="radio" name="estimated_frequency" value="yearly"> Yearly
                      </label>
                    <?php } ?>
                  </div>

                </div>
              </div>
            </div>
          </div>

          <div class="form-group">
            <p class="mt-0 header-title marbtmm">Estimated Spend:</p>
            <div class="row">
              <div class="col-xl-12 col-sm-6 col-md-12">
                <div class="card" style="background: #222831 !important;">
                  <div class="card-body">

                     <div class="btn-group btn-group-toggle" data-toggle="buttons">
                      <?php if($customer_record->estimated_spend == "lessthen50k"){ ?>
                      <label class="btn btn-primary active">
                          <input type="radio" name="estimated_spend" value="lessthen50k" > Less then 50k
                      </label>
                    <?php }else{ ?>

                      <label class="btn btn-primary">
                          <input type="radio" name="estimated_spend" value="lessthen50k" > Less then 50k
                      </label>
                    <?php } ?>


                    <?php if($customer_record->estimated_spend == "50k"){ ?>
                      <label class="btn btn-primary active">
                          <input type="radio" name="estimated_spend" value="50k"> 50k+
                      </label>
                    <?php }else{ ?>
                      <label class="btn btn-primary">
                          <input type="radio" name="estimated_spend" value="50k"> 50k+
                      </label>
                    <?php } ?>

                     <?php if($customer_record->estimated_spend == "100kplus"){ ?>
                      <label class="btn btn-primary active">
                          <input type="radio" name="estimated_spend" value="100kplus"> 100k+
                      </label>
                    <?php }else{ ?>
                      <label class="btn btn-primary">
                          <input type="radio" name="estimated_spend" value="100kplus"> 100k+
                      </label>
                    <?php } ?>

                    <?php if($customer_record->estimated_spend == "500kplus"){ ?>
                      <label class="btn btn-primary active">
                          <input type="radio" name="estimated_spend" value="500kplus"> 500k+
                      </label>
                    <?php }else{ ?>
                      <label class="btn btn-primary">
                          <input type="radio" name="estimated_spend" value="500kplus"> 500k+
                      </label>
                    <?php } ?>

                    <?php if($customer_record->estimated_spend == "1mplus"){ ?>
                       <label class="btn btn-primary active">
                          <input type="radio" name="estimated_spend" value="1mplus"> 1m+
                      </label>
                    <?php }else{ ?>
                      <label class="btn btn-primary">
                          <input type="radio" name="estimated_spend" value="1mplus"> 1m+
                      </label>
                    <?php } ?>
                  </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

         <div class="form-group">
            <p class="mt-0 header-title marbtm">Payment Information:</p>
             <hr>
          </div>

            <div class="form-group">
          
              <div class=" col-md-12">
                <div class="row">
                <div class="col-md-3 p-0">Payment Terms:</div>
                <div class="col-md-9 p-0">

                <select name="payment_terms" class="form-control" >
                  <option value="">Payment Terms:</option>
                  <option value="advance" <?php if($customer_record->payment_terms == "advance"){ ?> selected="selected" <?php }?>>Advance</option>

                  <option value="5050_advance" <?php if($customer_record->payment_terms == "5050_advance"){ ?> selected="selected" <?php }?>>50/50 Advance</option>

                  <option value="7525_advance" <?php if($customer_record->payment_terms == "7525_advance"){ ?> selected="selected" <?php }?>>75/25 Advance</option>

                  <option value="pay_to_ship" <?php if($customer_record->payment_terms == "pay_to_ship"){ ?> selected="selected" <?php }?>>Pay to ship</option>

                  <option value="pay_on_delivery" <?php if($customer_record->payment_terms == "pay_on_delivery"){ ?> selected="selected" <?php }?>>Pay on Delivery</option>

                  <option value="7days_doi" <?php if($customer_record->payment_terms == "7days_doi"){ ?> selected="selected" <?php }?>>7 Days DOI</option>

                  <option value="14days_doi" <?php if($customer_record->payment_terms == "14days_doi"){ ?> selected="selected" <?php }?>>14 Days DOI</option>

                  <option value="30days_doi" <?php if($customer_record->payment_terms == "30days_doi"){ ?> selected="selected" <?php }?>>30 Days DOI</option>

                  <option value="60days_doi" <?php if($customer_record->payment_terms == "60days_doi"){ ?> selected="selected" <?php }?>>60 Days DOI</option>

                  <option value="90days_doi" <?php if($customer_record->payment_terms == "90days_doi"){ ?> selected="selected" <?php }?>>90 Days DOI</option>

                  <option value="eom" <?php if($customer_record->payment_terms == "eom"){ ?> selected="selected" <?php }?>>EOM</option>

                  <option value="30_eom" <?php if($customer_record->payment_terms == "30_eom"){ ?> selected="selected" <?php }?>>30 EOM</option>

                  <option value="60_eom" <?php if($customer_record->payment_terms == "60_eom"){ ?> selected="selected" <?php }?>>60 EOM</option>

                  <option value="90_eom" <?php if($customer_record->payment_terms== "90_eom"){ ?> selected="selected" <?php }?>>90 EOM</option>
                </select>
              </div>
            </div>
          </div>
        </div>
        <div class="form-group">
            
              <div class="col-md-12" >
                <div class="row">
                <div class="col-md-4 p-0">Free To Trade:</div>
                <div class="col-md-8 p-0">

            
                <select name="free_trade" class="form-control" >
                  <option value="">Free To Trade:</option>
                  <option value="trade1" <?php if($customer_record->free_trade == "trade1"){ ?> selected="selected" <?php }?>>Trade 1</option>
                  <option value="trade2" <?php if($customer_record->free_trade == "trade2"){ ?> selected="selected" <?php }?>>Trade 2</option>
                  <option value="trade3" <?php if($customer_record->free_trade == "trade3"){ ?> selected="selected" <?php }?>>Trade 3</option>
                </select>
              </div>
            </div>
          </div>
        </div>

              
              <div class="form-group">
            
              <div class="col-md-12" >
                <div class="row">
                <div class="col-md-4 p-0">Payment Reference:</div>
                <div class="col-md-8 p-0">
                <input type="text" name="payment_ref" class="form-control" value="<?php echo $customer_record->payment_ref ?>"  placeholder="Payment Reference | " >
              </div>
            </div>
          </div>
        </div>

          

          <div class="form-group">
            <div class="row">
              <div class="col-md-12">
                <label>Manufectures used:</label> 
              </div>
            </div>
            <div class="row">                   
              <div class="col-lg-12 name_text  midea_mt30 btn-checkbox">
                <div class="row">
                  <div class="col-xl-12 col-md-6 col-sm-6">
                    <div class="row">
                      <div class="col-xl-12 col-sm-6 col-md-12">
                        <div class="card" style="background: #222831 !important;">
                          <div class="card-body">
                              <?php $chkbox=$customer_record->manufacturer_use;
                                $arr=explode(",",$chkbox);
                              ?>
                              <?php $i = "1"; foreach ($manufacturer as $manufacturer){ ?>
                                 <div class="btn-group btn-group-toggle" data-toggle="buttons">

                                  <?php if(in_array($manufacturer['manufacturer'],$arr)){ ?> 
                                <label class="btn btn-secondary active">
                                <?php }else{ ?>
                                <label class="btn btn-secondary">
                                 <?php } ?>
                                    <input type="checkbox" name="programming[]" value="<?php echo $manufacturer['manufacturer']; ?>" <?php if(in_array($manufacturer['manufacturer'],$arr)){?> checked="checked" <?php }?> /> <?php echo $manufacturer['manufacturer']; ?>
                                </label>
                                </div>
                                 <?php $i++;$i==5;continue; } ?>

                           </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="row">
              <div class="col-md-12">
                <label>Other Manufectures Used:</label> 
              </div>
              <div class="col-md-12">
                <textarea class="form-control" type="text"  name="other_manufacturer_used" placeholder="Other Manufacturer Used" style="height: 100px;" ><?php echo $customer_record->other_manufacturer_used; ?></textarea>
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="row">
              <div class="col-md-12">
                <label>PSL Information:</label> 
              </div>
              <div class="col-md-12">
                <textarea class="form-control" type="text" name="psl_information" placeholder="PSL Information" style="height: 100px;" ><?php echo $customer_record->psl_information; ?></textarea>
              </div>
            </div>   
          </div>

          <div class="form-group">
            <div class="row">
              <div class="col-md-12">
                <label>Competitor Information:</label> 
              </div>
              <div class="col-md-12">
                <textarea class="form-control" type="text" name="competitor_info" placeholder="Competitor Information" style="height: 100px;" ><?php echo $customer_record->competitor_info; ?></textarea>
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="row">
              <div class="col-md-12">
                <label>Discount & Pricing Information:</label> 
              </div>
              <div class="col-md-12">
                <textarea class="form-control" type="text" name="discount_pricing_info" placeholder="Discount & Pricing Information:" style="height: 100px;" ><?php echo $customer_record->discount_pricing_info; ?></textarea>
              </div>
            </div>   
          </div>
      </div> 
      <!-- First form End-->
      
      <div class="col-lg-7">
        <h4 class="mt-0 header-title">Adderss</h4>
        <hr><br>  
       
          <div class="form-group">
            <div class="row">
              <div class="col-md-6">
                <input type="text" name="location" class="form-control" value="<?php echo $customer_address->location; ?>" placeholder="Location Number/ Name" />
              </div>
              <div class="col-md-6">
                <input type="text" name="street_address" class="form-control" value="<?php echo $customer_address->street_address; ?>" placeholder="Street Address" />
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-6">
                <input type="text" name="city" class="form-control" value="<?php echo $customer_address->city; ?>" placeholder="Town / city" />
              </div>
              <div class="col-md-6">
                <input type="text" name="state" class="form-control" value="<?php echo $customer_address->state; ?>" placeholder="State" />
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-6">
                <input type="text" name="zip" class="form-control" value="<?php echo $customer_address->zip; ?>" placeholder="Postal / Zip code" />
              </div>
              <div class="col-md-6">
               <select name="country" class="form-control" >
                  <option value="">Country</option>
                  <option value="india" <?php if($customer_address->country == "india"){ ?> selected="selected" <?php }?>>India</option>
                  <option value="usa" <?php if($customer_address->country == "usa"){ ?> selected="selected" <?php }?>>USA</option>
                  <option value="uk" <?php if($customer_address->country == "uk"){ ?> selected="selected" <?php }?>>UK</option>
                </select>
              </div>
              
            </div>
            <br>
            <div class="row">
              <div class="col-md-6">
               <select name="address_type" class="form-control" >
                  <option value="">Address Type</option>
                  <option value="AE" <?php if($customer_address->address_type == "AE"){ ?> selected="selected" <?php }?>>Invoice Address</option>
                  <option value="VI" <?php if($customer_address->address_type == "VI"){ ?> selected="selected" <?php }?>>Delivery Address</option>
                  <option value="MC" <?php if($customer_address->address_type == "MC"){ ?> selected="selected" <?php }?>>Head Office Location</option>
                </select>
              </div>
            </div> 
            <br>
            <!-- <div class="row">
              <div class="col-md-12">
                <p>If this company has more than one address , please click the button below to<br> add new address.</p>
              </div>
            </div>
            <br>
            <div class="row"> -->
              <!-- <div class="col-md-4">
                <button type="button" class="btn btn-secondary btn-sm waves-effect waves-light savebtn clr address" data-toggle="modal" data-target=".bs-example-modal-center"><i class="fa fa-map-marker"></i>&nbsp&nbsp Add new Address</button><br>
              </div>
            </div> -->
            <br>
            <div class="col-md-12" style="padding: 0px;">
              <div style="width: 100%">
                <iframe width="100%" height="300" src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;q=1%20Grafton%20Street%2C%20Dublin%2C%20Ireland+(My%20Business%20Name)&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"><a href="https://www.maps.ie/map-my-route/">Draw map route</a></iframe>
              </div><br />
            </div>
         
        </div> 
      </div>
      <!-- content -->
    
  </div>

  <div class="card" style="margin-top: 135px;padding:10px !important">
        <div class="card-body">
          <div class="row">
            <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" />
            <div class="col-xl-3 col-md-6 col-sm-6">
            </div>
            <div class="col-xl-3 col-md-6 col-sm-6">
              <button type="button" name="cancel" class="btn btn-secondary btn-sm waves-effect waves-light savebtn clr">Cancel</button>
            </div>
            <div class="col-xl-3 col-md-6 col-sm-6">
              <button type="submit" name="submit" class="btn btn-secondary btn-sm waves-effect waves-light savebtn clr">Save & Continue</button>
            </div>
            <div class="col-xl-3 col-md-6 col-sm-6">
            </div>
          </div>
        </div>
      </div>
    </form>

<div class="modal fade bs-example-modal-center" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header" style="padding: 0.5rem 1rem !important;background: #323a4e;">
        <h5>Add New Enquiry</h5>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
      </div>
      <div class="modal-body">
        <form action="#" method="POST" enctype="multipart/multipart/form-data">
          <div class="row">
            <div class="col-md-4">
              <input type="text" class="form-control"  data-parsley-maxlength="6" placeholder="First Name"/>
            </div>
            <div class="col-md-4">
              <input type="text" class="form-control"  data-parsley-maxlength="6" placeholder="Last Name"/>
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
              <input type="text" class="form-control"  data-parsley-maxlength="6" placeholder="Phone Number"/>
            </div>
            <div class="col-md-4">
              <input type="text" class="form-control"  data-parsley-maxlength="6" placeholder="Contact E-mail"/>
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col-md-8">
              <input type="text" class="form-control"  data-parsley-maxlength="6" placeholder="Address"/>
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
              <input type="text" class="form-control"  data-parsley-maxlength="6" placeholder=""/>
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
              <p><strong>Id Prof.: </strong>(please upload passport or driving licence or NID)</p>
              <button type="button" class="form-control">Upload</button> 
            </div>
            <div class="col-md-6">
              <p><strong>Employee Image :</strong>(please upload recent photo)</p>
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
  .addnewcompny {
    border-radius: 0px !important;
    font-size: 22px !important;
    text-align: center;
    background: #393e46 !important;
    border-color: rgb(34, 40, 49) !important;
}

.trad {
    border-radius: 0px !important;
    background: #393e46 !important;
    border-color: rgb(34, 40, 49) !important;
}
.marbtmm {
    margin-bottom: 0px;
}
</style>