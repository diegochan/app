<?php

class Transactions extends AppController
{
	public function index(){
		$conditions = array("conditions"=>"transactions.category_id=categories.id");
		$transactions = $this->db->find("transactions, categories", "all", $conditions);
		$transactions = $transactions->fetchAll(PDO::FETCH_NUM);
		$this->set("transactions", $transactions);
	}
	public function add(){
		if ($_POST) {
			if ($this->db->save("transactions", $_POST)){
				$this->redirect(array("controller"=>"transactions"));
			}else{
				$this->redirect(array("controller"=>"transactions", "acction"=>"add"));
			}
		}
		$accounts = $this->db->find("accounts", "all");
		$this->set("accounts", $accounts);

		$categories = $this->db->find("categories", "all");
		$this->set("categories", $categories);
	}

	public function edit($args){
		if ($_POST) {
			$filter = new Validations();
			if (!empty($_POST["description"])) {
				$_POST["name"] = $filter->sanitizeText($_POST["description"]);
			}
			if (!empty($_POST["date"])) {
				$_POST["name"] = $filter->sanitizeText($_POST["date"]);
			}
			if (!empty($_POST["amount"])) {
				$_POST["name"] = $filter->sanitizeText($_POST["amount"]);
			}
			if (!empty($_POST["category_id"])) {
				$_POST["name"] = $filter->sanitizeText($_POST["category_id"]);
			}

			if ($this->db->update("transactions", $_POST)) {
				$this->redirect(array("controller"=>"transactions"));
			}else{
				$this->redirect(array("controller"=>"transactions", "acction"=>"edit/".$args[0]));
			}
		}
		$transaction = $this->db->find("transactions", "first", array("conditions"=>"transactions.id=".$args[0]));
		$this->set("transaction", $transaction);

		$accounts = $this->db->find("accounts", "all");
		$this->set("accounts", $accounts);

		$categories = $this->db->find("categories", "all");
		$this->set("categories", $categories);
		
	}
	public function delete(){
		if ($_GET) {
		    if (!empty($_GET['id'])) {
		    $condition = "id=".$_GET['id'];
		        $this->db->delete("transactions", $condition);
		        if ($this->db->numberRows>0) {
		          	echo "transaccion eliminado!";
		        }else{
		         	echo "nose a eliminado";
		        }
		    }
		}
	}
}

 ?>