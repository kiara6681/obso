<?php

class Order extends CI_Controller {

    public function __construct(){
        parent::__construct();
        check_login_user();
       $this->load->model('common_model');
       $this->load->model('login_model');
    }

     
    public function quotation($id){
        $data['enquiry_id']=$id;
        $data['invoice']=$this->common_model->getInvoiceInquiry($id);
        $data['quote']=$this->common_model->getEnquiryInfoById($id);
        $data['enquiry']=$this->common_model->getEnquiryById($id);
        $data['invoice_no']=$this->common_model->getInvoiceNo();
        $data['page_title'] = 'Quotation';
        $this->load->view('admin/layout/header');
        $this->load->view('admin/order/quotation',$data);
        $this->load->view('admin/layout/footer');

    }

     public function pdf(){
         if($this->input->post('invoice_id')){ 
        $id=$this->input->post('invoice_id');
        $data['inovice']=$this->common_model->getInvoiceDetail($id);
        $html = $this->load->view('admin/order/pdf', $data, true);
        $pdfFilePath = time().".pdf";
        $this->load->library('m_pdf');
        $this->m_pdf->pdf->WriteHTML($html);
        $this->m_pdf->pdf->Output($pdfFilePath, "D");
      }
      exit();

    }
    public function sendMail()
    {
      if($this->input->post('invoice_id')){ 
        $id=$this->input->post('invoice_id');
        $invoice=$this->common_model->getInvoiceDetail($id);
        $data['inovice']=$invoice;
        $inquery=$this->common_model->getInquiry($invoice->enquiry_id);
        $tomail=$inquery->email;
        $html=$this->load->view('admin/order/pdf',$data,true);
        $this->load->library('email');
        // $config = array();
        // $config['protocol'] = 'smtp';
        // $config['smtp_host'] = 'mail.bitzenith.com';
        // $config['smtp_user'] = 'virendra@bitzenith.com';
        // $config['smtp_pass'] = '*~8Hs%%TN!?,';
        // $config['mailtype'] = 'html';
        // $config['charset'] = 'iso-8859-1';
        // $config['wordwrap'] = TRUE;
        // $config['smtp_port'] = 465;
        // $this->email->initialize($config);
        $this->email->set_newline("\r\n");
        $this->email->from('virendra@bitzenith.com', 'Identification');
        $this->email->to('sakhawat862@gmail.com');
        $this->email->subject('Invoice');
        $this->email->message($html);
        if($this->email->send())
       {
        echo 'Email sent.'; 
       }
      else
      {
       show_error($this->email->print_debugger());
      }
        
      }
      redirect('admin/enquiry/all_enquiry_list','refresh');      
    }

