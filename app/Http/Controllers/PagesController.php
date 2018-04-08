<?php
/**
 * Created by PhpStorm.
 * User: MSI
 * Date: 03-Apr-18
 * Time: 13:18
 */

namespace App\Http\Controllers;


class PagesController extends Controller {

    public function getIndex(){

    }

    public function getAbout(){
        return view ('pages.about');
    }

    public function getContact(){
        return view ('pages.contact');
    }
    public function getWelcome(){
        return view ('welcome');
    }
}