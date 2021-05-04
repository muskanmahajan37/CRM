{{-- <form action="{{ route('admin.prospects.contacts.update', $prospect_id) }}" method="POST"> --}}
    @csrf
    @method('PUT')

    <div class="form-group row">
        <label for="" class="col-md-3">Phone (Primary)</label>
        <div class="col-md-9">
            <input type="text" class="form-control" name="phone" >
        </div>
    </div>
    <div class="form-group row">
        <label for="" class="col-md-3">Phone Mobile</label>
        <div class="col-md-9">
            <input type="text" class="form-control" name="phone_mobile" >
        </div>
    </div>
    <div class="form-group row">
        <label for="" class="col-md-3">Fax</label>
        <div class="col-md-9">
            <input type="text" class="form-control" name="fax" >
        </div>
    </div>
    <div class="form-group row">
        <label for="" class="col-md-3">Address</label>
        <div class="col-md-9">
            <input type="text" class="form-control" name="address" >
        </div>
    </div>
    <div class="form-group row">
        <label for="" class="col-md-3">Address 2</label>
        <div class="col-md-9">
            <input type="text" class="form-control" name="address_2" >
        </div>
    </div>
    <div class="form-group row">
        <label for="" class="col-md-3">Unit #</label>
        <div class="col-md-9">
            <input type="text" class="form-control" name="unit" >
        </div>
    </div>
    <div class="form-group row">
        <label for="" class="col-md-3">City</label>
        <div class="col-md-9">
            <input type="text" class="form-control" name="city" >
        </div>
    </div>
    <div class="form-group row">
        <label for="" class="col-md-3">Province / State / Region</label>
        <div class="col-md-9">
            <input type="text" class="form-control" name="province" >
        </div>
    </div>
    <div class="form-group row">
        <label for="" class="col-md-3">Postal Code / Zip Code</label>
        <div class="col-md-9">
            <input type="text" class="form-control" name="postal_code" >
        </div>
    </div>
    <div class="form-group row">
        <label for="" class="col-md-3">Country</label>
        <div class="col-md-9">
            <input type="text" class="form-control" name="country">
        </div>
    </div>

    <div class="form-group row">
        <label for="" class="col-md-3">Additional Notes</label>
        <div class="col-md-9">
            <textarea name="notes" cols="30" rows="10" class="form-control"></textarea>
        </div>
    </div>

    <button class="btn btn-success float-right">Update Contact Details</button>
</form>


