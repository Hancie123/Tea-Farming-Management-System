<?php
include 'db_connect.php' ;
	$convo_id =isset($_GET['convo_id']) ? $_GET['convo_id'] : '';
if(isset($_GET['uid'])){
	if(!isset($_GET['convo_id'])){
		$cdata = " user_ids = '{$_GET['uid']},{$_SESSION['login_id']}' ";
		$cdata2 = " user_ids = '{$_SESSION['login_id']},{$_GET['uid']}' ";
		$chk = $conn->query("SELECT * from thread where $cdata or $cdata2 ");
		if($chk->num_rows> 0){
			$convo_id = md5($chk->fetch_array()['id']);
		}else{
			$convo_id = '';
		}
	}
	$user = $conn->query("SELECT * FROM users where id =".$_GET['uid'])->fetch_array();
}else{
	$thread = $conn->query("SELECT * from thread where md5(id) = '".$_GET['convo_id']."' ")->fetch_array();
	$user = $conn->query("SELECT * FROM users where id in ({$thread['user_ids']}) and id !=".$_SESSION['login_id'])->fetch_array();

}
?>
		<div class="w-100" id="cheader">
		<table class="" width="100%">
			<tr>
				<td width="10%"><div class="uavatar"><img src="assets/uploads/<?php echo $user['avatar'] ?>" alt=""></div></td>
				<td><?php echo ucwords($user['name']) ?></td>
				<td width="10%"><a href="index.php?page=home"><i class="fa fa-arrow-left"></i></a></td>
			</tr>
		</table>
		</div>
		<div class="w-100" id="cbody">
			<div id="mbody">
				<div class="align-self-end w-100" id="cfield">
					
				</div>
			</div>
			<div id='nw_msg'>New Unread Message</div>
		</div>
		<div class="w-100" id="cfooter">
			<table class="table">
				<tr>
					<td width="90%">
						<form id="send_chat">
							<input type="hidden" name="convo_id" value="<?php echo isset($convo_id) ? $convo_id : '' ?>">
							<input type="hidden" name="user_id" value="<?php echo isset($_GET['uid']) ? $_GET['uid'] : '' ?>">
							<textarea class="form-control w-100" name="message"></textarea>
						</form>
					</td>
					<td width="10%">
						<button class="btn btn-primary" type="button" onclick="$('#send_chat').submit()"><i class="fa fa-paper-plane"></i></button>
					</td>
				</tr>
			</table>
			
		</div>
<div id="convo_clone" style="display: none">
	<div class="convo">
		<div class="img"><img src="assets/uploads/<?php echo $_SESSION['login_avatar'] ?>" alt=""></div>
		<div class="message"></div>
		<small class="status">Sending...</small>
	</div>
