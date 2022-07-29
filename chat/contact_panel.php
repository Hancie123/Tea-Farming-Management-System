<?php 
include 'db_connect.php'
?>
<div class="container-fluid pt-3" id="contact-panel">
	<div class="col-lg-12">
		<div class="row">
			<form action="" id="filter-contact" class=" w-100">
				<div class="form-group" id="filter-row">
					<input type="text" class="form-control" placeholder="Search user here" id="find_user">
					<div id="filtered-field" style="display: none">
						
					</div>
				</div>
			</form>
		</div>

	</div>
<ul class="list-group" id="convo-list">
	<?php 
	$thread = $conn->query("SELECT * from thread where concat('[',REPLACE(user_ids,',','],['),']') like '%[{$_SESSION['login_id']}]%' ");
	while($row= $thread->fetch_array()):
		$user = $conn->query("SELECT * FROM users where id in ({$row['user_ids']}) and id!= {$_SESSION['login_id']} ")->fetch_array();
		$msg = $conn->query("SELECT * FROM messages where convo_id = {$row['id']} and user_id='{$user['id']}' and status = 0 order by id desc limit 1 ")->num_rows;
	?>
	<li class="list-group-item w-100" data-id="<?php echo md5($row['id']) ?>">
		<table class="" width="100%">
			<tr>
				<td width="10%"><div class="uavatar"><img src="assets/uploads/<?php echo $user['avatar'] ?>" alt=""></div></td>
				<td><?php echo ucwords($user['name']) ?><span class="badge badge-danger float-right notif"><?php echo $msg ?></span></td>
			</tr>
		</table>
	</li>
<?php endwhile; ?>
</ul>
	<div id="search_clone" style="display: none">
		<div class="searched-user">
			<table width="100%">
				<tr>
					<td width="10%"><img src="" alt=""></td>
					<td width="90%">  <span></span></td>
				</tr>
			</table>
			<hr>
		</div>
	</div>
</div>
<ul id="clone_ul" style="display: none">
	<li class="list-group-item w-100" >
		<table class="" width="100%">
			<tr>
				<td width="10%"><div class="uavatar"><img src="" alt=""></div></td>
				<td ><span class="uname"></span><span class="badge badge-danger float-right notif">0</span></td>
			</tr>
		</table>
	</li>
</ul>
<style>
.notif {
	position:relative;
	top:-15px;
	display:none;
}
	div#contact-panel {
    position: fixed;
    background: white;
    height: calc(100% - 4rem);
    width: 18.5rem;
    top: 3.5rem;
    left: 0;
}
#convo-list li{
	cursor:pointer
}
#convo-list li:hover{
	cursor:pointer;
	background: #008bff47;
}
#convo-list img{
		max-width: calc(100%);
		max-height:calc(100%);
		    border-radius: 100%;
	}
		#convo-list .uavatar {
	    width: 50px;
	    height: 50px;
	    align-self: center;
	    border-radius: 50%;
	    border: 3px solid #808080c2;
	    display: flex;
	    justify-content: center;
	    text-align: -webkit-auto;
	}
#fileter-row{
	position: relative;
}
.searched-user img{
    max-width: calc(80%);
    max-height: calc(20vh);
    margin: 5px;
}
.searched-user span{
	padding-left: 5px;
}
.searched-user{
	cursor:pointer;
}
.searched-user:hover{
	background: #008bff47;
	color: white;
}
#filtered-field{
	position: absolute;
	background: white;
	border:1px solid gray;
    width: calc(100%);
    z-index: 10
}
</style>
<script>
	$(document).ready(function(){
		var li = $("#convo-list")
		li.find('.notif').each(function(){
			if($(this).html() > 0){
				$(this).show()
			}
		})
	})
	$('#find_user').on('keyup keydown keypress change',function(){
		if($(this).val() == ''){
			$('#filtered-field').toggle(false)
		}else{
			$('#filtered-field').toggle(true)
		}
		$('#filtered-field').html('<div class="text-center">Loading...</div>')
		$.ajax({
			url:'ajax.php?action=get_users',
			method:'POST',
			data:{filter:$(this).val()},
			success:function(resp){
				if(resp){
					resp = JSON.parse(resp)
					$('#filtered-field').html('')
					if(Object.keys(resp).length > 0){
						Object.keys(resp).map(k=>{
							var div = $('#search_clone .searched-user').clone()
							div.find('img').attr('src','assets/uploads/'+resp[k].avatar)
							div.find('span').html(resp[k].name)
							div.attr('data-id',resp[k].id)
							$('#filtered-field').append(div)
						})
					}else{
						$('#filtered-field').html('<div class="text-center">No result</div>')
					}
				}
			},
			complete:()=>{
				$('.searched-user').click(function(){
					console.log('test')
					location.href = "index.php?page=conversation&uid="+$(this).attr('data-id')
				})
			}
		})
	})
$('#convo-list li').click(function(){
	location.href = "index.php?page=conversation&convo_id="+$(this).attr('data-id')
})
websocket.onmessage = function(e){
		var data = JSON.parse(e.data)
		if(data == null)
			return false;
		console.log(data)
		if(data.type=="chat_sent" && data.by != "<?php echo $_SESSION['login_id'] ?>"){
			if($('#convo-list li[data-id="'+data.convo_id+'"]').length > 0 ){
				var li_clone = $('#convo-list li[data-id="'+data.convo_id+'"]').clone()
				 $('#convo-list li[data-id="'+data.convo_id+'"]').remove()
				$('#convo-list').prepend(li_clone)
			}else{
				var li = $('#clone_ul li').clone()
				li.find('img').attr('src',data.data.avatar)
				li.find('.uname').html(data.data.name)
				$('#convo-list').prepend(li)

			}
		}
	}
	function renew_contacts(data){
		var users =  data.user_ids.split(',')
		var mid = '<?php echo $_SESSION['login_id'] ?>';

		if($.inArray(mid,users) > -1){
			console.log($('#convo-list li[data-id="'+data.convo_id+'"]').length)
			if($('#convo-list li[data-id="'+data.convo_id+'"]').length > 0 ){
				var li_clone = $('#convo-list li[data-id="'+data.convo_id+'"]').clone()
				 $('#convo-list li[data-id="'+data.convo_id+'"]').remove()
				$('#convo-list').prepend(li_clone)
			}else{
				var li = $('#clone_ul li').clone()
				li.attr('data-id',data.convo_id)
				li.find('img').attr('src','assets/uploads/'+data.data.avatar)
				li.find('.uname').html(data.data.name)
				$('#convo-list').prepend(li)

			}
		}
		$('#convo-list li').click(function(){
			location.href = "index.php?page=conversation&convo_id="+$(this).attr('data-id')
		})
	}
	function notify($convo_id=''){
		var li = $('#convo-list li[data-id="'+$convo_id+'"]')
		if(li.length > 0){
			var notif = li.find('.notif').html();
			notif = parseFloat(notif) + 1;
			li.find('.notif').html(notif).show()
			
		}
	}
</script>