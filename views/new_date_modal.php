<div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Add Date</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="newDate">
          <div class="form">
            <i class="fas fa-envelope prefix grey-text"></i>
            <label data-error="wrong" data-success="right">Title</label>
            <input class="form-control validate" id="title">
          </div>

          <div class="form">
            <i class="grey-text"></i>
            <label data-error="wrong" data-success="right" for="defaultForm-pass">Description</label>
            <textarea class="form-control" rows="5" id="description"></textarea>
          </div>

          <div class="form">
            <i class="grey-text"></i>
            <label data-error="wrong" data-success="right" for="defaultForm-pass">Max Time</label>
            <input class="form-control validate" id="maxTime">
          </div>

          <div class="form">
            <i class="grey-text"></i>
            <label data-error="wrong" data-success="right" for="defaultForm-pass">Max Cost</label>
            <input class="form-control validate" id="maxCost">
          </div>
          
          <div class="modal-footer d-flex justify-content-center">
            <button type="submit" class="submit btn btn-default">Add Date!</button>
          </div>
        </form>
      </div>

    </div>
  </div>
</div>