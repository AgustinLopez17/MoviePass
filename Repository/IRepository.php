<?php namespace Repository;
use model\User;
interface IRepository {

    function Add($value);
    function GetAll();
    function Delete($value);
    
}