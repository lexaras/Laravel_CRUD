<!DOCTYPE html>
<html>
<head>
    <title>dashboard</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
</head>
<div class="container">
    
    <div class="d-inline-block bg-warning">
    <a class="btn btn-success" href="javascript:void(0)" id="createNewCamping"> Create New Camping</a>
    </div>
    <div class="float-right"><h4>Admin dashoboard</h4></div>
    
    <div class="container mt-5 text-center">
        <form action="{{ route('import-file') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group mb-5" style="max-width: 300px; margin: 0 auto;">
                <div class="custom-file text-left">
                    <input type="file" name="file" class="custom-file-input" id="customFile">
                    <label class="custom-file-label" for="customFile"><div id="file-upload-filename"></div></label>
                </div>
            </div>
            <button class="btn btn-danger">Click to Import</button>
            <a class="btn btn-primary" href="{{ route('export-file') }}">Click to Export</a>
        </form>
    </div>
    <table class="table table-bordered data-table">
        <thead>
            <tr>
                <th>No</th>
                <th>Country</th>
                <th>City</th>
                <th>Name</th>
                <th>Rating</th>
                <th>Number of Reviews</th>
                <th>Website</th>
                <th>List?</th>
                <th width="280px">Action</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</div>
   
<div class="modal fade" id="ajaxModel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="modelHeading"></h4>
            </div>
            <div class="modal-body">
                <form id="campingForm" name="campingForm" class="form-horizontal">
                   <input type="hidden" name="camping_id" id="camping_id">
                   {{-- country input --}}
                    <div class="form-group">
                        <label for="country" class="col-sm-2 control-label">Country</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="country" name="country" placeholder="Enter Country" value="" maxlength="50" required="">
                        </div>
                    </div>
                    
                    {{-- city input --}}
                    <div class="form-group">
                        <label for="city" class="col-sm-2 control-label">City</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="city" name="city" placeholder="Enter City" value="" maxlength="50" required="">
                        </div>
                    </div>
                    {{-- camping_name input --}}
                    <div class="form-group">
                        <label for="camping_name" class="col-sm-2 control-label">Name</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="camping_name" name="camping_name" placeholder="Enter Camping Name" value="" maxlength="50" required="">
                        </div>
                    </div>
                    {{-- rating input(dec) --}}
                    <div class="form-group">
                        <label for="rating" class="col-sm-2 control-label">Rating</label>
                        <div class="col-sm-12">
                            <input type="number" class="form-control" id="rating" name="rating" placeholder="Enter Rating" value="" maxlength="50" required="">
                        </div>
                    </div>
                    {{-- reviews input --}}
                    <div class="form-group">
                        <label for="number_of_reviews" class="col-sm-2 control-label">Reviews count</label>
                        <div class="col-sm-12">
                            <input type="number" class="form-control" id="number_of_reviews" name="number_of_reviews" placeholder="Enter views umber" value="" maxlength="50" required="">
                        </div>
                    </div>
                     {{-- website input --}}
                     <div class="form-group">
                        <label for="website" class="col-sm-2 control-label">Website</label>
                        <div class="col-sm-12">
                            <input type="string" class="form-control" id="website"  name="website" placeholder="Enter the website" value="" maxlength="50" required="">
                        </div>
                    </div>
                    {{-- list input --}}
                    <div class="form-group">
                        <label for="list" class="col-sm-2 control-label">List?</label>
                        <div class="col-sm-12">
                            <input type="string" class="form-control" id="list"  name="list" placeholder="List?yes/no" value="" maxlength="50" required="">
                        </div>
                    </div>
    
                    <div class="col-sm-offset-2 col-sm-10">
                     <button type="submit" class="btn btn-primary" id="saveBtn" value="create">Save changes
                     </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
</div>

</body>
    
<script type="text/javascript">
  $(function () {
     
      $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
    });
    
    var table = $('.data-table').DataTable({
        processing: true,
        serverSide: true,
        aLengthMenu:[10,15,20],
        ajax: "{{ route('admin.index') }}",
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            {data: 'country', name: 'country'},
            {data: 'city', name: 'city'},
            {data: 'camping_name', name: 'camping_name'},
            {data: 'rating', name: 'rating'},
            {data: 'number_of_reviews', name: 'number_of_reviews'},
            {data: 'website', name: 'website'},
            {data: 'list', name: 'list'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ]
    });
    
     
    $('#createNewCamping').click(function () {
        $('#saveBtn').val("create-camping");
        $('#camping_id').val('');
        $('#campingForm').trigger("reset");
        $('#modelHeading').html("Create New Camping");
        $('#ajaxModel').modal('show');
    });
    
    $('body').on('click', '.editCamping', function () {
      var camping_id = $(this).data('id');
      $.get("{{ route('admin.index') }}" +'/' + camping_id +'/edit', function (data) {
          $('#modelHeading').html("Edit Camping");
          $('#saveBtn').val("edit-user");
          $('#ajaxModel').modal('show');
          $('#camping_id').val(data.id);
          $('#country').val(data.country);
          $('#city').val(data.city);
          $('#camping_name').val(data.camping_name);
          $('#rating').val(data.rating);
          $('#number_of_reviews').val(data.number_of_reviews);
          $('#website').val(data.website);
          $('#list').val(data.list);
      })
   });
    
    $('#saveBtn').click(function (e) {
        e.preventDefault();
        $(this).html('Sending..');
    
        $.ajax({
          data: $('#campingForm').serialize(),
          url: "{{ route('admin.store') }}",
          type: "POST",
          dataType: 'json',
          success: function (data) {
     
              $('#campingForm').trigger("reset");
              $('#ajaxModel').modal('hide');
              table.draw();
         
          },
          error: function (data) {
              console.log('Error:', data);
              $('#saveBtn').html('Save Changes');
          }
      });
    });
    
    $('body').on('click', '.deleteCamping', function () {
     
        var camping_id = $(this).data("id");
        confirm("Are You sure want to delete !");
      
        $.ajax({
            type: "DELETE",
            url: "{{ route('admin.store') }}"+'/'+camping_id,
            success: function (data) {
                table.draw();
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
    });
     
  });
</script>
<script>

    var input = document.getElementById( 'customFile' );
    var infoArea = document.getElementById( 'file-upload-filename' );
    
    input.addEventListener( 'change', showFileName );
    
    function showFileName( event ) {
      
      // the change event gives us the input it occurred in 
      var input = event.srcElement;
      
      // the input has an array of files in the `files` property, each one has a name that you can use. We're just using the name here.
      var fileName = input.files[0].name;
      
      // use fileName however fits your app best, i.e. add it into a div
      infoArea.textContent = 'File name: ' + fileName;
    }
        </script>
</html>