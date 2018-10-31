<?php
namespace Firoj\TestDemo\Test\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
class Customer extends Controller
{
    public function index()
    {
        dump("test bundle");die;
    }
}
?>