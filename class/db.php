<?php

namespace portal;

class DB
{
    private $host;
    private $dbname;
    private $username;
    private $password;
    private $port;
    private $connection;

    public function __construct($host, $dbname, $username, $password, $port = 3306)
    {
        $this->host = $host;
        $this->dbname = $dbname;
        $this->username = $username;
        $this->password = $password;
        $this->port = $port;

        try {
            $this->connection = new \PDO('mysql:host=' . $host . ';dbname=' . $dbname . ";port=" . $port, $username, $password);
            $dbh = null;

        } catch (\PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }

    public function getTemplatesRows() {
		
		$templatesItems = [];

        $sql = "SELECT * FROM templates";
        $query = $this->connection->query($sql);
        while ($row = $query->fetch()) {
            $templatesItems[] = [
                "id" => $row['id'],
                "title" => $row['title'],
                "description" => $row['description'],
				"owner" => $row['owner'],
				"date" => $row['created_at'],
            ];
        }
        return $templatesItems;
		
    }

    public function getSpecificTemplate($id)
    {
        $sql = "SELECT * FROM templates WHERE id = " . $id;
        try {
            $query = $this->connection->query($sql);
            $specificTemplate = $query->fetch(\PDO::FETCH_ASSOC);

            return $specificTemplate;

        } catch (\PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            return [];
        }
    }


    public function insertTemplate($title, $description, $owner)
    {
        $currentDateTime = date('Y-m-d H:i:s', time());
        $sql = "INSERT INTO templates(title, description, owner, created_at, updated_at)
            VALUE('" . $title . "','" . $description . "','" . $owner . "','" . $currentDateTime . "','" . $currentDateTime . "')";

        try {
            $this->connection->exec($sql);

            return true;

        } catch (\PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            return false;
        }

    }


    public function deleteTemplate($id)
    {
        $sql = "DELETE FROM templates WHERE id = ".$id;
        try {
            $this->connection->exec($sql);
            return true;
        } catch (\PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            return false;
        }
    }

    public function updateTemplate($title, $description, $owner, $id)
    {
        $currentDateTime = date('Y-m-d H:i:s', time());
        $sql = "UPDATE templates SET title = '".$title."', description = '".$description."', owner = '".$owner."', updated_at = '".$currentDateTime."' WHERE id = ".$id;

        try {
            $this->connection->exec($sql);

            return true;

        } catch (\PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            return false;
        }

    }

    public function login($username, $password)
    {
        $sql = "SELECT COUNT(id) AS is_admin FROM user WHERE username = '".$username."' AND password = '".sha1($password)."'";

        try {
            $query = $this->connection->query($sql);
            $isAdmin = $query->fetch(\PDO::FETCH_ASSOC);

            if($isAdmin['is_admin'] == 1) {
                return true;
            } else {
                return false;
            }

        } catch (\PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            return false;
        }
    }


}

?>