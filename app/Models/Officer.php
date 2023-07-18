<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;
use DataTables;
use Auth;
use Session;

class Officer extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fullname',
        'name',
        'email',
        'password',
        'plain_password',
        'phone_number',
        //'postal_code',
        'level',
        'address',
        //'photo'
        ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];
    
    public function getAuthPassword()
    {
     return $this->password;
    }

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function select_all(){
        $data = Officer::select('*')->get();
            return $data;
    }

    public function select_one($id){
        $data = Officer::find($id);
            return $data;
    }

    public function check($request){
        $data = Officer::where('name', '=' ,$request)->orWhere('email','=',$request)->orWhere('plain_password', '=', $request)->count();
        return $data;
    }

    public function store($request){

        $user = auth('officer')->user();

        //$request = $request->toArray();

        $request['level'] = (isset($request['level']) && !empty($request['level'])) ? $request['level'] : '3';

        $udata = array(
                    'remember_token'    => $request['_token'],
                    'fullname'         => $request['fullname'],
                    'name'         => $request['name'],
                    'email'        => (isset($request['email']) ? $request['email'] : ''),
                    'plain_password' => $request['password'],
                    'password'     => Hash::make($request['password']),
                    //'password'     => bcrypt($request['password']),
                    'phone_number' => (isset($request['phone']) ? $request['phone'] : ''),
                    'address'      => (isset($request['address']) ? $request['address'] : ''),
                    'level'        => $request['level'],
                    'photo' => (isset($request['photo']) ? $request['photo'] : '')
                    );

        //print_r($data);
        $user = Officer::create($udata);
        
        return $request;
        
    }

    public function modify($request, $id){
        //dd($request);
        $udata = array(
                    'remember_token'    => $request['_token'],
                    'fullname'          => $request['fullname'],
                    'name'              => $request['name'],
                    'email'             => $request['email'],
                    'phone_number' => $request['phone_number'],
                    'address'      => $request['address'],
                    'level'        => $request['level'],
                    'photo' => (isset($request['photo']) ? $request['photo'] : '')
                    );

        if(!empty($request['password'])) {

            $udata += array(
                            'plain_password'    => $request['password'],
                            'password' => Hash::make($request['password'])
                        );
        }
        
        if($request['photo'] != null) {

            $udata += array(
                            'photo'     => $request['photo']
                        );
        }
        
        //dd($udata);
        //print_r($udata);
        $user = Officer::where('id','=',$id)->update($udata);

        return $user;
    }

    public function remove($id){
        $data = Officer::find($id)->delete();
        return $data;
    }

    public function select_all_ajax($search){
        $data = Officer::select(array('officers.id','officers.fullname','officers.name','officers.email','officers.phone_number','officers.address','officers.level',DB::raw('(CASE WHEN officers.level = 1 THEN "ADMIN" WHEN officers.level = 2 THEN "OWNER" ELSE "USER" END) AS level')))->where('level','!=','4');  

        return $data;
    }
    
    public function select_all_driver(){
        $data = Officer::select('*')->where('level',4)->get();
            return $data;
    }
}
