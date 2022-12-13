<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Models\Product;
use Validator;
use Redirect;
use Session;
use App\Models\Users;
use Hash;
use Illuminate\Support\Facades\Redirect as FacadesRedirect;
use Mail;

class UserController extends Controller
{
    function LoginPage()
    {
        return view("login");
    }
    function RegisterPage()
    {
        return view("register");
    }
    public function Registraton(Request $r)
    {
        $validator = Validator::make($r->all(), [
            "name" => "required|min:2|max:20|string",
            "surname" => "required|min:2|max:20|string",
            "age" => "required|gt:18|integer",
            "email" => "required|unique:users,email",
            "password" => "required|min:6|max:20",
            "cpassword" => "required|min:6|max:20|same:password",

        ]);
        if ($validator->fails()) {
            return Redirect::to("/register")
                ->withErrors($validator)->withInput();
        } else {
            $users = new Users();
            $users->name = $r->name;
            $users->surname = $r->surname;
            $users->age = $r->age;
            $users->email = $r->email;
            $users->password = Hash::make($r->password);
            $users->photo = "default.jpg";
            $users->save();
            $hash = md5($users->id . $users->email);
            $data = [
                'name' => $users->name,
                'surname' => $users->surname,
                'id' => $users->id,
                'hash' => $hash
            ];
            Mail::send("mail", $data, function ($message) use ($users) {
                $message->to($users->email, "umica uxarkvum namaky")->subject('namaki bovandakutyun');
                $message->from('artur.geghamyan@gmail.com', 'Artur Geghamyan');
            });
            return Redirect::to("/");
        }
    }
    public function Login(Request $r)
    {
        $validator = Validator::make($r->all(), [
            "email" => "required",
            "password" => "required",
        ]);
        $user = Users::where("email", $r->email)->first();
        $validator->after(function ($validator) use ($user, $r) {
            if (!$user) {
                $validator->errors()->add("email", "Email addres is not registredit");
            } else if (!Hash::check($r->password, $user['password'])) {
                $validator->errors()->add("password", "wrong password or email");
            }
        });
        if ($validator->fails()) {
            return Redirect::to("/")
                ->withErrors($validator)->withInput();
        } else {
            Session::put([
                "id" => $user["id"],
            ]);
            if ($user['active'] == 0) {
                return Redirect::to("/")->with("mail", 'please verify your mail');
            } else {
                return Redirect::to("/product/home");
            }
        }
    }

    function activate($id, $hash)
    {
        $user = Users::where("id", $id)->first();
        if ($user) {
            if ($hash == md5($id . $user->email)) {
                $user->active = 1;
                $user->save();
                return Redirect::to('')->with('success', 'Verification success');
            }
        }
    }

    function myAccount()
    {
        return view('/my-account');
    }

    function PasswordRecover()
    {
        return view('/password-recover');
    }

    function SendCode(Request $r)
    {
        $email = $r->email;
        $user = Users::where("email", $email)->first();
        if ($user) {
            $hash = md5($user->id . $user->email);
            $data = [
                'name' => $user->name,
                'surname' => $user->surname,
                'id' => $user->id,
                'hash' => $hash
            ];
            Mail::send("password", $data, function ($message) use ($user) {
                $message->to($user->email, "umica uxarkvum namaky")->subject('namaki bovandakutyun');
                $message->from('artur.geghamyan@gmail.com', 'Artur Geghamyan');
            });
            return back()->with('msg', 'success')->withinput();
        } else {
            return back()->with('msg', 'wrong');
        }
    }

    function Recover(Request $r)
    {
        $code = $r->recovercode;
        $email = $r->email;
        $user = Users::where("email", $email)->first();
        if ($code == md5($user->id . $user->email)) {
            Session::put([
                "email" => $email,
            ]);
            return view('change-password');
        } else {
            return back()->with('wrong', "Wrong Code");
        }
    }

    function ChangePassword(Request $r)
    {
        $validator = Validator::make($r->all(), [
            "password" => "required|min:6|max:20",
            "confirm-password" => "required|min:6|max:20|same:password",
        ]);
        if ($validator->fails()) {
            return view('change-password')->withErrors($validator);
        } else {
            $password = Hash::make($r->password);
            Users::where('email', Session::get("email"))->update(['password' => $password]);
            session()->forget('email');
            return Redirect::to('/');
        }
    }

    function logout()
    {
        Session::flush();
        return Redirect::to('');
    }
}
