<?php
require('assets/fpdf/fpdf.php');

class PDF extends FPDF {
	function Header() {

		//$this->SetFont('Arial', 'B', 15);

		$this->Cell(15);

		$this->Image('assets/images/logo.png', 74, 0, 60);

		$this->Image('assets/images/ftsm.jpg', 10, 34, 190);

		$this->Cell(100, 10, '', 0, 1);

		$this->Ln(25);

	}

	function Footer() {

		$this->SetFont('Arial', 'B', 7);

			$this->SetY(-35);

			$this->Cell(100,10,'PEJABAT DEKAN FAKULTI TEKNOLOGI DAN SAINS MAKLUMAT', 0, 1);

		$this->SetFont('Arial', '', 7);

			$this->SetY(-32);

			$this->Cell(100,10,'Universiti Kebangsaan Malaysia, 43600 UKM Bangi, Selangor Darul Ehsan Malaysia', 0, 1);

			$this->SetY(-29);


			$this->Cell(100,10,'Telefon: +603-8921 6178  Faksimili: +603-8925 6732  Emel: hejimftsm@ukm.edu.my  Laman Web: http://www.ukm.my', 0, 1);



		
		$this->SetY(-29);

		
		$this->Image('assets/images/ftsm2.jpg', 10, 280, 190);


		$this->Cell(100, 10, '', 0, 1);

		


	}
}

$pdf = new PDF ('p', 'mm', 'A4');

$pdf->AddPage();

$pdf->SetFont('Arial', 'BI', 9);

	$pdf->Cell(130, 5, 'Pejabat Dekan', 0, 0);
	$pdf->Cell(59, 5, 'Rujukan: ', 0, 1);
	$pdf->Cell(130, 5, 'Fakulti Teknologi & Sains Maklumat', 0, 0);
	$pdf->Cell(59, 5, 'Tarikh: ', 0, 1);

$pdf->SetFont('Arial', '', 9);

	$pdf->Cell(189, 10, '', 0, 1);


	$pdf->Cell(189, 5, 'Kod Syarikat: ', 0, 1);
	$pdf->Cell(189, 5, '', 0, 1);

	$pdf->Cell(189, 5, $userData['MATRIK'], 0, 1);
	$pdf->Cell(189, 5, $mohoncl['fld_company_name'], 0, 1);
	$pdf->Cell(189, 5, '[Alamat]', 0, 1);
	$pdf->Cell(189, 5, '[Alamat]', 0, 1);
	$pdf->Cell(189, 5, '[Alamat]', 0, 1);

	$pdf->Cell(189, 5, '', 0, 1);

	$pdf->Cell(189, 5, 'U/P: ', 0, 1);

	$pdf->Cell(189, 5, '', 0, 1);

$pdf->SetFont('Arial', 'B', 9);

	$pdf->Cell(189, 5, 'PERMOHONAN MENJALANI PROGRAM LATIHAN AMALI/INDUSTRI', 0, 1);

	$pdf->Cell(189, 5, '', 0, 1);

$pdf->SetFont('Arial', '', 9);
	
	$pdf->Cell(189, 5, 'Dengan segala hormatnya dimaklumkan bahawa Fakulti Teknologi & Sains Maklumat, Universti Kebangsaan Malaysia ', 0, 1);
	$pdf->Cell(189, 5, 'mengadakan program di atas sebagai keperluan untuk memperolehi Ijazah Sarjanamuda [BIDANG] dengan Kepujian.', 0, 1);
	$pdf->Cell(189, 5, '', 0, 1);

	$pdf->Cell(189, 5, '2. Program ini bertujuan untuk memberi pendedahan kepada pelajar berkenaan aspek operasi dan pengurusan ', 0, 1);
	$pdf->Cell(189, 5, 'organisasi supaya pelajar dapat menggabungkan teori dan pengetahuan yang telah dipeljari di universiti dengan ', 0, 1);
	$pdf->Cell(189, 5, 'pengalaman praktikal di industri. ', 0, 1);
	$pdf->Cell(189, 5, '', 0, 1);

	$pdf->Cell(189, 5, '3. Sehubungan itu, saya mengharapkan jasa baik pihak tuan/puan agar dapat memberi keizinan bagi menempatkan', 0, 1);
	$pdf->Cell(189, 5, 'pelajar ini di organisasi tuan/puan selama 20 minggu bermula [tarikah] hingga [TARIKH] (atau [TARIKH]', 0, 1);
	$pdf->Cell(189, 5, 'hingga [TARIKH] untuk negeri yang bekerja Ahad-Khamis).', 0, 1);
	$pdf->Cell(189, 5, '', 0, 1);

	$pdf->Cell(189, 5, '4. Bersama-sama ini dilampirkan maklumat pelajar dan borang jawapan untuk pertimbangan dan tindakan pihak', 0, 1);
	$pdf->Cell(189, 5, 'tuan/puan. Bagi membantu kelancaran urusan penempatan pelajar, saya dengan sukacitanya memohon pihak tuan/puan', 0, 1);
	$pdf->Cell(189, 5, 'agar dapat memberi jawapan dengan kadar segera.', 0, 1);
	$pdf->Cell(189, 5, '', 0, 1);

	$pdf->Cell(189, 5, 'Di atas perhatian, kerjasama dan pertimbangan baik daripada pihak tuan/puan dalam hal ini, saya dahulukan dengan', 0, 1);
	$pdf->Cell(189, 5, 'ucapan ribuan terima kasih.', 0, 1);
	$pdf->Cell(189, 5, '', 0, 1);


	$pdf->Cell(189, 5, 'PROF MADYA DR NURHIZAM SAFIE MOHD SATAR', 0, 1);
	$pdf->Cell(189, 5, 'Timbalan Dekan Jaringan dan Penjanaan', 0, 1);
	$pdf->Cell(189, 5, 'Fakulti Teknologi & Sains Maklumat', 0, 1);
	$pdf->Cell(189, 5, 'Universiti Kebangsaan Malaysia', 0, 1);
	$pdf->Cell(189, 5, '', 0, 1);
	$pdf->Cell(189, 5, '', 0, 1);

$pdf->SetFont('Arial', 'B', 9);	
	$pdf->Cell(189, 5, 'INI ADALAH CETAKAN KOMPUTER , TANDATANGAN TIDAK DIPERLUKAN', 0, 1);


$pdf->Output();
?>