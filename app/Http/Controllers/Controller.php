<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    /**************************************************
     * @Author: asarmiento Sarmiento
     * @email:  asarmiento@sistemasamigableslatam.com
     * @Update:
     * @Date:   27/7/23
     * @Time:   15:47
     ***************************************************
     * @Description: Enviamos la respuestapara el frontend
     * del error con un mensaje y asiganamos el codigo que
     * deseamos retornar
     * @param $message
     * @param $code
     * @param $data
     ***************************************************
     * @return \Illuminate\Http\JsonResponse
     ***************************************************/
    public function responseDanger($message, $code, $data = null)
    {
        return response()->json([
            'success' => false,
            'message' => $message,
            'data'    => $data
        ], $code);
    }
    /**************************************************
     * @Author: asarmiento Sarmiento
     * @email:  asarmiento@sistemasamigableslatam.com
     * @Update:
     * @Date:   27/7/23
     * @Time:   15:47
     ***************************************************
     * @Description:
     * @param $message
     * @param $data
     ***************************************************
     * @return \Illuminate\Http\JsonResponse
     ***************************************************/
    public function responseSuccess($message, $data = null)
    {
        return response()->json([
            'success' => true,
            'message' => $message,
            'data'    => $data
        ], 200);
    }
}
