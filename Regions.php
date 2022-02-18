<?php

class Regions
{
    public $id = null;
    public $name = null;
    public $slug = null;

    public function insert()
    {
        $query = "
            INSERT INTO `regions`
                (`name`, `slug`)
                VALUES (?, ?)
        ";

        DB::insert($query, [$this->name, $this->slug]);
        $this->id = DB::lastInsertId();
    }

    public function update($newName, $newSlug)
    {
        $query= "
        UPDATE `regions`
        SET `name` = ?, `slug` = ?
        WHERE `id` = ?
        ";

        DB::update($query, [$newName, $newSlug, $this->id]);

        $this->name = $newName;
        $this->slug = $newSlug;
    }

    public function delete()
    {
        $query = "DELETE FROM `regions` WHERE `id` = ?";

        DB::delete($query, [$this->id]);
    }
}