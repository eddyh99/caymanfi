<script>

    // General Navbar
    $(document).ready(function(){
        let pathname = window.location.pathname;
        if(!pathname){
            $('.nav-link').addClass('aktif');
        } 
    });


    // International Telephone Input
    var inputTel = document.querySelector("#telephone");
    window.intlTelInput(inputTel, {
        autoHideDialCode:false,
        formatOnDisplay: false,
        hiddenInput: "full_number",
        nationalMode: false,
        preferredCountries: ['it', 'us', 'id'],
        utilsScript: "<?= base_url() ?>assets/vendor/intl-tel-input-master/build/js/utils.js"
    });


    // Date Range Picker Single
    $(function() {
        $('input[name="birthdate"]').daterangepicker({
            singleDatePicker: true,
            showDropdowns: true
        }, 
        function(start, end, label) {
            var years = moment().diff(start, 'years');
        });

        $('input[name="birthdate"]').val('');
        $('input[name="birthdate"]').attr("placeholder","Select Date *");
    });

    // Date Range Picker Single
    $(function() {
        $('input[name="timeavail"]').daterangepicker({
            singleDatePicker: true,
            showDropdowns: true
        }, 
        function(start, end, label) {
            var years = moment().diff(start, 'years');
        });

        $('input[name="timeavail"]').val('');
        $('input[name="timeavail"]').attr("placeholder","Time Available *");
    });

</script>