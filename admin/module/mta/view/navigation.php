<div class="mx-3 my-3">
  <form>
    <div class="mb-3">
      <label for="location1" class="form-label">Location 1</label>
      <div id="input0-container" class="position-relative">
        <input type="text" class="form-control" id="input0">
      </div>
    </div>
    <div class="mb-3">
      <label for="location2" class="form-label">Location 2</label>
      <div id="input1-container" class="position-relative">
        <input type="text" class="form-control" id="input1">
      </div>
    </div>
  </form>
</div>
<div id="map" class="flex-fill"></div>
<div style="display: flex;">
  <div id="mta-nav" class="p-3 border-top">
    <button class="btn btn-primary btn-dijkstra">Process</button>
  </div>
  <div id="mta-controls" class="p-3 border-top">
    <button id="btn-clear-map" class="btn btn-primary">Clear</button>
  </div>
</div>
<div id="mta-navigation" class="card shadow" style="width: 500px; display:none;">
  <div class="card-header app-card-header"></div>
  <div class="card-body">
    <div class="navigation-content" style="overflow-y:scroll;max-height: 50vh;"></div>
    <div class="d-flex justify-content-between mt-3">
      <span>
        <button class="app-btn-close-dialog btn btn-outline-secondary border border-secondary">Close</button>
      </span>
    </div>
  </div>
</div>
<div id="mta-poly-context" class="p-3 position-absolute bg-white border rounded-3" style="display:none;">
  <button id="btn-save-line" class="btn btn-sm btn-success text-light px-4">Save</button>
  <button id="btn-hide-line" class="btn btn-sm btn-secondary text-light"><i class="bi bi-eye-slash"></i></button>
  <button id="btn-delete-line" class="btn btn-sm btn-danger text-light ms-5"><i class="bi bi-exclamation-triangle"></i> DELETE</button>
</div>