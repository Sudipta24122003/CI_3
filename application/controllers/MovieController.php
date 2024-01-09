<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MovieController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Load necessary models
        $this->load->model('Moviemodel');
    }

    public function MovieIndex() {
        // Load the view to get user input
        $this->load->view('input_view');
    }

    public function viewMovies() {
        // Fetch movies from the database using the model
        $data['movies'] = $this->Moviemodel->get();
        // Load the view to display movie list
        $this->load->view('movie_list', $data);
    }

    public function editMovie($m_id) {
        // Fetch a specific movie by ID using the model
        $data['movie'] = $this->Moviemodel->get($m_id);
        // Load the view to edit movie details
        $this->load->view('edit_movie', $data);
    }

    public function updateMovie($m_id) {
        // Validate form data (perform validation as needed)

        $data = array(
            'name' => $this->input->post('name'),
            'director' => $this->input->post('director'),
            'actor' => $this->input->post('actor'),
            'release_date' => $this->input->post('release_date')
        );

        if ($this->Moviemodel->updateMovie($m_id, $data)) {
            redirect('MovieController/viewMovies');
        } else {
            // Handle error scenario
        }
    }

    public function deleteMovie($m_id) {
        if ($this->Moviemodel->deleteMovie($m_id)) {
            redirect('MovieController/viewMovies');
        } else {
            // Handle error scenario
        }
    }

    public function addMovie() {
        // Validate form data (perform validation as needed)

        $data = array(
            'name' => $this->input->post('name'),
            'director' => $this->input->post('director'),
            'actor' => $this->input->post('actor'),
            'release_date' => $this->input->post('release_date')
        );

        if ($this->Moviemodel->addMovie($data)) {
            redirect('MovieController/viewMovies');
        } else {
            // Handle error scenario
        }
    }
}

