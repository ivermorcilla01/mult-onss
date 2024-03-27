<?php
	include('conn.php');
	
	if (!isset($_SESSION['userid']) ||(trim ($_SESSION['userid']) == '')) {
	dheader('location:index.php');
    exit();
	}
	
	$uquery=mysqli_query($conn,"SELECT * FROM `user` WHERE userid='".$_SESSION['userid']."'");
	$urow=mysqli_fetch_assoc($uquery);
?>
<!DOCTYPE html>
<html>
<head>
<title>chatME</title>
<link rel="stylesheet" href="css/home.css">
<script src="jquery-3.1.1.js"></script>	
<script src="js/home.js"></script>
<script type="text/javascript">

$(document).keypress(function(e){ //using keyboard enter key
	displayResult();
	/* Send Message	*/	
	
		if(e.which === 13){ 
				if($('#msg').val() == ""){
				alert('Please write message first');
			}else{
				$msg = $('#msg').val();
				$id = $('#id').val();
				$.ajax({
					type: "POST",
					url: "send_message.php",
					data: {
						msg: $msg,
						id: $id,
					},
					success: function(){
						displayResult();
						$('#msg').val(''); //clears the textarea after submit
					}
				});
			}	

			/* $("form").submit(); 
			 alert('You press enter key!'); */
		} 
	} 
); 


$(document).ready(function(){ //using send button
	displayResult();
	/* Send Message	*/	
		
		$('#send_msg').on('click', function(){
			if($('#msg').val() == ""){
				alert('Please write message first');
			}else{
				$msg = $('#msg').val();
				$id = $('#id').val();
				$.ajax({
					type: "POST",
					url: "send_message.php",
					data: {
						msg: $msg,
						id: $id,
					},
					success: function(){
						displayResult();
						$('#msg').val(''); //clears the textarea after submit
					}
				});
			}	
		});
	/* END */
	});
	
	function displayResult(){
		$id = $('#id').val();
		$.ajax({
			url: 'send_message.php',
			type: 'POST',
			async: false,
			data:{
				id: $id,
				res: 1,
			},
			success: function(response){
				$('#result').html(response);
			}
		});
	}
</script>
<style type="text/css">
	.open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 280px;
}

/* The popup chat - hidden by default */
.chat-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  
  
}
</style>
</head>

<body><button class="open-button" onclick="openForm()">Chat</button><div class="chat-popup" id="myForm">

<table id="chat_room" style="background-color: #a9c775;">
	<tr>
	<th><h4>Hi, <a href="profile.php?userid=<?php echo $_SESSION['userid']; ?>"><?php echo $urow['your_name']; ?></a>  - <a href="logout.php" onclick="return confirm_logout();">Logout</a></h4></th>
	</tr>
	<?php
		$query=mysqli_query($conn,"select * from `chat_room`");
		$row=mysqli_fetch_array($query);
	?>
				<div>
				<tr>
				<td><?php echo $row['chat_room_name']; ?></td><br><br>
				</tr>
				</div>
			<tr>
				<td>
				<div id="result" style=" height:250px; width: 405px; overflow-y: scroll;"></div>


				<form class="form" action="home.php" >
					<!--<input type="text" id="msg">--><br/>
					<textarea id="msg" rows="1" ></textarea><br/>
					<input type="hidden" value="<?php echo $row['chat_room_id']; ?>" id="id">
					<button type="button" id="send_msg" class="btn button2">Send</button><button type="button" class="btn btn3" onclick="closeForm()">Close</button>
				</form>
				</td>
			</tr>

</table>
<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>

</body>
</html>

