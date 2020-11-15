<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Kuisioner;
use App\User;

class UserController extends Controller
{
    public function kuisione(Request $request)
    {
        // $data ['users']=User::OrderBy('id','asc')->paginate(3);
        // $ondata = DB::table('users')->orderBy('id', 'asc')->paginate(7);
        $ondata = User::orderBy('id', 'DESC')->get();
        return view('dashboard',compact('ondata'));
    }

    public function destroy($id)
{
    $deletda = User::find($id);
    $deletda->delete();

    return redirect('dashboard')->with('status', 'Delete Success !');
}

    public function show($id)
    {
        $id = $id;
        return view('show-dashboard', compact('id'));
    }

    public function datauser()
    {
        $user = User::all();
        return response()->json(['message'=>'Success','data'=>$user],200);
       
    }

   
        public function userdatakuisioner(User $users)
        {
            $datas = User::find($users->id);
            return response()->json(['message'=>$datas,'data'=>$users->kuisi],200);
            
        }

        public function edituser()
        {
            return view('useradmin/edit');
            $datas = User::all;
            echo "$datas";
            print_r($datas);
        }

    //     public function destroy(User $users)
    // {
    //     if($users->delete()){
    //         return response()->json(['message'=>'Address has been Deleted','data'=>null],200);
    //     }
        
    //     return response()->json(['message'=>'Error Deleting Address','data'=>null],400);
    // }
    

    public function show_article(User $user)
    {
        // $comment = User::all();
        $datas = Kuisioner::find($user->user_id);
        return response()->json(['message'=>'Success','data'=>$datas],200);

    }

}