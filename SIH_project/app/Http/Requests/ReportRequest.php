<?php

namespace App\Http\Requests;


use Illuminate\Http\Request;

class ReportRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */ public function rules()
    {
        
                return ['rid'=>'',
                         'id' => 'required',
                        'locality'=>'required',
                        'state'=>'required',
                        'city'=>'required',
                        'pincode'=>'required',
                        'degree'=>'required',
                        'category'=>'required',
                        'college_name'=>'required',
                        'course_name'=>'required',
                        'branch'=>'required',
                        'message'=>'required',
                        'ticket'=>'required',
                        'status'=>'required',
                        ];
    }
}
