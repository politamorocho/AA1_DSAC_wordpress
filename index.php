<?php
/**
 * Front to the WordPress application. This file doesn't do anything, but loads
 * wp-blog-header.php which does and tells WordPress to load the theme.
 *
 * @package WordPress
 */

/**
 * Tells WordPress to load the WordPress theme and output it.
 *
 * @var bool
 */

// print("<br><h3>Se imprime los Headers: </h3><br>");
// //var_dump($_SERVER);

//  print("<br><br>");
//  echo "<b>El servidor es:</b> {$_SERVER['SERVER_NAME']}<br>";
// echo "<b>El valor de USER AGENT es:</b> {$_SERVER['HTTP_USER_AGENT']}<br>";
// print("<br>");

// print("<br><h3>Se usa la función getallheaders: </h3><br>");

// ?>
// <?php
define('WP_USE_THEMES', true);
require __DIR__ . '/wp-blog-header.php';

// $header = apache_request_headers();
// echo "<table>";
// foreach ($header as $headers => $val) {
//     echo "<tr width='100%'>";
//     echo "<td width='40%'>" . $headers . "</td>";
//     echo "<td width='60%'>" . $val . "</td>";
//     echo "</tr>";
// }
// echo "</table>";

// echo "<table>";


// $nav = $_SERVER['HTTP_USER_AGENT'];
// $status_code = http_response_code();
// $so = $_SERVER['SystemRoot'];
// $servidor_web = $_SERVER['SERVER_SOFTWARE'];
// $puerto = $_SERVER['SERVER_PORT'];


// echo "<tr width='80%' colspan='8'>";
// if (preg_match("/Edg/i", $nav)) {
//     echo "<td width='40%'>" . 'NAVEGADOR' . "</td>";
//     echo "<td width='60%'> <b>MICROSOFT EDGE</b></td>";
// } elseif (preg_match("/KHTML like Gecko/i", $nav) || preg_match("/Safari/i", $nav)) {
//     echo "<td width='40%'>" . 'NAVEGADOR' . "</td>";
//     echo "<td width='60%'> <b>GOOGLE CHROME</b></td>";
// } else if (preg_match("/20100101/i", $nav)) {
//     echo "<td width='40%'>" . 'NAVEGADOR' . "</td>";
//     echo "<td width='60%'> <b>MOZILLA FIREFOX</b></td>";
// } elseif (preg_match("/OPR/i", $nav)) {
//     echo "<td width='40%'>" . 'NAVEGADOR' . "</td>";
//     echo "<td width='60%'> <b>OPERA</b></td>";
// } elseif (preg_match("/Mobile/i", $nav)) {
//     echo "<td width='40%'>" . 'NAVEGADOR' . "</td>";
//     echo "<td width='60%'> <b>SAFARI</b></td>";
// } else {
//     echo "Estás navegando desde <b>OTRO NAVEGADOR</b>";
// }
// echo "</tr>";

// echo "<tr width='80%' colspan='8'>";
// echo "<td width='40%'>" . 'STATUS CODE' . "</td>";
// echo "<td width='60%'> <b>" . $status_code."</b></td>";
// echo "</tr>";

// echo "<tr width='80%' colspan='8'>";
// echo "<td width='40%'>" . 'SISTEMA OPERATIVO' . "</td>";
// echo "<td width='60%'> <b>" . $so."</b></td>";
// echo "</tr>";

// if(isset($_SERVER['HTTP_REFERER'])){
//     $refer = $_SERVER['HTTP_REFERER'];
// echo "<tr width='80%' colspan='8'>";
// echo "<td width='40%'>" . 'HTTP REFER' . "</td>";
// echo "<td width='60%'> <b>" .$refer ."</b></td>";
// echo "</tr>";
// }
// echo "<tr width='80%' colspan='8'>";
// echo "<td width='40%'>" . 'SERVIDOR WEB' . "</td>";
// echo "<td width='60%'> <b>" . $servidor_web ."</b></td>";
// echo "</tr>";

// echo "<tr width='80%' colspan='8'>";
// echo "<td width='40%'>" . 'PUERTO' . "</td>";
// echo "<td width='60%'> <b>" . $puerto ."</b></td>";
// echo "</tr>";


// if (file_exists('xml/autora.xml')) {
//     $xml = simplexml_load_file('xml/autora.xml');
//     // print_r($xml);
        
//     print("<br><br>Probando con foreach<br>");

//     foreach ($xml->estudiante as $key => $estud) {
//         echo "Estudiante: ".$estud->apellido." con cedula :".$estud->cedula ."<br>";    
//     }

// } else {
//     exit('No se puede abrir XML');
// }

// foreach (getallheaders() as $name => $value) {
//     echo "<tr width='80%'>";
  
//     echo "<td width='40%'>" . $name . "</td>";
//     echo "<td width='60%'>" . $value . "</td>";
//     echo "</tr>";
// }
// echo "</table>";
//  ?>

<?php

/** Loads the WordPress Environment and Template */
require __DIR__ . '/wp-blog-header.php';
?>


