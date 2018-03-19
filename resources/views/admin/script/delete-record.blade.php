@section('script')
    <script>

        $(function () {
            $('.btn-delete').on('click', function () {
                var name = $(this).attr('record-name');
                var endPoint = $(this).attr('end-point');
                swal({
                    title: 'Are you sure?',
                    text: 'Deleting ${name}'.fillData({name: name}),
                    icon: "warning",
                    buttons: true,
                    dangerMode: true
                })
                    .then(function (willDelete) {
                        if (willDelete) {
                            //ajax to delete here
                            deleteRecord(this, name, endPoint);
                        }
                    });
            })
        });

        function deleteRecord(button, name, endPoint) {
            $.ajax({
                url: endPoint,
                method: 'POST',
                data: {
                    '_method': 'DELETE',
                    '_token': csrf_token
                },
                dataType: 'json'
            })
                .then(function(res) {
                    if (res.success) {
                        swal('Poof! ${name} has been deleted!'.fillData({name: name}), {
                            icon: "success"
                        });
                        $(button).closest('tr').remove();
                    } else {
                        swal({
                            title: 'An error occured',
                            text: 'Try again later',
                            icon: 'error'
                        })
                    }
                });
        }
    </script>
@endsection