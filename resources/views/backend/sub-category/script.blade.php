<script>
    $(document).ready(function(){
        /**==========================
         Form Preloader
         =========================**/
        $(document).on('submit','#sub_category_insert_form',function(){
            $('#sub_category_insert_form').ploading({
                action: "show"
            })
            return true;
        });
        $(document).on('submit','#sub_category_edit_form',function(){
            $('#sub_category_edit_form').ploading({
                action: "show"
            })
            return true;
        });
        $(document).on('submit','#sub_category_delete_form',function(){
            $('#category_delete_form').ploading({
                action: "show"
            })
            //alert(actionUrl);
            return true;
        });
        /**======================================
         Sub Category Edit
         * =====================================**/
        $(document).on('click',".sub_cat_edit_btn",function(e){
            var name =$('#sub_category_name').val($(this).data('name'));
            var id = $('#sub_cat_id').val($(this).data('id'));

            var icon = $('#sub_cat_icon_edit').val($(this).data('iconcode'));
            var itemid = $(this).data('id');
            var catid = $(this).data('cid');
            $('#category_select').val(catid).prop('selected',true);

            var actionUrl = "{{url('/')}}/sub-category/"+itemid;
            $('#sub_category_edit_form').attr('action', actionUrl);
        });

        /**======================================
         Sub Category Delete
         =====================================**/
        $(document).on('click','.sub_cat_delete_btn',function(){
            $('#id').val($(this).data('id'));
        });
        $(document).on('click','#delete_confirm',function(e){
            var id = $('#id').val();
            var actionUrl = "{{url('/')}}/sub-category/"+id;
            //alert(actionUrl);
            $('#sub_category_delete_form').attr('action', actionUrl);
        });
        /* print*Copy*Excel*CSV*PDF genaretor */
        $(document).on('click','#pdf',function(e){
            var data =  $('#table-4').tableExport({type:'pdf',escape:'false'});
            //e.preventDefault();
            $(this).attr('href',data);

        });
    });
</script>