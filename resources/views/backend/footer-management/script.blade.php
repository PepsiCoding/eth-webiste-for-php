
<script>
    $(document).ready(function(){

        /**==========================
         Form Preloader
         =========================**/

        $(document).on('submit','#about_us_widget_form',function(){
            $('#about_us_widget_form').ploading({
                action: "show"
            });
            return true;
        });
        $(document).on('submit','#support_bar_form',function(){
            $('#support_bar_form').ploading({
                action: "show"
            });
            return true;
        });
        $(document).on('submit','#useful_links_insert_form',function(){
            $('#useful_links_insert_form').ploading({
                action: "show"
            });
            return true;
        });
        /**=================================================
         * Useful links Edit
         * ==============================================**/
        $(document).on('click','.useful_links_widget_edit_btn',function(){
            $('#link_id').val($(this).data('id'));
            $('#name_edit').val($(this).data('name'));
            $('#icon_edit').val($(this).data('iconcode'));
            $('#url_edit').val($(this).data('usefulurl'));
        });
        /**=================================================
         * Useful links ajax request for update
         * ==============================================**/
        $(document).on('click','#update_link_confirm',function(e){
            e.preventDefault();
            var id =  $('#link_id').val();
            var name =  $('#name_edit').val();
            var icon = $('#icon_edit').val();
            var url = $('#url_edit').val();
            $.ajax({
                type:"POST",
                url: "{{route('useful.links.update.edit')}}",
                data: {
                    'id' : id,
                    'name': name,
                    'icon': icon,
                    'url' : url,
                    '_token' : $('input[name=_token]').val()
                },
                success:function(data){
                    swal("Data Update Successful","Thanks", "success");
                    $('#link_edit_btn-'+id).data('name',name);
                    $('#link_edit_btn-'+id).data('iconcode',icon);
                    $('#link_edit_btn-'+id).data('usefulurl',url);

                    $('.name-'+id).text(name);
                    $('.link-'+id ).html('<a href="'+url+'">'+url+'</a>');
                    $('.icon-'+id).html('<i class="fa '+icon+'"></i>');
                    //console.log(data);
                    $('#useful-links-edit').modal('toggle');
                },
                error:function(res){
                    if (res.status == 422) {
                        var data = res.responseJSON;
                        var er = data.errors;
                        //console.log(er);
                        if(er.name){
                            $('.name_errors').addClass('alert alert-danger');
                            $('.name_errors').text(er.name);
                            //console.log(er.name);
                        }if(er.icon){
                            $('.icon_errors').addClass('alert alert-danger');
                            $('.icon_errors').text(er.icon);
                            //console.log(er.icon);
                        }
                        if(er.url){
                            $('.url_errors').addClass('alert alert-danger');
                            $('.url_errors').text(er.url);
                            //console.log(er.url);
                        }
                    }
                }
            });
        });
        /**=================================================
         * Useful links ajax request for delete
         * ==============================================**/

        $(document).on('click','.useful_links_widget_delete_btn',function(){
            $('#del_id').val($(this).data('id'));
        });

        $(document).on('click','#delete_confirm',function(e){
            e.preventDefault();

            var id = $('#del_id').val();
            $.ajax({
                type:"POST",
                url:"{{route('useful.links.delete')}}",
                data: {
                    'id' : id,
                    '_token' : $('input[name=_token]').val()
                },
                success:function(data){
                    $('#useful-links-delete').modal('toggle');
                    $('#table-row-'+id).hide();
                    swal("Links Deleted Successfully","Enjoy!!", "warning");
                }
            });
        });
    });
</script>