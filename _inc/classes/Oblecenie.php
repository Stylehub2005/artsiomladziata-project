<?php
class Oblecenie extends Database{
    private $db;

    public function __construct(){
        $this->db = $this->db_connection();
    }

    function get_clients(){

        $clients = $this->db->query("SELECT * FROM klient_sales");
        return $clients;
    }

    function display_clients(){
        $clients = $this->get_clients()->fetchAll();
        $out = '';
        foreach ($clients as $client){
            $out .= '<tr>';
            $out .= '<th>'.$client->ID.'</th>';
            $out .= '<th>'.$client->Meno.'</th>';
            $out .= '<th>'.$client->Vynaložené.'</th>';
            $out .= '<th>'.$client->Zľava.'</th>';
            $out .= '</tr>';
        }
        return $out;
    }

    function get_shoes(){

        $shoes = $this->db->query("SELECT * FROM shoes1");
        return $shoes;
    }

    function display_sales_shoes(){
        $sales_shoes = $this->get_sales_shoes()->fetchAll();
        $out = '';
        foreach ($sales_shoes as $sales_shoe){
            $out .= '<div class="card">';
            $out .= '<img src="'.$sales_shoe->IMG.'" alt="" img>';
            $out .= '<div class="card-content">';
            $out .= '<p>'.$sales_shoe->Name.'</p>';
            $out .= '<p>'.$sales_shoe->Price.'</p>';
            $out .= '</div>';
            $out .= '</div>';
        }
        return $out;
    }

    function get_shoes2(){

        $shoes2= $this->db->query("SELECT * FROM shoes2");
        return $shoes2;
    }

    function display_shoes2(){
        $shoes2 = $this->get_shoes2()->fetchAll();
        $out = '';
        foreach ($shoes2 as $shoe2){
            $out .= '<div class="card">';
            $out .= '<img src="'.$shoe2->IMG.'" alt="" img>';
            $out .= '<div class="card-content">';
            $out .= '<p>'.$shoe2->Name.'</p>';
            $out .= '<p>'.$shoe2->Price.'</p>';
            $out .= '</div>';
            $out .= '</div>';
        }
        return $out;
    }

    function get_sales_shoes(){

        $sales_shoes = $this->db->query("SELECT * FROM rozsah_sale");
        return $sales_shoes;
    }

    function display_shoes(){
        $shoes = $this->get_shoes()->fetchAll();
        $out = '';
        foreach ($shoes as $shoe){
            $out .= '<div class="card">';
            $out .= '<img src="'.$shoe->IMG.'" alt="" img>';
            $out .= '<div class="card-content">';
            $out .= '<p>'.$shoe->Name.'</p>';
            $out .= '<p>'.$shoe->Price.'</p>';
            $out .= '</div>';
            $out .= '</div>';
        }
        return $out;
    }
}
?>
