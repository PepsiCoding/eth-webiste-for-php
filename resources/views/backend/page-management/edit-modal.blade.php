<!--plan Modal Insert Start-->
<div class="modal fade" id="template-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Create A Plan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                {{csrf_field()}}
                <div class="form-body">
                    <div class="form-group clearfix">
                        <label class="col-md-3 control-label">Plan Name</label>
                        <div class="col-md-9">
                            <div class="input-group">
                                <select class="form-control" name="template_name" id="template_name">
                                    <option value="about">About Us</option>
                                    <option value="contact">Contact Us</option>
                                    <option value="faq">Faq</option>
                                    <option value="pricing">Pricing Table</option>
                                    <option value="team">Team</option>
                                </select>
                            </div>
                            @if($errors->has('template_name') )
                                <p class="alert alert-danger">{{$errors->first('template_name')}}</p>
                                <script>
                                    $(document).ready(function(){
                                        $('#template-modal').modal({
                                            backdrop: 'static',
                                            keyboard: false
                                        });
                                    });
                                </script>
                            @endif
                        </div>
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" id="add_template">Save Change</button>
            </div>
        </div>
    </div>
</div>
<!--plan Modal Insert End-->
