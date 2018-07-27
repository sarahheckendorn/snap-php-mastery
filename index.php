<?php

class Car {
 private $carId;
 private $carGas;
 private $carMileage;


	public function __construct(int $newCarId, string $newCarGas, string $newCarMileage) {
		try {
			$this->setCarId($newCarId);
			$this->setCarGas($newCarGas);
			$this->setCarMileage($newCarMileage);
		} catch (\InvalidArgumentException | \RangeException | \Exception |\TypeError $exception) {
			$exceptionType = get_class($exception);
			throw (new $exceptionType($exception->getMessage(), 0, $exception));
		}

 public function getCarId() : uuid {
 	return($this->carId);
 }

	public function setCarId($newCarId) : void {
		$newCarId = trim($newCarId);
		$newCarId = filter_var($newCarId, FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
		if(empty($newCarId) === true){
			throw(new \InvalidArgumentException("Field cannot be empty"));
		}
		$this->carId = $newCarId;

public function getCarGas() : string {
 	return($this->carGas);
}

		public function setCarGas(string $newCarGas) : void {
			$newCarGas = trim($newCarGas);
			$newCarGas = filter_var($newCarGas, FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
			if(empty($newCarGas) === true) {
				throw(new \InvalidArgumentException("Field cannot be empty"));
			}
			$this->carGas = $newCarGas;

			public
			function getCarMileage(): string {
				return $this->carMileage;
			}

			public
			function setCarMileage(string $newCarMileage): void {
				$newCarMileage = trim($newCarMileage);
				$newCarMileage = filter_var($newCarMileage, FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
				if(empty($newCarMileage) === true) {
					throw(new \InvalidArgumentException("Field cannot be empty"));
				}
				$this->carMileage = $newCarMileage;

			}
		}
		public function addGasCost() {
			$carGas= *=3;
 			$carMilage=5;
 			$total=$carGas + $carMilage;
 	$this->addGasCost()
	}