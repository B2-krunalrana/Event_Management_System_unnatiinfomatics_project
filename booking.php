<div class="container-fluid">
	<form action="" id="manage-book">
		<input type="hidden" name="id" value="<?php echo isset($id) ? $id :'' ?>">
		<input type="hidden" name="venue_id" value="<?php echo isset($_GET['venue_id']) ? $_GET['venue_id'] :'' ?>">
		<div class="form-group">
			<label for="" class="control-label">Full Name</label>
			<input type="text" class="form-control" name="name"  value="<?php echo isset($name) ? $name :'' ?>" required>
		</div>
		<div class="form-group">
			<label for="" class="control-label">Address</label>
			<textarea cols="30" rows = "2" required="" name="address" class="form-control"><?php echo isset($address) ? $address :'' ?></textarea>
		</div>
		<div class="form-group">
			<label for="" class="control-label">Email</label>
			<input type="email" class="form-control" name="email"  value="<?php echo isset($email) ? $email :'' ?>" required>
		</div>
		<div class="form-group">
			<label for="" class="control-label">Contact #</label>
			<input type="text" class="form-control" name="contact"  value="<?php echo isset($contact) ? $contact :'' ?>" required>
		</div>
		<div class="form-group">
			<label for="" class="control-label">Duration</label>
			<input type="text" class="form-control" name="duration"  value="<?php echo isset($duration) ? $duration :'' ?>" required>
		</div>
		<div class="form-group">
			<label for="" class="control-label">Desired Event Schedule</label>
			<input type="text" class="form-control datetimepicker" name="schedule"  value="<?php echo isset($schedule) ? $schedule :'' ?>" required>
		</div>
	</form>
</div>

<!-- echo phph here  --> 
<!--  chek complet we can live  -->
<!--  check o/p : wen  we got p/l  -->   





<script>
	 $('.datetimepicker').datetimepicker({
	      format:'Y/m/d H:i',  // this will thourgf=gh css out so it not work properly 
	      startDate: '+3d'
	  })
	
	$('#manage-book').submit(function(e){
		e.preventDefault()
		start_load()
		$('#msg').html('')
		// check o/p here and get response for errors
		$.ajax({
			url:'admin/ajax.php?action=save_book',
			data: new FormData($(this)[0]),
		    cache: false,
		    contentType: false,
		    processData: false,
		    method: 'POST',
		    type: 'POST',
			//  post response give u o.p as posibble as server 
			//  hcek o.pwhich give u next few o/p 
			//  check ff-cg give an un expected o/p error 
			// we will not got a response from the server
			success:function(resp){
				if(resp==1){
					alert_toast("book Request Sent.",'success')
						end_load()
						uni_modal("","book_msg.php")
						// uni_model("","book_msg.php")
						//  iamge path and dimention 721 px width 
						//  logo width and hight  721px * 55px
				}
			}
		})
	})
</script>


<!--  check o/p and get response   -->