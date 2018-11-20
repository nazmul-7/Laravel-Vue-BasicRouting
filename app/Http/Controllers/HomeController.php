<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class HomeController extends Controller
{

	 private $UserData = [
		array("name"=>'Tomas Toucle',"id"=>1,"type"=>true,"password"=>'1234'),
    	array("name"=>'Julen Luptegui',"id"=>2,"type"=>false,"password"=>'1234'),
    	array("name"=>'Carlo Anchelti',"id"=>3,"type"=>true,"password"=>'1234'),
    	array("name"=>'Rafa Benitez',"id"=>4,"type"=>false,"password"=>'1234'),
    	array("name"=>'Sir Alex Farguson',"id"=>5,"type"=>true,"password"=>'1234'),

	 ];
    public function home(){
    	return view('index');
    }
    public function data(){
    	return  $this->UserData;
	}
	
	public function userAuthenticate(Request $request){
		\Log::info($request->username);
		\Log::info(request('password'));
		$AuthData=$request->all();



		$lengths = sizeof($this->UserData) ;
            for($i = 0;$i<$lengths;$i++){
               
               if($this->UserData[$i]['name'] == trim($AuthData['username'])){
                  
                    if(trim($this->UserData[$i]['password']) === trim($AuthData['password'])){

					return response()->json(array(
						'code'      =>  200,
						'UserData'   =>  $this->UserData[$i]
					));

                    }
                    else{

						return response()->json([
							'code'      =>  401,
							'message'   =>  'Password does not match'
						],401);

						
                    }
               }

            }

			return response()->json([
				'code'      =>  401,
				'message'   =>  'User Name does not match'
			],401);

	}
}