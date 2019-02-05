<?php

$singleColumn = false;

$mainTiles = array(
	'Time Table',
	'Scholarships',
	'Exam Schedules',
	'Exam Results',
	'Sessionals',
	'Internships',
	'Jobs',
	'Events',
	'News',
	'Gallery',
	'Short Courses',
	'Calendar');

$timeTableTiles = array(
	'Bachelors First Year Time Table',
	'Bachelors Second Year Time Table',
	'Bachelors Third Year Time Table',
	'Bachelors Final Year Time Table',
	'Masters IE Time Table',
	'Masters MSD Time Table',
	'Doctorate Time Table',
	' ',
	'Main Menu');

$feTimeTableTiles = array(
	'FE Section A Time Table',
	'FE Section B Time Table',
	'FE Section C Time Table',
	'FE Section D Time Table');

$seTimeTableTiles = array(
	'SE Section A Time Table',
	'SE Section B Time Table',
	'SE Section C Time Table',
	'SE Section D Time Table');

$teTimeTableTiles = array(
	'TE Section A Time Table',
	'TE Section B Time Table',
	'TE Section C Time Table',
	'TE Section D Time Table');

$beTimeTableTiles = array(
	'BE Section A Time Table',
	'BE Section B Time Table',
	'BE Section C Time Table',
	'BE Section D Time Table');
	
$scholarshipsTiles = array(
	'Scholarships List 1'=>'content/scholarships/1.jpg',
	'Scholarships List 2'=>'content/scholarships/2.jpg',
	'Scholarships List 3'=>'content/scholarships/3.jpg',
	'OPF Scholarship'=>'content/scholarships/4.jpg');
	
$examschedulesTiles = array(
	'BE Theory'=>'content/examSchedules/BE-Theory.jpg',
	'BE Practical'=>'content/examSchedules/BE-Practical.jpg',
	'ME Theory'=>'content/examSchedules/ME.jpg',
	'ME ISP'=>'content/examSchedules/ME-ISP.jpg');
	
$examresultsTiles = array(
	'FE Result'=>'content/examResults/FE.jpg',
	'SE Result'=>'content/examResults/SE.jpg',
	'TE Result'=>'content/examResults/TE.jpg',
	'BE Result'=>'content/examResults/BE.jpg');
	
$sessionalsTiles = array(
	'FE Sessionals'=>array('content/sessionals/FE/1.jpg','content/sessionals/FE/2.jpg','content/sessionals/FE/3.jpg','content/sessionals/FE/4.jpg'),
	'SE Sessionals'=>array('content/sessionals/SE/1.jpg','content/sessionals/SE/2.jpg','content/sessionals/SE/3.jpg','content/sessionals/SE/4.jpg'),
	'TE Sessionals'=>array('content/sessionals/TE/1.jpg','content/sessionals/TE/2.jpg','content/sessionals/TE/3.jpg','content/sessionals/TE/4.jpg'), 
	'BE Sessionals'=>array('content/sessionals/BE/1.jpg','content/sessionals/BE/2.jpg','content/sessionals/BE/3.jpg','content/sessionals/BE/4.jpg'));
	
$internshipsTiles = array(
	'Stemmers'=>'content/jobs/stemmers.jpg',
	'Cyber Net'=>'content/jobs/cybernet.jpg',
	'Linde'=>'content/jobs/linde.jpg',
	'Pakistan Oxygen'=>'content/jobs/pakistanOxygen.jpg');
	
$jobsTiles = array(
	'Stemmers'=>'content/jobs/stemmers.jpg',
	'Cyber Net'=>'content/jobs/cybernet.jpg',
	'Linde'=>'content/jobs/linde.jpg',
	'Pakistan Oxygen'=>'content/jobs/pakistanOxygen.jpg',
	'Shahnawaz'=>'content/jobs/shahnawaz.jpg',
	'Tech Logix'=>'content/jobs/techLogix.jpg',
	'Teltonka'=>'content/jobs/teltonka.jpg',
	'Zi Solar'=>'content/jobs/ziSolar.jpg');
	
