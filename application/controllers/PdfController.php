<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PdfController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('mpdf_lib');
    }

    public function generatePDF()
    {
        // Your HTML content for the PDF
        $html = '<h1>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero id fuga quis in, rem ab, enim repellat minus accusamus dolor laborum perspiciatis, expedita culpa voluptate possimus aut quos assumenda! Eaque.Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero id fuga quis in, rem ab, enim repellat minus accusamus dolor laborum perspiciatis, expedita culpa voluptate possimus aut quos assumenda! Eaque.Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero id fuga quis in, rem ab, enim repellat minus accusamus dolor laborum perspiciatis, expedita culpa voluptate possimus aut quos assumenda! Eaque.Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero id fuga quis in, rem ab, enim repellat minus accusamus dolor laborum perspiciatis, expedita culpa voluptate possimus aut quos assumenda! Eaque.Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero id fuga quis in, rem ab, enim repellat minus accusamus dolor laborum perspiciatis, expedita culpa voluptate possimus aut quos assumenda! Eaque.Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero id fuga quis in, rem ab, enim repellat minus accusamus dolor laborum perspiciatis, expedita culpa voluptate possimus aut quos assumenda! Eaque.Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero id fuga quis in, rem ab, enim repellat minus accusamus dolor laborum perspiciatis, expedita culpa voluptate possimus aut quos assumenda! Eaque.Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero id fuga quis in, rem ab, enim repellat minus accusamus dolor laborum perspiciatis, expedita culpa voluptate possimus aut quos assumenda! Eaque.Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero id fuga quis in, rem ab, enim repellat minus accusamus dolor laborum perspiciatis, expedita culpa voluptate possimus aut quos assumenda! Eaque.Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero id fuga quis in, rem ab, enim repellat minus accusamus dolor laborum perspiciatis, expedita culpa voluptate possimus aut quos assumenda! Eaque.Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero id fuga quis in, rem ab, enim repellat minus accusamus dolor laborum perspiciatis, expedita culpa voluptate possimus aut quos assumenda! Eaque.Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero id fuga quis in, rem ab, enim repellat minus accusamus dolor laborum perspiciatis, expedita culpa voluptate possimus aut quos assumenda! Eaque.Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero id fuga quis in, rem ab, enim repellat minus accusamus dolor laborum perspiciatis, expedita culpa voluptate possimus aut quos assumenda! Eaque.Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero id fuga quis in, rem ab, enim repellat minus accusamus dolor laborum perspiciatis, expedita culpa voluptate possimus aut quos assumenda! Eaque.Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero id fuga quis in, rem ab, enim repellat minus accusamus dolor laborum perspiciatis, expedita culpa voluptate possimus aut quos assumenda! Eaque.Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero id fuga quis in, rem ab, enim repellat minus accusamus dolor laborum perspiciatis, expedita culpa voluptate possimus aut quos assumenda! Eaque.Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero id fuga quis in, rem ab, enim repellat minus accusamus dolor laborum perspiciatis, expedita culpa voluptate possimus aut quos assumenda! Eaque.
                    Good bye...</h1>';
        // Generate PDF
        $this->mpdf_lib->generatePDF($html, 'loremIpsum_pdf', true);
    }
}