<?php
/**
 * Created by PhpStorm.
 * User: rong
 * Date: 2019/5/6
 * Time: 6:52 AM
 */

namespace App\Http\Requests;


class UserAddressRequest extends Request
{
    public function rules()
    {
        return [
            'province'      => 'required',
            'city'          => 'required',
            'district'      => 'required',
            'address'       => 'required',
            'zip'           => 'required',
            'contact_name'  => 'required',
            'contact_phone' => 'required',
        ];
    }

    public function attributes()
    {
        return [
            'province'      => '省',
            'city'          => '城市',
            'district'      => '地区',
            'address'       => '详细地址',
            'zip'           => '邮编',
            'contact_name'  => '姓名',
            'contact_phone' => '电话',
        ];
    }
}