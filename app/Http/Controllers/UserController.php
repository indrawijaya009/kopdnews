<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Kuisioner;
use App\User;

class UserController extends Controller
{
    public function kuisione()
    {
        $data = User::all();
        return view('dashboard', compact(['data']));
        // echo "$data";
    }

    public function datauser()
    {
        // $user = User::all();
        // return view('user', compact(['user']));
        // echo "$user";
        // return User::all();
        $user = User::all();
        return response()->json(['message'=>'Success','data'=>$user],200);
       
    }

   
        public function userdatakuisioner(User $users)
        {
            $datas = User::find($users->id);
            return response()->json(['message'=>$datas,'data'=>$users->kuisi],200);
        }

        public function destroy(User $users)
    {
        if($users->delete()){
            return response()->json(['message'=>'Address has been Deleted','data'=>null],200);
        }
        return response()->json(['message'=>'Error Deleting Address','data'=>null],400);
    }
    

    public function show_article(User $user)
    {
        // $comment = User::all();
        $datas = Kuisioner::find($user->user_id);
        return response()->json(['message'=>'Success','data'=>$datas],200);

    }

}
