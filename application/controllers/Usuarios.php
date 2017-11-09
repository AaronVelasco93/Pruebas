<?php
class Usuarios extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('usuarios_model');
        $this->load->helper('url_helper');
    }

    public function index()
    {
        $data['usuarios'] = $this->usuarios_model->get_usuarios();
        $data['title'] = 'News archive';

        $this->load->view('templates/header', $data);
        $this->load->view('usuarios/index', $data);
        $this->load->view('templates/footer');
    }

    public function agregar_usuario_view()
    {
        $this->load->helper('form'); // construccion de formularios
          $this->load->library('form_validation'); //validacion
          $this->load->library('session');//set Session
          //se agrega la vista
          $this->load->view('templates/header');
        $this->load->view('usuarios/agregarusuario');
        $this->load->view('templates/footer');
    }

    public function agregar_usuario()
    {
        echo 'Agregando usuario...';
        //se establecen las validaciones de formulario
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[usuarios.email]');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]');
        $this->form_validation->set_rules('password_confirm', 'Confirm Password', 'trim|required|min_length[6]|matches[password]');
        $this->form_validation->set_rules('nombre', 'Nombre', 'trim|required|min_length[3]');
        $this->form_validation->set_rules('paterno', 'App. paterno', 'trim|required|min_length[3]');
        $this->form_validation->set_rules('materno', 'Ap. Materno', 'trim|required|min_length[3]');

        // se verifican las reglas de validacion
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header');
            $this->load->view('usuarios/agregarusuario');
            $this->load->view('templates/footer');
        } else {
            $this->load->model('usuarios_model'); // acceso a BD usuarios

            //se genera el registro a insertar
            $data = array(
            'email' => $this->input->post('email'),
            'password' => password_hash($this->input->post('password'), PASSWORD_BCRYPT),
            'nombre' => $this->input->post('nombre'),
            'paterno' => $this->input->post('paterno'),
            'materno' => $this->input->post('materno')
            );
            $this->usuarios_model->insert($data); //insertar a BD
        }
    }
}
