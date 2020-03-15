
<code class="tableData">
    <div class="container-fluid ">
        <main role="main">
            <div class="card-header">
                <h3 class="card-title">Users List</h3>
                <div class="float-right" >
                    <a href="javascript:void(0);" id="add_user" class="btn btn-primary">
                        <span class="fa fa-plus"></span>
                    </a>
                    <a href="javascript:void(0);" id="reload" class="btn btn-primary">
                        <span>&olarr;</span>
                    </a>
                    <a href="javascript:void(0);" id="AddListUsers" class="btn btn-primary">
                        <span>Add Users List</span>
                    </a>
                    <a href="<?php echo base_url().'index.php/Welcome/export_users_list'; ?>" class="btn btn-primary">
                        <span>Export Users List</span>
                    </a>
                </div>
                
            </div>
            <div class="table-responsive">
                
                <table id="example1"  class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nom d'utilisateur</th>
                            <th>mot de pass</th>
                            <th>Etat</th>
                            <th style="text-align: right;">Actions</th>
                        </tr>
                    </thead>
                    <tbody id="show_data"></tbody>
                    <tfoot>
                        <tr>
                            <th>#</th>
                            <th>Nom d'utilisateur</th>
                            <th>Mot de pass</th>
                            <th>Etat</th>
                            <th style="text-align: right;">Actions</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </main>
    </div>
