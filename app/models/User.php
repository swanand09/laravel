<?php
class User extends Eloquent {
    protected $fillable = array('first_name', 'last_name', 'email');
}