$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
    $(".assignee-select").on('change', function() {
    	var assigneeId = $(this).val();
    	var taskId = $(this).data('task-id');
    	var saveUrl = $(this).data('url');
    	$.ajax({
            url: saveUrl,
            dataType: 'json',
            type: 'POST',
            data: {
            	'assigneeId' : assigneeId,
            	'taskId' : taskId
            },
            success: function(response) {
                if(response.code == 200) {
                	alert(response.message);
                } 
                if(response.code == 500) {
                	alert('Error message ' + response.message);
                }
            }, 
            error: function(response) {
                alert('An error occured');
            }
        });
    });
});