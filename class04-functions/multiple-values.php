<?php
function myInfo(){
    return [
        'name'=>"A",
        'bg' => "B+",
        'country'=>"Bangladesh",
        'phone'=>"1234",
        'email'=>"a@gmail.com",
    ];
}

// var_dump(myInfo());
list('name'=>$n,'phone'=>$phone,'email'=>$em) = myInfo();
echo $phone;
