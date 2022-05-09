<?php
use App\Database\Migration;
require "./App/Database/require.php";
 
(new Migration)->table([$table->name("usuarios"),

    $table->id(),
    $table->string('nome',100),  
    $table->string('sobrenome', 100),
    $table->string('email',120),
    $table->string('password',100), 
    $table->string('teste',100),    
    $table->string('access',20)->default('user'),
    $table->int('idade'),    
    $table->date_created(),
    $table->date_edited()

],$table->result());