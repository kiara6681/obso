                <footer class="footer">
                    <div class="col-md-12" style="text-align: left;">
                    Copyrights © 2019 Bitzenith. <span class="d-none d-sm-inline-block"> 
                 All rights reserved</span>.
                 </div>
                </footer>

            </div>

            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->

        </div>
        <!-- END wrapper -->

        <!-- jQuery  -->
        <script src="<?php echo base_url();?>obso/assets/js/jquery.min.js"></script>
        <script src="<?php echo base_url();?>obso/assets/js/bootstrap.bundle.min.js"></script>
        <script src="<?php echo base_url();?>obso/assets/js/metisMenu.min.js"></script>
        <script src="<?php echo base_url();?>obso/assets/js/jquery.slimscroll.js"></script>
        <script src="<?php echo base_url();?>obso/assets/js/waves.min.js"></script>

        <!-- Chart JS -->
        <script src="<?php echo base_url();?>obso/assets/plugins/chart.js/chart.min.js"></script>
        <script src="<?php echo base_url();?>obso/assets/pages/chartjs.init.js"></script>    

        <!--Chartist Chart-->
        <script src="<?php echo base_url();?>obso/assets/plugins/chartist/js/chartist.min.js"></script>
        <script src="<?php echo base_url();?>obso/assets/plugins/chartist/js/chartist-plugin-tooltip.min.js"></script>

        <!--Chartist Chart-->
        <script src="<?php echo base_url();?>obso/assets/plugins/chartist/js/chartist.min.js"></script>
        <script src="<?php echo base_url();?>obso/assets/plugins/chartist/js/chartist-plugin-tooltip.min.js"></script>
        <script src="<?php echo base_url();?>obso/assets/pages/chartist.init.js"></script>
        

        <!-- peity JS -->
        <script src="<?php echo base_url();?>obso/assets/plugins/peity-chart/jquery.peity.min.js"></script>

        <script src="<?php echo base_url();?>obso/assets/pages/dashboard.js"></script>

        <!-- Jquery-Ui -->
        <script src="<?php echo base_url();?>obso/assets/plugins/jquery-ui/jquery-ui.min.js"></script>
        <script src="<?php echo base_url();?>obso/assets/plugins/moment/moment.js"></script>
        <script src='<?php echo base_url();?>obso/assets/plugins/fullcalendar/js/fullcalendar.min.js'></script>
        <script src="<?php echo base_url();?>obso/assets/pages/calendar-init.js"></script> 

        <script src="<?php echo base_url();?>obso/assets/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
        <script src="<?php echo base_url();?>obso/assets/pages/lightbox.js"></script> 

        <!-- Bootstrap rating js -->
        <script src="<?php echo base_url();?>obso/assets/plugins/bootstrap-rating/bootstrap-rating.min.js"></script>
        <script src="<?php echo base_url();?>obso/assets/pages/rating-init.js"></script>

        <!-- DatePicker -->
        <script src="<?php echo base_url();?>assets/datepicker/bootstrap-datetimepicker.min.js"></script>

        <!-- App js -->
        <script src="<?php echo base_url();?>obso/assets/js/app.js"></script>

        <script>

                $(document).ready(function(){
                    $('.datepicker').datetimepicker({
                        format: 'YYYY-MM-DD',
                    });

                    $(document).on('click', '.clone-row-btn',function(){
                        var clone = $('.clone-row:last').clone();

                        clone.find('.input-one,.input-two').val("");
                        clone.find('.edit-qty-remove').remove();
                        
                        $('.clone-row:last').after(clone);
                        $('.clone-row').each(function(i,data){
                            var cur = $(this);
                            cur.find('.input-one').attr('name', 'qty['+i+'][qty]');
                            cur.find('.input-two').attr('name', 'qty['+i+'][part]');
                            cur.find('.input-three').attr('name', 'qty['+i+'][id]');
                            
                        });

                    }); 

                    $('.modal-body').on('click','.remove-clone', function(){
                        if($('.clone-row').length > 1){
                            $(this).parents('.clone-row').remove();
                        }
                        
                    });

                    /*$(document).on('change','.common-filter' ,function(){
                        
                        var url = $(this).val();

                        alert($('#ddlCreditCardType').val());

                        window.location.href = url;
                    });

                    $(document).on('change', '#ddlCreditCardType', function(){

                        alert($(this).val());
                        alert($('.common-filter').val());

                        alert($('#sort_by').val());

                    });*/

                    $(document).on('change','.ajax-change',function(){
                        var val = $(this).val();

                        var ajaxType = $(this).data('ajax');

                        $('.ajax-phone').val("");
                        $('.ajax-number').val("");
                        $.ajax({
                            type: 'get',
                            url: "<?php echo base_url() ?>admin/enquiry/getIndustry",
                            data: {id:val,type: ajaxType},
                            success: function(result){
                                if(result != ""){

                                    var obj = JSON.parse(result);

                                    if(obj.company){
                                        $(".industry-select").html(obj.company);
                                    }
                                    if(obj.contact){
                                        $(".contact-select").html(obj.contact);
                                    }

                                    if(obj.number != ""){
                                        $('.ajax-phone').val(obj.number);
                                    }
                                    if(obj.email != ""){
                                        $('.ajax-email').val(obj.email);
                                    }
                                }
                            }
                        });
                    });
                });

        </script>

    </body>

</html>