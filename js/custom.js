function ezBSAlert (options) {
	var deferredObject = $.Deferred();
	var defaults = {
		type: "alert", //alert, prompt,confirm 
		modalSize: 'modal-sm', //modal-sm, modal-lg
		okButtonText: 'Change',
		cancelButtonText: 'Cancel',
		yesButtonText: 'Yes',
		noButtonText: 'No',
		headerText: 'Enter mobile to change details',
		messageText: 'Message',
		alertType: 'default', //default, primary, success, info, warning, danger
		inputFieldType: 'text', //could ask for number,email,etc
	}
	$.extend(defaults, options);
  
	var _show = function(){
		var headClass = "navbar-default";
		switch (defaults.alertType) {
			case "primary":
				headClass = "alert-primary";
				break;
			case "success":
				headClass = "alert-success";
				break;
			case "info":
				headClass = "alert-info";
				break;
			case "warning":
				headClass = "alert-warning";
				break;
			case "danger":
				headClass = "alert-danger";
				break;
        }
		$('BODY').append(
			'<div id="ezAlerts" style="top:200px;" class="modal fade">' +
			'<div class="modal-dialog" class="' + defaults.modalSize + '">' +
			'<div class="modal-content">' +
			
			
			
			'<div id="ezAlerts-header" class="modal-header ' + headClass + '">' +
			'<button id="close-button" type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>' +
			'<h4 id="ezAlerts-title" class="modal-title">Modal title</h4>' +
			'</div>' +
			
			
			
			'<div class="col-sm-12" >'+
			'<div class="panel panel-default">'+
				
				'<div class="panel-body">'+
					'<form style="text-align:center" id="change-submit-form" action="index.php/notification_controller/edit" method="post">'+
						'<table margin="auto"><tr><td>Mobile:</td><td><input name="mobile" type="text" id="mobile"></td>'+
							'</tr><tr><td>Password:</td><td><input name="password" type="password" id="password"></td>'+
							'</tr><tr><td colspan="2" style="text-align: center"><button id="submit" name="submit" class="btn btn-default">Change</button></td>'+
							'</tr></table></form></div></div></div>'+
			
			
			'<div id="ezAlerts-footer" class="modal-footer">' +
			'</div>' +
			'</div>' +
			'</div>' +
			'</div>'
		);

		$('.modal-header').css({
			'padding': '15px 15px',
			'-webkit-border-top-left-radius': '5px',
			'-webkit-border-top-right-radius': '5px',
			'-moz-border-radius-topleft': '5px',
			'-moz-border-radius-topright': '5px',
			'border-top-left-radius': '5px',
			'border-top-right-radius': '5px'
		});
    
		$('#ezAlerts-title').text(defaults.headerText);
		$('#ezAlerts-message').html(defaults.messageText);

		var keyb = "false", backd = "static";
		var calbackParam = "";
		switch (defaults.type) {
			case 'alert':
				keyb = "true";
				backd = "true";
				$('#ezAlerts-footer').html('<button class="btn btn-' + defaults.alertType + '">' + defaults.okButtonText + '</button>').on('click', ".btn", function () {
					calbackParam = true;
					$('#ezAlerts').modal('hide');
				});
				break;
			
			case 'prompt':
				
				break;
		}
   
		$('#ezAlerts').modal({ 
          show: false, 
          backdrop: backd, 
          keyboard: keyb 
        }).on('hidden.bs.modal', function (e) {
			$('#ezAlerts').remove();
			deferredObject.resolve(calbackParam);
		}).on('shown.bs.modal', function (e) {
			if ($('#prompt').length > 0) {
				$('#prompt').focus();
			}
		}).modal('show');
	}
    
  _show();  
  return deferredObject.promise();    
}





$(document).ready(function(){
  $("#btnAlert").on("click", function(){  	
    var prom = ezBSAlert({
      messageText: "hello world",
      alertType: "danger"
    }).done(function (e) {
      $("body").append('<div>Callback from alert</div>');
    });
  });   
  
  $("#btnConfirm").on("click", function(){  	
    ezBSAlert({
      type: "confirm",
      messageText: "hello world",
      alertType: "info"
    }).done(function (e) {
      $("body").append('<div>Callback from confirm ' + e + '</div>');
    });
  });   

  $("#btnPrompt").on("click", function(){  	
    ezBSAlert({
      type: "prompt",
      messageText: "",
      alertType: "primary"
    }).done(function (e) {
      //ezBSAlert({
       // messageText: "You entered: " + e,
      //  alertType: "success"
      //});
    });
  });   
  
});