</code>
    <!--form_add  -->
    <form id="form_add">
        <div class="modal fade" id="Modal_Add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add New User</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">User Name</label>
                            <div class="col-md-10">
                                <input type="text" pattern="[a-zA-Z0-9._-]+@[a-zA-Z0-9]{2,}\.[a-z]{2,4}" required="required" name="user_name" id="user_name" class="form-control" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Passeword</label>
                            <div class="col-md-10">
                                <input type="passeword" required="required" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" name="passeword" id="passeword" class="form-control" placeholder="Passeword">
                            </div>
                        </div>
                        <span id="MessageValidation" style="color: red; display: none;">&#10006; password must contain: UPPERCASE letter, lowercase letter, number and At least 8 characters.</span>
                        
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Passeword agin</label>
                            <div class="col-md-10">
                                <input type="passeword" required="required" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" name="passeword1" id="passeword1" class="form-control" placeholder="Passeword agin">
                            </div>
                        </div>
                        <span id="MessageValidation1" style="color: red; display: none;">&#10006; The passeword are not the sames.</span>
                        
                    </div>
                    
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                    <div class="login-box-msg"><code id="MessageSingUp"></code></div>
                        
                </div>
            </div>
        </div>
    </form>
    <!--END MODAL ADD-->

    <!-- MODAL EDIT -->
    <form id="form_update">
        <div class="modal fade" id="Modal_Edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit User</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">User Code</label>
                            <div class="col-md-10">
                                <input type="text" name="user_code_edit" id="user_code_edit" class="form-control" placeholder="User Code" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">User Name</label>
                            <div class="col-md-10">
                                <input type="email" id="user_name_edit" class="form-control" placeholder="Email" required="required" pattern="[a-zA-Z0-9._-]+@[a-zA-Z0-9]{2,}\.[a-z]{2,4}" name="user_name_edit">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Passeword</label>
                            <div class="col-md-10">
                                <input type="text" name="passeword_edit" id="passeword_edit" class="form-control" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" placeholder="Passeword" required="required" >
                            </div>
                        </div>
                        <span id="MessageValidation2" style="color: red; display: none;">&#10006; password must contain: UPPERCASE letter, lowercase letter, number and At least 8 characters.</span>
                        
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Activer</label>
                            <div class="col-md-10">
                                <input type="text" name="activer_edit" id="activer_edit" class="form-control" placeholder="Passeword" required="required">
                            </div>
                        </div>                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                    <div class="login-box-msg"><code id="MessageSingUp1"></code></div>
                </div>
            </div>
        </div>
    </form>
   <!--END MODAL EDIT-->

   <!--MODAL DELETE-->
    <form method="post" id="import_form" enctype="multipart/form-data">
        <div class="modal fade" id="Users_Import" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Import List of Users</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- form import Users List -->
                    <!------------------------------------------------------------------------------->
                        
                        <p><label>Select Excel File</label>
                        <input type="file" name="file" id="file" required accept=".xls, .xlsx" /></p>
                        <br />
                        <input type="submit" name="import" value="Import" class="btn btn-info" />
                            
                    <!------------------------------------------------------------------------------->
                    </div>
                    <div class="modal-footer">
                        <!-- add label messages -->
                    </div>
                </div>
            </div>
        </div>
    </form>
    <!--END MODAL DELETE-->
   <!--MODAL DELETE-->
    <form>
        <div class="modal fade" id="Modal_Delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Delete User</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <strong>Are you sure to delete this record?</strong>
                    </div>
                    <div class="modal-footer">
                        <input type="hidden" name="user_code_delete" id="user_code_delete" class="form-control">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                        <button type="submit" id="btn_delete" class="btn btn-primary">Yes</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <!--END MODAL DELETE-->
    <!-- script add messages form-->
    <script type="text/javascript">
        var inputPassword = document.getElementById('passeword');
        var inputPassword1 = document.getElementById('passeword1');
        var inputPassword2 = document.getElementById('passeword_edit');
        
        var regex=/(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[a-z]).{8,}/;

        function setBoxShadow(){
            if(!inputPassword.value.match(regex)){
                document.getElementById("MessageValidation").style.display="block";
            }else{
                document.getElementById("MessageValidation").style.display="none";
            }
        }
        //on key up
        inputPassword.onkeyup=function(){
            setBoxShadow();
        };

        function setBoxShadow1(){
            if(inputPassword1.value===inputPassword.value){
                document.getElementById("MessageValidation1").style.display="none";
            }else{
                document.getElementById("MessageValidation1").style.display="block";
            }
        }
        //on key up
        inputPassword1.onkeyup=function(){
            setBoxShadow1();
        };
        
        function setBoxShadow2(){
            if(inputPassword2.value.match(regex)){
                document.getElementById("MessageValidation2").style.display="none";
            }else{
                document.getElementById("MessageValidation2").style.display="block";
            }
        }
        inputPassword2.onkeyup=function(){
            
            setBoxShadow2();
        };
    </script>
    
    <!-- script principal qui premet de manupiler les donnée-->
    <script type="text/javascript">
        $(document).ready(function(){
            show_user(); //call function show all user
            //function show all user
            function show_user(){
                if($.fn.DataTable.isDataTable('#example1')){
                    $('#example1').DataTable().destroy();
                    $('#example1 tbody').empty();
                }
                $.ajax({
                    type  : 'post',
                    url   : '<?php echo site_url('Welcome/getAllUsersDATA')?>',
                    async : true,
                    dataType : 'json',
                    success : function(data){
                        var html = '';
                        var i;
                        for(i=0; i<data.length; i++){
                            html += '<tr>'+
                                    '<td>'+data[i].id+'</td>'+
                                    '<td>'+data[i].Username+'</td>'+
                                    '<td>'+data[i].passeword+'</td>'+
                                    '<td>'+data[i].Activer+'</td>'+
                                    '<td style="text-align:right;">'+
                                        '<a href="javascript:void(0);" class="btn btn-info btn-sm item_edit" data-activer_edit="'+data[i].Activer+'" data-user_code="'+data[i].id+'" data-user_name="'+data[i].Username+'" data-passeword="'+data[i].passeword+'"><img src="<?php echo base_url().'Style/dist/img/edit(1).svg'?>"></a>'+' '+
                                        '<a href="javascript:void(0);" class="btn btn-danger btn-sm item_delete" data-user_code="'+data[i].id+'"><img src="<?php echo base_url().'Style/dist/img/trash-2.svg'?>"></a>'+
                                    '</td>'+                                                                                               
                                                                                        
                                    '</tr>';
                        }
                        $('#show_data').html(html);
                        $('#example1').DataTable({
                            "paging": true,
                            "lengthChange": true,
                            "searching": true,
                            "ordering": true,
                            "info": true,
                            "autoWidth": false
                        });
                    }
                });
                
            }
            $('#reload').on('click',function(){
                show_user(); //call function show all user
            });
            $('#add_user').on('click',function(){
                $('#Modal_Add').modal('show');
            });
            
            $("#form_add").submit(function() {
                var user_name = $('#user_name').val();
                var passeword = $('#passeword').val();
                var passeword1 = $('#passeword1').val();
                if(passeword===passeword1){
                    $.ajax({
                        type : "POST",
                        url  : "<?php echo site_url('Welcome/AddUser')?>",
                        dataType : "text",
                        data : {username:user_name, passeword:passeword},
                        success: function(data){
                            if(data){
                                $('[name="user_name"]').val("");
                                $('[name="passeword"]').val("");
                                $('[name="passeword1"]').val("");
                                $('#Modal_Add').modal('hide');
                                show_user();
                                $('#MessageSingUp').html(' ');
                            }else{
                                $('#MessageSingUp').html('<span style="color: red;">&#10006; User Email Is Already Exist </span>');
                            }
                        },
                        error:function(){
                               alert('error de connection');
                        }
                    });
                }
                return false;
            });
            
            //get data for update record
            $('#show_data').on('click','.item_edit',function(){
                var user_code = $(this).data('user_code');
                var user_name = $(this).data('user_name');
                var passeword        = $(this).data('passeword');
                var activer      = $(this).data('activer_edit');
                
                $('#Modal_Edit').modal('show');
                $('[name="user_code_edit"]').val(user_code);
                $('[name="user_name_edit"]').val(user_name);
                $('[name="passeword_edit"]').val(passeword);
                $('[name="activer_edit"]').val(activer);
            });
            //update record to database
             $('#form_update').submit(function(){
                var user_code    = $('#user_code_edit').val();
                var user_name    = $('#user_name_edit').val();
                var passeword    = $('#passeword_edit').val();
                var activer_user = $('#activer_edit').val();
                
                $.ajax({
                    type : "POST",
                    url  : "<?php echo site_url('Welcome/Update')?>",
                    dataType : "JSON",
                    data : {user_code:user_code , user_name:user_name, passeword:passeword ,activer:activer_user},
                    success: function(data){
                        if(data){
                            $('[name="user_code_edit"]').val("");
                            $('[name="user_name_edit"]').val("");
                            $('[name="passeword_edit"]').val("");
                            $('#Modal_Edit').modal('hide');
                            $('#MessageSingUp1').html(' ');
                            show_user();
                        }else{
                            $('#MessageSingUp1').html('<span style="color: red;">&#10006; User Email Is Already Exist </span>');
                        }
                    }
                });
                return false;
            });
            
            //get data for delete record
            $('#show_data').on('click','.item_delete',function(){
                var user_code = $(this).data('user_code');

                $('#Modal_Delete').modal('show');
                $('[name="user_code_delete"]').val(user_code);
            });
            $('#btn_delete').on('click',function(){
                var user_code = $('#user_code_delete').val();
                $.ajax({
                    type : "POST",
                    url  : "<?php echo site_url('Welcome/DeleteUser')?>",
                    dataType : "json",
                    data : {user_code:user_code},
                    success: function(data){
                        $('[name="user_code_delete"]').val("");
                        $('#Modal_Delete').modal('hide');
                        show_user();
                    },
                    error : function(){
                        alert('Connection Error !');
                    }
                });
                return false;
            });
/////////////////////////////////////////////////////////

            $('#AddListUsers').on('click',function(){
                $('#Users_Import').modal('show');
            });
            
            $("#import_form").submit(function() {
                $.ajax({
                    url:"<?php echo base_url(); ?>index.php/Welcome/import_users_list",
                    method:"POST",
                    data:new FormData(this),
                    contentType:false,
                    cache:false,
                    processData:false,
                    success:function(data){
                        $('#file').val('');
                        alert(data);
                        show_user();

                    }
		});
                $('#file').val('');
                $('#Users_Import').modal('hide');
                return false;
                
            });
            
            
        });
    </script>
    
        