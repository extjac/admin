@extends('layouts.app')
@section('content')

@include('common.breadcrumb')


<ul class="nav nav-tabs">
  <li class="nav-item"> <a class="nav-link active" href="#Details" data-toggle="tab">Details</a> </li>
  <li class="nav-item"> <a class="nav-link" href="#Pictures" data-toggle="tab">Pictures</a> </li>
<li class="nav-item"> <a class="nav-link" href="#Orders" data-toggle="tab">Participants</a> </li>  
</ul>
<div class="tab-content">
  <div class="tab-pane active" id="Details" style="padding-top: 10px"> @include('item.form.edit') </div>
  <div class="tab-pane" id="Orders"  style="padding-top: 10px"> @include('item.table.participants') </div>
  <div class="tab-pane" id="Pictures"  style="padding-top: 10px"> Pictures soon </div>
</div>


@endsection
@section('script')
<script src="http://malsup.github.com/jquery.form.js"></script>
<script>

(function() {
    
var bar = $('.bar');
var percent = $('.percent');
var status = $('#uploadStatus');
   
$('#formUploadFile').ajaxForm({

    beforeSend: function() {
        status.empty();
        var percentVal = '0%';
        bar.width(percentVal)
        percent.html(percentVal);
    },
    uploadProgress: function(event, position, total, percentComplete) {
        var percentVal = percentComplete + '%';
        bar.width(percentVal)
        percent.html(percentVal);
    },
    success: function( data ) {
        var percentVal = '100%';
        bar.width(percentVal)
        percent.html(percentVal);
        //filesTable.api().ajax.reload();
        //$('#main-picture').html('<img id="main-picture" src="'+data+'" class="img-responsive img-fluid" alt="">');
        //$('#main-picture').attr('scr', data);
        //$("#main-picture").removeAttr("src").attr("src", data);
        location.reload();
        $('#uploadModal').modal('hide');
    },

  complete: function(xhr) {
    //status.html(xhr.responseText);
  }
}); 

})();       
 

$(".btn-upload-image").click(function()
{ 
  $('#uploadModal').modal('show');
})

</script>
@endsection