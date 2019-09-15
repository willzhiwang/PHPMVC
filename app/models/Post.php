<?php
/*
 * This is sample file for model
 * You can create another model in this folder
 */
    class Post{
        private  $db;
        public function __construct()
        {
            $this->db = new Database;
        }
        public function getPosts(){
            $this->db->query("SELECT * FROM posts");
            return $this->db->resultSet();
        }
    }