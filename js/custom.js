function submitChangeDetails() {
    $.ajax({
        type: "POST",
        url: "index.php/notification_controller/edit",
        data: $("#change-submit-form").serialize(),
        success: function (data) {
            $("#ezAlerts").css("top", "100px");
            $("#content").html(data);
        },
        error: function (data) {
        }
    });
    return false;
}

function submitChangedForm() {
    $.ajax({
        type: "POST",
        url: "index.php/notification_controller/submitedit",
        data: $("#changed-form").serialize(),
        success: function (data) {
            alert(data);
        },
        error: function (data) {
        }
    });
}


$(document).ready(function () {

    $("#btnPrompt").on("click", function () {
        $('BODY').append(
                '<div id="ezAlerts" style="top:180px;" class="modal fade">' +
                '<div class="modal-dialog" class="">' +
                '<div class="modal-content">' +
                '<div id="ezAlerts-header" class="modal-header">' +
                '<button id="close-button" type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>' +
                '<h4 id="ezAlerts-title" class="modal-title">Change Form</h4>' +
                '</div>' +
                '<div class="col-sm-12" >' +
                '<div class="panel panel-default">' +
                '<div class="panel-body"  id="content">' +
                '<form style="text-align:center" id="change-submit-form" method="post">' +
                '<table margin="auto"><tr><td>Mobile:</td><td><input name="mobile" type="text" id="mobile"></td>' +
                '</tr><tr><td>Password:</td><td><input name="password" type="password" id="password"></td>' +
                '</tr><tr><td colspan="2" style="text-align: center"><button id="submit" name="submit" onclick="return submitChangeDetails()" class="btn btn-default">Change</button>' +
                '</td>' +
                '</tr></table></form></div></div></div>' +
                '<div id="ezAlerts-footer" class="modal-footer">' +
                '</div>' +
                '</div>' +
                '</div></div>');

        $('.modal-header').css({
            'padding': '15px 15px',
            '-webkit-border-top-left-radius': '5px',
            '-webkit-border-top-right-radius': '5px',
            '-moz-border-radius-topleft': '5px',
            '-moz-border-radius-topright': '5px',
            'border-top-left-radius': '5px',
            'border-top-right-radius': '5px'
        });
        $('#ezAlerts-title').text();
        $('#ezAlerts-message').html();
        $('#ezAlerts').modal({
            show: true
        });
    });

    $('#ezAlerts').on('show.bs.modal', function () {
        
            $('#content').html('<form style="text-align:center" id="change-submit-form" method="post">' +
            '<table margin="auto"><tr><td>Mobile:</td><td><input name="mobile" type="text" id="mobile"></td>' +
            '</tr><tr><td>Password:</td><td><input name="password" type="password" id="password"></td>' +
            '</tr><tr><td colspan="2" style="text-align: center"><button id="submit" name="submit"' +
            'onclick="return submitChangeDetails()" class="btn btn-default">Change</button></td>' +
            '</tr></table></form>');
        
    });
});


