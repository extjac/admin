@extends('layouts.app')
@section('content')

@include('common.breadcrumb')


<div class="row">
	<div class="col-md-12">
	   	<a href="/news/create" class="btn btn-success " >
	      <i class="material-icons">add</i> add new
	    </a>
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
	    	@foreach( $posts as $post )
	        	<tr class="">
		            <td><a href="/news/{{ $post->token }}" class="btn btn-info btn-circle btn-xs"><i class="material-icons">edit</i></a> </td>
		            <td>{{ $post->title }} </td>
		            <td>{{ $post->is_active ? 'Yes' : 'No' }}</td>
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