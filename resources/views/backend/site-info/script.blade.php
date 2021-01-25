<script>
    $(document).ready(function(){
        /**======================================
         * Color Picker Jquery Plugin Activation
         * ===================================**/

        $('#color-picker').ColorPicker({
            flat: true,
            onChange: function (hsb, hex, rgb,el) {
                $('#color_code').val(hex);
            }
        });
        /**====================================
         * Change Site Color Ajax Request
         * =================================**/
        $(document).on('click','#change_color',function() {
            var colorCode = $('#color_code').val();
            //alert(colorCode);

            $.ajax({
                type:"POST",
                url: "{{route('site.info.color.changer')}}",
                data: {
                    'code' : colorCode,
                    '_token' : $('input[name=_token]').val()
                },
                success:function(data){
                    //console.log(data);
                    swal(data,"Enjoy!!", "success");
                },
                error:function(res){
                    if (res.status == 422) {
                        var data = res.responseJSON;
                        var er = data.errors;
                        console.log(er);
                    }
                }
            });
        });

        /**==========================
         Upload Image Preview
         =========================**/
        $.uploadPreview({
            input_field: "#logo_picture",
            preview_box: "#logo_preview_box"
        });
        $.uploadPreview({
            input_field: "#fevicon_picture",
            preview_box: "#favicon_preview_box"
        });
        /**==========================
         Form Preloader
         =========================**/
        $(document).on('submit','#general_settings_form',function(){
            $('#general_settings_form').ploading({
                action: "show"
            })
            return true;
        });
        $(document).on('submit','#support_bar_form',function(){
            $('#support_bar_form').ploading({
                action: "show"
            })
            return true;
        });

        /**===============================
         * Social Media Insert Using Ajax
         * ============================**/
        $(document).on('click','#confirm',function(){
            var name = $('#name').val();
            var url = $('#url').val();
            $.ajax({
                type: "POST",
                url: "{{route('social-management.store')}}",
                data:{
                    'name' : name,
                    'url'  : url,
                    '_token' : $('input[name=_token]').val()
                },
                success:function(data){
                    //console.log(data);
                    swal(data,"", "success");
                    $('#social-modal').modal('toggle');
                },
                error:function(res) {
                    if (res.status == 422) {
                        var data = res.responseJSON;
                        var er = data.errors;
                        //console.log(er);
                    }
                    if(er.name != ""){
                        $('.error_name').text(er.name);
                        $('.error_name').addClass("alert alert-danger");

                        //console.log(er.name)
                    }
                    if(er.url != ""){
                        $('.error_url').text(er.url);
                        $('.error_url').addClass("alert alert-danger");
                        //console.log(er.name)
                    }
                }
            });
        });
        /**===============================
         * Social Media Edit Using Ajax
         * ============================**/
        $(document).on('click','.social_edit_btn',function(){
            $('#name_edit').val($(this).data('name'));
            $('#id_edit').val($(this).data('id'));
            $('#url_edit').val($(this).data('url'));
        });
        $(document).on('click','#edit_confirm',function(){
            var name = $('#name_edit').val();
            var id = $('#id_edit').val();
            var url = $('#url_edit').val();
            $.ajax({
                type:"POST",
                url: "{{url('/')}}/social-management/"+id,
                data:{
                    'id':id,
                    'name':name,
                    'url': url,
                    '_token' : $('input[name=_token]').val(),
                    '_method': $('input[name=_method]').val()
                },
                success:function(data){
                    swal(data,"", "success");
                    $('.social_name_'+id).text(name);
                    $('#social_edit_btn_'+id).data('name',name);
                    $('#social_edit_btn_'+id).data('url',url);
                    $('#social-modal-edit').modal('toggle');
                    //console.log(data);
                },
                error:function(res){

                    if(res.status == 422){
                        var data = res.responseJSON;
                        var er = data.errors;
                        //console.log(er);
                    }
                    if(er.name != ""){
                        $('.error_name').text(er.name);
                        $('.error_name').addClass("alert alert-danger");

                        //console.log(er.name)
                    }
                    if(er.url != ""){
                        $('.error_url').text(er.url);
                        $('.error_url').addClass("alert alert-danger");
                        //console.log(er.name)
                    }

                }
            });
        });
        /**===============================
         * Social Media Delete Using Ajax
         * ============================**/
        $(document).on('click','.social_delete_btn',function(){
            $('#delete_id').val($(this).data('id'));
        });
        $(document).on('click','#delete_confirm',function(){
            var id = $('#delete_id').val();
            $.ajax({
                type : "POST",
                url:  "{{route('social.delete')}}",
                data:{
                    'id' :id,
                    '_token' : $('input[name=_token]').val()
                },
                success:function(data){
                    //console.log(data);
                    swal(data,"", "warning");
                    $('#table-row-'+id).hide();
                },
                error:function(res){
                    if(res.status == 422){
                        var data = res.responseJSON;
                        var er = data.errors;
                        //console.log(er);
                    }
                }
            });
        });
    });
</script>