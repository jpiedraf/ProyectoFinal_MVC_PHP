var adminUserName, adminId;

$(document).ready(function () {
    createListeners();
});

function createListeners() {
    $(".btn-delete--admin").click(function () {
        var trid = $(this).closest('tr');
        $.ajax({
            url: '?controller=Admin&action=deleteAdmin',
            type: 'POST',
            data: {
                adminId: $(this).closest('tr').children('td.adminId').text(),
            },
            dataType: 'text',
            success: function (response) {
                alert(response);
                trid.remove();
            }
        });
    });

    $(".btn-update--admin").click(function () {
        adminUserName = $(this).closest('tr').children('td.adminUserName').text();
        adminId = $(this).closest('tr').children('td.adminId').text();
        $('#adminId').val(adminId)
        $('#adminUserName').val(adminUserName)
    });

    $("#btn-update").click(function () {
        $.ajax({
            url: '?controller=Admin&action=updateAdmin',
            type: 'post',
            data: {
                adminId: adminId,
                newUserName: $('#adminUserName').val()
            },
            dataType: 'json',
            success: function (response) {
                $('#tdManageAdmin' + response[0]['ID']).text(response[0]['USER_NAME']);
            }
        });
    });
}