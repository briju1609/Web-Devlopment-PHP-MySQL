<?php

//CONTROLLER

	include 'currencyConverter.php'; //Including the model file	

	class CurrencyConverterController {
		private $currencyConverter;
		public function __construct(CurrencyConverter $currencyConverter) {
				$this->currencyConverter = $currencyConverter;
		}
	
		public function convert($request) {
				if (isset($request['currency']) && isset($request['amount'])) {
				$this->currencyConverter->set($request['amount'], $request['currency']);
			}
		}
}		

		$model = new CurrencyConverter();
		$controller = new CurrencyConverterController($model);
		
		//Check for presence of $_GET['action'] to see if a controller action is required
		if (isset($_GET['action'])) $controller->{$_GET['action']}($_POST);
		$gbpView = new CurrencyConverterView($model, 'GBP');
		echo $gbpView->output();
		
		$usdView = new CurrencyConverterView($model, 'USD');
		echo $usdView->output();
		
		$eurView = new CurrencyConverterView($model, 'EUR');
		echo $eurView->output();
		
		$yenView = new CurrencyConverterView($model, 'YEN');
		echo $yenView->output();
		
		$inrView = new CurrencyConverterView($model, 'INR');
		echo $inrView->output();
		
?>