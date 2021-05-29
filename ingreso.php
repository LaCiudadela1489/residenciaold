<?PHP
	$nombre = $_REQUEST[nombre];
	$apellido = $_REQUEST[apellido];
	$direccion = $_REQUEST[direccion];
	$telefono = $_REQUEST[telefono];
	$correo = $_REQUEST[correo];
	$dia = $_REQUEST[dia];
	$mes = $_REQUEST[mes];
	$anio = $_REQUEST[anio];
	$ciudad = $_REQUEST[ciudad];
	$pais = $_REQUEST[pais];
	$colegio = $_REQUEST[colegio];
	$actividades = $_REQUEST[actividades];
	$estudios = $_REQUEST[estudios];
	$solicitud = $_REQUEST[solicitud];
	$carrera = $_REQUEST[carrera];
	$universidad = $_REQUEST[universidad];
	$nombrefliar = $_REQUEST[nombrefliar];
	$direccionfliar = $_REQUEST[direccionfliar];
	$telfliar = $_REQUEST[telfliar];
	$residencia = $_REQUEST[residencia];
	$mensaje = $_REQUEST[mensaje];
	$email = $_REQUEST[email];
	$headers = 'From: info@residenciaciudadela.org.ar';
	$asunto = "Solicitud de ingreso";
	$cuerpo = "Nombre: $nombre\nApellido: $apellido\nDireccion: $direccion\nTelefono: $telefono\nE-mail: $correo\nFecha de nacimiento: $dia/$mes/$anio\nCiudad: $ciudad\nPais: $pais\nColegio secundario y titulo obtenido: $colegio\nOtras actividades en Buenos Aires: $actividades\nOtros estudios: $estudios\nSolicitud para el: $solicitud\nCarrera elegida: $carrera\nUniversidad: $universidad\nDATOS DE FAMILIAR O PERSONA CONOCIDA EN BUENOS AIRES\nNombre: $nombrefliar\nDireccion: $direccionfliar\nTelefono: $telfliar\nComo conocio la residencia: $residencia\nQue espera de la residencia: $mensaje";
	mail($email,$asunto,$cuerpo,$headers);
	$subject = "Solicitud de ingreso - La Ciudadela";
	$body = "Muchas gracias por completar la solicitud de ingreso online. La hemos recibido y a la brevedad nos pondremos en contacto.";
	mail($correo,$subject,$body,$headers);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>La Ciudadela - Residencia Universitaria</title>
<style type="text/css">
<!--

