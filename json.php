<?php
//Criado por Anderson Ismael
//06 de abril de 2019

function json($data){
  header('Content-Type: application/json');
  die(json_encode($data));
}