$eventsTiles = array(
	'Book Fair'=>'content/events/bookFair.jpg',
	'ICE TE'=>'content/events/ICETE.jpg',
	'IEEC Aspire'=>'content/events/IEEC-Aspire-2018.png',
	'Tall Buildings'=>'content/events/TallBuildings.png');
	
$newsTiles = array(
	'Pakistan Day'=>'content/events/pakistanDay.jpg',
	'Zero Semester'=>'content/events/zeroSemester.jpg',
	'Chinese Program'=>'content/events/chineseLanguage.jpg',
	'Spring Admission'=>array('content/events/springAdmission1.jpg','content/events/springAdmission2.jpg'));
	
$galleryTiles = array(
	'Inaugration of NCAI'=>'content/gallery/1.jpg',
	'BeaconHouse Visit'=>'content/gallery/2.jpg',
	'Green Initiative'=>'content/gallery/3.jpg',
	'Malaysian MoU'=>'content/gallery/4.jpg',
	'NEDAASC Paper Awards'=>'content/gallery/5.jpg',
	'ICE Award'=>'content/gallery/6.jpg',
	'ICE TE'=>'content/gallery/7.jpg',
	'ICE Inaugration'=>'content/gallery/8.jpg');
	
$shortcoursesTiles = array(
	'Essentials of Automatic Fire Alarm And Detection Systems'=>array('content/shortCourses/SC1/1.jpg','content/shortCourses/SC1/2.jpg'),
	'Software Engineering & Web Engineering'=>array('content/shortCourses/SC2/1.jpg'),
	'Fundamentals of Asset Management'=>array('content/shortCourses/SC3/1.jpg','content/shortCourses/SC3/2.jpg'),
	'Courses on Techniques To Reduce Stage Fright'=>array('content/shortCourses/SC4/1.jpg','content/shortCourses/SC4/2.jpg'),
	);
	
$calendarTiles = array(
	'BE Calendar'=>'content/calendar/BE.jpg',
	'ME Calendar'=>'content/calendar/ME.jpg',
	'PHD Calendar'=>'content/calendar/PHD.jpg',
	'CPD Activities Calendar'=>'content/calendar/CPD.jpg');
	



function iif($condition, $true, $false){
	if($condition){
		return $true;
	}else{
		return $false;
	}
}

function generateLocalLink($tile){
	global $a;
	return 'index.php?a='.shortenedName($tile);
}
function shortenedName($tile){
	return str_replace(' ', '', strtolower($tile));
}

	$tile1 = '';
	$tile2 = '';
	$tile3 = '';
	$tile4 = '';
	$tile5 = '';
	$tile6 = '';
	$tile7 = '';
	$tile8 = '';
	$tile9 =  '';
	$tile10 =  '';
	$tile11 =  '';
	$tile12 =  '';
	$content = array();

