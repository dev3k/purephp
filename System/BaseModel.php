<?php

namespace System;


class BaseModel
{
    public Database $db;
    public string $table = 'dual';

    public function __construct()
    {
        $this->db = new Database($GLOBALS['config']['database']);
    }

    public function get(): array
    {
        return $this->db->query("select * from {$this->table}")->fetchAll();
    }

    public function query(string $query, array $params = [])
    {
        return $this->db->query($query, $params);
    }

    public function findOne(int $id): array
    {
        return $this->db->query("select * from {$this->table} WHERE id = :id", ['id' => $id])->fetchOrFail();
    }

    public function delete(int $id): void
    {
        //to check if record exist
        $this->findOne($id);

        $this->db->query("delete from {$this->table} where id = :id", [
            'id' => $_POST['id']
        ]);
    }

    public function create(array $attributes = []): void
    {
        $columns = array_keys($attributes);
        $dbColumns = implode(',', $columns);
        $dbValues = implode(',:', $columns);
        $this->db->query("insert into {$this->table} ({$dbColumns}) VALUES (:{$dbValues})", $attributes);
    }

    public function update(int $id, $attributes = []): void
    {

        $this->findOne($id);
        $columns = array_keys($attributes);
        $fields = [];
        foreach ($columns as $column) {
            $fields[] = $column . '=:' . $column;
        }
        $updateFields = implode(',',$fields);
        $this->db->query("update {$this->table} set {$updateFields} where id=:id", array_merge($attributes,['id'=>$id]));

    }
}
