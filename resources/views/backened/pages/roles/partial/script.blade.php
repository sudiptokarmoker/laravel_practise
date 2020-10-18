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

    function permissionGroupCheckUncheck(child_id, group_id, wrapper_id) {
        //('permission-child-{{ $permission->id }}', 'pr-group-{{ $i }}')" />
        //console.log($('.' + group_id))
        const current_check_items_count = $('.role-1-management-checkbox input[type=checkbox]:checked').length;
        const current_all_items_count = $('.role-1-management-checkbox input[type=checkbox]').length;
        if(current_check_items_count < current_all_items_count){
            $('.' + group_id).prop('checked', false);
        } else {
            $('.' + group_id).prop('checked', true);
        }
    }

</script>
