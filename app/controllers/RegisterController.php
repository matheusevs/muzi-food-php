<?php 

require_once __DIR__ . '/../models/Clients.php';

class RegisterController extends Controller {

    private $clientModel;

    public function __construct()
    {
        $this->clientModel = new Clients();
    }

    public function registerUser($request)
    {
        $validateFields = $this->validateFields($request);
        if (!empty($validateFields)) {
            return ['status' => 'error', 'message' => $validateFields];
        }

        $findClientByEmail = $this->clientModel->findClientByEmail($request['email']);
        if ($findClientByEmail['error']) {
            return ['status' => 'error', 'message' => $findClientByEmail];
        }

        $dataUser = [
            'name'      => $request['name'],
            'email'     => $request['email'],
            'password'  => $request['password'],
            'phone'     => $request['phone'],
        ];

        $dataUserInsertQuery = $this->prepareInsertQuery($dataUser);
        var_dump($dataUserInsertQuery);
        die();

        if (!$this->clientModel->insert($request)) {
            return ['status' => 'error', 'message' => 'Erro ao registrar o usuário.'];
        }

        return ['status' => 'success', 'message' => 'Usuário registrado com sucesso.'];
    }

    public function validateFields($data)
    {
        $errors = [];

        if (empty($data['name'])) {
            $errors['name'] = 'O campo nome é obrigatório.';
        } elseif (strlen($data['name']) < 3) {
            $errors['name'] = 'O nome deve ter pelo menos 3 caracteres.';
        }

        if (empty($data['email'])) {
            $errors['email'] = 'O campo email é obrigatório.';
        } elseif (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = 'O email informado não é válido.';
        }

        if (empty($data['password'])) {
            $errors['password'] = 'O campo senha é obrigatório.';
        } elseif (strlen($data['password']) < 6) {
            $errors['password'] = 'A senha deve ter pelo menos 6 caracteres.';
        }

        if (empty($data['confirm_password'])) {
            $errors['confirm_password'] = 'O campo de confirmação de senha é obrigatório.';
        } elseif ($data['confirm_password'] !== $data['password']) {
            $errors['confirm_password'] = 'A confirmação de senha não coincide com a senha.';
        }

        if (empty($data['phone'])) {
            $errors['phone'] = 'O campo telefone é obrigatório.';
        } elseif (!preg_match('/^[0-9]{10,11}$/', $data['phone'])) {
            $errors['phone'] = 'O telefone deve conter apenas números e ter entre 10 e 11 dígitos.';
        }

        if (empty($data['terms'])) {
            $errors['terms'] = 'Você deve aceitar os termos e condições.';
        }

        return $errors;
    }

}