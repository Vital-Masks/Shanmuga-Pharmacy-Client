<div class="modal fade" id="prescriptionModal" tabindex="-1" role="dialog" aria-labelledby="prescriptionModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Send us your prescription</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>



            <form method="POST" action="{{ route('create-prescription') }}" name="prescription-create" id="prescriptionCreate" enctype="multipart/form-data" class="form-horizontal">
                {{ csrf_field() }}

                <div class="modal-body">
                    <div class="alert alert-danger" role="alert" id="prescriptionFailedAlert">
                        <ul id="prescriptionErrorlist">
                        </ul>
                    </div>

                    <div class="form-group">
                        <label for="userName">Name</label>
                        <input type="text" class="form-control" id="userName" name="userName" placeholder="please enter your name">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="text" class="form-control" id="phone" name="phone" placeholder="please enter your phone">
                    </div>
                    <div class="form-group">
                        <label for="nic">NIC</label>
                        <input type="text" class="form-control" id="nic" name="nic" placeholder="please enter your nic">
                    </div>
                    <div class="input-group mb-3">
                        <div class="custom-file">
                            <input accept=".jpg" type="file" class="custom-file-input" id="prescription" name="prescription">
                            <label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Choose prescription image</label>
                        </div>
                        <div class="input-group-append">
                            <span class="input-group-text" id="inputGroupFileAddon02">Upload</span>
                        </div>
                    </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#prescriptionFailedAlert').hide();
    });

    $(function() {
        // jQuery, bind an event handler or use some other way to trigger ajax call.
        $('#prescriptionCreate').submit(function(event) {
            event.preventDefault();
            var form = $('#prescriptionCreate')[0];
            var data = new FormData(form);

            jQuery.ajax({
                headers: {
                    'X-CSRF-TOKEN': "{{ csrf_token() }}"
                },
                type: 'post',
                enctype: 'multipart/form-data',
                url: '/create-prescription',
                data: data,
                processData: false, // Important!
                contentType: false,
                cache: false,
                success: function(_response) {
                    // Handle your response..
                    if (_response.success) {
                        location.reload();
                    } else {
                        $('#prescriptionFailedAlert').show();
                    }
                },
                error: function(_response) {
                    console.log(_response)
                    // Handle error
                    var html = '';
                    $.each(_response.responseJSON.errors, function(key, value) {
                        html += '<li>' + value + '</li>';
                    });
                    $('#prescriptionErrorlist').html(html);
                    $('#prescriptionFailedAlert').show();

                }
            });
        });
    });
</script>