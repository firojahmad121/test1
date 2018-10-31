<?php
namespace Firoj\TestDemo\Test;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
class DefaultBundle extends Controller
{
    public function index()
    {
        dump("test bundle");die;
    }
}
?>