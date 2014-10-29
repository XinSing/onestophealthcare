<!-- delete article article.php-->
<div class="modal fade" id="modaldeletearticle" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false">
    <div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-body">
				<form id='deletearticleform' action='article.php' method='post' class='form-horizontal'>
					<fieldset>
						<legend>Are you sure to delete this article?</legend>
						<input type='hidden' value='deleteArticle' name='action'/>
						<input type='hidden' value='0' name='deleteid' id='deleteid'/>
						<div class='submit-group'>
							<input type='submit' class='btn btn-primary btn-xs' value='Confirm'/>
							<button type="button" class="btn btn-default btn-xs" data-dismiss="modal">Cancel</button>
						</div>
					</fieldset>
				</form>
			</div>
		</div>
    </div>
</div>

<!-- add article, article.php -->
<div class="modal fade" id="modaladdarticle" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
    <div class="modal-dialog" style='width:90%'>
		<div class="modal-content">
			<div class="modal-body">
				<form id='addsectionform' action='article.php' method='post' class='form-horizontal' enctype="multipart/form-data">
					<fieldset>
						<legend>Add Article</legend>
						<div class='form-group'>
							<label for='inputtitle' class='col-lg-2 control-label'>Article Title:</label>
							<div class='col-lg-9'>
								<input required type='text' id='articletitle' autocomplete='off' class='form-control' placeholder='Enter article Title Here' name='articletitle'/>
							</div>
						</div>
						<div class='form-group'>
							<label for='inputAddress' class='col-lg-2 control-label'>Article Content:</label>
							<div class='col-lg-9'>
								<textarea required  spellcheck='false' id='articlecontent' name='articlecontent'></textarea>
							</div>
							<script>CKEDITOR.replace( 'articlecontent' );</script>
						</div>
						<div class='form-group'>
							<label for='inputtitle' class='col-lg-2 control-label'>Article Category:</label>
							<div class='col-lg-9'>
								<select name='categoryid'>
									<?php foreach($categories as $ca){?>
									<option value='<?php echo $ca['id']?>'><?php echo $ca['category']?></option>
									<?php } ?>
								</select>
							</div>
						</div>
						<input type='hidden' value='addArticle' name='action'/>
						<div class='submit-group'>
							<input type='submit' class='btn btn-primary' value='Confirm'/>
							<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
						</div>
					</fieldset>
				</form>
			</div>
		</div>
    </div>
</div>

<!-- edit article, article.php -->
<div class="modal fade" id="modaleditarticle" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
    <div class="modal-dialog" style='width:90%'>
		<div class="modal-content">
			<div class="modal-body">
				<form id='' action='article.php' method='post' class='form-horizontal' enctype="multipart/form-data">
					<fieldset>
						<legend>Edit Article</legend>
						<div class='form-group'>
							<label for='inputtitle' class='col-lg-2 control-label'>Article Title:</label>
							<div class='col-lg-9'>
								<input required type='text' id='' autocomplete='off' class='form-control' placeholder='Enter article Title Here' name='articletitle'/>
							</div>
						</div>
						<div class='form-group'>
							<label for='inputAddress' class='col-lg-2 control-label'>Article Content:</label>
							<div class='col-lg-9'>
								<textarea required  spellcheck='false' id='' name='articlecontent2'></textarea>
							</div>
							<script>CKEDITOR.replace( 'articlecontent2' );</script>
						</div>
						<div class='form-group'>
							<label for='inputtitle' class='col-lg-2 control-label'>Article Category:</label>
							<div class='col-lg-9'>
								<select name='categoryid'>
									<?php foreach($categories as $ca){?>
									<option value='<?php echo $ca['id']?>'><?php echo $ca['category']?></option>
									<?php } ?>
								</select>
							</div>
						</div>
						<input type='hidden' value='editArticle' name='action'/>
						<input type='hidden' value='0' name='editid'/>
						<div class='submit-group'>
							<input type='submit' class='btn btn-primary' value='Confirm'/>
							<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
						</div>
					</fieldset>
				</form>
			</div>
		</div>
    </div>
</div>

<!-- delete video, video.php -->
<div class="modal fade" id="modaldeletevideo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false">
    <div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-body">
				<form id='' action='video.php' method='post' class='form-horizontal'>
					<fieldset>
						<legend>Are you sure to delete this video?</legend>
						<input type='hidden' value='deleteVideo' name='action'/>
						<input type='hidden' value='<?php if(isset($_GET['vid'])) echo $_GET['vid']?>' name='deleteid'/>
						<div class='submit-group'>
							<input type='submit' class='btn btn-primary btn-xs' value='Confirm'/>
							<button type="button" class="btn btn-default btn-xs" data-dismiss="modal">Cancel</button>
						</div>
					</fieldset>
				</form>
			</div>
		</div>
    </div>
</div>

