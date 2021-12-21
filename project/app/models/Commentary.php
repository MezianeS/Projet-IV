<?php 
//Classe fraichement crée pour les commentaires
	class Commentary {
		private $dbcomm;

		public function __construct(){
			$this->dbcomm = new Database;
		}

		public function getComm(){
			$this->dbcomm->query('SELECT *,
								comments.id as commId,
								comments.created_at as commentsCreated,
								users.created_at as userCreated,
								comments.post_id as postesId
								FROM comments 
								INNER JOIN users
								ON comments.user_id = users.id
								ORDER BY comments.created_at DESC
								');


			$results= $this->dbcomm->resultSet();

			return $results;
		}

		public function addComm($data){
			$this->dbcomm->query('INSERT INTO comments (user_id, post_id, commentbody) VALUES(:user_id, :post_id, :commentbody)');
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
								comments.created_at as commentsCreated,
								users.created_at as userCreated,
								comments.post_id as postesId
								FROM comments 
								INNER JOIN users
								ON comments.user_id = users.id
								INNER JOIN posts
								ON comments.post_id = posts.id
								WHERE post_id = :id
								ORDER BY comments.created_at DESC');
			$this->dbcomm->bind(':id', $id);

			$results = $this->dbcomm->resultSet();

			return $results;
		}


		public function deleteComm($id){
			$this->dbcomm->query('DELETE FROM comments WHERE id = :id');
			//Bind values
			$this->dbcomm->bind(':id', $id);

			// Execute
			if($this->dbcomm->execute()){
				return true;
			} else {
				return false;
			}
		}

	}


