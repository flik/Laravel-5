<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Task;
use Illuminate\Http\Request;

class TasksController extends Controller {

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
		$tasks = Task::getAllData($request);

		return view('tasks.index', compact('tasks'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create(Request $request)
	{

		$tasks = Task::lists('name','id');
		$tasks[0] = "Select Parent Task";
		
		return view('tasks.create')
			->with( 'list', Task::getListFromAllRelationApps() )->with('tasks',$tasks);
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
		Task::create( $request->all() );

		return redirect()->route('tasks.index')->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show(Task $task)
	{
		return view('tasks.show', compact('task'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit(Task $task)
	{
		$tasks = Task::lists('name','id');
		$tasks[0] = "Select Parent Task";
		$tasksx = \DB::table('tasks')->get();
		
		return view('tasks.edit', compact('task','tasksx'))
			->with( 'list', Task::getListFromAllRelationApps() )->with('tasks',$tasks);
	}
	
	/**
	 * Show the form for Invoice Test the specified resource.
	 *
	 * @param  Request $request
	 * @return Response
	 */
	public function test(Task $task, Request $request)
	{
		$tasks = Task::lists('name','id');
		$tasks[0] = "Select Parent Task";
		$tasksx = \DB::table('tasks')->get();
		
		return view('tasks.test', compact('task','tasksx'))
			->with( 'list', Task::getListFromAllRelationApps() )->with('tasks',$tasks);
	}

	/**
	 * Show the form for duplicatting the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function duplicate(Task $task)
	{
		$tasks = Task::lists('name','id');
		$tasks[0] = "Select Parent Task";
		
		return view('tasks.duplicate', compact('task'))
			->with( 'list', Task::getListFromAllRelationApps() )->with('tasks',$tasks);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @param Request $request
	 * @return Response
	 */
	public function update(Task $task, Request $request)
	{
		//update data
		$task->update($request->all());

		return redirect()->route('tasks.index')->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy(Task $task)
	{
		$task->delete();

		return redirect()->route('tasks.index')->with('message', 'Item deleted successfully.');
	}

}
