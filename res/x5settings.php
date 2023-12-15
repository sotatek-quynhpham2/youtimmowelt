<?php

/*
|-------------------------------
|	GENERAL SETTINGS
|-------------------------------
*/

$imSettings['general'] = array(
	'site_id' => 'E8F0B370C215D5048789F9A325F309DB',
	'url' => 'http://localhost/',
	'homepage_url' => 'http://localhost/index.html',
	'icon' => 'http://localhost/favImage.png',
	'version' => '2023.3.5.0',
	'sitename' => 'Vermieterinformationssystem ',
	'lang_code' => 'de-DE',
	'public_folder' => '',
	'salt' => '1twb0p7dq0fmq38iarnqr01ak2ek6vxvh3l3l0faq9',
	'common_email_sender_addres' => ''
);
/*
|-------------------------------
|	PASSWORD POLICY
|-------------------------------
*/

$imSettings['password_policy'] = array(
	'required_policy' => false,
	'minimum_characters' => '6',
	'include_uppercase' => false,
	'include_numeric' => false,
	'include_special' => false
);
/*
|-------------------------------
|	Captcha
|-------------------------------
*/ImTopic::$captcha_code = "		<div class=\"x5captcha-wrap\">
			<label for=\"f56sd1us-imCpt\">Wortprüfung:</label><br />
			<input type=\"text\" id=\"f56sd1us-imCpt\" class=\"imCpt\" name=\"imCpt\" maxlength=\"5\" />
		</div>
";


$imSettings['admin'] = array(
	'icon' => 'admin/images/logo_p1hwhn4q.png',
	'notification_public_key' => 'BP352Qx-1BF4iBpCkFVK7EWtCPeDgzLuHpDJZywQXSBBVNwDw8UpYCs_x8FZvMIrwUjDheQdjJMMi0mVE6U6E60',
	'notification_private_key' => 'JXfl6LmSqRyKSCScNCY25ICxYJ4pXNPNH9c1G-EovBw',
	'notification_dbprefix' => 'w5_10c95328_notifications_',
	'enable_notifications' => false,
	'theme' => 'orange',
	'extra-dashboard' => array(),
	'extra-links' => array()
);


/*
|--------------------------------------------------------------------------------------
|	DATABASES SETTINGS
|--------------------------------------------------------------------------------------
*/

$imSettings['databases'] = array();
$ecommerce = Configuration::getCart();
// Setup the coupon data
$couponData = array();
$couponData['products'] = array();
// Setup the cart
$ecommerce->setPublicFolder('');
$ecommerce->setCouponData($couponData);
$ecommerce->setSettings(array(
	'page_url' => 'http://localhost/',
	'force_sender' => false,
	'mail_btn_css' => 'display: inline-block; text-decoration: none; color: rgba(255, 255, 255, 1); background-color: rgba(191, 0, 143, 1); padding: 8px 4px 8px 4px; border-style: solid; border-width: 1px 1px 1px 1px; border-color: transparent transparent transparent transparent; border-top-left-radius: 2px; border-top-right-radius: 2px; border-bottom-left-radius: 2px; border-bottom-right-radius: 2px;',
	'email_opening' => 'Sehr geehrter Kunde,<br /><br />Vielen Dank für Ihren Einkauf. Hiermit erhalten Sie eine Zusammenfassung Ihrer Bestellung.<br /><br />Nachstehend finden Sie die Liste der bestellten Produkte, die Rechnungsinformationen sowie Hinweise zu der von Ihnen gewählten Versand- und Zahlungsart.',
	'email_closing' => 'Für weitere Informationen stehen wir Ihnen gern zur Verfügung.<br /><br />Mit freundlichen Grüßen, Ihr Vertriebs-Team.',
	'email_payment_opening' => 'Sehr geehrter Kunde,<br /> <br /> Vielen Dank für Ihren Einkauf. Wir bestätigen, dass Ihre Zahlung empfangen wurde und dass den Auftrag schnellstmöglich bearbeitet wird.<br /> <br /> Nachstehend finden Sie die Liste der bestellten Produkte und die Rechnungs- und Lieferinformationen.',
	'email_payment_closing' => 'Für weitere Informationen stehen wir Ihnen gern zur Verfügung.<br /><br />Mit freundlichen Grüßen, Ihr Vertriebs-Team',
	'email_digital_shipment_opening' => 'Sehr geehrte Kundin, sehr geehrter Kunde,<br /><br />vielen Dank für Ihren Einkauf. Nachstehend finden Sie die Liste der Download-Links für die bestellten Produkte:',
	'email_digital_shipment_closing' => 'Für weitere Informationen stehen wir Ihnen gern zur Verfügung.<br /><br />Mit freundlichen Grüßen, Ihr Vertriebs-Team',
	'email_physical_shipment_opening' => 'Sehr geehrte Kundin, sehr geehrter Kunde,<br /><br />vielen Dank für Ihren Einkauf. Nachstehend finden Sie die Liste der an Sie versendeten Produkte:',
	'email_physical_shipment_closing' => 'Für weitere Informationen stehen wir Ihnen gern zur Verfügung.<br /><br />Mit freundlichen Grüßen, Ihr Vertriebs-Team',
	'sendEmailBeforePayment' => true,
	'sendEmailAfterPayment' => false,
	'useCSV' => false,
	'header_bg_color' => 'rgba(37, 58, 88, 1)',
	'header_text_color' => 'rgba(255, 255, 255, 1)',
	'cell_bg_color' => 'rgba(255, 255, 255, 1)',
	'cell_text_color' => 'rgba(0, 0, 0, 1)',
	'availability_reduction_type' => 1,
	'border_color' => 'rgba(211, 211, 211, 1)',
	'owner_email' => 'example@example.com',
	'vat_type' => 'included',
	'availability_image' => ''
));

