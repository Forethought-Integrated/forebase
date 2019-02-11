<?php

namespace App\Http\Controllers\Template;
use App\Template;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class TemplateController extends Controller
{
   
     function get_singel_data($id)
    {
        $data = DB::table('templates')->where('template_id',$id)->first();
               
        return $data;
    }
     
    public function index()
    { 
        
       $template=DB::table('templates')->get();
       return view('CRM.Template.listTemplate',['template'=>$template]);
    } 


    public function indexGrid()
    { 
       $data['template']=DB::table('templates')->get();
       // $template=DB::table('templates')->get();
       // return view('emails.campaignTemplate.gridListTemplate',['template'=>$template]);
       return view('emails.campaignTemplate.gridListTemplate',['data'=>$data]);
    }

    public function create()
    {
         return view('CRM.Template.createTemplate');

    }

    public function store(Request $request)
    {
    	Template::create([

    		'template_body'=>$request->template_body,
        'template_created_by'=>$request->template_created_by,

    	]);

    	return redirect('/templates');
    	
    }
    
    public function show($template_id)
    {
      		// return 'hello';
      		$template = $this->get_singel_data($template_id);
    		return view('CRM.Template.showTemplate',['templates'=>$template]);
    }

		 

    // public function edit($template_id)
    // {
    // 	$template = $this->get_single_data($template_id);

    // 	return view ('CRM.Template.editTemplate',['templates' => $template]);
    // }
    public function edit($id)
    {
    // $template = Template::find($id);

      $template = Template::find($id); 

    // Load user/createOrUpdate.blade.php view
    // return view('CRM.Template.editTemplate')->with('templates', $template);
    return view('emails.campaignTemplate.editTemplate')->with('templates', $template);
    }
     
     public function editGrid($templateid)
     {
        $data['template'] =Template::find($templateid);
        return view('emails.campaignTemplate.editTemplate',['data'=>$data]);
     }



    public function update(Request $request, $template_id)
    {
      $template = Template::find($template_id);
      $template->template_body = $request->template_body;
      $template->template_created_by = $request->template_created_by;
      $template->save();

      return redirect ('/templates');

    }
    public function destroy($id)
    {
    	DB::table('templates')->where('template_id','=',$id)->delete();
    	return redirect ('/templates');

    }
}
