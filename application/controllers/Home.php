<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{	

		// Meta tags
		$data['title'] = 'Resume - Start Bootstrap Theme'; // This is the title of the page e.g 'Resume - Start Bootstrap Theme'.
		$data['description'] = 'Resume is a Bootstrap resume or CV landing page theme to help you beautifully create easy to use, stylish resume websites!'; // This is the <head> meta description field.
		$data['author'] = 'Author of the site'; // This is the <head> meta author field.

		// About Section
		$data['first_name'] = 'Clarence';
		$data['last_name'] = 'Taylor';
		$data['address'] = '3542 Berry Street · Cheyenne Wells, CO 80810 · (317) 585-8468 ·';
		$data['your_email'] = 'name@email.com';
		$data['about_info'] = 'I am experienced in leveraging agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition.';



		$this->load->view('header', $data); // <head> block of the HTML.
		$this->load->view('navigation', $data); // <nav> block of the HTML.
		$this->load->view('home', $data); // The actual content of the page.
		$this->load->view('footer', $data); // The footer of the document including closing </body> and any links at the bottom of the document.
	}
}
