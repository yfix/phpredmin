<?php

class Auth_Controller extends Controller
{
    public function indexAction()
    {
		$config = App::instance()->config;
        $session = Session::instance();
		if (isset($_POST['user']) && isset($config['auth']['user']) && $_POST['user'] == $config['auth']['user']
			&& isset($_POST['pswd']) && isset($config['auth']['pswd']) && $_POST['pswd'] == $config['auth']['pswd']
		) {
			$session->set('auth_ok', '1');
			return $this->router->redirect('/');
		}
		if (!isset($config['auth']['pswd']) || $session->get('auth_ok')) {
			return $this->router->redirect('/');
		}
        Template::factory()->render('auth/index');
    }
}
