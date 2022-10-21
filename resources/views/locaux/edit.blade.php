<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">
      
      <form action="{{ url('locaux/' .$locaux->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$locaux->id}}" id="id" />
        <label>telephone local</label></br>
        <input type="text" name="telephone_local" id="telephone_local" value="{{$locaux->telephone_local}}" class="form-control"></br>
        <label>adresse local</label></br>
        <input type="text" name="adresse_local" id="adresse_local" value="{{$locaux->adresse_local}}" class="form-control"></br>
        <label>fax local</label></br>
        <input type="text" name="fax_local" id="fax_local" value="{{$locaux->fax_local}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
  
  </div>
</div>