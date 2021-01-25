<script>
    $(document).ready(function(){
        /**==========================
         Upload Image Preview
         =========================**/
        $.uploadPreview({
            input_field: "#category_picture",
            preview_box: "#preview-box"
        });
        $.uploadPreview({
            input_field: "#category_picture_edit",
            preview_box: "#preview-box-edit"
        });
        /**==========================
         Form Preloader
         =========================**/
        $(document).on('submit','#category_insert_form',function(){
            $('#category_insert_form').ploading({
                action: "show"
            })
            return true;
        });
        $(document).on('submit','#category_edit_form',function(){
            $('#category_edit_form').ploading({
                action: "show"
            })
            return true;
        });
        $(document).on('submit','#category_delete_form',function(){
            $('#category_delete_form').ploading({
                action: "show"
            })
            return true;
        });
        /**======================================
         Category Edit
         * =====================================**/
        $(document).on('click',".cat_edit_btn",function(e){
            var name =$('#cat_name').val($(this).data('name'));
            var id = $('#cat_id').val($(this).data('id'));
            var icon = $('#cat_icon_edit').val($(this).data('iconcode'));
            var itemid = $(this).data('id');
            var actionUrl = "{{url('/')}}/category/"+itemid;
            //alert(actionUrl);
            $('#category_edit_form').attr('action', actionUrl);
        });

        /**======================================
         Category Delete
         =====================================**/
        $(document).on('click','.cat_delete_btn',function(){
            $('#id').val($(this).data('id'));
        });
        $(document).on('click','#delete_confirm',function(e){
            var id = $('#id').val();
            var actionUrl = "{{url('/')}}/category/"+id;
            //alert(actionUrl);
            $('#category_delete_form').attr('action', actionUrl);
        });
    });








</script>

