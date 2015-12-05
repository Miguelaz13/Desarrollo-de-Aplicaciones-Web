
//***************************************
//Funciones de DOM 
//***************************************

function mostrar(obj)
{
	while(obj.nextSibling != null && obj.className != "tooltip")
		obj = obj.nextSibling;
	if(obj != null)
		obj.style.display = "inline";
}
function ocultar(obj)
{
	while(obj.nextSibling != null && obj.className != "tooltip")
		obj = obj.nextSibling;
	if(obj != null)
		obj.style.display = "none";
}

var obj,dir;
function iniciar()
{
	var txt=document.getElementById("ola").innerHTML;
	var letras = txt.split("");
	var res ="";
	for (var i=0;i < letras.length;i++)
		res+="<span>" +letras[i] +"</span>";
	document.getElementById("ola").innerHTML=res;
	obj =document.getElementById("ola").firstChild;
	dir =1;
	setInterval("efecto()",150);
}

function efecto()
{
	obj.style.color ="black";
	if(dir==1)
	{
		if(obj.nextSibling!=null)
			obj = obj.nextSibling;
		else
			dir=0;
	}
	else
	{
		if(obj.previousSibling!=null)
			obj =obj.previousSibling;
		else
			dir=1;
	}
	obj.style.color="blue";
}

//***************************************
//Funciones de AJAX 
//***************************************

addEvent(window,'load',inicializarEventos,false);
function inicializarEventos()
{
	 var ob;
	 for(f=1;f<=12;f++)
	 {
		 ob=document.getElementById('enlace'+f);
		 addEvent(ob,'click',presionEnlace,false);
	 }
}
function presionEnlace(e)
{
	 if (window.event)
	 {
		 window.event.returnValue=false;
		 var url=window.event.srcElement.getAttribute('href');
		 cargarUtiles(url);
	 }
	 else
	 if (e)
	 {
		 e.preventDefault();
		 var url=e.target.getAttribute('href');
		 cargarUtiles(url);
	 }
}
var conexion1;
function cargarUtiles(url)
{
	 if(url=='')
	 {
	 	return;
	 }
	 conexion1=crearXMLHttpRequest();
	 conexion1.onreadystatechange = procesarEventos;
	 conexion1.open("GET", url, true);
	 conexion1.send(null);
}
function procesarEventos()
{
	 var detalles = document.getElementById("detalles");
	 if(conexion1.readyState == 4)
	 {
	 	detalles.innerHTML = conexion1.responseText;
	 }
	 else
	 {
		 detalles.innerHTML = 'Cargando...';
	 }
}

function addEvent(elemento,nomevento,funcion,captura)
{
	 if (elemento.attachEvent)
	 {
		 elemento.attachEvent('on'+nomevento,funcion);
		 return true;
	 }
	 else
		 if (elemento.addEventListener)
		 {
			 elemento.addEventListener(nomevento,funcion,captura);
			 return true;
		 }
		 else
		 	return false;
}
function crearXMLHttpRequest()
{
	 var xmlHttp=null;
	 if (window.ActiveXObject)
	 	xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
	 else
		 if (window.XMLHttpRequest)
		 	xmlHttp = new XMLHttpRequest();
		 return xmlHttp;
}