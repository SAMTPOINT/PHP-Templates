<?php include "include/chart_header.php" ?>
<?php include "include/chart_nav.php" ?>



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
								<!--/outer-wp-->
									<div class="outter-wp">
										<!--/sub-heard-part-->
											 <div class="sub-heard-part">
													   <ol class="breadcrumb m-b-0">
															<li><a href="index.php">Home</a></li>
															<li class="active">Charts</li>
														</ol>
											</div>
										<!--/sub-heard-part-->
										 <!--/inner-charts-->
											<div class="inner-charts">
											      <h2 class="inner-tittle">Bar Chart </h2>
															<div class="graph">
																	<div id="chartdiv5"></div>

															</div>
															<script>
															    var chart = AmCharts.makeChart("chartdiv5", {
																		"type": "serial",
																		"theme": "light",
																		"legend": {
																			"equalWidths": false,
																			"useGraphSettings": true,
																			"valueAlign": "left",
																			"valueWidth": 120
																		},
																		"dataProvider": [{
																			"date": "2012-01-01",
																			"distance": 227,
																			"townName": "New York",
																			"townName2": "New York",
																			"townSize": 25,
																			"latitude": 40.71,
																			"duration": 408
																		}, {
																			"date": "2012-01-02",
																			"distance": 371,
																			"townName": "Washington",
																			"townSize": 14,
																			"latitude": 38.89,
																			"duration": 482
																		}, {
																			"date": "2012-01-03",
																			"distance": 433,
																			"townName": "Wilmington",
																			"townSize": 6,
																			"latitude": 34.22,
																			"duration": 562
																		}, {
																			"date": "2012-01-04",
																			"distance": 345,
																			"townName": "Jacksonville",
																			"townSize": 7,
																			"latitude": 30.35,
																			"duration": 379
																		}, {
																			"date": "2012-01-05",
																			"distance": 480,
																			"townName": "Miami",
																			"townName2": "Miami",
																			"townSize": 10,
																			"latitude": 25.83,
																			"duration": 501
																		}, {
																			"date": "2012-01-06",
																			"distance": 386,
																			"townName": "Tallahassee",
																			"townSize": 7,
																			"latitude": 30.46,
																			"duration": 443
																		}, {
																			"date": "2012-01-07",
																			"distance": 348,
																			"townName": "New Orleans",
																			"townSize": 10,
																			"latitude": 29.94,
																			"duration": 405
																		}, {
																			"date": "2012-01-08",
																			"distance": 238,
																			"townName": "Houston",
																			"townName2": "Houston",
																			"townSize": 16,
																			"latitude": 29.76,
																			"duration": 309
																		}, {
																			"date": "2012-01-09",
																			"distance": 218,
																			"townName": "Dalas",
																			"townSize": 17,
																			"latitude": 32.8,
																			"duration": 287
																		}, {
																			"date": "2012-01-10",
																			"distance": 349,
																			"townName": "Oklahoma City",
																			"townSize": 11,
																			"latitude": 35.49,
																			"duration": 485
																		}, {
																			"date": "2012-01-11",
																			"distance": 603,
																			"townName": "Kansas City",
																			"townSize": 10,
																			"latitude": 39.1,
																			"duration": 890
																		}, {
																			"date": "2012-01-12",
																			"distance": 534,
																			"townName": "Denver",
																			"townName2": "Denver",
																			"townSize": 18,
																			"latitude": 39.74,
																			"duration": 810
																		}, {
																			"date": "2012-01-13",
																			"townName": "Salt Lake City",
																			"townSize": 12,
																			"distance": 425,
																			"duration": 670,
																			"latitude": 40.75,
																			"dashLength": 8,
																			"alpha": 0.4
																		}, {
																			"date": "2012-01-14",
																			"latitude": 36.1,
																			"duration": 470,
																			"townName": "Las Vegas",
																			"townName2": "Las Vegas"
																		}, {
																			"date": "2012-01-15"
																		}, {
																			"date": "2012-01-16"
																		}, {
																			"date": "2012-01-17"
																		}, {
																			"date": "2012-01-18"
																		}, {
																			"date": "2012-01-19"
																		}],
																		"valueAxes": [{
																			"id": "distanceAxis",
																			"axisAlpha": 0,
																			"gridAlpha": 0,
																			"position": "left",
																			"title": "distance"
																		}, {
																			"id": "latitudeAxis",
																			"axisAlpha": 0,
																			"gridAlpha": 0,
																			"labelsEnabled": false,
																			"position": "right"
																		}, {
																			"id": "durationAxis",
																			"duration": "mm",
																			"durationUnits": {
																				"hh": "h ",
																				"mm": "min"
																			},
																			"axisAlpha": 0,
																			"gridAlpha": 0,
																			"inside": true,
																			"position": "right",
																			"title": "duration"
																		}],
																		"graphs": [{
																			"alphaField": "alpha",
																			"balloonText": "[[value]] miles",
																			"dashLengthField": "dashLength",
																			"fillAlphas": 0.7,
																			"legendPeriodValueText": "total: [[value.sum]] mi",
																			"legendValueText": "[[value]] mi",
																			"title": "distance",
																			"type": "column",
																			"valueField": "distance",
																			"valueAxis": "distanceAxis"
																		}, {
																			"balloonText": "latitude:[[value]]",
																			"bullet": "round",
																			"bulletBorderAlpha": 1,
																			"useLineColorForBulletBorder": true,
																			"bulletColor": "#FFFFFF",
																			"bulletSizeField": "townSize",
																			"dashLengthField": "dashLength",
																			"descriptionField": "townName",
																			"labelPosition": "right",
																			"labelText": "[[townName2]]",
																			"legendValueText": "[[description]]/[[value]]",
																			"title": "latitude/city",
																			"fillAlphas": 0,
																			"valueField": "latitude",
																			"valueAxis": "latitudeAxis"
																		}, {
																			"bullet": "square",
																			"bulletBorderAlpha": 1,
																			"bulletBorderThickness": 1,
																			"dashLengthField": "dashLength",
																			"legendValueText": "[[value]]",
																			"title": "duration",
																			"fillAlphas": 0,
																			"valueField": "duration",
																			"valueAxis": "durationAxis"
																		}],
																		"chartCursor": {
																			"categoryBalloonDateFormat": "DD",
																			"cursorAlpha": 0.1,
																			"cursorColor":"#052963",
																			 "fullWidth":true,
																			"valueBalloonsEnabled": false,
																			"zoomable": false
																		},
																		"dataDateFormat": "YYYY-MM-DD",
																		"categoryField": "date",
																		"categoryAxis": {
																			"dateFormats": [{
																				"period": "DD",
																				"format": "DD"
																			}, {
																				"period": "WW",
																				"format": "MMM DD"
																			}, {
																				"period": "MM",
																				"format": "MMM"
																			}, {
																				"period": "YYYY",
																				"format": "YYYY"
																			}],
																			"parseDates": true,
																			"autoGridCount": false,
																			"axisColor": "#555555",
																			"gridAlpha": 0.1,
																			"gridColor": "#FFFFFF",
																			"gridCount": 50
																		},
																		"export": {
																			"enabled": true
																		 }
																	});
															</script>
															<!--/grid-charts-->
															<div class="grid-charts">
															     <div class="col-md-6 graph-2">
																 <h3 class="inner-tittle">Line Chart </h3>
																			<div class="grid-1">
																							<h4>Line</h4>
																							<canvas id="line2" height="300" width="500" style="width: 500px; height: 300px;"></canvas>
																							<script>
																									var lineChartData = {
																										labels : ["Mon","Tue","Wed","Thu","Fri","Sat","Mon"],
																										datasets : [
																											{
																												fillColor : "#f4f4f4",
																												strokeColor : "#052963",
																												pointColor : "#00C6D7",
																												pointStrokeColor : "#00C6D7",
																												data : [20,35,45,30,10,65,40]
																											}
																										]

																									};
																									new Chart(document.getElementById("line2").getContext("2d")).Line(lineChartData);
																							</script>
																						</div>
																</div>
																 <div class="col-md-6 graph-2 second">
																	<h3 class="inner-tittle">Pie Chart </h3>
																			<div class="grid-1">
																				<div class="text-1">
																						<h4>Pie</h4>
																						<div class="grid-graph">
																							<div class="grid-graph1">
																							<div id="os-Win-lbl">Chrome <span>100%</span></div>
																							<div id="os-Mac-lbl">Internet Explorer <span> 50%</span></div>
																							<div id="os-Other-lbl">Safari<span>30%</span></div>
																							</div>
																						 </div>
																						 </div>

																					<div class="text-2">
																						<canvas id="pie" height="315" width="470" style="width: 470px; height: 315px;"></canvas>
																						<script>
																							var pieData = [
																								{
																									value: 30,
																									color:"#ea4c89"
																								},
																								{
																									value : 50,
																									color : "#052963"
																								},
																								{
																									value : 100,
																									color : "#00C6D7"
																								}

																							];
																							new Chart(document.getElementById("pie").getContext("2d")).Pie(pieData);
																						</script>
																					</div>
																					<div class="clearfix"> </div>
																				 </div>
																				 </div>
																				  <div class="col-md-6 graph-2">
																					<h3 class="inner-tittle two">Polar Chart </h3>
																						<div class="grid-1">
																							<h4>Polar</h4>
																							<canvas id="polarArea" height="330" width="330" style="width: 300px; height: 300px;"></canvas>
																									<script>
																										var chartData = [
																											{
																												value : Math.random(),
																												color: "#ff8833"
																											},
																											{
																												value : Math.random(),
																												color: "#444444"
																											},
																											{
																												value : Math.random(),
																												color: "#fdbb30"
																											},
																											{
																												value : Math.random(),
																												color: "#ea4c89"
																											},
																											{
																												value : Math.random(),
																												color: "#00C6D7"
																											},
																											{
																												value : Math.random(),
																												color: "#052963"
																											}
																										];
																										new Chart(document.getElementById("polarArea").getContext("2d")).PolarArea(chartData);
																									</script>
																						</div>
																</div>
																		<div class="col-md-6 graph-2 second">
																			<h3 class="inner-tittle two">Radar Chart </h3>
																				<div class="grid-1">
																				<h4>Radar</h4>
																						<div id="chartdiv4"></div>
														      <script>
															    var chart = AmCharts.makeChart( "chartdiv4", {
																	  "type": "radar",
																	  "theme": "light",
																	  "dataProvider": [ {
																		"direction": "N",
																		"value": 8
																	  }, {
																		"direction": "NE",
																		"value": 9
																	  }, {
																		"direction": "E",
																		"value": 4.5
																	  }, {
																		"direction": "SE",
																		"value": 3.5
																	  }, {
																		"direction": "S",
																		"value": 9.2
																	  }, {
																		"direction": "SW",
																		"value": 8.4
																	  }, {
																		"direction": "W",
																		"value": 11.1
																	  }, {
																		"direction": "NW",
																		"value": 10
																	  } ],
																	  "valueAxes": [ {
																		"gridType": "circles",
																		"minimum": 0,
																		"autoGridCount": false,
																		"axisAlpha": 0.2,
																		"fillAlpha": 0.05,
																		"fillColor": "#FFFFFF",
																		"gridAlpha": 0.08,
																		"guides": [ {
																		  "angle": 225,
																		  "fillAlpha": 0.7,
																		  "fillColor": "#052963",
																		  "tickLength": 0,
																		  "toAngle": 315,
																		  "toValue": 14,
																		  "value": 0,
																		  "lineAlpha": 0,

																		}, {
																		  "angle": 45,
																		  "fillAlpha": 0.6,
																		  "fillColor": "#ea4c89",
																		  "tickLength": 0,
																		  "toAngle": 135,
																		  "toValue": 14,
																		  "value": 0,
																		  "lineAlpha": 0,
																		} ],
																		"position": "left"
																	  } ],
																	  "startDuration": 1,
																	  "graphs": [ {
																		"balloonText": "[[category]]: [[value]] m/s",
																		"bullet": "round",
																		"fillAlphas": 0.3,
																		"valueField": "value"
																	  } ],
																	  "categoryField": "direction",
																	  "export": {
																		"enabled": true
																	  }
																	} );
															  </script>

															 </div>
														</div>
													 <div class="clearfix"> </div>
												</div>

															<!--//grid-charts-->

											</div>
										<!--/inner-charts-->
									</div>
									<!--//outer-wp-->
									<?php include "include/chart_footer.php" ?>
