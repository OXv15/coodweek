<?php 
	// directories to cunter file
	$dir = 'count/count_island.dat';
	$get_count_value = file_get_contents($dir);
	function lock(){
		global $get_count_value;
		if ($get_count_value >99 || $get_count_value == 100) {
			echo "php/restrict.php";
		}else{
			echo "php/register_island.php";
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
	<title>Codeweek | registration form</title>
</head>
<body>
	<style type="text/css">.reg_sbmit_btn:focus{ outline:none; }</style>
	<link rel="stylesheet" type="text/css" href="assets/css/codeweek.min.css">
	<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="vendor/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="vendor/dropdown/css/style.css">
    <link rel="stylesheet" href="vendor/socicon/css/styles.css">
	<div class="form_top_div" style="box-shadow: 0px 1px 10px #000;"><img src="assets/imgs/logowh.png"></div>
	<div class="justify-content-center p-2 my-auto d-flex">
	  	<form class="bg-white reg_form" method="POST" action="<?php lock(); ?>">
	    	<div class="tuck"></div>
		  	<div class=" p-3">
		  		<p class=" text-left form_title fa-2x pt-2 pb-3">Student Registration</p>
			  	<div id="pointer"><h4>ISLAND, Oracle Academy, Data Science Bootcamp for Secondary Schools</h4></div>
			    <div class="group">      
			      <input type="disabled" name="firstname" required>
			      <span class="highlight"></span>
			      <span class="bar"></span>
			      <label>First Name <i class="text-danger">*</i></label>
			    </div>
			      
			    <div class="group">      
			      <input type="text" name="lastname" required>
			      <span class="highlight"></span>
			      <span class="bar"></span>
			      <label>Last Name <i class="text-danger">*</i></label>
			    </div>

			    <div class="group">      
			      <input type="email" name="email" required>
			      <span class="highlight"></span>
			      <span class="bar"></span>
			      <label>Email <i class="text-danger">*</i></label>
			    </div>
			      
			    <div class="group">      
			      <input type="number" name="age" required>
			      <span class="highlight"></span>
			      <span class="bar"></span>
			      <label>Age <i class="text-danger">*</i></label>
			    </div>
			      
			    
			    <div class="group">      
			      <select name="gender" required>
			      	<option></option>
			      	<option>Male</option>
			      	<option>Female</option>
			      </select>
			      <span class="highlight"></span>
			      <span class="bar"></span>
			      <label>Gender <i class="text-danger">*</i></label>
			    </div>
			      
			    <div class="group">      
			      <input type="text" name="parentname" required>
			      <span class="highlight"></span>
			      <span class="bar"></span>
			      <label>Parent/Guardian Name <i class="text-danger">*</i></label>
			    </div>
			      
			    <div class="group">      
			      <input type="text" name="parentoccupation" required>
			      <span class="highlight"></span>
			      <span class="bar"></span>
			      <label>Parent/Guardian Occupation <i class="text-danger">*</i></label>
			    </div>
			      
			    <div class="group">      
			      <input type="text" name="parentaddress" required>
			      <span class="highlight"></span>
			      <span class="bar"></span>
			      <label>Parent/Guardian Address <i class="text-danger">*</i></label>
			    </div>
			      
			    <div class="group">      
			      <input type="number" name="phone" required>
			      <span class="highlight"></span>
			      <span class="bar"></span>
			      <label>Phone Number <i class="text-danger">*</i></label>
			    </div>

			    <div class="group">      
			      <select name="programmetype" required>
			      	<option></option>
			      	<option>Wificombact Academy</option>
			      	<option>Private School</option>
			      	<option>Public School</option>
			      </select>
			      <span class="highlight"></span>
			      <span class="bar"></span>
			      <label>Programme Type <i class="text-danger">*</i></label>
			    </div>

			    <div id="pointer2">
			    	<h4>
			    		Notice: <p>Please make sure all fields are properly filled before submitting this form.</p>
			    	</h4>
			    </div>
			 	<button type="submit" name="submit" class="text-white btn mt-3" style="background: rgb(0, 174, 239);">SUBMIT FORM</button>
			    <p class="text-muted text-center pt-5">Thanks for your time. Form by Wificombact@2018.</p><img class="justify-content-center my-auto d-flex rounded-circle" style="width: 80px;height: 80px;" src="assets/imgs/logo.jpeg">
		  	</div>
	  	</form>
	</div>
</body>
</html>
<style>
	.form_top_div{
    background-color: rgb(103, 58, 183) !important;
    background: url(../imgs/);
    position: absolute;top: 0px;height: 35vh;width: 100%;
    box-shadow: 0px 2px 5px #000;
    /*border-bottom: 1px solid #000;*/
  }
  .reg_form{
    margin-top: 10%;
    width:600px;z-index: 10000000000000000; /*position: absolute;top:50%;left: 50%;transform: translate(-50%,-50%);*/margin-top: 5% !important;margin-bottom: 5% !important;
    box-shadow: 0px 0px 2px grey;
    /*border-top: 1em solid rgb(179, 136, 255);*/
    -webkit-transition: width 2s, height 4s; /* Safari */
    transition: width 2s, height 4s;
  }
  .form_title{
    color: #444;
    font-family: sans-serif;
  }
  .tuck{
    position: relative;top: 0px;left:0px;right:0px;height: 1em;background-color: rgb(179, 136, 255);border-bottom: 1px solid #000;
  }


/*@media screen and (min-width: 1000px){
  .reg_form{
    width:300px;z-index: 
    }
}*/
/*.block:after {
  color: black;
  border-left: 13px solid;
  border-top: 0px solid transparent;
  border-bottom: 26px solid transparent;
  display: inline-block;
  content: '';
  position: absolute;
  right: -13px;
}
.block {
  background-color: black;
  width: 100px;
  height: 26px;
  display: inline-block;
  position: relative;
}*/
 #pointer {
    width: 80%;
    height: 10vh;
    padding-right: 20px;
    padding-left: 10px;
    margin-bottom: 2em;
    margin-left: -16px;
    padding-top: 10px;
    position: relative;
    background-color: rgb(103, 58, 183);
  }
  #pointer h4{
    color: #fff;
    font-size: 19px !important;
    font-weight: lighter;
  }
  #pointer:after {
    content: "";
    position: absolute;
    left: 0;
    bottom: 0;
    width: 0;
    height: 10vh;
  }
  #pointer:before {
    content: "";
    position: absolute;
    right: -20px;
    bottom: 0;
    width: 0;
    height: 10vh;
    border-left: 20px solid  rgb(103, 58, 183);
    border-top: 0px solid transparent;
    border-bottom: 60px solid transparent;
  }
  #pointer2 {
    width: 70%;
    height: 13vh;
    padding-right: 20px;
    padding-left: 10px;
    margin-left: -16px;
    padding-top: 10px;
    position: relative;
    background-color: rgb(103, 58, 183);
  }
  #pointer2 h4{
    color: #fff;
    font-size: 19px !important;
    font-weight: lighter;
  }
  #pointer2:after {
    content: "";
    position: absolute;
    left: 0;
    bottom: 0;
    width: 0;
    height: 13vh;
  }
  #pointer2:before {
    content: "";
    position: absolute;
    right: -20px;
    bottom: 0;
    width: 0;
    height: 13vh;
    border-left: 20px solid  rgb(103, 58, 183);
    border-top: 0px solid transparent;
    border-bottom: 85px solid transparent;
  }
  /*button {
    color: #fff;
    width: 66.5%;
    font-weight: bolder;
    height: 10vh;
    padding-right: 20px;
    padding-left: 10px;
    margin-bottom: 2em;
    margin-left: -16px;
    padding-top: 5px;
    position: relative;
    background-color: rgb(103, 58, 183);
    border-style: none;
    -webkit-transition: width -0.9s, height -0.9s;
    transition: width -0.9s, height -0.9s;
  }
  button:after {
    content: "";
    position: absolute;
    left: 0;
    bottom: 0;
    width: 0;
    height: 10vh;
    -webkit-transition: width -0.9s, height -0.9s;
    transition: width -0.9s, height -0.9s;
  }
  button:before {
    content: "" !important;
    position: absolute !important;
    right: -20px !important;
    bottom: 0 !important;
    width: 0 !important;
    height: 10vh !important;
    border-left: 20px solid  rgb(103, 58, 183) !important;
    border-top: 0px solid transparent !important;
    border-bottom: 60px solid transparent !important;
    -webkit-transition: width -0.9s, height -0.9s;
    transition: width -0.9s, height -0.9s;
  }*/
  button:focus    { outline:none; }

