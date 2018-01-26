<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Image;
use App\NewsFeed;
use App\Task;
use App\Picture;
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
            'activities' => $activities,            
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

        $tasks = Task::all();
        $pictures = Picture::all();
        $this->validate($request, [
            'name' => 'required|max:255',            
        ]);

        if ($request->hasFile('photo')) {
          $image = $request->file('photo');
          $filename = time() . '.' . $image->getClientOriginalExtension();
          $location = public_path('/images/');
          $image->move($location, $filename);
          /*Image::make($image)->resize(300, 200)->save($location);*/

          $task->photo = $filename;
        }

        if ($request->hasFile('video')) {
          $image = $request->file('video');
          $filename = time() . '.' . $image->getClientOriginalExtension();
          $location = public_path('/images/');
          $image->move($location, $filename);
          /*Image::make($image)->resize(300, 200)->save($location);*/

          $task->video = $filename;
        }

         $request->user()->tasks()->create([
            'name' => $request->name,
            'photo' => $task->photo,
            'video' => $task->video,
            'display_name' => $request->user()->name,
            'dash' => $task->dash,
        ]);
         
/*        $task->name = $request->name;
        $task->photo = $request->photo;
        $task->video = $request->video;
        $task->display_name = $request->display_name;*/




        //$task->save();
        return redirect('/tasks')->withTask($task)->withPictures($pictures);
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