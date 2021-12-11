<!doctype html>
<html lang="en">
<?php 
if(isset($_POST['restricted_course'])){
$restricted_course = $_POST['restricted_course'];
}else{
	$restricted_course = [];
}
if(isset($_POST['waviedcourse_option'])){
	$waviedcourse_option = $_POST['waviedcourse_option'];
}else{
	$waviedcourse_option = [];
}

/************restricted_course************/

/************restricted_course************/
?>
<head>
 <!-- Required meta tags -->
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">

 <!-- Bootstrap CSS -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
 <title>Hello, world!</title>
 <style>
  .logo-bar {
  background: rgb(152, 30, 50);
  ;
  }

  .footerlink {
  list-style-type: none;
  padding-left: 0px;
  }

  .footerlink li a {
  text-decoration: none;
  color: #fff;
  }

  .onHover:hover {
  background: #FFDDCC;
  cursor: pointer;

  }
 </style>
</head>

<body>
 <header class="logo-bar p-4">

  <img src="./img/logo-header.png" class="img-fluid w-25" />


 </header>
 <header>
  <div class="bg-dark p-1 clearfix">


  <span>
   <h3 class="text-white mb-0"> MS Computer Science: Program Advising Tool <span
    class="float-xl-end h6 mt-2">Technical Issue? <button class="btn btn-sm btn-primary">Contact
     Site Admin</button></span> </h3>
  </span>




  </div>
 </header>

 <section>

  <div class="container-fluid">
  <div class="row">
			
			<?php
			/*$json_object = file_get_contents("Fall.txt");
			print_r($json_object);*/

			?>
   <div class="col-xl-4 mt-5 mb-5">

   <div class="card bg-light">
    <div class="card-body">

     <h4 class="">Courses</h4>
     <h6 class="font-weight-bold">Core Courses</h6>
     <p><i>There are no core courses available for the selected semester.</i></p>
	 <h6 class="font-weight-bold">1000 Level Elective Courses</h6>
	 <div class="card mb-2 onHover" id="bg_c_div70" data-idname="c_div70">
      <div class="card-body p-2">
      <div class="c_div" id="c_div70" data-idname="c_div70">1250 - Introduction to Computing</div>
      </div>
     </div>
	 <div class="card mb-2 onHover" id="bg_c_div71" data-idname="c_div71">
      <div class="card-body p-2">
      <div class="c_div" id="c_div71" data-idname="c_div71">1320 - Applied Statistics I</div>
      </div>
     </div>
	 <div class="card mb-2 onHover" id="bg_c_div72" data-idname="c_div72">
      <div class="card-body p-2">
      <div class="c_div" id="c_div72" data-idname="c_div72">1800 - Analytic Geometry and Calculus I</div>
      </div>
     </div>
	 <h6 class="font-weight-bold">2000 Level Elective Courses</h6>
	 <div class="card mb-2 onHover" id="bg_c_div73" data-idname="c_div73">
      <div class="card-body p-2">
      <div class="c_div" id="c_div73" data-idname="c_div73">2250 - Programming and Data Structures</div>
      </div>
     </div>
	 <div class="card mb-2 onHover" id="bg_c_div74" data-idname="c_div74">
      <div class="card-body p-2">
      <div class="c_div" id="c_div74" data-idname="c_div74">2261 - Object-Oriented Programming</div>
      </div>
     </div>
	 <div class="card mb-2 onHover" id="bg_c_div75" data-idname="c_div75">
      <div class="card-body p-2">
      <div class="c_div" id="c_div75" data-idname="c_div75">2700 - Computer Architecture and Organization</div>
      </div>
     </div>
	 <div class="card mb-2 onHover" id="bg_c_div76" data-idname="c_div76">
      <div class="card-body p-2">
      <div class="c_div" id="c_div76" data-idname="c_div76">2750 - System Programming and Tools</div>
      </div>
     </div>
	 <h6 class="font-weight-bold">3000 Level Elective Courses</h6>
							
	 <div class="card mb-2 onHover" id="bg_c_div77" data-idname="c_div77">
      <div class="card-body p-2">
      <div class="c_div" id="c_div77" data-idname="c_div77">3000 - Discrete Structures</div>
      </div>
     </div>
	 <div class="card mb-2 onHover" id="bg_c_div78" data-idname="c_div78">
      <div class="card-body p-2">
      <div class="c_div" id="c_div78" data-idname="c_div78">3130 - Design and Analysis of Algorithms</div>
      </div>
     </div>
     <div id="spring_left_id" class="leftside_div">
							
							<h6 class="font-weight-bold">4000 Level Elective Courses</h6>
							
     <div class="card mb-2 onHover" id="bg_c_div1" data-idname="c_div1">
      <div class="card-body p-2">
      <div class="c_div" id="c_div1" data-idname="c_div1">4010 - Web Development with Java</div>
      </div>
     </div>

     <div class="card mb-2 onHover" id="bg_c_div2" data-idname="c_div2">
      <div class="card-body p-2">
      <div class="c_div" id="c_div2" data-idname="c_div2">4011 - Web Development with Advanced JavaScrip</div>
      </div>
     </div>
     <div class="card mb-2 onHover" id="bg_c_div3" data-idname="c_div3">
      <div class="card-body p-2">
      <div class="c_div" id="c_div3" data-idname="c_div3">4250 - Programming Languages</div>
      </div>
     </div>
     <div class="card mb-2 onHover" id="bg_c_div4" data-idname="c_div4">
      <div class="card-body p-2">
      <div class="c_div" id="c_div4" data-idname="c_div4">4280 - Program Translation Project</div>
      </div>
     </div>
     <div class="card mb-2 onHover" id="bg_c_div5" data-idname="c_div5">
      <div class="card-body p-2">
      <div class="c_div" id="c_div5" data-idname="c_div5">4610 - Database Management Systems</div>
      </div>
     </div>
     <div class="card mb-2 onHover" id="bg_c_div6" data-idname="c_div6">
      <div class="card-body p-2">
      <div class="c_div" id="c_div6" data-idname="c_div6">4730 - Computer Networks and Communications</div>
      </div>
     </div>
     <div class="card mb-2 onHover" id="bg_c_div7" data-idname="c_div7">
      <div class="card-body p-2" >
      <div class="c_div" id="c_div7">4760 - Operating Systems</div>
      </div>
     </div>
     
     <h6 class="font-weight-bold mt-3 mb-3">5000+ Level Elective Courses</h6>
     <div class="card mb-2 onHover" id="bg_c_div8" data-idname="c_div8">
      <div class="card-body p-2">
      <div class="c_div" id="c_div8">5012 - Enterprise Web Development</div>
      </div>
     </div>

     <div class="card mb-2 onHover" id="bg_c_div53" data-idname="c_div53">
      <div class="card-body p-2">
      <div class="c_div" id="c_div53">5020 - Android Apps: Android Fundamentals</div>
      </div>
     </div>
     <div class="card mb-2 onHover" id="bg_c_div9" data-idname="c_div9">
      <div class="card-body p-2">
      <div class="c_div" id="c_div9">5300 - Artificial Intelligence</div>
      </div>
     </div>
     <div class="card mb-2 onHover" id="bg_c_div10" data-idname="c_div10">
      <div class="card-body p-2">
      <div class="c_div" id="c_div10">5320 - Evolutionary Computation</div>
      </div>
     </div>
     <div class="card mb-2 onHover" id="bg_c_div11" data-idname="c_div11">
      <div class="card-body p-2">
      <div class="c_div" id="c_div11">5342 - Data Mining</div>
      </div>
     </div>
     <div class="card mb-2 onHover" id="bg_c_div12" data-idname="c_div12">
      <div class="card-body p-2">
      <div class="c_div" id="c_div12">5370 - Biological Data Science</div>
      </div>
     </div>
     <div class="card mb-2 onHover" id="bg_c_div13" data-idname="c_div13">
      <div class="card-body p-2">
      <div class="c_div" id="c_div13">5390 - Deep Learning</div>
      </div>
     </div> 
      <div class="card mb-2 onHover" id="bg_c_div14" data-idname="c_div14">
      <div class="card-body p-2">
      <div class="c_div" id="c_div14">5700 - Computer Systems</div>
      </div>
     </div> 
     <div class="card mb-2 onHover" id="bg_c_div15" data-idname="c_div15">
      <div class="card-body p-2">
      <div class="c_div" id="c_div15">5702 - Cyber Threats and Defense</div>
      </div>
     </div> 
     <div class="card mb-2 onHover" id="bg_c_div16" data-idname="c_div16">
      <div class="card-body p-2">
      <div class="c_div" id="c_div16">5782 - Advanced Information Security</div>
      </div>
     </div> 
     <div class="card mb-2 onHover" id="bg_c_div17" data-idname="c_div17">
      <div class="card-body p-2">
      <div class="c_div" id="c_div17">5792 - Mobile Computing, Networking, and Security</div>
      </div>
     </div>
     <div class="card mb-2 onHover" id="bg_c_div18" data-idname="c_div18">
      <div class="card-body p-2">
      <div class="c_div" id="c_div18">5880 - Computer Science Independent Project</div>
      </div>
     </div>
     <div class="card mb-2 onHover" id="bg_c_div19" data-idname="c_div19">
      <div class="card-body p-2">
      <div class="c_div" id="c_div19">5888 - Cybersecurity Capstone</div>
      </div>
     </div>
     <div class="card mb-2 onHover" id="bg_c_div20" data-idname="c_div20">
      <div class="card-body p-2">
      <div class="c_div" id="c_div20">5900 - Graduate Internship in Computer Science</div>
      </div>
     </div>
     </div>
							
     <!-- falll -->
							<div id="summer_left_id" class="leftside_div">
     <h6 class="font-weight-bold mt-3 mb-3">4000 Level Elective Courses</h6>
    
     <div class="card mb-2 onHover" id="bg_c_div22" data-idname="c_div22">
      <div class="card-body p-2">
      <div class="c_div" id="c_div22">4250 - Programming Languages</div>
      </div>
     </div>
     
     <h6 class="font-weight-bold mt-3 mb-3">5000 Level Elective Courses</h6>
     
     <div class="card mb-2 onHover" id="bg_c_div39" data-idname="c_div39">
      <div class="card-body p-2">
      <div class="c_div" id="c_div39">5880 - Computer Science Independent Project</div>
      </div>
     </div>
     
     <div class="card mb-2 onHover" id="bg_c_div41" data-idname="c_div41">
      <div class="card-body p-2">
      <div class="c_div" id="c_div41">5900 - Graduate Internship in Computer Science</div>
      </div>
     </div>
     <h6 class="font-weight-bold mt-3 mb-3">6000 Level Elective Courses</h6>
      
     <div class="card mb-2 onHover" id="bg_c_div44" data-idname="c_div44">
      <div class="card-body p-2">
      <div class="c_div" id="c_div44">6900 - Thesis in Computer Science</div>
      </div>
     </div>
     </div>
     <!-- summer -->
							<div id="fall_left_id" class="leftside_div" >
     <h6 class="font-weight-bold mt-3 mb-3">4000 Level Elective Courses</h6>
	 <div class="card mb-2 onHover" id="bg_c_div50" data-idname="c_div50">
      <div class="card-body p-2">
      <div class="c_div" id="c_div50" data-idname="c_div50">4010 - Web Development with Java</div>
      </div>
     </div>
	 <div class="card mb-2 onHover" id="bg_c_div51" data-idname="c_div51">
      <div class="card-body p-2">
      <div class="c_div" id="c_div51" data-idname="c_div51">4200 - Python for Scientific Computing and Data Science</div>
      </div>
     </div>
     <div class="card mb-2 onHover" id="bg_c_div45" data-idname="c_div45">
      <div class="card-body p-2">
      <div class="c_div" id="c_div45">4250 - Programming Languages</div>
      </div>
     </div>
     <div class="card mb-2 onHover" id="bg_c_div52" data-idname="c_div52">
      <div class="card-body p-2">
      <div class="c_div" id="c_div52">4610 - Database Management Systems</div>
      </div>
     </div>
     <div class="card mb-2 onHover" id="bg_c_div53" data-idname="c_div53">
      <div class="card-body p-2">
      <div class="c_div" id="c_div53">4700 - Computer Forensics</div>
      </div>
     </div>
	 
     <div class="card mb-2 onHover" id="bg_c_div54" data-idname="c_div54">
      <div class="card-body p-2">
      <div class="c_div" id="c_div54">4730 - Computer Networks and Communications</div>
      </div>
     </div>
	 
     <div class="card mb-2 onHover" id="bg_c_div55" data-idname="c_div55">
      <div class="card-body p-2">
      <div class="c_div" id="c_div55">4760 - Operating Systems</div>
      </div>
     </div>
     <h6 class="font-weight-bold mt-3 mb-3">5000 Level Elective Courses</h6>
     <div class="card mb-2 onHover" id="bg_c_div56" data-idname="c_div56">
      <div class="card-body p-2">
      <div class="c_div" id="c_div56">5130 - Advanced Data Structures and Algorithms</div>
      </div>
     </div>
	 <div class="card mb-2 onHover" id="bg_c_div57" data-idname="c_div57">
      <div class="card-body p-2">
      <div class="c_div" id="c_div57">5222 - Advanced iOS Apps</div>
      </div>
     </div>
	 <div class="card mb-2 onHover" id="bg_c_div58" data-idname="c_div58">
      <div class="card-body p-2">
      <div class="c_div" id="c_div58">5300 - Artificial Intelligence</div>
      </div>
     </div>
	 <div class="card mb-2 onHover" id="bg_c_div59" data-idname="c_div59">
      <div class="card-body p-2">
      <div class="c_div" id="c_div59">5340 - Machine Learning</div>
      </div>
     </div>
	 <div class="card mb-2 onHover" id="bg_c_div60" data-idname="c_div60">
      <div class="card-body p-2">
      <div class="c_div" id="c_div60">5410 - Computer Graphics</div>
      </div>
     </div>
	 <div class="card mb-2 onHover" id="bg_c_div61" data-idname="c_div61">
      <div class="card-body p-2">
      <div class="c_div" id="c_div61">5420 - Digital Image Processing and Computer Vision</div>
      </div>
     </div>
	 <div class="card mb-2 onHover" id="bg_c_div62" data-idname="c_div62">
      <div class="card-body p-2">
      <div class="c_div" id="c_div62">5500 - Software Engineering</div>
      </div>
     </div>
	 <div class="card mb-2 onHover" id="bg_c_div63" data-idname="c_div63">
      <div class="card-body p-2">
      <div class="c_div" id="c_div63">5702 - Cyber Threats and Defense</div>
      </div>
     </div>
	 <div class="card mb-2 onHover" id="bg_c_div64" data-idname="c_div64">
      <div class="card-body p-2">
      <div class="c_div" id="c_div64">5750 - Cloud Computing</div>
      </div>
     </div>
	 <div class="card mb-2 onHover" id="bg_c_div65" data-idname="c_div65">
      <div class="card-body p-2">
      <div class="c_div" id="c_div65">5794 - Security of IoT Systems</div>
      </div>
     </div>
	 <div class="card mb-2 onHover" id="bg_c_div46" data-idname="c_div46">
      <div class="card-body p-2">
      <div class="c_div" id="c_div46">5880 - Computer Science Independent Project</div>
      </div>
     </div>
     <div class="card mb-2 onHover" id="bg_c_div47" data-idname="c_div47">
      <div class="card-body p-2">
      <div class="c_div" id="c_div47">5900 - Graduate Internship in Computer Science</div>
      </div>
     </div>
     <h6 class="font-weight-bold mt-3 mb-3">6000 Level Elective Courses</h6>
     <div class="card mb-2 onHover" id="bg_c_div60" data-idname="c_div60">
      <div class="card-body p-2">
      <div class="c_div" id="c_div60">6320 - Advances in Evolutionary Computation</div>
      </div>
     </div>
	 <div class="card mb-2 onHover" id="bg_c_div61" data-idname="c_div61">
      <div class="card-body p-2">
      <div class="c_div" id="c_div61">6340 - Genetic Programming</div>
      </div>
     </div>
	 <div class="card mb-2 onHover" id="bg_c_div48" data-idname="c_div48">
      <div class="card-body p-2">
      <div class="c_div" id="c_div48">6900 - Thesis in Computer Scienced</div>
      </div>
     </div>
     </div>
    </div>
    </div>


   </div>
   <div class="col-xl-5 mt-5 mb-5">
    <h4>Semesters</h4>
    <div class="row mb-3">
    <div class="col-xl-4">
     <button type="button" class="btn btn-outline-secondary select_btn" data-btn_name='spring' data-spanid="sp_spring2021">Spring 2021</button>
    <span id="sp_spring2021">
							
						</span>
						</div>
    <div class="col-xl-4">
     <button type="button" class="btn btn-outline-secondary select_btn" data-btn_name='summer' data-spanid="sp_summer2021">Summer 2021</button>
							<span id="sp_summer2021">
							
							</span>
						</div>
    <div class="col-xl-4">
     <button type="button" class="btn btn-outline-secondary select_btn" data-btn_name='fall' data-spanid="sp_fall2021">Fall 2021</button>
     <span id="sp_fall2021">
							
     </span>
    </div>
    </div>
    <div class="row mb-3">
    <div class="col-xl-4">
     <button type="button" class="btn btn-outline-secondary select_btn" data-btn_name='spring' data-spanid="sp_spring2022">Spring 2022</button>
     <span id="sp_spring2022">
							
						</span>
    </div>
    <div class="col-xl-4">
     <button type="button" class="btn btn-outline-secondary select_btn" data-btn_name='summer' data-spanid="sp_summer2022">Summer 2022</button>
     <span id="sp_summer2022">
							
							</span>
     
    </div>
    <div class="col-xl-4">
     <button type="button" class="btn btn-outline-secondary select_btn" data-btn_name='fall' data-spanid="sp_fall2022">Fall 2022</button>
     <span id="sp_fall2022">
							
     </span>
    </div>
    </div>

    <div class="row mb-3">
    <div class="col-xl-4">
     <button type="button" class="btn btn-outline-secondary select_btn" data-btn_name='spring' data-spanid="sp_spring2023">Spring 2023</button>
     <span id="sp_spring2023">
							
     </span>
    </div>
    <div class="col-xl-4">
     <button type="button" class="btn btn-outline-secondary select_btn" data-btn_name='summer' data-spanid="sp_summer2023">Summer 2023</button>
     <span id="sp_summer2023">
							
							</span>
    </div>
    <div class="col-xl-4">
     <button type="button" class="btn btn-outline-secondary select_btn" data-btn_name='fall' data-spanid="sp_fall2023">Fall 2023</button>
     <span id="sp_fall2023">
							
     </span>
    </div>
    </div>

    <div class="row mb-3">
    <div class="col-xl-4">
     <button type="button" class="btn btn-outline-secondary select_btn" data-btn_name='spring' data-spanid="sp_spring2024">Spring 2024</button>
     <span id="sp_spring2024">
							
     </span>
    </div>
    <div class="col-xl-4">
     <button type="button" class="btn btn-outline-secondary select_btn" data-btn_name='summer' data-spanid="sp_summer2024">Summer 2024</button>
     <span id="sp_summer2024">
							
							</span>
     
    </div>
    <div class="col-xl-4">
     <button type="button" class="btn btn-outline-secondary select_btn" data-btn_name='fall' data-spanid="sp_fall2024">Fall 2024</button>
     <span id="sp_fall2024">
							
     </span>
    </div>
    </div>
    <div class="row mb-3">
    <div class="col-xl-4">
     <button type="button" class="btn btn-outline-secondary select_btn" data-btn_name='spring' data-spanid="sp_spring2025">Spring 2025</button>
     <span id="sp_spring2025">
							
						</span>
    </div>
    <div class="col-xl-4">
     <button type="button" class="btn btn-outline-secondary select_btn" data-btn_name='summer' data-spanid="sp_summer2025">Summer 2025</button>
     <span id="sp_summer2025">
							
							</span>
     
    </div>
    <div class="col-xl-4">
     <button type="button" class="btn btn-outline-secondary select_btn" data-btn_name='fall' data-spanid="sp_fall2025">Fall 2025</button>
     <span id="sp_fall2025">
							
     </span>
    </div>
    </div>

    <div class="row mb-3">
    <div class="col-xl-4">
     <button type="button" class="btn btn-outline-secondary select_btn" data-btn_name='spring' data-spanid="sp_spring2026">Spring 2026</button>
     <span id="sp_spring2026">
							
     </span>
    </div>
    <div class="col-xl-4">
     <button type="button" class="btn btn-outline-secondary select_btn" data-btn_name='summer' data-spanid="sp_summer2026">Summer 2026</button>
     <span id="sp_summer2026">
							
							</span>
     
    </div>
    <div class="col-xl-4">
     <button type="button" class="btn btn-outline-secondary select_btn" data-btn_name='fall' data-spanid="sp_fall2026">Fall 2026</button>
     <span id="sp_fall2026">
							
     </span>
    </div>
    </div>


   </div>
   <div class="col-xl-3 mt-5 mb-5">

    <div class="card bg-light">
    <div class="card-body">
     <h5>Degree Checklist</h5>
     <span class="text-danger" id="incomplete_id">INCOMPLETE</span>
     <span class="text-success" id="complete_id" style="display:none;">COMPLETE</span>
     <hr>
     <h5>Core Courses <span class="text-danger small">unmet</span></h5>
     <p id="core_c_div3">4250 - Programming Languages <i class="fa fa-check" id="fa_c_div3" style="display:none;" aria-hidden="true"></i></p>
     <!--p id="core_c_div7">CMP SCI 4760 <i class="fa fa-check" id="fa_c_div7" style="display:none;" aria-hidden="true"></i></p-->
     <p id="core_c_div56">5130 - Advanced Data Structures and Algorithms <i class="fa fa-check" id="fa_c_div56" style="display:none;" aria-hidden="true"></i></p>
     <p id="core_c_div62">5500 - Software Engineering <i class="fa fa-check" id="fa_c_div62" style="display:none;" aria-hidden="true"></i></p>
     <!--p id="core_c_div14">CMP SCI 5700 <i class="fa fa-check" id="fa_c_div14" style="display:none;" aria-hidden="true"></i></p-->
     <?php
	 // echo "sjdzhfjhds";
		if(count($restricted_course) > 0){ 
	 ?>
	 <hr>
	 <h5>Restricted Courses</h5>
	 <?php 
		foreach($restricted_course as $k => $v){
	 ?>
		<p id="core_c_div34"><?=$v?><i class="fa fa-check" id="fa_c_div34" style="display:none;" aria-hidden="true"></i></p>
		<?php } ?>
		<?php } ?>
		<hr>
		<?php
	 // echo "sjdzhfjhds";
	 
		if(count($waviedcourse_option) > 0){ 
	 ?>
	 
	 <?php 
	  
		foreach($waviedcourse_option as $k1 => $v1){
			if($v1 == "artificial"){
			?>
		<h5>Artificial Intelligence</h5>
			<?php 			
			}else if($v1 == "cyber"){
			?>
		<h5>Cyber Security</h5>
			<?php 			
			}else if($v1 == "data_science"){
			?>
		<h5>Data Science</h5>
			<?php 			
			}else if($v1 == "internet_web"){
			?>
		<h5>Internet and Web</h5>
			<?php 			
			}else if($v1 == "mobile"){
			?>
		<h5>Mobile Apps and Computing</h5>
			<?php 			
			}
			$dv = $_POST[$v1];
		foreach($dv as $k1 => $v1){
	 ?>
		<p id="core_c_div34"><?=$v1?><i class="fa fa-check" id="fa_c_div34" style="display:none;" aria-hidden="true"></i></p>
		<?php } ?>
		<hr>
		<?php } ?>
		<?php } ?>
	 <h5>Required Hours (30) <span text-danger small> unmet</span></h5>
     <p>Currently <span id="required_hrs">0</span> hrs.</p>
     <h5>5000+ Level Hours (18+)</h5>
     <span class="text-dange">unmet</span>
     <p>Currently 0 hrs.</p>
     <h5>6000+ Level Hours (3+) <span class="text-danger small">unmet</span> </h5>
     <p>Currently 0 hrs.</p>
     
    </div>
    </div>

   </div>
  </div>
  </div>
 </section>

 <footer style="background:#333;">
  <div class="container-fluid text-white text-decoration-none">

  <div class="container pt-3 pb-3">
   <div class="row">

    <div class="col-xl-4">
    <h3 class="text-white">
     UMSL Links
    </h3>

    <ul class="footerlink">
     <li>

      <a href="http://www.umsl.edu/" target="_blank">
      UMSL Home Page
      </a>
     </li>
     <li>

      <a id="umslMyGatewayLink" href="https://mygateway.umsl.edu/webapps/portal/frameset.jsp"
      target="_blank">
      MyGateway
      </a>
     </li>
     <li>

      <a id="umslMyGatewayLink" href="https://mygateway.umsl.edu/webapps/portal/frameset.jsp"
      target="_blank">
      MyGateway
      </a>
     </li>
    </ul>
    </div>
    <div class="col-xl-4">
    <h3>
     UMSL Links
    </h3>

    <ul class="footerlink">
     <li>

      <a href="http://www.umsl.edu/" target="_blank">
      UMSL Home Page
      </a>
     </li>
     <li>

      <a id="umslMyGatewayLink" href="https://mygateway.umsl.edu/webapps/portal/frameset.jsp"
      target="_blank">
      MyGateway
      </a>
     </li>
     <li>

      <a id="umslMyGatewayLink" href="https://mygateway.umsl.edu/webapps/portal/frameset.jsp"
      target="_blank">
      MyGateway
      </a>
     </li>
    </ul>
    </div>
    <div class="col-xl-4">
    <h3>
     UMSL Links
    </h3>

    <ul class="footerlink">
     <li>

      <a href="http://www.umsl.edu/" target="_blank">
      UMSL Home Page
      </a>
     </li>
     <li>

      <a id="umslMyGatewayLink" href="https://mygateway.umsl.edu/webapps/portal/frameset.jsp"
      target="_blank">
      MyGateway
      </a>
     </li>
     <li>

      <a id="umslMyGatewayLink" href="https://mygateway.umsl.edu/webapps/portal/frameset.jsp"
      target="_blank">
      MyGateway
      </a>
     </li>
    </ul>
    </div>
   </div>
  </div>

  </div>
 </footer>

 <!-- Optional JavaScript; choose one of the two! -->

 <!-- Option 1: Bootstrap Bundle with Popper -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
  crossorigin="anonymous"></script>

 <!-- Option 2: Separate Popper and Bootstrap JS -->
 
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>
<script>
var a="";
$(".select_btn").click(function (){
	// alert("haiii");
	var thisdata = $(this).data("btn_name");
	var thisspanid = $(this).data("spanid");
	a = thisspanid;
 // alert(thisspanid);
	$(".select_btn").css("background","white");
	$(".select_btn").css("color","#6c757d");
	$(".select_btn").css("border-color","#6c757d;");
 
	$(this).css("background","#981e32");
	$(this).css("color","white");
 
 
	$(".leftside_div").hide();
	$("#"+thisdata+"_left_id").show();
	
});
$(".onHover").click(function(){
 if(a != "")
 {
 
	$(this).css("background","green");
	$(this).css("color","white");
 }
 else {
  alert('Please Choose Any Semsesters') 
 }
	// alert(a);
	var thisdata = $(this).data("idname");
	var thisval = $("#"+thisdata).text();
	// alert(thisval);
	var er = 0;
	
	$(".in_val_"+a).each(function(){
		if($(this).val() == thisval){
			er++;
		}			
	});
	if(er == 0){
	$("#"+a).append("<span id='span_sem_"+thisdata+"'> <input class='form-control form-control-sm float-start w-75 mt-2 semesters_course_list in_val_"+a+"' value='"+thisval+"' id='semesters_"+thisdata+"' type='text' readonly/><button class='btn btn-sm btn-secondary mt-2 d-block semremove' data-l_idname='"+thisdata+"'/>X</button</span>");
	}
	var course_length = $(".semesters_course_list").length;
	$("#required_hrs").text(course_length*3);
	if(thisval == "4250 - Programming Languages"){
		$("#core_c_div3").css("color","green");
		$("#fa_c_div3").show();
	}
		$("#core_"+thisdata).css("color","green");
		$("#fa_"+thisdata).show();
	// }
	if(course_length >= 10){
		$("#incomplete_id").hide();
		$("#complete_id").show();
	}else{
		$("#incomplete_id").show();
		$("#complete_id").hide();
	}
	// alert(course_length);
	$('.semremove').click(function (){
  var thisid = $(this).data('l_idname');
  //alert(thisid);
  $("#span_sem_"+thisid).remove();
  $("#bg_"+thisid).css("background","white");
  $("#bg_"+thisid).css("color","black");
		$("#core_"+thisid).css("color","black");
		$("#fa_"+thisid).hide();
			var course_length = $(".semesters_course_list").length;
			$("#required_hrs").text(course_length*3);
			if(course_length >= 10){
					$("#incomplete_id").hide();
					$("#complete_id").show();
				}else{
					$("#incomplete_id").show();
					$("#complete_id").hide();
				}
  });
});
$('.semremove').click(function (){
var thisid = $(this).data('l_idname');
// alert(thisid);
$("#span_sem_"+thisid).remove();
$("#bg_"+thisid).css("background","white");
$("#bg_"+thisid).css("color","black");
var course_length = $(".semesters_course_list").length;
$("#required_hrs").text(course_length*3);
if(course_length >= 10){
		$("#incomplete_id").hide();
		$("#complete_id").show();
	}else{
		$("#incomplete_id").show();
		$("#complete_id").hide();
	}
});
</script>
</html>