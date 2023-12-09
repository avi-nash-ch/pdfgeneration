<?php
defined('BASEPATH') or exit('No direct script access allowed');

//require_once APPPATH . 'third_party/vendor/autoload.php';
require_once FCPATH . 'vendor/autoload.php';

use Mpdf\Mpdf;

class Mpdf_lib
{
    public function __construct()
    {
        $this->mpdf = new Mpdf();
    }

    public function generatePDF($html, $filename = '', $stream = true)
    {
        $this->mpdf->WriteHTML($html);
        
        if ($stream) {
            $this->mpdf->Output($filename . '.pdf', 'D'); // 'D' for download
        } else {
            $this->mpdf->Output($filename . '.pdf', 'I'); // 'I' for inline
        }
    }
}
