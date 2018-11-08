<?php

	class Compra_vehiculo{
		
		private $precio_base;
		
		//campo estatico para ser compartido en la compra de cualquier coche
		private static $ayuda=0;//descuentos por parte del gobierno aca, se aplica al descuento de cualquier gama de coche
		
		

		function Compra_vehiculo($gama){
			
			if($gama=="urbano"){
				
					$this->precio_base=10000;
				
			}else if($gama=="compacto"){
				
				
					$this->precio_base=20000;	
				
			}
			
			else if($gama=="berlina"){
				
					$this->precio_base=30000;	
				
			}		
			
			
		}// fin constructor
		
		static function descuento()
		{
			self::$ayuda=4500; //hacer referencia a variables estaticas
		}//fin de funcion estatica descuento
		
		function climatizador(){		
			

				$this->precio_base+=2000;					
			
			
		}// fin climatizador
		
		
		function navegador_gps(){
			
			$this->precio_base+=2500;	
			
		}//fin navegador gps
		
		
		
		function tapiceria_cuero($color){
			
			if($color=="blanco"){
			
				$this->precio_base+=3000;
			}
			
			else if($color=="beige"){
				
				$this->precio_base+=3500;
				
			}
			
			else{
				
				$this->precio_base+=5000;
				
			}
			
		}// fin tapicería
		
		
		
		function precio_final(){
			
			//restando el precio base con el descuento $ayuda
			$valor_final=$this->precio_base-self::$ayuda;//como este campo pertenece a la clase no se usa this-> para referenciar sino self:: 
			
			return $valor_final;	
			
		}// fin precio final
		
		
		
	}// fin clase


?>