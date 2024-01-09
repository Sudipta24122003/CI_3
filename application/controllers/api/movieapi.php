<?php
defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . 'libraries/RestController.php';
require APPPATH . 'libraries/Format.php';

use chriskacerguis\RestServer\RestController;

class movieapi extends RestController
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('moviemodel');
    }

    public function movies_get()
    {
        echo $this->input->get_request_header("X-API-KEY");
        $movies = $this->moviemodel->getMovies();
        if ($movies) {
            $this->response($movies, 200);
        } else {
            $this->response(NULL, 404);
        }
    }

    public function movie_get($m_id)
    {
        $movie = $this->moviemodel->getMovieById($m_id);
        if ($movie) {
            $this->response($movie, 200);
        } else {
            $this->response(NULL, 404);
        }
    }

    public function movie_put($m_id)
    {
        $data = $this->put();
        if ($this->moviemodel->updateMovie($m_id, $data)) {
            $this->response(['message' => 'Movie updated successfully'], 200);
        } else {
            $this->response(['message' => 'Failed to update movie'], 404);
        }
    }

    public function movie_delete($m_id)
    {
        if ($this->moviemodel->deleteMovie($m_id)) {
            $this->response(['message' => 'Movie deleted successfully'], 200);
        } else {
            $this->response(['message' => 'Failed to delete movie'], 404);
        }
    }

    public function movies_post()
    {
        $data = $this->post();
        if ($this->moviemodel->addMovie($data)) {
            $this->response(['message' => 'Movie added successfully'], 201);
        } else {
            $this->response(['message' => 'Failed to add movie'], 404);
        }
    }
    public function do_upload_post()
    {
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['encrypt_name'] = TRUE;
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('userfile')) {
            $error = array('error' => $this->upload->display_errors());
            $this->response($error);
        } else {
            $data = array('upload_data' => $this->upload->data());
            $url = base_url('/uploads/' . $data['upload_data']["file_name"]);
            $hash = hash_file('sha1', $url);
            $isExist = $this->moviemodel->checkhash($hash);
            if (!$isExist) {
                $this->moviemodel->addfile($url, $hash);
                $data['status'] = "success";
                $this->response(['message' => 'Succesfully added', 'url' => $url]);

            } else {
                unlink('./uploads/' . $data['upload_data']['file_name']);

                $this->response(['message' => 'file exist']);
            }
        }
    }
}
