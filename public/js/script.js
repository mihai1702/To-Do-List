$(document).ready(function() {
    $('.complete-checkbox').change(function() {
        const taskId = $(this).data('id')
        const checkBox = $(this)

        $.ajax({
            url: `/tasks/${taskId}/complete`,
            type: 'POST',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(response) {
                if (response.success) {
                    
                    let taskNameElement = checkBox.siblings('.task-name');
                            let completedText = checkBox.siblings('.completed-p');

                    if (response.completed) {
                        taskNameElement.css({'text-decoration': 'line-through', 'color': '#6c757d'});
                        completedText.addClass('completed-p-visible');

                    } else {
                        taskNameElement.css({'text-decoration': 'none', 'color': '#000'});
                        completedText.removeClass('completed-p-visible');
                    }
                }
            },
            error: function(xhr) {
                alert('An error occurred while updating the task status.');

                checkBox.prop('checked', !checkBox.prop('checked'));
            }
        })
    })
        
})