<?php

include 'libreria.php';

$fecha=$_GET['fec'];
$vis=new visita();
$v=$vis->contar_regvis_fecha($fecha);

//echo sizeof($v);
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
    $w = array(20, 70, 30,50);
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

$pdf->SetFont('Arial','B',20);
$pdf->Cell(165,10,'fecha -> '.$fecha,0,0,'C');
$pdf->Ln(15);
$pdf->SetFont('Arial','B',12);
$header = array('Id', 'Nombre', 'Cedula', 'Motivo De Visita');
$pdf->ImprovedTable($header);
$pdf->SetFont('Times','',10);;                 
                    for($i=0;$i<sizeof($v);$i++){ 
                            $user=new usuario();
                            $u=$user->leer_usuario_id($v[$i]['id_user']);
                            $id=$v[$i]['mot_visita'];
                            $reg=new visita();
                            $r=$reg->leer_visita_id($id);
     
     $pdf->Cell(20,8,$v[$i]['id_user'],0,0,'C');
     $pdf->Cell(70,8,$u[0]['nombre_user'],0,0,'C');
      $pdf->Cell(30,8,$u[0]['cedula_user'],0,0,'C');
      $pdf->Cell(50,8,$r[0]['motivo'],0,0,'C');
      
     
     
   
    $pdf->Ln();
     
        
}










$pdf->Output();
?>