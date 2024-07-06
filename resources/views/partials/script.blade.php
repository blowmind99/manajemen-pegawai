<!-- jQuery library js -->
<script src="{{ url('assets/js/lib/jquery-3.7.1.min.js') }}"></script>

<!-- Bootstrap js -->
<script src="{{ url('assets/js/lib/bootstrap.bundle.min.js') }}"></script>

<!-- Apex Chart js -->
<script src="{{ url('assets/js/lib/apexcharts.min.js') }}"></script>

<!-- Data Table js -->
<script src="{{ url('assets/js/lib/dataTables.min.js') }}"></script>

<!-- Iconify Font js -->
<script src="{{ url('assets/js/lib/iconify-icon.min.js') }}"></script>

<!-- jQuery UI js -->
<script src="{{ url('assets/js/lib/jquery-ui.min.js') }}"></script>

<!-- Vector Map js -->
<script src="{{ url('assets/js/lib/jquery-jvectormap-2.0.5.min.js') }}"></script>
<script src="{{ url('assets/js/lib/jquery-jvectormap-world-mill-en.js') }}"></script>

<!-- Popup js -->
<script src="{{ url('assets/js/lib/magnifc-popup.min.js') }}"></script>

<!-- Slick Slider js -->
<script src="{{ url('assets/js/lib/slick.min.js') }}"></script>

<!-- main js -->
<script src="{{ url('assets/js/app.js') }}"></script>

<script>
    // ================== Password Show Hide Js Start ==========
        function initializePasswordToggle(toggleSelector) {
            $(toggleSelector).on('click', function() {
                $(this).toggleClass("ri-eye-off-line");
                var input = $($(this).attr("data-toggle"));
                if (input.attr("type") === "password") {
                    input.attr("type", "text");
                } else {
                    input.attr("type", "password");
                }
            });
        }
        $('#error').delay(2000).fadeOut('slow');
        $('#success').delay(2000).fadeOut('slow');
        let table = new DataTable('#dataTable');
        // Call the function
        initializePasswordToggle('.toggle-password');
    // ========================= Password Show Hide Js End ===========================
</script>