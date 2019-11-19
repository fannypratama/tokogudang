<?php defined('BASEPATH') or exit('No direct script access allowed');

class Menu_model extends CI_Model
{
    private $_table = "user_sub_menu";
    public $id;
    public $menu_id;
    public $title;
    public $url;
    public $icon;
    public $is_active;

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id" => $id])->row();
    }
    public function getSubMenu()
    {
        $query = "SELECT `user_sub_menu`.*,`user_menu`.`menu`
                    FROM `user_sub_menu` JOIN `user_menu`
                    ON `user_sub_menu`.`menu_id` = `user_menu`.`id`";

        return  $this->db->query($query)->result_array();
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id = $post["id"];
        $this->menu_id = $post["menu_id"];
        $this->title = $post["title"];
        $this->url = $post["url"];
        $this->icon = $post["icon"];
        $this->is_active = $post["is_active"];
        $this->db->update($this->_table, $this, array('id' => $post['id']));
    }
}
