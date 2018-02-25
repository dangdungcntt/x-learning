<!-- Mainly scripts -->
<script src="{{asset('js/jquery-2.1.1.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/plugins/metisMenu/jquery.metisMenu.js')}}"></script>
<script src="{{asset('js/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>

<!-- Flot -->
<script src="{{asset('js/plugins/flot/jquery.flot.js')}}"></script>
<script src="{{asset('js/plugins/flot/jquery.flot.tooltip.min.js')}}"></script>
<script src="{{asset('js/plugins/flot/jquery.flot.spline.js')}}"></script>
<script src="{{asset('js/plugins/flot/jquery.flot.resize.js')}}"></script>
<script src="{{asset('js/plugins/flot/jquery.flot.pie.js')}}"></script>

<!-- Custom and plugin javascript -->
<script src="{{asset('js/inspinia.js')}}"></script>
<script src="{{asset('js/plugins/pace/pace.min.js')}}"></script>
<script src="{{asset('js/plugins/sweetalert/sweetalert.min.js')}}"></script>

<!-- jQuery UI -->
<script src="{{asset('js/plugins/jquery-ui/jquery-ui.min.js')}}"></script>

<script src="{{asset('js/plugins/iCheck/icheck.min.js')}}"></script>

<script>
    $(document).ready(function () {
        $('.sidebar-collapse').slimScroll({
            height: '100%',
            railOpacity: 0.9
        });
        $('.i-checks').iCheck({
            checkboxClass: 'icheckbox_square-green',
            radioClass: 'iradio_square-green',
        });
    });
</script>