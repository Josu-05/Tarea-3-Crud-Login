<?php

namespace App\Controllers;

class Peliculas extends BaseController
{
    public function index()
    {
        if (!session()->get('logged')) {
            return redirect()->to('/');
        }

        $peliculas = session()->get('peliculas') ?? [];

        return view('peliculas/index', [
            'peliculas' => $peliculas
        ]);
    }

    public function __construct()
    {
        if (!session()->get('logged'))
        {
            header('Location: /');
            exit;
        }
    }

    public function crear()
    {
        if (!session()->get('logged')) {
            return redirect()->to('/');
        }

        return view('peliculas/crear');
    }

    public function guardar()
    {
        $peliculas = session()->get('peliculas') ?? [];

        $peliculas[] = [
            'id' => count($peliculas) + 1,
            'titulo' => $this->request->getPost('titulo'),
            'genero' => $this->request->getPost('genero'),
            'anio' => $this->request->getPost('anio')
        ];

        session()->set('peliculas', $peliculas);

        return redirect()->to('/peliculas');
    }

    public function eliminar($id)
    {
        $peliculas = session()->get('peliculas') ?? [];

        foreach ($peliculas as $i => $pelicula)
        {
            if ($pelicula['id'] == $id)
            {
                unset($peliculas[$i]);
            }
        }

        session()->set('peliculas', $peliculas);

        return redirect()->to('/peliculas');
    }

    public function editar($id)
    {
        $peliculas = session()->get('peliculas') ?? [];

        foreach ($peliculas as $pelicula)
        {
            if ($pelicula['id'] == $id)
            {
                return view('peliculas/editar', [
                    'pelicula' => $pelicula
                ]);
            }
        }

        return redirect()->to('/peliculas');
    }

    public function actualizar($id)
    {
        $peliculas = session()->get('peliculas') ?? [];

        foreach ($peliculas as &$pelicula)
        {
            if ($pelicula['id'] == $id)
            {
                $pelicula['titulo'] = $this->request->getPost('titulo');
                $pelicula['genero'] = $this->request->getPost('genero');
                $pelicula['anio'] = $this->request->getPost('anio');
            }
        }

        session()->set('peliculas', $peliculas);

        return redirect()->to('/peliculas');
    }
}