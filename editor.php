<?php include "include/editor_header.php" ?>
<?php include "include/editor_nav.php" ?>


						<div class="top_menu">
						        <div class="main-search">
											<form>
											   <input type="text" value="Search" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Search';}" class="text"/>
												<input type="submit" value=""/>
											</form>
									<div class="close"><img src="images/cross.png" /></div>
								</div>
									<div class="srch"><button></button></div>
									<script type="text/javascript">
										 $('.main-search').hide();
										$('button').click(function (){
											$('.main-search').show();
											$('.main-search text').focus();
										}
										);
										$('.close').click(function(){
											$('.main-search').hide();
										});
									</script>
							<!--/profile_details-->
								<div class="profile_details_left">
									<ul class="nofitications-dropdown">
											<li class="dropdown note dra-down">
											  <div id="dd" class="wrapper-dropdown-3" tabindex="1">
																			<span>Italy</span>
																			<ul class="dropdown">
																				<li><a class="deutsch">France</a></li>
																				<li><a class="english"> Italy</a></li>
																				<li><a class="espana">Brazil</a></li>
																				<li><a class="russian">Usa</a></li>

																			</ul>
																		</div>
																		<script type="text/javascript">

																	function DropDown(el) {
																		this.dd = el;
																		this.placeholder = this.dd.children('span');
																		this.opts = this.dd.find('ul.dropdown > li');
																		this.val = '';
																		this.index = -1;
																		this.initEvents();
																	}
																	DropDown.prototype = {
																		initEvents : function() {
																			var obj = this;

																			obj.dd.on('click', function(event){
																				$(this).toggleClass('active');
																				return false;
																			});

																			obj.opts.on('click',function(){
																				var opt = $(this);
																				obj.val = opt.text();
																				obj.index = opt.index();
																				obj.placeholder.text(obj.val);
																			});
																		},
																		getValue : function() {
																			return this.val;
																		},
																		getIndex : function() {
																			return this.index;
																		}
																	}

																	$(function() {

																		var dd = new DropDown( $('#dd') );

																		$(document).click(function() {
																			// all dropdowns
																			$('.wrapper-dropdown-3').removeClass('active');
																		});

																	});

																</script>


										</li>

										<li class="dropdown note">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-envelope-o"></i> <span class="badge">3</span></a>


												<ul class="dropdown-menu two first">
														<li>
															<div class="notification_header">
																<h3>You have 3 new messages  </h3>
															</div>
														</li>
														<li><a href="#">
														   <div class="user_img"><img src="images/1.jpg" alt=""></div>
														   <div class="notification_desc">
															<p>Lorem ipsum dolor sit amet</p>
															<p><span>1 hour ago</span></p>
															</div>
														   <div class="clearfix"></div>
														 </a></li>
														 <li class="odd"><a href="#">
															<div class="user_img"><img src="images/in.jpg" alt=""></div>
														   <div class="notification_desc">
															<p>Lorem ipsum dolor sit amet </p>
															<p><span>1 hour ago</span></p>
															</div>
														  <div class="clearfix"></div>
														 </a></li>
														<li><a href="#">
														   <div class="user_img"><img src="images/in1.jpg" alt=""></div>
														   <div class="notification_desc">
															<p>Lorem ipsum dolor sit amet </p>
															<p><span>1 hour ago</span></p>
															</div>
														   <div class="clearfix"></div>
														</a></li>
														<li>
															<div class="notification_bottom">
																<a href="#">See all messages</a>
															</div>
														</li>
													</ul>
										</li>

							<li class="dropdown note">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-bell-o"></i> <span class="badge">5</span></a>

									<ul class="dropdown-menu two">
										<li>
											<div class="notification_header">
												<h3>You have 5 new notification</h3>
											</div>
										</li>
										<li><a href="#">
											<div class="user_img"><img src="images/in.jpg" alt=""></div>
										   <div class="notification_desc">
											<p>Lorem ipsum dolor sit amet</p>
											<p><span>1 hour ago</span></p>
											</div>
										  <div class="clearfix"></div>
										 </a></li>
										 <li class="odd"><a href="#">
											<div class="user_img"><img src="images/in5.jpg" alt=""></div>
										   <div class="notification_desc">
											<p>Lorem ipsum dolor sit amet </p>
											<p><span>1 hour ago</span></p>
											</div>
										   <div class="clearfix"></div>
										 </a></li>
										 <li><a href="#">
											<div class="user_img"><img src="images/in8.jpg" alt=""></div>
										   <div class="notification_desc">
											<p>Lorem ipsum dolor sit amet </p>
											<p><span>1 hour ago</span></p>
											</div>
										   <div class="clearfix"></div>
										 </a></li>
										 <li>
											<div class="notification_bottom">
												<a href="#">See all notification</a>
											</div>
										</li>
									</ul>
							</li>
						<li class="dropdown note">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-tasks"></i> <span class="badge blue1">9</span></a>
										<ul class="dropdown-menu two">
										<li>
											<div class="notification_header">
												<h3>You have 9 pending task</h3>
											</div>
										</li>
										<li><a href="#">
												<div class="task-info">
												<span class="task-desc">Database update</span><span class="percentage">40%</span>
												<div class="clearfix"></div>
											   </div>
												<div class="progress progress-striped active">
												 <div class="bar yellow" style="width:40%;"></div>
											</div>
										</a></li>
										<li><a href="#">
											<div class="task-info">
												<span class="task-desc">Dashboard done</span><span class="percentage">90%</span>
											   <div class="clearfix"></div>
											</div>

											<div class="progress progress-striped active">
												 <div class="bar green" style="width:90%;"></div>
											</div>
										</a></li>
										<li><a href="#">
											<div class="task-info">
												<span class="task-desc">Mobile App</span><span class="percentage">33%</span>
												<div class="clearfix"></div>
											</div>
										   <div class="progress progress-striped active">
												 <div class="bar red" style="width: 33%;"></div>
											</div>
										</a></li>
										<li><a href="#">
											<div class="task-info">
												<span class="task-desc">Issues fixed</span><span class="percentage">80%</span>
											   <div class="clearfix"></div>
											</div>
											<div class="progress progress-striped active">
												 <div class="bar  blue" style="width: 80%;"></div>
											</div>
										</a></li>
										<li>
											<div class="notification_bottom">
												<a href="#">See all pending task</a>
											</div>
										</li>
									</ul>
							</li>
							<div class="clearfix"></div>
								</ul>
							</div>
							<div class="clearfix"></div>
							<!--//profile_details-->
						</div>
						<!--//menu-right-->
					<div class="clearfix"></div>
				</div>
					<!-- //header-ends -->
								<div class="outter-wp">
								<!--sub-heard-part-->
								   <div class="sub-heard-part">
								   <ol class="breadcrumb m-b-0">
										<li><a href="index.php">Home</a></li>
										<li class="active">Editors</li>
									</ol>
								   </div>
								  <!--//sub-heard-part-->
										<div class="graph-visual">
											<h2 class="inner-tittle">Editors </h2>
											           <div class="maark-edit graph">
													       						<form>
													  <div class="form-group">
														<input class="form-control" name="title" type="text" placeholder="Title?">
													  </div>
																	<div class="md-editor" id="1454925081632">

																	<textarea name="content" data-provide="markdown" rows="15" class="md-input" style="resize: none;">### Hello there
																			How are you?

																			I have bellow task for you :

																			Select from this text...
																			Click the bold on THIS WORD and make THESE ONE italic
																			Link GOOGLE to google.com
																			Test to insert image (and try to tab after write the image description)
																			Test Preview
																			And ending here... Click "List"

																			Enjoy!</textarea>
																					<div class="md-fullscreen-controls">
																						<a href="#" class="exit-fullscreen" title="Exit fullscreen"><span class="glyphicon glyphicon-fullscreen"></span></a>
																					</div>
																				</div>
																				<div class="publish">
																						<label class="checkbox">
																							<input name="publish" type="checkbox"> Publish
																						  </label>
																				</div>

																						  <hr>
																						  <button type="submit" class="btn">Submit</button>
																</form>
														</div>
																  <script>
																     $("#target-editor").markdown({
																			  savable:true,
																			  onShow: function(e){
																				alert("Showing "
																				  +e.$textarea.prop("tagName").toLowerCase()
																				  +"#"
																				  +e.$textarea.attr("id")
																				  +" as Markdown Editor...")
																			  },
																			  onPreview: function(e) {
																				var previewContent

																				if (e.isDirty()) {
																				  var originalContent = e.getContent()

																				  previewContent = "Prepended text here..."
																						 + "\n"
																						 + originalContent
																						 + "\n"
																						 +"Apended text here..."
																				} else {
																				  previewContent = "Default content"
																				}

																				return previewContent
																			  },
																			  onSave: function(e) {
																				alert("Saving '"+e.getContent()+"'...")
																			  },
																			  onChange: function(e){
																				console.log("Changed!")
																			  },
																			  onFocus: function(e) {
																				alert("Focus triggered!")
																			  },
																			  onBlur: function(e) {
																				alert("Blur triggered!")
																			  }
																			})
																  </script>
														<div class="post graph">

														<form class="text-area">
															<textarea required=""> What are you doing...</textarea>
														</form>
														<div class="post-at">
															<ul class="icon">


																<div class="post-file">
																<i class="fa fa-location-arrow"></i>
																<input id="input-1" name="input1[]" type="file" multiple="" class="">
																</div>
																<div class="post-file">
																<i class="fa fa-camera"></i>
																<input id="input-2" name="input2[]" type="file" multiple="" class="">
																</div>
																<div class="post-file">
																<i class="fa fa-video-camera"></i>
																<input id="input-3" name="input3[]" type="file" multiple="" class="">
																</div>
																<div class="post-file">
																<i class="fa fa-microphone"></i>
																<input id="input-4" name="input4[]" type="file" multiple="" class="">
																</div>

																<script>
																$(document).on('ready', function() {
																	$("#input-1").fileinput({showCaption: false});
																});
																</script>
																<script>
																$(document).on('ready', function() {
																	$("#input-2").fileinput({showCaption: false});
																});
																</script>
																<script>
																$(document).on('ready', function() {
																	$("#input-3").fileinput({showCaption: false});
																});
																</script>
																<script>
																$(document).on('ready', function() {
																	$("#input-4").fileinput({showCaption: false});
																});
																</script>
															</ul>
															<form class="text-sub">
																<input type="submit" value="post">
															</form>
															<div class="clearfix"> </div>
														</div>
													</div>
											</div>

									</div>
									<!--//outer-wp-->
								</div>
                <?php include "include/editor_footer.php" ?>
