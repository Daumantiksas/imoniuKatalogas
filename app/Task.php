<?php 
namespace MB;
use PDO;
use PDOException;

class Task{
    protected $pdo;
    private $id;
    private $name;
    private $pvm_code;
    private $adress;
    private $phone;
    private $email;
    private $work;
    private $boss;

    public function __construct($pdo){
        $this->pdo =$pdo;
    }
    
        
    public function createTask($task){
        $this->id = $task['id'];
        $this->name = $task['name'];
        $this->pvm_code = $task['pvm_code'];
        $this->adress = $task['adress'];
        $this->phone = $task['phone'];
        $this->email = $task['email'];
        $this->work = $task['work'];
        $this->boss = $task['boss'];
        $this->insertTask();                        // <------------- baigem cia
    }

    private function insertTask(){
        try {
            $query = "INSERT INTO `Imones` (`id`, `name`, `pvm_code`, `adress`, `phone`, `email`, `work`, `boss`) 
            VALUES (:id, :name, :pvm_code, :adress, :phone, :email, :work, :boss)";
            $stmt = $this->pdo->prepare($query);
            $stmt->bindParam(':id', $this->id, PDO::PARAM_STR);
            $stmt->bindParam(':name', $this->name, PDO::PARAM_STR);
            $stmt->bindParam(':pvm_code', $this->pvm_code, PDO::PARAM_STR);
            $stmt->bindParam(':adress', $this->adress, PDO::PARAM_STR);
            $stmt->bindParam(':phone', $this->phone, PDO::PARAM_STR);
            $stmt->bindParam(':email', $this->email, PDO::PARAM_STR);
            $stmt->bindParam(':work', $this->work, PDO::PARAM_STR);
            $stmt->bindParam(':boss', $this->boss, PDO::PARAM_STR);
            $stmt->execute();
            header('Location:/');
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
    public function allTasks(){
        $statement = $this->pdo->prepare('SELECT * from Imones');
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);  //grazina kaip asociatyvu masyva
    }

//    public function deleteTask($id){
//        $statement = $this->pdo->prepare("DELETE FROM `tasks` WHERE id=$id");
//        $statement->execute();
//        header('Location:/');
//        return $statement;
//    }

//    public function setComplete($id)
//    {
//        $this->status = 1;
//        try {
//            $query = "UPDATE tasks SET `status`=:status WHERE id=:id";
//            $stmt = $this->pdo->prepare($query);
//            $stmt->bindParam(':status', $this->status, PDO::PARAM_STR);
//            $stmt->bindParam(':id', $id, PDO::PARAM_STR);
//            $stmt->execute();
//            header('Location:/');
//        } catch (\PDOException $e) {
//            echo $e->getMessage();
//        }
//    }
}
?>