$ecommerce->setPriceFormatData(array(
	'decimals' => 2,
	'decimal_sep' => '.',
	'thousands_sep' => '',
	'currency_to_right' => true,
	'currency_separator' => ' ',
	'show_zero_as' => '0',
	'currency_symbol' => '€',
	'currency_code' => 'EUR',
	'currency_name' => 'Euro',
));

$ecommerce->setDigitalProductsData(array());
$ecommerce->setProductsData(array());
$ecommerce->setSlugToProductIdMap(array());
$ecommerce->setCategoriesData(array(
	'3h1qqqhe' => array(
		'id' => '3h1qqqhe',
		'name' => 'Neue Kategorie',
		'containsProductsWithProductPage' => false,
		'products' => array(),
		'categories' => array()
	)
));
$ecommerce->setCommentsData(array(
	'enabled' => false,
	'type' => "websitex5",
	'db' => '',
	'table' => 'w5_10c95328_products_comments',
	'prefix' => 'x5productPage_',
	'comment_type' => "commentandstars"
));
$ecommerce->setPaymentData(array(
	'8dkejfu5' => array(
		'id' => '8dkejfu5',
		'name' => 'Banküberweisung',
		'description' => 'Später per Banküberweisung zahlen.',
		'email_text' => 'Nachstehend finden Sie die Informationen, die für die Zahlung per Banküberweisung benötigt werden:

XXX YYY ZZZ

Bitte beachten Sie, dass Sie nach Abschluss der Zahlung eine Kopie der Überweisungsbestätigung gemeinsam mit der Bestellnummer senden müssen.',
		'enableAfterPaymentEmail' => false
	)));
$ecommerce->setShippingData(array(
	'j48dn4la' => array(
		'id' => 'j48dn4la',
		'name' => 'Mail',
		'description' => 'Die Ware wird in 3-5 Tagen geliefert.',
		'email_text' => 'Versand per Mail.\\nDie Ware wird in 3-5 Tagen geliefert.',
		'tracking_type' => 'none'
	),
	'hdj47dut' => array(
		'id' => 'hdj47dut',
		'name' => 'Expresslieferung',
		'description' => 'Die Ware wird in 1-2 Tagen geliefert.',
		'email_text' => 'Versand per Expresslieferung.\\nDie Ware wird in 1-2 Tagen geliefert.',
		'tracking_type' => 'none'
	)));

/*
|-------------------------------------------------------------------------------------------
|	GUESTBOOK SETTINGS
|-------------------------------------------------------------------------------------------
*/

$imSettings['guestbooks'] = array();

/*
|-------------------------------------------------------------------------------------------
|	Dynamic Objects SETTINGS
|-------------------------------------------------------------------------------------------
*/

$imSettings['dynamicobjects'] = array(	'template' => array(
),
	'pages' => array(

	));


/*
|-------------------------------
|	EMAIL SETTINGS
|-------------------------------
*/

$ImMailer->emailType = 'phpmailer';
$ImMailer->exposeWsx5 = true;
$ImMailer->header = '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">' . "\n" . '<html>' . "\n" . '<head>' . "\n" . '<meta http-equiv="content-type" content="text/html; charset=utf-8">' . "\n" . '<meta name="generator" content="Incomedia WebSite X5 Professional 2023.3.5 - www.websitex5.com">' . "\n" . '</head>' . "\n" . '<body bgcolor="#BF008F" style="background-color: #BF008F;">' . "\n\t" . '<table border="0" cellpadding="0" align="center" cellspacing="0" style="padding: 0; margin: 0 auto; width: 700px;">' . "\n\t" . '<tr><td id="imEmailContent" style="min-height: 300px; padding: 10px; font: normal normal normal 9pt \'Montserrat\'; color: #000000; background-color: #FFFFFF; text-decoration: none; text-align: left; width: 700px; border-style: solid; border-color: #808080; border-top-width: 1px; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px; background-color: #FFFFFF" width="700px">' . "\n\t\t";
$ImMailer->footer = "\n\t" . '</td></tr>' . "\n\t" . '</table>' . "\n" . '<table width="100%"><tr><td id="imEmailFooter" style="font: normal normal normal 7pt \'Montserrat\'; color: #FFFFFF; background-color: transparent; text-decoration: none; text-align: center;  padding: 10px; margin-top: 5px;background-color: transparent">' . "\n\t\t" . 'Die in dieser E-Mail enthaltenen Informationen sind ausschließlich für den genannten Empfänger bestimmt.<br>Sollten Sie diese E-Mail fälschlicherweise erhalten haben, informieren Sie bitte umgehend den Absender und  löschen Sie die Nachricht, ohne Kopien zu erstellen.' . "\n\t" . '</td></tr></table>' . "\n\t" . '</body>' . "\n" . '</html>';
$ImMailer->bodyBackground = '#FFFFFF';
$ImMailer->bodyBackgroundEven = '#FFFFFF';
$ImMailer->bodyBackgroundOdd = '#F0F0F0';
$ImMailer->bodyBackgroundBorder = '#CDCDCD';
$ImMailer->bodyTextColorOdd = '#000000';
$ImMailer->bodySeparatorBorderColor = '#000000';
$ImMailer->emailBackground = '#BF008F';
$ImMailer->emailContentStyle = 'font: normal normal normal 9pt \'Montserrat\'; color: #000000; background-color: #FFFFFF; text-decoration: none; text-align: left; ';
$ImMailer->emailContentFontFamily = 'font-family: Montserrat;';

// End of file x5settings.php