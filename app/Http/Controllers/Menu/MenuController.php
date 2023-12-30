<?php

namespace App\Http\Controllers\Menu;

use Illuminate\Http\Request;
use App\Helpers\ConstantsHelper;
use App\Helpers\ResponseHelpers;
use App\Http\Controllers\Controller;
use App\Models\XAccess;
use App\Models\XMenu;

class MenuController extends Controller
{
    public function getMenu(Request $request) {
        $user_id = $request->get('user_id');

        try {
            $model = new XMenu();
            $query = $model->select(
                'id',
                'kode_menu',
                'nama_menu',
                'is_active'
            );

            $access = self::getAccess($user_id);
            $query = $query->whereIn('kode_menu', $access)->get();
            return $access;

            return ResponseHelpers::success(ConstantsHelper::STATUS_SUCCESS, ConstantsHelper::MSG_SUCCESS_GET, $query);
            
        } catch (\Exception $e) {
            return ResponseHelpers::error(ConstantsHelper::STATUS_ERR_SERVER, ConstantsHelper::MSG_ERR_SERVER, $e);
        }
    }

    private function getAccess($user_id){
        $model = new XAccess();
        $query = $model->select('access')->get()->toArray();
        return $query[0]['access'];
    }
}
