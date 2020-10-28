@extends('backendtemplate')

@section('content')
	<main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-dashboard"></i> Blank Page</h1>
          <p>Start a beautiful journey here</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">Blank Page</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <h2>Brand List</h2>
            <a href="{{route('brand.create')}}">Add New</a>
				<table class="table">
					<thead>
						<tr>
							<td>No</td>
							<td>Name</td>
							<td>Action</td>
						</tr>
					</thead>
					<tbody>
						@foreach($brands as $row)
						<tr>
							<td>{{$row->id}}</td>  
							<td>{{$row->name}}</td>
							<td>
								<a href="{{route('brand.edit',1)}}" class="btn btn-primary">Edit</a> 
								<a href="{{route('brand.show',1)}}" class="btn btn-danger">Show</a> 
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
          </div>
        </div>
      </div>
    </main>

	<div class="row">
		<div class="col-md-12">
			
		</div>
	</div>
@endsection