body,td,th {
	color: #000000;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
body {
	background-color: #FFFFFF;
	margin-left: 0px;
	margin-top: 0px;
	background-image: url(img/gif/fondo.gif);
}
a:link {
	color: #0000CC;
}
a:visited {
	color: #990099;
}
a:hover {
	color: #990000;
}
a:active {
	color: #990000;
}td img {display: block;}
-->
</style>
<meta name="La Ciudadela" content="residencia, universitaria, la, ciudadela, ciuadela, estudiantil, estudio, buenos aires, capital federal, universidad, universitarias, universitarios, recoleta, centro, céntrico, ubicación, ubicacion, educación, educacion, formación, católica, catolica, opus dei, opus, obra, religiosa, meditaciones, actividades religiosas, actividades deportivas, actividades culturales, cultural, deporte, excursiones, residentes, ex residentes, casa, familiar, familia, antigua, tradicional, recidencia, residensia, recidensia, Ciudadela, Buenos Aires, Bs As, Capital, austral, salvador, di tella, uba, UBA, ambiente, bueno, calido, cálido, estudio, lugares de estudio, recreación, habitaciones, cuartos, piezas, servicios, servicio, limpieza, actividades solidarias, solidaridad, catequesis, formación religiosa, misa, misas, meditaciones, jornada de estudio, retiros espirituales, retiro, retiros, meditación, amigas, foto, fotos, contacto, precios, inscripciones, 2009, 2010, 2011, 2012, 2013, 2014, 2015, 2016, 2017, reglamento, horarios, quienes somos, rodriguez peña, 1489, 48110450, bienvenidos, bienvenidas, hogar, familia, divertida, cristiano, cristiana, católico, estudiantes, asociación para el fomento de la cultura, iglesia, Iglesia, excelente, objetivos, confianza, respeto, silencio, crecimiento, integral, persona, espacios comunes, dormitorios, respeto, pensión completa, pención, completa, desayuno, almuerzo, té, cena, cuatro comidas, menú equilibrado, personal capacitado, ropa blanca, sala de estudio, sala trabajos en equipos, internet, servicio, Internet, wi-fi, WI FI, colectivos, paradas, céntrica, buena ubicación, facultad, facu, Facultad, ingeniería, ingenieria, abogacía, abogacia, derecho, comunicación, comunicacion, upp, ub, medicina, odontologia, biotecnologia, diseño, letras, bellas artes, teatro, tertulia, tertulias, fácil acceso, aeroparque, retiro, terminal, micro, cerca, 101, 152, 130, 62, 61, 108, santa fe, las heras, centro comercial, entrevista, futura, futuro, residente, contrato, padres, hijos, hijas, normativa, año, años, mes, meses, marzo, cursos, bioética, bioetica, historia, torneo hockey, hockey, domingos, teología, teologia, apoyo escolar, feria de ropa, viaje solidario, chaco, catequesis, experiencia, amigas, amiga, jesús, jesus, relaciones internacionales, recuerdos, san josemaria, josemaria, escriva, balaguer, nombre, apellido" />
<meta name="Keywords" content="residencia
universitaria
la
ciudadela
ciuadela
estudiantil
estudio
buenos airescapital federal
universidad
universitarias universitarios
recoleta
centro
céntrico
ubicación
ubicacion
educación
educacion
BUENOS AIRESformación
católica
catolica
bueno aires
opus dei
opus
obra
religiosa
supernumeraria
numeraria
agregada
meditaciones
actividades religiosas
espiritual
rezar
actividades deportivas
actividades culturales
cultural
deporte
excursionesresidentes
ex residentes
casa
familiar familia
antigua
tradicional
recidencia
RESIDENCIA residensia
recidensia
Ciudadela
Buenos AiresBs As
Capital
austral
salvador
di tella
ubaUBA
ambiente
bueno
calido
cálido
estudio
pobres
descanso 
lugares de estudio
recreación
habitaciones cuartos
piezas
servicios
servicio
limpieza actividades solidarias
solidaridad
catequesis formación religiosa
misa 
misas
meditaciones jornada de estudio
retiros espirituales
retiro
teléfono retiros
meditación
amigas
foto
fotos contacto
precios
inscripciones
2009
2010 2011
2012
2013
2014
2015
2016
2017 reglamento
horarios
quienes somos
rodriguez peña
argentina
ARGENTINA
intercambio
exchange
Argentina
arjentina
agentina
colombia
ecuador
universitaria
estudiantil
UNIVERSITARIA
ESTUDIANTIL
residencias
RESIDENCIA
RESIDENCIAS
recidencias
recidensias
BUENOS AIRES
buenos
mujeres
francia
france
argentine
university
college
estudiantil
mexico
bs
as
mejico
opus
dei
buenos
en
republica
bs as
BS AS
www.residenciaciudadela.org.ar
residenciaciudadela.org.ar
chile
italia
italy
ciudadelas
cristiana
estudantes
www.cidadela.org.ar
cidadela
pension
pencion
info@residencia ciudadela.org.ar
españa
spain
espana
estados unidos
united states
laciudadela
buenosaires
venezuela
1489
48110450
bienvenidos
bienvenidas hogar
familia
alvaro del portillo
prelado
atención sacerdotal
sacerdote
confesiones
opusdei
OPUSDEI
favoritos
cumpleaños
estudiar
universidades.org
interior
sacramentos
500
divertida
cristiano
cristiana católico
estudiantes
asociación para el fomento de la cultura
iglesia
Iglesia
viajes
excelente
objetivos
confianza
respeto
silencio
precio
presio
residencia
universitaria
ciuadela
ciudadela
jóvenes
jovenes
jovencitas
valores
costumbres
tradiciones
crecimiento
integral
espacios comunes
dormitorios
respeto
pensión completa
pención completa
desayuno
almuerzo
té
cena
cuatro comida
menú equilibrado
personal capacitado, ropa blanca
sala de estudio
sala trabajos en equipos
equipos
computadoras
santidad
cristianos corrientes
trabajo
estudio
oración
orasion
oracion
internet
servicio
Internet
wi-fi
WIFI
colectivos
paradas
céntrica
buena ubicación
facultad
facu
Facultad
economia
ingeniería
ingenieria
abogacía
abogacia
derecho comunicación
comunicacion
upp
ub
medicina odontologia
biotecnologia
diseño
letras
bellas artes
teatro
tertulia
tertulias
fácil acceso aeroparque
retiro
terminal
micro
cerca
101 152
130
62
61
108
santa fe
las heras
centro comercial
entrevista
futura
futuro
residente
recidente contrato
padres
hijos
hijas
normativa
año años
colegio
secundario
mes
meses
marzo
cursos
bioética bioetica
historia
torneo hockey
hockey
deportes
cultura domingos
teología
teologia
apoyo escolar
feria de ropa
viaje solidario
chaco
catequesis experiencia
amigas
amiga
jesús
jesus
maría
fiesta
boliche relaciones internacionales
recuerdos
san josemaria
josemaria
escriva
balaguer
nombre
apellido" />
<meta name="Description" content="Este es el sitio web de la Residencia universitaria La Ciudadela. Esta residencia está ubicada en la ciudad de Buenos Aires en argentina, en la calle Rodriguez Peña al 1489. El telefono de la residencia es 011-48110450. Es una residencia estudiantil para universitarias, es decir, para mujeres. Está encargada de esta residencia la Asociación para el fomento de la cultura que con el fin de brindar una orientación sustentada en valores cristianos encargó la dirección espirtitual a la prelatura del Opus Dei, una institución de la iglesia católica. A pesar de la orientación cristiana la residencia está abierta a jóvenes con cualquier tipo de creencias y respeta las difrencias de raza, religión y credo.
Esta es una residencia universitaria que tiene que objetivo crear un ambiente de familia, donde se respeten los valores y las tradiciones, para todas aquellas estudiantes del interior o de otros países que quieran venir a estudiar a Buenos Aires y, al mismo tiempo, puedan sentirse como &quot;en su casa&quot;. Es por esa razón que consta con sectores para estudio silencioso así como salas para trabajo en equipo.
La residencia tiene cuartos de dos, tres y cuatro personas. Ofrece el servicio de pensión completa que incluye desayuno, almuerzo, té y cena, es decir, las cuatro comidas. Otros servicios son el de provisión y lavado de ropa blanca (sábanas y toallas), la limpieza de las habitaciones e intalaciones de la casa, y servicio de internet.
Para vivir en la residencia es necesario tener una entrevista con la encargada de selección y firmar un reglamento con las normas que rigen la casa.
Las residentes de La ciudadela pueden particiapar libremente de las actividades solidarias, deportivas, culturales y espirituales que se ofrecen.
Para recibir información por favor deje sus datos y será contactado por nuestro personal de selección." />
<script type="text/javascript">
<!--
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
//-->
</script>
<script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
</head>

<body onload="MM_preloadImages('img/gif/barra/barra_r1_c1_f2.gif','img/gif/barra/barra_r1_c3_f2.gif','img/gif/barra/barra_r1_c5_f2.gif','img/gif/barra/barra_r1_c7_f2.gif','img/gif/barra/barra_r1_c9_f2.gif','img/gif/barra/barra_r1_c11_f2.gif')">
<p>&nbsp;</p>
<table width="850" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td colspan="2" align="center" valign="top"><script type="text/javascript">
AC_FL_RunContent( 'codebase','http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0','width','850','height','90','src','img/swf/header','quality','high','pluginspage','http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash','loop','false','movie','img/swf/header' ); //end AC code
</script><noscript><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0" width="850" height="90">
      <param name="movie" value="img/swf/header.swf" />
      <param name="quality" value="high" /><param name="LOOP" value="false" />
      <embed src="img/swf/header.swf" width="850" height="90" loop="false" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash"></embed>
    </object></noscript></td>
  </tr>
  <tr>
    <td colspan="2" align="center" valign="top"><table border="0" cellpadding="0" cellspacing="0" width="850">
      <!-- fwtable fwsrc="Barra.png" fwpage="Página 1" fwbase="barra.gif" fwstyle="Dreamweaver" fwdocid = "482980080" fwnested="0" -->
      <tr>
        <td><img src="img/gif/barra/spacer.gif" width="105" height="1" border="0" alt="" /></td>
        <td><img src="img/gif/barra/spacer.gif" width="2" height="1" border="0" alt="" /></td>
        <td><img src="img/gif/barra/spacer.gif" width="107" height="1" border="0" alt="" /></td>
        <td><img src="img/gif/barra/spacer.gif" width="2" height="1" border="0" alt="" /></td>
        <td><img src="img/gif/barra/spacer.gif" width="106" height="1" border="0" alt="" /></td>
        <td><img src="img/gif/barra/spacer.gif" width="3" height="1" border="0" alt="" /></td>
        <td><img src="img/gif/barra/spacer.gif" width="103" height="1" border="0" alt="" /></td>
        <td><img src="img/gif/barra/spacer.gif" width="5" height="1" border="0" alt="" /></td>
        <td><img src="img/gif/barra/spacer.gif" width="103" height="1" border="0" alt="" /></td>
        <td><img src="img/gif/barra/spacer.gif" width="4" height="1" border="0" alt="" /></td>
        <td><img src="img/gif/barra/spacer.gif" width="107" height="1" border="0" alt="" /></td>
        <td><img src="img/gif/barra/spacer.gif" width="203" height="1" border="0" alt="" /></td>
        <td><img src="img/gif/barra/spacer.gif" width="1" height="1" border="0" alt="" /></td>
      </tr>
      <tr>
        <td><a href="index.html" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('barra_r1_c1','','img/gif/barra/barra_r1_c1_f2.gif',1);"><img name="barra_r1_c1" src="img/gif/barra/barra_r1_c1.gif" width="105" height="42" border="0" id="barra_r1_c1" alt="Quienes Somos" /></a></td>
        <td rowspan="2"><img name="barra_r1_c2" src="img/gif/barra/barra_r1_c2.gif" width="2" height="64" border="0" id="barra_r1_c2" alt="" /></td>
        <td><a href="opusdei.html" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('barra_r1_c3','','img/gif/barra/barra_r1_c3_f2.gif',1);"><img name="barra_r1_c3" src="img/gif/barra/barra_r1_c3.gif" width="107" height="42" border="0" id="barra_r1_c3" alt="Opus Dei" /></a></td>
        <td rowspan="2"><img name="barra_r1_c4" src="img/gif/barra/barra_r1_c4.gif" width="2" height="64" border="0" id="barra_r1_c4" alt="" /></td>
        <td><a href="actividades.html" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('barra_r1_c5','','img/gif/barra/barra_r1_c5_f2.gif',1);"><img name="barra_r1_c5" src="img/gif/barra/barra_r1_c5.gif" width="106" height="42" border="0" id="barra_r1_c5" alt="Actividades" /></a></td>
        <td rowspan="2"><img name="barra_r1_c6" src="img/gif/barra/barra_r1_c6.gif" width="3" height="64" border="0" id="barra_r1_c6" alt="" /></td>
        <td><a href="servicios.html" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('barra_r1_c7','','img/gif/barra/barra_r1_c7_f2.gif',1);"><img name="barra_r1_c7" src="img/gif/barra/barra_r1_c7.gif" width="103" height="42" border="0" id="barra_r1_c7" alt="Servicios" /></a></td>
        <td rowspan="2"><img name="barra_r1_c8" src="img/gif/barra/barra_r1_c8.gif" width="5" height="64" border="0" id="barra_r1_c8" alt="" /></td>
        <td><a href="ubicacion.html" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('barra_r1_c9','','img/gif/barra/barra_r1_c9_f2.gif',1);"><img name="barra_r1_c9" src="img/gif/barra/barra_r1_c9.gif" width="103" height="42" border="0" id="barra_r1_c9" alt="Ubicación" /></a></td>
        <td rowspan="2"><img name="barra_r1_c10" src="img/gif/barra/barra_r1_c10.gif" width="4" height="64" border="0" id="barra_r1_c10" alt="" /></td>
        <td><a href="contacto.html" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('barra_r1_c11','','img/gif/barra/barra_r1_c11_f2.gif',1);"><img name="barra_r1_c11" src="img/gif/barra/barra_r1_c11.gif" width="107" height="42" border="0" id="barra_r1_c11" alt="Contacto" /></a></td>
        <td rowspan="2"><img name="barra_r1_c12" src="img/gif/barra/barra_r1_c12.gif" width="203" height="64" border="0" id="barra_r1_c12" alt="" /></td>
        <td><img src="img/gif/barra/spacer.gif" width="1" height="42" border="0" alt="" /></td>
      </tr>
      <tr>
        <td><img name="barra_r2_c1" src="img/gif/barra/barra_r2_c1.gif" width="105" height="22" border="0" id="barra_r2_c1" alt="" /></td>
        <td><img name="barra_r2_c3" src="img/gif/barra/barra_r2_c3.gif" width="107" height="22" border="0" id="barra_r2_c3" alt="" /></td>
        <td><img name="barra_r2_c5" src="img/gif/barra/barra_r2_c5.gif" width="106" height="22" border="0" id="barra_r2_c5" alt="" /></td>
        <td><img name="barra_r2_c7" src="img/gif/barra/barra_r2_c7.gif" width="103" height="22" border="0" id="barra_r2_c7" alt="" /></td>
        <td><img name="barra_r2_c9" src="img/gif/barra/barra_r2_c9.gif" width="103" height="22" border="0" id="barra_r2_c9" alt="" /></td>
        <td><img name="barra_r2_c11" src="img/gif/barra/barra_r2_c11.gif" width="107" height="22" border="0" id="barra_r2_c11" alt="" /></td>
        <td><img src="img/gif/barra/spacer.gif" width="1" height="22" border="0" alt="" /></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td width="650" align="center" valign="top" bgcolor="#FFFFFF"><table width="100%" border="0" align="center" cellpadding="3" cellspacing="4">
      <tr>
        <td align="left" valign="top"><img src="img/gif/ingreso.gif" width="500" height="40" border="0" /></td>
        </tr>
      <tr>
        <td height="36" align="left" valign="top"><p><br />
          Hemos recibido tu solicitud de ingreso. A la brevedad nos pondremos en contacto<a href="http://www.escrivaobras.org" target="_blank"><strong></strong></a>.</p>          </td>
        </tr>
      
    </table></td>
    <td width="201" align="center" valign="middle" bgcolor="#FFCC66"><p>
      <script type="text/javascript">
AC_FL_RunContent( 'codebase','http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0','width','170','height','250','src','img/swf/bannerlatcont','loop','false','quality','high','pluginspage','http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash','movie','img/swf/bannerlatcont' ); //end AC code
</script><noscript><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0" width="170" height="250">
        <param name="movie" value="img/swf/bannerlatcont.swf" />
        <param name="quality" value="high" /><param name="LOOP" value="false" />
        <embed src="img/swf/bannerlatcont.swf" width="170" height="250" loop="false" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash"></embed>
      </object></noscript>
    </p>
    </td>
  </tr>
  <tr>
    <td colspan="2" align="center" valign="top"><img src="img/gif/footer.gif" width="850" height="72" border="0" usemap="#Map" /></td>
  </tr>
</table>

<map name="Map" id="Map"><area shape="rect" coords="654,37,847,54" href="mailto:info@residenciaciudadela.org.ar" />
</map></body>
</html>
