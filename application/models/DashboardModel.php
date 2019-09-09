<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: dipan
 * Date: 14-08-2017
 * Time: 23:29
 */
class DashboardModel extends CI_Model{

    public function addVehicle($vFormData){
        if($this->db->insert('product', $vFormData)){
            $lastDataId = $this->db->insert_id();
            return $lastDataId;
        } else {
            return false;
        }

    }
    public function insert_leadImg($leadImgData){
        if($this->db->insert('images', $leadImgData)){
            return true;
        } else {
            return false;
        }
    }
    public function insert_otherImg($dataInfo){
        if($this->db->insert('images', $dataInfo)){
            return true;
        } else {
            return false;
        }
    }
    public function editVehicle($vFormData){ 
        $this->db->where('Id', $vFormData['Id']);
        if($this->db->update('product', $vFormData)){
            $lastDataId = $this->db->insert_id();

            return $lastDataId;
        } else {
            return false;
        }

    }
    public function selectAll()
      {
              //data is retrive from this query
              $query = $this->db->get('product');
              return $query;
      }
    public function editid($pr_id)
	{  
        $query = $this->db->query("select * from product where Id = $pr_id");
	    $result=$query->result();
        return $result;
	}
    /*public function editimg($pr_id)
    {
       $query = $this->db->query("select * from images where Prod_Id = $pr_id AND Status=1 AND Lead=0");
	    $result=$query->result();
        return $result;
    }*/
    /*public function editleadimg($pr_id)
    {
       $query = $this->db->query("select * from images where Prod_Id = $pr_id AND Status=1 AND Lead=1");
	    $result=$query->result();
        return $result;
    }*/
    public function remove($pr_id)
	{
	        $this->db->select('*');
	        $this->db->where('Id', $pr_id);        
	        $query = $this->db->get('product');
	        $data = $query->result_array();
	        return $query;
	}
    public function removeStat($data, $pr_id, $status)
	{
	    extract($data);
	    if($status == 0){
	       $this->db->where('Id', $pr_id);
	       $this->db->update($table_name, array('Status' => 1)); 
	       return true;
	    }
	    else {
	       $this->db->where('Id', $pr_id);  
	       $this->db->update($table_name, array('Status' => 0, 'Recommended' => 0)); 
	       return true;
	    }
	}
    public function imagecount($pr_id)
	{
	    $query = $this->db->query("SELECT * FROM images where Lead =1 and Prod_Id='.$pr_id.'");
        $row_count = $query->num_rows();
        return $row_count;
	}
    public function getimage()
	{
	    $pr_id = $this->uri->segment('3'); 
	    $query = $this->db->query("select * from images where Lead =1 and Prod_Id='.$pr_id.'");
	    $result=$query->result();
	    return $result;
	}
	public function getLedImage($pr_id)
	{
	    $query = $this->db->query("select * from images where Lead =1 and Prod_Id='.$pr_id.'");
	    $result=$query->result();
	    return $result;
	}

	public function getImageByProductId($prod_id)
		{ 
		    $query = $this->db->query("select * from images where Lead =0 and Prod_Id='.$prod_id.'");
		    $result=$query->result();
		    return $result;
		}
	public function deleteImageById($img_id)
		{ 
		    $query = $this->db->query("DELETE FROM images WHERE id=$img_id");
		    return $query;
		}
   
    public function selectrecomm()
    {
        $query = $this->db->query("SELECT * FROM product P where P.Status=1 AND P.Recommended=1");
        $result = $query->result();
	    return $result;
         //echo "<pre>";             
        //print_r($result);
        //exit; 
    }
    public function record_count()
    {
        $query = $this->db->query("SELECT * FROM product P where P.Status=1 AND P.Recommended=1");
        $row_count = $query->num_rows();
        return $row_count;
    }
    public function rmStatus($data, $id, $status)
    {       
        extract($data);
        if($status == 1){
	       $this->db->where('Id', $id);
	       $this->db->update($table_name, array('Recommended' => 0)); 
	       return true;
	    }
	    else {	       
	       return false;
	    }
    }
    public function addStatus($id, $recomm)
    {  
        if($recomm == 0){
	       $query = $this->db->query("UPDATE product P set P.Recommended=1 where P.Status=1 AND P.Id=$id");
	       $lastDataId = $this->db->insert_id();
            return $lastDataId;
        } else {
            return false;
        }
    }
    public function addnotice($vFormData){        
        if($this->db->insert('notice', $vFormData)){
            $lastDataId = $this->db->insert_id();
            return $lastDataId;
        } else {
            return false;
        }
    }
    public function notice_count()
    {
        $query = $this->db->query("SELECT * FROM notice");
        $row_count = $query->num_rows();
        return $row_count;
    }
    public function get_notice()
      {
        $query = $this->db->query("select * from notice");
	    $result=$query->result();
	    return $result;
      }
    public function edit_notice($id)
	{  
        $query = $this->db->query("select * from notice where id = $id");
	    $result=$query->result();
        return $result;
	}
    public function update_Vehicle($vFormData){
        $this->db->where('id', $vFormData['id']);
        if($this->db->update('notice', $vFormData)){
            return true;
        } else {
            return false;
        }

    }
    public function remove_notice($id){
        $this->db->where('id', $id);
        $result=$this->db->delete('notice');
        return $result;
    }
    public function allVehicle(){
        $query = $this->db->query("select * from product");
	    $row_count = $query->num_rows();
        return $row_count;
    }
    public function countAll(){
        $count = array();
        $query_category = $this->db->query("select * from `category`");
        $row_cat = $query_category->num_rows();
        $query_prod = $this->db->query("select * from `product`");
        $row_prod = $query_prod->num_rows();
        $query_recomm = $this->db->query("SELECT * FROM product P where P.Status=1 AND P.Recommended=1");
        $row_recomm = $query_recomm->num_rows();
        $query_inactive = $this->db->query("SELECT * FROM product P where P.Status=0");
        $row_inactive = $query_inactive->num_rows();
        $query_img = $this->db->query("SELECT * FROM `images`");
        $row_img = $query_img->num_rows();
        $query_allNotice = $this->db->query("SELECT * FROM `notice`");
        $row_allNotice = $query_allNotice->num_rows();
        
        $count =array(
                'allCategory' => $row_cat,
                'allProd' => $row_prod,
                'allRecomm' => $row_recomm,
                'allinactive' => $row_inactive,
                'allImg' => $row_img,
                'allNotice' => $row_allNotice
        );
        return $count;			
    }
}



















