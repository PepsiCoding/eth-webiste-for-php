<script>
    $(document).ready(function(){


        /**==========================
         Form Preloader
         =========================**/
        $(document).on('submit','#plan_insert_form',function(){
            $('#plan_insert_form').ploading({
                action: "show"
            })
            return true;
        });
        $(document).on('submit','#plan_edit_form',function(){
            $('#plan_edit_form').ploading({
                action: "show"
            })
            return true;
        });
        $('#category_delete_form').ploading({
            action: "show"
        })
        return true;
    });

    /**=================================
     *             Plan Edit
     * ==============================**/
    $(document).on('click','.plan_edit_btn',function(){
        $('#name').val($(this).data('name'));
        $('#price').val($(this).data('price'));
        $('#days').val($(this).data('days'));
        $('#plan-id').val($(this).data('id'));
        var id = $(this).data('id');

        var status = $(this).data('switch');
        if(status != "") {
            $('#status').val(0).prop('selected',true);
        }else{
            $('#status').val(1).prop('selected',true);
        }
        var actionUrl = "{{url('/')}}/plan-management/"+id;
        $('#plan_edit_form').attr('action', actionUrl);
    });
</script>