if(isset($_GET['a'])){

	$a = $_GET['a'];

	switch ($a) {
		
		case shortenedName($mainTiles[0]):

			foreach ($timeTableTiles as $key => $value) {
			$varName = 'tile'.($key+1);
			${$varName} = $value;
			}

			$tile1icon = 'thermometer-empty';
			$tile2icon = 'thermometer-quarter';
			$tile3icon = 'thermometer-half';
			$tile4icon = 'thermometer-three-quarters';
			$tile5icon = 'chevron-right';
			$tile6icon = 'angle-double-right';
			$tile7icon = 'forward';
			$tile8icon = 'fast-forward';
			$tile9icon = 'th';

		break;

		/* First Year Time Table */
		
		case shortenedName($timeTableTiles[0]):

			foreach ($feTimeTableTiles as $key => $value) {
			$varName = 'tile'.($key+1);
			${$varName} = $value;
			}

			$tile1icon = 'thermometer-empty';
			$tile2icon = 'thermometer-quarter';
			$tile3icon = 'thermometer-half';
			$tile4icon = 'thermometer-three-quarters';

			$content[0] = 'content/timeTables/FE/A.png';
			$content[1] = 'content/timeTables/FE/C.png';
			$content[2] = 'content/timeTables/FE/B.png';
			$content[3] = 'content/timeTables/FE/D.png';

		break;
		
		case shortenedName($feTimeTableTiles[0]):
			$content[0] = 'content/timeTables/FE/A.png';
		break;
		case shortenedName($feTimeTableTiles[1]):
			$content[0] = 'content/timeTables/FE/B.png';
		break;
		case shortenedName($feTimeTableTiles[2]):
			$content[0] = 'content/timeTables/FE/C.png';
		break;
		case shortenedName($feTimeTableTiles[3]):
			$content[0] = 'content/timeTables/FE/D.png';
		break;

		/* Second Year Time Table */
		
		case shortenedName($timeTableTiles[1]):

			foreach ($seTimeTableTiles as $key => $value) {
			$varName = 'tile'.($key+1);
			${$varName} = $value;
			}

			$tile1icon = 'thermometer-empty';
			$tile2icon = 'thermometer-quarter';
			$tile3icon = 'thermometer-half';
			$tile4icon = 'thermometer-three-quarters';

			$content[0] = 'content/timeTables/SE/A.png';
			$content[1] = 'content/timeTables/SE/C.png';
			$content[2] = 'content/timeTables/SE/B.png';
			$content[3] = 'content/timeTables/SE/D.png';

		break;
		
		case shortenedName($seTimeTableTiles[0]):
			$content[0] = 'content/timeTables/SE/A.png';
		break;
		case shortenedName($seTimeTableTiles[1]):
			$content[0] = 'content/timeTables/SE/B.png';
		break;
		case shortenedName($seTimeTableTiles[2]):
			$content[0] = 'content/timeTables/SE/C.png';
		break;
		case shortenedName($seTimeTableTiles[3]):
			$content[0] = 'content/timeTables/SE/D.png';
		break;


		/* Third Year Time Table */
		
		case shortenedName($timeTableTiles[2]):

			foreach ($teTimeTableTiles as $key => $value) {
			$varName = 'tile'.($key+1);
			${$varName} = $value;
			}

			$tile1icon = 'thermometer-empty';
			$tile2icon = 'thermometer-quarter';
			$tile3icon = 'thermometer-half';
			$tile4icon = 'thermometer-three-quarters';

			$content[0] = 'content/timeTables/TE/A.png';
			$content[1] = 'content/timeTables/TE/C.png';
			$content[2] = 'content/timeTables/TE/B.png';
			$content[3] = 'content/timeTables/TE/D.png';

		break;
		
		case shortenedName($teTimeTableTiles[0]):
			$content[0] = 'content/timeTables/TE/A.png';
		break;
		case shortenedName($teTimeTableTiles[1]):
			$content[0] = 'content/timeTables/TE/B.png';
		break;
		case shortenedName($teTimeTableTiles[2]):
			$content[0] = 'content/timeTables/TE/C.png';
		break;
		case shortenedName($teTimeTableTiles[3]):
			$content[0] = 'content/timeTables/TE/D.png';
		break;


		/* Fourth Year Time Table */
		
		case shortenedName($timeTableTiles[3]):

			foreach ($beTimeTableTiles as $key => $value) {
			$varName = 'tile'.($key+1);
			${$varName} = $value;
			}

			$tile1icon = 'thermometer-empty';
			$tile2icon = 'thermometer-quarter';
			$tile3icon = 'thermometer-half';
			$tile4icon = 'thermometer-three-quarters';

			$content[0] = 'content/timeTables/BE/A.png';
			$content[1] = 'content/timeTables/BE/C.png';
			$content[2] = 'content/timeTables/BE/B.png';
			$content[3] = 'content/timeTables/BE/D.png';

		break;
		
		case shortenedName($beTimeTableTiles[0]):
			$content[0] = 'content/timeTables/BE/A.png';
		break;
		case shortenedName($beTimeTableTiles[1]):
			$content[0] = 'content/timeTables/BE/B.png';
		break;
		case shortenedName($beTimeTableTiles[2]):
			$content[0] = 'content/timeTables/BE/C.png';
		break;
		case shortenedName($beTimeTableTiles[3]):
			$content[0] = 'content/timeTables/BE/D.png';
		break;


		/* Fourth Year Time Table */
		
		case shortenedName($timeTableTiles[3]):

			foreach ($beTimeTableTiles as $key => $value) {
			$varName = 'tile'.($key+1);
			${$varName} = $value;
			}

			$tile1icon = 'thermometer-empty';
			$tile2icon = 'thermometer-quarter';
			$tile3icon = 'thermometer-half';
			$tile4icon = 'thermometer-three-quarters';

			$content[0] = 'content/timeTables/BE/A.png';
			$content[1] = 'content/timeTables/BE/C.png';
			$content[2] = 'content/timeTables/BE/B.png';
			$content[3] = 'content/timeTables/BE/D.png';

		break;
		
		case shortenedName($beTimeTableTiles[0]):
			$content[0] = 'content/timeTables/BE/A.png';
		break;
		case shortenedName($beTimeTableTiles[1]):
			$content[0] = 'content/timeTables/BE/B.png';
		break;
		case shortenedName($beTimeTableTiles[2]):
			$content[0] = 'content/timeTables/BE/C.png';
		break;
		case shortenedName($beTimeTableTiles[3]):
			$content[0] = 'content/timeTables/BE/D.png';
		break;


		/* ME IE Time Table  */
		
		case shortenedName($timeTableTiles[4]):
			$content[0] = 'content/timeTables/ME/IE.png';
		break;

		/* ME MSD Time Table  */
		
		case shortenedName($timeTableTiles[5]):
			$content[0] = 'content/timeTables/ME/MSD.png';
		break;
		/* PHD Time Table  */
		
		case shortenedName($timeTableTiles[6]):
			$content[0] = 'content/timeTables/PHD/PHD.png';
		break;
		
		
		
		
		/* Main Menu */
		
		case '':
		foreach ($mainTiles as $key => $value) {
				$varName = 'tile'.($key+1);
				${$varName} = $value;
			}
		break;
		case 'mainmenu':
		foreach ($mainTiles as $key => $value) {
				$varName = 'tile'.($key+1);
				${$varName} = $value;
			}
		break;
		
		
		



		
		default:
		
			$variable = $a.'Tiles';
			
			
			if(isset(${$variable})){
								
				$num=0;
				foreach (${$variable} as $key => $value) {
					$varName = 'tile'.($num+1);
					if($key!=$num || ($key==0)){ // If the content is present in form of array, use key as Tiles name and value as content JPG
						${$varName} = $key;
						//$content[$num] = $value;
						}else{
						${$varName} = $value;
						}
					$num++;
				}
			}else{
				// No such tab, check for content by this name
				
				foreach ($mainTiles as $x) {
				
				$subTile = shortenedName($x).'Tiles';

				if(isset(${$subTile}) && is_array(${$subTile})){
				
				foreach(${$subTile} as $key => $value){
					
					if(shortenedName($key) == $a){
						$content[0] = $value;
							if(is_array($value)){
								$singleColumn = true;
								foreach($value as $ckey=>$cvalue){
									$content[$ckey] = $cvalue;
								}
							
							}else{
							$content[0] = $value;
							}
						}
					
					}
				}
				
				}
				
			}

	}

}else{

	// Assign each of default/main menu tiles to $tile1,$tile2,... variables
	foreach ($mainTiles as $key => $value) {
		$varName = 'tile'.($key+1);
		${$varName} = $value;
	}

	/*

	$tile1 = $mainTiles[0];
	$tile2 = $mainTiles[1];
	$tile3 = $mainTiles[2];
	$tile4 = $mainTiles[3];
	$tile5 = $mainTiles[4];
	$tile6 = $mainTiles[5];
	$tile7 = $mainTiles[6];
	$tile8 = $mainTiles[7];
	$tile9 = $mainTiles[8];
	$tile10 = $mainTiles[9];
	$tile11 = $mainTiles[10];
	$tile12 = $mainTiles[11];
	*/

}


