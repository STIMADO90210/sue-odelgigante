 <?php 
include 'libreria.php';

class PDF extends FPDF
{
// Cabecera de p�gina
function Header()
{
     $dia=array('domingo','lunes','martes','miercoles','jueves','viernes','sabado');
        $mes=  array('enero','febrero','marzo','abril','mayo','junio','julio','agosto','septiembre','octubre','noviembre','diciembre');
	// Logo
	$this->Image('assets/images/LOGO02CHAVEZ.jpg',10,8,90);
	// Arial bold 10
        $this->Ln(10);
	$this->SetFont('Arial','B',10);
        $this->Cell(260,10,$dia[date('w')].' '.date('j').' de '.$mes[date('n')-1].' de '. date('Y'),0,0,'R');
        $this->Ln(20);
	// Movernos a la derecha
        $this->SetFont('Arial','B',15);
	$this->Cell(60);
	// T�tulo
	$this->Cell(100,10,'Lista de Usuarios',0,0,'C');
	// Salto de l�nea
	$this->Ln(20);
}


// Pie de p�gina
function Footer()
{
	// Posici�n: a 1,5 cm del final
	$this->SetY(-15);
	// Arial italic 8
	$this->SetFont('Arial','I',8);
	// N�mero de p�gina
        $this->Image('assets/images/logo-bolivariano.jpg',5,190,200);
	$this->Cell(250,10,'Fundacion Infocentro - Pagina '.$this->PageNo().'/{nb}',0,0,'C');
}

// Una tabla más completa
function ImprovedTable($header)
{
    // Anchuras de las columnas
    $w = array(30, 20, 25, 16, 26, 25, 18, 25, 25, 25);
    // Cabeceras
    for($i=0;$i<count($header);$i++)
        $this->Cell($w[$i],7,$header[$i],0,0,'C');
    $this->Ln();
    // Datos
  
    // Línea de cierre
   // $this->Cell(array_sum($w),0,'','T');
}

}

// Creaci�n del objeto de la clase heredada
$pdf = new PDF('L','mm','Letter');
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','B',12);

$header = array('Nombre', 'Ced', 'Telf', 'Edad','Sexo', 'Fec_Ins', 'Visitante', 'Discap', 'Com. Ind.', '# Visitas');
$pdf->ImprovedTable($header);
// Carga de datos
//$data = $pdf->LoadData('paises.txt');
$fill = false;
$usuario=new usuario();
$user=$usuario->leer_usuario(); 
$pdf->SetFont('Times','',10);
for($i=0;$i<sizeof($user);$i++){
     $pdf->Cell(30,8,$user[$i]['nombre_user'],0,0,'C');
     $pdf->Cell(20,8,$user[$i]['cedula_user'],0,0,'C');
     $pdf->Cell(25,8,$user[$i]['telefono_user'],0,0,'C');
     $edad= date('Y/m/d') - $user[$i]['fecha_nac'];
                                
     $pdf->Cell(16,8,$edad ,0,0,'C'); 
                            if($user[$i]['sexo_user']=='m'){$sex='Masculino';}
                            if($user[$i]['sexo_user']=='f'){$sex='Femenino';}
     $pdf->Cell(26,8,$sex,0,0,'C');
     $pdf->Cell(25,8,cambiaf_a_normal($user[$i]['fecha_inscrip']),0,0,'C');
                        $nro=$user[$i]['cont_vis'];
                                switch ($nro)
                                 { 
                                     case 1:
                                         $tv='Nuevo';
                                         break;
                                     case $nro>1:  
                                         $tv='Regular';
                                         break;
                                 }
     $pdf->Cell(18,8,$tv,0,0,'C');
                                      $discap=new discap();                                                    
                                     $dis=$discap->leer_discap_user($user[$i]['id_user']);  
                                     $pos=$dis[0]['disc_user'];
                                     $discap=new discap();
                                     $dis=$discap->leer_discap_id($pos); 
                                   
     $pdf->Cell(25,8,$dis[0]['discapacida'],0,0,'C');
                                    $indigena=new indigena();                                                    
                                   $ind=$indigena->leer_indigena_user($user[$i]['id_user']);
                                   $posi=$ind[0]['indi_user'];                                   
                                   $indigena=new indigena();                                                    
                                   $ind=$indigena->leer_indigena_id($posi);
     $pdf->Cell(25,8,$ind[0]['comunidad'],0,0,'C');
     $pdf->Cell(25,8,$user[$i]['cont_vis'],0,0,'C');
    $pdf->Ln();
     $fill = !$fill;  
        
}



$pdf->Output();
?>

        
   
<script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smooth-scroll/SmoothScroll.js"></script>
  <script src="assets/viewportChecker/jquery.viewportchecker.js"></script>
  <script src="assets/dropdown/js/script.min.js"></script>
  <script src="assets/touchSwipe/jquery.touchSwipe.min.js"></script>
  <script src="assets/bootstrap-carousel-swipe/bootstrap-carousel-swipe.js"></script>
  <script src="assets/theme/js/script.js"></script>
  <script src="assets/formoid/formoid.min.js"></script>
  
  
  <input name="animation" type="hidden">
</body>
</html>