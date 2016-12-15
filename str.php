<?php  
	class A {
		private function getWord(){
			return "HELLO WORLD";
		}
		protected function say(){
			echo $this->getWord();
		}
		public function  talk(){
			echo "A";
		}
	}
	class B extends A{
		public function gerWord(){
			echo parent::getWord();
		}
		public function say(){
			parent::say();
		}
		public function talk(){
			echo "B";
		}
	}
	$obj = new B();
	$obj->talk();
?>