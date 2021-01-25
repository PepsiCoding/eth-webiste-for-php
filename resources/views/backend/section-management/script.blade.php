<script>
    $(document).ready(function(){
        /**==========================
         Form Preloader
         =========================**/
        $(document).on('submit','#home_section_manage_form',function(){
            $('#home_section_manage_form').ploading({
                action: "show"
            })
            return true;
        });
        $(document).on('submit','#sidebar_widget_manage_form',function(){
            $('#sidebar_widget_manage_form').ploading({
                action: "show"
            })
            return true;
        });
    });
</script>