<html><head>
<title>Chrono</title><!--Crée par Seddiki Mohammed-->
<script language="Javascript">
var One=true;
var Int;
function Chrono(){
    var MSec=parseInt(Ext(GetEle(document.forms[0].Text_1.value,3)));
    var Sec=parseInt(Ext(GetEle(document.forms[0].Text_1.value,2)));
	var Min=parseInt(Ext(GetEle(document.forms[0].Text_1.value,1)));
	var He=parseInt(Ext(GetEle(document.forms[0].Text_1.value,0)));
	if(MSec<100){
	  MSec++;
	  }
	  else{
	      Sec++;MSec=0;
		  if(Sec>60){
	        Min++;Sec=0;
	          if(Min>60){
                 He++;Min=0;
				 }			  
		   }
		  }
		 
	 document.forms[0].Text_1.value=Trans(He)+":"+Trans(Min)+":"+Trans(Sec)+":"+Trans(MSec);
	
  }

  function GetEle(s,i){
    var Ele=new Array();
	var s_=s+":";
	var j;
	var m=0;
	var s__="";
	for (j=0;j<s_.length;j++){
	if(s_.charAt(j)!=":"){
	    s__=s__+s_.charAt(j);
		}else{
		  Ele[m]=s__;
		  s__="";m++;
		  }
	 }
		  return Ele[i];
	}
	function Trans(i){
	 if(i<10){
	   return "0"+i;
	   }else{
          return i;
		  }	   //setInterval("Chrono()",10)
	}
	function Ext(s){
	var s_=parseInt(s.substring(1,s.length));
	if(parseInt(s)<10){
	   return parseInt(s_);
	   }else{
	     return s;
		 }
	}
	function SetInt(){
    document.getElementById("demm").value = "Arrêter";
	 if(One){
	     Int=setInterval("Chrono()",10);
	   One=false;
	   }else{
	     clearInterval(Int);
		 One=true;
		}
	 }
	 function Init(){
	  document.forms[0].Text_1.value="00:00:00:00";
	  }
</script>
</head>
<body >
<fieldset><legend>Chronométre</legend>
<form>
  <input id="demm" type=button value="Démarrer" Onclick="SetInt()"> &nbsp;&nbsp;&nbsp;<input type=text name=Text_1 value=00:00:00:00> &nbsp;&nbsp;&nbsp;
  <input type=button value=Initialiser Onclick=Init()>
</form>
</fieldset>
</body>
</html>