@media screen and (max-width: 1000px){
  
  .reg_form{
    width:500px;
      margin-top: 10% !important;
    -webkit-transition: width 2s, height 4s; /* Safari */
      transition: width 2s, height 4s;
    }
  #pointer {
    width: 80%;
    height: 12vh;
    padding-right: 20px;
    padding-left: 10px;
    margin-bottom: 2em;
    margin-left: -16px;
    padding-top: 15px;
    position: relative;
    background-color: rgb(103, 58, 183);
  }
  #pointer h4{
    color: #fff;
    font-size: 19px !important;
    font-weight: lighter;
  }
  #pointer:after {
    content: "";
    position: absolute;
    left: 0;
    bottom: 0;
    width: 0;
    height: 12vh;
  }
  #pointer:before {
    content: "";
    position: absolute;
    right: -20px;
    bottom: 0;
    width: 0;
    height: 12vh;
    border-left: 20px solid  rgb(103, 58, 183);
    border-top: 0px solid transparent;
    border-bottom: 79px solid transparent;
  }
  #pointer2 {
    width: 50%;
    height: 13vh;
    padding-right: 20px;
    padding-left: 10px;
    margin-left: -16px;
    padding-top: 6px;
    position: relative;
    background-color: rgb(103, 58, 183);
  }
  #pointer2 h4{
    color: #fff;
    font-size: 19px !important;
  }
  #pointer2:after {
    content: "";
    position: absolute;
    left: 0;
    bottom: 0;
    width: 0;
    height: 13vh;
  }
  #pointer2:before {
    content: "";
    position: absolute;
    right: -22px;
    bottom: 0;
    width: 0;
    height: 13vh;
    border-left: 22px solid  rgb(103, 58, 183);
    border-top: 0px solid transparent;
    border-bottom: 85px solid transparent;
  }
}
* { box-sizing:border-box; }

