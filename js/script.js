const $ = id => document.getElementById(id)
const debug = x => console.log(x); 
function renviar(link){
	window.location.assign(link);
}

function ocultar(num,opc){
	let a = ['1','2','3','4','5']; 
	let barra = $(num); 
	let opcClick = $(opc); 
	for(var i = 0 ;  i < 5 ;i++){
		let ocult = $(a[i]);
		let opcfalse = $('opc'+a[i]);
		if (a[i] == num ){
			continue ;
		}
		opcfalse.style.backgroundColor ="var(--afondo)";
		opcfalse.style.border="none";
		opcfalse.style.borderBottom ="2px solid purple";
		ocult.style.display = "none"; 
	}
	opcClick.style.backgroundColor="white"; 
	opcClick.style.borderLeft="2px solid purple";
	opcClick.style.borderTopLeftRadius= "15px" ;
	opcClick.style.borderTopRightRadius= "15px" ;
	opcClick.style.borderRight="2px solid purple"; 
	opcClick.style.borderTop="2px solid purple";  
	opcClick.style.borderBottom="none";
	barra.style.display ="block"; 
	
} 
ocultar('1','opc1');


