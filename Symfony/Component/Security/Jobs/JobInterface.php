<?php


interface JobInterface
{
  public function getJobName();
  public function getJobDescription();
  public function getExpiryDate();
}