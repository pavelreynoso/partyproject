<?php

namespace App\Classes;

use Auth;
use Illuminate\Support\Facades\DB;
use Session;

class Crud
{
    public static function create($mod, $request)
    {
        DB::beginTransaction();
        try {
            $model = 'App\\' . $mod;
            //return $model;
            $registry = $model::create($request->all());
            DB::commit();
        } catch (\Illuminate\Database\QueryException $e) {
            $error_code = $e->errorInfo[1];
            DB::rollback();
            $error = Crud::errorDescription($error_code);
            if ($error != "This error's description wasn't found.") {
                return '-1|' . $error . " - " . $e->getMessage();
            } else {
                return "-1|" . $e->getMessage();
            }
        }
        return "1|" . $registry->id;
    }

    public static function update($idToUpdate, $mod, $request, $data)
    {

        DB::beginTransaction();
        try {
            $model = 'App\\' . $mod;
            $registry = $model::find($idToUpdate);
            $registry->fill($data);
            $registry->save();
            if ($mod == 'User') {
                if (Auth::user()->id == $registry->id) {
                    $request->session()->put('user', $registry);
                }
            }
            DB::commit();
        } catch (\Illuminate\Database\QueryException $e) {
            $error_code = $e->errorInfo[1];
            DB::rollback();
            $error = Crud::errorDescription($error_code);
            if ($error != "This error's description wasn't found.") {
                return '-1|' . $error;
            } else {
                return "-1|" . $e->getMessage();
            }
        }
        return "1|" . $registry->id;
    }

    public static function delete($idToDelete, $mod, $request)
    {

        DB::beginTransaction();
        try {
            $model = 'App\\' . $mod;
            $registry = $model::find($idToDelete);
            $registry->delete();
            if (Auth::user()->id == $idToDelete && $mod == 'User') {
                DB::rollback();
                return '-1|User to be deleted is being used. Try another time.';
            }
            DB::commit();
        } catch (\Illuminate\Database\QueryException $e) {
            $error_code = $e->errorInfo[1];
            DB::rollback();
            if ($error_code == 1451) {
                $registry = $model::find($idToDelete);
                $deshabilitado = '';
                if (isset($registry->status)) // If registry can be disabled
                {
                    if ($registry->status == 'Enabled') {
                        $registry->status = 'Disabled';
                        $deshabilitado = 'This registry was disabled';
                        $registry->save();
                    } else {
                        $registry->status = 'Disabled';
                    }
                    $registry->save();
                } else {
                    $deshabilitado = "Change the relations in your system before deleting this " . $mod;
                }

                return "0|The registry couldn't be deleted as<br/>there is data related to it.<br/>" . $deshabilitado;
            } else {
                $error = Crud::errorDescription($error_code);
                if ($error != "This error's description wasn't found.") {
                    return '-1|' . $error;
                } else {
                    return "-1|" . $e->getMessage();
                }
            }

        }
        return "1|" . $registry->id;
    }

    public static function errorDescription($code)
    {

        $error = '';
        switch ($code) {
            case 1062:$error = "Houston, we have a duplicated registry!";
                break;
            case 1451:$error = "Houston, we can't delete the registry: there's information related to it!";
                break;
            case 1452:$error = "Houston, no relation found when inserting or updating a registry!";
                break;
            case 1054:$error = "Houston, column not found!";
                break;
            case 1654:$error = "Houston, there's a field that doesn't match the database!";
                break;
            case 1048:$error = "Houston, there's information that can't be empty in the database!";
                break;
            case 1054:$error = "Houston, there's an unidentifiable field in the databse!";
                break;
            case 1166:$error = "Houston, there's a column with an incorrect name in the database!";
                break;
            case 1406:$error = "Houston, there's too much information to be saved! Check the fields you want to enter!";
                break;
            default:$error = "This error's description wasn't found.";
                break;
        }

        return $error;
    }
}
