<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Project;
use Illuminate\Http\Request;

class ProjectsController extends Controller {

	/**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
		$projects = Project::getAllData($request);

		return view('projects.index', compact('projects'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$projects = Project::lists('name','id');
		$projects[0] = "Select Parent Project";
		
		return view('projects.create')
			->with( 'list', Project::getListFromAllRelationApps() )->with('projects',$projects);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{

		//create data
		Project::create( $request->all() );

		return redirect()->route('projects.index')->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show(Project $project)
	{
		return view('projects.show', compact('project'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit(Project $project)
	{
		$projects = Project::lists('name','id');
		$projects[0] = "Select Parent Project";
		
		return view('projects.edit', compact('project'))
			->with( 'list', Project::getListFromAllRelationApps() )->with('projects',$projects);
	}

	/**
	 * Show the form for duplicatting the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function duplicate(Project $project)
	{
		$projects = Project::lists('name','id');
		$projects[0] = "Select Parent Project";
		
		return view('projects.duplicate', compact('project'))
			->with( 'list', Project::getListFromAllRelationApps() )->with('projects',$projects);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @param Request $request
	 * @return Response
	 */
	public function update(Project $project, Request $request)
	{
		//update data
		$project->update($request->all());

		return redirect()->route('projects.index')->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy(Project $project)
	{
		$project->delete();

		return redirect()->route('projects.index')->with('message', 'Item deleted successfully.');
	}

}
