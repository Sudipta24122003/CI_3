<?php


class Moviemodel extends CI_Model {

    public function getMovies() {
        return $this->db->get('movie')->result();
    }

    public function getMovieById($m_id) {
        $query = $this->db->get_where('movie', array('m_id' => $m_id));
        return $query->row();
    }

    public function updateMovie($m_id, $data) {
        $this->db->where('m_id', $m_id);
        $this->db->update('movie', $data);
        return ($this->db->affected_rows() > 0);
    }

    public function deleteMovie($m_id) {
        $this->db->where('m_id', $m_id);
        $this->db->delete('movie');
        return ($this->db->affected_rows() > 0);
    }

    public function addMovie($data) {
        $this->db->insert('movie', $data);
        return ($this->db->affected_rows() > 0);
    }
    public function addfile($url,$hash) {
        $data = array(
            'file_url' => $url,
            'hash'=>$hash
        );

        $this->db->insert('upload', $data);
        return ($this->db->affected_rows() > 0); 
       // return ($this->db->affected_rows() > 0);
    }
    public function getfileById($id) {
        $query = $this->db->get_where('upload', array('id' => $id));
        return $query->row();
    }
    public function checkhash($hash)
    {
        if ($hash ) {
            $query="SELECT * FROM  upload  WHERE upload.hash='$hash'";
            $results= $this->db->query($query);
            $arr=$results->result_array();
            
            if(!empty($arr))
            return true;

            return false;

        }else{
            return false;
        }
    }
}

