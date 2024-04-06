<?php 
/* Template Name: Example Template */

get_header();
?>
<content>
    <div class="container-fluid">
        <?php get_template_part( 'template-parts/banner/banner', 'home' );?>
        <div class="row justify-content-center aos-init aos-animate">
            <?php get_template_part( 'template-parts/page/page', 'title' );?>
            <div class="col-12 col-lg-10 common-page">
                <form autocomplete="off" id="testform">
                	<div class="errormessage"> </div>
                	 <div class="form-group col-6">
				    <label for="exampleInputEmail1">First Name</label>
				    <input type="text" class="form-control" id="exampleInputfname" aria-describedby="emailHelp" placeholder="Enter First Name" name="firstname">
				  </div>
				   <div class="form-group col-6">
				    <label for="exampleInputEmail1">Last Name</label>
				    <input type="text" class="form-control" id="exampleInputlname" aria-describedby="emailHelp" placeholder="Enter First Name" name="lastname">
				  </div>
				  <div class="form-group col-6">
				    <label for="exampleInputEmail1">Email address</label>
				    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
				    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
				  </div>
				  <div class="form-group col-6">
				    <label for="exampleInputPassword1">Password</label>
				    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
				  </div>
				 <div class="form-group col-6">
				    <label for="exampleInputPassword1">Upload file</label>
				    <input type="file" class="form-control" id="exampleInputfile" placeholder="file" name="fileupload">
				  </div>
				  <input type="submit" class="btn btn-primary" value="Submit">
				</form>
            </div>
        </div>
    </div>
</content>



<?php
get_footer();

?>