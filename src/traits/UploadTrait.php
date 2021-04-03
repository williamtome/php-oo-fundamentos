<?php

trait UploadTrait
{
    public function doUpload($file)
    {
        return true . PHP_EOL;
    }
}

class Product
{
    use UploadTrait;
}

class Profile
{
    use UploadTrait;
}

$p = new Product();
print $p->doUpload('arquivo1');

$pr = new Profile();
print $pr->doUpload('arquivo1');