<!-- add video, video.php -->
<div class="modal fade" id="modaladdvideo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" style=''>
		<div class="modal-content">
			<div class="modal-body">
				<form id='addsectionform' action='video.php' method='post' class='form-horizontal' enctype="multipart/form-data">
					<fieldset>
						<legend>Add Video</legend>
						<div class='form-group'>
							<label for='inputtitle' class='col-lg-4 control-label'>Video Title:</label>
							<div class='col-lg-7'>
								<input required type='text' id='inputName' autocomplete='off' class='form-control' placeholder='Enter Video Title Here' name='vidtitle'/>
							</div>
						</div>
						<div class='form-group'>
							<label for='inputAddress' class='col-lg-4 control-label'>Video Description:</label>
							<div class='col-lg-7'>
								<textarea required class='form-control' spellcheck='false' autocomplete='off' name='viddescription' rows='3' placeholder='Enter Video Description Here'></textarea>
							</div>
						</div>
						<div class='form-group'>
							<label for='inputAddress' class='col-lg-4 control-label'>Video File:</label>
							<div class='col-lg-7'>
								<input required type='file' id='file' autocomplete='off' class='' name='file'/>
							</div>
						</div>
						<input type='hidden' value='addVideo' name='action'/>
						<div class='submit-group'>
							<input type='submit' class='btn btn-primary' value='Confirm'/>
							<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
						</div>
					</fieldset>
				</form>
			</div>
		</div>
    </div>
</div>

<!-- add thread, forum.php -->
<div class="modal fade" id="modaladdthread" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" style=''>
		<div class="modal-content">
			<div class="modal-body">
				<form id='addthreadform' action='forum.php' method='post' class='form-horizontal' enctype="multipart/form-data">
					<fieldset>
						<legend>Create New Thread</legend>
						<div class='form-group'>
							<label for='inputAddress' class='col-lg-4 control-label'>Thread Content:</label>
							<div class='col-lg-7'>
								<textarea required class='form-control' spellcheck='false' autocomplete='off' name='content' rows='4' placeholder='Enter thread content Here'></textarea>
							</div>
						</div>
						<input type='hidden' value='addThread' name='action'/>
						<input type='hidden' value='' name='forumSection'/>
						<div class='submit-group'>
							<input type='submit' class='btn btn-primary' value='Confirm'/>
							<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
						</div>
					</fieldset>
				</form>
			</div>
		</div>
    </div>
</div>

<!-- add comment, thread.php -->
<div class="modal fade" id="modaladdcomment" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" style=''>
		<div class="modal-content">
			<div class="modal-body">
				<form id='addcommentform' action='thread.php?id=<?php echo $_GET['id']?>' method='post' class='form-horizontal' enctype="multipart/form-data">
					<fieldset>
						<legend>Add New Comment</legend>
						<div class='form-group'>
							<label for='inputAddress' class='col-lg-4 control-label'>Comment:</label>
							<div class='col-lg-7'>
								<textarea required class='form-control' spellcheck='false' autocomplete='off' name='comment' rows='4' placeholder='Enter comment Here'></textarea>
							</div>
						</div>
						<input type='hidden' value='addComment' name='action'/>
						<input type='hidden' value='<?php echo $_GET['id']?>' name='id'/>
						<div class='submit-group'>
							<input type='submit' class='btn btn-primary' value='Confirm'/>
							<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
						</div>
					</fieldset>
				</form>
			</div>
		</div>
    </div>
</div>

<!-- delete thread, forum.php -->
<div class="modal fade" id="modaldeletethread" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false">
    <div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-body">
				<form id='' action='forum.php' method='post' class='form-horizontal'>
					<fieldset>
						<legend>Are you sure to delete this thread?</legend>
						<input type='hidden' value='deleteThread' name='action'/>
						<input type='hidden' value='<?php if(isset($_GET['id'])) echo $_GET['id']?>' name='deleteid'/>
						<div class='submit-group'>
							<input type='submit' class='btn btn-primary btn-xs' value='Confirm'/>
							<button type="button" class="btn btn-default btn-xs" data-dismiss="modal">Cancel</button>
						</div>
					</fieldset>
				</form>
			</div>
		</div>
    </div>
</div>

<!-- delete comment, forum.php -->
<div class="modal fade" id="modaldeletecomment" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false">
    <div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-body">
				<form id='' action='thread.php?id=<?php if(isset($_GET['id'])) echo $_GET['id']?>' method='post' class='form-horizontal'>
					<fieldset>
						<legend>Are you sure to delete this comment?</legend>
						<input type='hidden' value='deleteComment' name='action'/>
						<input type='hidden' value='<?php if(isset($_GET['id'])) echo $_GET['id']?>' name='threadid'/>
						<input type='hidden' value='<?php if(isset($_GET['id'])) echo $_GET['id']?>' name='deleteid'/>
						<div class='submit-group'>
							<input type='submit' class='btn btn-primary btn-xs' value='Confirm'/>
							<button type="button" class="btn btn-default btn-xs" data-dismiss="modal">Cancel</button>
						</div>
					</fieldset>
				</form>
			</div>
		</div>
    </div>
</div>