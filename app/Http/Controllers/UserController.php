<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UserController extends Controller
{
    function login(Request $req)
    {
        // return $req->all();

        $user = User::where(['email' => $req->email])->first();
        $password = User::where(['password' => $req->password])->first();

        // return 'User:' . $user .' <br>Password:' . $password;

        if (!$user || !$password) {
            return "Username or password is not matched";
        } else {
            $req->session()->put('user', $user);
            return redirect('/');
        }
    }

    function getuser(Request $req)
    {
        $data = DB::table('users')
            //->join('table2','table2.id','=','user.id')
            ->where('id', $req->rid)
            ->first();

        return view('edituser', ['users' => $data]);
    }

    function edituser(Request $req)
    {
        // try{

        DB::table('users')->where('id', $req->rid)
            ->update(array(
                'name' => $req->fullname,
                'password' => $req->password,
                'email' => $req->email,
                'updated_at' => now()
            ));

        // }

        // catch (\Exception){
        //     return redirect('editmyueser?rid='.$req->rid.'&succes=2');
        // }

        return redirect('editmyuser?rid=' . $req->rid . '&succes=1');
    }

    function register(Request $req)
    {
        // return $req->input();
        // try{
            DB::insert('insert into users
            (name, email, password, created_at) values (?,?,?,?)',
            [$req->fullname,$req->email,$req->password, now()]);
        // }
        // catch (\Exception) {
        //     return "Failed to register";
        // }
        return "Succesfully Register";

    }

    function listuser()
    {
    //  return view('listuser',['listofuser'=>DB::table('users')->paginate(5)]);   
    }

    function search(Request $req)
    {
        return view('listuser',['listofuser' => DB::table('users')
            ->select(DB::raw('id,name,email,password,created_at'))
            ->where('email','like','%'.$req->search.'%')
            ->orWhere('name','like','%'.$req->search.'%')->paginate(10)]
    );
    }

    function deleteuser(Request $req)
    {
        //return $req->input();
        DB::table('users')->where('id',$req->rid)->delete();
        return "Succesfully deleted";
    }


}
