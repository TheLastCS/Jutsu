<?php
    public class UserModel
    {
        private $id;
        public function get_id() { return $this->id; }
        public function set_id($id) { $this->id = $id; }
        private $fname;
        public function get_fname() { return $this->fname; }
        public function set_fname($fname) { $this->fname = $fname; }
        private $lname;
        public function get_lname() { return $this->lname; }
        public function set_lname($lname) { $this->lname = $lname; }
        private $email;
        public function get_email() { return $this->email; }
        public function set_email($email) { $this->email = $email; }

        public function __construct($id, $fname, $lname, $email)
        {
            $this->id = $id;
            $this->fname   = $fname;
            $this->lname = $lname;
            $this->email   = $email;
        }
    }
?>