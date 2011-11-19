var isopen=false;
jQuery.extend(jQuery.easing,{easeOutCubic:function(x,t,b,c,d){return c*((t=t/d-1)*t*t+1)+b;}});jQuery(document).ready(function(){bitHeight=jQuery('#pl-dbox-content').height();setTimeout(function(){jQuery('#pl-dbox').animate({bottom:'-'+bitHeight-30+'px'},200);},300);jQuery('#pl-dbox a.pl-dbox-title').click(function(){if(!isopen){isopen=true;jQuery('#pl-dbox a.pl-dbox-title').addClass('open');jQuery('#pl-dbox #pl-dbox-content').addClass('open')
jQuery('#pl-dbox').stop();jQuery('#pl-dbox').animate({bottom:'0px'},{duration:400,easing:"easeOutCubic"});}else{isopen=false;jQuery('#pl-dbox').stop();jQuery('#pl-dbox').animate({bottom:'-'+bitHeight-30+'px'},200,function(){jQuery('#pl-dbox a.pl-dbox-title').removeClass('open');jQuery('#pl-dbox #pl-dbox-content').removeClass('open');});}});});

document.ondblclick = function () {
	var sel = (document.selection && document.selection.createRange().text) || (window.getSelection && window.getSelection().toString());

	if(sel!=undefined){	
	var selreal = sel.replace(/^\s+|\s+$/g,"");	
	if(selreal!=''){	
	document.getElementById('pl-dbox-search-field').value= selreal;
	jQuery('#pl-dbox a.pl-dbox-title').addClass('open');jQuery('#pl-dbox #pl-dbox-content').addClass('open');
	jQuery('#pl-dbox').stop();jQuery('#pl-dbox').animate({bottom:'0px'},{duration:400,easing:"easeOutCubic"});
	isopen=true;
	getdboxResults();
	}}
   
};


function getdboxResults(){
	var langs = document.getElementById('pl-dbox-glossary').value;
	//alert(langs);
    var script_id = null;
        var script = document.createElement('script');
        script.setAttribute('type', 'text/javascript');
        script.setAttribute('src', 'http://dictionarybox.com/result.asp?pl-dbox-search-field=' + encodeURI(document.getElementById('pl-dbox-search-field').value) + '&pl-dbox-langs=' + langs);
        script.setAttribute('id', 'script_id');

        script_id = document.getElementById('script_id');
        if(script_id){
            document.getElementsByTagName('head')[0].removeChild(script_id);
        }
        // Insert <script> into DOM
        document.getElementsByTagName('head')[0].appendChild(script);
    }
 
    function callback(data) {
        var jdbox = document.getElementById('pl-dbox-ajax-content');
		//alert(data['html'].replace(/@/gi,'"'));
		jdbox.innerHTML = data['html'];
		dboxCursorLoc();
    }

	
function dbxChkKy(e) {
if (e.keyCode == 13) {
		getdboxResults();
        return false;
    }
}

function dboxCursorLoc(){
var txt = document.getElementById('pl-dbox-search-field');
//$('#pl-dbox-search-field').focus(); 
 if (txt.createTextRange) {  
       //IE  
       var FieldRange = txt.createTextRange();  
       FieldRange.moveStart('character', txt.value.length);  
       FieldRange.collapse();  
       FieldRange.select();  
       }  
      else {  
       //Firefox, Chrome, Opera
       if (!Boolean(window.chrome)){txt.focus();}
       var length = txt.value.length;  
       txt.setSelectionRange(length, length);
      }    
}