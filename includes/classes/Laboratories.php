<?php 
require_once 'Crud.php';

Class Laboratories extends Crud{

    protected $table = "laboratories";
    private $laboratory;

    public function getLaboratory()
    {
        return $this->laboratory;
    }

    public function setLaboratory($laboratory)
    {
        $this->laboratory = $laboratory;
    }

    public function insert()
    {
        $sql = "INSERT INTO $this->table (lab_name, created_at) VALUES (:laboratory, CURRENT_TIMESTAMP)";
        $stmt = DB::prepare($sql);
        $stmt->bindParam(':laboratory', $this->laboratory);
        return $stmt->execute();
    }

    public function update($id)
    {
        $sql = "UPDATE $this->table SET lab_name = :laboratory, updated_at = CURRENT_TIMESTAMP WHERE lab_id = :id";
        $stmt = DB::prepare($sql);
        $stmt->bindParam(':laboratory', $this->laboratory);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();

    }

}