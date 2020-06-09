<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 5/10/2020
 * Time: 6:44 PM
 */

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;


class LearndbController extends Controller
{
    public function index($action) {
        $this->$action();
  }

    /*
      * Lấy ra tất cả các bản ghi trong 1 bảng
      * */
    public function demo1() {
        echo __METHOD__;

        $books = DB::table('books')->get();

        foreach ($books as $book) {
            echo '<pre>';
            echo $book->book_name;
            echo $book->book_intro;
        }

        echo '<br>' . DB::table('books')->toSql();
        echo '<br>';
        echo asset('storage/file.txt');
        dump($books);

        dd($books);



    }


    /*
     * Lấy ra 1 bản ghi duy nhất trong 1 bảng cách 1
     * */
    public function demo2() {
        echo __METHOD__;

        $book = DB::table('books')->where('book_status', 1)->first();

        echo "<br>" . $book->book_name;

        echo  "<br>" . DB::table('books')->where('book_status', 1)->toSql();

        dump($book);
        dd($book);
    }


    /*
     * Lấy ra 1 bản ghi duy nhất trong 1 bảng cách 2
     * */
    public function demo3() {
        echo __METHOD__;

        $book = DB::table('books')->find(3);

        dd($book);

        dump($book);
    }

    /*
     * Lấy ra 1 danh sách các cột trong bảng
     * */
    public function demo4() {
        echo __METHOD__;

        $book = DB::table('books')->pluck('book_name');


        $book2 = DB::table('books')->pluck('book_slug');

        dump($book);

        dump($book2);
    }


    /*
     * count() max() avg()
     * */
    public function demo5() {
        $count = DB::table('books')->count();

        dump($count);
        $maxID = DB::table('books')->max('id');

        dump($maxID);

    }

    /*
    * select db
    * */
    public function demo6() {
        DB::enableQueryLog();

        $book = DB::table('books')->select('book_name', 'book_images as imageOfBook')->get();

        dump($book);


        dump(DB::getQueryLog());
    }


    /*
    * Raw query
    * */
    public function demo7() {
        DB::enableQueryLog();
        $res = DB::table('books')
            ->select(DB::raw(' book_author, count(*) as total'))
            ->groupBy('book_author')
            ->get();
        dump($res);

        dump(DB::getQueryLog());
    }


    /*
    * Join laravel
    * */
    public function demo8() {
        DB::enableQueryLog();

        $books = DB::table('books')
            ->select('books.book_name', 'books.book_author', 'users.email as email_tac_gia')
            ->leftJoin('users', 'users.name', '=' , 'books.book_author')
            ->get();



        dump($books);
        dump(DB::getQueryLog());
    }


    /*
     * Where
    * */
    public function demo9() {
        DB::enableQueryLog();
        $books = DB::table('books')
            ->where('book_author', 'like', 't%')
            ->get();

        dump($books);
        dump(DB::getQueryLog());
    }


    /*
    * Where 1
    * */
    public function demo10() {
        // multi where
        DB::enableQueryLog();
        $books = DB::table('books')->where([
            ['book_author', 'like', 't%'],
            ['book_status', '=', '2'],
        ])->get();


        dump($books);
        dump(DB::getQueryLog());
    }


    /*
   * Where 2
   * */
    public function demo11() {
        //OR statement
        DB::enableQueryLog();

        $books = DB::table('books')
            ->where('book_author', 'like', 't%')
            ->orWhere('book_name', '=', 'Conan')
            ->get();

        dump($books);
        dump(DB::getQueryLog());
    }


    /*
  * Order
  * */
    public function demo12() {
        DB::enableQueryLog();


        $books = DB::table('books')
            ->orderBy('book_author', 'asc')
            ->get();


        dump($books);
        dump(DB::getQueryLog());
    }


    /*
  * Insert
  * */
    public function demo14() {
        DB::enableQueryLog();

        DB::table('users')->insertOrIgnore([

            ['email' => 'hoadơn@example.com', 'id' => 0, 'name' => 'hoa don'],
            ['email' => 'leroi@example.com', 'id' => 0, 'name' => 'le roi']
        ]);

        dump(DB::getQueryLog());
    }



    /*
  * Update
  * */
    public function demo15() {
        DB::enableQueryLog();
        $affected = DB::table('users')
            ->where('id', 1)
            ->update(['name' => 'long dz vl']);

        dump($affected);
        dump(DB::getQueryLog());
    }


    /*
 * Delete
 * */
    public function demo16() {
        DB::enableQueryLog();
        DB::table('users')->where('name', '=', 'long dz vl')->delete();

        dump(DB::getQueryLog());
    }

}
