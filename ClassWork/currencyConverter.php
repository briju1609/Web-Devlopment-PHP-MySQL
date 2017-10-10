<?php 

//MODEL 
	
		class CurrencyConverter {
			private $baseValue = 0;
			private $rates = [	
					'GBP' => 1.0,
					'USD' => 0.6,
					'EUR' => 0.83,
					'YEN' => 0.0058,
					'INR' => 0.012
			];
		
			public function get($currency) {
				if (isset($this->rates[$currency])) {
					$rate = 1/$this->rates[$currency];
					return round($this->baseValue * $rate, 2);
				}
				else return 0;
			}
		
			public function set($amount, $currency = 'GBP') {
				if (isset($this->rates[$currency])) {
					$this->baseValue = $amount * $this->rates[$currency];
				}
			}
	}
	
/*
	$currencyConverter = new CurrencyConverter;
	$currencyConverter->set(100, 'GBP');
	
	echo '100 GBP is:';
	echo $currencyConverter->get('USD') . ' USD / '
	echo $currencyConverter->get('EUR') . ' EUR / ';
	echo $currencyConverter->get('YEN') . ' YEN';
*/
?>