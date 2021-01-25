<script>
    $(document).ready(function(){
        /**==========================
         Form Preloader
         =========================**/
        $(document).on('submit','#currency_entry_form',function(){
            $('#currency_entry_form').ploading({
                action: "show"
            })
            return true;
        });
        $(document).on('submit','#currency_edit_form',function(){
            $('#currency_edit_form').ploading({
                action: "show"
            })
            return true;
        });
        $(document).on('submit','#currency_delete_form',function(){
            $('#currency_delete_form').ploading({
                action: "show"
            })
            return true;
        });
        /**======================================
         Currency Edit
         * =====================================**/
        $(document).on('click',".currency_edit_btn",function(){

            var name =$('#currency_name_edit').val($(this).data('name'));

            var rate =$('#currency_rate_edit').val($(this).data('rate'));

            var itemid = $(this).data('id');

            var actionUrl = "{{url('/')}}/currency/"+itemid;
            //alert(actionUrl);
            $('#currency_edit_form').attr('action', actionUrl);
        });
        /**======================================
         Currency Delete
         =====================================**/
        $(document).on('click','.currency_delete_btn',function(){
            $('#id').val($(this).data('id'));
        });
        $(document).on('click','#delete_confirm',function(e){
            var id = $('#id').val();
            var actionUrl = "{{url('/')}}/currency/"+id;
            //alert(actionUrl);
            $('#currency_delete_form').attr('action', actionUrl);
        });
        /* print*Copy*Excel*CSV*PDF genaretor */
        $(document).on('click','#pdf',function(e){
            var data =  $('#table-4').tableExport({type:'pdf',escape:'false'});
            //e.preventDefault();
            $(this).attr('href',data);

        });
    });
</script>