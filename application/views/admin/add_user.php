<!-- Page Content Start -->
<!-- ================== -->

<div class="wraper container-fluid">

    <div class="row">
        <!-- Basic example -->
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading"><h3 class="panel-title">Create User</h3></div>
                <div class="panel-body">

                    <form class="" method="post" action="<?php echo base_url().'index.php/admin/add_user/newuser'?>">

                        <div class="col-md-3">
                            <div class="form-group">
                                <label class=" control-label">First Name</label> 
                                <input name="fname" type="text" placeholder="First Name" class="form-control"  aria-required="true">
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label class=" control-label">Last Name</label>
                                <input name="lname" type="text" placeholder="Last Name" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label class=" control-label">Mobile No.</label>
                                <input name="mobile" type="text" placeholder="Mobile No." class="form-control" required="" aria-required="true">
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label class=" control-label">Mail</label>
                                <input name="mail" type="text" placeholder="Mail id" class="form-control" required="" aria-required="true">
                            </div>
                        </div>


                        <div class="col-md-3">
                            <div class="form-group">
                                <label class=" control-label">User Type</label>  
                                <select name="usertype" class="form-control">
                                    <option value="user">User</option>
									<option value="cashier">Cashier</option>
								
                                </select>
                            </div>
                        </div>


                        <div class="col-md-3">
                            <div class="form-group">
                                <label class=" control-label">User Name</label>  
                                <input name="username" type="text" placeholder="User Name" class="form-control" required="" aria-required="true">
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label class=" control-label">Password</label>  
                                <input name="pwd" type="password" placeholder="Password" class="form-control" required="" aria-required="true">
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label class=" control-label">Confirm Password</label>  
                                <input name="cpwd" type="password" placeholder="Re-type Password" class="form-control" required="" aria-required="true">
                            </div>
                        </div>



                        <div class=" col-sm-12">
                            <div class="form-group pull-right">
                                <button class="btn btn-success" type="submit">Save</button>
                                <button class="btn btn-default" type="button">Cancel</button>
                            </div>
                        </div>


                    </form>
<script>
	$(document).ready(funtion(){
		var passw = $pwd.val();
		var cpassw = $cpwd.val();
		
		if(passw == cpassw)
		{
			return true;
		}
		else
		{
			//some method to be written such like notification or alert
		}
		
		
	});


</script>


                </div><!-- panel-body -->
            </div> <!-- panel -->
        </div> <!-- col-->

    </div> <!-- End row -->


</div>
<!-- Page Content Ends -->