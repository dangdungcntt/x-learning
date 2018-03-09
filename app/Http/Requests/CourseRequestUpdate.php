<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CourseRequestUpdate extends FormRequest
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
            'description' => 'required',
            'details' => 'required|max:1000',
            'type_id' => 'required|exists:course_types,id',
            'price' => 'required|numeric',
            'teacher_id' => 'nullable|exists:teachers,id',
            'max_students' => 'required|numeric|between:1,100',
            'start_at' => 'required|date',
            'end_at' => 'required|date',
        ];
    }

    public function messages()
    {
        return [
            'name' => [
                'required' => 'Name is required',
                'max' => 'Max length of name is 255'
            ],
            'description.required' => 'Description is required',
            'details' => [
                'required' => 'Details is required',
                'max' => 'Max length of details is 1000'
            ],
            'type_id' => [
                'required' => 'Course type is required',
                'exists' => 'Course type do not exits'
            ],
            'price' => [
                'required' => 'Price type is required',
                'numeric' => 'Price must be a number'
            ],
            'teacher_id' => [
                'exists' => 'Teacher not found'
            ],
            'max_students' => [
                'required' => 'Max student is required',
                'numeric' => 'Max students must be a number',
                'between' => 'Max student must be between 1 and 100'
            ],
            'start_at' => [
                'required' => 'Start at is required',
                'date' => 'Invalid date'
            ],
            'end_at' => [
                'required' => 'End at is required',
                'date' => 'Invalid date'
            ]
        ];
    }
}
