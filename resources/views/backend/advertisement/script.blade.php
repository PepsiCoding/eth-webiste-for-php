<script>
    $(document).ready(function(){
        /**==========================
         Form Preloader
         =========================**/
        $(document).on('submit','#google_add_one',function(){
            $('#google_add_one').ploading({
                action: "show"
            });
            return true;
        });
        $(document).on('submit','#google_add_two',function(){
            $('#google_add_two').ploading({
                action: "show"
            });
            return true;
        });
    });
</script>