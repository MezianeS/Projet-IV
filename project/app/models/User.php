<?php 
	class User {
		private $db;

		public function __construct(){
			$this->db = new Database;
		}

		// Register User
		public function register($data){
			$this->db->query('INSERT INTO usersalaska (name, email, password) VALUES(:name, :email, :password)');
			//Bind values
			$this->db->bind(':name', $data['name']);
			$this->db->bind(':email', $data['email']);
			$this->db->bind(':password', $data['password']);

			// Execute
			if($this->db->execute()){
				return true;
			} else {
				return false;
			}
		}

		//Login user
		public function login($email, $password){
      $this->db->query('SELECT * FROM usersalaska WHERE email = :email');
      $this->db->bind(':email', $email);

      $row = $this->db->single();

      $hashed_password = $row->password;
      if(password_verify($password, $hashed_password)){
        return $row;
      } else {
        return false;
      }
    }

		// Find user by email
		public function findUserByEmail($email){
			$this->db->query('SELECT * FROM usersalaska WHERE email = :email');
			//bind value 
			$this->db->bind(':email', $email);

			$row = $this->db->single();

			// Check row 
			if($this->db->rowCount() > 0){
				return true;
			} else {
				return false;
			}
		}

// Get User by ID
    public function getUserById($id){
      $this->db->query('SELECT * FROM usersalaska WHERE id = :id');
      // Bind value
      $this->db->bind(':id', $id);

      $row = $this->db->single();

      return $row;
	}
}