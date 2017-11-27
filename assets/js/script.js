$(document).ready(function(){
	$('#create-task').submit(function(event){
		event.preventDefault();

		var form = $(this);
		var formData = form.serialize();
		$('#name_error').html("");
		$('#description_error').html("");

		$.ajax({
			url: 'create.php', 
			method: 'POST',
			data: formData,
			dataType: 'json',
			encode: true,
			success: function(data){
				if(data.success === false){

					if(data.message.name !== "") {
						//Display error
						$('#name_error').css("display","block").html(data.message.name);
					}
					if(data.message.description !== "") {
						//Display error
						$('#description_error').css("display","block").html(data.message.description);
					}
				}
				else {
					$('#ajax_msg').css("display", "block").delay(3000).slideUp(300).html(data.message);
				document.getElementById("create-task").reset();
				}
			}
		});
	});

	$('#task-list').load('read.php');

});

//Creates editable element, used for editing tasks
function makeElementEditable(div) {
	div.style.border = "1px solid green";
	div.style.padding = "5px";
	div.style.background = "white";
	div.contentEditable = true;
}

//enabled update of task name
function updateTask(target, taskId, column_name){
	var data = target.textContent;
	target.style.border = "none";
	target.style.padding = "0px";
	target.style.background = "#ececec";
	target.contentEditable = false;

	$.ajax({
		url: 'update.php', 
		method: 'POST',
		data: {theData: data, id:taskId, column:column_name},
		success: function(data){
			$('#ajax_msg').css("display", "block").delay(3000).slideUp(300).html(data);
		}
	});
}

//Enable task deletion 
function deleteTask(taskId){
	if(confirm("Do you really want to delete this task?")){
		$.ajax({
			url: 'delete.php', 
			method: 'POST',
			data: {id:taskId},
			success: function(data){
				$('#ajax_msg').css("display", "block").delay(3000).slideUp(300).html(data);
			}
		});

		$('#task-list').load('read.php');
	}

	return false;
}