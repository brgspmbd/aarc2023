<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Qrpdf extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->library('ciqrcode');
        $this->load->library('Pdf');
      //  $this->load->model('M_qrpdf', 'qr');
    }

    public function printqr(){
        // require('fpdf17/fpdf.php');
        // header("Content-Type: image/png");
        $params['data'] = 'This is a text to encode become QR Code';
        $id = $this->input->get('id');
        error_reporting(0); // AGAR ERROR MASALAH VERSI PHP TIDAK MUNCUL
        $pdf = new FPDF('L', 'mm',[210,100]); // undangan fisik
        

        $this->load->library('ciqrcode');

        $params['data'] = 'This is a text to encode become QR Code';
        $params['level'] = 'H';
        $params['size'] = 10;
        $pdfpath = realpath(APPPATH . '../qrpeserta/');
        $params['savename'] = FCPATH.'/upload/qrpeserta/'.'5'.'.png';

        $this->ciqrcode->generate($params);

        $pdf->AddPage();
        $pdf->Image('upload/qrpeserta/5.png', 15, 14, 45, 0);
			$pdf->SetFont('arial', 'B', 12);
			$pdf->setXY(10, 25);
        $pdf->Output();
    }
    public function printqr2(){
        $this->load->library('ciqrcode');

header("Content-Type: image/png");
$params['data'] = 'This is a text to encode become QR Code';
$this->ciqrcode->generate($params);
    }
}