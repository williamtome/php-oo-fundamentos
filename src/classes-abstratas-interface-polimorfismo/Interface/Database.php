<?php

interface Database 
{
    public function all();
    public function create();
    public function update();
    public function destroy();
}