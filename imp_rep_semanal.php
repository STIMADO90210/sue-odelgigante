<?php
include 'libreria.php';

if(isset($_POST['valor1'])and isset($_POST['valor2'])){        
 $conta=new contador();
 $cont=$conta->leer_contador_rango($_POST['valor1'], $_POST['valor2']);                                    
}else{
 $conta=new contador();
 $cont=$conta->leer_contador(); 
                                  
}  



// for($i=0;$i<sizeof($datos);$i++){
//    $datos[$i]['dia'].'  '.$datos[$i]['fecha'].'  '.$datos[$i]['cont_nuevo'];
// } 

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
    $w = array(30, 50, 30,30,30);
    // Cabeceras
    for($i=0;$i<count($header);$i++)
        $this->Cell($w[$i],7,$header[$i],0,0,'C');
    $this->Ln();
}

}
// fin de la clases

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->Ln(0);        
$pdf->SetFont('Arial','B',20);
$pdf->Cell(165,10,'',0,0,'C');
$pdf->Ln(15);
$pdf->SetFont('Arial','B',12);
$header = array('Dia', 'Fecha', 'Nuevos', 'Regulares', 'Totales');
$pdf->ImprovedTable($header);
$pdf->SetFont('Times','',10);
$sum_n=0;
$sum_r=0;
$suma=0;
 for($i=0;$i<sizeof($cont);$i++){          
     $pdf->Cell(30,8,$cont[$i]['dia'],0,0,'C');
     $pdf->Cell(50,8,cambiaf_a_normal($cont[$i]['fecha']),0,0,'C');     
     $pdf->Cell(30,8,$cont[$i]['cont_nuevos'],0,0,'C');    
     $pdf->Cell(30,8,$cont[$i]['cont_regulo'],0,0,'C');
     $tot=$cont[$i]['cont_nuevos']+$cont[$i]['cont_regulo'];
     $suma=$suma+$tot;
     $sum_n=$sum_n+$cont[$i]['cont_nuevos'];
     $sum_r=$sum_r+$cont[$i]['cont_regulo'];
     $pdf->Cell(30,8,$tot,0,0,'C');
     
   
    $pdf->Ln(10);
       
        
}
$pdf->Cell(290,8,'',0,0,'C');
$pdf->Ln(10);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(30,8,'Totales : ',0,0,'C');
$pdf->Cell(50,8,' ',0,0,'C');
$pdf->Cell(30,8,$sum_n,0,0,'C');
$pdf->Cell(30,8,$sum_r,0,0,'C');
$pdf->Cell(30,8,$suma,0,0,'C');


$pdf->Output();
?>