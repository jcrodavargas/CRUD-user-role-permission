<div class="modal fade" id="modal_show" tabindex="-1" aria-labelledby="modal_show_label" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title fs-5" id="modal_show_label">@lang('See State')</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div id="spinner" class="spinner">
                <div class="spinner-grow d-block m-auto" role="status"></div>
                <span class="">@lang('Loading')</span>
            </div>
            <div  class="row">
                <div class="col-12">
                    <label for="name_show">@lang('Name')</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-card-text me-1"></i></span>
                        <input id="name_show" type="text" name="name_show" readonly class="form-control">
                    </div>
                </div>
                <div class="col-12 col-md-6 mt-2">
                    <label for="country_show">@lang('Country')</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-globe me-1"></i></span>
                        <input id="country_show" type="text" name="country_show" readonly class="form-control">
                    </div>
                </div>
                <div class="col-12 col-md-6 mt-2">
                    <label for="iso_2_show">@lang('ISO code 2')</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-braces me-1"></i></span>
                        <input id="iso_2_show" type="text" name="iso_2_show" readonly class="form-control">
                    </div>
                </div>
                <div class="col-12 mt-2">
                    <label for="city_show">@lang('Cities')</label>
                    <div class="input-group">
                        <span class="input-group-text pe-3"><i class="bi bi-globe"></i></span>
                        <textarea id="city_show" name="city_show" cols="30" rows="2" readonly class="form-control"></textarea>
                    </div>
                </div>
                <div class="col-12 col-md-6 mt-2">
                    <label for="created_at">@lang('Created')</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-calendar me-1"></i></span>
                        <input id="created_at" type="text" name="created_at" readonly class="form-control">
                    </div>
                </div>
                <div class="col-12 col-md-6 mt-2">
                    <label for="updated_at">@lang('Updated')</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-calendar me-1"></i></span>
                        <input id="updated_at" type="text" name="updated_at" readonly class="form-control">
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer text-end">
          <button type="button" class="btn btn-primary" data-bs-dismiss="modal"><i class="bi bi-x-circle"></i> @lang('Close')</button>
        </div>
      </div>
    </div>
  </div>
