<?php defined('BASEPATH') OR die('No direct script access allowed');

require('./application/third_party/phpoffice/vendor/autoload.php');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\RichText\RichText;
use PhpOffice\PhpSpreadsheet\Style\Color;
use PhpOffice\PhpSpreadsheet\Style\Alignment;
use PhpOffice\PhpSpreadsheet\Style\Fill;

class Export extends CI_Controller {

     public function __construct()
     {
          parent::__construct();
         $this->load->model('inventory_model');
     }

    public function export()
     {
          $get = $this->inventory_model->get_inventory()->result();

      //STYLING ARRAY 
        // STYLE HEAD
          $tableHead = [
            'font' => [
              'color' => [
                'rgb' => 'FFFFFF'
              ],
              'bold' => true
            ],
            'fill' => [
              'fillType' => Fill::FILL_SOLID,
              'startColor' => [
                'rgb' => '538ED5'
              ],
            ],
          ];
        // EVEN ROW
          $evenRow = [
            'fill' => [
              'fillType' => Fill::FILL_SOLID,
              'startColor' => [
                'rgb' => 'FFFFFF'
              ],
            ],
          ];
         // ODD ROW
          $oddRow = [
            'fill' => [
              'fillType' => Fill::FILL_SOLID,
              'startColor' => [
                'rgb' => 'EEEEEE'
              ],
            ],
          ];

      // STYLING ARRAY END

          $spreadsheet = new Spreadsheet;

          $spreadsheet->getActiveSheet()
                      ->getColumnDimension('A')
                      ->setWidth(6);

          $spreadsheet->getActiveSheet()
                      ->getColumnDimension('B')
                      ->setWidth(8);

          $spreadsheet->getActiveSheet()
                      ->getColumnDimension('C')
                      ->setWidth(8);

          $spreadsheet->getActiveSheet()
                      ->getColumnDimension('D')
                      ->setWidth(9);

          $spreadsheet->getActiveSheet()
                      ->getColumnDimension('E')
                      ->setWidth(11);

          $spreadsheet->getActiveSheet()
                      ->getColumnDimension('F')
                      ->setWidth(10);

          $spreadsheet->getActiveSheet()
                      ->getColumnDimension('G')
                      ->setWidth(16);

          $spreadsheet->getActiveSheet()
                      ->getColumnDimension('H')
                      ->setWidth(9);

          $spreadsheet->getActiveSheet()
                      ->getColumnDimension('I')
                      ->setWidth(8);

          $spreadsheet->getActiveSheet()
                      ->getColumnDimension('J')
                      ->setWidth(8);

          $spreadsheet->getActiveSheet()
                      ->getColumnDimension('K')
                      ->setWidth(18);

          $spreadsheet->getActiveSheet()
                      ->getColumnDimension('L')
                      ->setWidth(13);

          $spreadsheet->getActiveSheet()
                      ->getColumnDimension('M')
                      ->setWidth(13);

          $spreadsheet->getActiveSheet()
                      ->getColumnDimension('N')
                      ->setWidth(13);

          $spreadsheet->getActiveSheet()
                      ->getColumnDimension('O')
                      ->setWidth(13);

          $spreadsheet->getActiveSheet()
                      ->getColumnDimension('P')
                      ->setWidth(13);

          $spreadsheet->getActiveSheet()
                      ->getColumnDimension('Q')
                      ->setWidth(16);

          $spreadsheet->getActiveSheet()
                      ->setCellValue('A1', 'Data Inventory')
                      ->setCellValue('A2', 'Periode 2020-2021')
                      ->setCellValue('A4', 'No')
                      ->setCellValue('B4', 'Code')
                      ->setCellValue('C4', 'Brand')
                      ->setCellValue('D4', 'Model')
                      ->setCellValue('E4', 'Category')
                      ->setCellValue('F4', 'Location')
                      ->setCellValue('G4', 'Serial Number')
                      ->setCellValue('H4', 'Status')
                      ->setCellValue('I4', 'Color')
                      ->setCellValue('J4', 'Price')
                      ->setCellValue('K4', 'Date of Purchase')
                      ->setCellValue('L4', 'Description')
                      ->setCellValue('M4', 'Length (cm)')
                      ->setCellValue('N4', 'Width (cm)')
                      ->setCellValue('O4', 'Height (cm)')
                      ->setCellValue('P4', 'Weight (kg)')
                      ->setCellValue('Q4', 'Quantity (pcs)');

          $spreadsheet->getActiveSheet()
                      ->mergeCells("A1:Q1");

          $spreadsheet->getActiveSheet()
                      ->mergeCells("A2:Q2");

          $spreadsheet->getActiveSheet()
                      ->mergeCells("A3:Q3");

          $spreadsheet->getActiveSheet()
                      ->getStyle('A1')
                      ->getAlignment()
                      ->setHorizontal(Alignment::HORIZONTAL_CENTER);

          $spreadsheet->getActiveSheet()
                      ->getStyle('A2')
                      ->getAlignment()
                      ->setHorizontal(Alignment::HORIZONTAL_CENTER);

          $spreadsheet->getActiveSheet()
                      ->getStyle('A4:Q4')
                      ->applyFromArray($tableHead);

          $kolom = 5;
          $nomor = 1;

          foreach($get as $data) {

               $spreadsheet->getActiveSheet()
                           ->setCellValue('A' . $kolom, $nomor)
                           ->setCellValue('B' . $kolom, $data->code)
                           ->setCellValue('C' . $kolom, $data->brand)
                           ->setCellValue('D' . $kolom, $data->model)
                           ->setCellValue('E' . $kolom, $data->category_name)
                           ->setCellValue('F' . $kolom, $data->location_name)
                           ->setCellValue('G' . $kolom, $data->serial_number)
                           ->setCellValue('H' . $kolom, $data->status_name)
                           ->setCellValue('I' . $kolom, $data->color)
                           ->setCellValue('J' . $kolom, $data->price)
                           ->setCellValue('K' . $kolom, $data->date_of_purchase)
                           ->setCellValue('L' . $kolom, $data->description)
                           ->setCellValue('M' . $kolom, $data->length)
                           ->setCellValue('N' . $kolom, $data->width)
                           ->setCellValue('O' . $kolom, $data->height)
                           ->setCellValue('P' . $kolom, $data->weight)
                           ->setCellValue('Q' . $kolom, $data->qty);

                if($kolom % 2 == 0){
                  // even row
                  $spreadsheet->getActiveSheet()
                              ->getStyle('A'.$kolom.':Q'.$kolom)
                              ->applyFromArray($evenRow);
                }else{
                  // odd row
                  $spreadsheet->getActiveSheet()
                              ->getStyle('A'.$kolom.':Q'.$kolom)
                              ->applyFromArray($oddRow);
                }

               $kolom++;
               $nomor++;
          }

          // auto filter
          $firstRow=4;
          $lastRow=$kolom-1;

          $spreadsheet->getActiveSheet()
                      ->setAutoFilter("A".$firstRow.":Q".$lastRow);

        // run export
          $writer = new Xlsx($spreadsheet);

          header('Content-Type: application/vnd.ms-excel');
          header('Content-Disposition: attachment;filename="inventory.xlsx"');
          header('Cache-Control: max-age=0');

          $writer->save('php://output');
     }
     // end of export
}
