<?php
namespace App\Controllers;

use App\Models\NewsModel;

use CodeIgniter\Exceptions\PageNotFoundException;
class News extends BaseController
{

    public function index(){
        $model = model(NewsModel::class);
        $data  = [
            'news'  => $model->getNews(),
            'title' => 'News archive',
        ];

        return view('templates/header', $data)
        . view('news/index')
        . view('templates/footer');

    }

    
    public function view($slug = null)
    {
        $model = model(NewsModel::class);
     

        $data['news'] = $model->getNews($slug);

        if (empty($data['news'])) {
            throw new PageNotFoundException('No puedo encontrar la noticia: ' . $slug);
        }

        $data['title'] = $data['news']['title'];

        return view('templates/header', $data)
            . view('news/view')
            . view('templates/footer');
    }





    public function  create(){
        helper('form');

        //Comprueba si se ha enviado el formulario.
        if (! $this->request->is('post')) {
            #The form is not submitted, so returns the form.
            return view('templates/header', ['title' => 'Create a news item'] )
                   .view('news/create')
                   . view('templates/footer');
        }
        $post  = $this->request->getPost(['title', 'body']);

        //Comprueba si los datos enviados pasaron las reglas de validación

        if (! $this->validateData($post, [
            'title' => 'required|max_length[255]|min_length[3]',
            'body'  => 'required|max_length[255]|min_length[10]',
        ] )) {
            # La validación falla, por lo que devuelve el formulario.
            return view('templates/header', ['title' => 'Create a news item'])
                . view('news/create')
                . view('templates/footer');
        }



        $model = model(NewsModel::class);

        $model->save([
            'title' => $post['title'],
            'slug'  => url_title($post['title'], '-', true),
            'body'  => $post['body'],
        ]);
        return view('templates/header', ['title' => 'Create a news item'])
        . view('news/success')
        . view('templates/footer');

    }





}