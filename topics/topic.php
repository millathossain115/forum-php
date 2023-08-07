<?php require "../includes/fydpHeader.php"; ?>
<?php require "../config/config.php"; ?>
<?php 

	if(isset($_GET['id'])){
		$id = $_GET['id'];

		$topic =  $conn->query("SELECT* FROM topics WHERE id='$id' ");
		$topic->execute();
		$singleTopic = $topic->fetch(PDO::FETCH_OBJ);

		//number of post for each user
		$topicCount = $conn->query("SELECT COUNT(*) AS count_topics FROM topics WHERE user_name ='$singleTopic->user_name'");

		$topicCount->execute();
		$count = $topicCount->fetch(PDO::FETCH_OBJ);

		//Fetching replies dynamically for each topic
		$reply = $conn->query("SELECT* FROM replies WHERE topic_id='$id' ");
		
		$reply->execute();
		$allReplies = $reply->fetchAll(PDO::FETCH_OBJ);


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
										<li><?php echo $count->count_topics; ?> Posts</li>
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

					<?php foreach( $allReplies as $reply) : ?>

					<li class="topic topic">
						<div class="row border-start border-bottom border-top rounded-start-3 my-2">
							<div class="col-md-4">
								<div class="user-info  my-3">
									<img class="avatar float-start mx-3" src="../img/<?php echo $reply->user_image; ?>"  width="75" height="75"/>
									<ul class="list-unstyled">
										<li><strong><?php echo $reply->user_name; ?></strong></li>
										<li>43 Posts</li>
										<li><a href="profile.php">Profile</a>
									</ul>
								</div>
							</div>
							<div class="col-md-8 bg-body-secondary">
								<div class="topic-content float-end p-2">
									<p><?php echo $reply->reply; ?></p>
								</div>
							</div>
						</div>
					</li>

					<?php endforeach; ?>

					


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
