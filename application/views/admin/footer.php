    <script type="text/javascript" src="<?php echo base_url('assets/admin/');?>assets/js/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/admin/');?>assets/js/jquery-ui/jquery-ui.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/admin/');?>assets/js/popper.js/popper.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/admin/');?>assets/js/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/admin/');?>assets/pages/widget/excanvas.js"></script>
    <!-- waves js -->
    <script src="<?php echo base_url('assets/admin/');?>assets/pages/waves/js/waves.min.js"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="<?php echo base_url('assets/admin/');?>assets/js/jquery-slimscroll/jquery.slimscroll.js"></script>
    <!-- modernizr js -->
    <script type="text/javascript" src="<?php echo base_url('assets/admin/');?>assets/js/modernizr/modernizr.js"></script>
    <!-- slimscroll js -->
    <script type="text/javascript" src="<?php echo base_url('assets/admin/');?>assets/js/SmoothScroll.js"></script>
    <script src="<?php echo base_url('assets/admin/');?>assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- Chart js -->
    <script type="text/javascript" src="<?php echo base_url('assets/admin/');?>assets/js/chart.js/Chart.js"></script>
    <!-- amchart js -->
    <script src="../../www.amcharts.com/lib/3/amcharts.js"></script>
    <script src="<?php echo base_url('assets/admin/');?>assets/pages/widget/amchart/gauge.js"></script>
    <script src="<?php echo base_url('assets/admin/');?>assets/pages/widget/amchart/serial.js"></script>
    <script src="<?php echo base_url('assets/admin/');?>assets/pages/widget/amchart/light.js"></script>
    <script src="<?php echo base_url('assets/admin/');?>assets/pages/widget/amchart/pie.min.js"></script>
    <script src="../../www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
    <!-- menu js -->
    <script src="<?php echo base_url('assets/admin/');?>assets/js/pcoded.min.js"></script>
    <script src="<?php echo base_url('assets/admin/');?>assets/js/vertical-layout.min.js"></script>
    <!-- custom js -->
    <script type="text/javascript" src="<?php echo base_url('assets/admin/');?>assets/pages/dashboard/custom-dashboard.js"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/admin/');?>assets/js/script.js"></script>
    <script src="https://cdn.ckeditor.com/4.15.0/standard/ckeditor.js"></script>
     <script>
         CKEDITOR.replace( 'responsibilies' );
         CKEDITOR.replace( 'min_qualification' );
         CKEDITOR.replace( 'preferred_qualification' );
    </script>
    <script type="text/javascript">
        var cat_id=document.getElementById('cat_id');
            cat_id.addEventListener('change',function(){
                cat_id=document.getElementById('cat_id').value;
                sub_cat_id=document.getElementById('sub_cat_id');
                $.ajax({
                    url:"<?php echo base_url('admin/getSubCategory');?>",
                    method:"POST",
                    data:{cat_id:cat_id},
                    success:function(data)
                    {
                        sub_cat_id.innerHTML=data;
                        console.log(data);
                    }
                });
            });
        const getCampaignData = () =>{
            var campaign_table=document.getElementById('campaign_table');
            $.ajax({
                url:"<?php echo base_url('admin/getCampaignData');?>",
                method:"GET",
                beforeSend: function() {
                campaign_table.innerHTML='<tr><td class="text-success text-center" colspan="5">Data loading please wait.</td></tr>';
                },
                success:function(data)
                {
                    campaign_table.innerHTML=data;
                }
            });
        }
        getCampaignData();
        const showDeletePopup = (id) =>
        {
            
            var res=confirm('Are you sure want to delete?');
            if(res)
            {
            $.ajax({
                url:"<?php echo base_url('admin/deleteCampaignData');?>",
                method:"post",
                data:{id:id},
                success:function(data)
                {
                    if(data)
                    {
                       getCampaignData(); 
                    }
                }
            });
            }
            else
            {
                return false;
            }
        }
        
    </script>
</body>
</html>