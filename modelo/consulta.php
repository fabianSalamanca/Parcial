<?php
class consultas{
      
 public function buscarusuarios($customerName){
        $rows= null;
        $modelo=new conexion();
        $conexion= $modelo->get_conexion();
        $sql="select cus.customerName, ord.orderNumber
             FROM orders ord
             INNER JOIN customers cus
             ON ord.customerNumber=cus.customerNumber
             WHERE (cus.customerName = :customerName)";
        $statement= $conexion->prepare($sql);
        $statement->bindParam(":customerName",$customerName);
        $statement->execute();
        while($result=$statement->fetch()){
            $rows[]=$result;
        }
        return $rows;
 }


 public function mayorcompra(){
        $rows= null;
        $modelo=new conexion();
        $conexion= $modelo->get_conexion();
        $sql="select max(pay.amount),cus.customerName
              from customers cus
              INNER JOIN payments pay
              on pay.customerNumber = cus.customerNumber";
        $statement= $conexion->prepare($sql);
        $statement->execute();
        while($result=$statement->fetch()){
            $rows[]=$result;
        }
        return $rows;
 }
  public function registrarUsuario(){
        $rows= null;
        $modelo=new conexion();
        $conexion= $modelo->get_conexion();
        $sql="select * from customers";
        $statement= $conexion->prepare($sql);
        $statement->execute();
        while($result=$statement->fetch()){
            $rows[]=$result;
        }
        return $rows;
    }
}
?>