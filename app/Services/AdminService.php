<?php
namespace App\Services;

use App\Models\User;
use App\Traits\UserTrait;
use Illuminate\Http\Request;

class AdminService{

    use UserTrait;

    public function __construct(){
        // $this->r = new User();
    }
    public function loginUser(Request $request){

    }

}
?>
