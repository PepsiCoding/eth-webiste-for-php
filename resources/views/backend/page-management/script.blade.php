

<script>
    $(document).ready(function(){
        /**==================================
         * Create New Page
         * ===============================**/
        $(document).on('click','#create_page_btn',function(){
            var pageName = $('#page_name_modal').val();
            $.ajax({
                type:"POST",
                url: "{{route('page-management.store')}}",
                data:{
                    'name': pageName,
                    '_token': $('input[name=_token]').val()
                },
                success:function(data){
                    swal("Page Created Successfully","Enjoy!!", "success");
                    $('#page_data_table').append('<tr role="row" class="odd" id="table-row-"> <td class="sorting_1">'+data+'</td> <td>'+pageName+'</td><td> <a href="#" class="btn yellow page_edit_btn btn-xs" data-id="'+data+'" data-name="'+pageName+'" data-toggle="modal" data-target="#page_edit"' +
                        '><i class="fa fa-edit"></i> Edit</a> <a href="#" class="btn red page_delete_btn btn-xs" data-toggle="modal" data-id="'+data+'" data-target="#page_delete"><i class="fa fa-trash"></i> Delete</a> <a href="#" class="btn blue cat_delete_btn btn-xs" data-toggle="modal"  data-target="#category-delete"><i class="fa fa-info-circle"></i> Manage</a> </td>' +
                        '</tr>');
                    $('#input-box').append('<div class="form-group clearfix">' +
                        '<label class="col-md-6 control-label" id="page_label-'+data+'">'+pageName+'</label>' +
                        '<div class="col-md-3">' +
                        '<div class="input-group">' +
                        '<input type="checkbox" name="page_status" class="make-switch" data-size="small" data-on-color="success" data-off-color="danger">' +
                        '</div>' +
                        '</div>' +
                        '<div class="col-md-3">' +
                        '<div class="input-group">' +
                        '<input type="number" name="menu_order" placeholder="1">' +
                        '</div>' +
                        '</div>'+
                        '</div>');
                    location.reload();
                }
            });
        });

        /**=============================================
         * Page Edit
         * ==========================================**/
        $(document).on('click','.page_edit_btn',function(){
            $('#page_edit_id').val($(this).data('id'));
            $('#page_edit_name').val($(this).data('name'));
        });

        /**==========================================
         * Ajax Request for Page Name Update
         * =======================================**/
        $(document).on('click','#edit_page_confirm_btn',function(){
            var pageName = $('#page_edit_name').val();
            var id = $('#page_edit_id').val();
            //$('#table-row-'+id).remove();
            $.ajax({
                type:"POST",
                url: "{{url('/')}}/page-management/"+id,
                data:{
                    'id':id,
                    'name': pageName,
                    '_method': $('input[name=_method]').val(),
                    '_token' : $('input[name=_token]').val()

                },
                success:function(data){
                    swal(data,"Enjoy!!", "success");
                    //console.log(data);
                    $('#page_name-'+id).text(pageName);
                    $('#page_edit_btn_'+id).data("name",pageName);
                }
            });
        });

        /**=============================================
         * Page Delete
         * ==========================================**/
        $(document).on('click','.page_delete_btn',function(){
            $('#page_delete_id').val($(this).data('id'));
        });

        /**==========================================
         * Ajax Request for Page Delete
         * =======================================**/
        $(document).on('click','#page_delete_confirm',function(){
            var id = $('#page_delete_id').val();
            var actionUrl = "{{url('/')}}/page-management/"+id;
            //alert(actionUrl);
            $('#page_delete_form').attr('action', actionUrl);

        });
    });
</script>
