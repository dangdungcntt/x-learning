<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LessonRequestUpdate extends FormRequest
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
     */
    public function rules()
    {
        return [
            'name' => 'required|max:255',
            'details' => 'required|max:1000',
            'course_id' => 'required|exists:courses,id',
            'start_at' => 'required|date',
            'end_at' => 'required|date|after:start_at',
        ];
    }

    public  function messages()
    {
        return [
            'name' => [
                'required' => 'Name is required',
                'max' => 'Max length of name is 255'
            ],
            'details' => [
                'required' => 'Details is required',
                'max' => 'Max length of details is 1000'
            ],
            'course_id' => [
                'required' => 'Course is required',
                'exists' => 'Course do not exits'
            ],
            'start_at' => [
                'required' => 'Start at is required',
                'date' => 'Invalid date'
            ],
            'end_at' => [
                'required' => 'End at is required',
                'date' => 'Invalid date',
                'after' => 'End at must be later than start_at'
            ]
        ];
    }
}