?>


<!DOCTYPE html>
<html>
<head>

	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/sam.css">

	<script src="assets/js/jquery.min.js"></script>

	<script type="text/javascript">
		/*

		$.ajax({
		  url: "test.html",
		  cache: false,
		  success: function(html){
		    $("#results").append(html);
		  }
		});

		*/

		var dataAlready;

		function doPoll(){
			//http://192.168.8.100/smartBoard/notification.php
		    $.post('http://customscrypts.com/smartBoard/notification.php', function(data) {

		    	if($.trim(data)!=''){
		    		if(dataAlready!=data){
		    			dataAlready = data;
		    			datah = '<br /><div class="alert alert-warning" role="alert"><marquee>'+data+'</marquee></div>';
		    			$("#notification").html(datah);
		    		}
		    		
		    	}else{

		    		datah = '';
		    		$("#notification").html(datah);

		    	}
		    	
		    	
		        //alert(data);  // process results here
		        setTimeout(doPoll,10000);
		    });
		}
		doPoll();







		var mousetimeout;
		var screensaver_active = false;
		var idletime = 5;

		function show_screensaver(){
		    $('#screensaver').fadeIn();
		    screensaver_active = true;
		    screensaver_animation();
		}

		function stop_screensaver(){
		    $('#screensaver').fadeOut();
		    screensaver_active = false;
		}

		

		$(document).bind( "mousemove keypress", function () {
		    clearTimeout(mousetimeout);
			
		    if (screensaver_active) {
		        stop_screensaver();
		    }

		    mousetimeout = setTimeout(function(){
		        show_screensaver();
		    }, 1000 * idletime); // 5 secs			
		});

		function screensaver_animation(){
		    if (screensaver_active) {
		    playFile();
		    }
		}

		function playFile() {
		    var video = $("#video_player");
		    video[0].src = "nedl.mp4";
		    video[0].load();
		    video[0].play();
		};





	</script>

	<style type="text/css">
		#screensaver { position: absolute; width: 100%; height:100%; left:0px; top: 0px; display: none; z-index:9999; }

		.video_holder {
		  position: absolute;
		  top: 0;
		  bottom: 0;
		  width: 100%;
		  height: 100%; 
		  overflow: hidden;
		}
		.video_holder video {
		  /* Make video to at least 100% wide and tall */
		  min-width: 100%; 
		  min-height: 100%; 

		  /* Setting width & height to auto prevents the browser from stretching or squishing the video */
		  width: auto;
		  height: auto;

		  /* Center the video */
		  position: absolute;
		  top: 50%;
		  left: 50%;
		  transform: translate(-50%,-50%);
		}


	</style>

	<!--<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>-->
	<script defer src="assets/fontawesome/svg-with-js/js/fontawesome-all.js"></script>

