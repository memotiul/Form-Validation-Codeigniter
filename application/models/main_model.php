
<?php
class main_model extends CI_Model{


function saverecords($data)
{
   return $this->db->insert('schools',$data);
    }
function getAllRecords()
        {
           $this->load->database();
            $q = $this->db->get("schools");
            if($q->num_rows() > 0)
            {
                return $q->result();
            }
            return array();
        }
}
?>