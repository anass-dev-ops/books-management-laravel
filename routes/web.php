<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

class Book {
    public $id;
    public $title;
    public $description;
    public $author;
    public $edition;
}

Route::get('books', function () {
    
    $b1 = new Book();
    $b1->id = '1';
    $b1->title = 'OCA JAVA 8';
    $b1->description = 'Description OCA JAVA 8';
    $b1->author = 'Khalid HAMIDI';
    $b1->edition = '1st Edition';

    $b2 = new Book();
    $b2->id = '2';
    $b2->title = 'Javascript 2022';
    $b2->description = 'Description Javascript 2022';
    $b2->author = 'Omar ELKADMIRI';
    $b2->edition = '3th Edition';

    $b3 = new Book();
    $b3->id = '3';
    $b3->title = 'PHP 8';
    $b3->description = 'Description PHP 8';
    $b3->author = 'Said DAOUDI';
    $b3->edition = '4th Edition';

    $books = array($b1, $b2, $b3);
    return view('books', ['data' => $books]);
});
