
<?php 
require "fpdf/fpdf.php";
$db = new PDO('mysql:host=localhost;dbname=adminaccount','root','');


class myPDF extends FPDF{
  function header(){
    $ff = $_POST['month'];
    if($ff == 1){
      $ff = "JANUARY";
    }
    else if($ff == 2){
      $ff = "FEBRUARY";
    }
    else if($ff == 3){
      $ff = "MARCH";
    }
    else if($ff == 4){
      $ff = "APRIL";
    }
    else if($ff == 5){
      $ff = "MAY";
    }
    else if($ff == 6){
      $ff = "JUNE";
    }
    else if($ff == 7){
      $ff = "JULY";
    }
    else if($ff == 8){
      $ff = "AUGUST";
    }
    else if($ff == 9){
      $ff = "SEPTEMBER";
    }
    else if($ff == 10){
      $ff = "OCTOBER";
    }
else if($ff == 11){
      $ff = "NOVEMBER";
    }
    else if($ff == 12){
      $ff = "DECEMBER";
    }
    $yr = date("Y"); 
    $this->SetFont('Arial','B',40);
        $this->Cell(276,5,'QUEZON CITY UNIVERSITY',0,0,'C');
    $this->Ln();
    $this->SetFont('Times','',18);
    $this->Cell(276,10,'SAN BARTOLOME | SAN FRANCISCO | BATASAN ',0,0,'C');
    $this->Ln(20);
     $this->SetFont('Times','',18);
    $this->Cell(276,20,'MONTH OF ' . $ff . ' YEAR '. $yr. ' REPORT',0,0,'C');
    $this->Ln(10);
      $this->SetFont('Times','',10);
    $this->Cell(276,20,'Reported Date :   _________________',0,0,'C');
    $this->Ln(20);

  }
  function footer(){
$this->Cell(150,100,'______________________ ',0,0,'C');
    $this->Ln(5);
 $this->Cell(150,100,'LIBRARY DIRECTOR ',0,0,'C');
    $this->Ln(0);



$this->Cell(400,100,'______________________ ',0,0,'C');
    $this->Ln(5);
 $this->Cell(400,100,'QCU PRESIDENT',0,0,'C');
    $this->Ln(20);

    $this->SetY(-15);
    $this->SetFont('Arial','',8);
    $this->Cell(0,10,'PAGE'.$this->PageNo().'/{nb}',0,0,'C');
  }
  function headerTable(){
    $this->SetFont('Times','B',12);
    $this->Cell(100,10,'Title',1,0,'C');
    $this->Cell(50,10,'Author',1,0,'C');
    $this->Cell(50,10,'Material Type',1,0,'C');
    $this->Cell(50,10,'Added Date',1,0,'C');
    $this->Cell(25,10,'Publicity',1,0,'C');
    $this->Ln();

  }
  function viewTable($db){
    $this->SetFont('Times','',12);
    $ff = $_POST['month'];
    
    $stmt = $db->query("SELECT *, id AS studid FROM materials where Month(`stored`) = '$ff'");
    while($data = $stmt->fetch(PDO::FETCH_OBJ)){
      $this->Cell(100,10,$data->title,1,0);
      $this->Cell(50,10,$data->author,1,0,'C');
      $this->Cell(50,10,$data->type,1,0,'C');
      $this->Cell(50,10,$data->stored,1,0,'C');
      $this->Cell(25,10,$data->publicity,1,0,'C');
      $this->Ln();
    }

  }

}


$pdf = new myPDF();
$pdf->AliasNbPages();
$pdf->AddPage('L','A4',0);
$pdf->headerTable();
$pdf->viewTable($db);

$pdf->Output();