<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class voix_model  extends CI_Model {

        function get_equipe($id) {
			  $request="Select * from equipe where idEquipe='%s'";
			  $request=sprintf($request,$id);
			  $query= $this->db->query($request);
			  $result= $query->row_array();
			  return $result;
		}
		function get_all_matchs(){
            $query= $this->db->query('Select * from game');
            $data=array();
             foreach ($query->result_array() as $row){
                $data[]=$row;
             }
             return $data;
        } 
		function get_statistique($id,$m) {
			  $request="Select * from final where idEquipe='%s' and idMatch='%s' order by event";
			  $request=sprintf($request,$id,$m);
			  $query= $this->db->query($request);
			  $data=array();
             foreach ($query->result_array() as $row){
                $data[]=$row;
             }
             return $data;
			  
		}	
	}
?>
