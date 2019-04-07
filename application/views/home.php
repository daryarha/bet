		<!--[if lt IE 10]>
				<link rel="stylesheet" type="text/css" href="css/style2IE.css" />
		<![endif]-->
<!--     </head>
	        <script language="JavaScript">
var message="Function Disabled!";
function clickIE4(){
if (event.button==2){
alert(message);
return false;
}
}
function clickNS4(e){
if (document.layers||document.getElementById&&!document.all){
if (e.which==2||e.which==3){
alert(message);
return false;
}
}
}
if (document.layers){
document.captureEvents(Event.MOUSEDOWN);
document.onmousedown=clickNS4;
}
else if (document.all&&!document.getElementById){
document.onmousedown=clickIE4;
}
document.oncontextmenu=new Function("return false")

document.onkeydown = function(e) {
        if (e.ctrlKey && 
            (e.keyCode === 67 || 
             e.keyCode === 86 || 
             e.keyCode === 85 || 
             e.keyCode === 117)) {
            return false;
        } else {
            return true;
        }
};
</script> -->
    <body>
       <div class="container">
			<div class="sp-container">
				<div class="sp-content">
					<div class="sp-globe"></div>
          <a class="hilang sp-circle-link" href="<?php echo base_url();?>faq">FAQ</a>
          <a class="hilang sp-circle-link2" href="<?php echo base_url();?>registration">REGISTRATION</a>
          <a class="hilang sp-circle-link3" href="<?php echo base_url();?>login">LOGIN</a>
          <a class="hilang sp-circle-link4" href="<?php echo base_url();?>rnr">DOWNLOAD RNR</a>

<ul>
  <a href="<?php echo base_url();?>faq">
  <li class="wkwk smartphone"> <span style="font-size: 3em;">FAQ</span></li>
  </a>

  <a href="<?php echo base_url();?>registration">
  <li style="text-align: center; margin-top: 10%; font-size: 3em; position: relative;" class="animasi smartphone">REGISTRATION</li>
  </a>

  <a href="<?php echo base_url();?>login">
  <li style="text-align: center; margin-top: 10%; font-size: 3em; position: relative;" class="animasi smartphone">LOGIN</li>
  </a>


  <a href="<?php echo base_url();?>rnr">
  <li style="text-align: center; margin-top: 10%; font-size: 3em; position: relative;" class="animasi smartphone">DOWNLOAD RNR</li>
  </a>
</ul>
				</div>
			</div>
      </div>
    </body>
</html>
