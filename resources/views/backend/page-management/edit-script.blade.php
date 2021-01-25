<script>
    $(document).ready(function(){
        /**==========================
         Form Preloader
         =========================**/
        $(document).on('submit','#edit_page_form',function(){
            $('#edit_page_form').ploading({
                action: "show"
            });
            return true;
        });
        /**===========================
         * Template Chooser
         * ========================**/
        $(document).on('click',".template_name_btn",function(){
            var templateName = $('#template').val();
            $('#template_name').val(templateName).prop('selected',true);
        });
        $(document).on('click','#add_template',function(){

            var content = $('#template_name').val();
            var id = $('#page_id').val();


            //console.log(id);
            $.ajax({
                type:"post",
                url: "{{route('page-management.template')}}",
                data: {
                    'id': id,
                    'temp_name': content,
                    '_token' : $('input[name=_token]').val()
                },
                success:function(data){
                    //console.log(data);
                    swal(data,"Enjoy!!", "success");
                    location.reload();
                }
            });
        });
    });
</script>