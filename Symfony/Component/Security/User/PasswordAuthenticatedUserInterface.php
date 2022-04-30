<?php


interface PasswordAuthenticatedUserInterface
{
   public function  getPassword();
   public function  setPassword( $password);
}