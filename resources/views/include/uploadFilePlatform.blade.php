<div class="modal fade" id="fileModal">
  <div class="modal-dialog">
    <div class="modal-content"> 
      <form  id="model-post-form" method="post" action="{{asset($data['fileUrl'])}}" enctype="multipart/form-data">
      {{ csrf_field() }}
        <div class="modal-header">
          <h4 class="modal-title">{{$data['fileModalTitle']}}</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body">
          <!--<form>-->
            <div class="form-group">
                <label>Platform</label>
                <select class="form-control select2" style="width: 50%;" name='platform'>
                  <option value="Discoverorg" selected="selected">Discover</option>
                  <option value="fb">Alaska</option>
                </select>
            </div>
            <div class="form-group">
              <input type="file"  name="file">
            </div>
            <!--</form>-->
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
            <button type="submit" id="post-save-model" class="btn btn-primary">Upload</button>
        </div>
      </form>
    </div>
  </div>
</div>
