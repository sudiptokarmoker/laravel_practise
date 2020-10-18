<script type="text/javascript">
    $("#checkPermissionAll").click(function() {
        if ($(this).is(":checked")) {
            $('.permission-checkbox-raw-wrapper input[type=checkbox]').prop('checked', true);
        } else {
            $('.permission-checkbox-raw-wrapper input[type=checkbox]').prop('checked', false);
        }
    });

    function checkPermissionByGroupName(selectedClassName, current_event) {
        const groupIdName = $('#' + current_event.id);
        const classCheckBox = $('.' + selectedClassName + ' input');

        if (groupIdName.is(':checked')) {
            classCheckBox.prop('checked', true);
        } else {
            classCheckBox.prop('checked', false);
        }
    }
</script>