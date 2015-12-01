<?php

require_once 'BaseModel.php';

class Park extends BaseModel
{
    // set table for national parks
    protected static $table = 'parks';

    protected function insert()
    {
        $table = static::$table;

        $query = "INSERT INTO $table (name, location, date_established, area_in_acres, description)
                    VALUES (:name, :location,   :date_established, :area_in_acres, :description);";

        $stmt = self::$dbc->prepare($query);
        $stmt->bindValue(':name', $this->name,  PDO::PARAM_STR);
        $stmt->bindValue(':location',  $this->location,   PDO::PARAM_STR);
        $stmt->bindValue(':date_established',   $this->date_established,    PDO::PARAM_STR);
        $stmt->bindValue(':area_in_acres',   $this->area_in_acres,    PDO::PARAM_STR);
        $stmt->bindValue(':description',   $this->description,    PDO::PARAM_STR);
        $stmt->execute();
    }

    protected function update()
    {
        $table = static::$table;

        $query = "UPDATE $table SET
                    name                = :name,
                    location            = :location,
                    description         = :description,
                    area_in_acres       = :area_in_acres,
                    date_established    = :date_established
                    WHERE id = :id";

        // @TODO: Use prepared statements to ensure data security
        $stmt = self::$dbc->prepare($query);
        $stmt->bindValue(':name',               $this->name,                PDO::PARAM_STR);
        $stmt->bindValue(':location',           $this->location,            PDO::PARAM_STR);
        $stmt->bindValue(':area_in_acres',      $this->area_in_acres,       PDO::PARAM_STR);
        $stmt->bindValue(':description',        $this->description,         PDO::PARAM_STR);
        $stmt->bindValue(':date_established',   $this->date_established,    PDO::PARAM_STR);
        $stmt->bindValue(':id',                 $this->id,                  PDO::PARAM_INT);
        $stmt->execute();
    }
}
