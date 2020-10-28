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
				<h2>Brand Edit File</h2>

				<form method="" action="">
					<div class="form-group">
						<label>Name:</label>
						<input type="text" name="name" class="form-control" value="Nike">
					</div>

					<div class="form-group">
						<label>Photo:</label>
						<input type="file" name="photo" class="control-file">
					</div>

					<div class="form-group">
						<input type="submit" name="btnsubmit" value="Save">
					</div>
				</form>
			</div>
		</div>
	  </div>
	</main>
@endsection