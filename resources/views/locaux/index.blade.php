<div class="container">
    <div class="row">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                    <h2>Locaux</h2>
                </div>
                <div class="card-body">
                    <a href="{{ url('/locaux/create') }}" class="btn btn-success btn-sm" title="Add New ">
                        <i class="fa fa-plus" aria-hidden="true"></i> Add New
                    </a>
                    <br />
                    <br />
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>telephone_local</th>
                                    <th>adresse_local</th>
                                    <th>fax_local</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach($locaux as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->telephone_local }}</td>
                                    <td>{{ $item->adresse_local }}</td>
                                    <td>{{ $item->fax_local }}</td>
                                    <td>
                                        <a href="{{ url('/locaux/' . $item->id) }}" title="View locaux"><button
                                                class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i>
                                                View</button></a>
                                        <a href="{{ url('/locaux/' . $item->id . '/edit') }}"
                                            title="Edit locaux"><button class="btn btn-primary btn-sm"><i
                                                    class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                Edit</button></a>
                                        <form method="POST" action="{{ url('/locaux' . '/' . $item->id) }}"
                                            accept-charset="UTF-8" style="display:inline">
                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}
                                            <button type="submit" class="btn btn-danger btn-sm" title="Delete locaux"
                                                onclick="return confirm(&quot;Confirm delete?&quot;)"><i
                                                    class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>