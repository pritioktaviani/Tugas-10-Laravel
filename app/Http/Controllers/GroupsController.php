<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Friends;
use App\Models\Groups;
use App\Models\Users;
use App\Models\User_menu;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Auth;


class GroupsController extends Controller
{
    public function index()
    {

        $data['user'] = AUTH::user();
        $data['title'] = 'Groups';
        $data['sub_menu'] = '0';
        $data['menu'] =  User_menu::all();


        $data['data'] = Groups::orderBy('id' , 'desc')->paginate(3);

        return view('admin.dashboard.groups.groups',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $data['user'] = AUTH::user();
        $data['title'] = 'Groups';
        $data['sub_menu'] = '0';
        $data['menu'] =  User_menu::all();
        return view('admin.dashboard.groups.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:groups|max:255',
            'description' => 'required',
        ]);

        $groups = new groups;

        $groups->name = $request->name;
        $groups->description = $request->description;
        $groups->masuk = (+1);

        $groups->save();

        return redirect('/groups');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $data['user'] = AUTH::user();
        $data['title'] = 'Groups';
        $data['sub_menu'] = '0';
        $data['menu'] =  User_menu::all();

        $friend = Friends::where('groups_id', '=', '1')->count();
        $friend2 = Friends::where('groups_id' ,'=','2' )->count();
        $friend3 = Friends::where('groups_id','=', '3' )->count();
        $friend4 = Friends::where('groups_id' ,'=','4' )->count();

        $group = Groups::where('id' , $id)->first();
        return view('admin.dashboard.groups.show',$data, ['group'=> $group, 'friend'=> $friend, 'friend2'=> $friend2, 'friend3'=> $friend3, 'friend4'=> $friend4]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $group = Groups::where('id' , $id)->first();
        return view('groups.edit', ['group'=> $group]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Groups::find($id)->update([
            'name' => $request->name,
            'description' => $request->description
        ]);
        return redirect('/groups');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Groups::find($id)->delete();
        return redirect('/groups');
    }

    public function addmember($id)
    {

        $data['user'] = AUTH::user();
        $data['title'] = 'Groups';
        $data['sub_menu'] = '0';
        $data['menu'] =  User_menu::all();

        $friend = Friends::where('groups_id', '=', 0)->get();

        $group = Groups::where('id' , $id)->first();
        return view('admin.dashboard.groups.addmember', ['group'=> $group, 'friend' => $friend], $data);
    }
    public function updateaddmember(Request $request, $id)
    {
        $friend = Friends::where('id' , $request->friend_id)->first();
        Friends::find($friend->id)->update([
            'groups_id' => $id

        ]);

        return redirect('/groups');
    }

    public function deleteaddmember(Request $request, $id)
    {
        // dd($id);
        Friends::find($id)->update([
            'groups_id' => 0
        ]);
        return redirect('/groups');
    }
}
