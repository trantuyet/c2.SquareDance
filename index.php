<?php
include_once 'Dancer.php';

 $LIMIT = 10;
$dancer1 = new Dancer("Lam","Male");
$dancer2 = new Dancer("Lam1","male");
$dancer3 = new Dancer("Lam2","mAle");
$dancer4 = new Dancer("Lam3","male");
$dancer5 = new Dancer("Chị Đuck","FEmale");
$dancer6 = new Dancer("Chị Đuck1","female");
$dancer7 = new Dancer("Chị Đuck2","fEmale");
$dancer8 = new Dancer("Chị Đuck3","female");
$dancer9 = new Dancer("Chị Đuck4","female");
$dancer10 = new Dancer("Chị Đuck5","female");
$female = new SplQueue();
$male = new SplQueue();

for ($c = 1 ; $c <= $LIMIT ; $c++) {
    $dancer = ${'dancer'.$c};
    if (strtoupper($dancer->gender) == "MALE" ) {
        $female->enqueue($dancer);
    } else {
        $male->enqueue($dancer);

    }
}

while (!$female->isEmpty() && !$male->isEmpty()) {
    $female->dequeue();
    $male->dequeue();
    if ($female->isEmpty() && $male->isEmpty()) {
        echo "Không còn 1 ai, không phải đợi";
    } else {
        if ($female->isEmpty()) {
            echo "Nam phải đợi! ";
        }
        if ($male->isEmpty()) {
            echo "Nữ phải đợi! ";
        }
    }

}

print_r($female->dequeue());