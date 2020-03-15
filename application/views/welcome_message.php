    


    <?php $this->load->view('Include/NavBar_view'); ?>
    <?php $this->load->view('Include/Manu_view'); ?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content of Main -->
        <div id="pages_uses" >
            
        </div>
    </div>
    
    
    
    <script type="text/javascript" src="<?php echo base_url().'Style/docs/assets/js/jquery-3.2.1.js'?>"></script>
    <script>
        $('.classBtn').on('click',function(){
            changePages(this.id);//call function show all product
        });
        //function show all product
        function changePages(btn){
            
            var urlbtn='';
            var existId=false;
            if(btn==='register_user'){                
                urlbtn='<?php echo site_url('Welcome/showRegisterPage');?>';
                existId=true;
            }else if (btn==='get_all_users'){
                urlbtn='<?php echo site_url('Welcome/getAllUsers');?>';
                existId=true;
            }else if (btn==='getTable'){
                urlbtn='<?php echo site_url('Welcome/Test');?>';
                existId=true;
            }else if (btn==='import_students_list'){
                urlbtn='<?php echo site_url('Welcome/import_students_list');?>';
                existId=true;
            }
            
            if(existId){
                $.ajax({
                    type  : 'ajax',
                    url   : urlbtn,
                    async : true,
                    dataType : 'html',
                    success : function(data){
                        $('#pages_uses').html(data);
                    },
                    error : function(){
                        alert('error! ');
                    }
                });
            }else{ alert('button not exist'); }
        }   
    
    
    </script>
    <?php $this->load->view('Include/footer'); ?>
    
  