<?php namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\User;
use App\Dangnhap;
use Lang;
use View;
use Route;


class UserController extends Controller
{

    public function index()
    {
        $objUser  = new User();
        $allUsers = $objUser->all()->toArray();

        return view('user.list')->with('allUsers', $allUsers);
    }
    

    //action de hien thi form them moi user
    public function create()
    {
        //Goi trang view trong thu muc user, file create.blade.php
        return view('user.create');
    }

    public function dangnhap()
    {
        //Goi trang view trong thu muc user, file create.blade.php
        return view('user.dangnhap');
    }

    public function storedn(Request $request)
    {
        $allRequest = $request->all();
        $userName   = $allRequest['username'];
        $password   = $allRequest['password'];

        $dataInsertToDatabase = array(
            'username' => $userName,
            'password' => $password,
        );

        $objUser = new Dangnhap();
        $objUser->insert($dataInsertToDatabase);
    }

    //action de luu user moi khi form submit
    public function store(Request $request)
    {
        $allRequest = $request->all();
        $userName   = $allRequest['username'];
        $sex        = $allRequest['sex'];

        $dataInsertToDatabase = array(
            'username' => $userName,
            'sex'      => $sex,
        );

        $objUser = new User();
        $objUser->insert($dataInsertToDatabase);
    }

    
    public function edit($id)
    {
        $objUser     = new User();
        $getUserById = $objUser->find($id)->toArray();
        return view('user.edit')->with('getUserById', $getUserById);
    }

    public function update(Request $request)
    {
        $allRequest = $request->all();
        $userName   = $allRequest['username'];
        $sex        = $allRequest['sex'];
        $idUser     = $allRequest['id'];

        $objUser               = new User();
        $getUserById           = $objUser->find($idUser);
        $getUserById->username = $userName;
        $getUserById->sex      = $sex;
        $getUserById->save();

        return redirect()->action('UserController@index');
    }

    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect()->action('UserController@index');
    }
    
  

}

