<?php
class teste
{
	
/**
 * PHPExcel
 *
 * Copyright (C) 2006 - 2014 PHPExcel
 *
 * This library is free software; you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation; either
 * version 2.1 of the License, or (at your option) any later version.
 *
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this library; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301  USA
 *
 * @category   PHPExcel
 * @package    PHPExcel
 * @copyright  Copyright (c) 2006 - 2014 PHPExcel (http://www.codeplex.com/PHPExcel)
 * @license    http://www.gnu.org/licenses/old-licenses/lgpl-2.1.txt	LGPL
 * @version    1.8.0, 2014-03-02
 */

/** Error reporting */
	
	function generateFile(){
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);
date_default_timezone_set('Europe/London');

define('EOL',(PHP_SAPI == 'cli') ? PHP_EOL : '<br />');

/** Include PHPExcel */
//require_once dirname(__FILE__) . 'Classes/PHPExcel.php';



$objPHPExcel = new PHPExcel();

$objPHPExcel->getProperties()->setCreator("Maarten Balliauw")
							 ->setLastModifiedBy("Maarten Balliauw")
							 ->setTitle("PHPExcel Test Document")
							 ->setSubject("PHPExcel Test Document")
							 ->setDescription("Test document for PHPExcel, generated using PHP classes.")
							 ->setKeywords("office PHPExcel php")
							 ->setCategory("Test result file");


// Add some data

// Criamos as colunas
$objPHPExcel->setActiveSheetIndex(0)
            ->setCellValue('A1', 'MODELO' )
            ->setCellValue('B1', "PRECO" )
            ->setCellValue("C1", "CAVALOS HP" )
            ->setCellValue("D1", "CONSUMO ETANOL" )
			->setCellValue("E1", "CONSUMO GASOLINA" )
			->setCellValue("F1", "VALOR MEDIO REVISOES" )
			->setCellValue("G1", "VALOR MEDIO SEGURO" )
			->setCellValue("H1", "PONTUACAO FINAL" );

// Podemos configurar diferentes larguras paras as colunas como padrão
$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(28);
$objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(20);
$objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(20);
$objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(20);
$objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(20);
$objPHPExcel->getActiveSheet()->getColumnDimension('F')->setWidth(25);
$objPHPExcel->getActiveSheet()->getColumnDimension('G')->setWidth(25);
$objPHPExcel->getActiveSheet()->getColumnDimension('H')->setWidth(20);


// Também podemos escolher a posição exata aonde o dado será inserido (coluna, linha, dado);

$crud = new Crud ();
$data = $crud->getCarros ();
for($i = 0; $i < count ( $data ); $i ++) {

	// Exemplo inserindo uma segunda linha, note a diferença no segundo parâmetro
	$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(0, ($i+2), $data [$i] ["model"]);
	$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(1, ($i+2), "R$ ".$data [$i] ["price"]);
	$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(2, ($i+2), $data [$i] ['hp']);
	$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(3, ($i+2), $data [$i] ['consumptioneth']);
	$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(4, ($i+2), $data [$i] ['consumptiongas']);
	$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(5, ($i+2), "R$ ".$data [$i] ['revisionavg']);
	$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(6, ($i+2), "R$ ".$data [$i] ['insuranceavg']);
	$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(7, ($i+2), $data [$i] ['point']);
	
	
}



$objPHPExcel->getActiveSheet()->setTitle('Simple');


// Set active sheet index to the first sheet, so Excel opens this as the first sheet
$objPHPExcel->setActiveSheetIndex(0);



$callStartTime = microtime(true);

$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
$objWriter->save(str_replace('.php', '.xlsx', __FILE__));
$callEndTime = microtime(true);
$callTime = $callEndTime - $callStartTime;

$callStartTime = microtime(true);

$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
$objWriter->save(str_replace('.php', '.xls', __FILE__));
$callEndTime = microtime(true);
$callTime = $callEndTime - $callStartTime;

// Echo done

echo 'Arquivos criados em: ' , getcwd() , EOL;
	
	}
}

?>