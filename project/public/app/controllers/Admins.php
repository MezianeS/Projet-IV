<?php 
	class Admins extends Controller {
		public function __construct(){
			if(!isLoggedInAdmin()){
				redirect('admins/index');
			}

			$this->postModel = $this->model('Post');
			$this->userModel = $this->model('User');
			$this->commentModel = $this->model('Commentary');
		}


		public function index(){
			$cmts = $this->commentModel->getComm();
			$posts = $this->postModel->getPosts();

			$data = [
				'comments' => $cmts, 
			];

			$this->view('admins/index', $data);
		}

		

		public function posts(){
			$posts = $this->postModel->getPosts();

			$data = [
				'posts' => $posts,
			];

			$this->view('admins/posts', $data);
		}

		public function deletearticle($id){
    	if($_SERVER['REQUEST_METHOD'] == 'POST'){
    		// Get existing post form model
				$deletepost = $this->postModel->getPosts($id);
			  //Check for owner
    		if($this->postModel->deletePost($id)){
    			flash('post_message', 'Poste supprimé par un administrateur.');
    			redirect('admins/posts');
    		} else {
    			die('Cela ne se passe pas comme prévu');
    		}
    	} else {
    		redirect('admins/posts');
    	}

    }




    public function comments(){
			$comments = $this->commentModel->getComm();
			$posts = $this->postModel->getPosts();

			$data = [
				'comments' => $comments,
				'posts' => $posts,
			];

			$this->view('admins/comments', $data);
		}


	public function deletecommentaire($id){
    	if($_SERVER['REQUEST_METHOD'] == 'POST'){
    		
			$deletecomments = $this->commentModel->getComm($id);
			  
    		if($this->commentModel->deleteComm($id)){
    			flash('post_message', 'Commentaire supprimé par un administrateur.');
    			redirect('admins/comments');
    		} else {
    			die('Cela ne se passe pas comme prévu');
    		}
    	} else {
    		redirect('admins/comments');
    	}

    }

}
