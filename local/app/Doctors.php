<?php 
use Illuminate\Foundation\Auth\User as Authenticatable;

class Doctors extends Authenticatable
{
	protected $table = "doctors";
	protected $filltable = ['ma_bac_si']

}


?>