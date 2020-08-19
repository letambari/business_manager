$(document).ready(function(){
  // save comment to database
  $(document).on('click', '#submit_btn', function(){
    var name = $('#name').val();
    var comment = $('#comment').val();
    $.ajax({
      url: 'server.php',
      type: 'POST',
      data: {
        'save': 1,
        'name': name,
        'comment': comment,
      },
      success: function(response){
        $('#name').val('');
        $('#comment').val('');
        $('#display_area').append(response);
      }
    });
  });
  // delete from database
  $(document).on('click', '.action-circle', function(){
  	var id = $(this).data('id');
  	$clicked_btn = $(this);
  	$.ajax({
  	  url: 'server.php',
  	  type: 'GET',
  	  data: {
    	'delete': 1,
    	'id': id,
      },
      success: function(response){
        // remove the deleted comment
        $clicked_btn.parent().remove();
        $('#name').val('');
        $('#comment').val('');
      }
  	});
  });


   // delete from database
  $(document).on('click', '.action-square', function(){
  	var id = $(this).data('id');
  	$clicked_btn = $(this);
  	$.ajax({
  	  url: 'server.php',
  	  type: 'GET',
  	  data: {
    	'status': 1,
    	'id': id,
      },
      success: function(response){
        // remove the deleted comment
        $('#name').val('');
        $('#comment').val('');
        $('#display_area').append(response);
      }
  	});
  });






  var edit_id;
  var $edit_comment;
  $(document).on('click', '.edit', function(){
  	edit_id = $(this).data('id');
  	$edit_comment = $(this).parent();
  	// grab the comment to be editted
  	var name = $(this).siblings('.task-lebel').text();
  	var comment = $(this).siblings('.comment_text').text();
  	// place comment in form
  	//$("#assigneeedit").fadeOut();
  	$('#name').val(name);
  	$('#comment').val(comment);
  	$('#submit_btn').hide();
  	$("#closeBtn").fadeOut();
  	$('#update_btn').show();
  });
  $(document).on('click', '#update_btn', function(){
  	var id = edit_id;
  	var name = $('#name').val();
  	var comment = $('#comment').val();
  	$.ajax({
      url: 'server.php',
      type: 'POST',
      data: {
      	'update': 1,
      	'id': id,
      	'name': name,
      	'comment': comment,
      },
      success: function(response){
      	$('#name').val('');
      	$('#comment').val('');
      	$('#submit_btn').show();
      	$('#update_btn').hide();
      	$edit_comment.replaceWith(response);
      }
  	});		
  });
});




 // $("#editContent").fadeIn();
 //                        $("#editRowID").val(rowID);
 //                        $("#showContent").fadeOut();
 //                        $("#longDesc").val(response.longDesc);
 //                        $("#shortDesc").val(response.shortDesc);
 //                        $("#countryName").val(response.countryName);
 //                        $("#closeBtn").fadeOut();
 //                        $("#manageBtn").attr('value', 'Save Changes').attr('onclick', "manageData('updateRow')");