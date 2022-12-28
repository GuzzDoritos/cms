<?php

/**
 * Handling articles n such
 */

class Article{
    public $id = null;
    public $publicationDate = null;
    public $title = null;
    public $summary = null;
    public $content = null;

    public function __construct($data=array()) {
        if (isset($data['id']))
            $this->id = (int) $data['id'];
        if (isset($data['publicationDate']))
            $this->publicationDate = (int) $data['publicationDate'];
        if (isset($data['title']))
            $this->title = preg_replace ( "/[^\.\,\-\_\'\"\@\?\!\:\$ a-zA-Z0-9()]/", "", $data['title'] );
        if (isset($data['summary']))
            $this->summary = preg_replace ( "/[^\.\,\-\_\'\"\@\?\!\:\$ a-zA-Z0-9()]/", "", $data['summary'] );
        if (isset($data['content']))
            $this->content = $data['content'];
    }

    public function storeFormValues ($params) {

        $this->__construct($params);

        if (isset($params['publicationDate'])) {
            $publicationDate = explode('-', $params['publicationDate']);

            if (count($publicationDate) == 3) {
                list($y, $m, $d) = $publicationDate;
                $this->publicationDate = mktime(0, 0, 0, $m, $d, $y);
            }
        }
    }

    public static function getById ($id) {
        $conn = new PDO(DB_DSN, DB_USERNAME, DB_PASSWORD);
        $sql = "SELECT *, UNIX_TIMESTAMP(publicationDate) AS publicationDate FROM articles WHERE id = :id"; 
    }

}

?>