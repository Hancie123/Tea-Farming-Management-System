<div id="profile">
    <div>
        <div class="img">
            <img src="assets/uploads/<?php echo $_SESSION['login_avatar'] ?>" id="pp" alt="">
        </div>
        <br>
        <div><h4><b><?php echo ucwords($_SESSION['login_name']) ?></b></h4></div>
    </div>
</div>
<style>
    #profile{
        display:flex;
        height:calc(100%);
        width:calc(100%);
        justify-content:center;
        align-items:center
    }
    #pp{
        max-width: calc(100%);
		max-height:calc(100%);
		    border-radius: 100%;
    }
    .img{
        width: 150px;
	    height: 150px;
	    align-self: center;
	    border-radius: 50%;
	    border: 3px solid #808080c2;
	    display: flex;
	    justify-content: center;
	    text-align: -webkit-auto;
    }
</style>