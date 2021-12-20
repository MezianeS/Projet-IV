<?php 
//Classe fraichement crée pour les commentaires
	class Commentary {
		private $dbcomm;

		public function __construct(){
			$this->dbcomm = new Database;
		}
		
		public function getComm(){
			$this->dbcomm->query('SELECT *,
								commentsalaska.id as commId,
								commentsalaska.created_at as commentsCreated,
								usersalaska.created_at as userCreated,
								commentsalaska.post_id as postesId,
								postsalaska.title as postesTitle
								FROM commentsalaska
								INNER JOIN usersalaska
								ON commentsalaska.user_id = usersalaska.id
								INNER JOIN postsalaska
								ON commentsalaska.post_id = postsalaska.id
								ORDER BY commentsalaska.report DESC
								');


			$results= $this->dbcomm->resultSet();

			return $results;
		}

		public function addComm($data){
			$this->dbcomm->query('INSERT INTO commentsalaska (user_id, post_id, commentbody) VALUES(:user_id, :post_id, :commentbody)');
			//Bind values
			$this->dbcomm->bind(':user_id', $data['user_id']);
			$this->dbcomm->bind(':post_id', $data['post_id']); 
			$this->dbcomm->bind(':commentbody', $data['commentbody']);
			

			// Execute
			if($this->dbcomm->execute()){
				return true;
			} else {
				return false;
			}

		}

		public function getCommByPost($id){
			$this->dbcomm->query('SELECT *,
								commentsalaska.created_at as commentsCreated,
								usersalaska.created_at as userCreated,
								commentsalaska.post_id as postesId,
								commentsalaska.id as idcomm,
								postsalaska.title as postesTitle
								FROM commentsalaska
								INNER JOIN usersalaska
								ON commentsalaska.user_id = usersalaska.id
								INNER JOIN postsalaska
								ON commentsalaska.post_id = postsalaska.id
								WHERE post_id = :id
								ORDER BY commentsalaska.created_at DESC');
			$this->dbcomm->bind(':id', $id);

			$results = $this->dbcomm->resultSet();

			return $results;
		}


		public function deleteComm($id){
			$this->dbcomm->query('DELETE FROM commentsalaska WHERE id = :id');
			//Bind values
			$this->dbcomm->bind(':id', $id);

			// Execute
			if($this->dbcomm->execute()){
				return true;
			} else {
				return false;
			}
		}

		public function reportComm($id){
			$this->dbcomm->query('UPDATE commentsalaska SET report = report + 1 WHERE id = :id');
			$this->dbcomm->bind(':id', $id);

			if($this->dbcomm->execute()){
				return true;
			} else {
				return false;
			}
		}


	}


