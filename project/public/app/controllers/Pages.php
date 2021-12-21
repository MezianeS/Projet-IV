<?php 
	class Pages extends Controller {
		public function __construct(){
			
		}


		public function index() {
			if(isLoggedIn()){
				redirect('posts');

			}

			$data = [
				'title' => "Billet simple pour l'Alaska",
				'description' => 'Un royaume sous les neiges.',
				'title_one' => 'Partez à la découverte de mon aventure à travers mon roman en ligne.',
				'desc_one' => "La création de mon site web permettra à l'ensemble de ma communauté et mes nombreux fans de suivre mon nouveau best-seller.<br>
			J'ai nommé \"Billet simple pour l'Alaska\" et racontera l'histoire d'un jeune homme livreur de pizza livré à lui-même dans ce désert glacé.<br>
			Celle-ci se déroule sur le continent nord-américain, plus précisement à Juneau capital de l'Alaska.<br>",
				'title_two' => 'Participez à mon aventure.',
				'desc_two' => "Laissez votre imagination prendre le pas et m'inspirer à travers des articles que vous posterez. <br>
			Vous avez le choix du format littéraire, romans, nouvelles, fables et même témoignages si vous 
			avez déjà été en Alaska.<br>
			Le livre n'étant pas sorti, il est <strong>indispensable</strong> de s'incrire afin de pouvoir lire mon travail et celui de la communauté.",
				'title_three' => "N'hésitez pas et inscrivez-vous.",
				
			];

			$this->view('pages/index', $data);
		}


		public function about(){
			$data = [
				'img_entete' => '<img src="../public/img/img_about_entete3.jpeg" class="img-fluid" alt="">',
				'title_one' => 'À quoi sert ce blog ?',
				'description' => "Passionné par l'écriture depuis mon plus jeune âge, j'ai toujours adoré l'idée de pouvoir écrire mon aventure
				et l'histoire de celles et ceux qui m'accompagne ou m'entoure.. <br> Lors de mes premiers voyages avec ma famille, j'ai appris à écrire l'histoire des autres, et des lieux toujours chargé par les évènements passés, que cela soit naturel ou par l'Homme. <br>
				Aujourd'hui, âgé de 41 ans, je me tourne vers le numérique afin de vous proposer quelque chose de tout nouveau... La possibilité d'écrire avec moi, une histoire, pas la mienne... Mais bien celle que vous avez pu vivre ou que vous avez crée. <br>
				L'inscription et la possibilité de créer vos propres posts sont gratuits ! Qui sait vous aurez peut être la chance que votre article soit dans mon livre. ",
				'title_two' => 'Participez à l\'aventure !'
			];
			$this->view('pages/about', $data);
		}
	}