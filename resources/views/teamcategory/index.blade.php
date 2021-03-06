@extends('layouts.app')
@section('content')
@include('common.breadcrumb')
<div class="row">
	<div class="col-md-12">
	    <a href="{{ url('/teams/categories/create') }}" class="btn btn-success btn-rounded">New <i class="material-icons md-18">add</i></a>
	</div> 
</div>
<br>
<div class="row">
	<div class="col-md-12">
	    <table id="datatable" class="table table-striped dataTables"  >
	    	<thead>
	        	<tr class="">
		            <th></th>
		            <th>Name</th>
		            <th>Status</th>
	        	</tr>
	    	</thead>
	    	<tbody>
	    	@foreach( $categories as $category )
	        	<tr class="">
		            <td><a href="{{ url('/teams/categories/'.$category->token.'/edit') }}" class="btn btn-info btn-xs  btn-circle"><i class="material-icons">edit</i></a></td>
		            <td>{{ $category->name }} </td>
		            <td>{{ $category->is_active ? 'Yes' : 'No' }}</td>
	        	</tr>
	        @endforeach
	    	</tbody>	    	
	 	</table> 
  	</div>
</div>
@endsection
@section('script')
<script type="text/javascript" charset="utf-8">
</script>
@endsection