/* basic stylings ------------------------------------------ */
body         {background-color: #ede7f6 !important; font-family: sans-serif;}
p{font-size: 14px;font-weight: lighter;}
h2     { 
  text-align:center; 
  margin-bottom:50px; 
}
h2 small { 
  font-weight:normal; 
  color:#888; 
  display:block; 
}
.footer   { text-align:center; }
.footer a  { color:#53B2C8; }

/* form starting stylings ------------------------------- */
.group        { 
  position:relative; 
  margin-bottom:45px; 
}
input{
  font-size:14px;
  color: #002;
  padding:10px 10px 10px 5px;
  display:block;
  width:300px;
  border:none;
  border-bottom:1px solid lightgrey;
}
input:focus     { outline:none; }
select        {
  font-size:14px;
  padding:10px 10px 10px 5px;
  display:block;
  width:300px;
  border:none;
  border-bottom:1px solid lightgrey;
}
select:focus    { outline:none; }

/* LABEL ======================================= */
label          {
  color:#000; 
  font-size:18px;
  font-weight:normal;
  position:absolute;
  pointer-events:none;
  left:5px;
  top:10px;
  transition:0.2s ease all; 
  -moz-transition:0.2s ease all; 
  -webkit-transition:0.2s ease all;
}

/* active state */
input:focus ~ label, input:valid ~ label    {
  top:-20px;
  font-size:19px;
  color:#000;
}
/* active state */
select:focus ~ label, select:valid ~ label    {
  top:-20px;
  font-size:19px;
  color:#000;
}

/* BOTTOM BARS ================================= */
.bar  { position:relative; display:block; width:300px; }
.bar:before, .bar:after   {
  content:'';
  height:2px; 
  width:0;
  bottom:1px; 
  position:absolute;
  background: rgb(103, 58, 183); 
  transition:0.2s ease all; 
  -moz-transition:0.2s ease all; 
  -webkit-transition:0.2s ease all;
}
.bar:before {
  left:50%;
}
.bar:after {
  right:50%; 
}

/* active state */
input:focus ~ .bar:before, input:focus ~ .bar:after {
  width:50%;
}

/* HIGHLIGHTER ================================== */
.highlight {
  position:absolute;
  height:60%; 
  width:100px; 
  top:25%; 
  left:0;
  pointer-events:none;
  opacity:0.5;
}

/* active state */
input:focus ~ .highlight {
  -webkit-animation:inputHighlighter 0.3s ease;
  -moz-animation:inputHighlighter 0.3s ease;
  animation:inputHighlighter 0.3s ease;
}

/* ANIMATIONS ================ */
@-webkit-keyframes inputHighlighter {
  from { background: rgb(103, 58, 183); }
  to  { width:0; background:transparent; }
}
@-moz-keyframes inputHighlighter {
  from { background: rgb(103, 58, 183); }
  to  { width:0; background:transparent; }
}
@keyframes inputHighlighter {
  from { background: rgb(103, 58, 183); }
  to  { width:0; background:transparent; }
}
.reg_submit_btn{
  border-style: none;background: transparent;width: 100%;color: #fff;outline: none;
}
</style>
