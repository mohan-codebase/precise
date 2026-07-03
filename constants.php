<?php
DEFINE('HOST_DOMAIN_URL','http://localhost/Form-fileUpload');
DEFINE('HOST_NAME','Localhost');
DEFINE('MAIL_SUBJECT','You have a message from your client');
DEFINE('MAIL_TO','aaranrims@gmail.com');
$technical_checkbox = array(
						'design-int'=>'DESIGN INTENT MODELING',
						'hybrid-mod'=>'HYBRID MODELING',
						'as-built'=>'AS-BUILT MODELING',
						'scan-nurbs'=>'SCAN TO NURBS MODELING',
						);
$deliverables_checkbox = array(
							'cad-neutral' => 'CAD neutral files', 
							'live-transfer' => 'LIVE TRANSFER FORMAT', 
							'other' => 'OTHER(please mention)', 
						);
$accuracy_required_options = array(
							'0.5' => 'Eg.05mm',
							'1.0' => 'Eg.10mm',
							'1.5' => 'Eg.15mm',
							'2.0' => 'Eg.20mm',
							'2.5' => 'Eg.25mm',
							'3.0' => 'Eg.30mm',
						);
?>