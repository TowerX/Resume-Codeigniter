# Resume-Codeigniter
This site was built using the Resume template from the awesome team @ [Start Bootstrap](https://startbootstrap.com/template-overviews/resume/) and [Codeigniter(V3.1.9)](https://codeigniter.com/). 

I would call this a starting point for people who want to learn Codeigniter or built on top of a fresh copy.

I added comments to help with the basics and will be updating the content to include Admin features, contact form and more. 

The Admin area will allow the edits of any content from the Front-End.

Open to suggestions and feedback,

Thanks!


## How to use?

- Change this Config URL to point at your environment: 

$config['base_url'] = 'http://localhost/Resume-Codeigniter/';

Example: $config['base_url'] = 'http://yourdomain.com/'; 

This Config file is located in application/config/config.php


### Variables:

- This variables are easy to edit and have comments explaining what they do. Location of the variables to edit = 'application/controllers/Home.php'

        // Meta tags
		$data['title'] = 'Resume - Start Bootstrap Theme'; // This is the title of the page e.g 'Resume - Start Bootstrap Theme'.
		$data['description'] = 'Resume is a Bootstrap resume or CV landing page theme to help you beautifully create easy to use, stylish resume websites!'; // This is the meta description field.
		$data['author'] = 'Author of the site'; // This is the meta author field.

		// About Section
		$data['first_name'] = 'Clarence';
		$data['last_name'] = 'Taylor';
		$data['address'] = '3542 Berry Street · Cheyenne Wells, CO 80810 · (317) 585-8468 ·';
		$data['your_email'] = 'name@email.com';
		$data['about_info'] = 'I am experienced in leveraging agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition.';
