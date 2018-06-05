$(document).ready(function(){
    		$("#likes").on('click', function(){
				
				var topic_id = $('#id').val();
				alert("like" + topic_id);
				$.ajax({
					method:'POST',
					url:urllike,
					data: {like:1, topic_id:topic_id,  _token:token},
					success: function(response){
						alert(response.message);
					}

				})

    			
			});
			
			$("#dislikes").on('click', function(){
    			var topic_id = $('#id').val();
				alert("dislike" + topic_id);
				$.ajax({
					method:'POST',
					url:urlDislike,
					data: {dislike:1, topic_id:topic_id,  _token:token},
					success: function(response){
						alert(response.message);
					}

				})
    			
    		});
    		
    	})
    	
   
    


