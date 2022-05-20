<?php

interface Storage
{
   public function memory();
   public function disk();
   public function network();
}