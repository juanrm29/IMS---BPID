<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
<script src="{{ asset('./assets/js/init-alpine.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js" defer></script>
<script src="{{ asset('./assets/js/charts-lines.js')}} " defer></script>
<script src="{{ asset('./assets/js/charts-pie.js')}} " defer></script>

<!-- *************
			************ Required JavaScript Files *************
		************* -->
<!-- Required jQuery first, then Bootstrap Bundle JS -->
<script src="{{ asset ('backend/js/jquery.min.js')}}"></script>
<script src="{{ asset ('backend/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{ asset ('backend/js/modernizr.js')}}"></script>
<script src="{{ asset ('backend/js/moment.js')}}"></script>

<!-- *************
			************ Vendor Js Files *************
		************* -->

<!-- Megamenu JS -->
<script src="{{ asset ('backend/vendor/megamenu/js/megamenu.js')}}"></script>
<script src="{{ asset ('backend/vendor/megamenu/js/custom.js')}}"></script>

<!-- Slimscroll JS -->
<script src="{{ asset ('backend/vendor/slimscroll/slimscroll.min.js')}}"></script>
<script src="{{ asset ('backend/vendor/slimscroll/custom-scrollbar.js')}}"></script>

<!-- Search Filter JS -->
<script src="{{ asset ('backend/vendor/search-filter/search-filter.js')}}"></script>
<script src="{{ asset ('backend/vendor/search-filter/custom-search-filter.js')}}"></script>

<!-- Bootstrap Select JS -->
<script src="{{ asset ('backend/vendor/bs-select/bs-select.min.js')}}"></script>
<script src="{{ asset ('backend/vendor/bs-select/bs-select-custom.js')}}"></script>

<!-- Calendar JS -->
<script src="{{ asset ('backend/vendor/calendar/js/main.min.js')}}"></script>
<script src="{{ asset ('backend/vendor/calendar/custom/custom-schedule-calendar.js')}}"></script>

<!-- Data Tables -->
<script src="{{ asset ('backend/vendor/datatables/dataTables.min.js')}}"></script>
<script src="{{ asset ('backend/vendor/datatables/dataTables.bootstrap.min.js')}}"></script>

<!-- Custom Data tables -->
<script src="{{ asset ('backend/vendor/datatables/custom/custom-datatables.js')}}"></script>
<script src="{{ asset ('backend/vendor/datatables/custom/fixedHeader.js')}}"></script>

<!-- Download / CSV / Copy / Print -->
<script src="{{ asset ('backend/vendor/datatables/buttons.min.js')}}"></script>
<script src="{{ asset ('backend/vendor/datatables/jszip.min.js')}}"></script>
<script src="{{ asset ('backend/vendor/datatables/pdfmake.min.js')}}"></script>
<script src="{{ asset ('backend/vendor/datatables/vfs_fonts.js')}}"></script>
<script src="{{ asset ('backend/vendor/datatables/html5.min.js')}}"></script>
<script src="{{ asset ('backend/vendor/datatables/buttons.print.min.js')}}"></script>

<!-- Summernote JS -->
<script src="{{ asset ('backend/vendor/summernote/summernote-bs4.js') }}"></script>

<!-- Dropzone JS -->
<script src="{{ asset ('backend/vendor/dropzone/dropzone.min.js')}}"></script>

<!-- Main Js Required -->
<script src="{{ asset ('backend/js/main.js')}}"></script>

<!-- Particles JS -->
<script src="vendor/particles/particles.min.js"></script>
<script src="vendor/particles/particles-custom-error.js"></script>

<script>
// Summernote
$(document).ready(function() {
    $('.summernote').summernote({
        height: 210,
        tabsize: 2,
        focus: true,
        toolbar: [
            ['font', ['bold', 'underline', 'clear']],
            ['para', ['ul', 'ol']],
            ['insert', ['link', 'picture', 'video']],
            ['view', ['fullscreen', 'codeview', 'help']],
        ]
    });
});
</script>