    function store()
    {
      $id=$this->input->post('orderno');
      $user_id=$this->session->userdata('id');
      if($user_id<=0)
      die();
      $quentity=0;
      if(isset($_POST['prod_quantity']))
      foreach ($_POST['prod_quantity'] as $quevalue) {
          $quentity+=$quevalue;
      }
      $supplier=0;
      if(isset($_POST['total_supplier']))
      foreach ($_POST['total_supplier'] as $supvalue) {
          $supplier+=$supvalue;
      }  
      $inquiry_id=$this->input->post('enquiry_id');
      $insert=[
            'warranty'=>$this->input->post('warranty'),
            'company_id'=>$this->input->post('company_id'),
            'enquiry_id'=>$inquiry_id,
            'note'=>$this->input->post('note'),
            'vat'=>$this->input->post('vat'),
            'vat_amount'=>(float)$this->input->post('vat-amount'),
            'discount'=>(float)$this->input->post('discount'),
            'discount_amount'=>(float)$this->input->post('discount-amount'),
            'created_by'=>$user_id,
            'prod_quentity'=>$quentity,
            'total_supplier'=>$supplier,
            'total'=>(float)$_POST['total-amount'],
            'net_total'=>(float)$_POST['netTotal'],
            'status' => 'draft',
      ];
      $status='draft';
      $this->common_model->updateInquery($inquiry_id,$status);
      if($this->common_model->check_invoice($id))
      $this->common_model->update($insert,$id,'invoice');  
      else
      $id=$this->common_model->insert($insert,'invoice'); 
      $itemids=$_POST['item']['id'];
      $this->common_model->whereNotInDelete($itemids,'invoice_items',['invoice_id'=>$id]);
      foreach ($itemids as $key => $itemid) {
      if($itemid){ 
      if($_POST['item']['status'][$key]=='edit'){
      $this->common_model->delete($itemid,'invoice_items');  
      }   
      if($_POST['item']['status'][$key]=='save'){  
      $update=[
            'invoice_id'  =>$id,
            'supp_id'      =>$_POST['item']['supplier'][$key],
            'prod_id'      =>$_POST['item']['prodid'][$key],
            'inqu_quentity_id'   =>$_POST['item']['enquiry'][$key],
            'prod_code'    =>$_POST['item']['stock_number'][$key],
            'quentity'     =>$_POST['item']['total_qty'][$key],
            'unite_price'  =>(float)$_POST['item']['web_price'][$key],
            'delivery_time'=>$_POST['item']['lead_time'][$key],
            'selling_price'=>(float)$_POST['item']['sellingprice'][$key],
            'delivery_fee' =>$_POST['item']['deliveryfee'][$key],
            'total_price'  =>(float)$_POST['item']['total'][$key],
            'currency'     =>'$',
            'created_by'   =>$user_id,
      ] ;
      $this->common_model->update($update,$itemid,'invoice_items');
      }
      }
      }
      
    redirect('admin/enquiry/all_enquiry_list','refresh');
    }
    public function ajaxStore()
    {
      $id=$this->input->post('orderno');
      $user_id=$this->session->userdata('id');
      if($user_id<=0)
      die();
      $quentity=0;
      if(isset($_POST['prod_quantity']))
      foreach ($_POST['prod_quantity'] as $quevalue) {
          $quentity+=$quevalue;
      }
      $supplier=0;
      if(isset($_POST['total_supplier']))
      foreach ($_POST['total_supplier'] as $supvalue) {
          $supplier+=$supvalue;
      }  
      $insert=[
            'company_id'=>$this->input->post('company_id'),
            'enquiry_id'=>$this->input->post('enquiry_id'),
            'warranty'=>$this->input->post('warranty'),
            'note'=>$this->input->post('note'),
            'vat'=>$this->input->post('vat'),
            'vat_amount'=>(float)$this->input->post('vat-amount'),
            'discount'=>(float)$this->input->post('discount'),
            'discount_amount'=>(float)$this->input->post('discount-amount'),
            'created_by'=>$user_id,
            'prod_quentity'=>$quentity,
            'total_supplier'=>$supplier,
            'total'=>(float)$_POST['total-amount'],
            'net_total'=>(float)$_POST['netTotal'],
      ];
      if($this->common_model->check_invoice($id))
      $this->common_model->update($insert,$id,'invoice');  
      else
      $id=$this->common_model->insert($insert,'invoice');
      $enquiryid=$this->input->post('enquiry_id');
      $this->common_model->updateInquery($enquiryid,'confirm'); 
      $itemids=$_POST['item']['id'];
      $this->common_model->whereNotInDelete($itemids,'invoice_items',['invoice_id'=>$id]);
      foreach ($itemids as $key => $itemid) {
      if($itemid){
      if($_POST['item']['status'][$key]=='edit'){
      $this->common_model->delete($itemid,'invoice_items');  
      } 
      if($_POST['item']['status'][$key]=='save'){
      
      $update=[
            'invoice_id'  =>$id,
            'supp_id'      =>$_POST['item']['supplier'][$key],
            'prod_id'      =>$_POST['item']['prodid'][$key],
            'inqu_quentity_id'   =>$_POST['item']['enquiry'][$key],
            'prod_code'    =>$_POST['item']['stock_number'][$key],
            'quentity'     =>$_POST['item']['total_qty'][$key],
            'unite_price'  =>(float)$_POST['item']['web_price'][$key],
            'delivery_time'=>$_POST['item']['lead_time'][$key],
            'selling_price'=>(float)$_POST['item']['sellingprice'][$key],
            'delivery_fee' =>$_POST['item']['deliveryfee'][$key],
            'total_price'  =>(float)$_POST['item']['total'][$key],
            'currency'     =>'$',
            'created_by'   =>$user_id,
      ] ;
      $this->common_model->update($update,$itemid,'invoice_items');
      }
      }
    }
    $data['inovice']=$this->common_model->getInvoiceDetail($id); 
    return  $this->load->view('admin/model/invoice_model',$data);
   }
    public function getSupplier()
    {
        $id=$this->input->post('supplier');
        $supplier=$this->common_model->get_where_array($id,'supplier_stock');
        echo json_encode($supplier);
        exit();
    }
    public function addSupplier()
    {
      $part=$this->input->post('itemcode');
      $enquiry=$this->input->post('enquiry');
      $prodid=$this->input->post('prodid');
      $part=$this->common_model->getProductInfoByPartSupplier($part);
      $html='';
      $html.='<tr class="last">';
      $html.='<td  scope="row"><span></span>';
      $html.='<div class="form-group">';
      $html.='<select name="item[supplier][]" class="form-control select-supplier">';
      $html.='<option>---select---</option>';
      foreach ($part as $value) { 
      $html.='<option value="'.$value['id'].'">'.$value['supplier_name'].'</option>';
      }   
      $html.='</select>';
      $html.='</div>';
      $html.='</td>';
      $html.='<td><span></span>';
      $html.='<input type="text" class="form-control product-code" name="item[stock_number][]" value="" readonly>';
      $html.='</td>';
      $html.='<td><span></span>';
      $html.='<input type="number" class="form-control total_qty calculat_tatal" name="item[total_qty][]" value="">';
      $html.='</td>';
      $html.='<td><span></span>';
      $html.='<input type="number" class="form-control price" name="item[web_price][]" value="" readonly>';
      $html.='</td>';
      $html.='<td><span></span>';
      $html.='<div class="form-group">';
      $html.='<select name="item[lead_time][]" class="form-control delivery">';
      $html.='<option value="">Select Lead Time</option>';
      $html.='<option value="Same Day">Same Day</option>';
      $html.='<option value="Next Day">Next Day</option>';
      $html.='<option value="2 Days">2 Days</option>';
      $html.='<option value="Express Available please Enquire">Express Available please Enquire</option>';
      $html.='</select>';
      $html.='</div>';
      $html.='</td>';
      $html.='<td><span></span><input type="number" class="form-control calculat_tatal selling-price" name="item[sellingprice][]" value="Selling Price" ></td>';
      $html.='<td><span></span>';
      $html.='<input type="number" class="form-control calculat_tatal delivery-fee" name="item[deliveryfee][]" value="Delivery Free">';
      $html.='</td>';
      $html.='<td><span></span>';
      $html.='<input type="number" class="form-control total-price" name="item[total][]" value="Total Price" readonly>';
      $html.='<input type="hidden" class="itemid" name="item[id][]">';
      $html.='<input type="hidden" name="item[enquiry][]" value="'.$enquiry.'" class="enquiry">';
      $html.='<input type="hidden" name="item[prodid][]" class="product" value="'.$prodid.'">';
      $html.='<input type="hidden" name="item[status][]" class="status" value="edit">';
      $html.='</td>';
      $html.='<td class="abc action" style="display: none">';
      $html.='<div class="testtt" id="menu1" data-toggle="dropdown"></div>';
      $html.='<ul class="dropdown-menu" role="menu" aria-labelledby="menu1" >';
      $html.='<li role="presentation"><a role="menuitem" tabindex="-1" href="#" class="action-btn-edit">Edit</a></li>';
      $html.='<li role="presentation"><a role="menuitem" tabindex="-1" href="#" class="action-btn-delete">Delete</a></li>';

      $html.='</ul>';
      $html.='</td>';
      $html.='</tr>';
      echo $html; exit();
    }
    public function itemStore()
    {
      $table='invoice_items';
      $user_id=$this->session->userdata('id');
      if($user_id<=0)
      die();
      $save=[
            'invoice_id'  =>$this->input->post('order_id'),
            'supp_id'      =>$this->input->post('suplierid'),
            'prod_id'      =>$this->input->post('prod_id'),
            'inqu_quentity_id'   =>$this->input->post('enquery_id'),
            'prod_code'    =>$this->input->post('prod_code'),
            'quentity'     =>$this->input->post('quentity'),
            'unite_price'  =>$this->input->post('price_unite'),
            'delivery_time'=>$this->input->post('delivery_time'),
            'selling_price'=>$this->input->post('sellingprice'),
            'delivery_fee' =>$this->input->post('delivery_cost'),
            'total_price'  =>$this->input->post('total_price'),
            'currency'     =>'$',
            'created_by'   =>$user_id,
      ] ;
      if($this->input->post('itemid')){
      $id=$this->input->post('itemid');
      $this->common_model->update($save,$id,$table);  
      }else{  
      $id=$this->common_model->insert($save,$table);
      }
      if($id>0)
      $response=[
        'itemid'=>$id,
        'message'=>'success data stored',
      ];
      else 
      $response=[
        'message'=>'something went wrong!',
      ];  
      echo json_encode($response);
      exit();
    }
     function deleteItem($value='')
    {
      $table='invoice_items';
      $user_id=$this->session->userdata('id');
      if($user_id<=0)
      die();
      if($this->input->post('itemid')){
      $id=$this->input->post('itemid');
      if($this->common_model->delete($id,$table))
      $response=[
        'itemid'=>$id,
        'message'=>'delete successfuly!',
      ];
    } else{ 
      $response=[
        'message'=>'something went wrong!',
      ];  
    }   
      echo json_encode($response);
      exit();
    }

}