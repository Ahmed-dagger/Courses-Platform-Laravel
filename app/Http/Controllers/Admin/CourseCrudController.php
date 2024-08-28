<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CourseRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use Pion\Laravel\ChunkUpload\Receiver\FileReceiver;
use Pion\Laravel\ChunkUpload\Exceptions\UploadMissingFileException;
use Pion\Laravel\ChunkUpload\Handler\HandlerFactory;
use Illuminate\Http\Request;

/**
 * Class CourseCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class CourseCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     *
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Course::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/course');
        CRUD::setEntityNameStrings('course', 'courses');
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::setFromDb(); // set columns from db columns.

        CRUD::column('price')->type('number');
    }

    /**
     * Define what happens when the Create operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(CourseRequest::class);
        CRUD::setFromDb(); // set fields from db columns.

        CRUD::field('CoursesDate')->type('date');
        CRUD::field('price')->type('number');
        /*
        $this->crud->addField([
            'name' => 'video_paths',
            'type' => 'multi_chunked_upload', // Custom field type
            'label' => 'Upload Videos',
            'hint' => 'Upload multiple video files for this course',
        ]);
        */
    }

    /**
     * Define what happens when the Update operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }


    public function uploadVideo(Request $request)
    {
        $receiver = new FileReceiver('video', $request, HandlerFactory::classFromRequest($request));
    
        if (!$receiver->isUploaded()) {
            throw new UploadMissingFileException();
        }
    
        $save = $receiver->receive();
    
        if ($save->isFinished()) {
            $file = $save->getFile();
            $filename = $file->getClientOriginalName();
            $path = storage_path('app/public/uploads');
    
            $file->move($path, $filename);
    
            return response()->json([
                'path' => 'uploads/' . $filename, // Use relative path
                'filename' => $filename,
                'done' => true,
            ]);
        }
    
        $handler = $save->handler();
        return response()->json([
            'done' => false,
            'percentage' => $handler->getPercentageDone(),
        ]);
    }

    // app/Http/Controllers/Admin/CourseCrudController.php

    /*
    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'video_paths' => 'nullable|json'
        ]);
    
        // Create the course using Backpack's CRUD method
        $this->crud->create($request->except(['_token', '_method', 'video_paths']));
    
        // Retrieve the newly created course
        $course = $this->crud->entry->id;
    
        // Get video paths from the request
        $videoPaths = json_decode($request->input('video_paths'), true);

        
    
        if ($videoPaths) {
            // Update the course with video paths
            $course->update([
                'video_paths' => $videoPaths
            ]);
        }
    
        // Return the response
      // Redirect to the course list or any other appropriate route
    }
    

public function update(Request $request, $id)
{
    // Update the course using Backpack's CRUD update method
    $response = $this->crud->update($id, $request->except(['_token', '_method', 'video_paths']));

    // Manually retrieve the course
    $course = \App\Models\Course::find($id);
    

    // Check if the course is not null before updating
    if ($course) {
        // Get video paths from the request
        $videoPaths = json_decode($request->input('video_paths'));

        if ($videoPaths) {
            // Update the course with video paths if available
            $course->update([
                'video_paths' => $videoPaths // Save video paths as JSON
            ]);
        }

        // Return the updated course data in the response
        return response()->json([
            'success' => true,
            'course' => $course
        ]);
    } else {
        // Handle the case where $course is null
        return response()->json(['error' => 'Course could not be found.'], 404);
    }
}

*/

   
    
}
