<?php

require_once "../View/ViewAddTodoList.php";
require_once "../BusinessLogic/ShowTodoList.php";
require_once "../BusinessLogic/AddTodoList.php";

addTodoList("Mercys");
addTodoList("Putra");
addTodoList("Thona");

viewAddTodoList();

showTodoList();

viewAddTodoList();

showTodoList();