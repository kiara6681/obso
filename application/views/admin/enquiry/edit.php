<?php

$allcompanies = $this->common_model->getAllCompanies();
$industry = $this->common_model->getCompanyById($data->company_id);
$contactInfo = $this->common_model->getContactById($data->company_id);

$allQty = $this->common_model->getEnquiryInfoById($data->id);

?>
<?php $this->load->helper('form'); ?>

  <?php echo form_open(base_url() . 'admin/enquiry/update' , array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data')); ?>


  <div class="row">
  <div class="col-md-8">
  <div class="row">
  <div class="col-md-12">
  <label>COMPANY NAME:</label>
  <input type="hidden" name="enquiry[id]" value="<?= $data->id ?>">
  <?php if(!empty($data->company_id)): ?>
  <select name="enquiry[company_id]" data-ajax="company" class="form-control ajax-change" required>
  <option value="">Select Company</option>
  <?php foreach ($allcompanies as $allcompany){ ?>
    <option value="<?php echo $allcompany['id']; ?>" <?= ($allcompany['id'] == $data->company_id) ? "selected ": "";  ?> ><?php echo $allcompany['company_name']; ?></option>
    <?php } ?>
    </select>
  <?php else: ?>

    <input type="text" class="form-control" name="enquiry[company_name_front]" value="<?php echo $data->company_name_front ?>">
  <?php endif; ?>
    </div>
    </div>
    <div class="row">
    <?php if(!empty($data->contact_id)): ?>
    <div class="col-md-6">
    <label>CONTACT NAME:</label>
    <select name="enquiry[contact_id]" data-ajax="contact" class="form-control contact-select ajax-change" required>
    <option value="">Select Contact</option>
    <?php
    foreach ($contactInfo as $key => $contact) {
      $selected = ($contact['id'] == $data->contact_id) ? "selected ": "";
        echo $Contacthtml = "<option value='".$contact['id']."' ".$selected.">".$contact['fname']. " " .$contact['fname']." </option>";
    }
    ?>
    </select>
    </div>
  <?php endif; ?>
    
    <div class="col-md-6">
    <label>PHONE NUMBER:</label>
    <input type="text" name="enquiry[number]" value="<?= $data->number ?>"  class="form-control ajax-phone" placeholder="" />
    </div>
    
    </div>
    <?php
      foreach ($allQty as $aq => $allqt):
    ?>
    <div class="row clone-row">
    
      <div class="col-md-3">
        <label>QTY:</label>
        <input type="hidden" class="edit-qty-remove input-three" name="qty[<?= $aq ?>][id]" value="<?= $allqt['id'] ?>">
        <input type="text" name="qty[<?= $aq ?>][qty]" value="<?= $allqt['qty'] ?>"  class="form-control input-one" placeholder="" />
      </div>
    
      <div class="col-md-7">
        <label>PART #:</label>
        <input type="text" name="qty[<?= $aq ?>][part]" value="<?= $allqt['part'] ?>" class="form-control input-two" placeholder="" />
      </div>
      <div class="col-md-2" style="margin-top: 33px;">
        <label>&nbsp;</label>
          <a href="#;" onclick="deleteQty(<?= $allqt['id'] ?>)" class="remove-clone">
            <i class="fa fa-trash"></i>
          </a>
      </div>
    </div>
    <?php endforeach; ?>
    <br>
    <div class="row">
    <div class="col-md-5">
    <button type="button" class="btn btn-primary btn-lg btn-block waves-effect waves-light btn-radius clone-row-btn" >Add New Part</button>
    </div>
    </div>
    
    
    
    </div>
    
    
    
    <div class="col-md-4">
    <?php if(!empty($data->industry_id)): ?>
    <div class="row">
      
    <div class="col-md-12">
    <label>INDUSTRY SECTOR:</label>
    <select name="enquiry[industry_id]" class="form-control industry-select" required>
    <option value="">Select Industry</option>
    <option value="<?= $data->industry_id ?>" selected><?= $industry->industry_sector ?></option>
    </select>
    </div>
    </div>
      <?php endif; ?>
    <div class="row">
    <div class="col-md-12">
    <label>CONTACT EMAIL:</label>
    <input type="text" name="enquiry[email]" value="<?= $data->email ?>" class="form-control ajax-email" placeholder="" />
    </div>
    </div>
    <?php if(!empty($data->company_id)): ?>
    <div class="row">
    <div class="col-md-12">
    <label>LEAD TIME REQUESTED:</label>
    <input type="text" name="enquiry[lead1]" value="<?= $data->lead1 ?>"  class="form-control" placeholder="" />
    </div>
    </div>
    <?php endif; ?>
    <div class="row">
    <div class="col-md-12">
    <label>LEAD TIME REQUESTED:</label>
    <textarea type="text" name="enquiry[lead2]" class="form-control" placeholder="Notes" height="100px;"><?= $data->lead2 ?></textarea>
    </div>
    </div>
    
    </div>
    
    </div>
    <div class="row" style="margin-top: 50px;">
    <div class="col-md-3"></div>
    <div class="col-md-3">
    
    <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" />
    
    <button type="button" data-dismiss="modal" class="btn btn-secondary btn-sm waves-effect waves-light savebtn clr" >Cancel</button>
    
    
    </div>
    <div class="col-md-3">
    
    <button type="submit" name="submit" class="btn btn-secondary btn-sm waves-effect waves-light savebtn clr" >Save</button>
    
    </div>
    <div class="col-md-3"></div>
  
  </div>
  <?php echo form_close();?>