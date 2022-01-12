<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Friends;
use App\Models\Users;
use App\Models\User_menu;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Auth;



class FriendsController extends Controller
{
    public function index()
    {
        $data['user'] = AUTH::user();
        $data['title'] = 'Friends';
        $data['sub_menu'] = '0';
        $data['menu'] =  User_menu::all();
        $data['data'] = Friends::all();

        $friends = Friends::orderBy('id' , 'desc')->paginate(3);


        return view('admin.dashboard.friends.friends',compact('friends'), $data);
    }

    public function home()
    {
        $friends = Friends::orderBy('id' , 'desc')->paginate(3);

        return view('admin.dashboard.friends.friends', compact('friends'));
    }
    public function create()
    {
        $data['user'] = AUTH::user();
        $data['title'] = 'Tambah Teman';
        $data['sub_menu'] = '0';
        $data['menu'] =  User_menu::all();
        $data['data'] = Friends::all();

        return view('admin.dashboard.friends.create',$data);
    }
    public function store(Request $request)
    {
        $data['user'] = AUTH::user();
        $data['title'] = 'Teman';
        $data['sub_menu'] = '0';
        $data['menu'] =  User_menu::all();
        $data['data'] = Friends::all();

        // $friends = new Friends;

        // $friends->nama;
        // $friends->nohp;
        // $friends->alamat;

        // $friends->save();
        $fren = $request->all();
       Friends::create($fren);
       return redirect('/friends');
    }
    public function show($id){
        // $group = Groups::where('groups_id' ,'1' )->count();
        // $friend2 = Friends::where('groups_id' ,'2' )->count();
        // $friend3 = Friends::where('groups_id' ,'3' )->count();
        // $friend4 = Friends::where('groups_id' ,'4' )->count();
        $data['user'] = AUTH::user();
        $data['title'] = 'Teman';
        $data['sub_menu'] = '0';
        $data['menu'] =  User_menu::all();
        $data['data'] = Friends::all();

        $friend = Friends::where('id' , $id)->first();
        return view('admin.dashboard.friends.show', ['friend'=> $friend], $data);
    }
    public function edit($id)
    {
        $data['user'] = AUTH::user();
        $data['title'] = 'Edit Teman';
        $data['sub_menu'] = '0';
        $data['menu'] =  User_menu::all();
        $data['data'] = Friends::all();

        $data1 = Friends::where('id' , $id)->first();
        return view('admin.dashboard.friends.edit',$data, ['friend'=> $data1]);
    }
    public function update(Request $request, $id)
    {
        Friends::find($id)->update([
            'nama' => $request->nama,
            'nohp' => $request->nohp,
            'alamat' => $request->alamat
        ]);
        return redirect('/friends');
    }
    public function destroy($id){
        $data['user'] = AUTH::user();
        $data['title'] = 'Daftar Teman';
        $data['sub_menu'] = '0';

        $data['menu'] =  User_menu::all();

        Friends::find($id)->delete();
        return redirect('/friends');
    }
}
