 <?php 
include 'libreria.php';


     $id_user=$_GET['id'];
    $usuario=new usuario();                                                    
    $user=$usuario->leer_usuario_id($id_user) ; 

   
    
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
        
        $this->Ln(15);        
	$this->SetFont('Arial','B',10);
        $this->Cell(180,14,$dia[date('w')].' '.date('j').' de '.$mes[date('n')-1].' de '. date('Y'),0,0,'R');
        $this->Ln(20);
	// Movernos a la derecha
        
}


// Pie de p�gina
function Footer()
{
	// Posici�n: a 1,5 cm del final
	$this->SetY(-15);
	// Arial italic 8
	$this->SetFont('Arial','I',8);
	// N�mero de p�gina
        $this->Image('assets/images/logo-bolivariano.jpg',5,270,200);
	$this->Cell(200,10,'Fundacion Infocentro - Pagina '.$this->PageNo().'/{nb}',0,0,'C');
}

// Una tabla más completa
function ImprovedTable($header)
{
    // Anchuras de las columnas
    $w = array(50, 50, 80);
    // Cabeceras
    for($i=0;$i<count($header);$i++)
        $this->Cell($w[$i],7,$header[$i],0,0,'C');
    $this->Ln();
}




}

// Creaci�n del objeto de la clase heredada

 
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->Ln(0);        
$pdf->SetFont('Arial','B',20);
$pdf->Cell(165,10,  strtoupper($user[0]['nombre_user']).'    C.I.:'.$user[0]['cedula_user'],0,0,'C');
$pdf->Ln(15);
$pdf->SetFont('Arial','B',12);
$header = array('Dia', 'Fecha', 'Motivo De Visita');
$pdf->ImprovedTable($header);
// Carga de datos
//$data = $pdf->LoadData('paises.txt');
$fill = false;

                      
  $visita=new visita();
 $reg=$visita->leer_regvis_user($id_user);                        
           $pdf->SetFont('Arial','B',10);                 
                    for($i=0;$i<  sizeof($reg);$i++){ 
     $ver=new visita();
     $r=$ver->leer_visita_id($reg[$i]['mot_visita']);
     
     $pdf->Cell(50,8,$reg[$i]['dia_visita'],0,0,'C');
     $pdf->Cell(50,8,$reg[$i]['fecha_visita'],0,0,'C');     
     $pdf->Cell(80,8,$r[0]['motivo'],0,0,'C');
     
   
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