</head>

<body class="container-fluid" onkeypress="uniCharCode(event)" onkeydown="uniKeyCode(event)">

	<div id="screensaver" class="video_holder">
      <video loop id="video_player" poster="" autoplay="autoplay"> 
        <source id="video_mp4" src="" type='video/mp4' />
      </video>
	</div>
	
	<?php
	
	if(empty($content)){
	
	?>
	
	<div class="container"><img style="max-width: 320px; margin: 48px auto; display: block;" src="assets/img/ned-logo-white.png" class="img-responsive" /></div>
	
	<?php
	
	}
	
	?>

	<div id="notification"></div>

	<div class="row tile-row">
		<?php if(!empty($tile1)){ ?><div class="col-sm tile-box" id="tile1"><i class="fas fa-<?php if(!empty($tile1icon)){echo $tile1icon;}else{echo 'stopwatch';} ?> tile-icon"></i><?php echo $tile1; ?></div><?php } ?>
		<?php if(!empty($tile2)){ if($tile2==' '){ ?><div class="col-sm"></div><?php }else{ ?><div class="col-sm tile-box" id="tile2"><i class="fas fa-<?php if(!empty($tile2icon)){echo $tile2icon;}else{echo 'trophy';} ?> tile-icon"></i><?php echo $tile2; ?></div><?php }} ?>
		<?php if(!empty($tile3)){ if($tile3==' '){ ?><div class="col-sm"></div><?php }else{ ?><div class="col-sm tile-box" id="tile3"><i class="fas fa-<?php if(!empty($tile3icon)){echo $tile3icon;}else{echo 'calendar-alt';} ?> tile-icon"></i><?php echo $tile3; ?></div><?php }} ?>
		<?php if(!empty($tile4)){ if($tile4==' '){ ?><div class="col-sm"></div><?php }else{ ?><div class="col-sm tile-box" id="tile4"><i class="fas fa-<?php if(!empty($tile4icon)){echo $tile4icon;}else{echo 'graduation-cap';} ?> tile-icon"></i><?php echo $tile4; ?></div><?php }} ?>
	</div>
	<div class="row tile-row">
		<?php if(!empty($tile5)){ if($tile5==' '){ ?><div class="col-sm"></div><?php }else{ ?><div class="col-sm tile-box" id="tile5"><i class="fas fa-<?php if(!empty($tile5icon)){echo $tile5icon;}else{echo 'chess-board';} ?> tile-icon"></i><?php echo $tile5; ?></div><?php }} ?>
		<?php if(!empty($tile6)){ if($tile6==' '){ ?><div class="col-sm"></div><?php }else{ ?><div class="col-sm tile-box" id="tile6"><i class="fas fa-<?php if(!empty($tile6icon)){echo $tile6icon;}else{echo 'th-list';} ?> tile-icon"></i><?php echo $tile6; ?></div><?php }} ?>
		<?php if(!empty($tile7)){ if($tile7==' '){ ?><div class="col-sm"></div><?php }else{ ?><div class="col-sm tile-box" id="tile7"><i class="fas fa-<?php if(!empty($tile7icon)){echo $tile7icon;}else{echo 'user-md';} ?> tile-icon"></i><?php echo $tile7; ?></div><?php }} ?>
		<?php if(!empty($tile8)){ if($tile8==' '){ ?><div class="col-sm"></div><?php }else{ ?><div class="col-sm tile-box" id="tile8"><i class="fas fa-<?php if(!empty($tile8icon)){echo $tile8icon;}else{echo 'bullhorn';} ?> tile-icon"></i><?php echo $tile8; ?></div><?php }} ?>
	</div>
	<div class="row tile-row">
		<?php if(!empty($tile9)){ if($tile9==' '){ ?><div class="col-sm"></div><?php }else{ ?><div class="col-sm tile-box" id="tile9"><i class="fas fa-<?php if(!empty($tile9icon)){echo $tile9icon;}else{echo 'newspaper';} ?> tile-icon"></i><?php echo $tile9; ?></div><?php }} ?>
		<?php if(!empty($tile10)){ if($tile10==' '){ ?><div class="col-sm"></div><?php }else{ ?><div class="col-sm tile-box" id="tile10"><i class="fas fa-<?php if(!empty($tile10icon)){echo $tile10icon;}else{echo 'images';} ?> tile-icon"></i><?php echo $tile10; ?></div><?php }} ?>
		<?php if(!empty($tile11)){ if($tile11==' '){ ?><div class="col-sm"></div><?php }else{ ?><div class="col-sm tile-box" id="tile11"><i class="fas fa-<?php if(!empty($tile11icon)){echo $tile11icon;}else{echo 'flask';} ?> tile-icon"></i><?php echo $tile11; ?></div><?php }} ?>
		<?php if(!empty($tile12)){ if($tile12==' '){ ?><div class="col-sm"></div><?php }else{ ?><div class="col-sm tile-box" id="tile12"><i class="fas fa-<?php if(!empty($tile12icon)){echo $tile12icon;}else{echo 'calendar';} ?> tile-icon"></i><?php echo $tile12; ?></div><?php }} ?>
	</div>

	<?php

	// Dynamic Way of adding content:

	foreach ($content as $key => $value) {
		if($key%2==0 || $singleColumn){ // for every even entry
			echo '<div class="row">';
		}

		echo '<div class="col-md">
			<center><img style="max-width: 100%;" src="'.$value.'" class="img-responsive"></center>
		</div>';

		if(($key%2!=0 && $key!=0) || sizeof($content)==1  || $singleColumn){ // for every even entry
			echo '</div>';
		}
	}

	?>

