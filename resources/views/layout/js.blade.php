<script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- Core plugin JavaScript-->
<script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>
<!-- Custom scripts FOR all pages-->
<script src="{{ asset('js/admin.min.js') }}"></script>
<script src="{{ asset('js/datatables.min.js') }}"></script>

{{--pagination--}}
<script>
    $('#data-table').DataTable({
        "pageLength": 10,
        "lengthMenu": [ 5, 10, 15, 20, 25 ]
    });
</script>
