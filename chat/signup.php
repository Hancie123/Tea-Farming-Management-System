<?php include 'db_connect.php' ?>
<style>
img#cimg {
    max-width: 150px;
    max-height: 200px;
}
</style>
<div class="container-fluid">
	<form action="" id="create-account">
		<div id="msg"></div>
		<div class="form-group">
			<label for="" class="control-label">Name</label>
			<input type="text" name="name" class="form-control" required>
		</div>
		<div class="form-group">
			<label for="" class="control-label">Username</label>
			<input type="text" name="username" class="form-control" required>
		</div>
		<div class="form-group">
			<label for="" class="control-label">Password</label>
			<input type="password" name="password" class="form-control" required>
		</div>
		<div class="form-group">
			<label for="" class="control-label">Avatar</label>
			<input type="file" class="form-control" name="img" onchange="displayImg(this,$(this))">
		</div>
		<div class="form-group">
				<img src="" alt="" id="cimg">
		</div>
	</form>
</div>
<script>
	function displayImg(input,_this) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
        	$('#cimg').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}
$('#create-account').submit(function(e){
		e.preventDefault()
		start_load()
		$('#msg').html('')
		$.ajax({
			url:'ajax.php?action=create_account',
			data: new FormData($(this)[0]),
		    cache: false,
		    contentType: false,
		    processData: false,
		    method: 'POST',
		    type: 'POST',
			error:err=>{
				console.log(err)
			},
			success:function(resp){
				resp = JSON.parse(resp)
				if(resp.status == 1){
						location.replace('index.php')
				}else{
					$('#msg').html("<div class='alert alert-danger'>"+resp.msg+"</div>")
					end_load()
				}
			}
		})

	})
</script>