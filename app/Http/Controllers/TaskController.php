<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Image;
use App\Task;
use App\Repositories\TaskRepository;
use Auth;
use App\User;

class TaskController extends Controller
{
    /**
     * The task repository instance.
     *
     * @var TaskRepository
     */
    protected $tasks;

    /**
     * Create a new controller instance.
     *
     * @param  TaskRepository  $tasks
     */
    
    public function __construct(TaskRepository $tasks)
    {
        $this->middleware('auth');

        $this->tasks = $tasks;
    }

    /**
     * Display a list of all of the user's task.
     *
     * @param  Request  $request
     * @return Response
     */
    public function index(Request $request)
    {

        // Get your timeline:
        $feed = \FeedManager::getNewsFeeds($request->user()->id)['timeline'];
        

        // Get your timeline activities from Stream:
        $activities = $feed->getActivities(0,25)['results'];

        return view('tasks.index', [
            'tasks' => $this->tasks->forUser($request->user()),
            'activities' => $activities
        ]);
    }

    public function create()
    {
       $user = Auth::user();       
       return view('tasks.create')->withUser($user);
    }

    /**
     * Create a new task.
     *
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $task = new Task;
        $this->validate($request, [
            'name' => 'required|max:255',            
        ]);


        $request->user()->tasks()->create([
            'name' => $request->name,
            'photo' => $request->photo,
            'url' => $request->url,
            'display_name' => $request->user()->name,
        ]);

        if ($request->hasFile('photo')) {
          $image = $request->file('photo');
          $filename = time() . '.' . $image->getClientOriginalExtension();
          $location = public_path('images/' . $filename);
          Image::make($image)->resize(300, 200)->save($location);

          $task->photo = $filename;
          $task->save();
        }

        //$task->save();
        return redirect('/tasks');
    }


    /**
     * Destroy the given task.
     *
     * @param  Request  $request
     * @param  Task  $task
     * @return Response
     */

    public function destroy(Request $request, Task $task)
    {
        $this->authorize('destroy', $task);
        $task->delete();

        return redirect('/tasks');
    }
}