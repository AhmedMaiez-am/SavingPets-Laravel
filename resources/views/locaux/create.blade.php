<div class="card">
  <div class="card-header">Locaux Page</div>
  <div class="card-body">
      
      <form action="{{ url('locaux') }}" method="post">
        {!! csrf_field() !!}
        <label>telephone local</label></br>
        <input type="text" name="telephone_local" id="telephone_local" class="form-control"></br>
        <label>adresse local</label></br>
        <input type="text" name="adresse_local" id="adresse_local" class="form-control"></br>
        <label>fax_local</label></br>
        <input type="text" name="fax_local" id="fax_local" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
  
  </div>
</div>