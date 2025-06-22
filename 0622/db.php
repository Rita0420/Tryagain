<?php
class DB{
    private $pdo;
    private $dsn="mysql:host=localhost;dbname=store;charset=utf8";
    private $table;

    public function __construct($table)
    {
        $this->table=$table;
        $this->pdo=new PDO($this->dsn,'root','');
    }

    //把資料型態轉換成PHP的array
    function array2sql($array){
        $tmp=[];
        foreach($array as $key => $value){
            $tmp[]="`$key`='$value'";
        }
        return $tmp;
    }

    function all($array=null,$str=null){
        $sql="select * from $this->table";
        if (is_array($array)) {
            $tmp=$this->array2sql($array);
            $sql=$sql." where ".join(" and ",$tmp);
        }else{
            $sql .=$array;
        }
        $sql .=$str;

        $row=$this->pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        return $row;
    }

    function find($id){
        $sql="select * from $this->table ";
        if(is_array($id)){
            $tmp=$this->array2sql($id);
            $sql=$sql." where ".join(" and ",$tmp);
        }else{
            $sql=$sql." where id='$id'";
        }
        $row=$this->pdo->query($sql)->fetch(PDO::FETCH_ASSOC);

        return $row;
    }

    function save($data){
        if(!isset($data['id'])){
            $key=array_keys($data);
            $sql="insert into $this->table";
        }
    }
}

function dd($data){
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}

$Items=new DB('items');
dd($Items->find(['name'=>'豆漿']));