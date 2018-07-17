<?php
/**
 * []
 * Created by PhpStorm.
 * User: fenggaoyuan
 * Email: 253869997@qq.com
 * Date: 2018/7/17
 * Time: 10:11
 */

namespace App\Http\Controllers\background;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{

    public function index()
    {
        return view('background.index');
    }

    public function create()
    {
        echo 123;
    }
}