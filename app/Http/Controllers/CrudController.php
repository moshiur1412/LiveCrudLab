<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PersonalInfo;
use App\Http\Requests\PersonalInfoRequest;
use App\Models\Country;
use App\Models\City;

class CrudController extends Controller
{

    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        \Log::info("Req=CrudController@index called");

        $personal_infos = PersonalInfo::OrderBy('created_at', 'desc')->get();

        return view('crud.index', compact('personal_infos'));
    }

    /**
     * Show the form for creating a new resource.
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        \Log::info("Req=CrudController@create called");
        
        $countries = Country::all();

        return view('crud.create', compact('countries') );
    }

    /**
     * Get Ajax Request and restun Data
     * @return \Illuminate\Http\Response
     */
    public function cityName($id)
    {
        \Log::info("Req=CrudController@cityName Called");

        $cities = City::where("country_id",$id)->get();

        return json_encode($cities);
    }


    /**
     * Store a newly created resource in storage.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PersonalInfoRequest $request)
    {
        \Log::info("Req=CrudController@store Called");

        $personal_info = new PersonalInfo;
        $personal_info->name = $request->name;
        $personal_info->country = $request->country;
        $personal_info->city = $request->city;
        $personal_info->skills = implode(', ', $request->skills);
        $personal_info->birthday = $request->birthday; 
        
        // File Upload Store-->
        $ext = $request->file('resume')->getClientOriginalExtension();
        $resume_name = 'Resume_'.str_replace(" ", "_", ucwords($request->name)).".".$ext;
        $personal_info->resume = $resume_name;
        $request->file('resume')->move(base_path() . '/public/uploads',$resume_name);
        // $request->file('resume')->storeAs('public/uploads/', $resume_name);

        $personal_info->save();

        return redirect()->route('crud.index')->with('success', ['Success!' => 'Your information store successfully!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        \Log::info("Req=CrudController@show called");

        $personal_info = PersonalInfo::findOrFail($id);

        return view('crud.show', compact('personal_info'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        \Log::info("Req=CrudController@edit Called");

        $personal_info = PersonalInfo::findOrFail($id);

        $skills = explode(", ", $personal_info->skills);
        $skills = array_flip($skills);

        $countries = Country::all();
        $city_data = City::where('name', $personal_info->city)->get();
        foreach ($city_data as $city) {
            $cities = City::where('country_id', $city->country_id)->get();
        }

        return view('crud.edit', compact('personal_info', 'skills', 'countries', 'cities'));
    }

    /**
     * Update the specified resource in storage.
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PersonalInfoRequest $request, $id)
    {

        \Log::info("Req=CrudController@updated Called");

        $skills = implode(', ', $request->skills);
        $personal_info = PersonalInfo::findOrFail($id);
        $personal_info->name = $request->name;
        $personal_info->country = $request->country;
        $personal_info->city = $request->city;
        $personal_info->skills = $skills;
        $personal_info->birthday = $request->birthday;

        // File Upload Updated -->
        $file = $request->file('resume');
        if(!empty($file)){

            $request->validate([
                'resume' => 'required|mimes:doc,docx,pdf|max:2048|unique:personal_infos,resume,id'
            ]);

            $path = base_path() . '/public/uploads/'.$personal_info->resume;

            if (file_exists($path)) { unlink($path); }

           $ext = $request->file('resume')->getClientOriginalExtension();
           $resume_name = 'Resume_'.str_replace(" ", "_", ucwords($request->name)).".".$ext;
           $personal_info->resume = $resume_name;
            // $request->file('resume')->storeAs('public/uploads/', $resume_name);
           $request->file('resume')->move(base_path() . '/public/uploads',$resume_name);


       }else{

        $personal_info->resume = $request->resume_old_name;
    }

    $personal_info->save();

    return redirect()->route('crud.index')->with('success', ['Success!' => 'Your data updated successfully']);

}

    /**
     * Remove the specified resource from storage.
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     \Log::info("Req=CrudController@destroy Called");

     $personal_info = PersonalInfo::findOrFail($id);

     $path = base_path() . '/public/uploads/'.$personal_info->resume;

     if (file_exists($path)) { unlink($path); }

     $personal_info->delete();

     return redirect()->route('crud.index')->with('warning', ['Warning' => 'Your data deleted completely.']);

 }


}
