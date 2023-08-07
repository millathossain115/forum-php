<?php require "../includes/fydpHeader.php"; ?>
<?php require "../config/config.php"; ?>
<?php 

	if(isset($_GET['id'])){
		$id = $_GET['id'];

		$topic =  $conn->query("SELECT* FROM topics WHERE id='$id' ");
		$topic->execute();
		$singleTopic = $topic->fetch(PDO::FETCH_OBJ);
	}


?>

    <div class="container mt-4">
		<div class="row">
			<div class="col-md-8">
				<div class="main-col">
					<div class="block">

						<h4 class="float-start mt-3 mb-0 ms-3"><?php echo $singleTopic->title; ?></h4>
						<h6 class="float-end mt-3 mb-0 me-3 text-muted">A Simple Forum</h6>
						<div class="clearfix"></div>
						<hr class="mx-3">

                    
                        <!-- Topic 1 -->

						<ul class="list-unstyled mx-4" id="topics">

					


					<li class="topic topic">
						<div class="row border-start border-bottom border-top rounded-start-3 my-2">
							<div class="col-md-4">
								<div class="user-info  my-3">
									<img class="avatar float-start mx-3" src="../img/<?php echo $singleTopic->user_image; ?>"  width="75" height="75"/>
									<ul class="list-unstyled">
										<li><strong><?php echo $singleTopic->user_name; ?></strong></li>
										<li>43 Posts</li>
										<li><a href="profile.php">Profile</a>
									</ul>
								</div>
							</div>
							<div class="col-md-8 bg-body-secondary">
								<div class="topic-content float-end p-2">
									<p><?php echo $singleTopic->body; ?></p>
								</div>
							</div>
						</div>
					</li>
					<li class="topic topic">
						<div class="row border-start border-bottom border-top rounded-start-3 my-2">
							<div class="col-md-4">
								<div class="user-info  my-3">
									<img class="avatar float-start mx-3" src="img/gravatar.png"  width="75" height="75"/>
									<ul class="list-unstyled">
										<li><strong>Millat Hossain</strong></li>
										<li>43 Posts</li>
										<li><a href="profile.php">Profile</a>
									</ul>
								</div>
							</div>
							<div class="col-md-8 bg-body-secondary">
								<div class="topic-content float-end p-2">
									<p>Congrats on how to make a href and inserting an image...
                                        You can learn HTML/CSS pretty fast, though how to use it in different scenarios is a whole other deal.I like to check out tutorials on how to implement the newest within html/css (html5 / css3), or check out the works of others and try to implement myself.</p>
								</div>
							</div>
						</div>
					</li>
					<li class="topic topic">
						<div class="row border-start border-bottom border-top rounded-start-3 my-2">
							<div class="col-md-4">
								<div class="user-info  my-3">
									<img class="avatar float-start mx-3" src="img/gravatar.png"  width="75" height="75"/>
									<ul class="list-unstyled">
										<li><strong>Millat Hossain</strong></li>
										<li>43 Posts</li>
										<li><a href="profile.php">Profile</a>
									</ul>
								</div>
							</div>
							<div class="col-md-8 bg-body-secondary">
								<div class="topic-content float-end p-2">
									<p>w3schools is very good. I can't code an entire site, but I can handle basic things like links, fonts and colors. I'm not intimidated by the site of code.</p>
								</div>
							</div>
						</div>
					</li>
					<li class="topic topic">
						<div class="row border-start border-bottom border-top rounded-start-3 my-2">
							<div class="col-md-4">
								<div class="user-info  my-3">
									<img class="avatar float-start mx-3" src="img/gravatar.png"  width="75" height="75"/>
									<ul class="list-unstyled">
										<li><strong>Millat Hossain</strong></li>
										<li>43 Posts</li>
										<li><a href="profile.php">Profile</a>
									</ul>
								</div>
							</div>
							<div class="col-md-8 bg-body-secondary">
								<div class="topic-content float-end p-2">
									<p>Personally, I started to look at some examples and after I build some crapy sites, I learned quite well. As a recommendation, you can check http://www.w3schools.com/ ., the site is pretty complete.</p>
								</div>
							</div>
						</div>
					</li>
					<li class="topic topic">
						<div class="row border-start border-bottom border-top rounded-start-3 my-2">
							<div class="col-md-4">
								<div class="user-info   my-3">
									<img class="avatar float-start mx-3" src="img/gravatar.png"  width="75" height="75"/>
									<ul class="list-unstyled">
										<li><strong>Millat Hossain</strong></li>
										<li>43 Posts</li>
										<li><a href="profile.php">Profile</a>
									</ul>
								</div>
							</div>
							<div class="col-md-8 bg-body-secondary">
								<div class="topic-content float-end p-2">
									<p>html and css are basic there not much to them the main then you need to learn is how elements interact as one element can make another element behave differently this is the most complex part including cross brower compatability</p>
								</div>
							</div>
						</div>
					</li>


				</ul>

				<h4 class="ms-3 mb-0 mt-4">Reply To Topic</h4>
                <hr class="mx-3">
				<form role="form">				
  					<div class="form-group fw-bold mb-2 mt-2 mx-3">
						<!-- <textarea id="reply" rows="10" cols="80" class="form-control" name="reply"></textarea>
						<script>
							CKEDITOR.replace( 'reply' );
            			</script> -->

                        <textarea id="reply"  name="reply" placeholder="Write here" class="form-control mb-3" rows="12" cols="50"></textarea>
									<!-- <script>CKEDITOR.replace('body');</script> -->
                                    <script>
                                        window.onload = function() {
                                        CKEDITOR.replace('reply');
                                        };
                                    </script>
  					</div>
 					 <button type="submit" class="btn btn-primary mb-3 mt-4 ms-3">Submit</button>
				</form>
					</div>
				</div>
			</div>


<?php require "../includes/fydpFooter.php"; ?>
