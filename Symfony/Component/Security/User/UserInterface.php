<?php


interface UserInterface
{
  public function getUserIdentifier();
  public function getRoles();
  public function eraseCredentials();
  public function getRole();



}