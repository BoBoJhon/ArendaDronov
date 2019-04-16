  <?php
//header('Content-type:application/JSON;charset=utf-8');

$link = mysqli_connect('127.0.0.1', 'root', '', 'babyshev'); //подключение к базе данных

    $uid="1"; //логин
    $key='qwerty'; //пароль

if($_GET['uid']==$uid and $key==$_GET['key']) {
    $table=$_GET['table'];
    $query=$_GET['query']; 

    if($_GET['where']) {
        $where = $_GET['where'];
    }

    if($_GET['values']) {
        $values=$_GET['values'];
    }
    if($_GET['fields']) {       //поля базы данных 
        $fields=$_GET['fields'];
    }
    else {
        $fields='*';
    }

    if($_GET['limit']) {      //выбор определённого количества данных
        $limit=$_GET['limit'];
    }

    $data = [            //сбор ранее созданных данных
        'table'=>$table,
        'values'=>$values,
        'fields'=>$fields,
        'where'=>$where,
        'limit'=>$limit,
    ];
    switch($query){
        case 'insert': insert($data); break;
        case 'select': select($data); break;
        case 'update': update($data); break;
        case 'delete': delete($data); break;
    }
}

insert($data);

function insert($data) {
    global $link;
    $sql = 'INSERT INTO'.$data['table'].'('.$data['fields'].') VALUES ('.$data['values'].')';
    $link->query($sql);
}

function select($data){
    global $link;
    $sql='SELECT '.$data['fields'].' FROM '.$data['table'];
    if($data['where']){
        $sql=$sql . ' WHERE '. $data['where'];
    }
    if($data['limit']){
        $sql = $sql . ' LIMIT '.$data['limit'];
    }
    $res = $link->query($sql);
    while($row = $res->fetch_assoc()){
        $results[]=$row;
    }

    echo json_encode($results, JSON_UNESCAPED_UNICODE);

}

function delete($data){
    global $link;
    $sql = 'DELETE FROM'.$data['table'];
    if($data['where']){
        $sql = $sql.' WHERE '.$data['where'];
    }

    $link->query($sql);

    echo $sql;
}

function update($data){
    global $link;
$values = explode(',',$data['values']);
$fields = explode(',',$data['fields']);
foreach ($fields as $key => $value){
    $update_values = $update_values.' '.$value.'='.$values[$key].',';
}
$update_values = substr($update_values,0,-1);

$sql = 'UPDATE'.$data['table'].' SET '.$update_values.' WHERE '.$data['where'];

$link->query($sql);

}

?>