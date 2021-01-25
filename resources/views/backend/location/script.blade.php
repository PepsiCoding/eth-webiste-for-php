<script>
    $(document).ready(function(){
        /**==========================
         Form Preloader
         =========================**/
        $(document).on('submit','#locatin_entry_form',function(){
            $('#locatin_entry_form').ploading({
                action: "show"
            })
            return true;
        });
        $(document).on('submit','#location_edit_form',function(){
            $('#location_edit_form').ploading({
                action: "show"
            })
            return true;
        });
        $(document).on('submit','#location_delete_form',function(){
            $('#location_delete_form').ploading({
                action: "show"
            })
            return true;
        });
        /**======================================
         Location Edit
         * =====================================**/
        $(document).on('click',".location_edit_btn",function(e){
            var name =$('#loc_name').val($(this).data('name'));
            var itemid = $(this).data('id');
            var actionUrl = "{{url('/')}}/location/"+itemid;
            //alert(actionUrl);
            $('#location_edit_form').attr('action', actionUrl);
        });

        /**======================================
         Location Delete
         =====================================**/
        $(document).on('click','.location_delete_btn',function(){
            $('#id').val($(this).data('id'));
        });
        $(document).on('click','#delete_confirm',function(e){
            var id = $('#id').val();
            var actionUrl = "{{url('/')}}/location/"+id;
            //alert(actionUrl);
            $('#location_delete_form').attr('action', actionUrl);
        });
        /* print*Copy*Excel*CSV*PDF genaretor */
        $(document).on('click','#pdf',function(e){
            var data =  $('#table-4').tableExport({type:'pdf',escape:'false'});
            //e.preventDefault();
            $(this).attr('href',data);

        });
    });
</script>