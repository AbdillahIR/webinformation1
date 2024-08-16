<?php 
class crud{
    public static function conect()
    {
        try {
            $con=new PDO('mysql:localhost=host; dbname=crudsystem','root','');
            return $con;
        } catch (PDOException $error1) {
            echo 'Something went wrong, it was not possible ro connect you to database'.$error1->getMessage();
        } catch (Exception2 $error2){
            echo 'Generic Error!'.$error2->getMessage();
        }
    }
    public static function Selectdata()
    {
        $data=array();
        $p=crud::conect()->prepare('SELECT * FROM crudtable');
        $p->execute();
        $data=$p->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }
    public static function delete($id)
    {
        $p=crud::conect()->prepare('DELETE FROM crudtable WHERE id=:id');
        $p->bindValue(':id',$id);
        $p->execute();
    }
    public static function update($id)
    {
        $p=crud::conect()->prepare('UPDATE crudtable SET name=:n,lastName=:l,email=:e,pass=:p');
        $p->bindValue(':id',$id);
        $p->execute();
    }
}
?>