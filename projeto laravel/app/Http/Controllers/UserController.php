<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateUserFormRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    protected $model;

    public function __construct(User $user)
    {       
        $this->model = $user;        
    }

    public function list(Request $request){        
        $users = $this->model->getUsers(search:$request->search ?? '');
        return view('users.list',compact('users'));
    }
    
    public function details($id){
        // $users = $this->model->where('id','=',$id)->first(); // ou:      
        // $users = $this->model->find($id)

        if(!$user = $this->model->find($id)){
            return Redirect()->route('users.list');
        }else{
            $user = $this->model->find($id);
            return view('users.details', compact('user'));
        }        
    }

    public function create(){
        return view('users.create');
    }

    public function store(StoreUpdateUserFormRequest $request){
        $data = $request->all();
        $data['password'] = bcrypt($request->password);

        $user = $this->model->create($data);
        return Redirect()->route('users.details',$user->id);
    }

    public function edit($id){
        if(!$user = $this->model->find($id)){
            return Redirect()->route('users.list');
        }else{
            $user = $this->model->find($id);
            return view('users.edit',compact('user'));
        }   
    }

    public function update(StoreUpdateUserFormRequest $request, $id){
        if(!$user = $this->model->find($id)){
            return Redirect()->route('users.list');
        }else{
            $user = $this->model->find($id);
            $date = $request->only('name','email');
            if($request->password){
                $data['password'] = bcrypt($request->password);                
            }          
            $user->update($date);
            return redirect()->route('users.list');  
        }        
    }

    public function delete($id){
        if(!$user = $this->model->find($id)){
            return Redirect()->route('users.list');
        }else{
            $user = $this->model->find($id);
            $user->delete();
            return Redirect()->route('users.list');
        }        
    }
}
