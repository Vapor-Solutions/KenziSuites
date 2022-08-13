<script src="/backend/js/jquery-3.5.1.min.js"></script>
<!-- feather icon js-->
<script src="/backend/js/icons/feather-icon/feather.min.js"></script>
<script src="/backend/js/icons/feather-icon/feather-icon.js"></script>
<!-- Sidebar jquery-->
<script src="/backend/js/sidebar-menu.js"></script>
<script src="/backend/js/config.js"></script>
<!-- Bootstrap js-->
<script src="/backend/js/bootstrap/popper.min.js"></script>
<script src="/backend/js/bootstrap/bootstrap.min.js"></script>
<script src="/backend/js/dropzone/dropzone.js"></script>
<script src="/backend/js/dropzone/dropzone-script.js"></script>
<!-- Plugins JS start-->

<script src="/backend/js/chart/apex-chart/apex-chart.js"></script>
<script src="/backend/js/chart/apex-chart/stock-prices.js"></script>
<script src="/backend/js/datatable/datatables/jquery.dataTables.min.js"></script>
<script src="/backend/js/datatable/datatables/datatable.custom.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="/backend/js/prism/prism.min.js"></script>
<script src="/backend/js/clipboard/clipboard.min.js"></script>
<script src="/backend/js/counter/jquery.waypoints.min.js"></script>
<script src="/backend/js/counter/jquery.counterup.min.js"></script>
<script src="/backend/js/counter/counter-custom.js"></script>
<script src="/backend/js/custom-card/custom-card.js"></script>
<script src="/backend/js/datepicker/date-picker/datepicker.js"></script>
<script src="/backend/js/datepicker/date-picker/datepicker.en.js"></script>
<script src="/backend/js/datepicker/date-picker/datepicker.custom.js"></script>
<script src="/backend/js/owlcarousel/owl.carousel.js"></script>
<script src="/backend/js/general-widget.js"></script>
<script src="/backend/js/height-equal.js"></script>


{{-- <script src="/backend/js/dashboard/default.js"></script> --}}
<script src="/backend/js/rating/jquery.barrating.js"></script>
<script src="/backend/js/rating/rating-script.js"></script>
<script src="/backend/js/tooltip-init.js"></script>
<!-- Plugins JS Ends-->
<!-- Theme js-->
<script src="/backend/js/script.js"></script>
{{-- <script src="/backend/js/theme-customizer/customizer.js"></script> --}}
{{-- <script src="/backend/js/form-wizard/form-wizard-three.js"></script> --}}
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    window.Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
    })
</script>
