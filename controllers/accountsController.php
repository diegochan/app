<?php

class Accounts extends AppController
{
	public function index(){
		$conditions = array("conditions"=>"accounts.user_id=users.id");
		$account = $this->db->find("accounts, users", "all", $conditions);
		$account = $account->fetchAll(PDO::FETCH_NUM);
		$this->set("account", $account);
	}

	public function add(){
		if ($_POST) {
			if ($this->db->save("accounts", $_POST)){
				$this->redirect(array("controller"=>"accounts"));
			}else{
				$this->redirect(array("controller"=>"accounts", "acction"=>"add"));
			}
		}
		$accounts = $this->db->find("accounts", "all");
		$this->set("accounts", $accounts);

		$users = $this->db->find("users", "all");
		$this->set("users", $users);
	}


	public function edit($args){
		if ($_POST) {
			$filter = new Validations();
			if (!empty($_POST["name"])) {
				$_POST["name"] = $filter->sanitizeText($_POST["name"]);
			}
			if (!empty($_POST["user_id"])) {
				$_POST["user_id"] = $filter->sanitizeText($_POST["user_id"]);
			}

			if ($this->db->update("accounts", $_POST)) {
				$this->redirect(array("controller"=>"accounts"));
			}else{
				$this->redirect(array("controller"=>"accounts", "acction"=>"edit/".$args[0]));
			}
		}
		$account = $this->db->find("accounts", "first", array("conditions"=>"accounts.id=".$args[0]));
		$this->set("account", $account);

		$accounts = $this->db->find("accounts", "all");
		$this->set("accounts", $accounts);

		$users = $this->db->find("users", "all");
		$this->set("users", $users);
		
	}

	public function delete(){
		if ($_GET) {
		    if (!empty($_GET['id'])) {
		        $condition = "id=".$_GET['id'];
		        $this->db->delete("accounts", $condition);
		        if ($this->db->numberRows>0) {
		          	echo "Registro eliminado!";
		        }else{
		         	echo "nose a eliminado";
		        }
		    }
		}
	}
}