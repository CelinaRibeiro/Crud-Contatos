<?php

class contatosController extends Controller
{

    public function index()
    {}

    public function add()
    {
        $dados = array(
            'error' => ''
        );
        if (! empty($_GET['error'])) {
            $dados['error'] = $_GET['error'];
        }

        $this->loadTemplate('add', $dados);
    }

    public function add_save()
    {
        if (! empty($_POST['email'])) {
            $nome = $_POST['nome'];
            $email = $_POST['email'];

            $contatos = new Contatos();
            if ($contatos->add($nome, $email)) {
                header("Location: " . BASE_URL);
            } else {
                header("Location: " . BASE_URL . 'contatos/add?error=exist');
            }
        } else {
            header("Location: " . BASE_URL . 'contatos/add');
        }
    }

    public function edit($id)
    {
        // 1º passo: pegar as informações do contato pelo ID;
        // 2º passo: carregar o formulário preenchido;
        // 3º passo: receber os dados do form e editar;
        $dados = array();

        if (!empty($id)) {
            $contatos = new Contatos();

            if (!empty($_POST['nome'])) {
                $nome = $_POST['nome'];

                $contatos->edit($nome, $id);
            } else {
                $dados['info'] = $contatos->get($id);

                if (isset($dados['info']['id'])) {
                    $this->loadTemplate('edit', $dados);
                    exit;
                }
            }
        }
        header("Location: " . BASE_URL);
    }

    public function del($id)
    {
        // 1º passo: deletar o contato pelo ID;
        // 2º passo: voltar para a home.
        if (! empty($id)) {
            $contatos = new Contatos();
            $contatos->deletePorId($id);
        }
        header("Location: " . BASE_URL);
    }
}

