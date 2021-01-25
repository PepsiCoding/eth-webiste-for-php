<script>
    $(document).ready(function(){
        /**==========================
         Form Preloader
         =========================**/
        $(document).on('submit','#create_new_page_form',function(){
            $('#create_new_page_form').ploading({
                action: "show"
            })
            return true;
        });
    });
</script>