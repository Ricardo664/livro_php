<?php

	class Professor{

		//Atributo

		private $disciplina;


		//Função die()
		/*public function getDisciplina(){
			if($this->disciplina == "fisica"){
				echo $this->disciplina.'<br>';
			}else{
				die("Esta disciplina não é FÍSICA");
			}
			echo "Deu certo";
		}*/

		//Função trigger_error()-NOTICE
		/*public function getDisciplina(){
			if($this->disciplina == "fisica"){
				echo $this->disciplina.'<br>';
			}else{
				trigger_error("Esta disciplina não é física!!!",E_USER_NOTICE);
			}
			echo "Deu certo";
		}*/

		//Função trigger_error()-ERROR
		/*public function getDisciplina(){
			if($this->disciplina == "fisica"){
				echo $this->disciplina.'<br>';
			}else{
				trigger_error("Esta disciplina não é física!!!",E_USER_ERROR);
			}
			echo "Deu certo";
		}*/

		//Função trigger_error()-WARNING
		public function getDisciplina(){
			if($this->disciplina == "fisica"){
				echo $this->disciplina.'<br>';
			}else{
				trigger_error("Esta disciplina não é física!!!",E_USER_NOTICE);
			}
			echo "Deu certo";
		}

		//Método setter

		public function setDisciplina($disciplina){
			$this->disciplina = $disciplina;
		}

	}

?>