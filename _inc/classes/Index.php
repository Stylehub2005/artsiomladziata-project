<?php
class Index extends Database{
    private $db;

    public function __construct(){
        $this->db = $this->db_connection();
    }

    function get_singles() {
        $singles = $this->db->query("SELECT * FROM banner");
        return $singles;
    }

    function display_singles(){
        $singles = $this->get_singles()->fetchAll();
        $out = '';
        foreach ($singles as $single){
            $out .= '<h1>'.$single->title.'</h1>';
            $out .= '<p>'.$single->text.'</p>';
        }
        return $out;
    }

}
?>