</div>
<style>
	#cheader{
		height: calc(10%);
		border-bottom: 3px solid #ecececab;
		padding:1em .5em;
	}
	#cheader img{
		max-width: calc(100%);
		max-height:calc(100%);
		    border-radius: 100%;
	}
		#cheader .uavatar {
	    width: 50px;
	    height: 50px;
	    align-self: center;
	    border-radius: 50%;
	    border: 3px solid #808080c2;
	    display: flex;
	    justify-content: center;
	    text-align: -webkit-auto;
	}
	#mbody {
	    padding: 1em .5em;
	    display: flex;
	    align-items: center;
	    justify-content: center !important;
			overflow: auto;: 		
	}
	#cbody{
	    		height: calc(75%);
				overflow: auto;: 		
	}
	#cfooter{
		height: calc(15%);
		border-top: 3px solid #ecececab;
		padding:1em .5em;
		position: relative;
		bottom: 0
	}
	.convo-right{
		padding:1em .5em;
		margin-left: calc(20%);
		direction: rtl;
		margin-bottom:5px;
		display: flex;
	}
	.convo-left{
		padding:1em .5em;
		margin-bottom:5px;
		display: flex;
	}
	.convo img{
		max-width: calc(100%);
	    border-radius: 100%;
		max-height:calc(100%);
	}
		.convo .img {
	    width: 50px;
	    height: 50px;
	    align-self: center;
	    border-radius: 50%;
	    border: 3px solid #808080c2;
	    display: flex;
	    justify-content: center;
	    text-align: -webkit-auto;
	}
	.convo{
		position: relative;
		width: calc(80%);

	}
	.convo .message {
	    max-width: calc(80%);
	    border-radius: 15px;
		overflow-wrap: break-word;
	}
	.convo-left .message {
	    background: #a6a6af;
	    margin-left: 10px;
	     padding: 1em;
	    color: white;
	}
	.convo-right .message {
	    background: #2031ff;
	    margin-right: 10px;
	    padding: 1em;
	    color: white;
	}
	small.status {
    position: absolute;
    bottom: 0;
    font-style: italic;
}
.convo-left .status {
    left: 5rem;
	  
	}
	.convo-right .status {
    right: 5rem;
	  
	}
	div#nw_msg {
		display: none;
    position: absolute;
    z-index: 10;
    background: #00a1ff;
    top: calc(79%);
    right: 30px;
    color: white;
    padding: .5em;
    border-radius: 10px;
    cursor: pointer;
}
.message{
	direction:ltr !important
}
</style>
<script>
	$(document).ready(function(){
		load_convo()
	})
	
	function received_message(data,$convo_id = '<?php echo $convo_id ?>'){
		if($convo_id == data.convo_id){
				var count = parseInt($('#cfield .convo').length) + 1;
				chat_box(data.data,count);
			}
	}
	$('[name="message"]').keypress(function(e){
		if(e.which == 13 && e.shiftKey == false){
			e.preventDefault()
			$('#send_chat').submit()
			return false
		}
	})
	$('#send_chat').submit(function(e){
		e.preventDefault()
		if($('[name="message"]').val() == '')
			return false;
		var data = {name:'<?php echo $_SESSION['login_name'] ?>',id:'<?php echo $_SESSION['login_id'] ?>',avatar:'<?php echo $_SESSION['login_avatar'] ?>',message:$('[name="message"]').val()}
		var count = parseInt($('#cfield .convo').length) + 1;
		chat_box(data,count)
		$('#cbody').animate({scrollTop: $('#mbody').height()},"fast");
		var frmData = $(this).serialize()
		$('[name="message"]').val('')

		$.ajax({
			url:'ajax.php?action=send_chat',
			method:'POST',
			data:frmData,
			success:function(resp){
				resp = JSON.parse(resp)
				if(resp.status == 1){
					$('.convo .status[data-id="'+count+'"]').html('Sent');
					websocket.send(JSON.stringify({type:'chat_sent',data:data,convo_id:resp.convo_id,by:'<?php echo $_SESSION['login_id'] ?>',user_ids:resp.convo_users}))
				}
			}
		})
	})
	window.chat_box=function(data,count,loaded =0){
		var ctype = '<?php echo $_SESSION['login_id'] ?>' == data.id ? 'convo-right' : 'convo-left';
		var cfield = $('#convo_clone .convo').clone()
		cfield.addClass(ctype)
		var message = data.message
			message = message.replace(/\r?\n/g, '<br />')
		cfield.find('.message').html(message)
		cfield.find('img').attr('src','assets/uploads/'+data.avatar)
		cfield.find('img').attr('src','assets/uploads/'+data.avatar)
		cfield.find('.status').attr('data-id',count)
		if(loaded == 1)
		cfield.find('.status').html('Sent')
		if('<?php echo $_SESSION['login_id'] ?>' != data.id){
			cfield.find('.status').html(data.name)
		}
		var scrolltop =$('#cbody').scroll().get(0).scrollTop
		var scrollheight =$('#mbody').height()
		var scrolloff =parseFloat(scrolltop) + parseFloat($('#cbody').scroll().get(0).offsetHeight)
		if(scrolloff >= scrollheight)
			var autoscroll = true;
		else
			var autoscroll = false;

		$('#cfield').append(cfield)
		if(loaded == 0){
		if(autoscroll == true)
				$('#cbody').animate({scrollTop: $('#mbody').height()},"fast");
		else
			$('#nw_msg').show()
		}
		var li = $('#convo-list li[data-id="<?php echo $convo_id ?>"]')
		$.ajax({
			url:'ajax.php?action=read_msg',
			method:'POST',
			data:{convo_id:"<?php echo $convo_id ?>",user_id:'<?php echo isset($user) ? $user['id']: '' ?>'},
			success:function(resp){
				if(resp == 1){
					li.find('.notif').html('0').hide()
				}
			}
		})
	}
	$('#nw_msg').click(function(){
				$('#cbody').animate({scrollTop: $('#mbody').height()},"fast");
				$(this).hide()
	})
	$('#cbody').scroll(function(e){
		if($(this).scrollTop() + $(this).innerHeight() >= $(this)[0].scrollHeight)
			$('#nw_msg').hide()
		})
	window.load_convo = function($convo_id='<?php echo $convo_id ?>'){
		$('#cfield').html("<center>Loading Conversation...</center>")
		$.ajax({
			url:'ajax.php?action=load_convo',
			method:'POST',
			data:{convo_id:$convo_id},
			success:function(resp){
				if(resp){
					resp = JSON.parse(resp)
					if(Object.keys(resp).length > 0){
						$('#cfield').html("")
						Object.keys(resp).map(k=>{
							var count = parseInt($('#cfield .convo').length) + 1;
								chat_box(resp[k],count,'1')
						})
					}else{
						$('#cfield').html("<center>No Data</center>")
					}
				}
			},
			complete:function(){
				$('#cbody').animate({scrollTop: $('#mbody').height()},"fast");
			}
		})

	}
</script>