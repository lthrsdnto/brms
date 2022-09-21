
<?php 
require "fpdf/fpdf.php";
$db = new PDO('mysql:host=localhost;dbname=adminaccount','root','');


class myPDF extends FPDF{
  function header(){
   
    $yr = date("Y"); 
    $this->SetFont('Arial','B',40);
        $this->Cell(276,5,'QUEZON CITY UNIVERSITY',0,0,'C');
    $this->Ln();
    $this->SetFont('Times','',18);
    $this->Cell(276,10,'SAN BARTOLOME | SAN FRANCISCO | BATASAN ',0,0,'C');
    $this->Ln(20);
     $this->SetFont('Times','',18);
    $this->Cell(276,20,'ALL METERIALS REPORT '. $yr,0,0,'C');
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
   
    $stmt = $db->query("SELECT *, id AS studid FROM materials");
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