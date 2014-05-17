
<div class="modal fade" id="reminder1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
		<div class="modal-content text-danger text-center" style='margin-top:15vh'>
			<h1>Let Your Eyes Rest, Do Not Face The Computer Screen For Too Long.</h1>
		</div>
		<div class='arrow-down' style='position:absolute;bottom:10px;right:-18px;'></div>
    </div>
</div>
<div class="modal fade" id="reminder2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
		<div class="modal-content text-danger text-center" style='margin-top:15vh'>
			<h1>Don't Forget To Drink Water <i class='fa fa-smile-o'></i></h1>
		</div>
		<div class='arrow-down' style='position:absolute;bottom:10px;right:-18px;'></div>
    </div>
</div>
<div class="modal fade" id="reminder3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
		<div class="modal-content text-danger text-center" style='margin-top:15vh'>
			<h1>Take Frequent Short Breaks And Go For A Walk.</h1>
		</div>
		<div class='arrow-down' style='position:absolute;bottom:10px;right:-18px;'></div>
    </div>
</div>
<div class="modal fade" id="reminder3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
		<div class="modal-content text-danger text-center" style='margin-top:15vh'>
			<h1>Do Stretching Exercises At Your Desk, Stand Often.</h1>
		</div>
		<div class='arrow-down' style='position:absolute;bottom:10px;right:-18px;'></div>
    </div>
</div>


<script>
function hide_reminder(){
	$('.modal').modal('hide');
	setTimeout(function(){	
		reminder();
	},1000)
}
function reminder(){
	$('#reminder'+Math.floor((Math.random() * 3) + 1)).modal('show');
	setTimeout(function(){	
		hide_reminder();
	},100000); // second and above
}

setTimeout(function(){
	reminder();
},10000);//first time in milisecond
</script>

<style>
.arrow-down {
width: 0px;
height: 0px;
border-top: 20px solid transparent;
border-bottom: 20px solid transparent;
border-left: 20px solid #fff;
}
</style>