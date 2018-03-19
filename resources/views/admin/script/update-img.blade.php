@section('script')
    <script>
        $(function () {
            $('#img').on('change', function (e) {
                e.preventDefault();

                var file = e.target.files[0];

                if (file.size > 5 * 1024 * 1024) {
                    return swal('File too large, max size is 5MB')
                }

                var data = new FormData();
                data.append('img', file);
                data.append('_token', csrf_token);

                $.ajax({
                    url: '{{$url}}',
                    method: 'POST',
                    processData: false,
                    contentType: false,
                    dataType: 'json',
                    data: data
                })
                    .then(function (res) {
                        if (!res.success) {
                            return swal({
                                title: 'Error',
                                text: res.message,
                                icon: "error"
                            })
                        }

                        // console.log(res.path);

                        $('#previewImg').attr('src', res.path + "?v=1");

                        swal('Successfully', {
                            icon: "success"
                        })
                    });
                return false
            })
        });
    </script>
@endsection