<!--
	<div class="row">
		<div class="col-md">
			<img style="max-width: 100%;" src="content/timeTables/FE/A.png" class="img-responsive">
		</div>
		<div class="col-md">
			<img style="max-width: 100%;" src="content/timeTables/FE/C.png" class="img-responsive">
		</div>
	</div>
	<div class="row">
		<div class="col-md">
			<img style="max-width: 100%;" src="content/timeTables/FE/B.png" class="img-responsive">
		</div>
		<div class="col-md">
			<img style="max-width: 100%;" src="content/timeTables/FE/D.png" class="img-responsive">
		</div>
	</div>
-->

<script>
function uniCharCode(event) { 
	// Doesnt work for keys like arrows
    var char = event.which || event.keyCode; 
    console.log("Char Code: "+char);
}

function uniKeyCode(event) {
    var key = event.which || event.keyCode; 
    console.log("Key Code: "+key);
    switch(key){

    	case 144: // Num Lock
    	window.location.href = "<?php echo generateLocalLink($tile1); ?>";
    	break;
    	case 111: // /
    	window.location.href = "<?php echo generateLocalLink($tile2); ?>";
    	break;
    	case 106: // *
    	window.location.href = "<?php echo generateLocalLink($tile3); ?>";
    	break;
    	case 109: // -
    	window.location.href = "<?php echo generateLocalLink($tile4); ?>";
    	break;

    	case 103: // 7
    	window.location.href = "<?php echo generateLocalLink($tile5); ?>";
    	break;
    	case 36: // 7 without NumLock
    	window.location.href = "<?php echo generateLocalLink($tile5); ?>";
    	break;
    	case 104: // 8
    	window.location.href = "<?php echo generateLocalLink($tile6); ?>";
    	break;
    	case 38: // 8 without NumLock
    	window.location.href = "<?php echo generateLocalLink($tile6); ?>";
    	break;
    	case 105: // 9
    	window.location.href = "<?php echo generateLocalLink($tile7); ?>";
    	break;
    	case 33: // 9 without NumLock
    	window.location.href = "<?php echo generateLocalLink($tile7); ?>";
    	break;
    	case 107: // +
    	window.location.href = "<?php echo generateLocalLink($tile8); ?>";
    	break;

    	case 100: // 4
    	window.location.href = "<?php echo generateLocalLink($tile9); ?>";
    	break;
    	case 37: // 4 without NumLock
    	window.location.href = "<?php echo generateLocalLink($tile9); ?>";
    	break;
    	case 101: // 5
    	window.location.href = "<?php echo generateLocalLink($tile10); ?>";
    	break;
    	case 12: // 5 without NumLock
    	window.location.href = "<?php echo generateLocalLink($tile10); ?>";
    	break;
    	case 102: // 6
    	window.location.href = "<?php echo generateLocalLink($tile11); ?>";
    	break;
    	case 39: // 6 without NumLock
    	window.location.href = "<?php echo generateLocalLink($tile11); ?>";
    	break;
    	case 13: // Enter
    	window.location.href = "index.php";
    	break;
    	case 8: // Back Space for new keypad
    	window.location.href = "<?php echo generateLocalLink($tile12); ?>";
    	break;
    	
    	case 97: // 1
    	window.history.back();
    	break;
    	case 35: // 1 without NumLock
    	window.history.back();
    	break;
    	
    	/*
    	case 110: // .
    	window.scrollBy(100, 0); // to the right
    	break;
    	case 46: // .
    	window.scrollBy(100, 0); // to the right
    	break;
    	*/
    	
    	case 110: // . , 96=3x000
    	window.scrollBy(0, 200); // to the bottom
    	break;
    	case 46: // . , 45=3x000
    	window.scrollBy(0, 200); // to the bottom
    	break;
    	
    	/*
    	case 96: // 0=96
    	window.scrollBy(-100, 0); // to the left
    	break;
    	case 45: // 0=45
    	window.scrollBy(-100, 0); // to the left
    	break;
    	*/
    	
    	case 99: // 3 , 2=98
    	//window.removeEventListener("keydown", arrow_keys_handler, false);
    	window.scrollBy(0, -600); // to the top
    	break;
    	case 34: // 3 , 2=40 
    	//window.removeEventListener("keydown", arrow_keys_handler, false);
    	window.scrollBy(0, -600); // to the top
    	break;
    	
    	
    	

    	default: // Redirect to mainmenu on any default key
    	//window.location.href = "index.php";
    	break;
    }
}

window.addEventListener("keydown", function(e) {
    // space and arrow keys
    if([34].indexOf(e.keyCode) > -1) {
        e.preventDefault();
    }
}, false);
</script>

<script src="assets/js/sam.js"></script>

</body>
</html>
